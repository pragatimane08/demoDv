
@extends('layouts.app')
@section('content')

<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-custom">Our Reports</p>
            <h1 class="display-5 mb-5">Stay Updated With Our Reports</h1>
        </div>
    </div>
</div>

<!-- Carousel Start -->
<div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
    @foreach($reports as $report)
        <div class="project-item mb-5">
            <div class="position-relative">
                <img class="img-fluid" src="{{ asset('storage/' . $report->image) }}" alt="{{ $report->title }}">
                <div class="project-overlay">
                    <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('storage/' . $report->image) }}" data-lightbox="project">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('storage/' . $report->pdf) }}" target="_blank">
                        <i class="fa fa-download"></i>
                    </a>
                </div>
            </div>
            <div class="p-4">
                <a class="d-block h5" href="#">{{ $report->title }}</a>
            </div>
        </div>
    @endforeach
</div>
<!-- Carousel End -->
 @endsection