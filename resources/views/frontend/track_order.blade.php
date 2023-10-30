@extends('frontend.track_order_master')
<body>

    @section('content')
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="dots"></li>
                                    <li class="breadcrumb-item"><a href="#">Total Price</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">NGN{{
                                        number_format($order->total_price,2) }}</li>
                                    <li class="dots2"></li>
                                </ol>
                            </nav>
                            <h2>Track Your Order</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->


        <!-- category-area-end -->

        <!-- tracking-area -->
        <div class="tracking-area pt-95 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="tracking-id-info text-center">



                            <div class="tracking-list">
                                @if($delivery == null)
                                <ul>
                                    <li class="active">
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-box"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Order Request</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-warehouse"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Payment Confirmed</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Out for delivery</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-audit"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Completed</p>
                                        </div>
                                    </li>
                                </ul>
                                @else
                                <ul>
                                    <li @if($delivery->status == 3)class="active" @endif>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-box"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Order Request</p>
                                        </div>
                                    </li>
                                    <li @if($delivery->status == 2)class="active" @endif>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-warehouse"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Payment Confirmed</p>
                                        </div>
                                    </li>
                                    <li @if($delivery->status == 0)class="active" @endif>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Out for delivery</p>
                                        </div>
                                    </li>
                                    <li @if($delivery->status == 1)class="active" @endif>
                                        <div class="tracking-list-icon">
                                            <i class="flaticon-audit"></i>
                                        </div>
                                        <div class="tracking-list-content">
                                            <p>Completed</p>
                                        </div>
                                    </li>
                                </ul>
                                @endif
                            </div>
                            <button data-toggle="modal" data-target="#reportVendor" class="btn red-btn m-2">Make
                                Review</button>
                            <div class="modal fade" id="reportVendor" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle"
                                                style="font-family: 'Ubuntu', sans-serif;">
                                                Make a review for {{ $order->user->name ?? ""
                                                }}?</h5>
                                            <button type="button" style='border:none;font-size:20px;color:red'
                                                class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class='reportmyvendor'>
                                                <h6 style="font-family: 'Ubuntu', sans-serif;">
                                                    Mobile No:</h6>
                                                <input type='number' id='phone_no' placeholder='08XXXXXXXXX'
                                                    class='form-control' />
                                                <h6 style="font-family: 'Ubuntu', sans-serif;">
                                                    Review/Complaint:</h6>
                                                <input type='hidden' id='restaurant_name'
                                                    value='{{ $order->user->name ?? "" }}' />

                                                <textarea required id='complaint' class='form-control'></textarea>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" style='background:grey' class="btn btn-white"
                                                data-dismiss="modal">Close</button>
                                            <button id='report_vendor_submit' type="button" style='background:#ebab21'
                                                class="btn btn-success">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                    <!--begin::Date-->
                                    <tr>
                                        <td class="text-dark">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/files/fil002.svg-->
                                                <span class="svg-icon svg-icon-2 me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                        viewBox="0 0 20 21" fill="none">
                                                        <path opacity="0.3"
                                                            d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z"
                                                            fill="black" />
                                                        <path
                                                            d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Restaurant
                                            </div>
                                        </td>
                                        <td class="fw-bolder text-end text-dark">{{ $order->user->name ?? '' }}</td>
                                    </tr>
                                    <!--end::Date-->
                                    <!--begin::Payment method-->
                                    <tr>
                                        <td class="text-dark">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                                <span class="svg-icon svg-icon-2 me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                            fill="black" />
                                                        <path
                                                            d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Rider's Name
                                            </div>
                                        </td>
                                        <td class="fw-bolder text-end text-dark">{{ $delivery->rider_name ?? "Not yet
                                            assigned" }}
                                        </td>
                                    </tr>
                                    <!--end::Payment method-->
                                    <!--begin::Date-->

                                    <tr>
                                        <td class="text-dark">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
                                                <span class="svg-icon svg-icon-2 me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z"
                                                            fill="black" />
                                                        <path opacity="0.3"
                                                            d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Rider's Contact
                                            </div>
                                        </td>
                                        <td class="fw-bolder text-end text-dark"><a
                                                href='tel:{{ $delivery->rider_phone ?? "" }}'>{{ $delivery->rider_phone
                                                ?? "Not yet assigned" }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
                                                <span class="svg-icon svg-icon-2 me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z"
                                                            fill="black" />
                                                        <path opacity="0.3"
                                                            d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Request Time
                                            </div>
                                        </td>
                                        <td class="fw-bolder text-end text-dark">{{ date('h:i A',
                                            strtotime($delivery->request_time)) ?? "0:00" }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
                                                <span class="svg-icon svg-icon-2 me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z"
                                                            fill="black" />
                                                        <path opacity="0.3"
                                                            d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->PickUp Time
                                            </div>
                                        </td>
                                        <td class="fw-bolder text-end text-dark">
                                            @if($delivery->pick_up_time !== null)
                                            {{date('h:i A',
                                            strtotime($delivery->pick_up_time))  }}
                                            
                                            @else 
                                            Not yet
                                            picked up
                                            @endif
                                        </td>
                                    </tr>
                                    <!--end::Date-->
                                </tbody>
                                <!--end::Table body-->
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tracking-area-end -->

        <!-- services-area -->

        <!-- services-area-end -->

    </main>
    @endsection
    <!-- main-area-end -->



    <!-- JS here -->
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
            $("#report_vendor_submit").on("click", function() {
				
				Swal.fire('Sending complaint, please wait...')
            var fd = new FormData;
            fd.append('restaurant_name', $("#restaurant_name").val());
            fd.append('complaint', $("#complaint").val());
            fd.append('phone', $("#phone_no").val());
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('createreview')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    Swal.close()
                    Toast.fire({
                        icon: 'success',
                        title: 'Complaint Submitted Successfully!'
                        })
					$("#reportVendor").modal('hide')
					$("#complaint").val('')

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Toast.fire({
                        icon: 'error',
                        title: 'Complaint not submitted, fill the neccessary fields!'
                        })
                 }
            })

        })

        })
    </script>
    @endsection