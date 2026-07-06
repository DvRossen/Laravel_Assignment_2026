@props(['active' => false])
<a class="px-3 py-2 text-l text-white  rounded hover:cursor-pointer active:bg-blue-600 {{ $active ? 'bg-blue-400 hover:bg-blue-500 ' : 'bg-blue-600 hover:bg-blue-500' }} "
{{ $attributes }}
>
{{ $slot }}
</a>