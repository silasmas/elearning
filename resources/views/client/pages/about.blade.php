@extends("client.layouts.template",['titre'=>"A propos"])



@section("content")
<!--start about area-->
<section class="about-area four">
    <div class="container">
        <div class="row">
            <!--start about-img-->
            <div class="col-md-4">
                <div class="about-img-four">
                    <img src="{{ asset('assets/images/imgs/i12.jpg') }}" class="img-fluid" alt="image">
                </div>
            </div>
            <!--end about-img-->
            <!--start about-img-->
            <div class="col-md-4">
                <div class="about-img-four margin">
                    <img src="{{ asset('assets/images/imgs/i10.jpg') }}" class="img-fluid" alt="image">
                </div>
            </div>
            <!--end about-img-->
            <!--start about-img-->
            <div class="col-md-4">
                <div class="about-img-four">
                    <img src="{{ asset('assets/images/imgs/i9.jpg') }}" class="img-fluid" alt="image">
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


@endsection
