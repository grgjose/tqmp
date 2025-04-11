<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Total Quality Management Products Philippines">
    <meta name="author" content="TQMP">

    <!-- Title and Favicon -->
    <title>Messages | Total Quality Management Products Philippines</title>
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

    <!-- summernotes -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    @include('plus.navbar')
    <!-- End of Header -->


    <section class="container">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="mx-auto">

                    <div class="card-header bg-white">
                        <h3 class="mb-2">Messages</h3>
                    </div>

                    <!-- Work Notes List -->
                    <div class="row mt-3">
                        <!-- Left Column -->
                        <div class="col-md-4">
                            <!-- Basic Information Section -->
                            <div class="mb-3">
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
                            <div class="mb-3">
                                <label class="form-label small">Title/Subject</label>
                                <input type="text" class="form-control form-control-sm" value="{{ $quotation->type }} Quotation" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">Inital Message</label>
                                <textarea class="form-control form-control-sm" rows="2" readonly>{{ $quotation->message }}</textarea>
                            </div>

                            <!-- Priority and Severity -->
                            <div class="row g-2 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label small">Size</label>
                                    <input type="text" class="form-control form-control-sm" value="{{ $quotation->size }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small">Color</label>
                                    <input type="text" class="form-control form-control-sm" value="{{ $quotation->color }}" readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-8">
                            <div class="card-body p-0" style="position: relative; height: 450px; overflow-y: auto;" data-bs-spy="scroll" data-bs-target="#notes-nav" data-bs-offset="20">

                                <!-- Note 0 -->
                                <div id="note-0" class="border-end border-secondary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">TQ</div>
                                            <div class="ms-2">
                                                <strong>Default</strong>
                                                <div class="text-muted small">{{ $quotation->created_at }}</div>
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


                                <!-- Note 1 -->

                                @foreach($quotationMessages as $message)


                                @if($message->usertype == 3)
                                <div id="note-1" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
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
                                <!-- Note 2 -->
                                <div id="note-2" class="border-end border-danger border-4 mb-3 bg-white p-3">
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

                                <!-- Note 3 -->
                                {{-- <div id="note-3" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
                                            <div class="ms-2">
                                                <strong>John Doe</strong>
                                                <div class="text-muted small">Yesterday, 11:15 AM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary me-1">Public</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">User reported being unable to reset password. Verified account status is active. Reset link was sent but user reports not receiving it.</p>
                                        <p class="mt-2 mb-0"><strong>Next Steps:</strong> Check email logs for the reset request.</p>
                                    </div>
                                </div> --}}

                                  <!-- Note 4 -->
                                  {{-- <div id="note-4" class="border-end border-danger border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">SR</div>
                                            <div class="ms-2">
                                                <strong>Sales Representative</strong>
                                                <div class="text-muted small">Yesterday, 3:45 PM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger me-1">Private</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">[Internal Note] This appears to be related to the ongoing authentication system issues. Escalating to L2 support.</p>
                                    </div>
                                </div> --}}

                                 <!-- Note 5 -->
                                 {{-- <div id="note-3" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
                                            <div class="ms-2">
                                                <strong>John Doe</strong>
                                                <div class="text-muted small">Yesterday, 11:15 AM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary me-1">Public</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">User reported being unable to reset password. Verified account status is active. Reset link was sent but user reports not receiving it.</p>
                                        <p class="mt-2 mb-0"><strong>Next Steps:</strong> Check email logs for the reset request.</p>
                                    </div>
                                </div> --}}

                                  <!-- Note 6 -->
                                  {{-- <div id="note-4" class="border-end border-danger border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">SR</div>
                                            <div class="ms-2">
                                                <strong>Sales Representative</strong>
                                                <div class="text-muted small">Yesterday, 3:45 PM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger me-1">Private</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">[Internal Note] This appears to be related to the ongoing authentication system issues. Escalating to L2 support.</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="card-footer p-0">
                        <form action="/user-send-message" method="POST" >
                            @csrf
                            <input type="hidden" name="quotation_id" value="{{ $quotation->id }}" >
                            <textarea id="summernote" name="message"></textarea>
                            <div class="p-3 bg-light d-flex justify-content-between">
                                <div>
                                    {{-- <button class="btn btn-sm btn-outline-secondary me-2"> <i class="fas fa-paperclip me-1"></i>Attach File </button>
                                    <button class="btn btn-sm btn-outline-secondary me-2"> <i class="fas fa-history me-1"></i>View History </button>
                                    <button class="btn btn-sm btn-outline-secondary"> <i class="fas fa-print me-1"></i>Print Notes </button> --}}
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-sm btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
    </section>

    <!-- JS for Scrollspy -->
    <script>
        // Initialize ScrollSpy
        var scrollSpy = new bootstrap.ScrollSpy(document.querySelector('.card-body'), {
            target: '#notes-nav'
        });

        // Optional: Smooth scrolling for the navigation links
        document.querySelectorAll('#notes-nav .nav-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>

    <!-- Summernotes Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>


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
                    ['insert', ['link']],
                    ['view', ['codeview', 'help']]
                ],
                callbacks: {
                    onInit: function() {
                        // Add private note switch to the right side of the toolbar
                        const toolbar = $('.note-toolbar');
                        const switchHtml = ` `;
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
                                editor.next('.note-editor').css('border-left', '4px solid #0d6efd');
                            }
                        }
                    }
                }
            });
        });
    </script>

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>

</html>