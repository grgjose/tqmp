<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Catalogue | Total Quality Management Products Philippines</title>
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

    <section id="landing-archi-hardwares" class="d-flex align-items-center justify-content-center text-center min-vh-100"
        style="background: linear-gradient(rgba(23, 38, 71, 0.3), rgba(126, 20, 22, 0.3)),
                    url('https://images.pexels.com/photos/834892/pexels-photo-834892.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3 fade-in-up" style="color: white;">Architectural Hardware Catalogue</h2>
                    <p class="lead mt-3 fade-in-up" style="color: white;">With THORE Brand, we are not only seeking a wide range of architectural hardware but also prioritizing strength, endurance, and resistance in our products.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services-aluminum-profiles" class="py-3 mt-5 fade-in-up">

        <div class="container">
            <div class="py-5 text-center">
                <h2 class="fw-bold" style="color: #7E1416;">TQMP Product Catalog</h2>
                <p class="mt-3">
                    <b>Comprehensive range of glass, aluminum, and security solutions for industrial and architectural applications.</b>
                </p>
            </div>

            <!-- Gallery Grid -->
            <div class="row gallery">
                <!-- Item 1 -->
                <div class="col-md-4 mb-4 gallery-item">
                    <div class="card border-0 shadow-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="0">
                            <img src="{{ asset('storage/catalog/TQMP-New-Catalog/liftlet-2025-REV1-tqmp-gpaad-images-0.jpg') }}"
                                class="img-fluid"
                                style="object-fit: cover; width: 100%; height: 450px; border-top-left-radius: 8px; border-top-right-radius: 8px;"
                                loading="lazy"
                                alt="Glass Manufacturing">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Glass Manufacturing Solutions</h6>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-md-4 mb-4 gallery-item">
                    <div class="card border-0 shadow-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="1">
                            <img src="{{ asset('storage/catalog/TQMP-New-Catalog/liftlet-2025-REV1-tqmp-gpaad-images-1.jpg') }}"
                                class="img-fluid"
                                style="object-fit: cover; width: 100%; height: 450px; border-top-left-radius: 8px; border-top-right-radius: 8px;"
                                loading="lazy"
                                alt="Company Overview">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Partner in Progress</h6>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-md-4 mb-4 gallery-item">
                    <div class="card border-0 shadow-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="2">
                            <img src="{{ asset('storage/catalog/TQMP-New-Catalog/liftlet-2025-REV1-tqmp-gpaad-images-2.jpg') }}"
                                class="img-fluid"
                                style="object-fit: cover; width: 100%; height: 450px; border-top-left-radius: 8px; border-top-right-radius: 8px;"
                                loading="lazy"
                                alt="Pioneer Float Glass">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Pioneer Float Glass Products</h6>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-md-4 mb-4 gallery-item">
                    <div class="card border-0 shadow-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="3">
                            <img src="{{ asset('storage/catalog/TQMP-New-Catalog/liftlet-2025-REV1-tqmp-gpaad-images-3.jpg') }}"
                                class="img-fluid"
                                style="object-fit: cover; width: 100%; height: 450px; border-top-left-radius: 8px; border-top-right-radius: 8px;"
                                loading="lazy"
                                alt="Glass Products">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Specialty Glass Products</h6>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="col-md-4 mb-4 gallery-item">
                    <div class="card border-0 shadow-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="4">
                            <img src="{{ asset('storage/catalog/TQMP-New-Catalog/liftlet-2025-REV1-tqmp-gpaad-images-4.jpg') }}"
                                class="img-fluid"
                                style="object-fit: cover; width: 100%; height: 450px; border-top-left-radius: 8px; border-top-right-radius: 8px;"
                                loading="lazy"
                                alt="Aluminum Manufacturing">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Aluminum Extrusion Solutions</h6>
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="col-md-4 mb-4 gallery-item">
                    <div class="card border-0 shadow-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="5">
                            <img src="{{ asset('storage/catalog/TQMP-New-Catalog/liftlet-2025-REV1-tqmp-gpaad-images-6.jpg') }}"
                                class="img-fluid"
                                style="object-fit: cover; width: 100%; height: 450px; border-top-left-radius: 8px; border-top-right-radius: 8px;"
                                loading="lazy"
                                alt="Architectural Hardware">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Architectural Hardware</h6>
                        </div>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="col-md-4 mb-4 gallery-item">
                    <div class="card border-0 shadow-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="6">
                            <img src="{{ asset('storage/catalog/TQMP-New-Catalog/liftlet-2025-REV1-tqmp-gpaad-images-7.jpg') }}"
                                class="img-fluid"
                                style="object-fit: cover; width: 100%; height: 450px; border-top-left-radius: 8px; border-top-right-radius: 8px;"
                                loading="lazy"
                                alt="Architectural Products">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Architectural Accessories</h6>
                        </div>
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="col-md-4 mb-4 gallery-item">
                    <div class="card border-0 shadow-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="7">
                            <img src="{{ asset('storage/catalog/TQMP-New-Catalog/liftlet-2025-REV1-tqmp-gpaad-images-8.jpg') }}"
                                class="img-fluid"
                                style="object-fit: cover; width: 100%; height: 450px; border-top-left-radius: 8px; border-top-right-radius: 8px;"
                                loading="lazy"
                                alt="Armoured Vehicles">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Armoured Vehicle Solutions</h6>
                        </div>
                    </div>
                </div>

                <!-- Item 9 -->
                <div class="col-md-4 mb-4 gallery-item">
                    <div class="card border-0 shadow-lg">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="8">
                            <img src="{{ asset('storage/catalog/TQMP-New-Catalog/liftlet-2025-REV1-tqmp-gpaad-images-9.jpg') }}"
                                class="img-fluid"
                                style="object-fit: cover; width: 100%; height: 450px; border-top-left-radius: 8px; border-top-right-radius: 8px;"
                                loading="lazy"
                                alt="Contact Information">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Our Nationwide Offices</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Modal -->
            <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="galleryCarousel" class="carousel slide">
                                <div class="carousel-inner">
                                    <!-- Carousel items will be dynamically inserted here -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize empty carousel
                const carouselInner = document.querySelector('#galleryCarousel .carousel-inner');
                carouselInner.innerHTML = '';

                // Get all gallery items
                const galleryItems = document.querySelectorAll('.gallery-item');

                // Create carousel items dynamically
                galleryItems.forEach((item, index) => {
                    const imgSrc = item.querySelector('img').src;
                    const title = item.querySelector('.card-title').textContent;
                    const altText = item.querySelector('img').alt;

                    const carouselItem = document.createElement('div');
                    carouselItem.className = `carousel-item ${index === 0 ? 'active' : ''}`;
                    carouselItem.innerHTML = `
            <img src="${imgSrc}" class="d-block w-100" alt="${altText}" style="max-height: 80vh; object-fit: contain; padding: 20px; background-color: #111;">
            <div class="carousel-caption d-none ">
                <h5>${title}</h5>
            </div>
        `;
                    carouselInner.appendChild(carouselItem);
                });

                // Handle modal show event
                const galleryModal = document.getElementById('galleryModal');
                galleryModal.addEventListener('show.bs.modal', function(event) {
                    const button = event.relatedTarget;
                    const slideIndex = parseInt(button.getAttribute('data-bs-slide-to'));
                    const carousel = new bootstrap.Carousel(document.getElementById('galleryCarousel'));
                    carousel.to(slideIndex);
                });

                // Initialize carousel after modal is shown
                galleryModal.addEventListener('shown.bs.modal', function() {
                    new bootstrap.Carousel(document.getElementById('galleryCarousel'));
                });

                // Keyboard navigation
                document.addEventListener('keydown', function(e) {
                    if (document.getElementById('galleryModal').classList.contains('show')) {
                        const carousel = bootstrap.Carousel.getInstance(document.getElementById('galleryCarousel'));

                        if (e.key === 'ArrowLeft') {
                            carousel.prev();
                        } else if (e.key === 'ArrowRight') {
                            carousel.next();
                        } else if (e.key === 'Escape') {
                            bootstrap.Modal.getInstance(document.getElementById('galleryModal')).hide();
                        }
                    }
                });
            });
        </script>


    </section>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Accordion Section -->
    @include ('plus.accordion')
    <!-- End of Accordion -->

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    <!-- Chatbot -->
    @include ('plus.chatbot')
    <!-- End of Chatbot -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->

</body>

</html>