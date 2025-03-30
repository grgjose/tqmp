<!--App Main-->
<main class="app-main">
    <!--App Content Header-->
    <div class="app-content-header">
        <!--Container-->
        <div class="container-fluid">
            <!--Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">{{ $title }}</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
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

        <div class="card tbl">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">List of Products</h4>
                <div class="ms-auto">
                    <button class="btn btn-success px-4" onclick="productCreate()"><i class="fa-solid fa-cart-plus"></i> &nbsp; Add Product</button>
                </div>
            </div>
            <div class="card-body">
                <table id="tbl_approvals" class="table is-striped" style="width:100%; text-align: left;">
                    <thead>
                        <tr>
                            <th style="width: 15%">Brand</th>
                            <th style="width: 15%">Category</th>
                            <th style="width: 10%">Display Name</th>
                            <th style="width: 10%">Production Name</th>
                            <th style="width: 20%">Price</th>
                            <th style="width: 50%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->display_name }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                {{-- <td>
                                    <div class="btn-group-sm">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Status
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Approve</a></li>
                                            <li><a class="dropdown-item" href="#">Reject</a></li>
                                            <li><a class="dropdown-item" href="#">Out of Stock</a></li>
                                        </ul>
                                    </div>
                                </td> --}}
                                <td>
                                    <div class="btn-group-sm">
                                        <button class="btn btn-warning btn-sm" onclick="showDetails({{ $product->id }})"> <i class="fa-solid fa-eye"></i> View</button>
                                        <button class="btn btn-success btn-sm" onclick="approve({{ $product->id }})"> <i class="fa-solid fa-pen"></i> Update</button>
                                        <button class="btn btn-danger btn-sm" onclick="reject({{ $product->id }})"> <i class="fa-solid fa-trash"></i> Delete</button>
                                        {{-- <button class="btn btn-success btn-sm">Add</button>
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                        <button class="btn btn-info btn-sm">View</button> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="view">
        </div>

    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->