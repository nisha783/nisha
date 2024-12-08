<!DOCTYPE html>
<html lang="en">

<head>
    <title>QUIFFCUTS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Linking your CSS file -->
    <link href="https://quiffcuts.com/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <style>
        @media (max-width: 768px) {
            .bg {
                display: none !important;
            }
        }

        .responsive-img {
            width: 500px;
            /* Set a fixed width for larger screens */
            height: 525px;
            /* Set a fixed height for larger screens */
            border-radius: 2em 0;
            /* Optional: rounded corners */
        }

        /* Responsive styling for smaller screens */
        @media (max-width: 768px) {
            .responsive-img {
                width: 100%;
                /* Make the image width responsive */
                height: auto;
                /* Make the height adjust automatically */
            }
        }
    </style>

</head>

<body>
    <div class="top-bar sticky">
        <div class="container d-flex justify-content-between">
            <div class="left-items ">
                <a href="#" class="b ">
                </a>
                <i class="bi bi-telephone p-2 fs-5" style="color: orange;"></i>
                <span>Call Us on make on</span>
                <span style="color: orange;" class="ms-4"><a href="https://wa.me/quiffcuts" style="color: orange;">Whatsapp Contact</a></span>
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
    <!-- Navbar -->
    <div id="" class="text-center bg-warning">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark">
                <div class="container-fluid">
                    <img src="logo-light.png" alt="no logo" height="50px" width="200px">
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


    <!-- Hero Section -->
    <div id="" class="text-center" style="background: linear-gradient(45deg, rgba(20, 20, 20, 0.623), rgba(20, 20, 20, 0.623)), url(../cover.jpg);
    background-size: cover;
    background-position: center;
    height: 560px;
    background-repeat: no-repeat;
    background-position: center;
    width: 100%; padding: 40px 0;">
        <div class="container">
            <div class="text-center" style="margin-top:100px;">
                <h4 class="fw-bold a text-white display-5">Best Shop In Town</h4>
                <a href="https://wa.me/quiffcuts" class="text-warning a fw-bold fs-1 d-block mt-2">Bock Now</a>
                <p class="custom-font text-white mx-auto" style="max-width: 550px;">
                    We believe your hair is your crown, and we are here to make it shine.
                    Visit us today and let us bring out the best in you.
                </p>
                <a href="{{route('contact.index')}}" class="btn btn-warning text-white">CONTACT US</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 80px;">
            <!-- Image Column -->
            <p class="text-warning fs-1 a text-center">- ABOUT US</p>
            <div class="col-md-6 col-12 order-1 mt-3">
                <img src="IMG_1419(1).JPG" class="ms-3 d" style="border-radius:4em 0;" alt="no pic" height="640px" width="500px">
            </div>
            <!-- Text Column -->
            <div class="col-md-6 col-12 order-2">
                <h3 class="fw-bold fs-1 a ms-4 mt-5">We're here to change your daily <span class="fw-bold text-warning">lifestyle</span></h3>
                <p class="mt-3 c fs-5 text-dark ms-4 mt-5">
                    Welcome to QuffCuts Hair Salon, where your hair is our passion. At QuffCuts, we believe your hair is your crown, and we're here to help you wear it proudly.
                    Our expert stylists are dedicated to bringing out the best in you, blending artistry with professionalism to create looks that shine with confidence.
                    From classic cuts to modern styles, we tailor each experience to suit your unique personality.
                </p>
                <p class="mt-4 c text-dark fs-5  ms-4 mt-5">
                    At QuffCuts Hair Salon, we believe your hair is your crown, and it deserves to shine.
                    Our goal is to enhance your natural beauty and bring out the best in you.
                    Because at QuffCuts, your hair is our pride.
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
                    <p class="mt-5 c text-dark mt-5 fs-5">
                        At QuffCuts Hair Salon, exceptional customer service is at the heart of everything we do.
                        We believe your hair is your crown, and our dedicated team is here to make it shine with care and expertise.
                        From the moment you step through our doors, we ensure a warm and welcoming experience, tailored to meet your unique needs.
                    </p>
                </div>
                <!-- Image Column -->
                <div class="col-md-6 col-12" style="margin-top: 50px;">
                    <img src="IMG_1336(1).JPG"
                        alt="no pic"
                        class="ms-3 mt-4 img-fluid"
                        style="border-radius:15px;max-height:450px;width:450px;">
                </div>
            </div>
            <!-- Cards Section with Background Effect -->
            <div class="position-relative">
                <!-- Orange Background Div -->
                <div class="bg bg-warning" style="height: 200px; position: absolute; top: 50%; width: 120%; margin-left: -10%;"></div>

                <!-- Cards Row -->
                <div class="row position-relative" style="z-index: 1;margin-top:50px;">
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card shadow border-0" style="border-radius: 4em 0; height: 325px;">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="fw-bold mt-5">Beord Trimer</h3>
                                    <p class="text-dark c mt-4">
                                        Achieve the perfect look with our precision beard trimmer.
                                        Whether it's sharp lines or a sculpted style, groom with ease and confidence.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card shadow border-0" style="border-radius:4em 0; height: 325px;">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="fw-bold mt-5">Clean Shave</h3>
                                    <p class="c text-dark mt-4">"Shine at Quiffcuts. Visit us today for the best in haircuts and a clean shave.
                                        Your hair is your crown, and we’re here to make it shine!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card shadow border-0" style="border-radius:4em 0; height: 325px;">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="fw-bold mt-5">Hair's Cut</h3>
                                    <p class="c text-dark">Shine with us! Visit today, and let us bring out the best in you.
                                        We believe your hair is your crown, and we're here to make it shine.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <div class="card shadow border-0" style="border-radius: 4em 0; height:325px;">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="fw-bold mt-5">Sezzer</h3>
                                    <p class="c text-dark   mt-4">Crafted with precision and elegance, our scissors are designed to bring out the best in every cut.
                                        Visit us today, and experience the tools that turn ..
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
        <h3 class="text-warning a text-center fs-1">- WHY CHOOSE US</h3>
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5 col-12 mb-4 mt-5">
                <img src="IMG_1285(1).PNG" alt="" class="ms-md-4 img-fluid" style="border-radius:15px 30px;">
            </div>

            <!-- Text Section -->
            <div class="col-md-7 col-12">
                <h4 class="fw-bold fs-2  a ms-5">Cutting, shaving everything is
                    <span class="text-warning fw-bold a ">Only for premium service!</span>
                </h4>
                <p class="mt-5 c text-dark ms-5">
                    Why choose us? We are dedicated to delivering the best hair care services with precision and passion. Your hair is in expert hands!
                    Our team of professionals ensures personalized care, using high-quality products and the latest techniques to achieve the perfect look.
                    Whether you're looking for a trendy haircut, vibrant color, or restorative treatments, we prioritize your satisfaction and confidence.
                </p>

                <p class="mt-5 c text-dark ms-5">
                    Choose us for our expertise, attention to detail, and personalized approach. We’ll make sure your hair looks and feels amazing every time.
                    From the moment you step into our salon, you’ll experience unmatched care, professional services, and a warm, welcoming atmosphere.
                    Let us transform your style and enhance your confidence with every visit!
                </p>

            </div>
        </div>
    </div>

    <div class="mb-5 mt-5" style="background-color: rgb(77,42,15);">
        <div class="container">
            <!-- Mission Section -->
            <div class="row align-items-center">
                <div class="col-md-6 col-12 mb-4">
                    <p class="text-warning  a fs-1">-- Our MISSION</p>
                    <h4 class="text-white fs-3 fw-bold a">We'll do our best to fulfill your <span class="text-warning">expectation</span></h4>
                    <p class="mt-4 text-white c">We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you. We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you.</p>
                    <p class="mt-4 text-white c">We believe your hair is your crown, and we are here to make it shine. Visit us today and let us bring out the best in you. We believe your hair is your crown, and we are here to make it shine.</p>
                </div>
                <div class="col-md-6 col-12 text-center">
                    <img src="back.JPG" alt="" class="mt-5 img-fluid" style="border-radius: 80px 20px;max-height:450px;">
                </div>
            </div>

            <!-- Cards Section -->
            <div class="row text-center mt-5">
                <!-- Card 1 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card shadow" style="background-color: rgb(77,42,15); height: 13vh;">
                        <div class="card-body">
                            <h6 class="text-warning a">Mon-Fri</h6>
                            <span class="text-white">9AM-2AM</span>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card shadow" style="background-color: rgb(77,42,15); height: 13vh;">
                        <div class="card-body">
                            <h6 class="text-warning a">Sat</h6>
                            <span class="text-white">9AM-2AM</span>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 col-6 mb-4">
                    <div class="card shadow" style="background-color: rgb(77,42,15); height: 13vh;">
                        <div class="card-body">
                            <h6 class="text-warning a">Sun</h6>
                            <span class="text-white">9AM-2AM</span>
                        </div>
                    </div>
                </div>
                <!-- Appointment Card -->

            </div>
        </div>
    </div>



    <div class="container">
        <p class="text-warning  text-center a fs-1 mt-4">-- PRICES</p>
        <div class="row mt-5 mb-5">
            <div class="col-6">
                <img src="service.jpg" alt="no pic" style="border-radius:25px;" height="570px" width="520px">
            </div>
            <div class="col-6">
                <h4 class="a mt-4">Hair Treatments</h4>
                <p class="mt-3  fs-5">At Quiff cuts Salon, we believe in offering premium services at competitive prices.
                    Whether you're looking for a trendy haircut, a relaxing spa session, or expert
                    grooming, our pricing ensures you get the best value without compromising on quality.
                    Explore our range of services designed to cater to all your beauty and styling needs.
                </p>
                <h4 class="a mt-5 text-warning">Haircuts & Styling</h4>
                <p class="mt-3 fs-5">
                    Elevate your look with precision haircuts and
                    expert styling at Quiffcuts Salon. Whether you prefer classic cuts or trendy styles, our skilled stylists tailor each service to suit your personality and enhance
                    your features. Experience a fresh, confident look every time!</p>
            </div>
        </div>
    </div>
    <div class="" style="
    background: linear-gradient(45deg, rgba(20, 20, 20, 0.623), rgba(20, 20, 20, 0.623)), url(../7.JPG);
    background-size: cover;
    background-repeat: no-repeat;
    height: 500px;
    ">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="text-center" style="margin-top:150px;margin-bottom:90px;">
                        <h3 class="fw-bold a text-white">Our <span class="text-warning fw-bold a">Lovely</span> Clients </h3>
                        <i class="mt-5 text-white c ">we believe your hair is your crown, and we are here to make it shine.
                            Visit us today and let us bring out the best in you we believe your hair is your crown,
                            and we are here to make it shine e believe your hair is your ....
                        </i>
                        <h6 class="text-warning  a mt-4">Nelour Seddho</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 80px; margin-bottom:100px;">
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="a fs-1"><span class="text-warning fs-1 a">meet</span> the artists</h4>
            </div>
            <div id="artistCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
                <!-- Carousel Items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-4">
                                <img src="IMG_1253.JPG" alt="Artist 1" class="d-block w-100 rounded" height="300">
                            </div>
                            <div class="col-4">
                                <img src="IMG_1139(1).JPG" alt="Artist 6" class=" rounded" style="max-height:470px;">
                            </div>
                            <div class="col-4">
                                <img src="IMG_1222(1).JPG" alt="Artist 3" class="d-block w-100 rounded" height="350">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-4">
                                <img src="IMG_1336(1).JPG" alt="Artist 2" class=" rounded" height="350">

                            </div>
                            <div class="col-4">
                                <img src="IMG_1332(1).JPG" alt="Artist 4" class=" rounded" height="350">

                            </div>
                            <div class="col-4">
                                <img src="IMG_1217(1).JPG" alt="Artist 6" class=" rounded" height="350">
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

    <div class="" style="  background: linear-gradient(45deg, rgba(20, 20, 20, 0.623), rgba(20, 20, 20, 0.623)), url(../worker.JPG);
    background-size: cover;
    background-repeat: no-repeat;
    height: 450px; padding: 50px 0;margin-top:40px;">
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
                <h4 class="a fs-1">
                    <span class="text-warning fs-1 a">Tips</span> and Tricks
                </h4>
            </div>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="text-center">
                    <img src="worker.JPG" alt="Tip Image 1" class="img-fluid rounded" style="height: 350px; width: 100%; object-fit: cover;">
                    <p class="fs-5 a mt-2">Hair is your crown. expert tips for healthy, shiny hair .</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="text-center">
                    <img src="IMG_1139(1).JPG" alt="Tip Image 2" class="img-fluid rounded" style="height: 350px; width: 100%; object-fit: cover;">
                    <p class="fs-5 a mt-2">Hair is your crown; get expert tips today.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="text-center">
                    <img src="IMG_1217(1).JPG" alt="Tip Image 3" class="img-fluid rounded" style="height: 350px; width: 100%; object-fit: cover;">
                    <p class="fs-5 a mt-2">Hair is the most beautiful and important part...</p>
                </div>
            </div>
        </div>
    </div>



    <div style="background-color: #f8f9fa;">
        <div class="container" style="margin-top: 40px;">
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
                <div class="col-lg-6 col-md-6 col-12 text-center mt-3 mb-5">
                    <img src="IMG_1421(1).JPG" alt="CEO Image" class="img-fluid responsive-img">
                </div>
                <!-- CEO Text -->
                <div class="col-lg-6 col-md-6 col-12 mt-md-0">
                    <div class="">
                        <h3 class="fw-bold a ms-5">
                            C.E.O<span class="text-warning ms-2"> Leading the Way</span>
                        </h3>
                        <p class="mt-3 c ms-5">
                            At Quiffcuts, we are driven by passion and innovation. Our CEO, a true visionary,
                            leads with a commitment to excellence, ensuring every client gets the highest quality experience.
                            With a deep understanding of the beauty industry, they continue to elevate the brand, bringing
                            fresh ideas and unmatched expertise.
                        </p>
                    </div>

                    <div class="text-center text-md-start py-4">
                        <h4 class="a fw-bold ms-5">Our CEO, M. Nauman Rasool, has redefined the art of grooming redefined the art </h4>
                        <p class="text-muted c mt-4 ms-5" style="max-width: 600px; margin: 0 auto;">
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
                    <h4 class="text-white fw-bold">QUIFFCUTS</h4>
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
                        <li class="text-white">9AM-2AM</li>
                        <li class="text-warning mt-2">Sat</li>
                        <li class="text-white">9AM-2AM</li>
                        <li class="text-warning mt-2">Sun</li>
                        <li class="text-white">9AM-2AM</li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="col-md-3 col-12 mb-4">
                    <h5 class="text-white fw-bold">Contact</h5>
                    <ul class="list-unstyled mt-3">
                        <li> <a href="https://wa.me/quiffcuts" class="mt-2">https://wa.me/quiffcuts</a></li>
                        <li class="text-white mt-2">Salon@quiffcuts.com</li>
                    </ul>
                </div>
            </div>
            <!-- Footer Bottom Row -->
            <div class="row">
                <div class="col-12 text-center text-warning mt-4">
                    <hr class="border-light">
                    <p class="mb-0">© <span>Copyright</span> <strong> QUIFFCUTS</strong>. <span>All Rights Reserved.</span></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>