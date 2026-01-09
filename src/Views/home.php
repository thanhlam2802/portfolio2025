<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thành Lâm - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/favicon.svg" type="image/x-icon">
</head>

<body>

    <div class="transition-overlay"></div>
    
    <div class="loader-wrapper">
        <div class="loader-counter">00</div>
        <div class="loader-bg-top"></div>
        <div class="loader-bg-bottom"></div>
    </div>
    <div class="logo-container">
        <svg width="60" height="60" viewBox="0 0 1111 1111" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <g id="logo_shape">
                    <path d="M675.125 216.375V182.5L511.013 243.293C488.089 251.785 465.177 230.763 471.669 207.194L525.125 13.1252H495.125H435.125V224.125C435.125 257.262 461.988 284.125 495.125 284.125H675.125V216.375Z" fill="currentColor" />
                </g>
            </defs>
            <use xlink:href="#logo_shape" transform="translate(555.5 555.5) rotate(0) translate(-555.5 -555.5)" />
            <use xlink:href="#logo_shape" transform="translate(555.5 555.5) rotate(45) translate(-555.5 -555.5)" />
            <use xlink:href="#logo_shape" transform="translate(555.5 555.5) rotate(90) translate(-555.5 -555.5)" />
            <use xlink:href="#logo_shape" transform="translate(555.5 555.5) rotate(135) translate(-555.5 -555.5)" />
            <use xlink:href="#logo_shape" transform="translate(555.5 555.5) rotate(180) translate(-555.5 -555.5)" />
            <use xlink:href="#logo_shape" transform="translate(555.5 555.5) rotate(225) translate(-555.5 -555.5)" />
            <use xlink:href="#logo_shape" transform="translate(555.5 555.5) rotate(270) translate(-555.5 -555.5)" />
            <use xlink:href="#logo_shape" transform="translate(555.5 555.5) rotate(315) translate(-555.5 -555.5)" />
        </svg>
    </div>

    <div class="grid-container">

        <nav class="nav-links">
            <h1 class="nav-item home clicked" onclick="showPage('home', this)">home</h1>

            <a href="#" class="nav-item" onclick="showPage('work', this)">
                work<span class="count">5</span>
            </a>
            <a href="#" class="nav-item" onclick="showPage('about', this)">about</a>
            <a href="#" class="nav-item" onclick="showPage('contact', this)">contact</a>

        </nav>

        <div class="page-content home-content">
            <div class="description-left reveal-text ">web development,<br>Design</div>
            <div class="description-right reveal-text">Thanh Lam is a website designer and software developer from Ho Chi Minh City, currently working at The Winhouse.</div>
            <div class="home-footer-name">

                <svg width="1607" height="246" viewBox="0 0 1607 246" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="footer-letter" d="M1455.43 120.78C1455.43 113.111 1454.3 107.585 1452.05 104.202C1449.79 100.819 1445.96 99.1274 1440.55 99.1274C1435.13 99.1274 1431.3 100.819 1429.04 104.202C1426.79 107.585 1425.66 113.111 1425.66 120.78V241.56H1364.76V58.529H1423.63V80.8581H1424.31C1432.2 62.8144 1446.97 53.7925 1468.63 53.7925C1481.26 53.7925 1490.84 56.1607 1497.38 60.8972C1504.15 65.4082 1509.45 72.4001 1513.29 81.8731C1518.02 71.4979 1524.45 64.2804 1532.57 60.2206C1540.91 55.9352 1549.82 53.7925 1559.3 53.7925C1566.06 53.7925 1572.27 54.5819 1577.9 56.1607C1583.77 57.514 1588.84 60.1078 1593.13 63.9421C1597.41 67.7764 1600.8 72.8512 1603.28 79.1665C1605.76 85.4818 1607 93.6015 1607 103.526V241.56H1546.1V120.78C1546.1 113.111 1544.97 107.585 1542.72 104.202C1540.46 100.819 1536.63 99.1274 1531.22 99.1274C1525.8 99.1274 1521.97 100.819 1519.71 104.202C1517.46 107.585 1516.33 113.111 1516.33 120.78V241.56H1455.43V120.78Z" fill="black" />
                    <path class="footer-letter" d="M1263.6 205.36C1270.37 205.36 1275.22 202.879 1278.15 197.917C1281.08 192.955 1282.55 185.399 1282.55 175.249V153.258H1281.87C1280.07 155.739 1277.25 157.318 1273.42 157.995C1269.81 158.446 1265.75 159.686 1261.24 161.716C1256.5 163.972 1253.23 167.017 1251.42 170.851C1249.62 174.46 1248.72 179.309 1248.72 185.399C1248.72 191.488 1250.07 196.338 1252.78 199.946C1255.48 203.555 1259.09 205.36 1263.6 205.36ZM1286.27 241.56C1285.14 238.402 1284.35 235.132 1283.9 231.749C1283.45 228.365 1283 224.757 1282.55 220.922H1281.87C1278.49 229.042 1273.08 235.132 1265.63 239.192C1258.42 243.251 1250.07 245.281 1240.6 245.281C1231.35 245.281 1223.46 244.041 1216.92 241.56C1210.6 239.304 1205.41 235.808 1201.35 231.072C1197.29 226.335 1194.36 220.697 1192.56 214.156C1190.75 207.615 1189.85 200.398 1189.85 192.503C1189.85 183.933 1190.64 176.49 1192.22 170.174C1194.02 163.859 1196.84 158.446 1200.68 153.935C1204.51 149.198 1209.7 145.251 1216.24 142.094C1222.78 138.71 1230.9 135.891 1240.6 133.636L1264.62 127.884C1271.16 126.305 1275.78 124.05 1278.49 121.118C1281.2 117.96 1282.55 113.562 1282.55 107.923C1282.55 96.6459 1277.36 91.0072 1266.99 91.0072C1261.12 91.0072 1256.84 92.6989 1254.13 96.0821C1251.42 99.2397 1249.96 105.668 1249.73 115.366H1196.96C1196.96 102.059 1199.32 91.4583 1204.06 83.5642C1208.8 75.4445 1214.66 69.242 1221.65 64.9566C1228.64 60.4456 1236.2 57.5135 1244.32 56.1602C1252.44 54.5814 1260 53.792 1266.99 53.792C1277.59 53.792 1287.29 54.6942 1296.08 56.4985C1305.11 58.0774 1312.77 61.1223 1319.09 65.6332C1325.63 69.9186 1330.59 75.8956 1333.98 83.5642C1337.58 91.0073 1339.39 100.706 1339.39 112.66V201.976C1339.39 210.547 1339.73 218.103 1340.4 224.644C1341.08 231.185 1342.66 236.823 1345.14 241.56H1286.27Z" fill="black" />
                    <path class="footer-letter" d="M1043.39 0H1106.32V190.136H1183.8V241.561H1043.39V0Z" fill="black" />
                    <path class="footer-letter" d="M689.151 0H750.049V78.8287H750.726C755.913 69.1302 762.342 62.5893 770.01 59.2061C777.904 55.5974 785.573 53.793 793.016 53.793C799.331 53.793 805.308 54.5824 810.947 56.1612C816.811 57.7401 821.886 60.4466 826.171 64.2809C830.682 68.1152 834.178 73.3028 836.659 79.8437C839.366 86.159 840.719 94.0531 840.719 103.526V241.561H779.821V120.78C779.821 113.112 778.694 107.586 776.438 104.203C774.183 100.82 770.348 99.1279 764.935 99.1279C759.522 99.1279 755.688 100.82 753.432 104.203C751.177 107.586 750.049 113.112 750.049 120.78V241.561H689.151V0Z" fill="black" />
                    <path class="footer-letter" d="M513.383 58.529H572.251V80.8581H572.928C580.822 62.8144 595.595 53.7925 617.248 53.7925C624.014 53.7925 630.217 54.5819 635.855 56.1607C641.72 57.514 646.795 60.1078 651.08 63.9421C655.365 67.7764 658.749 72.8512 661.23 79.1665C663.711 85.4818 664.951 93.6015 664.951 103.526V241.56H604.053V120.78C604.053 113.111 602.926 107.585 600.67 104.202C598.415 100.819 594.58 99.1274 589.167 99.1274C583.754 99.1274 579.92 100.819 577.664 104.202C575.409 107.585 574.281 113.111 574.281 120.78V241.56H513.383V58.529Z" fill="black" />
                    <path class="footer-letter" d="M410.534 205.36C417.3 205.36 422.149 202.879 425.082 197.917C428.014 192.955 429.48 185.399 429.48 175.25V153.259H428.803C426.999 155.74 424.179 157.319 420.345 157.995C416.736 158.446 412.676 159.687 408.166 161.717C403.429 163.972 400.159 167.017 398.354 170.851C396.55 174.46 395.648 179.309 395.648 185.399C395.648 191.489 397.001 196.338 399.708 199.947C402.414 203.556 406.023 205.36 410.534 205.36ZM433.201 241.56C432.074 238.403 431.284 235.132 430.833 231.749C430.382 228.366 429.931 224.757 429.48 220.923H428.803C425.42 229.043 420.007 235.132 412.564 239.192C405.346 243.252 397.001 245.282 387.528 245.282C378.281 245.282 370.386 244.041 363.845 241.56C357.53 239.305 352.343 235.809 348.283 231.072C344.223 226.336 341.291 220.697 339.486 214.156C337.682 207.616 336.78 200.398 336.78 192.504C336.78 183.933 337.569 176.49 339.148 170.175C340.952 163.859 343.772 158.446 347.606 153.935C351.44 149.199 356.628 145.252 363.169 142.094C369.71 138.711 377.829 135.892 387.528 133.636L411.549 127.885C418.09 126.306 422.713 124.05 425.42 121.118C428.126 117.961 429.48 113.562 429.48 107.924C429.48 96.6464 424.292 91.0077 413.917 91.0077C408.053 91.0077 403.767 92.6993 401.061 96.0826C398.354 99.2402 396.888 105.668 396.663 115.367H343.885C343.885 102.06 346.253 91.4588 350.989 83.5647C355.726 75.445 361.59 69.2424 368.582 64.9571C375.574 60.4461 383.13 57.514 391.249 56.1607C399.369 54.5819 406.925 53.7925 413.917 53.7925C424.518 53.7925 434.216 54.6947 443.013 56.499C452.034 58.0779 459.703 61.1228 466.018 65.6337C472.559 69.9191 477.521 75.8961 480.904 83.5647C484.513 91.0077 486.318 100.706 486.318 112.66V201.977C486.318 210.548 486.656 218.104 487.333 224.644C488.009 231.185 489.588 236.824 492.069 241.56H433.201Z" fill="black" />
                    <path class="footer-letter" d="M168.455 0H229.352V78.8287H230.029C235.217 69.1302 241.645 62.5893 249.313 59.2061C257.208 55.5974 264.876 53.793 272.319 53.793C278.635 53.793 284.612 54.5824 290.25 56.1612C296.114 57.7401 301.189 60.4466 305.475 64.2809C309.986 68.1152 313.482 73.3028 315.963 79.8437C318.669 86.159 320.022 94.0531 320.022 103.526V241.561H259.125V120.78C259.125 113.112 257.997 107.586 255.742 104.203C253.486 100.82 249.652 99.1279 244.239 99.1279C238.825 99.1279 234.991 100.82 232.736 104.203C230.48 107.586 229.352 113.112 229.352 120.78V241.561H168.455V0Z" fill="black" />
                    <path class="footer-letter" d="M46.6883 53.4546H0V0H156.981V53.4546H109.616V241.561H46.6883V53.4546Z" fill="black" />
                </svg>

            </div>
        </div>

        <div class="page-content work-content">
            <div class="work-grid">
                <div class="left-content-wrapper">
                    <div class="work-id" id="display-id">01</div>
                    <div class="work-steps" id="left-scroll-area" data-lenis-prevent></div>
                    <div class="work-info">
                        <h3 id="display-title"></h3>
                        <p id="display-desc"></p>
                    </div>
                </div>

                <div id="right-viewer"></div>
            </div>
        </div>

        <div class="page-content about-content">
            <div class="about-grid">
                <div class="about-item-dev">
                    <p class="about-label">development</p>
                    <p>Tôi là một Lập trình viên Web đang làm việc và không ngừng nâng cao chuyên môn để xây dựng những website tối ưu.</p>
                </div>

                <div class="about-item-des">
                    <p class="about-label">design</p>
                    <p>Kết hợp tư duy lập trình chặt chẽ với thẩm mỹ thiết kế để kiến tạo những giao diện Website vừa đẹp mắt.</p>
                </div>

                <div class="about-center">
                    <div class="image-wrapper">
                        <div class="profile-placeholder">
                            <img src="/images/anh-cua-lam.jpg" alt="Thanh Lam">
                        </div>
                        <h2 class="story-text">our<br>story</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content contact-content">
            <div class="contact-hero">
                <p>My passion is creating visually appealing, aesthetically pleasing websites that can make a strong impression and leave a lasting mark on users' experiences from their very first visit.</p>
            </div>
            <div class="contact-details">
                <span>Võ lê thanh lâm</span>
                <span>baolethanhlam2001@gmail.com</span>
                <span>0337017391</span>
                <span>Hồ Chí Minh, Việt Nam</span>
                <span>2025</span>
            </div>
        </div>


    </div>
</body>






<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/lenis@1.1.18/dist/lenis.css">

<script src="js/data-projects.js"></script>
<script src="js/work-logic.js"></script>

<script>
    const lenis = new Lenis();


    lenis.on('scroll', ScrollTrigger.update);


    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });


    gsap.ticker.lagSmoothing(0);

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);


    const setupManualReveal = (selectors, timeline, startTime = "+=0") => {
        const allSpans = [];
        const targetSelectors = Array.isArray(selectors) ? selectors : [selectors];

        targetSelectors.forEach(selector => {
            const elements = document.querySelectorAll(selector);
            elements.forEach(el => {

                if (el.querySelector('svg') || el.tagName.toLowerCase() === 'svg') {
                    timeline.to(el, {
                        y: 0,
                        opacity: 1,
                        duration: 0.5,
                        ease: "power4.out"
                    }, startTime);
                    return;
                }

                const lines = el.innerHTML.split(/<br\s*\/?>/i);
                el.innerHTML = '';
                el.style.visibility = 'visible';
                el.style.opacity = '1';

                lines.forEach(lineText => {
                    const lineDiv = document.createElement('div');
                    lineDiv.className = 'split-line';

                    const words = lineText.trim().split(/\s+/);
                    words.forEach((word, index) => {
                        const wordSpan = document.createElement('span');
                        wordSpan.className = 'split-word';
                        wordSpan.innerHTML = `<span class="split-inner" style="display:inline-block; opacity:0; transform:translateY(100%);">${word}${index === words.length - 1 ? '' : '&nbsp;'}</span>`;
                        lineDiv.appendChild(wordSpan);
                        allSpans.push(wordSpan.querySelector('.split-inner'));
                    });
                    el.appendChild(lineDiv);
                });
            });
        });

        if (allSpans.length > 0) {
            timeline.to(allSpans, {
                y: "0%",
                opacity: 1,
                duration: 1.8,
                stagger: 0.04,
                ease: "power4.out"
            }, startTime);
        }
    };

    window.addEventListener("load", () => {
        const counter = document.querySelector(".loader-counter");
        const bgTop = document.querySelector(".loader-bg-top");
        const bgBottom = document.querySelector(".loader-bg-bottom");
        const loaderWrapper = document.querySelector(".loader-wrapper");

        if (!counter || !bgTop || !bgBottom) return;

        // 1. Hàm điều khiển con số chạy theo chuột
        const moveCounter = (e) => {
            gsap.to(counter, {
                x: e.clientX,
                y: e.clientY,
                duration: 0.1,
                ease: "power2.out"
            });
        };

        window.addEventListener("mousemove", moveCounter);

        const tl = gsap.timeline();
        let countObj = {
            val: 0
        };
        gsap.set(".footer-letter", {
            y: 300,
            opacity: 0
        });
        // 2. Chạy số
        // Tìm đoạn này trong script của bạn:
        tl.to(countObj, {
            val: 100,
            duration: 4,
            ease: "power4.inOut",
            onUpdate: () => {
                const currentVal = Math.ceil(countObj.val);
                counter.textContent = currentVal.toString().padStart(2, '0');


                const newScale = 0.25 + (currentVal / 150);

                gsap.to(counter, {
                    scale: newScale,
                    duration: 0.1,
                    force3D: true,
                    rotation: 0.01
                });
            }
        });

        // Sửa đoạn ẩn counter đạt 100:
        tl.to(counter, {
            opacity: 0,
            scale: 4, // Scale vừa phải để không bị vỡ ảnh ảo
            duration: 0.5,
            ease: "power2.in"
        });


        // 4. Các hiệu ứng mở màn hình (giữ nguyên logic cũ của bạn)
        tl.to([bgTop, bgBottom], {
            scaleX: 0.4,
            scaleY: 0.05,
            duration: 0.8,
            ease: "expo.out"
        }, "-=0.2");
        tl.to({}, {
            duration: 0.5
        });
        tl.to([bgTop, bgBottom], {
            scaleX: 1,
            scaleY: 1,
            duration: 1,
            ease: "power4.inOut"
        });

        tl.add(() => {
            gsap.set([".grid-container", ".logo-container"], {
                visibility: "visible"
            });
        }, "open");

        tl.to(bgTop, {
            yPercent: -100,
            duration: 1.2,
            ease: "expo.inOut"
        }, "open");
        tl.to(bgBottom, {
            yPercent: 100,
            duration: 1.2,
            ease: "expo.inOut"
        }, "open");

        // tl.to(".nav-links", { y: 0, opacity: 1, duration: 1, ease: "expo.inOut" }, "open+=0.1");


        gsap.set(".nav-item", {
            y: 100,
            opacity: 0,
            rotation: 30,
            transformOrigin: "50% 50%"
        });


        tl.to(".nav-item", {
            y: 0,
            rotation: 0,
            opacity: 1,
            duration: 1,
            ease: "power4.out",
            stagger: 0.1,
        }, "open+=0.1");

        setupManualReveal([".description-left", ".description-right"], tl, "open+=0.2");


        gsap.set(".footer-letter", {
            y: 150,
            opacity: 0,
            rotation: 30,
            transformOrigin: "50% 50%"
        });


        tl.to(".footer-letter", {
            y: 0,
            rotation: 0,
            opacity: 1,
            duration: 0.8,
            ease: "power4.out",
            stagger: {
                each: 0.1,
                from: "end"
            }
        }, "open+=0.4");


        tl.to(".loader-wrapper", {
            opacity: 0,
            duration: 0.3,
            onComplete: () => {
                loaderWrapper.style.display = "none";
                document.body.style.overflow = "auto";
                document.body.style.cursor = "default";
                window.removeEventListener("mousemove", moveCounter);
            }
        });
    });

    const SIZE_DEFAULT = "calc(18vw / 4.5)";
    const SIZE_ACTIVE = "15vw";
    
    function showPage(pageName, element) {
    const navItems = document.querySelectorAll('.nav-item');

    // 1. Hiệu ứng Menu (Giữ nguyên logic của bạn)
    navItems.forEach(item => {
        if (item === element) {
            item.classList.add('clicked');
            gsap.to(item, {
                fontSize: SIZE_ACTIVE,
                letterSpacing: "-0.05em",
                duration: 0.5,
                ease: "expo.out",
                overwrite: true
            });
        } else {
            item.classList.remove('clicked');
            gsap.to(item, {
                fontSize: SIZE_DEFAULT,
                letterSpacing: "0em",
                duration: 0.5,
                ease: "expo.out",
                overwrite: true
            });
        }
    });

    const targetPage = document.querySelector(`.${pageName}-content`);
    const allPages = document.querySelectorAll('.page-content');

    // Fade Out trang hiện tại
    gsap.to(allPages, {
        opacity: 0,
        y: 15,
        duration: 0.4,
        ease: "power2.in",
        onComplete: () => {
            document.body.classList.remove('active-page', 'show-work', 'show-contact', 'show-about');
            allPages.forEach(p => p.style.display = "none");

            // Tạo timeline để quản lý các hiệu ứng reveal
            const tl = gsap.timeline();
            tl.add("open");

            if (pageName === 'home') {
                // PHẦN HOME: GIỮ NGUYÊN TUYỆT ĐỐI THEO CODE CỦA BẠN
                targetPage.style.display = "grid";
                gsap.set(targetPage, { opacity: 1, y: 0 });

                const descLeft = document.querySelector(".description-left");
                const descRight = document.querySelector(".description-right");

                if (descLeft) descLeft.innerHTML = "web development,<br>Design";
                if (descRight) descRight.innerHTML = "Thanh Lam is a website designer and software developer from Ho Chi Minh City, currently working at The Winhouse.";

                setupManualReveal([".description-left", ".description-right"], tl, "open+=0.2");

                gsap.set(".footer-letter", {
                    y: 150,
                    opacity: 0,
                    rotation: 30,
                    transformOrigin: "50% 50%"
                });

                tl.to(".footer-letter", {
                    y: 0,
                    rotation: 0,
                    opacity: 1,
                    duration: 0.6,
                    ease: "power4.out",
                    stagger: { each: 0.1, from: "end" }
                }, "open+=0.4");

            } else if (pageName === 'contact') {
                // PHẦN CONTACT: THÊM MỚI HIỆU ỨNG REVEAL
                document.body.classList.add('active-page', 'show-contact');
                targetPage.style.display = "grid";
                gsap.set(targetPage, { opacity: 1, y: 0 });

                // 1. Khôi phục nội dung gốc cho các thẻ span trong contact-details và hero
                const contactHero = document.querySelector(".contact-hero p");
                const contactDetails = document.querySelectorAll(".contact-details span");
                
                if (contactHero) {
                    contactHero.innerHTML = "My passion is creating visually appealing, aesthetically pleasing websites that can make a strong impression and leave a lasting mark on users' experiences from their very first visit.";
                }

                // 2. Chạy hiệu ứng reveal cho cả hero paragraph và các span thông tin
                setupManualReveal([".contact-hero p", ".contact-details span"], tl, "open+=0.2");

            } else {
                // CÁC TRANG KHÁC (WORK, ABOUT)
                document.body.classList.add('active-page', 'show-' + pageName);
                targetPage.style.display = (pageName === 'about') ? "block" : "block";

                gsap.fromTo(targetPage, { opacity: 0, y: 15 }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    ease: "power2.out",
                    onStart: () => {
                        if (pageName === 'work') loadProjectsData();
                    }
                });
            }

            setTimeout(() => ScrollTrigger.refresh(), 100);
        }
    });
}

    // 3. Khởi tạo mặc định khi load trang
    window.addEventListener('DOMContentLoaded', () => {
        const homeNav = document.querySelector('.nav-item.home');
        if (homeNav) {
            gsap.set(homeNav, {
                fontSize: SIZE_ACTIVE,
                letterSpacing: "-0.05em"
            });
        }
    });

    // Debug scroll
    const scrollArea = document.getElementById('left-scroll-area');
    if (scrollArea) {
        scrollArea.addEventListener('scroll', function(e) {
            console.log('ScrollTop:', this.scrollTop);
            console.log('ScrollHeight:', this.scrollHeight);
            console.log('ClientHeight:', this.clientHeight);
        });
    }
</script>


</html>