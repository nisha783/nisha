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
                <span style="color: orange;" class="ms-4">+923082270007</span>
            </div>
            <div class="right-items">
                <i class="social-icons c bi bi-facebook p-2"></i>
                <i class="social-icons c bi bi-instagram p-2"></i>
                <i class="social-icons c bi bi-linkedin p-2"></i>
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
                                <a class="nav-link text-white fw-bold" href="/">Home</a>
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
        </div>
    </div>


    <div class="pic">
        <div class="container mb-5">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <h1 class="text-warning" style="margin-top: 100px;">CONTACT US</h1>
                    <p class="fs-4 text-white mt-3">
                        We Are Always Ready TO Take A Perfect Shot Always Ready TO Take.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="card shadow border-0">
            <div class="card-body">
                <div class="row">
                    <!-- Map Section -->
                    <div class="col-12 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13617.94627894684!2d73.1517372!3d31.4282691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392269db590ba613%3A0x4a079cc78b3c51fd!2sQuiff%20Cuts%20Salon!5e0!3m2!1sen!2s!4v1733162776967!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- Contact Details Section -->
                    <div class="col-12 col-md-6">
                        <h3 class="fs-4 mt-4 fw-bold mb-3">Get in Touch</h3>
                        <p>We Are Always Ready TO Take A Perfect Shot Always Ready TO Take ..</p>
                        <hr>
                        <div class="d-flex align-items-center mt-3">
                            <i class="bi bi-telephone fs-3 me-3 text-primary"></i>
                            <div>
                                <h5 class="mb-0">+923082270007</h5>
                                <span style="color: orangered;">info@quiffcuts.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <button class="btn btn-warning rounded-pill px-4 text-white">CONTACT WITH US</button>
                <h2 class="fw-bold fs-3 mt-4">Write a Message</h2>
            </div>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session('form_data'))
        <div class="alert alert-info">
            <h4>Submitted Data:</h4>
            <p><strong>Full Name:</strong> {{ session('form_data')['full_name'] }}</p>
            <p><strong>Email Address:</strong> {{ session('form_data')['email_address'] }}</p>
            <p><strong>Phone:</strong> {{ session('form_data')['phone'] }}</p>
            <p><strong>Subject:</strong> {{ session('form_data')['subject'] }}</p>
            <p><strong>Message:</strong> {{ session('form_data')['message'] }}</p>
        </div>
        @endif
        <form class="mt-4" action="{{route('contact.submit')}}" method="POST">
            @csrf
            <!-- Row 1: Full Name and Email Address -->
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <input type="text" name="full_name" class="form-control" placeholder="Full name" required>
                </div>
                <div class="col-12 col-md-6">
                    <input type="email" name="email_address" class="form-control" placeholder="Email Address" required>
                </div>
            </div>
            <!-- Row 2: Subject and Phone -->
            <div class="row g-3 mt-3">
                <div class="col-12 col-md-6">
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>
                <div class="col-12 col-md-6">
                    <input type="tel" name="phone" class="form-control" placeholder="Phone">
                </div>
            </div>
            <!-- Row 3: Message -->
            <div class="row g-3 mt-3">
                <div class="col-12">
                    <textarea id="message" name="message" rows="5" class="form-control" placeholder="Message" required></textarea>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="row g-3 mt-4">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-warning text-white rounded-pill px-5">SEND A MESSAGE</button>
                </div>
            </div>
        </form>

    </div>

    <div style="background-color: #f8f9fa;">
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
                            <li class="text-white">10AM - 10PM</li>
                            <li class="text-warning mt-2">Sat</li>
                            <li class="text-white">11AM - 10PM</li>
                            <li class="text-warning mt-2">Sun</li>
                            <li class="text-white">10AM-10PM</li>
                        </ul>
                    </div>
                    <!-- Contact Section -->
                    <div class="col-md-3 col-12 mb-4">
                        <h5 class="text-white fw-bold">Contact</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="text-white mt-2">+923082270007</li>
                            <li class="text-white mt-2">info@quiffcuts.com</li>
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