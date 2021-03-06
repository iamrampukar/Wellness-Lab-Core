<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'patient_id'=>'required',
            'lab_id'=>'required',
            'sample_no'=>'required',
            'patient_type'=>'required',
            'receiving_date'=>'required',
            'reporting_date'=>'required',
            'test_report_status'=>'required',
            'ref_consultant'=>'required',
            'laboratory_report'=>'required',
        ];
    }
}
