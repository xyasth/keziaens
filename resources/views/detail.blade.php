@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-black text-white p-6 font-sans">
        <!-- Back Button -->
        <a href="{{ url('/') }}" class="inline-block mb-6 text-sm text-gray-400 hover:text-white transition">
            ← Back to Home
        </a>

        <!-- Project Content -->
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="mb-10">
                {{-- <h2 class="text-purple-400 text-sm font-bold uppercase mb-1">acumin</h2> --}}
                <h1 class="text-6xl font-bold tracking-wide mb-2">Tracklist 04</h1>
            </div>

            <!-- Project Title & Metadata -->
            <h2 class="text-4xl font-bold mb-2">{{ $project['title'] }}</h2>
            <p class="text-gray-300 text-md mb-4">{{ $project['year'] }}</p>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 text-sm mb-6">
                @foreach($project['tags'] as $tag)
                    <span class="bg-gray-800 border border-gray-600 px-3 py-1 rounded-full">{{ $tag }}</span>
                @endforeach
            </div>

            <!-- Challenge Section -->
            <div class="mb-8">
                {{-- <h3 class="text-green-400 font-bold text-lg mb-1">Challenge</h3> --}}
                {{-- <p class="text-yellow-300 font-bold text-sm mb-2">Space grotesk</p> --}}
                <p class="text-gray-300 leading-relaxed text-md">{{ $project['description'] }}</p>
            </div>

            <!-- Approach Section -->
            <div class="mb-8">
                <h3 class="text-white font-semibold text-lg mb-2">Approach</h3>
                <p class="text-gray-400 text-md">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.
                </p>
            </div>

            <!-- Image Preview -->
            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="rounded-xl shadow-lg mb-10 w-full">

            <!-- Result -->
            <div class="text-md text-gray-300">
                <strong class="text-white">Result:</strong> Vinyl Album
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&family=Space+Grotesk:wght@400;700&display=swap');

        body {
            font-family: 'Manrope', sans-serif;
        }

        h1, h2, h3 {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>
@endsection
