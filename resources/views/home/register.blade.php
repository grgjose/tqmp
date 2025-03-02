<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Registration | Total Quality Management Products Philippines</title>
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

    <section id="title">
        <div class="container text-center py-5 fade-in-up">
            <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Register</span>
            <h2 class="fw-bold">Create your own account</h2>
            <!-- Paragraph -->
            <p class="mt-3">
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </section>

    <div class="container py-2 fade-in-up">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="rounded-4 border border-1 p-5">
                        <h3 class="fw-bold mb-4">Fill out the form</h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Login Form -->
                        <form action="/register" method="post" enctype='multipart/form-data'>
                            @csrf
                            <!-- Name Input -->
                            <!-- First Name Input -->
                            <div class="row mb-4">
                                <!-- First Name Input -->
                                <div class="col-md-4">
                                    <div class="form-outline">
                                        <label for="fname" class="form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Input First Name" required />
                                    </div>
                                </div>

                                <!-- Middle Name Input -->
                                <div class="col-md-4">
                                    <div class="form-outline">
                                        <label for="mname" class="form-label">Middle Name</label>
                                        <input type="text" id="mname" name="mname" class="form-control" placeholder="Input Middle Name" />
                                    </div>
                                </div>

                                <!-- Last Name Input -->
                                <div class="col-md-4">
                                    <div class="form-outline">
                                        <label for="lname" class="form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" id="lname" name="lname" class="form-control" placeholder="Input Last Name" required />
                                    </div>
                                </div>
                            </div>

                            <!-- Email Input -->
                            <div class="form-outline mb-4">
                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Input your Email address" required />
                            </div>

                            <!-- Contact Number Input -->
                            <div class="form-outline mb-4">
                                <label for="contact_num" class="form-label">Contact Number <span class="text-danger">*</span></label>
                                <input type="text" id="contact_num" name="contact_num" class="form-control" placeholder="Enter Contact Number" required />
                            </div>

                            <!-- Birthday Input -->
                            <div class="form-outline mb-4">
                                <label for="birthdate" class="form-label">Birthdate <span class="text-danger">*</span></label>
                                <input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="Birthday" required />
                            </div>

                            <!-- Password Input -->
                            <div class="form-outline mb-4">
                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your Password" required />
                            </div>

                            <!-- Repeat Password Input -->
                            <div class="form-outline mb-4">
                                <label for="confirm_password" class="form-label">Confirm your Password <span class="text-danger">*</span></label>
                                <input type="password" id="confirm_password" name="password_confirmation" class="form-control" placeholder="Repeat your Password" required />
                                <div id="passwordError" class="text-danger mt-2" style="display: none;">Passwords do not match.</div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const password = document.getElementById('password');
                                    const confirmPassword = document.getElementById('confirm_password');
                                    const passwordError = document.getElementById('passwordError');

                                    confirmPassword.addEventListener('input', function() {
                                        if (password.value !== confirmPassword.value) {
                                            passwordError.style.display = 'block';
                                            document.getElementById("registerButton").disabled = true;

                                        } else {
                                            passwordError.style.display = 'none';
                                            document.getElementById("registerButton").disabled = false;
                                        }
                                    });
                                });
                            </script>

                            <!-- File Upload Input -->
                            <div class="form-outline mb-4">
                                <label for="upload_file" class="form-label">Please upload your government ID and/or Business Registration if you're a business owner. Be Our Partner to enjoy our Best Price Offers. <span class="text-danger">*</span></label>
                                <input type="file" id="upload_file" name="upload_file" class="form-control" required />
                            </div>

                            <!-- Submit Button -->
                            <input type="submit" id="registerButton" class="card-button btn btn-danger mt-auto btn-block w-100 mb-3" value="Register">

                            <!-- Login Link -->
                            <p class="text-center">
                                Already have an account? <a href="/login" class="text-danger text-decoration-none">Login</a>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
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