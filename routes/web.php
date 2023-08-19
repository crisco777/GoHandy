<?php

use App\Models\Role;
use App\Models\Town;
use App\Models\User;
use App\Models\Sex;

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

Route::get('login', function () {
    return view('login', [
        'roles' => Role::all(),
    ]);
});

Route::post('/login', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max:255',
        'password' => 'required|string|max:255'
    ]);

    if (Auth::attempt($attributes)) {
        request()->session()->regenerate();
        return redirect('home');
    }
    return back()->withErrors([
        'email' => 'No account found',
    ]);
});


/*Route::post('/logout', function () {
    Auth::logout();
    request()->session()->regenerate();
    return redirect('login');

}); */

Route::get('/home', function () {
    return view('home');
});

Route::post('/signup', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|string|max:255|confirmed',
        'role_id' => 'required|integer|exists:roles,id'
    ]);

    $user = User::create($attributes);

    Auth::login($user);
    request()->session()->regenerate();

    return redirect('editprofile');
});

Route::get('/editprofile', function () {
    return view('editprofile', [
        'userrole' => Role::all(),
        'sexes' => Sex::all(),
        'towns' => Town::all(),
    ]);
});

Route::post('/editprofile', function(){
    $attributes = request()->validate([
        'firstname'=> 'required|string|max:255',
        'lastname'=> 'required|string|max:255',
        'age'=> 'required|integer',
        'contact'=> 'required|integer|unique:users,contact',
        'sex_id' => 'required|integer|exists:sexes,id',
        'town_id'=>'required|integer|exists:towns,id',
        'address'=>'required|string|max:255',
    ]);

    Auth::user()->update($attributes);

    return redirect('home');
});

/*
    ESTO NO VA AQUI, SE OCUPA EN LA ULTIMA RUTA DONDE SE TERMINA DE LLENAR DATOS
    Auth::user()->finished = true;
    Auth::user()->save();
});

Route::get('/home', function () {
    if (Auth::user()->finished == false) {
        return redirect('role');
    }
});
*/
Route::view('weare', 'weare');

Route::view('viewprofile', 'viewprofile');

Route::view('carpenter', 'carpenter');

