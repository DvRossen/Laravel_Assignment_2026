
<x-layout>
<x-slot:header> <div class="flex gap-3 items-center">
    <h1 class="text-4xl font-bold">{{ $card['title'] }}</h1>
    <x-type :icon="$card['type']"></x-type>
</div>
</x-slot:header>

<div class="flex flex-col items-center">
    <x-field>
        <h3><span class="font-bold">Made By: </span>{{ $card->user['username'] }}</h3>
        <p><span class="font-bold">Email: </span>{{ $card->user['email'] }} </p>
    
        <h3 class="font-bold mt-[1rem]">Date and time:</h3>
        <p>{{ $card['date'] }}</p>
        <h3 class="font-bold mt-[1rem]">Description:</h3>
        <p>{{ $card['description'] }}</p>
        
        <div class="flex self-center gap-3 mt-5">
    @can('edit', $card)
        <x-navlink href="/card/{{ $card['id'] }}/edit">Edit Card</x-navlink>
    @endcan
    @can('delete', $card)
        <x-button form="delete-form" :style="'danger'">Delete Card</x-button>
        <form id="delete-form" method="POST" action="/card/{{ $card["id"] }}" class="hidden">
         @csrf
        @method("DELETE")
        </form>
    @endcan
        </div>
    </x-field>

    
</div>
</x-layout>