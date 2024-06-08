<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Http\Controllers\Controller;
use App\Http\Requests\PokemonRequet;
use Illuminate\Http\Request;

class PokemomController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('components.backend.pokemons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $isEdit = false;
        $types = \App\Models\PokemomType::all();
        $this->data['isEdit'] = $isEdit;
        $this->data['types'] = $types;
        return view('components.backend.pokemons.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PokemonRequet $request
     * @return \Illuminate\Http\Response
     */
    public function store(PokemonRequet $request)
    {
        //
        $params = $request->all();
        $pokemon = \App\Models\Pokemom::create($params);
        if ( !$pokemon ) {
            return redirect()->route('backend.pokemons.index')->with('error', 'Server đang bận không thể tạo');
        }
        return redirect()->route('backend.pokemons.index')->with('success', 'Đã tạo tài thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $isEdit = true;
        $types = \App\Models\PokemomType::all();
        $this->data['types'] = $types;
        $this->data['isEdit'] = $isEdit;
        return view('components.backend.pokemons.create', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
