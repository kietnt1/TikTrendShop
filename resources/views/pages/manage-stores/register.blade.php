@extends('layouts.app')
@section('content')
    <div class="container">
        <x-form.index :action="!empty($store['id']) ? route('manager.update.shop1', $store['slug']) : route('register.shop')" :class="'row g-3 needs-validation'" novalidate :method="!empty($store['id']) ? 'PUT' : 'POST'" :enctype="'multipart/form-data'">
            <div class="col-3">
                <div class="position-relative rounded-1 overflow-hidden">
                    <x-form.input-image :src="asset('images/default/shop.jpeg')" />
                    <p class="position-absolute bottom-0 left-0 right-0 text-center m-0 w-100 bg-dark bg-opacity-50 text-white py-1 ">sữa hình ảnh</p>
                </div>
            </div>
            <div class="col-9">
                <div class="m-0">
                    <x-form.input :name="'name_shop'" :lable="'tên cửa hàng'" maxlength="30" :value="$store['name'] ?? ''" />
                    @error('slug')
                        <div class="fs-6 text-danger ">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-3">
                    <x-form.input :type="''" :name="'phone_number'" :lable="'số điện thoại'" maxlength="30" :value="$store['phone'] ?? ''" />
                </div>
                @if (empty($store['id']))
                    <div class="mt-3">
                        <x-form.select-provinces />
                    </div>
                @endif
                <div class="mt-3">
                    <x-form.textarea :balde="'mổ tả'" :maxlength="250" :name="'description'" :value="$store['description'] ?? ''" />
                </div>
                <button class="btn btn-primary mt-4" type="submit">lưu</button>
            </div>
        </x-form.index>
    </div>
@endsection
