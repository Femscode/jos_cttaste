@extends('api.master')
@section('header')
@endsection
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Manager's Dashboard</h4>
             </div>
             @if(Session::has('message'))
             <div class='alert alert-success'>
                {{ Session::get('message') }}
             </div>
             @endif
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p>{{ $user->name }}</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="api_user/assets/images/profile-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ asset('public/profilePic/'.$user->image) }}" alt=""
                                    class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">{{ $user->name }}</h5>
                            <p class="text-muted mb-0 text-truncate">Admin</p>
                        </div>

                        <div class="col-sm-8">
                            <div class="pt-4">

                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-size-15">125</h5>
                                        <p class="text-muted mb-0">Projects</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="font-size-15">$1245</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="/manager_profile"
                                        class="btn btn-primary waves-effect waves-light btn-sm">View
                                        Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title mb-4">Social Source</h4> --}}
                        <div class="text-center">
                            <div class="avatar-sm mx-auto mb-4">
                                <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                                    <i class="mdi mdi-facebook text-primary"></i>
                                </span>
                            </div>
                            <p class="font-16 text-muted mb-2"></p>
                            <h5><a href="javascript: void(0);" class="text-dark">Social Link
                                 </a></h5>
                            <p class="text-muted">Kindly note that it is important that you follow all of our social pages, as we promise to follow back.</p>
                           
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <div class="social-source text-center mt-3">
                                    <div class="avatar-xs mx-auto mb-3">
                                        <span class="avatar-title rounded-circle bg-pink font-size-16">
                                            <i class="mdi mdi-instagram text-white"></i>
                                        </span>
                                    </div>
                                    <a style='cursor:pointer' href='https://instagram.com/ct_taste?igshid=YmMyMTA2M2Y=' class="font-size-15">Instagram</a>
                                   
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="social-source text-center mt-3">
                                    <div class="avatar-xs mx-auto mb-3">
                                        <span class="avatar-title rounded-circle bg-primary font-size-16">
                                            <i class="mdi mdi-facebook text-white"></i>
                                        </span>
                                    </div>
                                    <a style='cursor:pointer' href='https://www.facebook.com/107641935325820/posts/pfbid02HNSTgXffyTr5iEeSqs1aiXhNmN9RDaLcfCZTJC63EsVRXz36y7aw8RfSNHqRRhncl/?sfnsn=scwspmo' class="font-size-15">Facebook</a>
                                   
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="social-source text-center mt-3">
                                    <div class="avatar-xs mx-auto mb-3">
                                        <span class="avatar-title rounded-circle bg-info font-size-16">
                                            <i class="mdi mdi-twitter text-white"></i>
                                        </span>
                                    </div>
                                    <a style='cursor:pointer' href='https://twitter.com/ct_taste?s=20&t=izEI3zXAe5nU69qdNJINTA' class="font-size-15">Twitter</a>
                                   
                                </div>
                            </div>
                            
                        </div>
    
                    </div>
                </div>
           
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Restaurants</p>
                                    <h4 class="mb-0">{{ count($restaurants) }}</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bx-copy-alt font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Orders</p>
                                    <h4 class="mb-0">{{ count($orders) }}</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center ">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-archive-in font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Foods</p>
                                    <h4 class="mb-0">{{ count($foods) }}</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="card">
                <div class="card-body">
                    <div class='row'>
                    <div class="card-title col-md-8">My Restaurants</div>
                    <a class='col-md-4 btn btn-sm btn-primary' href='/createrestaurant'>Create New Restaurant >></a>
                </div>
                    <div class="table-responsive dataTables_length" id='datatable_length'>
                        <table id='datatable' class="table table-bordered dt-responsive nowrap w-100 align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    
                                    <th class="align-middle">Name</th>
                                    <th class="align-middle">Location</th>
                                    <th class="align-middle">Link</th>
                                    <th class="align-middle">Orders</th>
                                    <th class="align-middle">Check Orders</th>
                                    <th class="align-middle">View Details</th>
                                    <th class="align-middle">Actions</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($restaurants as $vendor)
                                <tr>
                                    
                                    <td><a href="javascript: void(0);"
                                            class="text-body fw-bold">{{ $vendor->name }}</a> </td>
                                    <td>
                                       {{ $vendor->address }}
                                     
                                    </td>
                                    <td>
                                       <a href='https://cttaste.com/{{ $vendor->slug }}'>https://cttaste.com/{{ $vendor->slug }}</a>
                                    </td>
                                    <td>
                                        <span
                                            class="badge badge-pill badge-soft-success font-size-11">{{count($vendor->orders)}}</span>
                                    </td>
                                    <td>
                                       
                                        <a href="managerorder/{{$vendor->id}}" class="btn btn-sm btn-primary">View Order</a>
                                    </td>
                                    <td>
                                       
                                        <a href="/viewrestaurant/{{ $vendor->id }}"
                                            class="btn btn-warning btn-sm waves-effect waves-light">
                                            View Details
                                        </a>
                                    </td>
                                  
                                   
                                    <td>
                                        
                                        <div class="menu-item px-3 mb-1">
                                            @if($vendor->availability == 0)
                                            <a onclick='return confirm("Are you sure you want to enable {{$vendor->name}}")' href="disable/{{$vendor->id}}" class="btn btn-sm btn-success">Enable</a>
                                            @else
                                            <a onclick='return confirm("Are you sure you want to disable {{$vendor->name}}")' href="disable/{{$vendor->id}}" class="btn btn-sm btn-secondary">Disable</a>
                                            @endif

                                        </div>
                                        <div class="menu-item px-3">
                                            @if($vendor->approve == 0)
                                            <a onclick='return confirm("Are you sure you want to approve {{$vendor->name}}")' href="approveuser/{{$vendor->id}}" class="btn btn-sm btn-success">Approve</a>
                                            @else
                                            <a onclick='return confirm("Are you sure you want to disapprove {{$vendor->name}}")' href="disapproveuser/{{$vendor->id}}" class="btn btn-sm btn-secondary">Disapprove</a>
                                            @endif

                                        </div>

                                     

                                        <div class="menu-item px-3 my-1">
                                            <a href="managerfood/{{$vendor->id}}" class="btn btn-sm btn-outline-danger">View Food</a>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="https://wa.me/234{{substr($vendor->phone,1)}}?text=" class="btn btn-sm btn-success">Message User</a>
                                        </div>
                                       
                                        <div class="menu-item px-3 my-1">
                                        <a onclick='return confirm("Are you sure you want to delete this restaurant?")' href='/deleterestaurant/{{ $vendor->id }}' class='btn btn-sm btn-danger'>Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

   
    <!-- end row -->

    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transaction</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check font-size-16 align-middle">
                                            <input class="form-check-input" type="checkbox"
                                                id="transactionCheck01">
                                            <label class="form-check-label"
                                                for="transactionCheck01"></label>
                                        </div>
                                    </th>
                                    <th class="align-middle">Order ID</th>
                                    <th class="align-middle">Billing Name</th>
                                    <th class="align-middle">Date</th>
                                    <th class="align-middle">Total</th>
                                    <th class="align-middle">Payment Status</th>
                                    <th class="align-middle">Payment Method</th>
                                    <th class="align-middle">View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input class="form-check-input" type="checkbox"
                                                id="transactionCheck02">
                                            <label class="form-check-label"
                                                for="transactionCheck02"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript: void(0);"
                                            class="text-body fw-bold">#SK2540</a> </td>
                                    <td>Neal Matthews</td>
                                    <td>
                                        07 Oct, 2019
                                    </td>
                                    <td>
                                        $400
                                    </td>
                                    <td>
                                        <span
                                            class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            data-bs-toggle="modal"
                                            data-bs-target=".transaction-detailModal">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end row -->
</div>
@section('script') 
@endsection
@endsection