<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionContextPass;

class PostController extends Controller
{
    public function index()
    {
        return view('MyViews.posts.index');
    }

    public function create()
    {
        return view('MyViews.posts.create');
    }

    /*Para poder mostrar el contenido de "$post" en la vista
    creamos un arreglo en el metodo para que la variable "post"
    este disponible en la vista y a su vez le 
    otorgamos en valor de lo que recibe "$post"
    */
    public function show($post)
    {

        return view('MyViews.posts.show',compact('post'));

        /* Lo de arriba es una forma simplificada de hacerlo
            ya que la funcion "compact" genera internamente el 
            array y le asigna el valor de '$post' a la variable post
    
            return view('MyViews.posts.show', [
            'post' => $post
        ]);
        */
    }

    /*
    public function category($post, $category)
    {
        return "Aqui se mostrará el post {$post} de la categoria {$category}";
    }

    public function ifCategory($post, $category = null)
    {
        if ($category) {
            return "Aquí se mostrará el post {$post} de la categoria {$category}";
        }

        return "Aquí se mostrará el post {$post}";
    }
        */
}
