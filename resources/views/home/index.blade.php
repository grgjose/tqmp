<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Total Quality Management Products Philippines</title>

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

    <!-- Albums (Company Logos) -->
    <section id="companies" class=" container d-flex gap-2 justify-content-center py-3">
        <div align="center" valign="middle">
            <div class="logo-scroller">
                {{-- <p class="link-secondary">Companies teamed with</p><br> --}}
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
                    <button type="button" class="btn btn-danger btn-lg px-4 py-2">
                        Get Started
                    </button>
                </div>

                <!-- Image Column -->
                <div class="col-md-6 text-center">
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

    <!-- Services -->
    <section id="services" class="py-5">
        <div class="container text-center">
            <!-- Badge -->
            <span class="badge text-white mb-2" style="background-color: #950101;">Our Services</span>
            <!-- Heading -->
            <h2 class="fw-bold">What We Offer</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                vestibulum.
                Cras venenatis euismod malesuada. Nulla facilisi. Phasellus euismod purus non nisi cursus, sit amet
                elementum
                lorem egestas. Quisque accumsan lacus at eros gravida, in ultricies mi fermentum.
            </p>
            <!-- Cards -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://images.pexels.com/photos/1145434/pexels-photo-1145434.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://images.pexels.com/photos/8159/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://images.pexels.com/photos/1474993/pexels-photo-1474993.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Browse See More Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-danger">See More</button>
            </div>
    </section>
    <!-- End of Services -->

    <!-- Space -->
    <br><br>
    <!-- End of Space -->

    <!-- Category -->
    <section id="category" class="py-5">
        <div class="container text-center">
            <!-- Badge -->
            <span class="badge text-white mb-2" style="background-color: #950101;">Category</span>
            <!-- Heading -->
            <h2 class="fw-bold">Shop by Category</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                vestibulum.
                Cras venenatis euismod malesuada. Nulla facilisi. Phasellus euismod purus non nisi cursus, sit amet
                elementum
                lorem egestas. Quisque accumsan lacus at eros gravida, in ultricies mi fermentum.
            </p>
            <!-- Category Cards -->
            <div class="row mt-5">
                <!-- Category 1 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="https://images.pexels.com/photos/273209/pexels-photo-273209.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="https://images.pexels.com/photos/1098982/pexels-photo-1098982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Category 2" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">Category 2</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="https://images.pexels.com/photos/454499/pexels-photo-454499.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="Category 3" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">Category 3</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="https://images.pexels.com/photos/7219179/pexels-photo-7219179.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Category 4" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">Category 4</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Browse More Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-danger">See More</button>
            </div>

    </section>
    <!-- End of Category -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

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
