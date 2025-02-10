@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
     
     </style>
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Blogs</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blogs</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Section Start -->
    
   <div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Recent</span> Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>

        <div class="row">
    @foreach ($blogs as $index => $blog)
        @php
            // Define an array of manual images
            $images = [
                'img/houseb1.jpg',
                'img/bigifgblog2.png',
                'img/fixdepoblo3.png',
                'img/incomtablog4.jpg'
            ];
            
            // Assign images in a cyclic manner based on the index
            $manualImage = asset($images[$index % count($images)]);

            // Use database image if available, otherwise fallback to manual image
            $imagePath = $blog->image ? asset('storage/' . $blog->image) : $manualImage;
        @endphp
        <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
                <a href="{{ $blog->link }}" class="block-20 d-flex align-items-end"
                   style="background-image: url('{{ $imagePath }}');">
                    <div class="meta-date text-center p-2">
                        <span class="day">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</span>
                        <span class="mos">{{ \Carbon\Carbon::parse($blog->created_at)->format('F') }}</span>
                        <span class="yr">{{ \Carbon\Carbon::parse($blog->created_at)->format('Y') }}</span>
                    </div>
                </a>
                <div class="text bg-white p-4">
                    <h3 class="heading"><a href="{{ $blog->link }}">{{ $blog->title }}</a></h3>
                    <p>{{ Str::limit($blog->description, 150) }}</p>
                    <div class="d-flex align-items-center mt-4">
                        <p class="mb-0">
                            <a href="{{ $blog->link }}" class="btn custom-outline-btn">Read More 
                                <span class="ion-ios-arrow-round-forward"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

        </div>
   </div>
    <!-- Blog End -->
    <!-- Blog Section End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>
@endsection
