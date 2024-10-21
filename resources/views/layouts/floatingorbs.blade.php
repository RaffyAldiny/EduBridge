<div x-data="floatingOrbs()" x-init="init()" class="fixed inset-0 z-0 pointer-events-none">
  <!-- Orbs will be appended here by Alpine.js -->
  <div x-ref="orbContainer"></div>
</div>

<style>
  .orb {
      position: absolute;
      border-radius: 50%;
      z-index: -1;
      /* Keep the orb behind other elements */
      transition: transform 0.5s ease, opacity 0.5s ease;
      filter: blur(3px);
      pointer-events: auto;
      will-change: transform, opacity;
  }

  @keyframes float {
      0% {
          transform: translate(0, 0);
      }
      50% {
          transform: translate(50px, -30px);
      }
      100% {
          transform: translate(0, 0);
      }
  }

  .orb:hover {
      z-index: 1;
      /* Bring orb to front during hover */
      transform: scale(1.5);
      opacity: 1;
      filter: blur(1px);
      background: rgba(255, 255, 255, 1); /* Solid white color when hovered */
      transition: transform 0.25s ease, opacity 0.25s ease, z-index 0s ease 0.25s;
  }
</style>

<script>
  function floatingOrbs() {
      return {
          orbCount: 3,
          init() {
              for (let i = 0; i < this.orbCount; i++) {
                  this.createOrb();
              }
          },
          createOrb() {
              const size = Math.random() * 90 + 40;
              const orb = document.createElement('div');
              orb.classList.add('orb');
              orb.style.width = `${size}px`;
              orb.style.height = `${size}px`;

              // Randomize opacity between 0.2 and 0.45
              const opacity = Math.random() * (0.46 - 0.2) + 0.2;

              // Varying gradient levels
              const gradientStop1 = Math.random() * 50;
              const gradientStop2 = gradientStop1 + (Math.random() * 30 + 20);

              // Create a white gradient effect with varying levels
              orb.style.background = `radial-gradient(circle, rgba(255, 255, 255, ${opacity}) 0%, rgba(255, 255, 255, ${opacity - 0.1}) ${gradientStop1}%, rgba(255, 255, 255, 0) ${gradientStop2}%)`;

              // Randomized position for each orb, ensuring spread-out positions
              orb.style.top = `${Math.random() * 100}vh`;
              orb.style.left = `${Math.random() * 100}vw`;
              orb.style.animation = `float ${Math.random() * 6 + 4}s ease-in-out infinite`;

              this.$refs.orbContainer.appendChild(orb);
          }
      }
  }
</script>
