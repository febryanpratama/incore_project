@extends('layouts.back')

@section('content')
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle="">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-calendar text-primary"
                    >
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                </span>
                <input type="text" class="form-control bg-transparent border-primary flatpickr-input" placeholder="Select date" data-input="" readonly="readonly" />
            </div>
            <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-printer btn-icon-prepend"
                >
                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                    <rect x="6" y="14" width="12" height="8"></rect>
                </svg>
                Print
            </button>
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-download-cloud btn-icon-prepend"
                >
                    <polyline points="8 17 12 21 16 17"></polyline>
                    <line x1="12" y1="12" x2="12" y2="21"></line>
                    <path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
                </svg>
                Download Report
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">New Customers</h6>
                                <div class="dropdown mb-2">
                                    <button class="btn btn-link p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-horizontal icon-lg text-muted pb-3px"
                                        >
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-eye icon-sm me-2"
                                            >
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <span class="">View</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-edit-2 icon-sm me-2"
                                            >
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                            <span class="">Edit</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-trash icon-sm me-2"
                                            >
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            <span class="">Delete</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-printer icon-sm me-2"
                                            >
                                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                <rect x="6" y="14" width="12" height="8"></rect>
                                            </svg>
                                            <span class="">Print</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-download icon-sm me-2"
                                            >
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg>
                                            <span class="">Download</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">3,897</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-arrow-up icon-sm mb-1"
                                            >
                                                <line x1="12" y1="19" x2="12" y2="5"></line>
                                                <polyline points="5 12 12 5 19 12"></polyline>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-xl-7">
                                    <div id="customersChart" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                        <div id="apexchartsra2nddos" class="apexcharts-canvas apexchartsra2nddos apexcharts-theme-light" style="width: 265px; height: 60px;">
                                            <svg
                                                id="SvgjsSvg1538"
                                                width="265"
                                                height="60"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g id="SvgjsG1540" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1539">
                                                        <clipPath id="gridRectMaskra2nddos">
                                                            <rect id="SvgjsRect1557" width="271" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskra2nddos"></clipPath>
                                                        <clipPath id="nonForecastMaskra2nddos"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskra2nddos">
                                                            <rect id="SvgjsRect1558" width="269" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line
                                                        id="SvgjsLine1545"
                                                        x1="0"
                                                        y1="0"
                                                        x2="0"
                                                        y2="60"
                                                        stroke="#b6b6b6"
                                                        stroke-dasharray="3"
                                                        stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs"
                                                        x="0"
                                                        y="0"
                                                        width="1"
                                                        height="60"
                                                        fill="#b1b9c4"
                                                        filter="none"
                                                        fill-opacity="0.9"
                                                        stroke-width="1"
                                                    ></line>
                                                    <g id="SvgjsG1577" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1578" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g>
                                                    <g id="SvgjsG1564" class="apexcharts-grid">
                                                        <g id="SvgjsG1565" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                            <line id="SvgjsLine1569" x1="0" y1="10" x2="265" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1570" x1="0" y1="20" x2="265" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1571" x1="0" y1="30" x2="265" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1572" x1="0" y1="40" x2="265" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1573" x1="0" y1="50" x2="265" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1566" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                        <line id="SvgjsLine1576" x1="0" y1="60" x2="265" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1575" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1559" class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1560" class="apexcharts-series" seriesName="" data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path
                                                                id="SvgjsPath1563"
                                                                d="M 0 26C 9.274999999999999 26 17.224999999999998 15 26.499999999999996 15C 35.77499999999999 15 43.724999999999994 29 52.99999999999999 29C 62.27499999999999 29 70.225 3 79.5 3C 88.77499999999999 3 96.725 48 105.99999999999999 48C 115.27499999999999 48 123.225 27 132.5 27C 141.775 27 149.725 49 159 49C 168.275 49 176.225 29 185.5 29C 194.77499999999998 29 202.725 14 211.99999999999997 14C 221.27499999999998 14 229.22499999999997 43 238.49999999999997 43C 247.77499999999998 43 255.725 27 265 27"
                                                                fill="none"
                                                                fill-opacity="1"
                                                                stroke="rgba(101,113,255,0.85)"
                                                                stroke-opacity="1"
                                                                stroke-linecap="butt"
                                                                stroke-width="2"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-line"
                                                                index="0"
                                                                clip-path="url(#gridRectMaskra2nddos)"
                                                                pathTo="M 0 26C 9.274999999999999 26 17.224999999999998 15 26.499999999999996 15C 35.77499999999999 15 43.724999999999994 29 52.99999999999999 29C 62.27499999999999 29 70.225 3 79.5 3C 88.77499999999999 3 96.725 48 105.99999999999999 48C 115.27499999999999 48 123.225 27 132.5 27C 141.775 27 149.725 49 159 49C 168.275 49 176.225 29 185.5 29C 194.77499999999998 29 202.725 14 211.99999999999997 14C 221.27499999999998 14 229.22499999999997 43 238.49999999999997 43C 247.77499999999998 43 255.725 27 265 27"
                                                                pathFrom="M -1 3870 L -1 3870 L 26.499999999999996 3870 L 52.99999999999999 3870 L 79.5 3870 L 105.99999999999999 3870 L 132.5 3870 L 159 3870 L 185.5 3870 L 211.99999999999997 3870 L 238.49999999999997 3870 L 265 3870"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                            <g id="SvgjsG1561" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle
                                                                        id="SvgjsCircle1591"
                                                                        r="0"
                                                                        cx="0"
                                                                        cy="0"
                                                                        class="apexcharts-marker wfbg9lz5o no-pointer-events"
                                                                        stroke="#ffffff"
                                                                        fill="#6571ff"
                                                                        fill-opacity="1"
                                                                        stroke-width="2"
                                                                        stroke-opacity="0.9"
                                                                        default-marker-size="0"
                                                                    ></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1562" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                    </g>
                                                    <g id="SvgjsG1567" class="apexcharts-grid-borders" style="display: none;">
                                                        <line id="SvgjsLine1568" x1="0" y1="0" x2="265" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1574" x1="0" y1="60" x2="265" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <line id="SvgjsLine1586" x1="0" y1="0" x2="265" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1587" x1="0" y1="0" x2="265" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1588" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1589" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1590" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1544" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1585" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1541" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(101, 113, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">New Orders</h6>
                                <div class="dropdown mb-2">
                                    <button class="btn btn-link p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-horizontal icon-lg text-muted pb-3px"
                                        >
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-eye icon-sm me-2"
                                            >
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <span class="">View</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-edit-2 icon-sm me-2"
                                            >
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                            <span class="">Edit</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-trash icon-sm me-2"
                                            >
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            <span class="">Delete</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-printer icon-sm me-2"
                                            >
                                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                <rect x="6" y="14" width="12" height="8"></rect>
                                            </svg>
                                            <span class="">Print</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-download icon-sm me-2"
                                            >
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg>
                                            <span class="">Download</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">35,084</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-danger">
                                            <span>-2.8%</span>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-arrow-down icon-sm mb-1"
                                            >
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <polyline points="19 12 12 19 5 12"></polyline>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-xl-7">
                                    <div id="ordersChart" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                        <div id="apexchartsnvuyp9og" class="apexcharts-canvas apexchartsnvuyp9og apexcharts-theme-light" style="width: 265px; height: 60px;">
                                            <svg
                                                id="SvgjsSvg1592"
                                                width="265"
                                                height="60"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g id="SvgjsG1594" class="apexcharts-inner apexcharts-graphical" transform="translate(19.6, 0)">
                                                    <defs id="SvgjsDefs1593">
                                                        <linearGradient id="SvgjsLinearGradient1598" x1="0" y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1599" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1600" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop id="SvgjsStop1601" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMasknvuyp9og">
                                                            <rect id="SvgjsRect1614" width="269" height="60" x="-17.6" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMasknvuyp9og"></clipPath>
                                                        <clipPath id="nonForecastMasknvuyp9og"></clipPath>
                                                        <clipPath id="gridRectMarkerMasknvuyp9og">
                                                            <rect id="SvgjsRect1615" width="237.8" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect
                                                        id="SvgjsRect1602"
                                                        width="14.028000000000002"
                                                        height="60"
                                                        x="0"
                                                        y="0"
                                                        rx="0"
                                                        ry="0"
                                                        opacity="1"
                                                        stroke-width="0"
                                                        stroke-dasharray="3"
                                                        fill="url(#SvgjsLinearGradient1598)"
                                                        class="apexcharts-xcrosshairs"
                                                        y2="60"
                                                        filter="none"
                                                        fill-opacity="0.9"
                                                    ></rect>
                                                    <g id="SvgjsG1654" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1655" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g>
                                                    <g id="SvgjsG1642" class="apexcharts-grid">
                                                        <g id="SvgjsG1643" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                            <line id="SvgjsLine1647" x1="-15.6" y1="12" x2="249.4" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1648" x1="-15.6" y1="24" x2="249.4" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1649" x1="-15.6" y1="36" x2="249.4" y2="36" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1650" x1="-15.6" y1="48" x2="249.4" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1644" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                        <line id="SvgjsLine1653" x1="0" y1="60" x2="233.8" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1652" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1616" class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1617" class="apexcharts-series" rel="1" seriesName="" data:realIndex="0">
                                                            <path
                                                                id="SvgjsPath1621"
                                                                d="M -7.014000000000001 58.001 L -7.014000000000001 40.401 C -7.014000000000001 39.401 -6.014000000000001 38.401 -5.014000000000001 38.401 L 5.014000000000001 38.401 C 6.014000000000001 38.401 7.014000000000001 39.401 7.014000000000001 40.401 L 7.014000000000001 58.001 C 7.014000000000001 59.001 6.014000000000001 60.001 5.014000000000001 60.001 L -5.014000000000001 60.001 C -6.014000000000001 60.001 -7.014000000000001 59.001 -7.014000000000001 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M -7.014000000000001 58.001 L -7.014000000000001 40.401 C -7.014000000000001 39.401 -6.014000000000001 38.401 -5.014000000000001 38.401 L 5.014000000000001 38.401 C 6.014000000000001 38.401 7.014000000000001 39.401 7.014000000000001 40.401 L 7.014000000000001 58.001 C 7.014000000000001 59.001 6.014000000000001 60.001 5.014000000000001 60.001 L -5.014000000000001 60.001 C -6.014000000000001 60.001 -7.014000000000001 59.001 -7.014000000000001 58.001 Z "
                                                                pathFrom="M -7.014000000000001 60.001 L -7.014000000000001 60.001 L 7.014000000000001 60.001 L 7.014000000000001 60.001 L 7.014000000000001 60.001 L 7.014000000000001 60.001 L 7.014000000000001 60.001 L -7.014000000000001 60.001 Z"
                                                                cy="38.400000000000006"
                                                                cx="7.014000000000001"
                                                                j="0"
                                                                val="36"
                                                                barHeight="21.599999999999998"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1623"
                                                                d="M 16.366 58.001 L 16.366 15.801000000000004 C 16.366 14.801000000000004 17.366 13.801000000000004 18.366 13.801000000000004 L 28.394000000000002 13.801000000000004 C 29.394000000000002 13.801000000000004 30.394000000000002 14.801000000000004 30.394000000000002 15.801000000000004 L 30.394000000000002 58.001 C 30.394000000000002 59.001 29.394000000000002 60.001 28.394000000000002 60.001 L 18.366 60.001 C 17.366 60.001 16.366 59.001 16.366 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 16.366 58.001 L 16.366 15.801000000000004 C 16.366 14.801000000000004 17.366 13.801000000000004 18.366 13.801000000000004 L 28.394000000000002 13.801000000000004 C 29.394000000000002 13.801000000000004 30.394000000000002 14.801000000000004 30.394000000000002 15.801000000000004 L 30.394000000000002 58.001 C 30.394000000000002 59.001 29.394000000000002 60.001 28.394000000000002 60.001 L 18.366 60.001 C 17.366 60.001 16.366 59.001 16.366 58.001 Z "
                                                                pathFrom="M 16.366 60.001 L 16.366 60.001 L 30.394000000000002 60.001 L 30.394000000000002 60.001 L 30.394000000000002 60.001 L 30.394000000000002 60.001 L 30.394000000000002 60.001 L 16.366 60.001 Z"
                                                                cy="13.800000000000004"
                                                                cx="30.394000000000002"
                                                                j="1"
                                                                val="77"
                                                                barHeight="46.199999999999996"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1625"
                                                                d="M 39.746 58.001 L 39.746 30.801000000000002 C 39.746 29.801000000000002 40.746 28.801000000000002 41.746 28.801000000000002 L 51.774 28.801000000000002 C 52.774 28.801000000000002 53.774 29.801000000000002 53.774 30.801000000000002 L 53.774 58.001 C 53.774 59.001 52.774 60.001 51.774 60.001 L 41.746 60.001 C 40.746 60.001 39.746 59.001 39.746 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 39.746 58.001 L 39.746 30.801000000000002 C 39.746 29.801000000000002 40.746 28.801000000000002 41.746 28.801000000000002 L 51.774 28.801000000000002 C 52.774 28.801000000000002 53.774 29.801000000000002 53.774 30.801000000000002 L 53.774 58.001 C 53.774 59.001 52.774 60.001 51.774 60.001 L 41.746 60.001 C 40.746 60.001 39.746 59.001 39.746 58.001 Z "
                                                                pathFrom="M 39.746 60.001 L 39.746 60.001 L 53.774 60.001 L 53.774 60.001 L 53.774 60.001 L 53.774 60.001 L 53.774 60.001 L 39.746 60.001 Z"
                                                                cy="28.8"
                                                                cx="53.774"
                                                                j="2"
                                                                val="52"
                                                                barHeight="31.2"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1627"
                                                                d="M 63.126 58.001 L 63.126 8.001000000000001 C 63.126 7.001000000000001 64.12599999999999 6.001 65.12599999999999 6.001 L 75.154 6.001 C 76.154 6.001 77.154 7.001000000000001 77.154 8.001000000000001 L 77.154 58.001 C 77.154 59.001 76.154 60.001 75.154 60.001 L 65.126 60.001 C 64.126 60.001 63.126 59.001 63.126 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 63.126 58.001 L 63.126 8.001000000000001 C 63.126 7.001000000000001 64.12599999999999 6.001 65.12599999999999 6.001 L 75.154 6.001 C 76.154 6.001 77.154 7.001000000000001 77.154 8.001000000000001 L 77.154 58.001 C 77.154 59.001 76.154 60.001 75.154 60.001 L 65.126 60.001 C 64.126 60.001 63.126 59.001 63.126 58.001 Z "
                                                                pathFrom="M 63.126 60.001 L 63.126 60.001 L 77.154 60.001 L 77.154 60.001 L 77.154 60.001 L 77.154 60.001 L 77.154 60.001 L 63.126 60.001 Z"
                                                                cy="6"
                                                                cx="77.154"
                                                                j="3"
                                                                val="90"
                                                                barHeight="54"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1629"
                                                                d="M 86.50600000000001 58.001 L 86.50600000000001 17.601 C 86.50600000000001 16.601 87.50600000000001 15.601 88.50600000000001 15.601 L 98.53400000000002 15.601 C 99.53400000000002 15.601 100.53400000000002 16.601 100.53400000000002 17.601 L 100.53400000000002 58.001 C 100.53400000000002 59.001 99.53400000000002 60.001 98.53400000000002 60.001 L 88.50600000000001 60.001 C 87.50600000000001 60.001 86.50600000000001 59.001 86.50600000000001 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 86.50600000000001 58.001 L 86.50600000000001 17.601 C 86.50600000000001 16.601 87.50600000000001 15.601 88.50600000000001 15.601 L 98.53400000000002 15.601 C 99.53400000000002 15.601 100.53400000000002 16.601 100.53400000000002 17.601 L 100.53400000000002 58.001 C 100.53400000000002 59.001 99.53400000000002 60.001 98.53400000000002 60.001 L 88.50600000000001 60.001 C 87.50600000000001 60.001 86.50600000000001 59.001 86.50600000000001 58.001 Z "
                                                                pathFrom="M 86.50600000000001 60.001 L 86.50600000000001 60.001 L 100.53400000000002 60.001 L 100.53400000000002 60.001 L 100.53400000000002 60.001 L 100.53400000000002 60.001 L 100.53400000000002 60.001 L 86.50600000000001 60.001 Z"
                                                                cy="15.600000000000001"
                                                                cx="100.53400000000002"
                                                                j="4"
                                                                val="74"
                                                                barHeight="44.4"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1631"
                                                                d="M 109.88600000000001 58.001 L 109.88600000000001 41.001 C 109.88600000000001 40.001 110.88600000000001 39.001 111.88600000000001 39.001 L 121.91400000000002 39.001 C 122.91400000000002 39.001 123.91400000000002 40.001 123.91400000000002 41.001 L 123.91400000000002 58.001 C 123.91400000000002 59.001 122.91400000000002 60.001 121.91400000000002 60.001 L 111.88600000000001 60.001 C 110.88600000000001 60.001 109.88600000000001 59.001 109.88600000000001 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 109.88600000000001 58.001 L 109.88600000000001 41.001 C 109.88600000000001 40.001 110.88600000000001 39.001 111.88600000000001 39.001 L 121.91400000000002 39.001 C 122.91400000000002 39.001 123.91400000000002 40.001 123.91400000000002 41.001 L 123.91400000000002 58.001 C 123.91400000000002 59.001 122.91400000000002 60.001 121.91400000000002 60.001 L 111.88600000000001 60.001 C 110.88600000000001 60.001 109.88600000000001 59.001 109.88600000000001 58.001 Z "
                                                                pathFrom="M 109.88600000000001 60.001 L 109.88600000000001 60.001 L 123.91400000000002 60.001 L 123.91400000000002 60.001 L 123.91400000000002 60.001 L 123.91400000000002 60.001 L 123.91400000000002 60.001 L 109.88600000000001 60.001 Z"
                                                                cy="39"
                                                                cx="123.91400000000002"
                                                                j="5"
                                                                val="35"
                                                                barHeight="21"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1633"
                                                                d="M 133.266 58.001 L 133.266 29.001 C 133.266 28.001 134.266 27.001 135.266 27.001 L 145.29399999999998 27.001 C 146.29399999999998 27.001 147.29399999999998 28.001 147.29399999999998 29.001 L 147.29399999999998 58.001 C 147.29399999999998 59.001 146.29399999999998 60.001 145.29399999999998 60.001 L 135.266 60.001 C 134.266 60.001 133.266 59.001 133.266 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 133.266 58.001 L 133.266 29.001 C 133.266 28.001 134.266 27.001 135.266 27.001 L 145.29399999999998 27.001 C 146.29399999999998 27.001 147.29399999999998 28.001 147.29399999999998 29.001 L 147.29399999999998 58.001 C 147.29399999999998 59.001 146.29399999999998 60.001 145.29399999999998 60.001 L 135.266 60.001 C 134.266 60.001 133.266 59.001 133.266 58.001 Z "
                                                                pathFrom="M 133.266 60.001 L 133.266 60.001 L 147.29399999999998 60.001 L 147.29399999999998 60.001 L 147.29399999999998 60.001 L 147.29399999999998 60.001 L 147.29399999999998 60.001 L 133.266 60.001 Z"
                                                                cy="27"
                                                                cx="147.29399999999998"
                                                                j="6"
                                                                val="55"
                                                                barHeight="33"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1635"
                                                                d="M 156.646 58.001 L 156.646 48.201 C 156.646 47.201 157.646 46.201 158.646 46.201 L 168.67399999999998 46.201 C 169.67399999999998 46.201 170.67399999999998 47.201 170.67399999999998 48.201 L 170.67399999999998 58.001 C 170.67399999999998 59.001 169.67399999999998 60.001 168.67399999999998 60.001 L 158.646 60.001 C 157.646 60.001 156.646 59.001 156.646 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 156.646 58.001 L 156.646 48.201 C 156.646 47.201 157.646 46.201 158.646 46.201 L 168.67399999999998 46.201 C 169.67399999999998 46.201 170.67399999999998 47.201 170.67399999999998 48.201 L 170.67399999999998 58.001 C 170.67399999999998 59.001 169.67399999999998 60.001 168.67399999999998 60.001 L 158.646 60.001 C 157.646 60.001 156.646 59.001 156.646 58.001 Z "
                                                                pathFrom="M 156.646 60.001 L 156.646 60.001 L 170.67399999999998 60.001 L 170.67399999999998 60.001 L 170.67399999999998 60.001 L 170.67399999999998 60.001 L 170.67399999999998 60.001 L 156.646 60.001 Z"
                                                                cy="46.2"
                                                                cx="170.67399999999998"
                                                                j="7"
                                                                val="23"
                                                                barHeight="13.799999999999999"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1637"
                                                                d="M 180.026 58.001 L 180.026 33.801 C 180.026 32.801 181.026 31.801000000000002 182.026 31.801000000000002 L 192.054 31.801000000000002 C 193.054 31.801000000000002 194.054 32.801 194.054 33.801 L 194.054 58.001 C 194.054 59.001 193.054 60.001 192.054 60.001 L 182.026 60.001 C 181.026 60.001 180.026 59.001 180.026 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 180.026 58.001 L 180.026 33.801 C 180.026 32.801 181.026 31.801000000000002 182.026 31.801000000000002 L 192.054 31.801000000000002 C 193.054 31.801000000000002 194.054 32.801 194.054 33.801 L 194.054 58.001 C 194.054 59.001 193.054 60.001 192.054 60.001 L 182.026 60.001 C 181.026 60.001 180.026 59.001 180.026 58.001 Z "
                                                                pathFrom="M 180.026 60.001 L 180.026 60.001 L 194.054 60.001 L 194.054 60.001 L 194.054 60.001 L 194.054 60.001 L 194.054 60.001 L 180.026 60.001 Z"
                                                                cy="31.8"
                                                                cx="194.054"
                                                                j="8"
                                                                val="47"
                                                                barHeight="28.2"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1639"
                                                                d="M 203.406 58.001 L 203.406 56.001 C 203.406 55.001 204.406 54.001 205.406 54.001 L 215.434 54.001 C 216.434 54.001 217.434 55.001 217.434 56.001 L 217.434 58.001 C 217.434 59.001 216.434 60.001 215.434 60.001 L 205.406 60.001 C 204.406 60.001 203.406 59.001 203.406 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 203.406 58.001 L 203.406 56.001 C 203.406 55.001 204.406 54.001 205.406 54.001 L 215.434 54.001 C 216.434 54.001 217.434 55.001 217.434 56.001 L 217.434 58.001 C 217.434 59.001 216.434 60.001 215.434 60.001 L 205.406 60.001 C 204.406 60.001 203.406 59.001 203.406 58.001 Z "
                                                                pathFrom="M 203.406 60.001 L 203.406 60.001 L 217.434 60.001 L 217.434 60.001 L 217.434 60.001 L 217.434 60.001 L 217.434 60.001 L 203.406 60.001 Z"
                                                                cy="54"
                                                                cx="217.434"
                                                                j="9"
                                                                val="10"
                                                                barHeight="6"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <path
                                                                id="SvgjsPath1641"
                                                                d="M 226.786 58.001 L 226.786 24.201000000000004 C 226.786 23.201000000000004 227.786 22.201000000000004 228.786 22.201000000000004 L 238.814 22.201000000000004 C 239.814 22.201000000000004 240.814 23.201000000000004 240.814 24.201000000000004 L 240.814 58.001 C 240.814 59.001 239.814 60.001 238.814 60.001 L 228.786 60.001 C 227.786 60.001 226.786 59.001 226.786 58.001 Z "
                                                                fill="rgba(101,113,255,0.85)"
                                                                fill-opacity="1"
                                                                stroke-opacity="1"
                                                                stroke-linecap="round"
                                                                stroke-width="0"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMasknvuyp9og)"
                                                                pathTo="M 226.786 58.001 L 226.786 24.201000000000004 C 226.786 23.201000000000004 227.786 22.201000000000004 228.786 22.201000000000004 L 238.814 22.201000000000004 C 239.814 22.201000000000004 240.814 23.201000000000004 240.814 24.201000000000004 L 240.814 58.001 C 240.814 59.001 239.814 60.001 238.814 60.001 L 228.786 60.001 C 227.786 60.001 226.786 59.001 226.786 58.001 Z "
                                                                pathFrom="M 226.786 60.001 L 226.786 60.001 L 240.814 60.001 L 240.814 60.001 L 240.814 60.001 L 240.814 60.001 L 240.814 60.001 L 226.786 60.001 Z"
                                                                cy="22.200000000000003"
                                                                cx="240.814"
                                                                j="10"
                                                                val="63"
                                                                barHeight="37.8"
                                                                barWidth="14.028000000000002"
                                                            ></path>
                                                            <g id="SvgjsG1619" class="apexcharts-bar-goals-markers" style="pointer-events: none;">
                                                                <g id="SvgjsG1620" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1622" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1624" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1626" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1628" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1630" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1632" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1634" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1636" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1638" className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1640" className="apexcharts-bar-goals-groups"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1618" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                    </g>
                                                    <g id="SvgjsG1645" class="apexcharts-grid-borders" style="display: none;">
                                                        <line id="SvgjsLine1646" x1="-15.6" y1="0" x2="249.4" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1651" x1="-15.6" y1="60" x2="249.4" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <line id="SvgjsLine1663" x1="-15.6" y1="0" x2="249.4" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1664" x1="-15.6" y1="0" x2="249.4" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1665" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1666" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1667" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG1662" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1595" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(101, 113, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Growth</h6>
                                <div class="dropdown mb-2">
                                    <button class="btn btn-link p-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-more-horizontal icon-lg text-muted pb-3px"
                                        >
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-eye icon-sm me-2"
                                            >
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <span class="">View</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-edit-2 icon-sm me-2"
                                            >
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>
                                            <span class="">Edit</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-trash icon-sm me-2"
                                            >
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                            <span class="">Delete</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-printer icon-sm me-2"
                                            >
                                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                <rect x="6" y="14" width="12" height="8"></rect>
                                            </svg>
                                            <span class="">Print</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-download icon-sm me-2"
                                            >
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg>
                                            <span class="">Download</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">89.87%</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+2.8%</span>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-arrow-up icon-sm mb-1"
                                            >
                                                <line x1="12" y1="19" x2="12" y2="5"></line>
                                                <polyline points="5 12 12 5 19 12"></polyline>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-xl-7">
                                    <div id="growthChart" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                        <div id="apexchartse0aoz6qg" class="apexcharts-canvas apexchartse0aoz6qg apexcharts-theme-light" style="width: 265px; height: 60px;">
                                            <svg
                                                id="SvgjsSvg1669"
                                                width="265"
                                                height="60"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g id="SvgjsG1671" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1670">
                                                        <clipPath id="gridRectMaske0aoz6qg">
                                                            <rect id="SvgjsRect1688" width="271" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaske0aoz6qg"></clipPath>
                                                        <clipPath id="nonForecastMaske0aoz6qg"></clipPath>
                                                        <clipPath id="gridRectMarkerMaske0aoz6qg">
                                                            <rect id="SvgjsRect1689" width="269" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line
                                                        id="SvgjsLine1676"
                                                        x1="0"
                                                        y1="0"
                                                        x2="0"
                                                        y2="60"
                                                        stroke="#b6b6b6"
                                                        stroke-dasharray="3"
                                                        stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs"
                                                        x="0"
                                                        y="0"
                                                        width="1"
                                                        height="60"
                                                        fill="#b1b9c4"
                                                        filter="none"
                                                        fill-opacity="0.9"
                                                        stroke-width="1"
                                                    ></line>
                                                    <g id="SvgjsG1709" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1710" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g>
                                                    <g id="SvgjsG1695" class="apexcharts-grid">
                                                        <g id="SvgjsG1696" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                            <line
                                                                id="SvgjsLine1700"
                                                                x1="0"
                                                                y1="8.571428571428571"
                                                                x2="265"
                                                                y2="8.571428571428571"
                                                                stroke="#e0e0e0"
                                                                stroke-dasharray="0"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-gridline"
                                                            ></line>
                                                            <line
                                                                id="SvgjsLine1701"
                                                                x1="0"
                                                                y1="17.142857142857142"
                                                                x2="265"
                                                                y2="17.142857142857142"
                                                                stroke="#e0e0e0"
                                                                stroke-dasharray="0"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-gridline"
                                                            ></line>
                                                            <line
                                                                id="SvgjsLine1702"
                                                                x1="0"
                                                                y1="25.714285714285715"
                                                                x2="265"
                                                                y2="25.714285714285715"
                                                                stroke="#e0e0e0"
                                                                stroke-dasharray="0"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-gridline"
                                                            ></line>
                                                            <line
                                                                id="SvgjsLine1703"
                                                                x1="0"
                                                                y1="34.285714285714285"
                                                                x2="265"
                                                                y2="34.285714285714285"
                                                                stroke="#e0e0e0"
                                                                stroke-dasharray="0"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-gridline"
                                                            ></line>
                                                            <line
                                                                id="SvgjsLine1704"
                                                                x1="0"
                                                                y1="42.857142857142854"
                                                                x2="265"
                                                                y2="42.857142857142854"
                                                                stroke="#e0e0e0"
                                                                stroke-dasharray="0"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-gridline"
                                                            ></line>
                                                            <line
                                                                id="SvgjsLine1705"
                                                                x1="0"
                                                                y1="51.42857142857142"
                                                                x2="265"
                                                                y2="51.42857142857142"
                                                                stroke="#e0e0e0"
                                                                stroke-dasharray="0"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-gridline"
                                                            ></line>
                                                            <line
                                                                id="SvgjsLine1706"
                                                                x1="0"
                                                                y1="59.99999999999999"
                                                                x2="265"
                                                                y2="59.99999999999999"
                                                                stroke="#e0e0e0"
                                                                stroke-dasharray="0"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-gridline"
                                                            ></line>
                                                        </g>
                                                        <g id="SvgjsG1697" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                        <line id="SvgjsLine1708" x1="0" y1="60" x2="265" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1707" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1690" class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1691" class="apexcharts-series" seriesName="" data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path
                                                                id="SvgjsPath1694"
                                                                d="M 0 50.57142857142857C 9.274999999999999 50.57142857142857 17.224999999999998 47.14285714285714 26.499999999999996 47.14285714285714C 35.77499999999999 47.14285714285714 43.724999999999994 47.99999999999999 52.99999999999999 47.99999999999999C 62.27499999999999 47.99999999999999 70.225 46.285714285714285 79.5 46.285714285714285C 88.77499999999999 46.285714285714285 96.725 41.14285714285714 105.99999999999999 41.14285714285714C 115.27499999999999 41.14285714285714 123.225 39.42857142857142 132.5 39.42857142857142C 141.775 39.42857142857142 149.725 48.857142857142854 159 48.857142857142854C 168.275 48.857142857142854 176.225 22.285714285714285 185.5 22.285714285714285C 194.77499999999998 22.285714285714285 202.725 15.42857142857143 211.99999999999997 15.42857142857143C 221.27499999999998 15.42857142857143 229.22499999999997 15.42857142857143 238.49999999999997 15.42857142857143C 247.77499999999998 15.42857142857143 255.725 9.42857142857143 265 9.42857142857143"
                                                                fill="none"
                                                                fill-opacity="1"
                                                                stroke="rgba(101,113,255,0.85)"
                                                                stroke-opacity="1"
                                                                stroke-linecap="butt"
                                                                stroke-width="2"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-line"
                                                                index="0"
                                                                clip-path="url(#gridRectMaske0aoz6qg)"
                                                                pathTo="M 0 50.57142857142857C 9.274999999999999 50.57142857142857 17.224999999999998 47.14285714285714 26.499999999999996 47.14285714285714C 35.77499999999999 47.14285714285714 43.724999999999994 47.99999999999999 52.99999999999999 47.99999999999999C 62.27499999999999 47.99999999999999 70.225 46.285714285714285 79.5 46.285714285714285C 88.77499999999999 46.285714285714285 96.725 41.14285714285714 105.99999999999999 41.14285714285714C 115.27499999999999 41.14285714285714 123.225 39.42857142857142 132.5 39.42857142857142C 141.775 39.42857142857142 149.725 48.857142857142854 159 48.857142857142854C 168.275 48.857142857142854 176.225 22.285714285714285 185.5 22.285714285714285C 194.77499999999998 22.285714285714285 202.725 15.42857142857143 211.99999999999997 15.42857142857143C 221.27499999999998 15.42857142857143 229.22499999999997 15.42857142857143 238.49999999999997 15.42857142857143C 247.77499999999998 15.42857142857143 255.725 9.42857142857143 265 9.42857142857143"
                                                                pathFrom="M -1 85.71428571428571 L -1 85.71428571428571 L 26.499999999999996 85.71428571428571 L 52.99999999999999 85.71428571428571 L 79.5 85.71428571428571 L 105.99999999999999 85.71428571428571 L 132.5 85.71428571428571 L 159 85.71428571428571 L 185.5 85.71428571428571 L 211.99999999999997 85.71428571428571 L 238.49999999999997 85.71428571428571 L 265 85.71428571428571"
                                                                fill-rule="evenodd"
                                                            ></path>
                                                            <g id="SvgjsG1692" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle
                                                                        id="SvgjsCircle1723"
                                                                        r="0"
                                                                        cx="0"
                                                                        cy="0"
                                                                        class="apexcharts-marker wufw3593d no-pointer-events"
                                                                        stroke="#ffffff"
                                                                        fill="#6571ff"
                                                                        fill-opacity="1"
                                                                        stroke-width="2"
                                                                        stroke-opacity="0.9"
                                                                        default-marker-size="0"
                                                                    ></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1693" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                    </g>
                                                    <g id="SvgjsG1698" class="apexcharts-grid-borders" style="display: none;">
                                                        <line id="SvgjsLine1699" x1="0" y1="0" x2="265" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <line id="SvgjsLine1718" x1="0" y1="0" x2="265" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1719" x1="0" y1="0" x2="265" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1720" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1721" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1722" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1675" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1717" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1672" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(101, 113, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                        <h6 class="card-title mb-0">Revenue</h6>
                        <div class="dropdown">
                            <button class="btn btn-link p-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px"
                                >
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-eye icon-sm me-2"
                                    >
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span class="">View</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-edit-2 icon-sm me-2"
                                    >
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg>
                                    <span class="">Edit</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-trash icon-sm me-2"
                                    >
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    <span class="">Delete</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-printer icon-sm me-2"
                                    >
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                    <span class="">Print</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-download icon-sm me-2"
                                    >
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                    <span class="">Download</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start mb-2">
                        <div class="col-md-7">
                            <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has from its normal business activities, usually from the sale of goods and services to customers.</p>
                        </div>
                        <div class="col-md-5 d-flex justify-content-md-end">
                            <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-outline-primary">Today</button>
                                <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>
                                <button type="button" class="btn btn-primary">Month</button>
                                <button type="button" class="btn btn-outline-primary">Year</button>
                            </div>
                        </div>
                    </div>
                    <div id="revenueChart" style="min-height: 400px;">
                        <div id="apexchartssic7oqpkf" class="apexcharts-canvas apexchartssic7oqpkf apexcharts-theme-light" style="width: 1563px; height: 400px;">
                            <svg
                                id="SvgjsSvg1725"
                                width="1563"
                                height="400"
                                xmlns="http://www.w3.org/2000/svg"
                                version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable"
                                xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)"
                                style="background: rgb(255, 255, 255);"
                            >
                                <g id="SvgjsG1727" class="apexcharts-inner apexcharts-graphical" transform="translate(61.53125, 30)">
                                    <defs id="SvgjsDefs1726">
                                        <clipPath id="gridRectMasksic7oqpkf">
                                            <rect id="SvgjsRect1747" width="1497.46875" height="344.2" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMasksic7oqpkf"></clipPath>
                                        <clipPath id="nonForecastMasksic7oqpkf"></clipPath>
                                        <clipPath id="gridRectMarkerMasksic7oqpkf">
                                            <rect id="SvgjsRect1748" width="1495.46875" height="346.2" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <line
                                        id="SvgjsLine1734"
                                        x1="0"
                                        y1="0"
                                        x2="0"
                                        y2="342.2"
                                        stroke="#7987a1"
                                        stroke-dasharray="3"
                                        stroke-linecap="butt"
                                        class="apexcharts-xcrosshairs"
                                        x="0"
                                        y="0"
                                        width="1"
                                        height="342.2"
                                        fill="#b1b9c4"
                                        filter="none"
                                        fill-opacity="0.9"
                                        stroke-width="1"
                                    ></line>
                                    <line
                                        id="SvgjsLine1759"
                                        x1="2.919541736577181"
                                        y1="343.2"
                                        x2="2.919541736577181"
                                        y2="349.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1761"
                                        x1="143.05754509228188"
                                        y1="343.2"
                                        x2="143.05754509228188"
                                        y2="349.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1763"
                                        x1="313.22512059563746"
                                        y1="343.2"
                                        x2="313.22512059563746"
                                        y2="349.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1765"
                                        x1="453.3631239513418"
                                        y1="343.2"
                                        x2="453.3631239513418"
                                        y2="349.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1767"
                                        x1="593.5011273070461"
                                        y1="343.2"
                                        x2="593.5011273070461"
                                        y2="349.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1769"
                                        x1="733.6391306627504"
                                        y1="343.2"
                                        x2="733.6391306627504"
                                        y2="349.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1771"
                                        x1="903.8067061661056"
                                        y1="343.2"
                                        x2="903.8067061661056"
                                        y2="349.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line id="SvgjsLine1773" x1="1043.94470952181" y1="343.2" x2="1043.94470952181" y2="349.2" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line
                                        id="SvgjsLine1775"
                                        x1="1204.1024276426149"
                                        y1="343.2"
                                        x2="1204.1024276426149"
                                        y2="349.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1777"
                                        x1="1344.2404309983192"
                                        y1="343.2"
                                        x2="1344.2404309983192"
                                        y2="349.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <g id="SvgjsG1785" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1786" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                            <text
                                                id="SvgjsText1788"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="2.919541736577181"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="600"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1789">Jan '23</tspan>
                                                <title>Jan '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText1791"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="143.05754509228188"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1792">15 Jan</tspan>
                                                <title>15 Jan</title>
                                            </text>
                                            <text
                                                id="SvgjsText1794"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="313.22512059563746"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="600"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1795">Feb '23</tspan>
                                                <title>Feb '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText1797"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="453.3631239513418"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1798">15 Feb</tspan>
                                                <title>15 Feb</title>
                                            </text>
                                            <text
                                                id="SvgjsText1800"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="593.5011273070461"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="600"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1801">Mar '23</tspan>
                                                <title>Mar '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText1803"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="733.6391306627504"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1804">15 Mar</tspan>
                                                <title>15 Mar</title>
                                            </text>
                                            <text
                                                id="SvgjsText1806"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="903.8067061661056"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="600"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1807">Apr '23</tspan>
                                                <title>Apr '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText1809"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="1043.94470952181"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1810">15 Apr</tspan>
                                                <title>15 Apr</title>
                                            </text>
                                            <text
                                                id="SvgjsText1812"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="1204.1024276426149"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="600"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1813">May '23</tspan>
                                                <title>May '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText1815"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="1344.2404309983192"
                                                y="371.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1816">15 May</tspan>
                                                <title>15 May</title>
                                            </text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1754" class="apexcharts-grid">
                                        <g id="SvgjsG1755" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1779" x1="0" y1="85.55" x2="1491.46875" y2="85.55" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1780" x1="0" y1="171.1" x2="1491.46875" y2="171.1" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1781" x1="0" y1="256.65" x2="1491.46875" y2="256.65" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1756" class="apexcharts-gridlines-vertical">
                                            <line
                                                id="SvgjsLine1758"
                                                x1="2.919541736577181"
                                                y1="0"
                                                x2="2.919541736577181"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1760"
                                                x1="143.05754509228188"
                                                y1="0"
                                                x2="143.05754509228188"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1762"
                                                x1="313.22512059563746"
                                                y1="0"
                                                x2="313.22512059563746"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1764"
                                                x1="453.3631239513418"
                                                y1="0"
                                                x2="453.3631239513418"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1766"
                                                x1="593.5011273070461"
                                                y1="0"
                                                x2="593.5011273070461"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1768"
                                                x1="733.6391306627504"
                                                y1="0"
                                                x2="733.6391306627504"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1770"
                                                x1="903.8067061661056"
                                                y1="0"
                                                x2="903.8067061661056"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1772"
                                                x1="1043.94470952181"
                                                y1="0"
                                                x2="1043.94470952181"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1774"
                                                x1="1204.1024276426149"
                                                y1="0"
                                                x2="1204.1024276426149"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1776"
                                                x1="1344.2404309983192"
                                                y1="0"
                                                x2="1344.2404309983192"
                                                y2="342.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                        </g>
                                        <line id="SvgjsLine1784" x1="0" y1="342.2" x2="1491.46875" y2="342.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1783" x1="0" y1="1" x2="0" y2="342.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1749" class="apexcharts-line-series apexcharts-plot-series">
                                        <g id="SvgjsG1750" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path
                                                id="SvgjsPath1753"
                                                d="M 0 131.190925 L 10.009857382550337 133.50077499999998 L 20.019714765100673 125.71572499999999 L 30.02957214765101 114.16647499999996 L 40.039429530201346 107.87854999999999 L 50.04928691275168 111.89939999999996 L 60.05914429530202 108.3063 L 70.06900167785236 99.49464999999998 L 80.07885906040269 98.42527499999997 L 90.08871644295303 102.06114999999997 L 100.09857382550337 100.26459999999997 L 110.1084312080537 84.05287499999997 L 120.11828859060404 90.93964999999997 L 130.12814597315437 79.3904 L 140.1380033557047 80.80197499999997 L 150.14786073825505 91.66682499999999 L 160.15771812080538 108.1352 L 170.16757550335572 119.47057499999997 L 180.17743288590606 123.66252499999996 L 190.1872902684564 139.1043 L 200.19714765100673 134.441825 L 210.20700503355707 132.64527499999997 L 220.2168624161074 113.01155 L 230.22671979865774 127.12729999999999 L 240.23657718120808 144.40839999999997 L 250.2464345637584 134.270725 L 260.25629194630875 120.83937499999999 L 270.26614932885906 122.59314999999998 L 280.2760067114094 127.42672499999998 L 290.28586409395973 108.43462499999998 L 300.2957214765101 117.8879 L 310.3055788590604 115.23584999999997 L 320.31543624161077 98.08307499999998 L 330.3252936241611 115.620825 L 340.33515100671144 133.8002 L 350.34500838926175 116.818525 L 360.3548657718121 112.96877499999997 L 370.3647231543624 91.88069999999996 L 380.3745805369128 106.50974999999997 L 390.3844379194631 93.89112499999999 L 400.39429530201346 79.775375 L 410.40415268456377 95.21714999999998 L 420.41401006711413 84.39507499999996 L 430.42386744966444 81.27249999999998 L 440.4337248322148 95.04604999999998 L 450.4435822147651 99.238 L 460.4534395973155 90.25524999999999 L 470.4632969798658 75.07012499999996 L 480.47315436241615 90.896875 L 490.48301174496646 92.39399999999998 L 500.4928691275168 99.49464999999998 L 510.50272651006713 116.51909999999998 L 520.5125838926175 118.48675 L 530.5224412751678 125.92959999999997 L 540.5322986577181 105.22649999999999 L 550.5421560402685 126.22902499999998 L 560.5520134228188 117.67402499999997 L 570.5618708053692 133.50077499999998 L 580.5717281879195 139.18984999999998 L 590.5815855704699 156.94147499999997 L 600.5914429530202 175.5486 L 610.6013003355705 193.642425 L 620.6111577181208 209.46917499999998 L 630.6210151006711 202.62517499999998 L 640.6308724832215 184.40302499999999 L 650.6407298657718 188.680525 L 660.6505872483222 202.15464999999998 L 670.6604446308725 200.18699999999998 L 680.6703020134229 210.36745 L 690.6801593959732 219.69239999999996 L 700.6900167785235 220.54789999999997 L 710.6998741610738 223.584925 L 720.7097315436242 223.499375 L 730.7195889261745 231.15609999999998 L 740.7294463087248 237.91455 L 750.7393036912752 248.308875 L 760.7491610738256 247.75279999999998 L 770.7590184563759 241.50764999999998 L 780.7688758389262 225.42424999999997 L 790.7787332214765 212.72007499999998 L 800.7885906040269 225.638125 L 810.7984479865772 214.2172 L 820.8083053691275 234.66365 L 830.8181627516778 243.432525 L 840.8280201342283 240.43827499999998 L 850.8378775167786 241.84985 L 860.8477348993289 222.472775 L 870.8575922818792 242.91922499999998 L 880.8674496644296 239.924975 L 890.8773070469799 260.029225 L 900.8871644295302 277.481425 L 910.8970218120805 277.6953 L 920.906879194631 295.1475 L 930.9167365771813 302.847 L 940.9265939597316 310.247075 L 950.9364513422819 292.4099 L 960.9463087248323 274.7866 L 970.9561661073826 282.357775 L 980.9660234899329 288.346275 L 990.9758808724832 284.325425 L 1000.9857382550337 277.994725 L 1010.995595637584 282.52887499999997 L 1021.0054530201343 285.608675 L 1031.0153104026847 264.77725 L 1041.025167785235 253.955175 L 1051.0350251677853 252.11585 L 1061.0448825503356 233.679825 L 1071.054739932886 233.89369999999997 L 1081.0645973154362 252.62914999999998 L 1091.0744546979865 261.996875 L 1101.084312080537 276.41204999999997 L 1111.0941694630874 279.9196 L 1121.1040268456377 265.46164999999996 L 1131.113884228188 273.9311 L 1141.1237416107383 272.262875 L 1151.1335989932886 281.63059999999996 L 1161.143456375839 290.44225 L 1171.1533137583892 278.7219 L 1181.1631711409398 268.4559 L 1191.17302852349 266.103275 L 1201.1828859060404 282.186675 L 1211.1927432885907 262.424625 L 1221.202600671141 263.23735 L 1231.2124580536913 245.1863 L 1241.2223154362416 234.9203 L 1251.232172818792 221.66004999999998 L 1261.2420302013422 222.301675 L 1271.2518875838928 239.06947499999998 L 1281.261744966443 238.34229999999997 L 1291.2716023489934 221.44617499999998 L 1301.2814597315437 229.95839999999998 L 1311.291317114094 216.740925 L 1321.3011744966443 230.68557499999997 L 1331.3110318791946 239.88219999999998 L 1341.320889261745 218.92244999999997 L 1351.3307466442955 234.66365 L 1361.3406040268458 248.99327499999998 L 1371.350461409396 243.60362499999997 L 1381.3603187919464 253.61297499999998 L 1391.3701761744967 215.0727 L 1401.380033557047 212.976725 L 1411.3898909395973 202.92459999999997 L 1421.3997483221476 207.62984999999998 L 1431.4096057046982 198.091025 L 1441.4194630872485 213.66112499999997 L 1451.4293204697988 195.90949999999998 L 1461.439177852349 184.231925 L 1471.4490352348994 190.34875 L 1481.4588926174497 193.42854999999997 L 1491.46875 184.060825"
                                                fill="none"
                                                fill-opacity="1"
                                                stroke="rgba(101,113,255,0.85)"
                                                stroke-opacity="1"
                                                stroke-linecap="butt"
                                                stroke-width="2"
                                                stroke-dasharray="0"
                                                class="apexcharts-line"
                                                index="0"
                                                clip-path="url(#gridRectMasksic7oqpkf)"
                                                pathTo="M 0 131.190925 L 10.009857382550337 133.50077499999998 L 20.019714765100673 125.71572499999999 L 30.02957214765101 114.16647499999996 L 40.039429530201346 107.87854999999999 L 50.04928691275168 111.89939999999996 L 60.05914429530202 108.3063 L 70.06900167785236 99.49464999999998 L 80.07885906040269 98.42527499999997 L 90.08871644295303 102.06114999999997 L 100.09857382550337 100.26459999999997 L 110.1084312080537 84.05287499999997 L 120.11828859060404 90.93964999999997 L 130.12814597315437 79.3904 L 140.1380033557047 80.80197499999997 L 150.14786073825505 91.66682499999999 L 160.15771812080538 108.1352 L 170.16757550335572 119.47057499999997 L 180.17743288590606 123.66252499999996 L 190.1872902684564 139.1043 L 200.19714765100673 134.441825 L 210.20700503355707 132.64527499999997 L 220.2168624161074 113.01155 L 230.22671979865774 127.12729999999999 L 240.23657718120808 144.40839999999997 L 250.2464345637584 134.270725 L 260.25629194630875 120.83937499999999 L 270.26614932885906 122.59314999999998 L 280.2760067114094 127.42672499999998 L 290.28586409395973 108.43462499999998 L 300.2957214765101 117.8879 L 310.3055788590604 115.23584999999997 L 320.31543624161077 98.08307499999998 L 330.3252936241611 115.620825 L 340.33515100671144 133.8002 L 350.34500838926175 116.818525 L 360.3548657718121 112.96877499999997 L 370.3647231543624 91.88069999999996 L 380.3745805369128 106.50974999999997 L 390.3844379194631 93.89112499999999 L 400.39429530201346 79.775375 L 410.40415268456377 95.21714999999998 L 420.41401006711413 84.39507499999996 L 430.42386744966444 81.27249999999998 L 440.4337248322148 95.04604999999998 L 450.4435822147651 99.238 L 460.4534395973155 90.25524999999999 L 470.4632969798658 75.07012499999996 L 480.47315436241615 90.896875 L 490.48301174496646 92.39399999999998 L 500.4928691275168 99.49464999999998 L 510.50272651006713 116.51909999999998 L 520.5125838926175 118.48675 L 530.5224412751678 125.92959999999997 L 540.5322986577181 105.22649999999999 L 550.5421560402685 126.22902499999998 L 560.5520134228188 117.67402499999997 L 570.5618708053692 133.50077499999998 L 580.5717281879195 139.18984999999998 L 590.5815855704699 156.94147499999997 L 600.5914429530202 175.5486 L 610.6013003355705 193.642425 L 620.6111577181208 209.46917499999998 L 630.6210151006711 202.62517499999998 L 640.6308724832215 184.40302499999999 L 650.6407298657718 188.680525 L 660.6505872483222 202.15464999999998 L 670.6604446308725 200.18699999999998 L 680.6703020134229 210.36745 L 690.6801593959732 219.69239999999996 L 700.6900167785235 220.54789999999997 L 710.6998741610738 223.584925 L 720.7097315436242 223.499375 L 730.7195889261745 231.15609999999998 L 740.7294463087248 237.91455 L 750.7393036912752 248.308875 L 760.7491610738256 247.75279999999998 L 770.7590184563759 241.50764999999998 L 780.7688758389262 225.42424999999997 L 790.7787332214765 212.72007499999998 L 800.7885906040269 225.638125 L 810.7984479865772 214.2172 L 820.8083053691275 234.66365 L 830.8181627516778 243.432525 L 840.8280201342283 240.43827499999998 L 850.8378775167786 241.84985 L 860.8477348993289 222.472775 L 870.8575922818792 242.91922499999998 L 880.8674496644296 239.924975 L 890.8773070469799 260.029225 L 900.8871644295302 277.481425 L 910.8970218120805 277.6953 L 920.906879194631 295.1475 L 930.9167365771813 302.847 L 940.9265939597316 310.247075 L 950.9364513422819 292.4099 L 960.9463087248323 274.7866 L 970.9561661073826 282.357775 L 980.9660234899329 288.346275 L 990.9758808724832 284.325425 L 1000.9857382550337 277.994725 L 1010.995595637584 282.52887499999997 L 1021.0054530201343 285.608675 L 1031.0153104026847 264.77725 L 1041.025167785235 253.955175 L 1051.0350251677853 252.11585 L 1061.0448825503356 233.679825 L 1071.054739932886 233.89369999999997 L 1081.0645973154362 252.62914999999998 L 1091.0744546979865 261.996875 L 1101.084312080537 276.41204999999997 L 1111.0941694630874 279.9196 L 1121.1040268456377 265.46164999999996 L 1131.113884228188 273.9311 L 1141.1237416107383 272.262875 L 1151.1335989932886 281.63059999999996 L 1161.143456375839 290.44225 L 1171.1533137583892 278.7219 L 1181.1631711409398 268.4559 L 1191.17302852349 266.103275 L 1201.1828859060404 282.186675 L 1211.1927432885907 262.424625 L 1221.202600671141 263.23735 L 1231.2124580536913 245.1863 L 1241.2223154362416 234.9203 L 1251.232172818792 221.66004999999998 L 1261.2420302013422 222.301675 L 1271.2518875838928 239.06947499999998 L 1281.261744966443 238.34229999999997 L 1291.2716023489934 221.44617499999998 L 1301.2814597315437 229.95839999999998 L 1311.291317114094 216.740925 L 1321.3011744966443 230.68557499999997 L 1331.3110318791946 239.88219999999998 L 1341.320889261745 218.92244999999997 L 1351.3307466442955 234.66365 L 1361.3406040268458 248.99327499999998 L 1371.350461409396 243.60362499999997 L 1381.3603187919464 253.61297499999998 L 1391.3701761744967 215.0727 L 1401.380033557047 212.976725 L 1411.3898909395973 202.92459999999997 L 1421.3997483221476 207.62984999999998 L 1431.4096057046982 198.091025 L 1441.4194630872485 213.66112499999997 L 1451.4293204697988 195.90949999999998 L 1461.439177852349 184.231925 L 1471.4490352348994 190.34875 L 1481.4588926174497 193.42854999999997 L 1491.46875 184.060825"
                                                pathFrom="M -1 342.2 L -1 342.2 L 10.009857382550337 342.2 L 20.019714765100673 342.2 L 30.02957214765101 342.2 L 40.039429530201346 342.2 L 50.04928691275168 342.2 L 60.05914429530202 342.2 L 70.06900167785236 342.2 L 80.07885906040269 342.2 L 90.08871644295303 342.2 L 100.09857382550337 342.2 L 110.1084312080537 342.2 L 120.11828859060404 342.2 L 130.12814597315437 342.2 L 140.1380033557047 342.2 L 150.14786073825505 342.2 L 160.15771812080538 342.2 L 170.16757550335572 342.2 L 180.17743288590606 342.2 L 190.1872902684564 342.2 L 200.19714765100673 342.2 L 210.20700503355707 342.2 L 220.2168624161074 342.2 L 230.22671979865774 342.2 L 240.23657718120808 342.2 L 250.2464345637584 342.2 L 260.25629194630875 342.2 L 270.26614932885906 342.2 L 280.2760067114094 342.2 L 290.28586409395973 342.2 L 300.2957214765101 342.2 L 310.3055788590604 342.2 L 320.31543624161077 342.2 L 330.3252936241611 342.2 L 340.33515100671144 342.2 L 350.34500838926175 342.2 L 360.3548657718121 342.2 L 370.3647231543624 342.2 L 380.3745805369128 342.2 L 390.3844379194631 342.2 L 400.39429530201346 342.2 L 410.40415268456377 342.2 L 420.41401006711413 342.2 L 430.42386744966444 342.2 L 440.4337248322148 342.2 L 450.4435822147651 342.2 L 460.4534395973155 342.2 L 470.4632969798658 342.2 L 480.47315436241615 342.2 L 490.48301174496646 342.2 L 500.4928691275168 342.2 L 510.50272651006713 342.2 L 520.5125838926175 342.2 L 530.5224412751678 342.2 L 540.5322986577181 342.2 L 550.5421560402685 342.2 L 560.5520134228188 342.2 L 570.5618708053692 342.2 L 580.5717281879195 342.2 L 590.5815855704699 342.2 L 600.5914429530202 342.2 L 610.6013003355705 342.2 L 620.6111577181208 342.2 L 630.6210151006711 342.2 L 640.6308724832215 342.2 L 650.6407298657718 342.2 L 660.6505872483222 342.2 L 670.6604446308725 342.2 L 680.6703020134229 342.2 L 690.6801593959732 342.2 L 700.6900167785235 342.2 L 710.6998741610738 342.2 L 720.7097315436242 342.2 L 730.7195889261745 342.2 L 740.7294463087248 342.2 L 750.7393036912752 342.2 L 760.7491610738256 342.2 L 770.7590184563759 342.2 L 780.7688758389262 342.2 L 790.7787332214765 342.2 L 800.7885906040269 342.2 L 810.7984479865772 342.2 L 820.8083053691275 342.2 L 830.8181627516778 342.2 L 840.8280201342283 342.2 L 850.8378775167786 342.2 L 860.8477348993289 342.2 L 870.8575922818792 342.2 L 880.8674496644296 342.2 L 890.8773070469799 342.2 L 900.8871644295302 342.2 L 910.8970218120805 342.2 L 920.906879194631 342.2 L 930.9167365771813 342.2 L 940.9265939597316 342.2 L 950.9364513422819 342.2 L 960.9463087248323 342.2 L 970.9561661073826 342.2 L 980.9660234899329 342.2 L 990.9758808724832 342.2 L 1000.9857382550337 342.2 L 1010.995595637584 342.2 L 1021.0054530201343 342.2 L 1031.0153104026847 342.2 L 1041.025167785235 342.2 L 1051.0350251677853 342.2 L 1061.0448825503356 342.2 L 1071.054739932886 342.2 L 1081.0645973154362 342.2 L 1091.0744546979865 342.2 L 1101.084312080537 342.2 L 1111.0941694630874 342.2 L 1121.1040268456377 342.2 L 1131.113884228188 342.2 L 1141.1237416107383 342.2 L 1151.1335989932886 342.2 L 1161.143456375839 342.2 L 1171.1533137583892 342.2 L 1181.1631711409398 342.2 L 1191.17302852349 342.2 L 1201.1828859060404 342.2 L 1211.1927432885907 342.2 L 1221.202600671141 342.2 L 1231.2124580536913 342.2 L 1241.2223154362416 342.2 L 1251.232172818792 342.2 L 1261.2420302013422 342.2 L 1271.2518875838928 342.2 L 1281.261744966443 342.2 L 1291.2716023489934 342.2 L 1301.2814597315437 342.2 L 1311.291317114094 342.2 L 1321.3011744966443 342.2 L 1331.3110318791946 342.2 L 1341.320889261745 342.2 L 1351.3307466442955 342.2 L 1361.3406040268458 342.2 L 1371.350461409396 342.2 L 1381.3603187919464 342.2 L 1391.3701761744967 342.2 L 1401.380033557047 342.2 L 1411.3898909395973 342.2 L 1421.3997483221476 342.2 L 1431.4096057046982 342.2 L 1441.4194630872485 342.2 L 1451.4293204697988 342.2 L 1461.439177852349 342.2 L 1471.4490352348994 342.2 L 1481.4588926174497 342.2 L 1491.46875 342.2"
                                                fill-rule="evenodd"
                                            ></path>
                                            <g id="SvgjsG1751" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle
                                                        id="SvgjsCircle1842"
                                                        r="0"
                                                        cx="0"
                                                        cy="0"
                                                        class="apexcharts-marker wzscxz7r2 no-pointer-events"
                                                        stroke="#ffffff"
                                                        fill="#6571ff"
                                                        fill-opacity="1"
                                                        stroke-width="2"
                                                        stroke-opacity="0.9"
                                                        default-marker-size="0"
                                                    ></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1752" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG1757" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1778" x1="0" y1="0" x2="1491.46875" y2="0" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1782" x1="0" y1="342.2" x2="1491.46875" y2="342.2" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1817" x1="0" y1="343.2" x2="1491.46875" y2="343.2" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                    </g>
                                    <line id="SvgjsLine1837" x1="0" y1="0" x2="1491.46875" y2="0" stroke="#7987a1" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1838" x1="0" y1="0" x2="1491.46875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1839" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1840" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1841" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect1843" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1844" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                </g>
                                <rect id="SvgjsRect1733" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG1818" class="apexcharts-yaxis" rel="0" transform="translate(31.53125, 0)">
                                    <g id="SvgjsG1819" class="apexcharts-yaxis-texts-g">
                                        <text
                                            id="SvgjsText1821"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="31.4"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1822">80.00</tspan>
                                            <title>80.00</title>
                                        </text>
                                        <text
                                            id="SvgjsText1824"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="116.95"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1825">60.00</tspan>
                                            <title>60.00</title>
                                        </text>
                                        <text
                                            id="SvgjsText1827"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="202.5"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1828">40.00</tspan>
                                            <title>40.00</title>
                                        </text>
                                        <text
                                            id="SvgjsText1830"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="288.04999999999995"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1831">20.00</tspan>
                                            <title>20.00</title>
                                        </text>
                                        <text
                                            id="SvgjsText1833"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="373.59999999999997"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1834">0.00</tspan>
                                            <title>0.00</title>
                                        </text>
                                    </g>
                                    <g id="SvgjsG1835" class="apexcharts-yaxis-title">
                                        <text
                                            id="SvgjsText1836"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="36.65625"
                                            y="201.1"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="900"
                                            fill="#7987a1"
                                            class="apexcharts-text apexcharts-yaxis-title-text"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                            transform="rotate(-90 -22.53125 196.60000610351562)"
                                        >
                                            Revenue ( $1000 x )
                                        </text>
                                    </g>
                                </g>
                                <g id="SvgjsG1728" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 200px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(101, 113, 255);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Monthly sales</h6>
                        <div class="dropdown mb-2">
                            <button class="btn btn-link p-0" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px"
                                >
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-eye icon-sm me-2"
                                    >
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span class="">View</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-edit-2 icon-sm me-2"
                                    >
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg>
                                    <span class="">Edit</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-trash icon-sm me-2"
                                    >
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    <span class="">Delete</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-printer icon-sm me-2"
                                    >
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                    <span class="">Print</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-download icon-sm me-2"
                                    >
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                    <span class="">Download</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted">Sales are activities related to selling or the number of goods or services sold in a given time period.</p>
                    <div id="monthlySalesChart" style="min-height: 318px;">
                        <div id="apexchartsguh3s5el" class="apexcharts-canvas apexchartsguh3s5el apexcharts-theme-light" style="width: 1017px; height: 318px;">
                            <svg
                                id="SvgjsSvg1845"
                                width="1017"
                                height="318"
                                xmlns="http://www.w3.org/2000/svg"
                                version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable"
                                xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)"
                                style="background: rgb(255, 255, 255);"
                            >
                                <g id="SvgjsG1847" class="apexcharts-inner apexcharts-graphical" transform="translate(88.03595933133732, 30)">
                                    <defs id="SvgjsDefs1846">
                                        <linearGradient id="SvgjsLinearGradient1853" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1854" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1855" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1856" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskguh3s5el">
                                            <rect id="SvgjsRect1872" width="958.640625" height="260.2" x="-33.676584331337324" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskguh3s5el"></clipPath>
                                        <clipPath id="nonForecastMaskguh3s5el"></clipPath>
                                        <clipPath id="gridRectMarkerMaskguh3s5el">
                                            <rect id="SvgjsRect1873" width="895.2874563373254" height="264.2" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect
                                        id="SvgjsRect1857"
                                        width="37.35935445725316"
                                        height="260.2"
                                        x="0"
                                        y="0"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke-dasharray="3"
                                        fill="url(#SvgjsLinearGradient1853)"
                                        class="apexcharts-xcrosshairs"
                                        y2="260.2"
                                        filter="none"
                                        fill-opacity="0.9"
                                    ></rect>
                                    <line
                                        id="SvgjsLine1955"
                                        x1="2.6685253183752256"
                                        y1="261.2"
                                        x2="2.6685253183752256"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1957"
                                        x1="85.39281018800722"
                                        y1="261.2"
                                        x2="85.39281018800722"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1959"
                                        x1="160.11151910251354"
                                        y1="261.2"
                                        x2="160.11151910251354"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1961"
                                        x1="242.83580397214553"
                                        y1="261.2"
                                        x2="242.83580397214553"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1963"
                                        x1="322.8915635234023"
                                        y1="261.2"
                                        x2="322.8915635234023"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1965"
                                        x1="405.6158483930343"
                                        y1="261.2"
                                        x2="405.6158483930343"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1967"
                                        x1="485.67160794429105"
                                        y1="261.2"
                                        x2="485.67160794429105"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1969"
                                        x1="568.3958928139231"
                                        y1="261.2"
                                        x2="568.3958928139231"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1971"
                                        x1="651.1201776835551"
                                        y1="261.2"
                                        x2="651.1201776835551"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1973"
                                        x1="731.1759372348118"
                                        y1="261.2"
                                        x2="731.1759372348118"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <line
                                        id="SvgjsLine1975"
                                        x1="813.9002221044439"
                                        y1="261.2"
                                        x2="813.9002221044439"
                                        y2="267.2"
                                        stroke="rgba(77, 138, 240, .15)"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"
                                    ></line>
                                    <g id="SvgjsG1984" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1985" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                            <text
                                                id="SvgjsText1987"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="2.6685253183752256"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="600"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1988">2023</tspan>
                                                <title>2023</title>
                                            </text>
                                            <text
                                                id="SvgjsText1990"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="85.39281018800722"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1991">Feb '23</tspan>
                                                <title>Feb '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText1993"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="160.11151910251354"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1994">Mar '23</tspan>
                                                <title>Mar '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText1996"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="242.83580397214553"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan1997">Apr '23</tspan>
                                                <title>Apr '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText1999"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="322.8915635234023"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan2000">May '23</tspan>
                                                <title>May '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText2002"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="405.6158483930343"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan2003">Jun '23</tspan>
                                                <title>Jun '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText2005"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="485.67160794429105"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan2006">Jul '23</tspan>
                                                <title>Jul '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText2008"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="568.3958928139231"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan2009">Aug '23</tspan>
                                                <title>Aug '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText2011"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="651.1201776835551"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan2012">Sep '23</tspan>
                                                <title>Sep '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText2014"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="731.1759372348118"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan2015">Oct '23</tspan>
                                                <title>Oct '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText2017"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="813.9002221044439"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan2018">Nov '23</tspan>
                                                <title>Nov '23</title>
                                            </text>
                                            <text
                                                id="SvgjsText2020"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="893.9559816557006"
                                                y="289.2"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#000000"
                                                class="apexcharts-text apexcharts-xaxis-label"
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                            >
                                                <tspan id="SvgjsTspan2021">Dec '23</tspan>
                                                <title>Dec '23</title>
                                            </text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1950" class="apexcharts-grid">
                                        <g id="SvgjsG1951" class="apexcharts-gridlines-horizontal">
                                            <line
                                                id="SvgjsLine1978"
                                                x1="-31.676584331337324"
                                                y1="65.05"
                                                x2="922.9640406686626"
                                                y2="65.05"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1979"
                                                x1="-31.676584331337324"
                                                y1="130.1"
                                                x2="922.9640406686626"
                                                y2="130.1"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1980"
                                                x1="-31.676584331337324"
                                                y1="195.14999999999998"
                                                x2="922.9640406686626"
                                                y2="195.14999999999998"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                        </g>
                                        <g id="SvgjsG1952" class="apexcharts-gridlines-vertical">
                                            <line
                                                id="SvgjsLine1954"
                                                x1="2.6685253183752256"
                                                y1="0"
                                                x2="2.6685253183752256"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1956"
                                                x1="85.39281018800722"
                                                y1="0"
                                                x2="85.39281018800722"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1958"
                                                x1="160.11151910251354"
                                                y1="0"
                                                x2="160.11151910251354"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1960"
                                                x1="242.83580397214553"
                                                y1="0"
                                                x2="242.83580397214553"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1962"
                                                x1="322.8915635234023"
                                                y1="0"
                                                x2="322.8915635234023"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1964"
                                                x1="405.6158483930343"
                                                y1="0"
                                                x2="405.6158483930343"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1966"
                                                x1="485.67160794429105"
                                                y1="0"
                                                x2="485.67160794429105"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1968"
                                                x1="568.3958928139231"
                                                y1="0"
                                                x2="568.3958928139231"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1970"
                                                x1="651.1201776835551"
                                                y1="0"
                                                x2="651.1201776835551"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1972"
                                                x1="731.1759372348118"
                                                y1="0"
                                                x2="731.1759372348118"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1974"
                                                x1="813.9002221044439"
                                                y1="0"
                                                x2="813.9002221044439"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                            <line
                                                id="SvgjsLine1976"
                                                x1="893.9559816557006"
                                                y1="0"
                                                x2="893.9559816557006"
                                                y2="260.2"
                                                stroke="rgba(77, 138, 240, .15)"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-gridline"
                                            ></line>
                                        </g>
                                        <line id="SvgjsLine1983" x1="0" y1="260.2" x2="891.2874563373254" y2="260.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1982" x1="0" y1="1" x2="0" y2="260.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1874" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1875" class="apexcharts-series" rel="1" seriesName="Sales" data:realIndex="0">
                                            <path
                                                id="SvgjsPath1879"
                                                d="M -18.67967722862658 256.20099999999996 L -18.67967722862658 66.44900000000001 C -18.67967722862658 64.44900000000001 -16.67967722862658 62.449000000000005 -14.67967722862658 62.449000000000005 L 14.67967722862658 62.449000000000005 C 16.67967722862658 62.449000000000005 18.67967722862658 64.44900000000001 18.67967722862658 66.44900000000001 L 18.67967722862658 256.20099999999996 C 18.67967722862658 258.20099999999996 16.67967722862658 260.20099999999996 14.67967722862658 260.20099999999996 L -14.67967722862658 260.20099999999996 C -16.67967722862658 260.20099999999996 -18.67967722862658 258.20099999999996 -18.67967722862658 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M -18.67967722862658 256.20099999999996 L -18.67967722862658 66.44900000000001 C -18.67967722862658 64.44900000000001 -16.67967722862658 62.449000000000005 -14.67967722862658 62.449000000000005 L 14.67967722862658 62.449000000000005 C 16.67967722862658 62.449000000000005 18.67967722862658 64.44900000000001 18.67967722862658 66.44900000000001 L 18.67967722862658 256.20099999999996 C 18.67967722862658 258.20099999999996 16.67967722862658 260.20099999999996 14.67967722862658 260.20099999999996 L -14.67967722862658 260.20099999999996 C -16.67967722862658 260.20099999999996 -18.67967722862658 258.20099999999996 -18.67967722862658 256.20099999999996 Z "
                                                pathFrom="M -18.67967722862658 260.20099999999996 L -18.67967722862658 260.20099999999996 L 18.67967722862658 260.20099999999996 L 18.67967722862658 260.20099999999996 L 18.67967722862658 260.20099999999996 L 18.67967722862658 260.20099999999996 L 18.67967722862658 260.20099999999996 L -18.67967722862658 260.20099999999996 Z"
                                                cy="62.44800000000001"
                                                cx="18.67967722862658"
                                                j="0"
                                                val="152"
                                                barHeight="197.75199999999998"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1885"
                                                d="M 64.04460764100543 256.20099999999996 L 64.04460764100543 122.392 C 64.04460764100543 120.392 66.04460764100543 118.392 68.04460764100543 118.392 L 97.40396209825859 118.392 C 99.40396209825859 118.392 101.40396209825859 120.392 101.40396209825859 122.392 L 101.40396209825859 256.20099999999996 C 101.40396209825859 258.20099999999996 99.40396209825859 260.20099999999996 97.40396209825859 260.20099999999996 L 68.04460764100543 260.20099999999996 C 66.04460764100543 260.20099999999996 64.04460764100543 258.20099999999996 64.04460764100543 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 64.04460764100543 256.20099999999996 L 64.04460764100543 122.392 C 64.04460764100543 120.392 66.04460764100543 118.392 68.04460764100543 118.392 L 97.40396209825859 118.392 C 99.40396209825859 118.392 101.40396209825859 120.392 101.40396209825859 122.392 L 101.40396209825859 256.20099999999996 C 101.40396209825859 258.20099999999996 99.40396209825859 260.20099999999996 97.40396209825859 260.20099999999996 L 68.04460764100543 260.20099999999996 C 66.04460764100543 260.20099999999996 64.04460764100543 258.20099999999996 64.04460764100543 256.20099999999996 Z "
                                                pathFrom="M 64.04460764100543 260.20099999999996 L 64.04460764100543 260.20099999999996 L 101.40396209825859 260.20099999999996 L 101.40396209825859 260.20099999999996 L 101.40396209825859 260.20099999999996 L 101.40396209825859 260.20099999999996 L 101.40396209825859 260.20099999999996 L 64.04460764100543 260.20099999999996 Z"
                                                cy="118.39099999999999"
                                                cx="101.40396209825859"
                                                j="1"
                                                val="109"
                                                barHeight="141.809"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1891"
                                                d="M 138.76331655551172 256.20099999999996 L 138.76331655551172 143.208 C 138.76331655551172 141.208 140.76331655551172 139.208 142.76331655551172 139.208 L 172.1226710127649 139.208 C 174.1226710127649 139.208 176.1226710127649 141.208 176.1226710127649 143.208 L 176.1226710127649 256.20099999999996 C 176.1226710127649 258.20099999999996 174.1226710127649 260.20099999999996 172.1226710127649 260.20099999999996 L 142.76331655551172 260.20099999999996 C 140.76331655551172 260.20099999999996 138.76331655551172 258.20099999999996 138.76331655551172 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 138.76331655551172 256.20099999999996 L 138.76331655551172 143.208 C 138.76331655551172 141.208 140.76331655551172 139.208 142.76331655551172 139.208 L 172.1226710127649 139.208 C 174.1226710127649 139.208 176.1226710127649 141.208 176.1226710127649 143.208 L 176.1226710127649 256.20099999999996 C 176.1226710127649 258.20099999999996 174.1226710127649 260.20099999999996 172.1226710127649 260.20099999999996 L 142.76331655551172 260.20099999999996 C 140.76331655551172 260.20099999999996 138.76331655551172 258.20099999999996 138.76331655551172 256.20099999999996 Z "
                                                pathFrom="M 138.76331655551172 260.20099999999996 L 138.76331655551172 260.20099999999996 L 176.1226710127649 260.20099999999996 L 176.1226710127649 260.20099999999996 L 176.1226710127649 260.20099999999996 L 176.1226710127649 260.20099999999996 L 176.1226710127649 260.20099999999996 L 138.76331655551172 260.20099999999996 Z"
                                                cy="139.207"
                                                cx="176.1226710127649"
                                                j="2"
                                                val="93"
                                                barHeight="120.993"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1897"
                                                d="M 221.48760142514374 256.20099999999996 L 221.48760142514374 117.18800000000002 C 221.48760142514374 115.18800000000002 223.48760142514374 113.18800000000002 225.48760142514374 113.18800000000002 L 254.8469558823969 113.18800000000002 C 256.8469558823969 113.18800000000002 258.8469558823969 115.18800000000002 258.8469558823969 117.18800000000002 L 258.8469558823969 256.20099999999996 C 258.8469558823969 258.20099999999996 256.8469558823969 260.20099999999996 254.8469558823969 260.20099999999996 L 225.48760142514374 260.20099999999996 C 223.48760142514374 260.20099999999996 221.48760142514374 258.20099999999996 221.48760142514374 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 221.48760142514374 256.20099999999996 L 221.48760142514374 117.18800000000002 C 221.48760142514374 115.18800000000002 223.48760142514374 113.18800000000002 225.48760142514374 113.18800000000002 L 254.8469558823969 113.18800000000002 C 256.8469558823969 113.18800000000002 258.8469558823969 115.18800000000002 258.8469558823969 117.18800000000002 L 258.8469558823969 256.20099999999996 C 258.8469558823969 258.20099999999996 256.8469558823969 260.20099999999996 254.8469558823969 260.20099999999996 L 225.48760142514374 260.20099999999996 C 223.48760142514374 260.20099999999996 221.48760142514374 258.20099999999996 221.48760142514374 256.20099999999996 Z "
                                                pathFrom="M 221.48760142514374 260.20099999999996 L 221.48760142514374 260.20099999999996 L 258.8469558823969 260.20099999999996 L 258.8469558823969 260.20099999999996 L 258.8469558823969 260.20099999999996 L 258.8469558823969 260.20099999999996 L 258.8469558823969 260.20099999999996 L 221.48760142514374 260.20099999999996 Z"
                                                cy="113.18700000000001"
                                                cx="258.8469558823969"
                                                j="3"
                                                val="113"
                                                barHeight="147.01299999999998"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1903"
                                                d="M 301.5433609764005 256.20099999999996 L 301.5433609764005 100.275 C 301.5433609764005 98.275 303.5433609764005 96.275 305.5433609764005 96.275 L 334.90271543365367 96.275 C 336.90271543365367 96.275 338.90271543365367 98.275 338.90271543365367 100.275 L 338.90271543365367 256.20099999999996 C 338.90271543365367 258.20099999999996 336.90271543365367 260.20099999999996 334.90271543365367 260.20099999999996 L 305.5433609764005 260.20099999999996 C 303.5433609764005 260.20099999999996 301.5433609764005 258.20099999999996 301.5433609764005 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 301.5433609764005 256.20099999999996 L 301.5433609764005 100.275 C 301.5433609764005 98.275 303.5433609764005 96.275 305.5433609764005 96.275 L 334.90271543365367 96.275 C 336.90271543365367 96.275 338.90271543365367 98.275 338.90271543365367 100.275 L 338.90271543365367 256.20099999999996 C 338.90271543365367 258.20099999999996 336.90271543365367 260.20099999999996 334.90271543365367 260.20099999999996 L 305.5433609764005 260.20099999999996 C 303.5433609764005 260.20099999999996 301.5433609764005 258.20099999999996 301.5433609764005 256.20099999999996 Z "
                                                pathFrom="M 301.5433609764005 260.20099999999996 L 301.5433609764005 260.20099999999996 L 338.90271543365367 260.20099999999996 L 338.90271543365367 260.20099999999996 L 338.90271543365367 260.20099999999996 L 338.90271543365367 260.20099999999996 L 338.90271543365367 260.20099999999996 L 301.5433609764005 260.20099999999996 Z"
                                                cy="96.274"
                                                cx="338.90271543365367"
                                                j="4"
                                                val="126"
                                                barHeight="163.926"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1909"
                                                d="M 384.2676458460325 256.20099999999996 L 384.2676458460325 54.74 C 384.2676458460325 52.74 386.2676458460325 50.74 388.2676458460325 50.74 L 417.6270003032857 50.74 C 419.6270003032857 50.74 421.6270003032857 52.74 421.6270003032857 54.74 L 421.6270003032857 256.20099999999996 C 421.6270003032857 258.20099999999996 419.6270003032857 260.20099999999996 417.6270003032857 260.20099999999996 L 388.2676458460325 260.20099999999996 C 386.2676458460325 260.20099999999996 384.2676458460325 258.20099999999996 384.2676458460325 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 384.2676458460325 256.20099999999996 L 384.2676458460325 54.74 C 384.2676458460325 52.74 386.2676458460325 50.74 388.2676458460325 50.74 L 417.6270003032857 50.74 C 419.6270003032857 50.74 421.6270003032857 52.74 421.6270003032857 54.74 L 421.6270003032857 256.20099999999996 C 421.6270003032857 258.20099999999996 419.6270003032857 260.20099999999996 417.6270003032857 260.20099999999996 L 388.2676458460325 260.20099999999996 C 386.2676458460325 260.20099999999996 384.2676458460325 258.20099999999996 384.2676458460325 256.20099999999996 Z "
                                                pathFrom="M 384.2676458460325 260.20099999999996 L 384.2676458460325 260.20099999999996 L 421.6270003032857 260.20099999999996 L 421.6270003032857 260.20099999999996 L 421.6270003032857 260.20099999999996 L 421.6270003032857 260.20099999999996 L 421.6270003032857 260.20099999999996 L 384.2676458460325 260.20099999999996 Z"
                                                cy="50.739000000000004"
                                                cx="421.6270003032857"
                                                j="5"
                                                val="161"
                                                barHeight="209.46099999999998"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1915"
                                                d="M 464.32340539728926 256.20099999999996 L 464.32340539728926 19.61300000000002 C 464.32340539728926 17.61300000000002 466.32340539728926 15.613000000000023 468.32340539728926 15.613000000000023 L 497.68275985454244 15.613000000000023 C 499.68275985454244 15.613000000000023 501.68275985454244 17.61300000000002 501.68275985454244 19.61300000000002 L 501.68275985454244 256.20099999999996 C 501.68275985454244 258.20099999999996 499.68275985454244 260.20099999999996 497.68275985454244 260.20099999999996 L 468.32340539728926 260.20099999999996 C 466.32340539728926 260.20099999999996 464.32340539728926 258.20099999999996 464.32340539728926 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 464.32340539728926 256.20099999999996 L 464.32340539728926 19.61300000000002 C 464.32340539728926 17.61300000000002 466.32340539728926 15.613000000000023 468.32340539728926 15.613000000000023 L 497.68275985454244 15.613000000000023 C 499.68275985454244 15.613000000000023 501.68275985454244 17.61300000000002 501.68275985454244 19.61300000000002 L 501.68275985454244 256.20099999999996 C 501.68275985454244 258.20099999999996 499.68275985454244 260.20099999999996 497.68275985454244 260.20099999999996 L 468.32340539728926 260.20099999999996 C 466.32340539728926 260.20099999999996 464.32340539728926 258.20099999999996 464.32340539728926 256.20099999999996 Z "
                                                pathFrom="M 464.32340539728926 260.20099999999996 L 464.32340539728926 260.20099999999996 L 501.68275985454244 260.20099999999996 L 501.68275985454244 260.20099999999996 L 501.68275985454244 260.20099999999996 L 501.68275985454244 260.20099999999996 L 501.68275985454244 260.20099999999996 L 464.32340539728926 260.20099999999996 Z"
                                                cy="15.612000000000023"
                                                cx="501.68275985454244"
                                                j="6"
                                                val="188"
                                                barHeight="244.58799999999997"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1921"
                                                d="M 547.0476902669212 256.20099999999996 L 547.0476902669212 78.15800000000002 C 547.0476902669212 76.15800000000002 549.0476902669212 74.15800000000002 551.0476902669212 74.15800000000002 L 580.4070447241744 74.15800000000002 C 582.4070447241744 74.15800000000002 584.4070447241744 76.15800000000002 584.4070447241744 78.15800000000002 L 584.4070447241744 256.20099999999996 C 584.4070447241744 258.20099999999996 582.4070447241744 260.20099999999996 580.4070447241744 260.20099999999996 L 551.0476902669212 260.20099999999996 C 549.0476902669212 260.20099999999996 547.0476902669212 258.20099999999996 547.0476902669212 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 547.0476902669212 256.20099999999996 L 547.0476902669212 78.15800000000002 C 547.0476902669212 76.15800000000002 549.0476902669212 74.15800000000002 551.0476902669212 74.15800000000002 L 580.4070447241744 74.15800000000002 C 582.4070447241744 74.15800000000002 584.4070447241744 76.15800000000002 584.4070447241744 78.15800000000002 L 584.4070447241744 256.20099999999996 C 584.4070447241744 258.20099999999996 582.4070447241744 260.20099999999996 580.4070447241744 260.20099999999996 L 551.0476902669212 260.20099999999996 C 549.0476902669212 260.20099999999996 547.0476902669212 258.20099999999996 547.0476902669212 256.20099999999996 Z "
                                                pathFrom="M 547.0476902669212 260.20099999999996 L 547.0476902669212 260.20099999999996 L 584.4070447241744 260.20099999999996 L 584.4070447241744 260.20099999999996 L 584.4070447241744 260.20099999999996 L 584.4070447241744 260.20099999999996 L 584.4070447241744 260.20099999999996 L 547.0476902669212 260.20099999999996 Z"
                                                cy="74.15700000000001"
                                                cx="584.4070447241744"
                                                j="7"
                                                val="143"
                                                barHeight="186.04299999999998"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1927"
                                                d="M 629.7719751365532 256.20099999999996 L 629.7719751365532 131.499 C 629.7719751365532 129.499 631.7719751365532 127.499 633.7719751365532 127.499 L 663.1313295938064 127.499 C 665.1313295938064 127.499 667.1313295938064 129.499 667.1313295938064 131.499 L 667.1313295938064 256.20099999999996 C 667.1313295938064 258.20099999999996 665.1313295938064 260.20099999999996 663.1313295938064 260.20099999999996 L 633.7719751365532 260.20099999999996 C 631.7719751365532 260.20099999999996 629.7719751365532 258.20099999999996 629.7719751365532 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 629.7719751365532 256.20099999999996 L 629.7719751365532 131.499 C 629.7719751365532 129.499 631.7719751365532 127.499 633.7719751365532 127.499 L 663.1313295938064 127.499 C 665.1313295938064 127.499 667.1313295938064 129.499 667.1313295938064 131.499 L 667.1313295938064 256.20099999999996 C 667.1313295938064 258.20099999999996 665.1313295938064 260.20099999999996 663.1313295938064 260.20099999999996 L 633.7719751365532 260.20099999999996 C 631.7719751365532 260.20099999999996 629.7719751365532 258.20099999999996 629.7719751365532 256.20099999999996 Z "
                                                pathFrom="M 629.7719751365532 260.20099999999996 L 629.7719751365532 260.20099999999996 L 667.1313295938064 260.20099999999996 L 667.1313295938064 260.20099999999996 L 667.1313295938064 260.20099999999996 L 667.1313295938064 260.20099999999996 L 667.1313295938064 260.20099999999996 L 629.7719751365532 260.20099999999996 Z"
                                                cy="127.49799999999999"
                                                cx="667.1313295938064"
                                                j="8"
                                                val="102"
                                                barHeight="132.702"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1933"
                                                d="M 709.82773468781 256.20099999999996 L 709.82773468781 117.18800000000002 C 709.82773468781 115.18800000000002 711.82773468781 113.18800000000002 713.82773468781 113.18800000000002 L 743.1870891450632 113.18800000000002 C 745.1870891450632 113.18800000000002 747.1870891450632 115.18800000000002 747.1870891450632 117.18800000000002 L 747.1870891450632 256.20099999999996 C 747.1870891450632 258.20099999999996 745.1870891450632 260.20099999999996 743.1870891450632 260.20099999999996 L 713.82773468781 260.20099999999996 C 711.82773468781 260.20099999999996 709.82773468781 258.20099999999996 709.82773468781 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 709.82773468781 256.20099999999996 L 709.82773468781 117.18800000000002 C 709.82773468781 115.18800000000002 711.82773468781 113.18800000000002 713.82773468781 113.18800000000002 L 743.1870891450632 113.18800000000002 C 745.1870891450632 113.18800000000002 747.1870891450632 115.18800000000002 747.1870891450632 117.18800000000002 L 747.1870891450632 256.20099999999996 C 747.1870891450632 258.20099999999996 745.1870891450632 260.20099999999996 743.1870891450632 260.20099999999996 L 713.82773468781 260.20099999999996 C 711.82773468781 260.20099999999996 709.82773468781 258.20099999999996 709.82773468781 256.20099999999996 Z "
                                                pathFrom="M 709.82773468781 260.20099999999996 L 709.82773468781 260.20099999999996 L 747.1870891450632 260.20099999999996 L 747.1870891450632 260.20099999999996 L 747.1870891450632 260.20099999999996 L 747.1870891450632 260.20099999999996 L 747.1870891450632 260.20099999999996 L 709.82773468781 260.20099999999996 Z"
                                                cy="113.18700000000001"
                                                cx="747.1870891450632"
                                                j="9"
                                                val="113"
                                                barHeight="147.01299999999998"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1939"
                                                d="M 792.552019557442 256.20099999999996 L 792.552019557442 113.285 C 792.552019557442 111.285 794.552019557442 109.285 796.552019557442 109.285 L 825.9113740146952 109.285 C 827.9113740146952 109.285 829.9113740146952 111.285 829.9113740146952 113.285 L 829.9113740146952 256.20099999999996 C 829.9113740146952 258.20099999999996 827.9113740146952 260.20099999999996 825.9113740146952 260.20099999999996 L 796.552019557442 260.20099999999996 C 794.552019557442 260.20099999999996 792.552019557442 258.20099999999996 792.552019557442 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 792.552019557442 256.20099999999996 L 792.552019557442 113.285 C 792.552019557442 111.285 794.552019557442 109.285 796.552019557442 109.285 L 825.9113740146952 109.285 C 827.9113740146952 109.285 829.9113740146952 111.285 829.9113740146952 113.285 L 829.9113740146952 256.20099999999996 C 829.9113740146952 258.20099999999996 827.9113740146952 260.20099999999996 825.9113740146952 260.20099999999996 L 796.552019557442 260.20099999999996 C 794.552019557442 260.20099999999996 792.552019557442 258.20099999999996 792.552019557442 256.20099999999996 Z "
                                                pathFrom="M 792.552019557442 260.20099999999996 L 792.552019557442 260.20099999999996 L 829.9113740146952 260.20099999999996 L 829.9113740146952 260.20099999999996 L 829.9113740146952 260.20099999999996 L 829.9113740146952 260.20099999999996 L 829.9113740146952 260.20099999999996 L 792.552019557442 260.20099999999996 Z"
                                                cy="109.28399999999999"
                                                cx="829.9113740146952"
                                                j="10"
                                                val="116"
                                                barHeight="150.916"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <path
                                                id="SvgjsPath1945"
                                                d="M 872.6077791086988 256.20099999999996 L 872.6077791086988 102.87700000000001 C 872.6077791086988 100.87700000000001 874.6077791086988 98.87700000000001 876.6077791086988 98.87700000000001 L 905.9671335659519 98.87700000000001 C 907.9671335659519 98.87700000000001 909.9671335659519 100.87700000000001 909.9671335659519 102.87700000000001 L 909.9671335659519 256.20099999999996 C 909.9671335659519 258.20099999999996 907.9671335659519 260.20099999999996 905.9671335659519 260.20099999999996 L 876.6077791086988 260.20099999999996 C 874.6077791086988 260.20099999999996 872.6077791086988 258.20099999999996 872.6077791086988 256.20099999999996 Z "
                                                fill="rgba(101,113,255,0.9)"
                                                fill-opacity="1"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="0"
                                                stroke-dasharray="0"
                                                class="apexcharts-bar-area"
                                                index="0"
                                                clip-path="url(#gridRectMaskguh3s5el)"
                                                pathTo="M 872.6077791086988 256.20099999999996 L 872.6077791086988 102.87700000000001 C 872.6077791086988 100.87700000000001 874.6077791086988 98.87700000000001 876.6077791086988 98.87700000000001 L 905.9671335659519 98.87700000000001 C 907.9671335659519 98.87700000000001 909.9671335659519 100.87700000000001 909.9671335659519 102.87700000000001 L 909.9671335659519 256.20099999999996 C 909.9671335659519 258.20099999999996 907.9671335659519 260.20099999999996 905.9671335659519 260.20099999999996 L 876.6077791086988 260.20099999999996 C 874.6077791086988 260.20099999999996 872.6077791086988 258.20099999999996 872.6077791086988 256.20099999999996 Z "
                                                pathFrom="M 872.6077791086988 260.20099999999996 L 872.6077791086988 260.20099999999996 L 909.9671335659519 260.20099999999996 L 909.9671335659519 260.20099999999996 L 909.9671335659519 260.20099999999996 L 909.9671335659519 260.20099999999996 L 909.9671335659519 260.20099999999996 L 872.6077791086988 260.20099999999996 Z"
                                                cy="98.876"
                                                cx="909.9671335659519"
                                                j="11"
                                                val="124"
                                                barHeight="161.32399999999998"
                                                barWidth="37.35935445725316"
                                            ></path>
                                            <g id="SvgjsG1877" class="apexcharts-bar-goals-markers" style="pointer-events: none;">
                                                <g id="SvgjsG1878" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1884" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1890" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1896" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1902" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1908" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1914" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1920" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1926" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1932" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1938" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1944" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1876" class="apexcharts-datalabels" data:realIndex="0">
                                            <g id="SvgjsG1881" class="apexcharts-data-labels" transform="rotate(-90, 3.5, 89.44800000000001)">
                                                <text
                                                    id="SvgjsText1883"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="3.5"
                                                    y="89.44800000000001"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="3.5"
                                                    cy="89.44800000000001"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    152
                                                </text>
                                            </g>
                                            <g id="SvgjsG1887" class="apexcharts-data-labels" transform="rotate(-90, 86.22428486963202, 145.391)">
                                                <text
                                                    id="SvgjsText1889"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="86.22428486963202"
                                                    y="145.391"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="86.22428486963202"
                                                    cy="145.391"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    109
                                                </text>
                                            </g>
                                            <g id="SvgjsG1893" class="apexcharts-data-labels" transform="rotate(-90, 160.9429937841383, 166.207)">
                                                <text
                                                    id="SvgjsText1895"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="160.9429937841383"
                                                    y="166.207"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="160.9429937841383"
                                                    cy="166.207"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    93
                                                </text>
                                            </g>
                                            <g id="SvgjsG1899" class="apexcharts-data-labels" transform="rotate(-90, 243.66727865377032, 140.187)">
                                                <text
                                                    id="SvgjsText1901"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="243.66727865377032"
                                                    y="140.187"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="243.66727865377032"
                                                    cy="140.187"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    113
                                                </text>
                                            </g>
                                            <g id="SvgjsG1905" class="apexcharts-data-labels" transform="rotate(-90, 323.7230382050271, 123.274)">
                                                <text
                                                    id="SvgjsText1907"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="323.7230382050271"
                                                    y="123.274"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="323.7230382050271"
                                                    cy="123.274"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    126
                                                </text>
                                            </g>
                                            <g id="SvgjsG1911" class="apexcharts-data-labels" transform="rotate(-90, 406.4473230746591, 77.739)">
                                                <text
                                                    id="SvgjsText1913"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="406.4473230746591"
                                                    y="77.739"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="406.4473230746591"
                                                    cy="77.739"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    161
                                                </text>
                                            </g>
                                            <g id="SvgjsG1917" class="apexcharts-data-labels" transform="rotate(-90, 486.50308262591585, 42.61200000000002)">
                                                <text
                                                    id="SvgjsText1919"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="486.50308262591585"
                                                    y="42.61200000000002"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="486.50308262591585"
                                                    cy="42.61200000000002"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    188
                                                </text>
                                            </g>
                                            <g id="SvgjsG1923" class="apexcharts-data-labels" transform="rotate(-90, 569.2273674955478, 101.15700000000001)">
                                                <text
                                                    id="SvgjsText1925"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="569.2273674955478"
                                                    y="101.15700000000001"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="569.2273674955478"
                                                    cy="101.15700000000001"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    143
                                                </text>
                                            </g>
                                            <g id="SvgjsG1929" class="apexcharts-data-labels" transform="rotate(-90, 651.9516523651798, 154.498)">
                                                <text
                                                    id="SvgjsText1931"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="651.9516523651798"
                                                    y="154.498"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="651.9516523651798"
                                                    cy="154.498"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    102
                                                </text>
                                            </g>
                                            <g id="SvgjsG1935" class="apexcharts-data-labels" transform="rotate(-90, 732.0074119164366, 140.187)">
                                                <text
                                                    id="SvgjsText1937"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="732.0074119164366"
                                                    y="140.187"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="732.0074119164366"
                                                    cy="140.187"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    113
                                                </text>
                                            </g>
                                            <g id="SvgjsG1941" class="apexcharts-data-labels" transform="rotate(-90, 814.7316967860686, 136.284)">
                                                <text
                                                    id="SvgjsText1943"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="814.7316967860686"
                                                    y="136.284"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="814.7316967860686"
                                                    cy="136.284"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    116
                                                </text>
                                            </g>
                                            <g id="SvgjsG1947" class="apexcharts-data-labels" transform="rotate(-90, 894.7874563373254, 125.876)">
                                                <text
                                                    id="SvgjsText1949"
                                                    font-family="'Roboto', Helvetica, sans-serif"
                                                    x="894.7874563373254"
                                                    y="125.876"
                                                    text-anchor="start"
                                                    dominant-baseline="auto"
                                                    font-size="10px"
                                                    font-weight="600"
                                                    fill="#ffffff"
                                                    class="apexcharts-datalabel"
                                                    cx="894.7874563373254"
                                                    cy="125.876"
                                                    style="font-family: Roboto, Helvetica, sans-serif;"
                                                >
                                                    124
                                                </text>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1953" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1977" x1="-31.676584331337324" y1="0" x2="922.9640406686626" y2="0" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line
                                            id="SvgjsLine1981"
                                            x1="-31.676584331337324"
                                            y1="260.2"
                                            x2="922.9640406686626"
                                            y2="260.2"
                                            stroke="rgba(77, 138, 240, .15)"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                            class="apexcharts-gridline"
                                        ></line>
                                        <line id="SvgjsLine2022" x1="-31.676584331337324" y1="261.2" x2="922.9640406686628" y2="261.2" stroke="rgba(77, 138, 240, .15)" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                    </g>
                                    <line id="SvgjsLine2042" x1="-31.676584331337324" y1="0" x2="922.9640406686626" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2043" x1="-31.676584331337324" y1="0" x2="922.9640406686626" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2044" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2045" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2046" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect2047" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect2048" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                </g>
                                <g id="SvgjsG2023" class="apexcharts-yaxis" rel="0" transform="translate(22.359375, 0)">
                                    <g id="SvgjsG2024" class="apexcharts-yaxis-texts-g">
                                        <text
                                            id="SvgjsText2026"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="31.4"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan2027">200</tspan>
                                            <title>200</title>
                                        </text>
                                        <text
                                            id="SvgjsText2029"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="96.45"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan2030">150</tspan>
                                            <title>150</title>
                                        </text>
                                        <text
                                            id="SvgjsText2032"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="161.5"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan2033">100</tspan>
                                            <title>100</title>
                                        </text>
                                        <text
                                            id="SvgjsText2035"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="226.54999999999998"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan2036">50</tspan>
                                            <title>50</title>
                                        </text>
                                        <text
                                            id="SvgjsText2038"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="20"
                                            y="291.59999999999997"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="400"
                                            fill="#000000"
                                            class="apexcharts-text apexcharts-yaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan2039">0</tspan>
                                            <title>0</title>
                                        </text>
                                    </g>
                                    <g id="SvgjsG2040" class="apexcharts-yaxis-title">
                                        <text
                                            id="SvgjsText2041"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="36.60595703125"
                                            y="160.1"
                                            text-anchor="end"
                                            dominant-baseline="auto"
                                            font-size="11px"
                                            font-weight="900"
                                            fill="#7987a1"
                                            class="apexcharts-text apexcharts-yaxis-title-text"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                            transform="rotate(-90 -13.0849609375 155.60000610351562)"
                                        >
                                            Number of Sales
                                        </text>
                                    </g>
                                </g>
                                <g id="SvgjsG1848" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 159px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(101, 113, 255);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Cloud storage</h6>
                        <div class="dropdown mb-2">
                            <button class="btn btn-link p-0" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px"
                                >
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-eye icon-sm me-2"
                                    >
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span class="">View</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-edit-2 icon-sm me-2"
                                    >
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg>
                                    <span class="">Edit</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-trash icon-sm me-2"
                                    >
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    <span class="">Delete</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-printer icon-sm me-2"
                                    >
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                    <span class="">Print</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-download icon-sm me-2"
                                    >
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                    <span class="">Download</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="storageChart" style="min-height: 238.7px;">
                        <div id="apexchartsts2keypx" class="apexcharts-canvas apexchartsts2keypx apexcharts-theme-light" style="width: 472px; height: 238.7px;">
                            <svg
                                id="SvgjsSvg2049"
                                width="472"
                                height="238.70000000000002"
                                xmlns="http://www.w3.org/2000/svg"
                                version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg"
                                xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)"
                                style="background: transparent;"
                            >
                                <g id="SvgjsG2051" class="apexcharts-inner apexcharts-graphical" transform="translate(119, 0)">
                                    <defs id="SvgjsDefs2050">
                                        <clipPath id="gridRectMaskts2keypx">
                                            <rect id="SvgjsRect2053" width="242" height="260" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskts2keypx"></clipPath>
                                        <clipPath id="nonForecastMaskts2keypx"></clipPath>
                                        <clipPath id="gridRectMarkerMaskts2keypx">
                                            <rect id="SvgjsRect2054" width="240" height="262" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG2055" class="apexcharts-radialbar">
                                        <g id="SvgjsG2056">
                                            <g id="SvgjsG2057" class="apexcharts-tracks">
                                                <g id="SvgjsG2058" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                    <path
                                                        id="apexcharts-radialbarTrack-0"
                                                        d="M 118 30.93048780487804 A 87.06951219512196 87.06951219512196 0 1 1 117.98480350341804 30.93048913102254"
                                                        fill="none"
                                                        fill-opacity="1"
                                                        stroke="rgba(233,236,239,1)"
                                                        stroke-opacity="1"
                                                        stroke-linecap="round"
                                                        stroke-width="11.36829268292683"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area"
                                                        data:pathOrig="M 118 30.93048780487804 A 87.06951219512196 87.06951219512196 0 1 1 117.98480350341804 30.93048913102254"
                                                    ></path>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2060">
                                                <g id="SvgjsG2065" class="apexcharts-series apexcharts-radial-series" seriesName="StoragexUsed" rel="1" data:realIndex="0">
                                                    <path
                                                        id="SvgjsPath2066"
                                                        d="M 118 30.93048780487804 A 87.06951219512196 87.06951219512196 0 1 1 41.84728874313238 160.2121371423509"
                                                        fill="none"
                                                        fill-opacity="1"
                                                        stroke="rgba(101,113,255,1)"
                                                        stroke-opacity="1"
                                                        stroke-linecap="round"
                                                        stroke-width="11.368292682926832"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                        data:angle="241"
                                                        data:value="67"
                                                        index="0"
                                                        j="0"
                                                        data:pathOrig="M 118 30.93048780487804 A 87.06951219512196 87.06951219512196 0 1 1 41.84728874313238 160.2121371423509"
                                                    ></path>
                                                </g>
                                                <circle id="SvgjsCircle2061" r="66.38536585365854" cx="118" cy="118" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                <g id="SvgjsG2062" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                    <text
                                                        id="SvgjsText2063"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="118"
                                                        y="107"
                                                        text-anchor="middle"
                                                        dominant-baseline="auto"
                                                        font-size="13px"
                                                        font-weight="600"
                                                        fill="#7987a1"
                                                        class="apexcharts-text apexcharts-datalabel-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                    >
                                                        Storage Used
                                                    </text>
                                                    <text
                                                        id="SvgjsText2064"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="118"
                                                        y="150"
                                                        text-anchor="middle"
                                                        dominant-baseline="auto"
                                                        font-size="30px"
                                                        font-weight="400"
                                                        fill="#000000"
                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                    >
                                                        67%
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine2067" x1="0" y1="0" x2="236" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2068" x1="0" y1="0" x2="236" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2052" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 d-flex justify-content-end">
                            <div>
                                <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Total storage <span class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                                <h5 class="fw-bolder mb-0 text-end">8TB</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span class="p-1 me-1 rounded-circle bg-primary"></span> Used storage</label>
                                <h5 class="fw-bolder mb-0">~5TB</h5>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary">Upgrade storage</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Inbox</h6>
                        <div class="dropdown mb-2">
                            <button class="btn btn-link p-0" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px"
                                >
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-eye icon-sm me-2"
                                    >
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span class="">View</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-edit-2 icon-sm me-2"
                                    >
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg>
                                    <span class="">Edit</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-trash icon-sm me-2"
                                    >
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    <span class="">Delete</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-printer icon-sm me-2"
                                    >
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                    <span class="">Print</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-download icon-sm me-2"
                                    >
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                    <span class="">Download</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
                            <div class="me-3">
                                <img src="https://www.nobleui.com/laravel/template/demo1/assets/images/faces/face2.jpg" class="rounded-circle wd-35" alt="user" />
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">Leonardo Payne</h6>
                                    <p class="text-muted tx-12">12.30 PM</p>
                                </div>
                                <p class="text-muted tx-13">Hey! there I'm available...</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://www.nobleui.com/laravel/template/demo1/assets/images/faces/face3.jpg" class="rounded-circle wd-35" alt="user" />
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">Carl Henson</h6>
                                    <p class="text-muted tx-12">02.14 AM</p>
                                </div>
                                <p class="text-muted tx-13">I've finished it! See you so..</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://www.nobleui.com/laravel/template/demo1/assets/images/faces/face4.jpg" class="rounded-circle wd-35" alt="user" />
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">Jensen Combs</h6>
                                    <p class="text-muted tx-12">08.22 PM</p>
                                </div>
                                <p class="text-muted tx-13">This template is awesome!</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://www.nobleui.com/laravel/template/demo1/assets/images/faces/face5.jpg" class="rounded-circle wd-35" alt="user" />
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">Amiah Burton</h6>
                                    <p class="text-muted tx-12">05.49 AM</p>
                                </div>
                                <p class="text-muted tx-13">Nice to meet you</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://www.nobleui.com/laravel/template/demo1/assets/images/faces/face6.jpg" class="rounded-circle wd-35" alt="user" />
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-normal text-body mb-1">Yaretzi Mayo</h6>
                                    <p class="text-muted tx-12">01.19 AM</p>
                                </div>
                                <p class="text-muted tx-13">Hey! there I'm available...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Projects</h6>
                        <div class="dropdown mb-2">
                            <button class="btn btn-link p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-horizontal icon-lg text-muted pb-3px"
                                >
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-eye icon-sm me-2"
                                    >
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span class="">View</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-edit-2 icon-sm me-2"
                                    >
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg>
                                    <span class="">Edit</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-trash icon-sm me-2"
                                    >
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    <span class="">Delete</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-printer icon-sm me-2"
                                    >
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                    <span class="">Print</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-download icon-sm me-2"
                                    >
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                    <span class="">Download</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="pt-0">#</th>
                                    <th class="pt-0">Project Name</th>
                                    <th class="pt-0">Start Date</th>
                                    <th class="pt-0">Due Date</th>
                                    <th class="pt-0">Status</th>
                                    <th class="pt-0">Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>NobleUI jQuery</td>
                                    <td>01/01/2023</td>
                                    <td>26/04/2023</td>
                                    <td><span class="badge bg-danger">Released</span></td>
                                    <td>Leonardo Payne</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>NobleUI Angular</td>
                                    <td>01/01/2023</td>
                                    <td>26/04/2023</td>
                                    <td><span class="badge bg-success">Review</span></td>
                                    <td>Carl Henson</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>NobleUI ReactJs</td>
                                    <td>01/05/2023</td>
                                    <td>10/09/2023</td>
                                    <td><span class="badge bg-info">Pending</span></td>
                                    <td>Jensen Combs</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>NobleUI VueJs</td>
                                    <td>01/01/2023</td>
                                    <td>31/11/2023</td>
                                    <td><span class="badge bg-warning">Work in Progress</span></td>
                                    <td>Amiah Burton</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>NobleUI Laravel</td>
                                    <td>01/01/2023</td>
                                    <td>31/12/2023</td>
                                    <td><span class="badge bg-danger">Coming soon</span></td>
                                    <td>Yaretzi Mayo</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>NobleUI NodeJs</td>
                                    <td>01/01/2023</td>
                                    <td>31/12/2023</td>
                                    <td><span class="badge bg-primary">Coming soon</span></td>
                                    <td>Carl Henson</td>
                                </tr>
                                <tr>
                                    <td class="border-bottom">3</td>
                                    <td class="border-bottom">NobleUI EmberJs</td>
                                    <td class="border-bottom">01/05/2023</td>
                                    <td class="border-bottom">10/11/2023</td>
                                    <td class="border-bottom"><span class="badge bg-info">Pending</span></td>
                                    <td class="border-bottom">Jensen Combs</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
</div>

@endsection
