<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenambahanModel;
use App\Models\HomeModel;
use Log;

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

        // $input = $request->all();
          
        // Log::info($input);
        $results = [
            'items' => $this->PenambahanModel->setData( $formData['items'] )    
        ];
        // $results = $this->PenambahanModel->setData( $formData['items'] );
        // $userData = UserData::get();
        // return json_encode(array('data'=>$userData));
        // var_dump($formData);
        // var_dump($input);
        // return response()->json(['success'=>'Got Simple Ajax Request.']);
        // echo $results['items']['industri'];
        // var_dump($results['items']);
        // var_dump($results);
        // echo $results['items']['industri'];
        
        return view('v_hasilPenambahan', $results);

    }
}
