<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Glass Processing</title>
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
                    url('https://images.pexels.com/photos/3736110/pexels-photo-3736110.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Glass Processing</h2>
                    <p class="lead mt-3" style="color: white;">
                        We are equipped with State-of-the-art technology and machinery , allowing us to produce a wide range of tempered glass products.
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="" class="btn btn-outline-light text-decoration-none" style="font-size: smaller;">
                            <span><b>Find out more</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of landing  -->

    <!-- Glass Processing Section -->
    <section class="custom-section fade-in py-5 align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="fw-bold">Glass Processing</h2>
                    <p class="text-muted">With years of experience in the glass industry, we pride ourselves with our commitment in providing top-notch products and services to our clients.
                        Our factory is equipped with state-of-the-art technology and machinery, allowing us to produce a wide range of tempered glass products including glass doors, windows, shower enclosures, and more.
                        At Philippine Glass Processing Specialist, we prioritize customer satisfaction and strive to exceed our clients' expectations with every project.</p>
                    <!-- <button type="button" class="btn btn-danger">
                        Get Started
                    </button> -->
                </div>

                <!-- Image Column -->
                <div class="col-md-6 text-center">
                    <div class="position-relative">
                        <img src="{{ asset('storage/logos/pgpsi-logo.png') }}"
                            alt="Philippines" class="img-fluid rounded lg">
                        <div
                            class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Glass Processing Section -->



    <!-- Services -->
    <section id="services" class=" container py-4">

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Tempered Glass</h2>
                <p class="text-muted"> Fully tempered glass is a unique glazing material. It is about 3 to 5 times stronger than an ordinary or annealed glass of the same thickness and configuration.</p>
                <button type="button" class="btn btn-outline-danger">Request Quotation</button>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/glass-processing/tempered.png') }}"
                        alt="Tempered Glass" class="img-fluid rounded lg" height="500">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Laminated Glass</h2>
                <p class="text-muted"> Laminated glass is a multi-functional glazing material that can be used in a variety of applications.
                    It is manufactured by permanently bonding two or more glass panes with layers of polyvinyl butyral (PVB) interlayer, under heat and pressure to produce a single products.</p>
                <button type="button" class="btn btn-outline-danger">Request Quotation</button>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/glass-processing/laminated.png') }}"
                        alt="Laminated Glass" class="img-fluid rounded lg" height="500">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Curved Tempered Glass</h2>
                <p class="text-muted"> In the same manner with flat tempered glass, curved tempered glass is also resistant to mechanical stresses (bending, impact, etc.)
                    and thermal stresses (temperature difference), without altering the properties of the basic products.</p>
                <button type="button" class="btn btn-outline-danger">Request Quotation</button>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/glass-processing/curved.jpg') }}"
                        alt="Curved Glass" class="img-fluid rounded lg" height="500">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Insulating Glass Unit (IGU)</h2>
                <p class="text-muted">Insulating glass unit is a set of two or more lites of glass separated by air space and hermetically sealed to form a single unit.
                    Its most important function is to improve the thermal performance of glass when used in architectural applications.</p>
                <button type="button" class="btn btn-outline-danger">Request Quotation</button>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/glass-processing/igu.png') }}"
                        alt="IGU" class="img-fluid rounded lg" height="500">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- End of Services -->

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