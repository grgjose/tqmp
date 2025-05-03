<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TQMP | {{ $title }}</title>

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

    <!-- Toast -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

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
                    <li class="nav-item d-none d-md-block"><a href="/dashboard" class="nav-link">Home</a></li>
                    <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
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
                                            src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}"
                                            class="img-size-50 rounded-circle me-3" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            {{ $my_user->fname.' '.$my_user->lname }}
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
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}"
                                class="user-image rounded-circle shadow" />
                            <span class="d-none d-md-inline">{{ $my_user->fname.' '.$my_user->lname }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <!--begin::User Image-->
                            <li class="user-header ">
                                <img
                                    src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}"
                                    class="rounded-circle shadow"
                                    alt="User Image" />
                                <div class="container">
                                    <h4 class="mb-0">{{ $my_user->fname.' '.$my_user->lname }}</h4>
                                    <p class="mb-0">Sales Agent</p>
                                </div>
                            </li>
                            <!--end::User Image-->
                            <!--begin::Menu Footer-->
                            <li class="user-footer d-flex flex-column">
                                <div class="dropdown-divider"></div>
                                <a href="#" class="btn btn-default mb-2">Profile</a>
                                <a href="#" onclick="document.getElementById('logoutForm').submit(); return false;" class="btn btn-default">Sign out</a>
                            </li>
                            <!--end::Menu Footer-->
                        </ul>
                    </li>
                    <!--end::User Menu Dropdown-->
                </ul>
                <!--end::End Navbar Links-->
            </div>
            <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-dark shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="/dashboard" class="brand-link">
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
                    <div class="user-panel mt-3 pb-3 d-flex align-items-center">
                        <div class="image">
                            <a href="#"><img src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}" class="img-circle elevation-2" alt="User Image" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px;"></a>
                        </div>
                        <div class="info ms-3">
                            <a href="#" class="d-block" style="text-decoration: none;">{{ $my_user->fname.' '.$my_user->lname }}</a>
                        </div>
                    </div>
                    <ul class="nav sidebar-menu nav-sidebar flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-sidebar menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-header">Menu</li>
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link">
                                        <p><i class="fa-solid fa-chart-line" style="margin-right: 10px;"></i>Dashboard</p>
                                    </a>
                                </li>
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
                                    <a href="/quotations" class="nav-link">
                                        <p><i class="fa-solid fa-pen-ruler" style="margin-right: 10px;"></i>Quotations</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/consumer" class="nav-link">
                                        <p><i class="fa-solid fa-users" style="margin-right: 10px;"></i>Consumers</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/approvals" class="nav-link">
                                        <p><i class="fa-solid fa-user-check" style="margin-right: 10px;"></i>Approvals</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/inquiries" class="nav-link">
                                        <p><i class="fa-solid fa-circle-question" style="margin-right: 10px;"></i>Inquiries</p>
                                    </a>
                                </li>
                                @if($my_user->usertype == 1)
                                <li class="nav-header">Settings</li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-speedometer"></i>
                                        <p>
                                            Settings
                                            <i class="nav-arrow bi bi-chevron-right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="/users" class="nav-link">
                                                <p><i class="fa-solid fa-users" style="margin-right: 10px;"></i>Active Users</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/products" class="nav-link">
                                                <p><i class="fa-solid fa-tags" style="margin-right: 10px;"></i>Products</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/product-categories" class="nav-link">
                                                <p><i class="fa-solid fa-icons" style="margin-right: 10px;"></i>Product Categories</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/product-variants" class="nav-link">
                                                <p><i class="fa-solid fa-palette" style="margin-right: 10px;"></i>Product Variants</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/catalogue" class="nav-link">
                                                <p><i class="fa-solid fa-book-open" style="margin-right: 10px;"></i>Catalogue</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <a href="/#" onclick="document.getElementById('logoutForm').submit(); return false;" class="nav-link">
                                        <p><i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 10px;"></i>Logout</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    <!-- <li class="nav-item">
                            <a href="/userprofiles" class="nav-link">
                                <p>User Profiles</p>
                            </a>
                        </li> -->
                    </ul>
                </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->

        <form style="display:none;" id="logoutForm" action="/logout" method="POST">@csrf</form>

        @include($main_content)

    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->


    <!-- Datatable Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

    <!-- JS for Buttons -->
    <script>
        function showInputBox(action) {
            const inputBoxContainer = document.getElementById('inputBoxContainer');
            const inputBoxLabel = document.getElementById('inputBoxLabel');
            inputBoxContainer.style.display = 'block';
            if (action === 'approve') {
                inputBoxLabel.innerHTML = 'Reason for Approval: <span style="color: red;">*</span>';
            } else if (action === 'reject') {
                inputBoxLabel.innerHTML = 'Reason for Rejection: <span style="color: red;">*</span>';
            }
            // Scroll to the input box
            document.getElementById('actions').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function saveInput() {
            const inputBox = document.getElementById('inputBox');
            const inputValue = inputBox.value.trim();
            if (inputValue) {
                alert('Input saved: ' + inputValue);
                inputBox.value = '';
                document.getElementById('inputBoxContainer').style.display = 'none';
            } else {
                alert('Please provide a reason before saving.');
            }
        }
    </script>

    <!-- JS for Photo Viewing -->
    <script>
        document.getElementById('imageInput')?.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const previewImage = document.getElementById('previewImage');
                    const modalPreviewImage = document.getElementById('modalPreviewImage');
                    previewImage.src = e.target.result;
                    modalPreviewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

    <!-- JS for Zoom Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modalImage = document.getElementById('modalPreviewImage');
            const zoomInBtn = document.querySelector('.zoom-in-btn');
            const zoomOutBtn = document.querySelector('.zoom-out-btn');
            const zoomResetBtn = document.querySelector('.zoom-reset-btn');

            let currentScale = 1;
            const zoomLevels = [1, 1.5, 2, 2.5, 3];
            let currentZoomIndex = 0;

            // Set initial transform origin
            modalImage.style.transformOrigin = 'center center';

            // Click to cycle through zoom levels
            modalImage.addEventListener('click', function(e) {
                // Calculate click position relative to image
                const rect = this.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width;
                const y = (e.clientY - rect.top) / rect.height;

                // Set transform origin to click position
                this.style.transformOrigin = `${x * 100}% ${y * 100}%`;

                // Cycle to next zoom level
                currentZoomIndex = (currentZoomIndex + 1) % zoomLevels.length;
                currentScale = zoomLevels[currentZoomIndex];
                applyZoom();
            });

            // Zoom in button
            zoomInBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                if (currentZoomIndex < zoomLevels.length - 1) {
                    currentZoomIndex++;
                    currentScale = zoomLevels[currentZoomIndex];
                    applyZoom();
                }
            });

            // Zoom out button
            zoomOutBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                if (currentZoomIndex > 0) {
                    currentZoomIndex--;
                    currentScale = zoomLevels[currentZoomIndex];
                    applyZoom();
                }
            });

            // Reset zoom
            zoomResetBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                currentZoomIndex = 0;
                currentScale = 1;
                modalImage.style.transformOrigin = 'center center';
                applyZoom();
            });

            // Apply the current zoom
            function applyZoom() {
                modalImage.style.transform = `scale(${currentScale})`;
                modalImage.style.cursor = currentScale > 1 ? 'zoom-out' : 'zoom-in';
            }

            // Panning functionality when zoomed
            let isDragging = false;
            let startX, startY, translateX = 0,
                translateY = 0;

            modalImage.addEventListener('mousedown', function(e) {
                if (currentScale > 1) {
                    isDragging = true;
                    startX = e.clientX - translateX;
                    startY = e.clientY - translateY;
                    this.style.cursor = 'grabbing';
                    e.preventDefault();
                }
            });

            document.addEventListener('mousemove', function(e) {
                if (!isDragging) return;

                translateX = e.clientX - startX;
                translateY = e.clientY - startY;

                modalImage.style.transform = `scale(${currentScale}) translate(${translateX}px, ${translateY}px)`;
            });

            document.addEventListener('mouseup', function() {
                isDragging = false;
                if (currentScale > 1) {
                    modalImage.style.cursor = 'zoom-out';
                }
            });

            // Reset on modal close
            $('#imageModal').on('hidden.bs.modal', function() {
                currentZoomIndex = 0;
                currentScale = 1;
                translateX = 0;
                translateY = 0;
                modalImage.style.transform = 'scale(1)';
                modalImage.style.transformOrigin = 'center center';
                modalImage.style.cursor = 'zoom-in';
            });
        });
    </script>

    <!-- JS for Previwing the attachments -->
    <script>
        function uploadAndPreviewImage(file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // Insert the image directly into Summernote
                $('#summernote').summernote('insertImage', e.target.result, file.name);
            };

            reader.readAsDataURL(file); // Preview without uploading
        }
    </script>

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

        // Initialize Scrollspy
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#scrollspy'
        });
    </script>

    <!-- Summernotes Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    <!--Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>

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
        new DataTable('#tbl_approvals');
    </script>
    <!--end::Script-->
    

    <!-- Toast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('js/dashboard.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <!-- apexcharts -->
    <script
        src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
        crossorigin="anonymous"></script>

    {{-- <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S ALL JUST JUNK FOR DEMO
        // ++++++++++++++++++++++++++++++++++++++++++

        const visitors_chart_options = {
            series: [{
                    name: 'High - 2023',
                    data: [100, 120, 170, 167, 180, 177, 160],
                },
                {
                    name: 'Low - 2023',
                    data: [60, 80, 70, 67, 80, 77, 100],
                },
            ],
            chart: {
                height: 200,
                type: 'line',
                toolbar: {
                    show: false,
                },
            },
            colors: ['#0d6efd', '#adb5bd'],
            stroke: {
                curve: 'smooth',
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5,
                },
            },
            legend: {
                show: false,
            },
            markers: {
                size: 1,
            },
            xaxis: {
                categories: ['22th', '23th', '24th', '25th', '26th', '27th', '28th'],
            },
        };

        const visitors_chart = new ApexCharts(
            document.querySelector('#visitors-chart'),
            visitors_chart_options,
        );
        visitors_chart.render();

        const sales_chart_options = {
            series: [{
                    name: 'Net Profit',
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
                },
                {
                    name: 'Revenue',
                    data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
                },
                {
                    name: 'Free Cash Flow',
                    data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
                },
            ],
            chart: {
                type: 'bar',
                height: 200,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded',
                },
            },
            legend: {
                show: false,
            },
            colors: ['#0d6efd', '#20c997', '#ffc107'],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent'],
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            fill: {
                opacity: 1,
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return '$ ' + val + ' thousands';
                    },
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector('#sales-chart'),
            sales_chart_options,
        );

        sales_chart.render();
    </script> --}}
    <!--end::Script-->

    <!-- Prompt Message -->
    @if(session()->has('error_msg'))
      <script>
          toastr.options.preventDuplicates = true;
          toastr.error("{{ session('error_msg') }}");
      </script>
    @endif

    @if(session()->has('success_msg'))
      <script>
          toastr.options.preventDuplicates = true;
          toastr.success("{{ session('success_msg') }}");
      </script>
    @endif
    
</body>
<!--end::Body-->

</html>