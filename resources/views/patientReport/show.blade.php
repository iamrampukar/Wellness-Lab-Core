@extends('layouts.master')
@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Patient Detail <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                    <!--  Block One -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <p>{{ $modelPatient->first_name}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lastName">Middle Name</label>
                                <p>{{ $modelPatient->middle_name}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <p>{{ $modelPatient->last_name}}</p>
                            </div>
                        </div>
                    </div>

                    <!--  Block Two -->                                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <p>{{ $modelPatient->gender==0 ? 'Female': 'Male' }}</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="dateOfBirth">Date Of Birth</label>
                                <p>{{ $modelPatient->dob }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <p>{{ $modelPatient->age }}</p>
                            </div>
                        </div>
                    </div>

                    <!--  Block Three -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="mobile1">Mobile No</label>
                                <p>{{ $modelPatient->mobile1}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="mobile2">Mobile No</label>
                                <p>{{ $modelPatient->mobile2}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="telephone">Telephone No</label>
                                <p>{{ $modelPatient->telephone_no}}</p>
                            </div>
                        </div>
                    </div>

                    <!--  Block Four -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="labId">Lab Id</label>
                                <p>{{ $modelPatientReport->lab_id}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="sampleNo">Sample No</label>
                                <p>{{ $modelPatientReport->sample_no}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="patientType">Patient Type</label>
                                <p>{{ $modelPatientReport->patient_type}}</p>
                            </div>
                        </div>
                    </div> 

                     <!--  Block Five -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="receivingDate">Receiving Date & Time</label>
                                <p>{{ $modelPatientReport->receiving_date}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="reportingDate">Reporting Date & Time</label>
                                <p>{{ $modelPatientReport->reporting_date}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="testReporStatus">Test Report Status</label>
                                <p>{{ $modelPatientReport->test_report_status}}</p>
                            </div>
                        </div>
                    </div> 

                    <!--  Block Five -->
                    <div class="form-group">
                		<label for="refConsultant">Ref. Consultant</label>
                		<p>{{ $modelPatientReport->ref_consultant}}</p>
                	</div> 
                
                	<div class="form-group">
                		<label for="laboratoryReport">Laboratory Report:</label>
                		<p>{{ $modelPatientReport->laboratory_report}}</p>
                	</div>

                     <!--  Block Three -->
                     <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <p>{{ $modelPatientReport->amount}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="amount_status">Amount Status</label>
                                <p>{{ $modelPatientReport->amount_status}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="paymentType">Payment Type</label>
                                <p>{{ $modelPatientReport->payment_type}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="paymentStatus">Payment Status</label>
                                <p>{{ $modelPatientReport->payment_status}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="{{ route('patient-report.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
            </div>
            <!-- /.card -->
            </div>
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
@endsection