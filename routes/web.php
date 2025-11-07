<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/carer',function(){
    return view('carer');
});

Route::get('/comment',function(){
    return view('comment');
});
Route::get('/cv_info',function(){
    return view('cv');
})->name('cv_info');
Route::get('/product',function(){
    return view('product');
})->name('product');

Route::get('/links',function(){
    return view('links');
})->name('links');


Route::get('/back',function(){
    return back();
})->name('back');

Route::post('/send_cv',[MailController::class,'send'])->name('send_cv');
Route::get('/mail',function(){
    return view('emailtemplate');
});