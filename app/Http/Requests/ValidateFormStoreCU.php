<?php

namespace App\Http\Requests;

use App\Models\Stores;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ValidateFormStoreCU extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        return true;
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->name_shop),
        ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $stores = Stores::where('slug', '=', $this->route('slug'))->first();
        $validate =  [
            'name_shop' => ['required', 'max:100'],
            'phone_number' => ['required', 'max:13', 'unique:stores,phone,' . $stores->id ?? 0],
            'slug' => ['unique:stores,slug,' . $stores->id ?? 0],
        ];
        if ($this->method() == 'POST') {
            $validate['address'] =  ['required', 'min:3'];
            $validate['address_detail'] = ['required'];
        }
        return $validate;
    }
    public function messages()
    {
        return [
            'name_shop.required' => 'không được để trống thông tin',
            'name_shop.max' => 'số ký tự tên shop đăng ký không vượt quá 100',
            'slug.unique' => 'shop đã tồn tại vui lòng đăng ký tên khác',
            'address.required' => 'thông tin địa chỉ không được để trống',
            'address.min' => 'vui lồng nhập đủ thông tin địa chỉ',
            'phone_number.required' => 'số điện thoại không được để trống',
            'phone_number.max' => 'không phải số điện thoại',
            'phone_number.unique' => 'số điện thoại đã được đăng ký',
            'address_detail.required' => 'vui lòng nhập chỉ tiết địa chỉ'
        ];
    }
}
