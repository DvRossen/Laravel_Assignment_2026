@props(['active' => false])
<a class="{{ $active ? 'text-green-500 hover:text-green-700': 'text-red-500 hover:text-red-700' }} "
{{ $attributes }}
>
{{ $slot }}
</a>