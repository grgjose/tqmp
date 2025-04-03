<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Catalogue | Total Quality Management Products Philippines</title>
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

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold">User Profile</h5>
            <button class="card-button btn btn-danger">Save Changes</button>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}" alt="Profile" class="img-fluid rounded mb-2" style="height: 50%; width: 50%;">

                </div>

                <div class="mt-3">
                    <label for="password" class="form-label">Update Profile Picture</label>
                    <input type="file" class="form-control mb-2" accept="image/*">
                    <label for="password" class="form-label">Old Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control mb-2" placeholder="Old Password">
                    <label for="password" class="form-label">New Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control mb-4" placeholder="New Password">
                    <button class="card-button btn btn-danger w-100">Change Password</button>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row g-2">
                    <div class="col-md-6">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" value="john.doe"  placeholder="User Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" value="{{ $my_user->fname }}" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" value="{{ $my_user->mname }}" placeholder="Middle Name">
                    </div>
                    <!-- <div class="col-md-6">
                        <label class="form-label">Role</label>
                        <select class="form-select">
                            <option>Admin</option>
                        </select>
                    </div> -->
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" value="{{ $my_user->lname }}"  placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Extension</label>
                        <input type="text" class="form-control" value="{{ $my_user->ext }}" placeholder="Jr., Sr., III., etc">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email (required)</label>
                        <input type="email" class="form-control" value="{{ $my_user->email }}" placeholder="Your Email Address">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Birthdate</label>
                        <input type="date" class="form-control" value="{{ $my_user->birthdate }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Contact #</label>
                        <input type="number" class="form-control" value="{{ $my_user->contact_num }}" placeholder="Contact Number">
                    </div>
                </div>
                <div class="mt-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" rows="5">{{ $my_user->address }}</textarea>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Default Shipping Address
                    </div>
                    <div class="card-body">
                        <p>Default Shipping Address: blah blah</p>
                        <hr>
                        <p>Billing Address: blah blah</p>
                        <hr>
                        <p>Email Address: blahblah@practice.com</p>
                        <hr>
                        <button class="card-button btn btn-danger">Edit Address</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Bank Details
                    </div>
                    <div class="card-body">
                        <p>Bank: ABC Bank</p>
                        <hr>
                        <p>Account Number: 123456789</p>
                        <hr>
                        <p>IFSC Code: ABCD0123456</p>
                        <hr>
                        <button class="card-button btn btn-danger">Edit Bank Details</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                Order History
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>12345</td>
                        <td>2023-01-01</td>
                        <td><span class="text-success">Completed</span></td>
                        <td>$100.00</td>
                    </tr>
                    <tr>
                        <td>12346</td>
                        <td>2023-02-01</td>
                        <td><span class="text-success">Pending</span></td>
                        <td>$150.00</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                Current Orders
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>12347</td>
                        <td>2023-03-01</td>
                        <td><span class="text-success">Processing</span></td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>12348</td>
                        <td>2023-04-01</td>
                        <td><span class="text-success">Shipped</span></td>
                        <td>$250.00</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                Pending Quotations
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Quotation ID</th>
                        <th>Date Submitted</th>
                        <th>Status</th>
                        <th>Total Pricing</th>
                        <th>Valid Until</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(count($quotations) == 0)
                        <tr>
                            <td colspan="5">No available data</td>
                        </tr>
                        @endif
                        @foreach($quotations as $quote)
                        <tr>
                            <td><a href="/show-quotation/{{ $quote->reference }}">{{ $quote->reference }}</a></td>
                            <td>{{ $quote->created_at }}</td>
                            <td><span class="text-success">{{ $quote->status }}</span></td>
                            <td>{{ $quote->final_price }}</td>
                            <td>{{ $quote->valid_until }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Chatbot -->
    @include ('plus.chatbot')
    <!-- End of Chatbot -->

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
</body>

</html>