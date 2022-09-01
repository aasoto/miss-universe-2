<?php

namespace App\Http\Controllers\Api;

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
        return response() -> json(Carrousel::paginate(10));
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
        return response() -> json(Carrousel::create($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carrousel $carrousel)
    {
        return response() -> json($carrousel);
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
        return response() -> json($data);
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
        $carrousel -> delete();
        return response("Eliminado correctamente.");
    }
}
