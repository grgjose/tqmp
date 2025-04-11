<!--begin::App Main-->
<main class="app-main">
    <!--App Content Header-->
    <div class="app-content-header">
        <!--Container-->
        <div class="container-fluid py-4 bg-white">
            <div class="row">
                <div class="mx-auto">

                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Messages</h3>
                        <div>
                            <button class="btn btn-sm btn-primary" onclick="saveInput()">Save</button>
                        </div>
                    </div>

                    <!-- Work Notes List -->
                    <div class="row mt-3 mb-4">
                        <!-- Left Column -->
                        <div class="border col-md-4">
                            <!-- Basic Information Section -->
                            <div class="row">

                                <!-- Form Content with Scrollspy Targets -->
                                <div class="" data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="100" style="overflow-y: auto; height: 500px;">
                                    <!-- Basic Information -->
                                    <div id="basic-info" class="mt-3 mb-3 pt-3">
                                        <h5 class="border-bottom pb-2">Basic Information</h5>
                                        <div class="row g-2">
                                            <div class="col-md-12">
                                                <div class="row g-2">
                                                    <div class="col-md-6">
                                                        <label class="form-label small">Quotation ID</label>
                                                        <input type="text" class="form-control form-control-sm" value="{{ $quotation->reference }}" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label small">Status</label>
                                                        <input type="text" class="form-control form-control-sm" value="{{ $quotation->status }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label small">Created Date</label>
                                                <input type="datetime-local" class="form-control form-control-sm" value="{{ $quotation->created_at }}" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label small">Last Updated</label>
                                                <input type="datetime-local" class="form-control form-control-sm" value="{{ $quotation->updated_at }}" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Title and Description -->
                                    <div id="title-desc" class="mb-3 pt-3">
                                        <h5 class="border-bottom pb-2">Title & Description</h5>
                                        <label class="form-label small">Title/Subject</label>
                                        <input type="text" class="form-control form-control-sm" value="{{ $quotation->type }}" readonly>
                                        <div class="mb-3">
                                            <label class="form-label small">Initial Message</label>
                                            <textarea class="form-control form-control-sm" rows="2" readonly>{{ $quotation->message }}</textarea>
                                        </div>
                                    </div>

                                    <!-- Priority and Severity -->
                                    <div id="specs" class="row g-2 mb-3 pt-3">
                                        <h5 class="border-bottom pb-2">Specifications</h5>
                                        <div class="col-md-6">
                                            <label class="form-label small">Size</label>
                                            <input type="text" class="form-control form-control-sm" value="{{ $quotation->size }}" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label small">Color</label>
                                            <input type="text" class="form-control form-control-sm" value="{{ $quotation->color }}" readonly>
                                        </div>
                                    </div>

                                    <!-- Preview Image -->
                                    <div id="preview" class="pt-3">
                                        <h5 class="border-bottom pb-2">Uploaded Image</h5>
                                        <div class="d-flex justify-content-center align-items-center bg-light rounded-3 overflow-hidden"
                                            style="height: 400px; border: 1px solid rgba(0,0,0,0.08);">
                                            <img id="previewImage"
                                                src="{{ asset('storage/quotations/'.$quotation->filename) }}"
                                                class="img-fluid h-100 object-fit-contain p-3"
                                                style="cursor: zoom-in;"
                                                data-bs-toggle="modal"
                                                data-bs-target="#imageModal">
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content" style="width: auto;">
                                                    <div class="modal-body">
                                                        <img id="modalPreviewImage" src="{{ asset('storage/quotations/'.$quotation->filename) }}" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div id="actions" class="pt-3">
                                        <div class="d-flex justify-content-end gap-2 mb-3">
                                            <button class="btn btn-sm btn-success w-100" onclick="showInputBox('approve')">Approve</button>
                                            <button class="btn btn-sm btn-danger w-100" onclick="showInputBox('reject')">Reject</button>
                                        </div>
                                        <div id="inputBoxContainer" class="mt-3" style="display: none;">
                                            <label id="inputBoxLabel" class="form-label small"></label>
                                            <textarea id="inputBox" class="form-control form-control-sm" rows="2" placeholder="Enter your input here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- Middle Column -->
                        <div class="border col-md-8">
                            <div class="card-body p-0" style="position: relative; height: 500px; overflow-y: auto;" data-bs-spy="scroll" data-bs-target="#scrollspy-nav" data-bs-offset="20">

                                <!-- Note 0 -->
                                <div id="note-0" class="border-end border-secondary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">TQ</div>
                                            <div class="ms-2">
                                                <strong>Default</strong>
                                                <div class="text-muted small"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-secondary me-1">Default Message</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">[Internal Note] Please wait for the Sales Representative's Verification. The Representative will message here in a bit. It is possible that the Representative will call you on your designated number for clarification.</p>
                                    </div>
                                </div>

                                @foreach($quotationMessages as $message)

                                    <!-- Note 1 -->
                                    @if($message->usertype == 3)
                                    <div id="note-1" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                        <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 p-2 mb-2 border-bottom">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">{{ strtoupper(substr($message->fname, 0, 1).' '.substr($message->lname, 0, 1)) }}</div>
                                                <div class="ms-2">
                                                    <strong>{{ $message->fname.' '.$message->lname }}</strong>
                                                    <div class="text-muted small">{{ $message->created_at }}</div>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-primary me-1">Customer</span>
                                                <span><i class="fas fa-ellipsis-v"></i></span>
                                            </div>
                                        </div>
                                        <div>
                                            {!! $message->message !!}
                                        </div>
                                    </div>
                                    @else
                                    <div id="note-1" class="border-end border-danger border-4 mb-3 bg-white p-3">
                                        <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">SR</div>
                                                <div class="ms-2">
                                                    <strong>{{ $message->fname.' '.$message->lname }}</strong>
                                                    <div class="text-muted small">{{ $message->created_at }}</div>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-danger me-1">Sales Representative</span>
                                                <span><i class="fas fa-ellipsis-v"></i></span>
                                            </div>
                                        </div>
                                        <div>
                                            {!! $message->message !!}
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- Right Column for Preview Image -->
                        <!-- <div class="border col-md-2">
                            <div class="p-3">
                                <h6 class="text-center">Preview Image</h6>
                                <div class="d-flex justify-content-center align-items-center bg-light rounded-3 overflow-hidden"
                                    style="height: 400px; border: 1px solid rgba(0,0,0,0.08);">
                                    <img id="previewImage"
                                        src="https://gingercathouse.co.uk/wp-content/uploads/2020/09/tabby-grey-main-coon-cat-1024x577.jpeg"
                                        class="img-fluid h-100 object-fit-contain p-3"
                                        style="cursor: zoom-in;"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imageModal">
                                </div>

                                
                                <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content" style="width: auto;">
                                            <div class="modal-body">
                                                <img id="modalPreviewImage" src="https://gingercathouse.co.uk/wp-content/uploads/2020/09/tabby-grey-main-coon-cat-1024x577.jpeg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
        <div class="card-footer p-0">
            <form action="/send-message" method="POST">
                @csrf
                <input type="hidden" value="{{ $quotation->id }}" name="quotation_id">
                <textarea id="summernote" name="message"></textarea>
                <div class="p-3 bg-light d-flex justify-content-between">
                    <div>
                        {{-- <button class="btn btn-sm btn-outline-secondary me-2"> <i class="fas fa-paperclip me-1"></i>Attach File </button>
                <button class="btn btn-sm btn-outline-secondary me-2"> <i class="fas fa-history me-1"></i>View History </button>
                <button class="btn btn-sm btn-outline-secondary"> <i class="fas fa-print me-1"></i>Print Notes </button> --}}
                    </div>
                    <div>
                        <button class="btn btn-sm btn-primary">Send Message</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!--end::App Content-->
</main>
<!-- Summernotes JS -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Add a message...',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture']],
                ['view', ['codeview', 'help']]
            ],
            callbacks: {
                onInit: function() {
                    // Add private note switch to the right side of the toolbar
                    const toolbar = $('.note-toolbar');
                    const switchHtml = `
                    <div class="private-note-switch d-flex align-items-center me-2 mt-2 mb-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="privateNote">
                            <label class="form-check-label ms-2" for="privateNote">Private Note</label>
                        </div>
                    </div>
                `;
                    toolbar.append(switchHtml);

                    // Set initial border
                    updateNoteBorder();

                    // Handle private note toggle
                    $('#privateNote').change(function() {
                        updateNoteBorder();
                    });

                    function updateNoteBorder() {
                        const editor = $('#summernote');
                        if ($('#privateNote').is(':checked')) {
                            editor.next('.note-editor').css('border-left', '4px solid #dc3545');
                        } else {
                            editor.next('.note-editor').css('border-right', '4px solid #0d6efd');
                        }
                    }
                }
            }
        });
    });
</script>