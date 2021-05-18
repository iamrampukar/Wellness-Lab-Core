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
              <form>
                <div class="card-body">
                    <!--  Block One -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">First Name</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="First Name ">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Middle Name</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="Middle Name ">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Last Name</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="Last Name ">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                    </div>

                    <!--  Block Two -->                                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Gender</label>
                                <!-- <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="Gender...">
                                <span class="error invalid-feedback">Please enter a email address</span> -->
                                <select class="form-control form-control-sm">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                                <span class="help-block">Help block with error</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Date Of Birth</label>
                                <input type="text" class="form-control form-control-sm is-invalid" id="dateOfBirth" placeholder="Date Of Birth" value="">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Age</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="Age... ">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                    </div>

                    <!--  Block Three -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Mobile No</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="9849...">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Mobile No</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="9849...">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Tel No</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="01-555...">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                    </div>

                    <!--  Block Four -->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Lab Id</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="Lab Id">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Sample No</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="Sample No">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Patient Type</label>
                                <select class="form-control form-control-sm">
                                    <option>option 1</option>
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
                                <label for="categoryNameNepali">Receiving Date & Time</label>
                                <input type="text" class="form-control form-control-sm is-invalid" id="receivingDate" placeholder="Receiving Date & Time" value="">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Reporting Date & Time</label>
                                <input type="text" class="form-control form-control-sm is-invalid" id="reportingDate" placeholder="Reporting Date & Time" value="">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="categoryNameNepali">Test Report Status</label>
                                <input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="Test Report Status">
                                <span class="error invalid-feedback">Please enter a email address</span>
                            </div>
                        </div>
                    </div> 

                    <!--  Block Five -->
                    <div class="form-group">
                		<label for="categoryNameNepali">Ref. Consultant</label>
                		<input type="text" name="categoryNameNepali" class="form-control form-control-sm is-invalid" placeholder="Ref. Consultant">
                		<span class="error invalid-feedback">Please enter a email address</span>
                	</div> 

                
                	<div class="form-group">
                		<label>Laboratory Report:</label>
                		<textarea class="form-control form-control-sm" rows="5" placeholder="Laboratory report..."></textarea>
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