<!DOCTYPE html>
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

    <section id="title">
        <div class="container text-center py-5 fade-in-up">
            <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Contact Us</span>
            <h2 class="fw-bold">Reach us for inquiries</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                Have questions or need assistance? Fill out the form below, and our team will get back to you promptly.
            </p>
        </div>
    </section>

    <section id="form" class="fade-in-up container">
        <div class="col-md-12" >
            <h3 class="fw-bold">Fill out the form</h3>
            <form class="py-3" action="/inquiry-store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="fullName" class="form-label fw-bold">Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullName" name="fullname" placeholder="Your full name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label fw-bold">Phone Number <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="contact_num" placeholder="Your phone number">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label fw-bold">Subject <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label fw-bold">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label fw-bold">Please upload your government ID and/or Business Registration if you're a business owner. Be Our Partner to enjoy our Best Price Offers. <span class="text-danger">*</span></label>
                    <input class="form-control form-control-sm" name="upload_file" id="formFileSm" type="file">
                </div>
                <div>
                    <button type="submit" class="btn btn-danger w-100">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <section id="locations" class="fade-in-up container">
        <div class="container contact-section py-5 mt-3">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <!-- Get in Touch -->
                    <div class="mb-4">
                        <h3 class="fw-bold ">Get in Touch</h3><br>
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <h5><i class="fas fa-envelope text-danger me-2"></i> Email</h5>
                                <p class="text-muted mb-0">Get in touch with us</p>
                                <p><b>sales@tqmp.biz</b></p>
                            </div>
                            <div class="col-md-4">
                                <h5><i class="fas fa-clock text-danger me-2"></i> Business Hours</h5>
                                <p class="text-muted mb-0">Check out our Business Hours</p>
                                <p>
                                    <strong>Mon - Sat:</strong> 8am - 5pm<br>
                                    <strong>Sunday:</strong> Closed
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Locations -->
                    <div class="mb-4 contact-info">
                        <h3 class="fw-bold ">Locations</h3><br>
                        <div class="mb-3">
                            <h5><i class="fas fa-map-marker-alt text-danger me-2"></i> Main Office</h5>
                            <p>
                                <b>Valenzuela Sales Office</b> (Main Office)<br>
                                168 Sapang Bakaw, Lawang Bato, Valenzuela City Philippines 1447<br>
                                +632-7717-8767
                            </p>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5><i class="fas fa-map-marker-alt text-danger me-2"></i> Luzon Offices</h5>
                                    <p>
                                        <b>Cauayan Sales Office</b><br>
                                        A4 Compound, Cabanatuan Road, San Fermin, Cauayan City, Isabela<br>
                                        Contact No. +63 78-652-1158
                                    </p>
                                    <p>
                                        <b>Dagupan Sales Office</b><br>
                                        De Venecia Ave, Lasip Choco, Dagupan City, Pangasinan<br>
                                        Contact No. 0908-876-5324<br>
                                        Contact No. 0919-085-5110<br>
                                        Contact No. 0919-085-5125
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5><i class="fas fa-map-marker-alt text-danger me-2"></i> Visayas Offices</h5>
                                    <p>
                                        <b>Cebu Branch</b><br>
                                        Km 14 SRP Highway, Dumlog, Talisay City, Cebu
                                    </p>
                                    <p>
                                        <b>Iloilo Sales Office</b><br>
                                        Contact No. +63 905 551 5683
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <h5><i class="fas fa-map-marker-alt text-danger me-2"></i> Mindanao Offices</h5>
                                    <p>
                                        <b>Davao Sales Office</b><br>
                                        Brgy. Bubod, Bunawan District, Davao City<br>
                                        Contact No. +63 905 551 5674
                                    </p>
                                    <p>
                                        <b>Cagayan De Oro Sales Office</b><br>
                                        Contact No. +63 905 551 5661
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Map Section -->
                <div class="col-md-6 mt-3">
                    <h3 class="fw-bold">Office Locations Nationwide</h3>
                    <div class="mt-4" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden;">
                        <iframe
                            width="100%"
                            height="610"
                            frameborder="0"
                            style="border: 0; border-radius: 8px;"
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/d/u/1/embed?mid=1T_rIsKAGT3S3DoiTe2Kxj2Gc0eoeVQQ&ehbc=2E312F&noprof=1&z=5&output=embed"
                            allowfullscreen>
                        </iframe>
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
</body>

</html>