<!-- Footer -->
<footer class="pt-4 pt-xxl-3">
    <div class="container-fluid">
        <div class="row w-100 d-flex justify-content-evenly mx-auto">
            <div class="col-12 col-md-7 col-lg-3 text-center text-lg-start">
                <img src="../logo/logo_giallo.png" alt="Logo" style="width: 220px">
                <div class="d-flex flex-column">
                    <a href="https://www.google.com/maps/dir//Via+degli+Uffici+del+Vicario,+33,+00186+Roma+RM/@41.9011002,12.3950616,12z/data=!3m1!5s0x132f6051780fb30d:0x6839c08c47048e67!4m8!4m7!1m0!1m5!1m1!1s0x132f61c01d2e852b:0xee40375a2e42e3be!2m2!1d12.477461!2d41.9011297?entry=ttu&g_ep=EgoyMDI0MTAxNi4wIKXMDSoASAFQAw%3D%3D"
                        target="_blank" class="py-2">
                        <i class="fas fa-map-marker-alt pe-1"></i>Via degli Uffici del Vicario, 33, 00186, Rome - Italy
                    </a>
                    <a href="tel:+393335276353" class="py-2">
                        <i class="fas fa-phone pe-1"></i>+39 333 527 6953
                    </a>
                    <a href="mailto:info@beigeetbleguesthouse.com" class="py-2">
                        <i class="fas fa-envelope pe-1"></i> info@beigeetbleguesthouse.com
                    </a>
                </div>

            </div>
            <div class="d-none d-lg-block col-lg-2">
                <h5 class="pt-2 pt-lg-5">
                    <square class="pe-1">[</square>{{ __("ui.pages") }}<square class="ps-1">]</square>
                </h5>
                <ul class="list-unstyled pt-4">
                    <li><a href="{{ route('homepage') }}"><i class="fa-solid fa-greater-than pe-1 py-2"></i>Home</a></li>
                    <li><a href="{{ route('rooms') }}"><i class="fa-solid fa-greater-than pe-1 py-2"></i>{{ __("ui.rooms") }}</a></li>
                    <li><a href="{{ route('contact_us') }}"><i class="fa-solid fa-greater-than pe-1 py-2"></i>{{ __("ui.contact") }} </a></li>
                    <li><a href="{{ route('book_now') }}"><i class="fa-solid fa-greater-than pe-1 py-2"></i>{{ __("ui.book") }}</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-5 col-lg-2 text-center text-lg-start pb-3 pb-lg-0">
                <h5 class="pt-3 pt-lg-5">
                    <square class="pe-1">[</square>Social Media<square class="ps-1">]</square>
                </h5>
                <ul class="list-inline m-0 pt-4 pb-2">
                    <li class="list-inline-item "><a href="https://www.facebook.com/beigeetble" target="_blank"><i
                                class="fab fa-facebook icon_footer fs-6"></i></a></li>
                    <li class="list-inline-item"><a href="https://wa.me/393335276953" target="_blank"><i
                                class="fab fa-whatsapp icon_footer fs-6"></i></a></li>
                    <li class="list-inline-item"><a href="https://t.me/beigeetble" target="_blank"><i
                                class="fa-brands fa-telegram icon_footer fs-6"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/beigeetble_guesthouse/" target="_blank"><i
                                class="fab fa-instagram icon_footer fs-6"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-0 text-center">
        <p class="py-2 m-0 copyright">Copyright <y id="copyright-year"></y> - BEIGE ET BLE' Guesthouse. {{ __("ui.copyright") }}</p>
    </div>

    <script>
        const currentYear = new Date().getFullYear();
        document.getElementById('copyright-year').textContent = currentYear;
    </script>
    
</footer>
