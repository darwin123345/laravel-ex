<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="/storage/cover_images/plplogo_1501006023.png">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <title>Pamantasan ng Lungsod ng Pasig</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-- >

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    
    
</head>
<body>
    <div id="app">
        @include('inc.banner')
        @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
        @include('inc.footer')
        
    </div>

    <!-- Scripts -->
    
   
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
 