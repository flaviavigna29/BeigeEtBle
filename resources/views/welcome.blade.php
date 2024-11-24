<x-layout>
    {{-- Home Section --}}
    <div class="home-section container-fluid pt-5 px-0 mx-0 Playfair">
        {{-- * Header - testo al centro con bottone --}}
        <header class="row m-0  d-flex justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="hero d-flex flex-column justify-content-center align-items-center">
                    <h6 class="Syncopate pt-3 color-grey" >Benvenuti</h6>
                    <h1 class="Playfair fw-bold text-uppercase pt-3"><m>B</m>eig<m>e</m> et <m>B</m>l<m>e'</m></h1>
                    <h3 class="Playfair text-uppercase"><n>G</n>uest<n>H</n>ouse</h3>
                    <h5 class="color-grey fst-italic text-capitalize Playfair pt-4 text-center">Camere di lusso con bagno privato nel cuore di Roma</h5>
                    <a href="#" class="Syncopate fw-bold text-decoration-none text-uppercase pt-5">
                        Prenota una Camera
                        <i class="bi bi-calendar3"></i>
                    </a>
                    
                </div>
            </div>
        </header>
        {{-- * Sezione 1 Testi con capolettera --}}
        <div class="section-1 row m-0">
            {{-- <div class="col-12 col-lg-6 m-0 ">
                <div class="p-5 m-0">
                    <p class="pb-2 lead">In the <b>vibrant heart of Rome</b>, the elegant and welcoming Beige
                        et
                        Ble’ GuestHouse
                        boasts a privileged location just a short distance from the main <b>religious
                            sites</b>, <b>business centers</b>, and the most famous <b>tourist
                            attractions</b> of the city.</p>
                    <p class="pb-2 lead">The property is situated within an imposing <b>18th-century</b> noble
                        residence
                        overlooking the <b>Italian parliament</b>.</p>
                    <p class="lead">The convenience of the location is guaranteed by the proximity to the
                        <b>subway
                            stop</b> and the ease with which the main r<b>ailway stations</b> and
                        <b>airports</b> can be reached.
                    </p>
                </div>
            </div> --}}

            <div class="col-12 col-lg-6 m-0 ">
                <div class="p-5 m-0">
                    <p class="pb-2 lead">{{ __('ui.vibrant_heart_of_rome') }}
                        <b>{{ __('ui.vibrant_heart_of_rome_bold') }}</b>, {{ __('ui.elegant_and_welcoming') }}
                        <b>{{ __('ui.beige_ble') }}</b> {{ __('ui.guesthouse') }}
                        {{ __('ui.boasts_privileged_location') }} {{ __('ui.short_distance') }}
                        {{ __('ui.main_religious_sites') }}, <b>{{ __('ui.business_centers') }}</b>,
                        {{ __('ui.most_famous') }} <b>{{ __('ui.tourist_attractions') }}</b>
                        {{ __('ui.of_the_city') }}.
                    </p>
                    <p class="pb-2 lead">{{ __('ui.property_situated') }} <b>{{ __('ui.18th_century') }}</b>
                        {{ __('ui.noble_residence') }}
                        {{ __('ui.overlooking_italian_parliament') }}.</p>
                    <p class="lead">{{ __('ui.location_convenience') }} {{ __('ui.proximity_to_subway') }}
                        <b>{{ __('ui.subway_stop') }}</b> {{ __('ui.ease_of_access') }}
                        {{ __('ui.main_railway_stations') }} e <b>{{ __('ui.airports') }}</b> {{ __('ui.reached') }}.
                    </p>
                </div>
            </div>
            {{-- <div class="col-12 col-lg-6 m-0 ">
                <div class="p-5 m-0">
                    <p class="pb-2  lead">Each room is equipped with a <strong>private bathroom</strong>, air
                        conditioning,
                        a 32-inch Smart
                        TV, free high-speed Wi-Fi, a safety deposit box, heating, and a hairdryer. Guests can enjoy
                        optimal rest on our<strong> King</strong> and <strong>Queen size beds</strong>.</p>
                    <p class="pb-2  lead">We offer our guests a <strong>daily cleaning service</strong> and
                        <strong>towel
                            change</strong>
                        during their stay to ensure a fresh and clean environment.
                    </p>
                    <p class="my-2 lead">In the common area, guests can find a <strong>coffee</strong> machine and
                        accessories to prepare
                        <strong>tea</strong> or a <strong>hot beverage</strong>, perfect for relaxing after a day
                        exploring the wonders of Rome!
                    </p>
                </div>
            </div> --}}

            <div class="col-12 col-lg-6 m-0 ">
                <div class="p-5 m-0">
                    <p class="pb-2 lead">{{ __('ui.each_room_equipped_with') }}
                        <strong>{{ __('ui.private_bathroom') }}</strong>, {{ __('ui.air_conditioning') }},
                        {{ __('ui.smart_tv') }}, {{ __('ui.free_wifi') }}, {{ __('ui.safety_deposit_box') }},
                        {{ __('ui.heating') }}, {{ __('ui.hairdryer') }}. {{ __('ui.guests_can_enjoy') }}
                        <strong>{{ __('ui.king_size_beds') }}</strong> &
                        <strong>{{ __('ui.queen_size_beds') }}</strong> {{ __('ui.optimal_rest') }}.
                    </p>
                    <p class="pb-2 lead">{{ __('ui.daily_cleaning_service') }} {{ __('ui.towel_change') }}
                        {{ __('ui.ensure_fresh_clean_environment') }}.</p>
                    <p class="my-2 lead">{{ __('ui.common_area') }} {{ __('ui.coffee_machine') }} e
                        {{ __('ui.accessories_for_tea_hot_beverage') }},
                        {{ __('ui.ideal_for_relaxing_after_day_exploring_rome') }}!</p>
                </div>
            </div>

        </div>
        {{-- * Sezione 2 Rooms & Suites --}}
        <div class="section-2 row m-0 d-flex justify-content-around">
            <div class="col-12 col-lg-5 px-md-5">
                <div class="card_home py-5 px-4 px-md-5 mx-auto d-flex flex-column justify-content-center">
                    <h2><a href="{{ route('rooms') }}" class="text-decoration-none">Rooms & Suites</a></h2>
                    <p>For Every Occasion</p>
                    <h5 class="mb-0"><a href="" class="text-decoration-none">Hydra - <small>Double
                                Room</small></a></h5>
                    <span class="mb-0 pb-2">14mq - Private Bathroom - WIFI - SmartTV - Daily Cleaning</span>
                    <h5 class="mb-0"><a href="" class="text-decoration-none">Aries - <small>Twin or Double
                                Room</small></a></h5>
                    <span class="mb-0 pb-2">14mq - Private Bathroom - WIFI - SmartTV - Daily Cleaning</span>
                    <h5 class="mb-0"><a href="" class="text-decoration-none">Orione - <small>Twin or Double
                                Room</small></a></h5>
                    <span class="mb-0 pb-2">18mq - Private Bathroom - WIFI - SmartTV - Daily Cleaning</span>
                    <h5 class="mb-0"><a href="{{ route('cassiopea') }}" class="text-decoration-none">Cassiopea -
                            <small>Deluxe Double or Twin Room</small></a></h5>
                    <span class="mb-0 pb-2">21mq - Private Bathroom - WIFI - SmartTV - Daily Cleaning</span>
                </div>
            </div>
            <div class="col-12 col-lg-5 d-none d-lg-block px-lg-5">
            </div>
        </div>
        {{-- * Sezione 3 Carousel --}}
        <div class="section-3 row m-0 d-flex justify-content-around">
            <div class="col-12 col-lg-5 px-md-5 order-2 order-lg-1">
                <div class="card_transparent py-5 px-4 px-md-5 mx-auto d-flex flex-column justify-content-center">
                    <h2 class="pb-1">The Heart Of Rome</h2>
                    <p>All of Rome, just one step from you.</p>

                    <h5><small>Experience Rome <strong>on foot</strong>!</small>
                    </h5>
                    <h5><small>Explore the hidden treasures and charming streets of Rome, immersing yourself in the
                            local
                            culture.</small>
                    </h5>
                    <h5><small>Perfect for <strong>tourism</strong>, <strong>work</strong>, or
                            <strong>leisure</strong>, our
                            location allows you to take advantage of convenience and live an authentic
                            experience
                            without wasting time on transportation.</small>
                    </h5>
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
            <div class="col-12 col-lg-5 d-none d-lg-block px-md-5">
            </div>
            <div class="col-12 col-lg-5 px-md-5">
                <div class="card_home py-5 px-4 px-md-5 d-flex flex-column justify-content-center">
                    <h2>Breakfast & Lunch</h2>
                    <p>Sweet Atmosphere and Italian cuisine</p>
                    <h5 class="mb-0 pb-3"><small>Start your day with a light <strong>continental breakfast</strong>
                            offered
                            by Espressamente
                            Illy
                            and savor an exclusive <strong>Italian lunch</strong> in the heart of Rome.</small></h5>
                    <h5 class="mb-0 pb-3"><small>Enjoy the wide selection of dishes and impeccable hospitality of the
                            <strong>Espressamente
                                Illy</strong> staff, who will make every meal an unforgettable and authentically
                            <strong>Italian experience</strong>!</small></h5>
                </div>
            </div>
        </div>
        {{-- * Sezione 5 Our Services --}}
        <div class="section-5 row m-0 d-flex justify-content-around">
            <div class="col-12 col-lg-5 px-md-5 order-2 order-lg-1">
                <div class="card_transparent py-5 px-4 px-md-5 d-flex flex-column justify-content-center">
                    <h2 class="pb-4 color-ocra-A">Our Services</h2>
                    <div class="d-flex flex-column flex-md-row">
                        <ul class="services-list d-flex flex-column pe-5 py-0 mb-0">
                            <li><i class="fa-solid fa-wifi"></i> WIFI</li>
                            <li><i class="fa-solid fa-snowflake"></i> Air Conditioning</li>
                            <li><i class="fa-solid fa-broom"></i> Free Daily Cleaning</li>
                            <li><i class="fa-solid fa-vault"></i> Safe Box</li>
                        </ul>
                        <ul class="services-list d-flex flex-column">
                            <li><i class="fa-solid fa-bed"></i> More Pillows</li>
                            <li><i class="fa-solid fa-wind"></i> Hairdryer</li>
                            <li><i class="fa-solid fa-cart-flatbed-suitcase"></i> Luggage Storage</li>
                            <li><i class="fa-solid fa-van-shuttle"></i> Airport/Station Shuttle Service</li>
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
