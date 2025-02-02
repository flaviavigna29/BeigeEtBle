<x-layout>
    {{-- Home Section --}}
    <div class="home-section container-fluid pt-5 px-0 mx-0 Playfair">
        {{-- * Header - testo al centro con bottone --}}
        <header class="row m-0  d-flex justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="hero d-flex flex-column justify-content-center align-items-center">
                    <h6 class="Syncopate pt-3 color-grey">{{ __('ui.home_header_text_1') }}</h6>
                    <h1 class="Playfair fw-bold text-uppercase pt-3">
                        <m>B</m>eig<m>e</m> et <m>B</m>l<m>e'</m>
                    </h1>
                    <h3 class="Playfair text-uppercase">
                        <n>G</n>uest<n>H</n>ouse
                    </h3>
                    <h5 class="color-grey fst-italic text-capitalize Playfair pt-4 text-center">{{ __('ui.home_header_text_2') }}</h5>
                    <a href="#" class="Syncopate fw-bold text-decoration-none text-uppercase pt-5">{{ __('ui.home_header_text_3') }}
                        <i class="bi bi-calendar3"></i>
                    </a>

                </div>
            </div>
        </header>
        {{-- * Sezione 1 Testi con capolettera --}}
        <div class="section-1 row m-0">
            <div class="col-12 col-lg-6 m-0 ">
                <div class="p-5 m-0">
                    <p class="pb-2 lead">{!! __('ui.home_intro_text_1') !!}</p>
                    <p class="pb-2 lead">{!! __('ui.home_intro_text_2') !!}</p>
                    <p class="lead">{!! __('ui.home_intro_text_3') !!}</p>
                </div>
            </div>

            <div class="col-12 col-lg-6 m-0 ">
                <div class="p-5 m-0">
                    <p class="pb-2 lead">{!! __('ui.home_intro_text_4') !!}</p>
                    <p class="pb-2 lead">{!! __('ui.home_intro_text_5') !!}</p>
                    <p class="my-2 lead">{!! __('ui.home_intro_text_6') !!}</p>
                </div>
            </div>
        </div>
        {{-- * Sezione 2 Rooms & Suites --}}
        <div class="section-2 row m-0 d-flex justify-content-around">
            <div class="col-12 col-lg-5 px-md-5">
                <div class="card_home py-5 px-4 px-md-5 mx-auto d-flex flex-column justify-content-center">
                    <h2><a href="{{ route('rooms') }}" class="text-decoration-none">{{ __('ui.home_rooms_title') }}</a>
                    </h2>
                    <p>{{ __('ui.home_rooms_subtitle') }}</p>

                    <h5 class="mb-0" data-room="hydra"><a href="{{ route('hydra') }}"
                            class="text-decoration-none">{{ __('ui.home_room_hydra_title') }} -
                            <small>{{ __('ui.home_room_hydra_type') }}</small></a></h5>
                    <span class="mb-0 pb-2">{{ __('ui.home_room_specs', ['size' => '14']) }}</span>

                    <h5 class="mb-0" data-room="aries"><a href="{{ route('aries') }}"
                            class="text-decoration-none">{{ __('ui.home_room_aries_title') }} -
                            <small>{{ __('ui.home_room_aries_type') }}</small></a></h5>
                    <span class="mb-0 pb-2">{{ __('ui.home_room_specs', ['size' => '14']) }}</span>

                    <h5 class="mb-0" data-room="orione"><a href="{{ route('orione') }}"
                            class="text-decoration-none">{{ __('ui.home_room_orione_title') }} -
                            <small>{{ __('ui.home_room_orione_type') }}</small></a></h5>
                    <span class="mb-0 pb-2">{{ __('ui.home_room_specs', ['size' => '18']) }}</span>

                    <h5 class="mb-0" data-room="cassiopea"><a href="{{ route('cassiopea') }}"
                            class="text-decoration-none">{{ __('ui.home_room_cassiopea_title') }} -
                            <small>{{ __('ui.home_room_cassiopea_type') }}</small></a></h5>
                    <span class="mb-0 pb-2">{{ __('ui.home_room_specs', ['size' => '21']) }}</span>
                </div>
            </div>
            <div class="col-12 col-lg-5 d-none d-lg-block px-lg-5">
            </div>
        </div>
        {{-- * Sezione 3 Carousel --}}
        <div class="section-3 row m-0 d-flex justify-content-around">
            <div class="col-12 col-lg-5 px-md-5 order-2 order-lg-1">
                <div class="card_transparent py-5 px-4 px-md-5 mx-auto d-flex flex-column justify-content-center">
                    <h2 class="pb-1">{{ __('ui.home_heart_title') }}</h2>
                    <p>{{ __('ui.home_heart_subtitle') }}</p>
                    <h5><small>{!! __('ui.home_heart_text_1') !!}</small></h5>
                    <h5><small>{!! __('ui.home_heart_text_2') !!}</small></h5>
                    <h5><small>{!! __('ui.home_heart_text_3') !!}</small></h5>
                </div>
            </div>
            <div class="col-12 col-lg-5 px-md-5 pb-2 order-1 order-lg-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide rounded-custom" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_architecture-g585e983d9_1920.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_colosseo-1-scaled.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_Du5ukD2WkAAsKH8.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_gabriella-clare-marino-TLYzsNu8md0-unsplash-scaled.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_gloria-cretu-iek_zWEB0Fw-unsplash-scaled.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_marco-chilese-vnv6nKdtqLc-unsplash-scaled.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_moor-fountain-g57c291def_1920.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_Piazza_Navona-1.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_rome-g71d83d54e_1920.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_rome-g471fd51fd_1920.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_rome-ge82fde2ce_1920.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/home_page/carousel/thumbs_trevi-scaled.jpg') }}"
                                class="d-block rounded-custom" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- * Sezione 4 Breackfast & Lunch --}}
        <div class="section-4 row m-0 d-flex justify-content-around">
            <div class="col-12 col-lg-5 d-none d-lg-block px-lg-5">
            </div>
            <div class="col-12 col-lg-5 px-md-5">
                <div class="card_home py-5 px-4 px-md-5 d-flex flex-column justify-content-center">
                    <h2>{{ __('ui.home_breakfast_title') }}</h2>
                    <p>{{ __('ui.home_breakfast_subtitle') }}</p>
                    <h5 class="mb-0 pb-3"><small>{!! __('ui.home_breakfast_text_1') !!}</small></h5>
                    <h5 class="mb-0 pb-3"><small>{!! __('ui.home_breakfast_text_2') !!}</small></h5>
                </div>
            </div>
        </div>
        {{-- * Sezione 5 Our Services --}}
        <div class="section-5 row m-0 d-flex justify-content-around">
            <div class="col-12 col-lg-5 px-md-5 order-2 order-lg-1">
                <div class="card_transparent py-5 px-4 px-md-5 d-flex flex-column justify-content-center">
                    <h2 class="pb-4 color-ocra-A">{{ __('ui.home_services_title') }}</h2>
                    <div class="d-flex flex-column flex-md-row">
                        <ul class="services-list d-flex flex-column pe-5 py-0 mb-0">
                            <li><i class="fa-solid fa-wifi"></i> {{ __('ui.home_wifi') }}</li>
                            <li><i class="fa-solid fa-snowflake"></i> {{ __('ui.home_air_conditioning') }}</li>
                            <li><i class="fa-solid fa-broom"></i> {{ __('ui.home_daily_cleaning') }}</li>
                            <li><i class="fa-solid fa-vault"></i> {{ __('ui.home_safe') }}</li>
                        </ul>
                        <ul class="services-list d-flex flex-column">
                            <li><i class="fa-solid fa-bed"></i> {{ __('ui.home_pillows') }}</li>
                            <li><i class="fa-solid fa-wind"></i> {{ __('ui.home_hairdryer') }}</li>
                            <li><i class="fa-solid fa-cart-flatbed-suitcase"></i> {{ __('ui.home_luggage') }}</li>
                            <li><i class="fa-solid fa-van-shuttle"></i> {{ __('ui.home_shuttle') }}</li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 px-md-5 order-1 order-lg-2 pb-2">
                <div class="row g-2 h-100">
                    <div class="col-4 d-flex flex-column">
                        <div class="image-wrapper">
                            <img src="{{ asset('storage/home_page/services1.jpg') }}" alt="Service 1"
                                class="img-fluid rounded">
                        </div>
                        <div class="image-wrapper mt-2">
                            <img src="{{ asset('storage/home_page/services2.jpg') }}" alt="Service 2"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <!-- Right larger image -->
                    <div class="col-8">
                        <div class="image-wrapper">
                            <img src="{{ asset('storage/home_page/services3.jpg') }}" alt="Service 3"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
