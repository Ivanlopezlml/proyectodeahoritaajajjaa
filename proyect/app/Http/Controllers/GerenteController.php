<?php

namespace App\Http\Controllers;

use App\Models\Gerente;
use Illuminate\Http\Request;

/**
 * Class GerenteController
 * @package App\Http\Controllers
 */
class GerenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gerentes = Gerente::paginate();

        return view('gerente.index', compact('gerentes'))
            ->with('i', (request()->input('page', 1) - 1) * $gerentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gerente = new Gerente();
        return view('gerente.create', compact('gerente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Gerente::$rules);

        $gerente = Gerente::create($request->all());

        return redirect()->route('gerentes.index')
            ->with('success', 'Gerente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gerente = Gerente::find($id);

        return view('gerente.show', compact('gerente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gerente = Gerente::find($id);

        return view('gerente.edit', compact('gerente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gerente $gerente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gerente $gerente)
    {
        request()->validate(Gerente::$rules);

        $gerente->update($request->all());

        return redirect()->route('gerentes.index')
            ->with('success', 'Gerente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gerente = Gerente::find($id)->delete();

        return redirect()->route('gerentes.index')
            ->with('success', 'Gerente deleted successfully');
    }
}
