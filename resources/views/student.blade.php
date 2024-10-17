<html>
<head>
    <title>Edubridge Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<!-- Main View (e.g., login.blade.php) -->
<body class="relative h-screen text-maincolor font-poppins" x-data="{ showStudentModal: false, showProfessionalModal: false }">

    <livewire:headertwo/>

    @livewireScripts
</body>
</html>
