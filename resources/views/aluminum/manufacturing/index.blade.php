<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
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
                    <p class="text-muted"> We not just developing aluminum profile we are structuring integrity, professionalism and excellence to make win-win circumstances to all of us. .</p>
                    <!-- <button type="button" class="btn btn-danger">
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
                Raw Material Procurement > Mold Design and Processing > Extrusion Processing > Quality Inspection > Finished Product Packaging
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
                                    <img src="{{ asset('storage/aluminum/01.jpg') }}" class="card-img-top" alt="Card 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Angle Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 8 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/02.jpg') }}" class="card-img-top" alt="Card 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Storefront Components</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 9 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/03.jpg') }}" class="card-img-top" alt="Card 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Storefront Components</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 10 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/04.jpg') }}" class="card-img-top" alt="Card 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Storefront Components</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 11 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/05.jpg') }}" class="card-img-top" alt="Card 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Storefront Components</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 12 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/06.jpg') }}" class="card-img-top" alt="Card 6">
                                    <div class="card-body">
                                        <h5 class="card-title">Screen Door and Windows</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page 2 -->
                    <div class="tab-pane fade" id="page-2" role="tabpanel" aria-labelledby="page-2-tab">
                        <div class="row">
                            <!-- Card 7 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/07.jpg') }}" class="card-img-top" alt="Card 7">
                                    <div class="card-body">
                                        <h5 class="card-title">Sliding Door Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 8 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/08.jpg') }}" class="card-img-top" alt="Card 8">
                                    <div class="card-body">
                                        <h5 class="card-title">Sliding Door Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 9 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/09.jpg') }}" class="card-img-top" alt="Card 9">
                                    <div class="card-body">
                                        <h5 class="card-title">Sliding Door Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 10 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/10.jpg') }}" class="card-img-top" alt="Card 10">
                                    <div class="card-body">
                                        <h5 class="card-title">Sliding Door Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 11 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/11.jpg') }}" class="card-img-top" alt="Card 11">
                                    <div class="card-body">
                                        <h5 class="card-title">Miscellaneous Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 12 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/12.jpg') }}" class="card-img-top" alt="Card 12">
                                    <div class="card-body">
                                        <h5 class="card-title">Swing Door Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page 3 -->
                    <div class="tab-pane fade" id="page-3" role="tabpanel" aria-labelledby="page-3-tab">
                        <div class="row">
                            <!-- Card 7 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/13.jpg') }}" class="card-img-top" alt="Card 13">
                                    <div class="card-body">
                                        <h5 class="card-title">Swing Door Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 8 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/14.jpg') }}" class="card-img-top" alt="Card 14">
                                    <div class="card-body">
                                        <h5 class="card-title">Counter Trim Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 9 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/15.jpg') }}" class="card-img-top" alt="Card 15">
                                    <div class="card-body">
                                        <h5 class="card-title">YC Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 10 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/16.jpg') }}" class="card-img-top" alt="Card 16">
                                    <div class="card-body">
                                        <h5 class="card-title">Vent Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 11 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/17.jpg') }}" class="card-img-top" alt="Card 17">
                                    <div class="card-body">
                                        <h5 class="card-title">Flat Bar Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 12 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/18.jpg') }}" class="card-img-top" alt="Card 18">
                                    <div class="card-body">
                                        <h5 class="card-title">Counter Nosing Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page 4 -->
                    <div class="tab-pane fade" id="page-4" role="tabpanel" aria-labelledby="page-4-tab">
                        <div class="row">
                            <!-- Card 7 -->
                            <div class="col-md-4 mb-4">
                                <div class="card border-0">
                                    <img src="{{ asset('storage/aluminum/19.jpg') }}" class="card-img-top" alt="Card 19">
                                    <div class="card-body">
                                        <h5 class="card-title">Swing Door Sections</h5>

                                        <a href="#" class="btn btn-danger">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination Tabs -->
                <ul class="nav nav-pills justify-content-center mb-4" id="pagination-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="page-1-tab" data-bs-toggle="pill" data-bs-target="#page-1" type="button" role="tab" aria-controls="page-1" aria-selected="true" style="background-color:#172647; color:#fff; margin-right: 10px; font-size: smaller; padding: 5px 10px;">
                            1
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="page-2-tab" data-bs-toggle="pill" data-bs-target="#page-2" type="button" role="tab" aria-controls="page-2" aria-selected="false" style="background-color:#172647; color:#fff; margin-right: 10px; font-size: smaller; padding: 5px 10px;">
                            2
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="page-3-tab" data-bs-toggle="pill" data-bs-target="#page-3" type="button" role="tab" aria-controls="page-3" aria-selected="false" style="background-color:#172647; color:#fff; margin-right: 10px; font-size: smaller; padding: 5px 10px;">
                            3
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="page-4-tab" data-bs-toggle="pill" data-bs-target="#page-4" type="button" role="tab" aria-controls="page-4" aria-selected="false" style="background-color:#172647; color:#fff; font-size: smaller; padding: 5px 10px;">
                            4
                        </button>
                    </li>
                </ul>


            </div>


            <!-- Browse More Button -->
            <!-- <div class="">
                <button type="button" class="btn btn-danger">Order Now</button>
            </div> -->

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