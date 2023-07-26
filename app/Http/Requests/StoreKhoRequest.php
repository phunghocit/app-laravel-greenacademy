<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKhoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'ma' => 'required|unique:kho,kho_ma',
			'ten' => 'required',
			'diachi' => 'required'
        ];
    }
    
	public function messages()
	{
		return [
			'ma.required' => 'Vui lòng nhập mã',
			'ma.unique' => 'Mã kho đã tồn tại !',
			'ten.required' =>'Vui lòng nhập tên',
			'diachi.required' =>'Vui lòng nhập địa chỉ'
		];
	}
}
