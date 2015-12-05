<?php namespace App\Repositories

class UserRepository
{
	public function get()
	{
		return User::all();
	}
}