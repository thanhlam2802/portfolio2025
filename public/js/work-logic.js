function loadProjectsData() {
    const leftArea = document.getElementById('left-scroll-area');
    if (!leftArea) return;
    leftArea.innerHTML = '';

    // Nạp HTML vào (giữ nguyên logic của bạn)
    projectsData.forEach((project) => {
        const projectGroup = document.createElement('div');
        projectGroup.className = 'project-group';
        projectGroup.dataset.id = project.id;
        projectGroup.dataset.title = project.title;
        projectGroup.dataset.desc = project.description;

        project.steps.forEach((step) => {
            const box = document.createElement('div');
            box.className = 'step-box';
            box.dataset.src = step.src;
            box.dataset.type = step.type;
            box.innerHTML = step.type === 'video' 
                ? `<video src="${step.src}" muted loop playsinline></video>` 
                : `<img src="${step.src}" alt="step">`;
            projectGroup.appendChild(box);
        });
        leftArea.appendChild(projectGroup);
    });

    // --- BƯỚC FIX QUAN TRỌNG ---
    const firstProject = projectsData[0];
    if (firstProject) {
        // 1. Hiển thị thông tin dự án 1 ngay lập tức
        document.getElementById('display-id').innerText = firstProject.id;
        document.getElementById('display-title').innerText = firstProject.title;
        document.getElementById('display-desc').innerText = firstProject.description;
        
        // 2. Hiển thị ảnh/video đầu tiên của dự án 1
        const firstStep = firstProject.steps[0];
        updateViewerMedia(firstStep.src, firstStep.type);
    }

    setTimeout(() => {
        initWorkScrollLogic();
        initWorkGlobalScroll(); 
        ScrollTrigger.refresh();
        // Đảm bảo thanh cuộn luôn nằm ở đỉnh khi bắt đầu
        leftArea.scrollTop = 0;
    }, 200);
}
function initWorkScrollLogic() {
    gsap.registerPlugin(ScrollTrigger);
    const scroller = document.getElementById('left-scroll-area');

    // Logic cho từng Step
    document.querySelectorAll('.step-box').forEach((step) => {
        ScrollTrigger.create({
            trigger: step,
            scroller: scroller,
            // Chỉnh start lên cao hơn (top 10%) để bắt ngay step 1
            start: "top 10%", 
            end: "bottom 90%",
            onEnter: () => {
                updateViewerMedia(step.dataset.src, step.dataset.type);
                step.classList.add('is-active');
            },
            onEnterBack: () => {
                updateViewerMedia(step.dataset.src, step.dataset.type);
                step.classList.add('is-active');
            },
            onLeave: () => step.classList.remove('is-active'),
            onLeaveBack: () => step.classList.remove('is-active')
        });
    });

    // Logic cho Project Text
    document.querySelectorAll('.project-group').forEach((group) => {
        ScrollTrigger.create({
            trigger: group,
            scroller: scroller,
            start: "top 40%", 
            end: "bottom 60%",
            onUpdate: (self) => {
                if (self.isActive) {
                    // Chỉ gọi animation nếu ID thực sự thay đổi
                    const idEl = document.getElementById('display-id');
                    if (idEl.innerText !== group.dataset.id) {
                        updateProjectText({
                            id: group.dataset.id,
                            title: group.dataset.title,
                            desc: group.dataset.desc
                        }, self.direction === 1 ? "down" : "up");
                    }
                }
            }
        });
    });
}
function initWorkGlobalScroll() {
    const workGrid = document.querySelector('.work-grid');
    const scrollArea = document.getElementById('left-scroll-area');

    if (!workGrid || !scrollArea) return;


    workGrid.addEventListener('wheel', (e) => {
      
        if (getComputedStyle(document.querySelector('.work-content')).display === 'none') return;
        scrollArea.scrollTop += e.deltaY;

        if (e.cancelable) e.preventDefault();
    }, { passive: false });
}
function updateViewerMedia(src, type) {
    const viewer = document.getElementById('right-viewer');
    if (!viewer) return;

    const currentMedia = viewer.querySelector('.viewer-layer:last-child');
    if (currentMedia && currentMedia.getAttribute('src') === src) return;

    const newMedia = document.createElement(type === 'video' ? 'video' : 'img');
    newMedia.src = src;
    newMedia.className = 'viewer-layer';

    if (type === 'video') {
        newMedia.muted = true;       // Bắt buộc để tự động phát
        newMedia.loop = true;        // Lặp lại liên tục
        newMedia.playsInline = true; // Chạy trực tiếp trên trang
        newMedia.setAttribute('muted', ''); 
        newMedia.setAttribute('playsinline', '');
        
        // Buộc trình duyệt nạp lại dữ liệu mới
        newMedia.load(); 
        
        // Xử lý lỗi play() để không hiện thông báo đỏ ở Console nữa
        newMedia.play().catch(error => {
            console.log("Vẫn chưa tìm thấy file hoặc định dạng sai:", error);
        });
    }

    viewer.appendChild(newMedia);
    gsap.to(newMedia, { opacity: 1, duration: 0.5 });

    // Xóa layer cũ để giải phóng bộ nhớ
    const layers = viewer.querySelectorAll('.viewer-layer');
    if (layers.length > 1) {
        gsap.to(layers[0], { 
            opacity: 0, 
            duration: 0.5, 
            onComplete: () => layers[0].remove() 
        });
    }
}

function updateProjectText(data, direction) {
    const idEl = document.getElementById('display-id');
    const titleEl = document.getElementById('display-title');
    const descEl = document.getElementById('display-desc');
    
    if (!idEl || !titleEl || !descEl) return;
    if (idEl.innerText === data.id) return;

    const moveOut = direction === "down" ? -30 : 30;
    const moveIn = direction === "down" ? 30 : -30;

    const tl = gsap.timeline();

    tl.to([idEl, titleEl, descEl], {
        y: moveOut,
        opacity: 0,
        duration: 0.3,
        stagger: 0.02,
        ease: "power2.in",
        onComplete: () => {
            idEl.innerText = data.id;
            titleEl.innerText = data.title;
            descEl.innerText = data.desc;
        }
    })
    .fromTo([idEl, titleEl, descEl], 
        { y: moveIn, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.4, stagger: 0.05, ease: "power2.out" }
    );
}