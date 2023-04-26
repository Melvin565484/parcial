<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

/*si hay algun error en todo lo que se refiere a libros me hago reponsable
ya que el servidor no me corria y por lo tanto no pude verificar funcionalidad intente todo y aun asi no pude
Att:Luis Blanco*/

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['libros'] = Libros::all();
        return view('libros.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('libros.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $libroData = request()->except("_token");
        Libros::insert($libroData);
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $libros=Libros::findOrFail($id);
        return view('libros.edit', compact('libros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $libroData=request()->except(['_token', '_method']);
        Libros::where('id', '=', $id)->update($libroData);
        return redirect('libros');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Libros::destroy($id);
        return redirect('libros');
    }
}
