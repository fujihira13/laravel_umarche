<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function shoeComponent1(){
        return view('tests.component-test1');
    }

    public function shoeComponent2(){
        return view('tests.component-test2');
    }
}
