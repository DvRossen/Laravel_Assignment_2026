<!-- Wrapper -->
<div class="w-[500px] h-[260px] mb-[2rem] mx-[1rem]">

<!-- Top Wrapper -->
    <div class="flex border-1 border-gray-400 bg-orange-100 rounded-xl w-full h-[200px] mb-[10px] overflow-hidden">

<!-- Left Side Wrapper -->
    <div class="w-[250px] h-full">
        <img src="{{ $image }}" class="bg-orange-500 w-full h-full "></img> <!-- chosen background here --> 
    </div>

<!-- Right Side Wrapper -->
    <div class="flex flex-col justify-between w-[250px] px-[1rem] py-[0.5rem]">

<!-- Title & Icon Wrapper -->
        <div class="flex border-b-3 justify-between h-[40px] items-center">
            <h2 class="line-clamp-1 text-2xl font-bold mr-2">{{ $title }}</h2> <!-- title here -->
            <x-type :icon="$type"></x-type>
        </div>

<!-- Description -->
        <div>
            <p class="line-clamp-4 ">
           {{ $description }}
            </p>
        </div>

<!-- Time & Date Wrapper -->
        <div class="flex justify-center border-t-3">
            <?php
            $datetimeValue = new DateTime($datetime);
            $date = $datetimeValue->format('d-m-Y');
            $time = $datetimeValue->format('H:i')
                ?>
            <h3 class="text-2xl"><?= $date ?></h3> <!-- chosen date here --> 
            <p class="text-2xl font-bold">&nbsp;•&nbsp;</p>
            <h3 class="text-2xl"><?= $time ?></h3> <!-- chosen time here --> 
           
        </div>

    </div>
    </div>



<!--Bottom Wrapper -->
    <div class="flex border-1 border-gray-400 bg-orange-100 rounded-xl w-full h-[50px]">
        <div class="px-[1rem] h-full w-[250px] flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 -960 960 960" 
                class="fill-black w-[30px] h-[30px] mr-2">
                    <path d="m490-527 37 37 217-217-37-37-217 217ZM200-200h37l233-233-37-37-233 233v37Zm355-205L405-555l167-167-29-29-219 219-56-56 218-219q24-24 56.5-24t56.5 24l29 29 50-50q12-12 28.5-12t28.5 12l93 93q12 12 12 28.5T828-678L555-405ZM270-120H120v-150l285-285 150 150-285 285Z"/>
                </svg>
            <h3 class="line-clamp-2 font-bold">{{ $author }}</h3> <!-- card owner here -->
        </div>
        <div class="pr-[1rem] h-full w-[250px] flex justify-between">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 -960 960 960" 
                class="fill-black min-w-[30px] min-h-[30px] mr-2">
                    <path d="M446-80q-15 0-30-6t-27-18L103-390q-12-12-17.5-26.5T80-446q0-15 5.5-30t17.5-27l352-353q11-11 26-17.5t31-6.5h287q33 0 56.5 23.5T879-800v287q0 16-6 30.5T856-457L503-104q-12 12-27 18t-30 6Zm0-80 353-354v-286H513L160-446l286 286Zm253-480q25 0 42.5-17.5T759-700q0-25-17.5-42.5T699-760q-25 0-42.5 17.5T639-700q0 25 17.5 42.5T699-640ZM480-480Z"/>
                </svg>                
                    <h3 class=" text-xs line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci magnam quas quos at sint, dolorum cupiditate tempora culpa ipsam. Repudiandae, delectus. Sed ad est cum consequatur iste quam cumque consequuntur?</h3> <!-- Names of atendees here-->
            </div>
            <div class="flex items-center">
                <a class="size-[30px] min-w-[30px] hover:pointer" href="/card/{{$id}}"> <!-- link per card here -->
                <svg xmlns="http://www.w3.org/2000/svg"  
                    viewBox="0 -960 960 960" 
                    class=" w-[30px] h-[30px] fill-black hover:fill-purple-600">
                        <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/>
                </svg>
                </a>
            </div>
        </div>
    </div>

</div>