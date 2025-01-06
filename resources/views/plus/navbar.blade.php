<!-- Style -->
@include('plus.style')
<!-- End of Style -->

<style>
    /* Base navbar style */
    .navbar {
        background-color: #FFFFFF;
        /* White background */
        transition: background-color 0.3s ease-in-out;
        /* Smooth transition */
    }

    /* Change the navbar color on scroll */
    .navbar.scrolled {
        background-color: rgba(23, 38, 71, 0.9);
        /* Dark background when scrolled */
    }

    .nav-link {
        color: #1F2532;
        /* Initial color for navbar links */
        transition: color 0.3s;
    }

    /* Change nav-link color on scroll */
    .navbar.scrolled .nav-link {
        color: #FFFFFF;
        /* Change link color to white when scrolled */
    }

    .navbar.scrolled .nav-link.active {
        background-color: rgba(255, 255, 255, 0.2);
        /* Highlight active link when scrolled */
        border-radius: 4px;
        color: #FFFFFF;
        /* Ensure active link text is white */
    }

    /* Ensuring text color is visible on mobile */
    .navbar-toggler {
        color: #7E1416;
        /* Ensures toggler icon is visible */
    }

    /* Adjust dropdown menu items */
    .dropdown-menu {
        /* background-color: #FFFFFF; */
        /* Dropdown background */
        border: none;
    }

    .dropdown-item {
        color: #172647 !important;
        /* Dropdown items color */
    }

    .dropdown-item:hover {
        background-color: rgba(126, 20, 22, 0.1);
        /* Light hover effect */
        color: #172647;
    }
</style>


<!-- <script>
    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script> -->


<nav class="navbar navbar-expand-md sticky-top navbar-dark" aria-label="Navbar example">
    <div class="container">
        <a href="/" class="navbar-brand d-inline-flex link-body-emphasis text-decoration-none">
            <img src="{{ asset('storage/logos/TQMPLogo.png') }}" alt="Header Image" class="header" width="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-danger"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent" style="background-color: none;">
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
                        aria-expanded="false">Other Products</a>
                    <ul class="dropdown-menu dropdown-menu-sm">
                        <li><a class="dropdown-item" href="/gentrade">Trading</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="/about">About Us</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link px-2" href="/faqs">FAQs</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link px-2" href="/contact">Contact Us</a>
                </li>
            </ul>

            <!-- Cart and Login Buttons -->
            <div class="d-flex align-items-center">
                <a href="/cart"
                    class="d-flex align-items-center justify-content-center text-decoration-none me-2 btn btn-outline-danger"
                    style="font-size: smaller;">
                    <i class="fas fa-shopping-cart me-1"></i> <span>Cart</span>
                </a>
                <a href="/login"
                    class="d-flex align-items-center justify-content-center text-decoration-none btn btn-outline-primary"
                    style="font-size: smaller;">
                    <i class="fas fa-user me-1"></i> <span>Login</span>
                </a>
            </div>
        </div>
    </div>
</nav>