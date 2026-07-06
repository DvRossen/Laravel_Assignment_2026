@props(['style' => ""])

<button 
type="submit"

@if($style == "danger")
class="w-fit px-3 py-2 text-l text-white rounded hover:cursor-pointer active:bg-red-600 bg-red-500 hover:bg-red-400"
@elseif($style == "auth")
class="w-fit px-3 py-2 text-l text-white rounded hover:cursor-pointer active:bg-blue-600 bg-blue-500 hover:bg-blue-400"
@else 
class="w-fit px-3 py-2 text-l text-white rounded hover:cursor-pointer active:bg-purple-600 bg-purple-500 hover:bg-purple-400"
@endif

{{ $attributes }}
>
{{ $slot }}
</button>

