<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kezia Enginia Sagala</title>
    <link rel="icon" href="{{ asset('images/Keziapic.png') }}" type="image/png">

    <style>
        @font-face {
            font-family: 'AcuPro';
            src: url("{{ asset('fonts/Acumin-RPro.otf') }}") format('opentype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Acumin';
            src: url("{{ asset('fonts/Acumin-BdPro.otf') }}") format('opentype');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Manrope';
            src: url("{{ asset('fonts/manrope/MANROPE-VARIABLEFONT_WGHT.TTF') }}") format('opentype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Matton Script';
            src: url("/fonts/MT-Matto-Script-Bold.ttf") format("opentype");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Space Grotesk';
            src: url("/fonts/spacegrotesk/SPACEGROTESK-VARIABLEFONT_WGHT.TTF") format("opentype");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }



        /* Jadikan MyriadPro sebagai font default, dan helper class */
        body {
            margin: 0;
            padding: 0;
            background-color: #f9fafb; /* sesuai bg-gray-50 */
        }
        .font-myriad {
            font-family: 'MyriadPro', sans-serif !important;
        }
        .font-manrope {
            font-family: 'Manrope', sans-serif !important;
        }
        .font-space {
            font-family: 'Space Grotesk', sans-serif !important;
        }
        .font-acumin {
            font-family: 'Acumin', sans-serif !important;
        }
        .font-acupro {
            font-family: 'AcuPro', sans-serif !important;
        }
    </style>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-myriad bg-gray-50 m-0 p-0">
    @include('components.navbar')

    <div class="w-full flex justify-center">
        <div class="w-full">
            @yield('content')
        </div>
    </div>
</body>
</html>
