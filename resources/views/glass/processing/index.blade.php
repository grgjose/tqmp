<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Glass Processing | Total Quality Management Products Philippines</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="main.css">

    <!-- Scripts -->
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
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
        style="background: linear-gradient(rgba(23, 38, 71, 0.3), rgba(126, 20, 22, 0.4)),
                    url('https://images.pexels.com/photos/3736110/pexels-photo-3736110.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3 fade-in-up" style="color: white;">Glass Processing</h2>
                    <p class="lead mt-3 fade-in-up" style="color: white;">
                        Utilizing state-of-the-art technology and machinery, we are capable of producing an extensive range of tempered glass products.
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="" class="btn btn-outline-light text-decoration-none fade-in" style="font-size: smaller;">
                            <span><b>Find out more</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of landing  -->

    <!-- Glass Processing Section -->
    <section class="fade-in">
        <div class="container mt-5 text-center">
            <!-- <h2 class="fw-bold" style="color: #7E1416;">Aluminum Manufacturing</h2>
            <p></p> -->
        </div>
        <div class="card mb-3 mx-auto mt-5" style="max-width: 1300px;">
            <div class="row g-0 justify-content-center">
                <!-- Image Column -->
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/logos/pgpsi-logo.png') }}"
                        alt="Aluminum Manufacturing" class="img-fluid rounded lg" style="padding: 20px;">
                </div>
                <!-- Text Column -->
                <div class="col-md-8">
                    <div class="card-body py-5">
                        <h2 class="fw-bold" style="color: #7E1416;">About Glass Processing</h2>
                        <p> With extensive experience in the glass industry, we take pride in our commitment to delivering exceptional products and services to our clients.
                            Our factory is equipped with state-of-the-art technology and machinery, enabling us to produce a diverse range of tempered glass products, including glass doors, windows, shower enclosures, and more.
                            At Philippine Glass Processing Specialist, we prioritize customer satisfaction and consistently aim to exceed our clients' expectations with every project.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Glass Processing Section -->

    <div class="container mt-5 text-center">
        <!-- Badge -->
        <!-- <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Services</span> -->
        <!-- Heading -->
        <h2 class="fw-bold" style="color: #7E1416;">Glass Processing Services</h2>
        <p>
            <b>PGPSI offers the following glass processing services</b>
        </p>
    </div>

    <!-- Services -->
    <section id="services" class="container py-4">
        <div class="row">
            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-lg d-flex flex-column">
                    <img src="{{ asset('storage/glass-processing/tempered.png') }}" alt="Tempered Glass" class="card-img-top" style="object-fit: cover; height: 200px;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title fw-bold">Tempered Glass</h6>
                        <p class="card-text flex-grow-1">Fully tempered glass is a unique glazing material. It is about 3 to 5 times stronger than an ordinary or annealed glass of the same thickness and configuration.</p>
                    </div>
                    <a href="#" class="card-button mt-auto">Get Quotation</a>
                </div>
            </div>

            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-lg d-flex flex-column">
                    <img src="{{ asset('storage/glass-processing/laminated.png') }}" alt="Laminated Glass" class="card-img-top" style="object-fit: cover; height: 200px;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title fw-bold">Laminated Glass</h6>
                        <p class="card-text flex-grow-1">Laminated glass is a multi-functional glazing material that can be used in a variety of applications. It is manufactured by permanently bonding two or more glass panes with layers of polyvinyl butyral (PVB) interlayer, under heat and pressure to produce a single product.</p>
                    </div>
                    <a href="#" class="card-button mt-auto">Get Quotation</a>
                </div>
            </div>

            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-lg d-flex flex-column">
                    <img src="{{ asset('storage/glass-processing/curved.jpg') }}" alt="Curved Glass" class="card-img-top" style="object-fit: cover; height: 200px;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title fw-bold">Curved Tempered Glass</h6>
                        <p class="card-text flex-grow-1">In the same manner with flat tempered glass, curved tempered glass is also resistant to mechanical stresses (bending, impact, etc.) and thermal stresses (temperature difference), without altering the properties of the basic product.</p>
                    </div>
                    <a href="#" class="card-button mt-auto">Get Quotation</a>
                </div>
            </div>

            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-lg d-flex flex-column">
                    <img src="{{ asset('storage/glass-processing/igu.png') }}" alt="IGU" class="card-img-top" style="object-fit: cover; height: 200px;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title fw-bold">Insulating Glass Unit (IGU)</h6>
                        <p class="card-text flex-grow-1">Insulating glass unit is a set of two or more lites of glass separated by air space and hermetically sealed to form a single unit. Its most important function is to improve the thermal performance of glass when used in architectural applications.</p>
                    </div>
                    <a href="#" class="card-button mt-auto">Get Quotation</a>
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