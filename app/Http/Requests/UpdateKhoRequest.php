<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKhoRequest extends FormRequest
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
			'ten' => 'required',
			'diachi' => 'required',
			'sdt' => 'required',
			'lienhe' => 'required',
			'quanly' => 'required',
			'ghichu' => 'required',
        ];
    }
    
	public function messages()
	{
		return [
			'ten.required' =>'Vui lòng nhập tên',
			'diachi.required' =>'Vui lòng nhập địa chỉ'
		];
	}
}
