<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<!-- Style -->
@include('plus.style')
<!-- End of Style -->

<nav class="navbar navbar-expand-md sticky-top navbar-dark" aria-label="Navbar example">
    <div class="container">
        <a href="/" class="navbar-brand d-inline-flex link-body-emphasis text-decoration-none">
            <img src="{{ asset('storage/logos/TQMPLogo.png') }}" alt="Header Image" class="header" width="80">
        </a>
        <button class="navbar-toggler" style="background-color: #172647;" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-danger"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-2 active" aria-current="page" href="/" style="color: #172647;">Home</a>
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
                    class="d-flex align-items-center justify-content-center text-decoration-none me-2 btn btn-danger"
                    style="font-size: smaller;">
                    <i class="fas fa-shopping-cart me-1"></i> <span>Cart</span>
                </a>
                <a href="/login"
                    class="d-flex align-items-center justify-content-center text-decoration-none btn btn-danger"
                    style="font-size: smaller;">
                    <i class="fas fa-user me-1"></i> <span>Login</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- <script>
    document.querySelectorAll('.dropdown-toggle').forEach((dropdown) => {
        dropdown.addEventListener('click', (e) => {
            e.preventDefault();
            const menu = dropdown.nextElementSibling;
            menu.classList.toggle('show'); // Toggle the visibility
        });
    });
</script> -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

