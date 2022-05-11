<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Job Offert Form Request
 * @author Brayan Rincon <hi@bracodev.com>
 * @category FormRequest
 * @package App\Http\FormRequest
 */
class JobOffertRequest extends FormRequest
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
            'name' => 'required|max:200',
            'description' => 'nullable|max:2000',
            'status' => 'boolean',
        ];
    }
}
