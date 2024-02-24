<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () { 
    return 'Hello World'; 
}); 
Route::get('/hello', function () { 
    return 'Hello World'; 
}); 

Route::get('/world', function () { 
    return 'World'; 
}); 

//Route::get('/', function () { 
//    return 'Selamat Datang'; 
//}); 

Route::get('/about', function () { 
    return 'Catur Wulan Ndari / 2141762111'; 
}); 

//    Route::get('/user/{name}', function ($name) { 
//    return 'Nama saya '.$name; 
//}); 

Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name; 
}); 
Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
}); 

Route::get('/user/profile', function () {
    // ...
})->name('profile');


//controller page
Route::get('index', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('article/{articleId}', [PageController::class,'articles']);
*/
//controller home 
Route::get('index', [HomeController::class,'selamat datang']);

//controller about
Route::get('/about', [AboutController::class,'about']);

//controller article
Route::get('article/{articleId}', [ArticleController::class,'articles']);

//resource controller
Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy']);

/*view
Route::get('/greeting', function(){
    return view('hello', ['name' => 'catur wulan ndari']);
});
*/

//view dalam direktori 
Route::get('/greeting', function(){
    return view('blog.hello', ['name' => 'catur wulan ndari']);
});
