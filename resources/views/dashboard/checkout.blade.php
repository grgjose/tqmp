<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TQMP | Checkout</title>

    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Total Quality Management Products Philippines" />
    <meta name="author" content="TQMP" />
    <meta name="description" content="Your Partner in Progress: The Marketing Arm of Philippines Glass and Aluminum Conglomerate" />
    <meta name="keywords" content="TQMP, Total Quality Management Products Philippines, aluminum, aluminum manufacturing, bullet proofing, architectural hardware, glass, glass manufacturing, glass processing, TQMP Services" />
    <!--end::Primary Meta Tags-->

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('storage/dist/css/adminlte.css') }}" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Dashboard</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#">
                            <i class="bi bi-chat-text"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="https://th.bing.com/th/id/OIP.aNuVPko-fipxD4-hwuKSTQHaHl?rs=1&pid=ImgDetMain" class="img-size-50 rounded-circle me-3" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            Geneva Garcia
                                            <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                        </h3>
                                        <p class="fs-7">Call me whenever you can...</p>
                                        <p class="fs-7 text-secondary">
                                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#">
                            <i class="bi bi-bell-fill"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="bi bi-envelope me-2"></i> 4 new messages
                                <span class="float-end text-secondary fs-7">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="../../../dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow"  />
                            <span class="d-none d-md-inline">Geneva Garcia</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <li class="user-header text-bg-primary">
                                <img src="../../../dist/assets/img/user2-160x160.jpg" class="rounded-circle shadow"  />
                                <p>
                                    Geneva Garcia - Web Developer
                                    <small>Member since Nov. 2023</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a href="/logout" class="btn btn-default btn-flat float-end">Sign out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <aside class="app-sidebar bg-dark shadow" data-bs-theme="dark">
            <div class="sidebar-brand">
                <a href="./index.html" class="brand-link">
                    <img src="{{ asset('storage/logos/TQMPLogo.png') }}" alt="TQMP Logo" width="60" class="brand-image opacity-75 shadow">
                    <span class="brand-text fw-light">TQMPAdmin</span>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <div class="user-panel mt-3 pb-3 d-flex align-items-center">
                        <div class="image">
                            <a href="#"><img src="https://th.bing.com/th/id/OIP.aNuVPko-fipxD4-hwuKSTQHaHl?rs=1&pid=ImgDetMain" class="img-circle elevation-2"  style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px;"></a>
                        </div>
                        <div class="info ms-3">
                            <a href="#" class="d-block" style="text-decoration: none;">Geneva Garcia</a>
                        </div>
                    </div>
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-header">Menu</li>
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link">
                                        <p><i class="fa-solid fa-chart-line" style="margin-right: 10px;"></i>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-header">Information</li>
                                <li class="nav-item menu-open">
                                    <a href="#" class="nav-link active">
                                        <i class="nav-icon bi bi-speedometer"></i>
                                        <p>
                                            Tables
                                            <i class="nav-arrow bi bi-chevron-right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="/inventory" class="nav-link">
                                                <p><i class="fa-solid fa-warehouse" style="margin-right: 10px;"></i>Inventory</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/order" class="nav-link">
                                                <p><i class="fa-solid fa-store" style="margin-right: 10px;"></i>Orders</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/consumer" class="nav-link active">
                                                <p><i class="fa-solid fa-users" style="margin-right: 10px;"></i>Consumers</p>
                                            </a>
                                        </li>
                                    </ul>
                                <li class="nav-header">Settings</li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <p><i class="fa-solid fa-user-tie" style="margin-right: 10px;"></i>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <p><i class="fa-solid fa-gear" style="margin-right: 10px;"></i>Settings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <p><i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 10px;"></i>Logout</p>
                                    </a>
                                </li>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="container my-5">
                        <h1 class="mb-4 checkout-title fw-bold">Checkout</h1>
                        <div class="row">
                            <div class="col-lg-7">
                                <h4 class="mb-3">Billing Details</h4>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">First name*</label>
                                            <input type="text" class="form-control" id="firstName" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName" class="form-label">Last name*</label>
                                            <input type="text" class="form-control" id="lastName" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address*</label>
                                        <input type="text" class="form-control" id="address" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address2" class="form-label">Address line 2</label>
                                        <input type="text" class="form-control" id="address2">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="country" class="form-label">Country*</label>
                                            <select id="country" class="form-select" required>
                                                <option selected>Choose...</option>
                                                <option>Philippines</option>
                                                <option>United States</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="city" class="form-label">City/Town*</label>
                                            <input type="text" class="form-control" id="city" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="postcode" class="form-label">Postcode / ZIP*</label>
                                            <input type="text" class="form-control" id="postcode" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label">Phone*</label>
                                            <input type="tel" class="form-control" id="phone" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="additionalInfo" class="form-label">Additional Information</label>
                                        <textarea id="additionalInfo" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="createAccount">
                                        <label class="form-check-label" for="createAccount">
                                            Create Account
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="differentAddress">
                                        <label class="form-check-label" for="differentAddress">
                                            Ship to a different address?
                                        </label>
                                    </div>
                                    <h6 class="coupon-text">Apply Coupon to get discount!</h6>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Coupon code">
                                        <button class="btn btn-custom">Apply Code</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-5">
                                <h4 class="mb-3">Your Order</h4>
                                <div class="card mb-4">
                                    <div class="card-header bg-white">
                                        <strong>Product</strong>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/50" class="product-image me-3">
                                                <div>
                                                    <span>Aluminum Glass</span><br>
                                                    <small>Brown XL x 1</small>
                                                </div>
                                            </div>
                                            <span>$36.00</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/50" class="product-image me-3">
                                                <div>
                                                    <span>Windows</span><br>
                                                    <small>Brown XL x 1</small>
                                                </div>
                                            </div>
                                            <span>$36.00</span>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/50" class="product-image me-3">
                                                <div>
                                                    <span>Sliding Door</span><br>
                                                    <small>Brown XL x 1</small>
                                                </div>
                                            </div>
                                            <span>$36.00</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong>Subtotal</strong>
                                            <strong>$108.00</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Shipping Cost (+)</span>
                                            <span>$10.85</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>Discount (-)</span>
                                            <span>$9.00</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong>Total Payable</strong>
                                            <strong>$88.15</strong>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <strong>Payment</strong>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paymentMethod" id="bankTransfer" checked>
                                                <label class="form-check-label" for="bankTransfer">
                                                    Direct Bank Transfer
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paymentMethod" id="cod">
                                                <label class="form-check-label" for="cod">
                                                    Cash on delivery
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paymentMethod" id="onlinePayment">
                                                <label class="form-check-label" for="onlinePayment">
                                                    Online Gateway
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <button class="btn btn-custom w-100">Place Order</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="{{ asset('storage/dist/js/adminlte.js') }}"></script>
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <script>
        new DataTable('#example');
    </script>
</body>
<!--end::Body-->

</html>