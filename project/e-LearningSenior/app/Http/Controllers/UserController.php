<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function user(/*UserRepository $repository*/)
    {
        // $repository = new \App\Repositories\UserRepository();

        return $this->repository->get();

        // return $repository->get();
    }

}
