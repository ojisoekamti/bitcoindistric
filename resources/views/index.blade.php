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
        .container {
            max-width: 1364px;
        }

        .bg-success {
            background: #00FF00 !important;
            color: black;
            height: 60px;
        }

        img::before {
            background: #06FFF0
        }

        .bg-danger {
            background: #ff0000 !important;
            height: 60px;
        }

        .outline-success {
            background: #008000 !important;
            height: 60px;
        }

        .outline-danger {
            background: #a51b0b !important;
            height: 60px;
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
                    <div class="card-title">
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
                            <div class="clear">
                                <div class="btn-group">
                                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" id="market-show">
                                        BTCUSDT
                                    </button>
                                    <ul class="dropdown-menu" id="market">

                                    </ul>
                                </div>
                                <div class="float-end">
                                    <div class="btn-group interval" role="group" aria-label="First group">
                                        <button type="button" id="1m" class="btn btn-outline-secondary btn-sm active"
                                            value="1m">1m</button>
                                        <button type="button" id="5m" class="btn btn-outline-secondary btn-sm"
                                            value="5m">5m</button>
                                        <button type="button" id="15m" class="btn btn-outline-secondary btn-sm"
                                            value="15m">15m</button>
                                        <button type="button" id="30m" class="btn btn-outline-secondary btn-sm"
                                            value="30m">30m</button>
                                        <button type="button" id="1h" class="btn btn-outline-secondary btn-sm"
                                            value="1h">1h</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart">
                            &nbsp;
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <div class="card-body card-chart text-light">
                        <marquee class="warp-top">
                            <p>Lorem ipsum dolor Lorem ipsum dolor Lorem
                                ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!</p>
                        </marquee>
                        <marquee class="warp-bot">
                            <p>Lorem ipsum dolor Lorem ipsum dolor Lorem
                                ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!</p>
                        </marquee>
                    </div>
                    {{-- <a href="{{ setting('site.ads_bottom_url') }}">
                        <img src="storage/{{ setting('site.ads_bottom_image') }}" alt="..." class="img-fluid"
                            style="border-radius: 20px">
                    </a> --}}
                </div>
            </div>
            <div class="col-3">
                <div class="info ">
                    <div class="card card-chart text-light">
                        <div class="card-body">
                            <span>Trend : <br><br></span>
                            <div class="pb-2">
                                <div class="card card-chart bg-danger outline-danger" id="trend-warn-info">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card card-chart bg-success outline-success" id="trend-info">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <span>Correction : <br><br></span>
                            <div class="pb-2">
                                <div class="card card-chart bg-danger outline-danger" id="corr-warn-info">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card card-chart bg-success outline-success" id="corr-info">
                                    <div class="card-body">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        function playSound(url) {
            const audio = new Audio('https://bitcoindisctrict.id/ding.mp3');
            audio.play();
        }

        function noDelaySetInterval(func, interval) {
            func;
            return setInterval(function() {
                setVal($("#market-show").html(), $(".interval .active").attr('id'))
            }, interval);
        }

        function startSetInterval(market, interval) {
            noDelaySetInterval(setVal(market, interval), 1000 * 10);
        }

        $(".btn-group > .btn").click(function() {
            $(this).addClass("active").siblings().removeClass("active");

            setVal($("#market-show").html(), $(".interval .active").attr('id'))
        });



        function setVal(market, interval) {

            var options = {
                "url": "{{ Request::url() }}/api/getexchangeprop?id=" + market,
                "method": "GET",
                "timeout": 0,
            };

            $.ajax(options).done(function(options) {
                console.log('data', options)
                $('.warp-top').html(options.warp_top)
                $('.warp-bot').html(options.warp_bot)
                if (options.trend_war_info == 1) {
                    $('#trend-warn-info').removeClass("outline-danger")
                    playSound(url)
                } else {
                    $('#trend-warn-info').addClass("outline-danger")
                }

                if (options.trend_info == 1) {
                    $('#trend-info').removeClass("outline-success")
                    playSound(url)
                } else {
                    $('#trend-info').addClass("outline-success")
                }

                if (options.corr_warn_info == 1) {
                    $('#corr-warn-info').removeClass("outline-danger")
                    playSound(url)
                } else {
                    $('#corr-warn-info').addClass("outline-danger")
                }

                if (options.corr_info == 1) {
                    $('#corr-info').removeClass("outline-success")
                    playSound(url)
                } else {
                    $('#corr-info').addClass("outline-success")
                }


            })
            var url = 'https://api1.binance.com/api/v3/klines?symbol=' + market.trim() + '&interval=' + interval +
                '&limit=50';

            $.getJSON(url, function(response) {

                let seriesData = [];
                for (let i = 0; i < response.length; i++) {
                    var element = response[i];
                    seriesData.push({
                        x: moment.tz(new Date(element[0]), 'Asia/Jakarta'),
                        y: [element[1], element[2], element[3], element[4]]
                    })
                }

                chart.updateSeries([{
                    data: seriesData
                }])
            });

        }

        function changeEvent(e) {
            $("#market-show").html($(e).attr('id'))
            $(".dropdown-item").removeClass("active");
            $(e).addClass("active").siblings().removeClass("active");
            var options = {
                "url": "{{ Request::url() }}/api/getexchangeprop?id=" + $(e).attr('id'),
                "method": "GET",
                "timeout": 0,
            };

            $.ajax(options).done(function(options) {

                $('.warp-top').html(options.warp_top)
                $('.warp-bot').html(options.warp_bot)
                if (options.trend_war_info == 1) {
                    $('#trend-warn-info').removeClass("outline-danger")
                    playSound(url)
                } else {
                    $('#trend-warn-info').addClass("outline-danger")
                }

                if (options.trend_info == 1) {
                    $('#trend-info').removeClass("outline-success")
                    playSound(url)
                } else {
                    $('#trend-info').addClass("outline-success")
                }

                if (options.corr_warn_info == 1) {
                    $('#corr-warn-info').removeClass("outline-danger")
                    playSound(url)
                } else {
                    $('#corr-warn-info').addClass("outline-danger")
                }

                if (options.corr_info == 1) {
                    $('#corr-info').removeClass("outline-success")
                    playSound(url)
                } else {
                    $('#corr-info').addClass("outline-success")
                }
            })

            setVal($("#market-show").html(), $(".interval .active").attr('id'))
        }



        var settings = {
            "url": "{{ Request::url() }}/api/getexchangeprops",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(settings).done(function(response) {
            for (let i = 0; i < response.length; i++) {
                const element = response[i];
                if (element.market == "BTCUSDT") {
                    $("#market").append(
                        '<li><a class = "dropdown-item active" onclick="changeEvent(this)" href="#" id="' +
                        element.market +
                        '" > ' + element.market + ' </a></li> ');

                    $('.warp-top').html(options.warp_top)
                    $('.warp-bot').html(options.warp_bot)
                    if (options.trend_war_info == 1) {
                        $('#trend-warn-info').removeClass("outline-danger")
                        playSound(url)
                    } else {
                        $('#trend-warn-info').addClass("outline-danger")
                    }

                    if (options.trend_info == 1) {
                        $('#trend-info').removeClass("outline-success")
                        playSound(url)
                    } else {
                        $('#trend-info').addClass("outline-success")
                    }

                    if (options.corr_warn_info == 1) {
                        $('#corr-warn-info').removeClass("outline-danger")
                        playSound(url)
                    } else {
                        $('#corr-warn-info').addClass("outline-danger")
                    }

                    if (options.corr_info == 1) {
                        $('#corr-info').removeClass("outline-success")
                        playSound(url)
                    } else {
                        $('#corr-info').addClass("outline-success")
                    }
                    continue;
                }
                $("#market").append(
                    '<li><a class = "dropdown-item" href="#" onclick="changeEvent(this)" id="' + element
                    .market + '"  > ' +
                    element.market + ' </a></li> ');

            }
        });

        //document.getElementById("market-show").innerHTML = "whatever";
        var options = {
            series: [{
                data: []
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
        var dataexchange = [];

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        function updateTime() {
            let get_Date = moment.tz(new Date(), 'Asia/Jakarta');
            let get_Date_us = moment.tz(new Date(), 'America/New_York');
            let get_Date_eu = moment.tz(new Date(), "Europe/Berlin");
            document.getElementById('time_span').innerHTML = get_Date.format('YYYY-MM-DD HH:mm:ss');
            document.getElementById('time_span_us').innerHTML = get_Date_us.format('YYYY-MM-DD HH:mm:ss');
            document.getElementById('time_span_eu').innerHTML = get_Date_eu.format('YYYY-MM-DD HH:mm:ss');
        }

        var updateTimes = setInterval(function() {
            updateTime();
        }, 1000);
        startSetInterval($("#market-show").html(), $(".btn-group .active").attr('id'))
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script> --}}
</body>

</html>
