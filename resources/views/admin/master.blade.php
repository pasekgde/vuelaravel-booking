<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  
  <!-- Bootstrap 3.3.7 -->  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <link rel="stylesheet" href="{{URL::asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}" type="text/css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{URL::asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}" type="text/css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('admin/dist/css/AdminLTE.min.css')}}" type="text/css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{URL::asset('admin/dist/css/skins/_all-skins.min.css')}}" type="text/css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{URL::asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" type="text/css">
   <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('admin.layouts.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('judul')
    </section>

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('admin.layouts.footer')

</div>

<!-- jQuery 3 -->

<script src="{{URL::asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{URL::asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- datepicker -->
<script src="{{URL::asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{URL::asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script src="https://unpkg.com/vue@2.6.10/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@yield('script')
</body>
</html>
