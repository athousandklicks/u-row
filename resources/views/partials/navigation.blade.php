<div class="bottom-header" >
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid"> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><span class="logo"><span class="primary_text">U-ROW</span> <span class="secondary_text">AUTOMOBILE</span></span></a> </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



                        <ul class="nav navbar-nav pull-left">

                            <li class="{{Request::is('/') ? "active" : ""}}"><a href="/">Home</a></li>
                            <li class="{{Request::is('inventory') ? "active" : ""}}"><a href="/inventory">Inventory</a></li>
                            <li class="{{Request::is('team') ? "active" : ""}}"><a href="/team">Our Team</a></li>
                            <li class="{{Request::is('contact') ? "active" : ""}}"><a href="/contact">Contact</a></li>
                        </ul>

                        <div class="pull-right">
                            <a href="{{route('cart.index')}}">
                        <span class="garage">
                        VIEW YOUR GARAGE</span>  
                        <span class="alert badge">
                            @if(Cart::count() == 0)
                            Is Empty
                            @elseif(Cart::count() > 1)
                            {{Cart::count()}} Cars
                            @else
                            {{Cart::count()}} Car
                            @endif
                    </span></a>

                
            </div> 
        </div>
        <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
</nav>
</div>
<div class="header_shadow"></div>
</div>