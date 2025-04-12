<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Shop | Total Quality Management Products Philippines</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Chatbot CSS -->
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">

    <!-- Chatbot JS -->
    <script src="{{ asset('js/chatbot.js') }}"></script>

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('storage/css/main.css') }}">
</head>

<body>
    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <section id="title">
        <div class="container text-center py-5 fade-in-up">
            <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Shop</span>
            <h2 class="fw-bold">Welcome! Come shop with us!</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Explore our wide range of quality products and find what you need to enhance your experience with us.
            </p>
        </div>
    </section>

    <section class="container text-center fade-in-up">

        <ul class="nav nav-underline justify-content-center" id="servicesNav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#bullet-proofing" data-bs-toggle="tab">
                    <i class="fas fa-shield-alt me-2"></i>Bullet Proofing
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#glass-manufacturing" data-bs-toggle="tab">
                    <i class="fas fa-industry me-2"></i>Glass Manufacturing
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#glass-processing" data-bs-toggle="tab">
                    <i class="fas fa-cut me-2"></i>Glass Processing
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aluminum-manufacturing" data-bs-toggle="tab">
                    <i class="fas fa-cogs me-2"></i>Aluminum Manufacturing
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#other-products" data-bs-toggle="tab">
                <i class="fa-solid fa-box-open me-2"></i>Other Products
                </a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="servicesTabContent">
            <div class="tab-pane fade show active" id="bullet-proofing">
                @include('plus.add_bulletproof')
            </div>
            <div class="tab-pane fade" id="glass-manufacturing">
                @include('plus.add_glassmfg')
            </div>
            <div class="tab-pane fade" id="glass-processing">
                @include('plus.add_glasspro')
            </div>
            <div class="tab-pane fade" id="aluminum-manufacturing">
                @include('plus.add_alummfg')
            </div>
            <div class="tab-pane fade" id="other-products">
                @include('plus.add_otherprod')
            </div>
        </div>
    </section>


    <!-- CSS Enhancements -->
    <style>
        .nav-underline .nav-link {
            font-weight: 500;
            color: #495057;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
        }

        .nav-underline .nav-link:hover,
        .nav-underline .nav-link:focus {
            color: #920B12;
            transform: translateY(-2px);
        }

        .nav-underline .nav-link.active {
            color: #7E1416;
            border-bottom: 3px solid #7E1416;
        }

        .fade-in-up {
            animation: fadeInUp 0.5s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Smooth transition between tabs */
        .tab-content>.tab-pane {
            transition: opacity 0.3s ease;
        }
    </style>

    <!-- JavaScript for Enhanced Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Bootstrap tabs
            const tabElms = document.querySelectorAll('#servicesNav a[data-bs-toggle="tab"]');
            tabElms.forEach(tabEl => {
                tabEl.addEventListener('shown.bs.tab', function(event) {
                    // Update URL hash without page jump
                    history.pushState(null, null, event.target.getAttribute('href'));
                });
            });

            // Handle initial hash on page load
            if (window.location.hash) {
                const activeTab = document.querySelector(`#servicesNav a[href="${window.location.hash}"]`);
                if (activeTab) {
                    const tab = new bootstrap.Tab(activeTab);
                    tab.show();
                }
            }

            // Handle browser back/forward navigation
            window.addEventListener('popstate', function() {
                const hash = window.location.hash;
                if (hash) {
                    const correspondingTab = document.querySelector(`#servicesNav a[href="${hash}"]`);
                    if (correspondingTab) {
                        const tab = new bootstrap.Tab(correspondingTab);
                        tab.show();
                    }
                }
            });
        });
    </script>

    <!-- JS for searchbar functionality -->
 

    <!-- -----Footers----- -->

    <!-- Accordion Section -->
    @include ('plus.accordion')
    <!-- End of Accordion -->

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->



    <!-- Required Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>