<div class="provinces">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="form-labe">Địa nhận nhận hàng</div>
        </div>
        <div class="col-4">
            <x-form.select :name="'address[]'" class="show-select-provinces">
                <option value="" selected> Tỉnh/TP </option>
                @foreach ($provinces as $province)
                    <option value="{{ $province['name'] ?? '' }}" data-id="{{ $province['id'] }}" {{ !empty($_GET['id_provinces']) && $_GET['id_provinces'] == $province['id'] ? 'selected' : '' }}>{{ $province['name'] }}</option>
                @endforeach
            </x-form.select>
        </div>
        <div class="col-4">
            <x-form.select :name="'address[]'" :disabled="count($districts) > 0 ? false : true" class="show-select-district">
                <option value="" selected>Quận/Huyện</option>
                @foreach ($districts as $district)
                    <option value="{{ $district['name'] ?? '' }}" data-id="{{ $district['id'] }}" {{ !empty($_GET['id_district']) && $_GET['id_district'] == $district['id'] ? 'selected' : '' }}>{{ $district['name'] }}</option>
                @endforeach
            </x-form.select>
        </div>
        <div class="col-4">
            <x-form.select :name="'address[]'" :disabled="count($wards) > 0 ? false : true" class="show-select-wards">
                <option value="" selected>Phường/Xã</option>
                @foreach ($wards as $ward)
                    <option value="{{ $ward['name'] ?? '' }}" data-id="{{ $ward['id'] }}">{{ $ward['name'] }}</option>
                @endforeach
            </x-form.select>
        </div>
        <div class="col-12">
            @error('address')
                <div class="fs-6 text-danger ">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="mt-3">
        <x-form.input :name="'address_detail'" :lable="'địa chỉ chi tiết'" maxlength="255" />
    </div>
</div>

@push('scripts')
    <script>
        const provinces_url = "{{ route('components.render-provinces') }}";
    </script>
@endpush
