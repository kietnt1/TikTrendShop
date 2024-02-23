@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-3">
                <div class="position-relative rounded-1 overflow-hidden">
                    <x-form.input-image />
                    <p class="position-absolute bottom-0 left-0 right-0 text-center m-0 w-100 bg-dark bg-opacity-50 text-white py-1 ">sữa hình ảnh</p>
                </div>
            </div>
            <div class="col-9">
                <div class="m-0">
                    <x-form.input :name="'name-shop'" :lable="'tên cửa hàng'" maxlength="30" />
                </div>
                <div class="mt-3">
                    <x-form.input :name="'phone-number'" :lable="'số điện thoại'" maxlength="30" />
                </div>
                <div class="mt-4 row">
                    <div class="col-12 mb-2">
                        <div class="form-labe">chọ địa chỉ shop </div>
                    </div>
                    <div class="col-4">
                        <x-form.select :name="'address[]'" class="show-select-provinces">
                            <option selected>Tỉnh/TP</option>
                        </x-form.select>
                    </div>
                    <div class="col-4">
                        <x-form.select :name="'address[]'" :disabled="true" class="show-select-district">
                            <option selected>Quận/Huyện</option>
                        </x-form.select>
                    </div>
                    <div class="col-4">
                        <x-form.select :name="'address[]'" :disabled="true" class="show-select-wards">
                            <option selected>Phường/Xã</option>
                        </x-form.select>
                    </div>
                </div>
                <div class="mt-3">
                    <x-form.input :name="'address[]'" :lable="'địa chỉ chi tiết'" maxlength="30" />
                </div>
                <div class="mt-3">
                    <x-form.textarea :balde="'mổ tả'" :maxlength="250" :name="'description'" />
                </div>
                <button class="btn btn-primary mt-4" type="submit">lưu</button>
            </div>
        </form>
    </div>
@endsection
