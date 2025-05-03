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
        width: 100%;
    }

    .nav-pills .nav-link.active {
        color: rgb(250, 249, 249);
        background-color: #7E1416;
        border: none;
        width: 100%;
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

<div class="py-5">
    <div class="row">
        <div class="col-md-3 col-lg-3 pe-0">
            <div class="nav flex-column nav-pills me-3 border-end" id="productTabs" role="tablist"
                style="border-right-width: 2px; border-right-color: #7E1416; height: 100%;">

                @php
                    $start = true;
                @endphp
                
                @foreach($productSubCategories as $sub_category)
                    @if($sub_category->category_id == 2)
                        @if($start == true)
                            <a class="nav-link active mt-2" href="#panel{{$sub_category->id}}" data-bs-toggle="pill" role="tab">
                                {{$sub_category->category}}
                            </a>
                            @php
                                $start = false;
                            @endphp
                        @else
                            <a class="nav-link mt-2" href="#panel{{$sub_category->id}}" data-bs-toggle="pill" role="tab">
                                {{$sub_category->category}}
                            </a>
                        @endif
                    @endif
                @endforeach

                {{-- <a class="nav-link active mt-2" href="#clearFloat" data-bs-toggle="pill" role="tab">
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
                </a> --}}
            </div>
        </div>


        <!-- Tab Content -->
        <div class="col-md-9 col-lg-9 tab-content-container">
            <div class="tab-content" id="glassProductsContent">

                @php
                    $start = true;
                @endphp

                @foreach($productSubCategories as $sub_category)
                    @if($sub_category->category_id == 2)
                        @if($start == true)
                            <div class="tab-pane fade show active" id="panel{{$sub_category->id}}">
                            @php
                                $start = false;
                            @endphp
                        @else
                            <div class="tab-pane fade" id="panel{{$sub_category->id}}">
                        @endif

                        <div class="container mt-2" style="border-radius: .25rem;">
                            <div class="container text-center">
                                <div class="row py-3 g-3">

                                    @foreach($products as $product)
                                        @if($product->sub_category_id == $sub_category->id)
                                            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                                                <div class="card border-1 d-flex flex-column w-100">
                                                    <img src="{{ asset('storage/all-items/'.$product->image) }}" alt="{{$product->display_name}}" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                                    <div class="card-body d-flex flex-column">
                                                        <h6 class="card-title text-start fw-bold">{{$product->display_name}}</h6>
                                                        <h6 class="card-text text-start" style="color: #7E1416;">₱{{ $product->price }}</h6>
                                                        <a href="/add-to-cart/{{ $product->id }}" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        </div>
                    @endif
                @endforeach

                <!-- Clear Float Glass -->
                {{-- <div class="tab-pane fade show active" id="clearFloat">
                    <div class="row py-3">


                        <div class="col-md-3 mb-4 d-flex align-items-stretch">
                            <div class="card border-1 d-flex flex-column w-100">
                                <img src="" alt="Product Name" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title text-start fw-bold">Product Name</h6>
                                    <h6 class="card-text text-start" style="color: #7E1416;">₱100</h6>
                                    <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Tinted Float Glass -->
                <div class="tab-pane fade" id="tintedFloat">
                    <div class="row py-3">


                        <div class="col-md-3 mb-4 d-flex align-items-stretch">
                            <div class="card border-1 d-flex flex-column w-100">
                                <img src="" alt="Product Name" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title text-start fw-bold">Product Name</h6>
                                    <h6 class="card-text text-start" style="color: #7E1416;">₱100</h6>
                                    <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Ultra Clear Float Glass -->
                <div class="tab-pane fade" id="ultraClear">
                    <div class="row py-3">


                        <div class="col-md-3 mb-4 d-flex align-items-stretch">
                            <div class="card border-1 d-flex flex-column w-100">
                                <img src="" alt="Product Name" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title text-start fw-bold">Product Name</h6>
                                    <h6 class="card-text text-start" style="color: #7E1416;">₱100</h6>
                                    <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Low-E Coated Glass -->
                <div class="tab-pane fade" id="lowE">
                    <div class="row py-3">


                        <div class="col-md-3 mb-4 d-flex align-items-stretch">
                            <div class="card border-1 d-flex flex-column w-100">
                                <img src="" alt="Product Name" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title text-start fw-bold">Product Name</h6>
                                    <h6 class="card-text text-start" style="color: #7E1416;">₱100</h6>
                                    <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Reflective Coated Glass -->
                <div class="tab-pane fade" id="reflective">
                    <div class="row py-3">


                        <div class="col-md-3 mb-4 d-flex align-items-stretch">
                            <div class="card border-1 d-flex flex-column w-100">
                                <img src="" alt="Product Name" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title text-start fw-bold">Product Name</h6>
                                    <h6 class="card-text text-start" style="color: #7E1416;">₱100</h6>
                                    <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Mirror -->
                <div class="tab-pane fade" id="mirror">
                    <div class="row py-3">

                        <div class="col-md-3 mb-4 d-flex align-items-stretch">
                            <div class="card border-1 d-flex flex-column w-100">
                                <img src="" alt="Product Name" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title text-start fw-bold">Product Name</h6>
                                    <h6 class="card-text text-start" style="color: #7E1416;">₱100</h6>
                                    <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Patterned Glass -->
                <div class="tab-pane fade" id="patterned">
                    <div class="row py-3">

                        <div class="col-md-3 mb-4 d-flex align-items-stretch">
                            <div class="card border-1 d-flex flex-column w-100">
                                <img src="" alt="Product Name" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title text-start fw-bold">Product Name</h6>
                                    <h6 class="card-text text-start" style="color: #7E1416;">₱100</h6>
                                    <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Wired Glass -->
                <div class="tab-pane fade" id="wired">
                    <div class="row py-3">

                        <div class="col-md-3 mb-4 d-flex align-items-stretch">
                            <div class="card border-1 d-flex flex-column w-100">
                                <img src="" alt="Product Name" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title text-start fw-bold">Product Name</h6>
                                    <h6 class="card-text text-start" style="color: #7E1416;">₱100</h6>
                                    <a href="#" class="card-button btn btn-danger mt-auto w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
</>