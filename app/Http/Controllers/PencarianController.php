<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PencarianModel;

class PencarianController extends Controller
{
    public function __construct()
    {
        $this->PencarianModel = new PencarianModel();
    }

    public function pencarianForm()
    {
        $results = [];
        $results = [
            'topics' => $this->PencarianModel->getTopik()
        ];
        return view('v_pencarian',$results);
    }

    public function cari()
    {
        $formData = [
            'items' => Request()->all()
        ];
        // var_dump($formData);
        $results = [
            'items' => $this->PencarianModel->getData($formData['items']),
        ];
        // print_r($decodedJson['items']);
        // echo '<br/>';
        // echo $decodedJson['items']['industri'];
        // return view('v_home', $decodedJson);        
        return view('v_hasilPencarian', $results);
    }
}