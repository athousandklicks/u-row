@extends('Layout')


@section('title', '| U-ROW Automobiles')

@section('stylesheets')
{{Html::style(asset("/css/flexslider.css"))}}
@endsection

<script>
</script>

@section('content')

<section class="content">
    <div class="container">
        <div class="inner-page inventory-listing">
            <div class="top-space1">
                </div>
            <div class="inventory-heading margin-bottom-10 clearfix">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <h2>{{$inventory->name}}</h2>
                         </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 text-right">
                            <h2>N{{$inventory->price}}</h2>
                            <em>Plus Taxes &amp; Licensing</em> 
                            <!-- <span class="sold_text">Sold</span> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-content padding-left-none"> 
                        <!--OPEN OF SLIDER-->
                        <div class="listing-slider">
                        <!-- <div class="angled_badge red">
                            <span>Just Arrived</span>
                        </div> -->
                        <section class="slider home-banner">
                            <div class="flexslider" id="home-slider-canvas">
                                <ul class="slides">

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_full)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_full)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_full)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_front)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_front)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_front)}}" /> 
                                    </li>


                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_leftside)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_leftside)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_leftside)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_rightside)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_rightside)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_rightside)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_engine)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_engine)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_engine)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_dashboard)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_dashboard)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_dashboard)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_frontseat)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_frontseat)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_frontseat)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_backseat)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_backseat)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_backseat)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_back)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_back)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_back)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_boot)}}"> 
                                        <img src="{{asset('/images/cars/'.$inventory->image_boot)}}" alt="" data-full-image="{{asset('/images/cars/'.$inventory->image_boot)}}" /> 
                                    </li> 
                                </ul>
                            </div>
                        </section>
                        <section class="home-slider-thumbs">
                            <div class="flexslider" id="home-slider-thumbs">
                                <ul class="slides">
                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_full)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_full)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_front)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_front)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_leftside)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_leftside)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_rightside)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_rightside)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_engine)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_engine)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_dashboard)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_dashboard)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_frontseat)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_frontseat)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_backseat)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_backseat)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_back)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_back)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$inventory->image_boot)}}"> <a href="#"><img src="{{asset('/images/cars/'.$inventory->image_boot)}}" alt="" /></a> </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!--CLOSE OF SLIDER--> 
                    <!--Slider End-->
                    <div class="clearfix"></div>
                    <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#video" data-toggle="tab">Promo Video</a></li>
                            <li><a href="#vehicle" data-toggle="tab">Vehicle Overview</a></li>
                            <li><a href="#comments" data-toggle="tab">Comments</a></li>
                        </ul>

                        <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">

                            <div class="tab-pane fade in active" id="video">
                                <iframe width="750" height="500" src="{{$inventory->video}}" frameborder="0" allowfullscreen></iframe>
                            </div>

                            <div class="tab-pane fade" id="vehicle">
                                <p>{!!$inventory->description!!}</p>

                            </div>

                            <div class="tab-pane fade" id="comments">
                                <p>{!!$inventory->comment!!}</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none">
                    <div class="side-content">
                        <div class="car-info margin-bottom-50">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Body Style:</td>
                                            <td>{{$inventory->body_style}}</td>
                                        </tr>
                                        <tr>
                                            <td>ENGINE:</td>
                                            <td>{{$inventory->engine}}</td>
                                        </tr>
                                        <tr>
                                            <td>MODEL:</td>
                                            <td>{{$inventory->model}}</td>
                                        </tr>
                                        <tr>
                                            <td>YEAR:</td>
                                            <td>{{$inventory->year}}</td>
                                        </tr>
                                        <tr>
                                            <td>TRANSMISSION:</td>
                                            <td>{{$inventory->transmission}}</td>
                                        </tr>
                                        <tr>
                                            <td>DRIVETRAIN:</td>
                                            <td>{{$inventory->drivetrain}}</td>
                                        </tr>
                                        <tr>
                                            <td>EXTERIOR:</td>
                                            <td>{{$inventory->exterior}}</td>
                                        </tr>
                                        <tr>
                                            <td>INTERIOR:</td>
                                            <td>{{$inventory->interior}}</td>
                                        </tr>
                                        <tr>
                                            <td>MILES:</td>
                                            <td>{{$inventory->miles}}</td>
                                        </tr>
                                        <tr>
                                            <td>DOORS:</td>
                                            <td>{{$inventory->doors}}</td>
                                        </tr>
                                        <tr>
                                            <td>PASSENGERS:</td>
                                            <td>{{$inventory->passengers}}</td>
                                        </tr>
                                        <tr>
                                            <td>STOCK #:</td>
                                            <td>{{$inventory->stock_number}}</td>
                                        </tr>
                                        <tr>
                                            <td>VIN #:</td>
                                            <td>{{$inventory->vin_number}}</td>
                                        </tr>
                                        <tr>
                                            <td>FUEL MILEAGE:</td>
                                            <td>{{$inventory->mileage}}</td>
                                        </tr>
                                        <tr>
                                            <td>FUEL TYPE:</td>
                                            <td>{{$inventory->fuel_type}}</td>
                                        </tr>
                                        <tr>
                                            <td>CONDITION:</td>
                                            <td>{{$inventory->condition}}</td>
                                        </tr>
                                        <tr>
                                            <td>COUNTRY:</td>
                                            <td>{{$inventory->country}}</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-padding-right-15"> <a href="{{route('cart.addItem', $inventory->id)}}" class="default-btn pull-right action_button lg-button">ORDER THIS CAR NOW!</a> </div>

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="clearfix"></div>
        </div>
    </div>

    <!--container ends--> 
</section>
<!--content ends-->
<div class="clearfix"></div>


@endsection

@section('scripts')
{{Html::script('/js/jquery.flexslider.js')}}
@endsection

<script type="text/javascript">
  @include('admin.layouts.confirm_delete')
</script>