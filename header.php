<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>

    <!-- NAVBAR (Decent / Sticky / Animated) -->
    <header id="site-header"
        class="sticky top-0 z-50 bg-white/80 backdrop-blur supports-[backdrop-filter]:bg-white/70 transition-colors duration-300">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- Brand -->
                <a href="#home" class="flex items-center gap-2">
                    <span
                        class="flex h-9 w-9 items-center justify-center rounded-full bg-amber-500 font-bold text-gray-900">CC</span>
                    <span class="text-lg font-semibold text-gray-900">ConstructionCo</span>
                </a>

                <!-- Desktop nav -->
                <nav class="hidden md:flex items-center gap-6">
                    <!-- Reusable link class: underline anim -->
                    <a href="#home"
                        class="relative text-gray-700 hover:text-gray-900 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-amber-500 after:transition-all after:duration-300 after:content-[''] hover:after:w-full">Home</a>
                    <a href="#services"
                        class="relative text-gray-700 hover:text-gray-900 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-amber-500 after:transition-all after:duration-300 after:content-[''] hover:after:w-full">Services</a>
                    <a href="#projects"
                        class="relative text-gray-700 hover:text-gray-900 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-amber-500 after:transition-all after:duration-300 after:content-[''] hover:after:w-full">Projects</a>
                    <a href="#process"
                        class="relative text-gray-700 hover:text-gray-900 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-amber-500 after:transition-all after:duration-300 after:content-[''] hover:after:w-full">Process</a>
                    <a href="#safety"
                        class="relative text-gray-700 hover:text-gray-900 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-amber-500 after:transition-all after:duration-300 after:content-[''] hover:after:w-full">Safety</a>
                    <a href="#about"
                        class="relative text-gray-700 hover:text-gray-900 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-amber-500 after:transition-all after:duration-300 after:content-[''] hover:after:w-full">About</a>
                    <a href="#faq"
                        class="relative text-gray-700 hover:text-gray-900 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-amber-500 after:transition-all after:duration-300 after:content-[''] hover:after:w-full">FAQ</a>
                    <a href="#contact"
                        class="relative text-gray-700 hover:text-gray-900 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-amber-500 after:transition-all after:duration-300 after:content-[''] hover:after:w-full">Contact</a>
                </nav>

                <!-- CTA (desktop) -->
                <div class="hidden md:block">
                    <a href="#contact"
                        class="rounded-lg bg-amber-500 px-4 py-2 text-sm font-semibold text-gray-900 shadow hover:bg-amber-400 transition">
                        Get a Quote
                    </a>
                </div>

                <!-- Mobile toggle -->
                <div class="md:hidden">
                    <input id="nav-toggle" type="checkbox" class="peer hidden" aria-hidden="true" />
                    <label for="nav-toggle"
                        class="group inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-md ring-1 ring-gray-300 hover:bg-gray-100 transition"
                        aria-label="Toggle menu" aria-controls="mobile-menu" aria-expanded="false">
                        <!-- Hamburger → X animation -->
                        <span class="relative block h-4 w-5">
                            <span
                                class="absolute left-0 top-0 h-0.5 w-5 bg-gray-800 transition-all duration-300 group-hover:w-4 peer-checked:top-1.5 peer-checked:rotate-45"></span>
                            <span
                                class="absolute left-0 top-1.5 h-0.5 w-5 bg-gray-800 transition-all duration-300 peer-checked:opacity-0"></span>
                            <span
                                class="absolute left-0 top-3 h-0.5 w-5 bg-gray-800 transition-all duration-300 group-hover:w-4 peer-checked:top-1.5 peer-checked:-rotate-45"></span>
                        </span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Mobile menu (animated slide-down) -->
        <div id="mobile-menu"
            class="md:hidden overflow-hidden max-h-0 opacity-0 scale-y-95 origin-top transition-all duration-300 ease-out peer-checked:max-h-96 peer-checked:opacity-100 peer-checked:scale-y-100">
            <nav class="mx-auto max-w-7xl px-4 pb-6 sm:px-6 lg:px-8">
                <div class="mt-2 grid gap-1 rounded-xl border border-gray-200 bg-white p-2 shadow-sm">
                    <a href="#home" class="block rounded-lg px-3 py-2 text-gray-800 hover:bg-gray-100">Home</a>
                    <a href="#services" class="block rounded-lg px-3 py-2 text-gray-800 hover:bg-gray-100">Services</a>
                    <a href="#projects" class="block rounded-lg px-3 py-2 text-gray-800 hover:bg-gray-100">Projects</a>
                    <a href="#process" class="block rounded-lg px-3 py-2 text-gray-800 hover:bg-gray-100">Process</a>
                    <a href="#safety" class="block rounded-lg px-3 py-2 text-gray-800 hover:bg-gray-100">Safety</a>
                    <a href="#about" class="block rounded-lg px-3 py-2 text-gray-800 hover:bg-gray-100">About</a>
                    <a href="#faq" class="block rounded-lg px-3 py-2 text-gray-800 hover:bg-gray-100">FAQ</a>
                    <a href="#contact"
                        class="block rounded-lg bg-amber-500 px-3 py-2 text-center font-semibold text-gray-900 hover:bg-amber-400">Get
                        a Quote</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Optional: small scroll shadow / solidify background -->
    <script>
        (function () {
            const header = document.getElementById('site-header');
            const onScroll = () => {
                if (window.scrollY > 8) {
                    header.classList.add('shadow-sm', 'bg-white/90');
                } else {
                    header.classList.remove('shadow-sm', 'bg-white/90');
                }
            };
            onScroll();
            window.addEventListener('scroll', onScroll, { passive: true });
        })();
    </script>


</head>

<body>