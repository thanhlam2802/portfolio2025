<div class="work-grid">
    <div class="work-id">01</div>
    <div class="work-steps">
        <div class="step-box"></div><div class="step-box"></div>
        <div class="step-box"></div><div class="step-box"></div>
    </div>
    <div class="work-info">
        <h3>Academy design</h3>
        <p>A full-featured furniture e-commerce platform built with React and Node.js.</p>
    </div>
    <div class="work-main-image"></div>
</div>

<style>
    .work-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-template-rows: repeat(6, 1fr); 
        gap: 20px;
        height: 100%;
    }
    .work-id { grid-column: 1 / span 1; font-size: 8vw; font-family: 'HelveticaNow Light'; }
    .work-steps { grid-column: 3 / span 1; display: flex; flex-direction: column; justify-content: space-between; }
    .step-box { width: 100%; height: 20%; background: black; }
    .work-info { grid-column: 5 / span 2; display: flex; flex-direction: column; justify-content: space-between; }
    .work-main-image { grid-column: 7 / span 6; grid-row: 1 / span 6; background: #000; }
</style>