@extends('adminlte::page')

@section('title', 'Sistem Informasi Perpustakaan')

@section('content_top_nav_right')
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
        <a href="#" class="nav-link" data-toggle="dropdown">
            <i class="far fa-envelope"></i>
            <span class="badge badge-success navbar-badge">4</span>
        </a>
    </li>

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">10</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
    </li>

    <!-- Task Dropdown Menu -->
    <li class="nav-item dropdown">
        <a href="#" class="nav-link" data-toggle="dropdown">
            <i class="far fa-flag"></i>
            <span class="badge badge-danger navbar-badge">9</span>
        </a>
    </li>

    <div class="user-panel">
        <div class="pull-left image shadow-none">
          <img src="vendor/adminlte/dist/img/Me.jpg" class="img-circle" alt="User Image">
        </div>
    </div>
@stop

@section('content_header')
@stop

@section('content')
    <div class="row" align="center">
        <div class="col-3">
            
        </div>
        <div class="col-6">
            <div class="card card-primary card-outline">
                <div class="card-header">
                Home
            </div>

            <div class="card-body">
                You are logged in!
            </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Tugas FramWorkWeb
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy 2020</strong><a href="#"><b> Teguh Junian</b></a>
@stop
