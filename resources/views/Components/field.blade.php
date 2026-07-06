@props(['style' => ''])

<div

@if($style == 'notice')
class="flex mt-4 flex-col items-center px-3 py-2 rounded border-2 border-red-500 border-dashed bg-yellow-100 h-min w-fit"
@else
class="flex mt-4 flex-col items-center px-3 py-2 rounded border-1 border-gray-300 bg-gray-100 h-min w-[80vw]" 
@endif
>
{{ $slot }}
</div>

