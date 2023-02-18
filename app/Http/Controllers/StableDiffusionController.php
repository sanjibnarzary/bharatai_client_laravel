<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StableDiffusionController extends Controller
{
    //
    
    
    public function prompt(Request $request){
        $prompt = $request->input('prompt');
        
        $url = "http://14.139.218.218:1230/prompt";
        $params = array (
                'prompt' => $prompt
            );
        $response = Http::post($url, $params);
        $response = json_decode($response);
        return view("text2image")->with([
            "image"=>$response->img,
            "prompt"=>$prompt,
        ]);
    }
}
