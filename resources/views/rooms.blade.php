<x-layout>
    {{-- * Rooms Section --}}
    <div class="rooms-section container-fluid mt-5 Playfair">
        <div class="row px-5">
            <div class="col-12 text-center mb-2">
                <h1 class="fw-bold fst-italic">{{ __('ui.our_rooms') }}</h1>
            </div>
            {{-- Read more for Room Services --}}
            <div class="col-12 text-end mb-4">
                <button class="me-3 btn btn-link color-ocra-A fw-bold fst-italic" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasScrolling"
                    aria-controls="offcanvasScrolling">{{ __('ui.read_more') }}</button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                    id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <h6 class="offcanvas-title color-ocra-A fw-bold h5" id="offcanvasScrollingLabel">
                            {{ __('ui.our_services') }}
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="list-unstyled text-start">
                            <li class="my-2"><i class="fas fa-wind pe-2"></i> {{ __('ui.service_air_conditioning') }}
                            </li>
                            <li class="my-2"><i class="fas fa-check-circle pe-2"></i>
                                {{ __('ui.service_essentials') }}</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> {{ __('ui.service_cable_tv') }}</li>
                            <li class="my-2"><i class="fas fa-coffee pe-2"></i> {{ __('ui.service_coffee_tea') }}</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> {{ __('ui.service_color_tv') }}</li>
                            <li class="my-2"><i class="fas fa-desktop pe-2"></i> {{ __('ui.service_desk') }}</li>
                            <li class="my-2"><i class="fas fa-couch pe-2"></i> {{ __('ui.service_furnishing') }}</li>
                            <li class="my-2"><i class="fas fa-door-closed pe-2"></i> {{ __('ui.service_wardrobe') }}
                            </li>
                            <li class="my-2"><i class="fas fa-th-large pe-2"></i> {{ __('ui.service_wooden_floor') }}
                            </li>
                            <li class="my-2"><i class="fas fa-bottle-droplet pe-2"></i>
                                {{ __('ui.service_shampoo') }}</li>
                            <li class="my-2"><i class="fas fa-soap pe-2"></i> {{ __('ui.service_body_soap') }}</li>
                            <li class="my-2"><i class="fas fa-hot-tub pe-2"></i> {{ __('ui.service_hot_water') }}
                            </li>
                            <li class="my-2"><i class="fas fa-toilet-paper pe-2"></i>
                                {{ __('ui.service_toilet_paper') }}</li>
                            <li class="my-2"><i class="fas fa-bath pe-2"></i> {{ __('ui.service_towels') }}</li>
                            <li class="my-2"><i class="fas fa-bed pe-2"></i> {{ __('ui.service_linen') }}</li>
                            <li class="my-2"><i class="fas fa-bath pe-2"></i> {{ __('ui.service_towels_complete') }}
                            </li>
                            <li class="my-2"><i class="fas fa-wind pe-2"></i> {{ __('ui.service_hairdryer') }}</li>
                            <li class="my-2"><i class="fas fa-shower pe-2"></i> {{ __('ui.service_shower') }}</li>
                            <li class="my-2"><i class="fas fa-bath pe-2"></i> {{ __('ui.service_private_bathroom') }}
                            </li>
                            <li class="my-2"><i class="fas fa-toilet pe-2"></i> {{ __('ui.service_bidet') }}</li>
                            <li class="my-2"><i class="fas fa-bed pe-2"></i> {{ __('ui.service_double_bed') }}</li>
                            <li class="my-2"><i class="fas fa-bed pe-2"></i> {{ __('ui.service_bed_linens') }}</li>
                            <li class="my-2"><i class="fas fa-coffee pe-2"></i> {{ __('ui.service_coffee_machine') }}
                            </li>
                            <li class="my-2"><i class="fas fa-coffee pe-2"></i> {{ __('ui.service_espresso') }}</li>
                            <li class="my-2"><i class="fas fa-city pe-2"></i> {{ __('ui.service_city_view') }}</li>
                            <li class="my-2"><i class="fas fa-chair pe-2"></i> {{ __('ui.service_desk_chair') }}</li>
                            <li class="my-2"><i class="fas fa-film pe-2"></i> {{ __('ui.service_movies') }}</li>
                            <li class="my-2"><i class="fas fa-video pe-2"></i> {{ __('ui.service_video') }}</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> {{ __('ui.service_video_demand') }}</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> {{ __('ui.service_digital_tv') }}</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> {{ __('ui.service_pay_per_view') }}</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> {{ __('ui.service_premium_tv') }}</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> {{ __('ui.service_tv') }}</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> {{ __('ui.service_tv_led') }}</li>
                            <li class="my-2"><i class="fas fa-tv pe-2"></i> {{ __('ui.service_tv_widescreen') }}</li>
                            <li class="my-2"><i class="fas fa-snowflake pe-2"></i> {{ __('ui.service_ac_control') }}
                            </li>
                            <li class="my-2"><i class="fas fa-thermometer-half pe-2"></i>
                                {{ __('ui.service_climate') }}</li>
                            <li class="my-2"><i class="fas fa-bottle-droplet pe-2"></i>
                                {{ __('ui.service_conditioner') }}</li>
                            <li class="my-2"><i class="fas fa-radio pe-2"></i> {{ __('ui.service_radio') }}</li>
                            <li class="my-2"><i class="fas fa-wifi pe-2"></i> {{ __('ui.service_wifi') }}</li>
                            <li class="my-2"><i class="fas fa-door-closed pe-2"></i>
                                {{ __('ui.service_private_lock') }}</li>
                            <li class="my-2"><i class="fas fa-fire-extinguisher pe-2"></i>
                                {{ __('ui.service_extinguisher') }}</li>
                            <li class="my-2"><i class="fas fa-first-aid pe-2"></i> {{ __('ui.service_first_aid') }}
                            </li>
                            <li class="my-2"><i class="fas fa-lock pe-2"></i> {{ __('ui.service_safe_box') }}</li>
                            <li class="my-2"><i class="fas fa-ban pe-2"></i> {{ __('ui.service_no_pets') }}</li>
                            <li class="my-2"><i class="fas fa-smoking-ban pe-2"></i>
                                {{ __('ui.service_no_smoking') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Hydra --}}
            <div class="col-12 col-lg-6 d-flex justify-content-around mb-3">
                <div class="card mb-3" style="max-width: 650px; position: relative;">

                    <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center align-items-center ps-md-3">
                            <div id="carouselExampleFadeHydra" class="carousel slide carousel-fade"
                                style="max-width: 100%;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_0019.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_0024.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_0027.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_0029.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_0031.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_0040.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_0047.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_0054.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_9705.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_9711.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_9712.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_9715.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_9745.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/hydra/BRG_9746.jpg') }}"
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
                            <div class="card-body"><a href="{{ route('hydra') }}"
                                    class="text-decoration-none text-dark">
                                    <h3 class="card-title">Hydra</h3>
                                    <h5 class="Roboto"><i class="fas fa-expand-arrows-alt">14 {{ __('ui.mq') }}</i>
                                        -
                                        {{ __('ui.room_desc_hydra') }}</h5>
                                    <p class="card-text pt-2">{{ __('ui.room_desc_hydra_sm') }}
                                    </p>
                                </a>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center pt-0 mt-0">
                                <a class="card-text text-decoration-none " href="{{ route('book_now') }}"
                                    target="blank">{{ __('ui.book_now') }}</a>
                                <div class="info-icon" data-bs-toggle="modal" data-bs-target="#Hydra">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Aries --}}
            <div class="col-12 col-lg-6 d-flex justify-content-around mb-3">
                <div class="card mb-3" style="max-width: 650px; position: relative">

                    <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center align-items-center ps-md-3">
                            <div id="carouselExampleFadeAries" class="carousel slide carousel-fade"
                                style="max-width: 100%;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_0015.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9725.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9737.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9750.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9755.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9756.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9768.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9769.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9777.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9972.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9974.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9979.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9984.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9987.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/aries/BRG_9996.jpg') }}"
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
                            <div class="card-body"><a href="{{ route('aries') }}"
                                    class="text-decoration-none text-dark">
                                    <h3 class="card-title">Aries</h3>
                                    <h5 class="Roboto"><i class="fas fa-expand-arrows-alt">14 {{ __('ui.mq') }}</i>
                                        -
                                        {{ __('ui.room_desc_aries') }}
                                    </h5>
                                    <p class="card-text pt-2">{{ __('ui.room_desc_aries_sm') }}
                                    </p>
                                </a>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center pt-0 mt-0">
                                <a class="card-text text-decoration-none " href="{{ route('book_now') }}"
                                    target="blank">{{ __('ui.book_now') }}</a>
                                <div class="info-icon" data-bs-toggle="modal" data-bs-target="#Aries">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Orione --}}
            <div class="col-12 col-lg-6 d-flex justify-content-around mb-3">
                <div class="card mb-3" style="max-width: 650px; position: relative">

                    <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center align-items-center ps-md-3">
                            <div id="carouselExampleFadeOrione" class="carousel slide carousel-fade"
                                style="max-width: 100%;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9790.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9796.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9813.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9930.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9932.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9950.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9956.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9957.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9960.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9964.jpg') }}"
                                            class="d-block w-100 rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/orione/BRG_9970.jpg') }}"
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
                            <div class="card-body"><a href="{{ route('orione') }}"
                                    class="text-decoration-none text-dark">
                                    <h3 class="card-title">Orione</h3>
                                    <h5 class="Roboto"><i class="fas fa-expand-arrows-alt">18
                                            {{ __('ui.mq') }}</i> -
                                        {{ __('ui.room_desc_orione') }}
                                    </h5>
                                    <p class="card-text pt-2">{{ __('ui.room_desc_orione_sm') }}</p>
                                </a>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center pt-0 mt-0">
                                <a class="card-text text-decoration-none " href="{{ route('book_now') }}"
                                    target="blank">{{ __('ui.book_now') }}</a>
                                <div class="info-icon" data-bs-toggle="modal" data-bs-target="#Orione">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Cassiopea --}}
            <div class="col-12 col-lg-6 d-flex justify-content-center mb-3">
                <div class="card mb-3" style="max-width: 650px; position: relative">
                    <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center align-items-center ps-md-3">
                            <div id="carouselExampleFadeCassiopea" class="carousel slide carousel-fade"
                                style="max-width: 100%;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9831.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9838.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9845.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9851.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9853.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9858.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9868.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9882.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9885.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9890.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9902.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9905.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9909.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9915.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9916.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9921.jpg') }}"
                                            alt="Img 1" class="img-fluid rounded">
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
                            <div class="card-body"><a href="{{ route('cassiopea') }}"
                                    class="text-decoration-none text-dark">
                                    <h3 class="card-title">Cassiopea</h3>
                                    <h5 class="Roboto"><i class="fas fa-expand-arrows-alt">21
                                            {{ __('ui.mq') }}</i> -
                                        {{ __('ui.room_desc_cassiopea') }}</h5>
                                    <p class="card-text pt-2">{{ __('ui.room_desc_cassiopea_sm') }}</p>
                                </a>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center pt-0 mt-0">
                                <a class="card-text text-decoration-none" href="{{ route('book_now') }}"
                                    target="_blank">{{ __('ui.book_now') }}</a>
                                <div class="info-icon" data-bs-toggle="modal" data-bs-target="#Cassiopea">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modale Hydra --}}
    <div class="modal fade Playfair" id="Hydra" tabindex="-1" aria-labelledby="infoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-ocra-B">
                    <h3 class="card-title" id="infoModalLabel">Hydra</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div id="carouselExampleFadeHydra2" class="carousel slide carousel-fade"
                            style="max-width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_0019.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_0024.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_0027.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_0029.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_0031.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_0040.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_0047.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_0054.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_9705.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_9711.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_9712.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_9715.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_9745.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/hydra/BRG_9746.jpg') }}"
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
                    <div class="p-2">
                        <p class="lh-md text-justify">{{ __('ui.room_desc_hydra_lg') }}</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="card-text text-decoration-none" href="{{ route('book_now') }}"
                            target="blank">{{ __('ui.book_now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modale Aries --}}
    <div class="modal fade Playfair" id="Aries" tabindex="-1" aria-labelledby="infoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-ocra-B">
                    <h3 class="card-title" id="infoModalLabel">Aries</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div id="carouselExampleFadeAries2" class="carousel slide carousel-fade"
                            style="max-width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_0015.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9725.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9737.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9750.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9755.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9756.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9768.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9769.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9777.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9972.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9974.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9979.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9984.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9987.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/aries/BRG_9996.jpg') }}"
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
                    <div class="p-2">
                        <p class="lh-md text-justify">{{ __('ui.room_desc_aries_lg') }}
                        </p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="card-text text-decoration-none" href="{{ route('book_now') }}"
                            target="blank">{{ __('ui.book_now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modale Orione --}}
    <div class="modal fade Playfair" id="Orione" tabindex="-1" aria-labelledby="infoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-ocra-B">
                    <h3 class="card-title" id="infoModalLabel">Orione</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div id="carouselExampleFadeOrione2" class="carousel slide carousel-fade"
                            style="max-width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9790.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9796.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9813.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9930.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9932.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9950.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9956.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9957.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9960.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9964.jpg') }}"
                                        class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/orione/BRG_9970.jpg') }}"
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
                    <div class="p-2">
                        <p class="lh-md text-justify">
                            {{ __('ui.room_desc_orione_lg') }}

                        </p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="card-text text-decoration-none" href="{{ route('book_now') }}"
                            target="blank">{{ __('ui.book_now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modale Cassiopea --}}
    <div class="modal fade Playfair" id="Cassiopea" tabindex="-1" aria-labelledby="infoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable vw-100">
            <div class="modal-content ">
                <div class="modal-header border-ocra-B">
                    <h3 class="card-title" id="infoModalLabel">Cassiopea</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div id="carouselExampleFadeCassiopea2" class="carousel slide carousel-fade"
                            style="max-width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9831.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9838.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9845.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9851.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9853.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9858.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9868.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9882.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9885.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9890.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9902.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9905.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9909.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9915.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9916.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9921.jpg') }}"
                                        alt="Img 1" class="img-fluid rounded">
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
                    <div class="px-2 py-1">
                        <p class="lh-md text-justify">{{ __('ui.room_desc_cassiopea_lg') }}
                        </p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="card-text text-decoration-none" href="{{ route('book_now') }}"
                            target="blank">{{ __('ui.book_now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
