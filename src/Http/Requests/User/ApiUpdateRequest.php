<?php

namespace ErenMustafaOzdal\LaravelUserModule\Http\Requests\User;

use App\Http\Requests\Request;
use Sentinel;

class ApiUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Sentinel::getUser()->is_super_admin || Sentinel::hasAccess('api.user.update')) {
            return true;
        }
        return false;
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
            'slug'          => 'email|max:255|unique:users,slug,'.$this->segment(3), // id
            'password'      => 'confirmed|min:6|max:255',
            'photo'         => 'max:5120|image|mimes:jpeg,jpg,png',
            'x'             => 'integer',
            'y'             => 'integer',
            'width'         => 'integer',
            'height'        => 'integer',
            'permissions'   => 'array',
        ];
    }
}
