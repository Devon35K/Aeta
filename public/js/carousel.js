// Get DOM elements
let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');

let carouselDom = document.querySelector('.carousel');
let SliderDom = carouselDom.querySelector('.carousel .list');
let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');
let timeDom = document.querySelector('.carousel .time');

// Move first thumbnail to the end
thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);

// Configuration
let timeRunning = 3000;
let timeAutoNext = 7000;
let runTimeOut;
let runNextAuto;

// Event listeners for next/prev buttons
nextDom.onclick = function(){
    showSlider('next');    
}

prevDom.onclick = function(){
    showSlider('prev');    
}

// Auto slide functionality
runNextAuto = setTimeout(() => {
    nextDom.click();
}, timeAutoNext);

// Main slider function
function showSlider(type){
    let SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
    let thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');
    
    if(type === 'next'){
        SliderDom.appendChild(SliderItemsDom[0]);
        thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
        carouselDom.classList.add('next');
    } else {
        SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
        thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
        carouselDom.classList.add('prev');
    }
    
    // Clear previous timeout and set new one for animation
    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() => {
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');
    }, timeRunning);

    // Reset auto slide timer
    clearTimeout(runNextAuto);
    runNextAuto = setTimeout(() => {
        nextDom.click();
    }, timeAutoNext);
}

// Add click events for thumbnails
document.querySelectorAll('.thumbnail .item').forEach((item, index) => {
    item.addEventListener('click', () => {
        // Get current active slide index
        const currentIndex = Array.from(SliderDom.querySelectorAll('.item')).indexOf(
            document.querySelector('.carousel .list .item:not(.hide)')
        );
        
        // Calculate the number of slides to move
        let diff = index - currentIndex;
        
        // If clicking on the current slide, do nothing
        if (diff === 0) return;
        
        // Determine direction and move
        if (diff > 0) {
            for (let i = 0; i < diff; i++) {
                setTimeout(() => showSlider('next'), i * 100);
            }
        } else {
            for (let i = 0; i < Math.abs(diff); i++) {
                setTimeout(() => showSlider('prev'), i * 100);
            }
        }
    });
});
