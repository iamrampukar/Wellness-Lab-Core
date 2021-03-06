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
                                <label for="lastName">Last Name</label>
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
                                <label for="email">Email</label>
                                <p>{{ $modelPatient->email}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <p>{{ $modelPatient->address }}</p>
                            </div>
                        </div>
                    </div> 
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="{{ route('patient.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
            </div>
            <!-- /.card -->
            </div>
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
@endsection