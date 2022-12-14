<!DOCTYPE html>

<!-- 
=========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}"
  data-template="vertical-menu-template-free"
 >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta property="og:description" content="Gurus and Genius College" />
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

        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/libs/apex-charts/apex-charts.css') }}" />

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="{{ asset('assets/dashboard/vendor/js/helpers.js') }}"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets/dashboard/js/config.js') }}"></script>
        {{-- Flutterwave --}}
        <script src="https://checkout.flutterwave.com/v3.js"></script>
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="font-sans antialiased">
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                @include('layouts.sidebar')


                <!-- Layout container -->
                <div class="layout-page">
                    
                    @include('layouts.navigation')

                    <!-- Page Content -->
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <main>
                            {{ $slot }}
                        </main>
                        @include('layouts.footer')
                        <div class="content-backdrop fade"></div>
                    </div>
                <!-- / Layout page -->
                </div>
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>



        {{-- Google CDN --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Core JS -->
        <!-- build:js assets/dashboard/vendor/js/core.js -->
        <script src="{{ asset('assets/dashboard/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

        <script src="{{ asset('assets/dashboard/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('assets/dashboard/vendor/libs/apex-charts/apexcharts.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('assets/dashboard/js/dashboards-analytics.js') }}"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>


        <script>
            setTimeout(() => {
                const box = document.getElementById('bottomAlert');

                // ??????? removes element from DOM

                // ??????? hides element (still takes up space on page)
                // box.style.visibility = 'hidden';
                }, 1500);
        </script>

        
    </body>
</html>
