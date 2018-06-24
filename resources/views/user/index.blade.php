@extends('Layout')

@section('title', '| Welcome to U-ROW Automobiles')

@section('slider')
@include('partials.slider')
@endsection



@section('content')

<section class="content">
    <div class="container">
        <div class="inner-page homepage margin-bottom-none">

            <!--car-info-wrap ends-->
            <section class="welcome-wrap padding-top-30 sm-horizontal-15">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp">
                        <h4 class="margin-bottom-25 margin-top-none"><strong>WELCOME</strong> TO U-ROW AUTOMOBILE</h4>
                        <p>Lorem ipsum dolor sit amet, falli tollit cetero te eos. Ea ullum liber aperiri mi, impetus
                            ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft 
                            philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming 
                            ad. Modo liberavisse eu mel, no viris prompta sit. Pro labore sadipscing et. Ne peax
                            egat usu te mel <span class="alternate-font">vivendo scriptorem</span>. Pro labore sadipscing et. Ne pertinax egat usu te 
                        mel vivendo scriptorem.</p>
                        <p>Cum ut tractatos imperdiet, no tamquam facilisi qui. Eum tibique consectetuer in, an 
                            referrentur vis, vocent deseruisse ex mel. Sed te <span class="alternate-font">idque graecis</span>. Vel ne libris dolores, 
                        mel graece mel vivendo scriptorem dolorum.</p>
                    </div>
                    <!--welcome ends-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-right-none sm-padding-left-none md-padding-left-15 xs-padding-left-none padding-bottom-40 scroll_effect fadeInUp" data-wow-delay='.2s' style="z-index:100">
                        <h4 class="margin-bottom-25 margin-top-none"><strong>HAVE A CAR IN MIND?</strong> LET'S HELP YOU FIND IT!</h4>


                        <div class="search-form margin-top-20 padding-vertical-20">

                            {!! Form::open(['route' => 'find-car.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                            <div class="select-wrapper clearfix">
                                <div class="col-md-6">
                                    {{ Form::text('name', null, ['class' => 'full-width', 'placeholder'=>'Enter Car Name', 'type'=>'search']) }}
                                </div>
                                <div class="col-md-6">
                                    {{ Form::text('body_style', null, ['class' => 'full-width', 'placeholder'=>'Enter Body Style', 'type'=>'search']) }}
                                </div>
                            </div>
                            <div class="select-wrapper clearfix">
                                <div class="col-md-6">
                                    {{ Form::text('drivetrain', null, ['class' => 'full-width', 'placeholder'=>'Enter Drive Train', 'type'=>'search']) }}
                                </div>
                                <div class="col-md-6">
                                    {{ Form::text('year', null, ['class' => 'full-width', 'placeholder'=>'Enter Year', 'type'=>'search']) }}
                                </div>
                            </div>
                            <div class="select-wrapper clearfix">
                                <div class="col-md-6">
                                    {{ Form::text('model', null, ['class' => 'full-width', 'placeholder'=>'Enter Model', 'type'=>'search']) }}
                                </div>
                                <div class="col-md-6">
                                    {{ Form::text('transmission', null, ['class' => 'full-width', 'placeholder'=>'Enter Transmission', 'type'=>'search']) }}
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="select-wrapper clearfix">
                                <div class="col-md-12">
                                    {{ Form::textarea('description', null, ['class' => 'full-width', 'placeholder'=>'Give us More Details', 'type'=>'search']) }}
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="select-wrapper clearfix">
                                <div class="col-md-4">
                                    {{Form::submit(' Send Request', ['class'=>'btn btn-primary submit_btn'])}}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!--invetory ends--> 
                </div>
                
                <div class="recent-vehicles-wrap margin-top-30 sm-padding-left-none padding-bottom-40">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 recent-vehicles padding-left-none">
                            <h5 class="margin-top-none">Recent Vehicles</h5>
                            <p>Browse through the vast
                                selection of vehicles that
                                have recently been added
                            to our inventory.</p>
                            <div class="arrow3 clearfix margin-top-15 xs-margin-bottom-25" id="slideControls3"><span class="prev-btn"></span><span class="next-btn"></span></div>
                        </div>
                        <div class="col-md-10 col-sm-8 padding-right-none xs-padding-left-none">
                            <div class="carasouel-slider3">
                                @foreach ($inventory as $cars)
                                <div class="slide">
                                   <!-- {{ $cars->special_offer === "" ? "" : "Goodbye" }} -->
                                   <div class='angled_badge blue'>
                                    <span>
                                        {{$cars->special_offer}}
                                    </span>
                                </div> 
                                
                                <div class="car-block">
                                   
                                    <div class="img-flex"> <a href="{{route('inventory.show', $cars->id)}}">
                                        <span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span>
                                    </a> <img src="{{url('images/cars',$cars->image_full)}}" alt="" class="img-responsive"> </div>
                                    <div class="car-block-bottom">
                                        <h6><strong>{{ $cars->name }}</strong></h6>
                                        <h6>{{ $cars->mileage }}</h6>
                                        <h5>N {{ $cars->price }}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            

        </section>
        <!--welcome-wrap ends-->
        

    </div>
</div>
</section>


@endsection