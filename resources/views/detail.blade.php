@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-black text-white p-6 font-sans">
        <!-- Project Content -->
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="mb-10">
                <h1 class="text-6xl font-bold tracking-wide mb-2">{{ $project['Tracklist'] }}</h1>
            </div>

            <!-- Project Title & Metadata -->
            <h2 class="text-4xl font-bold mb-2">{{ $project['title'] }}</h2>
            <p class="text-gray-300 text-md mb-4">{{ $project['year'] }}</p>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 text-sm mb-6">
                @foreach ($project['tags'] as $tag)
                    <span class="bg-gray-800 border border-gray-600 px-3 py-1 rounded-full">{{ $tag }}</span>
                @endforeach
            </div>

            <!-- Challenge Section -->
            <div class="mb-8">
                <h3 class="text-white font-semibold text-lg mb-2">Challenge</h3>
                <p class="text-gray-400 text-md">{{ $project['Challenges'] }}</p>
            </div>

            <!-- Approach Section -->
            <div class="mb-8">
                <h3 class="text-white font-semibold text-lg mb-2">Approach</h3>
                <p class="text-gray-400 text-md">{{ $project['approach'] }}</p>
            </div>

            <!-- Result (dynamic details) -->
            <div class="mb-8">
                <h3 class="text-white font-semibold text-lg mb-4">Result</h3>

                <div class="space-y-8">
                    @foreach ($project['details'] as $block)
                        @switch($block['type'])

                            {{-- Pattern --}}
                            @case('pattern')
                                <p class="text-gray-300 leading-relaxed">{{ $block['content'] }}</p>
                                <img src="{{ asset($block['url']) }}" class="w-full rounded-lg shadow-md" alt="">
                                <img src="{{ asset($block['url2']) }}" class="w-full rounded-lg shadow-md" alt="">
                            @break

                            {{-- Color Palette --}}
                            @case('color_palette')
                                <p class="text-gray-300 leading-relaxed">{{ $block['content'] }}</p>
                                <img src="{{ asset($block['url']) }}" class="w-full rounded-lg shadow-md" alt="">
                                <div class="grid grid-cols-3 gap-4">
                                    @foreach ($block['images'] as $url)
                                        <img src="{{ asset($url) }}" class="w-full h-auto rounded shadow" alt="">
                                    @endforeach
                                </div>
                                <p class="text-gray-300 leading-relaxed">{{ $block['text'] }}</p>
                            @break

                            {{-- graphic --}}
                            @case('row3')
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                                    @foreach ($block['items'] as $sub)
                                        @switch($sub['type'])
                                            @case('gallery')
                                                <div class="space-y-4">
                                                    @foreach ($sub['images'] as $img)
                                                        <img src="{{ asset($img) }}" class="w-full rounded shadow" alt="">
                                                    @endforeach
                                                </div>
                                            @break

                                            @case('image')
                                                <img src="{{ asset($sub['url']) }}" class="w-full rounded-lg shadow-lg" alt="">
                                            @break
                                        @endswitch
                                    @endforeach
                                </div>
                            @break

                            {{-- Gallery of images --}}
                            @case('gallery')
                                @if (!empty($block['title']))
                                    <h4 class="text-xl font-semibold mb-2">{{ $block['title'] }}</h4>
                                @endif
                                <div class="grid grid-cols-3 gap-4">
                                    @foreach ($block['images'] as $url)
                                        <img src="{{ asset($url) }}" class="w-full h-auto rounded shadow" alt="">
                                    @endforeach
                                </div>
                            @break

                            {{-- Single image --}}
                            @case('image')
                                <img src="{{ asset($block['url']) }}" class="w-full rounded-lg shadow-md" alt="">
                            @break

                            {{-- add more block types here as needed --}}
                        @endswitch
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
