<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Total Quality Management Products Philippines</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Toast -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    <!-- Chatbot CSS -->
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
    <!-- Chatbot JS -->
    <script src="{{ asset('js/chatbot.js') }}"></script>
    
    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('storage/css/main.css') }}">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->
    <section id="hero" class="hero section dark-background" style="background: linear-gradient(rgba(23, 38, 71, 0.2), rgba(30, 26, 26, 0.2)), url('storage/logos/tqmpnew-edited.jpg') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center text-center text-light">
                <div class="col-xl-9 col-lg-8">
                    <h2 class="word-fade-in landing-text sub-heading">
                        <span>Your</span> <span>Partner</span> <span>in</span> <span>Progress:</span>
                        <br><span>The</span> <span>Marketing</span> <span>Arm</span> <span>of</span>
                        <br><span>Philippines</span> <span>Glass</span> <span>and</span> <span>Aluminum</span> <span>Conglomerate</span>
                    </h2>
                    @if($my_user == null)
                    <div class="text-center mb-5 mt-3">
                        <a class="card-button btn btn-danger mt-auto fade-in-up d-inline-block" href="/register">Create Account
                            <i class="fa-solid fa-arrow-right" style="font-size: 9px; margin-left:5px;"></i>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section id="company-logos" class="container py-5 fade-in text-center">
        <div class="w-100">
            <div class="py-5">
                <div class="logo-container">
                    <!-- Logos -->
                    <div class="logo-track">
                        <img src="{{ asset('storage/logos/assa-abloy-logo.png') }}" alt="Assa Abloy" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/master_armoured_vehicle-logo.png') }}" alt="Master Armoured" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/pgpsi-logo.png') }}" alt="PGPSI" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/pioneer_logo.png') }}" alt="Pioneer" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/thore-logo.png') }}" alt="Thore" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/wacker-logo.png') }}" alt="Wacker" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/yale-logo.png') }}" alt="Yale" class="img-fluid mx-2 my-1">
                        <!-- Repeat for a smooth loop -->
                        <img src="{{ asset('storage/logos/assa-abloy-logo.png') }}" alt="Assa Abloy" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/master_armoured_vehicle-logo.png') }}" alt="Master Armoured" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/pgpsi-logo.png') }}" alt="PGPSI" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/pioneer_logo.png') }}" alt="Pioneer" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/thore-logo.png') }}" alt="Thore" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/wacker-logo.png') }}" alt="Wacker" class="img-fluid mx-2 my-1">
                        <img src="{{ asset('storage/logos/yale-logo.png') }}" alt="Yale" class="img-fluid mx-2 my-1">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-3">
        <div class="container ">
            <div class="text-center">
                <h2 class="fw-bold" style="color: #7E1416;">What We Offer</h2>
                <p class="mt-3">
                    Committed to providing superior products and services that uphold the highest industry benchmarks. Our advanced techniques and state-of-the-art equipment ensure that every project is completed with precision and excellence.
                </p>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 py-3">
                    <div class="card border-0 shadow-lg" style="height: 500px;">
                        <img src="{{ asset('storage/logos/bulletproof-10.jpg') }}" alt="Bulletproof" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold mb-3">Bullet Proofing</h5>
                            <p>Equip your vehicle with unparalleled protection that rivals the strength of a tank.
                                Our advanced armor ensures superior safety, providing peace of mind and safeguarding lives on every journey.</p>
                            <a href="#" class="card-button btn btn-danger mt-auto">Get Quotation</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card border-0 shadow-lg" style="height: 500px;">
                        <img src="{{ asset('storage/glass-processing/igu close up.jpg') }}" alt="Glass Processing" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold mb-3">Glass Processing</h5>
                            <p>Our advanced glass processing techniques ensure durability and quality, catering to a wide range of architectural and industrial needs.</p>
                            <a href="#" class="card-button btn btn-danger mt-auto">Get Quotation</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="category" class="py-3 mt-5">
        <div class="container  ">
            <div class="text-center">
                <h2 class="fw-bold" style="color: #7E1416;">Shop by Category</h2>
                <p class="mt-3">
                    We are now offering our valued customers the ability to shop online and have our services delivered right to your door. Please feel free to use our new online services.
                </p>
            </div>

            <div class="row">
                <div class="col-md-4 py-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow-lg d-flex flex-column">
                        <img src="{{ asset('storage/glass-processing/cool silver only.jpg') }}" alt="Bulletproof" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold">Glass</h5>
                            <p class="flex-grow-1">We offer a wide range of glass products for different applications, ensuring quality and durability.</p>
                            <a href="#" class="card-button btn btn-danger mt-auto">Get Quotation</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 py-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow-lg d-flex flex-column">
                        <img src="{{ asset('storage/home/aluminum.jpg') }}" alt="Category 2" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold">Aluminum</h5>
                            <p class="flex-grow-1">A versatile and lightweight metal used in a variety of applications due to its strength, corrosion resistance, and aesthetic appeal.</p>
                            <a href="#" class="card-button btn btn-danger mt-auto">Get Quotation</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 py-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow-lg d-flex flex-column">
                        <img src="{{ asset('storage/home/gen-trade.jpg') }}" alt="Gen Trade" class="card-img-top" style="width: 100%; height: 300px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold">Other Products</h5>
                            <p class="flex-grow-1">In addition to aluminum and glass, we offer a variety of hardware products essential for construction and installation.</p>
                            <a href="#" class="card-button btn btn-danger mt-auto">Get Quotation</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Accordion Section -->
    @include ('plus.accordion')
    <!-- End of Accordion -->

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    @include('plus.chatbot')

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->

    <!-- Toast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @if(session()->has('error_msg'))
      <script>
          toastr.options.preventDuplicates = true;
          toastr.error("{{ session('error_msg') }}");
      </script>
    @endif

    @error('code')
      <script>
        toastr.options.preventDuplicates = true;
        toastr.error('Code already exists');
      </script>
    @enderror

    @if(session()->has('success_msg'))
      <script>
          toastr.options.preventDuplicates = true;
          toastr.success("{{ session('success_msg') }}");
      </script>
    @endif

    @if(session()->has('download_file'))
      <script>
          $("#download_filename").val("{{ session('download_file') }}");
          $("#downloadForm").submit();
      </script>
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>