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
                <img src="images/anh-cua-lam.jpg" alt="Thanh Lam">
            </div> 
            <h2 class="story-text">our<br>story</h2>
        </div>
    </div>
</div>

<style>
    .about-grid { display: grid; grid-template-columns: repeat(12, 1fr); grid-template-rows: repeat(12, 1fr); height: 100%; gap: 20px; }
    .about-item-dev { grid-column: 1 / span 6; grid-row: 7 / span 2; display: grid; grid-template-columns: repeat(6, 1fr); }
    .about-item-des { grid-column: 1 / span 6; grid-row: 10 / span 2; display: grid; grid-template-columns: repeat(6, 1fr); }
    .about-label { grid-column: span 3; font-size: 1.5rem; font-family: 'HelveticaNow Medium'; text-transform: lowercase; }
    .about-center { grid-column: 8 / span 4; grid-row: 6 / span 6; position: relative; }
    .profile-placeholder { width: 100%; height: 100%; transform: rotate(-8deg); overflow: hidden; background: #ccc; }
    .story-text { position: absolute; left: 40%; top: 50%; transform: translateY(-50%); font-size: 10vw; mix-blend-mode: difference; color: #fff; z-index: 5; }
</style>