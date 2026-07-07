<x-layout>
    <x-slot:header>
        <h1 class="text-4xl font-bold">Create Card</h1>
    </x-slot:header>
    <form method="POST" action="/cards"> 
        @csrf
    <div class="flex flex-col gap-y-[2rem] max-w-[50vw]">
       
            <div class="flex flex-col">
            <label for="title">Title<span class="text-red-400 font-bold">*</span></label>
            <input required placeholder="Title of activity"  type="text" name="title" id="title" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
                @error('title')
                <p class="font-bold text-red-400 text-xs"> {{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
            <label for="description">Description<span class="text-red-400 font-bold">*</span></label>
            <textarea required placeholder="What is this activity about?" rows="3" type="text" name="description" id="description" class="border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500"></textarea>
                @error('description')
                <p class="font-bold text-red-400 text-xs"> {{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
            <label for="typeSelect">Icon Type<span class="text-red-400 font-bold">*</span></label>
            <fieldset required class="flex flex-row gap-3"name="typeSelect">
                <x-radiobutton :value="1"></x-radiobutton>
                <x-radiobutton :value="2"></x-radiobutton>
                <x-radiobutton :value="3"></x-radiobutton>
                <x-radiobutton :value="4"></x-radiobutton>
                <x-radiobutton :value="5"></x-radiobutton>
                <x-radiobutton :value="6"></x-radiobutton>
                <x-radiobutton :value="7"></x-radiobutton>
                <x-radiobutton :value="8"></x-radiobutton>
            </fieldset>
                @error('type')
                <p class="font-bold text-red-400 text-xs"> {{ $message }}</p>
                @enderror
        </div>
        <div class="flex flex-col">
            <label for="imageUrl">Image</label>
            <input placeholder="img URL"  type="text" name="imageUrl" id="imageUrl" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
                @error('imageUrl')
                <p class="font-bold text-red-400 text-xs"> {{ $message }}</p>
                @enderror
        </div>
         <div class="flex flex-col">
            <label for="location">Location<span class="text-red-400 font-bold">*</span></label>
            <input required placeholder="location of activity" type="text" name="location" id="location" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
                @error('location')
                <p class="font-bold text-red-400 text-xs"> {{ $message }}</p>
                @enderror
        </div>
        <div class="flex flex-col">
            <label for="date">Date<span class="text-red-400 font-bold">*</span></label>
            <input required type="datetime-local" name="date" id="date" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
                @error('date')
                <p class="font-bold text-red-400 text-xs"> {{ $message }}</p>
                @enderror
        </div>
    
        
        
        <div class="flex flex-col">
           <x-button>Create Card</x-button>
        </div>

          
        
    
    </div>
</form>
    
         
    
     
</x-layout>