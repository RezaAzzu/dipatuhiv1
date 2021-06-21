<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }

    public function index()
    {
        // $array = array("Product" => "Coffee", "Price" => 1.5);
        // $encodedArray =  json_encode($array, JSON_PRETTY_PRINT);

        // $data = [ 'item' => $encodedArray ];
        $tags = [];
        $industri = '';
        $pertanyaan = '';
        $jawaban = '';
        $data = [];
        $limit = 5;
        
        $decodedJson = [
            'items' => $this->HomeModel->allData($limit),
        ];
    
        // foreach ($data as $index => $element)
        // {
        //     $industri = $element['industri'];
        //     $pertanyaan = $element['pertanyaan'];
        //     $jawaban = $element['jawaban'];
        //     $tags = $element['tags'];

        // }

        // $data = [
        //     'item' => '',
        // ];

        return view('v_home', $decodedJson);
    }
}
