<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKhuVucRequest extends FormRequest
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
        ];
    }
    
	public function messages()
	{
		return [
			'ma.required' => 'Vui lòng nhập mã',
			'ma.unique' => 'Mã khu vực đã tồn tại !',
			'ten.required' =>'Vui lòng nhập tên',
		];
	}
}
