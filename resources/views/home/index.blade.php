<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Total Quality Management Products Philippines</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS (Optional) -->
    <!-- <link rel="stylesheet" href="main.css"> -->
</head>


<body>
    <!-- Style -->
    @include('plus.style')
    <!-- End of Style -->

    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <!-- Albums (Company Logos) -->
    <section id="companies" class=" container d-flex gap-2 justify-content-center py-5">
        <div align="center" valign="middle">
            <div class="logo-scroller">
                <!-- <p class="link-secondary">Companies teamed with</p><br> -->
                <div class="logos">
                    <!-- Logos -->
                    <img src="{{ asset('storage/logos/assa-abloy-logo.png') }}" alt="Assa Abloy" class="header-img">
                    <img src="{{ asset('storage/logos/master_armoured_vehicle-logo.png') }}" alt="Master Armoured"
                        class="header-img">
                    <img src="{{ asset('storage/logos/pgpsi-logo.png') }}" alt="PGPSI" class="header-img">
                    <img src="{{ asset('storage/logos/pioneer_logo.png') }}" alt="Pioneer" class="header-img">
                    <img src="{{ asset('storage/logos/thore-logo.png') }}" alt="Thore" class="header-img">
                    <img src="{{ asset('storage/logos/wacker-logo.png') }}" alt="Wacker" class="header-img">
                    <img src="{{ asset('storage/logos/yale-logo.png') }}" alt="Yale" class="header-img">
                    <!-- Duplicate logos for seamless scrolling -->
                    <img src="{{ asset('storage/logos/assa-abloy-logo.png') }}" alt="Assa Abloy" class="header-img">
                    <img src="{{ asset('storage/logos/master_armoured_vehicle-logo.png') }}" alt="Master Armoured"
                        class="header-img">
                    <img src="{{ asset('storage/logos/pgpsi-logo.png') }}" alt="PGPSI" class="header-img">
                    <img src="{{ asset('storage/logos/pioneer_logo.png') }}" alt="Pioneer" class="header-img">
                    <img src="{{ asset('storage/logos/thore-logo.png') }}" alt="Thore" class="header-img">
                    <img src="{{ asset('storage/logos/wacker-logo.png') }}" alt="Wacker" class="header-img">
                    <img src="{{ asset('storage/logos/yale-logo.png') }}" alt="Yale" class="header-img">
                </div>
            </div>
            <br>
            <br>
        </div>
    </section>
    <!-- End of Albums -->

    <!-- Landing -->
    <section class="custom-section fade-in py-3">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="display-5 fw-bold mb-0">TOTAL QUALITY</h2>
                    <h2 class="display-5 fw-bold mb-0">MANUFACTURING</h2>
                    <h2 class="display-5 fw-bold mb-0">PRODUCTS</h2>
                    <h2 class="display-5 fw-bold text-danger mb-0">PHILIPPINES CORPORATION</h2>
                    <p class="text-muted mb-4">
                        Transforming industries with cutting-edge solutions and unwavering commitment to excellence.
                        Join us on our
                        journey to redefine quality and innovation.
                    </p>
                    <button type="button" class="btn btn-outline-danger btn-lg px-4 py-2">
                        Register
                    </button>
                </div>

                <!-- Image Column -->
                <div class="col-md-6 text-center py-3">
                    <div class="position-relative">
                        <img src="{{ asset('storage/logos/TQMPBuilding.jpg') }}" alt="Philippines"
                            class="img-fluid rounded shadow-lg">
                        <div
                            class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Landing -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

    <!-- Services -->
    <section id="services" class="py-3">
        <div class="container text-center">
            <!-- Badge -->
            <span class="badge text-white mb-2" style="background-color: #950101;">Our Services</span>
            <!-- Heading -->
            <h2 class="fw-bold">What We Offer</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                We are offering a Bulletproofing Vehicle with a benefits of very good option for your additional security,
                the bullets literally “bounce off” to the vehicle, it has thick and heavy body, like a tank for protection,
                it has special tires and glass, literally it saves lives.
                We do process glass also such as: tempered glass, curve glass, laminated glass and insulating glass unit (IGU).
            </p>
            <!-- Cards -->
            <div class="row mt-6">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="{{ asset('storage/logos/bulletproof-10.jpg') }}" alt="Bulletproof" class="card-img-top rounded" height="425">
                        <div class="card-body">
                            <h5 class="fw-bold">Bullet Proofing</h5>
                            <!-- <p class="text-muted">8 Products Available</p> -->
                            <button type="button" class="btn btn-outline-danger btn-sm px-4 py-2"> Request Quotation</button>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="{{ asset('storage/glass-processing/igu close up.jpg') }}" alt="Glass Processing" class="card-img-top rounded" height="425">
                        <div class="card-body">
                            <h5 class="fw-bold">Glass Processing</h5>
                            <!-- <p class="text-muted">8 Products Available</p> -->
                            <button type="button" class="btn btn-outline-danger btn-sm px-4 py-2">Request Quotation</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Browse See More Button -->
            <!-- <div class="mt-4">
                <button type="button" class="btn btn-primary ">See More</button>
            </div> -->
    </section>
    <!-- End of Services -->

    <!-- Category -->
    <section id="category" class="py-3">
        <div class="container text-center">
            <!-- Badge -->
            <span class="badge text-white mb-2" style="background-color: #950101;">Category</span>
            <!-- Heading -->
            <h2 class="fw-bold">Shop by Category</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                For our valued customer we are now extending our services thru online shopping to be next on your door.
                Now feel ease to our new online services we are providing.
            </p>
            <!-- Category Cards -->
            <div class="row mt-5">
                <!-- Category 1 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/glass-processing/cool silver only.jpg') }}" alt="Bulletproof" class="card-img-top rounded" height="300">
                        <div class="card-body">
                            <h5 class="fw-bold">Glass</h5>

                            <div class="">
                                <button type="button" class="btn btn-outline-danger ">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/home/aluminum.jpg') }}"
                            alt="Category 2" class="card-img-top rounded" height="300">
                        <div class="card-body">
                            <h5 class="fw-bold">Aluminum</h5>

                            <div class="">
                                <button type="button" class="btn btn-outline-danger ">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/home/gen-trade.jpg') }}" alt="Gen Trade" class="card-img-top rounded" height="300">
                        <div class="card-body">
                            <h5 class="fw-bold">Gen Trade</h5>

                            <div class="">
                                <button type="button" class="btn btn-outline-danger ">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Browse More Button -->
            <!-- <div class="">
                <button type="button" class="btn btn-outline-danger ">Order Now</button>
            </div> -->

    </section>
    <!-- End of Category -->

    <!-- Accordion Section -->
    @include ('plus.accordion')
    <!-- End of Accordion -->

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>