<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\Attributes\Node\Attributes;

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

Route::view('/login', 'login', [
    'roles' => Role::all(),
])->name('login');

Route::post('/login', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max:255',
        'password' => 'required|string|max:255'
    ]);
    if (Auth::attempt($attributes)) {
        request()->session()->regenerate();
        return redirect('logout');
    }
    return back()->withErrors([
        'email' => 'No account found',
    ]);
});


/*Route::post('/logout', function () {
    Auth::logout();
    request()->session()->regenerate();
    return redirect('login');

});

Route::get('/logout', function () {
    return view('logout', [
        'user' => Auth::user(),
    ]);
})->middleware('auth');*/

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/editprofile', function () {
    return view('editprofile', [
        'userrole' => Auth::user()->role->type,
    ]);
});

/*
Route::post('/role', function () {
    $attributes = request()->validate([
        'role_id' => 'required|integer|exists:roles,id'
    ]);

    Auth::user()->fill($attributes)->save();

    return redirect();
};

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
Route::post('/userdata', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|string|max:255|confirmed',
        'role_id' => 'required|integer|exists:roles,id'
    ]);

    Auth::user()->update($attributes);

    return redirect('home');
});
