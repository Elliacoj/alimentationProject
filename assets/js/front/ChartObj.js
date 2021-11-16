import Chart from "chart.js/auto";
class ChartObj {
    /**
     * Constructor
     */
    constructor() {
    }

    /**
     * Create a chart
     */
    chartView() {
        let ctx = document.getElementById('tableStat');
        if(ctx) {
            const myChart = new Chart(ctx, {
                type: 'scatter',
                data: {

                    datasets: [
                        {
                            label: "Masse graisse (%)",
                            data: [
                                {
                                    x: 1,
                                    y: 1
                                },
                                {
                                    x: 3,
                                    y: 7
                                },
                                {
                                    x: 6,
                                    y: 5
                                }
                            ],
                            borderColor: 'black',
                            borderWidth: 1,
                            pointBackgroundColor: ['#000'],
                            pointBorderColor: ['#000'],
                            pointRadius: 5,
                            pointHoverRadius: 5,
                            fill: false,
                            tension: 0,
                            showLine: true
                        },
                        {
                            label: "IMC",
                            data: [
                                {
                                    x: 3.5,
                                    y: 4.5
                                },
                                {
                                    x: 4.5,
                                    y: 6.5
                                }
                            ],
                            borderColor: 'orange',
                            borderWidth: 1,
                            pointBackgroundColor: 'orange',
                            pointBorderColor: 'darkorange',
                            pointRadius: 5,
                            pointHoverRadius: 5,
                            fill: false,
                            tension: 0,
                            showLine: true
                        }
                    ]
                },
                options: {
                    legend: false,
                    tooltips: false,

                }
            });
        }
    }
}
export {ChartObj};
