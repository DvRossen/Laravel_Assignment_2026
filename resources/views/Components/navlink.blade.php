@props(['active' => false, 'isAuthLink' => false])

<a

@if(!$isAuthLink) 
class="w-fit px-3 py-2 text-l text-white rounded hover:cursor-pointer active:bg-purple-500 {{ $active ? 'bg-purple-400 hover:bg-purple-500 ' : 'bg-purple-700 hover:bg-purple-500' }} "
@else
class="w-fit px-3 py-2 text-l text-white rounded hover:cursor-pointer active:bg-blue-600 {{ $active ? 'bg-blue-400 hover:bg-blue-300' : 'bg-blue-500 hover:bg-blue-400' }} "

@endif
{{ $attributes }}
>
{{ $slot }}
</a>
