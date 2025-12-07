<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the rich cultural heritage of the Aeta people, the indigenous inhabitants of the Philippines.">
    <meta name="keywords" content="Aeta, indigenous, Philippines, culture, heritage, Luzon">
    <title>Aeta Heritage - Preserving Indigenous Culture</title>
    
    <!-- Preload critical resources -->
    <link rel="preload" href="{{ asset('css/carousel.css') }}" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
body { font-family: sans-serif; background: #000; }

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
</style>

</head>








<body class="bg-gray-50">





















    <!-- Top Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-amber-900 text-white shadow-lg z-50 transition-all duration-300" id="main-nav">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">
                <a href="#home" class="text-2xl font-bold text-white hover:text-amber-200 transition-colors">Aeta Heritage</a>
                
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
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-amber-800">
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
<div class="carousel" style="margin-top: 0;">
    <!-- list item -->
    <div class="list">
        <div class="item">
            <img src="{{ asset('images/aeta1.jpg') }}">
            <div class="content">
                <div class="author">AETA PEOPLE</div>
                <div class="title">INDIGENOUS FILIPINOS</div>
                <div class="topic">CULTURE</div>
                <div class="des">
                    The Aeta are among the earliest inhabitants of the Philippines, believed to have arrived over 30,000 years ago via land bridges. These indigenous people are characterized by their dark skin, curly hair, and short stature. They are among the most skilled hunters and gatherers in the country, with an intimate knowledge of the forest ecosystem.
                </div>
                <div class="buttons">
                    <button>LEARN MORE</button>
                    <button>SUPPORT</button>
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
                    <button>LEARN MORE</button>
                    <button>SUPPORT</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('images/aeta3.webp') }}">
            <div class="content">
                <div class="author">AETA PEOPLE</div>
                <div class="title">CULTURAL HERITAGE</div>
                <div class="topic">TRADITIONS</div>
                <div class="des">
                    Aeta culture is rich with oral traditions, including epic stories, myths, and legends passed down through generations. They have unique musical instruments like the bamboo zither and nose flute. Traditional dances often imitate animal movements or depict hunting scenes. Their spiritual beliefs center around nature spirits (anito), and they have traditional healers (herbolarios) who perform rituals for healing and protection.
                </div>
                <div class="buttons">
                    <button>LEARN MORE</button>
                    <button>SUPPORT</button>
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
                    <button>LEARN MORE</button>
                    <button>SUPPORT</button>
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
    <section id="home" class="relative h-screen flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/aeta-hero.jpg') }}');">
        <div class="text-center text-white px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">The Aeta People</h1>
            <p class="text-xl md:text-2xl mb-8">Preserving the Rich Cultural Heritage of the Indigenous People of Luzon</p>
            <a href="#culture" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300">
                Explore Culture
            </a>
        </div>
    </section>

    <!-- Culture Section -->
    <section id="culture" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Aeta Culture</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-amber-50 p-6 rounded-lg shadow-md">
                    <div class="text-4xl text-amber-600 mb-4"><i class="fas fa-hands-helping"></i></div>
                    <h3 class="text-xl font-semibold mb-3">Community Life</h3>
                    <p class="text-gray-700">The Aeta live in small, kin-based groups with strong communal bonds. Their social structure is egalitarian, with decisions often made through group consensus.</p>
                </div>
                <div class="bg-amber-50 p-6 rounded-lg shadow-md">
                    <div class="text-4xl text-amber-600 mb-4"><i class="fas fa-utensils"></i></div>
                    <h3 class="text-xl font-semibold mb-3">Traditional Cuisine</h3>
                    <p class="text-gray-700">Aeta cuisine is based on foraged foods, including wild yams, fruits, and game. They are known for their knowledge of edible plants and traditional cooking methods.</p>
                </div>
                <div class="bg-amber-50 p-6 rounded-lg shadow-md">
                    <div class="text-4xl text-amber-600 mb-4"><i class="fas fa-music"></i></div>
                    <h3 class="text-xl font-semibold mb-3">Music & Dance</h3>
                    <p class="text-gray-700">Traditional Aeta music features bamboo instruments and rhythmic chants. Their dances often depict daily activities and are performed during celebrations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section id="history" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Historical Journey</h2>
            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <div class="border-l-4 border-amber-500 absolute h-full left-1/2 transform -translate-x-1/2"></div>
                    
                    <div class="mb-12 relative">
                        <div class="bg-white p-6 rounded-lg shadow-md relative w-5/6 lg:w-1/2 mx-auto lg:mx-0 lg:mr-auto">
                            <div class="absolute -left-3 top-6 w-6 h-6 bg-amber-500 rounded-full"></div>
                            <h3 class="text-xl font-semibold mb-2">Pre-Colonial Era</h3>
                            <p class="text-gray-700">The Aeta are considered one of the earliest inhabitants of the Philippines, with their presence dating back over 20,000 years. They are believed to be descendants of the first humans to migrate to the Philippine archipelago.</p>
                        </div>
                    </div>
                    
                    <div class="mb-12 relative">
                        <div class="bg-white p-6 rounded-lg shadow-md relative w-5/6 lg:w-1/2 ml-auto">
                            <div class="absolute -right-3 top-6 w-6 h-6 bg-amber-500 rounded-full"></div>
                            <h3 class="text-xl font-semibold mb-2">Spanish Colonial Period</h3>
                            <p class="text-gray-700">During Spanish colonization, many Aeta retreated to the mountains to avoid subjugation. They maintained much of their traditional way of life while some groups interacted with lowland communities.</p>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <div class="bg-white p-6 rounded-lg shadow-md relative w-5/6 lg:w-1/2 mx-auto lg:mx-0 lg:mr-auto">
                            <div class="absolute -left-3 top-6 w-6 h-6 bg-amber-500 rounded-full"></div>
                            <h3 class="text-xl font-semibold mb-2">Modern Times</h3>
                            <p class="text-gray-700">Today, the Aeta face challenges from modernization, loss of ancestral lands, and cultural assimilation. However, there are ongoing efforts to preserve their heritage and secure their rights as indigenous people.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Geography Section -->
    <section id="geography" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Geographical Distribution</h2>
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Traditional Territories</h3>
                    <p class="text-gray-700 mb-4">The Aeta people are primarily found in the mountainous regions of Luzon, particularly in:</p>
                    <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                        <li>Zambales Mountains</li>
                        <li>Sierra Madre Mountain Range</li>
                        <li>Bataan Peninsula</li>
                        <li>Pampanga and Tarlac provinces</li>
                        <li>Bicol Region</li>
                    </ul>
                    <p class="text-gray-700">Their traditional territories are characterized by dense forests, mountains, and river systems that have sustained their way of life for millennia.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <div id="map" class="h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                        <p class="text-gray-500">Map of Aeta territories in Luzon</p>
                        <!-- In a real implementation, you would embed a map here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Gallery</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gallery items will be dynamically loaded here -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="{{ asset('images/aeta-1.jpg') }}" alt="Aeta community" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Traditional Dance</h3>
                        <p class="text-gray-600 text-sm">Aeta performing traditional dance during a cultural festival</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="{{ asset('images/aeta-2.jpg') }}" alt="Aeta craftsmanship" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Bamboo Crafts</h3>
                        <p class="text-gray-600 text-sm">Traditional bamboo weaving techniques</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="{{ asset('images/aeta-3.jpg') }}" alt="Aeta family" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Family Life</h3>
                        <p class="text-gray-600 text-sm">Aeta family in their traditional home</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-amber-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Aeta Heritage</h3>
                    <p class="text-amber-200">Dedicated to preserving and promoting the rich cultural heritage of the Aeta people.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-amber-200 hover:text-white transition">Home</a></li>
                        <li><a href="#culture" class="text-amber-200 hover:text-white transition">Culture</a></li>
                        <li><a href="#history" class="text-amber-200 hover:text-white transition">History</a></li>
                        <li><a href="#geography" class="text-amber-200 hover:text-white transition">Geography</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">References</h4>
                    <ul class="text-sm text-amber-200 space-y-1">
                        <li>National Commission on Indigenous Peoples (NCIP)</li>
                        <li>Philippine Indigenous Peoples Links</li>
                        <li>Anthropological Studies on Aeta Communities</li>
                        <li>National Museum of the Philippines</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-amber-800 mt-8 pt-8 text-center text-amber-200 text-sm">
                <p>&copy; <?php echo date('Y'); ?> Aeta Heritage. All rights reserved.</p>
            </div>
        </div>
    </footer>

        <!-- Main JS -->
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
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
        });
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
