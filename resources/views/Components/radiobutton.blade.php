@props(['value' => 1, 'edit' => false, 'cardType' => 0])

<div class="flex flex-col justify-center">
    <x-type :icon="$value"></x-type>
        <input type="radio" id="iconChoice{{ $value }}" name="type" value="{{ $value }}" 
        @if($edit)
            @if($cardType == $value)
            checked
            @endif
        @endif

    />
</div>