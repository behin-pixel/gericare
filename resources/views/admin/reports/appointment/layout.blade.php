@extends('layouts.admin')

@section('admin_title') Home @endsection

@section('admin_content')
   <ul class="nav nav-gradient w-100">
      
        <li class="nav-item d-flex">
            <a class="nav-link {{ Route::is('reports.doctorapp.report') ? "active" : "" }}" href="{{ route('reports.doctorapp.report') }}">
                <i class="fa-building fa me-2"></i>
                Doctors Appointment 
            </a>
        </li>
     
        <li class="nav-item">
            <a class="nav-link {{ Route::is(['reports.departmentapp.report']) ? "active" : "" }}" href="{{ route('reports.departmentapp.report') }}">
                <i class="fa-cog fa me-2"></i>
                Department Appointment 
            </a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link {{ Route::is(['reports.serviceapp.report']) ? "active" : "" }}" href="{{ route('reports.serviceapp.report') }}">
                <i class="fa-cog fa me-2"></i>
                Service Appointment 
            </a>
        </li>
     
       
   </ul>
   <div class="my-4">
      @yield('admin_master_content')
   </div>
@endsection
