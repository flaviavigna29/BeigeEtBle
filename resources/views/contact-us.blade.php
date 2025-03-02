<x-layout>
    <!-- Contact Section -->
    <div class="contact-section container-fluid mt-5">
        <div class="row px-5">
            <x-display-message />
            <!-- Left Side -->
            <div class="col-12 col-lg-6 px-2 px-md-5">
                <h4>{{ __("ui.contact_us") }}</h4>
                <p class="border_ocra"></p>
                <div class="d-flex flex-column ps-3 py-4">
                    <a href="https://wa.me/393335276953" target="_blank">
                        <i class="fab fa-whatsapp pe-3"></i> Beige et Blé GuestHouse
                    </a>
                    <a href="tel:+393335276353">
                        <i class="fas fa-phone pe-3"></i> +39 333 527 6953
                    </a>
                    <a href="mailto:info@beigeetbleguesthouse.com">
                        <i class="fas fa-envelope pe-3"></i> info@beigeetbleguesthouse.com
                    </a>
                </div>
                <h6>{{ __("ui.send_a_msg") }}</h6>
                <p class="border_ocra"></p>
                <form class="row px-1 px-md-3 py-4" method="POST" action="{{ route('send_email') }}">
                    @csrf
                    <div class="mb-4 col-12 col-md-6">
                        <input type="text" name="name" class="form-control" id="" placeholder="{{ __("ui.form_name") }}">
                        <div class="text-danger fw-bold ">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4 col-12 col-md-6">
                        <input type="text" name="surname" class="form-control" id="" placeholder="{{ __("ui.form_surname") }}">
                        <div class="text-danger fw-bold ">
                            @error('surname')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4 col-12">
                        <input type="email" name="email" class="form-control" id=""
                            placeholder="{{ __("ui.form_email") }}">
                            <div class="text-danger fw-bold ">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                    </div>
                    <div class="mb-4 col-12 col-md-6">
                        <select class="form-select" name="option">
                            <option selected>{{ __("ui.form_object_1") }}*</option>
                            <option value="Informazioni">{{ __("ui.form_object_2") }}</option>
                            <option value="Richiesta di contatto">{{ __("ui.form_object_3") }}</option>
                            <option value="Prenota una stanza">{{ __("ui.form_object_4") }}</option>
                            <option value="Assistenza alle prenotazioni">{{ __("ui.form_object_5") }}</option>
                            <option value="Altro">{{ __("ui.form_object_6") }}</option>
                        </select>
                    </div>
                    <div class="mb-4 col-12 col-md-6">
                        <input type="text" name="number" class="form-control" id=""
                            placeholder="{{ __("ui.form_number") }}">
                    </div>
                    <div class="mb-4 col-12">
                        <textarea class="form-control" id="" name="message" rows="6" placeholder="{{ __("ui.form_msg") }}"></textarea>
                        <div class="text-danger fw-bold ">
                            @error('message')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4 col-12">
                        <button type="submit">{{ __("ui.form_send") }}</button>
                    </div>
                </form>
            </div>
            <!-- Right Side -->
            <div class="col-12 col-lg-6 px-2 px-md-5">
                <h4>{{ __("ui.reach_us") }}</h4>
                <p class="border_ocra"></p>
                <a href="https://www.google.com/maps/dir//Via+degli+Uffici+del+Vicario,+33,+00186+Roma+RM/@41.9011002,12.3950616,12z/data=!3m1!5s0x132f6051780fb30d:0x6839c08c47048e67!4m8!4m7!1m0!1m5!1m1!1s0x132f61c01d2e852b:0xee40375a2e42e3be!2m2!1d12.477461!2d41.9011297?entry=ttu&g_ep=EgoyMDI0MTAxNi4wIKXMDSoASAFQAw%3D%3D"
                    target="_blank">
                    <i class="fas fa-map-marker-alt pt-3 pt-md-4 pb-md-4"></i>Via degli Uffici del Vicario, 33, 00186,
                    Roma - Italia
                </a>
                <div class="row px-3 pt-2">
                    <div class="col-12 col-md-6">
                        <h6>{{ __("ui.public_transport") }}</h6>
                        <p class="border_ocra"></p>
                        <div class="d-flex flex-column py-2">
                            <a href="https://maps.app.goo.gl/S1D4Vfb1qLcxWaZs5" target="_blank">
                                <i class="fas fa-plane-arrival pe-3"></i>{{ __("ui.FCO") }}
                            </a>
                            <a href="https://maps.app.goo.gl/5XkYpTcTGKP7sCyy9" target="_blank">
                                <i class="fas fa-plane-arrival pe-3"></i>{{ __("ui.CIA") }}
                            </a>
                            <a href="https://maps.app.goo.gl/ZjgEFL6HoGSzxF3P8" target="_blank">
                                <i class="fas fa-train pe-3"></i>{{ __("ui.TERMINI") }}
                            </a>
                            <a href="https://www.google.com/maps/dir//Via+degli+Uffici+del+Vicario,+33,+00186+Roma+RM/@41.9011002,12.3950616,12z/data=!3m2!4b1!5s0x132f6051780fb30d:0x6839c08c47048e67!4m9!4m8!1m0!1m5!1m1!1s0x132f61c01d2e852b:0xee40375a2e42e3be!2m2!1d12.477461!2d41.9011297!3e3?entry=ttu&g_ep=EgoyMDI0MTAxNi4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank">
                                <i class="fa-solid fa-user pe-3"></i>{{ __("ui.POSITION") }}
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h6>{{ __("ui.car") }}</h6>
                        <p class="border_ocra"></p>
                        <div class="d-flex flex-column py-2">
                            <a href="https://maps.app.goo.gl/p8PtQjpeUjRzu3ej7" target="_blank">
                                <i class="fas fa-plane-arrival pe-3"></i>{{ __("ui.FCO") }}
                            </a>
                            <a href="https://maps.app.goo.gl/wfqqFSNHQojxBhRq8" target="_blank">
                                <i class="fas fa-plane-arrival pe-3"></i>{{ __("ui.CIA") }}
                            </a>
                            <a href="https://maps.app.goo.gl/9PGWZsvFge5UkokD9" target="_blank">
                                <i class="fas fa-train pe-3"></i> {{ __("ui.TERMINI") }}
                            </a>
                            <a href="https://www.google.com/maps/dir//Via+degli+Uffici+del+Vicario,+33,+00186+Roma+RM/@41.9011002,12.3950616,12z/data=!3m2!4b1!5s0x132f6051780fb30d:0x6839c08c47048e67!4m9!4m8!1m0!1m5!1m1!1s0x132f61c01d2e852b:0xee40375a2e42e3be!2m2!1d12.477461!2d41.9011297!3e0?entry=ttu&g_ep=EgoyMDI0MTAxNi4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank">
                                <i class="fa-solid fa-user pe-3"></i> {{ __("ui.POSITION") }}
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Google Map -->
                <div class="map-container mt-3 d-none d-lg-block">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.615121762941!2d12.474886077269414!3d41.90113366396992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61c01d2e852b%3A0xee40375a2e42e3be!2sBEIGE%20ET%20BLE&#39;%20Guest%20House!5e0!3m2!1sit!2sit!4v1729434705366!5m2!1sit!2sit"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</x-layout>
