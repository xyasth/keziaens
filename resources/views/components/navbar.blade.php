<nav class="flex justify-between items-center p-4 bg-black text-white shadow relative">
    <!-- Left Side: Hello -->
    <a href="#" class="text-pink-400 font-bold uppercase">KEZIAENS</a>

    <!-- Right Side: More Button -->
    <div x-data="{ open: false }">
        <button @click="open = true" class="text-pink-400 font-bold uppercase">INFO</button>

        <!-- Sidebar Menu -->
        <div x-show="open" x-transition:enter="transition transform ease-in-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition transform ease-in-out duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             class="fixed top-0 right-0 w-64 h-full bg-black text-white shadow-lg p-6 flex flex-col items-center space-y-6"
             @click.away="open = false">

            <!-- HOME Button at Top Right -->
            <div class="w-full flex justify-end">
                <a href="#" class="text-pink-400 font-bold uppercase">HOME</a>
            </div>

            <!-- Navigation Links (Centered, Bigger, With Dotted Line Below) -->
            <div class="w-full text-center">
                <a href="#" class="text-2xl font-semibold hover:text-gray-300 block pb-2">About</a>
                <div class="border-b-2 border-dotted border-gray-500 w-3/4 mx-auto"></div>
            </div>

            <div class="w-full text-center">
                <a href="#" class="text-2xl font-semibold hover:text-gray-300 block pb-2">Tracklist</a>
                <div class="border-b-2 border-dotted border-gray-500 w-3/4 mx-auto"></div>
            </div>

            <div class="w-full text-center">
                <a href="#" class="text-2xl font-semibold hover:text-gray-300 block pb-2">Contact</a>
                <div class="border-b-2 border-dotted border-gray-500 w-3/4 mx-auto"></div>
            </div>
        </div>
    </div>
</nav>
