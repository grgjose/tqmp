<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bullet Proofing Manufacturing</title>

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

    <!-- Services -->
    <section id="services" class="py-4">
        <div class="container text-center">
            <!-- Badge -->
            <span class="badge text-white mb-2" style="background-color: #950101;">Our Services</span>
            <!-- Heading -->
            <h2 class="fw-bold">Bullet Proofing</h2>
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

    <!-- Bullet Proofing Section -->
    <div class="container py-4">
        <section class="custom-section fade-in">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Text Column -->
                    <div class="col-md-6 text-center text-md-start">
                        <h2 class="fw-bold">Bullet Proofing</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis
                            lacus faucibus, placerat magna sed, lacinia enim. Maecenas vitae fringilla metus, ac
                            dignissim elit.</p>
                        <button type="button" class="btn btn-danger">
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
    </div>
    <!-- Bullet Proofing Section -->



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
