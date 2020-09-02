<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('htmlheader')
    @include('frontend.layouts.partials.htmlheader')
@show

<body>

	@include('frontend.layouts.partials.mainheader')


     <!--Contenido-->
     @yield('content')
	 <!--Fin Contenido-->

   	@include('frontend.layouts.partials.footer')

	@section('scripts')
    	@include('frontend.layouts.partials.scripts')
	@show

@yield('custom-css')
@yield('custom-scripts')

</body>
</html>
