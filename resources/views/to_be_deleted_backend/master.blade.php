<!DOCTYPE html>

<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<script src="{{asset('admin/cdn/sweetalert.min.js')}}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('admin/cdn/jquery-3.6.0.js')}}" crossorigin="anonymous"></script>


<head>
    <title>Super Admin | Orders</title>
    <meta charset="utf-8" />
    <meta name="description" content="The best food ordering platform around your institution" />
    <meta name="keywords" content="CTOrders" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="CTOrders" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="https://cttaste.com" />
    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style2.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script>
        (function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&amp;l=' + l : '';
			j.async = true;
			j.src = '../../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>

    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    @yield('header-link')

    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside bg-primary" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <!--begin::Logo-->
                <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-8"
                    id="kt_aside_logo">
                    <a href="/">
                        <img alt="Logo" src="{{asset('assets/images/logo.png')}}" class="h-25px" />
                    </a>
                </div>
                <!--end::Logo-->
                <!--begin::Nav-->
                <div class="aside-nav d-flex flex-column align-lg-center flex-column-fluid w-100 pt-5 pt-lg-0"
                    id="kt_aside_nav">
                    <!--begin::Primary menu-->
                    <div id="kt_aside_menu"
                        class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-6"
                        data-kt-menu="true">

                        <div class="menu-item py-3">
                            <a href='/profile'>
                                <span class="menu-link menu-center" title="" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"
                                    data-bs-original-title="Profile">
                                    <span class="menu-icon me-0">
                                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/User.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span style='color:#fff'>
                                        Profile
                                        </span>
                                    </span>
                                </span>
                            </a>

                        </div>
                        <div class="menu-item py-3">
                            <a href='/category'>
                                <span class="menu-link menu-center" title="" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"
                                    data-bs-original-title="Category">
                                    <span class="menu-icon me-0">
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Design/Join-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M5,12 L10,6 L18,6 L18,10 L12.1666667,10 L9,13.8 L9,19 L5,19 L5,12 Z" fill="#000000" transform="translate(11.500000, 12.500000) scale(-1, 1) translate(-11.500000, -12.500000) "/>
                                                <circle fill="#000000" opacity="0.3" cx="8" cy="16" r="2"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                    </span>
                                    <span style='color:#fff'>
                                        Category
                                        </span>
                                </span>
                                
                            </a>

                        </div>
                        <div class="menu-item py-3">
                            <a href='/food'>
                                <span class="menu-link menu-center" title="" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"
                                    data-bs-original-title="Menus">
                                    <span class="menu-icon me-0">
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Cooking/Dinner.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M12.5,19 C8.91014913,19 6,16.0898509 6,12.5 C6,8.91014913 8.91014913,6 12.5,6 C16.0898509,6 19,8.91014913 19,12.5 C19,16.0898509 16.0898509,19 12.5,19 Z M12.5,16.4 C14.6539105,16.4 16.4,14.6539105 16.4,12.5 C16.4,10.3460895 14.6539105,8.6 12.5,8.6 C10.3460895,8.6 8.6,10.3460895 8.6,12.5 C8.6,14.6539105 10.3460895,16.4 12.5,16.4 Z M12.5,15.1 C11.0640597,15.1 9.9,13.9359403 9.9,12.5 C9.9,11.0640597 11.0640597,9.9 12.5,9.9 C13.9359403,9.9 15.1,11.0640597 15.1,12.5 C15.1,13.9359403 13.9359403,15.1 12.5,15.1 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M22,13.5 L22,13.5 C22.2864451,13.5 22.5288541,13.7115967 22.5675566,13.9954151 L23.0979976,17.8853161 C23.1712756,18.4226878 22.7950533,18.9177172 22.2576815,18.9909952 C22.2137086,18.9969915 22.1693798,19 22.125,19 L22.125,19 C21.5576012,19 21.0976335,18.5400324 21.0976335,17.9726335 C21.0976335,17.9415812 21.0990414,17.9105449 21.1018527,17.8796201 L21.4547321,13.9979466 C21.4803698,13.7159323 21.7168228,13.5 22,13.5 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M24,5 L24,12 L21,12 L21,8 C21,6.34314575 22.3431458,5 24,5 Z" fill="#000000" transform="translate(22.500000, 8.500000) scale(-1, 1) translate(-22.500000, -8.500000) "/>
                                                <path d="M0.714285714,5 L1.03696911,8.32873399 C1.05651593,8.5303749 1.22598532,8.68421053 1.42857143,8.68421053 C1.63115754,8.68421053 1.80062692,8.5303749 1.82017375,8.32873399 L2.14285714,5 L2.85714286,5 L3.17982625,8.32873399 C3.19937308,8.5303749 3.36884246,8.68421053 3.57142857,8.68421053 C3.77401468,8.68421053 3.94348407,8.5303749 3.96303089,8.32873399 L4.28571429,5 L5,5 L5,8.39473684 C5,9.77544872 3.88071187,10.8947368 2.5,10.8947368 C1.11928813,10.8947368 -7.19089982e-16,9.77544872 -8.8817842e-16,8.39473684 L0,5 L0.714285714,5 Z" fill="#000000"/>
                                                <path d="M2.5,12.3684211 L2.5,12.3684211 C2.90055463,12.3684211 3.23115721,12.6816982 3.25269782,13.0816732 L3.51381042,17.9301218 C3.54396441,18.4900338 3.11451066,18.9683769 2.55459863,18.9985309 C2.53641556,18.9995101 2.51820943,19 2.5,19 L2.5,19 C1.93927659,19 1.48472045,18.5454439 1.48472045,17.9847204 C1.48472045,17.966511 1.48521034,17.9483049 1.48618958,17.9301218 L1.74730218,13.0816732 C1.76884279,12.6816982 2.09944537,12.3684211 2.5,12.3684211 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        <span style='color:#fff'>
                                            Menu
                                            </span>
                                    </span>
                                </span>
                            </a>

                        </div>
                        <div class="menu-item py-3">
                            <a href='/orders'>
                                <span class="menu-link menu-center" title="" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"
                                    data-bs-original-title="Orders">
                                    <span class="menu-icon me-0">
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Shopping/Chart-line1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/>
                                                <path d="M8.7295372,14.6839411 C8.35180695,15.0868534 7.71897114,15.1072675 7.31605887,14.7295372 C6.9131466,14.3518069 6.89273254,13.7189711 7.2704628,13.3160589 L11.0204628,9.31605887 C11.3857725,8.92639521 11.9928179,8.89260288 12.3991193,9.23931335 L15.358855,11.7649545 L19.2151172,6.88035571 C19.5573373,6.44687693 20.1861655,6.37289714 20.6196443,6.71511723 C21.0531231,7.05733733 21.1271029,7.68616551 20.7848828,8.11964429 L16.2848828,13.8196443 C15.9333973,14.2648593 15.2823707,14.3288915 14.8508807,13.9606866 L11.8268294,11.3801628 L8.7295372,14.6839411 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        <span style='color:#fff'>
                                            Orders
                                            </span>
                                    </span>
                                </span>
                            </a>

                        </div>
                        <div class="menu-item py-3">
                            <a href='/records'>
                                <span class="menu-link menu-center" title="" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"
                                    data-bs-original-title="Subscribe">
                                    <span class="menu-icon me-0">
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Clipboard-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000"/>
                                                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        <span style='color:#fff'>
                                            Records
                                            </span>
                                    </span>
                                </span>
                            </a>

                        </div>
                      
                    </div>
                    <!--end::Primary menu-->
                </div>
                <!--end::Nav-->
                <!--begin::Footer-->
                <div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">

                </div>
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <!-- The real beginning -->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
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
                                    <a href="/" class="d-lg-none">
                                        <img alt="Logo" src="{{asset('assets/images/logo.png')}}" class="h-30px">
                                    </a>
                                </div>
                                <!--end::Mobile logo-->
                              
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                                    <!--begin::Navbar-->
                                    <div class="d-flex align-items-stretch" id="kt_header_nav">
                                        <!--begin::Menu wrapper-->
                                        <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                            <!--begin::Menu-->
                                            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-600 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold fs-6 my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                                <div class="m-2 p-2 menu-item here show menu-lg-down-accordion">
                                                    <a href="/dashboard" class="menu-link py-3">
                                                        <h6 class="menu-title" @if($active == 'dashboard')style='color:#ebab21'@endif>Dashboard</h6>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </a>
        
                                                </div>
                                                <div class="menu-item here show menu-lg-down-accordion me-lg-1">
                                                    <a href="/profile" class="menu-link py-3">
                                                        <h6 class="menu-title" @if($active == 'profile')style='color:#ebab21'@endif>Profile</h6>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </a>
        
                                                </div>
                                              
                                                <div class="menu-item here show menu-lg-down-accordion me-lg-1">
                                                    <a href="/category" class="menu-link py-3">
                                                        <h6 class="menu-title" @if($active == 'category')style='color:#ebab21'@endif>Category</h6>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </a>
        
                                                </div>
        
                                                <div class="menu-item here show menu-lg-down-accordion me-lg-1">
                                                    <a href="/food" class="menu-link py-3">
                                                        <h6 class="menu-title" @if($active == 'food')style='color:#ebab21'@endif>Restaurant Menu</h6>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </a>
        
                                                </div>
                                                <div class="menu-item here show menu-lg-down-accordion me-lg-1">
                                                    <a href="/orders" class="menu-link py-3">
                                                        <h6 class="menu-title" @if($active == 'orders')style='color:#ebab21'@endif>Orders</h6>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </a>
        
                                                </div>
                                                <div class="menu-item here show menu-lg-down-accordion me-lg-1">
                                                    <a href="/records" class="menu-link py-3">
                                                        <h6 class="menu-title" @if($active == 'records')style='color:#ebab21'@endif>Records</h6>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </a>
                                                    
                                                </div>
                                                <div class="menu-item here show menu-lg-down-accordion me-lg-1">
                                                  
                                                        <a href="/checkreviews" class="menu-link py-3">
                                                        <h6 class="menu-title" @if($active == 'reviews')style='color:#ebab21'@endif>Reviews</h6>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                        </a>
                                                 
        
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
                                                    <a href="/logout" class="menu-link px-5">Sign Out</a>
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
            @yield('content')
        </div>

            <!-- The real end -->
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
        <div class="card shadow-none rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px">
                    <!--begin::Timeline items-->
                    <div class="timeline">
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
                                                fill="black" />
                                            <path
                                                d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile APp”
                                        project:</div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            {{-- <img src="assets/media/avatars/300-14.jpg" alt="img" /> --}}
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                            class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting
                                            with customer</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A
                                                </div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                            class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project
                                            Delivery Preparation</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-20.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B
                                                </div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Progress-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
                                                fill="black" />
                                            <path
                                                d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n2">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak
                                        human workshop</div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            {{-- <img src="assets/media/avatars/300-1.jpg" alt="img" /> --}}
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New
                                        Incoming Project Files:</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-bold">
                                                <!--begin::Desc-->
                                                <a href="apps/projects/project.html"
                                                    class="fs-6 text-hover-primary fw-bolder">Finance KPI App
                                                    Guidelines</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">1.9mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo4/../demo4/apps/projects/project.html"
                                                class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-bold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing
                                                    Results</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">18kb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo4/../demo4/apps/projects/project.html"
                                                class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-bold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bolder">Finance
                                                    Reports</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">20mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                fill="black" />
                                            <path
                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-bold mb-2">Task
                                        <a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
                                        <a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin
                                        Dashboard project:
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                fill="black" />
                                            <path
                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-29.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-31.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-40.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-bold mb-2">New case
                                        <a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in
                                        Multi-platform Database Design project
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="overflow-auto pb-5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                            <!--end::Info-->
                                            <!--begin::User-->
                                            <a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                fill="black" />
                                            <path
                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-bold mb-2">You have received a new order:</div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="assets/media/avatars/300-4.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
                                                    fill="black" />
                                                <path
                                                    d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-bold">
                                                <h4 class="text-gray-900 fw-bolder">Database Backup Process Completed!
                                                </h4>
                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make
                                                    sure the data integrity is OK</div>
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-bold mb-2">New order
                                        <a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow
                                        Planning &amp; Budget Estimation
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                    <span class="svg-icon svg-icon-3 svg-icon-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                transform="rotate(-180 18 13)" fill="black" />
                            <path
                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->
    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
        <!--begin::Messenger-->
        <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-bold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="bi bi-three-dots fs-3"></i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">Add Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Specify a contact email to send an invitation"></i></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title" @if($active == 'records')style='color:red'@endif>Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Create Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Invite Members</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                    title="Coming soon">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
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
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">How likely are you to recommend our company to your
                                friends and family ?</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    {{-- <img alt="Pic" src="assets/media/avatars/300-1.jpg" /> --}}
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve
                                been subscribed to a repository on GitHub.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->
                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">Ok, Understood!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    {{-- <img alt="Pic" src="assets/media/avatars/300-1.jpg" /> --}}
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                data-kt-element="message-text">You’ll receive notifications for all issues, pull
                                requests!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->
                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">You can unwatch this repository immediately by clicking
                                here:
                                <a href="https://keenthemes.com/">Keenthemes.com</a>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    {{-- <img alt="Pic" src="assets/media/avatars/300-1.jpg" /> --}}
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->
                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and
                                goals. Food and drinks provided</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    {{-- <img alt="Pic" src="assets/media/avatars/300-1.jpg" /> --}}
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                data-kt-element="message-text"></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->
                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">Right before vacation season we have the next Big Deal
                                for you.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                    placeholder="Type a message"></textarea>
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="bi bi-paperclip fs-3"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="bi bi-upload fs-3"></i>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--end::Main-->
    <!--begin::Engage drawers-->
    <!--begin::Demos drawer-->
    <div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_engage_demos_header">
                <h3 class="card-title fw-bolder text-gray-700">Explore</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6"
                        id="kt_engage_demos_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body" id="kt_engage_demos_body">
                <!--begin::Content-->
                <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body"
                    data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
                    <!--begin::Wrapper-->
                    <div class="mb-0">
                        <!--begin::Heading-->
                       
                        <!--end::Heading-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Regular License</div>
                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                            data-bs-toggle="popover" data-bs-custom-class="popover-dark"
                                            data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
                                    </div>
                                    <div class="fs-7 text-muted">For single end product used by you or one client</div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                    <span class="text-dark fs-1 fw-bolder">39</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Extended License</div>
                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                            data-bs-toggle="popover" data-bs-custom-class="popover-dark"
                                            data-bs-trigger="hover" data-bs-placement="top"
                                            data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
                                    </div>
                                    <div class="fs-7 text-muted">For single SaaS app with paying users</div>
                                </div>
                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                    <span class="text-dark fs-1 fw-bolder">939</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Custom License</div>
                                    </div>
                                    <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                                </div>
                                <div class="text-nowrap">
                                    <a href="https://keenthemes.com/contact/" class="btn btn-sm btn-success"
                                        target="_blank">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::Purchase-->
                        <a href="https://1.envato.market/EA4JP" class="btn btn-primary mb-15 w-100">Buy Now</a>
                        <!--end::Purchase-->
                        <!--begin::Demos-->
                        <div class="mb-0">
                            <h3 class="fw-bolder text-center mb-6">Metronic Demos</h3>
                            <!--begin::Row-->
                            <div class="row g-5">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo1.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo1"
                                                class="btn btn-sm btn-success shadow">Demo 1</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo2.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo2"
                                                class="btn btn-sm btn-success shadow">Demo 2</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo3.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo3"
                                                class="btn btn-sm btn-success shadow">Demo 3</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo4.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo4"
                                                class="btn btn-sm btn-success shadow">Demo 4</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo5.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo5"
                                                class="btn btn-sm btn-success shadow">Demo 5</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo6.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo6"
                                                class="btn btn-sm btn-success shadow">Demo 6</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo7.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo7"
                                                class="btn btn-sm btn-success shadow">Demo 7</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo8.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo8"
                                                class="btn btn-sm btn-success shadow">Demo 8</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo9.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo9"
                                                class="btn btn-sm btn-success shadow">Demo 9</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo10.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo10"
                                                class="btn btn-sm btn-success shadow">Demo 10</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo11.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo11"
                                                class="btn btn-sm btn-success shadow">Demo 11</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo12.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo12"
                                                class="btn btn-sm btn-success shadow">Demo 12</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo13.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo13"
                                                class="btn btn-sm btn-success shadow">Demo 13</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo14.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo14"
                                                class="btn btn-sm btn-success shadow">Demo 14</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo15.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo15"
                                                class="btn btn-sm btn-success shadow">Demo 15</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo16.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo16"
                                                class="btn btn-sm btn-success shadow">Demo 16</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo17.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo17"
                                                class="btn btn-sm btn-success shadow">Demo 17</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo18.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo18"
                                                class="btn btn-sm btn-success shadow">Demo 18</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo19.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo19"
                                                class="btn btn-sm btn-success shadow">Demo 19</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo20.png" alt="demo" class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="https://preview.keenthemes.com/metronic8/demo20"
                                                class="btn btn-sm btn-success shadow">Demo 20</a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo21.png" alt="demo"
                                                class="w-100 opacity-25" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo22.png" alt="demo"
                                                class="w-100 opacity-25" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo23.png" alt="demo"
                                                class="w-100 opacity-25" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="assets/media/demos/demo24.png" alt="demo"
                                                class="w-100 opacity-25" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Demos-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Demos drawer-->
    <!--begin::Help drawer-->
   
    <!--end::Help drawer-->

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Modals-->
    <!--begin::Modal - Upgrade plan-->
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
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
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upgrade a Plan</h1>
                        <div class="text-muted fw-bold fs-5">If you need more info, please check
                            <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <a href="#"
                                class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                data-kt-plan="month">Monthly</a>
                            <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                data-kt-plan="annual">Annual</a>
                        </div>
                        <!--end::Nav group-->
                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    checked="checked" value="startup" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup
                                                </h2>
                                                <div class="fw-bold opacity-50">Best for startups</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bolder" data-kt-plan-price-month="39"
                                                data-kt-plan-price-annual="399">39</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="advanced" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced
                                                </h2>
                                                <div class="fw-bold opacity-50">Best for 100+ team size</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bolder" data-kt-plan-price-month="339"
                                                data-kt-plan-price-annual="3399">339</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="enterprise" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                    Enterprise
                                                    <span class="badge badge-light-success ms-2 fs-7">Most
                                                        popular</span>
                                                </h2>
                                                <div class="fw-bold opacity-50">Best value for 1000+ team</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bolder" data-kt-plan-price-month="999"
                                                data-kt-plan-price-annual="9999">999</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <div
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="custom" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom
                                                </h2>
                                                <div class="fw-bold opacity-50">Requet a custom license</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <a href="#" class="btn btn-sm btn-primary">Contact Us</a>
                                        </div>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-bold">Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
                                                    Users</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
                                                    Integrations</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-muted flex-grow-1">Finance Module</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="black" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-muted flex-grow-1">Accounting
                                                    Module</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="black" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-muted flex-grow-1">Network
                                                    Platform</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="black" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="black" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-bold">Optimal for 100+ team size and grown company
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
                                                    Users</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
                                                    Integrations</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-muted flex-grow-1">Network
                                                    Platform</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="black" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="black" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-bold">Optimal for 1000+ team and enterpise</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
                                                    Users</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
                                                    Integrations</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network
                                                    Platform</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="black" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Plans-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Upgrade Plan</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan-->
    <!--begin::Modal - Select Location-->
    <div class="modal fade" id="kt_modal_select_location" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-1000px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Title-->
                    <h2>Select Location</h2>
                    <!--end::Title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
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
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body">
                    <div id="kt_modal_select_location_map" class="w-100 rounded" style="height:450px"></div>
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer d-flex justify-content-end">
                    <a href="#" class="btn btn-active-light me-5" data-bs-dismiss="modal">Cancel</a>
                    <button type="button" id="kt_modal_select_location_button" class="btn btn-primary"
                        data-bs-dismiss="modal">Apply</button>
                </div>
                <!--end::Modal footer-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Select Location-->
    <!--begin::Modal - Invite Friends-->

    <!--end::Modal - Invite Friend-->
    <!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
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
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>
                        <div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
                    </div>
                    <!--end::Content-->
                    <!--begin::Search-->
                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                        data-kt-search-enter="enter" data-kt-search-layout="inline">
                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span
                                class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                        transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                name="search" value="" placeholder="Search by username, full name or email..."
                                data-kt-search-element="input" />
                            <!--end::Input-->
                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->
                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                            transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->
                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::Suggestions-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-bold mb-5">Recently searched:</h3>
                                <!--end::Heading-->
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            {{-- <img alt="Pic" src="assets/media/avatars/300-1.jpg" /> --}}
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Suggestions-->
                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                    value="0" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>
                                                <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                    value="1" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>
                                                <div class="fw-bold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                    value="2" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                {{-- <img alt="Pic" src="assets/media/avatars/300-1.jpg" /> --}}
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>
                                                <div class="fw-bold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                    value="3" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>
                                                <div class="fw-bold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                    value="4" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                    Cox</a>
                                                <div class="fw-bold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                    value="5" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>
                                                <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                    value="6" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>
                                                <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                    value="7" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>
                                                <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                    value="8" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>
                                                <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                    value="9" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>
                                                <div class="fw-bold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                    value="10" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                    Bold</a>
                                                <div class="fw-bold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                    value="11" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
                                                    Crown</a>
                                                <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                    value="12" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
                                                    Doe</a>
                                                <div class="fw-bold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                    value="13" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>
                                                <div class="fw-bold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                    value="14" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-success text-success fw-bold">L</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
                                                    Kunic</a>
                                                <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                    value="15" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>
                                                <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                    value="16" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>
                                                <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">Cancel</button>
                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
                                        Selected Users</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Results-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="fw-bold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                </div>
                                <!--end::Message-->
                                <!--begin::Illustration-->
                                <div class="text-center px-5">
                                    <img src="assets/media/illustrations/dozzy-1/1.png" alt=""
                                        class="w-100 h-200px h-sm-325px" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/index.html";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.js')}}"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/js/custom/modals/select-location.html')}}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ asset('assets/js/custom/intro.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/select-location.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
    	<script src="{{ asset('assets/js/professionallocker.js')}}"></script>




    @yield('script')
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Feb 2022 02:16:49 GMT -->

</html>