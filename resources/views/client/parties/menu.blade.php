<div class="sidebar-wrap">
    <div class="sidebar-inner">
        <div class="sidebar-close">
            <div class="sidebar-close-btn">
                <i class="fa fa-times"></i>
            </div>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo">
                <a href="{{ route('home') }}">
                    <img class="img-fluid" src="{{ asset('assets/images/favicon/favicon.ico') }}" alt="FormationGael">
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="search-form">
                <input type="text" placeholder="Search Courses" class="form-control">
                <span><i class="fa fa-search"></i></span>
            </div>
            <div class="contact-info">
                <ul>
                    <li><i class="fa fa-envelope"></i> support@groupegael.com</li>
                    <li><i class="fa fa-phone"></i> +98 012345 6789</li>
                </ul>
            </div>
            <div class="social-icon">
                <ul>
                    <li><span>Follow Us:</span></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="header-log-reg">
                <ul>
                    <li><a href="{{ route("login") }}">Connexion</a></li>
                    {{-- <li><small>|</small></li>
                    <li><a href="#">Inscription</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- start header-top-area -->
<header class="header-area">
    <div class="header-top-area">
        <div class="container">
            <div class="header-top-wrap">
                <!--start couser search-->
                <div class="header-course-search">
                    <input type="text" placeholder="Search Courses" class="form-control">
                    <span><i class="fa fa-search"></i></span>
                </div>
                <!--end couser search-->
                <!--start header contact info-->
                <div class="header-contact-info text-right">
                    <ul>
                        <li><i class="fa fa-envelope"></i> support@example.com</li>
                        <li><i class="fa fa-phone"></i> +98 012345 6789</li>
                    </ul>
                </div>
                <!--end header contact info-->
                <!--start header-top-social-->
                <div class="header-top-social text-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <!--end header-top-social-->
            </div>
        </div>
    </div>
    <!--end header-top-area-->
    <!--start header-btm-area-->
    <div class="header-btm-area">
        <div class="container">
            <div class="main-menu-wrap">
                <!--start site logo-->
                <div class="site-logo">
                    <a class="logo" href="#"><img src="{{ asset('assets/images/favicon/FRMT2.jpg') }}" alt="formation GAEL"></a>
                </div>
                <!--end site logo-->
                <!--start mainmenu-->
                <div class="main-menu-area text-right">
                    <nav class="mainmenu">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="{{ route('about') }}">A propos</a></li>
                            <li><a href="{{ route('formations') }}">Formations</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!--end mainmenu-->
                <!--start cart icon-->
                {{-- <div class="header-cart text-center">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i>
                                <span class="cart-total-number">0</span>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                <!--end cart icon-->
                <!--start login registration btn-->
                <div class="header-log-reg text-right">
                    <ul>
                        <li><a href="{{ route('login') }}">Connexion</a></li>
                        {{-- <li><small>|</small></li>
                        <li><a href="#">Inscription</a></li> --}}
                    </ul>
                </div>
                <!--end login registration btn-->
                <!--start toggle button-->
                <div class="header-toggle-btn">
                    <a class="sidebar-toggle-btn">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!--end toggle button-->
            </div>
        </div>
    </div>
</header>
<!--end header-->
