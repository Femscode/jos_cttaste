@extends('backend.master')
@section('header_link')
@endsection
@section('content')
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
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
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                    <h1 class="mb-3">Create Category</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">If you need more info, please check out
                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-5 my-15">
                    <!--begin::Form-->
                    <!-- <form method='post' action='{{route("createcategory")}}' class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf -->
                    <form method='post' id='createcategory' class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Category Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input required type="text" class="form-control form-control-solid" placeholder="E.g Drinks, Swallow, Cakes" id='category_name' name="name" value="">


                        </div>

                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
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
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-5 my-15">
                    <!--begin::Form-->
                    <form method='post' id='update_category' class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Category Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input type='hidden' id='edit_id' />
                            <input required type="text" id='edit_category_name' class="form-control form-control-solid" placeholder="E.g Drinks, Swallow, Cakes" name="name" value="">


                        </div>

                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
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
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-5 my-15">
                    <!--begin::Form-->
                    <!-- <form method='post' action='{{route("createfood")}}' class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf -->
                    <form method='post' id='createfood' class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Choose Category</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <select required class="form-control form-control-solid" name="category_id" id='category_id' value="">
                                <option value=''>Select Category</option>
                              
                            </select>


                        </div>

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input required type="text" id='food_name' class="form-control form-control-solid" placeholder="e.g fried rice, full chicken, chocolate cake" name="name" value="">


                        </div>

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Price(#)</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input required type="number" id='price' class="form-control form-control-solid" placeholder="Input category name" name="price" value="">


                        </div>

                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
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
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
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
                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-5 my-15">
                    <!--begin::Form-->
                    <!-- <form method='post' action='{{route("createfood")}}' class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf -->
                    <form method='post' id='updatefood' class="form fv-plugins-bootstrap5 fv-plugins-framework">@csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Choose Category</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <select required class="form-control form-control-solid" name="category_id" id='edit_menu_category_id' value="">
                                <option value=''>Select Category</option>
                              
                            </select>


                        </div>

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input required type="text" id='edit_menu_name' class="form-control form-control-solid" placeholder="e.g fried rice, full chicken, chocolate cake" name="name" value="">


                        </div>

                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Price(#)</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a card holder's name" aria-label="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input type='hidden' id='edit_menu_id'>
                            <input required type="number" id='edit_menu_price' class="form-control form-control-solid" placeholder="Input category name" name="price" value="">


                        </div>

                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
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

<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" style="" class="header bg-white align-items-stretch">
        <!--begin::Container-->

        <div class="container-fluid d-flex align-items-stretch justify-content-between">
						<!--begin::Aside mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
							<div class="btn btn-icon btn-active-color-primary w-40px h-40px" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black"></path>
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black"></path>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
						</div>
						<!--end::Aside mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="index.html" class="d-lg-none">
								<img alt="Logo" src="assets/media/logos/logo-demo4-mobile.svg" class="h-30px">
							</a>
						</div>
						<!--end::Mobile logo-->
						<div class="d-flex align-items-center" id="kt_header_wrapper">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_wrapper'}">
								<!--begin::Heading-->
								<h1 class="text-dark fw-bolder my-1 fs-3 lh-1"><a href='/dashboard'>Dashboard</a></h1>
								<!--end::Heading-->
							</div>
							<!--end::Page title=-->
						</div>
						<!--begin::Wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
							<!--begin::Navbar-->
							<div class="d-flex align-items-stretch" id="kt_header_nav">
								<!--begin::Menu wrapper-->
								<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
									<!--begin::Menu-->
									<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-600 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold fs-6 my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
										<div class="menu-item menu-lg-down-accordion me-lg-1">
											<a href="/profile" class="menu-link py-3">
												<h6 class="menu-title">Profile</h6>
												<span class="menu-arrow d-lg-none"></span>
											</a>

										</div>
										<div class="menu-item here show menu-lg-down-accordion me-lg-1">
											<a href="/category" class="menu-link py-3">
												<h6 class="menu-title">Category</h6>
												<span class="menu-arrow d-lg-none"></span>
											</a>

										</div>

										<div class="menu-item menu-lg-down-accordion me-lg-1">
											<a href="/food" class="menu-link py-3">
												<h6 class="menu-title">Restaurant Menu</h6>
												<span class="menu-arrow d-lg-none"></span>
											</a>

										</div>
										<div class="menu-item menu-lg-down-accordion me-lg-1">
											<a href="/orders" class="menu-link py-3">
												<h6 class="menu-title">Orders</h6>
												<span class="menu-arrow d-lg-none"></span>
											</a>

										</div>
										<div class="menu-item menu-lg-down-accordion me-lg-1">
											<span class="menu-link py-3">
												<h6 class="menu-title">Subscription</h6>
												<span class="menu-arrow d-lg-none"></span>
											</span>

										</div>
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Menu wrapper-->
							</div>
							<!--end::Navbar-->
							<!--begin::Toolbar wrapper-->
							<div class="d-flex align-items-stretch justify-self-end flex-shrink-0">

								<!--begin::User-->
								<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="assets/media/avatars/300-1.jpg" alt="user">
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true" style="">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="assets/media/avatars/300-1.jpg">
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bolder d-flex align-items-center fs-5">Fasanya Oluwapelumi
														<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
													</div>
													<a href="#" class="fw-bold text-muted text-hover-primary fs-7">fasanyafemi@gmail.com</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="/profile" class="menu-link px-5">Restaurant Profile</a>
										</div>
										<div class="separator my-2"></div>
										<!--end::Menu separator-->

										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="http://127.0.0.1:8000/logout" class="menu-link px-5">Sign Out</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User -->
								<!--begin::Heaeder menu toggle-->
								<div class="d-flex align-items-center d-lg-none ms-3 me-n1" title="Show header menu">
									<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
										<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black"></path>
												<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black"></path>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Heaeder menu toggle-->
							</div>
							<!--end::Toolbar wrapper-->
						</div>
						<!--end::Wrapper-->
					</div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--end::Separator-->
                        <!--begin::Description-->
                        
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--begin::Page title-->

                <!--end::Page title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-12">

                <div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bolder m-0">Profile Details</h3>
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
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../assets/media/svg/avatars/blank.svg')">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-125px h-125px" style="background-image: url('profilePic/{{$rest->image ?? 'normal.png'}}')"></div>
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
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<input type="text" id='firstname' name="fname" value='{{$user->firstname ?? ""}}' class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name">
														<div class="fv-plugins-message-container invalid-feedback"></div></div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-6 fv-row fv-plugins-icon-container">
															<input type="text" id='lastname' name="lname"  value='{{$user->lastname ?? ""}}' class="form-control form-control-lg form-control-solid" placeholder="Last name">
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
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<input type="text" id='name' name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="{{$user->name}}">
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
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<input type="tel" name="phone" id='phone'  value='{{$user->phone ?? ""}}' class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{$user->phone}}">
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
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<input type="tel" name="phone" id='email'  class="form-control form-control-lg form-control-solid" readonly placeholder="Email Address" value="{{$user->email}}">
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
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<select name="school" id='school' aria-label="Select a school" data-control="select2" data-placeholder="Select a school..." class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible" data-select2-id="select2-data-7-llbv" tabindex="-1" aria-hidden="true">
														<option value="{{$user->school ?? ''}}" data-select2-id="select2-data-9-1hiw">{{$user->school ?? 'Select School'}}</option>
														<option data-kt-flag="flags/zimbabwe.svg" value="Funaab">FUNAAB</option>
														<option data-kt-flag="flags/zimbabwe.svg" value="FUOYE">FUOYE</option>
														<option data-kt-flag="flags/zimbabwe.svg" value="MAPOLY">MAPOLY</option>
													</select>
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Col-->
											</div>
										
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<!--begin::Options-->
													<div class="d-flex align-items-center mt-3">
														<!--begin::Option-->
														<label class="form-check form-check-inline form-check-solid me-5">
															<input class="form-check-input" name="communication[]" type="checkbox" value="1">
															<span class="fw-bold ps-2 fs-6">Email</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label class="form-check form-check-inline form-check-solid">
															<input class="form-check-input" name="communication[]" type="checkbox" value="2">
															<span class="fw-bold ps-2 fs-6">Phone</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Options-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Col-->
											</div>

                                            <div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-bold fs-6">Working Hour</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<!--begin::Options-->
													<div class="d-flex align-items-center mt-3">
														<!--begin::Option-->
														<label class="form-check form-check-inline form-check-solid me-5">
															<span class="fw-bold ps-2 fs-6">Opening Time</span>
															<input class="form-control" name="opening_hour" type="time" value="{{$user->opening_hour ?? ''}}" id="opening_hour">
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label class="form-check form-check-inline form-check-solid">
															<span class="fw-bold ps-2 fs-6">Closing Time</span>
															<input class="form-control" name="closing_hour" type="time" value="{{$user->closing_hour ?? ''}}" id='closing_hour'>
														</label>
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
												<div class="col-lg-8 d-flex align-items-center">
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
                <a href="https://thecaretech.org/" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">CareTech</a>
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
</div>
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
            fd.append('opening_hour', $("#opening_hour").val());
            fd.append('closing_hour', $("#closing_hour").val());
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
                    Swal.fire('success', 'Profile Updated successfully!', 'success')
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