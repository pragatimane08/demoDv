<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dhanavruksha</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        <style id='classic-theme-styles-inline-css'>
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em
            }

            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none
            }
        </style>
        
        
        <link rel='stylesheet' id='wpo_min-header-0-css' href='https://dhanavruksha.in/wp-content/cache/wpo-minify/1732761678/assets/wpo-minify-header-8631a9c9.min.css' media='all'/>
        <link rel='stylesheet' id='genericons-css' href='https://dhanavruksha.in/wp-content/themes/twentysixteen/genericons/genericons.css' media='all'/>
        
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
       
        
        <style id="custom-background-css">
            body.custom-background {
                background-color: #ffffff;
            }
        </style>
        

    <!-- <link href="css/ionicons.min.css" rel="stylesheet"> -->


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid text-white d-none d-lg-flex" style="background-color: #06060b;">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <img src="img/dhanavruksha-logo-new.png" alt="Logo" class="img-fluid" style="max-height: 60px;">

                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0"></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('company-profile') }}" class="dropdown-item">Company Profile</a>
                                <a href="{{ route('team') }}" class="dropdown-item">Team</a>

                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('equity') }}" class="dropdown-item">Equity And Derivatives</a>
                                <a href="{{ route('mutual-funds') }}" class="dropdown-item">Mutual Funds</a>
                                <a href="{{ route('pms-aif') }}" class="dropdown-item">PMS-AIF</a>
                                <a href="{{ route('fixed-deposits') }}" class="dropdown-item">Fixed Deposits</a>
                                <a href="{{ route('bonds') }}" class="dropdown-item">Bonds</a>


                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('wealth-management') }}" class="dropdown-item">Wealth Management</a>
                                <a href="{{ route('financial-planning') }}" class="dropdown-item">Financial Planning</a>
                                <a href="{{ route('tax-planning') }}" class="dropdown-item">Tax Planning</a>
                                <a href="{{ route('portfolio-restucturing') }}" class="dropdown-item">Portfolio
                                    Restructuring</a>
                                <a href="{{ route('child-future-saving') }}" class="dropdown-item"> Child Future
                                    Saving</a>
                                <a href="{{ route('seminars') }}" class="dropdown-item">Investment Seminar For Youth</a>


                            </div>
                        </div>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Investor Zone</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('newsletter') }}" class="dropdown-item">Newsletter</a>
                                <a href="{{ route('financial-calculator') }}" class="dropdown-item">Financial
                                    calculator</a>
                                <a href="{{ route('downloads') }}" class="dropdown-item">Downloads</a>
                                <a href="{{ route('blogs') }}" class="dropdown-item">Blogs</a>
                                <a href="{{ route('learning') }}" class="dropdown-item">Learning</a>

                            </div>
                        </div>
                        <a href="{{route('kyc')}}" class="nav-item nav-link">KYC</a>
                        <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact</a>

                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="{{ route('login-page') }}" class="btn custom-btn rounded-pill py-2 px-3">Client
                            Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Learning</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Learning</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div data-elementor-type="wp-post" data-elementor-id="14644" class="elementor elementor-14644">
           
           <section class="elementor-section elementor-top-section elementor-element elementor-element-a1b27ef elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a1b27ef" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
               <div class="elementor-container elementor-column-gap-default">
                   <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ff153f9" data-id="ff153f9" data-element_type="column">
                       <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-103ce18 elementor-widget elementor-widget-text-editor" data-id="103ce18" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/r1qQpXWcDNQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-bf70705" data-id="bf70705" data-element_type="column">
                       <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-4c8bea3 elementor-widget elementor-widget-text-editor" data-id="4c8bea3" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/6dJmILRJU7E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d5d447b" data-id="d5d447b" data-element_type="column">
                       <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-1e003ea elementor-widget elementor-widget-text-editor" data-id="1e003ea" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/LNQEPP2V6nE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <section class="elementor-section elementor-top-section elementor-element elementor-element-ed66799 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ed66799" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
               <div class="elementor-container elementor-column-gap-default">
                   <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3d56a53" data-id="3d56a53" data-element_type="column">
                       <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-0bc681e elementor-widget elementor-widget-text-editor" data-id="0bc681e" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/o5IZ9huD3OM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-879576a" data-id="879576a" data-element_type="column">
                       <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-3996514 elementor-widget elementor-widget-text-editor" data-id="3996514" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/bCdojayM3PI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7bca158" data-id="7bca158" data-element_type="column">
                       <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-615ec01 elementor-widget elementor-widget-text-editor" data-id="615ec01" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/TY5BiqOu6jI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <section class="elementor-section elementor-top-section elementor-element elementor-element-fcdf851 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fcdf851" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
               <div class="elementor-container elementor-column-gap-default">
                   <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c858763" data-id="c858763" data-element_type="column">
                       <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-1114564 elementor-widget elementor-widget-text-editor" data-id="1114564" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/TFE-xMOWlQA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a88a60e" data-id="a88a60e" data-element_type="column">
                       <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-b5dc661 elementor-widget elementor-widget-text-editor" data-id="b5dc661" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/1XSbjGMHOz8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-df8bbb8" data-id="df8bbb8" data-element_type="column">
                       <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-4d86e23 elementor-widget elementor-widget-text-editor" data-id="4d86e23" data-element_type="widget" data-widget_type="text-editor.default">
                               <div class="elementor-widget-container">
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/OwSdwgsvnVQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
       </div>

     <!-- Footer Start -->
     <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Dhanavruksha</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.auto-type', {
            strings: [' Growth', ' Financial Freedom'],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
        });
    </script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>