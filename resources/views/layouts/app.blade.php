<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Sholat</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-gray-100">

<nav class="bg-green-600 text-white shadow">

    <div class="container mx-auto px-5 py-4 flex justify-between">

        <a href="{{ route('home') }}"
            class="font-bold text-xl">

            Belajar Sholat

        </a>

    </div>

</nav>


<div class="container mx-auto p-6">

    @yield('content')

</div>

</body>
</html>