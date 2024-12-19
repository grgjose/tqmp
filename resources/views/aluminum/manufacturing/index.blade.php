<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aluminum Manufacturing</title>
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


    <!-- landing  -->
    <section class="d-flex align-items-center justify-content-center text-center vh-100"
        style="background: linear-gradient(rgba(23, 38, 71, 0.8), rgba(126, 20, 22, 0.9)), 
                    url('https://images.pexels.com/photos/6804258/pexels-photo-6804258.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Aluminum Manufacturing</h2>
                    <p class="lead mt-3" style="color: white;">
                        To aim a must production aluminum profiles and moving ahead to a high-end aluminum profiles, 
                        HSP Paragon Corporation is an aluminum extrusion plant complete with powder coating line and anodizing line for all your aluminum section requirements. 
                        We also have a recycling plant for all kinds of aluminum scraps.
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

    <!-- Aluminum Manufacturing Section -->
    <section class="custom-section fade-in py-5 align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="fw-bold">Aluminum Manufacturing</h2>
                    <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                        vestibulum.</p>
                    <!-- <button type="button" class="btn btn-primary">
                        Get Started
                    </button> -->
                </div>

                <!-- Image Column -->
                <div class="col-md-6 text-center">
                    <div class="position-relative">
                        <img src="{{ asset('storage/logos/master_qui-logo.png') }}"
                            alt="Philippines" class="img-fluid rounded lg">
                        <div
                            class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Aluminum Manufacturing Section -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->


    <!-- Products -->
    <section id="category" class="py-3 fade-in">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Aluminum Profiles</h2>
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
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/aluminum/01.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">ANGLE SECTIONS</h5>
                            <p class="text-muted">A colourless and transparent glass that offers a very high level of light transmittance. Its edge displays a slight green tint and is available from 2mm to 19mm thick.</p>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/aluminum/02.jpg') }}"
                            alt="Category 2" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">STORE FRONT COMPONENTS</h5>
                            <p class="text-muted">A heat absorbing, transparent glass colored by adding such metals like cobalt, selnium or iron. It reduces the amount of heat flowing into a room thereby decreasing the cooling load.</p>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/aluminum/06.jpg') }}"
                            alt="Category 3" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">SCREEN DOOR AND WINDOWS</h5>
                            <p class="text-muted">This kind of glass provides extreme clarity for glazing applications requiring minimum impurities in vision, thereby allowing the most natural colors to stand out.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <!-- Category 1 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/aluminum/07.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">SLIDING DOOR SECTIONS</h5>
                            <p class="text-muted">Low-E Glass Products are designed to improve the performace of windows and curtain walls be reducing heat transfer, resulting to lower shading coeffiecient and solar factor. It is highly transparent functions with lower reflectance.</p>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/aluminum/11.jpg') }}"
                            alt="Category 2" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">MISCELLANEOUS SECTIONS</h5>
                            <p class="text-muted">Reflective Glass has a mirror-like appearance and reflects and absorbs a major proportion of the sun's heat and radiation. Its glass performance is dependent o n the type of coating and the orientation of the glass. </p>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/aluminum/12.jpg') }}"
                            alt="Category 3" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">SWING DOOR SECTIONS</h5>
                            <p class="text-muted">Mirrors are made from top of the line clear or tinted float glass, chemically treated with silver and coated to prevent peeling and corrosion. PFGMI Mirros are oven cured to maintain durability through the years.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Browse More Button -->
            <div class="">
                <button type="button" class="btn btn-primary">See More</button>
            </div>

    </section>
    <!-- End of Products -->

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