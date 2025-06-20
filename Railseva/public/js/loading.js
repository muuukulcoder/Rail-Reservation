 const loader = document.getElementById('page-loading');
        const MIN_LOAD_TIME = 1000; // 2 seconds

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