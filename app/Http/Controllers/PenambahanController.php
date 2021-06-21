<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenambahanModel;

class PenambahanController extends Controller
{
    public function __construct()
    {
        $this->PenambahanModel = new PenambahanModel();
    }

    public function tambah(){
        $formData = [
            'items' => Request()->all()
        ];
        
        // $userData = UserData::get();
        // return json_encode(array('data'=>$userData));
        // var_dump($formData);
        return $formData;
    }
}
