<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">

    </head>
    <body data-smooth-scroll-offset="77">
        <div class="nav-container">
            <div>
                <div class="bar bg--dark bar--sm visible-sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <a href="index.html"> <img class="logo logo-dark" alt="logo" src="img/logo-dark.png"> <img class="logo logo-light" alt="logo" src="img/logo-light.png"> </a>
                            </div>
                            <div class="col-9 col-md-10 text-right">
                                <a href="#" class="hamburger-toggle" data-toggle-class="#menu3;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="bar bar--sm bg--dark" id="menu3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1 hidden-xs hidden-sm order-lg-1">
                                <div class="bar__module">
                                    <a href="{{ URL::to('/home') }}"> <img class="logo logo-dark" alt="logo" src="img/logo-dark.png"> <img class="logo logo-light" alt="logo" src="img/logo-light.png"> </a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3">
                                <div class="bar__module">
                                    
                                </div>
                            </div>
                            <div class="col-lg-2 order-lg-2">
                                <div class="bar__module">
                                  
                                </div>
                            </div>
                            <div class="col-lg-5 text-right text-left-xs order-lg-4">
                                <div class="bar__module">
                                    <ul class="menu-horizontal text-left">
                                        <li> 
                                            <a href="{{ route('trainee.index') }}">
                                                Trainee
                                            </a> 
                                        </li>
                                        <span> | </span>

                                        <li class="dropdown"> 
                                            <span class="dropdown__trigger">
                                                {{ Auth::user()->name }}
                                            </span>
                                            <div class="dropdown__container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="dropdown__content col-lg-2">
                                                            <ul class="menu-vertical">
                                                                <li> <a href="#">Single Link</a> </li>
                                                                <li> 
                                                                    <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                        @csrf
                                                                    </form> 
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                @yield('content')
            </div>
        </div>
        <div class="main-container"> </div>
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/parallax.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        @yield('script')
            <script type="text/javascript">      
            var success = "{{ Session::get('success') }}";
            if (success) {
                swal ({
                    text: success,
                    icon: 'success',
                    button: 'OK',
                });
            }

            var deleted = "{{ Session::get('deleted') }}";
            if (deleted) {
                swal ({
                    text: deleted,
                    icon: 'error',
                    button: 'OK',
                });
            }

            var error = "{{ Session::get('error') }}";
            if (error) {
                swal ({
                    text: error,
                    icon: 'error',
                    button: 'OK',
                });
            }

            var danger = "{{ Session::get('flash_danger') }}";
            if (danger) {
                swal ({
                    text: danger,
                    icon: 'error',
                    button: 'OK',
                });
            }

            var warning = "{{ Session::get('warning') }}";
            if (warning) {
                swal ({
                    text: warning,
                    icon: 'info',
                    button: 'OK',
                });
            }

            var errors = $('.alert-errors').length;
            var html_errors = $('#html_errors').val();
            if(errors){
                swal ({
                    text: html_errors,
                    icon: 'error',
                    button: 'OK',
                });
            }

            $('.logout-link').on('click', function(e) {
                $(this).closest('form').submit();
            })
        </script>
    </body>

</html>