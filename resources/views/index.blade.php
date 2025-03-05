<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StayAhead - Modern Task Management Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        :root {
            --primary-light: #4f46e5;
            /* Indigo */
            --secondary-light: #4338ca;
            /* Slightly darker Indigo */
            --primary-dark: #1e293b;
            /* Darker Gray */
            --secondary-dark: #111827;
            /* Even darker Gray */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #4f46e5, #3b82f6);
            color: white;
            transition: background-color 0.3s ease, color 0.3s ease;
            scroll-behavior: smooth;
        }

        .dark body {
            background: linear-gradient(to bottom right, #1f2937, #2d3748);
            color: white;
        }

        header,
        footer {
            background: linear-gradient(to bottom right, #3730a3, #3b82f6);
            color: white;
            padding: 0.75rem 0;
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.5), 0 0 25px rgba(56, 89, 255, 0.4);
        }

        header a,
        footer a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.25rem;
            transition: color 0.3s ease;
        }

        header a:hover,
        footer a:hover {
            color: #93c5fd;
        }

        footer {
            text-align: center;
        }

        footer form input,
        footer form button {
            transition: all 0.3s ease;
            padding: 0.75rem;
            border-radius: 9999px;
        }

        footer form input:focus {
            border-color: #4c51bf;
        }

        footer form button {
            background-color: #f59e0b;
            color: white;
            border: none;
        }

        footer form button:hover {
            background-color: #3b82f6;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-indigo-900 to-indigo-600 dark:from-gray-900 dark:to-gray-800">

    <!-- Header Section -->
    <header class="fixed top-0 left-0 right-0 z-50 py-3">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div class="text-3xl font-semibold">
                <a href="/" class="hover:text-indigo-400">StayAhead</a>
            </div>
            <div class="flex items-center space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-white hover:text-indigo-400">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-white hover:text-indigo-400">Login</a>
                        <a href="{{ route('register') }}" class="text-white hover:text-indigo-400">Register</a>
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="min-h-screen relative overflow-hidden">
        <div
            class="max-w-7xl mx-auto px-4 py-44 flex flex-col md:flex-row items-center justify-between space-y-12 md:space-y-0">
            <!-- Left Side Content -->
            <div class="md:w-1/2 space-y-8 text-center md:text-left">
                <h1
                    class="text-5xl md:text-6xl font-bold text-white leading-tight opacity-0 animate__animated animate__fadeIn animate__delay-1s animate__bounceInUp">
                    Empower Your Business with <span
                        class="text-indigo-200 animate__animated animate__pulse animate__infinite">StayAhead</span>
                </h1>
                <p class="text-xl text-indigo-100 opacity-0 animate__animated animate__fadeIn animate__delay-1.5s">
                    A powerful and efficient task management platform built with Laravel
                </p>
                <div
                    class="flex justify-center md:justify-start opacity-0 animate__animated animate__fadeIn animate__delay-2s">
                    <a href="#features"
                        class="inline-block text-white border-2 border-white px-8 py-4 rounded-full font-semibold hover:bg-indigo-500 hover:text-white transition-all transform hover:scale-105">
                        Explore Features
                    </a>
                </div>
            </div>
            <!-- Right Side Content (Contact Email Section) -->
            <div
                class="md:w-1/2 text-center md:text-left opacity-0 animate__animated animate__fadeIn animate__delay-2s space-y-8">
                <p class="text-lg text-indigo-100 mb-4">Let's Make It Happen! Reach out and let's create something
                    amazing together.</p>
                <a href="mailto:dev.vivek.lode@gmail.com"
                    class="text-2xl font-semibold text-white hover:text-indigo-400 transition-all hover:scale-105">
                    dev.vivek.lode@gmail.com
                </a>
                <div class="mt-6">
                    <a href="mailto:dev.vivek.lode@gmail.com"
                        class="inline-block text-white border-2 border-white px-8 py-4 rounded-full font-semibold hover:bg-indigo-500 hover:text-white transition-all transform hover:scale-105">
                        Let's Talk 💬
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 text-slate-900 dark:text-white">Powerful Features Built with Laravel
                </h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Optimized for scalability, performance,
                    and ease of use</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg card hover:scale-110">
                    <h3 class="text-xl font-semibold mb-4 text-slate-900 dark:text-white text-center">Efficient CRUD
                        Operations</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-justify">Seamless Create, Read, Update, and Delete
                        (CRUD) operations powered by Laravel's Eloquent ORM.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg card hover:scale-110">
                    <h3 class="text-xl font-semibold mb-4 text-slate-900 dark:text-white text-center">Caching for Better
                        Performance</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-justify">Use of Laravel's caching mechanisms to
                        store frequently accessed data, improving speed and reducing database load.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg card hover:scale-110">
                    <h3 class="text-xl font-semibold mb-4 text-slate-900 dark:text-white text-center">API Integration
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 text-justify">Effortlessly integrate third-party APIs
                        using Laravel's built-in HTTP client for smooth data exchange.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mt-8">
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg card hover:scale-110">
                    <h3 class="text-xl font-semibold mb-4 text-slate-900 dark:text-white text-center">Form Validation
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 text-justify">
                        Laravel's robust form validation ensures your data is always clean and reliable, preventing
                        common errors.
                    </p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg card hover:scale-110">
                    <h3 class="text-xl font-semibold mb-4 text-slate-900 dark:text-white text-center">Authentication &
                        Authorization</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-justify">
                        Built-in user authentication with support for roles and permissions, ensuring secure access
                        control.
                    </p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg card hover:scale-110">
                    <h3 class="text-xl font-semibold mb-4 text-slate-900 dark:text-white text-center">Task Scheduling &
                        Queues</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-justify">
                        Use Laravel's powerful task scheduling and queues to automate background tasks and improve
                        application efficiency.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section id="tech-stack"
        class="py-20 bg-gradient-to-br from-indigo-900 to-indigo-600 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto px-4 text-center text-white">
            <h2 class="text-4xl font-bold mb-4">Our Modern Tech Stack</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                We use the latest tools and technologies to build fast, scalable, and reliable applications.
            </p>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="cursor-pointer bg-white dark:bg-gray-900 p-8 rounded-xl shadow-lg flex items-center card hover:scale-110"
                    onclick="window.location.href='https://tailwindcss.com';">
                    <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5/icons/tailwindcss.svg" alt="Tailwind CSS"
                        class="h-12 w-12 mr-6">
                    <div>
                        <h3 class="text-2xl font-semibold mb-2 text-slate-900 dark:text-white">Tailwind CSS</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            A utility-first CSS framework for rapid UI development. It enables faster styling and
                            customization.
                        </p>
                    </div>
                </div>

                <div class="cursor-pointer bg-white dark:bg-gray-900 p-8 rounded-xl shadow-lg flex items-center card hover:scale-110"
                    onclick="window.location.href='https://vitejs.dev';">
                    <img src="https://vitejs.dev/logo.svg" alt="Vite" class="h-12 w-12 mr-6">
                    <div>
                        <h3 class="text-2xl font-semibold mb-2 text-slate-900 dark:text-white">Vite</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            A fast and modern build tool that significantly reduces bundling times during development.
                        </p>
                    </div>
                </div>

                <div class="cursor-pointer bg-white dark:bg-gray-900 p-8 rounded-xl shadow-lg flex items-center card hover:scale-110"
                    onclick="window.location.href='https://nodejs.org/en';">
                    <img src="https://img.icons8.com/?size=100&id=FQlr_bFSqEdG&format=png&color=000000" alt="Node.js"
                        class="h-12 w-12 mr-6">
                    <div>
                        <h3 class="text-2xl font-semibold mb-2 text-slate-900 dark:text-white">Node.js</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            A JavaScript runtime built on Chrome's V8 engine, providing an event-driven, non-blocking
                            model for building scalable applications.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mt-8">
                <div class="cursor-pointer bg-white dark:bg-gray-900 p-8 rounded-xl shadow-lg flex items-center card hover:scale-110"
                    onclick="window.location.href='https://www.npmjs.com';">
                    <img src="https://img.icons8.com/?size=100&id=muzHH8nXRGWb&format=png&color=000000" alt="NPM"
                        class="h-12 w-12 mr-6">
                    <div>
                        <h3 class="text-2xl font-semibold mb-2 text-slate-900 dark:text-white">NPM</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            The default package manager for JavaScript, simplifying dependency management and
                            installation.
                        </p>
                    </div>
                </div>

                <div class="cursor-pointer bg-white dark:bg-gray-900 p-8 rounded-xl shadow-lg flex items-center card hover:scale-110"
                    onclick="window.location.href='https://railway.com';">
                    <img src="https://img.icons8.com/?size=100&id=1WjhtuTjAmJr&format=png&color=000000" alt="Railway"
                        class="h-12 w-12 mr-6">
                    <div>
                        <h3 class="text-2xl font-semibold mb-2 text-slate-900 dark:text-white">Railway Cloud DB</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            A platform for fast and simple cloud database provisioning, scaling, and management.
                        </p>
                    </div>
                </div>

                <div class="cursor-pointer bg-white dark:bg-gray-900 p-8 rounded-xl shadow-lg flex items-center card hover:scale-110"
                    onclick="window.location.href='https://vercel.com';">
                    <img src="https://vercel.com/favicon.ico" alt="Vercel" class="h-12 w-12 mr-6">
                    <div>
                        <h3 class="text-2xl font-semibold mb-2 text-slate-900 dark:text-white">Vercel</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            A deployment platform that offers continuous integration and serverless functions for
                            front-end apps.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <footer
        class="bg-gradient-to-br from-indigo-700 to-indigo-600 dark:bg-gradient-to-br dark:from-gray-900 dark:to-gray-800 text-white py-4">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm font-medium text-indigo-100">
                &copy; 2025 StayAhead. All Rights Reserved.
            </p>
            <!-- Engaging Footer Message -->
            <div class="mt-6 text-lg text-indigo-100">
                <span id="name"
                    class="font-semibold text-2xl text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 via-blue-500 to-indigo-700"></span>
                <span id="cursor" class="text-xl font-mono text-indigo-400">|</span>
            </div>

            <!-- Subtle Inspirational Message -->
            <div class="mt-4 text-xl text-indigo-200 italic">
                <p id="inspirationalMessage" class="opacity-0">Creating solutions with passion and purpose.</p>
            </div>

            <div class="mt-4 text-sm">
                <a href="#" class="hover:text-indigo-400 mx-2">Privacy Policy</a>
                <span class="mx-2 text-indigo-200">|</span>
                <a href="#" class="hover:text-indigo-400 mx-2">Terms of Service</a>
            </div>
        </div>
    </footer>

    <script>
        // Typing effect for the name
        const nameElement = document.getElementById('name');
        const cursorElement = document.getElementById('cursor');
        const messageElement = document.getElementById('inspirationalMessage');

        const name = "Vivek Lode";
        let index = 0;

        function typeName() {
            if (index < name.length) {
                nameElement.textContent += name[index];
                index++;
                setTimeout(typeName, 100);
            } else {
                // After typing the name, show the inspirational message with a fade-in effect
                setTimeout(() => {
                    messageElement.classList.remove('opacity-0');
                    messageElement.classList.add('opacity-100', 'transition-opacity', 'duration-1000');
                }, 500);
            }
        }

        // Start typing effect
        typeName();

        // Cursor blinking animation
        setInterval(() => {
            cursorElement.classList.toggle('opacity-0'); // Blink the cursor
        }, 500);
    </script>

    <style>
        /* Advanced animations with a more defined glow effect */
        @keyframes glow {
            0% {
                text-shadow: 0 0 3px #3b82f6, 0 0 6px #3b82f6, 0 0 9px #3b82f6;
            }

            50% {
                text-shadow: 0 0 6px #93c5fd, 0 0 12px #93c5fd, 0 0 18px #93c5fd;
            }

            100% {
                text-shadow: 0 0 3px #3b82f6, 0 0 6px #3b82f6, 0 0 9px #3b82f6;
            }
        }

        #name {
            animation: glow 2s infinite alternate;
        }

        #name {
            font-weight: 700;
            font-size: 2.25rem;
            /* Slightly bigger to make it pop */
        }

        /* Optional: Smooth glow transition for a cleaner effect */
        .glowing {
            transition: text-shadow 0.3s ease-in-out;
        }
    </style>

</body>

</html>
