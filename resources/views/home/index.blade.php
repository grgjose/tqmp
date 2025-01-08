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

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" style="background: url('storage/logos/tqmpnew-edited.jpg') center/cover no-repeat, rgba(0, 0, 0, 0.4); background-blend-mode: overlay;">
        <!-- <img src="{{ asset('storage/logos/tqmpnew-edited.jpg') }}" alt="" data-aos="fade-in"> -->
        <div class="container">
            <div class="row justify-content-center text-center text-light" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-6 col-lg-8">
                    <h2 class="fade-in">We are the Marketing Arm of Glass and Aluminum Conglomerate<span>.</span></h2>
                    <p class="fade-in">TOTAL QUALITY MANUFACTURING PRODUCTS PHILIPPINES CORPORATION</p>
                    <div class="text-center mb-5 mt-3">
                        <a type="button" class="btn btn-outline-light btn-lg px-4 me-sm-3">Register <i class="fa-solid fa-arrow-right" style="font-size: 9px; margin-left:5px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Albums (Company Logos) -->
    <section id="companies" class=" container d-flex gap-2 justify-content-center py-5 fade-in">
        <div align="center" valign="middle">
            <div class=" container logo-scroller py-5">
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
        </div>
    </section>
    <!-- End of Albums -->



    <!-- Landing -->
    <!-- <section class="custom-section fade-in py-3">
        <div class="container text-center">

            <div class="row align-items-center">
            
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="display-5 fw-bold mb-0"></h2>
                    <h2 class="display-5 fw-bold mb-0">TOTAL </h2>
                    <h2 class="display-5 fw-bold mb-0"> QUALITY </h2>
                    <h2 class="display-5 fw-bold mb-0"> MANUFACTURING </h2>
                    <h2 class="display-5 fw-bold mb-0"> PRODUCTS</h2>
                    <h2 class=" fw-bold text-danger mb-0">PHILIPPINES CORPORATION</h2>
                    <p class="text-muted mb-4">
                        Transforming industries with cutting-edge solutions and unwavering commitment to excellence. <br>
                        Join us on our journey to redefine quality and innovation.
                    </p>
                    <button type="button" class="btn btn-outline-danger btn-lg px-4 py-2">
                        Register
                    </button>
                </div>

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
    </section> -->
    <!-- End of Landing -->

    <!-- <div class="px-4 text-center border-bottom text-center">
        <h1 class="display-4 fw-bold">We are the marketing arm of glass <br> and aluminum conglomerate</h1>
        <div class="col-lg-6 mx-auto">
            <h4 class="text-muted">TOTAL QUALITY MANUFACTURING PRODUCTS PHILIPPINES CORPORATION</h4>
        
            <div class="text-center mb-5">
                <a type="button" class="btn btn-danger btn-lg px-4 me-sm-3">Register <i class="fa-solid fa-arrow-right" style="font-size: 9px;"></i></a>
            </div>
        </div>
        <div style="max-height: 40vh;">
            <div class="container px-5">
                <img src="{{ asset('storage/logos/TQMPBuilding.jpg') }}" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="800" height="500" loading="lazy">
            </div>
        </div>
    </div> -->



    <!-- Line -->
    <!-- <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div> -->
    <!-- End of Line -->



    <!-- Services -->
    <section id="services" class="py-3">
        <div class="container ">
            <div class="text-center">
                <!-- Badge -->
                <!-- <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Our Services</span> -->
                <!-- Heading -->
                <h2 class="fw-bold" style="color: #7E1416;">What We Offer</h2>
                <!-- Paragraph -->
                <p class="mt-3">
                    We are dedicated to delivering high-quality products and services that meet the highest industry standards.
                    Our advanced techniques and state-of-the-art equipment ensure that every project is completed with precision and excellence.
                </p>
            </div>

            <!-- Cards -->

            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-6 py-3">
                    <div class="card border-0 shadow-lg">
                        <img src="{{ asset('storage/logos/bulletproof-10.jpg') }}" alt="Bulletproof" class="card-img-top img-fluid rounded-0" style="height: 300px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold mb-3">Bullet Proofing</h5>
                            <p>This protection ensures your vehicle is as resilient as a tank, offering superior protection and ultimately saving lives.</p>
                        </div>
                        <a href="#" class="card-button"> Get Quotation</a>
                    </div>

                </div>
                <!-- Card 2 -->
                <div class="col-md-6 py-3">
                    <div class="card border-0 shadow-lg">
                        <img src="{{ asset('storage/glass-processing/igu close up.jpg') }}" alt="Glass Processing" class="card-img-top img-fluid rounded-0" style="height: 300px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold mb-3">Glass Processing</h5>
                            <p>Our advanced glass processing techniques ensure durability and quality, catering to a wide range of architectural and industrial needs.</p>
                        </div>
                        <a href="#" class="card-button"> Get Quotation</a>
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
        <div class="container  ">
            <div class="text-center">
                <!-- Badge -->
                <!-- <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Category</span> -->
                <!-- Heading -->
                <h2 class="fw-bold" style="color: #7E1416;">Shop by Category</h2>
                <!-- Paragraph -->
                <p class="mt-3">
                    We are now offering our valued customers the ability to shop online and have our services delivered right to your door. Please feel free to use our new online services.
                </p>
            </div>
            <!-- Category Cards -->
            <div class="row">
                <!-- Category 1 -->
                <div class="col-md-4 py-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow-lg d-flex flex-column">
                        <img src="{{ asset('storage/glass-processing/cool silver only.jpg') }}" alt="Bulletproof" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold">Glass</h5>
                            <p class="flex-grow-1">We offer a wide range of glass products for different applications, ensuring quality and durability.</p>
                        </div>
                        <a href="#" class="card-button mt-auto">Get Quotation</a>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-4 py-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow-lg d-flex flex-column">
                        <img src="{{ asset('storage/home/aluminum.jpg') }}" alt="Category 2" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold">Aluminum</h5>
                            <p class="flex-grow-1">A versatile and lightweight metal used in a variety of applications due to its strength, corrosion resistance, and aesthetic appeal.</p>
                        </div>
                        <a href="#" class="card-button mt-auto">Get Quotation</a>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-md-4 py-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow-lg d-flex flex-column">
                        <img src="{{ asset('storage/home/gen-trade.jpg') }}" alt="Gen Trade" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold">Other Products</h5>
                            <p class="flex-grow-1">In addition to aluminum and glass, we offer a variety of hardware products essential for construction and installation.</p>
                        </div>
                        <a href="#" class="card-button mt-auto">Get Quotation</a>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->

</body>


</html>