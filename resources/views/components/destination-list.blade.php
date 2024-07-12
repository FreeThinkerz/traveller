@props(['destination'])

<div>
    <h3 class="text-white font-bold flex justify-center items-center space-x-2">
        <x-icons.bus class="size-5 fill-white" />
        <span>{{ $destination['start_place'] }}</span>
    </h3>
    <div class="flex flex-col gap-2 mt-5">

        @foreach ($destination['destinations'] as $place)
            <div class="flex items-center justify-between p-2 bg-primary text-white rounded">
                <div class="flex space-x-2 items-center justify-center">
                    <x-icons.bus class="size-3 fill-white" />
                    <p>{{$place["name"]}}</p>
                </div>
                <p class="text-lg font-bold">{{$place["price"]}} FCFA</p>
            </div>
        @endforeach
    </div>
</div>
