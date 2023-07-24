<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function (){
    return view('login');
})->name('login');

Route::post('/login', function( ) {
    $attributes= request()->validate([
        'email'=> 'required|max:255',
        'password'=> 'required|max:255'
    ]);
    if(Auth::attempt($attributes)) {
        request()->session()->regenerate();
        return redirect('logout');
    }
    return back()->withErrors([
        'email'=>'No account found',
    ]);
});


Route::get('/signup', function (){
    return view('signup');

});

Route::post('/signup', function(){

}
);

