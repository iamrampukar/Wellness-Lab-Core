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

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="9849..." value="{{ old('email',$modelPatient->email) }}">
                                @if($errors->has('email'))
                                    <span class="error invalid-feedback">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Addres:</label>
                        <textarea name="address" class="form-control form-control-sm @error('address') is-invalid @enderror" rows="5" placeholder="Laboratory report...">{{ old('address', $modelPatient->address) }}</textarea>
                        @if($errors->has('address'))
                            <span class="error invalid-feedback">{{ $errors->first('address') }}</span>
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

@push('scripts')
    <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/js/datepickers.js') }}"></script>
@endpush