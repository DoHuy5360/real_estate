@props(['url'=>'','title','add_class'=>'', 'id'=>''])
<a href="{{ url($url) }}">
    <button type="button" id="{{ $id }}" class="component__button component__button--redirect {{ $add_class }}">
        {{ $slot }}
        <span>{{ $title }}</span>
    </button>
</a>
