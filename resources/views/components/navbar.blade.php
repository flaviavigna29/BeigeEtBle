<nav class="navbar navbar-expand-md fixed-top" aria-label="Thirteenth navbar example">
    <div class="container-fluid mx-0 px-0">
        <div class="d-flex justify-content-between align-items-center row p-0 m-0 w-100 d-block d-md-none">
            <div class="col-6 d-flex justify-content-start">
                <a class="navbar-brand " href="#" class="d-block d-md-none p-0 m-0">
                    <img src="../logo/Logo-Beige-et-ble-O-nobilitato.png" alt="Logo" style="width: 125px;">
                </a>
            </div>

            <div class="col-6 d-flex justify-content-end">
                <button class="navbar-toggler p-0 me-3 border-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>


        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="#"><img src="../logo/Logo-Beige-et-ble-O-nobilitato.png"
                    alt="Logo" style="width: 150px" class="d-none d-md-block"></a>
            <ul class="navbar-nav col-lg-6 col-md-7 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link active mx-2" aria-current="page" href="{{ route('homepage') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-1" aria-disabled="true" href="{{ route('rooms') }}">{{ __("ui.rooms") }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-1" aria-disabled="true" href="{{ route('contact_us') }}">{{ __("ui.contact") }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-1" aria-disabled="true" href="{{ route('book_now') }}" target="blank">{{ __("ui.book") }}</a>
                </li>
                <ul class="d-none d-md-block d-flex align-items-center mt-2">
                    {{-- <li class="nav-item mx-1 d-flex align-items-center "> --}}
                        <x-_locale class="" lang="en" />
                    {{-- </li> --}}
                    {{-- <li class="nav-item mx-1 d-flex align-items-center"> --}}
                        <x-_locale class="" lang="it" />
                    {{-- </li> --}}
                </ul>
            </ul>
            <div class="d-flex col-md-2 col-lg-3 justify-content-md-end justify-content-center pb-2 pb-md-0">
                <a href="https://www.facebook.com/beigeetble">
                    <i class="fa-brands fa-facebook pe-3 pe-md-4 fs-5"></i>
                </a>
                <a href="https://www.instagram.com/beigeetble_guesthouse/">
                    <i class="fa-brands fa-instagram pe-md-3 fs-5"></i>
                </a>
            </div>

            <div class="d-flex justify-content-end d-block d-md-none py-2">
                <li class="nav-item mx-1 d-flex align-items-center">
                    <x-_locale class="" lang="en" />
                </li>
                <li class="nav-item mx-1 d-flex align-items-center">
                    <x-_locale class="" lang="it" />
                </li>
            </div>
        </div>
    </div>
</nav>
