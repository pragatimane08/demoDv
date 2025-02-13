@extends('layouts.app')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/neswletterh1.avif') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Newsletter</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Newsletter</a></li>
                  <li class="breadcrumb-item"><a href="#">Newsletter</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    <!-- Page Header End -->
<!-- public/img/neswletterh1.avif -->
<div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-custom">Our Newsletter</p>
                <h1 class="display-5 mb-5">Stay Updated With Our Newsletter</h1>
            </div>

            <!-- Newsletter Carousel -->
            <div class="owl-carousel project-carousel">
                
                <!-- Yearly Newsletter 2024 -->
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/yearneswL2024.png" alt="Yearly Newsletter 2024">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/yearneswL2024.png" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="pdf/Yearly-Newsletter-2_compressed.pdf" download><i class="fa fa-download"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="pdf/Yearly-Newsletter-2_compressed.pdf" download>Yearly Newsletter 2024</a>
                        <span>Download our comprehensive yearly newsletter for 2024.</span>
                    </div>
                </div>

                <!-- Monthly Newsletter December 2024 -->
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/montlydec2024.png" alt="Monthly Newsletter December 2024">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/montlydec2024.png" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="pdf/Monthly-Newsletter-Dec-24_compressed.pdf" download><i class="fa fa-download"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="pdf/Monthly-Newsletter-Dec-24_compressed.pdf" download>Monthly Newsletter December 2024</a>
                        <span>Check out our December 2024 monthly newsletter.</span>
                    </div>
                </div>

                <!-- Monthly Newsletter November 2024 -->
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/monthnov2024.png" alt="Monthly Newsletter November 2024">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/monthnov2024.png" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="pdf/Monthly-Report-November-24_compressed.pdf" download><i class="fa fa-download"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="pdf/Monthly-Report-November-24_compressed.pdf" download>Monthly Newsletter November 2024</a>
                        <span>Explore our November 2024 monthly newsletter.</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(".project-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 5000,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    0: { items: 1 },
                    576: { items: 2 },
                    992: { items: 3 }
                }
            });
        });
    </script>

<style>
    /* news section start */
.news-container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-left: 5px solid gold;
}

.section-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
    color: #333;
}

.news-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.news-item {
    padding: 15px;
    border-radius: 8px;
    background-color: black;
    color: white;
    border: 1px solid gold;
    transition: transform 0.3s;
}

.news-item:hover {
    transform: scale(1.02);
}

.news-item h3 {
    margin: 0 0 10px;
    font-size: 18px;
    color: gold;
}

.news-item p {
    margin: 0;
    font-size: 14px;
    line-height: 1.5;
}

.news-item a {
    color: gold;
    text-decoration: none;
    font-weight: bold;
}

.news-item a:hover {
    text-decoration: underline;
}
</style>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
