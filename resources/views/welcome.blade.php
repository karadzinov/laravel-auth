<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="A complete development solution for your StartUp">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Title-->
    <title> Школа за PHP и Laravel</title>

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700%7COpen+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Raleway" rel="stylesheet">

    {{-- Styles --}}
    <link href="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}{{ mix('/css/all.css') }}" rel="stylesheet">

</head>

<body id="top">


<!--[if lt IE 8]>
<p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>
    to improve your experience.</p>
<![endif]-->

<header class="header header-shrink header-inverse fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="/" style="color: white;">
                PingDevs
            </a>

            <button class="navbar-toggler p-0" data-toggle="collapse" data-target="#navbarNav">
                <div class="hamburger hamburger--spin js-hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

            </div>

        </nav>
    </div> <!-- END container-->
</header> <!-- END header -->


<style>

    .main-bg {
        background-image: url('http://rosenbaumeye.com/wp-content/uploads/2015/06/purple-polygon.jpg');
    }

    .terminal {
        width: 100%;
        min-height: 450px;
        margin: 0 auto 30px;
        background-size: 100%;
    }

    @media screen and (max-width: 1500px) {
        .terminal {
            background-size: auto;
        }
    }

    .terminal .h1 {
        margin: 10px 0 20px;
        font-size: 12px;
        text-align: center;
        color: #fff;
        text-shadow: #000 0px 2px 4px;
    }

    .head-wrap {
        margin: 30px auto 30px;
        -webkit-transition: all 0.5s ease-out;
        -moz-transition: all 0.5s ease-out;
        -ms-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
        text-align: center;
    }

    .tagline {
        display: block;
        padding: 20px 0 0;
        opacity: 0;
        color: #fff;
        font-weight: 600;
        text-shadow: #000 0px 1px 3px;
        -webkit-transition: all 0.5s ease-out;
        -moz-transition: all 0.5s ease-out;
        -ms-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }

    .shift-text {
        margin: 80px auto 110px;
    }

    .shift-text .text-body {
        height: 120px;
    }

    .shift-text .tagline {
        opacity: 0.9;
    }

    /* text editor styles */
    .text-editor-wrap {
        display: block;
        margin: auto;
        max-width: 800px;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.8) 0px 20px 70px;
        clear: both;
        overflow: hidden;
        -webkit-transition: all 0.5s ease-out;
        -moz-transition: all 0.5s ease-out;
        -ms-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }

    .title-bar {
        padding: 5px 0;
        font-size: 0.75em;
        text-align: center;
        text-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px;
        background-color: #f8f8f8;
        background-image: -webkit-linear-gradient(top, #e8e8e8, #bcbbbc);
        background-image: -moz-linear-gradient(top, #e8e8e8, #bcbbbc);
        background-image: linear-gradient(top, #e8e8e8, #bcbbbc);
        box-shadow: inset rgba(255, 255, 255, 0.7) 0px 1px 1px;
        border-bottom: #6a6a6a 1px solid;
    }

    .text-body {
        height: 350px;
        background-color: rgba(0, 0, 0, 0.85);
        padding: 10px;
        color: #f0f0f0;
        text-shadow: #000 0px 1px 0px;
        line-height: 1.40em;
        font-weight: 500;
        text-align: left;
        overflow: scroll;
        -webkit-transition: all 0.5s ease-out;
        -moz-transition: all 0.5s ease-out;
        -ms-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
        font-family: 'Raleway', sans-serif;
    }

    hr {
        margin: 20px 0;
        border: 0;
        border-bottom: #fff 1px solid;
        border-top: #f0f0f0 1px solid;
    }

    code {
        margin: 0 auto 20px;
        padding: 10px 20px !important;
        color: #444;
        font-family: "Consolas", "Courier New", "Courier";
        font-weight: 500;
        background: #fff !important;
        border: #EEE 1px solid;
        border-radius: 10px;
        overflow: auto;
    }

    .typed-cursor {
        opacity: 1;
        font-weight: 100;
        -webkit-animation: blink 0.7s infinite;
        -moz-animation: blink 0.7s infinite;
        -ms-animation: blink 0.7s infinite;
        -o-animation: blink 0.7s infinite;
        animation: blink 0.7s infinite;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @-moz-keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @-ms-keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @-o-keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    input[type=text] {
        background: transparent;
        border: none;
        border-bottom: 1px solid #000000;
        color: #F04D42 !important;
        width: 500px;
        margin-left: -20px;
        /* background: linear-gradient(102deg, #ef3927 60%, #e74b3c 20%, #e74b3c 20%); */

    }

    .input-form  input[type=text] {
        background: transparent;
        border: none;
        border-bottom: 1px solid #000000;
        color: #F04D42 !important;
        width: 500px;
        margin-left: -20px;
        /* background: linear-gradient(102deg, #ef3927 60%, #e74b3c 20%, #e74b3c 20%); */

    }


    .text-orange {
        color: #F04D42;
        background: linear-gradient(135deg, #fab001 0, #fa9a00 20%, #f04d42 100%);
        -webkit-background-clip: text;
        text-shadow: none;
        -webkit-text-fill-color: transparent;
    }

    .text-white {
        color: #ffffff;
        background: linear-gradient(135deg, #ffffff 0, #b1b1b1 20%, #ffffff 100%);
        -webkit-background-clip: text;
        text-shadow: none;
        -webkit-text-fill-color: transparent;
    }

    .info {
        line-height: 5px;
        font-size: 14px;
    }

</style>
<section class="u-pt-md-150 pb-0 u-h-100vh main-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-9 mx-auto">
                <div class="terminal">
                    <div class="head-wrap">
                        <div class="text-editor-wrap">
                            <div class="title-bar"><span class="title">pingdevs.com &mdash; bash &mdash; 80x<span
                                            class="terminal-height">25</span></span></div>
                            <div class="text-body">
                                <p><span class="text-red">ping</span>@<span class="text-yellow">devs</span> [<span
                                            class="text-orange">~</span>]: $ <span class="text-red"
                                                                                   data-type="ping developers, whois pingdevs.com"></span>
                                <p><span class="text-red">ping</span>@<span class="text-yellow">devs</span> [<span
                                            class="text-orange">~</span>]: $ cat /etc/issue</p>
                                <p class="info"># Доколку сте заинтересирани за професионална кариера... </p>
                                <p class="info"># <span class="text-orange">PingDevs </span> е правото место за вас.</p>
                                <p class="info"># Научете професионално web development со помош на <span class="text-orange">PHP </span> и  <span class="text-orange">Laravel </span>.</p>
                                <div id="answers"></div>
                                <p><span class="text-red">ping</span>@<span class="text-yellow">devs</span> [<span
                                            class="text-orange">~</span>]: $ <span><input class="" id="line" type="text"
                                                                                        name="inputs" autofocus> </span>
                                </p>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- END row-->
    </div> <!-- END container-->
</section> <!-- END intro-hero-->


<script src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}{{ mix('/js/all.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115084310-1"></script>

<script>


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#line').bind("enterKey", function (e) {


        if($("#line").val() == "add user")
        {
            content = '<input class="input-form" name="username" placeholder="Username []">';
            content += '<input class="input-form" name="firstname"  placeholder="First Name []">';
            content += '<input class="input-form" name="lastname"  placeholder="Last Name []">';
            content += '<input class="input-form" name="email"  placeholder="Email []">';


            $(content).appendTo("#answers");
        }
        var id = guid();
        var getmessage = $("#line").val();
        var message = "guid" + id + " " + getmessage;
        var postdata = {channel: "#pingdevs", username: "pingdevsbot", text: message, icon_emoji: ":rabbit2:"};
        var url = "https://hooks.slack.com/services/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";


        $.ajax({
            type: "POST",
            url: url,
            contentType: "text/plain",
            data: JSON.stringify(postdata),
            crossDomain: true,
        });


        var localdata = {user_id: guid(), message: message, flag: "local", _token: '{!! csrf_token() !!}'};
        var localurl = "message";
        $.ajax({
            type: "POST",
            url: localurl,
            dataType: "json",
            data: localdata,
            crossDomain: true,
        });


        $("#line").val('');

    });
    $('#line').keyup(function (e) {
        if (e.keyCode == 13) {
            $(this).trigger("enterKey");

            $(this).focus();
        }
    });

    var guid = function () {

        var nav = window.navigator;
        var screen = window.screen;
        var guid = nav.mimeTypes.length;
        guid += nav.userAgent.replace(/\D+/g, '');
        guid += nav.plugins.length;
        guid += screen.height || '';
        guid += screen.width || '';
        guid += screen.pixelDepth || '';

        return guid;
    };
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-115084310-1');
</script>
<script>

    arr = [];
    got = [];
    var last = 0;

    function update_trackdata() {
        $.getJSON('/message/' + guid(),
            function (data) {
                if(jQuery.isEmptyObject(data))
                {
                        $("#answers").html('');
                }
                $.each(data, function (i, answer) {

                    arr[i] = answer.id;
                    if (last <= i) {

                        if(answer.flag == 'local')
                        {
                            var name = 'you';
                        }
                        else {
                            var name = 'martin';
                        }
                        content = '<p><span class="text-orange">'+ name +'</span>@<span class="text-yellow">pingdevs</span> [<span class="text-orange">~</span>]:$ <span class="text-white">' + answer.message + '</span></p>';
                        $(content).appendTo("#answers");
                    }
                });

                last = arr.length;

            }
        );

    }

    update_trackdata();

    var interval = setInterval(update_trackdata, 2000);

</script>
<script>
    $.get("http://ipinfo.io", function (response) {
        $("#address").html(response.city);
        loadWeather(response.city, ''); //@params location, woeid

    }, "jsonp");
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
<script>
    function loadWeather(location, woeid) {
        $.simpleWeather({
            location: location,
            woeid: woeid,
            unit: 'c',
            success: function (weather) {
                $("#weather").html(weather.currently);
            },
            error: function (error) {
                $("#weather").html('<p>' + error + '</p>');
            }
        });
    }
</script>


</body>
</html>