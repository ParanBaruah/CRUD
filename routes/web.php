<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use Illuminate\Http\Request;

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
Route::resource('companies', CompanyCRUDController::class);
Route::get('get-all-session',function(){
    $session = session()->all();
    p($session);
});
Route::get('set-session',function(Request $request){
    $request->session()->put('name','Amazon');
    $request->session()->put('email','amazon@amazon.com');
    return redirect('get-all-session');
});
Route::get('destroy-session',function(){
    session()->forget('name');
    session()->forget('email');
    return redirect('get-all-session');
});
