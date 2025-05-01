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
        width: 90%;
    }

    .nav-pills .nav-link.active {
        color: rgb(250, 249, 249);
        background-color: #7E1416;
        border: none;
        width: 90%;
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

                @foreach($productSubCategories as $sub_category)
                @if($sub_category->category_id == 5)
                @if($sub_category->id == 1)
                <a class="nav-link active mt-2" href="#panel{{$sub_category->id}}" data-bs-toggle="pill" role="tab">
                    {{$sub_category->category}}
                </a>
                @else
                <a class="nav-link mt-2" href="#panel{{$sub_category->id}}" data-bs-toggle="pill" role="tab">
                    {{$sub_category->category}}
                </a>
                @endif
                @endif
                @endforeach

                {{-- <a class="nav-link active mt-2" href="#door-&-floor" data-bs-toggle="pill" role="tab">
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
                </a> --}}
            </div>
        </div>

        <!-- Tab Content -->
        <div class="col-md-9 col-lg-9">
            <div class="tab-content" id="productTabsContent">

                @foreach($productSubCategories as $sub_category)
                @if($sub_category->category_id == 5)
                @if($sub_category->id == 1)
                <div class="tab-pane fade show active" id="panel{{$sub_category->id}}">
                    @else
                    <div class="tab-pane fade" id="panel{{$sub_category->id}}">
                        @endif
                        <div class="container mt-2" style="border-radius: .25rem;">
                            <div class="container text-center">
                                <!-- <h2 class="fw-bold" style="color: #7E1416;">Door Closers and Floor Hinges</h2>
                                    <p class="mt-3">
                                        Door closers and floor hinges are hardware that is used for all doors with a self-closing feature.
                                    </p> -->

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


                </div>

            </div>
        </div>
    </div>
</div>