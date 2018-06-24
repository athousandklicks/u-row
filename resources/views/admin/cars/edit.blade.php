@extends('admin.layouts.admin-layout')


@section('title', '| Edit Car Entry')

@section('stylesheets')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>
    tinymce.init
    ({
        selector: 'textarea',
        height: 500,
        theme: 'modern',
        plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
        image_advtab: true,
        templates: [
        { title: 'Test template 1', content: 'Test 1' },
        { title: 'Test template 2', content: 'Test 2' }
        ],
        content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
        ]
    });﻿
</script>

@endsection

<!-- include the top part of the page which contains the menu for car settings -->
@section('car-menu')
@include('admin.layouts.partial.car-settings-menu')
@endsection

@section('content')
<div class="col-md-12 padding-none"> 

    <!--CONTACT INFORMATION-->
    <div class="row contacts margin-top-5"> 
        <div class="top-space"></div> 

    <!--RIGHT INFORMATION-->
    <div class="col-md-6 col-lg-offset-3 col-md-offset-3 padding-right-none xs-padding-left-none sm-padding-left-none xs-margin-top-30">

        <div class="contact_wrapper information_head">
            <h3 class="margin-bottom-25 margin-top-none">Edit Car</h3>

            <div class="form_contact margin-bottom-20">

                {!!Form::model($cars, ['route'=>['car.update', $cars->id], 'method' => 'PUT', 'files' => true, 'onsubmit' => 'return ConfirmSave()'])!!}


                <fieldset id="contact_form">
                    <div class="row">
                        <div class="col-md-12">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', null, ['class' => 'form-control margin-bottom-50', 'placeholder'=>'Car Name'])}}
                        </div>
                    </div>
                    <hr></hr>

                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('engine', 'Engine Number')}}
                            {{Form::text('engine', null, ['class' => 'form-control margin-bottom-20', 'placeholder'=>'Engine Number'])}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('vin_number', 'Vin Number')}}
                            {{Form::text('vin_number', null, ['class' => 'form-control margin-bottom-20', 'placeholder'=>'Vin Number'])}}  
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('body_style', 'Body Style')}}
                            {{Form::select('body_style', $_body_style, null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'Body Style'])}}

                        </div>
                        <div class="col-md-6">
                            {{Form::label('drivetrain', 'Drivetrain')}}
                            {{Form::select('drivetrain', $_drivetrain, null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'Drivetrain'])}}
                        </div>
                    </div>
                    <hr></hr>


                    <div class="row">
                        <div class="col-md-4">
                            {{Form::label('year', 'Year')}}
                            {{Form::select('year', $_year, null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Year'])}}
                        </div>

                        <div class="col-md-4">
                            {{Form::label('country', 'Country')}}
                            {{Form::select('country', $_country, null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Country'])}}
                        </div>

                        <div class="col-md-4">
                            {{Form::label('fuel_type', 'fuel Type')}}
                            {{Form::select('fuel_type', $_fuel_type, null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Fuel Type'])}}
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            {{Form::label('transmission', 'Transmission')}}
                            {{Form::select('transmission', $_transmission, null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'Transmission'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('doors', 'Doors')}}
                            {{Form::select('doors', $_door, null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'Doors'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('passengers', 'Passengers')}}
                            {{Form::select('passengers', $_passenger, null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'Passengers'])}}
                        </div>
                    </div>

                    <hr></hr>
                    <div class="row">
                        <div class="col-md-4">
                            {{Form::label('model', 'Model')}}
                            {{Form::text('model', null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Model'])}}
                        </div>

                        <div class="col-md-4">
                            {{Form::label('mileage', 'Fuel Mileage')}}
                            {{Form::text('mileage', null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Fuel Mileage'])}}
                        </div>

                        <div class="col-md-4">
                            {{Form::label('miles', 'Miles')}}
                            {{Form::text('miles', null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Miles'])}}
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            {{Form::label('interior', 'Interior Colour')}}
                            {{Form::text('interior', null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'Interior Colour'])}}
                        </div>

                        <div class="col-md-4">
                            {{Form::label('exterior', 'Exterior Colour')}}
                            {{Form::text('exterior', null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'Exterior Colour'])}}
                        </div>

                        <div class="col-md-4">
                            {{Form::label('price', 'Price')}}
                            {{Form::text('price', null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Price'])}}
                        </div>
                    </div>
                    <hr></hr>

                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('status', 'Status *')}}
                            {{Form::select('status', $_status, null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Status'])}}
                        </div>

                        <div class="col-md-6">
                            {{Form::label('promo_phrase', 'Promo Phrase *')}}
                            {{Form::select('promo_phrase', $_promo_phrase, null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Promo Phrase '])}}
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('condition', 'Condition')}}
                            {{Form::select('condition', $_condition, null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'Condition '])}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('special_offer', 'Special Offer')}}
                            {{Form::select('special_offer', $_special_offer, null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'special Offer '])}}  
                        </div>
                    </div>

                    <hr></hr>

                    <div class="row">
                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_full', 'Full View')}}
                            {{Form::file('image_full', ['class'=>'btn btn-small form-control margin-bottom-10 clear-right'])}}
                        </div>

                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_front', 'Front Image')}}
                            {{Form::file('image_front', ['class'=>'btn btn-small form-control margin-bottom-10'])}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_back', 'Back Image')}}
                            {{Form::file('image_back', ['class'=>'btn btn-small form-control margin-bottom-10'])}}
                        </div>

                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_leftside', 'Left Side Image')}}
                            {{Form::file('image_leftside', ['class'=>'btn btn-small form-control margin-bottom-10'])}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_rightside', 'Right Side Image')}}
                            {{Form::file('image_rightside', ['class'=>'btn btn-small form-control margin-bottom-10'])}}
                        </div>

                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_dashboard', 'Dashboard')}}
                            {{Form::file('image_dashboard', ['class'=>'btn btn-small form-control margin-bottom-10'])}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_engine', 'Engine')}}
                            {{Form::file('image_engine', ['class'=>'btn btn-small form-control margin-bottom-10'])}}
                        </div>

                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_frontseat', 'Front Seat')}}
                            {{Form::file('image_frontseat', ['class'=>'btn btn-small form-control margin-bottom-10'])}}
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_backseat', 'Back Seat')}}
                            {{Form::file('image_backseat', ['class'=>'btn btn-small form-control margin-bottom-10'])}}
                        </div>

                        <div class="form-group col-sm-10 col-md-offset-1">
                            {{Form::label('image_boot', 'Boot')}}
                            {{Form::file('image_boot', ['class'=>'btn btn-small form-control margin-bottom-10'])}}
                        </div>
                    </div>
                    <hr></hr>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            {{Form::label('video', 'Promo Video')}}
                            {{Form::text('video', null, ['class' => 'form-control margin-bottom-70', 'placeholder'=>'Promo Video'])}}
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', null, ['class' => 'form-control margin-bottom-60', 'placeholder'=>'Enter Product\'s Full Description', 'rows' => 3])}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            {{Form::label('comment', 'Comment')}}
                            {{Form::textarea('comment', null, ['class' => 'form-control margin-bottom-30', 'placeholder'=>'Comment', 'rows' => 3])}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 top-mar">
                            {{Form::submit('Update Product', ['class'=>'btn btn-primary submit_btn'])}}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </fieldset>

            </div>
        </div>
    </div>
    <!--RIGHT INFORMATION--> 


</div>
<div class="clearfix"></div>
</div>
</div>
<!--container ends--> 
</section>
<!--content ends-->
<div class="clearfix"></div>
<div class="back_to_top"> <img src="images/arrow-up.png" alt="scroll up" /> </div>

@endsection

<script type="text/javascript">
  @include('admin.layouts.confirm_delete')
</script>