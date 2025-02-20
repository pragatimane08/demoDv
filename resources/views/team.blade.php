@extends('layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/our team-img4.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Our Team</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">About Us</a></li>
                  <li class="breadcrumb-item"><a href="#"> Our Team</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
<!-- Page Header End -->


<!-- Page Header End -->

<!--Our teams start-->
<div class="our-team-heading">Our Team</div>
<div class="our-team-container">

    <!--out team - card-1-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-1')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/Bhaskaran.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">VH Bhaskaran</span>
                <span class="about-me">Director</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="https://www.linkedin.com/in/bhaskaran-v-0337731a6/" target="_blank">
                            <path
                                d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
    <!--out team - card-1-end-->

    <!--out team - card-2-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-2')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/Devanathan.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">G Devanathan</span>
                <span class="about-me">Co-Founder</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="https://www.linkedin.com/in/devanathan-govindarajan-245423170/" target="_blank">
                            <path
                                d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
    <!--out team - card-2-end-->

    <!--out team - card-3-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-3')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/Dassan.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">V Krishna Dassan</span>
                <span class="about-me">Director, Wealth Management</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="https://www.linkedin.com/in/vkrishnadassan/" target="_blank">
                            <path
                                d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
    <!--out team - card-3-end-->

    <!--out team - card-4-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-4')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/Balaji.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">Balaji S</span>
                <span class="about-me">Vice President, Wealth Management</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="https://www.linkedin.com/in/balaji-sathasivam-27b6a61a8/" target="_blank">
                            <path
                                d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
    <!--out team - card-4-end-->

    <!--out team - card-5-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-5')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/vbalaji.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">V.Balaji</span>
                <span class="about-me">Vice President, Equities</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="https://www.linkedin.com/in/balaji-vijayaraghavan-0953a275/" target="_blank">
                            <path
                                d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
</div>
<!--out team - card-5-end-->


</div>
<!--Our teams end -->

<!-- Pop-up Card(Our team)-start -->

<!-- Popup Card -->
<div id="our-team-popup-card-1" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-1')">&times;</span>
        <img src="img/team/img1.png" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>VH Bhaskaran</h2>
        <p>Designation: Director</p>
        <p>Years of Experience: 40 years in various fields.</p>
        <p>Organisational Experience - Sun Capital, Emkay, IndiaNivesh</p>
        <div class="our-team-popup-social-icons">
            <a href="https://www.linkedin.com/in/bhaskaran-v-0337731a6/" class="our-team-linkedin"><i
                    class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>

<div id="our-team-popup-card-2" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-2')">&times;</span>
        <img src="img/team/img-2.png" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>G Devanathan</h2>
        <p>Designation: Director</p>
        <p>Years of Experience: Chartered Accountant with 30 years of Portfolio Management experience with
            top-ranked investors like Rakesh Jhunjhunwala and funds focused on India in key positions.</p>
        <p>Proficient in identifying and investing in growth stocks with attractive risk-reward metrics.</p>
        <p>Organisational Experience - RARE Enterprises (Rakesh Jhunjhunwala Group), Kotak Securities-Institutional
            Equities, New Vernon Capital.</p>
        <div class="our-team-popup-social-icons">
            <a href="https://www.linkedin.com/in/devanathan-govindarajan-245423170/" class="our-team-linkedin"><i
                    class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>

<div id="our-team-popup-card-3" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-3')">&times;</span>
        <img src="img/team/img3.jpg" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>V Krishna Dassan</h2>
        <p>Designation: Director, Wealth Management</p>
        <p>Years of Experience: 22 years of experience in Wealth Management, Mutual Funds, Private Banking & Retail
            Banking.</p>
        <p>Regular Speaker in TV Channels & Investor Seminars.</p>
        <p>Organisational Experience - ICICI Bank, IndiaNivesh, Emkay, HDFC Bank, Cholamandalam</p>
        <div class="our-team-popup-social-icons">
            <a href="https://www.linkedin.com/in/vkrishnadassan/" class="our-team-linkedin"><i
                    class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>

<div id="our-team-popup-card-4" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-4')">&times;</span>
        <img src="img/team/img4.JPG" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>Balaji S </h2>
        <p>Designation: Vice President, Wealth Management</p>
        <p>Years of Experience: 19 years of experience in Wealth Management, Mutual Funds, PMS/AIF Insurance &
            Equities..</p>
        <p>Regular Speaker in TV Channels & Investor Seminars.</p>
        <p>Organisational Experience - ICICI Bank, IndiaNivesh, Emkay, HDFC Bank, Cholamandalam</p>
        <div class="our-team-popup-social-icons">
            <a href="https://www.linkedin.com/in/balaji-sathasivam-27b6a61a8/" class="our-team-linkedin"><i
                    class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>


<div id="our-team-popup-card-5" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-5')">&times;</span>
        <img src="img/team/img5.jpg" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>V.Balaji</h2>
        <p>Designation: Vice President, Equities</p>
        <p>Years of Experience: 17 years of experience in Stockbroking, Equity Advisory/Trading, Team Management,
            Assets & Banking</p>
        <p>Regular Speaker in TV Channels & Investor Seminars.</p>
        <p>Organisational Experience - ICICI Bank, Emkay, IndiaNivesh, HP.</p>
        <div class="our-team-popup-social-icons">
            <a href="https://www.linkedin.com/in/balaji-vijayaraghavan-0953a275/" class="our-team-linkedin"><i
                    class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>

<!-- Pop-up Card(Our team)-end -->


<!--Our Advisors start-->
<div class="our-team-heading">Our Advisors</div>
<div class="our-team-container">

    <!--out Advisors - card-1-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-1.1')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/ramasamyad.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">Mr. S. Ramasamy</span>
                <span class="about-me">Former CIO – Debt Funds & Equity Fund Manager of LIC Mutual Fund.</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="linkedin.com/in/ramasamy-subbiah-090005b6" target="_blank">
                            <path d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
    <!--out Advisors - card-1-end-->

    <!--out Advisors - card-2-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-1.2')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/bhat.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">Mr. UR Bhat</span>
                <span class="about-me">Co-Founder and Director at Alphaniti Fintech Pvt. Ltd.</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="http://linkedin.com/in/u-r-bhat-6238b44a" target="_blank">
                            <path d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
    <!--out Advisors - card-2-end-->

    <!--out Advisors - card-3-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-1.3')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/jainteamad.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">Mr. Suresh Jain</span>
                <span class="about-me">Advisor</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="http://linkedin.com/in/sureshjainsuncapital" target="_blank">
                            <path d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
    <!--out Advisors - card-3-end-->

    <!--out Advisors - card-4-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-1.4')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/desai.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">Mr. Kaushik Desai</span>
                <span class="about-me">Managing Partner, Walton Street India Real Estate Advisors Pvt.
                    Ltd.</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="http://linkedin.com/in/kaushik-desai-31ab6b8" target="_blank">
                            <path d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
    <!--out Advisors - card-4-end-->

    <!--out Advisors - card-5-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-1.5')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/Subramania.png" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">Mr. Venkatesh Subramanian</span>
                <span class="about-me">CEO and Portfolio Manager at LogicTree Investment Advisors</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="http://linkedin.com/in/venkatesh-subramanian-2947904" target="_blank">
                            <path d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" />
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
</div>
<!--out Advisors - card-5-end-->


</div>
<!--Our Advisors end -->

<!-- Pop-up Card(Our Advisors)-start -->

<!-- Popup Card -->
<div id="our-team-popup-card-1.1" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-1.1')">&times;</span>
        <img src="img/team/img-a-1.png" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>Mr. S. Ramasamy</h2>
        <p>Designation: Former CIO – Debt Funds & Equity Fund Manager of LIC Mutual Fund.</p>
        <p>Experience: A Chartered Accountant by Qualification, worked with Life Insurance Corporation of India for
            31 years in various capacities like Head of equity research, Equity Fund Manager and Treasury Head. Was
            on deputation to LIC Mutual Fund for 11 years as Equity Fund Manager and CIO Debt. Post superannuation
            was Chief Risk Officer of LIC Mutual Fund for two years</p>
        <p> </p>
        <div class="our-team-popup-social-icons">
            <a href="#" class="our-team-linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>

<div id="our-team-popup-card-1.2" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-1.2')">&times;</span>
        <img src="img/team/img-a-2 .png" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>Mr. UR Bhat</h2>
        <p>Designation: Co-Founder and Director at Alphaniti Fintech Pvt. Ltd.</p>
        <p>Years of Experience: An IIT Alumnus with more than 45 years of experience in leading financial
            institutions. He has scaled Asset Management Divisions for Major National and International Financial
            Companies. Has served as an independent director in many Traditional Finance Companies.</p>
        <div class="our-team-popup-social-icons">
            <a href="http://linkedin.com/in/u-r-bhat-6238b44a" class="our-team-linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>

<div id="our-team-popup-card-1.3" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-1.3')">&times;</span>
        <img src="img/team/img-a-3.png" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>Mr. Suresh Jain</h2>
        <p>Experience: 30+ years of experience as Entrepreneur & Angel Investor. Built Networth Capital, Sun Capital
            and Sun Global in Finance. Created impact socially through Vidyaghar and VKK Institute.</p>
        <div class="our-team-popup-social-icons">
            <a href="http://linkedin.com/in/sureshjainsuncapital" class="our-team-linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>

<div id="our-team-popup-card-1.4" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-1.4')">&times;</span>
        <img src="img/team/img-a-4.png" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>Mr. Kaushik Desai</h2>
        <p>Designation: Managing Partner, Walton Street India Real Estate Advisors Pvt. Ltd.</p>
        <p>Experience: He is a CA and CS at Walton Street, he is responsible for strategic initiatives, investments
            in Corporate Debt and managing key relationship with investors, funds and intermediaries. Past
            experience-Deutsche Bank, Edelweiss Capital and Dawnay Day AV</p>
        <div class="our-team-popup-social-icons">
            <a href="http://linkedin.com/in/kaushik-desai-31ab6b8" class="our-team-linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>


<div id="our-team-popup-card-1.5" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-1.5')">&times;</span>
        <img src="img/team/img-a-5 (1).png" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>Mr. Venkatesh Subramanian</h2>
        <p>Designation: CEO and Portfolio Manager at LogicTree Investment Advisors</p>
        <p>Years of Experience: 15 Years of investment track record in Portfolio Management Services
            10 Years International Management at AP Moller Maersk </p>
        <div class="our-team-popup-social-icons">
            <a href="http://linkedin.com/in/venkatesh-subramanian-2947904" class="our-team-linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>

<!-- Pop-up Card(Our Advisors)-end -->

<!--Our  Managing Partners start-->
<div class="our-team-heading">Our Managing Partners</div>
<div class="our-team-container">

    <!--out  Managing Partners - card-1-start-->
    <div class="our-team-card" onclick="showPopup('our-team-popup-card-2.1')">
        <button class="mail">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
        </button>
        <div class="profile-pic">
            <img src="img/team/team-m.jpg" alt="Team Member">
        </div>
        <div class="bottom">
            <div class="content">
                <span class="name">AS Narayanan</span>
                <span class="about-me">Managing Partner</span>
            </div>
            <div class="bottom-bottom">
                <div class="social-links-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" color: white>
                        <a href="https://www.linkedin.com/in/balaji-vijayaraghavan-0953a275/" target="_blank">
                            <!-- <path d="M100.28 448H7.4V149.86h92.88zM53.79 108.1C24.09 108.1 0 83.68 0 54.36A54.31 54.31 0 0154.36 0a54.31 54.31 0 0154.36 54.36c.04 29.32-24.04 53.74-54.93 53.74zM447.91 448h-92.68V304.36c0-34.31-12.26-57.73-42.87-57.73-23.36 0-37.25 15.77-43.36 31.03-2.22 5.41-2.78 13.04-2.78 20.68V448h-92.67s1.24-241.17 0-266.14h92.67v37.71c-.19.31-.46.61-.64.92h.64v-.92c12.32-18.94 34.36-45.96 83.54-45.96 60.94 0 106.65 39.74 106.65 125.14V448z" /> -->
                    </svg>
                </div>
                <button class="button">About Me</button>
            </div>
        </div>
    </div>
    <!--out  Managing Partners - card-1-end-->
</div>

<!-- Popup Card -->
<div id="our-team-popup-card-2.1" class="our-team-popup-card">
    <div class="our-team-popup-content">
        <span class="our-team-close-btn" onclick="closePopup('our-team-popup-card-2.1')">&times;</span>
        <img src="img/team/team-m.jpg" alt="VH Bhaskaran" class="our-team-profile-pic-popup">
        <h2>AS Narayanan</h2>
        <p></p>
        <p>Experience: CA & CS with 30+ years of financial management experience including accounting,
            process improvements & risks management practices in various industries including Payments,
            Services and Manufacturing.</p>
        <p>Organizational Experience: Crompton Group, Dresser Industries, NCR Corporation, Euronet Services,
            Ingenico Group and Payswiff Group</p>
        <!-- <div class="our-team-popup-social-icons">
            <a href="#" class="our-team-linkedin"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="our-team-facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="our-team-twitter"><i class="fab fa-twitter"></i></a>
        </div> -->
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>



<!-- Template Javascript -->

<script src="js/main.js"></script>

<script>
    function showPopup(popupId) {
        const popup = document.getElementById(popupId);
        if (popup) {
            popup.classList.add('active');
        }
    }

    function closePopup(popupId) {
        const popup = document.getElementById(popupId);
        if (popup) {
            popup.classList.remove('active');
        }
    }
</script>
@endsection