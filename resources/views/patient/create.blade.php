@extends('layouts.master')
@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Entry New Patient Details <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              <form method="post" action="{{ route('patient.store') }}">
                @csrf
                <div class="card-body">
                    <!--  Block One -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="first_name" class="form-control form-control-sm is-invalid" placeholder="First Name ">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lastName">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control form-control-sm is-invalid" placeholder="Middle Name ">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="last_name" class="form-control form-control-sm is-invalid" placeholder="Last Name ">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                    </div>

                    <!--  Block Two -->                                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <!-- <input type="text" name="gender" class="form-control form-control-sm is-invalid" placeholder="Gender...">
                                <span class="error invalid-feedback">Please enter a email address</span> -->
                                <select name="gender" class="form-control form-control-sm">
                                    <option>--SELECT--</option>
                                    <option value="0">Female</option>
                                    <option value="1">Male</option>
                                </select>
                                <span class="help-block">Help block with error</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="dateOfBirth">Date Of Birth</label>
                                <input type="text" class="form-control form-control-sm is-invalid" name="dob" id="dateOfBirth" placeholder="Date Of Birth" value="">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="age" class="form-control form-control-sm is-invalid" placeholder="Age... ">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                    </div>

                    <!--  Block Three -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="mobile1">Mobile No</label>
                                <input type="text" name="mobile1" class="form-control form-control-sm is-invalid" placeholder="9849...">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="mobile2">Mobile No</label>
                                <input type="text" name="mobile2" class="form-control form-control-sm is-invalid" placeholder="9849...">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="telephone">Telephone No</label>
                                <input type="text" name="telephone" class="form-control form-control-sm is-invalid" placeholder="01-555...">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                    </div>

                    <!--  Block Four -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="labId">Lab Id</label>
                                <input type="text" name="lab_id" class="form-control form-control-sm is-invalid" placeholder="Lab Id">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="sampleNo">Sample No</label>
                                <input type="text" name="sample_no" class="form-control form-control-sm is-invalid" placeholder="Sample No">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="patientType">Patient Type</label>
                                <select name="patient_type" class="form-control form-control-sm">
                                    <option>--SELECT--</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                                <span class="help-block">Help block with error</span>
                            </div>
                        </div>
                    </div> 

                     <!--  Block Five -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="receivingDate">Receiving Date & Time</label>
                                <input type="text" name="receiving_date" class="form-control form-control-sm is-invalid" id="receivingDate" placeholder="Receiving Date & Time" value="">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="reportingDate">Reporting Date & Time</label>
                                <input type="text" name="reporting_date" class="form-control form-control-sm is-invalid" id="reportingDate" placeholder="Reporting Date & Time" value="">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="testReporStatus">Test Report Status</label>
                                <select name="test_report_status" class="form-control form-control-sm">
                                    <option>--SELECT--</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                                <span class="help-block">Help block with error</span>
                            </div>
                        </div>
                    </div> 

                    <!--  Block Five -->
                    <div class="form-group">
                		<label for="refConsultant">Ref. Consultant</label>
                		<input type="text" name="ref_consultant" class="form-control form-control-sm is-invalid" placeholder="Ref. Consultant">
                		<span class="error invalid-feedback">Please enter a email address</span>
                	</div> 
                
                	<div class="form-group">
                		<label for="laboratoryReport">Laboratory Report:</label>
                		<textarea name="laboratory_report" class="form-control form-control-sm" rows="5" placeholder="Laboratory report..."></textarea>
                	</div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Create</button>
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