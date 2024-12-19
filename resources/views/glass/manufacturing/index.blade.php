<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glass Manufacturing</title>
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

    <!-- Trial -->
    <!-- <section class="">
        <div class="image-aboutus-banner position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary" style="margin-top:70px">
            <div class="container">
                <div class="row col-md-6 p-lg-5 mx-auto my-5">
                    <div class="col-md-12">
                        <h2 class="fw-bold">Glass Manufacturing</h2>
                        <h5 class="fw-normal text-light mb-3">With over 60 years of experience in flat glass manufacturing in the country, PFGMI produces quality flat glass such as Clear Float and Tinted Float.</h5>
                        <button href="" type="button" class="btn btn-danger">
                            Find out more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End of Trial -->

    <!-- landing  -->
    <section class="d-flex align-items-center justify-content-center text-center min-vh-100"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(107, 4, 4, 0.7)), 
                    url('https://www.pfg.com.ph/images/slider/01.jpg') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Glass Manufacturing</h2>
                    <p class="lead mt-3" style="color: white;">
                        With over 60 years of experience in flat glass manufacturing in the country, PFGMI produces quality flat glass such as Clear Float and Tinted Float.
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

    <!-- Glass Manufacturing Section -->
    <section class="custom-section fade-in py-5 align-items-center">
        <div class="container">
            <section class="fade-in">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="fw-bold">Glass Manufacturing</h2>
                    <p class="text-muted">Pioneer Float Glass Manufacturing Inc. (PFGMI) is the leading flat glass manufacturer in the Philippines.</p>
                    <p class="text-muted">Established in 1958 under the former name of Republic Glass Corporation, and eventually became a wholly owned subsidiary of AGC in 2001 adopting the company name AGC Flat Glass Philippines Inc. In 2017, TQMP Glass Manufacturing Corp. acquired 100% of the AGPH shares thus becaming the torch bearer for the flat glass industry in the Philippines.</p>
                    <!-- <button type="button" class="btn btn-danger">
                        Get Started
                    </button> -->
                </div>

                <!-- Image Column -->
                <div class="col-md-6 text-center">
                    <div class="position-relative">
                        <img src="{{ asset('storage/logos/pioneer_logo.png') }}"
                            alt="Philippines" class="img-fluid rounded lg">
                        <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity"> </div>
                    </div>
                </div>
            </div>
            </section>
           
        </div>
    </section>
    <!-- Glass Manufacturing Section -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->


    <!-- Products -->
    <section id="category" class="py-3 fade-in">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Products</h2>
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
                        <img src="https://www.pfg.com.ph/images/services/floatglass.jpg"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">CLEAR FLOAT GLASS</h5>
                            <p class="text-muted">A colourless and transparent glass that offers a very high level of light transmittance. Its edge displays a slight green tint and is available from 2mm to 19mm thick.</p>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://www.pfg.com.ph/images/services/tintedfloat.jpg"
                            alt="Category 2" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">TINTED FLOAT GLASS</h5>
                            <p class="text-muted">A heat absorbing, transparent glass colored by adding such metals like cobalt, selnium or iron. It reduces the amount of heat flowing into a room thereby decreasing the cooling load.</p>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://www.pfg.com.ph/images/services/ultraclear.jpg"
                            alt="Category 3" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">ULTRA CLEAR FLOAT GLASS</h5>
                            <p class="text-muted">This kind of glass provides extreme clarity for glazing applications requiring minimum impurities in vision, thereby allowing the most natural colors to stand out.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <!-- Category 1 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://www.pfg.com.ph/images/services/lowe.jpg"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">LOW-E COATED GLASS</h5>
                            <p class="text-muted">Low-E Glass Products are designed to improve the performace of windows and curtain walls be reducing heat transfer, resulting to lower shading coeffiecient and solar factor. It is highly transparent functions with lower reflectance.</p>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://www.pfg.com.ph/images/services/reflective.jpg"
                            alt="Category 2" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">REFLECTIVE COATED GLASS</h5>
                            <p class="text-muted">Reflective Glass has a mirror-like appearance and reflects and absorbs a major proportion of the sun's heat and radiation. Its glass performance is dependent o n the type of coating and the orientation of the glass. </p>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://www.pfg.com.ph/images/services/mirror.jpg"
                            alt="Category 3" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">MIRROR</h5>
                            <p class="text-muted">Mirrors are made from top of the line clear or tinted float glass, chemically treated with silver and coated to prevent peeling and corrosion. PFGMI Mirros are oven cured to maintain durability through the years.</p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Browse More Button -->
            <div class="">
                <button type="button" class="btn btn-danger">See More</button>
            </div>

    </section>
    <!-- End of Products -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

    <!-- Awards Section -->
    <section class="custom-section fade-in py-3 align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6 text-center text-md-end">
                    <h2 class="fw-bold">Awards and Recognition</h2>
                    <p class="text-muted">Outstanding Environmental Performer Award (PEZA)</p>
                    <p class="text-muted">2006 E3 Excellence in Ecology and Economy</p>
                    <p class="text-muted">Don Emilio Abello Energy Efficiency Awards</p>
                    <p class="text-muted">Dangal ng Pasig Award</p>
                    <p class="text-muted">Excellence in Ecology and Economy Award</p>
                    <button type="button" class="btn btn-danger">
                        Get Started
                    </button>
                </div>

                <!-- Image Column -->
                <div class="col-md-6 text-center">
                    <div class="position-relative">
                        <img src="https://www.pfg.com.ph/images/awards/awards.jpg"
                            alt="Philippines" class="img-fluid rounded lg">
                        <div
                            class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Awards Section -->

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