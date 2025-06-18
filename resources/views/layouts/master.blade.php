<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration</title>

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    @include('partials.header')

    <main>
        <div class="container py-5">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')

</body>
</html>