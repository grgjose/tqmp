<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Get Quoatation - Aluminum Manufacturing | Total Quality Management Products Philippines</title>
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

    <!-- <section id="form" class="fade-in-up container py-5">
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold">Customer Details</h5>
                    </div>
                    <div class="mb-3">
                        <label for="customerName" class="form-label">Customer Name <span class="text-danger">*</span></label>
                        <input type="text" id="customerName" class="form-control form-control-sm" placeholder="Enter customer name">
                    </div>
                    <div class="mb-3">
                        <label for="customerEmail" class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="email" id="customerEmail" class="form-control form-control-sm" placeholder="Enter email address">
                    </div>
                    <div class="mb-3">
                        <label for="customerPhone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" id="customerPhone" class="form-control form-control-sm" placeholder="Enter phone number">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold">Customer Address</h5>
                    </div>
                    <div class="mb-3">
                        <label for="addressLine1" class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                        <input type="text" id="addressLine1" class="form-control form-control-sm" placeholder="Enter address line 1">
                    </div>
                    <div class="mb-3">
                        <label for="addressLine2" class="form-label">Address Line 2</label>
                        <input type="text" id="addressLine2" class="form-control form-control-sm" placeholder="Enter address line 2 (optional)">
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <label for="city" class="form-label mb-2">City <span class="text-danger">*</span></label>
                            <input type="text" id="city" class="form-control form-control-sm" placeholder="Enter city">
                        </div>
                        <div class="col">
                            <label for="postalCode" class="form-label mb-2">Postal Code <span class="text-danger">*</span></label>
                            <input type="text" id="postalCode" class="form-control form-control-sm" placeholder="Enter postal code">
                        </div>
                        <div class="col">
                            <label for="country" class="form-label mb-2">Country <span class="text-danger">*</span></label>
                            <input type="text" id="country" class="form-control form-control-sm" placeholder="Enter country">
                        </div>
                    </div>


                </div>
            </div>


            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold">Get Quotation</h5>
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">Size <span class="text-danger">*</span></label>
                <select id="size" class="form-select form-select-sm" aria-label="Select Size">
                    <option value="" disabled selected>Select size</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color <span class="text-danger">*</span></label>
                <select id="color" class="form-select form-select-sm" aria-label="Select Color">
                    <option value="" disabled selected>Select color</option>
                    <option value="White">White</option>
                    <option value="Black">Black</option>
                    <option value="Gray">Gray</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Thickness <span class="text-danger">*</span></label>
                <select id="brand" class="form-select form-select-sm" aria-label="Select Brand">
                    <option value="" disabled selected>Select thickness</option>
                    <option value="Shirt Flex">1x1</option>
                    <option value="Brand X">2x2</option>
                    <option value="Brand Y">3x3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="remarks" class="form-label">Remarks <span class="text-danger">*</span></label>
                <textarea id="remarks" placeholder="Enter additional details" class="form-control form-control-sm"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Add Image Attachment <span class="text-danger">*</span></label>
                <input class="form-control form-control-sm" name="upload_file" id="formFileSm" type="file" accept="image/*">
            </div>
            <div>
                <button type="submit" class="btn btn-danger w-100">Get Quotation</button>
            </div>
        </div>
    </section> -->

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
                <h2 class="fw-bold">Sample Product for Aluminum Manufacturing</h2>
                <!-- Rating and Stock -->
                <div class="d-flex align-items-center mb-2">
                    <span class="me-2 text-warning">★ ★ ★ ★ ★</span>
                    <span class="text-muted me-3">5.00 Rating</span>
                    <span class="text-success">In Stock</span>
                </div>
                <!-- Description -->
                <p>sample product description</p>
                <!-- Quantity and Price -->
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-group me-3" style="width: 120px;">
                        <button class="btn btn-outline-danger">-</button>
                        <input type="number" name="quantity" class="form-control" value="1">
                        <button class="btn btn-outline-danger">+</button>
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="price" value="">
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0">₱1000</h4>
                        <small class="text-muted">+12% VAT Added</small>
                    </div>
                </div>

                <!-- Product Details -->
                <h5>Product Details</h5>
                <div class="mb-3">

                    <label for="size" class="form-label text-muted">Size</label>
                    <select id="size" class="form-select form-select-sm" aria-label="Select Size">
                        <option value="" disabled selected>Select size</option>
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label text-muted">Thickness</label>
                    <select id="brand" class="form-select form-select-sm" aria-label="Select Brand">
                        <option value="" disabled selected>Select thickness</option>
                        <option value="Shirt Flex">1x1</option>
                        <option value="Brand X">2x2</option>
                        <option value="Brand Y">3x3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label text-muted">Remarks</label>
                    <textarea name="" id="" placeholder="Enter additional details" class="form-control form-control-sm"></textarea>
                </div>

                <!-- Add to Cart Button -->
                <button type="submit" class="card-button btn btn-danger btn-lg w-100 mb-4">Add to Cart</button>
            </div>

        </div>
    </div>
</body>
<!--end::Body-->

<!-- Footer -->
@include ('plus.footer')
<!-- End of Footer -->

</html>