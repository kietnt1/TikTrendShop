@props(['src' => '', 'alt' => ''])
<label class="d-block" for="thumbaile-shop" style="cursor: pointer;">
    <div class="show-image ">
        <img class="img-fluid  w-100" src="{{ $src }}" alt="{{ $alt }}">
    </div>
    <input id="thumbaile-shop" type="file" hidden accept="image/*" class="upload-image">
</label>
@vite('resources/js/form.js')
