@props(['lable' => '', 'id', 'type' => 'text', 'name', 'value' => ''])
<label for="{{ $id ?? '' }}" class="form-label ">{{ $lable }}</label>
<input type="{{ $type }}" class="form-control" id="{{ $id ?? '' }}" name="{{ $name }}" {{ $attributes }} value="{{ $value ?? old($name) }}">
@error($name)
    <div class="fs-6 text-danger ">
        {{ $message }}
    </div>
@enderror
