<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Bullet Proofing Manufacturing</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <!-- Preconnect for External Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="main.css">

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Style -->
    @include('plus.style')
    <!-- End of Style -->

    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <!-- landing  -->
    <section class="d-flex align-items-center justify-content-center text-center min-vh-100"
        style="background: linear-gradient(rgba(23, 38, 71, 0.8), rgba(126, 20, 22, 0.9)), 
                    url('https://images.pexels.com/photos/10981370/pexels-photo-10981370.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Master</h2>
                    <h2 class="fw-bold display-3" style="color: white;">Armoured Vehicle</h2>
                    <p class="lead mt-3" style="color: white;">
                        Your premier source for top-of-the-line and precision-engineered armoured vehicles
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/people/Master-Armoured-Vehicle/61561429240605/" class="btn btn-outline-light text-decoration-none" style="font-size: smaller;">
                            <span><b>Find out more</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of landing  -->

    <!-- Bullet Proofing Section -->
    <section class="custom-section fade-in py-5 align-items-center">
        <div class="container py-5">
            <section class="fade-in">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Text Column -->
                        <div class="col-md-6 text-center text-md-start">
                            <h2 class="fw-bold">Bullet Proofing</h2>
                            <h5>Benefits of Bullet Proof Vehicle</h5>
                            <p class="text-muted">1. Very good option for additional security.</p>
                            <p class="text-muted">2. Bullets literally "bounce off" to the vehicle.</p>
                            <p class="text-muted">3. It has thick and heavy body, like a tank for protection.</p>
                            <p class="text-muted">4. It has special tires and glass.</p>
                            <p class="text-muted">5. It literally saves lives.</p>
                            <!-- <button type="button" class="btn btn-danger">
                            Get Started
                        </button> -->
                        </div>

                        <!-- Image Column -->
                        <div class="col-md-6 text-center">
                            <div class="position-relative">
                                <img src="{{ asset('storage/logos/master_armoured_vehicle-logo.png') }}"
                                    alt="Philippines" class="img-fluid rounded lg">
                                <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Bullet Proofing Section -->

    <!-- START THE FEATURETTES -->
    <div class="container">
        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Armoured Car</h2>
                <p class="text-muted">Explore the key attributes that redefine what it means to travel securely without compromising on luxury, featuring our armoured Toyota Land Cruiser Series 300.</p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-1.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Radiator Grill</h2>
                <p class="text-muted">The radiator grill of an armored vehicle is often protected by a grill bumper or guard to reinforce the vehicle's edges and protect the radiator and
                    engine assembly that can also remove debris or vehicles that are blocking the road</p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-2.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Gas Tank Cover</h2>
                <p class="text-muted">We apply a very thick cover for the gas tank to make sure no direct penetration of any fragments.</p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-3.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Upgraded Suspension</h2>
                <p class="text-muted">Upgraded suspension parts for armored vehicles are to improve to have a better performance.
                    Armored vehicles are heavier than regular cars, so their suspension and braking systems need to be upgraded to ensure the vehicle can stop safely and maintain control.
                    The suspension also needs to be able to absorb impacts and keep the vehicle stable and smooth.
                    The extent to which the suspension needs to be modified depends on the vehicle's size, the quality of the existing suspension, and the environment in which it will be driven.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-4.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Battery & Fuse Box Cover</h2>
                <p class="text-muted">Not only gas tank we also provide thick cover for battery and fuse box for extra durability protection.</p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-5.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Run Flat Insert</h2>
                <p class="text-muted">When it comes to protection, every detail counts. Our advanced run-flat insert system ensures that even in the most challenging situations,
                    your mobility and safety are not compromised. </p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-6.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Back Door Partition</h2>
                <p class="text-muted">Partition for separating, No this is for additional reinforcement to the center of the vehicle.</p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-7.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Bullet Catcher</h2>
                <p class="text-muted">Speaking catching the bullet we add this to make sure any fragments that will penetrate will not easily pass thru.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-8.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Premium Leather Seats</h2>
                <p class="text-muted">Not just giving you a protection we also giving you a satisfaction inside your vehicle by putting a premium leather seats.
                    Get in touch with us today and experience the strength of engineering that is built to endure.
                </p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-9.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div><br>
    </div>
    <!-- /END THE FEATURETTES -->

    <div class="d-flex align-items-center justify-content-center">
        <a href="" class="btn btn-primary text-decoration-none" style="font-size: smaller;">
            <span><b>Request Quotation</b></span>
        </a>
    </div>

    <!-- Accordion Section -->
    @include ('plus.accordion')
    <!-- End of Accordion -->

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>

</html>