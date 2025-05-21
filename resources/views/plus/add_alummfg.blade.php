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
                    @if($sub_category->category_id == 3)
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

                {{-- <a class="nav-link active mt-2" href="#angleSection" data-bs-toggle="pill" role="tab">
                    Angle Sections
                </a>
                <a class="nav-link mt-2" href="#storeFront" data-bs-toggle="pill" role="tab">
                    Storefront Components
                </a>
                <a class="nav-link mt-2" href="#slidingDoor" data-bs-toggle="pill" role="tab">
                    Sliding Door Sections
                </a>
                <a class="nav-link mt-2" href="#miscSection" data-bs-toggle="pill" role="tab">
                    Miscellaneous Sections
                </a>
                <a class="nav-link mt-2" href="#swingDoor" data-bs-toggle="pill" role="tab">
                    Swing Door Sections
                </a>
                <a class="nav-link mt-2" href="#counterTrim" data-bs-toggle="pill" role="tab">
                    Counter Trim Sections
                </a>
                <a class="nav-link mt-2" href="#ycSection" data-bs-toggle="pill" role="tab">
                    YC Sections
                </a>
                <a class="nav-link mt-2" href="#ventSection" data-bs-toggle="pill" role="tab">
                    Vent Sections
                </a>
                <a class="nav-link mt-2" href="#flatbarSection" data-bs-toggle="pill" role="tab">
                    Flat Bar Sections
                </a>
                <a class="nav-link mt-2" href="#counternosingSection" data-bs-toggle="pill" role="tab">
                    Counter Nosing Sections
                </a> --}}
            </div>
        </div>

        <!-- Tab Content -->
        <div class="col-md-9 col-lg-9 tab-content-container">
            <div class="tab-content" id="aluminumContent">

                @php
                    $start = true;
                @endphp

                @foreach($productSubCategories as $sub_category)
                    @if($sub_category->category_id == 3)
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
                                                    <img src="{{ asset('storage/all-items/'.$product->image) }}" 
                                                     onerror="this.onerror=null; this.src='{{ asset('storage/all-items/default-product-image.png') }}';"
                                                     alt="{{$product->display_name}}" class="card-img-top" 
                                                     style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
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

                {{-- <!-- Angle Section -->
                <div class="tab-pane fade show active" id="angleSection">
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
                
                <div class="tab-pane fade" id="storeFront">
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
                <div class="tab-pane fade" id="slidingDoor">
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
                <div class="tab-pane fade" id="miscSection">
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
                <div class="tab-pane fade" id="swingDoor">
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
                <div class="tab-pane fade" id="counterTrim">
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
                <div class="tab-pane fade" id="ycSection">
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
                <div class="tab-pane fade" id="ventSection">
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
                <div class="tab-pane fade" id="flatbarSection">
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
                <div class="tab-pane fade" id="counternosingSection">
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