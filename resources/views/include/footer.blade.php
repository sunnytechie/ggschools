<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>No.3 Obidike Street Opp. Golden Garden, Odume Layout Obosi</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+234 806 884 7138</p>
                <p class="mb-2" style="font-size: 14px"><i class="fa fa-envelope me-3"></i>info@gurusandgeniusschools.org</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <a class="btn btn-link text-white-50" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link text-white-50" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link text-white-50" href="{{ route('dashboard.index') }}">Check Results</a>
                <a class="btn btn-link text-white-50" href="{{ route('policy') }}">Privacy Policy</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Photo Gallery</h3>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/img/class1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/img/class2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/img/class3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/img/class4.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/img/class5.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="assets/img/class6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Newsletter</h3>
                <p>Sign up for our weekly and monthly news update on our school.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <form action="{{ route('email.subscriber') }}" method="POST">
                        @csrf

                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" name="email" placeholder="Your email" required>
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    2022 &copy; <a class="border-bottom" href="#">Gurus and Genius Schools</a>, All Right Reserved. 
                    {{-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> --}}
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{ route('home.index') }}">Home</a>
                        <a href="{{ route('contact') }}">Contact</a>
                        <a href="{{ route('contact') }}">Help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
