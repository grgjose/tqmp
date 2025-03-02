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

    <div class="container py-5">
        <div class="row">
            <!-- Left Column: Main Image and Thumbnails -->
            <div class="col-md-6">
                <!-- Main Image -->
                <img src="https://images.pexels.com/photos/12515071/pexels-photo-12515071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Main Product" class="mb-3 rounded" style="height: 400px; width: 100%;">
                <!-- Thumbnails -->
                <div class="d-flex justify-content-between">
                    <img src="https://images.pexels.com/photos/12515071/pexels-photo-12515071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Thumbnail 1" class="thumbnail">
                    <img src="https://images.pexels.com/photos/12515071/pexels-photo-12515071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Thumbnail 2" class="thumbnail">
                    <img src="https://images.pexels.com/photos/12515071/pexels-photo-12515071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Thumbnail 3" class="thumbnail">
                    <img src="https://images.pexels.com/photos/12515071/pexels-photo-12515071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Thumbnail 4" class="thumbnail">
                </div>
            </div>

            <!-- Right Column: Product Details -->
            <div class="col-md-6">
                <h2 class="fw-bold">Aluminum Installation</h2>
                <!-- Rating and Stock -->
                <div class="d-flex align-items-center mb-2">
                    <span class="me-2 text-warning">★ ★ ★ ★ ★</span>
                    <span class="text-muted me-3">5.00 Rating</span>
                    <span class="text-success">In Stock</span>
                </div>
                <!-- Description -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non erat quam. Vestibulum aliquam nibh dui, et aliquet nibh euismod quis.</p>
                <!-- Quantity and Price -->
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-group me-3" style="width: 120px;">
                        <button class="btn btn-outline-danger">-</button>
                        <input type="text" class="form-control text-center" value="1">
                        <button class="btn btn-outline-danger">+</button>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0">$29.00</h4>
                        <small class="text-muted">+12% VAT Added</small>
                    </div>
                </div>
                <!-- Add to Cart Button -->
                <button class="card-button btn btn-danger btn-lg w-100 mb-4">Add to Cart</button>
                <!-- Product Details -->
                <h5>Product Details</h5>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th class="text-muted">Size</th>
                            <td>Small, Medium, Large</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Color</th>
                            <td>White, Black, Gray</td>
                        </tr>
                        <tr>
                            <th class="text-muted">Brand</th>
                            <td>Shirt Flex</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Select Size -->
                <h5>Select Size</h5>
                <div class="btn-group" role="group" aria-label="Select Size">
                    <button type="button" class="btn btn-outline-danger">Small</button>
                    <button type="button" class="btn btn-danger">Medium</button>
                    <button type="button" class="btn btn-outline-danger">Large</button>
                </div>
            </div>
        </div>
    </div>
</body>
<!--end::Body-->

<!-- Footer -->
@include ('plus.footer')
<!-- End of Footer -->

</html>