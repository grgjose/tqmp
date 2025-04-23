<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Get Quoatation - Bullet Proofing | Total Quality Management Products Philippines</title>
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
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" disabled>
                <option disabled selected>Bullet Proofing</option>
                <option value="1">Glass Processing</option>
                <option value="2">Bullet Proofing</option>
            </select>
        </div>
        <div class="container">

    <div class="row">
        <!-- Plate Number and Model -->
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="plateNumber" class="form-label text-muted">Plate Number <span class="text-danger">*</span></label>
                    <input id="plateNumber" class="form-control form-control-sm" type="text" placeholder="Enter Plate Number" required>
                </div>
                <div class="col-md-6">
                    <label for="model" class="form-label text-muted">Model <span class="text-danger">*</span></label>
                    <select id="model" class="form-select form-select-sm" required>
                        <option disabled selected value="">Select Model</option>
                        <option value="1">Fortuner</option>
                        <option value="2">Land Cruiser</option>
                        <option value="3">Montero</option>
                        <option value="4">Other Model</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Color and Services -->
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-md-6">
                    <p class="text-muted">Color <span class="text-danger">*</span></p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="color" id="colorBlack" value="black">
                        <label class="form-check-label" for="colorBlack">Black</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="color" id="colorRed" value="red">
                        <label class="form-check-label" for="colorRed">Red</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="color" id="colorWhite" value="white">
                        <label class="form-check-label" for="colorWhite">White</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="color" id="colorSilver" value="silver">
                        <label class="form-check-label" for="colorSilver">Silver</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="color" id="colorGray" value="gray">
                        <label class="form-check-label" for="colorGray">Gray</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="color" id="colorMaroon" value="maroon">
                        <label class="form-check-label" for="colorMaroon">Maroon</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-muted">Services <span class="text-danger">*</span></label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="armouredCar" value="armoured">
                        <label class="form-check-label" for="armouredCar">Armoured Car</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="radiatorGrill" value="radiator">
                        <label class="form-check-label" for="radiatorGrill">Radiator Grill</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gasTankCover" value="gasTank">
                        <label class="form-check-label" for="gasTankCover">Gas Tank Cover</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="upgradedSuspension" value="suspension">
                        <label class="form-check-label" for="upgradedSuspension">Upgraded Suspension</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="batteryCover" value="battery">
                        <label class="form-check-label" for="batteryCover">Battery & Fuse Box Cover</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="runFlatInsert" value="runFlat">
                        <label class="form-check-label" for="runFlatInsert">Run Flat Insert</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="backDoorPartition" value="partition">
                        <label class="form-check-label" for="backDoorPartition">Back Door Partition</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bulletCatcher" value="catcher">
                        <label class="form-check-label" for="bulletCatcher">Bullet Catcher</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="premiumSeats" value="seats">
                        <label class="form-check-label" for="premiumSeats">Premium Leather Seats</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Remarks -->
        <div class="col-md-12 mb-3">
            <label for="remarks" class="form-label text-muted">Remarks <span class="text-danger">*</span></label>
            <textarea id="remarks" name="remarks" rows="3" placeholder="Enter special instructions or remarks here" 
                class="form-control form-control-sm" required></textarea>
        </div>

        <!-- File Upload -->
        <div class="col-md-12 mb-3">
            <label for="fileUpload" class="form-label text-muted">Upload Sample</label>
            <input class="form-control form-control-sm" id="fileUpload" type="file" 
                accept=".pdf, .doc, .docx, .jpg, .jpeg, .png">
            <div id="file-name" class="file-name mt-3 text-muted">No file chosen</div>
        </div>

        <!-- Buttons -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <button type="submit" class="btn btn-danger btn-lg w-100">Add more items</button>
                </div>
                <div class="col-md-6 mb-2">
                    <button type="submit" class="btn btn-primary btn-lg w-100">Get quotation</button>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>




</html>