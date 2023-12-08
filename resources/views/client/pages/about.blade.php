@extends("client.layouts.template",['titre'=>"A propos"])



@section("content")
<!--start about area-->
<section class="about-area four">
    <div class="container">
        <div class="row">
            <!--start about-img-->
            <div class="col-md-4">
                <div class="about-img-four">
                    <img src="assets/images/about-img-1.jpg" class="img-fluid" alt="image">
                </div>
            </div>
            <!--end about-img-->
            <!--start about-img-->
            <div class="col-md-4">
                <div class="about-img-four margin">
                    <img src="assets/images/img-lg-2.jpg" class="img-fluid" alt="image">
                </div>
            </div>
            <!--end about-img-->
            <!--start about-img-->
            <div class="col-md-4">
                <div class="about-img-four">
                    <img src="assets/images/about-img-3.jpg" class="img-fluid" alt="image">
                </div>
            </div>
            <!--end about-img-->
        </div>
        <div class="row">
            <!--start sec-heading-->
            <div class="col-lg-12">
                <div class="sec-heading text-center">
                    <h4>Who we are</h4>
                    <h2>We Are Providing The Best Quality Online Courses. Our All Instructors Are High Expert</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
                </div>
            </div>
            <!--end sec-heading-->
        </div>
        <div class="row about-counter-wrap">
            <!--start counter-single-->
            <div class="col-md-4">
                <div class="counter-single text-center">
                    <div class="counter-number">
                        <h2><span>125,600</span>+</h2>
                    </div>
                    <div class="counter-title">
                        <p>Students Enrolled</p>
                    </div>
                </div>
            </div>
            <!--end counter-single-->
            <!--start counter-single-->
            <div class="col-md-4">
                <div class="counter-single text-center">
                    <div class="counter-number">
                        <h2><span>200</span>+</h2>
                    </div>
                    <div class="counter-title">
                        <p>Registered Instructors</p>
                    </div>
                </div>
            </div>
            <!--end counter-single-->
            <!--start counter-single-->
            <div class="col-md-4">
                <div class="counter-single text-center">
                    <div class="counter-number">
                        <h2><span>100</span>%</h2>
                    </div>
                    <div class="counter-title">
                        <p>Success Rate</p>
                    </div>
                </div>
            </div>
            <!--end counter-single-->
        </div>
    </div>
</section>
<!--end about us-->
<!--start why choose area-->
<section class="why-choose-area three bg-gray">
    <div class="container">
        <div class="row">
            <!--start why choose heading-->
            <div class="col-lg-8 offset-lg-2">
                <div class="sec-heading  text-center">
                    <h4>Best learning platform </h4>
                    <h2>Why We Are The Best</h2>
                </div>
            </div>
            <!--end why choose heading-->
        </div>
        <div class="row text-center">
            <!--start choose single-->
            <div class="col-md-4">
                <div class="choose-single three">
                    <div class="why-choose-icon three">
                        <img src="assets/images/icons/ribbon.svg" alt="image">
                    </div>
                    <div class="why-choose-cont three">
                        <h3>High Quality Courses</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
                    </div>
                </div>
            </div>
            <!--end choose single-->
            <!--start choose single-->
            <div class="col-md-4">
                <div class="choose-single three">
                    <div class="why-choose-icon three">
                        <img src="assets/images/icons/teacher.svg" alt="image">
                    </div>
                    <div class="why-choose-cont three">
                        <h3>Expert Instructors</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
                    </div>
                </div>
            </div>
            <!--end choose single-->
            <!--start choose single-->
            <div class="col-md-4">
                <div class="choose-single three">
                    <div class="why-choose-icon three">
                        <img src="assets/images/icons/folder.svg" alt="image">
                    </div>
                    <div class="why-choose-cont three">
                        <h3>Life Time Access</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
                    </div>
                </div>
            </div>
            <!--end choose single-->
        </div>
    </div>
</section>
<!--end why choose area-->
<!--start testimonial area-->
<section class="testimonial-area two">
    <div class="container">
        <div class="row">
            <!--start sec-heading-->
            <div class="col-lg-8 offset-lg-2">
                <div class="sec-heading text-center">
                    <h4>testimonial</h4>
                    <h2>What Says Our Students</h2>
                </div>
            </div>
            <!--end sec-heading-->
        </div>
        <div class="testi-carousel owl-carousel">
            <!--start testimonial single-->
            <div class="testi-single two">
                <div class="testi-cont-inner">
                    <div class="testi-quote">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <div class="testi-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis.</p>
                </div>
                <div class="testi-client-info">
                    <div class="testi-client-img">
                        <img src="assets/images/client-2.jpg" alt="image">
                    </div>
                    <div class="testi-client-details">
                        <h4>Adam Smith</h4>
                        <h6>Graphics Designer</h6>
                    </div>
                </div>
            </div>
            <!--end testimonial single-->
            <!--start testimonial single-->
            <div class="testi-single two">
                <div class="testi-cont-inner">
                    <div class="testi-quote">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <div class="testi-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis.</p>
                </div>
                <div class="testi-client-info">
                    <div class="testi-client-img">
                        <img src="assets/images/client-1.jpg" alt="image">
                    </div>
                    <div class="testi-client-details">
                        <h4>Shane Kyle</h4>
                        <h6>Web Developer</h6>
                    </div>
                </div>
            </div>
            <!--end testimonial single-->
            <!--start testimonial single-->
            <div class="testi-single two">
                <div class="testi-cont-inner">
                    <div class="testi-quote">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <div class="testi-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis.</p>
                </div>
                <div class="testi-client-info">
                    <div class="testi-client-img">
                        <img src="assets/images/client-3.jpg" alt="image">
                    </div>
                    <div class="testi-client-details">
                        <h4>John Doe</h4>
                        <h6>Affiliate Marketer</h6>
                    </div>
                </div>
            </div>
            <!--end testimonial single-->
            <!--start testimonial single-->
            <div class="testi-single two">
                <div class="testi-cont-inner">
                    <div class="testi-quote">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <div class="testi-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis.</p>
                </div>
                <div class="testi-client-info">
                    <div class="testi-client-img">
                        <img src="assets/images/client-1.jpg" alt="image">
                    </div>
                    <div class="testi-client-details">
                        <h4>Kane William</h4>
                        <h6>Apps Developer</h6>
                    </div>
                </div>
            </div>
            <!--end testimonial single-->
        </div>
    </div>
</section>
<!--end testimonial area-->
<!--start team area-->
<section class="team-area bg-gray">
    <div class="container">
        <div class="row">
            <!--start sec-heading-->
            <div class="col-lg-8 offset-lg-2">
                <div class="sec-heading text-center">
                    <h4>Instructors</h4>
                    <h2>Our Expert Instructors </h2>
                </div>
            </div>
            <!--end sec-heading-->
        </div>
        <div class="row">
            <!--start member-single-->
            <div class="col-md-3">
                <div class="instructor-single shadow-none">
                    <div class="instructor-image">
                        <img src="assets/images/instructor-1.jpg" class="img-fluid" alt="image">
                        <div class="instructor-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="instructor-body">
                        <h4>Shane Warne</h4>
                        <p>Instructor</p>
                    </div>
                </div>
            </div>
            <!--end member-single-->
            <!--start member-single-->
            <div class="col-md-3">
                <div class="instructor-single shadow-none">
                    <div class="instructor-image">
                        <img src="assets/images/instructor-2.jpg" class="img-fluid" alt="image">
                        <div class="instructor-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="instructor-body">
                        <h4>Avelina Smith</h4>
                        <p>Instructor</p>
                    </div>
                </div>
            </div>
            <!--end member-single-->
            <!--start member-single-->
            <div class="col-md-3">
                <div class="instructor-single shadow-none">
                    <div class="instructor-image">
                        <img src="assets/images/instructor-3.jpg" class="img-fluid" alt="image">
                        <div class="instructor-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="instructor-body">
                        <h4>John Bond</h4>
                        <p>Instructor</p>
                    </div>
                </div>
            </div>
            <!--end member-single-->
            <!--start member-single-->
            <div class="col-md-3">
                <div class="instructor-single shadow-none">
                    <div class="instructor-image">
                        <img src="assets/images/instructor-4.jpg" class="img-fluid" alt="image">
                        <div class="instructor-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="instructor-body">
                        <h4>Sophia Smith</h4>
                        <p>Instructor</p>
                    </div>
                </div>
            </div>
            <!--end member-single-->
        </div>
    </div>
</section>
<!--end team-area-->
@endsection