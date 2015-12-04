<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCourseRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() // FIXME
    {
        if(user->role === 'admin', 'staff', 'supporter', 'professor')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'owner' => 'required',
            'class' => 'required',
            'genre' => 'required',
            'title' => 'required',
            'body' => 'required',
            'published_at' => 'required|date',
        ];
    }
}
