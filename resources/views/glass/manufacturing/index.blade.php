<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glass MFG</title>

    <!-- Preconnect for External Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="main.css">

    <!-- Scripts -->
    <script src="../assets/js/color-modes.js" defer></script>
    <!-- Optional: Move this to the bottom of the body if it's not critical for rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<style>
    /* Font */
    body {
        font-family: 'Inter', sans-serif;
        font-size: small;
        margin: 0;
        padding: 0;
    }

    /* Header  */
    /* General Button Styling */
    .btn {
        width: 110px;
    }

    .btn-red {
        background-color: #950101;
        color: white;
    }

    .btn-red:hover {
        background-color: #950101;
        opacity: 0.9;
    }

    /* Style for menu items */
    .nav-link {
        color: #1C2033;
        font-weight: normal;
        transition: color 0.3s ease, font-weight 0.3s ease;
    }

    .nav-link:hover,
    .nav-link.active {
        color: #950101;
        font-weight: bold;
    }

    /* Header Styling */
    .sticky-top {
        position: sticky;
        top: 0;
        /* z-index: 1020; */
        background-color: white;
        /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
    }

    .header {
        max-width: 100%;
        height: auto;
    }

    /* Responsive Toggle Button */
    .navbar-toggler {
        border: none;
        outline: none;
        font-size: 1.5rem;
        color: #950101;
        background: none;
        cursor: pointer;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .nav {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .nav-link {
            width: 100%;
            text-align: left;
            padding: 0.5rem 1rem;
        }

        .btn-red {
            width: 100%;
            text-align: center;
            margin-top: 10px;
        }

        .navbar-collapse {
            background-color: white;
            padding: 10px;
        }

        .navbar-toggler {
            display: inline-block;
        }
    }

    @media (min-width: 769px) {
        .navbar-toggler {
            display: none;
        }

        .nav {
            flex-direction: row;
            align-items: center;
        }

        .btn-red {
            width: auto;
            text-align: center;
        }
    }


    /* End of header */

    /* Landing Page Scrolling Animation */
    .custom-section {
        background-color: #f8f9fa;
        /* Light grey background */
        font-family: 'Roboto', sans-serif;
        /* Modern, clean font */
    }

    .text-danger {
        color: #950101 !important;
        /* Consistent color branding */
    }

    button.btn-danger {
        background-color: #950101;
        /* Match primary brand color */
        color: white;
        border: none;
        font-size: smaller;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button.btn-danger:hover {
        background-color: #950101;
        transform: translateY(-2px);
        font-size: smaller;
    }

    .img-fluid {
        border-radius: 10px;
    }

    .image-overlay {
        pointer-events: none;
    }

    .image-overlay.transition-opacity {
        transition: opacity 0.3s ease-in-out;
    }

    .image-overlay.hover-opacity-50:hover {
        opacity: 0.5;
    }

    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* End of Landing Page Scrolling Animation */


    /* About us Page */

    /* Optional: Adds top padding to the text column */
    .text-column {
        padding-top: 50px;
        /* Adjust padding for proper spacing */
    }

    .custom-image {
        border-radius: 0 50px 50px 0;
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .custom-section {
        min-height: 80vh;
        display: flex;
        align-items: center;
    }

    .thumbnail {
        cursor: pointer;
        border: 1px solid #ddd;
        border-radius: 8px;
        width: 100px;
    }

    .thumbnail:hover {
        border-color: #950101;
    }

    /* About us parallax effect */
    /* Parallax Section */
    .parallax-section {
        background-image: url('https://images.pexels.com/photos/159358/construction-site-build-construction-work-159358.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        background-size: cover;
        background-attachment: fixed;
        /* Enables parallax effect */
        background-position: center;
        background-repeat: no-repeat;
        min-height: 500px;
        display: flex;
        align-items: center;
    }

    .parallax-section .container {
        background: rgba(255, 255, 255, 0.8);
        /* Add a white overlay for text readability */
        padding: 2rem;
        border-radius: 10px;
    }

    /* Company Logos Animation  */
    /* Scrolling container */
    .logo-scroller {
        overflow: hidden;
        position: relative;
        white-space: nowrap;
    }

    .logos {
        display: inline-flex;
        gap: 50px;
        /* Space between logos */
        animation: slide 20s linear infinite;
    }

    /* Logos: maintain aspect ratio and size */
    .header-img {
        height: 50px;
        /* Set a consistent height for all logos */
        object-fit: contain;
        /* Ensures logos fit without stretching */
        aspect-ratio: auto;
        /* Automatically maintains the aspect ratio */
    }

    /* Keyframes for infinite sliding */
    @keyframes slide {
        from {
            transform: translateX(0%);
        }

        to {
            transform: translateX(-15%);
        }
    }

    /* End of Company Logos Animation  */
</style>

<body>
    <!-- Style -->
    @include('plus.style')
    <!-- End of Style -->

    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <!-- Glass Manufacturing Section -->
    <div class="container py-4">
        <section class="custom-section fade-in py-5 align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Text Column -->
                    <div class="col-md-6 text-center text-md-start">
                        <h2 class="fw-bold">Glass MFG</h2>
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
            <div class="row row-cols-1 row-cols-md-3 g-4">
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
    <!-- End of Glass Manufacturing Section -->

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
