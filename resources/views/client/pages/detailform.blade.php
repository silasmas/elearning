@extends("client.layouts.template",['titre'=>"Detail formation"])



@section("content")
<!--start course single area-->
<section class="course-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="course-single-content">
                    <!--start course meta-->
                    <div class="course-single-meta">
                        <div class="course-author">
                            <img src="assets/images/client-1.jpg" alt="Image">
                            <span>by</span>
                            <strong>Admin</strong>
                        </div>
                        <div class="course-rating">
                            <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                            <span>5.00 ( 8 Ratings)</span>
                        </div>
                        <div class="course-whishlist">
                            <i class="fa fa-bookmark"></i>Wishlist
                        </div>
                        <div class="course-reply">
                            <i class="fa fa-share"></i>Share
                        </div>
                    </div>
                    <!--end course meta-->
                    <div class="course-categories">
                        <ul>
                            <li><span>Categories:</span></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Photography</a></li>
                        </ul>
                    </div>
                    <!--start course tab-->
                    <div class="course-content-tab">
                        <!--start tab menu-->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="course-info-tab" data-toggle="tab" href="#course-info" role="tab" aria-controls="course-info" aria-selected="true">Course Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <!--sendtart tab menu-->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="course-info" role="tabpanel" aria-labelledby="course-info-tab">
                                <div class="course-about-cont">
                                    <h3>About Course</h3>
                                    <p>Are you new to PHP or need a refresher? Then this course will help you get all the fundamentals of Procedural PHP, Object Oriented PHP, MYSQLi and ending the course by building a CMS system similar to WordPress, Joomla or Drupal. Knowing PHP has allowed me to make enough money to stay home and make courses like this one for students all over the world. Being a PHP developer can allow anyone to make really good money online and offline, developing dynamic applications. Knowing PHP will allow you to build web applications, websites or Content Management systems, like WordPress, Facebook, Twitter or even Google. </p>
                                </div>
                                <div class="course-content-list">
                                    <h3>What Will I Learn?</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Learn when, what and how much you should eat for optimal body composition</li>
                                                <li><i class="fa fa-check"></i> Learn when, what and how much you should eat for optimal body composition</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Learn when, what and how much you should eat for optimal body composition</li>
                                                <li><i class="fa fa-check"></i> Learn when, what and how much you should eat for optimal body composition</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-info-wrap">
                                    <h3>About the instructors</h3>
                                    <div class="instructor-info-inner">
                                        <div class="instructor-avator">
                                            <img src="assets/images/client-1.jpg" alt="image">
                                            <span>Admin</span>
                                        </div>
                                        <div class="instructor-course-info">
                                            <span class="rating-text"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span>4.67 (30 Ratings)</span></span><span class="float-right"><span class="ins-course-info-meta"><i class="fa fa-user"></i><strong>134</strong>Students <span><i class="fa fa-graduation-cap"></i><strong>10</strong>Courses</span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                <div class="course-curriculum">
                                    <h3>Course Curriculum</h3>
                                    <div id="accordion">
                                        <!--start curriculum single-->
                                        <div class="card active">
                                            <div class="card-header two active">
                                                <a class="card-link" data-toggle="collapse" href="#collapseOne">How can I purchase the courses?</a>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                <div class="card-body current">
                                                    <div class="course-lesson">
                                                        <p><span><i class="fa fa-youtube-play"></i> Staying on the Sales Tightrope</span><span class="lesson-text float-right">7:00 <i class="fa fa-lock"></i></span></p>
                                                    </div>
                                                    <div class="course-lesson">
                                                        <p><span><i class="fa fa-youtube-play"></i> Staying on the Sales Tightrope</span><span class="lesson-text float-right">7:00 <i class="fa fa-lock"></i></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end curriculum single-->
                                        <!--start curriculum single-->
                                        <div class="card">
                                            <div class="card-header two">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Which payment methods are supported?</a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="course-lesson">
                                                        <p><span><i class="fa fa-youtube-play"></i> Staying on the Sales Tightrope</span><span class="lesson-text float-right">7:00 <i class="fa fa-lock"></i></span></p>
                                                    </div>
                                                    <div class="course-lesson">
                                                        <p><span><i class="fa fa-youtube-play"></i> Staying on the Sales Tightrope</span><span class="lesson-text float-right">7:00 <i class="fa fa-lock"></i></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end curriculum single-->
                                        <!--start curriculum single-->
                                        <div class="card">
                                            <div class="card-header two">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">Can I upgrade my membership plan?</a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="course-lesson">
                                                        <p><span><i class="fa fa-youtube-play"></i> Staying on the Sales Tightrope</span><span class="lesson-text float-right">7:00 <i class="fa fa-lock"></i></span></p>
                                                    </div>
                                                    <div class="course-lesson">
                                                        <p><span><i class="fa fa-youtube-play"></i> Staying on the Sales Tightrope</span><span class="lesson-text float-right">7:00 <i class="fa fa-lock"></i></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end curriculum single-->
                                        <!--start curriculum single-->
                                        <div class="card">
                                            <div class="card-header two">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                                    How can I cancel my subscription plan?</a>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="course-lesson">
                                                        <p><span><i class="fa fa-youtube-play"></i> Staying on the Sales Tightrope</span><span class="lesson-text float-right">7:00 <i class="fa fa-lock"></i></span></p>
                                                    </div>
                                                    <div class="course-lesson">
                                                        <p><span><i class="fa fa-youtube-play"></i> Staying on the Sales Tightrope</span><span class="lesson-text float-right">7:00 <i class="fa fa-lock"></i></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end curriculum single-->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="review-contents">
                                    <h3>Student Ratings & Reviews</h3>
                                    <div class="review-content-inner">
                                        <div class="review-ratings">
                                            <h2>5.0</h2>
                                            <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            <p>Total 7 Ratings</p>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="rating-star">5</div>
                                            <div class="rating-progress"><span class="rating-progress-value"></span></div>
                                            <div class="review-text">2 ratings</div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="rating-star">4</div>
                                            <div class="rating-progress"></div>
                                            <div class="review-text">0 ratings</div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="rating-star">3</div>
                                            <div class="rating-progress"></div>
                                            <div class="review-text">0 ratings</div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="rating-star">3</div>
                                            <div class="rating-progress"></div>
                                            <div class="review-text">0 ratings</div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="rating-star">1</div>
                                            <div class="rating-progress"></div>
                                            <div class="review-text">0 ratings</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course tab-->
                </div>
            </div>
            <!--start course sidebar-->
            <div class="col-lg-4">
                <div class="course-sidebar two">
                    <div class="course-single-info course-widget">
                        <div class="course-player">
                            <iframe src="https://www.youtube.com/embed/yGDwk4z9EEg"></iframe>
                        </div>
                        <div class="course-price">
                            <span>$29.00</span>
                        </div>
                        <div class="course-enroll-btn text-center">
                            <a href="#">Enroll Course</a>
                        </div>
                        <div class="course-info-list">
                            <ul>
                                <li><span><i class="fa fa-bar-chart"></i>Level</span><span class="info float-right">All Levels</span></li>
                                <li><span><i class="fa fa-clock-o"></i>Duration</span><span class="info float-right">15 hours 20 minutes</span></li>
                                <li><span><i class="fa fa-refresh"></i>Last Updated</span><span class="info float-right">March 19, 2022</span></li>
                                <li><span><i class="fa fa-graduation-cap"></i>Enrolled</span><span class="info float-right">50 Students</span></li>
                                <li><span><i class="fa fa-bookmark"></i>Lessons</span><span class="info float-right">12 Lessons</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="course-materials course-widget">
                        <h3>Material Includes</h3>
                        <ul>
                            <li><i class="fa fa-check"></i> 7.5 hours on-demand video</li>
                            <li><i class="fa fa-check"></i> 10 articles</li>
                            <li><i class="fa fa-check"></i> 31 downloadable resources</li>
                            <li><i class="fa fa-check"></i> Full lifetime access</li>
                            <li><i class="fa fa-check"></i> Access on mobile and TV</li>
                            <li><i class="fa fa-check"></i> Certificate of Completion</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end course sidebar-->
        </div>
    </div>
</section>
<!--end course single area-->
@endsection