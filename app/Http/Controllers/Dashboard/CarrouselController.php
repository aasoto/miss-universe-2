<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Carrousel\StoreRequest;
use App\Http\Requests\Carrousel\UpdateRequest;
use App\Models\Carrousel;
use Illuminate\Http\Request;

class CarrouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrousel = Carrousel::get();
        return view('dashboard.carrousel.index', compact('carrousel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrousel = new Carrousel();
        return view('dashboard.carrousel.create', compact("carrousel"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        /**************** MOVER IMAGEN ****************/
        if (isset($data['image'])) {
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('images/carrousel/background'), $filename);
        }
        if (isset($data['secondary_image'])) {
            $data['secondary_image'] = $filename = time().'.'.$data['secondary_image']->extension();
            $request->secondary_image->move(public_path('images/carrousel/secondaries_images'), $filename);
        }
        /*********************************************/
        Carrousel::create($data);
        return to_route('carrousel.index')->with('status', 'Guardado correctamente.');//redirecciona al index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carrousel $carrousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrousel $carrousel)
    {
        $edit = "1";
        return view('dashboard.carrousel.edit', compact('carrousel', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Carrousel $carrousel)
    {
        //dd($request);
        $data = $request->validated();
        /**************** MOVER IMAGEN ****************/
        if (isset($data['image'])) {
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            unlink('images/carrousel/background/'.$data['current_image']);
            $request->image->move(public_path('images/carrousel/background'), $filename);
        }
        if (isset($data['secondary_image'])) {
            $data['secondary_image'] = $filename = time().'.'.$data['secondary_image']->extension();
            if ($data['current_secondary_image'] != null) {
                unlink('images/carrousel/secondaries_images/'.$data['current_secondary_image']);
            }
            $request->secondary_image->move(public_path('images/carrousel/secondaries_images'), $filename);
        }
        /*********************************************/
        $carrousel->update($data);
        return to_route('carrousel.index')->with('status', 'Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrousel $carrousel)
    {
        if ($carrousel->image != null) {
            unlink('images/carrousel/background/'.$carrousel->image);
        }
        if ($carrousel->secondary_image != null) {
            unlink('images/carrousel/secondaries_images/'.$carrousel->secondary_image);
        }
        $carrousel->delete();
        return to_route('carrousel.index')->with('status', 'Eliminado correctamente.');
    }
}
