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
              <form method="post" action="{{ route('patient.update',$modelPatient->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <!--  Block One -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="first_name" class="form-control form-control-sm @error('first_name') is-invalid @enderror" placeholder="First Name " value="{{ old('first_name',$modelPatient->first_name) }}">
                                @if($errors->has('first_name'))
                                    <span class="error invalid-feedback">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lastName">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control form-control-sm @error('middle_name') is-invalid @enderror" placeholder="Middle Name" value="{{ old('middle_name',$modelPatient->middle_name) }}">
                                @if($errors->has('middle_name'))
                                    <span class="error invalid-feedback">{{ $errors->first('middle_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="last_name" class="form-control form-control-sm @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name',$modelPatient->last_name) }}">
                                @if($errors->has('last_name'))
                                    <span class="error invalid-feedback">{{ $errors->first('last_name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--  Block Two -->                                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control form-control-sm @error('gender') is-invalid @enderror">
                                    <option value="">--SELECT--</option>
                                    <option value="0" @if(old('gender', $modelPatient->gender) == '0') selected="selected" @endif>Female</option>
                                    <option value="1" @if(old('gender', $modelPatient->gender) == '1') selected="selected" @endif>Male</option>
                                </select>
                                @if($errors->has('gender'))
                                    <span class="help-block">{{ $errors->first('gender') }}</span>
                                @endif
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="dateOfBirth">Date Of Birth</label>
                                <input type="text" class="form-control form-control-sm @error('dob') is-invalid @enderror" name="dob" id="dateOfBirth" placeholder="Date Of Birth" value="{{ old('dob',$modelPatient->dob) }}">
                                @if($errors->has('gender'))
                                    <span class="error invalid-feedback">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="age" class="form-control form-control-sm @error('age') is-invalid @enderror" placeholder="Age... " value="{{ old('age',$modelPatient->age) }}">
                                @if($errors->has('age'))
                                    <span class="error invalid-feedback">{{ $errors->first('age') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--  Block Three -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="mobile1">Mobile No</label>
                                <input type="text" name="mobile1" class="form-control form-control-sm @error('mobile1') is-invalid @enderror" placeholder="9849..." value="{{ old('mobile1',$modelPatient->mobile1) }}">
                                @if($errors->has('mobile1'))
                                    <span class="error invalid-feedback">{{ $errors->first('mobile1') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="mobile2">Mobile No</label>
                                <input type="text" name="mobile2" class="form-control form-control-sm @error('mobile2') is-invalid @enderror" placeholder="9849..." value="{{ old('mobile2',$modelPatient->mobile2) }}">
                                @if($errors->has('mobile2'))
                                    <span class="error invalid-feedback">{{ $errors->first('mobile2') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="telephone">Telephone No</label>
                                <input type="text" name="telephone" class="form-control form-control-sm @error('telephone') is-invalid @enderror" placeholder="01-555..." value="{{ old('telephone',$modelPatient->telephone)}}">
                                @if($errors->has('telephone'))
                                    <span class="error invalid-feedback">{{ $errors->first('telephone') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--  Block Four -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="labId">Lab Id</label>
                                <input type="text" name="lab_id" class="form-control form-control-sm @error('lab_id') is-invalid @enderror" placeholder="Lab Id" value="{{ old('lab_id',$modelPatient->lab_id) }}">
                                @if($errors->has('lab_id'))
                                    <span class="error invalid-feedback">{{ $errors->first('lab_id') }}</span>
                                @endif
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