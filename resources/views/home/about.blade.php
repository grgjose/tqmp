<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>About Us | Total Quality Management Products Philippines</title>
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

    <section id="landing-company">
        <div class="dark-background text-light" style="background: url('storage/logos/tqmpnew-edited.jpg') center/cover no-repeat, rgba(0, 0, 0, 0.4); background-blend-mode: overlay; padding: 160px 0 60px 0; text-align: center; position: relative;">
            <div class="container position-relative">
                <h2 class="fade-in" style="font-size: 56px; font-weight: 700; font-family: var(--nav-font);">Company History</h2>
                <p class="lead mb-4 fade-in">TQMP PHILIPPINES specializes in marketing and selling an extensive range of glass products and aluminum sections, serving the construction industry and beyond.</p>
            </div>
        </div>
    </section>

    <section id="timeline-company">
        <div class="container py-5">
            <div class="container text-center fade-in-up">
                <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Timeline</span>
            </div>
            <div id="timeline" class="container fade-in-up">
                <div class="section section-md">
                    <div class="container">
                        <div class="row mt-4 justify-content-center">
                            <div class="col-md-10 mx-auto">
                                <!-- Timeline -->
                                <div class="timeline">
                                    <!-- Timeline Item 1 -->
                                    <div class="timeline-item row align-items-center justify-content-center">
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>1998</b></h2>
                                            <p>Established in 1998, an emerging leader in the aluminum and glass industries.
                                                TQMP PHILIPPINES handles importations and trading of flat glass and other related products such as engineering adhesives, silicone sealants, abrasives, hardware for glass and aluminum installations, and the like.</p>
                                        </div>
                                        <div class="col-md-6 order-md-2 mb-3">
                                            <img src="{{ asset('storage/about-us/alcophil.png') }}" alt="1998" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <!-- Timeline Item 2 -->
                                    <div class="timeline-item row align-items-center justify-content-center">
                                        <div class="col-md-6 order-md-2 mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>2005</b></h2>
                                            <p>Armed with strong determination to meet the demand of the customers for high-end architectural and industrial glass requirements, the company formed its first subsidiary company in 2005, the Philippine Glass Processing Specialist, Inc. (PGPSI), and invested in several state-of-the-art processing machines.</p>
                                        </div>
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <img src="{{ asset('storage/about-us/glassp.png') }}" alt="2005" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <!-- Timeline Item 3 -->
                                    <div class="timeline-item row align-items-center justify-content-center">
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>Third Quarter of 2010</b></h2>
                                            <p>In the third quarter of 2010, Assure Insurance Agency Corporation (AIAC), another subsidiary company of TQMP PHILIPPINES, was established. Assure Insurance Agency Corporation is the insurance arm of the company representing various insurance companies for non-life coverages.</p>
                                        </div>
                                        <div class="col-md-6 order-md-2 mb-3">
                                            <img src="{{ asset('storage/about-us/aiac.png') }}" alt="2010 Q3" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <!-- Timeline Item 4 -->
                                    <div class="timeline-item row align-items-center justify-content-center">
                                        <div class="col-md-6 order-md-2 mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>Fourth Quarter of 2010</b></h2>
                                            <p>In the fourth quarter of 2010, another subsidiary company, TQMC Marketing, was established. TQMC Marketing imports and distributes a wide variety of chemicals and raw ingredients for numerous industrial and food processing applications.</p>
                                        </div>
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <img src="{{ asset('storage/about-us/tqmc.png') }}" alt="2010 Q4" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <!-- Timeline Item 5 -->
                                    <div class="timeline-item row align-items-center justify-content-center">
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>Fourth Quarter of 2013</b></h2>
                                            <p>In the fourth quarter of 2013, TQMP-Cebu was established. It houses the glass processing facilities that cater to the demands of Cebu and nearby provinces (Visayan Region).</p>
                                        </div>
                                        <div class="col-md-6 order-md-2 mb-3">
                                            <img src="{{ asset('storage/about-us/wdg.png') }}" alt="2013 Q4" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <!-- Timeline Item 6 -->
                                    <div class="timeline-item row align-items-center justify-content-center">
                                        <div class="col-md-6 order-md-2 mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>Second Quarter of 2014</b></h2>
                                            <p>Southern Philippines Glass (SPG) started its operations in the second quarter of 2014 with the same facilities of TQMP-Cebu. It serves the growing demand of the Mindanao Region.</p>
                                        </div>
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <img src="https://th.bing.com/th/id/OLC.d45VbMr0TG1XzQ480x360?&rs=1&pid=ImgDetMain" alt="2014 Q2" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <!-- Timeline Item 7 -->
                                    <div class="timeline-item row align-items-center justify-content-center">
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>Fourth Quarter of 2014</b></h2>
                                            <p>In the fourth quarter of 2014, the new plant in Lawang Bato started its maiden operation. It houses one of the biggest tempering and modern glass processing facilities in Southeast Asia.</p>
                                        </div>
                                        <div class="col-md-6 order-md-2 mb-3">
                                            <img src="{{ asset('storage/logos/tqmpnew-edited.jpg') }}" alt="2014 Q4" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>


                                    <div class="timeline-item row align-items-center justify-content-center">
                                        <div class="col-md-6 order-md-2 mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>First Quarter of 2018</b></h2>
                                            <p>In the first quarter of 2018, TQMP Glass Manufacturing Corp acquired 100% of the AGPH shares and now operates the Philippine Float Glass Plant under the name Pioneer Float Glass Manufacturing Inc. (PFGMI)</p>
                                        </div>
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <img src="{{ asset('storage/logos/pfgmi.jpg') }}" alt="2018 Q1" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <!-- Timeline Item 4 -->
                                    <div class="timeline-item row align-items-center justify-content-center">
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>Fourth Quarter of 2022</b></h2>
                                            <p>In the fourth quarter of 2022, this the company experiencing a hard time at marketing so we try different side of view for the marketing. "Bulletproofing" which we called MASTER Armoured Vehicle which is your premier source for top-of-the-line and precision-engineered armoured vehicles</p>
                                        </div>
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <img src="{{ asset('storage/logos/bulletproof-10.jpg') }}" alt="2022 Q4" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <!-- Timeline Item 5 -->
                                    <div class="timeline-item row align-items-center justify-content-center">
                                    <div class="col-md-6 order-md-2 mb-3">
                                            <h2 class="my-3" style="color: #920B12;"><b>Fourth Quarter of 2024</b></h2>
                                            <p>In the fourth quarter of 2024, TQMP was seeking for extending their marketing, then it establish another company. HSP Paragon Corporation, which equipped with both powder coating and anodizing lines, is committed to mass-producing and advancing high-end aluminum profiles. Our facility also features a recycling plant for all types of aluminum scraps, ensuring comprehensive solutions for your aluminum section needs.</p>
                                        </div>
                                        <div class="col-md-6 order-md-1 text-md-end mb-3">
                                            <img src="{{ asset('storage/logos/about-bg-q4.jpg') }}" alt="2024 Q4" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                </div> <!-- End of Timeline -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="values-company" class="mt-5 py-5">
        <div class="container text-center">
            <h2 class="fw-bold">Company Values</h2>
            <p class="mt-3">
            <p>Our belief is that our employees are the source of our strength, and that success can only be achieved through involvement and full commitment of every TQMP employee.</p>
            <div class="row mt-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="https://images.pexels.com/photos/7414284/pexels-photo-7414284.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">MISSION</h5>
                            <p class="text-muted">Steadfastly dedicated to quality and ongoing innovation to deliver top-notch products and services to our valued customer base. Maintain company expansion, foster staff pride, and gain community respect.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/about-us/about-2.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">VISION</h5>
                            <p class="text-muted">To become a major force in the regional market by promoting social responsibility and ethical business practices, as well as by demonstrating a strong commitment to quality, style, and value in products and services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/about-us/about-1.jpg') }}"
                            alt="Category 1" class="card-img-top rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">OUR VALUES</h5>
                            <p class="text-muted">The goal is complete client satisfaction through innovative services.
                                Becoming the market leader in glass and aluminum requires constant
                                improvement and the use of highly specialized, dependable process equipment.</p>
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

    <!-- Chatbot -->
    @include ('plus.chatbot')
    <!-- End of Chatbot -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->

    <!-- Scripts -->
    @include ('plus.scripts')
    <!-- Scripts -->

</body>

</html>