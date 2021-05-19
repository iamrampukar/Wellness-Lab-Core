@extends('layouts.master')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Patient List <small></small></h1>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<!-- <div class="card-header">
						<h3 class="card-title">Bordered Table</h3>
					</div> -->
					<!-- /.card-header -->
					<div class="card-body">
						<table class="table table-bordered text-nowrap">
							<thead>                  
								<tr>
									<th style="width: 10px">#</th>
									<th>Full Name</th>
									<th>Gender</th>
									<th>Mobile</th>
									<th>Date Of Birth</th>
									<th style="width: 40px"></th>
								</tr>
							</thead>
							<tbody>
                            @foreach($modelPatient as $key => $value)
								<tr>
									<td>{{ ++$key }}</td>
									<td>{{ $value->first_name.' '.$value->last_name }}</td>
									<td>{{ $value->gender==0 ? 'Female' : 'Male' }}</td>
									<td>{{ $value->mobile1 }}</td>
									<td>{{ $value->dob }}</td>
									<td>
										<form method="post" action="{{ route('patient.destroy',$value->id) }}">
											<a href="{{ route('patient.show',$value->id) }}" class="btn btn-info btn-xs"><i class="far fa-eye"></i></a>
											<a href="{{ route('patient-report.report',$value->id) }}" class="btn btn-info btn-xs"><i class="fas fa-plus"></i></a>
											<a href="{{ route('patient.show',$value->id) }}" class="btn btn-info btn-xs"><i class="fas fa-list"></i></a>
											<a href="{{ route('patient.edit',$value->id) }}" class="btn btn-primary btn-xs"><i class="far fa-edit"></i></a>
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></button>
										</form>
									</td>
								</tr>
                            @endforeach
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
					<div class="card-footer clearfix">
						<ul class="pagination pagination-sm m-0 float-right">
							<li class="page-item"><a class="page-link" href="#">«</a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">»</a></li>
						</ul>
					</div>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
@endsection