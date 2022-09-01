<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\StoreRequest;
use App\Http\Requests\Candidate\UpdateRequest;
use App\Models\Candidate;
use App\Models\Country;
use App\Models\NationalCommittee;
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
        $candidates = Candidate::paginate(2);
        return view('dashboard.candidates.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidate = new Candidate();
        $countries = Country::pluck('id', 'name');
        $national_committees = NationalCommittee::pluck('id', 'business_name');
        return view('dashboard.candidates.create', compact('candidate', 'countries', 'national_committees'));
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
        $data = $request->validated();
        /**************** MOVER IMAGEN ****************/
        if (isset($data['official_picture'])) {
            $data['official_picture'] = $filename = time().'.'.$data['official_picture']->extension();
            $request->official_picture->move(public_path('images/candidates'), $filename);
        }
        /*********************************************/
        Candidate::create($data);
        return to_route('candidates.index')->with('status', 'Guardado correctamente.');//redirecciona al index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        $countries = Country::get();
        $national_committees = NationalCommittee::pluck('id', 'business_name');
        return view('dashboard.candidates.show', compact('candidate', 'countries', 'national_committees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        $countries = Country::pluck('id', 'name');
        $national_committees = NationalCommittee::pluck('id', 'business_name');
        $edit = "1";
        return view('dashboard.candidates.edit', compact('candidate', 'countries', 'national_committees', 'edit'));
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
        return to_route('candidates.index')->with('status', 'Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();
        return to_route('candidates.index')->with('status', 'Eliminado correctamente.');
    }
}
