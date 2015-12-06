<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $fillable = ['name'];

    /**
    * Each category can be associated with one or more lists.
    *
    */
    public function lists()
    {
    	return $this->hasMany('App\Todolist');
    }

}
