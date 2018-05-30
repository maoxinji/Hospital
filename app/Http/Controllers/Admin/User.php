<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redis;
use Illuminate\Http\Request;

class User extends Controller
{
    
    public function index(Request $request){
      
        $environment = \App::environment('local');

        dump($environment);
    }


    public function add(){
        var_dump(1);exit;
    }

}
