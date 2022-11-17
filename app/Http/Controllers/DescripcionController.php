<?php

namespace App\Http\Controllers;

use App\Models\Descripcion;
use Illuminate\Http\Request;

/**
 * Class DescripcionController
 * @package App\Http\Controllers
 */
class DescripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descripcions = Descripcion::paginate();

        return view('descripcion.index', compact('descripcions'))
            ->with('i', (request()->input('page', 1) - 1) * $descripcions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $descripcion = new Descripcion();
        return view('descripcion.create', compact('descripcion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Descripcion::$rules);

        $descripcion = Descripcion::create($request->all());

        return redirect()->route('descripcions.index')
            ->with('success', 'Descripcion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $descripcion = Descripcion::find($id);

        return view('descripcion.show', compact('descripcion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $descripcion = Descripcion::find($id);

        return view('descripcion.edit', compact('descripcion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Descripcion $descripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descripcion $descripcion)
    {
        request()->validate(Descripcion::$rules);

        $descripcion->update($request->all());

        return redirect()->route('descripcions.index')
            ->with('success', 'Descripcion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $descripcion = Descripcion::find($id)->delete();

        return redirect()->route('descripcions.index')
            ->with('success', 'Descripcion deleted successfully');
    }
}
