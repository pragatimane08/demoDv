@extends('layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/seminaryouthhd.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 60vh;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Investment Seminar For Youth</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- New Image and Information Section -->
<section class="info-section">
    <div class="info-image">
        <img src="img/y45.jpeg" alt="Speaker educating attendees on stock market and mutual fund investments.">
    </div>
    <div class="info-content">
        <h1>Investment Seminars for Youth</h1>
        <p>We, at Dhanavruksha, are highly committed to educating the youth on effective Wealth Management, encouraging them to adequately invest and insure from their very early stage to avoid financial shocks to themselves and the dependent family.</p>
        <p>As youth have the most powerful tool—“TIME” on their hands, starting investments early and allocating a decent portion of their investments to equity-oriented instruments can accumulate huge wealth for them over the long term. If the youth who decide the future of the country make the right investment decisions, it will directly impact the economy and growth of the country, to which we would like to make our contribution. With this intent, we conduct educational seminars for the youth at corporates and colleges to sow the seeds for managing their wealth effectively from their very early age. We welcome invitations from corporates and colleges, and we would be happy to conduct such seminars for them.</p>
    </div>
</section>

<!-- Main Content Section -->
<section id="content">
    <!-- Seminar 1 -->
    <div id="seminar1" class="details-section active">
        <div class="flyer">
            <div class="flyer-header">
                <span>G-Square</span>
                <h1>Empowering Financial Knowledge</h1>
                <p class="subtext">Wealth Management and Tax Planning for Informed Decisions</p>
            </div>
            <div class="flyer-content">
                <div class="carousel">
                    <div class="carousel-images">
                        <img src="img/gsqaure2.jpg" alt="Image 1">
                        <img src="img/gsquare1.jpg" alt="Image 2">
                    </div>
                    <div class="carousel-buttons">
                        <button class="carousel-button prev">&#10094;</button>
                        <button class="carousel-button next">&#10095;</button>
                    </div>
                    <div class="carousel-dots">
                        <div class="carousel-dot active" data-index="0"></div>
                        <div class="carousel-dot" data-index="1"></div>
                    </div>
                </div>
                <div class="details">
                    <h2>About the Seminar</h2>
                    <p>We had the privilege of conducting a comprehensive Financial Literacy initiative for the esteemed team at G Square. The sessions focused on Wealth Management and Tax Planning, aiming to empower employees with the knowledge needed to make informed financial decisions. Over 150 employees participated across three in-person sessions and one virtual session.</p>
                </div>
            </div>
            <div class="flyer-details">
                <div class="date-time">
                    <h3>Eventura</h3>
                    <p>December 2023</p>
                </div>
                <div class="location">
                    <h3>Location</h3>
                    <p>Chennai</p>
                </div>
                <div class="attendees">
                    <h3>No. of Attendees</h3>
                    <p>Surpassing 150 participants</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seminar 2 -->
    <div id="seminar2" class="details-section">
        <div class="flyer">
            <div class="flyer-header">
                <span>Synergech Technologies</span>
                <h1>Spreading Financial Awareness</h1>
                <p class="subtext">The importance of starting disciplined investing at a young age.</p>
            </div>
            <div class="flyer-content">
                <div class="carousel">
                    <div class="carousel-images">
                        <img src="img/seminar2_1.jpg" alt="Young adults learning about money management and investment strategies.">
                        <img src="img/seminar2_2.jpg" alt="Image 2, Young adults learning about money management and investment strategies.">
                        <img src="img/seminar2_3.jpg" alt="Image 3, Young adults learning about money management and investment strategies.">
                    </div>
                    <div class="carousel-buttons">
                        <button class="carousel-button prev">&#10094;</button>
                        <button class="carousel-button next">&#10095;</button>
                    </div>
                    <div class="carousel-dots">
                        <div class="carousel-dot active" data-index="0"></div>
                        <div class="carousel-dot" data-index="1"></div>
                        <div class="carousel-dot" data-index="2"></div>
                    </div>
                </div>
                <div class="details">
                    <h2>About the Seminar</h2>
                    <p>In its mission of spreading financial awareness, DV conducted its next corporate session on 15th May for the employees of Synergech Technologies India Private Limited at Chennai. The attendees were mostly in their 20s and 30s which makes it even more special, as disciplined investing if started young can create immense impact in wealth creation. We believe our session has instilled awareness, discipline and hope in the minds of the attendees to make informed investments and more importantly avoid unhealthy investing habits and products that are hazardous to wealth creation.</p>
                </div>
            </div>
            <div class="flyer-details">
                <div class="date-time">
                    <h3>Eventura</h3>
                    <p>May 2024</p>
                </div>
                <div class="location">
                    <h3>Location</h3>
                    <p>Chennai</p>
                </div>
                <div class="attendees">
                    <h3>No. of Attendees</h3>
                    <p>Surpassing 30 participants</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seminar 3 -->
    <div id="seminar3" class="details-section">
        <div class="flyer">
            <div class="flyer-header">
                <span>IppoPay Technologies</span>
                <h1>Financial Wellness</h1>
                <p class="subtext">Payment Infrastructure to small businesses.</p>
            </div>
            <div class="flyer-content">
                <div class="carousel">
                    <div class="carousel-images">
                        <img src="img/seminar3_1.jpg" alt="Image 1">
                        <img src="img/seminar3_2.jpg" alt="Image 2">
                        <img src="img/seminar3_3.jpg" alt="Image 3">
                    </div>
                    <div class="carousel-buttons">
                        <button class="carousel-button prev">&#10094;</button>
                        <button class="carousel-button next">&#10095;</button>
                    </div>
                    <div class="carousel-dots">
                        <div class="carousel-dot active" data-index="0"></div>
                        <div class="carousel-dot" data-index="1"></div>
                        <div class="carousel-dot" data-index="2"></div>
                    </div>
                </div>
                <div class="details">
                    <h2>About the Seminar</h2>
                    <p>Our quest to educate as many people on Financial wellness found the next opportunity at ippopay, a leading provider of Payment Infrastructure to small businesses. Ippopay, in the interest of the Financial wellness of their team chose us to conduct an educative session for their Chennai team of about 100 employees. We also conducted a separate virtual session for their Bangalore and Mumbai teams.</p>
                </div>
            </div>
            <div class="flyer-details">
                <div class="date-time">
                    <h3>Eventura</h3>
                    <p>June 2024</p>
                </div>
                <div class="location">
                    <h3>Location</h3>
                    <p>Chennai</p>
                </div>
                <div class="attendees">
                    <h3>No. of Attendees</h3>
                    <p>Surpassing 100 participants</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seminar 4 -->
    <div id="seminar4" class="details-section">
        <div class="flyer">
            <div class="flyer-header">
                <span>Sify Technologies</span>
                <h1>Financial Literacy</h1>
                <p class="subtext">Savings and wise investing into them to create great wealth to meet all their dreams.</p>
            </div>
            <div class="flyer-content">
                <div class="carousel">
                    <div class="carousel-images">
                        <img src="img/seminar4_1.png" alt="Image 1">
                        <img src="img/seminar_4_2.jpg" alt="Image 2">
                        <img src="img/seminar_4_3.png" alt="Image 3">
                        <img src="img/seminar_4_4.png" alt="Image 4">
                    </div>
                    <div class="carousel-buttons">
                        <button class="carousel-button prev">&#10094;</button>
                        <button class="carousel-button next">&#10095;</button>
                    </div>
                    <div class="carousel-dots">
                        <div class="carousel-dot active" data-index="0"></div>
                        <div class="carousel-dot" data-index="1"></div>
                        <div class="carousel-dot" data-index="2"></div>
                    </div>
                </div>
                <div class="details">
                    <h2>About the Seminar</h2>
                    <p>We landed at the next opportunity of providing Financial Literacy to about 300 freshers at Sify Technologies. It's extremely satisfying that we have sown the first seeds of savings and wise investing into them to create great wealth to meet all their dreams. Sifty Technologies had also invited us for another session to educate their new set of Management Trainees on Effective Wealth Management.</p>
                </div>
            </div>
            <div class="flyer-details">
                <div class="date-time">
                    <h3>Eventura</h3>
                    <p>July 2024</p>
                </div>
                <div class="location">
                    <h3>Location</h3>
                    <p>Chennai</p>
                </div>
                <div class="attendees">
                    <h3>No. of Attendees</h3>
                    <p>Surpassing 300 participants</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seminar 5 -->
    <div id="seminar5" class="details-section">
        <div class="flyer">
            <div class="flyer-header">
                <span>XIM University</span>
                <h1>Wealth Management and Financial Planning Case Studies</h1>
                <p class="subtext">Corporate and Entrepreneurial Careers in Wealth Management.</p>
            </div>
            <div class="flyer-content">
                <div class="carousel">
                    <div class="carousel-images">
                        <img src="img/seminar5_1.jpg" alt="Image 1">
                        <img src="img/seminar5_2.jpg" alt="Image 2">
                        <img src="img/seminar5_3.jpg" alt="Image 3">
                        <img src="img/seminar5_4.jpg" alt="Image 4">
                    </div>
                    <div class="carousel-buttons">
                        <button class="carousel-button prev">&#10094;</button>
                        <button class="carousel-button next">&#10095;</button>
                    </div>
                    <div class="carousel-dots">
                        <div class="carousel-dot active" data-index="0"></div>
                        <div class="carousel-dot" data-index="1"></div>
                        <div class="carousel-dot" data-index="2"></div>
                    </div>
                </div>
                <div class="details">
                    <h2>About the Seminar</h2>
                    <p>We take great pleasure in sharing that we conducted 2 days of Immersion Course on Wealth Management for the 2nd year MBA-Finance batch of 60 students of XIM University, Harirajpur, Odisha. We found the students to have a huge quest for knowledge and they were highly interactive to seek clarity. Our youth's knowledge, clarity, and intelligence keep us amazed when we interact with students in such sessions. We designed and executed this Immersion Course with 360-degree optics. The 2 days were well distributed between comprehensive interactive Coaching on all Wealth Management aspects, a complete Financial Planning process, an excel session on Financial Planning calculations, a notional portfolio management contest, solving Wealth Management and Financial Planning Case Studies and a Group contest at the end to test the knowledge grab of the students from the course. The session concluded with providing guidance to choose Corporate and Entrepreneurial Careers in Wealth Management.</p>
                </div>
            </div>
            <div class="flyer-details">
                <div class="date-time">
                    <h3>Eventura</h3>
                    <p>October 2024</p>
                </div>
                <div class="location">
                    <h3>Location</h3>
                    <p>Harirajpur, Odisha</p>
                </div>
                <div class="attendees">
                    <h3>No. of Attendees</h3>
                    <p>Surpassing 60 participants</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- Scripts -->
<script>
    // Auto-cycle seminars
    let currentSeminarIndex = 0;
    const seminars = document.querySelectorAll('.details-section');
    const totalSeminars = seminars.length;

    function showNextSeminar() {
        // Hide the current seminar
        seminars[currentSeminarIndex].classList.remove('active');

        // Move to the next seminar
        currentSeminarIndex = (currentSeminarIndex + 1) % totalSeminars;

        // Show the next seminar
        seminars[currentSeminarIndex].classList.add('active');
    }

    // Set the interval to switch seminars every 5 seconds (5000 milliseconds)
    setInterval(showNextSeminar, 5000);

    // Carousel functionality
    document.querySelectorAll('.carousel').forEach(carousel => {
        const images = carousel.querySelector('.carousel-images');
        const dots = carousel.querySelectorAll('.carousel-dot');
        const prevButton = carousel.querySelector('.prev');
        const nextButton = carousel.querySelector('.next');
        let currentIndex = 0;

        const updateCarousel = (index) => {
            images.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach(dot => dot.classList.remove('active'));
            dots[index].classList.add('active');
        };

        const moveToNextImage = () => {
            currentIndex = (currentIndex < dots.length - 1) ? currentIndex + 1 : 0;
            updateCarousel(currentIndex);
        };

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : dots.length - 1;
            updateCarousel(currentIndex);
        });

        nextButton.addEventListener('click', () => {
            moveToNextImage();
        });

        dots.forEach(dot => {
            dot.addEventListener('click', (e) => {
                currentIndex = parseInt(e.target.dataset.index);
                updateCarousel(currentIndex);
            });
        });

        // Automatically move to the next image every 3 seconds
        const interval = setInterval(moveToNextImage, 3000);

        // Optional: Pause automatic movement when user interacts
        carousel.addEventListener('mouseenter', () => clearInterval(interval));
        carousel.addEventListener('mouseleave', () => {
            setInterval(moveToNextImage, 3000);
        });
    });
</script>

<!-- Styles -->
<style>
    .details-section {
        display: none;
    }

    .details-section.active {
        display: block;
    }

    .carousel {
        max-width: 500px;
        max-height: 500px;
        overflow: hidden;
        position: relative;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .carousel-images {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-images img {
        width: 100%;
        flex-shrink: 0;
    }

    .carousel-buttons {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
    }

    .carousel-button {
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        color: white;
        font-size: 18px;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 50%;
        transition: background-color 0.3s;
    }

    .carousel-button:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .carousel-dots {
        position: absolute;
        bottom: 10px;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .carousel-dot {
        width: 10px;
        height: 10px;
        margin: 0 5px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .carousel-dot.active {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .flyer {
        width: 100%;
        max-width: 1400px;
        margin: 20px auto;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        border: 1px solid #ddd;
         margin-left:-4%; 
    }

    .flyer-header {
        background: linear-gradient(135deg, rgb(9, 9, 9), rgb(0, 5, 14));
        color: #fff;
        text-align: center;
        padding: 30px 20px;
        position: relative;
    }

    .flyer-header h1 {
        margin: 0;
        font-size: 4vw;
        font-weight: bold;
        color: #cb9f42;
    }

    .flyer-header span {
        font-size: 1.8vw;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #ddd;
    }

    .flyer-header .subtext {
        font-size: 1.5vw;
        margin-top: 15px;
        color: #f9f9f9;
    }

    .flyer-content {
        display: flex;
        flex-wrap: wrap;
        padding: 30px;
        align-items: center;
    }

    .flyer-content .image {
        flex: 1;
        padding: 10px;
        text-align: center;
    }

    .flyer-content .image img {
        width: 100%;
        max-width: 400px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .flyer-content .details {
        flex: 2;
        padding: 20px;
        text-align: left;
    }

    .flyer-content h2 {
        margin: 0;
        font-size: 2.5vw;
        font-weight: bold;
        color: #cb9f42;
        margin-bottom: 15px;
    }

    .flyer-content p {
        margin: 10px 0;
        font-size: 1.2vw;
        line-height: 1.8;
        color: #555;
    }

    .flyer-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 25px;
        background: #f9f9f9;
        border-top: 1px solid #ddd;
    }

    .flyer-details div {
        flex: 1;
        min-width: 200px;
        text-align: center;
        margin: 10px 0;
    }

    .flyer-details div h3 {
        margin: 5px 0;
        font-size: 1.8vw;
        color: #cb9f42;
    }

    .flyer-details div p {
        margin: 0;
        font-size: 1.2vw;
        color: #555;
    }

    /* ===== Mobile & Tablet Layout (Image Above, Content Below) ===== */
@media (max-width: 1024px) {
    .flyer-content {
        flex-direction: column;
    }
    
    .flyer-content .image {
        margin-bottom: 20px;
    }
    
    .flyer-content .details {
        text-align: center;
        padding: 10px;
    }
    
    /* Adjust font sizes for smaller screens */
    .flyer-header h1 {
        font-size: clamp(24px, 6vw, 36px);
    }
    
    .flyer-header span {
        font-size: clamp(14px, 3vw, 20px);
    }
    
    .flyer-header .subtext {
        font-size: clamp(12px, 2.5vw, 16px);
    }
    
    .flyer-content h2 {
        font-size: clamp(20px, 4vw, 28px);
    }
    
    .flyer-content p {
        font-size: clamp(14px, 2.5vw, 16px);
    }
    
    /* Stack details on very small screens */
    @media (max-width: 480px) {
        .flyer-details div {
            min-width: 100%;
        }
    }
}

/* ===== Desktop Layout (Side by Side) ===== */
@media (min-width: 1025px) {
    .flyer-content {
        flex-direction: row;
    }
    
    .flyer-content .details {
        text-align: left;
    }
}
</style>
@endsection