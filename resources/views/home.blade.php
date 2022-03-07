@extends('layouts.app')

@section('content')
@include('flash::message')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xl-6 col-12 mb-20">
            <div class="  bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Checked-User im-icon-set float-right bg-primary"></i>
                <h3 class="row justify-content-center">{{ $employee_active }}</h3>
                <p class="row justify-content-center">Number of Active Employees</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-6 col-12 mb-20">
            <div class="  bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Checked-User im-icon-set float-right bg-primary"></i>
                <h3 class="row justify-content-center">{{ $employee_inactive }}</h3>
                <p class="row justify-content-center">Number of Inactive Employees</p>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 col-xl-6 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>
                <h3 class="row justify-content-center">{{ $workgroup_active }}</h3>
                <p class="row justify-content-center">Number of Active Workgroups</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-6 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>
                <h3 class="row justify-content-center">{{ $workgroup_inactive }}</h3>
                <p class="row justify-content-center">Number of Inactive Workgroups</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-md-6 col-xl-6 col-12  mb-20   ">
            <div class=" bg-white dashboard-col pl-15 pb-15 pt-15  ">
                <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>
                <h3 class="row justify-content-center">{{ $document_active }}</h3>
                <p class="row justify-content-center">Number of Documents</p>
            </div>
        </div>
    </div>
</div>
@endsection

