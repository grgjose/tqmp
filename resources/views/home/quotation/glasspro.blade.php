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

    <div class=" me-5 ms-5 py-5">
        <form action="/create-quotation" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header bg-white py-3">
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
                            <option value="10mm">10mm</option>
                            <option value="15mm">15mm</option>
                            <option value="20mm">20mm</option>
                            <option value="25mm">25mm</option>
                        </select>
                    </div>

                    <!-- Color -->
                    <div class="col-md-2">
                        <label class="form-label text-muted">Color <span class="text-danger">*</span></label>
                        <select name="color[]" class="form-select form-select-sm" required>
                            <option disabled selected value="">Select Color</option>
                            <option value="white">White</option>
                            <option value="aqua">Aqua</option>
                            <option value="shade">Shade</option>
                            <option value="clear">clear</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>

                    <!-- Height -->
                    <div class="col-md-1">
                        <label class="form-label text-muted">Height 1 <span class="text-danger">*</span></label>
                        <input name="height1[]" class="form-control form-control-sm" type="number" placeholder="mm" required>
                    </div>
                    <div class="col-md-1">
                        <label class="form-label text-muted">Height 2 <span class="text-danger">*</span></label>
                        <input name="height2[]" class="form-control form-control-sm" type="number" placeholder="mm">
                    </div>

                    <!-- Width -->
                    <div class="col-md-1">
                        <label class="form-label text-muted">Width 1 <span class="text-danger">*</span></label>
                        <input name="width1[]" class="form-control form-control-sm" type="number" placeholder="mm" required>
                    </div>
                    <div class="col-md-1">
                        <label class="form-label text-muted">Width 2 <span class="text-danger">*</span></label>
                        <input name="width2[]" class="form-control form-control-sm" type="number" placeholder="mm">
                    </div>

                    <!-- Quantity -->
                    <div class="col-md-1">
                        <label class="form-label text-muted">Qty <span class="text-danger">*</span></label>
                        <input name="quantity[]" class="form-control form-control-sm" type="number" min="1" value="1" required>
                    </div>

                    <!-- Remarks -->
                    <div class="mt-3">
                        <label for="remarks" class="form-label text-muted">Cutting Details<span class="text-danger">*</span></label>
                        <textarea id="remarks" name="cutting_details" rows="3" placeholder="Enter special instructions or cutting details here"
                            class="form-control form-control-sm"></textarea>
                    </div>

                    <!-- Remove button (hidden for first row) -->
                    <div class="col-md-12 mt-2 text-end">
                        <button type="button" class="btn btn-sm btn-danger remove-row-btn" style="display: none;">Remove Row</button>
                    </div>
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
                    <div class="col-md-6 mb-2">
                        <button type="button" class="btn btn-primary btn-lg w-100" id="add-item-row-btn">Add item row</button>
                    </div>
                    <div class="col-md-6 mb-2">
                        <button type="submit" class="btn btn-danger btn-lg w-100">Submit Quotation Request</button>
                    </div>
                </div>
                {{-- <button type="button" class="btn btn-primary col-" >Add item row</button>
                <button type="submit" class="btn btn-danger btn-lg ">Submit Quotation Request</button> --}}
            </div>

        </form>
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
            const currentFiles = fileInput.files;
            const newFiles = Array.from(selectedFiles);

            // Check for duplicates by comparing file name and size
            const existingFileNames = Array.from(currentFiles).map(file => file.name);

            // Filter out files that are already in the list
            const uniqueFiles = newFiles.filter(file => !existingFileNames.includes(file.name));

            if (uniqueFiles.length > 0) {
                // Add only unique files to the filesToUpload array
                uniqueFiles.forEach(file => {
                    const fileId = crypto.randomUUID();
                    filesToUpload.push({
                        id: fileId,
                        file: file,
                        progress: 0,
                        interval: null
                    });
                });

                // Update the filenames input with the new files, avoiding duplicates
                const allFiles = [...currentFiles, ...uniqueFiles];
                const dataTransfer = new DataTransfer();
                allFiles.forEach(file => dataTransfer.items.add(file));
                fileInput.files = dataTransfer.files;

                updateFileList();
            } else {
                console.log('No new files were added (files are duplicates).');
            }
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