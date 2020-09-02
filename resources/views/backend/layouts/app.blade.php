<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('htmlheader')
    @include('backend.layouts.partials.htmlheader')
@show

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

 	@include('backend.layouts.partials.mainheader')

    @include('backend.layouts.partials.sidebar')

      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('page_title', 'Your title here')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('page_title', 'Your title here')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <!--Contenido-->
     @yield('content')
	 <!--Fin Contenido-->

    </div>
    <!-- /.content-wrapper -->
  @include('backend.layouts.partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

	@section('scripts')
    	@include('backend.layouts.partials.scripts')
	@show

@yield('custom-css')
@yield('custom-scripts')

</body>
</html>
