<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiffcuts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--js--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- --Boostratp Link---}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Linking your CSS file -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

</head>

<body>
    <div class="top-bar sticky">
        <div class="container d-flex justify-content-between">
            <div class="left-items ">
                <a href="#" class="b ">
                </a>
                <i class="bi bi-telephone p-2 fs-5" style="color: orange;"></i>
                <span>Call Us on make on</span>
                <span style="color: orange;" class="ms-4"><a href="https://wa.me/quiffcuts" style="color: orange;" >Whatsapp Contact</a></span>
            </div>
            <div class="right-items">
                <a href="https://www.facebook.com/quiffcuts1/" target="_blank">
                    <i class="social-icons c bi bi-facebook p-2"></i>
                </a>
                <a href="https://www.tiktok.com/@quiffcuts" target="_blank">
                    <i class="social-icons bi bi-tiktok p-2"></i>
                </a>
                <a href="https://www.instagram.com/quiff_cuts" target="_blank">
                    <i class="social-icons c bi bi-instagram p-2"></i>
                </a>
                <a href="https://wa.me/quiffcuts" target="_blank">
                    <i class="social-icons c bi bi-whatsapp p-2"></i>
                </a>
            </div>
        </div>
    </div>
    <div id="" class="text-center bg-warning">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark">
                <div class="container-fluid">
                    <img src="logo-light.png" alt="no logo" class="navbar-brand" height="50px" width="200px" style="margin: start 40px;">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item ms-5">
                                <a class="nav-link text-white fw-bold fs-5" href="/">Home</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link text-white fw-bold ms-3 fs-5" href="{{route('about.index')}}">About Us</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link text-white fw-bold ms-3 fs-5" href="{{route('contact.index')}}">Contact</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link text-white fw-bold ms-3 fs-5" href="{{route('privacy.index')}}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="" style=" background: linear-gradient(45deg, rgba(20, 20, 20, 0.623), rgba(20, 20, 20, 0.623)), url(../back.JPG);
    background-size: cover;
    background-repeat: no-repeat;
    height: 400px;
">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 text-center">
                    <h1 class="text-warning fs-1 a" style="margin-top: 80px;">ABOUT US</h1>
                    <p class="fs-5 text-white mt-3">
                        We are always ready to take the perfect shot, capturing moments that matter most.
                        With creativity, skill, and passion, we turn your memories into timeless treasures.
                    </p>

                    <button type="button" class="btn btn-warning rounded-pill mt-5 text-white" style="margin-bottom: 80px;">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row" style="margin-top:0px;margin-bottom:50px;">
                <!-- Text Column -->
                <p class="text-warning fs-1` a text-center" style="margin-top: 50px;">- ABOUT US</p>
                <div class="col-md-6 col-12 order-2">
                    <h3 class="fw-bold fs-1 a">We're here to change your daily <span class="fw-bold text-warning">lifestyle</span></h3>
                    <p class="mt-4 c text-dark">
                        Welcome to [Salon Name], where beauty meets style, and every client is our top priority. Nestled in the heart of [City/Location], our salon is dedicated to providing
                        exceptional hair care services in a warm and welcoming environment.
                    </p>
                    <p class="mt-4">At [Salon Name], we believe that your hair is a reflection of your personality, and we’re here to help you express it with confidence. Whether you’re looking for a trendy haircut, a vibrant new color, or a transformative treatment,
                        our team of skilled stylists and colorists is passionate about making your vision a reality.</p>
                    <a href="{{route('contact.index')}}" class="btn btn-warning rounded-pill text-white">CONTACT US</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <img src="IMG_1419(1).JPG" alt="no pic" style="border-radius: 15px 30px;" height="210px" width="200px">
                        </div>
                        <div class="col-md-6 col-12 mt-3">
                            <img src="IMG_1273(1).JPG" alt="no pic" style="border-radius: 15px 30px;" height="210px" width="200px">
                        </div>
                        <div class="col-md-3 col-12 mt-3">
                            <img src="IMG_1255(1).JPG" alt="no pic" style="border-radius: 15px 30px;" height="210px" width="200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Left Column: Skills -->
                <div class="col-lg-6 col-md-12">
                    <h2>Our Skills</h2>
                    <p>Welcome to [Salon Name], where beauty meets style, and every client is our top priority.
                        Nestled in the heart of [City/Location].</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="head">Quiff Styling Expertise</h6>
                        <h6 class="head">91%</h6>
                    </div>
                    <div class="progress rounded-pill mb-4">
                        <div class="progress-bar bg-warning" style="width:91%; height: 30px;"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="head"> Blow Drying Mastery</h6>
                        <h6 class="head">34%</h6>
                    </div>
                    <div class="progress rounded-pill mb-4">
                        <div class="progress-bar bg-warning" style="width:34%; height: 30px;"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="head">Final Touch & Styling</h6>
                        <h6 class="head">78%</h6>
                    </div>
                    <div class="progress rounded-pill mb-4">
                        <div class="progress-bar bg-warning" style="width:78%; height: 30px;"></div>
                    </div>
                </div>

                <!-- Right Column: Statistics -->
                <div class="col-lg-6 col-md-12">
                    <div class="row mt-5 ms-lg-5 ms-md-0">
                        <div class="col-6 mt-4 text-center">
                            <h2>20<span>+</span></h2>
                            <span>Years of Experience</span>
                        </div>
                        <div class="col-6 mt-4 text-center">
                            <h2>1000<span>+</span></h2>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="row mt-3 ms-lg-5 ms-md-0">
                        <div class="col-6 mt-4 text-center">
                            <h2>2000<span>+</span></h2>
                            <span>Final Touch & Styling</span>
                        </div>
                        <div class="col-6 mt-4 text-center">
                            <h2>200<span>+</span></h2>
                            <span>Awards Won</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5" style="       background: linear-gradient(45deg, rgba(20, 20, 20, 0.623), rgba(20, 20, 20, 0.623)), url(../worker.JPG);
        background-size: cover;
        background-repeat: no-repeat;
        height: 400px;">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 text-center">
                    <h2 class="text-warning" style="margin-top: 80px;">Hire Us Now</h2>
                    <p class="fs-5 text-white mt-3">
                        Always ready to capture the perfect shot and deliver outstanding results. Hire us for professional services now!
                    </p>
                    <a href="/" class="btn btn-warning rounded-pill text-white">Started</a>
                </div>
            </div>
        </div>

        <!-- Subscription Section -->
        <div style="background-color: rgb(77, 42, 15);">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-3 col-12 mb-4">
                        <h4 class="text-white fw-bold">Quiffcuts</h4>
                        <p class="text-white mt-3">We believe your hair is your crown, and we are here to make it shine.</p>
                        <div class="form-group mt-4 position-relative">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            <button type="button" class="btn btn-warning btn-sm text-white position-absolute top-50 end-0 translate-middle-y me-2">
                                Subscribe
                            </button>
                        </div>
                    </div>
                    <!-- Links Section -->
                    <div class="col-md-3 col-12 mb-4">
                        <h5 class="text-white fw-bold">Links</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="text-white mt-2"><a href="{{route('about.index')}}" class="text-white">About Us</a></li>
                            <li class="text-white mt-2"><a href="{{route('privacy.index')}}" class="text-white">Privacy Policy</a></li>
                            <li class="text-white mt-2"><a href="{{route('contact.index')}}" class="text-white">Contact</a></li>

                        </ul>
                    </div>
                    <!-- Business Hours Section -->
                    <div class="col-md-3 col-12 mb-4">
                        <h5 class="text-white fw-bold">Business Hours</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="text-warning mt-2">Mon - Fri</li>
                            <li class="text-white">9AM- 2AM</li>
                            <li class="text-warning mt-2">Sat</li>
                            <li class="text-white">9AM- 2AM</li>
                            <li class="text-warning mt-2">Sun</li>
                            <li class="text-white">9AM- APM</li>

                        </ul>
                    </div>
                    <!-- Contact Section -->
                    <div class="col-md-3 col-12 mb-4">
                        <h5 class="text-white fw-bold">Contact</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="text-white mt-2">+92 308 2270007</li>
                            <li class="text-white mt-2">salon@quiffcuts.com</li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Bottom Row -->
                <div class="row">
                    <div class="col-12 text-center text-warning mt-4">
                        <hr class="border-light">
                        <p class="mb-0">© <span>Copyright</span> <strong>Quiffcuts</strong>. <span>All Rights Reserved.</span></p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>