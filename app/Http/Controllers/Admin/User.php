<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redis;

class User extends Controller
{
    
    public function index(){
        Redis::set('name', 'Taylor');

        $values = Redis::get('name');

        var_dump($values);exit;
    }

}
