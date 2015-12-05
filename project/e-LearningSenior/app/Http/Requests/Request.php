<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @param string $pattern
	 * @return bool
	 * @author Francisco Maria Calisto
	 */
    public function is($pattern)
    {
    	foreach(func_get_args() as $pattern)
    	{
    		if(str_is($pattern, $this->path()))
    		{
    			return true;
    		}
    	}

    	return false;
    }

}
