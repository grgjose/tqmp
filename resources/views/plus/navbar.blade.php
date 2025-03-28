<div class="sticky-top" style="background-color: #7E1416;">
    <!-- Logo and Header Text -->
    <div class="container text-center">
        <div class="row justify-content-center align-items-center py-2">
            <!-- Logo and Text for larger screens -->
            <div class="col-auto d-flex align-items-center d-none d-md-flex justify-content-center">
                <!-- Logo -->
                <a href="/" class="navbar-brand d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="{{ asset('storage/logos/TQMPLogo-Yellow.png') }}" alt="Header Image" width="80">
                </a>
                <!-- Header Text -->
                <p class="lead ms-3 mb-0" style="font-weight: bold; font-size: 1.2rem; color: white;">
                    TOTAL QUALITY MANUFACTURING PRODUCTS PHILIPPINES CORPORATION
                </p>
            </div>
            <!-- Logo for smaller screens -->
            <div class="col-auto d-md-none">
                <a href="/" class="navbar-brand d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="{{ asset('storage/logos/TQMPLogo-Yellow.png') }}" alt="Header Image" width="60">
                </a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md sticky-top py-3" aria-label="Navbar example">
        <div class="container">
            <button class="navbar-toggler mb-2 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-3 active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="bulletproofingDropdown" data-bs-toggle="dropdown" aria-expanded="false">Bullet Proofing</a>
                        <ul class="dropdown-menu" aria-labelledby="bulletproofingDropdown">
                            <li><a class="dropdown-item" href="/bulletproofing">Bullet Proof Armouring</a></li>
                            <li><a class="dropdown-item" href="#">Benefits</a></li>
                            <li><a class="dropdown-item" href="#">Videos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="glassMfgDropdown" data-bs-toggle="dropdown" aria-expanded="false">Glass MFG</a>
                        <ul class="dropdown-menu" aria-labelledby="glassMfgDropdown">
                            <li><a class="dropdown-item" href="/glassmanufacturing">Glass Manufacturing</a></li>
                            <li><a class="dropdown-item" href="#">Products</a></li>
                            <li><a class="dropdown-item" href="#">Awards</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="aluminumMfgDropdown" data-bs-toggle="dropdown" aria-expanded="false">Aluminum MFG</a>
                        <ul class="dropdown-menu" aria-labelledby="aluminumMfgDropdown">
                            <li><a class="dropdown-item" href="/aluminummanufacturing">Aluminum MFG</a></li>
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li><a class="dropdown-item" href="#">Aluminum Profiles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="glassPDropdown" data-bs-toggle="dropdown" aria-expanded="false">Glass Processing</a>
                        <ul class="dropdown-menu" aria-labelledby="glassPDropdown">
                            <li><a class="dropdown-item" href="/glassprocessing">Glass Processing</a></li>
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li><a class="dropdown-item" href="#">Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="gentradeDropdown" data-bs-toggle="dropdown" aria-expanded="false">Other Products</a>
                        <ul class="dropdown-menu" aria-labelledby="gentradeDropdown">
                            <li><a class="dropdown-item" href="/gentrade">Architectural Hardwares</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/contact">Contact</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    @if($my_user == null)
                    <button type="button" class="card-button btn btn-danger mt-auto d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="fas fa-user me-2"></i> Login
                    </button>
                    @else
                    <a href="/cart" class="card-button btn btn-primary mt-auto me-2 d-none d-sm-block">
                        <i class="fas fa-shopping-cart me-2"></i> Cart
                    </a>
                    <a href="/logout" class="card-button btn btn-danger mt-auto d-none d-sm-block">
                        <i class="fas fa-user me-2"></i> Logout
                    </a>
                    @endif

                    <div class="d-flex flex-column w-100 d-sm-none">
                        @if($my_user == null)
                        <button type="button" class="card-button btn btn-danger mt-auto w-100" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-user me-2"></i> Login
                        </button>
                        @else
                        <a href="/cart" class="card-button btn btn-primary mt-auto mb-2 w-100">
                            <i class="fas fa-shopping-cart me-2"></i> Cart
                        </a>
                        <a href="/logout" class="card-button btn btn-danger mt-auto w-100">
                            <i class="fas fa-user me-2"></i> Logout
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center fw-bold text-danger pt-3">Login</h2>
                <p class="text-center text-muted mb-4">Access your account</p>
                <!-- Login Form -->
                <form action="/login" method="post">
                    @csrf
                    <!-- Email Input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="loginEmail" name="email" class="form-control" placeholder="Email address" required />
                    </div>

                    <!-- Password Input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" name="password" class="form-control" placeholder="Password" required />
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" />
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="text-decoration-none text-danger">Forgot password?</a>
                    </div>

                    <!-- Submit Button -->
                    <input type="submit" class="card-button btn btn-danger mt-auto btn-block w-100 mb-3" value="Login">

                    <!-- Register Link -->
                    <p class="text-center small">
                        Don't have an account? <a href="/register" class="text-danger text-decoration-none">Register Now!</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>