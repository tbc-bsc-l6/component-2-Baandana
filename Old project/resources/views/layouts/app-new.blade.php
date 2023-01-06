<!doctype html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--csrf token-->
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>{{ config('app.name','Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap">

        <!-- Styles -->
        

        @vite(['resources/js/app.js', 'public/js/app.js'])
        @vite(['resources/css/app.css', 'public/css/app.css'])
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7x1 mx-auto ру-6 px-4 sm:px-6 lg:px-8">
                  
                </div>
            </header>
   
           <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>



