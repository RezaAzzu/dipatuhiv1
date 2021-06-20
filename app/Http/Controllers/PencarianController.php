<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PencarianModel;
use App\Models\HomeModel;

class PencarianController extends Controller
{
    public function __construct()
    {
        $this->PencarianModel = new PencarianModel();
    }

    public function cari()
    {
        $formData = [
            'items' => Request()->all()
        ];

        $results = [
            'items' => $this->PencarianModel->getData($formData['items']),
        ];
        // print_r($decodedJson['items']);
        // echo '<br/>';
        // echo $decodedJson['items']['industri'];
        // return view('v_home', $decodedJson);

        
        return view('v_hasilPencarian');
    }
}