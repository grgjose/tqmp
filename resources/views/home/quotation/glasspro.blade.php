<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Get Quoatation - Glass Processing | Total Quality Management Products Philippines</title>
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
            <label for="type" class="form-label text-muted">Type <span class="text-danger">*</span></label>
            <select id="type" class="form-select form-select-sm" aria-label="Type selection" disabled>
                <option disabled selected value>Glass Processing</option>
                <option value="1">Glass Processing</option>
                <option value="2">Bullet Proofing</option>
                <option value="3">Other Type</option>
            </select>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="details-grid">
                            <!-- First row - Size and Thickness -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="size" class="form-label text-muted">Size <span class="text-danger">*</span></label>
                                    <select id="size" class="form-select form-select-sm" aria-label="Size selection" required>
                                        <option disabled selected value="">Select Size</option>
                                        <option value="1">Small</option>
                                        <option value="2">Medium</option>
                                        <option value="3">Large</option>
                                        <option value="4">Custom</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="thickness" class="form-label text-muted">Thickness (mm) <span class="text-danger">*</span></label>
                                    <select id="thickness" class="form-select form-select-sm" aria-label="Thickness selection" required>
                                        <option disabled selected value="">Select Thickness</option>
                                        <option value="1">10mm</option>
                                        <option value="2">15mm</option>
                                        <option value="3">20mm</option>
                                        <option value="4">25mm</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Second row - Height and Width -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="height" class="form-label text-muted">Height (mm) <span class="text-danger">*</span></label>
                                    <input id="height" class="form-control form-control-sm" type="number" placeholder="Enter height in mm" aria-label="Height" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="width" class="form-label text-muted">Width (mm) <span class="text-danger">*</span></label>
                                    <input id="width" class="form-control form-control-sm" type="number" placeholder="Enter width in mm" aria-label="Width" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Third row - Color and Quantity/Remarks -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p class="text-muted">Color <span class="text-danger">*</span></p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="color" id="colorBlack" value="black">
                                <label class="form-check-label" for="colorBlack">
                                    Black
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="color" id="colorWhite" value="white">
                                <label class="form-check-label" for="colorWhite">
                                    White
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="color" id="colorSilver" value="silver">
                                <label class="form-check-label" for="colorSilver">
                                    Silver
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="color" id="colorGray" value="gray">
                                <label class="form-check-label" for="colorGray">
                                    Gray
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="color" id="colorCustom" value="custom">
                                <label class="form-check-label" for="colorCustom">
                                    Custom
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="qty" class="form-label text-muted">Quantity <span class="text-danger">*</span></label>
                            <input id="qty" class="form-control form-control-sm" type="number" min="1" value="1" required>

                            <label for="remarks" class="form-label text-muted mt-3">Remarks</label>
                            <textarea id="remarks" name="remarks" rows="3" placeholder="Enter special instructions or remarks here"
                                class="form-control form-control-sm"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="file" class="form-label text-muted">Upload Sample (optional)</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file" accept=".pdf, .doc, .docx, .jpg, .jpeg, .png">
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

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>




</html>