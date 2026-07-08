<x-layout>
    <x-slot:header>
        <h1 class="text-4xl font-bold">Update Username and/or Email</h1>
    </x-slot:header>
    <form method="POST" action="/profile" autocapitalize="off"> 
        @method("PATCH")
        @csrf
    <div class="flex flex-col gap-y-[2rem] max-w-[50vw]">
       
        <div class="flex flex-col">
            <label for="username">Username</label>
            <input required
                value="{{ $user['username'] }}" 
                type="text" 
                name="username" 
                id="username" 
                class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
                
                @error('username')
                <p class="font-bold text-red-400 text-xs"> {{ $message }}</p>
                @enderror
        </div>
        
        <div class="flex flex-col">
            <label for="email">Email</label>
            <input required
                type="email" 
                name="email"
                value="{{ $user['email'] }}"  
                id="email" 
                class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
                
                @error('email')
                <p class="font-bold text-red-400 text-xs"> {{ $message }}</p>
                @enderror
        </div>


        <div class="flex flex-col">
            <x-button :style="'auth'">Update Profile</x-button>
        </div>
    </div>
</form>
     
</x-layout>