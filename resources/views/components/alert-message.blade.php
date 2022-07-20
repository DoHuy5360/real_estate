@props(['message','color'])
<div style="--color: {{ $color }}" class="toast__message">
    <div class="toast__icon">
        {{ $slot }}
    </div>
    <div class="toast__text">
        <div class="toast__title">Note</div>
        <div class="toast__description">{{ $message }}</div>
    </div>
</div>
