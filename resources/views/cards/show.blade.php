
<x-layout>
<x-slot:header> <h1 class="text-4xl font-bold underline">{{ $card['title'] }}</h1></x-slot:header>
<h2 class="text-2xl"></h2>
<h3 class="font-bold">Made By:</h3>
<p> {{ $card->user['username'] }}</p>
<p> {{ $card->user['email'] }}</p>
<h3 class="font-bold">Description:</h3>
<p>{{ $card['description'] }}</p>

@can('edit-card', $card)
<a href= "/card/{{ $card['id'] }}/edit" class="text-blue-500 underline hover:text-blue-400"> Edit card</a>
@endcan

</x-layout>