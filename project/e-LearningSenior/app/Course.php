<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
    	'title',
    	'body',
    	'published_at'
    ];

    protected $dates = ['published_at'];

    public function scopePubliched($query)
    {
    	// $query->where('published_at', '<=', Carbon::now()); // FIXME
    }

    public function scopeUnpubliched($query)
    {
    	// $query->where('published_at', '>=', Carbon::now()); // FIXME
    }

    public function setPublishedAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

}
