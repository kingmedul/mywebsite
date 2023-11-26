<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Saiful Islam</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- view changes --}}
    
    @include('components.Header')
    @yield('home')
    @yield('about')
    @yield('projects')
    @yield('contact')
    @include('components.Footer')
    
    
</body>
</html>