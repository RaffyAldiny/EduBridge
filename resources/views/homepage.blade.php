<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.2/dist/cdn.min.js"></script>

  <title>EduBridge</title>
</head>
<body class="bg-gradient-to-r from-blue-900 to-blue-800 text-white min-h-screen">
    <header class="flex items-center justify-between px-8 py-4">
        <h1 class="text-3xl font-bold">EduBridge</h1>
        <button class="bg-white text-black px-4 py-2 rounded-lg">Login</button>
    </header>
    <main class="flex items-center justify-center h-screen">
        <div class="flex flex-col text-center space-y-8">
            <h2 class="text-4xl font-extrabold">Connecting You to Expert Solutions for Academic Success</h2>
            <div class=" w-64 h-64 mx-auto">
              <img src="{{ asset('img/edubridgelogo.png') }}" alt="EduBridge Logo" class="rounded-full">
            </div>
        </div>
    </main>
</body>
</html>
