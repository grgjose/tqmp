<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>About Us | Total Quality Management Products Philippines</title>
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

    <style>
        /* .timeline {
            position: relative;
        }

        .timeline::before {
            content: ' ';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 0.5px;
            background-color: hsl(208, 7.30%, 45.70%, 0.1);
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
            padding-left: 50px;
            padding-right: 50px;
        } */

        /*--------------------------------------------------------------
# Global Page Titles & Breadcrumbs
--------------------------------------------------------------*/
        .page-title {
            color: var(--default-color);
            background-color: var(--background-color);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 160px 0 60px 0;
            text-align: center;
            position: relative;
        }

        .page-title:before {
            content: "";
            background-color: color-mix(in srgb, var(--background-color), transparent 40%);
            position: absolute;
            inset: 0;
        }

        .page-title h1 {
            font-size: 56px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .page-title .breadcrumbs ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            justify-content: center;
            padding: 0;
            margin: 0;
            font-size: 16px;
            font-weight: 500;
        }

        .page-title .breadcrumbs ol li+li {
            padding-left: 10px;
        }

        .page-title .breadcrumbs ol li+li::before {
            content: "/";
            display: inline-block;
            padding-right: 10px;
            color: color-mix(in srgb, var(--default-color), transparent 20%);
        }
    </style>

    <!-- Page Title -->
    <div class="page-title dark-background text-light" style="background: url('storage/logos/tqmpnew-edited.jpg') center/cover no-repeat, rgba(0, 0, 0, 0.4); background-blend-mode: overlay;">
        <div class="container position-relative">
            <h1 class="fade-in">Company History</h1>
            <p class="lead mb-4 fade-in">TQMP PHILIPPINES specializes in marketing and selling an extensive range of glass products and aluminum sections, serving the construction industry and beyond.</p>

        </div>
    </div>

    <!-- <section class="custom-section fade-in py-5 p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-light">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 ">
                    <h1 class="display-4 fw-bold">Company History</h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4">TQMP PHILIPPINES is engaged in the marketing and selling of a wide range of glass products and aluminum sections for the construction industry. </p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">

                            <a href="#timeline" type="button" class="btn btn-outline-primary">Timeline</a>
                            <a href="#values" type="button" class="btn btn-outline-danger">Values</a>
                        </div>

                    </div>
                    <img src="{{ asset('storage/logos/TQMPBuilding.jpg') }}" alt="Philippines" class="img-fluid rounded shadow-lg">

                </div>

            </div>
        </div>
    </section> -->
    <!-- About Us Section -->
    <div class="container py-5">

        <div class="container text-center fade-in-up">
            <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Timeline</span>
        </div>

        <div id="timeline" class="container fade-in-up">
            <div class="section section-md">
                <div class="container">
                    <div class="row mt-4 justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <!-- Timeline -->
                            <div class="timeline">
                                <!-- Timeline Item 1 -->
                                <div class="timeline-item row align-items-center justify-content-center">
                                    <div class="col-md-6 order-md-1 text-md-end mb-3">
                                        <h2 class="my-3" style="color: #920B12;"><b>1998</b></h2>
                                        <p>Established in 1998, an emerging leader in the aluminum and glass industries.
                                            TQMP PHILIPPINES handles importations and trading of flat glass and other related products such as engineering adhesives, silicone sealants, abrasives, hardware for glass and aluminum installations, and the like.</p>
                                    </div>
                                    <div class="col-md-6 order-md-2 mb-3">
                                        <img src="https://images.pexels.com/photos/5411674/pexels-photo-5411674.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="1998" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                    </div>
                                </div>
                                <!-- Timeline Item 2 -->
                                <div class="timeline-item row align-items-center justify-content-center">
                                    <div class="col-md-6 order-md-2 mb-3">
                                        <h2 class="my-3" style="color: #920B12;"><b>2005</b></h2>
                                        <p>Armed with strong determination to meet the demand of the customers for high-end architectural and industrial glass requirements, the company formed its first subsidiary company in 2005, the Philippine Glass Processing Specialist, Inc. (PGPSI), and invested in several state-of-the-art processing machines.</p>
                                    </div>
                                    <div class="col-md-6 order-md-1 text-md-end mb-3">
                                        <img src="https://www.pfg.com.ph/images/slider/01.jpg" alt="2005" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                    </div>
                                </div>
                                <!-- Timeline Item 3 -->
                                <div class="timeline-item row align-items-center justify-content-center">
                                    <div class="col-md-6 order-md-1 text-md-end mb-3">
                                        <h2 class="my-3" style="color: #920B12;"><b>Third Quarter of 2010</b></h2>
                                        <p>In the third quarter of 2010, Assure Insurance Agency Corporation (AIAC), another subsidiary company of TQMP PHILIPPINES, was established. Assure Insurance Agency Corporation is the insurance arm of the company representing various insurance companies for non-life coverages.</p>
                                    </div>
                                    <div class="col-md-6 order-md-2 mb-3">
                                        <img src="{{ asset('storage/about-us/aiac.jpg') }}" alt="2010 Q3" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                    </div>
                                </div>
                                <!-- Timeline Item 4 -->
                                <div class="timeline-item row align-items-center justify-content-center">
                                    <div class="col-md-6 order-md-2 mb-3">
                                        <h2 class="my-3" style="color: #920B12;"><b>Fourth Quarter of 2010</b></h2>
                                        <p>In the fourth quarter of 2010, another subsidiary company, TQMC Marketing, was established. TQMC Marketing imports and distributes a wide variety of chemicals and raw ingredients for numerous industrial and food processing applications.</p>
                                    </div>
                                    <div class="col-md-6 order-md-1 text-md-end mb-3">
                                        <img src="https://images.pexels.com/photos/356040/pexels-photo-356040.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="2010 Q4" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                    </div>
                                </div>
                                <!-- Timeline Item 5 -->
                                <div class="timeline-item row align-items-center justify-content-center">
                                    <div class="col-md-6 order-md-1 text-md-end mb-3">
                                        <h2 class="my-3" style="color: #920B12;"><b>Fourth Quarter of 2013</b></h2>
                                        <p>In the fourth quarter of 2013, TQMP-Cebu was established. It houses the glass processing facilities that cater to the demands of Cebu and nearby provinces (Visayan Region).</p>
                                    </div>
                                    <div class="col-md-6 order-md-2 mb-3">
                                        <img src="https://images.pexels.com/photos/26443232/pexels-photo-26443232/free-photo-of-silos-in-factory-near-river.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="2013 Q4" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                    </div>
                                </div>
                                <!-- Timeline Item 6 -->
                                <div class="timeline-item row align-items-center justify-content-center">
                                    <div class="col-md-6 order-md-2 mb-3">
                                        <h2 class="my-3" style="color: #920B12;"><b>Second Quarter of 2014</b></h2>
                                        <p>Southern Philippines Glass (SPG) started its operations in the second quarter of 2014 with the same facilities of TQMP-Cebu. It serves the growing demand of the Mindanao Region.</p>
                                    </div>
                                    <div class="col-md-6 order-md-1 text-md-end mb-3">
                                        <img src="https://th.bing.com/th/id/OLC.d45VbMr0TG1XzQ480x360?&rs=1&pid=ImgDetMain" alt="2014 Q2" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                    </div>
                                </div>
                                <!-- Timeline Item 7 -->
                                <div class="timeline-item row align-items-center justify-content-center">
                                    <div class="col-md-6 order-md-1 text-md-end mb-3">
                                        <h2 class="my-3" style="color: #920B12;"><b>Fourth Quarter of 2014</b></h2>
                                        <p>In the fourth quarter of 2014, the new plant in Lawang Bato started its maiden operation. It houses one of the biggest tempering and modern glass processing facilities in Southeast Asia.</p>
                                    </div>
                                    <div class="col-md-6 order-md-2 mb-3">
                                        <img src="{{ asset('storage/logos/tqmpnew-edited.jpg') }}" alt="2014 Q4" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                    </div>
                                </div>
                            </div> <!-- End of Timeline -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Details -->
        <section id="values" class="mt-5 py-5">
            <div class="container text-center">
                <!-- Heading -->
                <!-- <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">About Us</span> -->
                <h2 class="fw-bold">Company Values</h2>
                <!-- Paragraph -->
                <p class="mt-3">
                <p>Our belief is that our employees are the source of our strength, and that success can only be achieved through involvement and full commitment of every TQMP employee.</p>
                <!-- Cards -->
                <div class="row mt-4">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img src="https://images.pexels.com/photos/7414284/pexels-photo-7414284.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Category 1" class="card-img-top rounded">
                            <div class="card-body">
                                <h5 class="fw-bold">MISSION</h5>
                                <p class="text-muted">Steadfastly dedicated to quality and ongoing innovation to deliver top-notch products and services to our valued customer base. Maintain company expansion, foster staff pride, and gain community respect.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/about-us/about-2.jpg') }}"
                                alt="Category 1" class="card-img-top rounded">
                            <div class="card-body">
                                <h5 class="fw-bold">VISION</h5>
                                <p class="text-muted">To become a major force in the regional market by promoting social responsibility and ethical business practices, as well as by demonstrating a strong commitment to quality, style, and value in products and services.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/about-us/about-1.jpg') }}"
                                alt="Category 1" class="card-img-top rounded">
                            <div class="card-body">
                                <h5 class="fw-bold">OUR VALUES</h5>
                                <p class="text-muted">The goal is complete client satisfaction through innovative services.
                                    Becoming the market leader in glass and aluminum requires constant
                                    improvement and the use of highly specialized, dependable process equipment.</p>
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