@extends("client.layouts.template",['titre'=>"Accueil"])



@section("content")

<!--start hero area-->
<section class="hero-area four">
    <div class="container">
        <div class="caption-content text-center">
            <h4>Start learning from home</h4>
            <h2>Connect With Our Expert And Start Learning Today</h2>
            <p>We are providing high-quality online courses to improve your skill. Our all instructors are highly experienced and experts.</p>
            <ul>
                <li><a href="#">Voir les formations</a></li>
            </ul>
        </div>
    </div>
</section>
<!--end hero area-->
<!--start discount area-->
<section class="discount-area-two">
    <div class="container">
        <div class="discount-wrap three">
            <!--start discount-image-->
            <div class="discount-img">
                <img src="{{ asset('assets/images/imgs/i1.jpg') }}" class="img-fluid" alt="image">
            </div>
            <!--end discount-image-->
            <!--start discount-content-->
            <div class="discount-cont three">
                <h4>Limited time offer</h4>
                <h2>50% Discount On All Of Our New & Upcoming Courses</h2>
                <div id="countdown"></div>
                <div class="btn-default">
                    <a href="#">Enroll Now</a>
                </div>
            </div>
            <!-- end discount-content -->
        </div>
    </div>
</section>
<!--end discount-area-->
<!--start course area-->
<section class="course-area three">
    <div class="container">
        <div class="row">
            <!--start heading-->
            <div class="col-lg-8 offset-lg-2">
                <div class="sec-heading text-center">
                    <h4>Formations</h4>
                    <h2>Celles qui sont recement publiée</h2>
                </div>
            </div>
            <!--end heading-->
        </div>
        <div class="row">
            <!--start course card-->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="course-thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/images/imgs/i1.jpg') }}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="course-content">
                        <span class="course-price">Gratuit</span>
                        <h3 class="course-title">
                            <a href="#">Nutrition: Build Your Perfect Diet & Meal Plan</a>
                        </h3>
                        <div class="course-rating">
                            <span class="star-rating-group">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="course-rating-count">(1 Review)</span>
                        </div>
                        <div class="course-content-footer">
                            <ul>
                                <li class="course-duration"><i class="fa fa-clock-o"></i> 04h </li>
                                <li class="course-user"><i class="fa fa-user-o"></i> 5</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end course card-->
            <!--start course card-->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="course-thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/images/imgs/i2.jpg') }}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="course-content">
                        <span class="course-price">Gratuit</span>
                        <h3 class="course-title">
                            <a href="#">WordPress Master Class for Beginners</a>
                        </h3>
                        <div class="course-rating">
                            <span class="star-rating-group">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </span>
                            <span class="course-rating-count">(2 Review)</span>
                        </div>
                        <div class="course-content-footer">
                            <ul>
                                <li class="course-duration"><i class="fa fa-clock-o"></i> 07h 30m </li>
                                <li class="course-user"><i class="fa fa-user-o"></i> 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end course card-->
            <!--start course card-->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="course-thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/images/imgs/i7.jpg') }}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="course-content">
                        <span class="course-price">Free</span>
                        <h3 class="course-title">
                            <a href="#">The Complete JavaScript Course 2022</a>
                        </h3>
                        <div class="course-rating">
                            <span class="star-rating-group">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="course-rating-count">(7 Review)</span>
                        </div>
                        <div class="course-content-footer">
                            <ul>
                                <li class="course-duration"><i class="fa fa-clock-o"></i> 13h 20m 20s </li>
                                <li class="course-user"><i class="fa fa-user-o"></i> 9</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end course card-->
            <!--start course card-->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="course-thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/images/imgs/i1.jpg') }}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="course-content">
                        <span class="course-price">Gratuit</span>
                        <h3 class="course-title">
                            <a href="#">Ultimate Photoshop Training: From Beginner</a>
                        </h3>
                        <div class="course-rating">
                            <span class="star-rating-group">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                            <span class="course-rating-count">(1 Review)</span>
                        </div>
                        <div class="course-content-footer">
                            <ul>
                                <li class="course-duration"><i class="fa fa-clock-o"></i> 13h 20m 20s </li>
                                <li class="course-user"><i class="fa fa-user-o"></i> 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end course card-->
            <!--start course card-->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="course-thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/images/imgs/i4.jpg') }}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="course-content">
                        <span class="course-price">$12.00</span>
                        <h3 class="course-title">
                            <a href="#">User Experience Design Essentials</a>
                        </h3>
                        <div class="course-rating">
                            <span class="star-rating-group">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="course-rating-count">(1 Review)</span>
                        </div>
                        <div class="course-content-footer">
                            <ul>
                                <li class="course-duration"><i class="fa fa-clock-o"></i> 15h 20m </li>
                                <li class="course-user"><i class="fa fa-user-o"></i> 5</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end course card-->
            <!--start course card-->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="course-thumbnail">
                        <a href="#">
                            <img src="{{ asset('assets/images/imgs/i5.jpg') }}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="course-content">
                        <span class="course-price">Gratuit</span>
                        <h3 class="course-title">
                            <a href="#">Complete Blender Creator: Learn 3D Modelling</a>
                        </h3>
                        <div class="course-rating">
                            <span class="star-rating-group">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="course-rating-count">(3 Review)</span>
                        </div>
                        <div class="course-content-footer">
                            <ul>
                                <li class="course-duration"><i class="fa fa-clock-o"></i> 15h 20m </li>
                                <li class="course-user"><i class="fa fa-user-o"></i> 5</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end course card-->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="category-btn btn-default text-center">
                    <a href="#">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end course area-->

<!--start why choose area-->
<section class="why-choose-area two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose-img">
                    <img src="{{ asset('assets/images/imgs/i8.jpg') }}" class="img-fluid" alt="image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why-choose-cont-wrap">
                    <div class="sec-heading">
                        <h4>Pourquoi se faire former?</h4>
                        <h2>We Are Providing The Best Quality Online Courses</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                    </div>
                    <!--start choose single-->
                    <div class="why-choose-single">
                        <div class="why-choose-icon">
                            <img src="assets/images/icons/ribbon.svg" alt="image">
                        </div>
                        <div class="why-choose-cont">
                            <h3>High Quality Courses</h3>
                            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim.</p>
                        </div>
                    </div>
                    <!--end choose single-->
                    <!--start choose single-->
                    <div class="why-choose-single">
                        <div class="why-choose-icon">
                            <img src="assets/images/icons/teacher.svg" alt="image">
                        </div>
                        <div class="why-choose-cont">
                            <h3>Expert Instructors</h3>
                            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim.</p>
                        </div>
                    </div>
                    <!--end choose single-->
                    <!--start choose single-->
                    <div class="why-choose-single mb-0">
                        <div class="why-choose-icon">
                            <img src="assets/images/icons/folder.svg" alt="image">
                        </div>
                        <div class="why-choose-cont">
                            <h3>Life Time Access</h3>
                            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim.</p>
                        </div>
                    </div>
                    <!--end choose single-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--end why choose area-->

<!--start newsletter area-->
<section class="newsletter-area overlay bg-cover two bg">
    <div class="container">
        <div class="row">
            <!--start sec-heading-->
            <div class="col-lg-10 offset-lg-1">
                <div class="sec-heading text-center">
                    <h4>Newsletter</h4>
                    <h2 class="text-white">Get Latest & Update News</h2>
                </div>
            </div>
            <!--end sec-heading-->
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1">
                <div class="subscribe-form">
                    <form>
                        <input type="email" placeholder="Your email address">
                        <button type="submit">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end newsletter area-->

<!--start instruction area-->
<section class="instruction-area">
    <div class="container">
        <div class="row">
            <!--start instruction-single-->
            <div class="col-md-6">
                <div class="instruction-single">
                    <div class="instruction-img">
                        <img src="{{ asset('assets/images/imgs/i1.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="instruction-cont text-center">
                        <h3>Devenir formateur</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                    <div class="instruction-btn text-center">
                        <a href="#">Formez pour former</a>
                    </div>
                </div>
            </div>
            <!--end instruction-single-->
            <!--start instruction-single-->
            <div class="col-md-6">
                <div class="instruction-single">
                    <div class="instruction-img">
                        <img src="{{ asset('assets/images/imgs/s3.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="instruction-cont text-center">
                        <h3>Devenir GAEL</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                    <div class="instruction-btn text-center">
                        <a href="#">Inscription gratuite</a>
                    </div>
                </div>
            </div>
            <!--end instruction-single-->
        </div>
    </div>
</section>
<!--end instruction area-->


@endsection
