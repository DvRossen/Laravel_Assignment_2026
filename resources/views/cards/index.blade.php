<x-layout>
<x-slot:header>
    <h1 class="text-4xl font-bold">All Cards</h1>
</x-slot:header>

<div class=" flex flex-row my-5 gap-4">
<div>
    <p class="font-bold"> Select Types:</p>
@for($i = 1 ; $i < 9 ; $i++)
    <x-button type="submit" value="{{ $i }}">
        <x-type :icon="$i"></x-type>
    </x-button>
@endfor
</div> 
    <form action="/cards" method="GET">
    
<div class="flex flex-row gap-4">
    <div class="flex flex-col">
        <p class="font-bold"> Search: </p>
        <input class=" self-end min-h-[30px] py-2 content-fit border-1 border-gray-800 rounded"
        type="text" 
        name="search" 
        id="search" 
        placeholder="Search terms">
    </div>
    
        
        <button 
        type="submit"
        class="w-fit h-fit px-3 py-2 mt-[25px] text-l text-white rounded hover:cursor-pointer active:bg-purple-600 bg-purple-500 hover:bg-purple-400">
            Search
        </button>
    </div>
</form>

</div>

<div class="flex flex-wrap flex-row justify-around">
@foreach ($cards as $card)  {{-- Reads out all cards --}}
<x-card>
    <x-slot:title>{{ $card['title'] }}</x-slot:title>
    <x-slot:description>{{ $card['description'] }}</x-slot:description>
    <x-slot:id>{{ $card['id'] }}</x-slot:id>
    <x-slot:image>{{ $card['imageUrl'] }}</x-slot:image>
    <x-slot:author>{{ $card->user['username'] }}</x-slot:author>
    <x-slot:datetime>{{ $card['date'] }}</x-slot:datetime>
    <x-slot:type> {{ $card['type'] }}</x-slot:type>
    <x-slot:location>{{ $card['location'] }}</x-slot:location>
</x-card>
@endforeach
   
        
    </div>
    
    <div>
    {{ $cards->links() }}
    </div>
    
</x-layout>