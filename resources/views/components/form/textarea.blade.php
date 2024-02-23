@props(['balde' => '', 'value' => '', 'id' => ''])
<div>
    <label class="form-label" for="{{ $id }}"> {{ $balde }}</label>
    <textarea class="form-control" {{ $attributes }} id="{{ $id }}">{{ $value }}</textarea>
</div>
