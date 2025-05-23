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

    <style>
        .dropzone {
            border: 2px dashed #ccc;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            color: #999;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        .dropzone.dragover {
            border-color: #007bff;
            color: #007bff;
        }

        .preview-list {
            list-style: none;
            padding-left: 0;
        }

        .preview-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 8px;
            position: relative;
        }

        .preview-item img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 5px;
        }

        .preview-item .remove-btn {
            position: absolute;
            top: 5px;
            right: 10px;
            color: red;
            cursor: pointer;
            font-weight: bold;
        }

        .progress {
            width: 100%;
            height: 8px;
            margin-top: 5px;
            background-color: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background-color: #0d6efd;
            width: 0%;
            transition: width 0.3s ease;
        }

        .drag-over {
            border: 2px dashed #0d6efd;
            background-color: #f0f8ff;
        }
    </style>

    <div class="scard-header bg-white mt-5 me-5 ms-5 mb-3">
        <nav aria-label="breadcrumb">
            <h6>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-danger" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-danger" href="#">Get Quote</a></li>
                    <li class="breadcrumb-item "><a>Glass Processing</a></li>
                </ol>
            </h6>
        </nav>
    </div>

    <div id="alertContainer" class="ms-5 me-5 mb-3"></div>
    <form action="/create-quotation" method="POST" enctype="multipart/form-data">
        @csrf
        <div class=" me-5 ms-5">
            <div class="mb-3">
                <label for="type" class="form-label text-muted">Type <span class="text-danger">*</span></label>
                <select id="type" class="form-select form-select-sm" aria-label="Type selection" disabled>
                    <option value="glass" disabled selected>Glass Processing</option>
                </select>
                <input type="hidden" name="quotation_type" value="glass">
            </div>

            <div id="item-rows-container">
                <!-- Initial row -->
                <div class="row mb-3 item-row" data-row="1">
                    <!-- Glass Type -->
                    <div class="col-md-3">
                        <label class="form-label text-muted">Glass Type <span class="text-danger">*</span></label>
                        <select name="type[]" class="form-select form-select-sm" required>
                            <option disabled selected value>Select Glass Type</option>
                            @foreach($products as $product)
                            @if($product->category_id == 4)
                            <option value="{{$product->id}}">{{ $product->display_name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <!-- Thickness -->
                    <div class="col-md-2">
                        <label class="form-label text-muted">Thickness <span class="text-danger">*</span></label>
                        <select name="thickness[]" class="form-select form-select-sm" required>
                            <option disabled selected value="">Select Thickness</option>
                            <option value="5mm">5mm</option>
                            <option value="6mm">6mm</option>
                            <option value="8mm">8mm</option>
                            <option value="10mm">10mm</option>
                            <option value="12mm">12mm</option>
                            <option value="15mm">15mm</option>
                            <option value="19mm">19mm</option>
                        </select>
                    </div>

                    <!-- Color -->
                    <div class="col-md-1">
                        <label class="form-label text-muted">Color <span class="text-danger">*</span></label>
                        <select name="color[]" class="form-select form-select-sm" required>
                            <option disabled selected value="">Select Color</option>
                            <option value="clear">Clear</option>
                            <option value="bronze">Bronze</option>
                            <option value="blue">Blue</option>
                            <option value="green">Green</option>
                            <option value="euro-gray">Euro Gray</option>
                            <option value="dark-gray">Dark Gray</option>
                            <option value="reflective-bronze">Reflective Bronze</option>
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

                    <!-- Quantity -->
                    <div class="col-md-1">
                        <label class="form-label text-muted">Qty <span class="text-danger">*</span></label>
                        <input name="quantity[]" class="form-control form-control-sm" type="number" min="1" value="1" required>
                    </div>

                    <div class="col-md-1 d-flex align-items-center">
                        <div class="d-flex justify-content-center gap-3 w-100">
                            <div>
                                <i class="fa-solid fa-square-plus fs-3 text-dark add-item-row-btn "></i>
                            </div>
                            <div>
                                <i class="fa-solid fa-square-minus fs-3 text-danger remove-row-btn" style="display: none;"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Remarks -->
                    <div class="mt-3">
                        <label for="remarks" class="form-label text-muted">Cutting Details<span class="text-danger">*</span></label>
                        <textarea id="remarks" name="cutting_details[]" rows="3" placeholder="Enter special instructions or cutting details here"
                            class="form-control form-control-sm" required></textarea>
                    </div>

                    <!-- Remove button (hidden for first row) -->
                    <!-- <div class="col-md-12 mt-2 text-end">
                        <button type="button" class="btn btn-sm btn-danger remove-row-btn" style="display: none;">Remove Row</button>
                    </div> -->


                </div>
            </div>


            <!-- File Upload Section -->
            <div class="col-md-12 mb-3">
                <label class="form-label text-muted">Upload Samples</label>
                <div id="dropzone" class="dropzone">
                    Drag & drop files here or click to select
                </div>
                <input id="fileUpload" name="filenames[]" type="file" hidden multiple accept=".pdf, .doc, .docx, .jpg, .jpeg, .png">
                <ul id="fileList" class="preview-list mt-3 text-muted"></ul>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <!-- <div class="col-md-6 mb-2">
                        <button type="button" class="btn btn-primary btn-lg w-100" id="add-item-row-btn">Add item row</button>
                    </div> -->
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-danger btn-lg w-100">Submit Quotation Request</button>
                    </div>
                </div>
                <!-- {{-- <button type="button" class="btn btn-primary col-" >Add item row</button>
                <button type="submit" class="btn btn-danger btn-lg ">Submit Quotation Request</button> --}} -->
            </div>

    </form>
    </div>

    </div>



    <!-- Your existing container and button -->
    <div id="item-rows-container">
        <!-- Your initial row here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('item-rows-container');
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
                new bootstrap.Alert(alertContainer.querySelector('.alert'));
            }

            // Event delegation for add buttons
            container.addEventListener('click', function(e) {
                // Handle add row button click
                if (e.target.closest('.add-item-row-btn')) {
                    if (rowCount >= MAX_ROWS) {
                        showMaxItemsAlert();
                        return;
                    }

                    rowCount++;
                    const template = document.querySelector('.item-row');
                    const newRow = template.cloneNode(true);

                    // Remove ID from cloned add button to prevent duplicates
                    newRow.querySelector('.add-item-row-btn').removeAttribute('id');

                    newRow.setAttribute('data-row', rowCount);
                    newRow.querySelector('.remove-row-btn').style.display = 'inline-block';

                    const inputs = newRow.querySelectorAll('input, select, textarea');
                    inputs.forEach(input => {
                        if (input.name !== 'qty[]') input.value = '';
                    });

                    container.appendChild(newRow);
                }

                // Handle remove row button click
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

            // Initialize the first remove button as hidden
            document.querySelector('.item-row .remove-row-btn').style.display = 'none';
        });
    </script>

    <script>
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileUpload');
        const fileList = document.getElementById('fileList');
        const form = document.querySelector('form');

        let filesToUpload = [];

        dropzone.addEventListener('click', () => fileInput.click());

        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('dragover');
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('dragover');
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('dragover');
            handleFiles(e.dataTransfer.files);
        });

        fileInput.addEventListener('change', () => {
            handleFiles(fileInput.files);
        });

        function handleFiles(selectedFiles) {
            const fileInput = document.getElementById('fileUpload');
            const newFiles = Array.from(selectedFiles);

            // Check duplicates only based on filesToUpload array (not input.files)
            const existingFileNames = filesToUpload.map(f => f.file.name);

            // Filter out duplicates
            const uniqueFiles = newFiles.filter(file => !existingFileNames.includes(file.name));

            if (uniqueFiles.length > 0) {
                uniqueFiles.forEach(file => {
                    const fileId = crypto.randomUUID();
                    filesToUpload.push({
                        id: fileId,
                        file: file,
                        progress: 0,
                        interval: null
                    });
                });

                // Now update the input.files properly using all files in filesToUpload
                const dataTransfer = new DataTransfer();
                filesToUpload.forEach(item => dataTransfer.items.add(item.file));
                fileInput.files = dataTransfer.files;
            } else {
                console.log('No new files were added (files are duplicates).');
            }

            updateFileList(); // Always update UI
        }

        function updateFileList() {
            fileList.innerHTML = '';

            filesToUpload.forEach((item, index) => {
                const {
                    id,
                    file,
                    progress
                } = item;

                const li = document.createElement('li');
                li.classList.add('preview-item');
                li.setAttribute('data-id', id);

                if (file.type.startsWith('image/')) {
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(file);
                    img.onload = () => URL.revokeObjectURL(img.src);
                    li.appendChild(img);
                }

                const span = document.createElement('span');
                span.textContent = file.name;
                li.appendChild(span);

                const removeBtn = document.createElement('span');
                removeBtn.classList.add('remove-btn');
                removeBtn.innerHTML = '&times;';
                removeBtn.addEventListener('click', () => {
                    removeFileById(id);
                });
                li.appendChild(removeBtn);

                // Progress bar
                const progressWrapper = document.createElement('div');
                progressWrapper.className = 'progress';
                const progressBar = document.createElement('div');
                progressBar.className = 'progress-bar';
                progressBar.style.width = `${progress}%`;
                progressWrapper.appendChild(progressBar);
                li.appendChild(progressWrapper);

                fileList.appendChild(li);

                // Start upload simulation if not already complete
                if (progress < 100 && item.interval === null) {
                    item.interval = simulateUpload(item, progressBar);
                }
            });
        }

        function simulateUpload(fileItem, barElement) {
            return setInterval(() => {
                if (fileItem.progress < 100) {
                    fileItem.progress += 10;
                    barElement.style.width = `${fileItem.progress}%`;
                } else {
                    clearInterval(fileItem.interval);
                    fileItem.interval = null;
                }
            }, 100);
        }

        function removeFileById(fileId) {
            const index = filesToUpload.findIndex(f => f.id === fileId);
            if (index > -1) {
                const fileItem = filesToUpload[index];
                if (fileItem.interval) clearInterval(fileItem.interval);
                filesToUpload.splice(index, 1);

                // Update the actual input files after removing
                const dataTransfer = new DataTransfer();
                filesToUpload.forEach(item => dataTransfer.items.add(item.file));
                fileInput.files = dataTransfer.files;

                updateFileList();
            }
        }

        //
    </script>

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>




</html>