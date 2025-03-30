<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Product Details | Total Quality Management Products Philippines</title>
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

    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    <div class="container py-5">
        <div class="row">
            <!-- Left Column: Main Image and Thumbnails -->
            <div class="col-md-6">
                <!-- Main Image -->
                @foreach($productImages as $image)
                @if($image->product_id == $product->id)
                <img src="{{ asset('storage/all-items/'.$image->filename) }}" alt="Main Product" class="mb-3 rounded" style="height: 400px; width: 60%;">
                @continue
                @endif
                @endforeach

                <!-- Thumbnails -->
                <div class="d-flex justify-content-between">
                    @foreach($productImages as $image)
                    @if($image->product_id == $product->id)
                    <img src="{{ asset('storage/all-items/'.$image->filename) }}" alt="Thumbnail" class="thumbnail">
                    @endif
                    @endforeach
                </div>
            </div>

            <!-- Right Column: Product Details -->
            <div class="col-md-6">
                <form action="/add-to-cart/{{ $product->id }}" method="POST">
                    @csrf
                    <h2 class="fw-bold">{{ $product->display_name }}</h2>
                    <!-- Rating and Stock -->
                    <div class="d-flex align-items-center mb-2">
                        <span class="me-2 text-warning">★ ★ ★ ★ ★</span>
                        <span class="text-muted me-3">5.00 Rating</span>
                        <span class="text-success">In Stock</span>
                    </div>
                    <!-- Description -->
                    <p>{{ $product->description }}</p>
                    <!-- Quantity and Price -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-group me-3" style="width: 120px;">
                            <button class="btn btn-outline-danger">-</button>
                            <input type="number" name="quantity" class="form-control text-center" value="1">
                            <button class="btn btn-outline-danger">+</button>
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0">₱{{ $product->price }}</h4>
                            <small class="text-muted">+12% VAT Added</small>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <h5>Product Details</h5>

                    <div class="col mt-3">
                        <label for="size" class="form-label text-muted">Size</label>
                        <select id="size" name="size" class="form-select form-select-sm">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                    <div class="col mt-3">
                        <label for="color" class="form-label text-muted">Color</label>
                        <select id="color" name="color" class="form-select form-select-sm">
                            <option value="white">White</option>
                            <option value="black">Black</option>
                            <option value="gray">Gray</option>
                        </select>
                    </div>
                    <div class="col mt-3">
                        <label for="brand" class="form-label text-muted">Brand</label>
                        <select id="brand" name="brand" class="form-select form-select-sm">
                            <option value="shirt-flex">Shirt Flex</option>
                        </select>
                    </div>

                    <!-- Select Size -->
                    <!-- <h5>Select Size</h5>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Select Size">
                        <button type="button" class="btn btn-outline-danger">Small</button>
                        <button type="button" class="btn btn-danger">Medium</button>
                        <button type="button" class="btn btn-outline-danger">Large</button>
                    </div> -->

                    <!-- Add to Cart Button -->
                    <button class="card-button btn btn-danger btn-lg w-100 mb-4 mt-3">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</body>
<!--end::Body-->

<!-- Footer -->
@include ('plus.footer')
<!-- End of Footer -->

</html>