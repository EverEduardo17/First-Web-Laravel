<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


// = TIPOS DE PETICIONES =
//  Get: cuando nos dirigimos a un URL o hacemos click en un enlace y somos redirigidos
//  Post: peticiones que se hacen desde un formulario cuando queremos mandar información y bno queremos que sea visible 
//  Put, Patch: se tuliza cuando queremos actualizar un registro
//  Delete: cuando quremos eliminar un registro


//El orden de las rutas SI importa, ya que se analizan de forma descendente

// MIS RUTAS

// == Rutas utilizando controladores == 

// Solo se le pasa el controlador debido a que solo cuenta con un método (__invoke)
Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

// == Rutas con contenido variable ==

Route::get('/post/{post}', [PostController::class, 'show']);

//Route::get('/posts/{post}/{category}', [PostController::class, 'category']);

//Route::get('/posts/{post}/{category?}', [PostController::class, 'ifCategory']);



// == Rutas sin controladores (son los mismo de arriba) ==

/* 
Route::get('/posts',function(){
    return "Aqui se listaran todos los posts";
});
*/

/*  
Route::get('/posts/{post}', function($post){
    return "Aqui se mostrará el post {$post}";
});
*/

/*
Route::get('/posts/{post}/{category}', function($post, $category){
    return "Aqui se mostrará el post {$post } de la categoria {$category} ";
});
*/

/*
Route::get('/posts/{post}/{category?}', function($post, $category = null){

    if ($category) {
        return "Aqui se mostrará el post {$post} de la categoria {$category}";
    }

    return "Aqui se mostrará el post {$post}";
});
*/


///////////////////////////////


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
