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

<section id="products-glass-manufacturing" class="py-3 mt-5 fade-in-up">
    <div class="container">
        <div class="text-center">
            <h2 class="fw-bold" style="color: #7E1416;">Glass Manufacturing</h2>
            <p class="mt-3">
                With over six decades of expertise in the national flat glass manufacturing industry, PFGMI specializes in producing high-quality flat glass, including Clear Float and Tinted Float. Our dedication extends beyond the glass industry, reflecting a broader commitment to excellence.
            </p>
        </div>

        <div class="row mt-4">
            <div class="col-md-3 col-lg-3 nav-column">
                <div class="nav flex-column nav-pills me-3" id="glassProducts" role="tablist">
                    <a class="nav-link active mt-2" href="#clearFloat" data-bs-toggle="pill" role="tab">
                        Clear Float Glass
                    </a>
                    <a class="nav-link mt-2" href="#tintedFloat" data-bs-toggle="pill" role="tab">
                        Tinted Float Glass
                    </a>
                    <a class="nav-link mt-2" href="#ultraClear" data-bs-toggle="pill" role="tab">
                        Ultra Clear Float Glass
                    </a>
                    <a class="nav-link mt-2" href="#lowE" data-bs-toggle="pill" role="tab">
                        Low-E Coated Glass
                    </a>
                    <a class="nav-link mt-2" href="#reflective" data-bs-toggle="pill" role="tab">
                        Reflective Coated Glass
                    </a>
                    <a class="nav-link mt-2" href="#mirror" data-bs-toggle="pill" role="tab">
                        Mirror
                    </a>
                    <a class="nav-link mt-2" href="#patterned" data-bs-toggle="pill" role="tab">
                        Patterned Glass
                    </a>
                    <a class="nav-link mt-2" href="#wired" data-bs-toggle="pill" role="tab">
                        Wired Glass
                    </a>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="col-md-9 col-lg-9 tab-content-container">
                <div class="tab-content" id="glassProductsContent">
                    <!-- Clear Float Glass -->
                    <div class="tab-pane fade show active" id="clearFloat">
                        <div class="row py-3">


                            <div class="col-md-3 mb-4 d-flex">
                                <div class="card border-0 shadow-lg d-flex flex-column w-100">
                                    <img src="" alt="" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="card-title fw-bold"></h6>
                                        <p class="card-text flex-grow-1">Product Desc</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                                                @if($my_user==null)
                                                data-bs-toggle="modal" data-bs-target="#loginModal"
                                                @endif>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Tinted Float Glass -->
                    <div class="tab-pane fade" id="tintedFloat">
                        <div class="row py-3">


                            <div class="col-md-3 mb-4 d-flex">
                                <div class="card border-0 shadow-lg d-flex flex-column w-100">
                                    <img src="" alt="" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="card-title fw-bold"></h6>
                                        <p class="card-text flex-grow-1">Product Desc</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                                                @if($my_user==null)
                                                data-bs-toggle="modal" data-bs-target="#loginModal"
                                                @endif>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Ultra Clear Float Glass -->
                    <div class="tab-pane fade" id="ultraClear">
                        <div class="row py-3">


                            <div class="col-md-3 mb-4 d-flex">
                                <div class="card border-0 shadow-lg d-flex flex-column w-100">
                                    <img src="" alt="" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="card-title fw-bold"></h6>
                                        <p class="card-text flex-grow-1">Product Desc</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                                                @if($my_user==null)
                                                data-bs-toggle="modal" data-bs-target="#loginModal"
                                                @endif>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Low-E Coated Glass -->
                    <div class="tab-pane fade" id="lowE">
                        <div class="row py-3">


                            <div class="col-md-3 mb-4 d-flex">
                                <div class="card border-0 shadow-lg d-flex flex-column w-100">
                                    <img src="" alt="" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="card-title fw-bold"></h6>
                                        <p class="card-text flex-grow-1">Product Desc</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                                                @if($my_user==null)
                                                data-bs-toggle="modal" data-bs-target="#loginModal"
                                                @endif>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Reflective Coated Glass -->
                    <div class="tab-pane fade" id="reflective">
                        <div class="row py-3">


                            <div class="col-md-3 mb-4 d-flex">
                                <div class="card border-0 shadow-lg d-flex flex-column w-100">
                                    <img src="" alt="" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="card-title fw-bold"></h6>
                                        <p class="card-text flex-grow-1">Product Desc</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                                                @if($my_user==null)
                                                data-bs-toggle="modal" data-bs-target="#loginModal"
                                                @endif>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Mirror -->
                    <div class="tab-pane fade" id="mirror">
                        <div class="row py-3">

                            <div class="col-md-3 mb-4 d-flex">
                                <div class="card border-0 shadow-lg d-flex flex-column w-100">
                                    <img src="" alt="" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="card-title fw-bold"></h6>
                                        <p class="card-text flex-grow-1">Product Desc</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                                                @if($my_user==null)
                                                data-bs-toggle="modal" data-bs-target="#loginModal"
                                                @endif>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Patterned Glass -->
                    <div class="tab-pane fade" id="patterned">
                        <div class="row py-3">

                            <div class="col-md-3 mb-4 d-flex">
                                <div class="card border-0 shadow-lg d-flex flex-column w-100">
                                    <img src="" alt="" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="card-title fw-bold"></h6>
                                        <p class="card-text flex-grow-1">Product Desc</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                                                @if($my_user==null)
                                                data-bs-toggle="modal" data-bs-target="#loginModal"
                                                @endif>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Wired Glass -->
                    <div class="tab-pane fade" id="wired">
                        <div class="row py-3">

                            <div class="col-md-3 mb-4 d-flex">
                                <div class="card border-0 shadow-lg d-flex flex-column w-100">
                                    <img src="" alt="" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <div class="card-body d-flex flex-column">
                                        <h6 class="card-title fw-bold"></h6>
                                        <p class="card-text flex-grow-1">Product Desc</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                                                @if($my_user==null)
                                                data-bs-toggle="modal" data-bs-target="#loginModal"
                                                @endif>Add to Cart</a>
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
</section>