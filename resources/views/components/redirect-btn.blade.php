@props(['url','title','add_class'=>''])
<a href="{{ url($url) }}">
    <button type="button" class="component__button component__button--redirect {{ $add_class }}">
        {{ $slot }}
        <span>{{ $title }}</span>
    </button>
</a>
