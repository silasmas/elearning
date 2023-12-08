@extends('client.connecte.templates.main_template', ['titre' => 'Home'])

@section('content')

<section class="home-banner-area" id="home-banner-area"
    style="background-image: url('assets/images/imgs/i5.jpg'); background-position: right; background-repeat: no-repeat; padding: 100px 0 75px; background-size: auto 100%; color: #fff;">
    <div class="cropped-home-banner"></div>
    <div class="container-xl">
        <div class="row">
            <div class="col position-relative">
                <div class="home-banner-wrap">
                    <h2 class="fw-bold">Une armée des intimes de l'Éternel</h2>
                    <p>Study any topic, anytime. explore thousands of courses for the lowest price ever!</p>
                    <form class="" action="assets/images/home/search" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query"
                                placeholder="What do you want to learn?" />
                            <div class="input-group-append p-6px bg-white">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var border_bottom = $(".home-banner-wrap").height() + 242;
    $(".cropped-home-banner").css("border-bottom", border_bottom + "px solid #f1f7f8");

    mRight = Number("1.5") * $(".home-banner-area").outerHeight();
    $(".cropped-home-banner").css("right", mRight - 65 + "px");
    </script>
</section>

{{-- <section class="home-fact-area">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fas fa-bullseye float-start"></i>
                    <div class="text-box">
                        <h4>14 Online courses</h4>
                        <p>Explore a variety of fresh topics</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-check float-start"></i>
                    <div class="text-box">
                        <h4>Expert instruction</h4>
                        <p>Find the right course for you</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-clock float-start"></i>
                    <div class="text-box">
                        <h4>Lifetime access</h4>
                        <p>Learn on your schedule</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="mb-5">
    <div class="container-lg">
        <h3 class="course-carousel-title my-4">Top categories</h3>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fab fa-css3-alt"></i>
                    </div>
                    <div class="category-title">
                        Responsive Design
                        <p>2 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fas fa-volleyball-ball"></i>
                    </div>
                    <div class="category-title">
                        Fashion Design
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="category-title">
                        Frontend design
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <div class="category-title">
                        WordPress Theme
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="far fa-object-group"></i>
                    </div>
                    <div class="category-title">
                        Adobe Illustrator
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <div class="category-title">
                        Drawing
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="category-title">
                        Mobile App Design
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fas fa-object-group"></i>
                    </div>
                    <div class="category-title">
                        Design Thinking
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fab fa-audible"></i>
                    </div>
                    <div class="category-title">
                        Prototyping
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fas fa-barcode"></i>
                    </div>
                    <div class="category-title">
                        Color Theory
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="far fa-lightbulb"></i>
                    </div>
                    <div class="category-title">
                        Lighting Design
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                <a href="#" class="top-categories">
                    <div class="category-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="category-title">
                        Home Improvement
                        <p>1 Courses</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="course-carousel-title mb-4">Top courses</h3>

                <!-- page loader -->
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>

                <div class="course-carousel shown-after-loading" style="display: none;">
                    <div class="course-box-wrap">
                        <a href="{{ route('detailFormation',['id'=>2]) }}" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_1.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">Wordpress for Beginners - Master Wordpress Quickly</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(5)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(1 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">01:10:09 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">15 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img style="margin-left: 0px; width: 30px; " class="position-absolute"
                                                src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                            <img style="margin-left: 17px; width: 30px;" class="position-absolute"
                                                src="assets/images/uploads/user_image/0269091217f95c25ac4f77c1bd69879a.jpg"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Dave Franco"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">Free</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        Wordpress for Beginners - Master Wordpress Quickly
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 15 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 01:10:09 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">In 2020, build a beautiful responsive Wordpress site that
                                    looks great on all devices. No experience required.</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Install Wordpress on your PC or Mac computer, so you can learn without
                                            having to pay hosting or domain fees.</li>
                                        <li>Navigate around the Wordpress dashboard, know what everything does and how
                                            to use it</li>
                                        <li>Create pages and posts, and most importantly, know the difference between
                                            the two</li>
                                        <li>Easily create a beautiful HTML & CSS website with Bootstrap (that doesn't
                                            look like generic Bootstrap websites!)</li>
                                        <li>Fully understand how to use Custom Post Types and Advanced Custom Fields in
                                            WordPress</li>
                                        <li>Correctly use post categories and tags, and understand why these can cause
                                            you problems at the search engines if used incorrectly</li>
                                        <li>Understand plugins & themes and how to find/install them</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                        enrolled</a>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)" id="1"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_3.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">Adobe Illustrator CC – Advanced Training Course</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:53:01 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">13 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img style="margin-left: 0px; width: 30px;" class="position-absolute"
                                                src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                            <img style="margin-left: 17px; width: 30px;" class="position-absolute"
                                                src="assets/images/uploads/user_image/0269091217f95c25ac4f77c1bd69879a.jpg"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Dave Franco"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">$80</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        Adobe Illustrator CC – Advanced Training Course
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 13 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:53:01 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">In this Adobe Illustrator Advanced course we&#039;ll learn
                                    Advanced techniques for graphic design, logo design &amp; illustration</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>You will be able to earn more using these new Illustrator skills.</li>
                                        <li>You will be able to add 'Advanced Illustrator User' to your CV.</li>
                                        <li>Speed up your productivity & workflow</li>
                                        <li>You will build your own animated gifs.</li>
                                        <li>Depth & perspective</li>
                                        <li>Be able to turn hyphenation off once and for all</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-3"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_4.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">Character Art School: Complete Character Drawing Course</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">03:38:55 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">12 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img style="margin-left: 0px; width: 30px;" class="position-absolute"
                                                src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                            <img style="margin-left: 17px; width: 30px;" class="position-absolute"
                                                src="assets/images/uploads/user_image/b28a0687a23de21f2b2c34b2d160f48f.jpg"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Olivia Emily"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">$70</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        Character Art School: Complete Character Drawing Course
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 12 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 03:38:55 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn How to Draw People and Character Designs
                                    Professionally, Drawing for Animation, Comics, Cartoons, Games and More!</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>How to Draw Characters Well</li>
                                        <li>How to Draw in 3D</li>
                                        <li>How to Draw like a Professional Artist</li>
                                        <li>Draw with Pencils and Paper or Digital Art Tools</li>
                                        <li>How to Draw Out of Your Head Fast</li>
                                        <li>How to Draw Faces, Bodies and Hands</li>
                                        <li>How to Draw Characters for Games, Films, Animation, Manga, Comics and More
                                        </li>
                                        <li>Utilize the included 7GB of Free Art Resources</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-4"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_5.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">The Complete Sketch 5 Course - Design Apps & Websites 2021</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:49:57 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">13 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                style="width: 30px;" alt="user_image" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">$90</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        The Complete Sketch 5 Course - Design Apps & Websites 2021
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 13 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:49:57 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Master Sketch software and learn a modern approach to
                                    designing mobile apps, websites, and everything UI/UX</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Master the number one platform in UI/UX design, Sketch.</li>
                                        <li>Wireframe websites, mobile apps, and more. Design Mobile Apps, Websites, Web
                                            Apps & More</li>
                                        <li>Create a clickable prototype that looks and functions like the real deal.
                                        </li>
                                        <li>Approach product design from a complete Design System</li>
                                        <li>Take an idea and bring it to life. Everyone has a great idea, this course
                                            will allow you to start building your dream.</li>
                                        <li>Design Mobile Apps, Websites, Web Apps & More</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-5"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_6.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">The Complete App Design Course - UX, UI and Design Thinking</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:30:18 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">16 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">Free</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        The Complete App Design Course - UX, UI and Design Thinking
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 16 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:30:18 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn App Design to Make Beautiful, Lovable Apps</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Create mobile app designs from scratch</li>
                                        <li>Create wireframe designs for any digital project</li>
                                        <li>Create animated prototypes</li>
                                        <li>Understand the differences between designing for iOS and Android</li>
                                        <li>Create mockups using Sketch and other tools</li>
                                        <li>Start a new career as a UI/UX designer</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                        enrolled</a>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_7.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">UI/UX design with Adobe XD: Design & Prototype a Mobile App</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">01:17:08 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">10 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">$199</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        UI/UX design with Adobe XD: Design & Prototype a Mobile App
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 10 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 01:17:08 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn how to design a beautiful and engaging mobile app
                                    with Adobe Experience Design (XD). Learn-by-doing approach.</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>You'll learn how to use Adobe XD to design and prototype a mobile app. The
                                            skills acquired can also be used to design websites</li>
                                        <li>You'll be one step closer to becoming a good UI/UX designer</li>
                                        <li>You'll be able to apply the design techniques and productivity tips you have
                                            learned in your own design workflow</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-7"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_8.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">The Complete Graphic Design Theory for Beginners Course</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:12:25 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">10 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">$120</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        The Complete Graphic Design Theory for Beginners Course
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 10 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:12:25 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn Graphic Design Theory and the Basic Principles of
                                    Color Theory, Typography, Branding, Logo Design, Layout &amp; More!</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>You will have intermediate to expert level knowledge of graphic design
                                            theory that you will immediately be able to apply to your career, job,
                                            hobby, or company.</li>
                                        <li>You will be given real-world, applicable projects that you can follow along
                                            with and practice.</li>
                                        <li>You will learn color theory and how it applies to the world around us, from
                                            products and art to branding and advertising.</li>
                                        <li>You will learn photography composition and how it interacts with graphic
                                            design elements to create stunning looking artwork</li>
                                        <li>You will learn about logo design and branding, and the way that you or your
                                            company can use these ideas to get in the eyes of more people.</li>
                                        <li>You will learn about the legal side of design and how you can take safe
                                            measures to make sure you are following the proper laws of copyright and
                                            trademarks.</li>
                                        <li>NEW! Learn some 2021 design trends to look out for with three new student
                                            projects</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-8"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_9.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">How to Use Lighting Design to Transform your Home</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:22:39 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">12 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">Free</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        How to Use Lighting Design to Transform your Home
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 12 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:22:39 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn How to Use Lighting in your Interior Design Like a
                                    Pro</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Use 3 layers of light to create a cohesive and dramatic lighting scheme in
                                            any room of their home.</li>
                                        <li>Effectively utilize and control both natural and artificial light in their
                                            home.</li>
                                        <li>Place lighting fixtures appropriately throughout their room.</li>
                                        <li>Create a simplified professional lighting plan.</li>
                                        <li>Use artificial light to make a room appear larger or smaller than it is.
                                        </li>
                                        <li>Calculate exactly how much artificial light each of their rooms need.</li>
                                        <li>Select light fixtures appropriate to the type of room.</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                        enrolled</a>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_10.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">The Basics of Household Wiring. The Electrical System A to Z</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:42:41 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">9 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$80</small>$45</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Thu, 27-May-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        The Basics of Household Wiring. The Electrical System A to Z
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 9 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:42:41 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Everything Electricity, from your Circuit (Breaker) Panel,
                                    Outlets, Switches, Receptacles, Light Fixtures, Cable</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Understand how electricity works, how it is generated, transmitted to, and
                                            distributed throughout your home</li>
                                        <li>Have the knowledge and skills to safely and competently complete most home
                                            electrical projects and repairs.</li>
                                        <li>Wire a receptacle (regular, switched, GFCI), a single-pole switch (3 and
                                            4-way), a light fixture, and more!</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-10"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_11.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">Adobe After Effects CC: Complete Course - Novice to Expert</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">02:12:13 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">16 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$130</small>$30</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        Adobe After Effects CC: Complete Course - Novice to Expert
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 16 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 02:12:13 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Adobe After Effects CC Create stunning Motion Graphics, VFX
                                    Visual Effects &amp; VFX Compositing with 50+ practice projects.</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>How to use all of After Effects CC - in a dynamic, hands on approach.</li>
                                        <li>Create Motion Graphics to enhance your videos using a step by step,
                                            easy-to-use method.</li>
                                        <li>Practice compositing techniques to achieve stunning video effects.</li>
                                        <li>How to use specialized visual effects such Motion Tracking, Camera Tracking,
                                            Chromakeying, Rotoscoping, Stabilizing and many more</li>
                                        <li>How to Import and animate Illustrator Vector Graphics.</li>
                                        <li>And much more for you to become an expert in Motion Graphics, Visual Effects
                                            and Compositing</li>
                                        <li>Work with the latest Responsive Design Techniques</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-11"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_12.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">Learn to draw fashion with Adobe Illustrator CC - Beginners</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(4)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(1 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:43:50 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">7 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/0269091217f95c25ac4f77c1bd69879a.jpg"
                                                style="width: 30px;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Dave Franco"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$50</small>$20</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Thu, 27-May-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        Learn to draw fashion with Adobe Illustrator CC - Beginners
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 7 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:43:50 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Illustrator training specifically tailored for fashion
                                    designers</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>You will have a good foundation in drawing fashion flats</li>
                                        <li>You will be ready to progress to the intermediate and advanced training with
                                            the details and links to these additional online courses provided in the
                                            course</li>
                                        <li>You will be well on your way to becoming a fashion designer with expert
                                            skills in Adobe Illustrator.</li>
                                        <li>You will stand out from the thousands of fashion design graduates and make
                                            yourself more attractive to potential employers.</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-12"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_13.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">Front End Web Development Ultimate Course 2021</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(3)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(1 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:28:00 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">22 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/0269091217f95c25ac4f77c1bd69879a.jpg"
                                                style="width: 30px;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Dave Franco"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$110</small>$45</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        Front End Web Development Ultimate Course 2021
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 22 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:28:00 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn Front-End Web Development: Quickly Master HTML5,
                                    CSS3, JavaScript, Bootstrap, SVG, Text Editors, and much more!</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>HTML5 Basics</li>
                                        <li>CSS3 Basics</li>
                                        <li>JavaScript Basics</li>
                                        <li>jQuery Basics</li>
                                        <li>Bootstrap 4 Basics</li>
                                        <li>SVG Basics</li>
                                        <li>Sublime Text 3 (Text Editor)</li>
                                        <li>Visual Studio Code (Text Editor)</li>
                                        <li>Google Chrome (Web Browser)</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-13"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_14.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">React and Typescript: Build a Portfolio Project</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(2)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(1 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:16:40 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">8 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/0269091217f95c25ac4f77c1bd69879a.jpg"
                                                style="width: 30px;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Dave Franco"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$40</small>$20</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        React and Typescript: Build a Portfolio Project
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 8 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:16:40 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Expand your portfolio of projects by building a complex app
                                    with the latest web technologies.</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Build a portfolio-ready project with React and Typescript</li>
                                        <li>Simplify state updates with the fabulous Immer library</li>
                                        <li>How to Import and animate Illustrator Vector Graphics.</li>
                                        <li>Manage a project using a package-based architecture</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-14"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="course-carousel-title mb-4">Top 10 Latest courses</h3>

                <!-- page loader -->
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>

                <div class="course-carousel shown-after-loading" style="display: none;">
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_14.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">React and Typescript: Build a Portfolio Project</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(2)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(1 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:16:40 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">8 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/0269091217f95c25ac4f77c1bd69879a.jpg"
                                                style="width: 30px;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Dave Franco"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$40</small>$20</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        React and Typescript: Build a Portfolio Project
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 8 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:16:40 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Expand your portfolio of projects by building a complex app
                                    with the latest web technologies.</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Build a portfolio-ready project with React and Typescript</li>
                                        <li>Simplify state updates with the fabulous Immer library</li>
                                        <li>How to Import and animate Illustrator Vector Graphics.</li>
                                        <li>Manage a project using a package-based architecture</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-14"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_13.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">Front End Web Development Ultimate Course 2021</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(3)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(1 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:28:00 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">22 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/0269091217f95c25ac4f77c1bd69879a.jpg"
                                                style="width: 30px;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Dave Franco"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$110</small>$45</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        Front End Web Development Ultimate Course 2021
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 22 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:28:00 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn Front-End Web Development: Quickly Master HTML5,
                                    CSS3, JavaScript, Bootstrap, SVG, Text Editors, and much more!</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>HTML5 Basics</li>
                                        <li>CSS3 Basics</li>
                                        <li>JavaScript Basics</li>
                                        <li>jQuery Basics</li>
                                        <li>Bootstrap 4 Basics</li>
                                        <li>SVG Basics</li>
                                        <li>Sublime Text 3 (Text Editor)</li>
                                        <li>Visual Studio Code (Text Editor)</li>
                                        <li>Google Chrome (Web Browser)</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-13"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_12.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">Learn to draw fashion with Adobe Illustrator CC - Beginners</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(4)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(1 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:43:50 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">7 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/0269091217f95c25ac4f77c1bd69879a.jpg"
                                                style="width: 30px;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Dave Franco"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$50</small>$20</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Thu, 27-May-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        Learn to draw fashion with Adobe Illustrator CC - Beginners
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 7 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:43:50 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Illustrator training specifically tailored for fashion
                                    designers</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>You will have a good foundation in drawing fashion flats</li>
                                        <li>You will be ready to progress to the intermediate and advanced training with
                                            the details and links to these additional online courses provided in the
                                            course</li>
                                        <li>You will be well on your way to becoming a fashion designer with expert
                                            skills in Adobe Illustrator.</li>
                                        <li>You will stand out from the thousands of fashion design graduates and make
                                            yourself more attractive to potential employers.</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-12"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_11.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">Adobe After Effects CC: Complete Course - Novice to Expert</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">02:12:13 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">16 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$130</small>$30</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        Adobe After Effects CC: Complete Course - Novice to Expert
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 16 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 02:12:13 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Adobe After Effects CC Create stunning Motion Graphics, VFX
                                    Visual Effects &amp; VFX Compositing with 50+ practice projects.</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>How to use all of After Effects CC - in a dynamic, hands on approach.</li>
                                        <li>Create Motion Graphics to enhance your videos using a step by step,
                                            easy-to-use method.</li>
                                        <li>Practice compositing techniques to achieve stunning video effects.</li>
                                        <li>How to use specialized visual effects such Motion Tracking, Camera Tracking,
                                            Chromakeying, Rotoscoping, Stabilizing and many more</li>
                                        <li>How to Import and animate Illustrator Vector Graphics.</li>
                                        <li>And much more for you to become an expert in Motion Graphics, Visual Effects
                                            and Compositing</li>
                                        <li>Work with the latest Responsive Design Techniques</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-11"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_10.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">The Basics of Household Wiring. The Electrical System A to Z</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:42:41 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">9 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end"><small>$80</small>$45</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Thu, 27-May-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        The Basics of Household Wiring. The Electrical System A to Z
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 9 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:42:41 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Everything Electricity, from your Circuit (Breaker) Panel,
                                    Outlets, Switches, Receptacles, Light Fixtures, Cable</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Understand how electricity works, how it is generated, transmitted to, and
                                            distributed throughout your home</li>
                                        <li>Have the knowledge and skills to safely and competently complete most home
                                            electrical projects and repairs.</li>
                                        <li>Wire a receptacle (regular, switched, GFCI), a single-pole switch (3 and
                                            4-way), a light fixture, and more!</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-10"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_9.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">How to Use Lighting Design to Transform your Home</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:22:39 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">12 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">Free</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        How to Use Lighting Design to Transform your Home
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 12 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:22:39 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn How to Use Lighting in your Interior Design Like a
                                    Pro</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Use 3 layers of light to create a cohesive and dramatic lighting scheme in
                                            any room of their home.</li>
                                        <li>Effectively utilize and control both natural and artificial light in their
                                            home.</li>
                                        <li>Place lighting fixtures appropriately throughout their room.</li>
                                        <li>Create a simplified professional lighting plan.</li>
                                        <li>Use artificial light to make a room appear larger or smaller than it is.
                                        </li>
                                        <li>Calculate exactly how much artificial light each of their rooms need.</li>
                                        <li>Select light fixtures appropriate to the type of room.</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                        enrolled</a>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_8.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">The Complete Graphic Design Theory for Beginners Course</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:12:25 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">10 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">$120</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        The Complete Graphic Design Theory for Beginners Course
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 10 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:12:25 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn Graphic Design Theory and the Basic Principles of
                                    Color Theory, Typography, Branding, Logo Design, Layout &amp; More!</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>You will have intermediate to expert level knowledge of graphic design
                                            theory that you will immediately be able to apply to your career, job,
                                            hobby, or company.</li>
                                        <li>You will be given real-world, applicable projects that you can follow along
                                            with and practice.</li>
                                        <li>You will learn color theory and how it applies to the world around us, from
                                            products and art to branding and advertising.</li>
                                        <li>You will learn photography composition and how it interacts with graphic
                                            design elements to create stunning looking artwork</li>
                                        <li>You will learn about logo design and branding, and the way that you or your
                                            company can use these ideas to get in the eyes of more people.</li>
                                        <li>You will learn about the legal side of design and how you can take safe
                                            measures to make sure you are following the proper laws of copyright and
                                            trademarks.</li>
                                        <li>NEW! Learn some 2021 design trends to look out for with three new student
                                            projects</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-8"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_7.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">UI/UX design with Adobe XD: Design & Prototype a Mobile App</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">01:17:08 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">10 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">$199</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        UI/UX design with Adobe XD: Design & Prototype a Mobile App
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 10 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 01:17:08 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn how to design a beautiful and engaging mobile app
                                    with Adobe Experience Design (XD). Learn-by-doing approach.</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>You'll learn how to use Adobe XD to design and prototype a mobile app. The
                                            skills acquired can also be used to design websites</li>
                                        <li>You'll be one step closer to becoming a good UI/UX designer</li>
                                        <li>You'll be able to apply the design techniques and productivity tips you have
                                            learned in your own design workflow</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-7"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_6.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">The Complete App Design Course - UX, UI and Design Thinking</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:30:18 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">16 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">Free</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        The Complete App Design Course - UX, UI and Design Thinking
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 16 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:30:18 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Learn App Design to Make Beautiful, Lovable Apps</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Create mobile app designs from scratch</li>
                                        <li>Create wireframe designs for any digital project</li>
                                        <li>Create animated prototypes</li>
                                        <li>Understand the differences between designing for iOS and Android</li>
                                        <li>Create mockups using Sketch and other tools</li>
                                        <li>Start a new career as a UI/UX designer</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                        enrolled</a>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box-wrap">
                        <a href="course-details.html" class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="assets/images/uploads/thumbnails/course_thumbnails/course_thumbnail_default_5.jpg"
                                        alt="" class="img-fluid" />
                                </div>
                                <div class="course-details">
                                    <h5 class="title">The Complete Sketch 5 Course - Design Apps & Websites 2021</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <div class="d-inline-block">
                                            <span class="text-dark ms-1 text-15px">(0)</span>
                                            <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div class="">
                                            <i class="far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px">00:49:57 Hours</span>
                                        </div>
                                        <div class="ms-3">
                                            <i class="far fa-list-alt text-14px"></i>
                                            <span class="text-muted text-12px">13 Lectures</span>
                                        </div>
                                    </div>

                                    <hr class="divider-1" />

                                    <div class="d-block">
                                        <div class="floating-user d-inline-block">
                                            <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                                alt="user_image" style="width: 30px;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="John David"
                                                onclick="return check_action(this,'instructor.html');" />
                                        </div>

                                        <p class="price text-right d-inline-block float-end">$90</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <div class="last-updated">Last updated Tue, 01-Jun-2021</div>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px" href="course-details.html">
                                        The Complete Sketch 5 Course - Design Apps & Websites 2021
                                    </a>
                                </div>
                                <div class="course-meta">
                                    <span class=""><i class="fas fa-play-circle"></i> 13 Lessons </span>
                                    <span class=""><i class="far fa-clock"></i> 00:49:57 Hours </span>
                                    <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                </div>
                                <div class="course-subtitle">Master Sketch software and learn a modern approach to
                                    designing mobile apps, websites, and everything UI/UX</div>
                                <div class="what-will-learn">
                                    <ul>
                                        <li>Master the number one platform in UI/UX design, Sketch.</li>
                                        <li>Wireframe websites, mobile apps, and more. Design Mobile Apps, Websites, Web
                                            Apps & More</li>
                                        <li>Create a clickable prototype that looks and functions like the real deal.
                                        </li>
                                        <li>Approach product design from a complete Design System</li>
                                        <li>Take an idea and bring it to life. Everyone has a great idea, this course
                                            will allow you to start building your dream.</li>
                                        <li>Design Mobile Apps, Websites, Web Apps & More</li>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <button type="button" class="btn red add-to-cart-btn big-cart-button-5"
                                        onclick="handleCartItems(this)">
                                        Add to cart
                                    </button>
                                    <button type="button" class="wishlist-btn" title="Add to wishlist"
                                        onclick="handleWishList(this)"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-instructor">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="text-center mb-5">Featured instructor</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>
                <div class="top-istructor-slick shown-after-loading" style="display: none;">
                    <div class="d-sm-flex text-center text-md-start">
                        <div class="top-instructor-img ms-auto me-auto">
                            <a href="instructor.html">
                                <img src="assets/images/uploads/user_image/0269091217f95c25ac4f77c1bd69879a.jpg"
                                    alt="instructor" style="width: 100%;" />
                            </a>
                        </div>
                        <div class="top-instructor-details">
                            <a class="text-decoration-none" href="instructor.html">
                                <h4 class="mb-1 fw-700">Dave Franco</h4>
                                <span class="fw-500 text-muted text-14px"></span>
                                <p class="text-12px fw-500 text-muted my-3">Hi, I'm Dave! I have been identified as one
                                    of the Edustar Top Instructors and all my premium co...</p>

                                <!--                                                                           <span class="badge badge-sub-warning text-12px my-1 py-2"></span>
                         -->
                            </a>

                            <p class="top-instructor-arrow my-3">
                                <span class="cursor-pointer" onclick="$('.top-istructor-slick .slick-prev').click();"><i
                                        class="fas fa-angle-left"></i></span>
                                <span class="cursor-pointer" onclick="$('.top-istructor-slick .slick-next').click();"><i
                                        class="fas fa-angle-right"></i></span>
                            </p>
                        </div>
                    </div>
                    <div class="d-sm-flex text-center text-md-start">
                        <div class="top-instructor-img ms-auto me-auto">
                            <a href="instructor.html">
                                <img src="assets/images/uploads/user_image/48a153e87c587ffe79d6e8609e59124b.jpg"
                                    alt="user_image" style="width: 100%;" />
                            </a>
                        </div>
                        <div class="top-instructor-details">
                            <a class="text-decoration-none" href="instructor.html">
                                <h4 class="mb-1 fw-700">John David</h4>
                                <span class="fw-500 text-muted text-14px"></span>
                                <p class="text-12px fw-500 text-muted my-3">Johns David has a BS and MS in Mechanical
                                    Engineering from Santa Clara University and years of exper...</p>

                                <!--                                                                           <span class="badge badge-sub-warning text-12px my-1 py-2"></span>
                         -->
                            </a>

                            <p class="top-instructor-arrow my-3">
                                <span class="cursor-pointer" onclick="$('.top-istructor-slick .slick-prev').click();"><i
                                        class="fas fa-angle-left"></i></span>
                                <span class="cursor-pointer" onclick="$('.top-istructor-slick .slick-next').click();"><i
                                        class="fas fa-angle-right"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
            if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                if ($(window).width() >= 840) {
                    $("a.has-popover").webuiPopover({
                        trigger: "hover",
                        animation: "pop",
                        placement: "horizontal",
                        delay: {
                            show: 500,
                            hide: null,
                        },
                        width: 330,
                    });
                } else {
                    $("a.has-popover").webuiPopover({
                        trigger: "hover",
                        animation: "pop",
                        placement: "vertical",
                        delay: {
                            show: 100,
                            hide: null,
                        },
                        width: 335,
                    });
                }
            }

            if ($(".course-carousel")[0]) {
                $(".course-carousel").slick({
                    dots: false,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    swipe: false,
                    touchMove: false,
                    responsive: [{
                            breakpoint: 840,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 620,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                    ],
                });
            }

            if ($(".top-istructor-slick")[0]) {
                $(".top-istructor-slick").slick({
                    dots: false,
                });
            }
        });
</script>
@endsection
