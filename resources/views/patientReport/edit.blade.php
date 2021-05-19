@extends('layouts.master')
@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Patient Details <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('patient-report.update',$modelPatient->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <!--  Block Four -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="labId">Lab Id</label>
                                <input type="text" name="lab_id" class="form-control form-control-sm @error('lab_id') is-invalid @enderror" placeholder="Lab Id" value="{{ old('lab_id',$modelPatient->lab_id) }}">
                                @if($errors->has('lab_id'))
                                    <span class="error invalid-feedback">{{ $errors->first('lab_id') }}</span>
                                @endif
                                <input type="text" name="patient_id" class="form-control form-control-sm" placeholder="Patient Id" value="{{ old('patient_id',$modelPatient->patient_id) }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="sampleNo">Sample No</label>
                                <input type="text" name="sample_no" class="form-control form-control-sm @error('sample_no') is-invalid @enderror" placeholder="Sample No" value="{{ old('sample_no',$modelPatient->sample_no) }}">
                                @if($errors->has('sample_no'))
                                    <span class="error invalid-feedback">{{ $errors->first('sample_no') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="patientType">Patient Type</label>
                                <select name="patient_type" class="form-control form-control-sm @error('patient_type') is-invalid @enderror">
                                    <option value="">--SELECT--</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                                @if($errors->has('patient_type'))
                                    <span class="help-block">{{ $errors->first('patient_type') }}</span>
                                @endif
                            </div>
                        </div>
                    </div> 

                     <!--  Block Five -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="receivingDate">Receiving Date & Time</label>
                                <input type="text" name="receiving_date" class="form-control form-control-sm @error('receiving_date') is-invalid @enderror" id="receivingDate" placeholder="Receiving Date & Time" value="{{ old('receiving_date',$modelPatient->lab_id) }}">
                                @if($errors->has('receiving_date'))
                                    <span class="error invalid-feedback">{{ $errors->first('receiving_date') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="reportingDate">Reporting Date & Time</label>
                                <input type="text" name="reporting_date" class="form-control form-control-sm @error('reporting_date') is-invalid @enderror" id="reportingDate" placeholder="Reporting Date & Time" value="{{ old('reporting_date',$modelPatient->lab_id) }}">
                                @if($errors->has('reporting_date'))
                                    <span class="error invalid-feedback">{{ $errors->first('reporting_date') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="testReporStatus">Test Report Status</label>
                                <select name="test_report_status" class="form-control form-control-sm @error('test_report_status') is-invalid @enderror">
                                    <option value="">--SELECT--</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                                @if($errors->has('test_report_status'))
                                    <span class="help-block">{{ $errors->first('test_report_status') }}</span>
                                @endif
                            </div>
                        </div>
                    </div> 

                    <!--  Block Five -->
                    <div class="form-group">
                		<label for="refConsultant">Ref. Consultant</label>
                		<input type="text" name="ref_consultant" class="form-control form-control-sm @error('ref_consultant') is-invalid @enderror" placeholder="Ref. Consultant" value="{{ old('ref_consultant',$modelPatient->lab_id) }}">
                		@if($errors->has('ref_consultant'))
                            <span class="error invalid-feedback">{{ $errors->first('ref_consultant') }}</span>
                        @endif
                	</div> 
                
                	<div class="form-group">
                		<label for="laboratoryReport">Laboratory Report:</label>
                		<textarea name="laboratory_report" class="form-control form-control-sm @error('laboratory_report') is-invalid @enderror" rows="5" placeholder="Laboratory report...">{{ old('laboratory_report',$modelPatient->lab_id) }}</textarea>
                        @if($errors->has('laboratory_report'))
                            <span class="error invalid-feedback">{{ $errors->first('laboratory_report') }}</span>
                        @endif
                	</div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
@endsection