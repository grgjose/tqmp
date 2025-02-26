<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Aluminum Manufacturing | Total Quality Management Products Philippines</title>
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

    <section id="landing-aluminum-profile" class="d-flex align-items-center justify-content-center text-center vh-100"
        style="background: linear-gradient(rgba(23, 38, 71, 0.3), rgba(126, 20, 22, 0.4)),
                    url('storage/aluminum/aluminum-bg.jpg') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3 fade-in-up" style="color: white;">Aluminum Manufacturing</h2>
                    <p class="lead mt-3 fade-in-up" style="color: white;">
                        HSP Paragon Corporation, equipped with both powder coating and anodizing lines, is committed to mass-producing and advancing high-end aluminum profiles.
                        Our facility also features a recycling plant for all types of aluminum scraps, ensuring comprehensive solutions for your aluminum section needs.
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/profile.php?id=100093168407108" class="btn btn-outline-light text-decoration-none fade-in" style="font-size: smaller;">
                            <span><b>Find out more</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-aluminum-profiles">
        <div class="card mb-3 mx-auto mt-5" style="max-width: 1300px;">
            <div class="row g-0 justify-content-center">

                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/logos/master_qui-logo.png') }}"
                        alt="Aluminum Manufacturing" class="img-fluid rounded lg" style="padding: 20px;">
                </div>

                <div class="col-md-8">
                    <div class="card-body py-5">
                        <h2 class="fw-bold" style="color: #7E1416;">About aluminum</h2>
                        <hr style="border-top: 3px solid #920B12; width: 150px; ">
                        <p> Aluminum manufacturing involves refining bauxite ore into alumina, followed by smelting to produce high-quality aluminum.
                            This process yields a lightweight, durable, and versatile metal, essential for construction, transportation, packaging, and various industrial applications.
                            We are not just developing aluminum profiles, we are also structuring integrity, professionalism and excellence to make win-win circumstances to all of us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services-aluminum-profiles" class="py-3 mt-5 fade-in-up">
        <div class="container">
            <div class="text-center">
                <h2 class="fw-bold" style="color: #7E1416;">Aluminum Profiles</h2>
                <p class="">
                    <!-- Raw Material Procurement > Mold Design and Processing > Extrusion Processing > Quality Inspection > Finished Product Packaging -->
                    <img src="{{ asset('storage/aluminum/desc.jpg') }}" alt="Philippines" class="img-fluid rounded lg">
                </p>
            </div>

            <div class="container">
                <div class="tab-content" id="pagination-content">
                    <!-- Page 1 -->
                    <div class="tab-pane fade show active" id="page-1" role="tabpanel" aria-labelledby="page-1-tab">
                        <div class="row">

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/01.jpg') }}" class="card-img-top" alt="TQMP Angle Sections" style="object-fit: cover; width: 100%;border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Angle Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/02.jpg') }}" class="card-img-top" alt="TQMP Storefront Components" style="object-fit: cover; width: 100%;border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Storefront Components</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/03.jpg') }}" class="card-img-top" alt="TQMP Storefront Components" style="object-fit: cover; width: 100%;border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Storefront Components</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/04.jpg') }}" class="card-img-top" alt="TQMP Storefront Components" style="object-fit: cover; width: 100%;border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Storefront Components</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/05.jpg') }}" class="card-img-top" alt="TQMP Storefront Components" style="object-fit: cover; width: 100%;border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Storefront Components</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/06.jpg') }}" class="card-img-top" alt="TQMP Screen Door and Windows" style="object-fit: cover; width: 100%;border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Screen Door and Windows</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
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
                                    <img src="{{ asset('storage/aluminum/07.jpg') }}" class="card-img-top" alt="TQMP Sliding Door Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Sliding Door Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/08.jpg') }}" class="card-img-top" alt="TQMP Sliding Door Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Sliding Door Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/09.jpg') }}" class="card-img-top" alt="TQMP Sliding Door Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Sliding Door Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/10.jpg') }}" class="card-img-top" alt="TQMP Sliding Door Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Sliding Door Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/11.jpg') }}" class="card-img-top" alt="TQMP Miscellaneous Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Miscellaneous Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/12.jpg') }}" class="card-img-top" alt="TQMP Swing Door Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Swing Door Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Page 3 -->
                    <div class="tab-pane fade" id="page-3" role="tabpanel" aria-labelledby="page-3-tab">
                        <div class="row">

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/13.jpg') }}" class="card-img-top" alt="TQMP Swing Door Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Swing Door Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/14.jpg') }}" class="card-img-top" alt="TQMP Counter Trim Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Counter Trim Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/15.jpg') }}" class="card-img-top" alt="TQMP YC Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">YC Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/16.jpg') }}" class="card-img-top" alt="TQMP Vent Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Vent Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/17.jpg') }}" class="card-img-top" alt="TQMP Flat Bar Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Flat Bar Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/18.jpg') }}" class="card-img-top" alt="TQMP Counter Nosing Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Counter Nosing Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Page 4 -->
                    <div class="tab-pane fade" id="page-4" role="tabpanel" aria-labelledby="page-4-tab">
                        <div class="row">

                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-lg">
                                    <img src="{{ asset('storage/aluminum/19.jpg') }}" class="card-img-top" alt="TQMP Swing Door Sections" style="object-fit: cover; width: 100%; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Swing Door Sections</h5>
                                        <a href="#" class="card-button btn btn-danger mt-auto">Order Now</a>
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
                    <li class="nav-item" role="presentation">
                        <button class="pagination-button" id="page-3-tab" data-bs-toggle="pill" data-bs-target="#page-3" type="button" role="tab" aria-controls="page-3" aria-selected="false">
                            3
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="pagination-button" id="page-4-tab" data-bs-toggle="pill" data-bs-target="#page-4" type="button" role="tab" aria-controls="page-4" aria-selected="false">
                            4
                        </button>
                    </li>
                </ul>
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
</body>

</html>