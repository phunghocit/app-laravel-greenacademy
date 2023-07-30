<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNhaPhanPhoiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'ma' => 'required|unique',
			'ten' => 'required',
			'kv_id' => 'required',
			'diachi' => 'required',
			'sdt' => 'required',
			'email' => 'required',
			'taikhoan' => 'required',
			'nhanviendaidien' => 'required',
        ];
    }
}
