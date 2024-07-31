<!DOCTYPE html>
<html>

<head>
    <title>Mario Construction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link id="dynamic-favicon" rel="icon" href="{{ asset('images/mario.png') }}" type="image/x-icon">

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('js/indexi.js') }}"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        /* Style to make sure the map takes up space */
        #map {
            width: 100%;
            height: 400px;
            /* Adjust height as needed */
        }

        .navbar-brand img {
            max-height: 50px;
            /* Adjust the logo height as needed */
            vertical-align: middle;
        }

        .navbar-brand span {
            font-size: 1.5rem;
            /* Adjust the font size as needed */
            margin-left: 10px;
            /* Space between logo and text */
        }
    </style>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section starts -->
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid">
                    <div class="contact_nav">
                        <a href="tel:586-495-6378">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>Call: 586-495-6378</span>
                        </a>
                        <a href="mailto:Avmarjan@gmail.com">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Email: Avmarjan@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('images/mario.png') }}" alt="Mario Construction Logo">
                            <span>Mario Construction</span>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('home') }}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- header section ends -->
    </div>
</body>

</html>