<section class="banner-wrap">
    <div class="banner">
        
        <div class="rev_slider_wrapper">            
            <!-- START REVOLUTION SLIDER 5.0 auto mode -->
            <div id="rev_slider" class="rev_slider"  data-version="5.0">
                <ul>    
                    <!-- SLIDE  -->
                    @foreach($slides as $slide)
                    <li data-transition="fade">
                        
                        <!-- MAIN IMAGE -->
                        <img src="{{url('images/slides',$slide->image_link)}}" />                          

                        <!-- LAYERS -->
                        <div class="tp-caption mediumlarge_light_white_center domainate start"
                        data-x="0"
                        data-hoffset="0"
                        data-y="214"
                        
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 

                        data-speed="1000"
                        data-endspeed="300"> </div>
                        
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption internet"
                        data-x="0"
                        data-y="282"
                        data-speed="500"
                        data-start="800"

                        
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-splitin="none" 
                        data-splitout="none" 

                        style="z-index: 6; letter-spacing: -3px;"> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption attract "
                        data-x="0"
                        data-y="369"
                        data-speed="500"
                        data-start="1700"                        
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-splitin="none" 
                        data-splitout="none" 
                        style="z-index: 6; "> </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption more "
                        data-x="100"
                        data-y="425"
                        data-speed="800"
                        data-start="1900"
                        data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-splitin="none" 
                        data-splitout="none"
                        style="z-index: 6; "> </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption qualified"
                        data-x="0"
                        data-y="476"
                        data-speed="800"
                        data-start="2600"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-splitin="none" 
                        data-splitout="none" 
                        style="z-index: 6"> </div>

                    </li>
                    @endforeach

                </ul>               
            </div><!-- END REVOLUTION SLIDER -->
        </div><!-- END REVOLUTION SLIDER WRAPPER -->    

        <script>
        /******************************************
        -   PREPARE PLACEHOLDER FOR SLIDER  -
        ******************************************/
        
        var revapi;
        jQuery(document).ready(function() {     
            revapi = jQuery("#rev_slider").revolution({
                sliderType:"standard",
                sliderLayout:"fullwidth",
                delay:9000,
                navigation: {
                    arrows:{enable:true}                
                },          
                gridwidth:1170,
                gridheight:645      
            });     
        }); /*ready*/
        </script>       
        
        <!-- END REVOLUTION SLIDER --> 
        
        <!-- Content End --> 
        
    </div>
</section>
<section class="message-wrap">
    <div class="container">
        <div class="row">
            <h2 class="col-lg-9 col-md-8 col-sm-12 col-xs-12 xs-padding-left-15">Discover a website for car dealers that converts visitors to <span class="alternate-font">customers</span></h2>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 xs-padding-right-15"> <a href="#" class="default-btn pull-right action_button lg-button">View Our Inventory</a> </div>
        </div>
    </div>
    <div class="message-shadow"></div>
</section>
<!--message-wrap ends-->