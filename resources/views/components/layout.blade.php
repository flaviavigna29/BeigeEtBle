<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BeigeEtBle</title>
    {{-- <link rel="icon" type="image/x-icon" href="/media/logo/logo.png"> --}}
    <!-- ! google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- ! Montserrat-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- ! Roboto-->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- ! Playfair-->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- ! Syncopate -->
    <link
        href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Syncopate:wght@400;700&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!-- aos cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    @vite (['../../resources/css/app.css' , '../../resources/js/app.js'])
</head>

<body>

    <x-navbar />

    {{ $slot }}
    {{-- <div class="cky-consent-container cky-box-bottom-left" tabindex="0">
        <div class="cky-consent-bar" data-cky-tag="notice" style="border-color: #8c6927; background-color: #F2dbae;">
            <div class="cky-notice">
                <p class="cky-title" role="heading" aria-level="1" data-cky-tag="title" style="color: #133340;"> We use
                    cookies to give you the best experience on our site </p>
                <div class="cky-notice-group">
                    <div class="cky-notice-des" data-cky-tag="description" style="color: #133340;">
                        <p>This website uses cookies to ensure you get the best browsing experience possible. Cookies
                            help us personalize content, provide social media features, and analyze our traffic. By
                            clicking "Accept All", you consent to the use of all cookies. If you'd like to learn more or
                            change your preferences, click on "Cookie Settings"..</p>
                    </div>
                    <div class="cky-notice-btn-wrapper" data-cky-tag="notice-buttons"> <button
                            class="cky-btn cky-btn-customize" aria-label="Cookie Settings"
                            data-cky-tag="settings-button"
                            style="color: #133340; border-color: #133340; background-color: transparent;">Cookie
                            Settings</button> <button class="cky-btn cky-btn-accept" aria-label="Accept All"
                            data-cky-tag="accept-button"
                            style="color: #FFFFFF; border-color: #133340; background-color: #133340;">Accept
                            All</button> </div>
                </div>
            </div>
        </div>
    </div> --}}
    <x-footer />
    <!-- aos js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- fontawesome js -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
