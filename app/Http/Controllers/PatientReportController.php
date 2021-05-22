<?php

namespace App\Http\Controllers;

use App\Models\PatientReport;
use App\Http\Requests\PatientReportRequest;
use App\Repositories\PatientReportInterface;
use App\Repositories\PatientInterface;

class PatientReportController extends Controller
{
    private $selfPatientReport;
    private $selfPatient;

    public function __construct(PatientReportInterface $modelPatientReportReport, PatientInterface $modelPatientInterface) {
        $this->selfPatientReport = $modelPatientReportReport;
        $this->selfPatient = $modelPatientInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelPatientReport = $this->selfPatientReport->getAll();
        return view('patientReport.index',[
            'modelPatient'=>$modelPatientReport
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patientReport.create');
    }

    public function createReport($id){
        $modelPatient = $this->selfPatient->getById($id);
        return view('patientReport.create',[
            'modelPatient'=>$modelPatient
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientReportRequest $request)
    {

        $modelPatientReport = $this->selfPatientReport->create($request->all());
        return redirect()->route('patient-report.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelPatientReport = $this->selfPatientReport->getById($id);
        $modelPatient = $this->selfPatient->getById($modelPatientReport->patient_id);
        return view('patientReport.show',[
            'modelPatientReport'=>$modelPatientReport,
            'modelPatient'=>$modelPatient
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelPatientReport = $this->selfPatientReport->getById($id);
        $modelPatient = $this->selfPatient->getById($modelPatientReport->patient_id);
        return view('patientReport.edit',[
            'modelPatientReport'=>$modelPatientReport,
            'modelPatient'=>$modelPatient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(PatientReportRequest $request, $id)
    {
        $modelPatientReport = $this->selfPatientReport->update($id, $request->all());
        return redirect()->route('patient-report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelPatientReport = $this->selfPatientReport->delete($id);
        return redirect()->route('patient-report.index');
    }
}
