<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glass Processing</title>
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
                    url('https://images.pexels.com/photos/3736110/pexels-photo-3736110.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3" style="color: white;">Glass Processing</h2>
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

    <!-- Glass Processing Section -->
    <section class="custom-section fade-in py-5 align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="fw-bold">Glass Processing</h2>
                    <p class="text-muted">Pioneer Float Glass Manufacturing Inc. (PFGMI) is the leading flat glass manufacturer in the Philippines.</p>
                    <p class="text-muted">Established in 1958 under the former name of Republic Glass Corporation, and eventually became a wholly owned subsidiary of AGC in 2001 adopting the company name AGC Flat Glass Philippines Inc. In 2017, TQMP Glass Manufacturing Corp. acquired 100% of the AGPH shares thus becaming the torch bearer for the flat glass industry in the Philippines.</p>
                    <button type="button" class="btn btn-danger">
                        Get Started
                    </button>
                </div>

                <!-- Image Column -->
                <div class="col-md-6 text-center">
                    <div class="position-relative">
                        <img src="{{ asset('storage/logos/pgpsi-logo.png') }}"
                            alt="Philippines" class="img-fluid rounded lg">
                        <div
                            class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-opacity-50 transition-opacity">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Glass Processing Section -->

    <!-- Line -->
    <div class="container text-center">
        <hr style="width: 30%;  margin: 20px auto;">
    </div>
    <!-- End of Line -->

    <!-- Services -->
    <section id="services" class="py-4">
        <div class="container text-center">
            <!-- Heading -->
            <h2 class="fw-bold">List of Process</h2>
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
                        <img src="https://lh6.googleusercontent.com/Ab4O3T2VOIvE6duGpYFPKbx6z1y6wBOv2dOpbD_sQ-OFN5K_Qem5KLSHjcJ1Q4oCvj3GaOhXuafeZ97ITEmkEUfrF7SSw5YINbtqrFgNvMunlc5BBBpX788x121U87wWbQ=w1280"
                            alt="Category 1" class="card-img-top rounded" height="300">
                        <div class="card-body">
                            <h5 class="fw-bold">Tempered Glass</h5>
                            <p class="text-muted"> Fully tempered glass is a unique glazing material. It is about 3 to 5 times stronger than an ordinary or annealed glass of the same thickness and configuration.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://lh6.googleusercontent.com/Kk1TT2tf7vKV8OXxGxjnpYvBqV7KRGbrrnLGvNKv1Z4HNPvu5bOkba12r0SwivWeaXig8GD8wfLPfMaouBWEg_W5s1YN4q_4h5PoEkIqmBMgPu3R4uzwyqe30CyAlCT_lA=w1280"
                            alt="Category 1" class="card-img-top rounded" height="300">
                        <div class="card-body">
                            <h5 class="fw-bold">Laminated Glass</h5>
                            <p class="text-muted"> Laminated glass is a multi-functional glazing material that can be used in a variety of applications. It is manufactured by permanently bonding two or more glass panes with layers of polyvinyl butyral (PVB) interlayer, under heat and pressure to produce a single products.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://lh3.googleusercontent.com/BCB9wJ57qZyW4Amzf78j1QmRtfazVr_1zXW-mh-vmaLTVrJ9to--zIi5JhmdqR4TaiPjDIFdiU6feGS9uGonwF6octfMmfK8SiqsHUxy-XuTa6_x-lOVfBsWzI5B5ZWV5A=w1280"
                            alt="Category 1" class="card-img-top rounded" height="300">
                        <div class="card-body">
                            <h5 class="fw-bold">Curved Tempered Glass</h5>
                            <p class="text-muted"> In the same manner with flat tempered glass, curved tempered glass is also resistant to mechanical stresses (bending, impact, etc.) and thermal stresses (temperature difference), without altering the properties of the basic products.</p>
                        </div>
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