<x-layout>
<x-slot:header>
    <h1 class="text-4xl font-bold">{{ $user['username'] }}'s profile</h1>
</x-slot:header>


<x-field>
    <div class="flex justify-between">
        <div>
            <h3 class="font-bold">Username:</h3>
            <p>{{ $user['username'] }}</p>
            <h3 class="font-bold mt-2">Email:</h3>
            <p>{{ $user['email'] }}</p>
            <h3 class="font-bold mt-2">Ammount of Cards:</h3>
            <p>{{ count($cards) }}</p>
            <h3 class="font-bold mt-2">Ammount of Likes:</h3>
            <p>{{ count($likes) }}</p>
        </div>
            <div class="self-end">
            <h3 class="font-bold">Times Logged in:</h3>
            <p>{{ $user['times_logged_in'] }}</p>
            
            <h3 class="font-bold mt-2"> Account Created at:</h3>
            <p>{{ $user['created_at'] }}</p>
            <h3 class="font-bold mt-2">Account Last updated:</h3>
            <p>{{ $user['updated_at'] }}</p>
            
        </div>
    </div>
    </x-field>
    <div class="mt-3 mb-8">
        <x-navlink :isAuthLink="true" href="/profile/edit">Edit Profile</x-navlink>
    </div>




<h2 class="text-2xl font-bold ">My Cards</h2>
<div class="flex flex-wrap flex-row justify-around border-t-1 w-full border-gray-800 pt-4">
@foreach ($cards as $card)  {{-- Reads out all cards --}}
<div class="flex mt-4 py-4 px-1 justify-evenly gap-3 min-w-fit w-[40vw] rounded bg-gray-200 border-1 border-gray-800">
      

   

    <div>
    <form method="POST" action='/card/{{ $card['id']}}/activate'>
        @csrf
        @method('PATCH')
        @if($card['is_active'] == false)
        <x-button type="submit">Activate Card</x-button>
        @elseif($card['is_active'] == true)
        <x-button type="submit" :style="'danger'" >Deactivate Card</x-button>
        @endif
    </form>
    </div>
    
    <div class="w-fit self-center">
        <x-type :icon="$card['type']"></x-type>
    </div>
     
    <div class="self-center">
        <h3 class="font-bold text-3xl max-w-[20vw] line-clamp-1">{{ $card['title'] }}</h3>
    </div>
    
    
    <div class=" h-min w-fit self-center">
        <h3 class="text-m ">{{ $card['date'] }}</h3>
    </div>
    <div class="self-center">
        <a class="size-[30px] min-w-[30px] hover:pointer" href="/card/{{$card['id']}}"> <!-- link per card here -->
            <svg xmlns="http://www.w3.org/2000/svg"  
                viewBox="0 -960 960 960" 
                class=" w-[30px] h-[30px] fill-black hover:fill-purple-600">
                    <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/>
            </svg>
        </a>
    </div>
</div>
@endforeach
</div>

</x-layout>