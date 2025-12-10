<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the rich cultural heritage of the Aeta people, the indigenous inhabitants of the Philippines.">
    <meta name="keywords" content="Aeta, indigenous, Philippines, culture, heritage, Luzon">
    <title> Aeta Heritage - Preserving Indigenous Culture</title>
    <link rel="icon" href="{{ asset('images/aetalogo.png') }}" type="image/png">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="{{ asset('css/carousel.css') }}" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    
    <!-- Preload hero images -->
    <link rel="preload" as="image" href="{{ asset('images/aeta1.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('images/aeta2.webp') }}">
    <link rel="preload" as="image" href="{{ asset('images/aeta3.webp') }}">
    <link rel="preload" as="image" href="{{ asset('images/aeta4.webp') }}">
    
     <script src="{{ asset('js/app.js') }}" defer></script>

     <style>
/* ---------------------------------------------------
   RESET
--------------------------------------------------- */
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(180deg, #f5ebe0 0%, #ede8dd 50%, #e8dfd5 100%);
    color: #1f2937;
}
.nav-glass {
    background: rgba(55, 65, 81, 0.75); /* slate-700 tint */
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.mobile-menu-glass {
    background: rgba(55, 65, 81, 0.8);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
}
.map-popup-img {
    width: 140px;
    height: auto;
    border-radius: 10px;
    margin-top: 6px;
    box-shadow: 0 6px 14px rgba(0,0,0,0.15);
}

/* ---------------------------------------------------
   MAIN CAROUSEL WRAPPER
--------------------------------------------------- */
.carousel {
    width: 100%;
    height: 100vh;
    position: relative;
    overflow: hidden;
    color: #fff;
}

/* ---------------------------------------------------
   SLIDES
--------------------------------------------------- */
.carousel .list {
    width: 100%;
    height: 100%;
    position: relative;
}

.carousel .list .item {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 0.6s ease;
}

.carousel .list .item.active {
    opacity: 1;
    z-index: 2;
}

/* Background image */
.carousel .list .item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* ---------------------------------------------------
   TEXT POP-UP ANIMATION (KEEPING AS YOU REQUESTED)
--------------------------------------------------- */
.carousel .content {
    position: absolute;
    top: 50%;
    left: 7%;
    padding: 2.5rem;
    width: min(600px, 90%);

    /* Remove glass background */
    background: transparent;
    backdrop-filter: none;
    border: none;
    box-shadow: none;

    /* Keep text animation */
    transform: translateY(-45%) translateX(-20px);
    opacity: 0;
    transition: all .6s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Keep active slide visible */
.carousel .list .item.active .content {
    opacity: 1;
    transform: translateY(-50%) translateX(0);
}

.carousel .buttons {
    display: flex;
    gap: 1.5rem;
    margin-top: 2.5rem;
}

.carousel .buttons button {
    padding: 0.8rem 2rem;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    font-weight: 600;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.carousel .buttons button:first-child {
    background: linear-gradient(45deg, #f97316, #f59e0b);
    color: white;
    border: 2px solid #f97316;
    position: relative;
    overflow: hidden;
    z-index: 1;
    box-shadow: 0 0 15px rgba(249, 115, 22, 0.4);
}

.carousel .buttons button:first-child::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: 0.5s;
    z-index: -1;
}

.carousel .buttons button:first-child:hover {
    background: linear-gradient(45deg, #f97316, #f59e0b);
    color: white;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 10px 25px rgba(249, 115, 22, 0.5);
}

.carousel .buttons button:first-child:hover::before {
    left: 100%;
}

.carousel .buttons button:first-child:active {
    transform: translateY(1px) scale(0.98);
    box-shadow: 0 5px 15px rgba(249, 115, 22, 0.4);
}

.carousel .buttons button:last-child {
    background: transparent;
    border: 2px solid #fff;
    color: white;
    position: relative;
    z-index: 1;
}

.carousel .buttons button:last-child::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    z-index: -1;
    transition: width 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.carousel .buttons button:last-child:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-3px);
    box-shadow: 0 7px 20px rgba(255, 255, 255, 0.15);
}

.carousel .buttons button:last-child:hover::before {
    width: 100%;
}

.carousel .buttons button:active {
    transform: translateY(1px);
    transition: transform 0.1s;
}

/* ---------------------------------------------------
   CONTROLS (NEXT / PREV)
--------------------------------------------------- */
.arrows {
    position: absolute;
    top: 50%;
    right: 2%;
    transform: translateY(-50%);
    display: flex;
    gap: 12px;
    z-index: 10;
}

.arrows button {
    width: 45px;
    height: 45px;
    border: none;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(4px);
    cursor: pointer;
    font-size: 20px;
    color: #fff;
    transition: 0.3s;
}

.arrows button:hover {
    background: rgba(255,255,255,0.45);
}

/* ---------------------------------------------------
   THUMBNAILS
--------------------------------------------------- */
.thumbnail {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 12px;
    z-index: 8;
}

.thumbnail .item {
    width: 90px;
    height: 60px;
    overflow: hidden;
    opacity: 0.6;
    transition: 0.3s;
    cursor: pointer;
    border-radius: 6px;
}

.thumbnail .item.active {
    opacity: 1;
    transform: scale(1.05);
}

.thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* ---------------------------------------------------
   PROGRESS BAR (INDICATOR TO NEXT SLIDE)
--------------------------------------------------- */
.progress {
    position: absolute;
    top: 0;
    left: 0;
    height: 4px;
    width: 100%;
    background: rgba(255,255,255,0.2);
    z-index: 20;
}

.progress .bar {
    height: 100%;
    width: 0%;
    background: #f97316; /* Orange */
    transition: width linear;
}

/* Responsive */
@media (max-width: 768px) {
    .content { font-size: 14px; max-width: 300px; }
    .arrows button { width: 38px; height: 38px; }
    .thumbnail .item { width: 65px; height: 45px; }
}

/* Scroll reveal */
.reveal {
    opacity: 0;
    transform: translateY(40px) scale(0.98);
    filter: blur(2px);
    transition: opacity 0.85s ease, transform 0.85s ease, filter 0.85s ease;
    transition-delay: var(--reveal-delay, 0s);
}
.reveal.in-view {
    opacity: 1;
    transform: translateY(0) scale(1);
    filter: blur(0);
}

.reveal.from-left { transform: translateX(-42px) scale(0.98); }
.reveal.from-right { transform: translateX(42px) scale(0.98); }
.reveal.zoom { transform: scale(0.94); }

.reveal.in-view.from-left,
.reveal.in-view.from-right,
.reveal.in-view.zoom {
    transform: translateX(0) scale(1);
}

/* About Aeta dynamic cards */
@keyframes riseIn {
    from { opacity: 0; transform: translateY(24px) scale(0.98); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}
.about-card {
    animation: riseIn 0.9s ease forwards;
    animation-delay: var(--card-delay, 0s);
    opacity: 0;
}
.about-intro p {
    animation: fadeInUp 0.9s ease forwards;
    opacity: 0;
}

/* Parallax */
.parallax {
    will-change: transform;
    transform: translateY(var(--parallax-offset, 0px));
    transition: transform 0.2s linear;
}

/* References Modal */
.modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(17, 24, 39, 0.55);
    backdrop-filter: blur(6px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 80;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.25s ease;
}
.modal-overlay.open {
    opacity: 1;
    pointer-events: auto;
}
.modal-card {
    width: min(720px, 92vw);
    max-height: 80vh;
    overflow-y: auto;
    background: linear-gradient(180deg, #f5ebe0 0%, #ede8dd 60%, #e8dfd5 100%);
    color: #1f2937;
    border-radius: 18px;
    padding: 24px 26px;
    box-shadow: 0 24px 60px rgba(0,0,0,0.25);
    border: 1px solid rgba(45, 80, 22, 0.12);
    transform: translateY(12px) scale(0.98);
    opacity: 0.92;
    transition: transform 0.25s ease, opacity 0.25s ease, box-shadow 0.25s ease;
}
.modal-overlay.open .modal-card { transform: translateY(0) scale(1); opacity: 1; box-shadow: 0 28px 70px rgba(0,0,0,0.3); }
.modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 12px;
}
.modal-header h3 {
    font-size: 1.25rem;
    font-weight: 700;
}
.modal-close {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    border: 1px solid rgba(31, 41, 55, 0.15);
    background: rgba(255,255,255,0.7);
    color: #1f2937;
    cursor: pointer;
    transition: background 0.2s ease, transform 0.2s ease;
}
.modal-close:hover { background: rgba(255,255,255,0.9); transform: translateY(-1px); }
.modal-close:active { transform: translateY(0); }
.reference-list {
    list-style: disc;
    padding-left: 1.1rem;
    display: grid;
    gap: 10px;
    color: #374151;
}
.reference-list li strong {
    color: #2d5016;
}
.reference-list li {
    opacity: 0;
    transform: translateY(6px);
    animation: fade-up 0.28s ease forwards;
}
.reference-list li:nth-child(1) { animation-delay: 0.02s; }
.reference-list li:nth-child(2) { animation-delay: 0.06s; }
.reference-list li:nth-child(3) { animation-delay: 0.1s; }
.reference-list li:nth-child(4) { animation-delay: 0.14s; }
.reference-list li:nth-child(5) { animation-delay: 0.18s; }
.reference-list li:nth-child(6) { animation-delay: 0.22s; }
.reference-list li:nth-child(7) { animation-delay: 0.26s; }
.reference-list li:nth-child(8) { animation-delay: 0.3s; }
.reference-list li:nth-child(9) { animation-delay: 0.34s; }
.reference-list li:nth-child(10) { animation-delay: 0.38s; }

@keyframes fade-up {
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

</head>








<body class="bg-gray-50">





















    <!-- Top Navigation -->
    <nav class="fixed top-0 left-0 right-0 text-white shadow-lg z-50 transition-all duration-300 nav-glass" id="main-nav">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">
                <a href="#home" class="text-2xl font-bold text-white hover:text-amber-200 transition-colors"><i class="fas fa-leaf text-amber-300 mr-2"></i>Aeta Heritage</a>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#home" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800 transition-colors duration-200">Home</a>
                    <a href="#culture" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800 transition-colors duration-200">Culture</a>
                    <a href="#history" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800 transition-colors duration-200">History</a>
                    <a href="#geography" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800 transition-colors duration-200">Geography</a>
                    <a href="#gallery" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800 transition-colors duration-200">Gallery</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-amber-200 hover:text-white hover:bg-amber-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-amber-900 focus:ring-white transition-colors" 
                            aria-expanded="false" id="mobile-menu-button" aria-haspopup="true">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state -->
        <div class="md:hidden hidden transition-all duration-300 ease-in-out" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 mobile-menu-glass rounded-b-xl border-t border-white/10">
                <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-amber-700 transition-colors duration-200">Home</a>
                <a href="#culture" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-amber-700 transition-colors duration-200">Culture</a>
                <a href="#history" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-amber-700 transition-colors duration-200">History</a>
                <a href="#geography" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-amber-700 transition-colors duration-200">Geography</a>
                <a href="#gallery" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-amber-700 transition-colors duration-200">Gallery</a>
            </div>
        </div>
    </nav>

    <!-- Main content wrapper -->
    <div>







<!-- carousel -->
<div class="carousel" style="margin-top: 0; position: relative; overflow: hidden;">
    <!-- Firefly Animation -->
    <div class="fireflies">
        <?php for($i = 0; $i < 15; $i++): ?>
        <div class="firefly"></div>
        <?php endfor; ?>
    </div>
    <!-- list item -->
    <div class="list">
        <div class="item">
            <img src="{{ asset('images/aeta1.jpg') }}" style="filter: brightness(0.4);">
            <div class="content">
                <div class="author">AETA PEOPLE</div>
                <div class="title">INDIGENOUS FILIPINOS</div>
                <div class="topic">CULTURE</div>
                <div class="des">
                    The Aeta are among the earliest inhabitants of the Philippines, believed to have arrived over 30,000 years ago via land bridges. These indigenous people are characterized by their dark skin, curly hair, and short stature. They are among the most skilled hunters and gatherers in the country, with an intimate knowledge of the forest ecosystem.
                </div>
                <div class="buttons">
                    <button class="group relative overflow-hidden">
    <span class="relative z-10 flex items-center justify-center">
        <i class="fas fa-book-open mr-2 group-hover:animate-bounce"></i>
        <span class="font-bold">LEARN MORE</span>
    </span>
    <span class="absolute inset-0 bg-gradient-to-r from-orange-500 to-amber-400 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
</button>
<button class="group">
    <i class="fas fa-hands-helping mr-2 group-hover:rotate-12 transition-transform"></i>SUPPORT US
</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('images/aeta2.webp') }}">
            <div class="content">
                <div class="author">AETA PEOPLE</div>
                <div class="title">TRADITIONAL LIVELIHOOD</div>
                <div class="topic">SUSTENANCE</div>
                <div class="des">
                    Aeta communities traditionally practice hunting, fishing, and gathering. Men hunt wild animals using bows and arrows, while women gather root crops, fruits, and medicinal plants. Some groups practice swidden farming (kaingin). They are renowned for their expertise in herbal medicine and their ability to utilize hundreds of forest plants for food, medicine, and shelter.
                </div>
                <div class="buttons">
                    <button class="group relative overflow-hidden">
    <span class="relative z-10 flex items-center justify-center">
        <i class="fas fa-book-open mr-2 group-hover:animate-bounce"></i>
        <span class="font-bold">LEARN MORE</span>
    </span>
    <span class="absolute inset-0 bg-gradient-to-r from-orange-500 to-amber-400 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
</button>
<button class="group">
    <i class="fas fa-hands-helping mr-2 group-hover:rotate-12 transition-transform"></i>SUPPORT US
</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('images/aeta3.webp') }}" style="filter: brightness(0.4);">
            <div class="content">
                <div class="author">AETA PEOPLE</div>
                <div class="title">CULTURAL HERITAGE</div>
                <div class="topic">TRADITIONS</div>
                <div class="des">
                    Aeta culture is rich with oral traditions, including epic stories, myths, and legends passed down through generations. They have unique musical instruments like the bamboo zither and nose flute. Traditional dances often imitate animal movements or depict hunting scenes. Their spiritual beliefs center around nature spirits (anito), and they have traditional healers (herbolarios) who perform rituals for healing and protection.
                </div>
                <div class="buttons">
                    <button class="group relative overflow-hidden">
    <span class="relative z-10 flex items-center justify-center">
        <i class="fas fa-book-open mr-2 group-hover:animate-bounce"></i>
        <span class="font-bold">LEARN MORE</span>
    </span>
    <span class="absolute inset-0 bg-gradient-to-r from-orange-500 to-amber-400 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
</button>
<button class="group">
    <i class="fas fa-hands-helping mr-2 group-hover:rotate-12 transition-transform"></i>SUPPORT US
</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('images/aeta4.jpg') }}">
            <div class="content">
                <div class="author">AETA PEOPLE</div>
                <div class="title">MODERN CHALLENGES</div>
                <div class="topic">RESILIENCE</div>
                <div class="des">
                    Today, the Aeta face numerous challenges including displacement from ancestral lands due to deforestation, mining, and commercial agriculture. Many have been forced to adapt to settled farming or low-wage labor. Despite these pressures, Aeta communities continue to fight for land rights, cultural preservation, and access to education and healthcare while maintaining their distinct identity and traditional knowledge.
                </div>
                <div class="buttons">
                    <button class="group relative overflow-hidden">
    <span class="relative z-10 flex items-center justify-center">
        <i class="fas fa-book-open mr-2 group-hover:animate-bounce"></i>
        <span class="font-bold">LEARN MORE</span>
    </span>
    <span class="absolute inset-0 bg-gradient-to-r from-orange-500 to-amber-400 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
</button>
<button class="group">
    <i class="fas fa-hands-helping mr-2 group-hover:rotate-12 transition-transform"></i>SUPPORT US
</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Progress Indicator -->
    <div class="progress-container">
        <div class="progress-bar"></div>
    </div>
    
    <!-- Navigation Arrows -->
    <div class="arrows">
        <button id="prev" aria-label="Previous slide">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6"/>
            </svg>
        </button>
        <button id="next" aria-label="Next slide">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 18l6-6-6-6"/>
            </svg>
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.carousel');
    const items = carousel.querySelectorAll('.item');
    const progressBar = carousel.querySelector('.progress-bar');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    let currentIndex = 0;
    const slideDuration = 8000; // 8 seconds
    let timer;

    function showSlide(index) {
        currentIndex = (index + items.length) % items.length;
        items.forEach((item, i) => {
            if(i === currentIndex){
                item.classList.add('active');
                item.style.opacity = '1';
                item.style.zIndex = '1';
            } else {
                item.classList.remove('active');
                item.style.opacity = '0';
                item.style.zIndex = '0';
            }
        });
        // Reset and animate progress bar
        progressBar.style.transition = 'none';
        progressBar.style.width = '0%';
        void progressBar.offsetWidth; // trigger reflow
        progressBar.style.transition = `width ${slideDuration}ms linear`;
        progressBar.style.width = '100%';
        restartTimer();
    }

    function nextSlide() { showSlide(currentIndex + 1); }
    function prevSlide() { showSlide(currentIndex - 1); }

    function restartTimer() {
        clearTimeout(timer);
        timer = setTimeout(nextSlide, slideDuration);
    }

    nextBtn.addEventListener('click', () => { nextSlide(); });
    prevBtn.addEventListener('click', () => { prevSlide(); });

    carousel.addEventListener('mouseenter', () => { clearTimeout(timer); progressBar.style.transitionPlayState = 'paused'; });
    carousel.addEventListener('mouseleave', () => { restartTimer(); progressBar.style.transitionPlayState = 'running'; });

    // Touch support
    let touchStartX = 0;
    let touchEndX = 0;
    carousel.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; clearTimeout(timer); }, {passive:true});
    carousel.addEventListener('touchend', e => { touchEndX = e.changedTouches[0].screenX; handleSwipe(); restartTimer(); }, {passive:true});
    function handleSwipe(){
        if(Math.abs(touchStartX - touchEndX) > 50){
            if(touchStartX > touchEndX) nextSlide(); else prevSlide();
        }
    }

    // Start
    showSlide(currentIndex);
});
</script>


    

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center bg-cover bg-center overflow-hidden" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/aeta-hero.jpg') }}');">
        <!-- Wave Animation -->
        <div class="wave">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <!-- Rainbow Animation Background -->
        <div class="rainbow-container absolute inset-0 overflow-hidden">
            <div class="rainbow"></div>
            <div class="rainbow"></div>
            <div class="rainbow"></div>
            <div class="rainbow"></div>
            <div class="rainbow"></div>
        </div>

        <!-- Tribal Pattern Overlay -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\" viewBox=\"0 0 100 100\"><path d=\"M20,20 L80,20 L80,80 L20,80 Z\" fill=\"none\" stroke=\"%23ffffff\" stroke-width=\"2\" stroke-dasharray=\"5,5\"/></svg></div>

        <div class="text-center text-white px-4 relative z-10">
         
            
            <h1 class="text-5xl font-bold mb-6 transform transition-all duration-700 hover:scale-105">
                <span class="inline-block">The Aeta People</span>
            </h1>
            
       
            
            <p class="text-xl md:text-2xl mb-8 font-medium tracking-wider animate-fade-in-up" style="text-shadow: 0 2px 4px rgba(0,0,0,0.5);">
                Preserving the Rich Cultural Heritage of the Indigenous People of Luzon
            </p>
            
            <a href="#culture" class="group relative inline-block">
                <div class="absolute -inset-1 bg-gradient-to-r from-amber-600 to-amber-800 rounded-full opacity-75 group-hover:opacity-100 transition-all duration-300 blur-sm group-hover:blur"></div>
                <span class="relative z-10 bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-all duration-300 inline-flex items-center group-hover:px-10 group-hover:py-4">
                    <span class="mr-2">Explore Culture</span>
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
            </a>
        </div>

        
    </section>

    <style>
    /* Firefly Animation */
    .fireflies {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 10;
    }

    .firefly {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 0.4vw;
        height: 0.4vw;
        margin: -0.2vw 0 0 9.8vw;
        animation: ease 200s alternate infinite;
        pointer-events: none;
        z-index: 10;
    }

    .firefly::before,
    .firefly::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        transform-origin: -10vw;
    }

    .firefly::before {
        background: black;
        opacity: 0.4;
        animation: drift ease alternate infinite;
    }

    .firefly::after {
        background: white;
        opacity: 0;
        box-shadow: 0 0 0vw 0vw yellow;
        animation: drift ease alternate infinite, flash ease infinite;
    }

    /* Generate unique animations for each firefly */
    <?php for($i = 1; $i <= 15; $i++): ?>
    <?php 
        $steps = rand(16, 28);
        $rotationSpeed = rand(8, 18) . 's';
    ?>
    .firefly:nth-child(<?php echo $i; ?>) {
        animation-name: move<?php echo $i; ?>;
    }
    .firefly:nth-child(<?php echo $i; ?>)::before {
        animation-duration: <?php echo $rotationSpeed; ?>;
    }
    .firefly:nth-child(<?php echo $i; ?>)::after {
        animation-duration: <?php echo $rotationSpeed; ?>, <?php echo rand(5, 11) . 's'; ?>;
        animation-delay: 0ms, <?php echo (rand(500, 8500)) . 'ms'; ?>;
    }
    @keyframes move<?php echo $i; ?> {
        <?php for($step = 0; $step <= 100; $step += (100/$steps)): ?>
        <?php $pos = $step * (100/$steps); ?>
        <?php echo $pos; ?>% {
            transform: translateX(<?php echo rand(-50, 50); ?>vw) 
                       translateY(<?php echo rand(-50, 50); ?>vh) 
                       scale(<?php echo (rand(25, 100)/100 + 0.25); ?>);
        }
        <?php endfor; ?>
    }
    <?php endfor; ?>

    @keyframes drift {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @keyframes flash {
        0%, 30%, 100% {
            opacity: 0;
            box-shadow: 0 0 0vw 0vw yellow;
        }
        5% {
            opacity: 1;
            box-shadow: 0 0 2vw 0.4vw yellow;
        }
    }

    /* Rainbow Animation */
    .rainbow-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        z-index: 0;
    }

    .rainbow {
        height: 100%;
        width: 0;
        top: 0;
        position: absolute;
        transform: rotate(10deg);
        transform-origin: top right;
        opacity: 0.1;
        animation: rainbow-slide 25s linear infinite;
    }

    .rainbow:nth-child(1) {
        animation-delay: 0s;
        box-shadow: -130px 0 80px 40px white, 
                    -50px 0 50px 25px rgba(232, 121, 249, 0.5),
                    0 0 50px 25px rgba(96, 165, 250, 0.5), 
                    50px 0 50px 25px rgba(94, 234, 212, 0.5),
                    130px 0 80px 40px white;
    }

    .rainbow:nth-child(2) {
        animation-delay: -5s;
        box-shadow: -130px 0 80px 40px white, 
                    -50px 0 50px 25px rgba(96, 165, 250, 0.5),
                    0 0 50px 25px rgba(94, 234, 212, 0.5), 
                    50px 0 50px 25px rgba(232, 121, 249, 0.5),
                    130px 0 80px 40px white;
    }

    .rainbow:nth-child(3) {
        animation-delay: -10s;
        box-shadow: -130px 0 80px 40px white, 
                    -50px 0 50px 25px rgba(94, 234, 212, 0.5),
                    0 0 50px 25px rgba(232, 121, 249, 0.5), 
                    50px 0 50px 25px rgba(96, 165, 250, 0.5),
                    130px 0 80px 40px white;
    }

    .rainbow:nth-child(4) {
        animation-delay: -15s;
        box-shadow: -130px 0 80px 40px white, 
                    -50px 0 50px 25px rgba(232, 121, 249, 0.5),
                    0 0 50px 25px rgba(96, 165, 250, 0.5), 
                    50px 0 50px 25px rgba(94, 234, 212, 0.5),
                    130px 0 80px 40px white;
    }

    .rainbow:nth-child(5) {
        animation-delay: -20s;
        box-shadow: -130px 0 80px 40px white, 
                    -50px 0 50px 25px rgba(94, 234, 212, 0.5),
                    0 0 50px 25px rgba(96, 165, 250, 0.5), 
                    50px 0 50px 25px rgba(232, 121, 249, 0.5),
                    130px 0 80px 40px white;
    }

    @keyframes rainbow-slide {
        from {
            right: -25vw;
        }
        to {
            right: 125vw;
        }
    }

    /* Text Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 1s ease-out;
    }

    /* Tribal divider animation */
    .tribal-divider {
        transition: transform 0.3s ease;
    }

    .tribal-divider:hover {
        transform: scaleX(1.2) rotate(0deg);
    }

    /* Button hover effect */
    @keyframes pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(217, 119, 6, 0.7);
        }
        70% {
            transform: scale(1.05);
            box-shadow: 0 0 0 10px rgba(217, 119, 6, 0);
        }
        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(217, 119, 6, 0);
        }
    }

    .group:hover .group-hover\:animate-pulse {
        animation: pulse 1.5s infinite;
    }
    
    /* Wave Animation */
    .wave {
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        background: transparent;
        z-index: 1;
        overflow: hidden;
    }
    
    .wave span {
        position: absolute;
        width: 325vh;
        height: 325vh;
        top: 0;
        left: 50%;
        transform: translate(-50%, -75%);
        background: #000;
    }
    
    .wave span:nth-child(1) {
        border-radius: 45%;
        background: rgba(20, 20, 20, 0.6);
        animation: animate 15s linear infinite;
    }
    
    .wave span:nth-child(2) {
        border-radius: 40%;
        background: rgba(20, 20, 20, 0.4);
        animation: animate 25s linear infinite;
    }
    
    .wave span:nth-child(3) {
        border-radius: 42.5%;
        background: rgba(20, 20, 20, 0.2);
        animation: animate 20s linear infinite;
    }
    
    @keyframes animate {
        0% {
            transform: translate(-50%, -75%) rotate(0deg);
        }
        100% {
            transform: translate(-50%, -75%) rotate(360deg);
        }
    }
    </style>
    
    <!-- Introduction: Who are the Aeta? -->
    <section id="about-aeta" class="py-20 bg-gradient-to-br from-[#f5ebe0] via-[#ede8dd] to-[#e8dfd5] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto space-y-10">
                <div class="text-center">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-2 tracking-tight">Who are the Aeta?</h2>
                </div>

                  <!-- Text Intro (placed below cards) -->
                <div class="text-center max-w-4xl mx-auto space-y-2" id="about-aeta-intro"></div>

                <!-- Key Aspects Cards (dynamic) -->
                <div id="about-aeta-cards" class="grid sm:grid-cols-2 gap-6"></div>

              
            </div>
        </div>
    </section>


    <!-- Culture Section -->
    <section id="culture" class="py-24 bg-gradient-to-br from-[#f5ebe0] via-[#ede8dd] to-[#e8dfd5] relative overflow-hidden">
        <!-- Vanta.js Birds Background -->
        <div id="vanta-culture-bg" class="absolute inset-0"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <!-- Enhanced Section Header -->
            <div class="text-center mb-20">
                <h2 class="text-6xl font-extrabold text-gray-800 mb-4 tracking-tight">Aeta Culture & Traditions</h2>
                <div class="flex items-center justify-center gap-2">
                    <div class="w-16 h-1 bg-gradient-to-r from-transparent via-[#2d5016] to-transparent rounded-full"></div>
                    <div class="w-2 h-2 bg-[#2d5016] rounded-full"></div>
                    <div class="w-16 h-1 bg-gradient-to-r from-transparent via-[#2d5016] to-transparent rounded-full"></div>
                </div>
            </div>

            <!-- Enhanced Culture Cards Grid -->
            <div class="grid md:grid-cols-3 gap-8 lg:gap-10">
                <!-- Community Life Card -->
                <div class="group relative">
                    <!-- Card Glow Effect -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#2d5016] to-[#3d6b1f] rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-500"></div>
                    
                    <div class="relative bg-white rounded-3xl shadow-2xl hover:shadow-green-200 transform hover:-translate-y-3 transition-all duration-500 overflow-hidden border border-gray-100">
                        <!-- Decorative Top Element -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-[#2d5016] via-[#3d6b1f] to-[#2d5016]"></div>
                        
                        <!-- Floating Background Pattern -->
                        <div class="absolute top-0 right-0 w-40 h-40 bg-green-50 rounded-full -mr-20 -mt-20 opacity-50"></div>
                        
                        <div class="relative">
                            <div class="h-48 w-full overflow-hidden">
                                <img src="{{ asset('images/aeta2.webp') }}" alt="Aeta community life" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="relative p-8 lg:p-10">
                            <h3 class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-[#2d5016] transition-colors duration-300">Community Life</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">The Aeta live in small, kin-based groups with strong communal bonds. Their social structure is egalitarian, with decisions often made through group consensus.</p>
                            
                            <!-- Enhanced Learn More Button -->
                            <button class="group/btn relative inline-flex items-center gap-2 text-[#2d5016] font-semibold overflow-hidden">
                                <span class="relative z-10 group-hover/btn:text-white transition-colors duration-300">Explore More</span>
                                <i class="fas fa-arrow-right relative z-10 transform group-hover:translate-x-2 group-hover/btn:text-white transition-all duration-300"></i>
                                <div class="absolute inset-0 bg-gradient-to-r from-[#2d5016] to-[#3d6b1f] transform scale-x-0 group-hover/btn:scale-x-100 origin-left transition-transform duration-300 rounded-lg -z-0"></div>
                            </button>
                        </div>

                        <!-- Bottom Decorative Line -->
                        <div class="h-1 bg-gradient-to-r from-transparent via-[#2d5016] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>

                <!-- Traditional Cuisine Card -->
                <div class="group relative">
                    <!-- Card Glow Effect -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#b85450] to-[#c86460] rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-500"></div>
                    
                    <div class="relative bg-white rounded-3xl shadow-2xl hover:shadow-lime-200 transform hover:-translate-y-3 transition-all duration-500 overflow-hidden border border-gray-100">
                        <!-- Decorative Top Element -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-[#b4d555] via-[#c4e565] to-[#b4d555]"></div>
                        
                        <!-- Floating Background Pattern -->
                        <div class="absolute top-0 right-0 w-40 h-40 bg-lime-50 rounded-full -mr-20 -mt-20 opacity-50"></div>
                        
                        <div class="relative">
                            <div class="h-48 w-full overflow-hidden">
                                <img src="{{ asset('images/aeta4.webp') }}" alt="Aeta traditional cuisine" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="relative p-8 lg:p-10">
                            <h3 class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-[#7a9f35] transition-colors duration-300">Traditional Cuisine</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">Aeta cuisine is based on foraged foods, including wild yams, fruits, and game. They are known for their knowledge of edible plants and traditional cooking methods.</p>
                            
                            <!-- Enhanced Learn More Button -->
                            <button class="group/btn relative inline-flex items-center gap-2 text-[#7a9f35] font-semibold overflow-hidden">
                                <span class="relative z-10 group-hover/btn:text-white transition-colors duration-300">Explore More</span>
                                <i class="fas fa-arrow-right relative z-10 transform group-hover:translate-x-2 group-hover/btn:text-white transition-all duration-300"></i>
                                <div class="absolute inset-0 bg-gradient-to-r from-[#b4d555] to-[#a3c545] transform scale-x-0 group-hover/btn:scale-x-100 origin-left transition-transform duration-300 rounded-lg -z-0"></div>
                            </button>
                        </div>

                        <!-- Bottom Decorative Line -->
                        <div class="h-1 bg-gradient-to-r from-transparent via-[#b4d555] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>

                <!-- Music & Dance Card -->
                <div class="group relative">
                    <!-- Card Glow Effect -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#b85450] to-[#c86460] rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition-all duration-500"></div>
                    
                    <div class="relative bg-white rounded-3xl shadow-2xl hover:shadow-red-200 transform hover:-translate-y-3 transition-all duration-500 overflow-hidden border border-gray-100">
                        <!-- Decorative Top Element -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-[#b85450] via-[#c86460] to-[#b85450]"></div>
                        
                        <!-- Floating Background Pattern -->
                        <div class="absolute top-0 right-0 w-40 h-40 bg-red-50 rounded-full -mr-20 -mt-20 opacity-50"></div>
                        
                        <div class="relative">
                            <div class="h-48 w-full overflow-hidden">
                                <img src="{{ asset('images/aeta2.webp') }}" alt="Aeta music and dance" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="relative p-8 lg:p-10">
                            <h3 class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-[#b85450] transition-colors duration-300">Music & Dance</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">Traditional Aeta music features bamboo instruments and rhythmic chants. Their dances often depict daily activities and are performed during celebrations.</p>
                            
                            <!-- Enhanced Learn More Button -->
                            <button class="group/btn relative inline-flex items-center gap-2 text-[#b85450] font-semibold overflow-hidden">
                                <span class="relative z-10 group-hover/btn:text-white transition-colors duration-300">Explore More</span>
                                <i class="fas fa-arrow-right relative z-10 transform group-hover:translate-x-2 group-hover/btn:text-white transition-all duration-300"></i>
                                <div class="absolute inset-0 bg-gradient-to-r from-[#b85450] to-[#a84844] transform scale-x-0 group-hover/btn:scale-x-100 origin-left transition-transform duration-300 rounded-lg -z-0"></div>
                            </button>
                        </div>

                        <!-- Bottom Decorative Line -->
                        <div class="h-1 bg-gradient-to-r from-transparent via-[#b85450] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
            </div>

           
        </div>
    </section>

    <!-- History Section -->
    <section id="history" class="py-20 bg-gradient-to-br from-[#f5ebe0] via-[#ede8dd] to-[#e8dfd5] relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#b4d555] rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-[#2d5016] rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-gray-500 mb-4">Historical Journey</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-gray-600 to-gray-400 mx-auto rounded-full"></div>
            </div>
            <div class="max-w-6xl mx-auto">
                <div class="relative">
                    <div class="border-l-4 border-gradient-to-b from-neutral-500 to-slate-500 absolute h-full left-1/2 transform -translate-x-1/2 bg-gradient-to-b from-neutral-500 to-slate-500"></div>
                    
                    <div class="mb-16 relative">
                        <div class="bg-gray-300 bg-opacity-95 backdrop-blur-sm p-8 rounded-2xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 relative w-5/6 lg:w-1/2 mx-auto lg:mx-0 lg:mr-auto border border-gray-400">
                            <div class="absolute -left-4 top-8 w-8 h-8 bg-gradient-to-r from-neutral-500 to-slate-500 rounded-full shadow-lg animate-pulse"></div>
                            <div class="absolute -left-8 top-8 w-16 h-16 bg-gradient-to-r from-neutral-400 to-slate-400 rounded-full opacity-20 animate-ping"></div>
                            <h3 class="text-2xl font-bold mb-4 text-gray-800">Pre-Colonial Era</h3>
                            <p class="text-gray-700 leading-relaxed">The Aeta are considered one of the earliest inhabitants of the Philippines, with their presence dating back over 20,000 years. They are believed to be descendants of the first humans to migrate to the Philippine archipelago.</p>
                            <div class="mt-4 text-sm text-gray-600 font-semibold">Over 20,000 years of heritage</div>
                        </div>
                    </div>
                    
                    <div class="mb-16 relative">
                        <div class="bg-gray-700 bg-opacity-95 backdrop-blur-sm p-8 rounded-2xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 relative w-5/6 lg:w-1/2 ml-auto border border-gray-800">
                            <div class="absolute -right-4 top-8 w-8 h-8 bg-gradient-to-r from-slate-500 to-gray-500 rounded-full shadow-lg animate-pulse"></div>
                            <div class="absolute -right-8 top-8 w-16 h-16 bg-gradient-to-r from-slate-400 to-gray-400 rounded-full opacity-20 animate-ping"></div>
                            <h3 class="text-2xl font-bold mb-4 text-white">Spanish Colonial Period</h3>
                            <p class="text-gray-200 leading-relaxed">During Spanish colonization, many Aeta retreated to the mountains to avoid subjugation. They maintained much of their traditional way of life while some groups interacted with lowland communities.</p>
                            <div class="mt-4 text-sm text-gray-300 font-semibold">300+ years of resistance</div>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <div class="bg-gray-600 bg-opacity-95 backdrop-blur-sm p-8 rounded-2xl shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 relative w-5/6 lg:w-1/2 mx-auto lg:mx-0 lg:mr-auto border border-gray-700">
                            <div class="absolute -left-4 top-8 w-8 h-8 bg-gradient-to-r from-gray-500 to-zinc-500 rounded-full shadow-lg animate-pulse"></div>
                            <div class="absolute -left-8 top-8 w-16 h-16 bg-gradient-to-r from-gray-400 to-zinc-400 rounded-full opacity-20 animate-ping"></div>
                            <h3 class="text-2xl font-bold mb-4 text-white">Modern Times</h3>
                            <p class="text-gray-200 leading-relaxed">Today, the Aeta face challenges from modernization, loss of ancestral lands, and cultural assimilation. However, there are ongoing efforts to preserve their heritage and secure their rights as indigenous people.</p>
                            <div class="mt-4 text-sm text-gray-300 font-semibold">Cultural preservation movement</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Geography Section -->
    <section id="geography" class="py-20 bg-gradient-to-br from-[#f5ebe0] via-[#ede8dd] to-[#e8dfd5] relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-40 h-40 bg-stone-300 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 bg-slate-300 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-neutral-300 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-gray-500 mb-4">Geographical Distribution</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-gray-600 to-gray-400 mx-auto rounded-full"></div>
            </div>
            <div class="bg-white bg-opacity-95 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-stone-200 relative overflow-hidden">
                <div class="absolute inset-0 pointer-events-none">
                    <div class="absolute -left-10 -top-10 w-40 h-40 bg-amber-200/30 rounded-full blur-3xl animate-pulse"></div>
                    <div class="absolute -right-6 bottom-4 w-32 h-32 bg-stone-300/30 rounded-full blur-3xl animate-pulse"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8 items-center relative z-10">
                    <div class="space-y-6">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-3xl font-bold text-stone-900 flex items-center gap-3">
                                    <i class="fas fa-mountain text-amber-700"></i>
                                    Traditional Territories
                                </h3>
                                <p class="text-gray-700 mt-2 leading-relaxed text-lg">Tap a region to zoom the map, view its outline, and see a photo.</p>
                            </div>
                            <button type="button" id="reset-map" class="px-3 py-2 text-sm bg-stone-700 text-white rounded-lg hover:bg-stone-800 transition-colors shadow">
                                <i class="fas fa-expand mr-1"></i>
                                Full View
                            </button>
                        </div>

                        <div class="grid grid-cols-1 gap-3">
                            <button type="button" class="flex items-center justify-between p-3 text-left bg-stone-50 rounded-lg border border-stone-200 hover:bg-stone-100 transition-all focus:ring-2 focus:ring-stone-400 focus:outline-none location-btn group" data-name="Zambales Mountains" data-lat="15.5" data-lng="120.1466" data-zoom="9">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-stone-600 mr-3 group-hover:scale-110 transition-transform"></i>
                                    <span class="font-semibold text-stone-900">Zambales Mountains</span>
                                </div>
                            </button>
                            <button type="button" class="flex items-center justify-between p-3 text-left bg-slate-50 rounded-lg border border-slate-200 hover:bg-slate-100 transition-all focus:ring-2 focus:ring-slate-400 focus:outline-none location-btn group" data-name="Sierra Madre Mountain Range" data-lat="16.4" data-lng="121.4" data-zoom="8.5">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-slate-600 mr-3 group-hover:scale-110 transition-transform"></i>
                                    <span class="font-semibold text-slate-900">Sierra Madre Mountain Range</span>
                                </div>
                            </button>
                            <button type="button" class="flex items-center justify-between p-3 text-left bg-neutral-50 rounded-lg border border-neutral-200 hover:bg-neutral-100 transition-all focus:ring-2 focus:ring-neutral-400 focus:outline-none location-btn group" data-name="Bataan Peninsula" data-lat="14.68" data-lng="120.33" data-zoom="10">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-neutral-600 mr-3 group-hover:scale-110 transition-transform"></i>
                                    <span class="font-semibold text-neutral-900">Bataan Peninsula</span>
                                </div>
                            </button>
                            <button type="button" class="flex items-center justify-between p-3 text-left bg-stone-50 rounded-lg border border-stone-200 hover:bg-stone-100 transition-all focus:ring-2 focus:ring-stone-400 focus:outline-none location-btn group" data-name="Pampanga &amp; Tarlac" data-lat="15.35" data-lng="120.65" data-zoom="9.5">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-stone-600 mr-3 group-hover:scale-110 transition-transform"></i>
                                    <span class="font-semibold text-stone-900">Pampanga &amp; Tarlac</span>
                                </div>
                            </button>
                            <button type="button" class="flex items-center justify-between p-3 text-left bg-slate-50 rounded-lg border border-slate-200 hover:bg-slate-100 transition-all focus:ring-2 focus:ring-slate-400 focus:outline-none location-btn group" data-name="Bicol Region" data-lat="13.3" data-lng="123.5" data-zoom="8.5">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-slate-600 mr-3 group-hover:scale-110 transition-transform"></i>
                                    <span class="font-semibold text-slate-900">Bicol Region</span>
                                </div>
                            </button>
                        </div>

                        <div class="bg-gradient-to-r from-stone-100 to-slate-100 p-4 rounded-xl border border-stone-200 shadow-inner">
                            <p class="text-gray-700 leading-relaxed flex items-start">
                                <i class="fas fa-leaf text-stone-600 mr-3 mt-1"></i>
                                <span>Their traditional territories are characterized by dense forests, mountains, and river systems that have sustained their way of life for millennia.</span>
                            </p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-stone-700 font-semibold text-lg">Interactive Map</p>
                                <p class="text-stone-600 text-sm">Aeta territories in Luzon</p>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-stone-500">
                                <span class="w-3 h-3 rounded-full bg-amber-500 inline-block"></span> Outline
                            </div>
                        </div>
                        <div id="map" class="h-96 bg-gradient-to-br from-stone-100 to-slate-100 rounded-xl relative overflow-hidden border border-slate-200 shadow-lg ring-1 ring-stone-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 bg-gradient-to-br from-[#f5ebe0] via-[#ede8dd] to-[#e8dfd5] relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-1/4 w-48 h-48 bg-slate-300 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-40 h-40 bg-neutral-300 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 w-32 h-32 bg-stone-300 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-gray-500 mb-4">Gallery</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-gray-600 to-gray-400 mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group bg-white bg-opacity-95 backdrop-blur-sm rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-slate-200">
                    <div class="relative overflow-hidden h-64">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-100 to-neutral-100 animate-pulse"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-image text-6xl text-slate-400"></i>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3 text-slate-900 group-hover:text-slate-700 transition-colors">Traditional Dance</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Aeta performing traditional dance during a cultural festival</p>
                        <div class="mt-4 flex items-center text-slate-600 font-semibold text-sm cursor-pointer group-hover:text-slate-700">
                            <span>View Details</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                </div>
                <div class="group bg-white bg-opacity-95 backdrop-blur-sm rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-neutral-200">
                    <div class="relative overflow-hidden h-64">
                        <div class="absolute inset-0 bg-gradient-to-br from-neutral-100 to-stone-100 animate-pulse"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-image text-6xl text-neutral-400"></i>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3 text-neutral-900 group-hover:text-neutral-700 transition-colors">Bamboo Crafts</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Traditional bamboo weaving techniques</p>
                        <div class="mt-4 flex items-center text-neutral-600 font-semibold text-sm cursor-pointer group-hover:text-neutral-700">
                            <span>View Details</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                </div>
                <div class="group bg-white bg-opacity-95 backdrop-blur-sm rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-stone-200">
                    <div class="relative overflow-hidden h-64">
                        <div class="absolute inset-0 bg-gradient-to-br from-stone-100 to-slate-100 animate-pulse"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-image text-6xl text-stone-400"></i>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3 text-stone-900 group-hover:text-stone-700 transition-colors">Family Life</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Aeta family in their traditional home</p>
                        <div class="mt-4 flex items-center text-stone-600 font-semibold text-sm cursor-pointer group-hover:text-stone-700">
                            <span>View Details</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <button class="px-8 py-3 bg-gradient-to-r from-gray-700 via-gray-600 to-gray-500 text-white font-semibold rounded-full hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <i class="fas fa-images mr-2"></i>
                    View Full Gallery
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#2d5016] text-black py-12">
        <div class="container mx-auto px-6">
            <div class="border-t border-gray-400 mb-8"></div>
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-black">Aeta Heritage</h3>
                    <p class="text-black">Dedicated to preserving and promoting the rich cultural heritage of the Aeta people.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-black">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-black hover:text-gray-800 transition">Home</a></li>
                        <li><a href="#culture" class="text-black hover:text-gray-800 transition">Culture</a></li>
                        <li><a href="#history" class="text-black hover:text-gray-800 transition">History</a></li>
                        <li><a href="#geography" class="text-black hover:text-gray-800 transition">Geography</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-black">References</h4>
                    <p class="text-black text-sm mb-4">Explore our research sources and further reading.</p>
                    <button id="open-references" class="px-4 py-2 bg-gradient-to-r from-gray-700 via-gray-600 to-gray-500 text-white border border-black/10 rounded-full text-sm font-semibold hover:shadow-lg hover:-translate-y-0.5 transition">
                        View References
                    </button>
                </div>
            </div>
            <div class="border-t border-gray-400 mt-8 pt-8 text-center text-black text-sm">
                <p>&copy; <?php echo date('Y'); ?> Aeta Heritage. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- References Modal -->
    <div id="references-modal" class="modal-overlay" role="dialog" aria-modal="true" aria-labelledby="references-title">
        <div class="modal-card">
            <div class="modal-header">
                <h3 id="references-title">References</h3>
                <button id="close-references" class="modal-close" aria-label="Close references">&times;</button>
            </div>
            <ul class="reference-list text-sm leading-relaxed">
                <li><strong>National Commission on Indigenous Peoples (NCIP)</strong></li>
                <li><strong>Philippine Indigenous Peoples Links</strong></li>
                <li><strong>Anthropological Studies on Aeta Communities</strong></li>
                <li><strong>National Museum of the Philippines</strong></li>
                <li>Balilla, V., McHenry, J. A., &amp; McHenry, M. (2013). Indigenous Aeta Magbukún Self-Identity, Sociopolitical Structures, and Self-Determination at the Local Level in the Philippines.</li>
                <li>Dizon, M., Luzon, F., &amp; Poblete, K. (2021). Analysis on household income to the indigenous Aetas of Pampanga Philippines.</li>
                <li>Yang, E., Kim, J., Biag, A., &amp; Mangulabnan, J. (2020). A study on health and hygiene needs, strategies, and well-being of an Aeta indigenous community in the Philippines through photovoice methods.</li>
                <li>Parre&ntilde;o, L. (2018). History, Geographical Distribution and Surviving Indigenous Practices of the Aetas in Guimaras Island.</li>
                <li>Torres, R. (2016). Aeta Indigenous Women Healers in the Philippines: Lessons and Implications.</li>
                <li>Torres, R. (2017). Transforming indigenous curriculum in the Philippines through indigenous women’s knowledge and practices: A case study on Aeta women healers.</li>
            </ul>
        </div>
    </div>

    <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
        <!-- Main JS -->
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const referencesModal = document.getElementById('references-modal');
            const openReferences = document.getElementById('open-references');
            const closeReferences = document.getElementById('close-references');
            const aboutIntroEl = document.getElementById('about-aeta-intro');
            const aboutCardsEl = document.getElementById('about-aeta-cards');
            const mapContainer = document.getElementById('map');
            const locationButtons = document.querySelectorAll('.location-btn');
            const resetMapBtn = document.getElementById('reset-map');
            const defaultMapView = { center: [121.0, 15.5], zoom: 6.5 };
            let mapInstance = null;
            let activeMarker = null;
            const aboutData = {
                intro: [
                    'The Aeta are among the earliest known inhabitants of the Philippine archipelago. Traditionally living in the mountainous and forested regions of Luzon, they have maintained a deep connection with the land through hunting, gathering, and small-scale farming.',
                    'This highlights key aspects of Aeta life, from clothing and appearance to beliefs, spirituality, and language.'
                ],
                cards: [
                    {
                        title: 'Clothing & Appearance',
                        copy: 'Aeta clothing traditionally reflects practicality and climate, often made from simple, locally available materials. Many Aeta maintain distinct hairstyles and adornments that express identity and community belonging.',
                        image: "{{ asset('images/aeta1.jpg') }}",
                        alt: 'Aeta clothing and appearance'
                    },
                    {
                        title: 'Culture & Traditions',
                        copy: 'Music, dance, storytelling, and ritual mark important moments in Aeta life. Many traditions are passed down orally and are closely tied to the forests, rivers, and mountains they call home.',
                        image: "{{ asset('images/aeta2.webp') }}",
                        alt: 'Aeta culture and traditions'
                    },
                    {
                        title: 'Housing & Settlements',
                        copy: 'Traditional Aeta settlements are often small, kin-based communities. Houses are typically simple, raised structures using bamboo, wood, and thatch, adapted to their environment and mobile way of life.',
                        image: "{{ asset('images/aeta3.webp') }}",
                        alt: 'Aeta housing and settlements'
                    },
                    {
                        title: 'Beliefs & Spirituality',
                        copy: 'Many Aeta communities hold animist beliefs, honoring spirits of the land, forests, and ancestors. Healing, rituals, and everyday practices reflect a spiritual worldview rooted in respect for nature.',
                        image: "{{ asset('images/aeta4.webp') }}",
                        alt: 'Aeta beliefs and spirituality'
                    },
                    {
                        title: 'Language',
                        copy: 'The Aeta speak several distinct languages and dialects, some of which are endangered. These languages carry unique stories, ecological knowledge, and cultural concepts that are vital to their identity and heritage.',
                        image: "{{ asset('images/aeta1.jpg') }}",
                        alt: 'Aeta language and heritage',
                        wide: true
                    }
                ]
            };

            // MapLibre map setup with outlines and photos
            const mapLocationData = {
                'Zambales Mountains': {
                    center: [120.1466, 15.5],
                    zoom: 9,
                    polygon: [
                        [119.88, 15.0], [120.05, 14.95], [120.28, 15.25], [120.35, 15.55],
                        [120.26, 15.95], [120.05, 16.05], [119.88, 15.8], [119.82, 15.5],
                        [119.88, 15.0]
                    ],
                    img: "{{ asset('images/aeta1.jpg') }}",
                    blurb: 'Aeta communities in the Zambales range with forested foothills.'
                },
                'Sierra Madre Mountain Range': {
                    center: [121.4, 16.4],
                    zoom: 8.5,
                    polygon: [
                        [121.2, 17.4], [122.1, 17.0], [122.4, 16.1], [122.1, 15.2],
                        [122.05, 14.6], [121.6, 14.3], [121.1, 14.6], [120.95, 15.3],
                        [121.05, 16.0], [121.2, 17.4]
                    ],
                    img: "{{ asset('images/aeta2.webp') }}",
                    blurb: 'Spanning Luzon’s eastern spine with dense forests and rivers.'
                },
                'Bataan Peninsula': {
                    center: [120.33, 14.68],
                    zoom: 10,
                    polygon: [
                        [120.22, 14.47], [120.45, 14.40], [120.62, 14.55], [120.62, 14.77],
                        [120.52, 14.95], [120.35, 14.95], [120.20, 14.80], [120.22, 14.47]
                    ],
                    img: "{{ asset('images/aeta3.webp') }}",
                    blurb: 'Peninsula landscapes overlooking West Philippine Sea.'
                },
                'Pampanga & Tarlac': {
                    center: [120.65, 15.35],
                    zoom: 9.5,
                    polygon: [
                        [120.33, 15.01], [120.63, 14.95], [120.88, 15.05], [121.05, 15.36],
                        [120.95, 15.67], [120.70, 15.85], [120.42, 15.78], [120.28, 15.50],
                        [120.33, 15.01]
                    ],
                    img: "{{ asset('images/aeta4.jpg') }}",
                    blurb: 'Heartland plains with nearby uplands and river systems.'
                },
                'Bicol Region': {
                    center: [123.5, 13.3],
                    zoom: 8.5,
                    polygon: [
                        [122.6, 12.7], [123.3, 12.5], [124.2, 12.9], [124.3, 13.4],
                        [124.1, 13.9], [123.4, 14.1], [122.8, 13.9], [122.6, 13.2],
                        [122.6, 12.7]
                    ],
                    img: "{{ asset('images/aeta2.webp') }}",
                    blurb: 'Southern Luzon range and volcanic slopes.'
                }
            };

            const setActiveMarker = (lng, lat, name, img, blurb) => {
                if (!mapInstance) return;
                if (activeMarker) activeMarker.remove();
                activeMarker = new maplibregl.Marker({ color: '#b45309' })
                    .setLngLat([lng, lat])
                    .setPopup(new maplibregl.Popup({ offset: 12 }).setHTML(`
                        <div class="text-sm">
                            <strong>${name}</strong>
                            ${blurb ? `<p class="mt-1 text-gray-700">${blurb}</p>` : ''}
                            ${img ? `<img class="map-popup-img" src="${img}" alt="${name}">` : ''}
                        </div>
                    `))
                    .addTo(mapInstance);
                activeMarker.togglePopup();
            };

            const ensureAreaLayer = () => {
                if (!mapInstance.getSource('aeta-areas')) {
                    mapInstance.addSource('aeta-areas', {
                        type: 'geojson',
                        data: { type: 'FeatureCollection', features: [] }
                    });
                    mapInstance.addLayer({
                        id: 'aeta-areas-fill',
                        type: 'fill',
                        source: 'aeta-areas',
                        paint: {
                            'fill-color': '#f97316',
                            'fill-opacity': 0
                        }
                    });
                    mapInstance.addLayer({
                        id: 'aeta-areas-line',
                        type: 'line',
                        source: 'aeta-areas',
                        paint: {
                            'line-color': '#ea580c',
                            'line-width': 3.2,
                            'line-blur': 0.4
                        }
                    });
                }
            };

            const updateAreaOutline = (polygonCoords) => {
                if (!mapInstance) return;
                ensureAreaLayer();
                const source = mapInstance.getSource('aeta-areas');
                source.setData({
                    type: 'FeatureCollection',
                    features: polygonCoords ? [
                        {
                            type: 'Feature',
                            geometry: {
                                type: 'Polygon',
                                coordinates: [polygonCoords]
                            }
                        }
                    ] : []
                });
            };

            const initMap = () => {
                mapInstance = new maplibregl.Map({
                    container: mapContainer,
                    style: 'https://tiles.openfreemap.org/styles/liberty',
                    center: defaultMapView.center,
                    zoom: defaultMapView.zoom,
                });
                mapInstance.addControl(new maplibregl.NavigationControl(), 'top-right');
                mapInstance.on('load', () => {
                    ensureAreaLayer();
                    updateAreaOutline(null);
                });
            };

            if (mapContainer && typeof maplibregl !== 'undefined') {
                initMap();

                locationButtons.forEach((btn) => {
                    btn.addEventListener('click', () => {
                        const lat = parseFloat(btn.dataset.lat);
                        const lng = parseFloat(btn.dataset.lng);
                        const zoom = parseFloat(btn.dataset.zoom) || 9;
                        const name = btn.dataset.name || btn.textContent.trim();
                        const data = mapLocationData[name] || {};
                        if (!isNaN(lat) && !isNaN(lng)) {
                            mapInstance.flyTo({ center: [lng, lat], zoom, speed: 0.8 });
                            setActiveMarker(lng, lat, name, data.img, data.blurb);
                            updateAreaOutline(data.polygon);
                        }
                    });
                });

                if (resetMapBtn) {
                    resetMapBtn.addEventListener('click', () => {
                        mapInstance.flyTo({ center: defaultMapView.center, zoom: defaultMapView.zoom, speed: 0.7 });
                        if (activeMarker) {
                            activeMarker.remove();
                            activeMarker = null;
                        }
                        updateAreaOutline(null);
                    });
                }

                // Preload default marker
                setActiveMarker(defaultMapView.center[0], defaultMapView.center[1], 'Aeta Regions (Luzon)');
            } else {
                console.warn('Map container or MapLibre not available.');
            }

            // Render dynamic About-Aeta content with staggered animation
            if (aboutIntroEl && aboutCardsEl) {
                aboutIntroEl.classList.add('about-intro', 'reveal');
                aboutData.intro.forEach((text, idx) => {
                    const p = document.createElement('p');
                    p.textContent = text;
                    p.className = 'text-gray-700 leading-relaxed text-lg';
                    p.style.animationDelay = `${idx * 0.12}s`;
                    aboutIntroEl.appendChild(p);
                });

                aboutCardsEl.innerHTML = '';
                aboutData.cards.forEach((card, idx) => {
                    const cardEl = document.createElement('div');
                    cardEl.className = `bg-white bg-opacity-90 backdrop-blur-sm rounded-2xl shadow-lg border border-stone-200 p-6 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 about-card reveal ${card.wide ? 'sm:col-span-2' : ''}`;
                    cardEl.style.setProperty('--card-delay', `${idx * 0.12}s`);

                    cardEl.innerHTML = `
                        <div class="h-32 w-full mb-4 rounded-xl overflow-hidden bg-stone-100 border border-stone-200 shadow-sm">
                            <img src="${card.image}" alt="${card.alt}" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">${card.title}</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">${card.copy}</p>
                    `;
                    aboutCardsEl.appendChild(cardEl);
                });
            }
            
            // Toggle mobile menu
            mobileMenuButton.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                
                // Toggle between menu and close icons
                const menuIcon = this.querySelector('svg:first-child');
                const closeIcon = this.querySelector('svg:last-child');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Close mobile menu when clicking on a link
            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileMenuButton.setAttribute('aria-expanded', 'false');
                    mobileMenuButton.querySelector('svg:first-child').classList.remove('hidden');
                    mobileMenuButton.querySelector('svg:last-child').classList.add('hidden');
                });
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const headerOffset = 80; // Height of your fixed header
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Add shadow to navbar on scroll
            const nav = document.getElementById('main-nav');
            if (nav) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 10) {
                        nav.classList.add('shadow-xl');
                        nav.classList.add('bg-opacity-95');
                    } else {
                        nav.classList.remove('shadow-xl');
                        nav.classList.remove('bg-opacity-95');
                    }
                });
            }

            // Lazy load images
            if ('loading' in HTMLImageElement.prototype) {
                const images = document.querySelectorAll('img[loading="lazy"]');
                images.forEach(img => {
                    img.src = img.dataset.src;
                });
            } else {
                // Fallback for browsers that don't support lazy loading
                const script = document.createElement('script');
                script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
                document.body.appendChild(script);
            }

            // Scroll reveal for sections and cards
            const revealables = [
                ...document.querySelectorAll('section'),
                ...document.querySelectorAll('#culture .group.relative'),
                ...document.querySelectorAll('#gallery .group'),
                ...document.querySelectorAll('#geography .bg-white, #geography .bg-gradient-to-r, #history .bg-gray-300, #history .bg-gray-700, #history .bg-gray-600'),
                ...document.querySelectorAll('#about-aeta .about-card'),
                ...document.querySelectorAll('#about-aeta .about-intro')
            ];

            revealables.forEach((el, idx) => {
                el.classList.add('reveal');
                const mode = idx % 4;
                if (mode === 1) el.classList.add('from-left');
                else if (mode === 2) el.classList.add('from-right');
                else if (mode === 3) el.classList.add('zoom');
                el.style.setProperty('--reveal-delay', `${(idx % 5) * 0.08}s`);
            });

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2, rootMargin: '0px 0px -5% 0px' });

            revealables.forEach(el => observer.observe(el));

            // References modal
            if (openReferences && closeReferences && referencesModal) {
                const hideModal = () => referencesModal.classList.remove('open');
                openReferences.addEventListener('click', () => referencesModal.classList.add('open'));
                closeReferences.addEventListener('click', hideModal);
                referencesModal.addEventListener('click', (e) => {
                    if (e.target === referencesModal) hideModal();
                });
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') hideModal();
                });
            }

        });
    </script>

    <!-- Vanta.js Birds Effect -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
    <script>
        // Initialize Vanta Birds effect when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof VANTA !== 'undefined') {
                VANTA.BIRDS({
                    el: "#vanta-culture-bg",
                    mouseControls: true,
                    touchControls: true,
                    gyroControls: false,
                    minHeight: 200.00,
                    minWidth: 200.00,
                    scale: 1.00,
                    scaleMobile: 1.00,
                    backgroundColor: 0xf5ebe0,
                    backgroundAlpha: 0.5,
                    color1: 0x2d5016,
                    color2: 0x6b8e23,
                    color3: 0xb4d555,
                    colorMode: "lerp",
                    birdSize: 1.20,
                    wingSpan: 25.00,
                    speedLimit: 5.00,
                    separation: 40.00,
                    alignment: 40.00,
                    cohesion: 40.00,
                    quantity: 3.00
                })
            }
        });
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
