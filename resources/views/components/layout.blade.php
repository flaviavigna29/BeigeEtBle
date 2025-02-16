<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BeigeEtBle Guesthouse</title>
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

    {{-- favicon  --}}
    <link rel="icon" type="image/png" href="{{ asset('storage/global_img/logo.png') }}">

    {{-- Cookiebot  --}}
    {{-- <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="73eec208-3d0d-41d4-972a-ab72f2c5c883"
        data-blockingmode="auto" type="text/javascript"></script> --}}

    @vite (['../../resources/css/app.css' , '../../resources/js/app.js'])
</head>

<body>

    <x-navbar />
    {{ $slot }}
    <x-cookie-banner /> 

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
