<?php

namespace App\Http\Controllers;

use App\Solicitante;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitantes = Solicitante::paginate(10);
        
        return view('solicitante.index', compact('solicitantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('solicitante.adiciona');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitante = new Solicitante();

        $solicitante->nome = $request->nome;
        $solicitante->email = $request->email;
        $solicitante->contato = $request->contato;
        $solicitante->save();

        return redirect('solicitante/adiciona');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitante $solicitante)
    {
        return view('solicitante.show', compact('solicitante'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitante $solicitante)
    {
         

        return view('solicitante.edita', compact('solicitante'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitante $solicitante)
    {
        $solicitante->nome = $request->nome;
        $solicitante->email = $request->email;
        $solicitante->contato = $request->contato;
        $solicitante->save();

        return redirect('/solicitante');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitante $solicitante)
    {
        $solicitante->delete();

        return redirect('/solicitante');
        //
    }
}
