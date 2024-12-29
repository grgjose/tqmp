<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
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
        style="background: linear-gradient(rgba(23, 38, 71, 0.8), rgba(126, 20, 22, 0.9)), 
                    url('https://www.pfg.com.ph/images/slider/01.jpg') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Glass Manufacturing</h2>
                    <p class="lead mt-3" style="color: white;">
                        With over 60 years of experience in flat glass manufacturing in the country, PFGMI produces quality flat glass such as Clear Float and Tinted Float.
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
                With over 60 years of experience in flat glass manufacturing in the country, PFGMI produces quality flat glass such as Clear Float and Tinted Float. Bind our commitment reaches beyond glass companies.
            </p>

            <!-- Pagination  -->

            <div class="container">
                <!-- Card Content -->
                <div class="tab-content" id="pagination-content">
                    <!-- Page 1 -->
                    <div class="tab-pane fade show active" id="page-1" role="tabpanel" aria-labelledby="page-1-tab">
                        <div class="row">
                            <!-- Card 7 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/glass-mfg/floatglass.jpg') }}" class="card-img-top" alt="Card 1">
                                    <div class="card-body">
                                        <h5 class="card-title">CLEAR FLOAT GLASS</h5>
                                        <p class="card-text">A Colourless and transparent glass that offers a very high level of light transmittance...</p>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            More Details
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">CLEAR FLOAT GLASS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>A Colourless and transparent glass that offers a very high level of light transmittance.
                                                            Its edge displays a slight green tint and is available from 2mm to 19mm thick.</h6>

                                                        <p><b>Thickness:</b><br>
                                                            2.0mm to 12.0mm</p>

                                                        <p><b>Standard Size:</b><br>
                                                            36" x 48" to 144" x 192"</p>

                                                        <p><b>Ultra Thick</b><br>
                                                            15.00mm to 19.0mm</p>

                                                        <p><b>Standard Size</b><br>
                                                            120" x 390"</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Order Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 8 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/glass-mfg/tintedfloat.jpg') }}" class="card-img-top" alt="Card 2">
                                    <div class="card-body">
                                        <h5 class="card-title">TINTED FLOAT GLASS</h5>
                                        <p class="card-text">A heat absorbing, transparent glass colored by adding such metals like cobalt...</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                            More Details
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">TINTED FLOAT GLASS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>A heat absorbing, transparent glass colored by adding such metals like cobalt, selnium or iron.
                                                            It reduces the amount of heat flowing into a room thereby decreasing the cooling load.</h6>

                                                        <p><b>Bronze Float:</b><br>
                                                            3.0mm to 12.0mm Thickness</p>

                                                        <p><b>Dark Gray Float:</b><br>
                                                            3.0mm to 12.0mm Thickness</p>

                                                        <p><b>Euro Gray Float:</b><br>
                                                            6.0mm to 12.0mm Thickness</p>

                                                        <p><b>Dark Green:</b><br>
                                                            6.0mm to 12.0mm Thickness</p>

                                                        <p><b>Dark Blue:</b><br>
                                                            6.0mm to 12.0mm Thickness</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Order Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Card 9 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/glass-mfg/ultraclear.jpg') }}" class="card-img-top" alt="Card 3">
                                    <div class="card-body">
                                        <h5 class="card-title">ULTRA CLEAR FLOAT GLASS</h5>
                                        <p class="card-text">This kind of glass provides extreme clarity for glazing applications requiring minimum impurities...</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                            More Details
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">ULTRA CLEAR FLOAT GLASS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>This kind of glass provides extreme clarity for glazing applications requiring minimum impurities in vision,
                                                            thereby allowing the most natural colors to stand out.</h6>

                                                        <p><b>Thickness:</b><br>
                                                            6.0mm to 12.0mm</p>

                                                        <p><b>Standard Size:</b><br>
                                                            84" x 120" to 84" x 192"</p>

                                                        <p><b>Ultra Thick</b><br>
                                                            15.00mm to 19.0mm</p>

                                                        <p><b>Standard Size</b><br>
                                                            120" x 236"</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Order Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Card 10 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/glass-mfg/lowe.jpg') }}" class="card-img-top" alt="Card 4">
                                    <div class="card-body">
                                        <h5 class="card-title">LOW-E COATED GLASS</h5>
                                        <p class="card-text">Low-e glass stands for low emissivity glass. One side of the glass has a special metal coating...</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                            More Details
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">LOW-E COATED GLASS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Low-e glass stands for low emissivity glass. One side of the glass has a special metal coating, known as low emissivity coating.
                                                            Low-e glass is a type of insulating glass which increases the energy efficiency of the windows by reducing the transfer of heat or cold through the glass.
                                                            This means that during cold season, the house stays warmer, and in summer it stays cooler.</h6>

                                                        <p><b>Clear:</b><br>
                                                            6.0mm to 10.0mm Thickness</p>

                                                        <p><b>Euro Gray Float:</b><br>
                                                            6.0mm to 10.0mm Thickness</p>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Order Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 11 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/glass-mfg/reflective.jpg') }}" class="card-img-top" alt="Card 5">
                                    <div class="card-body">
                                        <h5 class="card-title">REFLECTIVE COATED GLASS</h5>
                                        <p class="card-text">Reflective glass is essentially an ordinary float glass with a metallic coating that helps...</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                            More Details
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">REFLECTIVE COATED GLASS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Reflective glass is essentially an ordinary float glass with a metallic coating that helps a building achieve a high standard of
                                                            visual appeal besides reflecting a greater amount of heat than normal tinted float glass.
                                                            It comes in variety of metallic colors such as gold, silver, bronze, blue and green.</h6>

                                                        <p><b>Dark Blue:</b><br>
                                                            6.0mm to 10.0mm Thickness</p>

                                                        <p><b>Dark Green:</b><br>
                                                            6.0mm to 10.0mm Thickness</p>

                                                        <p><b>Euro Gray:</b><br>
                                                            6.0mm to 10.0mm Thickness</p>

                                                        <p><b>Clear:</b><br>
                                                            6.0mm to 10.0mm Thickness</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Order Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 12 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/glass-mfg/mirror.jpg') }}" class="card-img-top" alt="Card 6">
                                    <div class="card-body">
                                        <h5 class="card-title">MIRROR</h5>
                                        <p class="card-text">Mirror are made from top of the line clear or tinted float glass...</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                                            More Details
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">MIRROR</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Mirror are made from top of the line clear or tinted float glass, chemically treated with silver and coated to prevent peeling and corrosion.
                                                            PFGMI are oven cured to maintain durability through the years.</h6>

                                                        <p><b>Thickness:</b><br>
                                                            3.0mm to 6.0mm</p>

                                                        <p><b>Standard Size:</b><br>
                                                            48" x 72" to 84" x 120"</p>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Order Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page 2 -->
                    <div class="tab-pane fade" id="page-2" role="tabpanel" aria-labelledby="page-2-tab">
                        <div class="row">
               
                            <!-- Card 10 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/glass-mfg/patternedglass.jpg') }}" class="card-img-top" alt="Card 10">
                                    <div class="card-body">
                                        <h5 class="card-title">PATTERNED GLASS</h5>
                                        <p class="card-text">Patterned Glass is a kind of decorative translucent glass with embossed pattern on one surface...</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                                            More Details
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel10" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">PATTERNED GLASS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Patterned Glass is a kind of decorative translucent glass with embossed pattern on one surface.
                                                            It is generally used where privacy or obscurity is desired, but light transmission is still important.
                                                            This is used in commercial, residential and specialty applications. The sheer simplicity of patterned glass makes it popular for interior design.</h6>

                                                        <p><b>Thickness:</b><br>
                                                        </p>

                                                        <p><b>Standard Size:</b><br>
                                                        </p>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Order Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 11 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/glass-mfg/wiredglass.jpg') }}" class="card-img-top" alt="Card 11">
                                    <div class="card-body">
                                        <h5 class="card-title">WIRED GLASS</h5>
                                        <p class="card-text">Wired glass is a type of glass wherein a wire mesh is inserted during production...</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                                            More Details
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">WIRED GLASS</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>Wired glass is a type of glass wherein a wire mesh is inserted during production.
                                                            It has an impact resistance similar to that of normal glass, but in case of breakage the mesh retains the pieces of glass.
                                                            This product is traditionally accepted as low-cost fire-resistant glass.

                                                        </h6>

                                                        <p><b>Thickness:</b><br>
                                                        </p>

                                                        <p><b>Standard Size:</b><br>
                                                        </p>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Order Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
  
                        </div>
                    </div>
                </div>

                <!-- Pagination Tabs -->
                <ul class="nav justify-content-center mb-4" id="pagination-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="pagination-button active" id="page-1-tab" data-bs-toggle="pill" data-bs-target="#page-1" type="button" role="tab" aria-controls="page-1" aria-selected="true">
                            1
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="pagination-button" id="page-2-tab" data-bs-toggle="pill" data-bs-target="#page-2" type="button" role="tab" aria-controls="page-2" aria-selected="false">
                            2
                        </button>
                    </li>
                </ul>

            </div>

            <!-- Browse More Button -->
            <div class="">
                <button type="button" class="btn btn-outline-danger">Order Now</button>
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
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="fw-bold">Awards and Recognition</h2>
                    <p class="text-muted">Outstanding Environmental Performer Award (PEZA)</p>
                    <p class="text-muted">2006 E3 Excellence in Ecology and Economy</p>
                    <p class="text-muted">Don Emilio Abello Energy Efficiency Awards</p>
                    <p class="text-muted">Dangal ng Pasig Award</p>
                    <p class="text-muted">Excellence in Ecology and Economy Award</p>
                    <!-- <button type="button" class="btn btn-danger">
                        Get Started
                    </button> -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>