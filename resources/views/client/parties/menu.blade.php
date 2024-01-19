
 <!-- header area start -->
 <header id="header">
    <!-- header top area start -->
    <div class="header-top">
        <div class="container">
            <div class="row d-flex flex-center">
                <div class="col-sm-8">
                    <div class="ht-address">
                        <ul>
                            <li><i class="fa fa-phone"></i>+ 88 01916 444137</li>
                            <li><i class="fa fa-envelope"></i>info@example.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ht-social">
                        <ul>
                            <li><a target="blank" href="https://web.facebook.com/GaelMinistriesOfficial/"><i class="fa fa-facebook"></i></a></li>
                            {{-- <li><a href=""><i class="fa fa-twitter"></i></a></li> --}}
                            <li><a target="blank"  href="https://www.youtube.com/watch?v=3SxK9DPMVMU"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top area end -->
    <!-- header bottom area start -->
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom-inner">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-9">
                        <div class="logo">
                            <a href="index.html"><img width="300" src="{{ asset('assets/images/favicon/2PNG.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                        <div class="main-menu">
                            <nav>
                                <ul id="m_menu_active">

                                    <li class="active"><a href="{{ route('home') }}">Accueil</a></li>
                                    <li><a href="{{ route('about') }}">A propos</a></li>
                                    <li><a href="{{ route('formations') }}">Formations</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    @if (!Auth::guest())
                                    <li><a href="{{ route('dashboard') }}">Mon profil</a></li>
                                    @else
                                        <li><a href="{{ route('studenConnect') }}">Connexion</a></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-sm-3">
                        <div class="hb-right">
                            <ul>
                                <li class="search_btn"><i class="fa fa-search"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header bottom area end -->
</header>
<!-- header area end -->
<!-- offset search area start -->
<div class="offset-search">
    <form action="#">
        <input type="text" name="search" placeholder="Sarch here...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
