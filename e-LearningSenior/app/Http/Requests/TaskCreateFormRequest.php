<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskCreateFormRequest extends Request {

    public function rules()
    {
        return [
          'name' => 'required',
          'due' => 'required'
        ];
    }

    public function authorize()
    {
      return true;
    }

}
