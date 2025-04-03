<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Get Quotaion - Glass Processing | Total Quality Management Products Philippines</title>
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


    <section id="form" class="fade-in-up container py-5">
        <div class="col-md-12" style="border: 1px solid #ccc; padding: 20px; border-radius: 3px;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold">Get Quotation</h5>
                <!-- <h5 class="fw-bold">Glass Processing</h5> -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
            </div>
            <form action="/create-quotation" method="POST" class="py-3" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="process" value="{{ $process }}">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="fullName" class="form-label fw-bold">Size <span class="text-danger">*</span></label>
                        <input type="text" name="size" class="form-control" id="size" placeholder="Add preferred size">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label fw-bold">Color <span class="text-danger">*</span></label>
                        <input type="text" name="color" class="form-control" id="color" placeholder="Add preferred color">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label fw-bold">Add Details <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="details" id="details" rows="5" placeholder="Add your description here"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label fw-bold">Add Image Attachment <span class="text-danger">*</span></label>
                    <input class="form-control form-control-sm" name="upload_file" id="formFileSm" type="file" accept="image/*">
                </div>
                <div>
                    <button type="submit" class="btn btn-danger w-100">Get Quotation</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>

</html>