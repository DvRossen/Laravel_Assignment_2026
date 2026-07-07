<x-layout>
<x-slot:header>
    <h1 class="text-4xl font-bold">All Cards</h1>
</x-slot:header>
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