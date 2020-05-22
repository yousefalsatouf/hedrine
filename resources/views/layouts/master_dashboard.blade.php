<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ULB | Hedrinen</title>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/adminlte/css/adminlte.min.css')}}">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('/adminlte/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/hedrine.css')}}">
   
    
    
  </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('../partials/nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   @include('/partials/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
           <h1 class="m-O text-dark"> {{ $title }}</h1>
            {{-- <h1 class="">@yield('content_title')</h1> <!--affiche le mot plantes ou dci--> --}}
          </div>
        </div>
      </div>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        @yield('content_dashboard')
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>
  <!-- /.Main content -->
  
 @include('/partials/footer')
 <!-- page script -->
 

