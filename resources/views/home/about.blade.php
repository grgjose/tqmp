<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
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

    <!-- About Us Section -->
    <div class="container py-4">
        <section class="custom-section fade-in py-5 p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-light">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-6 text-center text-md-start">
                        <h2 class="fw-bold">Who are we?</h2>
                        <p class="text-muted">TQMP PHILIPPINES is engaged in the marketing and selling of a wide range of glass products and aluminum sections instead for the construction industry. Established in 1998, an emerging leader in the aluminum and glass industries. TQMP PHILIPPINES handles importations and trading of flat glass and other related products such as engineering adhesives, silicone sealants, abrasives, hardware's for glass and aluminum installations, and the like.</p>
                        <P class="text-muted">Armed with strong determination to meet the demand of the customers for high end architectural and industrial glass requirements, the company formed its first subsidiary company in 2005, the Philippine Glass Processing Specialist, Inc. (PGPSI), and invested several state-of-the-art processing machines.</P>
                        <P class="text-muted"> In the third quarter of 2010, Assure Insurance Agency Corporation (AIAC), another subsidiary company of TQMP PHILIPPINES, was established. Assure Insurance Agency Corporation is the insurance arm of the company representing various insurance companies for non-life coverage's.</P>
                        <P class="text-muted"> In the fourth quarter of 2010, another subsidiary company, TQMC Marketing, was established. TQMC Marketing imports and distributes a wide variety of chemicals and raw ingredients for numerous industrial and food processing applications.</P>
                        <p class="text-muted">In the forth quarter of 2013, TQMP-Cebu was established. It houses the glass processing facilities that cater to the demands of Cebu and nearby provinces (Visayan Region).</p>
                        <p class="text-muted">Southern Philippines Glass (SPG) started operations at the second quarter of the 2014 with the same facilities of TQMP-Cebu. It serves the growing demand of the Mindanao Region.</p>
                        <p class="text-muted">In the forth quarter of 2014, the new plant in Lawang Bato started its maiden operation. Its houses one of the biggest tempering and modern glass processing facilities in Southeast Asia.</p>
                        <button type="button" class="btn btn-danger">
                            Get Started
                        </button>
                    </div>


                    <div class="col-md-6 text-center">
                        <div class="position-relative">
                            <img src="{{ asset('storage/logos/TQMPBuilding.jpg') }}" alt="Philippines" class="img-fluid rounded shadow-lg">
                            <div
                                class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Details -->
        <section id="services" class="">
            <div class="container text-center">
                <!-- Heading -->
                <span class="badge text-white mb-2" style="background-color: #950101;">About Us</span>
                <h2 class="fw-bold">Learn More From Us</h2>
                <!-- Paragraph -->
                <p class="mt-3">
                <p>From humble beginnings, TQMP became a byword among key industries players. Its phenomenal success and growth made it to become one of the Philippines' major players in the glass and aluminum industry.</p>
                </p>
                <!-- Cards -->
                <div class="row mt-4">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8866736/pexels-photo-8866736.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Category 1" class="card-img-top rounded">
                            <div class="card-body">
                                <h5 class="fw-bold">MISSION</h5>
                                <p class="text-muted">​Strongly committed to quality and continuous innovation in order to provide excellent products and services to our growing clientele. Sustain business growth, develop employee pride and gain community respect.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/8159/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Category 1" class="card-img-top rounded">
                            <div class="card-body">
                                <h5 class="fw-bold">VISION</h5>
                                <p class="text-muted">To become a key player in the regional arena through innovative creativity and fierce devotion to quality, style and value in products and services while advocating social responsibility and business ethics.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/1474993/pexels-photo-1474993.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Category 1" class="card-img-top rounded">
                            <div class="card-body">
                                <h5 class="fw-bold">OUR VALUES</h5>
                                <p class="text-muted">Our services are dynamic and are geared towards total customer satisfaction. Continuous improvement, coupled with highly technical and reliable process equipment, are keys in becoming the leader in the glass and aluminum industry.</p>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <!-- End of Services -->

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