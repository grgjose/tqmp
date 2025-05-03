<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Reset Password | Total Quality Management Products Philippines</title>
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('storage/css/main.css') }}">
</head>

<body>
    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <section id="title">
        <div class="container text-center py-5 fade-in-up">
            <span class="badge text-white mb-2" style="background-color: #950101; font-size:large;">Reset Password</span>
            <!-- Paragraph -->
            <p class="mt-3">
                Make sure you remember your new password.
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
                        <form action="/reset-password" method="post" enctype='multipart/form-data'>
                            @csrf

                            <input type="hidden" name="user_id" value="{{ $user->id }}" />

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

                                $(document).ready(function () {
                                    $('#password, #confirm_password').on('keyup', function () {
                                        let password = $('#password').val();
                                        let confirmPassword = $('#confirm_password').val();
                                        
                                        if (password !== confirmPassword && password !== "") {
                                            $('#passwordError').attr("style", "display: block;");
                                            $('#registerButton').prop('disabled', true);
                                        } else {
                                            $('#passwordError').attr("style", "display: none;");
                                            $('#registerButton').prop('disabled', false);
                                        }
                                    });
                                });

                            </script>

                            <!-- Submit Button -->
                            <input type="submit" id="registerButton" class="card-button btn btn-danger mt-auto btn-block w-100 mb-3" value="Reset Password">

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