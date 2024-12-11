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

    <!-- <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="main.css">

    <!-- Scripts -->
    <script src="../assets/js/color-modes.js" defer></script>
    <!-- Optional: Move this to the bottom of the body if it's not critical for rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<style>
    /* Font */
    body {
        font-family: 'Inter', sans-serif;
        font-size: small;
        margin: 0;
        padding: 0;
    }

    /* Header  */
    /* General Button Styling */
    .btn {
        width: 110px;
    }

    .btn-red {
        background-color: #950101;
        color: white;
    }

    .btn-red:hover {
        background-color: #950101;
        opacity: 0.9;
    }

    /* Style for menu items */
    .nav-link {
        color: #1C2033;
        font-weight: normal;
        transition: color 0.3s ease, font-weight 0.3s ease;
    }

    .nav-link:hover,
    .nav-link.active {
        color: #950101;
        font-weight: bold;
    }

    /* Header Styling */
    .sticky-top {
        position: sticky;
        top: 0;
        /* z-index: 1020; */
        background-color: white;
        /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
    }

    .header {
        max-width: 100%;
        height: auto;
    }

    /* Responsive Toggle Button */
    .navbar-toggler {
        border: none;
        outline: none;
        font-size: 1.5rem;
        color: #950101;
        background: none;
        cursor: pointer;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .nav {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .nav-link {
            width: 100%;
            text-align: left;
            padding: 0.5rem 1rem;
        }

        .btn-red {
            width: 100%;
            text-align: center;
            margin-top: 10px;
        }

        .navbar-collapse {
            background-color: white;
            padding: 10px;
        }

        .navbar-toggler {
            display: inline-block;
        }
    }

    @media (min-width: 769px) {
        .navbar-toggler {
            display: none;
        }

        .nav {
            flex-direction: row;
            align-items: center;
        }

        .btn-red {
            width: auto;
            text-align: center;
        }
    }


    /* End of header */

    /* Landing Page Scrolling Animation */
    .custom-section {
        background-color: #f8f9fa;
        /* Light grey background */
        font-family: 'Roboto', sans-serif;
        /* Modern, clean font */
    }

    .text-danger {
        color: #950101 !important;
        /* Consistent color branding */
    }

    button.btn-danger {
        background-color: #950101;
        /* Match primary brand color */
        color: white;
        border: none;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-danger:hover {
        background-color: #950101;
        transform: translateY(-2px);
        font-size: smaller;
    }

    .img-fluid {
        border-radius: 10px;
    }

    .image-overlay {
        pointer-events: none;
    }

    .image-overlay.transition-opacity {
        transition: opacity 0.3s ease-in-out;
    }

    .image-overlay.hover-opacity-50:hover {
        opacity: 0.5;
    }

    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* End of Landing Page Scrolling Animation */


    /* About us Page */

    /* Optional: Adds top padding to the text column */
    .text-column {
        padding-top: 50px;
        /* Adjust padding for proper spacing */
    }

    .custom-image {
        border-radius: 0 50px 50px 0;
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .custom-section {
        min-height: 80vh;
        display: flex;
        align-items: center;
    }

    .thumbnail {
        cursor: pointer;
        border: 1px solid #ddd;
        border-radius: 8px;
        width: 100px;
    }

    .thumbnail:hover {
        border-color: #950101;
    }

    /* About us parallax effect */
    /* Parallax Section */
    .parallax-section {
        background-image: url('https://images.pexels.com/photos/159358/construction-site-build-construction-work-159358.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        background-size: cover;
        background-attachment: fixed;
        /* Enables parallax effect */
        background-position: center;
        background-repeat: no-repeat;
        min-height: 500px;
        display: flex;
        align-items: center;
    }

    .parallax-section .container {
        background: rgba(255, 255, 255, 0.8);
        /* Add a white overlay for text readability */
        padding: 2rem;
        border-radius: 10px;
    }

    /* Company Logos Animation  */
    /* Scrolling container */
    .logo-scroller {
        overflow: hidden;
        position: relative;
        white-space: nowrap;
    }

    .logos {
        display: inline-flex;
        gap: 50px;
        /* Space between logos */
        animation: slide 20s linear infinite;
    }

    /* Logos: maintain aspect ratio and size */
    .header-img {
        height: 50px;
        /* Set a consistent height for all logos */
        object-fit: contain;
        /* Ensures logos fit without stretching */
        aspect-ratio: auto;
        /* Automatically maintains the aspect ratio */
    }

    /* Keyframes for infinite sliding */
    @keyframes slide {
        from {
            transform: translateX(0%);
        }

        to {
            transform: translateX(-15%);
        }
    }

    /* End of Company Logos Animation  */
</style>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-md bg-body-tertiary rounded sticky-top" aria-label="Navbar example">
        <div class="container">
            <a href="#" class="navbar-brand d-inline-flex link-body-emphasis text-decoration-none">
                <img src="{{ asset('storage/logos/TQMPLogo.png') }}" alt="Header Image" class="header" width="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-2 active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Bullet Proofing</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bullet Proof Armouring</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Glass MFG</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Glass Manufacturing</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Aluminum MFG</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Aluminum Manufacturing</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Glass Processing</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Glass Processing</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Gen. Trade</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Trading</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="#">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-danger">My Cart</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Header -->

    <!-- Landing -->
    <section class="custom-section fade-in py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="display-5 fw-bold mb-0">TOTAL QUALITY</h2>
                    <h2 class="display-5 fw-bold mb-0">MANAGEMENT</h2>
                    <h2 class="display-5 fw-bold mb-0">PRODUCTS</h2>
                    <h2 class="display-5 fw-bold text-danger mb-0">PHILIPPINES</h2>
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
                        <img src="https://images.pexels.com/photos/942540/pexels-photo-942540.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Philippines" class="img-fluid rounded shadow-lg">
                        <div
                            class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Landing -->

    <!-- Albums (Company Logos) -->
    <section id="companies" class=" container d-flex gap-2 justify-content-center py-4">
        <div align="center" valign="middle">
            <br>
            <br>
            <div class="logo-scroller">
                <p class="link-secondary">Companies teamed with</p><br>
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

    <!-- About Us -->
    <section id="about" class="parallax-section">
        <div class="container about-section">
            <div class="row align-items-center">
                <!-- Left Column: Text -->
                <div class="col-md-6">
                    <span class="badge text-white mb-2" style="background-color: #950101;">About Us</span>
                    <h2 class="fw-bold">Make our customers happy by giving services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae semper odio. Integer consequat
                        augue at
                        libero auctor, sed varius justo ullamcorper. Vivamus euismod, metus eget fermentum laoreet, leo
                        orci
                        volutpat turpis, a vehicula lorem elit eget libero.</p>
                    <p>Nullam tristique, urna eget tristique efficitur, mauris odio facilisis enim, sit amet eleifend
                        turpis lorem
                        eu turpis. Duis vel nulla a odio faucibus euismod. Fusce vehicula ipsum a purus laoreet, ac
                        faucibus sapien
                        lobortis. Cras suscipit risus et dui vulputate, non feugiat urna mollis.</p>
                    <button type="button" class="btn btn-danger">Get Started</button>
                </div>

                <!-- Right Column: Placeholder Image -->
                <div class="col-md-6 text-center">
                    <img src="https://via.placeholder.com/400x400" alt="Placeholder Image" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>



    <!-- End of About Us -->

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
    <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container text-center">
            <!-- FAQ Heading -->
            <span class="badge text-white mb-2" style="background-color: #950101;">FAQs</span>
            <h2 class="fw-bold">Any Questions? Look Here</h2>
            <p class="text-muted">
                There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration
                in some
                form.
            </p>
        </div>

        <!-- FAQ Accordion -->
        <div class="container mt-5">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-6">
                    <div class="accordion" id="faqAccordionLeft">
                        <!-- Accordion Item 1 -->
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
                                    style="color: #000;">
                                    Can you produce or process this?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordionLeft">
                                <div class="accordion-body" style="color: #6c757d;">
                                    It takes 2–3 weeks to get your first blog post ready. That includes in-depth
                                    research and creation of
                                    your monthly content marketing strategy that we do before writing your first blog
                                    post.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                    style="color: #000;">
                                    What is the ideal thickness for?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordionLeft">
                                <div class="accordion-body" style="color: #6c757d;">
                                    We begin with an introductory meeting to align goals, followed by brainstorming
                                    ideas and presenting
                                    an action plan.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree" style="color: #000;">
                                    What is the ideal size for?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#faqAccordionRight">
                                <div class="accordion-body" style="color: #6c757d;">
                                    We offer blog writing, SEO optimization, and content marketing strategy services
                                    tailored to your
                                    needs.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-6">
                    <div class="accordion" id="faqAccordionRight">


                        <!-- Accordion Item 4 -->
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                                    style="color: #000;">
                                    What is the price of?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordionRight">
                                <div class="accordion-body" style="color: #6c757d;">
                                    Yes, we offer up to 2 free revisions per blog post to ensure your satisfaction with
                                    the final content.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 5 -->
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                                    style="color: #000;">
                                    Do you have this item?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faqAccordionRight">
                                <div class="accordion-body" style="color: #6c757d;">
                                    Yes, we offer up to 2 free revisions per blog post to ensure your satisfaction with
                                    the final content.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 6 -->
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"
                                    style="color: #000;">
                                    What is your delivery date commitment?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#faqAccordionRight">
                                <div class="accordion-body" style="color: #6c757d;">
                                    Yes, we offer up to 2 free revisions per blog post to ensure your satisfaction with
                                    the final content.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Accordion -->

    <!-- Call to Action -->
    <section>

        <body class="bg-white">
            <!-- Centered Section -->
            <div class="d-flex justify-content-center align-items-center" style="height: auto;">
                <div class="p-5"
                    style="background-color: #232B37; border-radius: 8px; max-width: 900px; width: 100%;">
                    <div class="row align-items-center">
                        <!-- Left Column -->
                        <div class="col-md-8 text-light">
                            <h3 class="fw-bold mb-2">Lorem ipsum dolor sit amet</h3>
                            <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <!-- Right Column -->
                        <div class="col-md-4 text-md-end">
                            <button type="button" class="btn btn-danger">Get Started</button>
                            <button type="button" class="btn btn-outline-light" style="font-size: smaller;">Learn
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </section> <br><br>
    <!-- End of Call to Action -->



    <!-- Footer -->
    <footer class="text-light py-5" style="background-color: #232B37;">
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-md-3 mb-4">
                    <a href="" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="{{ asset('storage/logos/TQMPLogo.png') }}" alt="Header Image" class="header"
                            width="80">
                    </a>
                    <p class="small">
                        Sed ut perspiciatis undmnis is iste natus error sit amet voluptatem totam rem aperiam.
                    </p>
                    <p class="mb-0">
                        <i class="bi bi-telephone"></i> +012 (345) 678 99
                    </p>
                </div>

                <!-- Company Links -->
                <div class="col-md-2 mb-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light small">About Us</a></li>
                        <li><a href="#" class="text-decoration-none text-light small">Contact & Support</a></li>
                        <li><a href="#" class="text-decoration-none text-light small">Success History</a></li>
                        <li><a href="#" class="text-decoration-none text-light small">Setting & Privacy</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-md-2 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light small">Premium Support</a></li>
                        <li><a href="#" class="text-decoration-none text-light small">Our Services</a></li>
                        <li><a href="#" class="text-decoration-none text-light small">Know Our Team</a></li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div class="col-md-5 text-mb-4">
                    <h5>Follow Us On</h5>
                    <div class="mb-2">
                        <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                    </div>
                    <p class="small mb-0">&copy; 2024 Total Quality Management Products.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</body>

</html>
