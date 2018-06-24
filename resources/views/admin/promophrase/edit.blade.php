@extends('admin.layouts.admin-layout')


@section('title', '| Edit Promo Phrase')

<!-- include the top part of the page which contains the menu for car settings -->
@section('car-menu')
@include('admin.layouts.partial.car-settings-menu')
@endsection

@section('content')

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Edit Promo Phrase</h4></div><!-- Default panel contents -->

						<div class="col-md-12 col-md-offset-1 top-clear-fix"><!-- Table -->
							
						{!!Form::model($promophrases, ['route'=>['promophrase.update', $promophrases->id], 'method' => 'PUT'])!!}

							<div class="form-group">
								{{Form::label('name', 'Edit Promo Phrase')}}
								{{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Edit Promo Phrase Name']) }}
							</div>

							<div class="form-group">
								{{ Form::submit('Save Changes', ['class' => 'theme-btn btn-small']) }}

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



