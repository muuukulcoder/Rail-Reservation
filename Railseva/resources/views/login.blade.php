<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Railway Signup</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .login {
            background: #eeedf7;
            background: linear-gradient(63deg, rgba(238, 237, 247, 1) 11%, rgba(60, 60, 189, 1) 34%, rgba(60, 60, 189, 1) 75%, rgba(60, 183, 189, 1) 97%);

        }

        .fade-slide {
            animation: fadeSlide 1s ease forwards;
        }

        @keyframes fadeSlide {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center">

    <div
        class="login w-full max-w-5xl   text-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row fade-slide">

        <!-- Left: Railway Illustration -->
        <div class="hidden md:flex w-1/2 items-center justify-center p-6 bg-white/5">
            <img src="{{ asset('images/railway.png') }}" alt="Train Illustration"
                class="w-full h-auto max-w-sm animate-bounce-slow" />
        </div>

        <!-- Right: Sign Up Form -->
        <div class="w-full md:w-1/2 p-8">
            <h2 class="text-3xl font-bold mb-6 text-center">Login</h2>

            <form action="#" method="POST" class="space-y-5">


                <div>
                    <label class="block text-sm mb-1">Email Address</label>
                    <input type="email" name="email"
                        class="w-full px-4 py-2 rounded-lg bg-white/5 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        required />
                </div>

                <div>
                    <label class="block text-sm mb-1">Password</label>
                    <input type="password" name="password"
                        class="w-full px-4 py-2 rounded-lg bg-white/5 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        required />
                </div>

                <button type="submit"
                    class="w-full py-2 bg-indigo-600 hover:bg-indigo-700 rounded-lg font-semibold transition">Login</button>
            </form>

            <p class="mt-4 text-center text-sm text-white/80">
                Don't have an account?
                <a href="/signup" class="underline text-indigo-200 hover:text-indigo-100">Sign up</a>
            </p>
        </div>
    </div>

    <style>
        .animate-bounce-slow {
            animation: bounceSlow 3s infinite;
        }

        @keyframes bounceSlow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</body>

</html>
