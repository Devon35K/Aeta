import './bootstrap';

// Carousel functionality
//step 1: get DOM
let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');

let carouselDom = document.querySelector('.carousel');
let SliderDom = carouselDom ? carouselDom.querySelector('.carousel .list') : null;
let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
let thumbnailItemsDom = thumbnailBorderDom ? thumbnailBorderDom.querySelectorAll('.item') : [];
let timeDom = document.querySelector('.carousel .time');

// Only run carousel code if elements exist
if (thumbnailBorderDom && thumbnailItemsDom.length > 0) {
    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
}

let timeRunning = 3000;
let timeAutoNext = 7000;

if (nextDom) {
    nextDom.onclick = function(){
        showSlider('next');
    }
}

if (prevDom) {
    prevDom.onclick = function(){
        showSlider('prev');
    }
}

let runTimeOut;
let runNextAuto;

if (nextDom) {
    runNextAuto = setTimeout(() => {
        nextDom.click();
    }, timeAutoNext);
}

function showSlider(type){
    if (!SliderDom || !thumbnailBorderDom) return;
    
    let SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
    let thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');
    
    if (SliderItemsDom.length === 0 || thumbnailItemsDom.length === 0) return;
    
    if(type === 'next'){
        SliderDom.appendChild(SliderItemsDom[0]);
        thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
        carouselDom.classList.add('next');
    } else {
        SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
        thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
        carouselDom.classList.add('prev');
    }
    
    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() => {
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runNextAuto);
    runNextAuto = setTimeout(() => {
        if (nextDom) nextDom.click();
    }, timeAutoNext);
}