<?php

namespace ErenMustafaOzdal\LaravelUserModule\Http\Requests\Auth;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'    => 'required|max:255',
            'last_name'     => 'required|max:255',
            'email'         => 'required|unique:users|email|max:255',
            'password'      => 'required|confirmed|min:6|max:255',
            'terms'         => 'required|in:1|accepted'
        ];
    }
}
