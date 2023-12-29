@extends("client.layouts.template",['titre'=>"Formations"])



@section("content")
 <!--start feature-area-->
 <section class="course-archive">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="course-sidebar">
                    <div class="course-sidebar-search">
                        <input type="text" value="" name="s" placeholder="Search..." class="form-control">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    <!--start Category-->
                    <div class="filter-category">
                        <h4>Category</h4>
                        <form action="#" method="post">
                            <div class="form-check">
                                <label class="form-check-label" for="check1">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">Business
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="check2">
                                    <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Design
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="check3">
                                    <input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">Development
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="check4">
                                    <input type="checkbox" class="form-check-input" id="check4" name="option3" value="something">Graphic Design
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="check5">
                                    <input type="checkbox" class="form-check-input" id="check5" name="option5" value="something">Heath & Fitness
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="check6">
                                    <input type="checkbox" class="form-check-input" id="check6" name="option6" value="something">Marketing
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="check7">
                                    <input type="checkbox" class="form-check-input" id="check7" name="option7" value="something">Math
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="check8">
                                    <input type="checkbox" class="form-check-input" id="check8" name="option8" value="something">Photography
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="check9">
                                    <input type="checkbox" class="form-check-input" id="check9" name="option9" value="something">PHP
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="check10">
                                    <input type="checkbox" class="form-check-input" id="check10" name="option10" value="something">WordPress
                                </label>
                            </div>
                        </form>
                    </div>
                    <!--end Category-->
                    <!--start Tag-->
                    <div class="filter-tag">
                        <h4>Tag</h4>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">App Development
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Graphic Design
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Heath & Fitness
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">PHP
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">UX Design
                            </label>
                        </div>
                    </div>
                    <!--end Tag-->
                    <!--start Level-->
                    <div class="filter-level">
                        <h4>Level</h4>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Beginner
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Intermediate
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Expert
                            </label>
                        </div>
                    </div>
                    <!--end Level-->
                    <!--start Price-->
                    <div class="filter-price">
                        <h4>Price</h4>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Free
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Paid
                            </label>
                        </div>
                    </div>
                    <!--end Price-->
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="row search-result">
                    <div class="col-lg-6 col-md-3">
                        <div class="tutor-courses">
                            <h5><span>9</span> Courses</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tutor-course-archive float-right">
                            <form class="tutor-course-form">
                                <select class="form-control">
                                    <option value="newest_first">Release Date (newest first)</option>
                                    <option value="oldest_first">Release Date (oldest first)</option>
                                    <option value="course_title_az">Course Title (a-z)</option>
                                    <option value="course_title_za">Course Title (z-a)</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--start course card-->
                    <div class="col-lg-4">
                        <div class="course-card four">
                            <div class="course-header">
                                <h5>All Levels</h5>
                                <div class="course-card-icon">
                                    <img src="assets/images/icons/ribbon-1.svg" alt="image">
                                </div>
                                <div class="course-thumbnail">
                                    <a href="{{ route('detailFormation',['id'=>2]) }}"><img src="assets/images/course-3.jpg" class="img-fluid" alt="image"></a>
                                </div>
                            </div>
                            <div class="course-content four">
                                <div class="course-rating">
                                    <div class="star-rating-group">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="course-rating-count">5.00 (2)</span>
                                </div>
                                <div class="course-title">
                                    <h3><a href="{{ route('detailFormation',['id'=>2]) }}">Nutrition: Build Your Perfect Diet & Meal Plan</a></h3>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fa fa-clock-o"></i> 02h 20m</li>
                                    <li><i class="fa fa-user"></i> 58</li>
                                </ul>
                                <div class="course-author">
                                    <div class="avator">A</div> By <span class="author-name">Admin</span>
                                </div>
                                <div class="course-content-footer">
                                    <div class="course-price four">
                                        <span>$15.00</span>
                                    </div>
                                    <div class="course-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span><a href="#">Add to cart</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course card-->
                    <!--start course card-->
                    <div class="col-lg-4">
                        <div class="course-card four">
                            <div class="course-header">
                                <h5>Intermediate</h5>
                                <div class="course-card-icon">
                                    <img src="assets/images/icons/ribbon-1.svg" alt="image">
                                </div>
                                <div class="course-thumbnail">
                                    <a href="course-single.html"><img src="assets/images/course-1.jpg" class="img-fluid" alt="image"></a>
                                </div>
                            </div>
                            <div class="course-content four">
                                <div class="course-rating">
                                    <div class="star-rating-group">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="course-rating-count">5.00 (8)</span>
                                </div>
                                <div class="course-title">
                                    <h3><a href="course-single.html">PHP Beginners – Become a PHP Master</a></h3>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fa fa-clock-o"></i> 3h 32m</li>
                                    <li><i class="fa fa-user"></i> 66</li>
                                </ul>
                                <div class="course-author">
                                    <div class="avator">A</div> By <span class="author-name">Admin</span>
                                </div>
                                <div class="course-content-footer">
                                    <div class="course-price four">
                                        <span>Free</span>
                                    </div>
                                    <div class="course-cart">
                                        <span><a href="#">Get Enrolled</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course card-->
                    <!--start course card-->
                    <div class="col-lg-4">
                        <div class="course-card four">
                            <div class="course-header">
                                <h5>Beginner</h5>
                                <div class="course-card-icon">
                                    <img src="assets/images/icons/ribbon-1.svg" alt="image">
                                </div>
                                <div class="course-thumbnail">
                                    <a href="course-single.html"><img src="assets/images/course-11.jpg" class="img-fluid" alt="image"></a>
                                </div>
                            </div>
                            <div class="course-content four">
                                <div class="course-rating">
                                    <div class="star-rating-group">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <span class="course-rating-count">4.50 (9)</span>
                                </div>
                                <div class="course-title">
                                    <h3><a href="course-single.html">WordPress Master Class for Beginners</a></h3>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fa fa-clock-o"></i>07h 30m</li>
                                    <li><i class="fa fa-user"></i> 33</li>
                                </ul>
                                <div class="course-author">
                                    <div class="avator">A</div> By <span class="author-name">Admin</span>
                                </div>
                                <div class="course-content-footer">
                                    <div class="course-price four">
                                        <span>$29.00</span>
                                    </div>
                                    <div class="course-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span><a href="#">Add to cart</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course card-->
                    <!--start course card-->
                    <div class="col-lg-4">
                        <div class="course-card four">
                            <div class="course-header">
                                <h5>Intermediate</h5>
                                <div class="course-card-icon">
                                    <img src="assets/images/icons/ribbon-1.svg" alt="image">
                                </div>
                                <div class="course-thumbnail">
                                    <a href="course-single.html"><img src="assets/images/course-4.jpg" class="img-fluid" alt="image"></a>
                                </div>
                            </div>
                            <div class="course-content four">
                                <div class="course-rating">
                                    <div class="star-rating-group">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <span class="course-rating-count">4.50 (5)</span>
                                </div>
                                <div class="course-title">
                                    <h3><a href="course-single.html">The Complete JavaScript Course 2022</a></h3>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fa fa-clock-o"></i> 09h 59m</li>
                                    <li><i class="fa fa-user"></i> 14</li>
                                </ul>
                                <div class="course-author">
                                    <div class="avator">A</div> By <span class="author-name">Admin</span>
                                </div>
                                <div class="course-content-footer">
                                    <div class="course-price four">
                                        <span>$17.00</span>
                                    </div>
                                    <div class="course-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span><a href="#">Add to cart</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course card-->
                    <!--start course card-->
                    <div class="col-lg-4">
                        <div class="course-card four">
                            <div class="course-header">
                                <h5>Beginner</h5>
                                <div class="course-card-icon">
                                    <img src="assets/images/icons/ribbon-1.svg" alt="image">
                                </div>
                                <div class="course-thumbnail">
                                    <a href="course-single.html"><img src="assets/images/course-9.jpg" class="img-fluid" alt="image"></a>
                                </div>
                            </div>
                            <div class="course-content four">
                                <div class="course-rating">
                                    <div class="star-rating-group">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="course-rating-count">5.00 (2)</span>
                                </div>
                                <div class="course-title">
                                    <h3><a href="course-single.html">User Experience Design Essentials</a></h3>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fa fa-clock-o"></i> 02h 20m</li>
                                    <li><i class="fa fa-user"></i> 45</li>
                                </ul>
                                <div class="course-author">
                                    <div class="avator">A</div> By <span class="author-name">Admin</span>
                                </div>
                                <div class="course-content-footer">
                                    <div class="course-price four">
                                        <span>$22.00</span>
                                    </div>
                                    <div class="course-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span><a href="#">Add to cart</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course card-->
                    <!--start course card-->
                    <div class="col-lg-4">
                        <div class="course-card four">
                            <div class="course-header">
                                <h5>All Levels</h5>
                                <div class="course-card-icon">
                                    <img src="assets/images/icons/ribbon-1.svg" alt="image">
                                </div>
                                <div class="course-thumbnail">
                                    <a href="course-single.html"><img src="assets/images/course-5.jpg" class="img-fluid" alt="image"></a>
                                </div>
                            </div>
                            <div class="course-content four">
                                <div class="course-rating">
                                    <div class="star-rating-group">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <span class="course-rating-count">4.50 (8)</span>
                                </div>
                                <div class="course-title">
                                    <h3><a href="course-single.html">Ultimate Photoshop Training: From Beginner</a></h3>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fa fa-clock-o"></i> 04h 39m</li>
                                    <li><i class="fa fa-user"></i> 26</li>
                                </ul>
                                <div class="course-author">
                                    <div class="avator">A</div> By <span class="author-name">Admin</span>
                                </div>
                                <div class="course-content-footer">
                                    <div class="course-price four">
                                        <span>$25.00</span>
                                    </div>
                                    <div class="course-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span><a href="#">Add to cart</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course card-->
                    <!--start course card-->
                    <div class="col-lg-4">
                        <div class="course-card four">
                            <div class="course-header">
                                <h5>All Levels</h5>
                                <div class="course-card-icon">
                                    <img src="assets/images/icons/ribbon-1.svg" alt="image">
                                </div>
                                <div class="course-thumbnail">
                                    <a href="course-single.html"><img src="assets/images/course-10.jpg" class="img-fluid" alt="image"></a>
                                </div>
                            </div>
                            <div class="course-content four">
                                <div class="course-rating">
                                    <div class="star-rating-group">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="course-rating-count">4.50 (7)</span>
                                </div>
                                <div class="course-title">
                                    <h3><a href="course-single.html">Blender Creator : Learn 3D Modelling</a></h3>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fa fa-clock-o"></i> 07h 12m</li>
                                    <li><i class="fa fa-user"></i> 10</li>
                                </ul>
                                <div class="course-author">
                                    <div class="avator">A</div> By <span class="author-name">Admin</span>
                                </div>
                                <div class="course-content-footer">
                                    <div class="course-price four">
                                        <span>$19.00</span>
                                    </div>
                                    <div class="course-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span><a href="#">Add to cart</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course card-->
                    <!--start course card-->
                    <div class="col-lg-4">
                        <div class="course-card four">
                            <div class="course-header">
                                <h5>Intermediate</h5>
                                <div class="course-card-icon">
                                    <img src="assets/images/icons/ribbon-1.svg" alt="image">
                                </div>
                                <div class="course-thumbnail">
                                    <a href="course-single.html"><img src="assets/images/course-11.jpg" class="img-fluid" alt="image"></a>
                                </div>
                            </div>
                            <div class="course-content four">
                                <div class="course-rating">
                                    <div class="star-rating-group">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <span class="course-rating-count">4.50 (5)</span>
                                </div>
                                <div class="course-title">
                                    <h3><a href="course-single.html">Sales Training: Practical Sales Techniques</a></h3>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fa fa-clock-o"></i> 03h 29m</li>
                                    <li><i class="fa fa-user"></i> 29</li>
                                </ul>
                                <div class="course-author">
                                    <div class="avator">A</div> By <span class="author-name">Admin</span>
                                </div>
                                <div class="course-content-footer">
                                    <div class="course-price four">
                                        <span>Free</span>
                                    </div>
                                    <div class="course-cart">
                                        <span><a href="#">Get Enrolled</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course card-->
                    <!--start course card-->
                    <div class="col-lg-4">
                        <div class="course-card four">
                            <div class="course-header">
                                <h5>Beginner</h5>
                                <div class="course-card-icon">
                                    <img src="assets/images/icons/ribbon-1.svg" alt="image">
                                </div>
                                <div class="course-thumbnail">
                                    <a href="course-single.html"><img src="assets/images/course-8.jpg" class="img-fluid" alt="image"></a>
                                </div>
                            </div>
                            <div class="course-content four">
                                <div class="course-rating">
                                    <div class="star-rating-group">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="course-rating-count">5.00 (8)</span>
                                </div>
                                <div class="course-title">
                                    <h3><a href="course-single.html">Complete Trello – Beginners to Advanced</a></h3>
                                </div>
                                <ul class="course-meta">
                                    <li><i class="fa fa-clock-o"></i> 04h 16m</li>
                                    <li><i class="fa fa-user"></i> 12</li>
                                </ul>
                                <div class="course-author">
                                    <div class="avator">A</div> By <span class="author-name">Admin</span>
                                </div>
                                <div class="course-content-footer">
                                    <div class="course-price four">
                                        <span>$26.00</span>
                                    </div>
                                    <div class="course-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span><a href="#">Add to cart</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end course card-->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="course-pagination text-center">
                            <li><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end feature-area-->
@endsection
