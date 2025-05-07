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
                <div class="card tbl">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Inventory of Products</h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="col-6">
                            <h3 class="mb-0">Inventory</h3>
                        </div> -->
                        <!-- <div class="col-4">
                        </div> -->

                        <table id="example" class="table is-striped" style="width:100%; text-align: left;">
                            <thead>
                                <tr>
                                    <th style="width: 20%">Product Name</th>
                                    <th style="width: 40%">Display Name</th>
                                    <th style="width: 10%">Stock</th>
                                    <th style="width: 15%">Status</th>
                                    <th style="width: 15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inventories as $inventory)
                                    @if($inventory->category_id == 2 || $inventory->category_id == 3 || $inventory->category_id == 5)
                                        <tr>
                                            <td>{{ $inventory->product_name }}</td>
                                            <td>{{ $inventory->product_display_name }}</td>
                                            <td>{{ $inventory->stock; }}</td>
                                            <td>
                                                @if($inventory->status == "On-Hold")
                                                    On-Hold
                                                @elseif($inventory->stock == 0)
                                                    Out of Stock
                                                @elseif($inventory->stock < 20)
                                                    Low Stock
                                                @elseif($inventory->stock > 20)
                                                    Available
                                                @endif

                                                {{-- <div class="btn-group-sm">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Status
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Available</a></li>
                                                        <li><a class="dropdown-item" href="#">Low Stock</a></li>
                                                        <li><a class="dropdown-item" href="#">Out of Stock</a></li>
                                                        <li><a class="dropdown-item" href="#">On-Hold</a></li>
                                                    </ul>
                                                </div> --}}
                                            </td>
                                            <td>
                                                <div class="btn-group-sm">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#updateModal" onclick="inventoryUpdateStock({{$inventory->id}},'{{$inventory->stock}}','{{$inventory->status}}')">Update Stock</a></li>
                                                        @if($inventory->status == "Active")
                                                            <li><a class="dropdown-item" href="#" onclick="inventoryUpdateStatus({{$inventory->id}},'{{$inventory->stock}}','On-Hold')">Change to On-Hold Item</a></li>
                                                        @else
                                                            <li><a class="dropdown-item" href="#" onclick="inventoryUpdateStatus({{$inventory->id}},'{{$inventory->stock}}','Active')">Change to Active Item</a></li>
                                                        @endif
                                                    </ul>

                                                </div>
                                            </td>
                                        </tr>
                                    @endif
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

        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Update Stock</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="updateForm" action="/inventory-update" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="form-group col-12">
                                    <label for="stock">Stock</label>
                                    <input type="number" min="0" max="10000" class="form-control" id="stock" name="stock" value="" required>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" id="status" name="status" value="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>