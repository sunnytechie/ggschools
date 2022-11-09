<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top px-4 px-lg-5 py-lg-0">
    <a href="/" class="navbar-brand">
        <h1 class="m-0 text-primary"><img width="50" height="50" src="{{ asset('assets/img/gglogo400.png') }}" alt="">College</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
            <a href="{{ route('classes') }}" class="nav-item nav-link">Classes</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Browse</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('facility') }}" class="dropdown-item">School Facilities</a>
                    {{-- <a href="team.html" class="dropdown-item">Popular Teachers</a> --}}
                    <a href="{{ route('teacher') }}" class="dropdown-item">Become A Teachers</a>
                    <a href="{{ route('appointment') }}" class="dropdown-item">Make Appointment</a>
                    <a href="{{ route('policy') }}" class="dropdown-item">Privacy Policy</a>
                    {{-- <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Error</a> --}}
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
            <a href="{{ route('dashboard.index') }}" class="nav-item nav-link">Check Results</a>
        </div>
        <a href="{{ route('admission') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Admission<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->