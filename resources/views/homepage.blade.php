<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all">
        <link href="{{ asset('css/socicon.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/iconsmind.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">

    </head>
    <body data-smooth-scroll-offset="77">
        <div class="nav-container">
            <div>
                <div class="bar bar--sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <a href="index.html"> <img class="logo logo-dark" alt="logo" src="img/logo-dark.png"> <img class="logo logo-light" alt="logo" src="img/logo-light.png"> </a>
                            </div>
                            <div class="col-9 col-md-10 text-right">
                                <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav id="menu1" class="bar bar-1 hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1 col-md-2 hidden-xs">
                                <div class="bar__module">
                                    <a href="index.html"> <img class="logo logo-dark" alt="logo" src="img/logo-dark.png"> <img class="logo logo-light" alt="logo" src="img/logo-light.png"> </a>
                                </div>
                            </div>
                            <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                                <div class="bar__module">
                                    <ul class="menu-horizontal text-left">
                                        <li> <a href="#">
                                        Single Link
                                    </a> </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Dropdown Slim
                                    </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-2">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Single Link</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"> <span class="dropdown__trigger">
                                        Dropdown Wide
                                    </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content row w-100">
                                                            <div class="col-lg-3">
                                                                <h5>Menu Title</h5>
                                                                <ul class="menu-vertical">
                                                                    <li> <a href="#">Single Link</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <h5>Menu Title</h5>
                                                                <ul class="menu-vertical">
                                                                    <li> <a href="#">Single Link</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <h5>Menu Title</h5>
                                                                <ul class="menu-vertical">
                                                                    <li> <a href="#">Single Link</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <h5>Menu Title</h5>
                                                                <ul class="menu-vertical">
                                                                    <li> <a href="#">Single Link</a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bar__module">
                                    @if (Route::has('login'))
                                        @auth
                                            {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                                        @else
                                        
                                            <a class="btn btn--sm type--uppercase" href="{{ route('login') }}">
                                                <span class="btn__text">
                                                    Login
                                                </span>
                                            </a>
                                        
                                            @if (Route::has('register'))
                                                <a class="btn btn--sm btn--primary type--uppercase" href="{{ route('register') }}"> 
                                                    <span class="btn__text">
                                                        Register
                                                    </span>
                                                </a>
                                            @endif
                                        @endauth
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-container">
            <section class="cover cover-features imagebg space--lg" data-overlay="2">
                <div class="background-image-holder"> <img alt="background" src="img/landing-23.jpg"> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-7">
                            <h1> Welcome to RTC-Tagoloan </h1>
                            <p class="lead"> Stack offers a clean and contemporary look to suit a range of purposes from corporate, tech startup, marketing site to digital storefront. </p>
                            <a class="btn btn--primary type--uppercase" href="#"> <span class="btn__text">
						View The Demos
					</span> </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Clock-Back color--primary"></i>
                                <div class="feature__body">
                                    <p> Save time with a multitude of styled components designed to showcase your content </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Duplicate-Window color--primary"></i>
                                <div class="feature__body">
                                    <p> Construct mockups or production-ready pages in-browser with Variant Page Builder </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature feature-2 boxed boxed--border bg--white"> <i class="icon icon-Life-Jacket color--primary"></i>
                                <div class="feature__body">
                                    <p> Take comfort in 6 months included support with a dedicated support forum </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-center unpad--bottom switchable cta cta-3 imagebg" data-overlay="4">
                <div class="background-image-holder"> <img alt="background" src="img/hero-1.jpg"> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-7">
                            <div class="switchable__text">
                                <h2>Streamline your workflow with Stack</h2>
                                <p class="lead"> Create the smart, stylish site your business deserves. </p>
                                <a class="btn btn--primary type--uppercase" href="#purchase-template"> <span class="btn__text">
                            Purchase Stack Now
                        </span> <span class="label">$18 USD</span> </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5"> <img alt="Image" class="block" src="img/avatar-large-1.png"> </div>
                    </div>
                </div>
            </section>
            <section class="text-center imagebg" data-overlay="4">
                <div class="background-image-holder"> <img alt="background" src="img/hero-1.jpg"> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature feature-1"> <img alt="Image" src="img/cowork-1.jpg">
                                <div class="feature__body boxed boxed--lg boxed--border">
                                    <h3>Built for teams</h3>
                                    <p class="lead"> Save time with a multitude of styled components designed to showcase your content </p> <a href="#">
                            Learn More
                        </a> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature feature-1"> <img alt="Image" src="img/landing-1.jpg">
                                <div class="feature__body boxed boxed--lg boxed--border">
                                    <h3>Modern Aesthetic</h3>
                                    <p class="lead"> Save time with a multitude of styled components designed to showcase your content </p> <a href="#">
                            Learn More
                        </a> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature feature-1"> <img alt="Image" src="img/inner-6.jpg">
                                <div class="feature__body boxed boxed--lg boxed--border">
                                    <h3>Beautiful Markup</h3>
                                    <p class="lead"> Save time with a multitude of styled components designed to showcase your content </p> <a href="#">
                            Learn More
                        </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer-6 unpad--bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h6 class="type--uppercase">About Us</h6>
                            <p> Stack is a robust multipurpose HTML template designed with modularity at the core. Easily combine over 200 interface blocks to create websites for any purpose. </p>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h6 class="type--uppercase">Recent Updates</h6>
                            <div class="tweets-feed tweets-feed-2" data-feed-name="mrareweb" data-amount="2"></div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h6 class="type--uppercase">Instagram</h6>
                            <div class="instafeed instafeed--gapless" data-user-name="mediumrarethemes" data-amount="6" data-grid="3"></div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h6 class="type--uppercase">Newsletter</h6>
                            <form action="//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=f300c9cce8" data-success="Thanks for signing up.  Please check your inbox for a confirmation email." data-error="Please provide your email address."> <input class="validate-required validate-email" type="text" name="EMAIL" placeholder="Email Address"> <button type="submit" class="btn btn--primary type--uppercase">Subscribe</button>
                                <div style="position: absolute; left: -5000px" aria-hidden="true"> <input type="text" name="b_77142ece814d3cff52058a51f_f300c9cce8" tabindex="-1" value=""> </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer__lower text-center-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6"> <span class="type--fine-print">© <span class="update-year"></span> Medium Rare — All Rights Reserved</span>
                            </div>
                            <div class="col-sm-6 text-right text-center-xs">
                                <ul class="social-list list-inline">
                                    <li><a href="#"><i class="socicon socicon-google icon icon--xs"></i></a></li>
                                    <li><a href="#"><i class="socicon socicon-twitter icon icon--xs"></i></a></li>
                                    <li><a href="#"><i class="socicon socicon-facebook icon icon--xs"></i></a></li>
                                    <li><a href="#"><i class="socicon socicon-instagram icon icon--xs"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/parallax.js') }}"></script>
        <script src="{{ asset('js/twitterfetcher.min.js') }}"></script>
        <script src="{{ asset('js/spectragram.min.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>

    </body>

</html>