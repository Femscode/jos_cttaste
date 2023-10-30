@extends('backend.master')
@section('header_link')
@endsection
@section('content')

<!-- edit category modal -->
<div class="modal fade" id="kt_modal_invite_friends2" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-3 mx-xl-10 pt-0 pb-1">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Edit Category</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">If you need more info, please check out
                        <a href="#" class="text-danger link-primary fw-bolder">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-5 my-15">
                    <!--begin::Form-->
                    <form method='post' id='update_category' class="form fv-plugins-bootstrap5 fv-plugins-framework">
                        @csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Category Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input type='hidden' id='edit_id' />
                            <input required type="text" id='edit_category_name' class="form-control form-control-solid"
                                placeholder="E.g Drinks, Swallow, Cakes" name="name" value="">


                        </div>

                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel"
                                class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                    </form>
                    <!--end::Form-->
                </div>


            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<!-- end of edit category modal -->
<div class="modal fade" id="kt_modal_menu" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-3 mx-xl-10 pt-0 pb-1">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Create Menu</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">If you need more info, please check out
                        <a href="#" class="text-danger link-primary fw-bolder">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-5 my-15">
                    <!--begin::Form-->
                    <!-- <form method='post' action='{{route("createfood")}}' class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf -->
                    <form id='createfood' enctype="multipart/form-data">
                        <!--begin::Input group-->

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input required type="text" id='food_name' class="form-control form-control-solid"
                                placeholder="e.g fried rice, full chicken, chocolate cake" name="name" value="">


                        </div>

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Price(#)</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input required type="number" id='price' class="form-control form-control-solid"
                                placeholder="Input Food Price" name="price" value="">


                        </div>

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Choose Category</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <select required class="form-control form-control-solid" name="category_id" id='category_id'
                                value="">
                                <option value=''>Select Category</option>
                                @foreach($categories as $category)
                                <option value='{{$category->id}}'>{{$category->name}}</option>
                                @endforeach
                            </select>


                        </div>


                        <div id='selectimage' class='fv-plugins-icon-container'>
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Image <span class='text-danger'></span></span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input type="file" required id='image' class="form-control form-control-solid" name='name'
                                value="">

                        </div>
                        <div>
                            <br>
                            <p id='showimage2'>Click <a id='showimage' style='color:blue;cursor:pointer'>here</a> to
                                select from our list of food images</p>

                            <input id='selectedimagespan' type='hidden'>
                        </div>

                        <div id='imageContainer' class='fv-plugins-icon-container' style='display:none'>
                            <!--begin::Label-->
                            <br>
                            <p>Click <a id='hideimage' style='color:blue;cursor:pointer'>here</a> to upload your own
                                picture</p>
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Search for food</span></span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>

                            <!--end::Label-->
                            <input id='food_search' type="text" placeholder="Rice" id='image'
                                class="form-control form-control-solid" value="">
                            <br>
                            <div class="row" id='listimages'>
                                @foreach($foodimages as $pp)
                                <img src='https://cttaste.com/cttaste_files/public/foodimages/{{ $pp->image }}'
                                    data-name='{{ $pp->category }}' data-image='{{ $pp->image }}'
                                    class="selectedimage img-thumbnail rounded m-5" style='width:100px;height:100px'>
                                @endforeach
                            </div>



                        </div>

                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel"
                                class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                    </form>
                    <!--end::Form-->
                </div>


            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<div class="modal fade" id="kt_modal_menu2" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-3 mx-xl-10 pt-0 pb-1">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Edit Menu</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">If you need more info, please check out
                        <a href="#" class="text-danger link-primary fw-bolder">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-5 my-15">
                    <!--begin::Form-->
                    <!-- <form method='post' action='{{route("createfood")}}' class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf -->
                    <form method='post' id='updatefood' enctype="multipart/form-data"
                        class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf
                        <!--begin::Input group-->


                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input required type="text" id='edit_menu_name' class="form-control form-control-solid"
                                placeholder="e.g fried rice, full chicken, chocolate cake" name="name" value="">


                        </div>

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Price(#)</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input type='hidden' id='edit_menu_id'>
                            <input required type="number" id='edit_menu_price' class="form-control form-control-solid"
                                placeholder="Input category name" name="price" value="">
                        </div>

                        {{-- <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Available Quant.</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->

                            <input required type="number" id='edit_menu_quantity'
                                class="form-control form-control-solid" placeholder="Input available quantity"
                                name="quantity" value="">
                        </div> --}}

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Choose Category</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <select required class="form-control form-control-solid" name="category_id"
                                id='edit_menu_category_id' value="">
                                <option value=''>Select Category</option>
                                @foreach($categories as $category)
                                <option value='{{$category->id}}'>{{$category->name}}</option>
                                @endforeach
                            </select>


                        </div>


                        <div id='edit_selectimage' class='fv-plugins-icon-container'>
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Image <span class='text-danger'>(Optional)</span></span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input type="file" id='edit_menu_image' class="form-control form-control-solid" name='name'
                                value="">

                        </div>
                        <div>
                            <br>
                            <p id='edit_showimage2'>Click <a id='edit_showimage'
                                    style='color:blue;cursor:pointer'>here</a> to select from our list of food images
                            </p>

                            <input id='edit_selectedimagespan' type='hidden'>
                        </div>

                        <div id='edit_imageContainer' class='fv-plugins-icon-container' style='display:none'>
                            <!--begin::Label-->
                            <br>
                            <p>Click <a id='edit_hideimage' style='color:blue;cursor:pointer'>here</a> to upload your
                                own picture</p>
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Search for food</span></span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a card holder's name"
                                    aria-label="Specify a card holder's name"></i>
                            </label>

                            <!--end::Label-->
                            <input id='edit_food_search' type="text" placeholder="Rice" id='edit_image'
                                class="form-control form-control-solid" value="">
                            <br>
                            <div class="row" id='edit_listimages'>
                                @foreach($foodimages as $pp)
                                <img src='https://cttaste.com/cttaste_files/public/foodimages/{{ $pp->image }}'
                                    data-name='{{ $pp->category }}' data-image='{{ $pp->image }}'
                                    class="edit_selectedimage img-thumbnail rounded m-5"
                                    style='width:100px;height:100px'>
                                @endforeach
                            </div>



                        </div>


                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel"
                                class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                    </form>
                    <!--end::Form-->
                </div>


            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<!--end::Header-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->

    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="mt-4 container-xxl">
            <!--begin::Row-->
            @if($user->approve == 1)
            <label style='margin-top:40px;background:#d4edda !important;color:#155724;border:1px dashed #155724' class=" p-7 d-flex align-items-center mb-5"
                for="kt_modal_two_factor_authentication_option_1">
                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                <span class="svg-icon svg-icon-4x me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3"
                            d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                            fill="black"></path>
                        <path
                            d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                            fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->

                <span class="d-block fw-bold text-start">
                    <span class="text-dark fw-bolder d-block fs-3">Welcome back, {{ $user->name }}</span>
                    <span class="fw-bold fs-6" style='color:#155724'>
                       Click <a href='checkreviews/{{ $user->uuid }}'>here</a> to check your customer's reviews to help improve your services.
                    </span>
                </span>
            </label>

            @else

            <label class="btn btn-outline btn-warning-dashed btn-outline-default p-7 d-flex align-items-center mb-5"
                for="kt_modal_two_factor_authentication_option_1">
                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                <span class="svg-icon svg-icon-4x me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3"
                            d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                            fill="black"></path>
                        <path
                            d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                            fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->

                <span class="d-block fw-bold text-start">
                    <span class="text-dark fw-bolder d-block fs-3">NOTICE !!!</span>
                    <span class="text-muted fw-bold fs-6">
                        Please note that for you to start selling on CTtaste, you have to get your restaurant
                        approved by completing your profile and clicking on the approve button below.<br>
                        <a href='https://wa.me/2349058744473?text=Hi%20Admin,%20%0a--�--%0aI%20just%20finish%20setting%20up%20my%20account%20at%20CTTaste,%20you%20can%20check%20out%20my%20restaurant%20profile({{$user->name}})%20for%20proper%20verification%20and%20approval.'
                            class='btn-sm btn btn-primary'>Approve</a>
                    </span>
                </span>
            </label>
            @endif
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Mixed Widget 2-->
                    <div class="card card-xl-stretch">
                        <!--begin::Header-->
                        <!-- <div class="card-header border-0" style='background:#F2C98A'>
                                <h3 class="card-title fw-bolder text-white"></h3>
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                      
                                    </button>
                                 
                                </div>
                            </div> -->
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Chart-->
                            <!-- <div class="mixed-widget-2-chart card-rounded-bottom" data-kt-color="danger" style="background:#F2C98A;height: 200px; min-height: 200px;"> -->
                            @if($user->image !== null)
                            <div class="mixed-widget card-rounded-bottom" data-kt-color="danger"
                                style="background:url('https://cttaste.com/cttaste_files/public/profilePic/{{ $user->image }}');background-size:cover;height: 250px; min-height: 200px;">
                                @else
                                <div class="mixed-widget card-rounded-bottom" data-kt-color="danger"
                                    style="background:url('assets/images/banner3.jpeg');background-size:cover;height: 250px; min-height: 200px;">
                                    @endif
                                    {{--
                                    style="background:url('assets/images/banner3.jpeg');background-size:cover;height:
                                    250px; min-height: 200px;"> --}}

                                </div>
                                <!--end::Chart-->
                                <!--begin::Stats-->
                                <div class="card-p mt-n20 position-relative">
                                    <!--begin::Row-->

                                    <div class="row g-0">
                                        <!--begin::Col-->
                                        <div class="col bg-warning px-6 py-8 rounded-2 me-7 mb-7">
                                            <a href="/orders">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black">
                                                        </rect>
                                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                                            fill="black"></rect>
                                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black">
                                                        </rect>
                                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black">
                                                        </rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="/orders"
                                                    class="h1 text-bold text-danger fw-bold fs-6">Orders</a>
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                            <a href="/category">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="/category" class="text-primary fw-bold fs-6">Food Category</a>
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row g-0">
                                        <!--begin::Col-->
                                        <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                            <a href="/profile">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="/profile" class="text-danger fw-bold fs-6 mt-2">Profile</a>
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col bg-light-success px-6 py-8 rounded-2">
                                            <a href="/food">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                                <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                            fill="black"></path>
                                                        <path opacity="0.3"
                                                            d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="/food" class="text-success fw-bold fs-6 mt-2">Menu List</a>
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class='card col-md-12 p-2 m-2 bg-light-info'>
                                        <h4>Store URL:<a id='link-to-copy'
                                                href='http:cttaste.com/{{ $user->slug }}'>https://cttaste.com/{{
                                                $user->slug }}</a>
                                           
                                            <a id='copy-link' href='#' style='font-size:15px' class='fa fa-copy'></a>
                                        </h4>
                                    </div>
                                    <div class='card col-md-12 p-2 m-2 bg-light-success'>
                                        @if($user->availability == 0)
                                        <a onclick='return confirm("Are you sure you want to enable {{$user->name}}")'
                                            href="disable/{{$user->id}}" class="btn btn-success">Open Store</a>
                                        @else
                                        <a onclick='return confirm("Are you sure you want to disable {{$user->name}}")'
                                            href="disable/{{$user->id}}" class="btn btn-info">Close Store</a>
                                        @endif
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 2-->
                    </div>

                    <div class="col-xl-6">
                        <!--begin::Tables Widget 9-->

                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Menu ({{count($foods)}})</span>
                                    <input type='text' id='searchFood' class='form-control'
                                        placeholder="Search Food Item" />
                                </h3>
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-trigger="hover" title="" data-bs-original-title="Click to add menu">
                                    <a href="#" style='font-size:15px'
                                        class="btn btn-sm btn-warning text-dark btn-active-primary"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_menu">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black">
                                            </rect>
                                        </svg>

                                        <!--end::Svg Icon-->Add Menu
                                    </a>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->

                                    <table
                                        class="mytable table table-row-dashed table-row-gray-800 align-middle gs-0 gy-2">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bolder text-muted">
                                                <th class="w-25px">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            data-kt-check="true" data-kt-check-target=".widget-9-check">
                                                    </div>
                                                </th>
                                                <th>Name</th>

                                                {{-- <th class="min-w-120px">Price</th> --}}

                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody id='search_food_tbody'>
                                            @foreach($foods as $food)
                                            <tr>

                                                <td>

                                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                                        <div class="symbol-label" id='image-{{ $food->id }}'
                                                            style="background-image: url('https://cttaste.com/cttaste_files/public/foodimages/{{ $food->image }}')">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                            <!-- <img src="/metronic8/demo1/assets/media/avatars/300-14.jpg" alt=""> -->
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" id='name-{{ $food->id }}'
                                                                class="text-dark fw-bolder text-hover-primary fs-6">{{$food->name}}</a>
                                                            <a href="#" id='price-{{$food->id  }}' style='color:#dc3545'
                                                                class=" fw-bolder text-hover-primary d-block fs-6">#{{number_format($food->price,2)}}</a>

                                                            {{-- <span
                                                                class="text-muted fw-bold text-muted d-block fs-7">Quantity:
                                                                {{$food->quantity}}</span> --}}
                                                        </div>
                                                    </div>
                                                </td>




                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <div class="form-check form-check-solid form-switch fv-row">
                                                            <input class="available form-check-input w-45px h-30px"
                                                                type="checkbox" data-id='{{$food->id}}' id="available"
                                                                @if($food->available ==1)checked @endif >
                                                            <label class="form-check-label"
                                                                for="allowmarketing"></label>
                                                        </div>
                                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_menu2"
                                                            data-id='{{$food->id}}'
                                                            class="edit_menu btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="black"></path>
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="black"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a data-id='{{$food->id}}'
                                                            class="delete_food btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="black"></path>
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="black"></path>
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="black"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                        <!--end::Tables Widget 9-->
                    </div>



                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->


                    <div class="col-xl-4">
                        <!--begin::List Widget 3-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark pt-4">Pack Fee and Limit</h3>
                                <small style='font-size:15px' class="form-text text-info">Set limits to the amount
                                    of
                                    pack that can be ordered at a time. Max(15)</small>

                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <!--begin::Item-->
                                <form id='set_pack_price'>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pack Price</label>
                                        <input type="number" class="form-control" id="pack_fee"
                                            aria-describedby="Pack Price" value='{{ $user->pack_fee ?? "100"}}'>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Pack Limit</label>
                                        <input type="number" class="form-control" id="pack_limit"
                                            value='{{ $user->pack_limit ?? 15 }}'>

                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end:List Widget 3-->
                    </div>

                    <div class="col-xl-8">
                        <!--begin::List Widget 3-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">Delivery Prices</h3>

                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->

                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <!--begin::Item-->
                                <form id='set_delivery_price'>
                                    <div class='row'>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Location Name</label>
                                            <input type='hidden' id='user_id' value='{{ $user->id }}' />
                                            <input type="text" placeholder="e.g Harmony Estate" class="form-control"
                                                id="location_name" aria-describedby="Location name">
                                        </div>
                                        <div class="form-group col-md-6 sm-6">
                                            <label for="exampleInputPassword1">Delivery Price</label>
                                            <input type="number" class="form-control" id="location_price">
                                        </div>


                                    </div>




                                    <button type="submit" style='font-size:15px'
                                        class="btn btn-primary text-dark btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black">
                                            </rect>
                                        </svg>
                                        Add Location</button>
                                </form>
                                <div class="table-responsive">
                                    <!--begin::Table-->

                                    <table
                                        class="mytable table table-row-dashed table-striped table-row-gray-700 align-middle gs-0 gy-2">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bolder text-muted">

                                                <th class="min-w-150px">Location Name</th>

                                                <th class="min-w-120px">Price</th>
                                                <th class="min-w-120px">Delete</th>


                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody id='delivery_table_body'>
                                            @foreach($deliveries as $location)
                                            <tr id='deliveryhead{{ $location->id }}'>



                                                <td class="">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <a href="#"
                                                            class="text-dark fw-bolder text-hover-primary d-block fs-6">{{$location->name}}</a>

                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <a href="#"
                                                            class="text-dark fw-bolder text-hover-primary d-block fs-6">#{{number_format($location->price,2)}}</a>

                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <a onclick='return confirm("Are you sure you want to delete this location?")'
                                                            data-id="{{ $location->id }}"
                                                            class="delete_location btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="black"></path>
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="black"></path>
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="black"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>
                                                </td>



                                            </tr>
                                            @endforeach

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>

                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end:List Widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->

                    <!--end::Col-->
                </div>
                <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="#" id="kt_modal_add_event_form">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder" data-kt-calendar="title">Add Event</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        id="kt_modal_add_event_close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold required mb-2">Event Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_name">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Event Description</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_description">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Event Location</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_location">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="kt_calendar_datepicker_allday">
                                            <span class="form-check-label fw-bold"
                                                for="kt_calendar_datepicker_allday">All
                                                Day</span>
                                        </label>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2 required">Event Start Date</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_start_date" placeholder="Pick a start date"
                                                    id="kt_calendar_datepicker_start_date">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">Event Start Time</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_start_time" placeholder="Pick a start time"
                                                    id="kt_calendar_datepicker_start_time">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2 required">Event End Date</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_end_date" placeholder="Pick a end date"
                                                    id="kt_calendar_datepicker_end_date">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">Event End Time</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_end_time" placeholder="Pick a end time"
                                                    id="kt_calendar_datepicker_end_time">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_event_cancel"
                                        class="btn btn-light me-3">Cancel</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Product-->
                <!--begin::Modal - New Product-->
                <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header border-0 justify-content-end">
                                <!--begin::Edit-->
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" title=""
                                    id="kt_modal_view_event_edit" data-bs-original-title="Edit Event">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                fill="black"></path>
                                            <path
                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Edit-->
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" title=""
                                    id="kt_modal_view_event_delete" data-bs-original-title="Delete Event">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                fill="black"></path>
                                            <path opacity="0.5"
                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                fill="black"></path>
                                            <path opacity="0.5"
                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary"
                                    data-bs-toggle="tooltip" title="" data-bs-dismiss="modal"
                                    data-bs-original-title="Hide Event">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-0 pb-20 px-lg-17">
                                <!--begin::Row-->
                                <div class="d-flex">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                fill="black"></path>
                                            <path
                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                fill="black"></path>
                                            <path
                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <div class="mb-9">
                                        <!--begin::Event name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-3 fw-bolder me-3" data-kt-calendar="event_name"></span>
                                            <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                        </div>
                                        <!--end::Event name-->
                                        <!--begin::Event description-->
                                        <div class="fs-6" data-kt-calendar="event_description"></div>
                                        <!--end::Event description-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <circle fill="#000000" cx="12" cy="12" r="8"></circle>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event start date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bolder">Starts</span>
                                        <span data-kt-calendar="event_start_date"></span>
                                    </div>
                                    <!--end::Event start date/time-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <circle fill="#000000" cx="12" cy="12" r="8"></circle>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event end date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bolder">Ends</span>
                                        <span data-kt-calendar="event_end_date"></span>
                                    </div>
                                    <!--end::Event end date/time-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                fill="black"></path>
                                            <path
                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event location-->
                                    <div class="fs-6" data-kt-calendar="event_location"></div>
                                    <!--end::Event location-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Product-->
                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--begin::Content-->

    <!-- The end of the session content -->
    <!--end::Content-->
    <!--begin::Footer-->
    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
        <!--begin::Container-->
        <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-gray-400 fw-bold me-1">Powered by</span>
                <a href="https://thecaretech.org/" target="_blank"
                    class="text-muted text-hover-primary fw-bold me-2 fs-6">CareTech</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                <li class="menu-item">
                    <a href="https://cthostel.com/" target="_blank" class="menu-link px-2">CTHostel</a>
                </li>
                <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2">CTDogs</a>
                </li>
                <li class="menu-item">
                    <a href="https://thecaretech.org/" target="_blank" class="menu-link px-2">CareTech</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->

    @endsection
    @section('script')
    <!-- javascript for category -->
    <script>
        $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        @if (session('message'))
        Swal.fire('CT-Taste',"{{ session('message') }}",'success');
        @endif
      


        async function resetAccount(el, id) {
            const willUpdate = await Swal.fire({
                title: "Confirm Category Delete",
                text: `Are you sure you want to delete? Food under this category will be deleted also?`,
                icon: "warning",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes!",
                showCancelButton: true,
                buttons: ["Cancel", "Yes, Delete"]
            });
            console.log(willUpdate.isDismissed, 'this is the will update')
            if (willUpdate.isDismissed == false) {
                //performReset()
                performDelete(el, id);
            } else {
                Swal.fire("Category will not be deleted  :)");
            }
        }


        function performDelete(el, id) {

            try {
                $.get('{{ route("deletecategory") }}?id=' + id,
                    function(data, status) {
                        console.log(status);
                        console.table(data);
                        if (status === "success") {
                            let alert = Swal.fire('success', "Category successfully deleted!.", 'success');
                            $(el).closest("tr").remove();
                            window.location.reload()

                        }
                    }
                );
            } catch (e) {
                let alert = Swal.fire(e.message);
            }
        }
        // end of javascript for category
        // beginning of javascript for food




        $("#createfood").on("submit", async function(e) {
            Swal.fire('Creating menu, please wait...')
            e.preventDefault();
            var fd = new FormData;
            fd.append('category_id', $("#category_id").val());
            fd.append('name', $("#food_name").val());
            fd.append('price', $("#price").val());
            fd.append('image',$('#image')[0].files[0]);
            fd.append('selectedimage', $('#selectedimagespan').val());

            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('createfood')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log('the data', data)
                    Swal.close()
                  
                    Swal.fire('success', 'Menu created successfully!', 'success')
                    $("#search_food_tbody").prepend(`
                    <tr >

                    <td>
                    
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label"
                                style="background-image: url('/public/foodimages/${data.image}')">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-45px me-5">
                                
                            </div>
                            <div class="d-flex justify-content-start flex-column">
                                <a href="#"
                                    class="text-dark fw-bolder text-hover-primary fs-6">${data.name}</a>
                            
                            </div>
                        </div>
                    </td>

                    <td class="">
                        <div class="d-flex flex-column w-100 me-2">
                            <a href="#"
                                class="text-dark fw-bolder text-hover-primary d-block fs-6">#${data.price}</a>

                        </div>
                    </td>


                    <td>
                        <div class="d-flex justify-content-end flex-shrink-0">
                            <div class="form-check form-check-solid form-switch fv-row">
                                <input class="available form-check-input w-45px h-30px"
                                    type="checkbox" data-id='${data.id}' id="available"
                                    ${data.available} == 1 ? checked : ''>
                                
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                            <a data-bs-toggle="modal" data-bs-target="#kt_modal_menu2"
                                data-id='${data.id}'
                                class="edit_menu btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3"
                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                            fill="black"></path>
                                        <path
                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                            </a>
                            <a data-id='${data.id}'
                                class="delete_food btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                            fill="black"></path>
                                        <path opacity="0.5"
                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                            fill="black"></path>
                                        <path opacity="0.5"
                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </td>
                    </tr>
                    `)
                    $("#category_id").val('')
                    $("#food_name").val('')
                    $("#price").val('')
                    $("#image").val('')
                    $("#kt_modal_menu").modal('hide')
                    Swal.close()
                    // window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Swal.fire('Opps!', 'Food not created, contact the administrator', 'error')
                }
            })

        })

        $("#updatefood").on("submit", async function(e) {
            Swal.fire('Updating menu, please wait...')
            e.preventDefault();
            var fd = new FormData;
            fd.append('category_id', $("#edit_menu_category_id").val());
            fd.append('name', $("#edit_menu_name").val());
            fd.append('price', $("#edit_menu_price").val());
            fd.append('id', $("#edit_menu_id").val());
            fd.append('image',$('#edit_menu_image')[0].files[0]);
            fd.append('selectedimage', $('#edit_selectedimagespan').val());
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('updatefood')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log('the data', data)
                    Swal.close()
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Menu updated successfully',
                        showConfirmButton: false,
                        timer: 1500
                        })
                    // Swal.fire('success', 'Menu updated successfully!', 'success')
                    var id = $("#edit_menu_id").val()
                    $("#name-"+id).text(data.name)
                    $("#price-"+id).text(data.price)
                    $("#image-"+id).css('backgroundImage',"url(public/foodimages/" + data.image + ")");
                    $("#kt_modal_menu2").modal('hide')
                    // Swal.close()
                    // window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Swal.fire('Opps!', 'Menu not updated, contact the administrator', 'error')
                }
            })

        })

        $('body').on('click', '.edit_menu', function() {

            id = $(this).data('id');
            $("#edit_menu_image").val('')
            $.get("{{route('editfood')}}?id=" + id, function(data) {
                console.log(data);
                $("#edit_menu_category_id").val(data.category_id)
                $("#edit_menu_name").val(data.name)
                $("#edit_menu_price").val(data.price)
                // $("#edit_menu_quantity").val(data.quantity)
                $("#edit_menu_id").val(data.id)
            });


        });

        $('body').on('click', '.delete_food', function() {
            // var id = $("#delete_id").val();
            id = $(this).data('id');
            console.log(id)
            var token = $("meta[name='csrf-token']").attr("content");
            var el = this;
            // alert(user_id);
            resetFood(el, id);
        });


        async function resetFood(el, id) {
            const willUpdate = await Swal.fire({
                title: "Confirm Menu Delete",
                text: `Are you sure you want to delete this menu?`,
                icon: "warning",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes!",
                showCancelButton: true,
                buttons: ["Cancel", "Yes, Delete"]
            });
            if (willUpdate.isDismissed == false) {
                //performReset()
                performDeleteFood(el, id);
            } else {
                Swal.fire("Menu will not be deleted  :)");
            }
        }


        function performDeleteFood(el, id) {

            try {
                $.get('{{ route("deletefood") }}?id=' + id,
                    function(data, status) {
                        console.log(status);
                        console.table(data);
                        if (status === "success") {
                            Swal.fire({
                                  position: 'top-end',
                                  icon: 'success',
                                  title: 'Menu deleted successfully',
                                  showConfirmButton: false,
                                  timer: 1500
                                })
                            //  Swal.fire('success', "Menu successfully deleted!.", 'success');
                            $(el).closest("tr").remove();
                           

                        }
                    }
                );
            } catch (e) {
                let alert = Swal.fire(e.message);
            }
        }

        // $(".mytable").dataTable();
        $(".mytable").DataTable({
            pageLength: 5,
            filter: true,
            deferRender: true,

            "searching": true,
        });

        $('body').on('submit', '#set_pack_price',async function(e) {
            e.preventDefault()
          
            var fd = new FormData;
            fd.append('pack_fee',$("#pack_fee").val());
            fd.append('pack_limit',$("#pack_limit").val());
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('set_pack_price')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log('the data', data)
                    Swal.close()
                        if(data == true) {
                            Swal.fire('Success!', 'Pack Updated Successfully!', 'success')
                        console.log(data)
                        }
                        else {
                            Swal.fire('Pack Limit Too Much!', 'Pack Limit is more than 15!', 'error')
                        
                        }
                        
                   
                    // window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Swal.fire('Opps!', 'Pack not updated, contact the administrator', 'error')
                }
            })


        });

        $('body').on('submit', '#set_delivery_price',async function(e) {
            e.preventDefault()
          
            var fd = new FormData;
            fd.append('user_id',$("#user_id").val());
            fd.append('location_name',$("#location_name").val());
            fd.append('location_price',$("#location_price").val());
           
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('set_delivery_price')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log('the data', data)
                    Swal.close()
                        if(data == false) {
                            Swal.fire('Opps!', 'Location name already in existence!', 'error')
                        
                        }
                        else {
                            Swal.fire('Success!', 'Delivery Price Added Successfully!', 'success')
                            $("#delivery_table_body").prepend(`
                            <tr id='deliveryhead${data.id}'>

                                           
                                           
                            <td class="">
                                <div class="d-flex flex-column w-100 me-2">
                                    <a href="#"
                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">${data.name}</a>

                                </div>
                            </td>
                            <td class="">
                                <div class="d-flex flex-column w-100 me-2">
                                    <a href="#"
                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">#${data.price}</a>

                                </div>
                            </td>
                            <td class="">
                                                                            <div class="d-flex flex-column w-100 me-2">
                                                                                <a data-id="${data.id}" class="delete_location btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                                    <span class="svg-icon svg-icon-3">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </a>
                                                                            </div>
                                                                        </td>


                            </tr>
                            `)
                        console.log(data)
                           
                        }
                        
                   
                    // window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Swal.fire('Opps!', 'Delivery not updated, contact the administrator', 'error')
                }
            })


        });
        $('body').on('click','.delete_location',function() {
            con = confirm('Are you sure you want to delete this location')
           if(con == true) {
            id = $(this).data('id')
            $.get('{{ route("deletelocation") }}?val='+id,function(data) {
                console.log(data,'the location')
               $("#deliveryhead"+id).closest("tr").remove()

            })
           } else {

           }
           
        })
        $('body').on('click', '.available', function() {
            if($(this).is(":checked")) {
              
                status = false;
            }
            else {
             
                status = true;
            }
            id = $(this).data('id');
            var fd = new FormData;
            fd.append('id',id);
            fd.append('status', status);
           


            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('availability')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log('the data', data)
                    Swal.close()
                    if(data == true) {
                        Swal.fire({
                              position: 'top-end',
                              icon: 'success',
                              title: 'Food Enabled',
                              showConfirmButton: false,
                              timer: 1500
                            })
                        // Swal.fire('Enabled', 'Food is now made available for customers!', 'success')
                    } else {
                        Swal.fire({
                              position: 'top-end',
                              icon: 'info',
                              title: 'Food Disabled',
                              showConfirmButton: false,
                              timer: 1500
                            })
                        // Swal.fire('Disabled', 'Food is now disabled for customers!', 'info')

                    }
                    // window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Swal.fire('Opps!', 'Menu not updated, contact the administrator', 'error')
                }
            })


        });
        $("#showimage").click(function() {
            $("#selectimage").hide()
            $("#showimage2").hide()
            $("#imageContainer").show()
        })
        $("#hideimage").click(function() {
            $("#selectimage").show()
            $("#showimage2").show()
            $("#imageContainer").hide()
        })

        $("#edit_showimage").click(function() {
            $("#edit_selectimage").hide()
            $("#edit_showimage2").hide()
            $("#edit_imageContainer").show()
        })
        $("#edit_hideimage").click(function() {
            $("#edit_selectimage").show()
            $("#edit_showimage2").show()
            $("#edit_imageContainer").hide()
        })

        $("#food_search").keyup(function() {
            foodname = $("#food_search").val()
            $.get('{{ route("searchfoodimage") }}?val='+foodname,function(data) {
                console.log(data,'image data')
                $("#listimages").empty();
                $.each(data, function(key, value) {
                    console.log(value.image,'odent')
                    $("#listimages").append(`
                    <img src='/foodimages/${value.image}' data-name='${value.category}' data-image='${value.image}' class="selectedimage img-thumbnail rounded m-5" style='width:100px;height:100px'>
                               
                    `)
                })

            })
        })

        $("#edit_food_search").keyup(function() {
            foodname = $("#edit_food_search").val()
            $.get('{{ route("searchfoodimage") }}?val='+foodname,function(data) {
                console.log(data,'image data')
                $("#edit_listimages").empty();
                $.each(data, function(key, value) {
                    console.log(value.image,'odent')
                    $("#edit_listimages").append(`
                    <img src='/foodimages/${value.image}' data-name='${value.category}' data-image='${value.image}' class="edit_selectedimage img-thumbnail rounded m-5" style='width:100px;height:100px'>
                               
                    `)
                })

            })
        })
        $('body').on('click','.selectedimage',function() {
            image = $(this).data('image')
            name = $(this).data('name')
            $("#food_search").val(name+".jpg")
            $("#selectedimagespan").val(image)
          
        })

        $('body').on('click','.edit_selectedimage',function() {
            image = $(this).data('image')
            name = $(this).data('name')
          
            $("#edit_food_search").val(name+".jpg")
            $("#edit_selectedimagespan").val(image)
        })
           $("#searchCategory").on('input',function() {
           var val = $("#searchCategory").val()
           $.get('{{ route("searchCategory") }}?val='+val,function(data) {
            console.log(data,'here the data')
            $("#search_category_tbody").empty()
            $.each(data, function(key, value) {
                  
                    $("#search_category_tbody").append(`
                    <tr>
                                                <td>
                                                    
                                                   <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a href="">
                                                            <div class="symbol-label fs-3 bg-light-danger text-danger">${value.name.substring(0,1)}</div>
                                                        </a>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                       </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">${value.name}</a>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                       </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">${value.name}</a>
                                                        </div>
                                                    </div>
                                                </td>

                                               
                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                         <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black"></path>
                                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black"></path>
                                                                </svg>
                                                            </span>
                                                       </a>
                                                        <a data-id='${value.id}' data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends2" class="edit_category btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a data-id='${value.id}' class="delete_category btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                    `
                   
                    )
                })
           })
        })
        $("#copy-link").click(function() {
                var link = $("#link-to-copy").attr("href");
                navigator.clipboard.writeText(link).then(function() {
                    alert("Link copied to clipboard!");
                    
                });
                });
        $("#searchFood").on('input',function() {
           var val = $("#searchFood").val()
           $.get('{{ route("searchFoodDashboard") }}?val='+val,function(data) {
            console.log(data,'here the data')
            $("#search_food_tbody").empty()
            $.each(data, function(key, value) {
                  
                    $("#search_food_tbody").append(`
                    <tr>
                                               
                                               <td>
                                                   <div class="symbol symbol-60px symbol-2by3 me-4">
                                                       <div class="symbol-label" style="background-image: url('/foodimages/${value.image}')"></div>
                                                   </div>
                                               </td>
                                               <td>
                                                   <div class="d-flex align-items-center">
                                                      
                                                       <div class="d-flex justify-content-start flex-column">
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">${value.name}</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">${value.category_id}</span>
                                                       </div>
                                                   </div>
                                               </td>

                                               <td class="text-end">
                                                   <div class="d-flex flex-column w-100 me-2">
                                                       <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">#${value.price}</a>

                                                   </div>
                                               </td>
                                               <td>
                                                   <div class="d-flex justify-content-end flex-shrink-0">
                                                       <div class="form-check form-check-solid form-switch fv-row">
                                                           <input class="available form-check-input w-45px h-30px" type="checkbox" data-id='${value.id}' id="available" ${value.available} ==1 ? checked:"">
                                                           <label class="form-check-label" for="allowmarketing"></label>
                                                       </div>
                                                       <a data-bs-toggle="modal" data-bs-target="#kt_modal_menu2" data-id='${value.id}' class="edit_menu btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                           <span class="svg-icon svg-icon-3">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                   <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                                   <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                               </svg>
                                                           </span>
                                                       </a>
                                                       <a data-id='${value.id}' class="delete_food btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                           <span class="svg-icon svg-icon-3">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                   <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                                   <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                                   <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                               </svg>
                                                           </span>
                                                       </a>
                                                   </div>
                                               </td>
                                           </tr>
                    `
                   
                            )
                        })
                })
                })

            })
    </script>

    @endsection