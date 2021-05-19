<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\PatientRequest;
use App\Repositories\PatientInterface;

class PatientController extends Controller
{
    private $selfPatient;

    public function __construct(PatientInterface $modelPatientInit) {
        $this->selfPatient = $modelPatientInit;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelPatient = $this->selfPatient->getAll();
        return view('patient.index',['modelPatient'=>$modelPatient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {

        $modelPatient = $this->selfPatient->create($request->all());
        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelPatient = $this->selfPatient->getById($id);
        return view('patient.show',['modelPatient'=>$modelPatient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelPatient = $this->selfPatient->getById($id);
        return view('patient.edit',['modelPatient'=>$modelPatient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, $id)
    {
        $modelPatient = $this->selfPatient->update($id, $request->all());
        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelPatient = $this->selfPatient->delete($id);
        return redirect()->route('patient.index');
    }
}
