 <!-- =========================
    Header
=========================== -->
 <header id="header" class="header {{ Request::is('contact') ? 'header-white' : 'header-transparent'}}">
     <nav class="navbar navbar-expand-lg sticky-navbar">
         <div class="container">
             <a class="navbar-brand" href="{{route('home.page')}}">
                 <img src="{{asset('landing-page/images/logo/logo-dark.png')}}" class="logo-light" alt="logo">
                 <img src="{{asset('landing-page/images/logo/logo-dark.png')}}" class="logo-dark" alt="logo">
             </a>
             <button class="navbar-toggler" type="button">
                 <span class="menu-lines"><span></span></span>
             </button>
             <div class="collapse navbar-collapse" id="mainNavigation">
                 <ul class="navbar-nav ml-auto">
                    <li class="nav__item">
                        <a href="{{route('home.page')}}" class="nav__item-link">{{__("Home")}}</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{{route('about.page')}}" class="nav__item-link">{{__("About")}}</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{{route('products.page')}}" class="nav__item-link">{{__("Products")}}</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{{route('gallery.page')}}" class="nav__item-link">{{__("Gallery")}}</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{{route('contact.page')}}" class="nav__item-link">{{__("Contact")}}</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="contacs.html" class="nav__item-link">{{__("Blog")}}</a>
                    </li><!-- /.nav-item -->

                 </ul><!-- /.navbar-nav -->
             </div><!-- /.navbar-collapse -->
             <div class="navbar-modules">
                 <ul class="modules__wrapper d-flex align-items-center list-unstyled">
                     <li>
                         <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
                     </li>
                     {{-- <li class="d-none d-lg-block">
                         <a href="request-quote.html" class="module__btn btn__request btn">
                             <span>Request A Quote</span><i class="icon-arrow-right"></i>
                         </a>
                     </li> --}}
                     <li>
                         <div class="dropdown">
                             <button class="module__btn dropdown-toggle" id="langDrobdown" data-toggle="dropdown">
                                 <span>En</span>
                             </button>
                             <div class="dropdown-menu" aria-labelledby="langDrobdown">
                                 <a class="dropdown-item" href="#">
                                     <img src="landing-page/images/flags/united-states.png" alt="us"><span>Us</span>
                                 </a>
                                 <a class="dropdown-item" href="#">
                                     <img src="landing-page/images/flags/germany.png" alt="germany"><span>germany</span>
                                 </a>
                             </div>
                         </div>
                     </li>
                 </ul><!-- /.modules-wrapper -->
             </div><!-- /.navbar-modules -->
         </div><!-- /.container -->
     </nav><!-- /.navabr -->
 </header><!-- /.Header -->
{{--
 <li class="nav__item with-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Features</a>
    <i class="fa fa-angle-right" data-toggle="dropdown"></i>
    <ul class="dropdown-menu">
        <li class="nav__item"><a href="request-quote.html" class="nav__item-link">request a
                quote</a></li>
        <li class="nav__item"><a href="track-shipment.html" class="nav__item-link">track and
                trace</a></li>
        <li class="nav__item"><a href="find-location.html" class="nav__item-link">find
                Location</a></li>
        <li class="nav__item"><a href="rates.html" class="nav__item-link">Rates & Pricing</a>
        </li>
        <li class="nav__item"><a href="faqs.html" class="nav__item-link">help and faqs</a></li>

    </ul>
</li> --}}
