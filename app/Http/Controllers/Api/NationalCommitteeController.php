<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NationalCommittee\StoreRequest;
use App\Http\Requests\NationalCommittee\UpdateRequest;
use App\Models\Country;
use App\Models\NationalCommittee;
use Illuminate\Http\Request;

class NationalCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(NationalCommittee::paginate(10));
    }

    public function countries()
    {
        return response() -> json(Country::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        return response()->json(NationalCommittee::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NationalCommittee  $nationalCommittee
     * @return \Illuminate\Http\Response
     */
    public function show(NationalCommittee $nationalcommittee)
    {
        return response()->json($nationalcommittee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NationalCommittee  $nationalCommittee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, NationalCommittee $nationalcommittee)
    {
        $nationalcommittee->update($request->validated());
        return response()->json($nationalcommittee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NationalCommittee  $nationalCommittee
     * @return \Illuminate\Http\Response
     */
    public function destroy(NationalCommittee $nationalcommittee)
    {
        $nationalcommittee->delete();
        return response()->json("Eliminado correctamente.");
    }
}
