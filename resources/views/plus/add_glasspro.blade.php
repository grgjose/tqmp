<section id="services-glass-processing" class="container py-4">
    <div class="container mt-5 text-center">
        <h2 class="fw-bold" style="color: #7E1416;">Glass Processing Services</h2>
        <p>PGPSI offers the following glass processing services</p>
    </div>
    <div class="row py-3">
        <div class="col-md-3 mb-4 d-flex align-items-stretch">
            <div class="card border-0 shadow-lg d-flex flex-column">
                <img src="{{ asset('storage/glass-processing/tempered.png') }}" alt="TQMP Tempered Glass" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title fw-bold">Tempered Glass</h6>
                    <p class="card-text flex-grow-1">Fully tempered glass is a unique glazing material. It is about 3 to 5 times stronger than an ordinary or annealed glass of the same thickness and configuration.</p>
                    <a href="/#" class="card-button btn btn-danger mt-auto get-quotation-button w-100"

                        @if($my_user==null)
                        data-bs-toggle="modal" data-bs-target="#loginModal"
                        @endif>Get Quotation</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4 d-flex align-items-stretch">
            <div class="card border-0 shadow-lg d-flex flex-column">
                <img src="{{ asset('storage/glass-processing/laminated.png') }}" alt="TQMP Laminated Glass" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title fw-bold">Laminated Glass</h6>
                    <p class="card-text flex-grow-1">Laminated glass is a multi-functional glazing material that can be used in a variety of applications. It is manufactured by permanently bonding two or more glass panes with layers of polyvinyl butyral (PVB) interlayer, under heat and pressure to produce a single product.</p>
                    <a href="/#" class="card-button btn btn-danger mt-auto get-quotation-button w-100"

                        @if($my_user==null)
                        data-bs-toggle="modal" data-bs-target="#loginModal"
                        @endif>Get Quotation</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4 d-flex align-items-stretch">
            <div class="card border-0 shadow-lg d-flex flex-column">
                <img src="{{ asset('storage/glass-processing/curved.jpg') }}" alt="TQMP Curved Glass" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title fw-bold">Curved Tempered Glass</h6>
                    <p class="card-text flex-grow-1">In the same manner with flat tempered glass, curved tempered glass is also resistant to mechanical stresses (bending, impact, etc.) and thermal stresses (temperature difference), without altering the properties of the basic product.</p>
                    <a href="/#" class="card-button btn btn-danger mt-auto get-quotation-button w-100"

                        @if($my_user==null)
                        data-bs-toggle="modal" data-bs-target="#loginModal"
                        @endif>Get Quotation</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4 d-flex align-items-stretch">
            <div class="card border-0 shadow-lg d-flex flex-column">
                <img src="{{ asset('storage/glass-processing/igu.png') }}" alt="TQMP IGU" class="card-img-top" style="object-fit: cover; width: 100%; height: 200px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title fw-bold">Insulating Glass Unit (IGU)</h6>
                    <p class="card-text flex-grow-1">Insulating glass unit is a set of two or more lites of glass separated by air space and hermetically sealed to form a single unit. Its most important function is to improve the thermal performance of glass when used in architectural applications.</p>
                    <a href="/#" class="card-button btn btn-danger mt-auto get-quotation-button w-100"

                        @if($my_user==null)
                        data-bs-toggle="modal" data-bs-target="#loginModal"
                        @endif>Get Quotation</a>
                </div>
            </div>
        </div>
    </div>

</section>