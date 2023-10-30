@extends('api.master')
@section('header')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                   

                    <form class="form w-100" method='post' action="{{ route('saverestaurant') }}" enctype='multipart/form-data'>@csrf
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Create New Restaurant</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Create New
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
                                    placeholder="Input restaurant's name" name="name" autocomplete="off" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                       

                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Phone Number</label><br>
                            <label class="form-label text-danger fs-6">Please note that this number must be a whatsapp number that can receive orders</label>
                            <input required class="form-control form-control-lg form-control-solid" type="number"
                                placeholder="Input phone number" minlength="11" maxlength="11" name="phone" autocomplete="off" />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Email Address</label><br>
                            <label class="form-label text-danger fs-6">Please note that this email is what the vendor will use to login.</label>
                            <input required class="form-control form-control-lg form-control-solid" type="email"
                                placeholder="Input email address" name="email" autocomplete="off" />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Location</label>
                            <select required class="form-control form-control-lg form-control-solid" 
                            name="school">
                            <option value=''>--Select Location--</option>
                            @foreach($address as $add)
                            <option value='{{ $add->name }}'>{{ $add->name }}</option>

                            @endforeach
                           
                            </select>
                        </div>


                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Address</label>
                            <input required class="form-control form-control-lg form-control-solid" type="text"
                                placeholder="Address of restaurant" name="address" autocomplete="off" />
                        </div>


                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Category</label>
                            <select id='food_category' required
                                class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="restaurant_category" autocomplete="off">
                                <option value=''>--Select Category--</option>
                                <option value='food'>Foods</option>
                                <option value='cakes'>Cakes and Pasteries </option>
                                <option value='shawarma'>Shawarma and Grillz </option>
                                <option value='others'>Others</option>
                            </select>
                        </div>
                        

                        <div class="fv-row mb-7">
                            <label id='select_as_applied' style='display:none' class="form-label fw-bolder text-dark fs-6">Select as applied</label>
                            <div style='display:none' class="card-body pt-2 row" id='food'>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Rice">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Rice</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Porridge">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a
                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Porridge</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Swallows">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a
                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Swallows</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Doughtnut">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Bread &
                                            Beans</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Salad">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Moi-moi
                                            and Salad</a>
                                    </div>
                                </div>
                            </div>

                            <div style='display:none' class="card-body pt-2 row" id='cakes'>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Cakes">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Cup Cakes</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Ceremonial Cakes">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a
                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Ceremonial Cakes</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Chocolate Cakes">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a
                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Chocolate Cakes</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Cocktails">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Cocktails and Mocktails</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Meat_pie">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Meat and Chicken Pie</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Toast_bread">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Toast Bread</a>
                                    </div>
                                </div>
                            </div>

                            <div style='display:none' class="card-body pt-2 row" id='shawarma'>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Shawarma">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Shawarma & Pizza</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Grillz">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a
                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Grillz</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Chicken and Chips">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a
                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Chicken & Chips</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Cocktails and Mocktails">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Cocktails and Mocktails</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Ice Cream">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Ice Cream</a>
                                    </div>
                                </div>
                                
                            
                                
                            </div>

                            <div style='display:none' class="card-body pt-2 row" id='others'>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Pap and Tabioka">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Pap & Tabioka</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Ewa Agonyin ">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a
                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Ewa Agonyin</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Bread and Akara">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a
                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Bread and Akara</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Pepper Soup">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Pepper Soup</a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-items-center mb-4">
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" name='selections[]' type="checkbox" value="Soup">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a class="text-gray-800 text-hover-primary fw-bolder fs-6">Soup</a>
                                    </div>
                                </div>
                            
                            </div>

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
                                        <input class="form-control" name="opening_hour" type="time"
                                            id="opening_hour">
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check form-check-inline form-check-solid">
                                        <span class="fw-bold ps-2 fs-6">Closing Time</span>
                                        <input class="form-control" name="closing_hour" type="time"
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
                            <label class="form-label fw-bolder text-dark fs-6">Restaurant's Display Image</label>
                            <input required class="form-control form-control-lg form-control-solid" type="file"
                               name='image' />
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                                <input required class="form-check-input" type="checkbox" name="toc" value="1" />
                                <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                    <a class="ms-1 link-primary">Terms and conditions</a>.</span>
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-lg btn-primary">
                                <span class="indicator-label">Create Restaurant</span>
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