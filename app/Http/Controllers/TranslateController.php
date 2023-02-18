<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TranslateController extends Controller
{
    //
    public function translate(Request $request)
    {
        $src_text = $request->input('src_text');
        $src_language = $request->input('src_lang');
        $tgt_language = $request->input('tgt_lang');
        $url = "http://m2:8080/translate";
        $params = array (
                'src_text' => $src_text,
                'src_lang' => $src_language,
                'tgt_lang' => $tgt_language
            );
        $response = Http::post($url, $params);
        $response = json_decode($response);
        return view("translate")->with([
            "tgt_text"=>$response->tgt_text
        ]);
    }
}
