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
<style>
    /* Default container width for desktop */
    .custom-container {
        width: 800px;
    }

    @media (max-width: 768px) {
        .custom-container {
            width: 100%; 
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
                <span style="color: orange;" class="ms-4">+92 308 2270007</span>
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
    <h2 class="fw-bold mt-5 text-center">Quiff Cuts Salon</h2>
    <div class="container mt-5 mb-5 custom-container">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d">
                            <h2 class="fs-4 fw-bold mt-3">Privacy Policy</h2>
                            <span class="text-muted">October 14, 2024</span>
                            <h5 class="text-muted fw-bold mt-4">Privacy Policy for Quiff Cuts Salon</h5>
                            <h4 class="fw-bold text-muted fs-5 mt-4">Effective Date:
                                <span class="text-muted">15-10-2024</span>
                            </h4>
                            <h6 class="text-muted mt-4 fw-bold ms-2">1. Introduction</h6>
                            <p class="text-muted mt-3 ms-2">Welcome to Quiff Cuts Salon! Your privacy is important to us. This policy explains how we collect, use, and protect your personal information.</p>
                            <h6 class="text-muted mt-3 fw-bold ms-2">2. Information We Collect</h6>
                            <div>
                                <ul>
                                    <li class="text-muted fw-bold mt-3">Personal Information:</li>
                                    <p class="text-muted mt-2">We may collect personal details such as your name, contact information, and appointment history when you book our services.</p>
                                    <li class="text-muted fw-bold mt-2">Payment Information:</li>
                                    <p class="text-muted mt-2">If you make a payment, we collect necessary payment details, which are processed securely.</p>
                                    <li class="text-muted fw-bold mt-2">Usage Data:</li>
                                    <p class="text-muted mt-2">We may collect data on how you interact with our services, such as your IP address and browsing behavior.</p>
                                </ul>
                            </div>
                            <h6 class="text-muted mt-3 fw-bold ms-2">3. How We Use Your Information</h6>
                            <p class="text-muted mt-2 ms-2">We use your information to:</p>
                            <ul>
                                <li class="text-muted mt-2">Provide and manage our salon services.</li>
                                <li class="text-muted mt-2">Communicate with you regarding appointments and promotions.</li>
                                <li class="text-muted mt-2">Improve our services and customer experience.</li>
                                <li class="text-muted mt-2">Comply with legal obligations.</li>
                            </ul>
                            <h6 class="text-muted mt-3 fw-bold ms-2">4. Data Security</h6>
                            <p class="text-muted mt-2">We take the security of your personal information seriously. We implement appropriate technical and organizational measures to protect your data.</p>
                            <h6 class="text-muted mt-3 fw-bold ms-2">5. Sharing Your Information</h6>
                            <p class="text-muted mt-2">We do not sell or share your personal information with third parties except as necessary to provide our services or as required by law.</p>
                            <h6 class="text-muted mt-3 fw-bold ms-2">6. Your Rights</h6>
                            <p class="text-muted mt-2">You have the right to access, correct, or delete your personal information. You can contact us at [Your Contact Information] to exercise these rights.</p>
                            <h6 class="text-muted mt-3 fw-bold ms-2">7. Changes to this Policy</h6>
                            <p class="text-muted mt-2">We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on our website.</p>
                            <h6 class="text-muted fw-bold mt-3">8. Contact Us</h6>
                            <p class="text-muted mt-3">If you have any questions or concerns about this privacy policy, please contact us at <a href="mailto:Salon@quiffcuts.com" class="text-dark fw-bold">Salon@quiffcuts.com</a>.</p>
                        </div>
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
                        <li class="text-white mt-2">+92 308 2270007</li>
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