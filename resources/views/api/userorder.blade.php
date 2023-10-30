@extends('api.master')
@section('header')
@endsection
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <table id='datatable' class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-100px">Order ID</th>
                        <th class="min-w-175px">Customer</th>
                      
                        <th class="text-end min-w-100px">Total</th>
                        <th class="text-end min-w-100px">Date Added</th>
                        <th class="text-end min-w-100px">Location</th>
                        <th class="text-end min-w-100px">View</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                    <!--begin::Table row-->
                    @foreach($orders as $order)
                    <tr>
                        <!--begin::Checkbox-->
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <!--end::Checkbox-->
                        <!--begin::Order ID=-->
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="details.html" class="text-gray-800 text-hover-primary fw-bolder">CT-{{$order->order_id}}</a>
                        </td>
                        <!--end::Order ID=-->
                        <!--begin::Customer=-->
                        <td>
                            
                                    <a class="text fs-5 fw-bolder">{{$order->name}}</a>
                                
                        </td>
                        <!--end::Customer=-->
                        <!--begin::Status=-->
                      
                        <!--end::Status=-->
                        <!--begin::Total=-->
                        <td class="text-end pe-0">
                            <span class="fw-bolder"># {{number_format($order->total_price,2)}}</span>
                        </td>
                        <!--end::Total=-->
                        <!--begin::Date Added=-->
                        <td class="text-end" data-order="2022-01-28">
                            <span class="fw-bolder">{{Date('d-m-y',strtotime($order->created_at))}}</span>
                        </td>
                        <!--end::Date Added=-->
                        <!--begin::Date Modified=-->
                        <td class="text-end" data-order="2022-01-31">
                            <span class="fw-bolder">{{Str::limit($order->address,20)}}</span>
                        </td>
                        <!--end::Date Modified=-->
                        <!--begin::Action=-->
                        <td class="text-end">

                            <a href='/managerorderdetails/{{$order->id}}' class='btn-sm btn btn-success'>View</a>
                        </td>
                        <!--end::Action=-->
                    </tr>
                    @endforeach

                </tbody>
                <!--end::Table body-->
            </table>
        </div>
    </div>
    <!-- end page title -->

</div>
@section('script') 
@endsection
@endsection