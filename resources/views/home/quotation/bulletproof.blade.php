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
    </style>

    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->
    <div class="container py-5">
        <form method="POST" action="/create-quotation" enctype="multipart/form-data">
            @csrf
            <h3 class="mb-4 text-muted">Get a quotation for:</h3>
            
            <div class="mb-3">
                <label for="quantity" class="form-label text-muted">Type <span class="text-danger">*</span></label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" disabled>
                    <option value="bullet" disabled selected>Bullet Proofing</option>
                </select>
                <input type="hidden" name="quotation_type" value="bullet">
            </div>

            <!-- Plate Number and Model -->
            <div class="col-md-12">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="plateNumber" class="form-label text-muted">Plate Number <span class="text-danger">*</span></label>
                        <input id="plateNumber" name="plateNumber" class="form-control form-control-sm" type="text" placeholder="Enter Plate Number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="model" class="form-label text-muted">Model <span class="text-danger">*</span></label>
                        <select id="model" name="model" class="form-select form-select-sm" required>
                            <option disabled selected value="">Select Model</option>
                            <option value="Fortuner">Fortuner</option>
                            <option value="Land Cruiser">Land Cruiser</option>
                            <option value="Montero">Montero</option>
                            <option value="Other Model">Other Model</option>
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
                            <input class="form-check-input" type="radio" name="color" id="colorBlack" value="black" required>
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
                            <input class="form-check-input" type="checkbox" name="services[]" id="armouredCar" value="armoured">
                            <label class="form-check-label" for="armouredCar">Armoured Car</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" id="radiatorGrill" value="radiator">
                            <label class="form-check-label" for="radiatorGrill">Radiator Grill</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" id="gasTankCover" value="gasTank">
                            <label class="form-check-label" for="gasTankCover">Gas Tank Cover</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" id="upgradedSuspension" value="suspension">
                            <label class="form-check-label" for="upgradedSuspension">Upgraded Suspension</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" id="batteryCover" value="battery">
                            <label class="form-check-label" for="batteryCover">Battery & Fuse Box Cover</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" id="runFlatInsert" value="runFlat">
                            <label class="form-check-label" for="runFlatInsert">Run Flat Insert</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" id="backDoorPartition" value="partition">
                            <label class="form-check-label" for="backDoorPartition">Back Door Partition</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" id="bulletCatcher" value="catcher">
                            <label class="form-check-label" for="bulletCatcher">Bullet Catcher</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" id="premiumSeats" value="seats">
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

            <!-- File Upload Section -->
            <div class="col-md-12 mb-3">
                <label class="form-label text-muted">Upload Samples</label>
                <div id="dropzone" class="dropzone">
                    Drag & drop files here or click to select
                </div>
                <input id="fileUpload" name="filenames[]" type="file" hidden multiple accept=".pdf, .doc, .docx, .jpg, .jpeg, .png">
                <ul id="fileList" class="preview-list mt-3 text-muted"></ul>
            </div>

            <!-- Buttons -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <button type="submit" class="btn btn-danger btn-lg w-100">Submit Quotation Request</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileUpload');
        const fileList = document.getElementById('fileList');
    
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
            Array.from(selectedFiles).forEach(file => {
                const fileId = crypto.randomUUID();
                filesToUpload.push({
                    id: fileId,
                    file: file,
                    progress: 0,
                    interval: null
                });
            });
            updateFileList();
        }
    
        function updateFileList() {
            fileList.innerHTML = '';
    
            filesToUpload.forEach((item, index) => {
                const { id, file, progress } = item;
    
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
    </script>

    <script>
        document.getElementById('model').addEventListener('change', function () {
            const otherInputId = 'otherModelInput';
            let otherInput = document.getElementById(otherInputId);
        
            if (this.value === 'Other Model') {
                if (!otherInput) {
                    otherInput = document.createElement('input');
                    otherInput.type = 'text';
                    otherInput.name = 'other_model';
                    otherInput.className = 'form-control form-control-sm mt-2';
                    otherInput.placeholder = 'Enter model';
                    otherInput.id = otherInputId;
                    this.parentElement.appendChild(otherInput);
                }
            } else if (otherInput) {
                otherInput.remove();
            }
        });
    </script>

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>




</html>