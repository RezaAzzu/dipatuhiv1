<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $array = array("Product" => "Coffee", "Price" => 1.5);
        $encodedArray =  json_encode($array, JSON_PRETTY_PRINT);

        $data = [ 'item' => $encodedArray ];
        return view('v_home', $data);
    }
}
