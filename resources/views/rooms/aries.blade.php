<x-layout>
    <div class="room-section container-fluid pt-5 px-0 mx-0 Playfair">
        {{-- header --}}
        <div class="row header-image-aries pt-5">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="py-5 px-4 px-md-5 d-flex flex-column room-description">
                    <h1>Aries</h1>
                    <h2>"{{ __('ui.room_desc_aries_subtitle') }}"</h2>
                    <p class="border_ocra_2"></p>
                    <p class="ps-lg-4 Roboto text-uppercase fw-bold">
                        <small>{{ __('ui.room_desc_aries_type') }}</small>
                    </p>
                    <p class="ps-lg-4">
                        {{ __('ui.room_desc_aries_description_1') }}
                    </p>
                    <p class="ps-lg-4">
                        {{ __('ui.room_desc_aries_description_2') }}
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-0 d-none d-lg-block"></div>
        </div>
        {{-- button --}}
        <div class="row py-5">
            <div class="col-12 text-center">
                <a class="availability-btn Roboto" href="{{ route('book_now') }}" target="blank">{{ __('ui.room_availability') }}</a>
            </div>
        </div>
        {{-- faq e services --}}
        <div class="row py-5 section-image-aries d-flex justify-content-around px-5">
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <div class="room-card">
                    <h4 class="fw-bold mb-4 fst-italic">F.A.Q.</h4>

                    <div class="accordion">
                        <article>
                            <div>
                                <input id="article1" type="checkbox">
                                <label for="article1" class="py-3 px-2">
                                    <i class="bi bi-chevron-down"></i>
                                    {{ __('ui.room_clean_air_title') }}
                                </label>
                                <div class="px-2">
                                    <p class="py-3 px-3 my-1"><small>{{ __('ui.room_clean_air_text_pt1') }}<br><br>{{ __('ui.room_clean_air_text_pt2') }}</small></p>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <input id="article2" type="checkbox">
                                <label for="article2" class="py-3 px-2">
                                    <i class="bi bi-chevron-down"></i>
                                    {{ __('ui.room_cleaning_title') }}
                                </label>
                                <div class="px-2">
                                    <p class="py-3 px-3 my-1"><small>{{ __('ui.room_cleaning_text') }}</small></p>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <input id="article3" type="checkbox">
                                <label for="article3" class="py-3 px-2">
                                    <i class="bi bi-chevron-down"></i>
                                    {{ __('ui.room_breakfast_title') }}
                                </label>
                                <div class="px-2">
                                    <p class="py-3 px-3 my-1"><small>{{ __('ui.room_breakfast_text_pt1') }} <br><br>{{ __('ui.room_breakfast_text_pt2') }} <br><br>{{ __('ui.room_breakfast_text_pt3') }}</small></p>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <input id="article4" type="checkbox">
                                <label for="article4" class="py-3 px-2">
                                    <i class="bi bi-chevron-down"></i>
                                    {{ __('ui.room_extra_title') }}
                                </label>
                                <div class="px-2">
                                    <ul class="pt-3 fst-italic pe-3">
                                        <li><strong>{{ __('ui.room_extra_shuttle') }}</strong></li>
                                        <li><strong>{{ __('ui.room_extra_storage') }}</strong></li>
                                        <li><strong>{{ __('ui.room_extra_lunch') }}</strong></li>
                                    </ul>
                                    <p class="pb-3 px-3 my-1">
                                        <small>{{ __('ui.room_extra_text') }}</small>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-center mt-5 mt-lg-0">
                <div style="width:420px;">
                    <h4 class="fw-bold mb-4">{{ __('ui.room_amenities_title') }}</h4>
                    <ul class="list-unstyled ps-0 Roboto">
                        <li class="pb-4"><i class="fas fa-wifi me-4"></i> {{ __('ui.room_wifi') }}</li>
                        <li class="pb-4"><i class="fas fa-ban me-4"></i> {{ __('ui.room_no_smoking') }}</li>
                        <li class="pb-4"><i class="fas fa-tv me-4"></i> {{ __('ui.room_tv') }}</li>
                        <li class="pb-4"><i class="fas fa-bed me-4"></i> {{ __('ui.room_bed_aries') }}</li>
                        <li class="pb-4"><i class="fas fa-shower me-4"></i> {{ __('ui.room_shower') }}</li>
                        <li class="pb-4"><i class="fas fa-tshirt me-4"></i> {{ __('ui.room_wardrobe') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- galleria --}}
        <div class="row py-5 px-md-5 gallery px-1">
            <div class="col-12 text-center">
                <h1 class="fw-bold mb-4 text-dark">{{ __('ui.room_gallery') }}</h1>
            </div>
            <div class="col-12 col-lg-6 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_0015.jpg') }}" alt="Img 1" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9725.jpg') }}" alt="Img 1" class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9737.jpg') }}" alt="Img 1" class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9750.jpg') }}" alt="Img 1" class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9755.jpg') }}" alt="Img 1" class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9756.jpg') }}" alt="Img 1" class="img-fluid">
            </div>
            <div class="col-12 col-lg-4 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9768.jpg') }}" alt="Img 1" class="img-fluid">
            </div>
            <div class="col-12 col-lg-4 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9769.jpg') }}" alt="Img 1" class="img-fluid">
            </div>
            <div class="col-12 col-lg-4 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9777.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9972.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9974.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9979.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9984.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9987.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/aries/BRG_9996.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
        </div>
    </div>
</x-layout>
