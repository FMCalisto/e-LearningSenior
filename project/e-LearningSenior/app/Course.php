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

    public function scopePublished($query)
    {
    	// $query->where('published_at', '<=', Carbon::now()); // FIXME
    }

    public function scopeUnpublished($query)
    {
    	// $query->where('published_at', '>=', Carbon::now()); // FIXME
    }

    public function setPublishedAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    // Um curso tem um owner
    // public function owner()
    // {
    //     return $this->belongsTo('App\Owner');
    // }


    // Um curso tem varios users
    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
