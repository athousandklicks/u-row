@extends('admin.layouts.admin-layout')


@section('title', '| Welcome to U-ROW Automobiles')

<!-- include the top part of the page which contains the menu for car settings -->
@section('car-menu')
@include('admin.layouts.partial.car-settings-menu')
@endsection

@section('content')

        <div class="clearfix"></div>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="full-width">


                <div class="content-wrap">
                    <div class="row car_listings">
                        @foreach ($cars as $car)
                        <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                            <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_1" />
                            <label for="vehicle_1"></label>
                            <div class="angled_badge blue">
                                <span>{{ $car->special_offer }}</span>
                            </div>

                            <div class="title">{{ $car->name }}</div>

                            <img src="{{url('images/cars',$car->image_full)}}" class="preview"/>

                            <table class="options-primary">
                                <tr>
                                    <td class="option primary">Body Style:</td>
                                    <td class="spec">{{ $car->body_style }}</td>
                                </tr>
                                <tr>
                                    <td class="option primary">Drivetrain:</td>
                                    <td class="spec">{{ $car->drivetrain }}</td>
                                </tr>
                                <tr>
                                    <td class="option primary">Engine:</td>
                                    <td class="spec">{{ $car->engine }}</td>
                                </tr>
                                <tr>
                                    <td class="option primary">Transmission:</td>
                                    <td class="spec">{{ $car->transmission }}</td>
                                </tr>
                                <tr>
                                    <td class="option primary">Mileage:</td>
                                    <td class="spec">{{ $car->miles }}</td>
                                </tr>
                            </table>
                            <table class="options-secondary">
                                <tr>
                                    <td class="option secondary">Exterior Color:</td>
                                    <td class="spec">{{ $car->exterior }}</td>
                                </tr>
                                <tr>
                                    <td class="option secondary">Interior Color:</td>
                                    <td class="spec">{{ $car->interior }}</td>
                                </tr>
                                <tr>
                                    <td class="option secondary">MPG:</td>
                                    <td class="spec">{{ $car->mileage }}</td>
                                </tr>
                                <tr>
                                    <td class="option secondary">Stock Number:</td>
                                    <td class="spec">{{ $car->stock_number }}</td>
                                </tr>
                                <tr>
                                    <td class="option secondary">VIN Number:</td>
                                    <td class="spec">{{ $car->vin_number }}</td>
                                </tr>
                            </table>



                            <div class="price"><b>Price:</b><br>
                                <div class="figure">N{{ $car->price }}<br>
                                </div>
                                <div class="tax">Plus Sales Tax</div>
                            </div>



                            <div class="admin-action-buttons">

                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    <a class="view-details gradient_button" href="{{route('car.show', $car->id)}}"><i class='fa fa-plus-circle'></i>View Car Details
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    <a class="view-details gradient_button" href="{{route('car.edit', $car->id)}}"><i class='fa fa-plus-circle'></i>Edit Car Details
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    {!!Form::open(['route' => ['car.destroy', $car->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
                                    !!}
                                    {!! Form::submit('Delete Record', ['class' => 'view-details gradient_button']) 
                                    !!}
                                    {!!Form::close()!!}
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    <a class="view-details gradient_button" href="{{ $car->video }}" target="_blank"><i class="fa fa-video-camera"></i>View Car Promo Video
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>


                <div class="inventory_pagination md-margin-bottom-none xs-margin-bottom-60 sm-margin-bottom-60">
                    <ul class="pagination margin-bottom-none margin-top-25">
                        <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!--container ends--> 
</section>
<!--content ends-->
<div class="clearfix"></div>


@endsection

<script type="text/javascript">
  @include('admin.layouts.confirm_delete')
</script>
