<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelPatient = Patient::all();
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
    public function store(Request $request)
    {

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'age'=>'required',
            "mobile1"=>'required',
            'lab_id'=>'required',
            'sample_no'=>'required',
            'patient_type'=>'required',
            'receiving_date'=>'required',
            'reporting_date'=>'required',
            'test_report_status'=>'required',
            'ref_consultant'=>'required',
            'laboratory_report'=>'required',
        ]);
        $model = Patient::create($request->all());
        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patient.show',['modelPatient'=>$patient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit',['modelPatient'=>$patient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'age'=>'required',
            "mobile1"=>'required',
            'lab_id'=>'required',
            'sample_no'=>'required',
            'patient_type'=>'required',
            'receiving_date'=>'required',
            'reporting_date'=>'required',
            'test_report_status'=>'required',
            'ref_consultant'=>'required',
            'laboratory_report'=>'required',
        ]);
        $patient->update($request->all());
        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patient.index');
    }
}
