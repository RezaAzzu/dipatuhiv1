<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PencarianModel extends Model
{
    function getIndustri($kode)
    {
        $industri = "";
        switch ($kode) {
            case 1:
                $industri = "Asuransi dan Reasuransi";
            break;
            case 2:
                $industri = "Dana Pensiun";
            break;
            case 3:
                $industri = "Pembiayaan";
            break;
            case 4:
                $industri = "Pergadaian";
            break;
            case 5:
                $industri = "Modal Ventura";
            break;
            case 6:
                $industri = "Lembaga Keuangan Mikro";
            break;
            case 7:
                $industri = "Keuangan Khusus";
            break;
            default:
            $industri = "";
        };     
        return $industri;   
    }

    public function getData($data)
    {
        $results = [];

        $fileName = 'data.json';
        $path = Storage::path($fileName);
        $file = Storage::disk('local')->get($fileName);
        $decodedJson = json_decode($file, true);
        
        $industri = $this->getIndustri($data['inputIndustri']);
        $tags = explode(",", $data['inputTags']);
        $keywords = $data['inputKeywords'];

        $selectedArr = [];
        $count = 0;
        foreach ($decodedJson as $index => $element)
        {
            if ( $element['industri'] == $industri ){
                if( count( array_intersect( $element['tags'], $tags ) ) ){
                    if( !empty($keywords) ){
                        if( strpos($element['jawaban'], $keywords) !== false ){
                            $selectedArr[] = $element;                            
                        }
                    } else {
                        $selectedArr[] = $element;
                    }
                }
            }
        }
        return($selectedArr);
    }
}
