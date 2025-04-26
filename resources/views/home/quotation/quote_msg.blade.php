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

                    <div class="card-header bg-white py-3">
                        <nav aria-label="breadcrumb">
                            <h6>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="text-danger" href="#">Profile</a></li>
                                    <li class="breadcrumb-item"><a class="text-danger" href="#">View Quotation</a></li>
                                </ol>
                            </h6>
                        </nav>
                    </div>

                    <!-- Work Notes List -->
                    <div class="row mt-3">
                        
                        <!-- Top Section -->
                        <div class="row my-3">
                            @if($quotation->status != 'Cancelled' && $quotation->status != 'Approved')

                                <div class="col-4 d-grid">
                                    <button class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#cancelModal">Cancel</button>
                                </div>
                                <div class="col-4 d-grid">
                                    <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                                </div>
                                
                             @endif

                             @if($quotation->status != 'Cancelled')
                                <div class="col-4 d-grid">
                                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addToCartModal">Add to Cart</button>
                                </div>
                            @endif
                        </div>

                        <!-- Cancel Modal -->
                        <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="/cancel-quotation">
                                        @csrf
                                        <input type="hidden" name="quotation_id" value="{{ $quotation->id }}"/>
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cancelModalLabel">Confirm Cancellation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to cancel? Which means this Quotation will no longer be available for Update / Messages?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Yes, Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Approve Modal -->
                        <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="/approve-quotation">
                                        @csrf
                                        <input type="hidden" name="quotation_id" value="{{ $quotation->id }}"/>
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="approveModalLabel">Confirm Approval</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to Approve? All Details in this Quotation will be valid and unchangeable in 2 weeks or more, making this Quotaiton uneditable.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Yes, Approve</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Add to Cart Modal -->
                        <div class="modal fade" id="addToCartModal" tabindex="-1" aria-labelledby="addToCartModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="/quotation-to-cart">
                                        @csrf
                                        <input type="hidden" name="quotation_id" value="{{ $quotation->id }}"/>
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addToCartModalLabel">Confirm Add to Cart</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to add this item to your cart?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Yes, Add to Cart</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Left Column -->
                        <div class="col-md-4">
                            <!-- Basic Information Section -->
                            <div class="mb-3">
                                <div class="row">
                                    <!-- Form Content -->
                                    <div class="col-md-9" data-bs-spy="scroll" data-bs-target="#quotationScrollspy" data-bs-offset="100" style="height: 400px; width:auto; overflow-y: auto;">

                                        <div id="details" class="mb-5">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Service Type</label>
                                                @if($quotation->quotation_type == 'glass')
                                                <input name="glasstype[]" class="form-control" type="text" placeholder="Glass Processing" readonly>
                                                @else
                                                <input name="glasstype[]" class="form-control" type="text" placeholder="Bullet Proofing" readonly>
                                                @endif
                                                <input type="hidden" name="quotation_type" value="glass">
                                            </div>


                                            <div class="row g-3 mb-3">
                                                <div class="col-md-4">
                                                    <label class="form-label fw-bold">Status</label>
                                                    <input class="form-control" type="text" placeholder="{{ $quotation->status }}" readonly>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label fw-bold">Valid Until</label>
                                                    @if($quotation->valid_until == null)
                                                        <input class="form-control" type="text" placeholder="TBD" readonly>
                                                    @else
                                                        <input class="form-control" type="text" placeholder="{{ $quotation->valid_until }}" readonly>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label fw-bold" style="color: red;">Final Price</label>
                                                    @if($quotation->final_price == 0)
                                                        <input class="form-control" type="text" placeholder="TBD" readonly>
                                                    @else
                                                        <input class="form-control" type="text" placeholder="{{ $quotation->final_price }}" readonly>
                                                    @endif
                                                </div>
                                            </div>

                                            @if($quotation->quotation_type == 'bullet')

                                                @php
                                                    $services = [
                                                        'armoured' => 'Armoured Car',
                                                        'radiator' => 'Radiator Grill',
                                                        'gasTank' => 'Gas Tank Cover',
                                                        'suspension' => 'Upgraded Suspension',
                                                        'battery' => 'Battery & Fuse Box Cover',
                                                        'runFlat' => 'Run Flat Insert',
                                                        'partition' => 'Back Door Partition',
                                                        'catcher' => 'Bullet Catcher',
                                                        'seats' => 'Premium Leather Seats',
                                                    ];

                                                    $selectedServices = json_decode(str_replace("'", '"', $quotation->services), true);
                                                @endphp

                                                <div class="row g-3 mb-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label fw-bold">Plate Number</label>
                                                        <input class="form-control" type="text" placeholder="{{ $quotation->plate_number }}" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label fw-bold">Model</label>
                                                        <input class="form-control" type="text" placeholder="{{ strtoupper($quotation->model) }}" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label fw-bold">Color</label>
                                                        <input class="form-control" type="text" placeholder="{{ ucfirst($quotation->unit_color) }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="row g-3 mb-3">
                                                    <label class="form-label fw-bold">Selected Services</label>
                                                    @foreach ($services as $value => $label)
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input 
                                                                    class="form-check-input" 
                                                                    type="checkbox" 
                                                                    disabled 
                                                                    {{ in_array($value, $selectedServices) ? 'checked' : '' }}
                                                                >
                                                                <label class="form-check-label">{{ $label }}</label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="row g-3 mb-3">
                                                    <div class="col-12">
                                                        <label class="form-label fw-bold">Remarks</label>
                                                        <input class="form-control" type="text" placeholder="{{ $quotation->remarks }}" readonly>
                                                    </div>
                                                </div>

                                            @endif

                                            @if($quotation->quotation_type == 'glass')
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Glass Type</label>
                                                    <input name="glasstype[]" class="form-control" type="text" placeholder="Enter glass type" readonly>
                                                </div>

                                                <div class="row g-3 mb-3">
                                                    <div class="col-md-4">
                                                        <label class="form-label fw-bold">Thickness</label>
                                                        <input name="thickness[]" class="form-control" type="text" placeholder="Enter thickness" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label fw-bold">Color</label>
                                                        <input name="width1[]" class="form-control" type="text" placeholder="Enter color" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label fw-bold">Quantity</label>
                                                        <input name="quantity[]" class="form-control" type="number" min="1" value="1" readonly>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row g-3 mb-3">
                                                    <div class="col-md-6">
                                                        <label class="form-label fw-bold">Height (mm)</label>
                                                        <div class="row g-2">
                                                            <div class="col">
                                                                <input name="height1[]" class="form-control" type="number" placeholder="H1" readonly>
                                                            </div>
                                                            <div class="col">
                                                                <input name="height2[]" class="form-control" type="number" placeholder="H2" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label fw-bold">Width (mm)</label>
                                                        <div class="row g-2">
                                                            <div class="col">
                                                                <input name="width1[]" class="form-control" type="number" placeholder="W1" readonly>
                                                            </div>
                                                            <div class="col">
                                                                <input name="width2[]" class="form-control" type="number" placeholder="W2" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Cutting Details</label>
                                                    <textarea name="cutting_details" rows="2" class="form-control" readonly></textarea>
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Images Gallery Section -->
                                        <div id="imagesGallery" class="mb-5">
                                            <h6 class="mb-4 border-bottom pb-2">Images Gallery</h6>
                                            <div class="border rounded p-2">
                                                @if(isset($quotationImages) && count($quotationImages) > 0)
                                                    <div class="d-flex flex-wrap gap-2">
                                                        @foreach($quotationImages as $image)
                                                        <div class="border rounded overflow-hidden" style="width: 80px; height: 80px;"
                                                            data-bs-toggle="modal" data-bs-target="#imageModal"
                                                            onclick="document.getElementById('modalImage').src='{{ asset('storage/quotations/'.$image->filename) }}'">
                                                            <img src="{{ asset('storage/quotations/'.$image->filename) }}" alt="{{ $image->filename }}" loading="lazy"
                                                                class="w-100 h-100 object-fit-cover">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                <div class="text-center py-2 text-muted">
                                                    No images available
                                                </div>
                                                @endif
                                            </div>
                                             
                                            <!-- Modal -->
                                            <div class="modal modal-lg fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content" style="width: auto;">
                                                        <div class="modal-body text-center">
                                                            <div id="zoomContainer" style="display: inline-block;">
                                                                <img id="modalImage" src="" class="img-fluid" style="max-height: 80vh; cursor: grab;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
                                
                                @foreach($quotationMessages as $message)

                                    @if($message->usertype == 3)

                                        <!-- Note 1 -->
                                        <div id="note-{{$message->id}}" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                            <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                                        {{ strtoupper(substr($message->fname, 0, 1) . substr($message->lname, 0, 1)) }}
                                                    </div>
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

                                {{-- <!-- Note 1 -->
                                <div id="note-1" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
                                            <div class="ms-2">
                                                <strong>John Doe</strong>
                                                <div class="text-muted small">Today, 10:30 AM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary me-1">Customer</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">Contacted the user and walked them through the password reset process. User confirmed they can now log in successfully.</p>
                                    </div>
                                </div>

                                <!-- Note 2 -->
                                <div id="note-2" class="border-end border-danger border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">SR</div>
                                            <div class="ms-2">
                                                <strong>Sales Representative</strong>
                                                <div class="text-muted small">Yesterday, 3:45 PM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger me-1">Representative</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">[Internal Note] This appears to be related to the ongoing authentication system issues. Escalating to L2 support.</p>
                                    </div>
                                </div>

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

                                <!-- Note 1 -->
                                <div id="note-1" class="border-start border-primary border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">JD</div>
                                            <div class="ms-2">
                                                <strong>John Doe</strong>
                                                <div class="text-muted small">Today, 10:30 AM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary me-1">Customer</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">Contacted the user and walked them through the password reset process. User confirmed they can now log in successfully.</p>
                                    </div>
                                </div>

                                <!-- Note 2 -->
                                <div id="note-2" class="border-end border-danger border-4 mb-3 bg-white p-3">
                                    <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">SR</div>
                                            <div class="ms-2">
                                                <strong>Sales Representative</strong>
                                                <div class="text-muted small">Yesterday, 3:45 PM</div>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger me-1">Representative</span>
                                            <span><i class="fas fa-ellipsis-v"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">[Internal Note] This appears to be related to the ongoing authentication system issues. Escalating to L2 support.</p>
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


                    @if($quotation->status != 'Cancelled' && $quotation->status != 'Approved')
                        <div class="card-footer p-0">
                            <form action="/user-send-message" method="POST">
                                @csrf
                                <input type="hidden" name="quotation_id" value="{{ $quotation->id }}">
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
                    @endif
                </div>
            </div>
            <!--end::Container-->
        </div>
    </section>

    <!-- JS for Scrollspy -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize Scrollspy
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#quotationScrollspy'
        });
    </script>
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

    <!-- Panzoom CDN -->
    <script src="https://unpkg.com/@panzoom/panzoom@4.6.0/dist/panzoom.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('imageModal');
            let panzoomInstance = null;

            modal.addEventListener('shown.bs.modal', function () {
                const zoomContainer = document.getElementById('zoomContainer');
                if (panzoomInstance) {
                    panzoomInstance.destroy();
                }
                panzoomInstance = Panzoom(zoomContainer, {
                    maxScale: 5,
                    contain: 'outside',
                });
                zoomContainer.parentElement.addEventListener('wheel', panzoomInstance.zoomWithWheel);
            });

            modal.addEventListener('hidden.bs.modal', function () {
                if (panzoomInstance) {
                    panzoomInstance.destroy();
                    panzoomInstance = null;
                }
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
    @include ('plus.footer')
    <!-- End of Footer -->
</body>

</html>