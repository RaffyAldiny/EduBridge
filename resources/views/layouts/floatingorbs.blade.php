<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <!-- Custom floating orbs CSS -->
  <style>
    .orb {
      position: absolute;
      border-radius: 50%;
      z-index: -1; /* Ensure orbs stay behind all content */
    }
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-30px); }
      100% { transform: translateY(0px); }
    }
  </style>
</head>
<body x-data="floatingOrbs()">

  <!-- Floating Orbs Container -->
  <div x-ref="orbContainer" class="fixed inset-0 z-0 pointer-events-none"></div>

  <!-- Main Content -->
  <main class="relative z-10">
    <div class="relative z-50">
      <!-- Dropdown Menu (make sure it stays above the orbs) -->
      <div class="absolute top-16 left-8 w-40 text-center text-l bg-blue-100 text-black rounded-lg shadow-lg z-50">
        <ul class="p-2 space-y-2">
          <li><a href="{{ url('/') }}"><button class="text-black w-full px-2 py-2 bg-blue-100 hover:bg-blue-200 rounded">Home</button></a></li>
          <li><a href="{{ url('/about') }}"><button class="text-black w-full px-2 py-2 bg-blue-100 hover:bg-blue-200 rounded">About Us</button></a></li>
          <li><a href="{{ url('/contact') }}"><button class="text-black w-full px-2 py-2 bg-blue-100 hover:bg-blue-200 rounded">Contact Us</button></a></li>
        </ul>
      </div>
    </div>
    
    @yield('content')
  </main>

  <!-- Floating Orbs Alpine.js Script -->
  <script>
    function floatingOrbs() {
      return {
        orbCount: 8,
        init() {
          for (let i = 0; i < this.orbCount; i++) {
            this.createOrb();
          }
        },
        createOrb() {
          const size = Math.random() * 80 + 40; // Randomized size between 40px and 120px
          const orb = document.createElement('div');
          orb.classList.add('orb');
          orb.style.width = `${size}px`;
          orb.style.height = `${size}px`;
          
          // Use the RGB equivalent of #c4eaf7 with full opacity
          orb.style.backgroundColor = 'rgba(196, 234, 247, 0.75)';

          // Randomized position for each orb, ensuring spread-out positions
          orb.style.top = `${Math.random() * 90}vh`;
          orb.style.left = `${Math.random() * 90}vw`;
          orb.style.animation = `float ${Math.random() * 6 + 4}s ease-in-out infinite`; 

          this.$refs.orbContainer.appendChild(orb);
        }
      }
    }
  </script>

</body>
</html>
