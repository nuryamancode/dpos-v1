<template lang="">
    <Head title="Dashboard" />
    <Breadcumb title="Dashboard" subTitle="" />
    <div class="row gy-4">
        <div class="col-12">
            <div class="card radius-12">
                <div class="card-body p-16">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div
                                class="px-20 py-16 shadow-none radius-8 h-100 gradient-deep-1 left-line line-bg-primary position-relative overflow-hidden"
                            >
                                <div
                                    class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8"
                                >
                                    <div>
                                        <span
                                            class="mb-2 fw-medium text-secondary-light text-md"
                                            >Gross Sales</span
                                        >
                                        <h6 class="fw-semibold mb-1">
                                            $40,000
                                        </h6>
                                    </div>
                                    <span
                                        class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12 bg-primary-100 text-primary-600"
                                    >
                                        <i class="ri-shopping-cart-fill"></i>
                                    </span>
                                </div>
                                <p class="text-sm mb-0">
                                    <span
                                        class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm"
                                        ><i class="ri-arrow-right-up-line"></i>
                                        80%</span
                                    >
                                    From last month
                                </p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div
                                class="px-20 py-16 shadow-none radius-8 h-100 gradient-deep-2 left-line line-bg-lilac position-relative overflow-hidden"
                            >
                                <div
                                    class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8"
                                >
                                    <div>
                                        <span
                                            class="mb-2 fw-medium text-secondary-light text-md"
                                            >Total Purchase</span
                                        >
                                        <h6 class="fw-semibold mb-1">
                                            $35,000
                                        </h6>
                                    </div>
                                    <span
                                        class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12 bg-lilac-200 text-lilac-600"
                                    >
                                        <i class="ri-handbag-fill"></i>
                                    </span>
                                </div>
                                <p class="text-sm mb-0">
                                    <span
                                        class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm"
                                        ><i class="ri-arrow-right-up-line"></i>
                                        95%</span
                                    >
                                    From last month
                                </p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div
                                class="px-20 py-16 shadow-none radius-8 h-100 gradient-deep-3 left-line line-bg-success position-relative overflow-hidden"
                            >
                                <div
                                    class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8"
                                >
                                    <div>
                                        <span
                                            class="mb-2 fw-medium text-secondary-light text-md"
                                            >Total Income</span
                                        >
                                        <h6 class="fw-semibold mb-1">
                                            $30,000
                                        </h6>
                                    </div>
                                    <span
                                        class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12 bg-success-200 text-success-600"
                                    >
                                        <i class="ri-shopping-cart-fill"></i>
                                    </span>
                                </div>
                                <p class="text-sm mb-0">
                                    <span
                                        class="bg-danger-focus px-1 rounded-2 fw-medium text-danger-main text-sm"
                                        ><i
                                            class="ri-arrow-right-down-line"
                                        ></i>
                                        30%</span
                                    >
                                    From last month
                                </p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div
                                class="px-20 py-16 shadow-none radius-8 h-100 gradient-deep-4 left-line line-bg-warning position-relative overflow-hidden"
                            >
                                <div
                                    class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8"
                                >
                                    <div>
                                        <span
                                            class="mb-2 fw-medium text-secondary-light text-md"
                                            >Total Expense</span
                                        >
                                        <h6 class="fw-semibold mb-1">$7,000</h6>
                                    </div>
                                    <span
                                        class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12 bg-warning-focus text-warning-600"
                                    >
                                        <i class="ri-shopping-cart-fill"></i>
                                    </span>
                                </div>
                                <p class="text-sm mb-0">
                                    <span
                                        class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm"
                                        ><i class="ri-arrow-right-up-line"></i>
                                        60%</span
                                    >
                                    From last month
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8">
            <div class="card">
                <div class="card-body p-24 mb-8">
                    <div
                        class="d-flex align-items-center flex-wrap gap-2 justify-content-between"
                    >
                        <h6 class="mb-2 fw-bold text-lg">
                            Income Vs Expense
                        </h6>
                        <select
                            class="form-select form-select-sm w-auto bg-base border text-secondary-light"
                        >
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                    </div>
                    <ul
                        class="d-flex flex-wrap align-items-center justify-content-center my-3 gap-24"
                    >
                        <li class="d-flex flex-column gap-1">
                            <div class="d-flex align-items-center gap-2">
                                <span
                                    class="w-8-px h-8-px rounded-pill bg-primary-600"
                                ></span>
                                <span
                                    class="text-secondary-light text-sm fw-semibold"
                                    >Income
                                </span>
                            </div>
                            <div class="d-flex align-items-center gap-8">
                                <h6 class="mb-0">$26,201</h6>
                                <span
                                    class="text-success-600 d-flex align-items-center gap-1 text-sm fw-bolder"
                                >
                                    10%
                                    <i class="ri-arrow-up-s-fill d-flex"></i>
                                </span>
                            </div>
                        </li>
                        <li class="d-flex flex-column gap-1">
                            <div class="d-flex align-items-center gap-2">
                                <span
                                    class="w-8-px h-8-px rounded-pill bg-warning-600"
                                ></span>
                                <span
                                    class="text-secondary-light text-sm fw-semibold"
                                    >Expenses
                                </span>
                            </div>
                            <div class="d-flex align-items-center gap-8">
                                <h6 class="mb-0">$18,120</h6>
                                <span
                                    class="text-danger-600 d-flex align-items-center gap-1 text-sm fw-bolder"
                                >
                                    10%
                                    <i class="ri-arrow-down-s-fill d-flex"></i>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <div
                        id="incomeExpense"
                        class="apexcharts-tooltip-style-1"
                    ></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6">
            <div class="card">
                <div class="card-header border-bottom">
                    <div
                        class="d-flex align-items-center flex-wrap gap-2 justify-content-between"
                    >
                        <h6 class="mb-2 fw-bold text-lg">Users</h6>
                        <a
                            href="javascript:void(0)"
                            class="text-primary-600 hover-text-primary d-flex align-items-center gap-1"
                        >
                            View All
                            <Icon
                                icon="solar:alt-arrow-right-linear"
                                class="icon"
                            />
                        </a>
                    </div>
                </div>
                <div class="card-body p-20">
                    <div class="d-flex flex-column" style="gap: 38px">
                        <div
                            class="d-flex align-items-center justify-content-between gap-3"
                        >
                            <div class="d-flex align-items-center">
                                <img
                                    src="https://wowdash.wowtheme7.com/demo/assets/images/user-grid/user-grid-img1.png"
                                    alt=""
                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden"
                                />
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0">Psychiatry</h6>
                                    <span
                                        class="text-sm text-secondary-light fw-normal"
                                        >Super Admin</span
                                    >
                                </div>
                            </div>
                            <span class="text-warning-main fw-medium text-md"
                                >Pending</span
                            >
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between gap-3"
                        >
                            <div class="d-flex align-items-center">
                                <img
                                    src="https://wowdash.wowtheme7.com/demo/assets/images/user-grid/user-grid-img1.png"
                                    alt=""
                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden"
                                />
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0">Orthopedic</h6>
                                    <span
                                        class="text-sm text-secondary-light fw-normal"
                                        >Admin</span
                                    >
                                </div>
                            </div>
                            <span class="text-success-main fw-medium text-md"
                                >Active</span
                            >
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between gap-3"
                        >
                            <div class="d-flex align-items-center">
                                <img
                                    src="/public/assets/images/user-grid/user-grid-img3.png"
                                    alt=""
                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden"
                                />
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0">Cardiology</h6>
                                    <span
                                        class="text-sm text-secondary-light fw-normal"
                                        >Manager</span
                                    >
                                </div>
                            </div>
                            <span class="text-success-main fw-medium text-md"
                                >Active</span
                            >
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between gap-3"
                        >
                            <div class="d-flex align-items-center">
                                <img
                                    src="/public/assets/images/user-grid/user-grid-img4.png"
                                    alt=""
                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden"
                                />
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0">Pediatrics</h6>
                                    <span
                                        class="text-sm text-secondary-light fw-normal"
                                        >Admin</span
                                    >
                                </div>
                            </div>
                            <span class="text-success-main fw-medium text-md"
                                >Active</span
                            >
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between gap-3"
                        >
                            <div class="d-flex align-items-center">
                                <img
                                    src="/public/assets/images/user-grid/user-grid-img1.png"
                                    alt=""
                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden"
                                />
                                <div class="flex-grow-1">
                                    <h6 class="text-md mb-0">Neurology</h6>
                                    <span
                                        class="text-sm text-secondary-light fw-normal"
                                        >Manager</span
                                    >
                                </div>
                            </div>
                            <span class="text-success-main fw-medium text-md"
                                >Active</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted } from "vue";
import Breadcumb from "../Components/Breadcumb.vue";

defineOptions({
    breadcumb: Breadcumb,
});
onMounted(() => {
    createChartTwo("incomeExpense", "#487FFF", "#FF9F29");
});

const createChartTwo = (chartId, color1, color2) => {
    const options = {
        series: [
            {
                name: "series1",
                data: [48, 35, 50, 32, 48, 40, 55, 50, 60],
            },
            {
                name: "series2",
                data: [12, 20, 15, 26, 22, 30, 25, 35, 25],
            },
        ],
        legend: {
            show: false,
        },
        chart: {
            type: "area",
            width: "100%",
            height: 270,
            toolbar: {
                show: false,
            },
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0,
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
            width: 3,
            colors: [color1, color2],
            lineCap: "round",
        },
        grid: {
            show: true,
            borderColor: "#D1D5DB",
            strokeDashArray: 1,
            position: "back",
            xaxis: {
                lines: {
                    show: false,
                },
            },
            yaxis: {
                lines: {
                    show: true,
                },
            },
            padding: {
                top: -20,
                right: 0,
                bottom: -10,
                left: 0,
            },
        },
        fill: {
            type: "gradient",
            colors: [color1, color2],
            gradient: {
                shade: "light",
                type: "vertical",
                shadeIntensity: 0.5,
                gradientToColors: [undefined, `${color2}00`],
                inverseColors: false,
                opacityFrom: [0.4, 0.6],
                opacityTo: [0.3, 0.3],
                stops: [0, 100],
            },
        },
        markers: {
            colors: [color1, color2],
            strokeWidth: 3,
            size: 0,
            hover: {
                size: 10,
            },
        },
        xaxis: {
            labels: {
                show: false,
            },
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            tooltip: {
                enabled: false,
            },
            labels: {
                formatter: function (value) {
                    return value;
                },
                style: {
                    fontSize: "14px",
                },
            },
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return "$" + value + "k";
                },
                style: {
                    fontSize: "14px",
                },
            },
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$" + val + "k";
                },
            },
        },
        responsive: [
            {
                breakpoint: 1400,
                options: {
                    chart: {
                        height: 230,
                    },
                },
            },
            {
                breakpoint: 1200,
                options: {
                    chart: {
                        height: 230,
                    },
                },
            },
            {
                breakpoint: 992,
                options: {
                    chart: {
                        height: 230,
                    },
                },
            },
        ],
    };
    const chart = new ApexCharts(
        document.querySelector(`#${chartId}`),
        options
    );
    chart.render();
};
</script>

<style scoped>
/* Add your custom styles */
</style>
