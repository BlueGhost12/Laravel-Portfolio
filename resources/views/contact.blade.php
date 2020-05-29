@extends('layouts.master')

@section('content')
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container mt-5">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
        @include('partials.contact_me')
    </section>
@endsection
