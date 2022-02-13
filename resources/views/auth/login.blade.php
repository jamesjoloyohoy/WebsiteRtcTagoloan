<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">

    </head>
    <body data-smooth-scroll-offset="77">
        <div class="nav-container"> </div>
        <div class="main-container">
            <section class="height-100 imagebg text-center" data-overlay="4">
                <div class="background-image-holder"><img alt="background" src="img/inner-6.jpg"></div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-7 col-lg-5">
                            <h2>Login to continue</h2>
                            <p class="lead"> Welcome back, sign in with your existing Stack account credentials </p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
                                            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            
                                        </div>

                                        <div class="col-md-12"> <button class="btn btn--primary type--uppercase" type="submit">Login</button> </div>
                                    </div>

                                @if (Route::has('password.request'))
                                    <span class="type--fine-print block">Forgot your username or password? 
                                        <a href="{{ route('password.request') }}">Recover account</a>
                                    </span>
                                @endif

                            </form> 
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/parallax.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>

    </body>

</html>