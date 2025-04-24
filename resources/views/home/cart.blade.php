<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Checkout | Total Quality Management Products Philippines</title>
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

    <!-- Homepage JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/homepage.js') }}"></script>
</head>

<body>
    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->

    <div class="container py-5">
        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Order Details Section -->
            <div class="col-lg-8 mb-4">
                <form action="/checkout" method="POST">
                    @csrf
                    <div class="border p-3">
                        <h5 class="fw-bold">Order #{{ $my_user->id.date('ymdHis') }}</h5>
                        <input type="hidden" name="reference_num" value="{{ $my_user->id.date('ymdHis') }}">
                        <p class="text-muted">{{ date('jS F Y', strtotime('now')) }} at {{ date('h:i A') }}</p>
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr class="text-muted">
                                        <th></th>
                                        <th>Product Details</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($carts) == 0)
                                    <tr>
                                        <td colspan="4">No Products Selected</td>
                                    </tr>
                                    @endif
                                    @foreach($carts as $cart)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="checkboxes[]" value="{{$cart->id}}" class="form-check-input">
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @foreach($productImages as $image)
                                                @if($image->product_id == $cart->product_id)
                                                <img src="{{ asset('storage/all-items/'.$image->filename) }}" alt="Product" class="product-image me-3">
                                                @continue
                                                @endif
                                                @endforeach

                                                @foreach($products as $product)
                                                @if($product->id == $cart->product_id)
                                                <div>
                                                    <p class="mb-0 fw-bold">{{ $product->display_name }}</p>
                                                    <small class="text-muted">Color: White | Size: Medium</small>
                                                    <small style="display: none;" id="{{ $cart->id }}_price" class="text-muted">{{ $product->price }}</small>
                                                    <input type="hidden" name="price_{{$cart->id}}" class="hiddenPrice" value="">
                                                </div>
                                                @continue
                                                @endif
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="text-center" style="width: 60px;">
                                            <input type="number" name="quantity_{{$cart->id}}" class="form-control form-control-sm text-center" value="{{ $cart->quantity }}" min="1">
                                        </td>
                                        @foreach($products as $product)
                                        @if($product->id == $cart->product_id)
                                        <td class="prices">₱{{ $product->price; }}</td>
                                        @continue
                                        @endif
                                        @endforeach
                                        <td class="text-end">
                                            <span class="btn-close" style="cursor: pointer;" onclick="removeItem(this)">&times;</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">Subtotal</p>
                            <p class="subtotal">₱0.00</p> <!-- Added class for subtotal -->
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">Shipping Cost (+)</p>
                            <p class="shipping-cost">₱0.00</p> <!-- Added class for shipping cost -->
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">Discount (-)</p>
                            <p class="discount">₱0.00</p> <!-- Added class for discount -->
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p class="total-payable">Total Payable</p>
                            <p class="total-payable2">₱0.00</p> <!-- Added class for total payable -->
                        </div>
                        <h6 class="coupon-text">Apply Coupon to get discount!</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Coupon code">
                            <button class="card-button btn btn-danger">Apply Code</button>
                        </div>
                        <button type="submit" class="card-button btn btn-danger w-100">Checkout</button>
                    </div>
                </form>
            </div>

            <!-- Customer Details Section -->
            <div class="col-lg-4">
                {{-- <div class="border p-3">
                    <h5 class="fw-bold">Customer's Details</h5>
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('storage/user-pics/'.$my_user->user_pic) }}" alt="Customer" class="rounded-circle me-3" width="60">
                <div>
                    <p class="mb-0 fw-bold">{{ $my_user->fname . ' ' . $my_user->lname }}</p>
                    <small class="text-muted">10 Previous Orders</small>
                </div>
            </div>
            <form>
                <div class="mb-3">
                    <label for="shippingAddress" class="form-label"><strong>Shipping Address:</strong></label>
                    <input type="text" class="form-control" id="shippingAddress" value="{{ $my_user->address }}">
                </div>
                <div class="mb-3">
                    <label for="billingAddress" class="form-label"><strong>Billing Address:</strong></label>
                    <input type="text" class="form-control" id="billingAddress" value="{{ $my_user->address }}">
                </div>
                <div class="mb-3">
                    <label for="emailAddress" class="form-label"><strong>Email Address:</strong></label>
                    <input type="email" class="form-control" id="emailAddress" value="{{ $my_user->email }}">
                </div>
                <button type="submit" class="card-button btn btn-danger w-100">Save Details</button>
            </form>
        </div> --}}

        <br>
        <h5 class="fw-bold">Delivery Details</h5>
        <div class="row pt-3">
            <div class="col-md-12 mb-4">
                <div class="border rounded-3 p-3 mt-3 d-flex align-items-center">
                    <input class="form-check-input me-3" type="radio" name="deliveryOption" id="option1">
                    <img src="https://th.bing.com/th/id/R.ceca21e2c4adf86765ad827513550427?rik=MHwhFqcmy9sM8Q&pid=ImgRaw&r=0" alt="Product" class="product-image me-3" style="height: 50px; width: auto;">
                    <label class="form-check-label" for="option1">
                        <p class="mb-0 fw-bold">Pick Up (Main Branch)</p>
                        <small class="text-muted">Expected Delivery: *insert date*</small>
                        <p class="mt-2">Free</p>
                    </label>
                </div>
            </div>
            {{-- <div class="col-md-12 mb-4">
                        <div class="border rounded p-3 w-100 d-flex align-items-center">
                            <input class="form-check-input me-3" type="radio" name="deliveryOption" id="option1">
                            <img src="https://th.bing.com/th/id/OIP.Dl-WiroGReI7sZ13Bp5U1gHaHa?rs=1&pid=ImgDetMain" alt="Product" class="product-image me-3" style="height: 50px; width: auto;">
                            <label class="form-check-label" for="option1">
                                <p class="mb-0 fw-bold">Sample Delivery Company</p>
                                <small class="text-muted">Expected Delivery: March 3, 2025</small>
                                <p class="mt-2">₱100.00</p>
                            </label>
                        </div>
                    </div> --}}
            {{--
                    <div class="col-md-6 mb-4">
                        <div class="border rounded p-3 w-100 d-flex align-items-center">
                            <input class="form-check-input me-3" type="radio" name="deliveryOption" id="option2">
                            <img src="https://th.bing.com/th/id/OIP.Pp0yBjr7Qr1TB7oRM9vLIgHaHa?rs=1&pid=ImgDetMain" alt="Product" class="product-image me-3" style="height: 50px; width: auto;">
                            <label class="form-check-label" for="option2">
                                <p class="mb-0 fw-bold">Sample Delivery Company</p>
                                <small class="text-muted">Expected Delivery: March 3, 2025</small>
                                <p class="mt-2">$25.00</p>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="border rounded p-3 w-100 d-flex align-items-center">
                            <input class="form-check-input me-3" type="radio" name="deliveryOption" id="option3">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Logo_J%26T_Merah_Square.jpg/330px-Logo_J%26T_Merah_Square.jpg" alt="Product" class="product-image me-3" style="height: 50px; width: auto;">
                            <label class="form-check-label" for="option3">
                                <p class="mb-0 fw-bold">Sample Delivery Company</p>
                                <small class="text-muted">Expected Delivery: March 3, 2025</small>
                                <p class="mt-2">$45.00</p>
                            </label>
                        </div>
                    </div> 
                    --}}
        </div>

        <br>
        <h5 class="fw-bold mt-3">Payment Methods</h5>
        <p class="text-muted">Choose a payment method in your convenience</p>
        <div class="container">
            <div class="row">
                <div class="border rounded-3 p-3 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-0 fw-bold">Direct Bank Transfer</p>
                        <small class="text-muted">Transfer directly to our bank account.</small> <br>
                        <small class="text-muted">Show Proof of Transaction upon Pickup.</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="bankTransfer">
                    </div>
                </div>
                <div class="border rounded-3 p-3 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-0 fw-bold">Cash on Delivery</p>
                        <small class="text-muted">Pay when you receive the product.</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="cod">
                    </div>
                </div>
                <!-- <div class="border rounded-3 p-3 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-0 fw-bold">Online Gateway</p>
                        <small class="text-muted">Pay securely through our online payment gateway.</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="onlinePayment" disabled>
                    </div>
                </div> -->
                <!-- Add to Cart Button -->
                {{-- <button type="submit" class="card-button btn btn-danger btn-lg w-100 mb-4 mt-3">Add to Cart</button> --}}
            </div>
        </div>

    </div>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const checkboxes = $('input[name="checkboxes[]"]');
            const paymentMethods = $('input[name="paymentMethod"]:not(:disabled)');
            const checkoutButton = $('.card-button');

            // Initially disable the button
            checkoutButton.prop('disabled', true);

            // Check conditions whenever checkboxes or payment methods change
            function validateForm() {
                const atLeastOneChecked = checkboxes.is(':checked');
                const paymentSelected = paymentMethods.is(':checked');
                checkoutButton.prop('disabled', !(atLeastOneChecked && paymentSelected));
            }

            checkboxes.on('change', validateForm);
            paymentMethods.on('change', validateForm);
        });
    </script>
</body>
<!--end::Body-->


<!-- Footer -->
@include ('plus.footer')
<!-- End of Footer -->

</html>