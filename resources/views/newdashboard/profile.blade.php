@extends('newdashboard.master')
@section('header')
@endsection
@section('content')


<div class="container-fluid">

   

    <div class="row">
       
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Profile Details</h3>
                    <div class='d-flex'>Unique Website : <input class='form-control' value='https://jos.cttaste.com/{{ $user->slug }}'/></div>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <!-- <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"> -->
                <form id="update_profile" class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype='multipart/form-data' novalidate="novalidate">@csrf
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Restaurant Display Picture</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../assets/media/svg/avatars/blank.svg')">
                                    <!--begin::Preview existing avatar-->
                                    @if(substr($rest->image,0,5) == 'https')
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{$rest->image ?? 'normal.png'}}')"></div>
                                    @else 
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url('profilePic/{{$rest->image ?? 'normal.png'}}')"></div>
                                    
                                    @endif
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change restaurant picture">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" id='image' name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <input required type="text" id='firstname' name="fname" value='{{Auth::user()->firstname ?? ""}}' class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name">
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <input required type="text" id='lastname' name="lname"  value='{{Auth::user()->lastname ?? ""}}' class="form-control form-control-lg form-control-solid" placeholder="Last name">
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Restaurant Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                <input type="text" id='name' name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="{{Auth::user()->name}}">
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Short Description</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                <input maxlength="30" type="text" id='description' name="description" class="form-control form-control-lg form-control-solid" placeholder="Short description of restaurant" value="{{Auth::user()->description}}">
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Contact Phone</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"  title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                <input type="tel" name="phone" id='phone'  value='{{Auth::user()->phone ?? ""}}' class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{Auth::user()->phone}}">
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Email Address</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Email address must be active"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                <input type="tel" name="phone" id='email'  class="form-control form-control-lg form-control-solid" readonly placeholder="Email Address" value="{{Auth::user()->email}}">
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                    
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">School</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Country of origination" aria-label="Country of origination"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                <select name="school" id='school' aria-label="Select a school" data-control="select2" data-placeholder="Select a school..." class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible" data-select2-id="select2-data-7-llbv" tabindex="-1" aria-hidden="true">
                                    <option value="{{Auth::user()->school ?? ''}}" data-select2-id="select2-data-9-1hiw">{{Auth::user()->school ?? 'Select School'}}</option>
                                    <option value="FUNAAB">FUNAAB</option>
                                    <option value="FUOYE">FUOYE</option>
                                    <option value="MAPOLY">MAPOLY</option>
                                    <option value="OSHIELE">OSHIELE</option>
                                    <option value="LASU">LASU</option>
                                    <option value="ILARO-POLY">ILARO-POLY</option>
                                    <option value="KWASU">KWASU</option>
                                    <option value="Lead City University, Ibadan">Lead City University, Ibadan</option>

                                </select>
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                    
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Working Hours</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                <!--begin::Options-->
                                <div class="d-flex align-items-center mt-3">
                                    <!--begin::Option-->
                                    <p>Click <a href='/working_hours'>here</a> to update working hours.</p>
                                    {{-- <label class="form-check form-check-inline form-check-solid me-5">
                                        <span class="fw-bold ps-2 fs-6">Opening Time</span>
                                        <input class="form-control" name="opening_hour" type="time" value="{{Auth::user()->opening_hour ?? ''}}" id="opening_hour">
                                    </label> --}}
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    {{-- <label class="form-check form-check-inline form-check-solid">
                                        <span class="fw-bold ps-2 fs-6">Closing Time</span>
                                        <input class="form-control" name="closing_hour" type="time" value="{{Auth::user()->closing_hour ?? ''}}" id='closing_hour'>
                                    </label> --}}
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-0">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
                            <!--begin::Label-->
                            <!--begin::Label-->
                            <div class="col-lg-8 mb-2 d-flex align-items-center">
                                <div class="form-check form-check-solid form-switch fv-row">
                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked">
                                    <label class="form-check-label" for="allowmarketing"></label>
                                </div>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Update</button>
                    </div>
                    <!--end::Actions-->
                <input type="hidden"><div></div></form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
</div>
    </div>
    <!-- end row -->


  
    <!-- end row -->
</div>
@section('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })

        $("#update_profile").on("submit", async function(e) {
            e.preventDefault();
            Swal.fire('Updating profile, please wait...')
            var image = $('#image')[0].files;
            var fd = new FormData;
            fd.append('name', $("#name").val());
            fd.append('firstname', $("#firstname").val());
            fd.append('lastname', $("#lastname").val());
            fd.append('phone', $("#phone").val());
            fd.append('email', $("#email").val());
            fd.append('school', $("#school").val());
            fd.append('description', $("#description").val());
            // fd.append('opening_hour', $("#opening_hour").val());
            // fd.append('closing_hour', $("#closing_hour").val());
            console.log(image[0],'tje image')
            if(image[0] != undefined) {
            fd.append('image', image[0]);
            }
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('updateprofile')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    Swal.close()
                    Toast.fire({
                        icon: 'success',
                        title: 'Profile Updated Successfully'
                        }) 
                
                window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Swal.fire('Opps!', 'Profile not updated, contact the administrator', 'error')
                }
            })

        })


    })
</script>
@endsection
@endsection