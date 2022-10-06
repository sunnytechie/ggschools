@extends('layouts.website')

@section('content')

    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-5" style="background-image: url('{{ asset('assets/img/about2.jpg') }}'); background-position: center;">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Abdmission</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">admission</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Admission is open for all our schools</h5>
                    <p class="card-text">Kindly visit our school at No.3 Obidike Street Opp. Golden Garden, Odume Layout Obosi to pick up our admission form now! <br> If you have any question kindly call +234 806 884 7138 or send email to info@gurusandgeniusschools.org.</p>
                </div>
            </div>
        </div>
        
    </div>
    
@endsection