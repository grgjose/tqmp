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
                                            <img src="https://th.bing.com/th/id/R.bd7ec57205f5f8bea1aa148c3f44583d?rik=jxr7IaKBvhlUZw&riu=http%3a%2f%2fwww.richmondtopglass.com%2fwp-content%2fuploads%2f2018%2f05%2falum.png&ehk=iTUYxOJWwRo9yxGvVzyto5FcqTcl8EZlLmNF7Hix0FA%3d&risl=&pid=ImgRaw&r=0" alt="Product" class="product-image me-3">
                                            <div>
                                                <p class="mb-0 fw-bold">Aluminum Glass</p>
                                                <small class="text-muted">Color: White | Size: Medium</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" style="width: 60px;">
                                        <input type="number" class="form-control form-control-sm text-center" value="1" min="1">
                                    </td>
                                    <td>$36.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://th.bing.com/th/id/R.bd7ec57205f5f8bea1aa148c3f44583d?rik=jxr7IaKBvhlUZw&riu=http%3a%2f%2fwww.richmondtopglass.com%2fwp-content%2fuploads%2f2018%2f05%2falum.png&ehk=iTUYxOJWwRo9yxGvVzyto5FcqTcl8EZlLmNF7Hix0FA%3d&risl=&pid=ImgRaw&r=0" alt="Product" class="product-image me-3">
                                            <div>
                                                <p class="mb-0 fw-bold">Windows</p>
                                                <small class="text-muted">Color: Pest | Size: Large</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" style="width: 60px;">
                                        <input type="number" class="form-control form-control-sm text-center" value="1" min="1">
                                    </td>
                                    <td>$25.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://th.bing.com/th/id/R.bd7ec57205f5f8bea1aa148c3f44583d?rik=jxr7IaKBvhlUZw&riu=http%3a%2f%2fwww.richmondtopglass.com%2fwp-content%2fuploads%2f2018%2f05%2falum.png&ehk=iTUYxOJWwRo9yxGvVzyto5FcqTcl8EZlLmNF7Hix0FA%3d&risl=&pid=ImgRaw&r=0" alt="Product" class="product-image me-3">
                                            <div>
                                                <p class="mb-0 fw-bold">Sliding Door</p>
                                                <small class="text-muted">Color: Yellow | Size: Medium</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" style="width: 60px;">
                                        <input type="number" class="form-control form-control-sm text-center" value="1" min="1">
                                    </td>
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
                <h5 class="fw-bold">Customer's Details</h5>
                <div class="d-flex align-items-center mb-3">
                    <img src="https://via.placeholder.com/60" alt="Customer" class="rounded-circle me-3" width="60">
                    <div>
                        <p class="mb-0 fw-bold">Willium Deno</p>
                        <small class="text-muted">10 Previous Orders</small>
                    </div>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="shippingAddress" class="form-label"><strong>Shipping Address:</strong></label>
                        <input type="text" class="form-control" id="shippingAddress" value="Quezon City, Philippines">
                    </div>
                    <div class="mb-3">
                        <label for="billingAddress" class="form-label"><strong>Billing Address:</strong></label>
                        <input type="text" class="form-control" id="billingAddress" value="Quezon City, Philippines">
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label"><strong>Email Address:</strong></label>
                        <input type="email" class="form-control" id="emailAddress" value="contact@yourmail.com">
                    </div>
                    <button type="submit" class="card-button btn btn-danger w-100">Save Details</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Delivery Details Section -->
            <div class="col-lg-8 mb-4">
                <h5 class="fw-bold">Delivery Details</h5>
                <div class="row pt-3">
                    <div class="col-md-6 mb-4">
                        <div class="border rounded p-3 w-100 d-flex align-items-center">
                            <input class="form-check-input me-3" type="radio" name="deliveryOption" id="option1">
                            <img src="https://th.bing.com/th/id/OIP.Dl-WiroGReI7sZ13Bp5U1gHaHa?rs=1&pid=ImgDetMain" alt="Product" class="product-image me-3" style="height: 50px; width: auto;">
                            <label class="form-check-label" for="option1">
                                <p class="mb-0 fw-bold">Sample Delivery Company</p>
                                <small class="text-muted">Expected Delivery: March 3, 2025</small>
                                <p class="mt-2">$36.00</p>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="border rounded p-3 w-100 d-flex align-items-center">
                            <input class="form-check-input me-3" type="radio" name="deliveryOption" id="option2">
                            <img src="https://th.bing.com/th/id/OIP.Pp0yBjr7Qr1TB7oRM9vLIgHaHa?rs=1&pid=ImgDetMain" alt="Product" class="product-image me-3" style="height: 50px; width: auto;">
                            <label class="form-check-label" for="option2">
                                <p class="mb-0 fw-bold">Sample Delivery Company</p>
                                <small class="text-muted">Expected Delivery: March 3, 2025</small>
                                <p class="mt-2">$25.00</p>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="border rounded p-3 w-100 d-flex align-items-center">
                            <input class="form-check-input me-3" type="radio" name="deliveryOption" id="option3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Logo_J%26T_Merah_Square.jpg/330px-Logo_J%26T_Merah_Square.jpg" alt="Product" class="product-image me-3" style="height: 50px; width: auto;">
                            <label class="form-check-label" for="option3">
                                <p class="mb-0 fw-bold">Sample Delivery Company</p>
                                <small class="text-muted">Expected Delivery: March 3, 2025</small>
                                <p class="mt-2">$45.00</p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Service Section -->
            <div class="col-lg-4">
                <h5 class="fw-bold">Additional Service</h5>
                <div class="border rounded-3 p-3 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-0 fw-bold">Service 1</p>
                        <small class="text-muted">Description of Service 1</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="service1">
                    </div>
                </div>
                <div class="border rounded-3 p-3 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-0 fw-bold">Service 2</p>
                        <small class="text-muted">Description of Service 2</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="service2">
                    </div>
                </div>
                <div class="border rounded-3 p-3 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-0 fw-bold">Service 3</p>
                        <small class="text-muted">Description of Service 3</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="service3">
                    </div>
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