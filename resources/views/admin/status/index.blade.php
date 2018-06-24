@extends('admin.layouts.admin-layout')


@section('title', '| View and Add Status')

<!-- include the top part of the page which contains the menu for car settings -->
@section('car-menu')
@include('admin.layouts.partial.car-settings-menu')
@endsection

@section('content')
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Status</h4></div><!-- Default panel contents -->


						<table class="table"><!-- Table -->
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>NAMES</th>
										<th>EDIT</th>
										<th>DELETE</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($statuss as $status)
									<tr>
										<td>{{ $status->id }}</td>
										<td>{{ $status->name }}</td>
										<td>
											<i class="btn-action"><a href="{{route('status.edit', $status->id)}}" class="fa fa-edit"></a></i>
										</td>
										<td>{!!Form::open(['route' => ['status.destroy', $status->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
											!!}

											{!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn-action', ]) 
											!!}
										</td>
										{!!Form::close()!!}
									</tr>
									@endforeach
								</tbody>
							</table>
						</table>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Add Status</h4></div><!-- Default panel contents -->

						<div class="col-md-12 col-md-offset-1 top-clear-fix"><!-- Table -->
							
							{!! Form::open(['route' => 'status.store', 'method' => 'POST']) !!}

							<div class="form-group">
								{{Form::label('name', 'Status')}}
								{{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter Status Name']) }}
							</div>

							<div class="form-group">
								{{ Form::submit('Add New Status', ['class' => 'theme-btn btn-small']) }}

							</div>	
							{!! Form::close() !!}

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!--container ends--> 
</section>

@endsection

<script type="text/javascript">
	@include('admin.layouts.confirm_delete')
</script>



