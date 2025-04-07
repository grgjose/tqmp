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
                        <li class="breadcrumb-item active" aria-current="page">Quotations</li>
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
                <h4 class="card-title">List of Quotations</h4>
            </div>
            <div class="card-body">
                <table id="tbl_approvals" class="table is-striped" style="width:100%; text-align: left;">
                    <thead>
                        <tr>
                            <th style="width: 15%">Reference</th>
                            <th style="width: 20%">Type</th>
                            <th style="width: 20%">Customer Name</th>
                            <th style="width: 15%">Status</th>
                            {{-- <th>Status</th> --}}
                            <th style="width: 30%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quotations as $quotation)
                            <tr>
                                <td>{{ $quotation->reference }}</td>
                                <td>{{ $quotation->type }}</td>
                                <td>
                                    @foreach($users as $user)
                                        @if($user->id == $quotation->user_id)
                                            {{ $user->fname.' '.$user->mname.' '.$user->lname }}
                                            @continue
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $quotation->status }}</td>
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
                                        <button class="btn btn-warning btn-sm" onclick="quotationShow({{ $quotation->id }})"> <i class="fa-solid fa-eye"></i> View</button>
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

    <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title border-0 text-white" id="modalLabel">Reject User Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="rejectForm" action="/approvals-reject/" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="reason">Reason</label>
                                {{-- <input type="textarea" class="form-control" name="reason" id="reason"> --}}
                                <textarea cols="10" rows="5" class="form-control" style="resize: none;" id="reason" name="reason"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Reject</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--end::App Content-->
</main>
<!--end::App Main-->