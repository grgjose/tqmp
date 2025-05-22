<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Bullet Proofing Manufacturing | Total Quality Management Products Philippines</title>
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

    <section id="landing-bulletproofing" class="d-flex align-items-center justify-content-center text-center min-vh-100"
        style="background: linear-gradient(rgba(23, 38, 71, 0.3), rgba(45, 20, 20, 0.5)),
                    url('storage/logos/bulletproof-10.jpg') no-repeat center center/cover;">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3 fade-in-up" style="color: white;">Master</h2>
                    <h2 class="fw-bold display-3 fade-in-up" style="color: white;">Armoured Vehicle</h2>
                    <p class="lead fade-in-up" style="color: white;">
                        Your premier source for top-of-the-line and precision-engineered armoured vehicles
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/people/Master-Armoured-Vehicle/61561429240605/" class="btn btn-outline-light text-decoration-none fade-in" style="font-size: smaller;">
                            <span><b>Find out more</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-bulletproofing" class="fade-in-up">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/logos/master_armoured_vehicle-logo.png') }}" alt="Bullet Proofing" class="img-fluid rounded-lg" style="padding: 20px;">
                </div>
                <div class="col-lg-6">
                    <div class="card-body py-5">
                        <h2 class="fw-bold" style="color: #7E1416;">About us</h2>
                        <hr style="border-top: 3px solid #920B12; width: 150px; ">
                        <p>Bulletproofing is a meticulous security enhancement procedure designed to convert vehicles into fortified sanctuaries,
                            capable of enduring a range of ballistic threats. This sophisticated process entails fortifying vehicles with high-grade materials like ballistic steel and advanced composites,
                            guaranteeing substantial protection against bullets, shrapnel, and explosive devices.</p>
                        <p>We offer tailored customization options that maintain essential security functionalities while allowing for sophisticated personalization.
                            Our low-profile protection ensures discreet security, with armored vehicles that are virtually indistinguishable from standard models.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits-bulletproofing">
        <div class="container py-5 mt-5 fade-in-up">
            <div class="row">
                <div class="col-lg-7">
                    <div class="our-story">
                        <h2 class="fw-bold" style="color: #7E1416;">Benefits and key advantages of bulletproofing your vehicle</h2>
                        <hr style="border-top: 3px solid #920B12; width: 150px; ">
                        <p>Enjoy an unmatched sense of security with our solutions, designed for those traveling through potentially hazardous areas. Our cutting-edge security measures offer robust protection against ballistic threats and explosive devices, significantly reducing vulnerability during high-risk scenarios.</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Assured Peace of mind - Provides invaluable assurance, particularly when traveling through potentially dangerous areas.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Enhanced Security - Ensures robust protection against ballistic threats, including bullets and explosive devices.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Reduced Vulnerability - Significantly lowers the risk to occupants during high-risk scenarios.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Optimized Performance - Preserves vehicle agility and handling despite the additional protective materials.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Tailored Customization - Allows for sophisticated customization while maintaining essential security functionalities.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Low Profile Protection - Offers discreet security, with armored vehicles appearing indistinguishable from standard models.</span></li>
                        </ul>
                        <p>In essence, our bulletproofing services are the perfect blend of advanced security, optimized performance, and customized aesthetics, all aimed at providing you with the ultimate peace of mind.</p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class=" d-flex justify-content-center align-items-center h-100">
                        <video controls class="img-fluid rounded-lg hover-video" muted loop style="padding: 10px; max-width: 100%;">
                            <source src="{{ asset('storage/vid/bulletproofvid-1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="services-bulletproofing" class="container fade-in-up">
        <div class="container mt-5 text-center">
            <!-- Badge -->
            <!-- <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Services</span> -->
            <!-- Heading -->
            <h2 class="fw-bold" style="color: #7E1416;">Bullet Proofing Services</h2>
            <p class="text-muted">
                The following are the services offered under bullet proof manufacturing
            </p>
        </div>

        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-1.jpg') }}" alt="Armoured Car" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Armoured Car</h6>
                        <p class="card-text">Explore the key attributes that redefine what it means to travel securely without compromising on luxury, featuring our armoured Toyota Land Cruiser Series 300</p>
                        @if($my_user != null)
                        <a href="/get-quotation-bulletproofing" class="card-button btn btn-danger w-100">Get Quotation</a>
                        @else
                        <a href="/#" class="card-button btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#loginModal">Get Quotation</a>
                        @endif
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/radiator.png') }}" alt="Radiator Grill" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Radiator Grill</h6>
                        <p class="card-text">An armored vehicle's radiator grill is protected by a bumper or guard, reinforcing edges, safeguarding the radiator, and clearing debris or road-blocking vehicles.</p>
                        @if($my_user != null)
                        <a href="/get-quotation-bulletproofing" class="card-button btn btn-danger w-100">Get Quotation</a>
                        @else
                        <a href="/#" class="card-button btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#loginModal">Get Quotation</a>
                        @endif
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/gastank.png') }}" alt="Gas Tank Cover" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Gas Tank Cover</h6>
                        <p class="card-text">A thick gas tank cover is applied to ensure protection, preventing direct penetration of fragments and enhancing the safety and durability of the vehicle.</p>
                        @if($my_user != null)
                        <a href="/get-quotation-bulletproofing" class="card-button btn btn-danger w-100">Get Quotation</a>
                        @else
                        <a href="/#" class="card-button btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#loginModal">Get Quotation</a>
                        @endif
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-4.jpg') }}" alt="Upgraded Suspension" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Upgraded Suspension</h6>
                        <p class="card-text">Armored vehicles require upgraded suspension and brakes to manage weight, ensuring reliable control, enhanced performance, and safe stopping.</p>
                        @if($my_user != null)
                        <a href="/get-quotation-bulletproofing" class="card-button btn btn-danger w-100">Get Quotation</a>
                        @else
                        <a href="/#" class="card-button btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#loginModal">Get Quotation</a>
                        @endif
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-5.jpg') }}" alt="Battery & Fuse Box Cover" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Battery & Fuse Box Cover</h6>
                        <p class="card-text">To ensure added durability, robust covers are available for the battery, fuse box, and gas tank, providing enhanced protection for critical vehicle components.</p>
                        @if($my_user != null)
                        <a href="/get-quotation-bulletproofing" class="card-button btn btn-danger w-100">Get Quotation</a>
                        @else
                        <a href="/#" class="card-button btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#loginModal">Get Quotation</a>
                        @endif
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-6.jpg') }}" alt="Run Flat Insert" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Run Flat Insert</h6>
                        <p class="card-text">Run-flat insert systems ensure mobility and safety in challenging situations, providing uncompromised performance, reliability, and peace of mind.</p>
                        @if($my_user != null)
                        <a href="/get-quotation-bulletproofing" class="card-button btn btn-danger w-100">Get Quotation</a>
                        @else
                        <a href="/#" class="card-button btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#loginModal">Get Quotation</a>
                        @endif
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-7.jpg') }}" alt="Back Door Partition" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Back Door Partition</h6>
                        <p class="card-text">A bulletproof rear door partition provides extra security, reinforcing the back of your vehicle for enhanced defense and ensuring added protection for passengers and cargo.</p>
                        @if($my_user != null)
                        <a href="/get-quotation-bulletproofing" class="card-button btn btn-danger w-100">Get Quotation</a>
                        @else
                        <a href="/#" class="card-button btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#loginModal">Get Quotation</a>
                        @endif
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-8.jpg') }}" alt="Bullet Catcher" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Bullet Catcher</h6>
                        <p class="card-text">Ensures any penetrating fragments are contained, preventing them from passing through and enhancing overall vehicle safety and protection.</p>
                        @if($my_user != null)
                        <a href="/get-quotation-bulletproofing" class="card-button btn btn-danger w-100">Get Quotation</a>
                        @else
                        <a href="/#" class="card-button btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#loginModal">Get Quotation</a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/leather.png') }}" alt="Premium Leather Seats" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Premium Leather Seats</h6>
                        <p class="card-text">Offering protection and satisfaction with premium leather seats through exceptional engineering, ensuring comfort inside your vehicle.</p>
                        @if($my_user != null)
                        <a href="/get-quotation-bulletproofing" class="card-button btn btn-danger w-100">Get Quotation</a>
                        @else
                        <a href="/#" class="card-button btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#loginModal">Get Quotation</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="videos-bulletproofing" class="container fade-in mt-5">
        <div class="container mt-5 text-center">
            <h2 class="fw-bold" style="color: #7E1416;">Videos</h2>
            <p class="text-muted">
                Here are some of our videos related to bullet proofing. You may take a look.
            </p>
        </div>

        <div class="container row">
            <div class="col-md-6">
                <div class="p-3">
                    <video controls class="img-fluid rounded-lg hover-video" muted loop style="padding: 10px; max-width: 100%; height: 400px;">
                        <source src="{{ asset('storage/vid/bulletproofvid-2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body text-center">
                        <h5 class="card-title">Armoured Toyota Fortuner</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="p-3">
                    <video controls class="img-fluid rounded-lg hover-video" muted loop style="padding: 10px; max-width: 100%; height: 400px;">
                        <source src="{{ asset('storage/vid/bulletproofvid-3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body text-center">
                        <h5 class="card-title">Armoured Land Cruiser 300 Series</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faqs-bulletproofing">
        <!-- Accordion Section -->
        <section class="py-3 mt-5">
            <div class="container text-center">
                <!-- FAQ Heading -->
                <h2 class="fw-bold" style="color: #7E1416;">Frequently Asked Questions</h2>
                <p class="text-muted">
                    We have sorted out your frequently asked questions. You can select the one that best meets your needs by clicking below.
                </p>
            </div>

            <!-- FAQ Accordion -->
            <div class="container mt-5">
                <div class="row">
                    <!-- First Column -->
                    <div class="col-md-6">
                        <div class="accordion" id="faqAccordionLeft">
                            <!-- Accordion Items for Left Column -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
                                        style="color: #000;">
                                        <b>What types of vehicles can be bulletproofed?</b>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#faqAccordionLeft">
                                    <div class="accordion-body" style="color: #6c757d;">
                                        Any cars can be armoured.
                                        <br>1.1 SUV
                                        <br>1.2 Pick-up
                                        <br>1.3 Van
                                        <br>1.4 Heavy Equipment
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                        style="color: #000;">
                                        <b>How does bulletproofing affect the vehicle's performance?</b>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordionLeft">
                                    <div class="accordion-body" style="color: #6c757d;">
                                        Bulletproofing increases the weight of the vehicle due to the ballistic plates and bullet resistant glass (BRG).
                                        Thus, changes in acceleration, maneuverability, braking, and, fuel efficiency maybe experienced.
                                        The driver must be mindful of these changes to ensure safe and optimal vehicle driving.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                        style="color: #000;">
                                        <b>Can bulletproofing be customized to maintain the car's appearance?</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#faqAccordionLeft">
                                    <div class="accordion-body" style="color: #6c757d;">
                                        Bulletproofing is generally customized to meet specific needs in terms of protection level, while maintaining the car's appearance, luxury, and style.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                                        style="color: #000;">
                                        <b>How long does the bulletproofing process take?</b>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#faqAccordionLeft">
                                    <div class="accordion-body" style="color: #6c757d;">
                                        Bulletproofing process can take from few weeks up to several months, depending on the complexity or armoring level package selected by the customer.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second Column -->
                    <div class="col-md-6">
                        <div class="accordion" id="faqAccordionRight">
                            <!-- Accordion Items for Right Column -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                                        style="color: #000;">
                                        <b>What is light-weight armor?</b>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#faqAccordionRight">
                                    <div class="accordion-body" style="color: #6c757d;">
                                        Light weight armor offers effective protection while being easier to wear for extended periods.
                                        Made from advanced materials, it balances safety and comport, allowing for greater mobility without the bulk of traditional armor.
                                        This makes it ideal for both personal and professional use.
                                        Lightweight armor start from BR level 4 and lower.
                                        It offers effective protection while being easier to wear for extended periods.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"
                                        style="color: #000;">
                                        <b>Is bulletproofing a permanent modification?</b>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#faqAccordionRight">
                                    <div class="accordion-body" style="color: #6c757d;">
                                        It is a complete process of making a vehicle robust to stay intact in bad circumstances.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"
                                        style="color: #000;">
                                        <b>How much does bulletproofing cost?</b>
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                    data-bs-parent="#faqAccordionRight">
                                    <div class="accordion-body" style="color: #6c757d;">
                                        The cost of bulletproofing varies based on the specific customization needs of each client.
                                        Factors such as the level of ballistic protection, materials used, and design complexities all influence the final pricing.
                                        Therefore, each bulletproofing project is priced individually.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"
                                        style="color: #000;">
                                        <b>Any maintenance requirements after bulletproofing?</b>
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                    data-bs-parent="#faqAccordionRight">
                                    <div class="accordion-body" style="color: #6c757d;">
                                        Maintaining a fully armoured vehicle is vital.
                                        Regular cleaning, tire care, mechanical inspections and armoured upgraded parts check can ensure the optimal functionality and protection of armoured car.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->

    <!-- Chatbot -->
    @include ('plus.chatbot')
    <!-- End of Chatbot -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const hoverVideo = document.querySelectorAll('.hover-video');

            hoverVideo.forEach(video => {
                video.addEventListener('mouseenter', function() {
                    video.play();
                });

                video.addEventListener('mouseleave', function() {
                    video.pause();
                });
            });
        });
    </script>
</body>

</html>