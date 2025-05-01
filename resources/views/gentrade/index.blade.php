<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head Section -->
    @include ('plus.head')
    <!-- End of Head -->
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
                    <h2 class="fw-bold display-3 fade-in-up" style="color: white;">Architectural Hardwares</h2>
                    <p class="lead mt-3 fade-in-up" style="color: white;">With THORE Brand, we are not only seeking a wide range of architectural hardware but also prioritizing strength, endurance, and resistance in our products.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="/catalog" class="btn btn-outline-light text-decoration-none fade-in" style="font-size: smaller;">
                            <span><b>Find out more</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach($productSubCategories as $sub_category)
    @if($sub_category->category_id == 5)
    <section class="py-5">
        <div class="container py-5"
            @if($sub_category->id % 2 == 1)
            style="background-color:rgba(239, 239, 239, 0.37); border-radius: .25rem;"
            @endif
            >
            <div class="container text-center">
                <h2 class="fw-bold" style="color: #7E1416;">{{ $sub_category->category }}</h2>
                <p class="mt-3">{{ $sub_category->description }}</p>

                <div id="carouselOtherProduct{{$sub_category->id}}" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">

                        @php
                        $cnt = 0;
                        @endphp

                        @foreach($products as $product)
                        @if($product->sub_category_id == $sub_category->id)

                        @php
                        if($cnt == 0){
                        $active = 'active';
                        } else {
                        $active = '';
                        }
                        @endphp

                        @if($cnt % 4 == 0)
                        <div class="carousel-item {{ $active }}">
                            <div class="row mt-4 g-3">
                                @endif

                                <div class="col-md-3">
                                    <div class="card" style="height: 450px;">
                                        <img src="{{ asset('storage/all-items/'.$product->image) }}" alt="{{ $product->display_name }}" class="" style="object-fit: contain; width: 100%; height: 300px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                        <div class="card-body">
                                            <h6 class="card-title text-start">{{ $product->display_name }}</h6>
                                            @if($my_user != null)
                                            <h6 class="card-text text-start" style="color: #7E1416;">₱{{ $product->price }}</h6>
                                            @endif
                                            <div class="d-flex justify-content-between">
                                                @if($my_user != null)
                                                <a href="/add-to-cart/{{ $product->id }}" class="card-button btn btn-danger flex-grow-1 me-1">Add to Cart</a>
                                                @else
                                                <a href="#" class="btn btn-danger flex-grow-1 ms-1">Order Now</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if($cnt % 4 == 3 || $sub_category->product_count - 1 == $cnt)
                                <!-- Ending -->
                            </div>
                        </div>
                        @endif

                        @php
                        $cnt = $cnt + 1;
                        @endphp

                        @endif
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOtherProduct{{$sub_category->id}}" data-bs-slide="prev" style="left: -180px; color: #7E1416;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class=""><i class="fa-solid fa-circle-chevron-left"></i></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselOtherProduct{{$sub_category->id}}" data-bs-slide="next" style="right: -180px; color: #7E1416;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class=""><i class="fa-solid fa-circle-chevron-right"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endforeach

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

    <!-- Scripts -->
    @include ('plus.scripts')
    <!-- Scripts -->

</body>

</html>