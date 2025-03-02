<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Checkout | Total Quality Management Products Philippines</title>
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
            <!-- Order Details Section -->
            <div class="col-lg-8 mb-4">
                <div class="border p-3">
                    <h5 class="fw-bold">Order #15478</h5>
                    <p class="text-muted">21st March 2021 at 10:34 PM</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-muted">
                                    <th>Product Details</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/50" alt="Product" class="product-image me-3">
                                            <div>
                                                <p class="mb-0 fw-bold">Aluminum Glass</p>
                                                <small class="text-muted">Color: White | Size: Medium</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">01</td>
                                    <td>$36.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/50" alt="Product" class="product-image me-3">
                                            <div>
                                                <p class="mb-0 fw-bold">Windows</p>
                                                <small class="text-muted">Color: Pest | Size: Large</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">01</td>
                                    <td>$25.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/50" alt="Product" class="product-image me-3">
                                            <div>
                                                <p class="mb-0 fw-bold">Sliding Door</p>
                                                <small class="text-muted">Color: Yellow | Size: Medium</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">01</td>
                                    <td>$45.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p class="text-muted">Subtotal</p>
                        <p>$106</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-muted">Shipping Cost (+)</p>
                        <p>$10.85</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-muted">Discount (-)</p>
                        <p>$9.00</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p class="total-payable">Total Payable</p>
                        <p class="total-payable">$107.85</p>
                    </div>
                </div>
            </div>

            <!-- Customer Details Section -->
            <div class="col-lg-4">
                <div class="border p-3">
                    <h5 class="fw-bold">Customer</h5>
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/60" alt="Customer" class="rounded-circle me-3" width="60">
                        <div>
                            <p class="mb-0 fw-bold">Willium Deno</p>
                            <small class="text-muted">10 Previous Orders</small>
                        </div>
                    </div>
                    <p class="mb-1"><i class="bi bi-geo-alt-fill text-danger me-2"></i><strong>Shipping Address:</strong> Quezon City, Philippines</p>
                    <p class="mb-1"><i class="bi bi-house-door-fill text-danger me-2"></i><strong>Billing Address:</strong> Quezon City, Philippines</p>
                    <p class="mb-3"><i class="bi bi-envelope-fill text-danger me-2"></i><strong>Email Address:</strong> contact@yourmail.com</p>
                    <button class="card-button btn btn-danger w-100">Edit Details</button>
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