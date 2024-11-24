<x-layout>
    <div class="room-section container-fluid pt-5 px-0 mx-0 Playfair">
        {{-- header --}}
        <div class="row header-image pt-5">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="py-5 px-4 px-md-5 d-flex flex-column room-description">
                    <h1>Cassiopea</h1>
                    <h2>"Regina D'Etiopia"</h2>
                    <p class="border_ocra_2"></p>
                    <p class="ps-lg-4 Roboto text-uppercase fw-bold "><small>Camera matrimoniale o doppia deluxe</small></p>
                    <p class="ps-lg-4">
                        La stanza "Cassiopea", che si estende su 21 metri quadrati, prende il nome dalla costellazione
                        di Cassiopea, regina d'Etiopia.
                    </p>
                    <p class="ps-lg-4">
                        Fornisce un'atmosfera serena ed accogliente, rendendola la scelta perfetta per coloro che
                        cercano relax, comfort e ampio spazio per godersi il proprio soggiorno.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-0 d-none d-lg-block"></div>
        </div>
        {{-- button --}}
        <div class="row py-5">
            <div class="col-12 text-center">
                <a class="availability-btn Roboto" href="{{route('book_now')}}" target="blank">Verifica la disponibilità</a>
            </div>
        </div>
        {{-- faq e services --}}
        <div class="row py-5 section-image d-flex justify-content-around">
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <div class="room-card">
                    <h4 class="fw-bold mb-4">F.A.Q.</h4>

                    <div class="accordion">
                        <article>
                            <div>
                                <input id="article1" type="checkbox">
                                <label for="article1">
                                    <i class="bi bi-chevron-down"></i>
                                    Title 1
                                </label>
                                <div>
                                    Content for section 1. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </article>
                    
                        <article>
                            <div>
                                <input id="article2" type="checkbox">
                                <label for="article2">
                                    <i class="bi bi-chevron-down"></i>
                                    Title 2
                                </label>
                                <div>
                                    Content for section 2. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </article>
                    
                        <article>
                            <div>
                                <input id="article3" type="checkbox">
                                <label for="article3">
                                    <i class="bi bi-chevron-down"></i>
                                    Title 3
                                </label>
                                <div>
                                    Content for section 3. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </article>
                    
                        <article>
                            <div>
                                <input id="article4" type="checkbox">
                                <label for="article4">
                                    <i class="bi bi-chevron-down"></i>
                                    Title 4
                                </label>
                                <div>
                                    Content for section 4. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </div>
                            </div>
                        </article>
                    </div>
                    

                </div>
            </div>

            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <div class="">
                    <h4 class="fw-bold mb-4">Servizi & Dotazioni</h4>
                    <ul class="list-unstyled ps-0 Roboto">
                        <li class="pb-4"><i class="fas fa-wifi me-4"></i> WIFI GRATUITO</li>
                        <li class="pb-4"><i class="fas fa-ban me-4"></i> CAMERA NON FUMATORI</li>
                        <li class="pb-4"><i class="fas fa-tv me-4"></i> SMART TV</li>
                        <li class="pb-4"><i class="fas fa-bed me-4"></i> LETTO KING SIZE O 2 LETTI SINGOLI LARGE</li>
                        <li class="pb-4"><i class="fas fa-shower me-4"></i> DOCCIA</li>
                        <li class="pb-4"><i class="fas fa-tshirt me-4"></i> GUARDAROBA</li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- galleria --}}
        <div class="row py-5 px-5 gallery" >
            <div class="col-12 text-center">
                <h1 class="fw-bold mb-4 text-dark">Galleria</h1>
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9831.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9838.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9845.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9851.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9853.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9858.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9868.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9882.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9885.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9890.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9902.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9905.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9909.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9915.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9916.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 my-2">
                <img src="{{ asset('storage/rooms_page/cassiopea/BRG_9921.jpg') }}" alt="Img 1"
                    class="img-fluid">
            </div>
        </div>
    </div>
</x-layout>
