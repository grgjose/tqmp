<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Contact Us | Total Quality Management Products Philippines</title>
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

    <!-- About Us Section -->

    <!-- Contact Section -->
    <div class="container text-center py-5 fade-in-up">
        <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Contact Us</span>
        <h2 class="fw-bold">Reach us for inquiries</h2>
        <!-- Paragraph -->
        <p class="mt-3">
            Have questions or need assistance? Fill out the form below, and our team will get back to you promptly.
        </p>
    </div>

    <div class="container">
        <section class="custom-section fade-in">
            <!-- Contact Section -->
            <div class="container contact-section">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="col-md-6">
                        <h3 class="fw-bold">Fill out the form</h3>
                        <form class="py-3">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullName" placeholder="Your full name">
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="Your email">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number <span class="text-danger">*</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Your phone number">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Write your message here"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Please upload government valid IDs <span class="text-danger">*</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-danger w-100">Send Message</button>
                            </div>
                        </form><br>
                    </div>

                    <!-- Contact Information -->
                    <div class="col-md-3 contact-info">
                        <h3 class="fw-bold">Locations</h3><br>

                        <div class="mb-3">
                            <h5><i class="fas fa-map-marker-alt text-danger me-2"></i> Main Office</h5>
                            <!-- <p class="text-muted mb-0">Please visit us to have a discussion.</p> -->
                            <p><b>Valenuzela Sales Office</b> (Main Office) <br>
                                168 Sapang Bakaw, Lawang Bato, Valenzuela City Philippines 1447 <br>
                                +632-7717-8767
                            </p>
                        </div>
                        <div class="mb-3">
                            <h5><i class="fas fa-map-marker-alt text-danger me-2"></i> Luzon Office</h5>
                            <!-- <p class="text-muted mb-0">Please visit us to have a discussion.</p> -->
                            <p><b>Cauayan Sales Office</b><br>
                                A4 Compound , Cabanatuan Road San Fermin Cauayan City Isabela <br>
                                Contact No. +63 78-652-1158</p>

                            <p><b>Dagupan Sales office</b><br>
                                De Venecia Ave, Lasip Choco, Dagupan City, Pangasinan <br>
                                Contact No. 0908-876-5324 <br>
                                Contact No. 0919-085-5110 <br>
                                Contact No. 0919-085-5125
                            </p>
                        </div>
                        <div class="mb-3">
                            <h5><i class="fas fa-map-marker-alt text-danger me-2"></i> Visayas Office</h5>
                            <!-- <p class="text-muted mb-0">Please visit us to have a discussion.</p> -->
                            <p><b>Cebu Branch</b><br>
                                Km 14 SRP Highway, Dumlog, Talisay City, Cebu
                            </p>
                            <p><b>Iloilo Sales Office</b><br>
                                Contact No. +63 905 551 5683
                            </p>

                        </div>
                        <div class="mb-3">
                            <h5><i class="fas fa-map-marker-alt text-danger me-2"></i> Mindanao Office</h5>
                            <!-- <p class="text-muted mb-0">Please visit us to have a discussion.</p> -->
                            <p><b>Davao Sales Office</b><br>
                                Brgy. Bubod, Bunawan Cistrict, Davao City <br>
                                Contact No. +639 05 551 5674
                            </p>
                            <p><b>Cagayan De Oro Sales office</b><br>
                                Contact No. +63 905 551 5661
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 contact-info">
                        <h3 class="fw-bold">Get in Touch</h3><br>

                        <!-- <div class="mb-4">
                            <h5><i class="fas fa-phone-alt text-danger me-2"></i> Phone</h5>
                            <p class="text-muted mb-0">Please speak with us directly.</p>
                            <p>+632-7717-8767</p>
                        </div> -->
                        <div class="mb-3">
                            <h5><i class="fas fa-envelope text-danger me-2"></i> Email</h5>
                            <p class="text-muted mb-0">Please write to us directly.</p>
                            <p>sales@tqmp.biz</p>
                        </div>
                        <div>
                            <h5><i class="fas fa-clock text-danger me-2"></i> Opening Hours</h5>
                            <p class="text-muted mb-0">Check out our Business Hours</p>
                            <p>
                                <strong>Mon - Sat:</strong> 8am - 5pm<br>
                                <strong>Sunday:</strong> Closed
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Google Map Section -->
                    <div class="col-lg-12 py-3">
                        <h3 class="fw-bold">Our main branch is located at:</h3>
                        <div class="mt-4">
                            <iframe
                                width="100%" height="500"
                                frameborder="0" style="border:1px solid black"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB_kj6QnkgpVZsuwXh1-XxX_K3xt1UjCF0&q=TQMP+Glass+and+Aluminum+Supply"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Accordion Section -->
    @include ('plus.accordion')
    <!-- End of Accordion -->

    <!-- Call to Action -->
    @include ('plus.cta')
    <!-- End of Call to Action -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>

</html>