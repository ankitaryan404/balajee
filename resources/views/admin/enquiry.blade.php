@extends('admin.master.layout')
@section('title','User Enquiry')
@section('enquiry','active')
@section('section')
<div class="influence-finder">

<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h3 class="mb-2">User Enquiry</h3>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">User Enquiry</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- ============================================================== -->
        <!-- search bar  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- end search bar  -->
        @forelse($data as $data)
        <!-- ============================================================== -->
        <div class="col-xl-11 col-lg-12 col-md-10 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- card influencer one -->
           
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                           
                                <div class="pl-xl-4">
                                    <div class="m-b-0">
                                        <div class="user-avatar-name d-inline-block">
                                            <h2 class="font-24 m-b-10">{{$data->name}}</h2>
                                        </div>
                                        <div class="rating-star d-inline-block pl-xl-2 mb-2 mb-xl-0">
                                          
                                            <h4 class="d-inline-block text-dark"> {{$data->email}} &nbsp;&nbsp;&nbsp;&nbsp;
                                            </h4> 
                                            <h4 class="d-inline-block text-dark">&nbsp;&nbsp; Submitted At : {{date("d-m-Y", strtotime($data->created_at))}} &nbsp;&nbsp;&nbsp;&nbsp;
                                            </h4> 
                                        </div>
                                    </div>
                                    <div class="user-avatar-address">
                                        <p class="mb-2"><i class="fa fa-mobile mr-2  text-primary"></i>{{$data->mobile}} 
                                        </p>

                                    </div>
                                    <div class="user-avatar-address">
                                  <h4>  Interest =>    {{$data->interested}}  </h4> 
                                    

                                    </div>

                                </div>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>

            </div>
            @empty
            <h3>No enquiries found</h3>
        @endforelse
    </div>
    </div>

</div>

@endsection