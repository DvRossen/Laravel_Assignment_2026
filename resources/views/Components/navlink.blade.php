@props(['active' => false])
<a class="{{ $active ? 'text-green-500': 'text-red-500' }}"
{{ $attributes }}
>
{{ $slot }}
</a>