<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"
    >

    <link rel="stylesheet" 
    href="{{ asset ('css/app.css')}}">

    @stack('styles')
    <title>@yield('title', 'Meu Titulo') </title>
</head>
<body>
    <h1>Meu layout</h1>

    @section('sidebar')

    <div>

        <nav>
            sidebar
    
        </nav>
    
    </div>

    @show

    <div>

        @yield('content')
    </div>
    
    <script src="{{ asset ('js/app.js')}}"></script>
    
    @stack('scripts')
</body>
</html>