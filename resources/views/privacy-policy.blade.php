<x-layout>
    <div class="privacy-section container-fluid mt-5">
        <div class="row px-5 justify-content-around">
            <div class="col-12 py-5 Playfair text-center">
                <h1 class="mb-4 Playfair fst-italic fw-bold text-ocra">{{ __('ui.privacy_main_title') }}</h1>
            </div>
            <div class="col-md-5 px-3">
                <section class="mb-4">
                    <h4 class="Playfair">{{ __('ui.privacy_info_title') }}</h4>
                    <p class="border_ocra"></p>
                    <p class="py-4 ps-3">{{ __('ui.privacy_info_text') }}</p>

                    <div class="mb-4">
                        <h5 class="mt-4 Playfair">{{ __('ui.privacy_framework_title') }}</h5>
                        <p class="border_ocra"></p>
                        <ul class="py-4">
                            <li>{!! __('ui.privacy_framework_gdpr') !!}</li>
                            <li>{!! __('ui.privacy_framework_196') !!}</li>
                            <li>{!! __('ui.privacy_framework_101') !!}</li>
                            <li>{!! __('ui.privacy_framework_directive') !!}</li>
                            <li>{!! __('ui.privacy_framework_garante') !!}</li>
                        </ul>
                    </div>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_controller_title') }}</h5>
                    <p class="border_ocra"></p>
                    <p class="pt-4 ps-3">{{ __('ui.privacy_controller_info') }}</p>
                    <p class="pb-4 ps-3">{{ __('ui.privacy_controller_definition') }}</p>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_definitions_title') }}</h5>
                    <p class="border_ocra"></p>

                    <ul class="py-4">
                        <li>{!! __('ui.privacy_def_personal_data') !!}</li>
                        <li>{!! __('ui.privacy_def_processing') !!}</li>
                        <li>{!! __('ui.privacy_def_profiling') !!}</li>
                        <li>{!! __('ui.privacy_def_subject') !!}</li>
                    </ul>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_principles_title') }}</h5>
                    <p class="border_ocra"></p>

                    <p class="pt-4 ps-3">{{ __('ui.privacy_principles_intro') }}</p>
                    <ul class="pb-4">
                        <li>{!! __('ui.privacy_principle_1') !!}</li>
                        <li>{!! __('ui.privacy_principle_2') !!}</li>
                        <li>{!! __('ui.privacy_principle_3') !!}</li>
                        <li>{!! __('ui.privacy_principle_4') !!}</li>
                        <li>{!! __('ui.privacy_principle_5') !!}</li>
                        <li>{!! __('ui.privacy_principle_6') !!}</li>
                    </ul>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_data_types_title') }}</h5>
                    <p class="border_ocra"></p>

                    <h6 class="pt-4 ps-2">{{ __('ui.privacy_navigation_data_title') }}</h6>
                    <p class="pt-3 ps-3">{{ __('ui.privacy_navigation_data_intro') }}</p>
                    <ul class="pb-4">
                        <li>{{ __('ui.privacy_navigation_data_1') }}</li>
                        <li>{{ __('ui.privacy_navigation_data_2') }}</li>
                        <li>{{ __('ui.privacy_navigation_data_3') }}</li>
                        <li>{{ __('ui.privacy_navigation_data_4') }}</li>
                        <li>{{ __('ui.privacy_navigation_data_5') }}</li>
                        <li>{{ __('ui.privacy_navigation_data_6') }}</li>
                        <li>{{ __('ui.privacy_navigation_data_7') }}</li>
                        <li>{{ __('ui.privacy_navigation_data_8') }}</li>
                    </ul>

                    <h6 class="mt-3 ps-2">{{ __('ui.privacy_voluntary_data_title') }}</h6>
                    <p class="pt-3 ps-3">{{ __('ui.privacy_voluntary_data_intro') }}</p>
                    <ul class="pb-4">
                        <li>{{ __('ui.privacy_voluntary_data_1') }}</li>
                        <li>{{ __('ui.privacy_voluntary_data_2') }}</li>
                        <li>{{ __('ui.privacy_voluntary_data_3') }}</li>
                        <li>{{ __('ui.privacy_voluntary_data_4') }}</li>
                    </ul>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_purposes_title') }}</h5>
                    <p class="border_ocra"></p>

                    <p class="pt-3 ps-3">{{ __('ui.privacy_purposes_intro') }}</p>
                    <ul class="pb-4">
                        <li>{!! __('ui.privacy_purpose_1') !!}</li>
                        <li>{!! __('ui.privacy_purpose_2') !!}</li>
                        <li>{!! __('ui.privacy_purpose_3') !!}</li>
                        <li>{!! __('ui.privacy_purpose_4') !!}</li>
                        <li>{!! __('ui.privacy_purpose_5') !!}</li>
                        <li>{!! __('ui.privacy_purpose_6') !!}</li>
                    </ul>
                </section>
            </div>
            <div class="col-md-5 px-3">
                <section class="mb-4">
                    <h4 class="Playfair">{{ __('ui.privacy_cookie_title') }}</h4>
                    <p class="border_ocra"></p>

                    <p class="ps-3 py-3">{{ __('ui.privacy_cookie_description') }}</p>

                    <h4 class="mt-4 Playfair">{{ __('ui.privacy_cookie_types_title') }}</h4>
                    <p class="border_ocra"></p>

                    <p class="pt-3 pb-1 py-3">{!! __('ui.privacy_cookie_technical_title') !!}</p>
                    <ul>
                        <li>{{ __('ui.privacy_cookie_technical_1') }}</li>
                        <li>{{ __('ui.privacy_cookie_technical_2') }}</li>
                        <li>{{ __('ui.privacy_cookie_technical_3') }}</li>
                    </ul>

                    <p class="pt-3 pb-1 py-3">{!! __('ui.privacy_cookie_analytics_title') !!}</p>
                    <ul>
                        <li>{{ __('ui.privacy_cookie_analytics_1') }}</li>
                        <li>{{ __('ui.privacy_cookie_analytics_2') }}</li>
                        <li>{{ __('ui.privacy_cookie_analytics_3') }}</li>
                    </ul>

                    <p class="pt-3 pb-1 py-3">{!! __('ui.privacy_cookie_functional_title') !!}</p>
                    <ul class="pb-3">
                        <li>{{ __('ui.privacy_cookie_functional_1') }}</li>
                        <li>{{ __('ui.privacy_cookie_functional_2') }}</li>
                        <li>{{ __('ui.privacy_cookie_functional_3') }}</li>
                    </ul>

                    <h4 class="mt-4 Playfair">{{ __('ui.privacy_cookie_management_title') }}</h4>
                    <p class="border_ocra"></p>

                    <p class="ps-3 pt-3">{{ __('ui.privacy_cookie_management_intro') }}</p>
                    <ul class="pb-3">
                        <li>{{ __('ui.privacy_cookie_management_1') }}</li>
                        <li>{{ __('ui.privacy_cookie_management_2') }}</li>
                        <li>{{ __('ui.privacy_cookie_management_3') }}</li>
                    </ul>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_retention_title') }}</h5>
                    <p class="border_ocra"></p>

                    <p class="ps-3 pt-3">{{ __('ui.privacy_retention_intro') }}</p>
                    <ul class="pb-3">
                        <li>{!! __('ui.privacy_retention_1') !!}</li>
                        <li>{!! __('ui.privacy_retention_2') !!}</li>
                        <li>{!! __('ui.privacy_retention_3') !!}</li>
                        <li>{!! __('ui.privacy_retention_4') !!}</li>
                        <li>{!! __('ui.privacy_retention_5') !!}</li>
                    </ul>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_recipients_title') }}</h5>
                    <p class="border_ocra"></p>

                    <p class="ps-3 pt-3">{{ __('ui.privacy_recipients_intro') }}</p>
                    <ul class="pb-3">
                        <li>{{ __('ui.privacy_recipient_1') }}</li>
                        <li>{{ __('ui.privacy_recipient_2') }}</li>
                        <li>{{ __('ui.privacy_recipient_3') }}</li>
                        <li>{{ __('ui.privacy_recipient_4') }}</li>
                    </ul>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_transfer_title') }}</h5>
                    <p class="border_ocra"></p>

                    <p class="ps-3 pt-3">{{ __('ui.privacy_transfer_intro') }}</p>
                    <ul class="pb-3">
                        <li>{{ __('ui.privacy_transfer_1') }}</li>
                        <li>{{ __('ui.privacy_transfer_2') }}</li>
                        <li>{{ __('ui.privacy_transfer_3') }}</li>
                    </ul>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_rights_title') }}</h5>
                    <p class="border_ocra"></p>

                    <p class="ps-3 pt-3">{{ __('ui.privacy_rights_intro') }}</p>
                    <ul class="pb-3">
                        <li>{!! __('ui.privacy_right_1') !!}</li>
                        <li>{!! __('ui.privacy_right_2') !!}</li>
                        <li>{!! __('ui.privacy_right_3') !!}</li>
                        <li>{!! __('ui.privacy_right_4') !!}</li>
                        <li>{!! __('ui.privacy_right_5') !!}</li>
                        <li>{!! __('ui.privacy_right_6') !!}</li>
                        <li>{!! __('ui.privacy_right_7') !!}</li>
                    </ul>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_security_title') }}</h5>
                    <p class="border_ocra"></p>

                    <p class="ps-3 pt-3">{{ __('ui.privacy_security_intro') }}</p>
                    <ul class="pb-3">
                        <li>{{ __('ui.privacy_security_1') }}</li>
                        <li>{{ __('ui.privacy_security_2') }}</li>
                        <li>{{ __('ui.privacy_security_3') }}</li>
                        <li>{{ __('ui.privacy_security_4') }}</li>
                    </ul>

                    <h5 class="mt-4 Playfair">{{ __('ui.privacy_complaint_title') }}</h5>
                    <p class="border_ocra"></p>

                    <p class="ps-3 py-3">{{ __('ui.privacy_complaint_text') }}</p>
                </section>
            </div>
        </div>
    </div>
</x-layout>