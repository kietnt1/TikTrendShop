@props(['lable' => '', 'id', 'type' => 'text', 'name'])

<label for="{{ $id ?? '' }}" class="form-label">{{ $lable }}</label>
<input type="{{ $type }}" class="form-control" id="{{ $id ?? '' }}" name="{{ $name }}" {{ $attributes }}>
@error($name)
    <div class="fs-6 text-danger ">
        {{ $error }}
    </div>
@enderror
