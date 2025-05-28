
@extends('layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{Vite::asset('resources/theme/img/learninghd.webp') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Learning</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Investor Zone</a></li>
                  <li class="breadcrumb-item"><a href="#">Learning</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    <!-- Page Header End -->

    <!-- public/img/learninghd.avif -->

    
    
   

     <div class="container">
    <h1 class="text-center my-4">Learning Videos</h1>
    <div class="row">
        @foreach($videos as $video)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="video-container">
                {!! $video->iframe_code !!}
            </div>
        </div>
        @endforeach
    </div>
</div>
<style>
.video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}
</style>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    
    


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection