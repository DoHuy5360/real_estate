@props(['title', 'form'=>'', 'style'=>'simple', 'id'=>''])
<button type="submit" id="{{ $id }}" form="{{ $form }}" class='component__button {{ $style }}' >
    {{ $slot }}
    <span>{{ $title }}</span>
</button>
