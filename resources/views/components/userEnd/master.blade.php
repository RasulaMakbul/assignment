<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Home - Digital Support</title>
    <link rel="stylesheet" href="{{asset('assets1')}}/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i" />
    <link rel="stylesheet" href="{{asset('assets1')}}/css/preloader.css">
    <link rel="stylesheet" href="{{asset('assets1')}}/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('assets1')}}/fonts/simple-line-icons.min.css" />
    <link rel="stylesheet" href="{{asset('assets1')}}/css/Features-Blue.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="{{asset('assets1')}}/css/Projects-Horizontal.css" />
    <link rel="stylesheet" href="{{asset('assets1')}}/css/Team-Boxed.css" />
    <link rel="stylesheet" href="{{asset('assets1')}}/css/vanilla-zoom.min.css" />
    <link rel="stylesheet" href="{{asset('assets1')}}/css/footer.css" />
</head>
<script src="{{asset('assets1')}}/js/preloader.js"></script>

<body>

    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <nav class="
    navbar navbar-light navbar-expand-lg
    fixed-top
    bg-white
    clean-navbar
    ">

        <div class="container">
            <a class="navbar-brand logo" href="#">Digital Support</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('feature')}}">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('projects')}}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('pricing')}}">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('aboutUs')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contactUs')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('registration')}}">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('login')}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        {{ $slot }}
    </main>
    <!----------------Page Footer------------------->
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr />
        <div style="padding-left: 40vw; font-weight: 600">
            © 2021 Copyright Text
        </div>
        <p></p>
        <!-- <div class="footer-copyright bg-primary my-5">
            
        </div> -->
    </footer>
    <!----------------Page Footer------------------->
    <script src="{{asset('assets1')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{asset('assets1')}}/js/vanilla-zoom.js"></script>
    <script src="{{asset('assets1')}}/js/theme.js"></script>
</body>

</html>