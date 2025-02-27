        <!--App Main-->
        <main class="app-main">
            <!--App Content Header-->
            <div class="app-content-header">
                <!--Container-->
                <div class="container-fluid">
                    <!--Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Inventory</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Inventory</li>
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
                <div class="container-fluid" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: white;">                    <!--Row-->
                    <div class="row">
                        <div class="col-6">
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-1">
                            <button class="btn btn-primary" onclick="showForm()">
                                <span class="fa-solid fa-cloud-arrow-down"></span> Export CSV
                            </button>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-success" onclick="showForm()">
                                <span class="fas fa-plus"></span> Add Inventory
                            </button>
                        </div>
                        <table id="example" class="table is-striped" style="width:100%; text-align: left;">
                            <thead>
                                <tr>
                                    <th>Brand</th>
                                    <th>Product Name</th>
                                    <th>Model Number</th>
                                    <th>Details</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Thore</td>
                                    <td>Patch Fittings</td>
                                    <td>GSM-0039</td>
                                    <td>Transom / Top Corner Patch</td>
                                    <td># 60</td>
                                    <td>
                                        <div class="btn-group-sm">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Status
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Available</a></li>
                                                <li><a class="dropdown-item" href="#">Low Stock</a></li>
                                                <li><a class="dropdown-item" href="#">Out of Stock</a></li>
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
                                <tr>
                                    <td>Thore</td>
                                    <td>Door Closers</td>
                                    <td>GSM-0060</td>
                                    <td>Floor Hinge</td>
                                    <td># 30</td>
                                    <td>
                                        <div class="btn-group-sm">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Status
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Available</a></li>
                                                <li><a class="dropdown-item" href="#">Low Stock</a></li>
                                                <li><a class="dropdown-item" href="#">Out of Stock</a></li>
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
                              
                            </tbody>
                        </table>
                    </div>

                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->