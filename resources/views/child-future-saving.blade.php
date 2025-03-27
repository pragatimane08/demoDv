@extends('layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/chidhd.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Child Future Planning</h1>
           <!-- <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Service</a></li>
                  <li class="breadcrumb-item"><a href="#">Child Future Planning</a></li>
              </ol>
           </nav> -->
      </div>
   </div>
</div>
    <!-- Page Header End -->




<!-- Child Future Saving Section-1 -->
<div class="pms-info-container" id="pms-info-section1">
    <h1 class="pms-info-heading">Child Future Saving</h1>
    <p class="pms-info-content">
        <span class="highlight">The birth of a child is one of the most important events in one’s life</span> other than the celebration; it brings maturity and responsibility to the parents. It also brings seriousness regarding our financial life and if we talk about priority of goals, sometimes Child Future Plan is even a shade above retirement planning.

        <span class="highlight">There has been a paradigm shift </span> in the thought process of people and generally they don’t make any distinction between <span class="highlight">sons and daughters.</span> Socially their thinking may have changed but financially they still belong to that old school which is happy with buying insurance policies or some bonds in name of the children.
        Few new age parents have started buying child <span class="highlight">Unit Linked Insurance Plans (ULIPs)</span> rather than <span class="highlight">money-back policies.</span> But is it actually a smart strategy? The simple answer is NO. Emotional sales take place where investors take decisions based on their emotions.</p>
    <p class="pms-info-content">
     <span class="highlight">As a parent you want to be the pillar of strength and support</span>  for your child, making sure that his/her future plans remain undisturbed even when you are not around.
    We can help you to make you child future safe and secure.  
    </p>
</div>
<!-- child future -heading -->

<!-- Child Future Saving Section-2 -->
<section class="child-future-saving-section">
    <div class="child-future-saving-container">
        <div class="child-future-saving-image">
            <img src="img/childfuturesaving.jpg" alt="Parents planning a secure financial future for their child’s
education.">
        </div>
        <div class="child-future-saving-content">
            <h1>Secure Your Child's Future</h1>
            <p>
                The birth of a child is a life-changing moment. Beyond the joy and celebration, it brings responsibility and financial planning to ensure a bright future. While many parents opt for traditional insurance plans, it's essential to explore smarter investment strategies.
            </p>
            <p>
                <strong>Plan wisely</strong> and ensure your child's education and future dreams are secured with modern financial instruments that offer better returns and flexibility.
            </p>
            <a href="{{ route('schedulemeeting') }}" class="child-future-saving-btn">Schedule Meeting</a>
        </div>
    </div>
</section>

    <!-- Why Planning Section with Moving Circular Structure -->
<section class="why-planning">
    <div class="container">
      <h1 class="why-planning-h1">Why is Child Future Planning Important?</h1>
      <div class="moving-circle">
        <div class="circle-item">
          <div class="icon">🎉</div>
          <p>Joy of Parenthood</p>
        </div>
        <div class="circle-item">
          <div class="icon">💼</div>
          <p>Need for Responsibility</p>
        </div>
        <div class="circle-item">
          <div class="icon">📈</div>
          <p>Financial Planning</p>
        </div>
        <div class="circle-item">
          <div class="icon">🧑‍🎓</div>
          <p>Education</p>
        </div>
      </div>
    </div>
    
  </section>
  <h1 class="why-planning-h2"> Educational Calculator</h1>
  <iframe src="https://www.investwell.in/updation/parameter/Calculator/par_education_plannerN.jsp" width="100%" height="900"></iframe>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection
