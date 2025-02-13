
@extends('layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/learninghd.avif') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Learning</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Investor Zone</a></li>
                  <li class="breadcrumb-item"><a href="#">Learning</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->

    <!-- public/img/learninghd.avif -->

    
    <!-- learning videos start -->
    <div class="video-gallery">
        <h1 class="video-gallery-title">Learning Videos</h1>
        <div class="video-grid">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/r1qQpXWcDNQ" allowfullscreen></iframe>
            </div>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/6dJmILRJU7E" allowfullscreen></iframe>
            </div>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/LNQEPP2V6nE" allowfullscreen></iframe>
            </div>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/o5IZ9huD3OM" allowfullscreen></iframe>
            </div>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/bCdojayM3PI" allowfullscreen></iframe>
            </div>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/TY5BiqOu6jI" allowfullscreen></iframe>
            </div>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/TFE-xMOWlQA" allowfullscreen></iframe>
            </div>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/1XSbjGMHOz8" allowfullscreen></iframe>
            </div>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/OwSdwgsvnVQ" allowfullscreen></iframe>
            </div>
        </div>
    </div>
     <!-- /learning videos end -->

   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    
    


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection