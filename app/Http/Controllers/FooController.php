<?php

namespace App\Http\Controllers;

use App\Repositories\FooRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FooController extends Controller
{
    /**
     * method injection
     *
     * if you need 1 time that need to FooRepository
     */
    public  function foo(FooRepository $repository){
        return $repository->get();
    }

    /**
     * construct injection
     *
     * if you have more than 1 method that need to FooRepository
     */
//    private $repository;
//
//    public function __construct(FooRepository $repository)
//    {
//        $this->repository = $repository;
//    }
//
//    public  function foo(){
//        return $this->repository->get();
//    }


//    private $repository;
//
//    public function __construct(FooRepository $repository)
//    {
//        $this->repository = $repository;
//    }
//
//    public  function foo(){
//        return $this->repository->get();
//    }

//    public  function foo(){
//        $repository = new \App\Repositories\FooRepository();
//        return $this->repository->get();
//    }

}
