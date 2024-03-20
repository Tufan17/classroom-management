<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //auth olmuş kullanıcının idsi
        $id=auth()->user()->id;
        return $id;

    }
}
