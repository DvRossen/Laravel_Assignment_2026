
<x-layout>
<x-slot:header> <h1 class="text-4xl font-bold underline">{{ $card['title'] }}</h1></x-slot:header>
<h2 class="text-2xl"></h2>
<h3 class="font-bold">Made By:</h3>
<p> {{ $card->user['username'] }}</p>
<p> {{ $card->user['email'] }}</p>
<h3 class="font-bold">Description:</h3>
<p>{{ $card['description'] }}</p>

@can('edit', $card)
<a href= "/card/{{ $card['id'] }}/edit" class="text-blue-500 underline hover:text-blue-400"> Edit card</a>
@endcan
@can('delete', $card)
<x-button form="delete-form" :style="'danger'">Delete Card</x-button>
<form id="delete-form" method="POST" action="/card/{{ $card["id"] }}" class="hidden">
    @csrf
    @method("DELETE")
</form>
@endcan

</x-layout>