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
        console.log(moment)

        function getData() {

            var options = {
                series: [{
                    data: [{
                            x: new Date(1538778600000),
                            y: [6629.81, 6650.5, 6623.04, 6633.33]
                        },
                        {
                            x: new Date(1538780400000),
                            y: [6632.01, 6643.59, 6620, 6630.11]
                        },
                        {
                            x: new Date(1538782200000),
                            y: [6630.71, 6648.95, 6623.34, 6635.65]
                        },
                        {
                            x: new Date(1538784000000),
                            y: [6635.65, 6651, 6629.67, 6638.24]
                        },
                        {
                            x: new Date(1538785800000),
                            y: [6638.24, 6640, 6620, 6624.47]
                        },
                        {
                            x: new Date(1538787600000),
                            y: [6624.53, 6636.03, 6621.68, 6624.31]
                        },
                        {
                            x: new Date(1538789400000),
                            y: [6624.61, 6632.2, 6617, 6626.02]
                        },
                        {
                            x: new Date(1538791200000),
                            y: [6627, 6627.62, 6584.22, 6603.02]
                        },
                        {
                            x: new Date(1538793000000),
                            y: [6605, 6608.03, 6598.95, 6604.01]
                        },
                        {
                            x: new Date(1538794800000),
                            y: [6604.5, 6614.4, 6602.26, 6608.02]
                        },
                        {
                            x: new Date(1538796600000),
                            y: [6608.02, 6610.68, 6601.99, 6608.91]
                        },
                        {
                            x: new Date(1538798400000),
                            y: [6608.91, 6618.99, 6608.01, 6612]
                        },
                        {
                            x: new Date(1538800200000),
                            y: [6612, 6615.13, 6605.09, 6612]
                        },
                        {
                            x: new Date(1538802000000),
                            y: [6612, 6624.12, 6608.43, 6622.95]
                        },
                        {
                            x: new Date(1538803800000),
                            y: [6623.91, 6623.91, 6615, 6615.67]
                        },
                        {
                            x: new Date(1538805600000),
                            y: [6618.69, 6618.74, 6610, 6610.4]
                        },
                        {
                            x: new Date(1538807400000),
                            y: [6611, 6622.78, 6610.4, 6614.9]
                        },
                        {
                            x: new Date(1538809200000),
                            y: [6614.9, 6626.2, 6613.33, 6623.45]
                        },
                        {
                            x: new Date(1538811000000),
                            y: [6623.48, 6627, 6618.38, 6620.35]
                        },
                        {
                            x: new Date(1538812800000),
                            y: [6619.43, 6620.35, 6610.05, 6615.53]
                        },
                        {
                            x: new Date(1538814600000),
                            y: [6615.53, 6617.93, 6610, 6615.19]
                        },
                        {
                            x: new Date(1538816400000),
                            y: [6615.19, 6621.6, 6608.2, 6620]
                        },
                        {
                            x: new Date(1538818200000),
                            y: [6619.54, 6625.17, 6614.15, 6620]
                        },
                        {
                            x: new Date(1538820000000),
                            y: [6620.33, 6634.15, 6617.24, 6624.61]
                        },
                        {
                            x: new Date(1538821800000),
                            y: [6625.95, 6626, 6611.66, 6617.58]
                        },
                        {
                            x: new Date(1538823600000),
                            y: [6619, 6625.97, 6595.27, 6598.86]
                        },
                        {
                            x: new Date(1538825400000),
                            y: [6598.86, 6598.88, 6570, 6587.16]
                        },
                        {
                            x: new Date(1538827200000),
                            y: [6588.86, 6600, 6580, 6593.4]
                        },
                        {
                            x: new Date(1538829000000),
                            y: [6593.99, 6598.89, 6585, 6587.81]
                        },
                        {
                            x: new Date(1538830800000),
                            y: [6587.81, 6592.73, 6567.14, 6578]
                        },
                        {
                            x: new Date(1538832600000),
                            y: [6578.35, 6581.72, 6567.39, 6579]
                        },
                        {
                            x: new Date(1538834400000),
                            y: [6579.38, 6580.92, 6566.77, 6575.96]
                        },
                        {
                            x: new Date(1538836200000),
                            y: [6575.96, 6589, 6571.77, 6588.92]
                        },
                        {
                            x: new Date(1538838000000),
                            y: [6589, 6589, 6589, 6589]
                        }
                    ]
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

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
            var requestOptions = {
                method: 'GET',
                redirect: 'follow'
            };

            fetch("https://api1.binance.com/api/v3/klines?symbol=BTCUSDT&interval=1h", requestOptions)
                .then(response => response.text())
                .then(result => console.log(result))
                .catch(error => console.log('error', error));
        }


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
        setInterval(getData, 1000);
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
