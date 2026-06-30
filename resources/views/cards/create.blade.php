<x-layout>
    <x-slot:header>
        <h1 class="text-4xl font-bold underline">Create</h1>
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
            <label for="type">Type<span class="text-red-400 font-bold">*</span></label>
            <input required max="8" min="1"  type="number" name="type" id="type" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
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
            <button type="submit" class="max-w-[25vw] text-white bg-blue-500 rounded-xs hover:bg-blue-400 active:bg-blue-600 cursor-pointer">Submit</button>
        </div>

          
        
    
    </div>
</form>
    
         
    
     
</x-layout>