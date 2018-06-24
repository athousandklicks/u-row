<!doctype html>
<html lang="{{ app()->getLocale() }}">

	<head>
		@include('partials.head')
	</head>

	<body>
		<!--Header Start-->
		<header  data-spy="affix" data-offset-top="1" class="clearfix">
				@include('partials.top-nav')
				@include('partials.navigation')
		</header>
		<!--Header End-->

		<div class="clearfix"></div><!--Gives space between divs-->

		<section class="banner-wrap">
			@yield('slider')
		</section>

		<div class="message-shadow"></div><!--Shows Shadow-->
		<div class="clearfix"></div><!--Gives space between divs-->

		<!--Main Content Area Starts-->
		<section class="content">
    		<div class="container">
    			@yield('content')
    		</div>
		</section>	
		<!--container ends--> 

		<!--Footer Start-->
		<footer>
		    @include('partials.footer')
		</footer>
		<!--Footer Ends-->


		<div class="clearfix"></div><!--Gives space between divs-->
		<!--Lower footer with Social media and others stuff starts-->
		<section class="copyright-wrap">
			@include('partials.lower-footer')
		</section>
		<!--Lower footer with Social media and others stuff ends-->

		<!--Back to top button starts-->
		<div class="back_to_top"> 
			<img src="/images/arrow-up.png" alt="scroll up" /> 
		</div>
		<!--Back to top button ends-->

		<!--Javascripts starts-->
		@include('partials.js')
		@yield('scripts')
		<!--Javascripts ends-->

		</body>
</html>