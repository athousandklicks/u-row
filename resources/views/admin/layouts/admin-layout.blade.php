<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  @include('admin.layouts.partial.head')
  @yield('stylesheets')
</head>


<body>
    <header  data-spy="affix" data-offset-top="1" class="clearfix">
        @include('admin.layouts.partial.top-nav')
    </header>

    <div class="message-shadow"></div><!--Shows Shadow-->
    <div class="clearfix"></div><!--Gives space between divs-->

    <!--Main Content Area Starts-->
    <section class="content">
        <div class="clearfix"></div>
        <div class="top-space"></div>

        <div class="message-shadow"></div>
        <div class="clearfix"></div>
        @include('admin.layouts.partial.messages')
        @yield('car-menu')
        @yield('content')
    </section>
    <!--container ends--> 



    <div class="clearfix"></div><!--Gives space between divs-->
    <!--Lower footer with Social media and others stuff starts-->
    <section class="copyright-wrap">

        @include('admin.layouts.partial.lower-footer')
    </section>
    <!--Lower footer with Social media and others stuff ends-->

    <!--Back to top button starts-->
    <div class="back_to_top"> 
        <img src="/images/arrow-up.png" alt="scroll up" /> 
    </div>
    <!--Back to top button ends-->

    <!--Javascripts starts-->
    @include('admin.layouts.partial.myscripts')
    @yield('scripts')
    <!--Javascripts ends-->

</body>
</html>
