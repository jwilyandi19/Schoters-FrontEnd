<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinishController extends Controller
{
    public function home() {
        //var_dump($request);
        return view('finish');
    }
}
