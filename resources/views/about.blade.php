<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS and Fonts -->
  @vite('resources/css/app.css')
  @livewireStyles
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AlpineJS -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.2/dist/cdn.min.js"></script>

  <style>
    html {
      scroll-snap-type: y mandatory;
    }
    section {
      scroll-snap-align: start;
    }
    #scroll-down-button {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      cursor: pointer;
      animation: bounce 2s infinite;
    }
    @keyframes bounce {
      0%, 100% {
        transform: translateX(-50%) translateY(0);
      }
      50% {
        transform: translateX(-50%) translateY(-10px);
      }
    }
  </style>

  <title>EduBridge</title>
</head>

<body class="relative h-screen text-maincolor font-poppins">
  @livewireScripts
  <livewire:header />
  @extends('layouts.floatingorbs')

  <!-- Main Content -->
  <main class="flex flex-col h-full p-5">
    <section class="flex h-screen items-center justify-between w-full">
      <!-- Image Section -->
      <div class="w-1/2 flex justify-center items-center">
        <img src="{{ asset('img/placeholder.png') }}" alt="About Us Photo" class="rounded-2xl z-50 object-cover h-3/4 w-3/4">
      </div>
      
      <!-- Text Section -->
      <div class="w-1/2 h-full flex flex-col pr-4 justify-start">
        <span class="font-bold text-right text-7xl pb-4">ABOUT US</span>
        <span class="text-right text-2xl leading-relaxed">
          EduBridge is an online platform that offers various professional academic desk services to students, 
          including tutoring, proofreading, statistical analysis, psychometric evaluations, and artistic support. 
          On the platform, qualified experts are categorized based on their areas of expertise to make it easier for 
          students to connect with professionals according to their needs.<br><br>

          We created this website with the hopes of making the lives of students easier while giving our professors 
          a chance to teach and earn an additional income at the comfort of their home.
        </span>
      </div>
    </section>

    <!-- Vision and Mission Section -->
    <section id="vision-mission" class="flex flex-col text-center py-32 space-y-12 text-maincolor h-screen">
      <!-- Vision -->
      <div>
        <h2 class="font-bold text-5xl">VISION</h2>
        <p class="mt-4 text-2xl leading-loose mx-28">
          To be the leading online platform that bridges the gap between students and professionals, empowering students with personalized guidance and expertise to achieve academic excellence and career success.
        </p>
      </div>

      <!-- Mission -->
      <div>
        <h2 class="font-bold text-5xl">MISSION</h2>
        <p class="mt-4 text-2xl mx-28 leading-loose">
          EduBridge aims to connect students with a diverse range of skilled professionals, providing accessible and affordable one-on-one support in specialized fields like statistics, psychometrics, accounting, and more. We strive to foster a community where students can gain practical insights, enhance their academic performance, and develop the skills needed to excel in their chosen careers.
        </p>
      </div>
    </section>
  </main>

  <!-- Chevron Button -->
  <div id="scroll-down-button" onclick="scrollToSection()">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-10 w-10 text-gray-400 hover:text-gray-600">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
    </svg>
  </div>

  <script>
    function scrollToSection() {
      document.getElementById('vision-mission').scrollIntoView({ behavior: 'smooth' });
    }
  </script>
</body>
</html>
