<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/startesk/startesk/tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 20:36:29 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CTTASTE | TRACK ORDER ({{ number_format($order->total_price) }})</title>
    <meta name="description" content="Total price :{{ number_format($order->total_price) }}" />
    <meta name="keywords" content="Total price :{{ number_format($order->total_price) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="https://cttaste.com/assets/images/fav_01.png">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/animate.min.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/magnific-popup.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/aos.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/nice-select.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/flaticon.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/meanmenu.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/slick.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/default.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/style.css">
    <link rel="stylesheet" href="https://cttaste.com/public/track_order/css/responsive.css">
</head>

<body>

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="-" class="letters-loading">
                        -
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

   @yield('content')
   

    <!-- footer -->
    <footer>

        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright-text">
                            <p>Track your order with <a href='/' style='color:#ebab21'> CT_Taste </a> </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="f-payment-method text-center text-md-right">
                           <a target='_blank' href='https://www.instagram.com/ct_taste/'><svg class='m-2' width="34px" height="34px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>instagram [#ebab21167]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)" fill="#ebab21"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#ebab21167]"> </path> </g> </g> </g> </g></svg>
                           </a> <svg class='m-2' width="34px" height="34px" viewBox="0 0 20.00 20.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>twitter [#ebab21154]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#ebab21"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#ebab21154]"> </path> </g> </g> </g> </g></svg>
                            <svg class='m-2' width="34px" height="34px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6ZM6 4C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H12V13H11C10.4477 13 10 12.5523 10 12C10 11.4477 10.4477 11 11 11H12V9.5C12 7.567 13.567 6 15.5 6H16.1C16.6523 6 17.1 6.44772 17.1 7C17.1 7.55228 16.6523 8 16.1 8H15.5C14.6716 8 14 8.67157 14 9.5V11H16.1C16.6523 11 17.1 11.4477 17.1 12C17.1 12.5523 16.6523 13 16.1 13H14V20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6Z" fill="#ebab21"></path> </g></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->




    <!-- JS here -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/popper.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/bootstrap.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/isotope.pkgd.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/slick.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/jquery.meanmenu.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/ajax-form.js"></script>
    <script src="https://cttaste.com/public/track_order/js/wow.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/aos.js"></script>
    <script src="https://cttaste.com/public/track_order/js/paroller.js"></script>
    <script src="https://cttaste.com/public/track_order/js/jquery.waypoints.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/jquery.counterup.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/jquery.nice-select.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/jquery.scrollUp.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/imagesloaded.pkgd.min.js"></script>
    <script src="https://cttaste.com/public/track_order/js/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="https://cttaste.com/public/track_order/js/plugins.js"></script>
    <script src="https://cttaste.com/public/track_order/js/main.js"></script>
    <script src="{{asset('cdn/sweetalert.min.js')}}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('script')
   
</body>

<!-- Mirrored from themebeyond.com/html/startesk/startesk/tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 20:36:54 GMT -->

</html>