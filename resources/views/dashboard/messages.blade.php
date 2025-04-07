<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TQMP | Messages</title>

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

    <!-- summernotes -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Dashboard</a></li>
                </ul>
                <!--end::Start Navbar Links-->
                <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto">
                    <!--begin::Navbar Search-->

                    <!--end::Navbar Search-->
                    <!--begin::Messages Dropdown Menu-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#">
                            <i class="bi bi-chat-text"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="https://th.bing.com/th/id/OIP.aNuVPko-fipxD4-hwuKSTQHaHl?rs=1&pid=ImgDetMain"
                                            class="img-size-50 rounded-circle me-3" />
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
                                <!--end::Message-->
                            </a>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!--end::Messages Dropdown Menu-->
                    <!--begin::Notifications Dropdown Menu-->
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
                    <!--end::Notifications Dropdown Menu-->

                    <!--begin::User Menu Dropdown-->
                   --{<li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}"
                                class="user-image rounded-circle shadow" />
                            <span class="d-none d-md-inline">{{ $my_user->fname.' '.$my_user->lname }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <!--begin::User Image-->
                            <li class="user-header text-bg-primary">
                                <img
                                    src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}"
                                    class="rounded-circle shadow"
                                    alt="User Image" />
                                <p>
                                    {{ $my_user->fname.' '.$my_user->lname }} - Web Developer
                                    <small>Member since Nov. 2023</small>
                                </p>
                            </li>
                            <!--end::User Image-->
                            <!--begin::Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a href="/logout" class="btn btn-default btn-flat float-end">Sign out</a>
                            </li>
                            <!--end::Menu Footer-->
                        </ul>
                    </li> }--
                    <!--end::User Menu Dropdown-->
                </ul>
                <!--end::End Navbar Links-->
            </div>
            <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        {{--   <aside class="app-sidebar bg-dark shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="./index.html" class="brand-link">
                    <!--begin::Brand Image-->
                    <img src="{{ asset('storage/logos/TQMPLogo.png') }}" alt="TQMP Logo" width="60" class="brand-image opacity-75 shadow">
                    <!--end::Brand Image-->
                    <!--begin::Brand Text-->
                    <span class="brand-text fw-light">TQMPAdmin</span>
                    <!--end::Brand Text-->
                </a>
                <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <!--Sidebar Menu-->
                    <div class="user-panel mt-3 pb-3 d-flex align-items-center">
                        <div class="image">
                            <a href="#"><img src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}" class="rounded-circle shadow" alt="User Image" /></a>
                        </div>
                        <div class="info ms-3">
                            <a href="#" class="d-block" style="text-decoration: none;">{{ $my_user->fname.' '.$my_user->lname }}</a>
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
            <!--end::Sidebar Wrapper-->
        </aside> --}}
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--App Content Header-->
            <div class="app-content-header">
                <!--Container-->

                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="mx-auto">

                            <div class="card-header bg-white">
                                <h3 class="mb-0">Messages</h3>
                            </div>

                               <!-- Work Notes List -->
                    <div class="row mt-3">
                        <!-- Left Column -->
                        <div class="col-md-4">
                            <!-- Basic Information Section -->
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-md-12">
                                        <div class="row g-2">
                                            <div class="col-md-6">
                                                <label class="form-label small">Quotation ID</label>
                                                <input type="text" class="form-control form-control-sm">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label small">Status</label>
                                                <input type="text" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label small">Created Date</label>
                                        <input type="datetime-local" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label small">Last Updated</label>
                                        <input type="datetime-local" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>

                            <!-- Title and Description -->
                            <div class="mb-3">
                                <label class="form-label small">Title/Subject</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Inital Message</label>
                                <textarea class="form-control form-control-sm" rows="2"></textarea>
                            </div>

                            <!-- Priority and Severity -->
                            <div class="row g-2 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label small">Size</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small">Color</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-8">
                            <div class="card-body p-0" style="position: relative; height: 450px; overflow-y: auto;" data-bs-spy="scroll" data-bs-target="#scrollspy-nav" data-bs-offset="20">

                                <!-- Note 0 -->
                                <div id="note-0" class="border-end border-secondary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">TQ</div>
                                            <div class="ms-2">
                                                <strong>Default</strong>
                                                <div class="text-muted small"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-secondary me-1">Default Message</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">[Internal Note] Please wait for the Sales Representative's Verification. The Representative will message here in a bit. It is possible that the Representative will call you on your designated number for clarification.</p>
                                    </div>
                                </div>


                                <!-- Note 1 -->
                                <div id="note-1" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
                                            <div class="ms-2">
                                                <strong>John Doe</strong>
                                                <div class="text-muted small">Today, 10:30 AM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary me-1">Customer</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">Contacted the user and walked them through the password reset process. User confirmed they can now log in successfully.</p>
                                    </div>
                                </div>

                                <!-- Note 2 -->
                                <div id="note-2" class="border-end border-danger border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">SR</div>
                                            <div class="ms-2">
                                                <strong>Sales Representative</strong>
                                                <div class="text-muted small">Yesterday, 3:45 PM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger me-1">Representative</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">[Internal Note] This appears to be related to the ongoing authentication system issues. Escalating to L2 support.</p>
                                    </div>
                                </div>

                                <!-- Note 3 -->
                                <!-- {{-- <div id="note-3" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
                                            <div class="ms-2">
                                                <strong>John Doe</strong>
                                                <div class="text-muted small">Yesterday, 11:15 AM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary me-1">Public</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">User reported being unable to reset password. Verified account status is active. Reset link was sent but user reports not receiving it.</p>
                                        <p class="mt-2 mb-0"><strong>Next Steps:</strong> Check email logs for the reset request.</p>
                                    </div>
                                </div> --}} -->

                                  <!-- Note 4 -->
                                  <!-- {{-- <div id="note-4" class="border-end border-danger border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">SR</div>
                                            <div class="ms-2">
                                                <strong>Sales Representative</strong>
                                                <div class="text-muted small">Yesterday, 3:45 PM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger me-1">Private</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">[Internal Note] This appears to be related to the ongoing authentication system issues. Escalating to L2 support.</p>
                                    </div>
                                </div> --}} -->

                                 <!-- Note 5 -->
                                 <!-- {{-- <div id="note-3" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
                                            <div class="ms-2">
                                                <strong>John Doe</strong>
                                                <div class="text-muted small">Yesterday, 11:15 AM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary me-1">Public</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">User reported being unable to reset password. Verified account status is active. Reset link was sent but user reports not receiving it.</p>
                                        <p class="mt-2 mb-0"><strong>Next Steps:</strong> Check email logs for the reset request.</p>
                                    </div>
                                </div> --}} -->

                                  <!-- Note 6 -->
                                  <!-- {{-- <div id="note-4" class="border-end border-danger border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">SR</div>
                                            <div class="ms-2">
                                                <strong>Sales Representative</strong>
                                                <div class="text-muted small">Yesterday, 3:45 PM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger me-1">Private</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">[Internal Note] This appears to be related to the ongoing authentication system issues. Escalating to L2 support.</p>
                                    </div>
                                </div> --}} -->
                            </div>
                        </div>
                    </div>

                    <div class="card-footer p-0">
                        <div id="summernote"></div>
                        <div class="p-3 bg-light d-flex justify-content-between">
                            <div>
                                {{-- <button class="btn btn-sm btn-outline-secondary me-2"> <i class="fas fa-paperclip me-1"></i>Attach File </button>
                                <button class="btn btn-sm btn-outline-secondary me-2"> <i class="fas fa-history me-1"></i>View History </button>
                                <button class="btn btn-sm btn-outline-secondary"> <i class="fas fa-print me-1"></i>Print Notes </button> --}}
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary">Send Message</button>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>


                    <!--end::Container-->
                </div>
                <!--end::App Content-->
        </main>
        <!--end::App Main-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->

    <!-- JS for Scrollspy -->
    <script>
        // Initialize ScrollSpy
        var scrollSpy = new bootstrap.ScrollSpy(document.querySelector('.card-body'), {
            target: '#scrollspy-nav'
        });

        // Optional: Smooth scrolling for the navigation links
        document.querySelectorAll('#notes-admin .nav-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>

    <!-- Datatable Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

    <!-- Summernotes Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    <!--Third Party Plugin(OverlayScrollbars)-->
    <script
        src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
        crossorigin="anonymous"></script>

    <!--Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <!--Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!--Required Plugin(AdminLTE)-->
    <script src="{{ asset('storage/dist/js/adminlte.js') }}"></script>

    <!--OverlayScrollbars Configure-->
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

    <!-- Summernotes JS -->
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Add a message...',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture']],
                    ['view', ['codeview', 'help']]
                ],
                callbacks: {
                    onInit: function() {
                        // Add private note switch to the right side of the toolbar
                        const toolbar = $('.note-toolbar');
                        const switchHtml = `
                        <div class="private-note-switch d-flex align-items-center me-2 mt-2 mb-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="privateNote">
                                <label class="form-check-label ms-2" for="privateNote">Private Note</label>
                            </div>
                        </div>
                    `;
                        toolbar.append(switchHtml);

                        // Set initial border
                        updateNoteBorder();

                        // Handle private note toggle
                        $('#privateNote').change(function() {
                            updateNoteBorder();
                        });

                        function updateNoteBorder() {
                            const editor = $('#summernote');
                            if ($('#privateNote').is(':checked')) {
                                editor.next('.note-editor').css('border-left', '4px solid #dc3545');
                            } else {
                                editor.next('.note-editor').css('border-right', '4px solid #0d6efd');
                            }
                        }
                    }
                }
            });
        });
    </script>
    <script>
        new DataTable('#example');
    </script>
    <!--end::Script-->
</body>
<!--end::Body-->

</html>