<?php

use App\Models\Role;
use App\Models\Service;
use App\Models\Town;
use App\Models\User;
use App\Models\Sex;
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
    return redirect('home');
});

Route::get('login', function () {
    return view('login', [
        'roles' => Role::all(),
    ]);
})->name('login');

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

Route::get('/services', function () {
    return view('services', [
        'services' => Service::all()
    ]);
})->name('services');

Route::post('/signup', function () {
    $attributes = request()->validate([
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|string|max:255|confirmed',
        'role_id' => 'required|integer|exists:roles,id'
    ]);

    $user = User::create($attributes);

    Auth::login($user);
    request()->session()->regenerate();

    return redirect('profcomplete');
});

Route::get('profcomplete', function () {
    return view('profcomplete', [
        'userrole' => Auth::user()->role_id,
        'sexes' => Sex::all(),
        'towns' => Town::all(),
        'services'=> Service::all(),
    ]);
});

Route::post('/profcomplete', function(){
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
Route::view('weare', 'weare')->name('weare');

Route::get('viewprofile', function () {
    return view('viewprofile', [
        'user' => Auth::user(),
    ]);
})->name('profile');

Route::get('services/{service:type}', function (Service $service) {
    return view('serviceUsers', [
        'service' => $service->type,
        'users' => User::whereRelation('role', 'type', 'Worker')->whereRelation('services', 'id', $service->id)->get()
    ]);
})->name('services.index');

Route::get('profile/{user}', function (User $user) {
    return view('profile', [
        'user' => $user
    ]);
})->name('services.profile');

Route::view('profile', 'profile');

Route::get('hired', function () {
    return view('hired');
})->name('hired');

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('notifications', function () {
    return view('notifications');
})->name('notifications');

Route::get('viewprofile', function () {
    return view('viewprofile');
})->name('viewprofile');


/*
Route::get('plans', function () {
    return view('plans',[
        'userrole' => Auth::user()->role_id,
   ]);
})->name('plans');
*/

Route::get('plans', function () {
    return view('plans');
})->name('plans');
