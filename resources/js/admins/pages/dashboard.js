/*========Dashboard=======*/

$(document).ready(function () {
    /*-------------ApexCharts - Charts Audiences Overview----------*/
    function generateDayWiseTimeSeries(baseval, count, yrange) {
        let i = 0;
        const series = [];
        while (i < count) {
            const x = baseval;
            const y =
                Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

            series.push([x, y]);
            baseval += 86400000;
            i++;
        }
        return series;
    }

    const optionAudiences = {
        series: [
            {
                name: 'South',
                data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 60
                })
            },
            {
                name: 'North',
                data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 20
                })
            },
            {
                name: 'Central',
                data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
                    min: 10,
                    max: 15
                })
            }
        ],
        chart: {
            type: 'area',
            height: 350,
            stacked: true,
            events: {
                selection: function (chart, e) {
                    console.log(new Date(e.xaxis.min))
                }
            },
        },
        colors: ['#008FFB', '#00E396', '#CED4DC'],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        fill: {
            type: 'gradient',
            gradient: {
                opacityFrom: 0.6,
                opacityTo: 0.8,
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left'
        },
        xaxis: {
            type: 'datetime'
        },
    };

    new ApexCharts(document.querySelector("#chartArea-Audiences"),optionAudiences).render();
});
