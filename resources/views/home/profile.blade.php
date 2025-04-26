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
            <button class="card-button btn btn-primary">Save Changes</button>
        </div>
        <div class="row">
            <!-- Profile Section (Top) -->
            <div class="col-md-12 mb-4">
                <div class="row">
                    <!-- Profile Picture Column -->
                    <div class="col-md-4">
                        <div class="text-center mb-3">
                            <img src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}" alt="Profile"
                                class="img-fluid rounded" style="max-height: 200px; width: auto;">
                        </div>
                    </div>

                    <!-- Profile Update Column -->
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Update Profile Picture</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Old Password</label>
                            <input type="password" class="form-control" placeholder="Old Password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">New Password</label>
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>

                        <!-- <button class="btn btn-primary">Change Password</button> -->
                    </div>
                </div>
            </div>

            <!-- User Details Section (Bottom) -->
            <div class="col-md-12">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Username</label>
                        <input type="text" class="form-control py-2" value="john.doe" placeholder="User Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">First Name</label>
                        <input type="text" class="form-control py-2" value="{{ $my_user->fname }}" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Middle Name</label>
                        <input type="text" class="form-control py-2" value="{{ $my_user->mname }}" placeholder="Middle Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Last Name</label>
                        <input type="text" class="form-control py-2" value="{{ $my_user->lname }}" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Extension</label>
                        <input type="text" class="form-control py-2" value="{{ $my_user->ext }}" placeholder="Jr., Sr., III., etc">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Email (required)</label>
                        <input type="email" class="form-control py-2" value="{{ $my_user->email }}" placeholder="Your Email Address">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Birthdate</label>
                        <input type="date" class="form-control py-2" value="{{ $my_user->birthdate }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Contact Number</label>
                        <input type="tel" class="form-control py-2" value="{{ $my_user->contact_num }}" placeholder="Contact Number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Default Shipping Address</label>
                        <input type="text" class="form-control py-2" value="" placeholder="Default Shipping Address">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Billing Address</label>
                        <input type="text" class="form-control py-2" value="" placeholder="Billing Address">
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row mt-4">
            <div class="col-md-12">
                <div class="border rounded overflow-hidden mb-4">
                    <div class="bg-danger text-white p-3">
                        Shipping Address
                    </div>
                    <div class="p-0">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Defaut Shipping Adddress</th>
                                    <th>Billing Address</th>
                                    <th>Email Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-danger text-white">
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
            </div> --}}
        </div> -->

        <hr class="text-muted mt-5 mb-5">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="mb-4">
                    <div class="fw-bold mb-3">
                        Order History
                    </div>
                    <div class="p-0">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($groupedOrders as $order)
                                <tr>
                                    <td><a href="/order-status/{{ $order->reference_num }}">{{ $order->reference_num }}</a></td>
                                    <td>{{ $order->nearest_created_at }}</td>
                                    <td><span class="text-success">{{ ucfirst($order->group_status) }}</span></td>
                                    <td>₱{{ $order->total_price }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="mb-4">
                    <div class="fw-bold mb-3">
                        Current Orders
                    </div>
                    <div class="p-0">
                        <table class="table table-bordered mb-0">
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
                <div class="mb-4">
                    <div class="fw-bold mb-3">
                        Pending Quotations
                    </div>
                    <div class="p-0">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Quotation ID</th>
                                    <th>Date Submitted</th>
                                    <th>Status</th>
                                    <th>Total Pricing</th>
                                    <th>Valid Until</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($quotations) == 0)
                                <tr>
                                    <td colspan="5" class="text-center py-3">No available data</td>
                                </tr>
                                @endif
                                @foreach($quotations as $quote)
                                <tr>
                                    <td>
                                        <a href="/show-quotation/{{ $quote->reference }}" class="quotation-link"
                                            data-reference="{{ $quote->reference }}">
                                            {{ $quote->reference }}
                                        </a>
                                    </td>
                                    <td>{{ $quote->created_at }}</td>
                                    <td><span class="text-success">{{ $quote->status }}</span></td>
                                    <td>{{ $quote->final_price }}</td>
                                    <td>{{ $quote->valid_until }}</td>
                                    <td class="text-center"><button type="button" class="btn btn-sm btn-primary py-1 px-2" style="font-size: 0.7rem;">Add to Cart</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="quotationModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="bg-danger text-white p-3 modal-header">
                        <h6 class="modal-title">Quotation Details</h6>
                    </div>
                    <div class="modal-body p-4" id="modalContent">
                        <form action="/create-quotation" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">Service Type</label>
                                <input name="glasstype[]" class="form-control" type="text" placeholder="Glass Processing" disabled>
                                <input type="hidden" name="quotation_type" value="glass">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Glass Type</label>
                                <input name="glasstype[]" class="form-control" type="text" placeholder="Enter glass type" disabled>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Thickness</label>
                                    <input name="thickness[]" class="form-control" type="text" placeholder="Enter thickness" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Color</label>
                                    <input name="width1[]" class="form-control" type="text" placeholder="Enter color" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Quantity</label>
                                    <input name="quantity[]" class="form-control" type="number" min="1" value="1" disabled>
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Height (mm)</label>
                                    <div class="row g-2">
                                        <div class="col">
                                            <input name="height1[]" class="form-control" type="number" placeholder="H1" disabled>
                                        </div>
                                        <div class="col">
                                            <input name="height2[]" class="form-control" type="number" placeholder="H2" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Width (mm)</label>
                                    <div class="row g-2">
                                        <div class="col">
                                            <input name="width1[]" class="form-control" type="number" placeholder="W1" disabled>
                                        </div>
                                        <div class="col">
                                            <input name="width2[]" class="form-control" type="number" placeholder="W2" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Cutting Details</label>
                                <textarea name="cutting_details" rows="2" class="form-control" disabled></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Images Gallery</label>
                                <div class="border rounded p-2">
                                    @if(isset($images) && count($images) > 0)
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach($images as $image)
                                        <div class="border rounded overflow-hidden" style="width: 80px; height: 80px;"
                                            data-bs-toggle="modal" data-bs-target="#imageModal"
                                            onclick="document.getElementById('modalImage').src=' '">
                                            <img src=" " alt="Quotation Image"
                                                class="w-100 h-100 object-fit-cover">
                                        </div>
                                        @endforeach
                                    </div>
                                    @else
                                    <div class="text-center py-2 text-muted">
                                        No images available
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Print Receipt</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image preview modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body text-center p-2">
                        <img id="modalImage" src="" class="img-fluid" style="max-height: 80vh;">
                    </div>
                    <div class="modal-footer p-2">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
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

    <!--Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <!--Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
</body>

</html>