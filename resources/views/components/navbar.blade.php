<nav class="flex justify-between items-center p-4 bg-black text-white shadow relative z-50">
    <!-- Left Side: Logo -->
    <a href="/" class="text-pink-400 font-bold uppercase">KEZIAENS</a>

    <!-- Right Side: Info Button -->
    <div x-data="{ open: false }">
        <button @click="open = true" class="text-pink-400 font-bold uppercase">INFO</button>

        <!-- Sidebar Menu -->
        <div x-show="open"
             x-transition:enter="transition transform ease-in-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition transform ease-in-out duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             class="fixed top-0 right-0 h-full w-3/4 sm:w-2/3 md:w-64 lg:w-80 bg-black text-white shadow-lg p-6 flex flex-col items-center space-y-6 z-50"
             @click.away="open = false">

            <!-- Close/Home Button -->
            <div class="w-full flex justify-end">
                <a href="/" class="text-pink-400 font-bold uppercase">HOME</a>
            </div>

            <!-- Sidebar Links -->
            <div class="w-full text-center">
                <a href="/about" class="text-2xl font-semibold not-italic hover:text-gray-300 block pb-2">About</a>
                <div class="border-b-2 border-dotted border-gray-500 w-3/4 mx-auto"></div>
            </div>

            <div class="w-full text-center">
                <a href="/#tracklist"
                   @click="open = false"
                   class="text-2xl font-semibold hover:text-gray-300 block pb-2">Tracklist</a>
                <div class="border-b-2 border-dotted border-gray-500 w-3/4 mx-auto"></div>
            </div>

            <div class="w-full text-center">
                <a href="/#section-four"
                   @click="open = false"
                   class="text-2xl font-semibold hover:text-gray-300 block pb-2">Contact</a>
                <div class="border-b-2 border-dotted border-gray-500 w-3/4 mx-auto"></div>
            </div>
        </div>
    </div>
</nav>
