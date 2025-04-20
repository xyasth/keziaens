@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-black text-white p-6 font-sans">
        <!-- Project Content -->
        <div class="font-space max-w-5xl mx-auto">
            <!-- Header -->
            <div class="mb-10">
                <h1 class="font-acumin text-6xl tracking-wide mb-2">{{ $project['Tracklist'] }}</h1>
            </div>
            <hr class="border-t border-dashed border-white w-full">
            <!-- Project Title & Metadata -->
            <h2 class="font-manrope pt-8 text-6xl font-bold mb-2">{{ $project['title'] }}</h2>
            <p class="text-gray-300 text-md mb-4">{{ $project['year'] }}</p>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 text-sm mb-6">
                @foreach ($project['tags'] as $tag)
                    <span class="font-manrope bg-gray-800 border border-gray-600 px-3 py-1 rounded-full">{{ $tag }}</span>
                @endforeach
            </div>

            <hr class="w-full border-t-2 border-white my-6">
            <!-- Challenge Section -->
            <div class="mb-8">
                <table class="w-full table-auto border-collapse border-0">
                    <tbody>
                        <tr>
                            <td class="font-manrope text-white font-semibold text-base pr-6 align-top border-0 w-1/5">
                                Challenge
                            </td>
                            <td class="font-space text-white text-md border-0">
                                {{ $project['Challenges'] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-manrope text-white font-semibold text-base pr-6 align-top border-0 w-1/5 pt-4">
                                Approach
                            </td>
                            <td class="font-space text-white text-md border-0 pt-4">
                                {{ $project['approach'] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr class="my-6 border-white">

            <!-- Result (dynamic details) -->
            <div class="mb-8">
                <table class="w-full table-auto border-collapse border-0 pd-4">
                    <tbody>
                        <tr>
                            <td class="text-white font-semibold text-base pr-6 align-top border-0 w-1/5">
                                Result
                            </td>
                            <td class="text-white font-semibold border-0">
                                {{ $project['Result'] }}
                            </td>
                            @if (!empty($project['Result2']))
                                <td class="text-white font-semibold border-0">
                                    {{ $project['Result2'] }}
                                </td>
                                <td></td>
                            @endif
                        </tr>
                    </tbody>
                </table>

                <div class="space-y-8">
                    @foreach ($project['details'] as $block)
                        @switch($block['type'])
                            {{-- ---------------------------------------------------------- Tracklist-o9  ---------------------------------------------------------- --}}
                            {{-- Pattern --}}
                            @case('pattern')
                                <div class="pt-8 flex flex-col items-center gap-4">
                                    <img src="{{ asset($block['url']) }}" class="w-1/2 " alt="">
                                </div>
                                <img src="{{ asset($block['url2']) }}" class="w-full " alt="">
                            @break

                            {{-- Color Palette --}}
                            @case('color_palette')
                                <hr class="my-6 border-white">
                                <p class="text-gray-300 leading-relaxed pl-16 md:pl-8 sm:pl-4">{{ $block['content'] }}</p>
                                <img src="{{ asset($block['url']) }}" class="w-full" alt="">
                                <div class="grid grid-cols-3 gap-4">
                                    @foreach ($block['images'] as $url)
                                        <img src="{{ asset($url) }}" class="w-full h-auto" alt="">
                                    @endforeach
                                </div>
                                <p class="pl-10 text-gray-300 leading-relaxed">{{ $block['text'] }}</p>
                            @break

                            {{-- Merchandise --}}
                            @case('Merchandise')
                                <hr class="my-6 border-white">
                                <p class="text-gray-300 leading-relaxed pl-16 md:pl-8 sm:pl-4">{{ $block['content'] }}</p>
                                <div class="p-0">
                                    @foreach ($block['images'] as $url)
                                        <img src="{{ asset($url) }}" class="w-full h-auto my-0" alt="">
                                    @endforeach
                                </div>
                                @if (!empty($block['warn']))
                                    <p class="text-center text-yellow-500">
                                        <span class="font-bold">Restricted assets:</span> Please email me (<span
                                            class="font-bold">keziaens@gmail.com</span>) for detail project.
                                    </p>
                                @endif
                            @break

                            {{-- Graphic --}}
                            @case('Graphic')
                                <hr class="my-6 border-white">
                                <div class="mb-8">
                                    <div class="grid grid-cols-3 gap-4">
                                        @foreach ($block['contents'] as $index => $content)
                                            <p class="text-gray-300 text-md">{{ $content }}</p>
                                        @endforeach
                                        @foreach ($block['images'] as $i => $url)
                                            <div class="relative">
                                                @if ($i === 1)
                                                    <span class="absolute top-0 left-0 text-xs px-1">[2]</span>
                                                @endif
                                                <img src="{{ asset($url) }}" class="w-full h-auto" alt="">
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="relative">
                                    <span class="absolute top-0 left-0 text-xs px-1">[3]</span>
                                    <img src="{{ asset($block['url']) }}" class="w-full" alt="">
                                </div>
                                <p style="font-size: 0.5rem;">
                                    [1] The philosophical concept is drawn from the meaning of Batik Kawung, which symbolizes purity
                                    and wisdom — values that align seamlessly with the Hotel & Tourism Business (HTB) program's
                                    emphasis on empathy, cultural diversity, and professional hospitality.<br>
                                    [2] Alternative application of geometric patterning before transitioning into a seamless
                                    pattern.<br>
                                    [3] Initially, my philosophical concept was that the main pattern would revolve around Batik
                                    Kawung.
                                </p>
                            @break

                            {{-- ---------------------------------------------------------- Tracklist-o8  ---------------------------------------------------------- --}}
                            {{-- Visual --}}
                            @case('Visual')
                                <div class="grid gap-4">
                                    @foreach ($block['images'] as $url)
                                        <img src="{{ asset($url) }}" class="w-full h-auto" alt="">
                                    @endforeach
                                </div>
                            @break

                            {{-- Outline --}}
                            @case('Outline')
                                <div class="pt-8 flex flex-col items-center gap-4">
                                    <img src="{{ asset($block['url']) }}" class="w-4/5 " alt="">
                                </div>
                            @break

                            {{-- assets --}}
                            @case('Assets')
                                @php
                                    $url = $block['url'];
                                    $extension = strtolower(pathinfo($url, PATHINFO_EXTENSION));
                                @endphp
                                <p class="text-gray-300 leading-relaxed pl-16 md:pl-8 sm:pl-4 py-4">{{ $block['content'] }}</p>
                                <video class="w-full h-auto" autoplay loop muted playsinline>
                                    <source src="{{ asset($url) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @break

                            {{-- design process --}}
                            @case('DesignProcess')
                                <p class="py-0 my-0 pl-16 md:pl-8 sm:pl-4">{{ $block['content'] }}</p>
                                <p class="!mt-0 !mb-0 !pt-0 text-gray-300 pl-0 sm:pl-4 md:pl-8">{{ $block['text1'] }}</p>
                                <p class="py-0 my-0 text-gray-300 pl-0 md:pl-8 sm:pl-4">{{ $block['text2'] }}</p>
                                <div class="pt-8 flex flex-col items-center gap-4">
                                    <div class="relative w-3/4">
                                        <span class="absolute top-0 left-0 text-xs px-1">[1]</span>
                                        <img src="{{ asset($block['url']) }}" class="w-full" alt="">
                                    </div>
                                    <div class="w-3/5">
                                        <span class="text-xs">[1] Developed pattern inspired by Peranakan design-blending cultural
                                            heritage with modern visual rhythm to strengthen Ah Pak's identity.</span>
                                    </div>
                                </div>
                            @break

                            {{-- ---------------------------------------------------------- Tracklist-o7  ---------------------------------------------------------- --}}
                            {{-- Typography --}}
                            @case('Typography')
                                <div class="grid grid-cols-2">
                                    @foreach ($block['images'] as $url)
                                        @php
                                            $extension = strtolower(pathinfo($url, PATHINFO_EXTENSION));
                                        @endphp

                                        @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                                            <img src="{{ asset($url) }}" class="w-full h-auto" alt="Media">
                                        @elseif ($extension === 'mp4')
                                            <video class="w-full h-auto" autoplay loop muted playsinline>
                                                <source src="{{ asset($url) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="lg:mx-6 lg:px-16 sm:mx-0 sm:px-0 md:mx-0 md:px-0">
                                    <p class="text-lg text-justify">{{ $block['text1'] }}</p>
                                    <br>
                                    <p class="text-lg text-justify">{{ $block['text2'] }}</p>
                                </div>
                            @break

                            {{-- Mockup --}}
                            @case('Mockup')
                                <hr class="my-6 border-white">
                                <p class="text-gray-300 leading-relaxed pl-16 md:pl-8 sm:pl-4">{{ $block['content'] }}</p>
                                <img src="{{ asset($block['url']) }}" class="w-full " alt="">
                            @break

                            {{-- Augmented Reality --}}
                            @case('AR')
                                <hr class="my-6 border-white">
                                <p class="text-gray-300 leading-relaxed pl-16 md:pl-8 sm:pl-4">{{ $block['content'] }}</p>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <div class="grid grid-cols-2 gap-4">
                                            @foreach ($block['images'] as $i => $url)
                                                @php
                                                    $extension = strtolower(pathinfo($url, PATHINFO_EXTENSION));
                                                @endphp
                                                @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                                                    <img src="{{ asset($url) }}" class="w-full h-auto" alt="Media">
                                                @elseif ($extension === 'mp4')
                                                    <div class="relative">
                                                        <span class="absolute top-0 left-0 text-xs px-1">[3]</span>
                                                        <video class="w-full h-auto" autoplay loop muted playsinline>
                                                            <source src="{{ asset($url) }}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <p class="text-[0.5rem] sm:text-xs md:text-sm">
                                            [1] Scan the barcode using your phone camera or a QR app.<br>
                                            [2] Points the camera at the "Save Your Tears" graphic or printed shirt.<br>
                                            [3] Wait few seconds until the animation and audio (song sample) are triggered
                                            automatically on the screen.
                                        </p>
                                    </div>
                                    <img src="{{ asset($block['url']) }}" class="w-full" alt="">
                                </div>
                        </div>
                    @break

                    {{-- Printed Product --}}
                    @case('printed')
                        <hr class="my-6 border-white">
                        <p class="text-gray-300 leading-relaxed pl-16 md:pl-8 sm:pl-4 py-4">{{ $block['content'] }}</p>
                        <p class="text-gray-300 leading-relaxed pl-8 pb-4">{{ $block['text'] }}</p>
                        <img src="{{ asset($block['url']) }}" class="w-3/5 " alt="">
                    @break

                    {{-- ---------------------------------------------------------- Tracklist-o6  ---------------------------------------------------------- --}}
                    {{-- Vinyl album --}}
                    @case('Vinyl')
                        <img src="{{ asset($block['url']) }}" class="w-full " alt="">
                    @break

                    {{-- Vinyl images --}}
                    @case('Vinyl_image')
                        <hr class="my-6 border-white">
                        <img src="{{ asset($block['url']) }}" class="w-full " alt="">
                    @break

                    {{-- ---------------------------------------------------------- Tracklist-o5  ---------------------------------------------------------- --}}
                    @case('Logos')
                        @foreach ($block['images'] as $url)
                            <img src="{{ asset($url) }}" class="w-full h-auto my-0" alt="">
                        @endforeach
                    @break

                    {{-- ---------------------------------------------------------- Tracklist-o4  ---------------------------------------------------------- --}}
                    @case('Logo')
                        <div class="grid grid-cols-2">
                            @foreach ($block['images'] as $url)
                                <div class="flex items-center justify-center h-full">
                                    <img src="{{ asset($url) }}" class="max-w-full h-auto" alt="Media">
                                </div>
                            @endforeach
                        </div>
                        <div class="relative w-full">
                            <!-- Background image -->
                            <img src="{{ asset($block['url1']) }}" class="max-w-full" alt="">

                            <!-- Overlay image centered -->
                            <img src="{{ asset($block['url']) }}"
                                class="w-1/2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                alt="">
                        </div>

                        @php
                            $url = $block['video'];
                            $extension = strtolower(pathinfo($url, PATHINFO_EXTENSION));
                        @endphp
                        <video class="w-full h-auto" autoplay loop muted playsinline>
                            <source src="{{ asset($url) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @break

                    @case('Graphic1')
                        <div class="grid grid-cols-2 gap-4 flex items-center">
                            @foreach ($block['images'] as $i => $url)
                                <div>
                                    @if ($i === 2)
                                        <img src="{{ asset($url) }}" class="w-4/5 h-auto" alt="Media">
                                        <p class="leading-relaxed">
                                            [1] Early explorations merged tree forms with coral reef structures.<br>
                                            [2] A stylized tree, chosen as the main symbol, represents forest
                                            conservation and environmental growth.<br>
                                            [3] A set of icons developed to represent each environmental concern:
                                            deforestation, marine pollution, and ecosystem degradation.
                                        </p>
                                    @else
                                        <img src="{{ asset($url) }}" class="w-full h-auto" alt="Media">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @break

                    {{-- ---------------------------------------------------------- Tracklist-o3  ---------------------------------------------------------- --}}
                    @case('visual')
                        <img src="{{ asset($block['url']) }}" class="w-full " alt="">
                        <p class="px-4 text-gray-300 leading-relaxed">{{ $block['text'] }}</p>
                    @break

                    @case('visual2')
                        <hr class="my-6 border-white">
                        <table class="w-full table-auto border-collapse border-0 pd-4">
                            <tbody>
                                <tr>
                                    <td class="text-white font-semibold text-base pr-6 align-top border-0 w-1/5">

                                    </td>
                                    <td class="text-white font-semibold border-0">
                                        {{ $block['content'] }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <img src="{{ asset($block['url']) }}" class="w-full " alt="">
                        <table class="w-full table-auto border-collapse border-0 pd-4">
                            <tbody>
                                <tr>
                                    <td class="text-white font-semibold text-base pr-6 align-top border-0 w-1/5">

                                    </td>
                                    <td class="text-white font-semibold border-0">
                                        {{ $block['text'] }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @break

                    @case('pallete')
                        <hr class="my-6 border-white">
                        <table class="w-full table-auto border-collapse border-0 pd-4">
                            <tbody>
                                <tr>
                                    <td class="text-white font-semibold text-base pr-6 align-top border-0 w-1/5">

                                    </td>
                                    <td class="text-white font-semibold border-0">
                                        {{ $block['content'] }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <img src="{{ asset($block['url']) }}" class="w-full " alt="">
                    @break

                    @case('visualapp')
                        <hr class="my-6 border-white">
                        <table class="w-full table-auto border-collapse border-0 pd-4">
                            <tbody>
                                <tr>
                                    <td class="text-white font-semibold text-base pr-6 align-top border-0 w-1/5">

                                    </td>
                                    <td class="text-white font-semibold border-0">
                                        {{ $block['content'] }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="p-0">
                            @foreach ($block['images'] as $url)
                                <img src="{{ asset($url) }}" class="w-full h-auto my-0" alt="">
                            @endforeach
                        </div>
                    @break

                    {{-- ---------------------------------------------------------- Tracklist-o2  ---------------------------------------------------------- --}}
                    @case('o2Logo')
                        <div class="grid grid-cols-2">
                            @foreach ($block['images'] as $url)
                                <img src="{{ asset($url) }}" class="w-full h-full my-0" alt="">
                            @endforeach
                        </div>
                        <table class="w-full table-auto border-collapse border-0 pd-4">
                            <tbody>
                                <tr>
                                    <td class="text-white font-semibold text-base pr-6 align-top border-0 w-1/5">

                                    </td>
                                    <td class="text-white font-semibold border-0">
                                        {{ $block['text2'] }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="bg-white w-full">
                            <img src="{{ asset($block['url2']) }}" class="w-full" alt="">
                        </div>
                        <table class="w-full table-auto border-collapse border-0 pd-4">
                            <tbody>
                                <tr>
                                    <td class="text-white font-semibold text-base pr-6 align-top border-0 w-1/5">

                                    </td>
                                    <td class="text-white text-center font-semibold border-0">
                                        {{ $block['text'] }}
                                    </td>
                                    <td class="text-white font-semibold text-base align-top border-0 w-1/5">

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @break

                    {{-- ---------------------------------------------------------- Tracklist-o1  ---------------------------------------------------------- --}}
                    @case('o1Logo')
                        <div class="grid grid-cols-2">
                            @foreach ($block['images'] as $url)
                                <img src="{{ asset($url) }}" class="w-full h-full my-0" alt="">
                            @endforeach
                        </div>
                        <img src="{{ asset($block['url']) }}" class="w-full" alt="">
                        <div class="pt-8 flex flex-col items-center gap-4">
                            <div class="w-3/4">
                                <p class="text-center">{{ $block['text'] }}</p>
                            </div>
                        </div>
                    @break

                    @case('o1DesignProcess')
                        <hr class="my-6 border-white">
                        <div class="pt-8 flex flex-col items-center gap-4">
                            <div class="w-3/4">
                                <p>{{ $block['content'] }}</p>
                                <br>
                                <p class="text-center">{{ $block['text'] }}</p>
                            </div>
                        </div>
                        <img src="{{ asset($block['url']) }}" class="w-full" alt="">
                        <div class="pl-8 flex flex-col items-center">
                            <div class="">
                                <p class="font-bold pb-2">{{ $block['title'] }}</p>
                                <p>{{ $block['text'] }}</p>
                            </div>
                        </div>
                        <div class="pl-8 flex flex-col items-center gap-2">
                            <div class="">
                                <p class="font-bold pb-2">{{ $block['title2'] }}</p>
                                <p>{{ $block['text2'] }}</p>
                            </div>
                        </div>
                        <div class="pl-8 flex flex-col items-center">
                            <div class="">
                                <p class="font-bold pb-2">{{ $block['title3'] }}</p>
                                <p>{{ $block['text3'] }}</p>
                            </div>
                        </div>
                        <div class="p-0">
                            @foreach ($block['images'] as $url)
                                <img src="{{ asset($url) }}" class="w-full h-auto my-0" alt="">
                            @endforeach
                        </div>

                        <img src="{{ asset($block['images1']) }}" class="w-full" alt="">

                        <p class="text-center text-orange-500">
                            <span class="font-bold">Restricted assets:</span> Please email me (<span
                                class="font-bold">keziaens@gmail.com</span>) for detail project.
                        </p>
                    @break

                    @case('sosmed')
                        <p class="text-gray-300 leading-relaxed pl-16 md:pl-8 sm:pl-4 py-4">{{ $block['content'] }}</p>
                        <img src="{{ asset($block['url']) }}" class="w-full" alt="">
                    @break

                    {{-- add more block types here as needed --}}
                @endswitch
                @endforeach
            </div>
        </div>

    </div>
    </div>
@endsection
