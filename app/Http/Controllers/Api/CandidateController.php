<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\StoreRequest;
use App\Http\Requests\Candidate\UpdateRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Candidate::paginate(10));
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
        if (isset($data['official_picture'])) {
            $data['official_picture'] = $filename = time().'.'.$data['official_picture']->extension();
            $request->official_picture->move(public_path('images/candidates'), $filename);
        }
        /*********************************************/
        return response()->json(Candidate::create($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        return response()->json($candidate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Candidate $candidate)
    {
        $data = $request->validated();
        /**************** MOVER IMAGEN ****************/
        if (isset($data['official_picture'])) {
            $data['official_picture'] = $filename = time().'.'.$data['official_picture']->extension();
            $request->official_picture->move(public_path('images/candidates'), $filename);
        }
        /*********************************************/
        $candidate->update($data);
        return response()->json($candidate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        unlink('images/candidates/'.$candidate->official_picture);
        $candidate->delete();
        return response()->json("Eliminado correctamente.");
    }
}
