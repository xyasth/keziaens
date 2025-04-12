@extends('layouts.app')

@section('content')
    <div class="p-6">

        <!-- Tombol Back -->
        <a href="{{ url('/') }}" class="inline-block mb-4 text-sm text-gray-600 hover:text-black transition">
            ← Back to Home
        </a>

        <!-- Detail Konten -->
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">Kollabrasa</h1>
            <p class="text-lg text-gray-700 mb-6">Project Year: 2024</p>

            <img src="{{ asset('images/Keziapic.png') }}" alt="Kollabrasa" class="rounded-xl shadow-lg mb-6 w-full">

            <h2 class="text-2xl font-semibold mb-2">Tags:</h2>
            <ul class="flex flex-wrap gap-2 mb-6">
                <li class="bg-gray-200 text-sm px-3 py-1 rounded-full">Campaign Works</li>
                <li class="bg-gray-200 text-sm px-3 py-1 rounded-full">Community</li>
                <li class="bg-gray-200 text-sm px-3 py-1 rounded-full">Experience Design</li>
                <li class="bg-gray-200 text-sm px-3 py-1 rounded-full">Visual Identity</li>
            </ul>

            <p class="text-gray-600 leading-relaxed">
                Kollabrasa is a community-focused project exploring collaborative experiences
                through creative storytelling, branding, and immersive design. This work reflects
                a unique intersection of community identity and artistic expression.
            </p>
        </div>
    </div>

    <style>
        /* General page styling */
body {
    font-family: 'Helvetica Neue', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 2rem;
}

/* Back button */
.back-button {
    display: inline-block;
    margin-bottom: 1rem;
    color: #666;
    text-decoration: none;
    font-size: 0.9rem;
    transition: color 0.2s;
}

.back-button:hover {
    color: #000;
}

/* Title and subtitle */
h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: bold;
}

h2 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

/* Image styling */
.project-image {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Tags */
.tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
}

.tag {
    background-color: #e2e2e2;
    font-size: 0.85rem;
    padding: 0.4rem 0.8rem;
    border-radius: 9999px;
}

/* Description */
.description {
    line-height: 1.7;
    color: #555;
}

    </style>
@endsection
