<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('storage/css/main.css') }}">

</head>

<body class="bg-body-secondary d-flex align-items-center" style="height: 100vh; margin-top: 60px;">

    <div class="container pt-6 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg rounded-4">
                    <div class="card-body p-5">
                        <h2 class="text-center fw-bold mb-4 text-danger">Register</h2>
                        <p class="text-center text-muted mb-4">Access your account</p>

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
                                document.addEventListener('DOMContentLoaded', function () {
                                    const password = document.getElementById('password');
                                    const confirmPassword = document.getElementById('confirm_password');
                                    const passwordError = document.getElementById('passwordError');

                                    confirmPassword.addEventListener('input', function () {
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
                            <input type="submit" id="registerButton" class="btn btn-danger btn-block w-100 mb-3" value="Register">

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>