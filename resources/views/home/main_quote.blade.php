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

    <div class="container py-5">
        <h3 class="mb-4 text-muted">Get a quotation for:</h3>
        <div class="mb-3">
            <label for="quantity" class="form-label text-muted">Type <span class="text-danger">*</span></label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option disabled selected>Select a process</option>
                <option value="1">Glass Processing</option>
                <option value="2">Bullet Proofing</option>
            </select>
        </div>
        <div class="row">
            <!-- 
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/12515071/pexels-photo-12515071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Main Product" class="mb-3 rounded" style="height: 500px; width: 100%;">
                <p>Product Details: </p>
                <p class="text-muted">*insert product details</p>
            </div> -->


            <div class="col-md-12">
                <div class="details-grid">
                    <div class="mb-3 d-flex gap-3">
                        <div class="flex-grow-1">
                            <label for="quantity" class="form-label text-muted">Number of Pieces <span class="text-danger">*</span></label>
                            <input type="number" id="quantity" name="quantity" class="form-control form-control-sm" placeholder="Input quantity" required>
                        </div>
                        <div class="flex-grow-1">
                            <label for="size" class="form-label text-muted">Size <span class="text-danger">*</span></label>
                            <select id="size" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                                <option disabled selected value="">Select Size</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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

                </div>

                <div class="mb-3">
                    <label for="address" class="form-label text-muted">Remarks <span class="text-danger">*</span></label>
                    <textarea id="address" name="remarks" rows="3" placeholder="Enter special instructions or remarks here" required
                        class="form-control form-control-sm"></textarea>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label text-muted">Upload Sample</label>
                    <input type="file" class="form-control form-control-sm" id="file" name="file" accept=".pdf, .doc, .docx, .jpg, .jpeg, .png">
                    <div id="file-name" class="file-name mt-3 text-muted">No file chosen</div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-danger btn-lg w-100">Add more items</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Get quotation</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.getElementById('file').addEventListener('change', function(e) {
            const fileName = e.target.files.length ? e.target.files[0].name : 'No file chosen';
            document.getElementById('file-name').textContent = fileName;
        });
    </script>

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>




</html>