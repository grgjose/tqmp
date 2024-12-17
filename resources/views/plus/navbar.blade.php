<!-- Header -->
<nav class="navbar navbar-expand-md bg-body-tertiary rounded sticky-top" aria-label="Navbar example">
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
            <div class="d-flex mb-2 align-items-center">
                <button type="button" class="btn btn-danger me-2">My Cart</button>
                <button type="button" class="btn btn-primary">Login</button>
            </div>

        </div>
    </div>
</nav>
<!-- End of Header -->