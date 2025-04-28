<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Order Status | Total Quality Management Products Philippines</title>
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
        <div class="row">
            <div class="col-12 mb-4">
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <h6 class="fw-bold mb-0 text-success">Thank you for shopping with us! For the meantime, here's your order status:</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            <div class="container mb-5">
                <h6 class="mb-4">Preparing to ship on March 24, 2021</h6>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Order Placed -->
                    <div class="text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                            <span>✓</span>
                        </div>
                        <div class="mt-1 small fw-bold">Order placed</div>
                    </div>

                    <div class="flex-grow-1 mx-2">
                        <div class="progress" style="height: 2px;">
                            <div class="progress-bar bg-primary" style="width: 33%"></div>
                        </div>
                    </div>

                    <!-- Processing -->
                    <div class="text-center">
                        <div class="border rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                            <span>✓</span>
                        </div>
                        <div class="mt-1 small">Processing</div>
                    </div>

                    <div class="flex-grow-1 mx-2">
                        <div class="progress" style="height: 2px;">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                    </div>

                    <!-- Shipped -->
                    <div class="text-center">
                        <div class="border rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                            <span>✓</span>
                        </div>
                        <div class="mt-1 small">Shipped</div>
                    </div>

                    <div class="flex-grow-1 mx-2">
                        <div class="progress" style="height: 2px;">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                    </div>

                    <!-- Delivered -->
                    <div class="text-center">
                        <div class="border rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                            <span>✓</span>
                        </div>
                        <div class="mt-1 small">Delivered</div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h6 class="mb-3">Order Details</h6>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr class="text-muted">
                                <th>Product</th>
                                <th>Quantity</th>
                                <th class="text-end">Price</th>
                            </tr>
                        </thead>
                        @php
                        $subtotal = 0;
                        @endphp
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                @if($order->p_name == "" || $order->p_name == null)
                                    <td>{{ $order->q_name }}</td>
                                @else
                                    <td>{{ $order->p_name }}</td>
                                @endif
                                <td>{{ $order->quantity }}</td>
                                <td class="text-end">₱{{ $order->price }}</td>
                                <span style="display: none;">
                                    @php
                                    $subtotal += $order->price;
                                    @endphp
                                </span>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-end fw-bold">SubTotal</td>
                                <td class="text-end fw-bold">₱{{ $subtotal }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-end fw-bold">Shipping Cost</td>
                                <td class="text-end fw-bold">₱0.00</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-end fw-bold">Total</td>
                                <td class="text-end fw-bold">₱{{ $subtotal }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Include DataTables CSS and JS -->
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
            <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#orderDetailsTable').DataTable({
                        paging: false,
                        searching: false,
                        info: false,
                        ordering: false
                    });
                });
            </script>
        </div>
    </div>


    <!-- JS for Removal of Items -->
    <script>
        function removeItem(element) {
            // Find the closest row and remove it
            const row = element.closest('tr');
            if (row) {
                row.remove();
            }
        }
    </script>

</body>
<!--end::Body-->


<!-- Footer -->
@include ('plus.footer')
<!-- End of Footer -->

<!--Required Plugin(Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

</html>