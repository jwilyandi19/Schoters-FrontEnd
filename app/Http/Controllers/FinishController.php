<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinishController extends Controller
{
    public function post(Request $request) {
        var_dump($request->input("result"));
        return redirect()->route('done',[$request]);
    }

    public function done() {
        return view('finish');
    }
}
