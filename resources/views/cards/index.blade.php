<x-layout>
<x-slot:header>
    @if(request()->has('search'))
    <h1 class="text-4xl font-bold">Searching in: "{{ request('search') }}"</h1>
    @else
    <h1 class="text-4xl font-bold">All Cards</h1>
    @endif
</x-slot:header>

<div >
    <form class="flex flex-row my-5 gap-4" action="/cards" method="GET">
    
<div class=" flex flex-col">
    <p class="font-bold"> Select Types:</p>
    <div class=" flex flex-row gap-3">
    @for($i = 1 ; $i < 9 ; $i++)
        <div class="flex flex-col "> 
        <x-type :icon="$i"></x-type>
        <input class="justify-self-center" type="checkbox" name="tags[]" value="{{ $i }}"
        @if(request()->has('tags') && in_array($i, $_GET['tags']) )   
        checked
        @endif
    >
        </div>
@endfor
</div>
</div>
 
    <div class="flex flex-col">
        <p class="font-bold"> Search Title, Location or Username: </p>
        <div class="flex flex-row gap-4">
        <input class=" self-center w-max max-h-[30px] py-2 content-fit border-1 border-gray-800 rounded"
            type="text" 
            name="search" 
            id="search" 
            @if(request()->has('search'))
            value="{{ request('search') }}"
            @endif
            placeholder="Search terms">  
        <button 
            type="submit"
            class="w-fit h-fit px-3 py-2  text-l text-white rounded hover:cursor-pointer active:bg-purple-600 bg-purple-500 hover:bg-purple-400">
            Search
        </button>
        </div>
    </div>
    
</form>
<form action="/cards" method="GET">
<button 
    type="submit"
    class="w-fit h-fit px-3 py-2 mb-5 text-l text-white rounded hover:cursor-pointer active:bg-purple-600 bg-purple-500 hover:bg-purple-400">
    Clear search
    </button>
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
    @if(!request()->has('search'))
    <div>
    {{ $cards->links() }}
    @endif
    </div>
   
</x-layout>