Highcharts.setOptions({
    lang: {
        decimalPoint: '.',
        thousandsSep: ','
    }
});
var hasCalledPointsWrap = false;

function percentage(num, per) {
    var result = num * (per / 100);
    return Math.round(result);
}


function resizeChart(chartContainerElement) {
    try {
        $container = $(chartContainerElement); // context container
        chart = $container.highcharts(); // cast from JQuery to highcharts obj
        if (chart)
            chart.setSize($container.width(), chart.chartHeight, doAnimation = true); // adjust chart size with animation transition
    } catch (err) {
        // do nothing
    }
}
function get_color_shades(start) {
    var colors = [],
        base = Highcharts.getOptions().colors[start],
        i;

    for (i = 0; i < 100; i += 1) {
        colors.push(Highcharts.Color(base).brighten((i) / 100).get());
    }
    return colors;
}

function build_superimposed_column_chart_dual_axis(container_id, title, y1_title, y2_title, xaxisCategory, parent_data, parent_data_name, child_data, child_data_name, percent_data, percent_data_name, useLine = true, xaxisTitle, height, drill_down_series, drilldown_event, drillup_event) {


    var series = [];

    var hasThousand = false;

    if (parent_data.length > 0) {
        series.push({
            name: parent_data_name,
            type: 'column',
            data: parent_data,
            //pointPadding: 0.25,
            //groupPadding: 0.5,
            //pointWidth: 60
            //pointPadding: 0
            yAxis: 0,
            //events: {
            //    afterAnimate: function (event) {
            //        resizeChart(this.chart.container.parentElement);
            //        this.chart.reflow();
            //    }
            //}
            color: '#E85137'
        });

        hasThousand = hasThousand || parent_data.some(x => Math.abs(x.y || x) >= 1000);
    }

    if ((child_data || []).length > 0) {
        series.push({
            name: child_data_name,
            type: 'column',
            data: child_data,
            //groupPadding: 0.5,
            //pointWidth: 30
            pointPadding: 0.3,
            color: '#D29C26'
        });

        hasThousand = hasThousand || child_data.some(x => Math.abs(x.y || x) >= 1000);
    }

    var yAxis = [{ // Secondary yAxis
        title: {
            text: y1_title + (hasThousand ? " (thousands)" : ""),
            rotation: 270
        },
        labels: {
            formatter: function () {
                return hasThousand ? parseInt(this.value) / 1000 : this.value;
            }
            //format: '{value}'
        },
        //max: Math.max.apply(Math, parent_data.map(x => x.y)),
        min: 0
    }];

    if ((percent_data || []).length > 0) {
        var percentSeries = {
            name: percent_data_name,
            type: 'spline', //useLine ? 'spline' : 'scatter',
            data: percent_data,
            yAxis: 1,
            tooltip: {
                pointFormat: '<b>{point.y:.1f}%</b>'
            },
            marker: {
                radius: 5,
                symbol: "circle"
            },
            color: '#376555'
        };

        if (!useLine) {
            percentSeries.lineWidth = 0;
            percentSeries.states = {
                hover: {
                    lineWidth: 0,
                    lineWidthPlus: 0,
                    marker: {
                        radius: 5
                    }
                }
            };
        }

        series.push(percentSeries);

        //add its axis
        yAxis.push({ // Primary yAxis
            labels: {
                format: '{value}%'
            },
            title: {
                text: y2_title
            },
            opposite: true,
            max: 100,
            min: 0
        });
    }

    Highcharts.chart(container_id, {
        chart: {
            zoomType: 'xy',
            height: height,
            events: {
                drilldown: function (e) {
                    if (drilldown_event)
                        drilldown_event.apply(this, [e]);

                    resizeChart(this.container.parentElement);
                    this.reflow();
                },
                drillup: function (e) {
                    if (drillup_event)
                        drillup_event.apply(this, [e]);

                    resizeChart(this.container.parentElement);
                    this.reflow();
                }
            }
        },
        title: {
            text: title,
            style: {
                fontSize: '12px'
            }
        },
        xAxis: [{
            type: "category",
            //categories: xaxisCategory,
            //crosshair: true,
            title: {
                text: xaxisTitle
            }
        }],
        yAxis: yAxis,
        tooltip: {
            shared: true
        },
        colors: ['#E85137', '#D29C26', '#376555'],
        legend: {
            enabled: true
        },
        series: series,
        plotOptions: {
            column: {
                grouping: false
            }
        },
        drilldown: {
            series: drill_down_series
        },
        exporting: { enabled: false }
    });
}

function downloadCsv(containerId) {
    var chart = $('#' + containerId).highcharts();
    console.log(chart);
    if (chart != null) {
        chart.exportChartLocal({ type: 'text/csv' });
    }
}

function downloadPng(containerId) {
    var chart = $('#' + containerId).highcharts();
    if (chart != null) {
        chart.exportChartLocal({ type: 'image/png' })
    }
}

function downloadPdf(containerId) {
    var chart = $('#' + containerId).highcharts();
    if (chart != null) {
        chart.exportChartLocal({ type: 'application/pdf' })
    }
}
