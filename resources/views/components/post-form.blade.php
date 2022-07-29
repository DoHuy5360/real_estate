@props(['hidden_inputs'=>[], 'url', 'id'])
<form action={{ url($url) }} id={{ $id }} method="POST">
    @csrf
    @foreach ($hidden_inputs as $name => $value)
        <input type="hidden" name="{{ $name }}" value="{{ $value }}">
    @endforeach
    {{ $slot }}
</form>
