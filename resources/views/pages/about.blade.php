@extends('layouts.website')

@section('content')

    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header position-relative mb-5" style="background-image: url('{{ asset('assets/img/about2.jpg') }}'); background-position: center;">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    @include('include.home.about')
    
    @include('include.home.action')

    @include('include.home.gallery')
@endsection