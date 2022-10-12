<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta property="og:description" content="Gurus and Genius Schools" />
        <meta property="og:image" content="{{ asset('assets/img/600.jpg') }}" />
        <meta property="og:image:width" content="200" />
        <meta property="og:image:height" content="200" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:alt" content="{{ config('app.name') }}" />

        <title>Gurus and Genius Schools - Geniune knowledge in Practice.</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/gglogo400.png') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
        />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/fonts/boxicons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/css/core.css') }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/demo.css') }}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

        <!-- Page CSS -->
        <!-- Page -->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/css/pages/page-auth.css') }}" />
        <!-- Helpers -->
        <script src="{{ asset('assets/dashboard/vendor/js/helpers.js') }}"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets/dashboard/js/config.js') }}"></script>

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <!-- Core JS -->
        <!-- build:js assets/dashboard/vendor/js/core.js -->
        <script src="{{ asset('assets/dashboard/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

        <script src="{{ asset('assets/dashboard/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>

        <!-- Page JS -->

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>