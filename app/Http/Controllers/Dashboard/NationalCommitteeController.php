<?php

namespace App\Http\Controllers\Dashboard;

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
        $nationalcommittees = NationalCommittee::paginate(10);
        return view('dashboard.nationalcommittees.index', compact('nationalcommittees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nationalcommittee = new NationalCommittee();
        $countries = Country::pluck('id', 'name');
        return view('dashboard.nationalcommittees.create', compact('nationalcommittee', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //dd($request);
        NationalCommittee::create($request->validated());
        return to_route('nationalcommittees.index')->with('status', 'Guardado correctamente.');//redirecciona al index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NationalCommittee  $nationalcommittee
     * @return \Illuminate\Http\Response
     */
    public function show(NationalCommittee $nationalcommittee)
    {
        $countries = Country::get();
        return view('dashboard.nationalcommittees.show', compact('countries', 'nationalcommittee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NationalCommittee  $nationalcommittee
     * @return \Illuminate\Http\Response
     */
    public function edit(NationalCommittee $nationalcommittee)
    {
        $countries = Country::pluck('id', 'name');
        $edit = "1";
        return view('dashboard.nationalcommittees.edit', compact('nationalcommittee', 'countries', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NationalCommittee  $nationalcommittee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, NationalCommittee $nationalcommittee)
    {
        //dd($request);
        $data = $request->validated();
        $nationalcommittee->update($data);
        return to_route('nationalcommittees.index')->with('status', 'Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NationalCommittee  $nationalcommittee
     * @return \Illuminate\Http\Response
     */
    public function destroy(NationalCommittee $nationalcommittee)
    {
        $nationalcommittee->delete();
        return to_route('nationalcommittees.index')->with('status', 'Eliminado correctamente.');
    }
}
