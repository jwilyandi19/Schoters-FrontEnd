<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalizeController extends Controller
{
    public function home() {
        $jsonData = file_get_contents("https://private-90552-schoterspersonal.apiary-mock.com/categories");
        $result = json_decode($jsonData);
        return view('welcome', ["data" => $result]);
    }
}
