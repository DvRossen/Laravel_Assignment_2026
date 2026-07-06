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
                <div class="flex flex-col justify-center">
                    <x-type :icon="1"></x-type>
                    <input type="radio" id="iconChoice1" name="type" value="1"/>
                </div>
                <div class="flex flex-col justify-center">
                    <x-type :icon="2"></x-type>
                    <input type="radio" id="iconChoice2" name="type" value="2"/>
                </div>
                <div class="flex flex-col justify-center">
                    <x-type :icon="3"></x-type>
                    <input type="radio" id="iconChoice2" name="type" value="3"/>
                </div>
                <div class="flex flex-col justify-center">
                    <x-type :icon="4"></x-type>
                    <input type="radio" id="iconChoice2" name="type" value="4"/>
                </div>
                <div class="flex flex-col justify-center">
                    <x-type :icon="5"></x-type>
                    <input type="radio" id="iconChoice2" name="type" value="5"/>
                </div>
                <div class="flex flex-col justify-center">
                    <x-type :icon="6"></x-type>
                    <input type="radio" id="iconChoice2" name="type" value="6"/>
                </div>
                <div class="flex flex-col justify-center">
                    <x-type :icon="7"></x-type>
                    <input type="radio" id="iconChoice2" name="type" value="7"/>
                </div>
                <div class="flex flex-col justify-center">
                    <x-type :icon="8"></x-type>
                    <input type="radio" id="iconChoice2" name="type" value="8"/>
                </div>
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
            <label for="title">Date<span class="text-red-400 font-bold">*</span></label>
            <input required type="datetime-local" name="date" id="date" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
                @error('title')
                <p class="font-bold text-red-400 text-xs"> {{ $message }}</p>
                @enderror
        </div>
        
        
        <div class="flex flex-col">
           <x-button>Create Card</x-button>
        </div>

          
        
    
    </div>
</form>
    
         
    
     
</x-layout>