<x-layout>
<x-slot:header>
    <h1 class="text-4xl font-bold underline">My Cards</h1></x-slot:header>
    <div class="flex flex-wrap flex-row justify-around">
@foreach ($cards as $card)  {{-- Reads out all cards --}}
<x-card>
        <x-slot:title>{{ $card['title'] }}</x-slot:title>
        <x-slot:description>{{ $card['description'] }}</x-slot:description>
        <x-slot:id>{{ $card['id'] }}</x-slot:id>
        <x-slot:image>{{ $card['image'] }}</x-slot:image>
    </x-card>
@endforeach
    </div>
</x-layout>