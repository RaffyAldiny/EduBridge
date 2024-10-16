<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @livewireStyles
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.2/dist/cdn.min.js"></script>

  <title>EduBridge</title>

</head>
<body class="bg-blue-800">
  @livewireScripts
  <livewire:header />


  <div class="container mt-5">
    <h1 class="text-center text-primary mb-4">I LOVE CJ ! I AM A FAN hehe</h1>

    <!-- Button with Alpine.js State -->
    <div x-data="{ open: false }" class="text-center">
      <button @click="open = !open" class="btn btn-primary">
        Toggle Content
      </button>

      <!-- Alpine.js Conditional Rendering -->
      <div x-show="open" class="alert alert-info mt-3" x-transition>
        This content is toggled by Alpine.js!
      </div>
    </div>
  </div>
</body>
</html>
