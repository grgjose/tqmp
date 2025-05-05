        <!--begin::App Main-->
        <main class="app-main">
            <!--App Content Header-->
            <div class="app-content-header">
                <!--Container-->
                <div class="container-fluid">
                    <!--Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Orders</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--App Content-->
            <div class="app-content">
                <!--Container-->
                <div class="container-fluid" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: white;"> <!--Row-->
                    <div class="row">

                        <table id="example" class="table is-striped" style="width:100%; text-align: left;">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Customer</th>
                                    <th>Sales Rep</th>
                                    <th>Shipping Address</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td><a href="#">{{ $order->reference_num }}</a></td>
                                    <td>{{ $order->product_name }}</td>
                                    <td>{{ $order->customer_fullname }}</td>
                                    <td>{{ $order->sales_rep_fullname }}</td>
                                    <td>{{ $order->shipping_address }}</td>
                                    <td>PHP {{ $order->price }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>
                                        <div class="btn-group-sm">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Status
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Pending</a></li>
                                                <li><a class="dropdown-item" href="#">Awaiting Payment</a></li>
                                                <li><a class="dropdown-item" href="#">Awaiting Fulfillment</a></li>
                                                <li><a class="dropdown-item" href="#">Awaiting Shipment</a></li>
                                                <li><a class="dropdown-item" href="#">Awaiting Pickup</a></li>
                                                <li><a class="dropdown-item" href="#">Awaiting Shipped</a></li>
                                                <li><a class="dropdown-item" href="#">Partially Shipped</a></li>
                                                <li><a class="dropdown-item" href="#">Awaiting Pickup</a></li>
                                                <li><a class="dropdown-item" href="#">Completed</a></li>
                                                <li><a class="dropdown-item" href="#">Shipped</a></li>
                                                <li><a class="dropdown-item" href="#">Cancelled</a></li>
                                                <li><a class="dropdown-item" href="#">Declined</a></li>
                                                <li><a class="dropdown-item" href="#">Refunded</a></li>
                                                <li><a class="dropdown-item" href="#">Disputed</a></li>
                                                <li><a class="dropdown-item" href="#">Manual Verification Required</a></li>
                                                <li><a class="dropdown-item" href="#">Partially Refunded</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group-sm">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Actions
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add</a></li>
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">View</a></li>
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a></li>
                                            </ul>

                                            <!-- Delete Confirmation Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="button" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->