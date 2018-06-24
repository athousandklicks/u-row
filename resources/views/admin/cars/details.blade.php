@extends('admin.layouts.admin-layout')


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
            <div class="inventory-heading margin-bottom-10 clearfix">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <h2>{{$cars->name}}</h2>
                         </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 text-right">
                            <h2>N{{$cars->price}}</h2>
                            <em>Plus Taxes &amp; Licensing</em> 
                            <!-- <span class="sold_text">Sold</span> -->
                        </div>
                    </div>
                </div>
                <div class="content-nav margin-bottom-30">
                    <div class="row">
                        <ul>
                            <li><button type="button" class="btn btn-success"><a href="{{route('car.index')}}">View All Car Listings</a></button></li>

                            <li><button type="button" class="btn btn-primary"><a href="{{route('car.edit', $cars->id)}}">Edit Car</a></button></li>


                            <li>
                                {!!Form::open(['route' => ['car.destroy', $cars->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])!!}
                                {!! Form::submit('Delete Car', ['class' => 'btn btn-danger'])!!}
                                {!!Form::close()!!}
                            </li>


                        </ul>
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

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_full)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_full)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_full)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_front)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_front)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_front)}}" /> 
                                    </li>


                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_leftside)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_leftside)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_leftside)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_rightside)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_rightside)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_rightside)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_engine)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_engine)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_engine)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_dashboard)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_dashboard)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_dashboard)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_frontseat)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_frontseat)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_frontseat)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_backseat)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_backseat)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_backseat)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_back)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_back)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_back)}}" /> 
                                    </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_boot)}}"> 
                                        <img src="{{asset('/images/cars/'.$cars->image_boot)}}" alt="" data-full-image="{{asset('/images/cars/'.$cars->image_boot)}}" /> 
                                    </li>



                                    
                                </ul>
                            </div>
                        </section>
                        <section class="home-slider-thumbs">
                            <div class="flexslider" id="home-slider-thumbs">
                                <ul class="slides">




                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_full)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_full)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_front)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_front)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_leftside)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_leftside)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_rightside)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_rightside)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_engine)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_engine)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_dashboard)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_dashboard)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_frontseat)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_frontseat)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_backseat)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_backseat)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_back)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_back)}}" alt="" /></a> </li>

                                    <li data-thumb="{{asset('/images/cars/'.$cars->image_boot)}}"> <a href="#"><img src="{{asset('/images/cars/'.$cars->image_boot)}}" alt="" /></a> </li>
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
                                <iframe width="750" height="500" src="{{$cars->video}}" frameborder="0" allowfullscreen></iframe>
                            </div>

                            <div class="tab-pane fade" id="vehicle">
                                <p>{!!$cars->description!!}</p>

                            </div>

                            <div class="tab-pane fade" id="comments">
                                <p>{!!$cars->comment!!}</p>
                                
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
                                            <td>{{$cars->body_style}}</td>
                                        </tr>
                                        <tr>
                                            <td>ENGINE:</td>
                                            <td>{{$cars->engine}}</td>
                                        </tr>
                                        <tr>
                                            <td>MODEL:</td>
                                            <td>{{$cars->model}}</td>
                                        </tr>
                                        <tr>
                                            <td>YEAR:</td>
                                            <td>{{$cars->year}}</td>
                                        </tr>
                                        <tr>
                                            <td>TRANSMISSION:</td>
                                            <td>{{$cars->transmission}}</td>
                                        </tr>
                                        <tr>
                                            <td>DRIVETRAIN:</td>
                                            <td>{{$cars->drivetrain}}</td>
                                        </tr>
                                        <tr>
                                            <td>EXTERIOR:</td>
                                            <td>{{$cars->exterior}}</td>
                                        </tr>
                                        <tr>
                                            <td>INTERIOR:</td>
                                            <td>{{$cars->interior}}</td>
                                        </tr>
                                        <tr>
                                            <td>MILES:</td>
                                            <td>{{$cars->miles}}</td>
                                        </tr>
                                        <tr>
                                            <td>DOORS:</td>
                                            <td>{{$cars->doors}}</td>
                                        </tr>
                                        <tr>
                                            <td>PASSENGERS:</td>
                                            <td>{{$cars->passengers}}</td>
                                        </tr>
                                        <tr>
                                            <td>STOCK #:</td>
                                            <td>{{$cars->stock_number}}</td>
                                        </tr>
                                        <tr>
                                            <td>VIN #:</td>
                                            <td>{{$cars->vin_number}}</td>
                                        </tr>
                                        <tr>
                                            <td>FUEL MILEAGE:</td>
                                            <td>{{$cars->mileage}}</td>
                                        </tr>
                                        <tr>
                                            <td>FUEL TYPE:</td>
                                            <td>{{$cars->fuel_type}}</td>
                                        </tr>
                                        <tr>
                                            <td>CONDITION:</td>
                                            <td>{{$cars->condition}}</td>
                                        </tr>
                                        <tr>
                                            <td>COUNTRY:</td>
                                            <td>{{$cars->country}}</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="clearfix"></div>

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