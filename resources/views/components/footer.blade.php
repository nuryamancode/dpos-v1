export default {
name: 'Dashboard',
components: { Layout, Breadcumb },
mounted() {
    this.createChartTwo('incomeExpense', '#487FFF', '#FF9F29'); // Add chart here
},
methods: {
    createChartTwo(chartId, color1, color2) {
        var options = {
            series: [{
                name: "series1",
                data: [48, 35, 50, 32, 48, 40, 55, 50, 60]
            }, {
                name: "series2",
                data: [12, 20, 15, 26, 22, 30, 25, 35, 25]
            }],
            legend: {
                show: false
            },
            chart: {
                type: "area",
                width: "100%",
                height: 270,
                toolbar: {
                    show: false
                },
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: "smooth",
                width: 3,
                colors: [color1, color2],
                lineCap: "round"
            },
            grid: {
                show: true,
                borderColor: "#D1D5DB",
                strokeDashArray: 1,
                position: "back",
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: true
                    }
                },
                padding: {
                    top: -20,
                    right: 0,
                    bottom: -10,
                    left: 0
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
                    size: 10
                }
            },
            xaxis: {
                labels: {
                    show: false
                },
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                tooltip: {
                    enabled: false
                },
                labels: {
                    formatter: function(value) {
                        return value;
                    },
                    style: {
                        fontSize: "14px"
                    }
                }
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return "$" + value + "k";
                    },
                    style: {
                        fontSize: "14px"
                    }
                }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$" + val + "k";
                    }
                }
            },
            responsive: [{
                breakpoint: 1400,
                options: {
                    chart: {
                        height: 230
                    }
                }
            }, {
                breakpoint: 1200,
                options: {
                    chart: {
                        height: 230
                    }
                }
            }, {
                breakpoint: 992,
                options: {
                    chart: {
                        height: 230
                    }
                }
            }]
        };
        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }
}
}