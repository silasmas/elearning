@extends("client.layouts.template",['titre'=>"Accueil"])



@section("content")
 <!-- body overlay area start -->
 <div class="body_overlay"></div>
 <!-- body overlay area end -->

 <!-- slider area start -->
 <div class="slider-area owl-carousel has-color">
     <div class="slider_item" style="background: url(assets/images/imgs/3.jpg) center/cover no-repeat;">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7 col-md-9">
                     <div class="slider-content">
                         <h3>admission ‘ 20</h3>
                         <h1><span class="primary-color" >Your bright future</span> is Our Mission</h1>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</p>
                         <a class="btn btn-primary btn-round btn-lg mt-5" href="#">Start Learning Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="slider_item" style="background: url(assets/images/imgs/6.jpg) center/cover no-repeat;">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7 col-md-9">
                     <div class="slider-content">
                         <h3>admission ‘ 20</h3>
                         <h1><span class="primary-color" >Your bright future</span> is Our Mission</h1>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</p>
                         <a class="btn btn-primary btn-round btn-lg mt-5" href="#">Start Learning Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="slider_item" style="background: url(assets/images/imgs/11.jpg) center/cover no-repeat;">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7 col-md-9">
                     <div class="slider-content">
                         <h3>admission ‘ 20</h3>
                         <h1><span class="primary-color" >Your bright future</span> is Our Mission</h1>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</p>
                         <a class="btn btn-primary btn-round btn-lg mt-5" href="#">Start Learning Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="slider_item" style="background: url(assets/images/imgs/8.jpg) center/cover no-repeat;">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7 col-md-9">
                     <div class="slider-content">
                         <h3>admission ‘ 20</h3>
                         <h1><span class="primary-color" >Your bright future</span> is Our Mission</h1>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</p>
                         <a class="btn btn-primary btn-round btn-lg mt-5" href="#">Start Learning Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- slider area end -->

<!-- about area start -->
<div class="about-area ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-left-content">
                    <div class="section-title">
                        <span class="text-uppercase">about us</span>
                         <h2>Welcome to</h2><h2><span>Our </span> <span class="primary-color">university</span></h2>
                    </div>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <a class="btn btn-primary btn-round" href="#">Read more</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="abt-right-thumb">
                    <div class="abt-rt-inner">
                        <a class="expand-video" href="https://www.youtube.com/watch?v=3SxK9DPMVMU"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->


 <!-- course area start -->
 <div class="course-area  pt--120 pb--70">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <span class="text-uppercase">Build your career</span>
                    <h2>Featured Courses </h2>
                </div>
            </div>
        </div>

        <div class="commn-carousel owl-carousel card-deck">
        @forelse ($formations as $f)
            <div class="card mb-5">
                <div class="course-thumb">
                    <img src="{{asset('assets/images/form/'.$f->cover) }}" alt="image">
                    <span class="cs-price primary-bg">Gratuit</span>
                </div>
                <div class="card-body  p-25">
                    <div class="course-meta-title mb-4">
                        <div class="course-meta-text">
                            <h4><a href="{{ route('detailFormation',['id'=>$f->id]) }}">{{ $f->title }}</a></h4>
                            <ul class="course-meta-stats">
                                <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                <li>36 <i class="fa fa-comment"></i></li>
                                <li>85 <i class="fa fa-heart"></i></li>
                            </ul>
                        </div>
                        @forelse ($f->formateur as $fr)
                        <a href="{{route('formateur', ['id' => $fr->id]) }}"><img class="course-meta-thumbnail rounded-circle" width="50" height="50" src="{{asset("assets/images/form/".$fr->profil) }}" alt="image"> </a>

                        @empty

                        @endforelse
                    </div>
                    <p>{{ Str::limit($f->description, 100, '...') }}</p>
                    <ul class="course-meta-details list-inline  w-100">
                        <li>
                         <p>Course</p>
                         <span>3 Year</span>
                        </li>
                        <li>
                         <p>Class Size</p>
                          <span>18</span>
                        </li>
                        <li>
                         <p>Duration</p>
                          <span>1 hour</span>
                        </li>
                    </ul>
              </div><!-- card-body -->
            </div>
            <!-- card -->

            @empty

            @endforelse
        </div>
    </div>
</div>
<!-- course area end -->

 <!-- take toure area start -->
 <div class="take-toure-area ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title sec-style-two">
                    <img class="title-top-shape" src="{{ asset('client/assets/ouvert/images/icon/title-top-shape.png') }}" alt="image">
                    <span class="text-uppercase">Faire une Visite</span>
                    <h2>Video de présentation</h2>
                </div>
            </div>
        </div>
        <div class="video-area">
            <a class="expand-video" href="https://www.youtube.com/watch?v=3SxK9DPMVMU"><i class="fa fa-play"></i></a>
        </div>
    </div>
</div>
<!-- take toure area end -->

 <!-- teacher area start -->
 <div class="teacher-area pb--70">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="section-title">
                    <span class="text-uppercase">Learn from best</span>
                    <h2>Our Teachers</h2>
                </div>
            </div>
        </div>
        <div class="commn-carousel owl-carousel card-deck">
            @forelse ($formateurs as $form)
            <div class="card mb-5">
              <img src="{{asset("assets/images/form/".$form->profil) }}" style="width: 370px!important; heigth: 270px   !important" alt="image">
              <div class="card-body teacher-content p-25">
                <h4 class="card-title mb-4"><a href="{{ route('formateur',['id'=>$form->id]) }}">{{ $form->prenom.'-'.$form->name }}</a></h4>
                <span class="primary-color font-italic d-block mb-3">
                    {{ Str::limit($form->biographie, 100, '...') }}
                </span>
                <p class="card-text"></p>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>

            @empty

            @endforelse
          <!-- card -->
        </div>
    </div>
</div>
<!-- teacher area end -->
<!-- events area start -->
<div class="event-area  pt--120 pb--80">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title">
                    <span class="text-uppercase">Join with us</span>
                    <h2>Upcoming Events to </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($parCategorie as $fr)
            <div class="col-md-6">
                <div class="media align-items-center mb-5">
                    <div class="media-head primary-bg">
                        <span><sub>MAR</sub>25</span>
                        <p>2018</p>
                    </div>
                    <div class="media-body">
                        <h4><a href="{{ route('formBy',['id'=>"categorie&$fr->categorie"]) }}">{{ $fr->categorie }}</a></h4>
                        <p><i class="fa fa-clock-o"></i>{{ $fr->count }} Formation{{s($fr->count)}}</p>
                    </div>
                </div> <!-- media -->
            </div>

            @empty

            @endforelse
            <!-- col-md-6 -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- event-area -->
<!-- events area end -->
@endsection
