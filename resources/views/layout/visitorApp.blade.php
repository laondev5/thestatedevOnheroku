<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
        <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>

        <title>state dev</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <style>
            [x-cloak]{
                display: none;
            }
        </style>
       
    </head>
    <body class="" x-data="{
        mobileNav : false, 
        showModal : false,
        callModal : false,
        enrollModal : false,
        webModal : false,
        mobileModal : false,
        softModal : false,
        pcModal : false,
    }" x-cloak>

        {{-- navber --}}
        @include('layout.navbar')

        <section>
            {{-- content --}}
             @yield('content')
            {{-- end of content --}}
        </section>

        {{-- footer --}}
        <section class="bg-[#091863]">
            @include('layout.footer')
        </section>
        
    </body>
</html>
