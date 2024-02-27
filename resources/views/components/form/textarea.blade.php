@props(['lable' => '', 'value' => '', 'id' => ''])
<div>
    <label class="form-label" for="{{ $id }}"> {{ $lable }}</label>
    <textarea class="form-control" {{ $attributes }} id="{{ $id }}">{{ $value }}</textarea>
</div>
