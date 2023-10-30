@extends('backend.master')
@section('header_link')
@endsection
@section('content')

           
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Container-->
                    <div class="container-xxl" id="kt_content_container">
                        <!--begin::Products-->


                        <div class="row g-5 g-xl-10 mb-xl-10 mt-2">
                            <!--begin::Col-->
                            <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                                <!--begin::Chart widget 3-->
                                <div class="card card-flush overflow-hidden h-md-100">
                                    <!--begin::Header-->
                                    <div class="card-header py-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">Sales This Months</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-6">Total Sales for this month</span>
                                        </h3>
                                     
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                        <!--begin::Statistics-->
                                        <div class="px-9 mb-5">
                                            <!--begin::Statistics-->
                                            <div class="d-flex mb-2">
                                                <span class="fs-4 fw-bold text-gray-400 me-1">₦</span>
                                                <span
                                                    class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">{{number_format($total_sales,2)
                                                    }}</span>
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-bold text-gray-400">Total Sales</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <!--<div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6"-->
                                        <!--    style="height: 300px; min-height: 315px;">-->
                                        <!--    <div id="apexcharts78rfdoua"-->
                                        <!--        class="apexcharts-canvas apexcharts78rfdoua apexcharts-theme-light"-->
                                        <!--        style="width: 1011.5px; height: 300px;"><svg id="SvgjsSvg2679"-->
                                        <!--            width="1011.5" height="300" xmlns="http://www.w3.org/2000/svg"-->
                                        <!--            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"-->
                                        <!--            xmlns:svgjs="http://svgjs.dev"-->
                                        <!--            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"-->
                                        <!--            transform="translate(0, 0)" style="background: transparent;">-->
                                        <!--            <g id="SvgjsG2681" class="apexcharts-inner apexcharts-graphical"-->
                                        <!--                transform="translate(56.53103446960449, 30)">-->
                                        <!--                <defs id="SvgjsDefs2680">-->
                                        <!--                    <clipPath id="gridRectMask78rfdoua">-->
                                        <!--                        <rect id="SvgjsRect2686" width="951.9689655303955"-->
                                        <!--                            height="222.5085720163981" x="-3.5" y="-1.5" rx="0"-->
                                        <!--                            ry="0" opacity="1" stroke-width="0" stroke="none"-->
                                        <!--                            stroke-dasharray="0" fill="#fff"></rect>-->
                                        <!--                    </clipPath>-->
                                        <!--                    <clipPath id="forecastMask78rfdoua"></clipPath>-->
                                        <!--                    <clipPath id="nonForecastMask78rfdoua"></clipPath>-->
                                        <!--                    <clipPath id="gridRectMarkerMask78rfdoua">-->
                                        <!--                        <rect id="SvgjsRect2687" width="948.9689655303955"-->
                                        <!--                            height="223.5085720163981" x="-2" y="-2" rx="0"-->
                                        <!--                            ry="0" opacity="1" stroke-width="0" stroke="none"-->
                                        <!--                            stroke-dasharray="0" fill="#fff"></rect>-->
                                        <!--                    </clipPath>-->
                                        <!--                    <linearGradient id="SvgjsLinearGradient2692" x1="0" y1="0"-->
                                        <!--                        x2="0" y2="1">-->
                                        <!--                        <stop id="SvgjsStop2693" stop-opacity="0.4"-->
                                        <!--                            stop-color="rgba(0,217,217,0.4)" offset="0"></stop>-->
                                        <!--                        <stop id="SvgjsStop2694" stop-opacity="0"-->
                                        <!--                            stop-color="rgba(255,255,255,0)" offset="0.8">-->
                                        <!--                        </stop>-->
                                        <!--                        <stop id="SvgjsStop2695" stop-opacity="0"-->
                                        <!--                            stop-color="rgba(255,255,255,0)" offset="1"></stop>-->
                                        <!--                    </linearGradient>-->
                                        <!--                </defs>-->
                                        <!--                <g id="SvgjsG2698" class="apexcharts-xaxis"-->
                                        <!--                    transform="translate(0, 0)">-->
                                        <!--                    <g id="SvgjsG2699" class="apexcharts-xaxis-texts-g"-->
                                        <!--                        transform="translate(0, -10)"><text id="SvgjsText2701"-->
                                        <!--                            font-family="inherit" x="0" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2702"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2704" font-family="inherit"-->
                                        <!--                            x="52.49827586279976" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2705"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2707" font-family="inherit"-->
                                        <!--                            x="104.99655172559952" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2708"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2710" font-family="inherit"-->
                                        <!--                            x="157.49482758839926" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 158.52820777893066 237.38157844543457)">-->
                                        <!--                            <tspan id="SvgjsTspan2711">Apr 04</tspan>-->
                                        <!--                            <title>Apr 04</title>-->
                                        <!--                        </text><text id="SvgjsText2713" font-family="inherit"-->
                                        <!--                            x="209.993103451199" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2714"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2716" font-family="inherit"-->
                                        <!--                            x="262.4913793139987" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2717"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2719" font-family="inherit"-->
                                        <!--                            x="314.98965517679846" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 315.98962020874023 237.38157844543457)">-->
                                        <!--                            <tspan id="SvgjsTspan2720">Apr 07</tspan>-->
                                        <!--                            <title>Apr 07</title>-->
                                        <!--                        </text><text id="SvgjsText2722" font-family="inherit"-->
                                        <!--                            x="367.4879310395982" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2723"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2725" font-family="inherit"-->
                                        <!--                            x="419.98620690239795" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2726"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2728" font-family="inherit"-->
                                        <!--                            x="472.4844827651977" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 473.4844665527344 237.38157844543457)">-->
                                        <!--                            <tspan id="SvgjsTspan2729">Apr 10</tspan>-->
                                        <!--                            <title>Apr 10</title>-->
                                        <!--                        </text><text id="SvgjsText2731" font-family="inherit"-->
                                        <!--                            x="524.9827586279974" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2732"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2734" font-family="inherit"-->
                                        <!--                            x="577.4810344907972" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2735"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2737" font-family="inherit"-->
                                        <!--                            x="629.979310353597" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 630.9792671203613 237.38157844543457)">-->
                                        <!--                            <tspan id="SvgjsTspan2738">Apr 13</tspan>-->
                                        <!--                            <title>Apr 13</title>-->
                                        <!--                        </text><text id="SvgjsText2740" font-family="inherit"-->
                                        <!--                            x="682.4775862163968" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2741"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2743" font-family="inherit"-->
                                        <!--                            x="734.9758620791966" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2744"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2746" font-family="inherit"-->
                                        <!--                            x="787.4741379419964" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 788.4740867614746 237.38157844543457)">-->
                                        <!--                            <tspan id="SvgjsTspan2747">Apr 16</tspan>-->
                                        <!--                            <title>Apr 16</title>-->
                                        <!--                        </text><text id="SvgjsText2749" font-family="inherit"-->
                                        <!--                            x="839.9724138047962" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2750"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2752" font-family="inherit"-->
                                        <!--                            x="892.470689667596" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2753"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text><text id="SvgjsText2755" font-family="inherit"-->
                                        <!--                            x="944.9689655303958" y="242.5085720163981"-->
                                        <!--                            text-anchor="end" dominant-baseline="auto"-->
                                        <!--                            font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                            class="apexcharts-text apexcharts-xaxis-label "-->
                                        <!--                            style="font-family: inherit;"-->
                                        <!--                            transform="rotate(0 1 -1)">-->
                                        <!--                            <tspan id="SvgjsTspan2756"></tspan>-->
                                        <!--                            <title></title>-->
                                        <!--                        </text></g>-->
                                        <!--                </g>-->
                                        <!--                <g id="SvgjsG2769" class="apexcharts-grid">-->
                                        <!--                    <g id="SvgjsG2770" class="apexcharts-gridlines-horizontal">-->
                                        <!--                        <line id="SvgjsLine2772" x1="0" y1="0"-->
                                        <!--                            x2="944.9689655303955" y2="0" stroke="#e4e6ef"-->
                                        <!--                            stroke-dasharray="4" stroke-linecap="butt"-->
                                        <!--                            class="apexcharts-gridline"></line>-->
                                        <!--                        <line id="SvgjsLine2773" x1="0" y1="54.87714300409952"-->
                                        <!--                            x2="944.9689655303955" y2="54.87714300409952"-->
                                        <!--                            stroke="#e4e6ef" stroke-dasharray="4"-->
                                        <!--                            stroke-linecap="butt" class="apexcharts-gridline">-->
                                        <!--                        </line>-->
                                        <!--                        <line id="SvgjsLine2774" x1="0" y1="109.75428600819905"-->
                                        <!--                            x2="944.9689655303955" y2="109.75428600819905"-->
                                        <!--                            stroke="#e4e6ef" stroke-dasharray="4"-->
                                        <!--                            stroke-linecap="butt" class="apexcharts-gridline">-->
                                        <!--                        </line>-->
                                        <!--                        <line id="SvgjsLine2775" x1="0" y1="164.63142901229855"-->
                                        <!--                            x2="944.9689655303955" y2="164.63142901229855"-->
                                        <!--                            stroke="#e4e6ef" stroke-dasharray="4"-->
                                        <!--                            stroke-linecap="butt" class="apexcharts-gridline">-->
                                        <!--                        </line>-->
                                        <!--                        <line id="SvgjsLine2776" x1="0" y1="219.5085720163981"-->
                                        <!--                            x2="944.9689655303955" y2="219.5085720163981"-->
                                        <!--                            stroke="#e4e6ef" stroke-dasharray="4"-->
                                        <!--                            stroke-linecap="butt" class="apexcharts-gridline">-->
                                        <!--                        </line>-->
                                        <!--                    </g>-->
                                        <!--                    <g id="SvgjsG2771" class="apexcharts-gridlines-vertical">-->
                                        <!--                    </g>-->
                                        <!--                    <line id="SvgjsLine2778" x1="0" y1="219.5085720163981"-->
                                        <!--                        x2="944.9689655303955" y2="219.5085720163981"-->
                                        <!--                        stroke="transparent" stroke-dasharray="0"-->
                                        <!--                        stroke-linecap="butt"></line>-->
                                        <!--                    <line id="SvgjsLine2777" x1="0" y1="1" x2="0"-->
                                        <!--                        y2="219.5085720163981" stroke="transparent"-->
                                        <!--                        stroke-dasharray="0" stroke-linecap="butt"></line>-->
                                        <!--                </g>-->
                                        <!--                <g id="SvgjsG2688"-->
                                        <!--                    class="apexcharts-area-series apexcharts-plot-series">-->
                                        <!--                    <g id="SvgjsG2689" class="apexcharts-series"-->
                                        <!--                        seriesName="Sales" data:longestSeries="true" rel="1"-->
                                        <!--                        data:realIndex="0">-->
                                        <!--                        <path id="SvgjsPath2696"-->
                                        <!--                            d="M 0 219.5085720163981L 0 94.07510229274203C 18.374396551979913 94.07510229274203 34.12387931081984 94.07510229274203 52.49827586279975 94.07510229274203C 70.87267241477966 94.07510229274203 86.62215517361959 62.716734861828 104.9965517255995 62.716734861828C 123.3709482775794 62.716734861828 139.12043103641932 62.716734861828 157.49482758839923 62.716734861828C 175.86922414037915 62.716734861828 191.6187068992191 94.07510229274203 209.993103451199 94.07510229274203C 228.36750000317892 94.07510229274203 244.11698276201884 94.07510229274203 262.4913793139987 94.07510229274203C 280.8657758659786 94.07510229274203 296.6152586248186 31.35836743091403 314.98965517679846 31.35836743091403C 333.36405172877835 31.35836743091403 349.1135344876183 31.35836743091403 367.4879310395982 31.35836743091403C 385.86232759157815 31.35836743091403 401.61181035041807 62.716734861828 419.986206902398 62.716734861828C 438.3606034543779 62.716734861828 454.11008621321787 62.716734861828 472.48448276519775 62.716734861828C 490.85887931717764 62.716734861828 506.60836207601756 94.07510229274203 524.9827586279974 94.07510229274203C 543.3571551799773 94.07510229274203 559.1066379388174 94.07510229274203 577.4810344907972 94.07510229274203C 595.8554310427771 94.07510229274203 611.604913801617 62.716734861828 629.9793103535969 62.716734861828C 648.3537069055768 62.716734861828 664.1031896644168 62.716734861828 682.4775862163967 62.716734861828C 700.8519827683766 62.716734861828 716.6014655272165 94.07510229274203 734.9758620791964 94.07510229274203C 753.3502586311763 94.07510229274203 769.0997413900163 94.07510229274203 787.4741379419962 94.07510229274203C 805.8485344939761 94.07510229274203 821.5980172528161 62.716734861828 839.972413804796 62.716734861828C 858.3468103567759 62.716734861828 874.0962931156158 62.716734861828 892.4706896675957 62.716734861828C 910.8450862195756 62.716734861828 926.5945689784156 31.35836743091403 944.9689655303955 31.35836743091403C 944.9689655303955 31.35836743091403 944.9689655303955 31.35836743091403 944.9689655303955 219.5085720163981M 944.9689655303955 31.35836743091403z"-->
                                        <!--                            fill="url(#SvgjsLinearGradient2692)"-->
                                        <!--                            fill-opacity="1" stroke-opacity="1"-->
                                        <!--                            stroke-linecap="butt" stroke-width="0"-->
                                        <!--                            stroke-dasharray="0" class="apexcharts-area"-->
                                        <!--                            index="0" clip-path="url(#gridRectMask78rfdoua)"-->
                                        <!--                            pathTo="M 0 219.5085720163981L 0 94.07510229274203C 18.374396551979913 94.07510229274203 34.12387931081984 94.07510229274203 52.49827586279975 94.07510229274203C 70.87267241477966 94.07510229274203 86.62215517361959 62.716734861828 104.9965517255995 62.716734861828C 123.3709482775794 62.716734861828 139.12043103641932 62.716734861828 157.49482758839923 62.716734861828C 175.86922414037915 62.716734861828 191.6187068992191 94.07510229274203 209.993103451199 94.07510229274203C 228.36750000317892 94.07510229274203 244.11698276201884 94.07510229274203 262.4913793139987 94.07510229274203C 280.8657758659786 94.07510229274203 296.6152586248186 31.35836743091403 314.98965517679846 31.35836743091403C 333.36405172877835 31.35836743091403 349.1135344876183 31.35836743091403 367.4879310395982 31.35836743091403C 385.86232759157815 31.35836743091403 401.61181035041807 62.716734861828 419.986206902398 62.716734861828C 438.3606034543779 62.716734861828 454.11008621321787 62.716734861828 472.48448276519775 62.716734861828C 490.85887931717764 62.716734861828 506.60836207601756 94.07510229274203 524.9827586279974 94.07510229274203C 543.3571551799773 94.07510229274203 559.1066379388174 94.07510229274203 577.4810344907972 94.07510229274203C 595.8554310427771 94.07510229274203 611.604913801617 62.716734861828 629.9793103535969 62.716734861828C 648.3537069055768 62.716734861828 664.1031896644168 62.716734861828 682.4775862163967 62.716734861828C 700.8519827683766 62.716734861828 716.6014655272165 94.07510229274203 734.9758620791964 94.07510229274203C 753.3502586311763 94.07510229274203 769.0997413900163 94.07510229274203 787.4741379419962 94.07510229274203C 805.8485344939761 94.07510229274203 821.5980172528161 62.716734861828 839.972413804796 62.716734861828C 858.3468103567759 62.716734861828 874.0962931156158 62.716734861828 892.4706896675957 62.716734861828C 910.8450862195756 62.716734861828 926.5945689784156 31.35836743091403 944.9689655303955 31.35836743091403C 944.9689655303955 31.35836743091403 944.9689655303955 31.35836743091403 944.9689655303955 219.5085720163981M 944.9689655303955 31.35836743091403z"-->
                                        <!--                            pathFrom="M -1 376.3004091709682L -1 376.3004091709682L 52.49827586279975 376.3004091709682L 104.9965517255995 376.3004091709682L 157.49482758839923 376.3004091709682L 209.993103451199 376.3004091709682L 262.4913793139987 376.3004091709682L 314.98965517679846 376.3004091709682L 367.4879310395982 376.3004091709682L 419.986206902398 376.3004091709682L 472.48448276519775 376.3004091709682L 524.9827586279974 376.3004091709682L 577.4810344907972 376.3004091709682L 629.9793103535969 376.3004091709682L 682.4775862163967 376.3004091709682L 734.9758620791964 376.3004091709682L 787.4741379419962 376.3004091709682L 839.972413804796 376.3004091709682L 892.4706896675957 376.3004091709682L 944.9689655303955 376.3004091709682">-->
                                        <!--                        </path>-->
                                        <!--                        <path id="SvgjsPath2697"-->
                                        <!--                            d="M 0 94.07510229274203C 18.374396551979913 94.07510229274203 34.12387931081984 94.07510229274203 52.49827586279975 94.07510229274203C 70.87267241477966 94.07510229274203 86.62215517361959 62.716734861828 104.9965517255995 62.716734861828C 123.3709482775794 62.716734861828 139.12043103641932 62.716734861828 157.49482758839923 62.716734861828C 175.86922414037915 62.716734861828 191.6187068992191 94.07510229274203 209.993103451199 94.07510229274203C 228.36750000317892 94.07510229274203 244.11698276201884 94.07510229274203 262.4913793139987 94.07510229274203C 280.8657758659786 94.07510229274203 296.6152586248186 31.35836743091403 314.98965517679846 31.35836743091403C 333.36405172877835 31.35836743091403 349.1135344876183 31.35836743091403 367.4879310395982 31.35836743091403C 385.86232759157815 31.35836743091403 401.61181035041807 62.716734861828 419.986206902398 62.716734861828C 438.3606034543779 62.716734861828 454.11008621321787 62.716734861828 472.48448276519775 62.716734861828C 490.85887931717764 62.716734861828 506.60836207601756 94.07510229274203 524.9827586279974 94.07510229274203C 543.3571551799773 94.07510229274203 559.1066379388174 94.07510229274203 577.4810344907972 94.07510229274203C 595.8554310427771 94.07510229274203 611.604913801617 62.716734861828 629.9793103535969 62.716734861828C 648.3537069055768 62.716734861828 664.1031896644168 62.716734861828 682.4775862163967 62.716734861828C 700.8519827683766 62.716734861828 716.6014655272165 94.07510229274203 734.9758620791964 94.07510229274203C 753.3502586311763 94.07510229274203 769.0997413900163 94.07510229274203 787.4741379419962 94.07510229274203C 805.8485344939761 94.07510229274203 821.5980172528161 62.716734861828 839.972413804796 62.716734861828C 858.3468103567759 62.716734861828 874.0962931156158 62.716734861828 892.4706896675957 62.716734861828C 910.8450862195756 62.716734861828 926.5945689784156 31.35836743091403 944.9689655303955 31.35836743091403"-->
                                        <!--                            fill="none" fill-opacity="1" stroke="#00d9d9"-->
                                        <!--                            stroke-opacity="1" stroke-linecap="butt"-->
                                        <!--                            stroke-width="3" stroke-dasharray="0"-->
                                        <!--                            class="apexcharts-area" index="0"-->
                                        <!--                            clip-path="url(#gridRectMask78rfdoua)"-->
                                        <!--                            pathTo="M 0 94.07510229274203C 18.374396551979913 94.07510229274203 34.12387931081984 94.07510229274203 52.49827586279975 94.07510229274203C 70.87267241477966 94.07510229274203 86.62215517361959 62.716734861828 104.9965517255995 62.716734861828C 123.3709482775794 62.716734861828 139.12043103641932 62.716734861828 157.49482758839923 62.716734861828C 175.86922414037915 62.716734861828 191.6187068992191 94.07510229274203 209.993103451199 94.07510229274203C 228.36750000317892 94.07510229274203 244.11698276201884 94.07510229274203 262.4913793139987 94.07510229274203C 280.8657758659786 94.07510229274203 296.6152586248186 31.35836743091403 314.98965517679846 31.35836743091403C 333.36405172877835 31.35836743091403 349.1135344876183 31.35836743091403 367.4879310395982 31.35836743091403C 385.86232759157815 31.35836743091403 401.61181035041807 62.716734861828 419.986206902398 62.716734861828C 438.3606034543779 62.716734861828 454.11008621321787 62.716734861828 472.48448276519775 62.716734861828C 490.85887931717764 62.716734861828 506.60836207601756 94.07510229274203 524.9827586279974 94.07510229274203C 543.3571551799773 94.07510229274203 559.1066379388174 94.07510229274203 577.4810344907972 94.07510229274203C 595.8554310427771 94.07510229274203 611.604913801617 62.716734861828 629.9793103535969 62.716734861828C 648.3537069055768 62.716734861828 664.1031896644168 62.716734861828 682.4775862163967 62.716734861828C 700.8519827683766 62.716734861828 716.6014655272165 94.07510229274203 734.9758620791964 94.07510229274203C 753.3502586311763 94.07510229274203 769.0997413900163 94.07510229274203 787.4741379419962 94.07510229274203C 805.8485344939761 94.07510229274203 821.5980172528161 62.716734861828 839.972413804796 62.716734861828C 858.3468103567759 62.716734861828 874.0962931156158 62.716734861828 892.4706896675957 62.716734861828C 910.8450862195756 62.716734861828 926.5945689784156 31.35836743091403 944.9689655303955 31.35836743091403"-->
                                        <!--                            pathFrom="M -1 376.3004091709682L -1 376.3004091709682L 52.49827586279975 376.3004091709682L 104.9965517255995 376.3004091709682L 157.49482758839923 376.3004091709682L 209.993103451199 376.3004091709682L 262.4913793139987 376.3004091709682L 314.98965517679846 376.3004091709682L 367.4879310395982 376.3004091709682L 419.986206902398 376.3004091709682L 472.48448276519775 376.3004091709682L 524.9827586279974 376.3004091709682L 577.4810344907972 376.3004091709682L 629.9793103535969 376.3004091709682L 682.4775862163967 376.3004091709682L 734.9758620791964 376.3004091709682L 787.4741379419962 376.3004091709682L 839.972413804796 376.3004091709682L 892.4706896675957 376.3004091709682L 944.9689655303955 376.3004091709682">-->
                                        <!--                        </path>-->
                                        <!--                        <g id="SvgjsG2690"-->
                                        <!--                            class="apexcharts-series-markers-wrap"-->
                                        <!--                            data:realIndex="0">-->
                                        <!--                            <g class="apexcharts-series-markers">-->
                                        <!--                                <circle id="SvgjsCircle2786" r="0" cx="0" cy="0"-->
                                        <!--                                    class="apexcharts-marker wn6bdecpg no-pointer-events"-->
                                        <!--                                    stroke="#00d9d9" fill="#00d9d9"-->
                                        <!--                                    fill-opacity="1" stroke-width="3"-->
                                        <!--                                    stroke-opacity="0.9"-->
                                        <!--                                    default-marker-size="0"></circle>-->
                                        <!--                            </g>-->
                                        <!--                        </g>-->
                                        <!--                    </g>-->
                                        <!--                    <g id="SvgjsG2691" class="apexcharts-datalabels"-->
                                        <!--                        data:realIndex="0"></g>-->
                                        <!--                </g>-->
                                        <!--                <line id="SvgjsLine2780" x1="0" y1="0" x2="0"-->
                                        <!--                    y2="219.5085720163981" stroke="#00d9d9" stroke-dasharray="3"-->
                                        <!--                    stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"-->
                                        <!--                    y="0" width="1" height="219.5085720163981" fill="#b1b9c4"-->
                                        <!--                    filter="none" fill-opacity="0.9" stroke-width="1"></line>-->
                                        <!--                <line id="SvgjsLine2781" x1="0" y1="0" x2="944.9689655303955"-->
                                        <!--                    y2="0" stroke="#b6b6b6" stroke-dasharray="0"-->
                                        <!--                    stroke-width="1" stroke-linecap="butt"-->
                                        <!--                    class="apexcharts-ycrosshairs"></line>-->
                                        <!--                <line id="SvgjsLine2782" x1="0" y1="0" x2="944.9689655303955"-->
                                        <!--                    y2="0" stroke-dasharray="0" stroke-width="0"-->
                                        <!--                    stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">-->
                                        <!--                </line>-->
                                        <!--                <g id="SvgjsG2783" class="apexcharts-yaxis-annotations"></g>-->
                                        <!--                <g id="SvgjsG2784" class="apexcharts-xaxis-annotations"></g>-->
                                        <!--                <g id="SvgjsG2785" class="apexcharts-point-annotations"></g>-->
                                        <!--                <rect id="SvgjsRect2787" width="0" height="0" x="0" y="0" rx="0"-->
                                        <!--                    ry="0" opacity="1" stroke-width="0" stroke="none"-->
                                        <!--                    stroke-dasharray="0" fill="#fefefe"-->
                                        <!--                    class="apexcharts-zoom-rect"></rect>-->
                                        <!--                <rect id="SvgjsRect2788" width="0" height="0" x="0" y="0" rx="0"-->
                                        <!--                    ry="0" opacity="1" stroke-width="0" stroke="none"-->
                                        <!--                    stroke-dasharray="0" fill="#fefefe"-->
                                        <!--                    class="apexcharts-selection-rect"></rect>-->
                                        <!--            </g>-->
                                        <!--            <g id="SvgjsG2757" class="apexcharts-yaxis" rel="0"-->
                                        <!--                transform="translate(26.531034469604492, 0)">-->
                                        <!--                <g id="SvgjsG2758" class="apexcharts-yaxis-texts-g"><text-->
                                        <!--                        id="SvgjsText2759" font-family="inherit" x="20" y="31.4"-->
                                        <!--                        text-anchor="end" dominant-baseline="auto"-->
                                        <!--                        font-size="12px" font-weight="400" fill="#a1a5b7"-->
                                        <!--                        class="apexcharts-text apexcharts-yaxis-label "-->
                                        <!--                        style="font-family: inherit;">-->
                                        <!--                        <tspan id="SvgjsTspan2760">$24K</tspan>-->
                                        <!--                        <title>$24K</title>-->
                                        <!--                    </text><text id="SvgjsText2761" font-family="inherit" x="20"-->
                                        <!--                        y="86.27714300409953" text-anchor="end"-->
                                        <!--                        dominant-baseline="auto" font-size="12px"-->
                                        <!--                        font-weight="400" fill="#a1a5b7"-->
                                        <!--                        class="apexcharts-text apexcharts-yaxis-label "-->
                                        <!--                        style="font-family: inherit;">-->
                                        <!--                        <tspan id="SvgjsTspan2762">$20.5K</tspan>-->
                                        <!--                        <title>$20.5K</title>-->
                                        <!--                    </text><text id="SvgjsText2763" font-family="inherit" x="20"-->
                                        <!--                        y="141.15428600819905" text-anchor="end"-->
                                        <!--                        dominant-baseline="auto" font-size="12px"-->
                                        <!--                        font-weight="400" fill="#a1a5b7"-->
                                        <!--                        class="apexcharts-text apexcharts-yaxis-label "-->
                                        <!--                        style="font-family: inherit;">-->
                                        <!--                        <tspan id="SvgjsTspan2764">$17K</tspan>-->
                                        <!--                        <title>$17K</title>-->
                                        <!--                    </text><text id="SvgjsText2765" font-family="inherit" x="20"-->
                                        <!--                        y="196.03142901229856" text-anchor="end"-->
                                        <!--                        dominant-baseline="auto" font-size="12px"-->
                                        <!--                        font-weight="400" fill="#a1a5b7"-->
                                        <!--                        class="apexcharts-text apexcharts-yaxis-label "-->
                                        <!--                        style="font-family: inherit;">-->
                                        <!--                        <tspan id="SvgjsTspan2766">$13.5K</tspan>-->
                                        <!--                        <title>$13.5K</title>-->
                                        <!--                    </text><text id="SvgjsText2767" font-family="inherit" x="20"-->
                                        <!--                        y="250.9085720163981" text-anchor="end"-->
                                        <!--                        dominant-baseline="auto" font-size="12px"-->
                                        <!--                        font-weight="400" fill="#a1a5b7"-->
                                        <!--                        class="apexcharts-text apexcharts-yaxis-label "-->
                                        <!--                        style="font-family: inherit;">-->
                                        <!--                        <tspan id="SvgjsTspan2768">$10K</tspan>-->
                                        <!--                        <title>$10K</title>-->
                                        <!--                    </text></g>-->
                                        <!--            </g>-->
                                        <!--            <rect id="SvgjsRect2779" width="0" height="0" x="0" y="0" rx="0"-->
                                        <!--                ry="0" opacity="1" stroke-width="0" stroke="none"-->
                                        <!--                stroke-dasharray="0" fill="#fefefe"></rect>-->
                                        <!--            <g id="SvgjsG2682" class="apexcharts-annotations"></g>-->
                                        <!--        </svg>-->
                                        <!--        <div class="apexcharts-legend" style="max-height: 150px;"></div>-->
                                        <!--        <div class="apexcharts-tooltip apexcharts-theme-light">-->
                                        <!--            <div class="apexcharts-tooltip-title"-->
                                        <!--                style="font-family: inherit; font-size: 12px;"></div>-->
                                        <!--            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span-->
                                        <!--                    class="apexcharts-tooltip-marker"-->
                                        <!--                    style="background-color: rgb(0, 217, 217);"></span>-->
                                        <!--                <div class="apexcharts-tooltip-text"-->
                                        <!--                    style="font-family: inherit; font-size: 12px;">-->
                                        <!--                    <div class="apexcharts-tooltip-y-group"><span-->
                                        <!--                            class="apexcharts-tooltip-text-y-label"></span><span-->
                                        <!--                            class="apexcharts-tooltip-text-y-value"></span>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="apexcharts-tooltip-goals-group"><span-->
                                        <!--                            class="apexcharts-tooltip-text-goals-label"></span><span-->
                                        <!--                            class="apexcharts-tooltip-text-goals-value"></span>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="apexcharts-tooltip-z-group"><span-->
                                        <!--                            class="apexcharts-tooltip-text-z-label"></span><span-->
                                        <!--                            class="apexcharts-tooltip-text-z-value"></span>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--        <div-->
                                        <!--            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">-->
                                        <!--            <div class="apexcharts-xaxistooltip-text"-->
                                        <!--                style="font-family: inherit; font-size: 12px;"></div>-->
                                        <!--        </div>-->
                                        <!--        <div-->
                                        <!--            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">-->
                                        <!--            <div class="apexcharts-yaxistooltip-text"></div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Chart widget 3-->
                            </div>
                            <!--end::Col-->
                        </div>


                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                          
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-12 mb-5 mb-xl-10">
                                <!--begin::Table Widget 4-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-gray-800">Product Records</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-6">Overview of product
                                                records.</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Actions-->
                                        <div class="card-toolbar">
                                            <!--begin::Filters-->
                                            <div class="d-flex flex-stack flex-wrap gap-4">
                                                <!--begin::Destination-->
                                                <div class="d-flex align-items-center fw-bolder">
                                                    <!--begin::Label-->
                                                    <div class="text-gray-400 fs-7 me-2">Category</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select
                                                        class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                                        data-control="select2" data-hide-search="true"
                                                        data-dropdown-css-class="w-150px"
                                                        data-placeholder="Select an option"
                                                        data-select2-id="select2-data-7-t9ym" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option></option>
                                                        <option value="Show All" selected="selected"
                                                            data-select2-id="select2-data-9-ifle">Show All</option>
                                                        <option value="a">Category A</option>
                                                        <option value="b">Category A</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-8-we2r"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bolder py-0 ps-3 w-auto"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-1x1o-container"
                                                                aria-controls="select2-1x1o-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-1x1o-container" role="textbox"
                                                                    aria-readonly="true" title="Show All">Show
                                                                    All</span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Destination-->
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center fw-bolder">
                                                    <!--begin::Label-->
                                                    <div class="text-gray-400 fs-7 me-2">Status</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select
                                                        class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                                        data-control="select2" data-hide-search="true"
                                                        data-dropdown-css-class="w-150px"
                                                        data-placeholder="Select an option"
                                                        data-kt-table-widget-4="filter_status"
                                                        data-select2-id="select2-data-10-zobq" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option></option>
                                                        <option value="Show All" selected="selected"
                                                            data-select2-id="select2-data-12-oe2o">Show All</option>
                                                        <option value="Shipped">Shipped</option>
                                                        <option value="Confirmed">Confirmed</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Pending">Pending</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-11-7cd0"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-ghcc-container"
                                                                aria-controls="select2-ghcc-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-ghcc-container" role="textbox"
                                                                    aria-readonly="true" title="Show All">Show
                                                                    All</span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Search-->
                                                <div class="position-relative my-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span
                                                        class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                                height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                                fill="currentColor"></rect>
                                                            <path
                                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" data-kt-table-widget-4="search"
                                                        class="form-control w-150px fs-7 ps-12" placeholder="Search">
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Filters-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-2">
                                        <!--begin::Table-->
                                        <div id="kt_table_widget_4_table_wrapper"
                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="table-responsive">
                                                <table
                                                    class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                                                    >
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <!--begin::Table row-->
                                                        <tr
                                                            class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                            <th class="min-w-100px sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 100px;">Product ID</th>
                                                            <th class="text-end min-w-100px sorting_disabled"
                                                                rowspan="1" colspan="1" style="width: 100px;">Name</th>
                                                            <th class="text-end min-w-125px sorting_disabled"
                                                                rowspan="1" colspan="1" style="width: 125px;">Count</th>
                                                            <th class="text-end min-w-100px sorting_disabled"
                                                                rowspan="1" colspan="1" style="width: 100px;">Unit Price
                                                            </th>
                                                            <th class="text-end min-w-100px sorting_disabled"
                                                                rowspan="1" colspan="1" style="width: 100px;">Sales</th>
                                                           
                                                        </tr>
                                                        <!--end::Table row-->
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody class="fw-bolder text-gray-600">





                                                        @foreach($foods as $key=> $food)

                                                        <tr>
                                                            <td>
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary">#CTT-{{ ++$key }}</a>
                                                            </td>
                                                            <td class="text-end">{{ $food[0]['name'] }}</td>
                                                            <td class="text-end">
                                                                {{ $food[1]}}
                                                            </td>
                                                            <td class="text-end">{{ number_format($food[0]['price'],2) }}</td>
                                                            
                                                            <td class="text-end">
                                                                <span
                                                                    class="badge py-3 px-4 fs-7 badge-light-danger">{{ number_format($food[0]['price'] * $food[1],2) }}</span>
                                                            </td>
                                                        
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                                </div>
                                                <div
                                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Table Widget 4-->
                            </div>

                            <!--<div class="col-xl-4 mb-xl-10">-->
                                <!--begin::Engage widget 1-->
                            <!--    <div class="card h-md-100">-->
                                    <!--begin::Body-->
                            <!--        <div class="card-body d-flex flex-column flex-center">-->
                                        <!--begin::Heading-->
                            <!--            <div class="mb-2">-->
                                            <!--begin::Title-->
                            <!--                <h1 class="fw-bold text-gray-800 text-center lh-lg">Have you tried the-->
                            <!--                    <br>-->
                            <!--                    <span class="fw-boldest">Premium Plan ?</span>-->
                            <!--                </h1>-->
                                            <!--end::Title-->
                                            <!--begin::Illustration-->
                            <!--                <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12"-->
                            <!--                    style="background-image:url('/metronic8/demo4/assets/media/svg/illustrations/easy/2.svg')">-->
                            <!--                </div>-->
                                            <!--end::Illustration-->
                            <!--            </div>-->
                                        <!--end::Heading-->
                                        <!--begin::Links-->
                            <!--            <div class="text-center mb-1">-->
                                            <!--begin::Link-->
                            <!--                <a class="btn btn-sm btn-primary me-2"-->
                            <!--                    href="#">Subscribe</a>-->
                                            <!--end::Link-->
                                            <!--begin::Link-->
                                           
                            <!--            </div>-->
                                        <!--end::Links-->
                            <!--        </div>-->
                                    <!--end::Body-->
                            <!--    </div>-->
                                <!--end::Engage widget 1-->
                            <!--</div>-->
                            <!--end::Col-->
                        </div>
                        <!--end::Products-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-gray-400 fw-bold me-1">Powered by</span>
                            <a href="https://thecaretech.org" target="_blank"
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
                                <a href="#" target="_blank" class="menu-link px-2">CTFarms</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>

        @endsection
        
@section('script')
@endsection
 