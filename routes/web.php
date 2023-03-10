<?php

use App\Http\Controllers\StableDiffusionController;
use App\Http\Controllers\TranslateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/translate', function () {
    return view("translate")->with([
        "src_text"=>"Just a test.",
        "tgt_text"=>"",
        "src_lang"=>"",
        "tgt_lang"=>"hin_Deva"
    ]);
})->middleware(['auth'])->name('translate');

Route::post('/translate',[TranslateController::class, 'translate'])->middleware(['auth']);
Route::get('/prompt', function () {
    return view("text2image")->with([
        "image"=>"019344c6886bc69e368a16c5a913b785.png",
        "prompt"=>"A picture of an astronaut in space.",
    ]);
})->middleware(['auth']);
Route::post('/prompt',[StableDiffusionController::class, 'prompt'])->middleware(['auth'])->name('prompt');
require __DIR__.'/auth.php';
