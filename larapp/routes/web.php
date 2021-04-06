<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use Carbon\Carbon;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;

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


Route::get('hello', function () {
    return "<h1> Hello! Mcds :)</h1>";
});

Route::get('showusers', function () {
    $users= App\Models\User::take(5)->get();
    dd($users);
});

Route::get('showuser/{id}', function (Request $request) {
    $id = $request->id;
    $user = App\Models\User::find($id);
    return view('showuser')->with('user', $user);
});

Route::get('challenge', function () {

    foreach(App\Models\User::all()->take(10) as $user) {
        $years     = Carbon::createFromDate($user->birthdate)->diff()->format('%y years old');
        $since     = Carbon::parse($user->created_at);
        $results[] = $user->fullname . " - " . $years . " - created " . $since->diffForHumans() . "<br>";
    }
    dd($results);
});

Route::get('examples',function(Request $request){
    $users = App\Models\User::all();
    $games= App\Models\Game::all();
  ///  dd($user);
    return view('examples')->with('users', $users);
});


Route::get('viewusers', function() {
    $users = App\Models\User::all();
    return view('viewusers')->with('users', $users);
});
route::get('examples_2',function(){
return view('examples_2');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('locale/{locale}', [App\Http\Controllers\LocaleController::class, 'index'] );

Route::post('users/search', [UserController::class, 'search']);
Route::post('categories/search', [CategoryController::class, 'search']);

Route::resources([

    'users' => UserController::class,
    'categories' => CategoryController::class,
    //'game' => GameController::class,
]);


