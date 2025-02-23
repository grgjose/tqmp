<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Glass Manufacturing | Total Quality Management Products Philippines</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Chatbot CSS -->
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
    <!-- Chatbot JS -->
    <script src="{{ asset('js/chatbot.js') }}"></script>
    
    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('storage/css/main.css') }}">
</head>

<body>
    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <section id="landing-glass-manufacturing" class="d-flex align-items-center justify-content-center text-center min-vh-100"
        style="background: linear-gradient(rgba(23, 38, 71, 0.4), rgba(126, 20, 22, 0.3)),
                    url('https://www.pfg.com.ph/images/slider/01.jpg') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3 fade-up" style="color: white;">Glass Manufacturing</h2>
                    <p class="lead mt-3 fade-in" style="color: white;">
                        With over 60 years of experience in flat glass manufacturing in the country, PFGMI produces quality flat glass such as Clear Float and Tinted Float.
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="https://www.pfg.com.ph/" class="btn btn-outline-light text-decoration-none fade-in" style="font-size: smaller;">
                            <span><b>Find out more</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-glass-manufacturing">
        <div class="card mb-3 mx-auto mt-5 fade-in" style="max-width: 1300px;">
            <div class="row g-0 justify-content-center">

                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/logos/pioneer_logo.png') }}"
                        alt="Philippines" class="img-fluid rounded lg" style="padding: 20px;">
                </div>

                <div class="col-md-8">
                    <div class="card-body py-5">
                        <h2 class="fw-bold" style="color: #7E1416;">Glass Manufacturing</h2>
                        <hr style="border-top: 3px solid #920B12; width: 150px; ">
                        <p class="text-muted">Pioneer Float Glass Manufacturing Inc. (PFGMI) is the leading flat glass manufacturer in the Philippines.</p>
                        <p class="text-muted">Established in 1958 under the former name of Republic Glass Corporation, and eventually became a wholly owned subsidiary of AGC in 2001 adopting the company name AGC Flat Glass Philippines Inc.
                            In 2017, TQMP Glass Manufacturing Corp. acquired 100% of the AGPH shares thus becoming the torch bearer for the flat glass industry in the Philippines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products-glass-manufacturing" class="py-3 mt-5 fade-in-up">
        <div class="container ">
            <div class="container text-center">
                <h2 class="fw-bold" style="color: #7E1416;">Products</h2>
                <p class="mt-3">
                    With over six decades of expertise in the national flat glass manufacturing industry, PFGMI specializes in producing high-quality flat glass, including Clear Float and Tinted Float. Our dedication extends beyond the glass industry, reflecting a broader commitment to excellence.
                </p>
            </div>

            <div class="container py-5 ">
                <!-- Card Content -->
                <div class="tab-content" id="pagination-content">

                    <!-- Page 1 -->
                    <div class="tab-pane fade show active" id="page-1" role="tabpanel" aria-labelledby="page-1-tab">
                        <div class="row">

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/glass-mfg/floatglass.jpg') }}" class="card-img-top" alt="Card 1" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">CLEAR FLOAT GLASS</h5>
                                        <p class="card-text">A Colourless and transparent glass that offers a very high level of light transmittance...</p>
                                        <!-- Accordion button -->
                                        <a class="btn btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#accordionExample" aria-expanded="false" aria-controls="accordionExample">
                                            More Details <i class="fa-solid fa-chevron-down ml-3" style="font-size: 10px;"></i>
                                        </a>
                                        <!-- Accordion content -->
                                        <div id="accordionExample" class="collapse mt-3">
                                            <div class="accordion-body">
                                                <h6>A Colourless and transparent glass that offers a very high level of light transmittance. Its edge displays a slight green tint and is available from 2mm to 19mm thick.</h6>
                                                <p><b>Thickness:</b><br> 2.0mm to 12.0mm</p>
                                                <p><b>Standard Size:</b><br> 36" x 48" to 144" x 192"</p>
                                                <p><b>Ultra Thick:</b><br> 15.00mm to 19.0mm</p>
                                                <p><b>Standard Size:</b><br> 120" x 390"</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn btn-primary me-2" data-bs-toggle="collapse" data-bs-target="#accordionExample" aria-expanded="false" aria-controls="accordionExample">Close</button>
                                                    <button type="button" class="btn btn-outline-danger">Order Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/glass-mfg/tintedfloat.jpg') }}" class="card-img-top" alt="Card 2" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">TINTED FLOAT GLASS</h5>
                                        <p class="card-text">A heat absorbing, transparent glass colored by adding such metals like cobalt...</p>
                                        <!-- Accordion button -->
                                        <a class="btn btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#accordion2" aria-expanded="false" aria-controls="accordion2">
                                            More Details <i class="fa-solid fa-chevron-down ml-3" style="font-size: 10px;"></i>
                                        </a>
                                        <!-- Accordion content -->
                                        <div id="accordion2" class="collapse mt-3">
                                            <div class="accordion-body">
                                                <h6>A heat absorbing, transparent glass colored by adding such metals like cobalt, selnium or iron. It reduces the amount of heat flowing into a room thereby decreasing the cooling load.</h6>
                                                <p><b>Bronze Float:</b><br> 3.0mm to 12.0mm Thickness</p>
                                                <p><b>Dark Gray Float:</b><br> 3.0mm to 12.0mm Thickness</p>
                                                <p><b>Euro Gray Float:</b><br> 6.0mm to 12.0mm Thickness</p>
                                                <p><b>Dark Green:</b><br> 6.0mm to 12.0mm Thickness</p>
                                                <p><b>Dark Blue:</b><br> 6.0mm to 12.0mm Thickness</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn btn-primary me-2" data-bs-toggle="collapse" data-bs-target="#accordion2" aria-expanded="false" aria-controls="accordion2">Close</button>
                                                    <button type="button" class="btn btn-outline-danger">Order Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/glass-mfg/ultraclear.jpg') }}" class="card-img-top" alt="Card 3" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">ULTRA CLEAR FLOAT GLASS</h5>
                                        <p class="card-text">This kind of glass provides extreme clarity for glazing applications requiring minimum impurities...</p>
                                        <!-- Accordion button -->
                                        <a class="btn btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#accordion3" aria-expanded="false" aria-controls="accordion3">
                                            More Details <i class="fa-solid fa-chevron-down ml-3" style="font-size: 10px;"></i>
                                        </a>
                                        <!-- Accordion content -->
                                        <div id="accordion3" class="collapse mt-3">
                                            <div class="accordion-body">
                                                <h6>This kind of glass provides extreme clarity for glazing applications requiring minimum impurities in vision, thereby allowing the most natural colors to stand out.</h6>
                                                <p><b>Thickness:</b><br> 6.0mm to 12.0mm</p>
                                                <p><b>Standard Size:</b><br> 84" x 120" to 84" x 192"</p>
                                                <p><b>Ultra Thick:</b><br> 15.00mm to 19.0mm</p>
                                                <p><b>Standard Size:</b><br> 120" x 236"</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn btn-primary me-2" data-bs-toggle="collapse" data-bs-target="#accordion3" aria-expanded="false" aria-controls="accordion3">Close</button>
                                                    <button type="button" class="btn btn-outline-danger">Order Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/glass-mfg/lowe.jpg') }}" class="card-img-top" alt="Card 4" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">LOW-E COATED GLASS</h5>
                                        <p class="card-text">Low-e glass stands for low emissivity glass. One side of the glass has a special metal coating...</p>
                                        <!-- Accordion button -->
                                        <a class="btn btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#accordion4" aria-expanded="false" aria-controls="accordion4">
                                            More Details <i class="fa-solid fa-chevron-down ml-3" style="font-size: 10px;"></i>
                                        </a>
                                        <!-- Accordion content -->
                                        <div id="accordion4" class="collapse mt-3">
                                            <div class="accordion-body">
                                                <h6>Low-e glass stands for low emissivity glass. One side of the glass has a special metal coating, known as low emissivity coating.
                                                    Low-e glass is a type of insulating glass which increases the energy efficiency of the windows by reducing the transfer of heat or cold through the glass.
                                                    This means that during cold season, the house stays warmer, and in summer it stays cooler.</h6>
                                                <p><b>Clear:</b><br> 6.0mm to 10.0mm Thickness</p>
                                                <p><b>Euro Gray Float:</b><br> 6.0mm to 10.0mm Thickness</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn btn-primary me-2" data-bs-toggle="collapse" data-bs-target="#accordion4" aria-expanded="false" aria-controls="accordion4">Close</button>
                                                    <button type="button" class="btn btn-outline-danger">Order Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/glass-mfg/reflective.jpg') }}" class="card-img-top" alt="Card 5" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">REFLECTIVE COATED GLASS</h5>
                                        <p class="card-text">Reflective glass is essentially an ordinary float glass with a metallic coating that helps...</p>
                                        <!-- Accordion button -->
                                        <a class="btn btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#accordion5" aria-expanded="false" aria-controls="accordion5">
                                            More Details <i class="fa-solid fa-chevron-down ml-3" style="font-size: 10px;"></i>
                                        </a>
                                        <!-- Accordion content -->
                                        <div id="accordion5" class="collapse mt-3">
                                            <div class="accordion-body">
                                                <h6>Reflective glass is essentially an ordinary float glass with a metallic coating that helps a building achieve a high standard of
                                                    visual appeal besides reflecting a greater amount of heat than normal tinted float glass.
                                                    It comes in variety of metallic colors such as gold, silver, bronze, blue and green.</h6>
                                                <p><b>Dark Blue:</b><br> 6.0mm to 10.0mm Thickness</p>
                                                <p><b>Dark Green:</b><br> 6.0mm to 10.0mm Thickness</p>
                                                <p><b>Euro Gray:</b><br> 6.0mm to 10.0mm Thickness</p>
                                                <p><b>Clear:</b><br> 6.0mm to 10.0mm Thickness</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn btn-primary me-2" data-bs-toggle="collapse" data-bs-target="#accordion5" aria-expanded="false" aria-controls="accordion5">Close</button>
                                                    <button type="button" class="btn btn-outline-danger">Order Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/glass-mfg/mirror.jpg') }}" class="card-img-top" alt="Card 6" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">MIRROR</h5>
                                        <p class="card-text">Mirror are made from top of the line clear or tinted float glass...</p>
                                        <!-- Accordion button -->
                                        <a class="btn btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#accordion6" aria-expanded="false" aria-controls="accordion6">
                                            More Details <i class="fa-solid fa-chevron-down ml-3" style="font-size: 10px;"></i>
                                        </a>
                                        <!-- Accordion content -->
                                        <div id="accordion6" class="collapse mt-3">
                                            <div class="accordion-body">
                                                <h6>Mirror are made from top of the line clear or tinted float glass, chemically treated with silver and coated to prevent peeling and corrosion.
                                                    PFGMI are oven cured to maintain durability through the years.</h6>
                                                <p><b>Thickness:</b><br> 3.0mm to 6.0mm</p>
                                                <p><b>Standard Size:</b><br> 48" x 72" to 84" x 120"</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn btn-primary me-2" data-bs-toggle="collapse" data-bs-target="#accordion6" aria-expanded="false" aria-controls="accordion6">Close</button>
                                                    <button type="button" class="btn btn-outline-danger">Order Now</button>
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

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/glass-mfg/patternedglass.jpg') }}" class="card-img-top" alt="Card 10" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">PATTERNED GLASS</h5>
                                        <p class="card-text">Patterned Glass is a kind of decorative translucent glass with embossed pattern on one surface...</p>
                                        <!-- Accordion button -->
                                        <a class="btn btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#accordion7" aria-expanded="false" aria-controls="accordion7">
                                            More Details <i class="fa-solid fa-chevron-down ml-3" style="font-size: 10px;"></i>
                                        </a>
                                        <!-- Accordion content -->
                                        <div id="accordion7" class="collapse mt-3">
                                            <div class="accordion-body">
                                                <h6>Patterned Glass is a kind of decorative translucent glass with embossed pattern on one surface.
                                                    It is generally used where privacy or obscurity is desired, but light transmission is still important.
                                                    This is used in commercial, residential, and specialty applications. The sheer simplicity of patterned glass makes it popular for interior design.</h6>
                                                <p><b>Thickness:</b><br></p>
                                                <p><b>Standard Size:</b><br></p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn btn-primary me-2" data-bs-toggle="collapse" data-bs-target="#accordion7" aria-expanded="false" aria-controls="accordion7">Close</button>
                                                    <button type="button" class="btn btn-outline-danger">Order Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/glass-mfg/wiredglass.jpg') }}" class="card-img-top" alt="Card 11" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">WIRED GLASS</h5>
                                        <p class="card-text">Wired glass is a type of glass wherein a wire mesh is inserted during production...</p>
                                        <!-- Accordion button -->
                                        <a class="btn btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#accordion8" aria-expanded="false" aria-controls="accordion8">
                                            More Details <i class="fa-solid fa-chevron-down ml-3" style="font-size: 10px;"></i>
                                        </a>
                                        <!-- Accordion content -->
                                        <div id="accordion8" class="collapse mt-3">
                                            <div class="accordion-body">
                                                <h6>Wired glass is a type of glass wherein a wire mesh is inserted during production.
                                                    It has an impact resistance similar to that of normal glass, but in case of breakage, the mesh retains the pieces of glass.
                                                    This product is traditionally accepted as low-cost fire-resistant glass.</h6>
                                                <p><b>Thickness:</b><br></p>
                                                <p><b>Standard Size:</b><br></p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn btn-primary me-2" data-bs-toggle="collapse" data-bs-target="#accordion8" aria-expanded="false" aria-controls="accordion8">Close</button>
                                                    <button type="button" class="btn btn-outline-danger">Order Now</button>
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
    </section>

    <section id="awards" class="container">
        <div class=" card container py-5 mt-5 fade-in-up">
            <div class="row justify-content-center align-items-center">
                <!-- Left Column -->
                <div class="col-lg-6">
                    <div class=" d-flex justify-content-center align-items-center h-100">
                        <img src="https://www.pfg.com.ph/images/awards/awards.jpg" alt="Philippines" class="img-fluid rounded-lg" style="padding: 20px;">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-6 py-3">
                    <div class="our-story">
                        <h2 class="fw-bold" style="color: #7E1416;">Awards and Recognition</h2>
                        <hr style="border-top: 3px solid #920B12; width: 150px; ">
                        <p>Honoring Excellence: Celebrating our Legacy of Innovation and Quality in Glass and Aluminum Solutions.</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Outstanding Environmental Performer Award (PEZA)</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>2006 E3 Excellence in Ecology and Economy</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Don Emilio Abello Energy Efficiency Awards</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Dangal ng Pasig Award</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Excellence in Ecology and Economy Award</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accordion Section -->
    @include ('plus.accordion')
    <!-- End of Accordion -->

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    <!-- Chatbot -->
    @include ('plus.chatbot')
    <!-- End of Chatbot -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->

    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>