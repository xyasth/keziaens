@extends('layouts.app')

@section('content')
    <div class="p-6">
        <!-- Back Button -->
        <a href="{{ url('/') }}" class="inline-block mb-4 text-sm text-gray-600 hover:text-black transition">
            ← Back to Home
        </a>

        <!-- Project Details -->
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">{{ $project['title'] }}</h1>
            <p class="text-lg text-gray-700 mb-6">Project Year: {{ $project['year'] }}</p>

            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="rounded-xl shadow-lg mb-6 w-full">

            <h2 class="text-2xl font-semibold mb-2">Tags:</h2>
            <ul class="flex flex-wrap gap-2 mb-6">
                @foreach($project['tags'] as $tag)
                    <li class="bg-gray-200 text-sm px-3 py-1 rounded-full">{{ $tag }}</li>
                @endforeach
            </ul>

            <p class="text-gray-600 leading-relaxed">
                {{ $project['description'] }}
            </p>
        </div>
    </div>

    <style>
        /* Your CSS styles here */
        body {
            font-family: 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Add more styles as needed */
    </style>
@endsection
