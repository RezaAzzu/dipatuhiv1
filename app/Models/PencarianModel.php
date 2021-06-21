<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PencarianModel extends Model
{
    private function getIndustri($kode)
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
        // $tags = array($data['inputTags']);
        $tags = explode(",", $data['inputTags']);
        $keywords = $data['inputKeywords'];
        // echo $data['inputTags'];
        // print_r($data['inputTags']);
        // var_dump($tags);
        // foreach ($data as $index => $element)
        // {
        //     // $industri = $element['industri'];
        //     // $pertanyaan = $element['pertanyaan'];
        //     // $jawaban = $element['jawaban'];
        //     // $tags = $element['tags'];

        //     // if($industri = $element['inputIndustri']){
        //     //     echo 'seblak';
        //     // }
        //     echo $index . ' ' . $element . '</br>';
        //     // print_r($data);
        // }
        $selectedArr = [];
        $count = 0;
        foreach ($decodedJson as $index => $element)
        {
            // echo $element['industri'];
            if ( $element['industri'] == $industri ){
                if( count( array_intersect( $element['tags'], $tags ) ) ){
                    echo '<br/>' . ++$count . '<br/>';
                    echo $element['pertanyaan'] . '<br/>';
                    // $selectedArr = array_merge( $selectedArr, $element );
                    $selectedArr[] = $element;
                    // print_r($selectedArr);
                }
            }
        }
        // print_r($selectedArr);
        return($selectedArr);
    }
}
