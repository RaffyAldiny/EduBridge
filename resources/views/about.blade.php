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

  <title>EduBridge</title>
</head>

<body class="relative h-screen text-maincolor bg-red-500 font-poppins">
  @livewireScripts
  <livewire:header />
  
  <main class="flex flex-col h-full px-5">
    <div class="flex h-full items-center justify-between w-full">
      
      <!-- Image Section -->
      <div class="w-1/2 flex justify-center items-center">
        <img src="{{ asset('img/placeholder.png') }}" alt="About Us Photo" class="rounded-2xl object-cover h-3/4 w-3/4">
      </div>
      
      <!-- Text Section -->
      <div class="w-1/2 h-full flex flex-col px-4 justify-start">
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
    </div>
  </main>
</body>
</html>
