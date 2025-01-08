<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Bullet Proofing Manufacturing</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="main.css">

    <!-- Scripts -->
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</head>

<body>
    <!-- Style -->
    @include('plus.style')
    <!-- End of Style -->

    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <!-- landing  -->
    <section class="d-flex align-items-center justify-content-center text-center min-vh-100"
        style="background: linear-gradient(rgba(23, 38, 71, 0.8), rgba(126, 20, 22, 0.9)), 
                    url('https://images.pexels.com/photos/10981370/pexels-photo-10981370.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-3 fade-in-up" style="color: white;">Master</h2>
                    <h2 class="fw-bold display-3 fade-in-up" style="color: white;">Armoured Vehicle</h2>
                    <p class="lead mt-3 fade-in-up" style="color: white;">
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
    <!-- End of landing  -->

    <!-- Bullet Proofing Section -->

    <section class="fade-in">
        <div class="card mb-3 mx-auto py-3 mt-5" style="max-width: 1300px;">
            <div class="row g-0">
                <!-- Video Column -->
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/logos/master_armoured_vehicle-logo.png') }}"
                        alt="Bullet Proofing" class="img-fluid rounded-lg" style="padding: 20px;">
                </div>
                <!-- Text Column -->
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card-body py-5 text-center">
                        <h2 class="fw-bold" style="color: #7E1416;">Benefits of Bullet Proofing</h2>
                        <ul class="list-unstyled">
                            <li>1. Very good option for additional security.</li>
                            <li>2. Bullets literally "bounce off" the vehicle.</li>
                            <li>3. It has a thick and heavy body, like a tank for protection.</li>
                            <li>4. It has special tires and glass.</li>
                            <li>5. It literally saves lives.</li>
                        </ul>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <video controls class="img-fluid rounded-lg hover-video" muted loop style="padding: 10px; max-width: 100%;">
                        <source src="{{ asset('storage/vid/bulletproofvid-1.mp4') }}" type="video/mp4"> <!-- Replace with your video path -->
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>


    <div class="container mt-5 text-center">
        <!-- Badge -->
        <!-- <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Services</span> -->
        <!-- Heading -->
        <h2 class="fw-bold" style="color: #7E1416;">Bullet Proofing Services</h2>
        <p class="text-muted">
            The following are the services offered under bullet proof manufacturing
        </p>
    </div>

    <!-- Updated -->
    <section class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-1.jpg') }}" alt="Armoured Car" style="object-fit: cover; height: 200px;">
                    <!-- <div class="card-body">
                        <h5 class="card-title fw-bold">Armoured Car</h5>
                        <p class="card-text">Explore the key attributes that redefine what it means to travel securely without compromising on luxury, featuring our armoured Toyota Land Cruiser Series 300.</p>
                    </div> -->
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Armoured Car</h6>
                        <p class="card-text">Explore the key attributes that redefine what it means to travel securely without compromising on luxury, featuring our armoured Toyota Land Cruiser Series 300</p>
                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/radiator.png') }}" alt="Radiator Grill" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Radiator Grill</h6>
                        <p class="card-text">An armored vehicle's radiator grill is protected by a bumper or guard, reinforcing edges, safeguarding the radiator, and clearing debris or road-blocking vehicles.</p>
                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/gastank.png') }}" alt="Gas Tank Cover" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Gas Tank Cover</h6>
                        <p class="card-text">A thick gas tank cover is applied to ensure protection, preventing direct penetration of fragments and enhancing the safety and durability of the vehicle.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-4.jpg') }}" alt="Upgraded Suspension" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Upgraded Suspension</h6>
                        <p class="card-text">Armored vehicles require upgraded suspension and brakes to manage weight, ensuring reliable control, enhanced performance, and safe stopping.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-5.jpg') }}" alt="Battery & Fuse Box Cover" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Battery & Fuse Box Cover</h6>
                        <p class="card-text">To ensure added durability, robust covers are available for the battery, fuse box, and gas tank, providing enhanced protection for critical vehicle components</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-6.jpg') }}" alt="Run Flat Insert" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Run Flat Insert</h6>
                        <p class="card-text">Run-flat insert systems ensure mobility and safety in challenging situations, providing uncompromised performance, reliability, and peace of mind.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 7 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-7.jpg') }}" alt="Upgraded Suspension" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="fw-bold">Back Door Partition</h6>
                        <p class="card-text">A bulletproof rear door partition provides extra security, reinforcing the back of your vehicle for enhanced defense and ensuring added protection for passengers and cargo.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 8 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/bulletproof-8.jpg') }}" alt="Battery & Fuse Box Cover" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="fw-bold">Bullet Catcher</h6>
                        <p class="card-text">Ensures any penetrating fragments are contained, preventing them from passing through and enhancing overall vehicle safety and protection.</p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

            <!-- Card 9 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg">
                    <img src="{{ asset('storage/logos/leather.png') }}" alt="Run Flat Insert" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Premium Leather Seats</h6>
                        <p class="card-text">Offering protection and satisfaction with premium leather seats through exceptional engineering, ensuring comfort inside your vehicle. </p>

                    </div>
                    <a href="#" class="card-button"> Get Quotation</a>
                </div>

            </div>

        </div>
    </section>

    <section class="container fade-in">
        <div class="container mt-5 text-center">
            <!-- Badge -->
            <!-- <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Services</span> -->
            <!-- Heading -->
            <h2 class="fw-bold" style="color: #7E1416;">Videos</h2>
            <p class="text-muted">
                Here are some of our videos related to bullet proofing. You may take a look.
            </p>
        </div>

        <div class="container row mt-4">
            <!-- Card 1 -->
            <div class="col-md-6 py-3">
                <div class="card border-0 shadow-lg">
                    <video controls class="img-fluid rounded-lg hover-video" muted loop style="height: 400px; padding: 10px; max-width: 100%;">
                        <source src="{{ asset('storage/vid/bulletproofvid-2.mp4') }}" type="video/mp4"> <!-- Replace with your video path -->
                        Your browser does not support the video tag.
                    </video>
                    <a  class="card-button">Armoured Toyota Fortuner</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-6 py-3">
                <div class="card border-0 shadow-lg">
                    <video controls class="img-fluid rounded-lg hover-video" muted loop style="height: 400px; padding: 10px; max-width: 100%;">
                        <source src="{{ asset('storage/vid/bulletproofvid-3.mp4') }}" type="video/mp4"> <!-- Replace with your video path -->
                        Your browser does not support the video tag.
                    </video>
                    <a class="card-button">Armoured Land Cruiser 300 Series</a>
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

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->

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