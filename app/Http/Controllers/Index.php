<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Index extends Controller
{

    public function index(){
        $data = [
            'user'=> [
                'user1'=> 'admin',
                'pwd1'=> '123456',
            ],
            'pwd'=> '123456',
        ];
        return view('welcome', $data);
    }
}
