<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bullet Proof Manufacturing</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <!-- Preconnect for External Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="main.css">

    <!-- Scripts -->
    <script src="../assets/js/color-modes.js" defer></script>
    <!-- Optional: Move this to the bottom of the body if it's not critical for rendering -->
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
        style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url('https://images.pexels.com/photos/21263452/pexels-photo-21263452/free-photo-of-a-bullet-hole-in-a-glass.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Master Armoured Vehicle</h2>
                    <p class="lead mt-3" style="color: white;">
                        Your premier source for top-of-the-line and precision-engineered armoured vehicles
                    </p>
                    <div class="mt-4">
                        <button href="" type="button" class="btn btn-danger">
                            Find out more
                        </button>
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
                    <div class="col-md-6 text-center text-md-end">
                        <h2 class="fw-bold">Bullet Proofing</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis
                            lacus faucibus, placerat magna sed, lacinia enim. Maecenas vitae fringilla metus, ac
                            dignissim elit.</p>
                        <!-- <button type="button" class="btn btn-danger">
                            Get Started
                        </button> -->
                    </div>

                    <!-- Image Column -->
                    <div class="col-md-6 text-center">
                        <div class="position-relative">
                            <img src="{{ asset('storage/logos/master_armoured_vehicle-logo.png') }}"
                                alt="Philippines" class="img-fluid rounded lg">
                            <div
                                class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                            </div>
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
                <p class="text-muted">Some great placeholder content for the first featurette here. Imagine some
                    exciting prose here.</p>
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
                <p class="text-muted">Another featurette? Of course. More placeholder content here to give you
                    an
                    idea of how this layout would work with some actual real-world content in place.</p>
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
                <p class="text-muted">And yes, this is the last block of representative placeholder content.
                    Again,
                    not really intended to be actually read, simply here to give you a better view of what this
                    would look like with some actual content. Your content.</p>
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
                <p class="text-muted">Another featurette? Of course. More placeholder content here to give you
                    an
                    idea of how this layout would work with some actual real-world content in place.</p>
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
                <p class="text-muted">And yes, this is the last block of representative placeholder content.
                    Again,
                    not really intended to be actually read, simply here to give you a better view of what this
                    would look like with some actual content. Your content.</p>
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
                <p class="text-muted">Another featurette? Of course. More placeholder content here to give you
                    an
                    idea of how this layout would work with some actual real-world content in place.</p>
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
                <p class="text-muted">And yes, this is the last block of representative placeholder content.
                    Again,
                    not really intended to be actually read, simply here to give you a better view of what this
                    would look like with some actual content. Your content.</p>
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
                <p class="text-muted">Another featurette? Of course. More placeholder content here to give you
                    an
                    idea of how this layout would work with some actual real-world content in place.</p>
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
                <p class="text-muted">And yes, this is the last block of representative placeholder content.
                    Again,
                    not really intended to be actually read, simply here to give you a better view of what this
                    would look like with some actual content. Your content.</p>
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