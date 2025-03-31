@extends('layouts.app')

@section('content')
    <div class="relative w-full h-screen">
        <div class="absolute inset-0">
            <img src="{{ asset('images/HomeBG1.png') }}" alt="Background" class="w-full h-full object-cover">
        </div>

        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white p-6">
            <h1 class="text-4xl font-bold text-pink-400">Welcome to My Website</h1>
            <p class="text-lg text-center mt-4">This is the home page where you can add any content you like.</p>
        </div>
    </div>
@endsection
