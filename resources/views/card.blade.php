
<x-layout>
<x-slot:header> <h1 class="text-4xl font-bold underline">{{ $card['title'] }}</h1></x-slot:header>
<h2 class="text-2xl"></h2>
<h3 class="font-bold">Description:</h3>
<p>{{ $card['description'] }}</p>
</x-layout>