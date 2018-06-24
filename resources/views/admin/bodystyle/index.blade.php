@extends('admin.layouts.admin-layout')


@section('title', '| View and Add Body Styles')

<!-- include the top part of the page which contains the menu for car settings -->
@section('car-menu')
@include('admin.layouts.partial.car-settings-menu')
@endsection

@section('content')
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Body Styles</h4></div><!-- Default panel contents -->


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
									@foreach ($bodystyles as $bodystyle)
									<tr>
										<td>{{ $bodystyle->id }}</td>
										<td>{{ $bodystyle->name }}</td>
										<td>
											<i class="btn-action"><a href="{{route('bodystyle.edit', $bodystyle->id)}}" class="fa fa-edit"></a></i>
										</td>
										<td>{!!Form::open(['route' => ['bodystyle.destroy', $bodystyle->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
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
						<div class="panel-heading"><h4>Add Body Style</h4></div><!-- Default panel contents -->

						<div class="col-md-12 col-md-offset-1 top-clear-fix"><!-- Table -->
							
							{!! Form::open(['route' => 'bodystyle.store', 'method' => 'POST']) !!}

							<div class="form-group">
								{{Form::label('name', 'Body Style')}}
								{{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter Body Style Name']) }}
							</div>

							<div class="form-group">
								{{ Form::submit('Add New Body Style', ['class' => 'theme-btn btn-small']) }}

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



