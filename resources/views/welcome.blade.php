<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.23/moment-timezone-with-data-2012-2022.min.js">
    </script>
    <title>{{ setting('site.title') }}</title>
    <style>
        .bg-success {
            background: #60FF9F !important;
            color: black;
        }

        img::before {
            background: #06FFF0
        }

        .bg-danger {
            /* background: #F00090 !important; */
        }

        .card-chart {
            /* background: #1C1C1C85; */
            /* Rectangle 109 */

            background: #1c1c1c8c;
            mix-blend-mode: normal;
            /* opacity: 0.6; */
            backdrop-filter: blur(20px);
            /* Note: backdrop-filter has minimal browser support */
            border-radius: 16px;

        }

        body {
            background: #080808;
        }



        .v5_3604 {
            width: 380px;
            height: 446px;
            background: linear-gradient(rgba(112, 0, 255, 1), rgba(6, 255, 239, 1));
            opacity: 1;
            position: fixed;
            top: 0px;
            left: 363px;
            z-index: -1;
            border-radius: 50%;
            filter: blur(146.107px);
        }

        .v5_3606 {
            width: 245px;
            height: 320px;
            background: linear-gradient(rgba(3, 250, 117, 1), rgba(6, 255, 239, 1));
            opacity: 1;
            position: fixed;
            top: 189px;
            left: 314px;
            z-index: -1;
            border-radius: 50%;
            filter: blur(146.107px);
        }

        .eclipse_6 {
            /* Ellipse 6 */

            position: fixed;
            width: 380.29px;
            height: 446.33px;
            left: 1623.31px;
            top: 510.11px;
            z-index: -1;

            background: linear-gradient(261.63deg, #7000FF 4.87%, #06FFF0 87.02%);
            filter: blur(146.107px);
            transform: rotate(173.72deg);

        }

        .eclipse_7 {
            /* Ellipse 6 */

            position: fixed;
            width: 380.29px;
            height: 446.33px;
            left: 300.71px;
            top: 700.19px;
            z-index: -1;
            background: linear-gradient(200.63deg, #7000FF 4.87%, #06FFF0 87.02%);
            filter: blur(146.107px);
            transform: rotate(173.72deg);

        }

    </style>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->
    <div class="container">

        <div class="v5_3604"></div>
        <div class="v5_3606"></div>
        <div class="eclipse_6"></div>
        <div class="eclipse_7"></div>
        <div>
            <nav class="navbar text-light">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        {{ setting('site.title') }}
                    </div>
                </div>
            </nav>
        </div>
        <div class="row p-2">
            <div class="col-9">
                <div class="card card-chart">
                    <div class="car-title">
                        <div class="row text-light p-4">
                            <div class="col-4">
                                Time Indonesia : <span id="time_span"></span>
                            </div>
                            <div class="col-4">
                                Time US : <span id="time_span_us"></span>
                            </div>
                            <div class="col-4">
                                Time EU : <span id="time_span_eu"></span>
                            </div>
                        </div>
                        <div class="row text-light p-4">
                            <h3>Portfolios Performance</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart">
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="{{ setting('site.ads_bottom_url') }}">
                        <img src="storage/{{ setting('site.ads_bottom_image') }}" alt="..." class="img-fluid"
                            style="border-radius: 20px">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="info ">
                    <div class="card card-chart text-light">
                        <div class="card-body">
                            <span>Trend : <br><br></span>
                            <div class="pb-2">
                                <div class="card card-chart bg-danger">
                                    <div class="card-body">
                                        {!! setting('site.trend_warning_info') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card card-chart bg-success">
                                    <div class="card-body">
                                        {!! setting('site.trend_info') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <span>Correction : <br><br></span>
                            <div class="pb-2">
                                <div class="card card-chart bg-danger">
                                    <div class="card-body">
                                        {!! setting('site.cor_warn_info') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card card-chart bg-success">
                                    <div class="card-body">
                                        {!! setting('site.cor_info') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    <a href="{{ setting('site.ads_url_square') }}"><img
                            src="storage/{{ setting('site.ads_image_square') }}" alt="..." class="img-fluid"
                            style="border-radius: 20px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
    </script>

    <script>
        $(document).ready(function() {
            let seriesData = [];
            var requestOptions = {
                method: 'GET',
                redirect: 'follow'
            };

            fetch("https://api1.binance.com/api/v3/klines?symbol=BTCUSDT&interval=1h&limit=50", requestOptions)
                .then(response => response.text())
                .then(result => {
                    result = JSON.parse(result);
                    for (let i = 0; i < result.length; i++) {
                        var element = result[i];
                        seriesData.push({
                            x: new Date(element[0]),
                            y: [element[1], element[2], element[3], element[4]]
                        })
                    }
                })
                .catch(error => console.log('error', error));

            console.log('seriesData', seriesData)
            var options = {
                series: [{
                    data: seriesData
                }],
                chart: {
                    type: 'candlestick',
                    height: 500
                },
                xaxis: {
                    type: 'datetime',
                    labels: {
                        show: true,
                        rotate: -45,
                        rotateAlways: false,
                        hideOverlappingLabels: true,
                        showDuplicates: false,
                        trim: false,
                        minHeight: undefined,
                        maxHeight: 120,
                        style: {
                            colors: '#fff',
                            fontSize: '12px',
                            fontFamily: 'Helvetica, Arial, sans-serif',
                            fontWeight: 400,
                            cssClass: 'apexcharts-xaxis-label',
                        },
                        offsetX: 0,
                        offsetY: 0,
                        format: undefined,
                        formatter: undefined,
                        datetimeUTC: true,
                        datetimeFormatter: {
                            year: 'yyyy',
                            month: "MMM 'yy",
                            day: 'dd MMM',
                            hour: 'HH:mm',
                        },
                    },
                },
                yaxis: {
                    tooltip: {
                        enabled: true
                    },
                    labels: {
                        style: {
                            colors: '#fff',
                            fontSize: '12px',
                            fontFamily: 'Helvetica, Arial, sans-serif',
                            fontWeight: 400,
                            cssClass: 'apexcharts-xaxis-label',
                        }
                    },
                },
                title: {
                    text: undefined,
                    align: 'center',
                    margin: 10,
                    offsetX: 0,
                    offsetY: 0,
                    floating: false,
                    style: {
                        fontSize: '25px',
                        color: 'white'
                    },
                },
                plotOptions: {
                    candlestick: {
                        wick: {
                            useFillColor: true,
                        },
                        colors: {
                            upward: '#60FF9F',
                            downward: '#F00090'
                        },
                    },
                    bar: {
                        borderRadius: 10,
                        dataLabels: {
                            position: 'top', // top, center, bottom
                        },
                    }

                }
            };
            console.log(options);
            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
            console.log("ready!");
        });

        function updateTime() {
            var cTime = moment().zone("-08:00").format('LLLL');
            let get_Date = moment.tz(new Date(), 'Asia/Jakarta');
            let get_Date_us = moment.tz(new Date(), 'America/New_York');
            let get_Date_eu = moment.tz(new Date(), 'America/New_York');
            document.getElementById('time_span').innerHTML = get_Date.format('YYYY-MM-DD HH:mm:ss');
            document.getElementById('time_span_us').innerHTML = get_Date_us.format('YYYY-MM-DD HH:mm:ss');
            document.getElementById('time_span_eu').innerHTML = get_Date_eu.format('YYYY-MM-DD HH:mm:ss');
        }
        setInterval(updateTime, 1000);
        // setInterval(() => {
        //     let seriesData = [];
        //     var requestOptions = {
        //         method: 'GET',
        //         redirect: 'follow'
        //     };

        //     fetch("https://api1.binance.com/api/v3/klines?symbol=BTCUSDT&interval=1h&limit=100", requestOptions)
        //         .then(response => response.text())
        //         .then(result => {
        //             result = JSON.parse(result);
        //             for (let i = 0; i < result.length; i++) {
        //                 var element = result[i];
        //                 seriesData.push({
        //                     x: new Date(element[0]),
        //                     y: [element[1], element[2], element[3], element[4]]
        //                 })
        //             }
        //         })
        //         .catch(error => console.log('error', error));

        //     chart.updateSeries([{
        //         data: seriesData
        //     }]);
        // }, 1000 * 30);
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
