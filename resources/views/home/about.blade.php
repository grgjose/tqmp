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
        <!-- Details -->
        <section id="services" class="py-5">
            <div class="container text-center">
                <!-- Heading -->
                <span class="badge text-white mb-2" style="background-color: #950101;">About Us</span>
                <h2 class="fw-bold">Learn More From Us</h2>
                <!-- Paragraph -->
                <p class="mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                    vestibulum.
                    Cras venenatis euismod malesuada. Nulla facilisi. Phasellus euismod purus non nisi cursus, sit
                    amet
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