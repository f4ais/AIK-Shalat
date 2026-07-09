<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Belajar Sholat')
    </title>


    @vite(['resources/css/app.css','resources/js/app.js'])

</head>


<body class="bg-gray-100 min-h-screen flex flex-col">


    @include('partials.navbar')


    <main class="flex-grow">

        <div class="container mx-auto p-6">

            @yield('content')

        </div>

    </main>


    @include('partials.footer')


</body>

</html>