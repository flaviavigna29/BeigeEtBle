<x-layout>
    {{-- * Rooms Section --}}
    <div class="rooms-section container-fluid mt-5">
        <div class="row px-5">
            <div class="col-12 text-center mb-2">
                <h1 class="fw-bold fst-italic">Our Rooms</h1>
            </div>
            {{-- Read more for Room Services --}}
            <div class="col-12 text-end mb-4">
                <button class="me-3 btn btn-link color-ocra-A fw-bold fst-italic" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Read more for Room
                    Services</button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                    id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <h6 class="offcanvas-title color-ocra-A fw-bold h5" id="offcanvasScrollingLabel">Our Services
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="list-unstyled text-start">
                            <li class="my-2"><i class="fas fa-wind pe-2"></i> Air conditioning</li>
                            <li class="my-2"><i class="fas fa-check-circle pe-2"></i> Essentials</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> Cable TV</li>
                            <li class="my-2"><i class="fas fa-coffee pe-2"></i> Coffee/Tea maker</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> Color television</li>
                            <li class="my-2"><i class="fas fa-desktop pe-2"></i> Desk</li>
                            <li class="my-2"><i class="fas fa-couch pe-2"></i> Furnishing</li>
                            <li class="my-2"><i class="fas fa-wardrobe pe-2"></i> Wardrobe/Closets</li>
                            <li class="my-2"><i class="fas fa-th-large pe-2"></i> Wooden / Parquet floor</li>
                            <li class="my-2"><i class="fas fa-bottle-droplet pe-2"></i> Shampoo</li>
                            <li class="my-2"><i class="fas fa-soap pe-2"></i> Body soap</li>
                            <li class="my-2"><i class="fas fa-hot-tub pe-2"></i> Hot water</li>
                            <li class="my-2"><i class="fas fa-toilet-paper pe-2"></i> Toilet paper</li>
                            <li class="my-2"><i class="fas fa-towel pe-2"></i> Towels</li>
                            <li class="my-2"><i class="fas fa-bed pe-2"></i> Linen</li>
                            <li class="my-2"><i class="fas fa-towel pe-2"></i> Towels - bed sheets - soap - toilet
                                paper - pillow</li>
                            <li class="my-2"><i class="fas fa-wind pe-2"></i> Hairdryer in room</li>
                            <li class="my-2"><i class="fas fa-shower pe-2"></i> Shower</li>
                            <li class="my-2"><i class="fas fa-bath pe-2"></i> Private bathroom</li>
                            <li class="my-2"><i class="fas fa-toilet pe-2"></i> Bidet</li>
                            <li class="my-2"><i class="fas fa-bed pe-2"></i> Double Bed</li>
                            <li class="my-2"><i class="fas fa-bed pe-2"></i> Bed linens</li>
                            <li class="my-2"><i class="fas fa-coffee pe-2"></i> Coffee Machine</li>
                            <li class="my-2"><i class="fas fa-coffee pe-2"></i> Espresso maker</li>
                            <li class="my-2"><i class="fas fa-city pe-2"></i> City view</li>
                            <li class="my-2"><i class="fas fa-chair pe-2"></i> Chair provided with desk</li>
                            <li class="my-2"><i class="fas fa-film pe-2"></i> Movies</li>
                            <li class="my-2"><i class="fas fa-video pe-2"></i> Video</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> Video on demand</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> Digital TV</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> Pay per view movies on TV</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> Premium TV channels</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> TV</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> TV LED</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> Widescreen TV</li>
                            <li class="my-2"><i class="fas fa-snowflake pe-2"></i> Air conditioning individually
                                controlled in room</li>
                            <li class="my-2"><i class="fas fa-thermometer-half pe-2"></i> Climate control</li>
                            <li class="my-2"><i class="fas fa-bottle-droplet pe-2"></i> Conditioner</li>
                            <li class="my-2"><i class="fas fa-radio pe-2"></i> AM/FM radio</li>
                            <li class="my-2"><i class="fas fa-wifi pe-2"></i> Wifi internet free</li>
                            <li class="my-2"><i class="fas fa-door-closed pe-2"></i> Private room can be locked for
                                safety and privacy
                            </li>
                            <li class="my-2"><i class="fas fa-fire-extinguisher pe-2"></i> Fire extinguisher</li>
                            <li class="my-2"><i class="fas fa-first-aid pe-2"></i> First aid kit</li>
                            <li class="my-2"><i class="fas fa-lock pe-2"></i> Safe Deposit Box</li>
                            <li class="my-2"><i class="fas fa-ban pe-2"></i> Pet not allowed</li>
                            <li class="my-2"><i class="fas fa-smoking-ban pe-2"></i> Non-smoking</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Hydra --}}
            <div class="col-12 col-lg-6 d-flex justify-content-around mb-3">
                <div class="card mb-3" style="max-width: 650px; position: relative;">
                    <div class="info-icon" data-bs-toggle="modal" data-bs-target="#Hydra">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center align-items-center ps-md-3">
                            <div id="carouselExampleFadeHydra" class="carousel slide carousel-fade"
                                style="max-width: 100%;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9909.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9915.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9916.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev " type="button"
                                    data-bs-target="#carouselExampleFadeHydra" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon small-arrow" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next " type="button"
                                    data-bs-target="#carouselExampleFadeHydra" data-bs-slide="next">
                                    <span class="carousel-control-next-icon small-arrow" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Hydra</h2>
                                <h5><i class="fas fa-expand-arrows-alt">14 mq</i> - Double Room</h5>
                                <p class="card-text ">The HYDRA room, inspired by the mysterious Water
                                    Snake, offers a peaceful and serene retreat. Its main feature is the harmonious
                                    combination of colors and fabrics that evoke the water element,...
                                </p>
                                <a class="card-text text-decoration-none " href="{{ route('book_now') }}"
                                    target="blank">BOOK NOW!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Aries --}}
            <div class="col-12 col-lg-6 d-flex justify-content-around mb-3">
                <div class="card mb-3" style="max-width: 650px; position: relative">
                    <div class="info-icon" data-bs-toggle="modal" data-bs-target="#Aries">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center align-items-center ps-md-3">
                            <div id="carouselExampleFadeAries" class="carousel slide carousel-fade"
                                style="max-width: 100%;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9909.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9915.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9916.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev " type="button"
                                    data-bs-target="#carouselExampleFadeAries" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon small-arrow" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next " type="button"
                                    data-bs-target="#carouselExampleFadeAries" data-bs-slide="next">
                                    <span class="carousel-control-next-icon small-arrow" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Aries</h2>
                                <h5><i class="fas fa-expand-arrows-alt">14 mq</i> - Twin or Double Room</h5>
                                <p class="card-text ">The vibrant ARIES room, dedicated to the Aries constellation,
                                    stands out for its positive and dynamic energy. The details in red and beige,
                                    symbols of vitality and passion, blend with modern and functional...
                                </p>
                                <a class="card-text text-decoration-none " href="{{ route('book_now') }}"
                                    target="blank">BOOK NOW!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Orione --}}
            <div class="col-12 col-lg-6 d-flex justify-content-around mb-3">
                <div class="card mb-3" style="max-width: 650px; position: relative">
                    <div class="info-icon" data-bs-toggle="modal" data-bs-target="#Orione">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center align-items-center ps-md-3">
                            <div id="carouselExampleFadeOrione" class="carousel slide carousel-fade"
                                style="max-width: 100%;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9909.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9915.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9916.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev " type="button"
                                    data-bs-target="#carouselExampleFadeOrione" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon small-arrow" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next " type="button"
                                    data-bs-target="#carouselExampleFadeOrione" data-bs-slide="next">
                                    <span class="carousel-control-next-icon small-arrow" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Orione</h2>
                                <h5><i class="fas fa-expand-arrows-alt">18 mq</i> - Deluxe Double Room</h5>
                                <p class="card-text ">The spacious ORIONE room celebrates the majesty of the Orion
                                    constellation. Its uniqueness lies in the refined decor with touches of classical
                                    style and precious fabrics. This room is ideal for guests who...
                                </p>
                                <a class="card-text text-decoration-none " href="{{ route('book_now') }}"
                                    target="blank">BOOK NOW!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Cassiopea --}}
            <div class="col-12 col-lg-6 d-flex justify-content-center mb-3">
                <div class="card mb-3" style="max-width: 650px; position: relative">
                    <div class="info-icon" data-bs-toggle="modal" data-bs-target="#Cassiopea">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center align-items-center ps-md-3">
                            <div id="carouselExampleFadeCassiopea" class="carousel slide carousel-fade"
                                style="max-width: 100%;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9909.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9915.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/prova/BRG_9916.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev " type="button"
                                    data-bs-target="#carouselExampleFadeCassiopea" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon small-arrow" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next " type="button"
                                    data-bs-target="#carouselExampleFadeCassiopea" data-bs-slide="next">
                                    <span class="carousel-control-next-icon small-arrow" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Cassiopea</h2>
                                <h5><i class="fas fa-expand-arrows-alt">21 mq</i> - Deluxe Twin or Double Room</h5>
                                <p class="card-text">The bright CASSIOPEA room, inspired by the regal constellation of
                                    the Queen of Ethiopia, stands out for its ethereal and refined atmosphere. Furniture
                                    elements in shades of white and silver, combined...
                                </p>
                                <a class="card-text text-decoration-none" href="{{ route('book_now') }}"
                                    target="_blank">BOOK NOW!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Modale Hydra --}}
    <div class="modal fade" id="Hydra" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="card-title fs-4" id="infoModalLabel">Hydra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div id="carouselExampleFadeHydra2" class="carousel slide carousel-fade"
                            style="max-width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9909.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9915.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9916.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev " type="button"
                                data-bs-target="#carouselExampleFadeHydra2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon small-arrow" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next " type="button"
                                data-bs-target="#carouselExampleFadeHydra2" data-bs-slide="next">
                                <span class="carousel-control-next-icon small-arrow" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-2">
                        <p>The HYDRA room, inspired by the mysterious Water
                            Snake, offers a peaceful and serene retreat. Its main feature is the harmonious
                            combination of colors and fabrics that evoke the water element,
                            creating a relaxing
                            and rejuvenating atmosphere. A touch of blue in the decor details makes this room an
                            ideal oasis of peace for those seeking a relaxing environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modale Aries --}}
    <div class="modal fade" id="Aries" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="card-title fs-4" id="infoModalLabel">Aries</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div id="carouselExampleFadeAries2" class="carousel slide carousel-fade"
                            style="max-width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9909.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9915.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9916.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev " type="button"
                                data-bs-target="#carouselExampleFadeAries2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon small-arrow" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next " type="button"
                                data-bs-target="#carouselExampleFadeAries2" data-bs-slide="next">
                                <span class="carousel-control-next-icon small-arrow" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-2">
                        <p>The vibrant ARIES room, dedicated to the Aries constellation,
                            stands out for its positive and dynamic energy. The details in red and beige,
                            symbols of vitality and passion, blend with modern and functional
                            furniture, making this room ideal for those who desire a stimulating and lively environment.
                            The
                            flexibility of the single beds that can be converted into a double bed makes it perfect for
                            any
                            type of guest.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modale Orione --}}
    <div class="modal fade" id="Orione" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="card-title fs-4" id="infoModalLabel">Orione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div id="carouselExampleFadeOrione2" class="carousel slide carousel-fade"
                            style="max-width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9909.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9915.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9916.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev " type="button"
                                data-bs-target="#carouselExampleFadeOrione2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon small-arrow" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next " type="button"
                                data-bs-target="#carouselExampleFadeOrione2" data-bs-slide="next">
                                <span class="carousel-control-next-icon small-arrow" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-2">
                        <p>The spacious ORIONE room celebrates the majesty of the Orion constellation. Its uniqueness
                            lies in the refined decor with touches of classical style and precious fabrics. This room is
                            ideal for guests who appreciate discreet luxury and timeless elegance, ensuring an
                            unforgettable and sophisticated stay experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modale Cassiopea --}}
    <div class="modal fade" id="Cassiopea" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable vw-100">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="card-title fs-4" id="infoModalLabel">Cassiopea</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div id="carouselExampleFadeCassiopea2" class="carousel slide carousel-fade"
                            style="max-width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9909.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9915.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/prova/BRG_9916.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev " type="button"
                                data-bs-target="#carouselExampleFadeCassiopea2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon small-arrow" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleFadeCassiopea2" data-bs-slide="next">
                                <span class="carousel-control-next-icon small-arrow" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-2">
                        <p>The bright CASSIOPEA room, inspired by the regal constellation of
                            the Queen of Ethiopia, stands out for its ethereal and refined atmosphere. Furniture
                            elements in shades of white and silver, combined with decorations and soft lighting, create
                            a
                            celestial and sophisticated environment. The spaciousness of the room and the large
                            relaxation
                            area make it perfect for guests who want to immerse themselves in a unique and suggestive
                            environment.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layout>
