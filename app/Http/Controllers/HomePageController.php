<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomePageController extends Controller
{
    public function index()
    {
        $array = [
            [
                'name' => 'samit',
                'company' => 'helloworld',

            ],


            [
                'name' => 'hello',
                'company' => 'helloworld',
            ],
        ];
        $data = 'samit  ';
        // dd($data); 
        // dd($array);
        return view('welcome')->with(['data' => $data, 'array' => $array]);
    }
}
