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

    <!-- (removed forced hero scroll lock) -->

     <style>
/* -----------------------------------------
   GLOBAL VARIABLES
----------------------------------------- */
:root {
    --primary: #f1683a;
    --primary-dark: #d45a2e;
    --text-light: #ffffff;

    /* Unified background */
    --bg-dark: #000000;

    /* Glass */
    --glass: rgba(0, 0, 0, 0.55);
    --blur: 12px;
    --radius: 18px;

    /* Motion */
    --transition: 0.3s ease;

    /* Shadow */
    --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2);
}

/* -----------------------------------------
   GLOBAL RESET
----------------------------------------- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
    scroll-padding-top: 5rem;
}

body {
    font-family: 'Poppins', sans-serif;
    background: var(--bg-dark);
    color: var(--text-light);
    line-height: 1.6;
    overflow-x: hidden;
}

img {
    max-width: 100%;
    height: auto;
    display: block;
}

/* -----------------------------------------
   CONTAINER
----------------------------------------- */
.container {
    width: 100%;
    margin: 0 auto;
    padding: 0 1rem;
}

@media (min-width: 640px) { .container { max-width: 640px; } }
@media (min-width: 768px) { .container { max-width: 768px; } }
@media (min-width: 1024px) { .container { max-width: 1024px; padding: 0 2rem; } }
@media (min-width: 1280px) { .container { max-width: 1280px; } }

/* -----------------------------------------
   HEADER
----------------------------------------- */
header {
    position: fixed;
    top: 0; left: 0;
    width: 100%;
    padding: 1rem 6%;
    display: flex;
    justify-content: flex-end;
    background: #000;
    border-bottom: 1px solid rgba(255, 255, 255, .1);
    z-index: 1000;
}

header nav {
    display: flex;
    gap: 2rem;
}

header a {
    position: relative;
    font-weight: 500;
    padding-bottom: 4px;
    text-decoration: none;
    color: inherit;
    transition: var(--transition);
}

header a::after {
    content: "";
    position: absolute;
    left: 0; bottom: 0;
    width: 0%;
    height: 2px;
    background: var(--primary);
    transition: var(--transition);
}

header a:hover::after {
    width: 100%;
}

/* -----------------------------------------
   CAROUSEL
----------------------------------------- */
.carousel {
    height: 100vh;
    width: 100%;
    overflow: hidden;
    position: relative;
    isolation: isolate;
}

/* Slides */
.carousel .list {
    position: relative;
    width: 100%;
    height: 100%;
}

.carousel .list .item {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transform: translateX(22px);
    transition: opacity .8s ease, transform .8s ease, filter .5s ease;
    will-change: opacity, transform;
}

/* Images */
.carousel .list .item img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(.65);
    transition: transform 1.2s ease, filter 0.5s ease;
}

.carousel .list .item:hover img {
    transform: scale(1.03);
    filter: brightness(.75);
}

/* -----------------------------------------
   SLIDE CONTENT
----------------------------------------- */
.carousel .content {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translateX(-50%);
    padding: 2.5rem;
    width: 1140px;
    max-width: 80%;
    background: rgba(31, 41, 55, 0.5);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    color: #fff;
    text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    text-align: center;
    opacity: 0;
    transition: all .6s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Responsive carousel content */
@media screen and (max-width: 768px) {
    .carousel .content {
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
        padding: 1.5rem;
        width: min(500px, 85%);
        top: 18%;
    }
    
    /* Hide navigation arrows on mobile */
    .arrows {
        display: none !important;
        visibility: hidden;
        opacity: 0;
        pointer-events: none;
    }
}

@media screen and (max-width: 480px) {
    .carousel .content {
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
        padding: 0.75rem;
        width: 95%;
        top: 10%;
    }
    
    /* Further optimize text sizes for very small screens */
    .carousel .content .author {
        font-size: 8px !important;
        letter-spacing: 2px;
    }
    
    .carousel .content .title {
        font-size: 16px !important;
        line-height: 1.2;
        margin-bottom: 0.5rem;
    }
    
    .carousel .content .topic {
        font-size: 14px !important;
        margin-bottom: 0.75rem;
    }
    
    .carousel .content .des {
        font-size: 11px !important;
        line-height: 1.3;
        max-width: 280px;
    }
    
    /* Optimize carousel height for mobile */
    .carousel {
        min-height: 70vh;
        height: auto;
    }
    
    .carousel .list .item img {
        height: 70vh;
        object-fit: cover;
    }
    
    /* Reduce progress bar visibility on very small screens */
    .progress-container {
        height: 1px;
        bottom: 5px;
        left: 5px;
        width: 70%;
        opacity: 0.7;
    }
    
    .progress-bar {
        height: 1px;
    }
    
    /* Hide navigation arrows on mobile */
    .arrows {
        display: none !important;
        visibility: hidden;
        opacity: 0;
        pointer-events: none;
    }
}

.carousel .list .item.active {
    opacity: 1;
    transform: translateX(0);
}

.carousel .list .item.active .content {
    opacity: 1;
    transform: translateX(-50%);
}

/* Typography */
.carousel .content .author {
    color: var(--primary);
    font-size: .9rem;
    margin-bottom: .6rem;
    font-weight: 600;
    letter-spacing: 2px;
}

.carousel .content .title {
    font-size: 3.3rem;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: .5rem;
    color: #fff;
}

.carousel .content .topic {
    color: var(--primary);
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 1.3rem;
}

.carousel .content .des {
    line-height: 1.75;
    opacity: .9;
    margin-bottom: 2rem;
}

/* Buttons */
.carousel .buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.carousel .buttons button {
    padding: .85rem 2rem;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    font-weight: 600;
    position: relative;
    overflow: hidden;
    transition: all .3s ease;
}

.carousel .buttons button::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(45deg, var(--primary), #ff8c66);
    opacity: 1;
    transition: opacity .3s ease;
}

.carousel .buttons button:hover::before {
    opacity: .9;
}

/* Primary */
.carousel .buttons button:first-child {
    background: var(--primary);
    color: #fff;
    box-shadow: 0 4px 15px rgba(241,104,58,.4);
}

.carousel .buttons button:first-child:hover {
    background: #e25829;
    transform: translateY(-3px);
}

/* Secondary */
.carousel .buttons button:last-child {
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
}

.carousel .buttons button:last-child:hover {
    background: rgba(255,255,255,.15);
}

/* -----------------------------------------
   THUMBNAIL STRIP
----------------------------------------- */
.thumbnail {
    position: fixed;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 18px;
    z-index: 50;
}

.thumbnail .item {
    width: 200px;
    height: 170px;
    border-radius: 14px;
    overflow: hidden;
    cursor: pointer;
    border: 3px solid transparent;
    transition: .4s cubic-bezier(0.165,0.84,0.44,1);
    background: rgba(0,0,0,.3);
}

.thumbnail .item:hover {
    transform: translateY(-12px) scale(1.08);
}

.thumbnail .item.active {
    border-color: var(--primary);
}

.thumbnail .item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* -----------------------------------------
   SLIDE ARROWS
----------------------------------------- */
.arrows {
    position: fixed;
    right: 5%;
    bottom: 280px;
    display: flex;
    flex-direction: column;
    gap: 16px;
    z-index: 60;
}

.arrows button {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: rgba(255,255,255,.1);
    border: 2px solid rgba(255,255,255,.25);
    color: #fff;
    cursor: pointer;
    backdrop-filter: blur(6px);
    transition: var(--transition);
}

.arrows button:hover {
    background: var(--primary);
    border-color: var(--primary);
    transform: translateY(-3px) scale(1.1);
}

/* -----------------------------------------
   PROGRESS BAR
----------------------------------------- */
.progress-container {
    position: absolute;
    bottom: 0;  
    left: 0;
    width: 100%;
    height: 4px;
    background: rgba(255,255,255,.1);
    overflow: hidden;
}

.progress-bar {
    height: 100%;
    width: 0%;
    background: linear-gradient(90deg, var(--primary), #ff8c66);
    transition: width .1s linear;
}

/* -----------------------------------------
   ANIMATIONS
----------------------------------------- */
@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(-50%); }
}

/* -----------------------------------------
   RESPONSIVE
----------------------------------------- */
@media (max-width: 768px) {
    .carousel .content {
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        text-align: center;
    }
}

/* Tablet / medium screens: keep content a bit lower and well centered */
@media (min-width: 768px) and (max-width: 1024px) {
    .carousel .content {
        top: 24%;
        max-width: 75%;
    }
}

/* Additional site styles retained */
.nav-glass {
    background: rgba(55, 65, 81, 0.75);
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
    <!-- Hard reset to hero on load (clears any hash and scrolls to top repeatedly) -->
    <script>
        (() => {
            const nukeHashAndTop = () => {
                if (window.location.hash) {
                    history.replaceState(null, '', window.location.pathname + window.location.search);
                }
                window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
            };
            // Run early, on load, and after bfcache restores
            nukeHashAndTop();
            window.addEventListener('load', () => {
                nukeHashAndTop();
                setTimeout(nukeHashAndTop, 50);
                setTimeout(nukeHashAndTop, 150);
                setTimeout(nukeHashAndTop, 350);
            });
            window.addEventListener('pageshow', nukeHashAndTop);
        })();
    </script>





















    <!-- Top Navigation -->
    <nav class="fixed top-0 left-0 right-0 text-white shadow-lg z-50 nav-glass" id="main-nav">

        <div class="w-full h-full px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">
                <a href="#home" class="text-2xl font-bold text-white hover:text-amber-200"><i class="fas fa-leaf text-amber-300 mr-2"></i>Aeta Heritage</a>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800">Home</a>
                    <a href="/#culture" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800">Culture</a>
                    <a href="/#history" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800">History</a>
                    <a href="#geography" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800">Geography</a>
                    <a href="/#gallery" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800">Gallery</a>
                </div>

                </div>
        </div>

        
    </nav>

  
    <div>



    <!-- carousel -->
<style>
    @media (max-width: 767px) {
        .carousel {
            display: none !important;
        }
        /* Prevent FOUC */
        html { visibility: visible; opacity: 1; }
    }
</style>
<div class="carousel relative overflow-hidden" style="display: block;">  
    <!-- Firefly Animation -->
    <div class="fireflies">
        <?php for($i = 0; $i < 15; $i++): ?>
        <div class="firefly"></div>
        <?php endfor; ?>
    </div>
    
    <!-- list item -->
    <div class="list">
        <div class="item">
            <img src="{{ asset('images/aeta1.jpg') }}" class="w-full brightness-50">
              <div class="content px-4 sm:px-6 lg:px-8 text-center">
                <div class="author text-xs sm:text-sm font-bold tracking-widest mb-2">AETA PEOPLE</div>
                <div class="title text-2xl sm:text-4xl lg:text-5xl font-bold mb-2">INDIGENOUS FILIPINOS</div>
                <div class="topic text-lg sm:text-2xl lg:text-3xl mb-4">CULTURE</div>
                <div class="des text-sm sm:text-base lg:text-lg max-w-xs sm:max-w-md lg:max-w-lg mx-auto">
                    The Aeta are among the earliest inhabitants of the Philippines, believed to have arrived over 30,000 years ago via land bridges. These indigenous people are characterized by their dark skin, curly hair, and short stature. They are among the most skilled hunters and gatherers in the country, with an intimate knowledge of the forest ecosystem.
                </div>
               
            </div>
        </div>


        <div class="item">
            <img src="{{ asset('images/aeta2.webp') }}" class="w-full brightness-50 object-cover" alt="Aeta community engaged in traditional livelihood activities">
            <div class="content px-4 sm:px-6 lg:px-8 text-center">
                <div class="author text-[10px] sm:text-xs md:text-sm font-bold tracking-widest mb-2">
                    AETA PEOPLE
                </div>
                <div class="title text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 leading-snug md:leading-tight">
                    TRADITIONAL LIVELIHOOD
                </div>
                <div class="topic text-base sm:text-xl md:text-2xl lg:text-3xl mb-4">
                    SUSTENANCE
                </div>
                <div class="des text-xs sm:text-sm md:text-base lg:text-lg leading-relaxed max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl mx-auto">
                    Aeta communities traditionally practice hunting, fishing, and gathering. Men hunt wild animals using bows and arrows, while women gather root crops, fruits, and medicinal plants. Some groups practice swidden farming (kaingin). They are renowned for their expertise in herbal medicine and their ability to utilize hundreds of forest plants for food, medicine, and shelter.
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('images/aeta3.webp') }}" class="w-full brightness-50">
            <div class="content px-4 sm:px-6 lg:px-8 text-center">
                <div class="author text-xs sm:text-sm font-bold tracking-widest mb-2">AETA PEOPLE</div>
                <div class="title text-2xl sm:text-4xl lg:text-5xl font-bold mb-2">CULTURAL HERITAGE</div>
                <div class="topic text-lg sm:text-2xl lg:text-3xl mb-4">TRADITIONS</div>
                <div class="des text-sm sm:text-base lg:text-lg max-w-xs sm:max-w-md lg:max-w-lg mx-auto">
                    Aeta culture is rich with oral traditions, including epic stories, myths, and legends passed down through generations. They have unique musical instruments like the bamboo zither and nose flute. Traditional dances often imitate animal movements or depict hunting scenes. Their spiritual beliefs center around nature spirits (anito), and they have traditional healers (herbolarios) who perform rituals for healing and protection.
                </div>
              
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('images/aeta4.jpg') }}" class="w-full">
            <div class="content px-4 sm:px-6 lg:px-8 text-center">
                <div class="author text-xs sm:text-sm font-bold tracking-widest mb-2">AETA PEOPLE</div>
                <div class="title text-2xl sm:text-4xl lg:text-5xl font-bold mb-2">MODERN CHALLENGES</div>
                <div class="topic text-lg sm:text-2xl lg:text-3xl mb-4">RESILIENCE</div>
                <div class="des text-sm sm:text-base lg:text-lg max-w-xs sm:max-w-md lg:max-w-lg mx-auto">
                    Today, the Aeta face numerous challenges including displacement from ancestral lands due to deforestation, mining, and commercial agriculture. Many have been forced to adapt to settled farming or low-wage labor. Despite these pressures, Aeta communities continue to fight for land rights, cultural preservation, and access to education and healthcare while maintaining their distinct identity and traditional knowledge.
                </div>
            
  
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
    let lastScrollTop = 0;
    let hideArrowsTimeout;

    // Hide/show carousel arrows on scroll
    function handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const arrows = document.querySelector('.arrows');
        
        if (arrows) {
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down - hide arrows
                arrows.style.opacity = '0';
                arrows.style.pointerEvents = 'none';
                arrows.style.transition = 'opacity 0.3s ease';
            } else {
                // Scrolling up or near top - show arrows
                arrows.style.opacity = '1';
                arrows.style.pointerEvents = 'auto';
                arrows.style.transition = 'opacity 0.3s ease';
            }
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }

    // Throttle scroll events
    let scrollThrottle = false;
    window.addEventListener('scroll', function() {
        if (!scrollThrottle) {
            handleScroll();
            scrollThrottle = true;
            setTimeout(function() {
                scrollThrottle = false;
            }, 100);
        }
    });

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
    <section id="home" class="relative h-screen flex items-center justify-center bg-cover bg-center overflow-hidden" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/aeta-hero.jpg') }}');" aria-label="The Aeta People Hero">
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
            
            <a href="/traditions-culture" class="group relative inline-block">
                <div class="absolute -inset-1 bg-gradient-to-r from-amber-600 to-amber-800 rounded-full opacity-75 group-hover:opacity-100 transition-all duration-300 blur-sm group-hover:blur"></div>
                <span class="relative z-10 bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-all duration-300 inline-flex items-center group-hover:px-10 group-hover:py-4">
                    <span class="mr-2">Explore Culture & Traditions</span>
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
            </a>
        </div>

        
    </section>

    <script>
        // Force landing on hero: strip initial hash and repeatedly scroll to top during initial paint
        if ('scrollRestoration' in history) history.scrollRestoration = 'manual';

        const resetToTop = () => {
            if (window.location.hash) {
                window.history.replaceState(null, '', window.location.pathname + window.location.search);
            }
            window.scrollTo({ top: 0, behavior: 'auto' });
        };

        // Run immediately and a few times during initial load to beat default anchor jumps
        resetToTop();
        document.addEventListener('DOMContentLoaded', () => {
            resetToTop();
            setTimeout(resetToTop, 0);
            setTimeout(resetToTop, 100);
            setTimeout(resetToTop, 300);
        });
        window.addEventListener('pageshow', resetToTop);
    </script>

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
                                <img src="{{ asset('images/17.png
                            ') }}" alt="Aeta community life" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="relative p-8 lg:p-10">
                            <h3 class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-[#2d5016] transition-colors duration-300">Community Life</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">The Aeta live in small, kin-based groups with strong communal bonds. Their social structure is egalitarian, with decisions often made through group consensus.</p>
                            
                            <!-- Enhanced Learn More Button -->
                            <a href="/traditions-culture" class="group/btn relative inline-flex items-center gap-2 text-gray-700 font-semibold overflow-hidden">
                                <span class="relative z-10 group-hover/btn:text-white transition-colors duration-300">Explore Traditions</span>
                                <i class="fas fa-arrow-right relative z-10 transform group-hover:translate-x-2 group-hover/btn:text-white transition-all duration-300"></i>
                                <div class="absolute inset-0 bg-gradient-to-r from-[#2d5016] to-[#3d6b1f] transform scale-x-0 group-hover/btn:scale-x-100 origin-left transition-transform duration-300 rounded-lg -z-0"></div>
                            </a>
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
                                <img src="{{ asset('images/bam.webp') }}" alt="Aeta traditional cuisine" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="relative p-8 lg:p-10">
                            <h3 class="text-2xl font-bold mb-4 text-gray-800 group-hover:text-[#7a9f35] transition-colors duration-300">Traditional Cuisine</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">Aeta cuisine is based on foraged foods, including wild yams, fruits, and game. They are known for their knowledge of edible plants and traditional cooking methods.</p>
                            
                            <!-- Enhanced Learn More Button -->
                            <a href="/traditions-culture" class="group/btn relative inline-flex items-center gap-2 text-gray-700 font-semibold overflow-hidden">
                                <span class="relative z-10 group-hover/btn:text-white transition-colors duration-300">Explore Traditions</span>
                                <i class="fas fa-arrow-right relative z-10 transform group-hover:translate-x-2 group-hover/btn:text-white transition-all duration-300"></i>
                                <div class="absolute inset-0 bg-gradient-to-r from-[#b4d555] to-[#a3c545] transform scale-x-0 group-hover/btn:scale-x-100 origin-left transition-transform duration-300 rounded-lg -z-0"></div>
                            </a>
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
                            <a href="/traditions-culture" class="group/btn relative inline-flex items-center gap-2 text-gray-700 font-semibold overflow-hidden">
                                <span class="relative z-10 group-hover/btn:text-white transition-colors duration-300">Explore Traditions</span>
                                <i class="fas fa-arrow-right relative z-10 transform group-hover:translate-x-2 group-hover/btn:text-white transition-all duration-300"></i>
                                <div class="absolute inset-0 bg-gradient-to-r from-[#b85450] to-[#a84844] transform scale-x-0 group-hover/btn:scale-x-100 origin-left transition-transform duration-300 rounded-lg -z-0"></div>
                            </a>
                        </div>

                        <!-- Bottom Decorative Line -->
                        <div class="h-1 bg-gradient-to-r from-transparent via-[#b85450] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
            </div>
            <!-- Culture Videos -->










            <div class="mt-16">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-gray-800 mb-3">Culture in Motion</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        These videos highlight how Aeta culture is expressed through song, rhythm, and movement.
                        Each dance tells a story—about hunting, community gatherings, courtship, or thanksgiving
                        to nature and the spirits—showing how traditions are kept alive across generations.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Video 1 -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                            <iframe
                                src="https://www.youtube.com/embed/86ubRlfdbyE"
                                title="Aeta Culture Video"
                                style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>


              

                    <!-- Video 2 -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                            <iframe
                                src="https://www.youtube.com/embed/Z2UTOc-xdnc"
                                title="Aeta Dances Video"
                                style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
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
                <a href="/historical-journey" class="group inline-block">
                    <h2 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-gray-500 mb-4 group-hover:from-primary group-hover:to-secondary transition-all duration-300 cursor-pointer">Historical Journey</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-gray-600 to-gray-400 mx-auto rounded-full group-hover:from-primary group-hover:to-secondary transition-all duration-300"></div>
                </a>
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
                                <h3 class="text-3xl font-bold text-gray-700 flex items-center gap-3">
                                    <i class="fas fa-mountain text-amber-700"></i>
                                    Traditional Territories
                                </h3>
                                <p class="text-gray-700 mt-2 leading-relaxed text-lg">Tap a region to zoom the map, view its outline, and see a photo.</p>
                            </div>
                            <button type="button" id="reset-map" class="px-3 py-2 text-sm bg-gray-700 text-white rounded-lg hover:bg-gray-800 transition-colors shadow">
                                <i class="fas fa-expand mr-1"></i>
                                Full View
                            </button>
                        </div>

                        <div class="grid grid-cols-1 gap-3">
                            <button type="button" class="flex items-center justify-between p-3 text-left bg-stone-50 rounded-lg border border-stone-200 hover:bg-stone-100 transition-all focus:ring-2 focus:ring-stone-400 focus:outline-none location-btn group" 
        data-name="Zambales Mountains" 
        data-lat="15.5" 
        data-lng="120.1466" 
        data-zoom="9"
        data-image="{{ asset('images/zambales.webp') }}">
    <div class="flex items-center">
        <i class="fas fa-map-marker-alt text-stone-600 mr-3 group-hover:scale-110 transition-transform"></i>
        <span class="font-semibold text-gray-700">Zambales Mountains</span>
    </div>
</button>

<button type="button" class="flex items-center justify-between p-3 text-left bg-slate-50 rounded-lg border border-slate-200 hover:bg-slate-100 transition-all focus:ring-2 focus:ring-slate-400 focus:outline-none location-btn group" 
        data-name="Sierra Madre Mountain Range" 
        data-lat="16.4" 
        data-lng="121.4" 
        data-zoom="8.5"
        data-image="{{ asset('images/Sierra Madre Mountain Range.webp') }}">
    <div class="flex items-center">
        <i class="fas fa-map-marker-alt text-slate-600 mr-3 group-hover:scale-110 transition-transform"></i>
        <span class="font-semibold text-gray-700">Sierra Madre Mountain Range</span>
    </div>
</button>

<button type="button" class="flex items-center justify-between p-3 text-left bg-neutral-50 rounded-lg border border-neutral-200 hover:bg-neutral-100 transition-all focus:ring-2 focus:ring-neutral-400 focus:outline-none location-btn group" 
        data-name="Bataan Peninsula" 
        data-lat="14.68" 
        data-lng="120.33" 
        data-zoom="10"
        data-image="{{ asset('images/Bataan Peninsula.webp') }}">
    <div class="flex items-center">
        <i class="fas fa-map-marker-alt text-neutral-600 mr-3 group-hover:scale-110 transition-transform"></i>
        <span class="font-semibold text-gray-700">Bataan Peninsula</span>
    </div>
</button>

<button type="button" class="flex items-center justify-between p-3 text-left bg-stone-50 rounded-lg border border-stone-200 hover:bg-stone-100 transition-all focus:ring-2 focus:ring-stone-400 focus:outline-none location-btn group" 
        data-name="Pampanga & Tarlac" 
        data-lat="15.35" 
        data-lng="120.65" 
        data-zoom="9.5"
        data-image="{{ asset('images/Pampanga & Tarlac.webp') }}">
    <div class="flex items-center">
        <i class="fas fa-map-marker-alt text-stone-600 mr-3 group-hover:scale-110 transition-transform"></i>
        <span class="font-semibold text-gray-700">Pampanga & Tarlac</span>
    </div>
</button>

<button type="button" class="flex items-center justify-between p-3 text-left bg-slate-50 rounded-lg border border-slate-200 hover:bg-slate-100 transition-all focus:ring-2 focus:ring-slate-400 focus:outline-none location-btn group" 
        data-name="Bicol Region" 
        data-lat="13.3" 
        data-lng="123.5" 
        data-zoom="8.5"
        data-image="{{ asset('images/Bicol Region.webp') }}">
    <div class="flex items-center">
        <i class="fas fa-map-marker-alt text-slate-600 mr-3 group-hover:scale-110 transition-transform"></i>
        <span class="font-semibold text-gray-700">Bicol Region</span>
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
                        <div id="map" class="h-96 bg-gradient-to-br from-stone-100 to-slate-100 rounded-xl relative overflow-hidden border border-slate-200 shadow-lg ring-1 ring-stone-100 flex items-center justify-center">
    <div class="text-center p-8 text-gray-400">
        <i class="fas fa-mountain text-4xl mb-2"></i>
        <p>Click on a location to view its image</p>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const locationButtons = document.querySelectorAll('.location-btn');
    const mapContainer = document.getElementById('map');
    let currentImage = null;

    locationButtons.forEach(button => {
        button.addEventListener('click', function() {
            const imageUrl = this.getAttribute('data-image');
            const locationName = this.getAttribute('data-name');
            
            // Remove previous image if exists
            if (currentImage) {
                currentImage.remove();
            }
            
            // Create and append new image
            const imageWrapper = document.createElement('div');
            imageWrapper.className = 'w-full h-full relative';
            
            currentImage = document.createElement('img');
            currentImage.src = imageUrl;
            currentImage.alt = locationName;
            currentImage.className = 'w-full h-full object-cover';
            
            const caption = document.createElement('div');
            caption.className = 'absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 text-white';
            caption.textContent = locationName;
            
            imageWrapper.appendChild(currentImage);
            imageWrapper.appendChild(caption);
            
            mapContainer.innerHTML = '';
            mapContainer.appendChild(imageWrapper);
        });
    });

    // Reset button functionality
    document.getElementById('reset-map').addEventListener('click', function() {
        if (currentImage) {
            mapContainer.innerHTML = `
                <div class="text-center p-8 text-gray-400">
                    <i class="fas fa-mountain text-4xl mb-2"></i>
                    <p>Click on a location to view its image</p>
                </div>`;
            currentImage = null;
        }
    });
});
</script>
@endpush
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Additional Information Sections -->
<section class="py-16 px-4 bg-gradient-to-br from-[#f5ebe0] via-[#ede8dd] to-[#e8dfd5]">
    <div class="max-w-6xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Aeta Life & Culture</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-gray-600 to-gray-400 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Explore the traditional livelihood, cultural practices, and contemporary challenges of the Aeta people
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Livelihood & Economy -->
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-shadow duration-300">
                <div class="text-4xl mb-6 text-center">💼</div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800 text-center">Livelihood & Economy</h3>
                <p class="text-gray-600 leading-relaxed mb-6 text-center">
                    Traditional Aeta economy centers on hunting, gathering, and swidden farming. Men hunt wild game using bows and arrows, while women gather edible plants, fruits, and medicinal herbs. Some communities practice small-scale agriculture and engage in traditional craftsmanship.
                </p>
                <div class="text-center">
                    <a href="/livelihood" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-gray-600 to-gray-700 text-white font-semibold rounded-full hover:from-gray-700 hover:to-gray-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <span>Explore More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Traditional Practices -->
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-shadow duration-300">
                <div class="text-4xl mb-6 text-center">🎭</div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800 text-center">Traditional Practices</h3>
                <p class="text-gray-600 leading-relaxed mb-6 text-center">
                    Aeta cultural practices include oral traditions, epic storytelling, traditional music with bamboo instruments, and ceremonial dances. Spiritual beliefs center around nature spirits and ancestral worship, with traditional healers playing vital roles in community health and rituals.
                </p>
                <div class="text-center">
                    <a href="/livelihood" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-gray-600 to-gray-700 text-white font-semibold rounded-full hover:from-gray-700 hover:to-gray-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <span>Explore More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modern Challenges -->
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-shadow duration-300">
                <div class="text-4xl mb-6 text-center">🌍</div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800 text-center">Modern Challenges</h3>
                <p class="text-gray-600 leading-relaxed mb-6 text-center">
                    Contemporary Aeta communities face displacement from ancestral lands, cultural assimilation pressures, and limited access to education and healthcare. Despite these challenges, they continue advocating for land rights, and sustainable development.
                </p>
                <div class="text-center">
                    <a href="/livelihood" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-gray-600 to-gray-700 text-white font-semibold rounded-full hover:from-gray-700 hover:to-gray-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <span>Explore More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Quick Facts Section -->
<section class="py-16 px-4 bg-gradient-to-br from-amber-50 to-orange-50">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Quick Facts</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Fact 1 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="text-3xl mb-4">🏛️</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Ancient Heritage</h3>
                <p class="text-gray-600">Among the earliest inhabitants of the Philippines, arriving over 30,000 years ago</p>
            </div>
            
            <!-- Fact 2 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="text-3xl mb-4">🌳</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Forest Experts</h3>
                <p class="text-gray-600">Master hunters and gatherers with intimate knowledge of forest ecosystems</p>
            </div>
            
            <!-- Fact 3 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="text-3xl mb-4">🏹</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Traditional Skills</h3>
                <p class="text-gray-600">Skilled in bow hunting, herbal medicine, and sustainable forest living</p>
            </div>
            
            <!-- Fact 4 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="text-3xl mb-4">🎭</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Rich Culture</h3>
                <p class="text-gray-600">Oral traditions, unique music, and spiritual beliefs centered around nature</p>
            </div>
        </div>
        
        <!-- Additional Facts Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <!-- Fact 5 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="text-3xl mb-4">📍</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Geographic Range</h3>
                <p class="text-gray-600">Primarily found in Luzon provinces: Zambales, Tarlac, Pampanga, and Bicol</p>
            </div>
            
            <!-- Fact 6 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="text-3xl mb-4">👥</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Population</h3>
                <p class="text-gray-600">Estimated 20,000-50,000 Aeta people remaining in the Philippines</p>
            </div>
            
            <!-- Fact 7 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="text-3xl mb-4">🛡️</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Modern Challenges</h3>
                <p class="text-gray-600">Facing displacement while fighting for land rights and cultural preservation</p>
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
                        <img src="{{ asset('images/aeta4.jpg') }}" alt="Aeta performing traditional dance" class="w-full h-full object-cover">
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
                        <img src="{{ asset('images/bam.webp') }}" alt="Traditional bamboo weaving" class="w-full h-full object-cover">
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
                        <img src="{{ asset('images/groupic.webp') }}" alt="Aeta family life" class="w-full h-full object-cover">
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
                <a href="{{ route('gallery') }}" class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-gray-700 via-gray-600 to-gray-500 text-white font-semibold rounded-full hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    <i class="fas fa-images mr-2"></i>
                    View Full Gallery
                </a>
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
                        <li><a href="#home" class="text-xl font-semibold mb-4 text-black hover:text-gray-800 transition">Home</a></li>
                        <li><a href="/traditions-culture" class="text-black hover:text-gray-800 transition">Culture</a></li>
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
                    img: "{{ asset('images/zambales.webp') }}",
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
                    img: "{{ asset('images/Sierra Madre Mountain Range.webp') }}",
                    blurb: 'Spanning Luzon’s eastern spine with dense forests and rivers.'
                },
                'Bataan Peninsula': {
                    center: [120.33, 14.68],
                    zoom: 10,
                    polygon: [
                        [120.22, 14.47], [120.45, 14.40], [120.62, 14.55], [120.62, 14.77],
                        [120.52, 14.95], [120.35, 14.95], [120.20, 14.80], [120.22, 14.47]
                    ],
                    img: "{{ asset('images/Bataan Peninsula.webp') }}",
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
                    img: "{{ asset('images/Pampanga & Tarlac.webp') }}",
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
                    img: "{{ asset('images/Bicol Region.webp') }}",
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
