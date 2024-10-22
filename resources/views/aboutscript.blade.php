<!doctype html>
<html lang="en">

<head>
    <!-- Existing head content -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.2/dist/cdn.min.js"></script>
    @include('layouts.fadeanimation')

 <!-- Include Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Add your custom Tailwind configuration -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'maincolor': '#c4eaf7',
              'hover': '#0b263b',
              'whitehover': '#FEFEFE',
            },
            fontFamily: {
              'poppins': ['Poppins', 'sans-serif'],
            },
          },
        },
      }
    </script>

    <style>
        html,
        body {
            height: 100%;
            overflow-x: hidden;
        }

        /* Set position: relative on the first section */
        section {
            position: relative;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* About Us Section */
        .about-us-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding:0 50px;
            margin-top: -200px;
         }

        .about-us-text {
            flex: 1;
            padding-left: 50px;
        }

        .about-us-image {
            flex: 1;
            max-width: 500px;
            border-radius: 12px;
        }

        /* Chevron button styling */
        #scroll-down-button {
            position: absolute;
            bottom: 150px;
            left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%,
            100% {
                transform: translateX(-50%) translateY(0);
            }

            50% {
                transform: translateX(-50%) translateY(-10px);
            }
        }

        /* Fade-in animation for text and image */
        .animate {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .animate.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <title>EduBridge</title>
</head>

<body class="text-maincolor font-poppins">
    @livewireScripts
    <livewire:header />
    @extends('layouts.floatingorbs')

    <main class="px-3 -pt-2">
        <!-- About Us Section -->
        <section class="h-screen w-full" id="about-us-section">
            <div class="about-us-content">
                <div class="animate" id="about-us-image">
                    <img src="{{ asset('img/edubridgeteam.png') }}" alt="About Us Photo"
                        class="rounded-0 about-us-image object-cover">
                </div>

                <div class="about-us-text animate text-right" id="about-us-desc">
                    <span class="font-bold text-7xl pb-4 d-block">ABOUT US</span>
                    <span class="text-2xl leading-tight">
                        EduBridge is an online platform that offers various professional academic desk services to
                        students,
                        including tutoring, proofreading, statistical analysis, psychometric evaluations, and artistic
                        support.
                        On the platform, qualified experts are categorized based on their areas of expertise to make it
                        easier for
                        students to connect with professionals according to their needs.<br><br>

                        We created this website with the hopes of making the lives of students easier while giving our
                        professors
                        a chance to teach and earn an additional income at the comfort of their home.
                    </span>
                </div>
            </div>

            <!-- Chevron Button moved inside the first section -->
            <div id="scroll-down-button" onclick="scrollToSection()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-10 w-10 text-maincolor hover:text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </section>

        <div class="mt-16 h-[1px] w-5/6 bg-whitehover mx-auto opacity-30"></div>

        <!-- Vision and Mission Section -->
        <section id="vision-mission"
            class="flex flex-col mt-[-40px] text-center py-16 space-y-12 text-maincolor h-screen">
            <div>
                <h2 class="font-bold text-5xl animate" id="vision-text">VISION</h2>
                <p class="mt-4 text-2xl leading-tight mx-28 animate" id="vision-desc">
                    To be the leading online platform that bridges the gap between students and professionals,
                    empowering students with personalized guidance and expertise to achieve academic excellence and
                    career success.
                </p>
            </div>

            <div>
                <h2 class="font-bold text-5xl animate" id="mission-text">MISSION</h2>
                <p class="mt-4 text-2xl leading-tight mx-28 animate" id="mission-desc">
                    EduBridge aims to connect students with a diverse range of skilled professionals, providing
                    accessible and affordable one-on-one support in specialized fields like statistics, psychometrics,
                    accounting, and more. We strive to foster a community where students can gain practical insights,
                    enhance their academic performance, and develop the skills needed to excel in their chosen careers.
                </p>
            </div>
        </section>
    </main>

    <!-- Removed the chevron button from outside the main content -->

    <script>
        function scrollToSection() {
            document.getElementById('vision-mission').scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Function to trigger animations on elements that come into view
        function animateOnScroll(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }

        // Set up the observer
        const observer = new IntersectionObserver(animateOnScroll, {
            threshold: 0.1 // Trigger when 10% of the element is visible
        });

        // Target all elements with the "animate" class for the scroll animation
        document.querySelectorAll('.animate').forEach(element => {
            observer.observe(element);
        });
    </script>
</body>

</html>
