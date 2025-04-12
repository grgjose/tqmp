<style>
    /* Custom tab styling */
    .nav-pills {
        flex-wrap: nowrap;
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;
    }

    .nav-pills .nav-link {
        color: #495057;
        font-weight: 500;
        border: none;
        padding: 0.75rem 1.25rem;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-pills .nav-link:hover {
        background-color: rgba(226, 16, 19, 0.1);
    }

    .nav-pills .nav-link.active {
        color: rgb(250, 249, 249);
        background-color: #7E1416;
        border: none;
    }

    /* For mobile responsiveness */
    @media (max-width: 768px) {
        .nav-pills {
            flex-wrap: nowrap;
            display: flex;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .nav-item {
            flex: 0 0 auto;
        }
    }

    /* Smooth tab transitions */
    .tab-content>.tab-pane {
        transition: opacity 0.3s ease;
    }
</style>

<div class="mt-5">
    <div class="row">
        <div class="col-md-3 col-lg-2 pe-0">
            <div class="nav flex-column nav-pills me-3 border-end" id="productTabs" role="tablist"
                style="border-right-width: 2px; border-right-color: #7E1416; height: 100%;">
                <a class="nav-link active mt-2" href="#door-&-floor" data-bs-toggle="pill" role="tab">
                    Door & Floor
                </a>
                <a class="nav-link mt-2" href="#patch-fittings" data-bs-toggle="pill" role="tab">
                    Patch Fittings
                </a>
                <a class="nav-link mt-2" href="#handles" data-bs-toggle="pill" role="tab">
                    Handles
                </a>
                <a class="nav-link mt-2" href="#shower-hinges" data-bs-toggle="pill" role="tab">
                    Shower Hinges
                </a>
                <a class="nav-link mt-2" href="#shower-glass-clip" data-bs-toggle="pill" role="tab">
                    Glass Clips
                </a>
                <a class="nav-link mt-2" href="#sliding-shower-enclosure" data-bs-toggle="pill" role="tab">
                    Sliding Enclosure
                </a>
                <a class="nav-link mt-2" href="#ladder" data-bs-toggle="pill" role="tab">
                    Ladder
                </a>
                <a class="nav-link mt-2" href="#jalouplus" data-bs-toggle="pill" role="tab">
                    Jalouplus
                </a>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="col-md-9 col-lg-10">
            <div class="tab-content" id="productTabsContent">
                <!-- Door & Floor Section -->
                <div class="tab-pane fade show active" id="door-&-floor">
                    <div class="container mt-2" style="border-radius: .25rem;">
                        <div class="container text-center">
                            <!-- <h2 class="fw-bold" style="color: #7E1416;">Door Closers and Floor Hinges</h2>
                            <p class="mt-3">
                                Door closers and floor hinges are hardware that is used for all doors with a self-closing feature.
                            </p> -->

                            <div class="row py-3 g-3">
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/doors/gsm-0060.jpg') }}" alt="Thore Door Closer Model GSM-0060" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Thore Door Closer Model GSM-0060</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$120.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/doors/abloy dc420.jpg') }}" alt="Abloy Door Closer Model DC420" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Abloy Door Closer Model DC420</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$120.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patch Fittings Section -->
                <div class="tab-pane fade" id="patch-fittings">
                    <div class="container mt-2" style="border-radius: .25rem;">
                        <div class="container text-center">
                            <!-- <h2 class="fw-bold" style="color: #7E1416;">Patch Fittings</h2>
                            <p class="mt-3">
                                Patch Fittings is a accessories to make a frameless door that is usually seen at all facilities like malls.
                            </p> -->
                            <div class="row py-3 g-3">
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/patch-fittings/thore gsm0039.jpg') }}" alt="Thore Patch Fitting Model GSM-0039" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Thore Patch Fitting Model GSM-0039</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/patch-fittings/GSM-0056.jpg') }}" alt="Thore Patch Fitting Model GSM-0056" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Thore Patch Fitting Model GSM-0056</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Handles Section -->
                <div class="tab-pane fade" id="handles">
                    <div class="container mt-2" style="border-radius: .25rem;">
                        <div class="container text-center">
                            <!-- <h2 class="fw-bold" style="color: #7E1416;">Handles</h2>
                            <p class="mt-3">
                                Glass doors with a specific handle to a specific door to be using.
                            </p> -->
                            <div class="row py-3 g-3">
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/handles/THORE C-TYPE HANDLE.jpg') }}" alt="THORE C-TYPE HANDLE" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">THORE C-TYPE HANDLE</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/handles/THORE C-TYPE HANDLE.jpg') }}" alt="THORE C-TYPE HANDLE" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">THORE C-TYPE HANDLE</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shower Hinges Section -->
                <div class="tab-pane fade" id="shower-hinges">
                    <div class="container mt-2" style="border-radius: .25rem;">
                        <div class="container text-center">
                            <!-- <h2 class="fw-bold" style="color: #7E1416;">Shower Hinges</h2>
                            <p class="mt-3">
                                Shower hinges is usually applied at shower enclosure can be swing push and pull in 90 degree.
                            </p> -->
                            <div class="row py-3 g-3">
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0011.jpg') }}" alt="THORE GSM0011" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">THORE GSM0011</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/shower-hinges/thore gsm0018.jpg') }}" alt="THORE GSM0018" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">THORE GSM0018</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shower Glass Clip Section -->
                <div class="tab-pane fade" id="shower-glass-clip">
                    <div class="container mt-2" style="border-radius: .25rem;">
                        <div class="container text-center">
                            <!-- <h2 class="fw-bold" style="color: #7E1416;">Shower Glass Clips</h2>
                            <p class="mt-3">
                                Shower glass clips usually used in fix panel for a shower enclosure but most of the installer and fabricator use it in other applications such as railings with a support of stainless tube.
                            </p> -->
                            <div class="row py-3 g-3">
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0001.jpg') }}" alt="THORE GSM0001" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">THORE GSM0001</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/glass-clips/thore gsm0005.jpg') }}" alt="THORE GSM0005" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">THORE GSM0005</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sliding Shower Enclosure Section -->
                <div class="tab-pane fade" id="sliding-shower-enclosure">
                    <div class="container mt-2" style="border-radius: .25rem;">
                        <div class="container text-center">
                            <!-- <h2 class="fw-bold" style="color: #7E1416;">Sliding Shower Enclosure</h2>
                            <p class="mt-3">
                                Shower enclosure usually seen in swing, we also have sliding function to space value to a minimal places.
                            </p> -->
                            <div class="row py-3 g-3">
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/sliding-shower/GSM-0102.jpg') }}" alt="Thore Door Closer Model GSM-0060" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Thore Door Closer Model GSM-0060</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$120.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/sliding-shower/GSM-0102.jpg') }}" alt="Thore Door Closer Model GSM-0060" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Thore Door Closer Model GSM-0060</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$120.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ladder Section -->
                <div class="tab-pane fade" id="ladder">
                    <div class="container mt-2" style="border-radius: .25rem;">
                        <div class="container text-center">
                            <!-- <h2 class="fw-bold" style="color: #7E1416;">Ladder</h2>
                            <p class="mt-3">
                                Ladder safety begins with the selection of the proper ladder for the job includes inspection, setup, proper climbing and standing, proper use, care and storage.
                            </p> -->
                            <div class="row py-3 g-3">
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/doors/gsm-0060.jpg') }}" alt="Thore Door Closer Model GSM-0060" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Thore Door Closer Model GSM-0060</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$120.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/archi-hardware/doors/gsm-0060.jpg') }}" alt="Thore Door Closer Model GSM-0060" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Thore Door Closer Model GSM-0060</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$120.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jalouplus Section -->
                <div class="tab-pane fade" id="jalouplus">
                    <div class="container mt-2" style="border-radius: .25rem;">
                        <div class="text-center">
                            <!-- <h2 class="fw-bold" style="color: #7E1416;">Jalouplus</h2>
                            <p class="mt-3">
                                Jalouplus offers style and functionality. Water penetration resistance, can be used in air conditioned area. Provides the benefits of a glass louver window but now with impenetrable security.
                            </p> -->
                            <div class="row py-3 g-3">
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/jalouplus/jalouplus.jpg') }}" alt="Jalouplus" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Jalouplus</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                    <div class="card border-1 d-flex flex-column w-100">
                                        <img src="{{ asset('storage/jalouplus/jalouplus.jpg') }}" alt="Jalouplus" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title text-start fw-bold">Jalouplus</h6>
                                            <h6 class="card-text text-start" style="color: #7E1416;">$130.00</h6>
                                            <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Bootstrap tabs
        const tabElms = document.querySelectorAll('#productTabs a[data-bs-toggle="tab"]');
        tabElms.forEach(tabEl => {
            tabEl.addEventListener('shown.bs.tab', function(event) {
                // Update URL hash without page jump
                history.pushState(null, null, event.target.getAttribute('href'));

                // Scroll to top of tab content smoothly
                document.getElementById('productTabsContent').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Handle initial hash on page load
        if (window.location.hash) {
            const activeTab = document.querySelector(`#productTabs a[href="${window.location.hash}"]`);
            if (activeTab) {
                const tab = new bootstrap.Tab(activeTab);
                tab.show();
            }
        }

        // Handle browser back/forward navigation
        window.addEventListener('popstate', function() {
            const hash = window.location.hash;
            if (hash) {
                const correspondingTab = document.querySelector(`#productTabs a[href="${hash}"]`);
                if (correspondingTab) {
                    const tab = new bootstrap.Tab(correspondingTab);
                    tab.show();
                }
            }
        });

        // Make tabs scrollable with mouse wheel
        const tabsContainer = document.getElementById('productTabs');
        if (tabsContainer) {
            tabsContainer.addEventListener('wheel', function(e) {
                if (e.deltaY > 0) {
                    this.scrollLeft += 50;
                } else {
                    this.scrollLeft -= 50;
                }
                e.preventDefault();
            });
        }
    });
</script> -->