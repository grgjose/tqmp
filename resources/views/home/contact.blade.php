<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>

    <!-- Preconnect for External Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="main.css">

    <!-- Scripts -->
    <script src="../assets/js/color-modes.js" defer></script>
    <!-- Optional: Move this to the bottom of the body if it's not critical for rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Style -->
    @include('plus.style')
    <!-- End of Style -->

    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <!-- About Us Section -->

    <div class="container py-4">
        <section class="custom-section fade-in py-5 align-items-center">
            <!-- Contact Section -->
            <div class="container contact-section">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="col-md-6">
                        <h3 class="fw-bold">Contact Us</h3>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Enter your full name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject"
                                    placeholder="Enter the subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Write your message here" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-red">Send Message</button>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="col-md-6 contact-info">
                        <h3 class="fw-bold">Get in Touch</h3>
                        <div class="mt-4">
                            <h5>Address</h5>
                            <p>168 Sapang Bakaw, Lawang Bato, Valenzuela City Philippines 1447</p>
                        </div>
                        <div class="mt-4">
                            <h5>Email</h5>
                            <p>sales@tqmp.biz</p>
                        </div>
                        <div class="mt-4">
                            <h5>Phone</h5>
                            <p>+632-7717-8767</p>
                        </div>
                        <div class="mt-4">
                            <h5>Working Hours</h5>
                            <p>Mon-Sat: 8am-5pm</p>
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