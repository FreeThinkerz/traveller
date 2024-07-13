@props(['destination'])

<div class="rounded  overflow-hidden shadow max-w-lg">
    <div class="relative">
        <img class="object-fit object-center w-full" src="{{ $destination['thumbnail'] }}" />

        <div class="absolute bottom-3 w-full">
            <div class="flex justify-around items-center w-full">
                <p class="text-lg font-bold text-white">{{ $destination['name'] }}</p>
                <p class="text-xl font-bold text-white">{{ $destination['price'] }} FCFA</p>
            </div>

        </div>

    </div>
    <div class="bg-primary p-4 flex items-center justify-end space-x-4">
        <button
            class="p-2 hover:bg-secondary hover:text-white  bg-white font-bold flex items-center justify-center space-x-2 rounded shadow">
            <span>Reserve Now</span>
            <svg class="size-5 @if ($isDefault) group-hover:fill-white @else fill-black @endif"
                xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24">
                <path
                    d="M13 15v4h3v2H8v-2h3v-4H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM8 8v2h8V8z" />
            </svg>
        </button>
    </div>
</div>
