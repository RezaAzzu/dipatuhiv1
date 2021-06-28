<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\PencarianModel;


class PenambahanModel extends Model
{
    public function setTopics($data)
    {
        $results = [];
        $tags = explode(',', $data['inputTags']);
        
        $fileName = 'topics.json';
        $path = Storage::path($fileName);
        $file = Storage::disk('local')->get($fileName);
        $decodedJson = json_decode($file, true);

        $newTopics = array_diff($tags, $decodedJson);
        // $newTopics = array($diffArr);
        $mergedTopics = array_merge($decodedJson, $newTopics);
        $newJsonString = json_encode($mergedTopics, JSON_PRETTY_PRINT);
        file_put_contents($path, stripslashes($newJsonString));
        // Storage::disk('local')->put($fileName, json_encode($decodedJson[0]) );

        // var_dump($decodedJson);
        // var_dump($newData);
        return ( $newTopics );
    }

    public function setData($data)
    {
        $results = [];

        $fileName = 'data.json';
        $path = Storage::path($fileName);
        $file = Storage::disk('local')->get($fileName);
        $decodedJson = json_decode($file, true);
        
        $pencarianModel = new PencarianModel();

        $industri = $pencarianModel->getIndustri($data['inputIndustri']);
        $tags = $data['inputTags'];
        $isi = $data['inputPertanyaan'];
        $jawaban = $data['inputJawaban'];
        $newData = array(
            'industri' => $industri, 
            'tags' => $tags, 
            'pertanyaan' => $isi, 
            'jawaban' => $jawaban
        );
        
        $decodedJson[] = $newData;
        $newJsonString = json_encode($decodedJson, JSON_PRETTY_PRINT);
        file_put_contents($path, stripslashes($newJsonString));

        // var_dump($decodedJson);
        // var_dump($newData);
        return ( array($newData) );
    }
}
