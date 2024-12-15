<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gen Trade</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <!-- Preconnect for External Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

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

    <!-- landing  -->
    <section class="d-flex align-items-center justify-content-center text-center min-vh-100"
        style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url('https://images.pexels.com/photos/834892/pexels-photo-834892.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Architectural Hardwares</h2>
                    <p class="lead mt-3" style="color: white;">
                        Your premier source for top-of-the-line and precision-engineered armoured vehicles
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

    <!-- iNTRO Section -->
    <div class="container py-5">
        <section class="fade-in">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Text Column -->
                    <div class="col-md-6 text-center text-md-end">
                        <h2 class="fw-bold">Gen Trade</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis
                            lacus faucibus, placerat magna sed, lacinia enim. Maecenas vitae fringilla metus, ac
                            dignissim elit.</p>
                        <!-- <button type="button" class="btn btn-danger">
                            Get Started
                        </button> -->
                    </div>

                    <!-- Image Column -->
                    <div class="col-md-6 text-center">
                        <div class="position-relative">
                            <img src="{{ asset('storage/logos/TQMPLogo.png') }}"
                                alt="Philippines" class="img-fluid rounded lg">
                            <div
                                class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

    <!-- Doors -->
    <section id="services" class="py-4">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Door Closers and Floor Hinges</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                vestibulum.
                Cras venenatis euismod malesuada. Nulla facilisi. Phasellus euismod purus non nisi cursus, sit amet
                elementum
                lorem egestas. Quisque accumsan lacus at eros gravida, in ultricies mi fermentum.
            </p>
            <!-- Cards Row 1 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/yale yfs-923.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/yale yfs-934.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/yale yfs-8003.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/yale ytdc854.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Cards Row 2 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/gsm-0060.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/gsm-0052.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/gsm-0038.jpg') }}" alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Cards Row 3 -->
            <div class="row mt-6">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/abloy dc420.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/abloy dc477.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Browse See More Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-danger">See More</button>
            </div>
        </div>
    </section>
    <!-- End of Doors -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

    <!-- Patch Fittings -->
    <section id="services" class="py-4">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Patch Fittings</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                vestibulum.
                Cras venenatis euismod malesuada. Nulla facilisi. Phasellus euismod purus non nisi cursus, sit amet
                elementum
                lorem egestas. Quisque accumsan lacus at eros gravida, in ultricies mi fermentum.
            </p>
            <!-- Cards Row 1 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/patch-fittings/abloy 985-35.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/patch-fittings/abloy abp010.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/patch-fittings/abloy acl010.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/patch-fittings/abloy acl020.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Cards Row 2 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/patch-fittings/GSM-0055.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/patch-fittings/GSM-0039.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/patch-fittings/GSM-0050.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/patch-fittings/GSM-0054.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Browse See More Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-danger">See More</button>
            </div>
        </div>
    </section>
    <!-- End of Services -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

    <!-- Handles -->
    <section id="services" class="py-4">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Handles</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                vestibulum.
                Cras venenatis euismod malesuada. Nulla facilisi. Phasellus euismod purus non nisi cursus, sit amet
                elementum
                lorem egestas. Quisque accumsan lacus at eros gravida, in ultricies mi fermentum.
            </p>
            <!-- Cards Row 1 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/handles/THORE C-TYPE HANDLE.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/handles/THORE H-TYPE HANDLE.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/handles/THORE TOWEL HANDLE.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

            </div>

            <!-- Browse See More Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-danger">See More</button>
            </div>
        </div>
    </section>
    <!-- End of Services -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

    <!-- Shower Hinges -->
    <section id="services" class="py-4">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Shower Hinges</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                vestibulum.
                Cras venenatis euismod malesuada. Nulla facilisi. Phasellus euismod purus non nisi cursus, sit amet
                elementum
                lorem egestas. Quisque accumsan lacus at eros gravida, in ultricies mi fermentum.
            </p>
            <!-- Cards Row 1 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0018.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0019.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0020.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0021.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Cards Row 2 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0011.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0012.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0013.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0014.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Browse See More Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-danger">See More</button>
            </div>
        </div>
    </section>
    <!-- End of Shower Hinges -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

    <!-- Shower Glass Clip -->
    <section id="services" class="py-4">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Shower Glass Clips</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                vestibulum.
                Cras venenatis euismod malesuada. Nulla facilisi. Phasellus euismod purus non nisi cursus, sit amet
                elementum
                lorem egestas. Quisque accumsan lacus at eros gravida, in ultricies mi fermentum.
            </p>
            <!-- Cards Row 1 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0001.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0002.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0003.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0004.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Cards Row 2 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0005.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0006.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0007.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0008.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Browse See More Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-danger">See More</button>
            </div>
        </div>
    </section>
    <!-- End of Shower Hinges -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

    <!-- Sliding Shower Emclosure -->
    <section id="services" class="py-4">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Sliding Shower Emclosure</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                vestibulum.
                Cras venenatis euismod malesuada. Nulla facilisi. Phasellus euismod purus non nisi cursus, sit amet
                elementum
                lorem egestas. Quisque accumsan lacus at eros gravida, in ultricies mi fermentum.
            </p>
            <!-- Cards Row 1 -->
            <div class="row mt-6">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="https://lh4.googleusercontent.com/l6L9O1-PJtTnkWzmpDdTedrwiMcZIY9_8A509SF_95CnaT4ZMChMuQhc3ujVwW8lv1Y2grXqmIAURxIALIGvZ7LOUU0axiea2URhZMAY_sohTJOOcUNDqPZF7osjL-sHWw=w1280"
                            alt="Category 1" class="card-img-top rounded" height="auto">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="https://lh6.googleusercontent.com/wivA7QGCQMGhs1Bz-_EIzCM-ZtbOndVUXfESCUABIpmAoUeFUqYZZvYlPtWmdU9bE7ArFrW4E6xq_-_aBTsR9eNtaBm0J-NS3MZnYmWUa1i6GjiJkUodQMBg20jy6cAqig=w1280"
                            alt="Category 1" class="card-img-top rounded"  height="auto">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Browse See More Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-danger">See More</button>
            </div>
        </div>
    </section>
    <!-- End of Sliding Shower Emclosure -->

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