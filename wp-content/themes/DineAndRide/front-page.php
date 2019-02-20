<?php if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else { ?>


    <?php

    get_header(); ?>

    <div id="home" class="container-fluid">
        <div class="row">
            <div class="col-xs-10 col-sm-10 offset-sm-1 col-md-10 offset-md-1 col-lg-6 offset-lg-5 col-xl-6 offset-lg-5">
                <h1 class="hero-title">Convenience, Comfort & Elegance</h1>
                <p class="hero-description">We partner with local restaurants to offer our customer, free rides from and to their accommodations in the Orlando area.</p>
                <button type="button" onclick="window.location.href='booking/'" class="btn btn-lg button-book">Book your FREE ride now</button>
            </div>
        </div>
    </div>

    <div id="how-works" class="container-fluid">
        <h2 class="subtitle-fpage">HOW DINE & RIDE WORKS</h2>
        <div class="subtitle-line"></div>
        <div class="row justify-content-center">
            <div class="col-8 col-md-12 col-lg-11">
                <div class="row justify-content-center">

                    <div class="col-xs-10 col-sm-11 col-md-5 col-lg-3 hwork1 text-center" data-aos="zoom-in" data-aos-duration="800">
                        <img class="hwork-img" src="wp-content/themes/DineAndRide/images/booking-logo.png">
                        <h4 class="hwork-title">Book your free Ride</h4>
                        <p class="hwork-description">Select one of our partner restaurants, your desired pickup address, time and date.</p>
                    </div>
                    <div class="col-xs-10 col-sm-11 col-md-5 col-lg-3 hwork1 text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="250">
                        <img class="hwork-img" src="wp-content/themes/DineAndRide/images/pickup-logo.png">
                        <h4 class="hwork-title">Get picked up</h4>
                        <p class="hwork-description">A driver will pick you up and take you to the chosen restaurant.</p>
                    </div>
                    <div class="col-xs-10 col-sm-11 col-md-5 col-lg-3 hwork1 text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500">
                        <img class="hwork-img" src="wp-content/themes/DineAndRide/images/meal-logo.png">
                        <h4 class="hwork-title">Enjoy your meal</h4>
                        <p class="hwork-description">Relax and enjoy your fine dining experience.</p>
                    </div>
                    <div class="col-xs-10 col-sm-11 col-md-5 col-lg-3 hwork1 text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="500">
                        <img class="hwork-img" src="wp-content/themes/DineAndRide/images/home-logo.png">
                        <h4 class="hwork-title">We'll drive you back</h4>
                        <p class="hwork-description">Once finished, give us a call and a driver will pick you up and take you back.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="about-us" class="container-fluid">
        <h2 class="subtitle-fpage">ABOUT US</h2>
        <div class="subtitle-line"></div>
        <div class="row justify-content-center">
                <div class="col-10 col-md-11 col-lg-12">
                    <div class="row justify-content-center align-items-center no-gutters">

                        <div class="col-xs-12 col-lg-6 text-center order-lg-1">
                            <img class="about-us-img" src="wp-content/themes/DineAndRide/images/who-we-are.jpg">
                        </div>

                        <div class="aboutUs-content-wrapper col-xs-10 col-sm-11 col-md-8 col-lg-6 text-center order-lg-2">
                            <h4 class="about-us-subtitle">Who we are</h4>
                            <p class="about-us-description">Dine & Ride, is an innovative, ground breaking ride service service company which is launching operations in the Central Florida Area.</p>
                        </div>

                        <div class="col-xs-12 col-lg-6 text-center order-lg-4">
                            <img class="about-us-img" src="wp-content/themes/DineAndRide/images/new-concept.jpg">
                        </div>

                        <div class="aboutUs-content-wrapper col-xs-10 col-sm-11 col-md-8 col-lg-6 text-center order-lg-3">
                            <h4 class="about-us-subtitle">New Concept</h4>
                            <p class="about-us-description">Combining the convenience of food delivery, the comfort of ridesharing services and the elegance of fine dining.</p>
                        </div>

                        <div class="col-xs-12 col-lg-6 text-center order-lg-5">
                            <img class="about-us-img" src="wp-content/themes/DineAndRide/images/our-goal.jpg">
                        </div>

                        <div class="aboutUs-content-wrapper col-xs-10 col-sm-11 col-md-8 col-lg-6 text-center order-lg-6">
                            <h4 class="about-us-subtitle">Our Goal</h4>
                            <p class="about-us-description">Providing an amazing customer experience, as well as improving the restaurants' bottom line by increasing number of guests per day.</p>
                        </div>

                    </div>
                </div>
        </div>
    </div>

    <div id="our-team" class="container-fluid">
        <h2 class="subtitle-fpage">OUR TEAM</h2>
        <div class="subtitle-line"></div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="row justify-content-around">

                    <div class="col-xs-12 col-lg-5 col-xl-5 text-center">
                        <img class="team-img rounded-circle" src="wp-content/themes/DineAndRide/images/president-photo-bw.png">
                        <h4 class="team-member">Marcos Chacón</h4>
                        <h5 class="team-position">CEO & Co-founder</h5>
                        <p class="team-description">Electrical engineer with over 10 years of management experience in the oil field business through Latin-America, Africa and the Middle East; always balancing the professional life with the personal one, to be a great dad, husband and son.</p>
                    </div>

                    <div class="col-xs-12 col-lg-5 col-xl-5 text-center">
                        <img class="team-img rounded-circle" src="wp-content/themes/DineAndRide/images/ceo-photo-bw.png">
                        <h4 class="team-member">Nathaly Figuera</h4>
                        <h5 class="team-position">President & Co-founder</h5>
                        <p class="team-description">Civil Engineer focused on design, planning and innovation; with great ability to detect and pursue opportunities, while taking the right business decisions to achieve the desired results.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="container-fluid">
        <div class="row justify-content-center text-center contact-text">
            <div class="col-10">
                <h2 class="subtitle-fpage">Do you want to contact us?</h2>
            </div>
            <div class="col-10">
                <button type="button" onclick="window.location.href='contact-us/'" class="btn button-contact">Click here</button>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>

    <script>
        AOS.init();
    </script>
<?php } ?>