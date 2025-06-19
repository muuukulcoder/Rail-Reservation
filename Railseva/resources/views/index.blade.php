<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainseva|index</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-white font-sans text-gray-800">
    <!-- Header -->
    <header
        class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white p-4 md:sticky              md:top-0 md:z-50">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold flex items-center space-x-1">
                <span>Train</span>
                <img src="{{ asset('images/namaste.svg') }}" alt="Logo" class="w-6 h-6 inline-block align-middle">
                <span>seva</span>
            </h1>
            <div class="md:hidden" x-data="{ open: false }">
                <button @click="open = !open">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <nav x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-x-full"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 translate-x-full"
                    class="absolute top-14 right-0 w-2/3 h-full bg-indigo-700 text-white p-6 space-y-4 shadow-lg z-50">
                    <a href="#"
                        class="relative inline-block transition-all duration-300 hover:text-yellow-300  hover:scale-105 block">PNR
                        Status</a>
                    <a href="#" class="block ">Running Status</a>
                    <a href="#" class="block ">Seat Availability</a>
                    <a href="#" class="block ">Profile</a>
                </nav>
            </div>
            <nav class="space-x-4 hidden md:block">
                <a href="#"
                    class="relative inline-block transition-all duration-300 hover:text-yellow-300  hover:scale-105 block">PNR
                    Status</a>
                <a href="#"
                    class="relative inline-block transition-all duration-300 hover:text-yellow-300  hover:scale-105 block">Running
                    Status</a>
                <a href="#"
                    class="relative inline-block transition-all duration-300 hover:text-yellow-300  hover:scale-105 block">Seat
                    Availability</a>
                <a href="#"
                    class="relative inline-block transition-all duration-300 hover:text-yellow-300  hover:scale-105 block"><i
                        class="fa-solid fa-user"></i>&nbsp;&nbsp;
                </a>
            </nav>
        </div>
    </header>

    <!-- Hero Slider Section -->
    <section x-data="{
        currentSlide: 0,
        slides: [
            '{{ asset('images/hero1.jpg') }}',
            '{{ asset('images/hero2.jpg') }}',
            '{{ asset('images/hero3.jpg') }}'
        ]
    }" x-init="setInterval(() => currentSlide = (currentSlide + 1) % slides.length, 5000)" class="relative h-[300px] md:h-[400px] overflow-hidden">

        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="currentSlide === index" x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 scale-95 translate-x-full"
                x-transition:enter-end="opacity-100 scale-100 translate-x-0" class="absolute inset-0 bg-cover bg-center"
                :style="'background-image: url(' + slide + ')'" x-cloak>
            </div>
        </template>

        <!-- Overlay -->
        <div class="relative z-10 h-full flex items-center justify-center text-white bg-black bg-opacity-50">
            <div class="text-center p-6 rounded">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Beat The Heat!</h2>
                <p class="text-lg md:text-xl mb-4">Plan Your Summer Train Journey</p>
                <button class="bg-white text-black font-semibold px-4 py-2 rounded hover:bg-gray-200">Book Now</button>
            </div>
        </div>

        <!-- Arrow Controls -->
        <button @click="currentSlide = (currentSlide - 1 + slides.length) % slides.length"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 text-white text-3xl font-bold bg-black bg-opacity-30 hover:bg-opacity-60 px-3 py-1 rounded-full">
            &#8249;
        </button>
        <button @click="currentSlide = (currentSlide + 1) % slides.length"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 text-white text-3xl font-bold bg-black bg-opacity-30 hover:bg-opacity-60 px-3 py-1 rounded-full">
            &#8250;
        </button>
    </section>

    <!-- Search Box -->
    <div class="container mx-auto px-4 py-6 bg-white shadow-md rounded-lg -mt-16 relative z-10">
        <form class="grid md:grid-cols-4 gap-4">
            <input type="text" placeholder="From Station" class="p-3 border rounded" />
            <input type="text" placeholder="To Station" class="p-3 border rounded" />
            <input type="date" min="{{ date('Y-m-d') }}" class="p-3 border rounded" />
            <button class="bg-orange-500 text-white p-3 rounded hover:bg-orange-600">Search Trains</button>
        </form>
    </div>

    <!-- Offers Section -->
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-xl font-bold mb-6">Offers and Discounts</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="p-4 bg-gray-100 rounded shadow hover:shadow-md">
                <h3 class="font-semibold text-lg mb-2">Free Cancellation</h3>
                <p>Full refund on train ticket cancellations.</p>
                <button class="mt-2 px-4 py-2 bg-black text-white rounded">Book Now</button>
            </div>
            <div class="p-4 bg-blue-100 rounded shadow hover:shadow-md">
                <h3 class="font-semibold text-lg mb-2">Trip Assurance</h3>
                <p>Get free flight ticket on waitlisted train ticket.</p>
                <button class="mt-2 px-4 py-2 bg-blue-600 text-white rounded">Book Now</button>
            </div>
            <div class="p-4 bg-black text-white rounded shadow hover:shadow-md">
                <h3 class="font-semibold text-lg mb-2">Up to 7% Adani Points</h3>
                <p>Earn reward points on bookings with Adani One Credit Cards.</p>
                <button class="mt-2 px-4 py-2 bg-white text-black rounded">Get Book Now</button>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-xl font-bold mb-4">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <details class="border p-4 rounded">
                <summary class="font-semibold cursor-pointer">Why book train tickets online with Trainmart?</summary>
                <p class="mt-2 text-gray-600">It is fast, convenient and secure with best offers.</p>
            </details>
            <details class="border p-4 rounded">
                <summary class="font-semibold cursor-pointer">How do I book train tickets?</summary>
                <p class="mt-2 text-gray-600">Fill the form above and click 'Search Trains'.</p>
            </details>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4 grid md:grid-cols-4 gap-8 text-sm">
            <div>
                <h3 class="font-semibold mb-2">Company</h3>
                <ul>
                    <li>About Us</li>
                    <li>Blog</li>
                    <li>Terms</li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">Services</h3>
                <ul>
                    <li>PNR Status</li>
                    <li>Running Status</li>
                    <li>Coach Position</li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">Support</h3>
                <ul>
                    <li>Chat</li>
                    <li>FAQs</li>
                    <li>Email</li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">Get App</h3>
                <p>Download our app for a better experience.</p>
            </div>
        </div>
        <p class="text-center mt-6 text-xs text-gray-400">&copy; 2025 Trainmart. All rights reserved.</p>
    </footer>
</body>

</html>
