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
          const size = Math.random() * 80 + 40; 
          const orb = document.createElement('div');
          orb.classList.add('orb');
          orb.style.width = `${size}px`;
          orb.style.height = `${size}px`;
          
          // maincolor: orb.style.backgroundColor = 'rgba(196, 234, 247, 0.50)';
          orb.style.backgroundColor = 'rgba(255, 255, 255, 0.25)';

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
