@props(['method' => 'POST'])

<form {{ $attributes }} method="POST">
    @csrf
    @method($method)
    {{ $slot }}
</form>
