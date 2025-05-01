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
                        <div class="col-sm-6 text-end">
                            <!-- <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Inventory</li>
                            </ol> -->
                            <button class=" btn btn-sm btn-success" onclick="showForm()">
                                <span class="fas fa-plus"></span> Export CSV
                            </button>
                            <button class="btn btn-sm btn-success" style="width: 116px;" onclick="showForm()">
                                <span class="fas fa-plus"></span> Add Inventory
                            </button>
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
                <div class="container-fluid" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: white;">
                    <!--Row-->
                    <div class="row">
                        <!-- <div class="col-6">
                            <h3 class="mb-0">Inventory</h3>
                        </div> -->
                        <!-- <div class="col-4">
                        </div> -->

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
                                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <button class="btn btn-success btn-sm">Add</button>
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                            <button class="btn btn-info btn-sm">View</button>
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
                                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <button class="btn btn-success btn-sm">Add</button>
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                            <button class="btn btn-info btn-sm">View</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Yale</td>
                                    <td>Floor Check</td>
                                    <td>YFS-8003</td>
                                    <td>Yale Floor Spring - Cast Iron Body</td>
                                    <td># 8</td>
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
                                            <button class="btn btn-success btn-sm">Add</button>
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                            <button class="btn btn-info btn-sm">View</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Thore</td>
                                    <td>Sliding Door Hanger</td>
                                    <td>GSM-0103</td>
                                    <td>Sliding Door</td>
                                    <td># 10</td>
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
                                            <button class="btn btn-success btn-sm">Add</button>
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                            <button class="btn btn-info btn-sm">View</button>
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