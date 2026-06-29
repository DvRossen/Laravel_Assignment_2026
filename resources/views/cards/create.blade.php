<x-layout>
    <x-slot:header>
        <h1 class="text-4xl font-bold underline">Create</h1>
    </x-slot:header>
    <form method="POST" action="/cards"> 
        @csrf
    <div class="flex flex-col gap-y-[2rem] max-w-[50vw]">
       
            <div class="flex flex-col">
            <label for="title">Title:</label>
            <input placeholder="Title of activity"  type="text" name="title" id="title" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
        </div>
        <div class="flex flex-col">
            <label for="description">Description:</label>
            <textarea placeholder="What is this activity about?" rows="3" type="text" name="description" id="description" class="border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500"></textarea>
        </div>
          <div class="flex flex-col">
            <label for="type">Type</label>
            <input max="8" min="1"  type="number" name="type" id="type" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
        </div>
          <div class="flex flex-col">
            <label for="imageUrl">Image:</label>
            <input placeholder="img URL"  type="text" name="imageUrl" id="imageUrl" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
        </div>
          <div class="flex flex-col">
            <label for="title">Date:</label>
            <input placeholder="Time and Day"  type="datetime-local" name="date" id="date" class="max-w-[25vw] border-1 border-gray-700 rounded-xs hover:bg-gray-100 focus:border-blue-500">
        </div>
        
        <div class="flex flex-col">
            <button type="submit" class="max-w-[25vw] text-white bg-blue-500 rounded-xs hover:bg-blue-400 active:bg-blue-600 cursor-pointer">Submit</button>
        </div>
    
    </div>
</form>
    
         
    
     
</x-layout>