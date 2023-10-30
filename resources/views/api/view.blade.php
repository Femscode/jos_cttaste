@extends('api.master')
@section('header')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                   

                    <form class="form w-100" method='post' action="{{ route('updaterestaurant') }}" enctype='multipart/form-data'>@csrf
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Update Restaurant</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Update
                                <a href="/login" class="link-primary fw-bolder">Restaurant</a>
                            </div>
                            <button type="button" class="btn btn-secondary fw-bolder w-30 mb-10">
							    Back</button>
                            <!--end::Link-->
                        </div>
                      
                       
                     
                        <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
                        <!--end::Separator-->
                        <!--begin::Input group-->
                        <div class="row fv-row mb-7">
                            <!--begin::Col-->
                            <div class="col-xl-12">
                                <label class="form-label fw-bolder text-dark fs-6">Restaurant Name</label>
                                <input required class="form-control form-control-lg form-control-solid" type="text"
                                    value="{{ $vendor->name }}" name="name" autocomplete="off" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                       

                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Phone Number</label><br>
                            <label class="form-label text-danger fs-6">Please note that this number must be a whatsapp number that can receive orders</label>
                            <input required class="form-control form-control-lg form-control-solid" type="number"
                                value="{{ $vendor->phone }}" minlength="11" maxlength="11" name="phone" autocomplete="off" />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Email Address</label><br>
                            <label class="form-label text-danger fs-6">Please note that this email is what the vendor will use to login.</label>
                            <input type='hidden' name='id' value='{{ $vendor->id }}'/>
                            <input readonly required class="form-control form-control-lg form-control-solid" type="email"
                                value="{{ $vendor->email }}" name="email" autocomplete="off" />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Location</label>
                            <select required class="form-control form-control-lg form-control-solid" 
                            name="school">
                            <option value='{{ $vendor->school }}'>{{ $vendor->school }}</option>
                            @foreach($address as $add)
                            <option value='{{ $add->name }}'>{{ $add->name }}</option>

                            @endforeach
                           
                            </select>
                        </div>


                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Address</label>
                            <input required class="form-control form-control-lg form-control-solid" type="text"
                                value="{{ $vendor->address }}" name="address" autocomplete="off" />
                        </div>


                      
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6"><b>Working Hours</b></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <!--begin::Options-->
                                <div class="d-flex align-items-center mt-3">
                                    <!--begin::Option-->
                                    <label class="form-check form-check-inline form-check-solid me-5">
                                        <span class="fw-bold ps-2 fs-6">Opening Time</span>
                                        <input class="form-control" value='{{ $vendor->opening_hour }}' name="opening_hour" type="time"
                                            id="opening_hour">
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check form-check-inline form-check-solid">
                                        <span class="fw-bold ps-2 fs-6">Closing Time</span>
                                        <input class="form-control" value='{{ $vendor->closing_hour }}' name="closing_hour" type="time"
                                            id='closing_hour'>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>


                        <!--end::Input group-->
                        <!--begin::Input group-->
                      

                        <!--end::Input group=-->
                        <!--begin::Input group-->
                       <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Restaurant's Display Image(Optional)</label>
                            <input class="form-control form-control-lg form-control-solid" type="file"
                               name='image' />
                        </div>
                       
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-lg btn-primary">
                                <span class="indicator-label">Update Restaurant</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
       
     
      
    </div>
</div>
@section('script') 
<script>
    $(document).ready(function() {
        
        $("#food_category").on('change',function() {
            var currentfood = $("#food_category").val()
            if(currentfood == 'food') {
                $("#select_as_applied").show()
                $("#food").show()
                $("#cakes").hide()
                $("#shawarma").hide()
                $("#others").hide()
            }
            else if(currentfood == 'cakes') {
                $("#select_as_applied").show()
                $("#cakes").show()
                $("#food").hide()
                $("#shawarma").hide()
                $("#others").hide()
            }
            else if(currentfood == 'shawarma') {
                $("#select_as_applied").show()
                $("#shawarma").show()
                $("#cakes").hide()
                $("#food").hide()
                $("#others").hide()
            }
            else {
                $("#select_as_applied").show()
                $("#others").show()
                $("#cakes").hide()
                $("#shawarma").hide()
                $("#food").hide()
            }
            // alert(currentfood)
        })

        $("#confirm_password").on('input', function() {
            var password = $("#password").val()
            if(password == $("#confirm_password").val()) {
                $("#password_status_danger").hide()
                $("#password_status_success").show()
                
                $("#password_status_success").text("Password matched")
            }
            else {
                $("#password_status_success").hide()
                $("#password_status_danger").show()
                
                $("#password_status_danger").text("Password not matched")
            }
        })
    });
</script>
@endsection
@endsection