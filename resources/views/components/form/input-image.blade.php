@props(['src' => '', 'alt' => ''])
<label {{ $attributes->class(['d-block', 'overflow-hidden'])->style(['cursor: pointer;']) }}>
    <div class="show-image ">
        <img class="img-fluid  w-100" src="{{ $src }}" alt="{{ $alt }}">
    </div>
    <input type="file" hidden accept="image/*" class="upload-image">
</label>
@vite('resources/js/form.js')
