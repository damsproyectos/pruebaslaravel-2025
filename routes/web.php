<?php

// use App\Http\Controllers\Dashboard\CategoryController;
// use App\Http\Controllers\Dashboard\PostController;

use App\Http\Middleware\UserAccessDashboardMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});

// Route::group(['prefix' => 'dashboard'], function () {
// Route::group(['prefix' => 'dashboard', 'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified', UserAccessDashboardMiddleware::class]], function () {
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth:sanctum', config('jetstream.auth_session'), UserAccessDashboardMiddleware::class]], function () {
    Route::resources([
        'post' => App\Http\Controllers\Dashboard\PostController::class,
        'category' => App\Http\Controllers\Dashboard\CategoryController::class,
    ]);

    // Route::get('/dashboard', function () {
    Route::get('', function () {
        return view('dashboard');
    })->name('dashboard');

});



///////////////Recurso de rutas compacta//////////////////////////////
// Route::resource('post', PostController::class);

///Rutas tipo recursp 1era forma con prefijo
// Route::group(['prefix' => 'dashboard'], function() {
//     Route::resource('post', PostController::class);
//     // Route::resource('category', CategoryController::class);
// });

///Rutas tipo recurso agrupadas 2da forma con prefijo
// Route::group(['prefix' => 'dashboard'], function() {
//     Route::resources([
//         'post' => PostController::class,
//         'category' => CategoryController::class,
//     ]);
// });

/////////////////Rutas agrupados///////////
// Route::get(PostController::class)->group(function () {
//     Route::get('post', 'index')->name("post.index");
//     Route::get('post/{post}', 'show')->name("post.show");
//     Route::get('post/create', 'create')->name("post.create");
//     Route::get('post/{post}/edit', 'edit')->name("post.edit");

//     Route::post('post', 'store')->name("post.store");
//     Route::put('post/{post}', 'update')->name("post.update");
//     Route::destroy('post/{post}', 'delete')->name("post.destroy");
// });


/////////////////Sin agrupación de rutas///////////
// Route::get('post', [PostController::class, 'index'])->name("post.index");
// Route::get('post/{post}', [PostController::class, 'show'])->name("post.show");
// Route::get('post/create', [PostController::class, 'create'])->name("post.create");
// Route::get('post/{post}/edit', [PostController::class, 'edit'])->name("post.edit");

// Route::post('post', [PostController::class, 'store'])->name("post.store");
// Route::put('post/{post}', [PostController::class, 'update'])->name("post.update");
// Route::destroy('post/{post}', [PostController::class, 'delete'])->name("post.destroy");


//////////Rutas con Prefijo//////////////////////////////
// Route::group(['prefix' => 'dashboard'], function () {
//     Route::resource('post', PostController::class);
//     Route::resource('category', CategoryController::class);
// });


//////Rutas de tipo Recurso//////////
// Route::resources([
//     'post' => PostController::class,
//     'category' => CategoryController::class,
// ]);

///Ejemplo Básico
// Route::get('/crud', function(){
//     $age = 33;
//     // $data = ['name' => 'Andres', 'age' => $age];   //Clave o key = name y el valor = Andres // Clave o key = age y el valor = $age
//     // return view('crud.index', $data);
//     return view('crud.index', ['name' => 'Andres', 'age' => $age]);  //Clave o key = name y el valor = Andres // Clave o key = age y el valor = $age
// })->name('crud');


///Ejemplo Básico 2
// Route::get('/contact', function() {
//     return view('contact', ['name' => 'Andres']);  //Clave o key = name y el valor = Andres //La clave es la varaibale que colocamos en la vista
// })->name('contact');

///Ejemplo Básico 3
// Route::get('/contact', function() {
//     return view('contact', ['name' => 'Andres']);  //Clave o key = name y el valor = Andres //La clave es la varaibale que colocamos en la vista
// })->name('contact');
