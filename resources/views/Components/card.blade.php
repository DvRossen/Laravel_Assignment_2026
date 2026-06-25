<!-- Wrapper -->
<div class="bg-red-500 w-[500px] h-[260px] mb-[2rem] mx-[1rem]">

<!-- Top Wrapper -->
    <div class=" flex bg-blue-500 rounded-xl w-full h-[200px] mb-[10px] overflow-hidden">

<!-- Left Side Wrapper -->
    <div class="w-[250px] h-full">
        <img src="{{ $image }}" class="bg-orange-500 w-full h-full "></img> <!-- chosen background here --> 
    </div>

<!-- Right Side Wrapper -->
    <div class="flex flex-col justify-between w-[250px] px-[1rem] py-[0.5rem]">

<!-- Title & Icon Wrapper -->
        <div class="flex border-b-3 justify-between h-[40px] items-center">
            <h2 class="line-clamp-1 text-2xl font-bold">{{ $title }}</h2> <!-- title here -->
            <img class="bg-purple-500 size-[30px] aspect 1/1"></img> <!-- chosen icon here --> 
        </div>

<!-- Description -->
        <div>
            <p class="line-clamp-4 ">
           {{ $description }}
            </p>
        </div>

<!-- Time & Date Wrapper -->
        <div class="flex justify-center border-t-3">
            <h3 class="text-2xl">Date</h3> <!-- chosen date here --> 
            <p class="text-2xl font-bold">&nbsp;•&nbsp;</p>
            <h3 class="text-2xl">Time</h3> <!-- chosen time here --> 
        </div>

    </div>
    </div>



<!--Bottom Wrapper -->
    <div class="flex bg-green-500 rounded-xl w-full h-[50px]">
        <div class="px-[1rem] h-full w-[250px] flex items-center">
            <img class="bg-purple-500 size-[30px] aspect-1/1"></img> <!-- crown/star/pencil (idk yet) here --> 
            <h3 class="line-clamp-2">{{ $author }}</h3> <!-- card owner here -->
        </div>
        <div class="pr-[1rem] h-full w-[250px] flex justify-between">
            <div class="flex items-center">
                <p class="text-2xl font-bold">#</p> <!-- number of atendees here -->
                <img class="bg-purple-500 size-[30px] aspect-1/1"></img> <!-- person svg here -->
                <h3 class=" text-xs line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci magnam quas quos at sint, dolorum cupiditate tempora culpa ipsam. Repudiandae, delectus. Sed ad est cum consequatur iste quam cumque consequuntur?</h3> <!-- Names of atendees here-->
            </div>
            <div class="flex items-center">
                <a href="/card/{{$id}}"> <!-- link per card here -->
                <img class="bg-purple-500 size-[30px] min-w-[30px] aspect-1/1 hover-click"></img>
                </a>
            </div>
        </div>
    </div>

</div>