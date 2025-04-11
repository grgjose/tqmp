<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Glass Processing | Total Quality Management Products Philippines</title>
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
    
    <!-- Homepage JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/homepage.js') }}"></script>
</head>

<body>
    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <section id="landing-glass-processing" class="d-flex align-items-center justify-content-center text-center min-vh-100"
        style="background: linear-gradient(rgba(23, 38, 71, 0.3), rgba(126, 20, 22, 0.4)),
                    url('https://images.pexels.com/photos/3736110/pexels-photo-3736110.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3 fade-in-up" style="color: white;">Glass Processing</h2>
                    <p class="lead mt-3 fade-in-up" style="color: white;">
                        Utilizing state-of-the-art technology and machinery, we are capable of producing an extensive range of tempered glass products.
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/share/14g3o8X6qi/" class="btn btn-outline-light text-decoration-none fade-in" style="font-size: smaller;">
                            <span><b>Find out more</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="about-glass-processing" class="fade-in">
        <div class="card mb-3 mx-auto mt-5" style="max-width: 1300px;">
            <div class="row g-0 justify-content-center">

                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/logos/pgpsi-logo.png') }}"
                        alt="Aluminum Manufacturing" class="img-fluid rounded lg" style="padding: 20px;">
                </div>

                <div class="col-md-8">
                    <div class="card-body py-5">
                        <h2 class="fw-bold" style="color: #7E1416;">About Glass Processing</h2>
                        <hr style="border-top: 3px solid #920B12; width: 150px; ">
                        <p> With extensive experience in the glass industry, we take pride in our commitment to delivering exceptional products and services to our clients.
                            Our factory is equipped with state-of-the-art technology and machinery, enabling us to produce a diverse range of tempered glass products, including glass doors, windows, shower enclosures, and more.
                            At Philippine Glass Processing Specialist, we prioritize customer satisfaction and consistently aim to exceed our clients' expectations with every project.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="about-glass-processing" class="fade-in-up">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/logos/pgpsi-logo.png') }}"" alt="Bullet Proofing" class="img-fluid rounded-lg" style="padding: 20px;">
                </div>
                <div class="col-lg-6">
                    <div class="card-body py-5">
                        <h2 class="fw-bold" style="color: #7E1416;">About us</h2>
                        <hr style="border-top: 3px solid #920B12; width: 150px; ">
                        <p>With extensive experience in the glass industry, we take pride in our commitment to delivering exceptional products and services to our clients.
                            Our factory is equipped with state-of-the-art technology and machinery, enabling us to produce a diverse range of tempered glass products, including glass doors, windows, shower enclosures, and more.
                            At Philippine Glass Processing Specialist, we prioritize customer satisfaction and consistently aim to exceed our clients' expectations with every project.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services-glass-processing" class="container py-4">
        <div class="container mt-5 text-center">
            <h2 class="fw-bold" style="color: #7E1416;">Glass Processing Services</h2>
            <p>PGPSI offers the following glass processing services</p>
        </div>
        <div class="row py-3">
            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-lg d-flex flex-column">
                    <img src="{{ asset('storage/glass-processing/tempered.png') }}" alt="TQMP Tempered Glass" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title fw-bold">Tempered Glass</h6>
                        <p class="card-text flex-grow-1">Fully tempered glass is a unique glazing material. It is about 3 to 5 times stronger than an ordinary or annealed glass of the same thickness and configuration.</p>
                        <a href="/#" class="card-button btn btn-danger mt-auto get-quotation-button w-100"

                        @if($my_user == null)
                            data-bs-toggle="modal" data-bs-target="#loginModal"
                        @endif
                        
                        >Get Quotation</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-lg d-flex flex-column">
                    <img src="{{ asset('storage/glass-processing/laminated.png') }}" alt="TQMP Laminated Glass" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title fw-bold">Laminated Glass</h6>
                        <p class="card-text flex-grow-1">Laminated glass is a multi-functional glazing material that can be used in a variety of applications. It is manufactured by permanently bonding two or more glass panes with layers of polyvinyl butyral (PVB) interlayer, under heat and pressure to produce a single product.</p>
                        <a href="/#" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                        
                        @if($my_user == null)
                            data-bs-toggle="modal" data-bs-target="#loginModal"
                        @endif
                        >Get Quotation</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-lg d-flex flex-column">
                    <img src="{{ asset('storage/glass-processing/curved.jpg') }}" alt="TQMP Curved Glass" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title fw-bold">Curved Tempered Glass</h6>
                        <p class="card-text flex-grow-1">In the same manner with flat tempered glass, curved tempered glass is also resistant to mechanical stresses (bending, impact, etc.) and thermal stresses (temperature difference), without altering the properties of the basic product.</p>
                        <a href="/#" class="card-button btn btn-danger mt-auto get-quotation-button w-100"
                        
                        @if($my_user == null)
                            data-bs-toggle="modal" data-bs-target="#loginModal"
                        @endif
                        >Get Quotation</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-lg d-flex flex-column">
                    <img src="{{ asset('storage/glass-processing/igu.png') }}" alt="TQMP IGU" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title fw-bold">Insulating Glass Unit (IGU)</h6>
                        <p class="card-text flex-grow-1">Insulating glass unit is a set of two or more lites of glass separated by air space and hermetically sealed to form a single unit. Its most important function is to improve the thermal performance of glass when used in architectural applications.</p>
                        <a href="/#" class="card-button btn btn-danger mt-auto get-quotation-button w-100"

                        @if($my_user == null)
                            data-bs-toggle="modal" data-bs-target="#loginModal"
                        @endif

                        >Get Quotation</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @if($my_user != null)
    <script>
        $('.get-quotation-button').attr('href', '/get-quotation');        
    </script>
    @endif

    <!-- Accordion Section -->
    @include ('plus.accordion')
    <!-- End of Accordion -->

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    <!-- Chatbot -->
    @include ('plus.chatbot')
    <!-- End of Chatbot -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>

</html>