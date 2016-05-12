<?php

/**
 * An example Custom Request class for the package.
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */

namespace Package\Application\Http\Requests;

use App\Http\Requests\Request;

class PackageRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|max:255|min:4'
        ];
    }

}
