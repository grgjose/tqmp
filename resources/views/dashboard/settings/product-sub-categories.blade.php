<table id="example" class="table is-striped" style="width:100%; text-align: left;">
    <thead>
        <tr>
            <th style="width: 20%">Category</th>
            <th style="width: 40%">Description</th>
            <th style="width: 30%">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productCategories as $category)
            <tr>
                <td>{{ $category->category }}</td>
                <td>{{ $category->description }}</td>
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
                        {{-- <button class="btn btn-warning btn-sm" onclick="productCategoryShow({{ $category->id }})" data-bs-toggle="modal" data-bs-target="#viewModal"> <i class="fa-solid fa-eye"></i> View </button> --}}
                        <button class="btn btn-success btn-sm" onclick="productCategoryUpdate({{ $category->id }})"> <i class="fa-solid fa-pen"></i> Update</button>
                        <button class="btn btn-danger btn-sm" onclick="productCategoryDelete({{ $category->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal"> <i class="fa-solid fa-trash"></i> Delete</button>
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