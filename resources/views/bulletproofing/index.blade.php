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

    <!-- Bullet Proofing Section -->
    <div class="container py-4">
        <section class="custom-section fade-in py-5">
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

        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
                <!-- Product 1 -->
                <div class="col">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/300x200" alt="Sliding Door Installation">
                        <h5>Sliding Door Installation</h5>
                        <p class="price">$39.00</p>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/300x200" alt="Glass Installation">
                        <h5>Glass Installation</h5>
                        <p class="price">$39.00</p>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/300x200" alt="Window Installation">
                        <h5>Window Installation</h5>
                        <p class="price">$39.00</p>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/300x200" alt="Hardware">
                        <h5>Hardware</h5>
                        <p class="price">$39.00</p>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/300x200" alt="Aluminum Installation">
                        <h5>Aluminum Installation</h5>
                        <p class="price">$39.00</p>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/300x200" alt="Chemicals">
                        <h5>Chemicals</h5>
                        <p class="price">$39.00</p>
                    </div>
                </div>
            </div>
        </div>
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
