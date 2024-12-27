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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
        style="background: linear-gradient(rgba(23, 38, 71, 0.8), rgba(126, 20, 22, 0.9)), 
                    url('https://images.pexels.com/photos/834892/pexels-photo-834892.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Architectural Hardwares</h2>
                    <p class="lead mt-3" style="color: white;">
                        We are not just looking for wide range of architectural hardware we are aiming for strengthen, endurance and resistance of the product such as THORE Brand.
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

    <!-- Doors -->
    <section id="services" class="py-5 bg-light">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Door Closers and Floor Hinges</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Door closers and floor hinges are hardware that is use to all doors with a self closing feature.
            </p>
            <!-- Cards Row 1 -->
            <!-- <div class="row mt-4">
                
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/yale yfs-923.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
              
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/yale yfs-934.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
       
                    </div>
                </div>
               
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/yale yfs-8003.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
            
                    </div>
                </div>

               
                <div class="col-md-3">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/yale ytdc854.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
              
                    </div>
                </div>
            </div> -->

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
            <!-- <div class="row mt-6">
              
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/abloy dc420.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                 
                    </div>
                </div>
             
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/doors/abloy dc477.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                    
                    </div>
                </div>
            </div> -->

            <!-- Browse Order Now Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-primary">Order Now</button>
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
                Patch Fittings is a accessories to make a frameless door that is usually seen at all facilities like malls.
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

            <!-- Browse Order Now Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-primary">Order Now</button>
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
    <section id="services" class="py-4 bg-light">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Handles</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Glass doors with a specific handle to a specific door to be using.
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

            <!-- Browse Order Now Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-primary">Order Now</button>
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
                Shower hinges is usually applied at shower enclosure can be swing push and pull in 90 degree.
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

            <!-- Browse Order Now Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-primary">Order Now</button>
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
    <section id="services" class="py-4 bg-light">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">Shower Glass Clips</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Shower glass clips usually used in fix panel for a shower enclosure but most of the installer and fabricator use it in other applications such as railings with a support of stainless tube.
            </p>
            <!-- Cards Row 1 -->
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-2">
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
                <div class="col-md-2">
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
                <div class="col-md-2">
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
                <div class="col-md-2">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0004.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-2">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0004.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-2">
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

            <!-- Browse Order Now Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-primary">Order Now</button>
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
                Shower enclosure usually seen in swing, we also have sliding function to space value to a minimal places.
            </p>
            <!-- Cards Row 1 -->
            <div class="row mt-6">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="{{ asset('storage/archi-hardware/sliding-shower/GSM-0102.jpg') }}"
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
                        <img src="{{ asset('storage/archi-hardware/sliding-shower/GSM-0103.jpg') }}"
                            alt="Category 1" class="card-img-top rounded" height="auto">
                        <!-- <div class="card-body">
                            <h5 class="fw-bold">Category 1</h5>
                            <p class="text-muted">8 Products Available</p>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Browse Order Now Button -->
            <div class="mt-4">
                <button type="button" class="btn btn-primary">Order Now</button>
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