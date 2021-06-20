<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomeModel extends Model
{
    public function allData()
    {
        //https://alexwebdevelop.com/php-json-backend/
        $fileName = 'data.json';
        $path = Storage::path($fileName);
        $file = Storage::disk('local')->get($fileName);
        $decodedJson = json_decode($file, true);

        return $decodedJson;

        // $json = 
        //         '
        //         {
        //         "Name": "Alex",
        //         "Age": 37,
        //         "Admin": true,
        //         "Contact": {
        //             "Site": "alexwebdevelop.com",
        //             "Phone": 123456789,
        //             "Address": null	
        //         },
        //         "Tags": [
        //             "php",
        //             "web",
        //             "dev"
        //         ]
        //         }
        //         ';
        // $jsonData = json_decode($json);

        // return $jsonData->Age;
                

    }
}
