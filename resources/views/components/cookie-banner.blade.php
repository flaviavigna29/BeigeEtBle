{{-- components/cookie-banner.blade.php --}}
<div>
    {{-- Simple initial banner --}}
    <div id="cookie-banner-simple" class="fixed-bottom shadow-sm py-2 container-fluid"
        style="display: none; z-index: 1050;">
        <div class="d-flex justify-content-center justify-content-md-between align-items-center row">
            <div class="col-12 col-md-8">
                <p class="mb-0 text-center text-md-start text-white">
                    <small>{{ __('ui.cookie_banner_text') }}</small>
                    <button type="button" class="btn btn-link text-decoration-none fw-bold" data-bs-toggle="offcanvas"
                        data-bs-target="#cookieSettings">
                        {{ __('ui.cookie_banner_learn_more') }}
                    </button>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <button id="accept-all-simple" class="btn">{{ __('ui.cookie_banner_accept_all') }}</button>
            </div>
        </div>
    </div>

    {{-- Offcanvas with detailed settings --}}
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="cookieSettings" aria-labelledby="cookieSettingsLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="cookieSettingsLabel">{{ __('ui.cookie_banner_title') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container py-2">
                <div class="row">
                    <div class="col-lg-9">
                        <p class="mb-4">
                            {{ __('ui.cookie_banner_main_description') }}
                        </p>
                        <p class="mb-4">
                            {{ __('ui.cookie_banner_necessary_info') }}
                        </p>
                        <p class="mb-4">
                            {{ __('ui.cookie_banner_third_party_info') }}
                        </p>
                        <p class="mb-4">
                            {{ __('ui.cookie_banner_impact_notice') }}
                        </p>
                        <p class="mb-2">
                            <strong class="text-ocra">{{ __('ui.cookie_necessary_title') }}</strong>
                            <br>
                            {{ __('ui.cookie_necessary_description') }}
                        </p>
                        <p class="mb-2">
                            <strong class="text-ocra">{{ __('ui.cookie_functional_title') }}</strong>
                            <br>
                            {{ __('ui.cookie_functional_description') }}
                        </p>
                        <p class="mb-2">
                            <strong class="text-ocra">{{ __('ui.cookie_analytics_title') }}</strong>
                            <br>
                            {{ __('ui.cookie_analytics_description') }}
                        </p>
                        <p class="mb-2">
                            <strong class="text-ocra">{{ __('ui.cookie_advertising_title') }}</strong>
                            <br>
                            {{ __('ui.cookie_advertising_description') }}
                        </p>
                    </div>
                    <div class="col-lg-3 mt-5">
                        <div class="d-flex flex-column gap-2">
                            <button id="accept-all" class="btn btn-primary">
                                {{ __('ui.cookie_banner_accept_all') }}
                            </button>
                            <button id="reject-all" class="btn">
                                {{ __('ui.cookie_banner_reject_all') }}
                            </button>
                        </div>
                        <small class="d-block text-center mt-3">
                            {{ __('ui.cookie_privacy_notice') }}
                            <a href="{{ route('privacy-policy') }}" target="blank"
                                class="text-ocra text-decoration-none">{{ __('ui.cookie_privacy_link') }}</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
