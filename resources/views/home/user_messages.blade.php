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
                    <div class="card-body p-0">
                        <!-- Note 1 -->
                        <div class="border-start border-primary border-4 mb-3 bg-white p-3">
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
                                    <span><i class="fas fa-ellipsis-v"></i></span>
                                </div>
                            </div>
                            <div>
                                <p class="mb-0">Contacted the user and walked them through the password reset process. User confirmed they can now log in successfully.</p>
                            </div>
                        </div>

                        <!-- Note 2 -->
                        <div class="border-end border-danger border-4 mb-3 bg-white p-3">
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
                                    <span><i class="fas fa-ellipsis-v"></i></span>
                                </div>

                            </div>
                            <div>
                                <p class="mb-0">[Internal Note] This appears to be related to the ongoing authentication system issues. Escalating to L2 support.</p>
                            </div>
                        </div>

                        <!-- Note 3 -->
                        <div class="border-start border-primary border-4 mb-3 bg-white p-3">
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
                                    <span><i class="fas fa-ellipsis-v"></i></span>
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
                                <button class="btn btn-sm btn-primary">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--end::Container-->
        </div>
    </section>

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