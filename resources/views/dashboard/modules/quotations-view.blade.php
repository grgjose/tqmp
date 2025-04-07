<!--begin::App Main-->
<main class="app-main">
    <!--App Content Header-->
    <div class="app-content-header">
        <!--Container-->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="mx-auto">

                    <div class="card-header bg-white">
                        <h3 class="mb-0">Messages</h3>
                    </div>

                    <!-- Work Notes List -->
                    <div class="card-body p-0">
                        <!-- Note 1 -->
                        <div class="border-end border-primary border-4 mb-3 bg-white p-3">
                            <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
                                    <div class="ms-2">
                                        <strong>John Doe</strong>
                                        <div class="text-muted small">Today, 10:30 AM</div>
                                    </div>
                                </div>
                                <div>
                                    <span class="badge bg-primary me-1">Public</span>
                                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-ellipsis-v"></i></button>
                                </div>
                            </div>
                            <div>
                                <p class="mb-0">Contacted the user and walked them through the password reset process. User confirmed they can now log in successfully.</p>
                            </div>
                        </div>

                        <!-- Note 2 -->
                        <div class="border-start border-danger border-4 mb-3 bg-white p-3">
                            <div class="d-flex justify-content-between align-items-center bg-danger bg-opacity-10 p-2 mb-2 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">SR</div>
                                    <div class="ms-2">
                                        <strong>Sales Representative</strong>
                                        <div class="text-muted small">Yesterday, 3:45 PM</div>
                                    </div>
                                </div>
                                <div>
                                    <span class="badge bg-danger me-1">Private</span>
                                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-ellipsis-v"></i></button>
                                </div>
                            </div>
                            <div>
                                <p class="mb-0">[Internal Note] This appears to be related to the ongoing authentication system issues. Escalating to L2 support.</p>
                            </div>
                        </div>

                        <!-- Note 3 -->
                        <div class="border-end border-primary border-4 mb-3 bg-white p-3">
                            <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
                                    <div class="ms-2">
                                        <strong>John Doe</strong>
                                        <div class="text-muted small">Yesterday, 11:15 AM</div>
                                    </div>
                                </div>
                                <div>
                                    <span class="badge bg-primary me-1">Public</span>
                                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-ellipsis-v"></i></button>
                                </div>
                            </div>
                            <div>
                                <p class="mb-0">User reported being unable to reset password. Verified account status is active. Reset link was sent but user reports not receiving it.</p>
                                <p class="mt-2 mb-0"><strong>Next Steps:</strong> Check email logs for the reset request.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer p-0">
                        <div id="summernote"></div>
                        <div class="p-3 bg-light d-flex justify-content-between">
                            <div>
                                <button class="btn btn-sm btn-outline-secondary me-2"> <i class="fas fa-paperclip me-1"></i>Attach File </button>
                                <button class="btn btn-sm btn-outline-secondary me-2"> <i class="fas fa-history me-1"></i>View History </button>
                                <button class="btn btn-sm btn-outline-secondary"> <i class="fas fa-print me-1"></i>Print Notes </button>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-plus me-2"></i>Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--end::Container-->
        </div>
        <!--end::App Content-->
</main>
<!--end::App Main-->