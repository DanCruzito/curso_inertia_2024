<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoriaController extends Controller
{
    //metodo o función para la url categorias
    public function index_categoria(){
       $categorias = Categoria::all();//mostrarme todas las categorías
        return Inertia::render('Categoria/IndexCategoria',compact('categorias'));
    }

    public function index_formulario(){
         return Inertia::render('Categoria/FormCategoria');
    }

    public function store_categoria(Request $request){
    // dd($request->all());
       Categoria::create([
              'nombre' => $request->nombre,
              'descripcion' => $request->descripcion
       ]);

       $categorias = Categoria::all();//mostrarme todas las categorías
        return Inertia::render('Categoria/IndexCategoria',compact('categorias'));
    }
}
