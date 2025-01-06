<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Bullet Proofing Manufacturing</title>
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
        style="background: linear-gradient(rgba(23, 38, 71, 0.8), rgba(126, 20, 22, 0.9)), 
                    url('https://images.pexels.com/photos/10981370/pexels-photo-10981370.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Master</h2>
                    <h2 class="fw-bold display-3" style="color: white;">Armoured Vehicle</h2>
                    <p class="lead mt-3" style="color: white;">
                        Your premier source for top-of-the-line and precision-engineered armoured vehicles
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/people/Master-Armoured-Vehicle/61561429240605/" class="btn btn-outline-light text-decoration-none" style="font-size: smaller;">
                            <span><b>Find out more</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of landing  -->

    <!-- Bullet Proofing Section -->

    <section class="">

        <div class="container mt-5 text-center">
            <!-- Badge -->
            <!-- <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">About Bullet Proofing</span> -->
            <!-- Heading -->
            <!-- <h2 class="fw-bold" style="color: #7E1416;">Benefits of Bullet Proofing</h2> -->

        </div>
        <div class="card mb-3 mx-auto mt-5" style="max-width: 1300px;">
            <div class="row g-0 justify-content-center">
                <!-- Image Column -->
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/logos/master_armoured_vehicle-logo.png') }}"
                        alt="Bullet Proofing" class="img-fluid rounded lg" style="padding: 20px;">
                </div>
                <!-- Text Column -->
                <div class="col-md-8">
                    <div class="card-body py-5">
                    <h2 class="fw-bold" style="color: #7E1416;">Benefits of Bullet Proofing</h2>

                        <ul class="list-unstyled">
                            <li>1. Very good option for additional security.</li>
                            <li>2. Bullets literally "bounce off" to the vehicle.</li>
                            <li>3. It has thick and heavy body, like a tank for protection.</li>
                            <li>4. It has special tires and glass.</li>
                            <li>5. It literally saves lives.</li>
                        </ul>
                        <!-- <p class="card-text"><small class="text-muted">Last updated just now</small></p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bullet Proofing Section -->

    <!-- heroes -->


    <!-- START THE FEATURETTES -->
    <!-- <div class="container">
        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Armoured Car</h2>
                <p class="text-muted">Explore the key attributes that redefine what it means to travel securely without compromising on luxury, featuring our armoured Toyota Land Cruiser Series 300.</p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-1.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Radiator Grill</h2>
                <p class="text-muted">The radiator grill of an armored vehicle is often protected by a grill bumper or guard to reinforce the vehicle's edges and protect the radiator and
                    engine assembly that can also remove debris or vehicles that are blocking the road</p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-2.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Gas Tank Cover</h2>
                <p class="text-muted">We apply a very thick cover for the gas tank to make sure no direct penetration of any fragments.</p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-3.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Upgraded Suspension</h2>
                <p class="text-muted">For improved performance, upgraded suspension components are needed for armored vehicles.
                    Due to their increased weight, armored vehicles require enhanced suspension and braking systems in order to ensure safe stopping and control.
                    In order to keep the car steady and smooth, the suspension must also be able to absorb hits.
                    The size of the car, the condition of the current suspension, and the driving conditions all affect how much the suspension needs to be changed.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-4.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Battery & Fuse Box Cover</h2>
                <p class="text-muted">For added durability protection, we also offer robust covers for the battery and fuse box in addition to the gas tank.</p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-5.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Run Flat Insert</h2>
                <p class="text-muted">When it comes to protection, every detail counts. Our advanced run-flat insert system ensures that even in the most challenging situations,
                    your mobility and safety are not compromised. </p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-6.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Back Door Partition</h2>
                <p class="text-muted">Having a bulletproof at the back door partition is an extra security defense behind/rear part of your vehicle.</p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-7.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="fw-bold">Bullet Catcher</h2>
                <p class="text-muted">Speaking catching the bullet we add this to make sure any fragments that will penetrate will not easily pass thru.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-8.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette align-items-center">
            <div class="col-md-7">
                <h2 class="fw-bold">Premium Leather Seats</h2>
                <p class="text-muted">We are not just giving you a protection, we are also also giving you a satisfaction inside your vehicle by putting premium leather seats.
                    Get in touch with us today and experience the strength of engineering that is built to endure.
                </p>
            </div>
            <div class="col-md-5">
                <div class="position-relative">
                    <img src="{{ asset('storage/logos/bulletproof-9.jpg') }}"
                        alt="Philippines" class="img-fluid rounded lg">
                    <div
                        class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                    </div>
                </div>
            </div>
        </div><br>
    </div> -->
    <!-- /END THE FEATURETTES -->

    <div class="container mt-5 text-center">
        <!-- Badge -->
        <!-- <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Services</span> -->
        <!-- Heading -->
        <h2 class="fw-bold" style="color: #7E1416;">Bullet Proofing Services</h2>
        <p class="text-muted">
            The following are the services offered under bullet proof manufacturing
        </p>
    </div>

    <!-- Updated -->
    <section class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-1.jpg') }}" alt="Armoured Car" style="object-fit: cover; height: 200px;">
                    <!-- <div class="card-body">
                        <h5 class="card-title fw-bold">Armoured Car</h5>
                        <p class="card-text">Explore the key attributes that redefine what it means to travel securely without compromising on luxury, featuring our armoured Toyota Land Cruiser Series 300.</p>
                    </div> -->
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Armoured Car</h6>
                        <p class="card-text">Explore the key attributes that redefine what it means to travel securely without compromising on luxury, featuring our armoured Toyota Land Cruiser Series 300</p>
                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-2.jpg') }}" alt="Radiator Grill" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Radiator Grill</h6>
                        <p class="card-text">An armored vehicle's radiator grill is protected by a bumper or guard, reinforcing edges, safeguarding the radiator, and clearing debris or road-blocking vehicles.</p>
                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-3.jpg') }}" alt="Gas Tank Cover" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Gas Tank Cover</h6>
                        <p class="card-text">A thick gas tank cover is applied to ensure protection, preventing direct penetration of fragments and enhancing the safety and durability of the vehicle.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-4.jpg') }}" alt="Upgraded Suspension" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Upgraded Suspension</h6>
                        <p class="card-text">Armored vehicles require upgraded suspension and brakes to manage weight, ensuring reliable control, enhanced performance, and safe stopping.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-5.jpg') }}" alt="Battery & Fuse Box Cover" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Battery & Fuse Box Cover</h6>
                        <p class="card-text">To ensure added durability, robust covers are available for the battery, fuse box, and gas tank, providing enhanced protection for critical vehicle components</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-6.jpg') }}" alt="Run Flat Insert" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Run Flat Insert</h6>
                        <p class="card-text">Run-flat insert systems ensure mobility and safety in challenging situations, providing uncompromised performance, reliability, and peace of mind.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 7 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-7.jpg') }}" alt="Upgraded Suspension" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="fw-bold">Back Door Partition</h6>
                        <p class="card-text">A bulletproof rear door partition provides extra security, reinforcing the back of your vehicle for enhanced defense and ensuring added protection for passengers and cargo.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 8 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-8.jpg') }}" alt="Battery & Fuse Box Cover" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="fw-bold">Bullet Catcher</h6>
                        <p class="card-text">Ensures any penetrating fragments are contained, preventing them from passing through and enhancing overall vehicle safety and protection.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 9 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-9.jpg') }}" alt="Run Flat Insert" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Premium Leather Seats</h6>
                        <p class="card-text">Offering protection and satisfaction with premium leather seats through exceptional engineering, ensuring comfort inside your vehicle. </p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

        </div>
    </section>

    <!-- <div class="d-flex align-items-center justify-content-center">
        <a href="" class="btn btn-outline-primary text-decoration-none" style="font-size: smaller;">
            <span>Request Quotation</span>
        </a>
    </div> -->



    <!-- <section class="d-flex align-items-center justify-content-center text-center"
        style="background: linear-gradient(rgba(27, 33, 47, 0.9), rgba(126, 20, 22, 0.9)), 
                    url('https://images.pexels.com/photos/10981370/pexels-photo-10981370.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover; height: 500px; color:#fff">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Master Armoured Vehicle</h1>
                <p class="lead ">Your premier source for top-of-the-line and precision-engineered armoured vehicles</p>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="https://www.facebook.com/people/Master-Armoured-Vehicle/61561429240605/" class="btn btn-outline-light text-decoration-none" style="font-size: smaller;">
                        <span><b>Find out more</b></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container">
        <div id="myCarousel" class="carousel slide mb-6 py-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="500px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="500px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="500px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->


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