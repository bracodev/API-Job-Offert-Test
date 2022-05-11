<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * User Form Request
 * @author Brayan Rincon <hi@bracodev.com>
 * @category FormRequest
 * @package App\Http\FormRequest
 */
class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required',
            'tdni' => 'required|in:passport,ssn,license,cid',
            'dni' => 'required|numeric|unique:users,dni|max:9999999999'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'tdni.in' => 'Possible values: [passport (Passport), cid (Identification card), license (License driver), ssn (Social Security)'
        ];
    }
}
