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
        <h2 class="mb-4">Get a quotation</h2>
        <div class="row">

            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/12515071/pexels-photo-12515071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Main Product" class="mb-3 rounded" style="height: 500px; width: 100%;">
                <p>Product Details: </p>
                <p class="text-muted">*insert product details</p>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <form action="/submit" method="post">
                        <div class="row">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="type" class="form-label text-muted">Full Name <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm" type="text" placeholder="Input name" aria-label=".form-control-sm example">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label text-muted">Email Address <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm" type="text" placeholder="johndoe@example.com" aria-label=".form-control-sm example">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label text-muted">Phone Number <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-sm" type="text" placeholder="+639xxxxxxxxx" aria-label=".form-control-sm example">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label text-muted">Product <span class="text-danger">*</span></label>
                                    <select id="type" name="type" class="form-select form-select-sm">
                                        <option value="" disabled selected>Select Product</option>
                                        <option value="tempered">Tempered</option>
                                        <option value="laminated">Laminated</option>
                                        <option value="frosted">Frosted</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <p class="text-muted">Color <span class="text-danger">*</span></p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Red
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Blue
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label text-muted">Size <span class="text-danger">*</span></label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option disabled selected>Select Size</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label text-muted">Number of Pieces <span class="text-danger">*</span></label>
                                <input type="number" id="quantity" name="quantity" class="form-control form-control-sm" placeholder="Input quantity" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label text-muted">Cutting Details</label>
                                <textarea id="address" name="address" rows="3" placeholder="Enter cutting details"
                                    class="form-control form-control-sm"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <!-- File Upload -->
                                <div class="mb-3">
                                    <label for="file" class="form-label text-muted">Upload Project Plans</label>
                                    <input type="file" id="file" name="file" class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label text-muted">More Details</label>
                                    <textarea id="address" name="address" rows="3" placeholder="Enter remarks or special instructions"
                                        class="form-control form-control-sm"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-danger btn-lg w-100">Add more items</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">Go to checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>


<!-- Footer -->
@include ('plus.footer')
<!-- End of Footer -->

</html>