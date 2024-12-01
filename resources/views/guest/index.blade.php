<!DOCTYPE html>
<html lang="en">

<head>
    <title>Matt</title>
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
                <span style="color: orange;" class="ms-4">+344 445 5674</span>
            </div>
            <div class="right-items">
                <i class="social-icons c bi bi-facebook p-2"></i>
                <i class="social-icons c bi bi-instagram p-2"></i>
                <i class="social-icons c bi bi-linkedin p-2"></i>
            </div>
        </div>
    </div>
    <div id="hero" class="text-center" style="background-color: #333; padding: 40px 0;">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand a fs-1"  href="#">MATT</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item ms-5">
                                <a class="nav-link text-white fw-bold" href="/">Home</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link text-white fw-bold ms-3" href="#">Services</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link text-white fw-bold ms-3" href="{{route('about.index')}}">About Us</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link text-white fw-bold ms-3" href="{{route('contact.index')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->   
            <div class="text-center mt-5">
                <h4 class="fw-bold a text-white display-5">Best Shop</h4>
                <a href="#" class="text-warning a fw-bold fs-1 d-block mt-2">in Town</a>
                <p class="custom-font text-white mx-auto" style="max-width: 550px;">
                    We believe your hair is your crown, and we are here to make it shine.
                    Visit us today and let us bring out the best in you.
                </p>
                <button type="button" class="btn btn-warning text-white mt-3">Book An Appointment</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 80px;">
            <!-- Image Column -->
            <div class="col-md-6 col-12 order-1">
                <img src="IMG_1419.JPG" class="ms-3 d" style="border-radius:4em 0;" alt="no pic" height="460px" width="500px">
            </div>
            <!-- Text Column -->
            <div class="col-md-6 col-12 order-2">
                <p class="text-warning fs-2 a">- ABOUT US</p>
                <h3 class="fw-bold fs-1 a ms-4">We're here to change your daily <span class="fw-bold text-warning">lifestyle</span></h3>
                <p class="mt-3 c text-dark ms-4">
                    We believe your hair is your crown, and we are here to make it shine.
                    Visit us today and let us bring out the best in you. We believe your hair is your crown, and we are here to make it shine.
                    Visit us today and let us bring out the best in you.
                </p>
                <p class="mt-4 c text-dark ms-4">
                    We believe your hair is your crown, and we are here to make it shine.
                    Visit us today and let us bring out the best in you. We believe your hair is your crown, and we are here to make it shine.
                    Visit us today and let us bring out the best in you.
                </p>
            </div>
        </div>
    </div>

    <div style="background-color: papayawhip; margin-top:70px;">
        <div class="container" style="margin-bottom:100px;">
            <div class="row">
                <!-- Text Column -->
                <div class="col-md-6 col-12">
                    <p class="text-warning fs-2 a" style="margin-top: 70px;">- SERVICES</p>
                    <h4 class="fw-bold fs-1 mt-4 a">What we provide to our <span class="text-warning fw-bold">customer</span></h4>
                    <p class="mt-5 c text-dark">We believe your hair is your crown, and we are here to make it shine.
                        We believe your hair is your crown, and we are here to make it shine.
                        Visit us today and let us bring out the best in you.</p>
                </div>
                <!-- Image Column -->
                <div class="col-md-6 col-12" style="margin-top: 50px;">
                    <img src="IMG_1336.JPG"
                        alt="no pic"
                        class="ms-3 mt-4 img-fluid"
                        style="border-radius:0 4em;max-height:450px;max-width:550px;">
                </div>
            </div>
            <!-- Cards Section with Background Effect -->
            <div class="position-relative">
                <!-- Orange Background Div -->
                <div class="bg-warning" style="height: 200px; position: absolute; top: 50%; width: 120%; margin-left: -10%;"></div>

                <!-- Cards Row -->
                <div class="row position-relative" style="z-index: 1;margin-top:50px;">
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card shadow border-0" style="border-radius: 4em 0; height: 300px;">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="fw-bold mt-5">Beord Trimer</h3>
                                    <p class="text-dark c">Shine. Visit us today and let us bring out the best in you.
                                        We believe your hair is your crown, and we are here to make it shine.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card shadow border-0" style="border-radius:4em 0; height: 300px;">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="fw-bold mt-5">Clean Shave</h3>
                                    <p class="c text-dark">Shine. Visit us today and let us bring out the best in you.
                                        We believe your hair is your crown, and we are here to make it shine.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card shadow border-0" style="border-radius:4em 0; height: 300px;">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="fw-bold mt-5">Hair's Cut</h3>
                                    <p class="c text-dark">Shine. Visit us today and let us bring out the best in youWe believe your hair is your
                                        crown, and we are here to make it shine..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card shadow border-0" style="border-radius: 4em 0; height: 300px;">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="fw-bold mt-5">Beord Trimer</h3>
                                    <p class="c text-dark">Shine. Visit us today and let us bring out the best in you.
                                        We believe your hair is your crown, and we are here to make it shine.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5 col-12 mb-4 mt-5">
                <img src="IMG_1285.PNG" alt="" class="ms-md-4 img-fluid" style="border-radius:15px 100px;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7 col-12">
                <h3 class="text-warning a">- WHY CHOOSE US</h3>
                <h4 class="fw-bold fs-2 mt-3 a ms-5">Cutting, shaving everything is
                    <span class="text-warning fw-bold a ">Only for $50, premium service!</span>
                </h4>
                <p class="mt-5 c text-dark ms-5">We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you. We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you.</p>
                <p class="mt-5 c text-dark ms-5">We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you. We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you.</p>
                <div class="row mt-4">
                    <!-- Service 1 -->
                    <div class="col-md-3 col-6 mb-3">
                        <h5 class="fw-bold a ms-5">Hair Cut</h5>
                        <div class="d-flex ms-5">
                            <span class="text-warning mt-3">$</span>
                            <h6 class="text-warning fs-2">30</h6>
                        </div>
                        <a href="" class="text-dark ms-5">Book Now</a>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-md-3 col-6 mb-3">
                        <h5 class="fw-bold a">Shaving</h5>
                        <div class="d-flex ms-5">
                            <span class="text-warning mt-3">$</span>
                            <h6 class="text-warning fs-2">25</h6>
                        </div>
                        <a href="" class="text-dark">Book Now</a>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-md-3 col-6 mb-3">
                        <h5 class="fw-bold a">Cut & Wash</h5>
                        <div class="d-flex ms-5">
                            <span class="text-warning mt-3">$</span>
                            <h6 class="text-warning fs-2">49</h6>
                        </div>
                        <a href="" class="text-dark">Book Now</a>
                    </div>
                    <!-- Service 4 -->
                    <div class="col-md-3 col-6 mb-3">
                        <h5 class="fw-bold a">Shaving</h5>
                        <div class="d-flex ms-5">
                            <span class="text-warning mt-3">$</span>
                            <h6 class="text-warning fs-2">61</h6>
                        </div>
                        <a href="" class="text-dark">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4 mt-5" style="background-color: rgb(77,42,15);">
        <div class="container">
            <!-- Mission Section -->
            <div class="row align-items-center">
                <div class="col-md-6 col-12 mb-4">
                    <p class="text-warning  a">-- Our MISSION</p>
                    <h4 class="text-white fs-3 fw-bold a">We'll do our best to fulfill your <span class="text-warning">expectation</span></h4>
                    <p class="mt-4 text-white c">We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you. We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you.</p>
                    <p class="mt-4 text-white c">We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you. We believe your hair is your crown, and we are here to make it shine.</p>
                </div>
                <div class="col-md-6 col-12 text-center">
                    <img src="IMG_1223.JPG" alt="" class="mt-5 img-fluid" style="border-radius: 80px 20px;max-height:450px;">
                </div>
            </div>

            <!-- Cards Section -->
            <div class="row text-center mt-5">
                <!-- Card 1 -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="card shadow" style="background-color: rgb(77,42,15); height: 13vh;">
                        <div class="card-body">
                            <h6 class="text-warning a">Mon-Fri</h6>
                            <span class="text-white">10AM - 8PM</span>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="card shadow" style="background-color: rgb(77,42,15); height: 13vh;">
                        <div class="card-body">
                            <h6 class="text-warning a">Sat</h6>
                            <span class="text-white">10AM - 8PM</span>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="card shadow" style="background-color: rgb(77,42,15); height: 13vh;">
                        <div class="card-body">
                            <h6 class="text-warning a">Sun</h6>
                            <span class="text-white">10AM - 8PM</span>
                        </div>
                    </div>
                </div>
                <!-- Appointment Card -->
                <div class="col-md-3 col-6 mb-4">
                    <div class="card shadow bg-warning" style="height: 13vh;">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <a href="" class="text-dark fw-bold" style="font-size: 13px;">BOOK AN APPOINTMENT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container" style="margin-top: 80px; margin-bottom:100px;">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="a"><span class="text-warning fs-4 a">meet</span> the artists</h4>
            </div>
            <div id="artistCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
                <!-- Carousel Items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-4">
                                <img src="IMG_1255.JPG" alt="Artist 1" class="d-block w-100 rounded" height="300">
                                <h4 class="fw-bold fs-5 mt-2 a">Nemopir Junior</h4>
                                <span>Senior Borbor</span>
                            </div>
                            <div class="col-4">
                                <img src="IMG_1329.JPG" alt="Artist 2" class="d-block w-100 rounded" height="350">
                                <h4 class="fw-bold fs-5 mt-2 a">Nemopir Junior</h4>
                                <span>Senior Borbor</span>
                            </div>
                            <div class="col-4">
                                <img src="IMG_1222.JPG" alt="Artist 3" class="d-block w-100 rounded" height="350">
                                <h4 class="fw-bold fs-5 mt-2 a">Nemopir Junior</h4>
                                <span>Senior Borbor</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-4">
                                <img src="IMG_1329.JPG" alt="Artist 2" class="d-block w-100 rounded" height="350">
                                <h4 class="fw-bold fs-5 mt-2 a">Nemopir Junior</h4>
                                <span>Senior Borbor</span>
                            </div>
                            <div class="col-4">
                                <img src="IMG_1255.JPG" alt="Artist 4" class=" rounded" height="350">
                                <h4 class="fw-bold fs-5 mt-2 a">Nemopir Junior</h4>
                                <span>Senior Borbor</span>
                            </div>
                            <div class="col-4">
                                <img src="IMG_1217.JPG" alt="Artist 6" class=" rounded" height="350">
                                <h4 class="fw-bold fs-5 mt-2 a">Nemopir Junior</h4>
                                <span>Senior Borbor</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" style="color: yellow;" type="button" data-bs-target="#artistCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#artistCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="pic">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="text-center" style="margin-top:90px;margin-bottom:90px;">
                        <h3 class="fw-bold a">Our <span class="text-warning fw-bold a">Lovely</span> Clients </h3>
                        <i class="mt-3 c ">we believe your hair is your crown, and we are here to make it shine.
                            Visit us today and let us bring out the best in you we believe your hair is your crown,
                            and we are here to make it shine e believe your hair is your ....
                        </i>
                        <h6 class="text-warning  a">Nelour Seddho</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="apic" style="background-color: rgb(77,42,15); padding: 50px 0;margin-top:40px;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 mb-4">
                    <p class="fs-2 fw-bold text-white a">SUBSCRIBE TO OUR NEWSLETTER</p>
                    <h4 class="text-warning fs-2 fw-bold a">Get 10% Discount</h4>
                </div>
                <div class="col-md-6 col-12">
                    <p class="text-white mt-3 a">
                        We believe your hair is your crown, and we are here to make it shine.
                        Visit us today and let us bring out the best in you.
                    </p>
                    <div class="form-group mt-4 position-relative">
                        <input type="email" class="form-control c text-dark" name="email" placeholder="Enter your email">
                        <button type="button" class="btn btn-warning text-white position-absolute top-50 end-0 translate-middle-y me-2">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 80px; margin-bottom: 100px;">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h4 class="a">
                    <span class="text-warning fs-4 a">Tips</span> and Tricks
                </h4>
            </div>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="text-center">
                    <img src="IMG_1273.JPG" alt="Tip Image 1" class="img-fluid rounded" style="height: 350px; width: 100%; object-fit: cover;">
                    <h4 class="fw-bold fs-5 mt-3 text-warning a">20 March 2022</h4>
                    <p class="fs-5 a">Hair is the most beautiful and important part...</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="text-center">
                    <img src="IMG_1139.JPG" alt="Tip Image 2" class="img-fluid rounded" style="height: 350px; width: 100%; object-fit: cover;">
                    <h4 class="fw-bold fs-5 mt-3 text-warning a">20 March 2022</h4>
                    <p class="fs-5 a">Hair is the most beautiful and important part...</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="text-center">
                    <img src="IMG_1217.JPG" alt="Tip Image 3" class="img-fluid rounded" style="height: 350px; width: 100%; object-fit: cover;">
                    <h4 class="fw-bold fs-5 mt-3 text-warning a">20 March 2022</h4>
                    <p class="fs-5 a">Hair is the most beautiful and important part...</p>
                </div>
            </div>
        </div>
    </div>



    <div style="background-color: #f8f9fa;">
        <div class="container" style="margin-top: 40px; margin-bottom: 50px;">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-dark mb-4 mt-5 a">
                        <span class="text-warning a">Meet</span> Our C.E.O
                    </h2>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- CEO Image -->
                <div class="col-lg-5 col-md-6 col-12 text-center">
                    <img src="IMG_1421.JPG" alt="CEO Image" class="img-fluid " style="border-radius: 4em 0; height: 400px; width:500px;">
                </div>
                <!-- CEO Text -->
                <div class="col-lg-7 col-md-6 col-12 mt-4 mt-md-0">
                    <div class="text-center text-md-start py-4">
                        <h4 class="a fw-bold text-center">Our CEO, John Doe, has redefined the art of grooming redefined the art </h4>
                        <p class="text-muted c mt-4" style="max-width: 600px; margin: 0 auto;">
                            At <span class="text-warning fw-bold text-warning">Best Shop</span>, we are driven by a passion for excellence. Our CEO, John Doe, has redefined the art of grooming with
                            a vision to blend style, innovation, and quality. With years of experience in the beauty industry, he believes in creating a space where every customer feels confident and empowered. His commitment to delivering exceptional service is the foundation of everything we do.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: rgb(77, 42, 15);">
        <div class="container py-5">
            <div class="row">
                <!-- Subscription Section -->
                <div class="col-md-3 col-12 mb-4">
                    <h4 class="text-white fw-bold">METT</h4>
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
                        <li class="text-white mt-2">Services</li>
                        <li class="text-white mt-2">Book Appointment</li>
                        <li class="text-white mt-2">About Us</li>
                        <li class="text-white mt-2">Privacy Policy</li>
                        <li class="text-white mt-2">Contact</li>
                    </ul>
                </div>
                <!-- Business Hours Section -->
                <div class="col-md-3 col-12 mb-4">
                    <h5 class="text-white fw-bold">Business Hours</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="text-warning mt-2">Mon - Fri</li>
                        <li class="text-white">10AM - 8PM</li>
                        <li class="text-warning mt-2">Sat</li>
                        <li class="text-white">11AM - 6PM</li>
                        <li class="text-warning mt-2">Sun</li>
                        <li class="text-white">Off-Day</li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="col-md-3 col-12 mb-4">
                    <h5 class="text-white fw-bold">Contact</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="text-white mt-2">+243 345 33674</li>
                        <li class="text-white mt-2">YourEmail@gmail.com</li>
                    </ul>
                </div>
            </div>
            <!-- Footer Bottom Row -->
            <div class="row">
                <div class="col-12 text-center text-warning mt-4">
                    <hr class="border-light">
                    <p class="mb-0">© <span>Copyright</span> <strong>RoyDesign</strong>. <span>All Rights Reserved.</span></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>