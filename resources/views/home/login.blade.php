<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TQMP Login</title>
    <link rel="icon" href="{{ asset('storage/logos/TQMPLogo.png') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-bIu6lXcBdA1/M6LlAvf/QY5PqqoExW6CkLfVi00ZWyUvSyyrDBv5uhrYPLK4OX24K5Bh6ZqIbOABtLqTSbO2ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        /* Custom styling for center alignment and background */
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f0f2f5;
        }

        .vh-100 {
            min-height: 100vh;
        }

        .h-custom {
            height: auto;
        }

        .custom-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
    </style>
</head>

<body>
    <section class="container d-flex justify-content-center align-items-center vh-100">
        <div class="container h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <!-- Image Column -->
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>

                <!-- Form Column -->
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="custom-card">
                        <form>
                            <!-- Social Sign In -->
                            <div class="d-flex flex-row align-items-center justify-content-center">
                                <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </button>
                            </div>

                            <!-- Divider -->
                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0">Or</p>
                            </div>

                            <!-- Email Input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control form-control-lg"
                                    placeholder="Enter a valid email address" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password Input -->
                            <div class="form-outline mb-3">
                                <input type="password" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Enter password" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Checkbox and Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3">Remember me</label>
                                </div>
                                <a href="#!" class="text-body">Forgot password?</a>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg" style="padding: 10px 40px;">Login</button>
                            </div>

                            <!-- Register Link -->
                            <p class="small fw-bold mt-3 text-center">
                                Don't have an account? <a href="#!" class="link-danger">Register</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>