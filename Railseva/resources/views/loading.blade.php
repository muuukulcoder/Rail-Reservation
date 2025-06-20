<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel Page Loader</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN for preview (remove if using Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/loading.css">
    <script src="{{ asset('js/loading.js') }}" defer></script>
</head>

<body class="relative bg-gray-100">

    <!-- Page Loading Screen -->
    <div id="page-loading"
        class="fixed top-0 bottom-0 left-0 right-0 z-[99999] flex items-center justify-center bg-white opacity-100 pointer-events-auto transition-opacity duration-500">
        <div class="grid-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Main Content -->
    <div id="main-content" class="p-10 text-center">
        <h1 class="text-3xl font-bold text-blue-600">Welcome to My Laravel App</h1>
        <p class="mt-4 text-gray-600">This is your main content.</p>
    </div>

    <!-- Hide loader on page load -->
    {{-- <script>
        const loader = document.getElementById('page-loading');
        const MIN_LOAD_TIME = 1500; // 2 seconds

        const startTime = Date.now();

        window.addEventListener('load', () => {
            const elapsed = Date.now() - startTime;
            const remaining = MIN_LOAD_TIME - elapsed;

            // Ensure at least 2 seconds have passed before hiding loader
            setTimeout(() => {
                if (loader) {
                    loader.classList.add('opacity-0', 'pointer-events-none');
                    setTimeout(() => loader.remove(), 500); // optional fade-out cleanup
                }
            }, remaining > 0 ? remaining : 0);
        });
    </script> --}}

</body>

</html>
