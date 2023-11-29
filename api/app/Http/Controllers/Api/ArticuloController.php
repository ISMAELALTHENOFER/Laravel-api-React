<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{

    public function index()
    {
        $articulo = Articulo::all();
        return $articulo;
    }


    public function store(Request $request)
    {
        $articulo = new Articulo();
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;
        $articulo->save();
    }


    public function show(string $id)
    {
        $articulo = Articulo::find($id);
        return $articulo;
    }


    public function update(Request $request, string $id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;
        $articulo->save();
        return $articulo;
    }


    public function destroy(string $id)
    {
        $articulo = Articulo::destroy($id);
        return $articulo;
    }
}
