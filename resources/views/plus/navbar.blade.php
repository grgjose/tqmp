<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Header -->
<!-- <nav class="navbar navbar-expand-md bg-body-tertiary sticky-top" aria-label="Navbar example">
    <div class="container">
        <a href="/" class="navbar-brand d-inline-flex link-body-emphasis text-decoration-none">
            <img src="{{ asset('storage/logos/TQMPLogo.png') }}" alt="Header Image" class="header" width="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-2 active" aria-current="page" href="/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/#" data-bs-toggle="dropdown"
                        aria-expanded="false">Bullet Proofing</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/bulletproofing">Bullet Proof Armouring</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Glass MFG</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/glassmanufacturing">Glass Manufacturing</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Aluminum MFG</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/aluminummanufacturing">Aluminum Manufacturing</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Glass Processing</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/glassprocessing">Glass Processing</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Gen. Trade</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/gentrade">Trading</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="/faqs">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="/contact">Contact Us</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <a href="/cart"
                    class="d-flex align-items-center justify-content-center text-decoration-none me-2"
                    style="padding: 0.5rem 1rem; border: 1px solid #7E1416; border-radius: 5px; background-color: #7E1416; color: #fff;">
                    <i class="fas fa-shopping-cart me-1"></i> <span>Cart</span>
                </a>
                <a href="/login"
                    class="d-flex align-items-center justify-content-center text-decoration-none"
                    style="padding: 0.5rem 1rem; border: 1px solid #172647; border-radius: 5px; background-color: #172647; color: #fff;">
                    <i class="fas fa-user me-1"></i> <span>Login</span>
                </a>
            </div>
        </div>
    </div>
</nav> -->
<!-- End of Header -->

<style>
    /* Semi-transparent navbar style */
    .navbar {
        background-color:#7E1416; /* Semi-transparent black */
        backdrop-filter: blur(8px); /* Optional: Adds a blurred background effect */
        transition: background-color 0.3s ease-in-out; /* Smooth transition */
    }

    /* Optional: Change the navbar color on scroll */
    .navbar.scrolled {
        background-color: rgba(126, 20, 22, 0.9); /* Slightly less transparent when scrolled */
    }

    .nav-link {
        color: #EACF68 !important; /* Ensures the links are white for better readability */
    }

    /* .navbar-brand img {
        filter: brightness(0) invert(1); 
    } */

    .dropdown-menu {
        background-color: #FFFFFF; /* Dropdown background */
        border: none;
    }

    .dropdown-item {
        color: #172647 !important; /* Dropdown items white */
    }

    .dropdown-item:hover {
        background-color: rgba(126, 20, 22, 0.1); /* Light hover effect */
        color: #172647;
    }
</style>

<script>
    // Add 'scrolled' class when the page is scrolled
    window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
</script>

<nav class="navbar navbar-expand-md sticky-top navbar-dark" aria-label="Navbar example">
    <div class="container">
        <a href="/" class="navbar-brand d-inline-flex link-body-emphasis text-decoration-none">
            <img src="{{ asset('storage/logos/TQMPLogo-Yellow.png') }}" alt="Header Image" class="header" width="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-2 active" aria-current="page" href="/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/#" data-bs-toggle="dropdown"
                        aria-expanded="false">Bullet Proofing</a>
                    <ul class="dropdown-menu dropdown-menu-sm">
                        <li><a class="dropdown-item" href="/bulletproofing">Bullet Proof Armouring</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Glass MFG</a>
                    <ul class="dropdown-menu dropdown-menu-sm">
                        <li><a class="dropdown-item" href="/glassmanufacturing">Glass Manufacturing</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Aluminum MFG</a>
                    <ul class="dropdown-menu dropdown-menu-sm">
                        <li><a class="dropdown-item" href="/aluminummanufacturing">Aluminum Manufacturing</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Glass Processing</a>
                    <ul class="dropdown-menu dropdown-menu-sm">
                        <li><a class="dropdown-item" href="/glassprocessing">Glass Processing</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Gen. Trade</a>
                    <ul class="dropdown-menu dropdown-menu-sm">
                        <li><a class="dropdown-item" href="/gentrade">Trading</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="/faqs">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="/contact">Contact Us</a>
                </li>
            </ul>

            <!-- Cart and Login Buttons -->
            <div class="d-flex align-items-center">
                <a href="/cart"
                    class="d-flex align-items-center justify-content-center text-decoration-none me-2 btn btn-outline-warning" 
                    style="font-size: smaller;">
                    <i class="fas fa-shopping-cart me-1"></i> <span>Cart</span>
                </a>
                <a href="/login"
                    class="d-flex align-items-center justify-content-center text-decoration-none btn btn-outline-warning++++++++"
                    style="font-size: smaller;">
                    <i class="fas fa-user me-1"></i> <span>Login</span>
                </a>
            </div>
        </div>
    </div>
</nav>
