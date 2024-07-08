<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:Users,email',
            'city'=>'required'
        ];
    }
    // public function messages()
    // {
    //     return [
    //         "email.required"=>"email ka bagar entry mana ha na ",
    //     ] ;
    // }
    public function attributes()
    {
        return[
            'name'=>'Name',
            'email'=>'Emmail Adress',
            'city'=>'city'
        ];
    }
}
