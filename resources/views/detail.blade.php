@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-black text-white p-6 font-sans">
        <!-- Project Content -->
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="mb-10">
                <h1 class="text-6xl tracking-wide mb-2">{{ $project['Tracklist'] }}</h1>
            </div>
            <hr class="border-t border-dashed border-white w-full">
            <!-- Project Title & Metadata -->
            <h2 class="pt-8 text-6xl font-bold mb-2">{{ $project['title'] }}</h2>
            <p class="text-gray-300 text-md mb-4">{{ $project['year'] }}</p>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 text-sm mb-6">
                @foreach ($project['tags'] as $tag)
                    <span class="bg-gray-800 border border-gray-600 px-3 py-1 rounded-full">{{ $tag }}</span>
                @endforeach
            </div>

            <hr class="w-full border-t-2 border-white my-6">
            <!-- Challenge Section -->
            <div class="mb-8">
                <table class="w-full table-auto border-collapse border-0">
                    <tbody>
                        <tr>
                            <td class="text-white font-semibold text-base pr-6 align-top border-0 w-1/5">
                                Challenge
                            </td>
                            <td class="text-white text-md border-0">
                                {{ $project['Challenges'] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-white font-semibold text-base pr-6 align-top border-0 w-1/5 pt-4">
                                Approach
                            </td>
                            <td class="text-white text-md border-0 pt-4">
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
                        </tr>
                    </tbody>
                </table>

                <div class="space-y-8">
                    @foreach ($project['details'] as $block)
                        @switch($block['type'])
                            {{-- Pattern --}}
                            @case('pattern')
                                <div class="pt-8 flex flex-col items-center gap-4">
                                    <img src="{{ asset($block['url']) }}" class="w-1/2 rounded-lg shadow-md" alt="">
                                </div>
                                <img src="{{ asset($block['url2']) }}" class="w-full rounded-lg shadow-md" alt="">
                            @break

                            {{-- Color Palette --}}
                            @case('color_palette')
                            <hr class="my-6 border-white">
                                <p class="text-gray-300 leading-relaxed">{{ $block['content'] }}</p>
                                <img src="{{ asset($block['url']) }}" class="w-full rounded-lg shadow-md" alt="">
                                <div class="grid grid-cols-3 gap-4">
                                    @foreach ($block['images'] as $url)
                                        <img src="{{ asset($url) }}" class="w-full h-auto rounded shadow" alt="">
                                    @endforeach
                                </div>
                                <p class="text-gray-300 leading-relaxed">{{ $block['text'] }}</p>
                            @break

                            {{-- Merchandise --}}
                            @case('Merchandise')
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
