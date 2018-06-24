@extends('admin.layouts.admin-layout')


@section('title', '| Welcome to U-ROW Automobiles')


@section('content')

    <div class="clearfix"></div>
    <div class="top-space"></div>
<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page row">
            <div class="listing-view margin-bottom-20 col-sm-12">
               
            </div>
            <div class="clearfix"></div>
            <form method="post" action="#" class="listing_sort">
                
                <div class="select-wrapper pagination clearfix">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sort-by-menu"> 
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-offset-1">
                            
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                            <ul class="form-links top_buttons">
                                <li><a href="#" class="gradient_button">Settings</a></li>
                                <li><a href="#" class="gradient_button">View Order</a></li>
                                <li><a href="{{route('car.create')}}">Add Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="full-width">
                    <div class="content-wrap">
                        <div class="row car_listings">


                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle input-checkbox" id="vehicle_1" />
                                <label for="vehicle_1"></label>
                                <div class="angled_badge blue">
                                    <span>405 HP</span>
                                </div>
                                <a class="inventory" href="inventory-listing.html">
                                <div class="title">2012 Porsche Cayenne GTS Sport Utility SUV</div>
                                <img src="images/car-1-200x150.jpg" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Sport Utility Vehicle</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">4WD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">4.8L V8</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">8-Speed Tiptronic</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">19,585</td>
                                    </tr>
                                </table>
                                <table class="options-secondary">
                                    <tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Dark Blue Metallic</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Black / Titanium Blue</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">15 city / 21 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590497</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP1AD29P09LA65818</td>
                                    </tr>
                                </table>
                                <img src="images/carfax.png" alt="carfax" class="carfax" />
                                <div class="price"><b>Price:</b><br>
                                    <div class="figure">$102,995<br>
                                    </div>
                                    <div class="tax">Plus Sales Tax</div>
                                </div>
                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                <div class="clearfix"></div>
                                </a>
                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                            </div>
                            <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                <input type="checkbox" name="a" class="checkbox compare_vehicle" id="vehicle_2" />
                                <label for="vehicle_2"></label>
                                <div class="angled_badge red">
                                    <span>Just Arrived</span>
                                </div>
                                <a class="inventory" href="inventory-listing.html">
                                <div class="title">2009 Porsche Boxster Base Red Convertible</div>
                                <img src="images/car-2-200x150.jpg" class="preview" alt="preview">
                                <table class="options-primary">
                                    <tr>
                                        <td class="option primary">Body Style:</td>
                                        <td class="spec">Convertible</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Drivetrain:</td>
                                        <td class="spec">RWD</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Engine:</td>
                                        <td class="spec">2.9L Mid-Engine V6</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Transmission:</td>
                                        <td class="spec">5-Speed Manual</td>
                                    </tr>
                                    <tr>
                                        <td class="option primary">Mileage:</td>
                                        <td class="spec">26,273</td>
                                    </tr>
                                </table>
                                <table class="options-secondary">
                                    <tr>
                                        <td class="option secondary">Exterior Color:</td>
                                        <td class="spec">Guards Red</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Interior Color:</td>
                                        <td class="spec">Platinum Grey</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">MPG:</td>
                                        <td class="spec">20 city / 30 hwy</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">Stock Number:</td>
                                        <td class="spec">590271</td>
                                    </tr>
                                    <tr>
                                        <td class="option secondary">VIN Number:</td>
                                        <td class="spec">WP0AB2A74AL060306</td>
                                    </tr>
                                </table>
                                <img src="images/carfax.png" alt="carfax" class="carfax" />
                                <div class="price"><b>Price:</b><br>
                                    <div class="figure">$34,995<br>
                                    </div>
                                    <div class="tax">Plus Sales Tax</div>
                                </div>
                                <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                <div class="clearfix"></div>
                                </a>
                                <div class="view-video gradient_button" data-youtube-id="3oh7PBc33dk"><i class="fa fa-video-camera"></i> View Video</div>
                            </div>



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
        </div>
    </div>
    <!--container ends--> 
</section>
<!--content ends-->
<div class="clearfix"></div>
<div id="youtube_video">
    <iframe width="560" height="315" src="#" allowfullscreen style="width: 560px; height: 315px; border: 0;"></iframe>
</div>

@endsection