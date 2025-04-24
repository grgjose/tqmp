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
    <div class=" me-5 ms-5 py-5">
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

        <div id="item-rows-container">
            <!-- Initial row -->
            <div class="row mb-3 item-row" data-row="1">
                <!-- Glass Type -->
                <div class="col-md-2">
                    <label class="form-label text-muted">Glass Type <span class="text-danger">*</span></label>
                    <select name="type[]" class="form-select form-select-sm" required>
                        <option disabled selected value>Select Glass Type</option>
                        <option value="1">Tempered Glass</option>
                        <option value="2">Laminated Glass</option>
                        <option value="3">Curved Tempered Glass</option>
                        <option value="4">Insulating Glass Unit (IGU)</option>
                    </select>
                </div>

                <!-- Size -->
                <div class="col-md-1">
                    <label class="form-label text-muted">Size <span class="text-danger">*</span></label>
                    <select name="size[]" class="form-select form-select-sm" required>
                        <option disabled selected value="">Select Size</option>
                        <option value="1">Small</option>
                        <option value="2">Medium</option>
                        <option value="3">Large</option>
                        <option value="4">Custom</option>
                    </select>
                </div>

                <!-- Thickness -->
                <div class="col-md-2">
                    <label class="form-label text-muted">Thickness <span class="text-danger">*</span></label>
                    <select name="thickness[]" class="form-select form-select-sm" required>
                        <option disabled selected value="">Select Thickness</option>
                        <option value="1">10mm</option>
                        <option value="2">15mm</option>
                        <option value="3">20mm</option>
                        <option value="4">25mm</option>
                    </select>
                </div>

                <!-- Height -->
                <div class="col-md-1">
                    <label class="form-label text-muted">Height 1 <span class="text-danger">*</span></label>
                    <input name="height1[]" class="form-control form-control-sm" type="number" placeholder="mm" required>
                </div>
                <div class="col-md-1">
                    <label class="form-label text-muted">Height 2 <span class="text-danger">*</span></label>
                    <input name="height2[]" class="form-control form-control-sm" type="number" placeholder="mm" required>
                </div>

                <!-- Width -->
                <div class="col-md-1">
                    <label class="form-label text-muted">Width 1 <span class="text-danger">*</span></label>
                    <input name="width1[]" class="form-control form-control-sm" type="number" placeholder="mm" required>
                </div>
                <div class="col-md-1">
                    <label class="form-label text-muted">Width 2 <span class="text-danger">*</span></label>
                    <input name="width2[]" class="form-control form-control-sm" type="number" placeholder="mm" required>
                </div>

                <!-- Color -->
                <div class="col-md-2">
                    <label class="form-label text-muted">Color <span class="text-danger">*</span></label>
                    <select name="color[]" class="form-select form-select-sm" required>
                        <option disabled selected value="">Select Color</option>
                        <option value="1">Black</option>
                        <option value="2">White</option>
                        <option value="3">Silver</option>
                        <option value="4">Gray</option>
                        <option value="5">Custom</option>
                    </select>
                </div>

                <!-- Quantity -->
                <div class="col-md-1">
                    <label class="form-label text-muted">Qty <span class="text-danger">*</span></label>
                    <input name="qty[]" class="form-control form-control-sm" type="number" min="1" value="1" required>
                </div>

                <!-- Remarks -->
                <div class=" mt-3 mb-3">
                    <label for="remarks" class="form-label text-muted">Remarks <span class="text-danger">*</span></label>
                    <textarea id="remarks" name="remarks" rows="3" placeholder="Enter special instructions or remarks here"
                        class="form-control form-control-sm" required></textarea>
                </div>

                <!-- Remove button (hidden for first row) -->
                <div class="col-md-12 mt-2 text-end">
                    <button type="button" class="btn btn-sm btn-danger remove-row-btn" style="display: none;">Remove Row</button>
                </div>
            </div>
        </div>


        <div class="mb-3">
            <label for="file" class="form-label text-muted">Upload Sample (optional)</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" accept=".pdf, .doc, .docx, .jpg, .jpeg, .png">
            <div id="file-name" class="file-name mt-3 text-muted">No file chosen</div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" id="add-item-row-btn">Add item row</button>
                <button type="submit" class="btn btn-primary btn-lg ">Get quotation</button>
            </div>
        </div>
    </div>


    </div>
    <!-- Add this alert div at the top of your form (initially hidden) -->
    <!-- Alert Container (initially empty) -->
    <div id="alertContainer" class="ms-5 me-5"></div>


    <!-- Your existing container and button -->
    <div id="item-rows-container">
        <!-- Your initial row here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('item-rows-container');
            const addButton = document.getElementById('add-item-row-btn');
            const alertContainer = document.getElementById('alertContainer');
            let rowCount = 1;
            const MAX_ROWS = 10;

            // Function to show Bootstrap alert
            function showMaxItemsAlert() {
                alertContainer.innerHTML = `
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Maximum limit reached: You can only add up to 10 items
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

                // Initialize Bootstrap alert
                new bootstrap.Alert(alertContainer.querySelector('.alert'));
            }

            // Add new row
            addButton.addEventListener('click', function() {
                if (rowCount >= MAX_ROWS) {
                    showMaxItemsAlert();
                    return;
                }

                rowCount++;
                const template = document.querySelector('.item-row');
                const newRow = template.cloneNode(true);

                newRow.setAttribute('data-row', rowCount);
                newRow.querySelector('.remove-row-btn').style.display = 'inline-block';

                const inputs = newRow.querySelectorAll('input, select, textarea');
                inputs.forEach(input => {
                    if (input.name !== 'qty[]') input.value = '';
                });

                container.appendChild(newRow);
            });

            // Remove row
            container.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-row-btn')) {
                    const rows = document.querySelectorAll('.item-row');
                    if (rows.length > 1) {
                        e.target.closest('.item-row').remove();
                        rowCount--;
                    } else {
                        alert("You need to keep at least one row");
                    }
                }
            });
        });
    </script>


    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>




</html>