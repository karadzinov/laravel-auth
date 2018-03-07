<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="A complete development solution for your StartUp">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Title-->
    <title>A complete development solution for your startup</title>

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700%7COpen+Sans:400,600,700" rel="stylesheet">

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

            <a class="navbar-brand" href="/">
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
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scrollto="about">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scrollto="features">FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scrollto="work">work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scrollto="team">team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scrollto="reviews">reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scrollto="pricing">pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scrollto="contact">contact</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div> <!-- END container-->
</header> <!-- END header -->






<section class="u-py-100 u-h-100vh u-flex-center" style="
	background: #8B3AC6;
	background-image: -webkit-linear-gradient(left, #8B3AC6 0%, #4D3399 100%);
	background-image: -o-linear-gradient(left, #8B3AC6 0%, #4D3399 100%);
	background-image: -webkit-gradient(linear, left top, right top, from(#8B3AC6), to(#4D3399));
	background-image: linear-gradient(to right, #8B3AC6 0%, #4D3399 100%);
	background-repeat: repeat-x;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FF8B3AC6', endColorstr='#FF4D3399', GradientType=1);

 ">
    <div class="container">
        <div class="row">
            <div class="col-12 u-mt-80 text-center">
                <h1 class="display-4 u-fw-600 text-white u-mb-40">
                    PingDevs are good for <span class="text-yellow" data-type="App, SEO, Starter, software, Product landing"></span>
                    <span class="typed-curcor text-yellow">|</span>
                </h1>
                <p class="u-fs-22 text-white u-lh-1_8 u-mb-40">
                    Start working with an SEO company that can provide everything you need to generate awareness, drive traffic, connect with customers, and increase sales.
                </p>
                <a href="" class="btn btn btn-rounded btn-green  px-md-5">
                    Get Started
                </a>
                <a href="" class="btn btn btn-rounded btn-white ml-3 px-md-5">
                    Learn more
                </a>
            </div> <!-- END col-lg-6-->
        </div> <!-- END row-->
    </div> <!-- END container-->
</section> <!-- END intro-hero-->




<section id="about" class="pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="h1">
                    We Develop Digital Strategies <br> Products and Services.
                </h2>
                <div class="u-h-4 u-w-50 bg-primary rounded mt-4 u-mb-70 mx-auto"></div>
                <p>
                    PingDevs is a well known and established company, oriented towards software and web
                    development supporting and maintaining its own hosting services. We are a company based
                    in Skopje – Macedonia, developing and designing state of the art software solutions ranging
                    from corporate websites to complex platform and content management systems and
                    delivering the best mobile applications using cutting edge technologies. As a company we
                    strive to fulfill all of the clients’ needs, assist through the whole process of product or
                    project builds.<br/>
                    We employ only the best individuals who work mainly in two areas of software
                    development – digital products and professional services.
                </p>
                <a href="" class="btn btn-primary btn-rounded mt-4">More About Us</a>
            </div>
            <div class="col-12 u-mt-70 text-center">
                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-1.png" alt="">
            </div>
        </div> <!-- END row-->
    </div> <!-- END container-->
</section> <!-- END section-->


<section class="bg-gray-v2 u-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 u-mb-70">
                <div class="media">
                    <span class="icon icon-Briefcase text-primary u-fs-50 mr-4"></span>
                    <div class="media-body">
                        <h4>
                            Digital Branding
                        </h4>
                        <p>
                            Photos, videos etc..
                         </p>
                    </div>
                </div>
            </div> <!-- END col-lg-4 col-md-6-->

            <div class="col-lg-4 col-md-6 u-mb-70">
                <div class="media">
                    <span class="icon icon-Web text-primary u-fs-50 mr-4"></span>
                    <div class="media-body">
                        <h4>
                            Web Solutinos
                        </h4>
                        <p>
                            Great solutions.
                        </p>
                    </div>
                </div>
            </div> <!-- END col-lg-4 col-md-6-->

            <div class="col-lg-4 col-md-6 u-mb-70">
                <div class="media">
                    <span class="icon icon-Dollars text-primary u-fs-50 mr-4"></span>
                    <div class="media-body">
                        <h4>
                            Financial Advice
                        </h4>
                        <p>
                            Our project manager will provide you weekly report that will include all working tasks and
                            feature tasks that needs to be competed.
                        </p>
                    </div>
                </div>
            </div> <!-- END col-lg-4 col-md-6-->

            <div class="col-lg-4 col-md-6 u-mb-70">
                <div class="media">
                    <span class="icon icon-Headset text-primary u-fs-50 mr-4"></span>
                    <div class="media-body">
                        <h4>
                            Dedicated Support
                        </h4>
                        <p>
                            Team dedicated for your needs.
                        </p>
                    </div>
                </div>
            </div> <!-- END col-lg-4 col-md-6-->

            <div class="col-lg-4 col-md-6 u-mb-70">
                <div class="media">
                    <span class="icon icon-Resume text-primary u-fs-50 mr-4"></span>
                    <div class="media-body">
                        <h4>
                            Business Consulting
                        </h4>
                        <p>
                            Something here...
                        </p>
                    </div>
                </div>
            </div> <!-- END col-lg-4 col-md-6-->

            <div class="col-lg-4 col-md-6 u-mb-70">
                <div class="media">
                    <span class="icon icon-Starship2 text-primary u-fs-50 mr-4"></span>
                    <div class="media-body">
                        <h4>
                            Progress Across Projects
                        </h4>
                        <p>
                            Monitoring and tracking the progress of your schedule easy!
                        </p>
                    </div>
                </div>
            </div> <!-- END col-lg-4 col-md-6-->

        </div> <!--END row-->
    </div> <!-- END container-->
</section> <!-- END section-->


<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="h1 text-capitalize">
                    Solutions in <span class="text-primary u-fw-700">3</span> easy step
                </h2>
                <div class="u-h-4 u-w-50 bg-primary rounded mt-4 u-mb-70 mx-auto"></div>
            </div>
            <div class="col-12">
                <ul class="nav nav-tabs justify-content-center tabs-v3 text-center u-ff-dosis u-fw-600 u-fs-20"
                    role="tablist">
                    <li class="nav-item mx-2">
                        <a class="nav-link active p-4" data-toggle="tab" href="#tab1_1" role="tab">
                            <span class="u-fs-md-30 d-block mb-1">01</span>
                            Website Maintenance
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link p-4" data-toggle="tab" href="#tab1_2" role="tab">
                            <span class="u-fs-md-30 d-block mb-1">02</span>
                            Ad Hoc Development
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link p-4" data-toggle="tab" href="#tab1_3" role="tab">
                            <span class="u-fs-md-30 d-block mb-1">03</span>
                            Application Development
                        </a>
                    </li>
                </ul>
            </div> <!-- END col-12 -->

            <div class="col-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1_1">
                        <div class="row u-my-70 align-items-center">
                            <div class="col-md-6 mb-5">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-2.png" alt="">
                            </div> <!-- END col-md-6 -->
                            <div class="col-md-6">
                                <h2 class="mb-4">
                                    Present Your Startup With Style And Easy
                                </h2>
                                <p>
                                    Server maintenance involves keeping an already developed website updated and running
                                    so
                                    that it can can operate smoothly and properly 24/7. All the work is conducted by an
                                    experienced developer and system administrator who will work to ensure that the
                                    website
                                    runs properly via regularly monitoring performance and updating the code in a secure
                                    manner. The work required to maintain the website to run smoothly and issue free
                                    usually
                                    includes:
                                    <br/>
                                    Following the regular server maintenance and server updates and scheduling code
                                    updates based on agreed schedule.
                                <ul>
                                    <li> Checking the website with all of the pages is available and error free</li>
                                    <li> Updating the code</li>
                                    <li> Fixing existing bugs</li>
                                    <li> Applying secure protocols</li>
                                    <li> Regularly checking for application updates</li>
                                    <li> Keeping a backup on a local server in case of unexpected interruption of the
                                        host’s work
                                    </li>
                                    <li> Protecting the database for the running applications, ensuring it is clean and
                                        entries are not redundant
                                    </li>
                                    <li> Ensuring all procedures are followed when a new user needs to get access to the
                                        website
                                    </li>
                                    <li> Changing passwords on monthly basis in order to keep the website safe and
                                        preemptively protected
                                    </li>
                                    <li> Cleaning up unnecessary files</li>
                                    <li> Adding content to the website</li>
                                    <li> Editing existing content</li>
                                    <li> Optimizing the website for search engines</li>
                                    <li> Providing reports and guidelines for future work</li>
                                    <li> Reporting crashes or attacks to the Account Manager 24/7</li>
                                </ul>
                                </p>
                            </div> <!-- END col-md-6 -->
                        </div> <!-- END row-->
                    </div> <!-- END tab-pane-->
                    <div class="tab-pane fade" id="tab1_2">
                        <div class="row u-my-70 align-items-center">
                            <div class="col-md-6 mb-5">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-3.png" alt="">
                            </div> <!-- END col-md-6 -->
                            <div class="col-md-6">
                                <h2 class="mb-4">
                                    We Provide Three Steps Business Solutions
                                </h2>
                                <p>
                                    Ad Hoc development includes all the work that can not be completed within the
                                    dedicated 8
                                    hours per day and can be scheduled based on mutual agreement between MyHost and the
                                    client. This includes:
                                </p>
                                <ul>
                                    <li> Adding new features</li>
                                    <li> Redesign</li>
                                    <li> Partially changing the logic and architecture of the website</li>
                                    <li> Adding new page or content type</li>
                                    <li> QA - testing new features before releasing them to the live environment</li>
                                    <li> Providing reports based on client’s request related to content</li>
                                </ul>
                            </div> <!-- END col-md-6 -->
                        </div> <!-- END row-->
                    </div> <!-- END tab-pane-->
                    <div class="tab-pane fade" id="tab1_3">
                        <div class="row u-my-70 align-items-center">
                            <div class="col-md-6 mb-5">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-2.png" alt="">
                            </div> <!-- END col-md-6 -->
                            <div class="col-md-6">
                                <h2 class="mb-4">
                                    It's as easy as 1 2 3 to get start
                                </h2>
                                <p>
                                    Application development includes all possible request variations ‘from scratch’
                                    development. The work needed to deliver a whole project includes:
                                <ul>
                                    <li> Estimating client’s needs</li>
                                    <li> Designing the application including wireframing</li>
                                    <li> Competitor analysis</li>
                                    <li> Best practices research</li>
                                    <li> Specification writing</li>
                                    <li> Development</li>
                                    <li> Full quality assurance</li>
                                    <li> Providing legal agreements and support</li>
                                </ul>

                                MyHost can provide development of iOS, Android and mobile applications in addition to
                                web page development, with high standards in project management, QA and testing before
                                delivery of final product.
                                </p>
                            </div> <!-- END col-md-6 -->
                        </div> <!-- END row-->
                    </div> <!-- END tab-pane-->
                </div> <!-- END tab-content-->
            </div> <!-- END col-12-->

        </div> <!--END row-->
    </div> <!-- END container-->
</section> <!-- END section-->


<section class="u-py-80"
         style="background:#273f5b url(http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/bg-1.png) no-repeat;background-position: center center;">
    <div class="container">
        <div class="row text-center">

            <div class="col-lg-3 col-md-6 u-my-20 text-white">
                <h4 class="mb-0 u-fs-60 text-green">
                    4670+
                </h4>
                <p class="u-fs-20">
                    Completed Projects
                </p>
            </div> <!-- END col-lg-3 col-md-6-->

            <div class="col-lg-3 col-md-6 u-my-20 text-white">
                <h4 class="mb-0 u-fs-60 text-green">
                    7980+
                </h4>
                <p class="u-fs-20">
                    Business Solutions
                </p>
            </div> <!-- END col-lg-3 col-md-6-->

            <div class="col-lg-3 col-md-6 u-my-20 text-white">
                <h4 class="mb-0 u-fs-60 text-green">
                    170+
                </h4>
                <p class="u-fs-20">
                    Available Country
                </p>
            </div> <!-- END col-lg-3 col-md-6-->

            <div class="col-lg-3 col-md-6 u-my-20 text-white">
                <h4 class="mb-0 u-fs-60 text-green">
                    10M+
                </h4>
                <p class="u-fs-20">
                    Users Worldwide
                </p>
            </div> <!-- END col-lg-3 col-md-6-->
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>


<section id="work">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2 class="h1">
                    Our Awesome Work
                </h2>
                <div class="u-h-4 u-w-50 bg-primary rounded mt-4 u-mb-40 mx-auto"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 mx-auto mt-5">

                <ul class="nav nav-tabs justify-content-center tabs-v2 box-shadow-v2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab2_1" role="tab" aria-expanded="false">
                            All Work
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab2_2" role="tab" aria-expanded="false">
                            Branding
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab2_3" role="tab" aria-expanded="true">
                            Consulting
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab2_4" role="tab" aria-expanded="false">
                            Corporate
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-10 mx-auto mt-5">
                <div class="tab-content tab__slider">

                    <div class="tab-pane fade" id="tab2_1" role="tabpanel" aria-labelledby="home-tab">
                        <div data-init="carousel" data-slick-margin="15" data-slick='{
							"slidesToShow":2,
							"slidesToScroll":1,
							"arrows":true,
							"prevArrow":"<div class=\"slick-prev box-shadow-v1\"><i class=\"fa fa-angle-left\"></i></div>",
							"nextArrow":"<div class=\"slick-next box-shadow-v1\"><i class=\"fa fa-angle-right\"></i></div>",
							"responsive": [
								{
								 "breakpoint":1024,
								 "settings":{
									"arrows":false,
									"dots":true,
									"dotsClass":"slick-dots text-center mt-4"
								 }
								},
								{
								 "breakpoint":700,
								 "settings":{
									"arrows":false,
									"slidesToShow":1,
									"dots":true,
									"dotsClass":"slick-dots text-center mt-4"
								 }
								}
							]
						}'>
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-3.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">Digital Branding Solution</a>
                                    </h3>
                                    <p>
                                        Branding Design
                                    </p>
                                </div>
                            </div>  <!-- END card-->
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-4.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">This is a awesome title</a>
                                    </h3>
                                    <p>
                                        B2B marketing
                                    </p>
                                </div>
                            </div>  <!-- END card-->
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-3.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">This is a awesome title</a>
                                    </h3>
                                    <p>
                                        B2B marketing
                                    </p>
                                </div>
                            </div> <!-- END card-->
                        </div>
                    </div> <!-- END tab-pane-->

                    <div class="tab-pane fade show active" id="tab2_2" role="tabpanel" aria-labelledby="home-tab">
                        <div data-init="carousel" data-slick-margin="15" data-slick='{
							"slidesToShow":2,
							"slidesToScroll":1,
							"arrows":true,
							"prevArrow":"<div class=\"slick-prev box-shadow-v1\"><i class=\"fa fa-angle-left\"></i></div>",
							"nextArrow":"<div class=\"slick-next box-shadow-v1\"><i class=\"fa fa-angle-right\"></i></div>",
							"responsive": [
								{
								 "breakpoint":1024,
								 "settings":{
									"arrows":false,
									"dots":true,
									"dotsClass":"slick-dots text-center mt-4"
								 }
								},
								{
								 "breakpoint":700,
								 "settings":{
									"arrows":false,
									"slidesToShow":1,
									"dots":true,
									"dotsClass":"slick-dots text-center mt-4"
								 }
								}
							]
						}'>
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-4.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">Digital Branding Solution</a>
                                    </h3>
                                    <p>
                                        Branding Design
                                    </p>
                                </div>
                            </div>  <!-- END card-->
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-3.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">This is a awesome title</a>
                                    </h3>
                                    <p>
                                        B2B marketing
                                    </p>
                                </div>
                            </div>  <!-- END card-->
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-3.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">This is a awesome title</a>
                                    </h3>
                                    <p>
                                        B2B marketing
                                    </p>
                                </div>
                            </div> <!-- END card-->
                        </div>
                    </div> <!-- END tab-pane-->

                    <div class="tab-pane fade" id="tab2_3" role="tabpanel" aria-labelledby="home-tab">
                        <div data-init="carousel" data-slick-margin="15" data-slick='{
							"slidesToShow":2,
							"slidesToScroll":1,
							"arrows":true,
							"prevArrow":"<div class=\"slick-prev box-shadow-v1\"><i class=\"fa fa-angle-left\"></i></div>",
							"nextArrow":"<div class=\"slick-next box-shadow-v1\"><i class=\"fa fa-angle-right\"></i></div>",
							"responsive": [
								{
								 "breakpoint":1024,
								 "settings":{
									"arrows":false,
									"dots":true,
									"dotsClass":"slick-dots text-center mt-4"
								 }
								},
								{
								 "breakpoint":700,
								 "settings":{
									"arrows":false,
									"slidesToShow":1,
									"dots":true,
									"dotsClass":"slick-dots text-center mt-4"
								 }
								}
							]
						}'>
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-3.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">Digital Branding Solution</a>
                                    </h3>
                                    <p>
                                        Branding Design
                                    </p>
                                </div>
                            </div>  <!-- END card-->
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-4.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">This is a awesome title</a>
                                    </h3>
                                    <p>
                                        B2B marketing
                                    </p>
                                </div>
                            </div>  <!-- END card-->
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-3.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">This is a awesome title</a>
                                    </h3>
                                    <p>
                                        B2B marketing
                                    </p>
                                </div>
                            </div> <!-- END card-->
                        </div>
                    </div> <!-- END tab-pane-->

                    <div class="tab-pane fade" id="tab2_4" role="tabpanel" aria-labelledby="home-tab">
                        <div data-init="carousel" data-slick-margin="15" data-slick='{
							"slidesToShow":2,
							"slidesToScroll":1,
							"arrows":true,
							"prevArrow":"<div class=\"slick-prev box-shadow-v1\"><i class=\"fa fa-angle-left\"></i></div>",
							"nextArrow":"<div class=\"slick-next box-shadow-v1\"><i class=\"fa fa-angle-right\"></i></div>",
							"responsive": [
								{
								 "breakpoint":1024,
								 "settings":{
									"arrows":false,
									"dots":true,
									"dotsClass":"slick-dots text-center mt-4"
								 }
								},
								{
								 "breakpoint":700,
								 "settings":{
									"arrows":false,
									"slidesToShow":1,
									"dots":true,
									"dotsClass":"slick-dots text-center mt-4"
								 }
								}
							]
						}'>
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-4.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">Digital Branding Solution</a>
                                    </h3>
                                    <p>
                                        Branding Design
                                    </p>
                                </div>
                            </div>  <!-- END card-->
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-3.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">This is a awesome title</a>
                                    </h3>
                                    <p>
                                        B2B marketing
                                    </p>
                                </div>
                            </div>  <!-- END card-->
                            <div class="card">
                                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-3.jpg" alt="">
                                <div class="py-4">
                                    <h3>
                                        <a href="">This is a awesome title</a>
                                    </h3>
                                    <p>
                                        B2B marketing
                                    </p>
                                </div>
                            </div> <!-- END card-->
                        </div>
                    </div> <!-- END tab-pane-->

                </div> <!-- END tab-content-->
            </div> <!-- END col-lg-10 mx-auto mt-5-->
            <div class="col-12 text-center mt-4">
                <a href="" class="btn btn-primary btn-rounded"> View Gallery</a>
            </div>
        </div> <!-- END row-->
    </div> <!-- END container-->


    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <div class="u-h-4 u-w-50 bg-primary rounded mt-4 u-mb-70 mx-auto"></div>
                <p>
                    Our team is using latest technology to create big impact, based by deep knowledge security
                    in mind. Since, we know that this software would need to be upgradable, and should
                    contain more improvements in future, our company would accept only changes that are
                    related with agreed requirements before. Each new option or feature would be extra, and
                    would be not included as free by agreed price. The same could also extended work period.
                    Product would be upgradable, easy to manage with future possibility for opening API.
                </p>
                <p>
                    Our work is based on strong communication between clients and developers, for that
                    reason we are using Slack (ref. http://slack.com) - professional working platform for
                    communication. Development is followed by GitHub (ref. https://github.com) or BitBucket
                    (ref. https://bitbucket.org) as you prefer where we deploy our source code on fly.
                </p>
                <p>
                    As for task management system, we prefer Asana (ref. https://asana.com) but we are also
                    comfortable of using any of teams tracking workflow solutions like jira.com,
                    meistertask.com etc... As for example tasks are connected with Slack as developer commits
                    daily work we are tracking daily job, review the code, return for necessary changes or
                    deploy it to staging
                </p>
            </div>
            <div class="col-12 u-mt-70 text-center">
                <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/s-1.png" alt="">
            </div>
        </div> <!-- END row-->
    </div> <!-- END container-->


</section>


<section id="team"
         style="background:#ecf5fd url(http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/bg-2.png) no-repeat;background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="h1">
                    Our Best Experts
                </h2>
                <div class="u-h-4 u-w-50 bg-primary rounded mt-4 u-mb-40 mx-auto"></div>
            </div>  <!-- END col-12-->

            <div class="col-lg-3 col-md-6 mt-4">
                <div class="card text-center show-onHover-parent">
                    <div class="u-pos-rel">
                        <img class="w-100" src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/1_1.jpg"
                             alt="">
                        <div class="show-onHover u-pos-abs-center u-w-100p">
                            <ul class="list-inline social social-white social-sm mt-4">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="py-4">
                        <h4>
                            Peter Spenser
                        </h4>
                        <p class="mb-0">
                            Founder & CEO
                        </p>
                    </div>
                </div> <!-- END card-->
            </div> <!-- END col-lg-3 col-md-6-->

            <div class="col-lg-3 col-md-6 mt-4">
                <div class="card text-center show-onHover-parent">
                    <div class="u-pos-rel">
                        <img class="w-100" src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/2.jpg"
                             alt="">
                        <div class="show-onHover u-pos-abs-center u-w-100p">
                            <ul class="list-inline social social-white social-sm mt-4">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="py-4">
                        <h4>
                            Britney Simpson
                        </h4>
                        <p class="mb-0">
                            Creative Director
                        </p>
                    </div>
                </div> <!-- END card-->
            </div> <!-- END col-lg-3 col-md-6-->

            <div class="col-lg-3 col-md-6 mt-4">
                <div class="card text-center show-onHover-parent">
                    <div class="u-pos-rel">
                        <img class="w-100" src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/3.jpg"
                             alt="">
                        <div class="show-onHover u-pos-abs-center u-w-100p">
                            <ul class="list-inline social social-white social-sm mt-4">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="py-4">
                        <h4>
                            Christian Bush
                        </h4>
                        <p class="mb-0">
                            Senior Developer
                        </p>
                    </div>
                </div> <!-- END card-->
            </div> <!-- END col-lg-3 col-md-6-->

            <div class="col-lg-3 col-md-6 mt-4">
                <div class="card text-center show-onHover-parent">
                    <div class="u-pos-rel">
                        <img class="w-100" src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/4.jpg"
                             alt="">
                        <div class="show-onHover u-pos-abs-center u-w-100p">
                            <ul class="list-inline social social-white social-sm mt-4">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="py-4">
                        <h4>
                            James Anderson
                        </h4>
                        <p class="mb-0">
                            Business Analyst
                        </p>
                    </div>
                </div> <!-- END card-->
            </div> <!-- END col-lg-3 col-md-6-->

        </div><!--END row-->
    </div> <!-- END container-->
</section> <!-- END section-->


<section>
    <div class="container">
        <div class="row text-center">

            <div class="col-md-4 mt-5 mt-md-0">
                <span class="icon icon-MessageLeft u-fs-60 text-primary"></span>
                <h3 class="my-4">
                    Excellent Support
                </h3>
                <p>
                    Your startup is so important to us, we will listen carefully and provide best solutions for your needs.
                </p>
            </div>  <!-- END col-md-4 -->

            <div class="col-md-4 mt-5 mt-md-0">
                <span class="icon icon-Users u-fs-60 text-primary"></span>
                <h3 class="my-4">
                    Awesome Team
                </h3>
                <p>
                    Something here..
                </p>
            </div>  <!-- END col-md-4 -->

            <div class="col-md-4 mt-5 mt-md-0">
                <span class="icon icon-Dollars u-fs-60 text-primary"></span>
                <h3 class="my-4">
                    Affordable Price
                </h3>
                <p>
                    Underdevelopment
                </p>
            </div>  <!-- END col-md-4 -->

        </div> <!-- END row-->
    </div> <!-- END container-->
</section>


<section id="reviews"
         style="background:#0081ff url(http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/bg-3.png) no-repeat;background-position: center center;">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2 class="h1 text-white">
                    What Our Customers Say
                </h2>
                <div class="u-h-4 u-w-50 bg-white rounded mt-4 u-mb-60 mx-auto"></div>
            </div>  <!-- END col-12-->
        </div><!--END row-->

        <div data-init="carousel"
             data-slick='{ "slidesToShow":1, "dots":true, "arrows":false, "dotsClass":"slick-dots dots-white text-center"}'
             data-slick-margin="30">

            <div class="p-5 rounded bg-white text-center box-shadow-v2 my-4">
                <img class="rounded-circle mx-auto mb-4 u-w-100"
                     src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/1.jpg" alt="">
                <h4>
                    Kenelia Deshmukh
                </h4>
                <p class="text-muted">
                    Creative Director
                </p>
                <p>
                    Your startup is so important to us, we will listen carefully and provide best solutions for your needs.
                </p>
            </div>

            <div class="p-5 rounded bg-white text-center box-shadow-v2 my-4">
                <img class="rounded-circle mx-auto mb-4 u-w-100"
                     src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/2.jpg" alt="">
                <h4>
                    Dorian Black
                </h4>
                <p class="text-muted">
                    Manager
                </p>
                <p>
                    Your startup is so important to us, we will listen carefully and provide best solutions for your needs.
                </p>
            </div>

            <div class="p-5 rounded bg-white text-center box-shadow-v2 my-4">
                <img class="rounded-circle mx-auto mb-4 u-w-100"
                     src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/3.jpg" alt="">
                <h4>
                    David Case
                </h4>
                <p class="text-muted">
                    Designer
                </p>
                <p>
                    Your startup is so important to us, we will listen carefully and provide best solutions for your needs.
                </p>
            </div>
        </div> <!-- END carosel-->
    </div> <!-- END container-->
</section> <!-- END section-->


<section class="u-py-100 bg-gray-v2">
    <div class="container">
        <div class="row">
            <div class="col-12 d-md-flex justify-content-between text-center">
                <div class="p-3">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/micosoft.png" alt="">
                </div>
                <div class="p-3">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/envato.png" alt="">
                </div>
                <div class="p-3">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/dribbble.png" alt="">
                </div>
                <div class="p-3">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/google.png" alt="">
                </div>
                <div class="p-3">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/micosoft.png" alt="">
                </div>
            </div>
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>


<section id="pricing">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h2 class="h1">
                    Choose the Plan that You <br> Really Need!
                </h2>
                <div class="u-h-4 u-w-50 bg-primary rounded mt-4 u-mb-40 mx-auto"></div>
            </div>
        </div> <!-- END row-->
        <div class="row">

            <div class="col-md-4 mt-4">
                <div class="bg-white box-shadow-v2 rounded py-5">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/plane-up.svg" class="u-h-90"
                         alt="">
                    <h4 class="u-mb-35 u-mt-15">
                        Startup
                    </h4>
                    <hr class="m-0">
                    <ul class="list-unstyled u-py-30 u-lh-2">
                        <li><strong>Unlimited</strong> searchable message</li>
                        <li><strong>Unlimited</strong> apps and service</li>
                        <li><strong>8GB</strong> file storage per team</li>
                        <li><strong>100GB</strong> Monthly Bandwidth</li>
                    </ul>
                    <hr class="m-0">
                    <h2 class="u-fs-60 u-fw-600 u-my-20">
                        <sup class="u-fs-20">$</sup>14
                    </h2>
                    <a href="" class="btn btn-white btn-rounded">
                        Get Started
                    </a>
                </div>
            </div> <!-- END col-md-4-->

            <div class="col-md-4 mt-4">
                <div class="bg-white box-shadow-v2 rounded py-5">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/phone-book.svg" class="u-h-90"
                         alt="">
                    <h4 class="u-mb-35 u-mt-15">
                        Professional
                    </h4>
                    <hr class="m-0">
                    <ul class="list-unstyled u-py-30 u-lh-2">
                        <li><strong>Unlimited</strong> searchable message</li>
                        <li><strong>Unlimited</strong> apps and service</li>
                        <li><strong>8GB</strong> file storage per team</li>
                        <li><strong>100GB</strong> Monthly Bandwidth</li>
                    </ul>
                    <hr class="m-0">
                    <h2 class="u-fs-60 u-fw-600 u-my-20 text-primary">
                        <sup class="u-fs-20">$</sup>49
                    </h2>
                    <a href="" class="btn btn-white btn-rounded">
                        Get Started
                    </a>
                </div>
            </div> <!-- END col-md-4-->

            <div class="col-md-4 mt-4">
                <div class="bg-white box-shadow-v2 rounded py-5">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/dollar-bag.svg" class="u-h-90"
                         alt="">
                    <h4 class="u-mb-35 u-mt-15">
                        Business
                    </h4>
                    <hr class="m-0">
                    <ul class="list-unstyled u-py-30 u-lh-2">
                        <li><strong>Unlimited</strong> searchable message</li>
                        <li><strong>Unlimited</strong> apps and service</li>
                        <li><strong>8GB</strong> file storage per team</li>
                        <li><strong>100GB</strong> Monthly Bandwidth</li>
                    </ul>
                    <hr class="m-0">
                    <h2 class="u-fs-60 u-fw-600 u-my-20">
                        <sup class="u-fs-20">$</sup>99
                    </h2>
                    <a href="" class="btn btn-white btn-rounded">
                        Get Started
                    </a>
                </div>
            </div> <!-- END col-md-4-->

        </div> <!-- END row-->
    </div> <!-- END container-->
</section> <!--END section-->


<section id="blog" class="bg-gray-v2">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <h2 class="h1">
                    Latest News
                </h2>
                <div class="u-h-4 u-w-50 bg-primary rounded mt-4 u-mb-40 mx-auto"></div>
            </div>
        </div> <!--END row-->

        <div class="row">

            <div class="col-md-4 mt-4">
                <div class="card border-0 box-shadow-v3 u-h-100p">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/blog/1.jpg" alt="">
                    <div class="u-p-30">
                        <h4>Contrast and Similarity in Design</h4>
                        <p class="d-flex text-muted">
                            <span><i class="icon icon-Time mr-1"></i> May 24, 2017</span>
                            <span><i class="icon icon-Eye mr-1 ml-3"></i> 468 views</span>
                        </p>
                        <p>
                            Change text here..
                        </p>
                        <a href="" class="btn btn-primary btn-rounded my-3">Read More</a>
                    </div>
                </div> <!-- END card-->
            </div> <!-- END col-md-4-->

            <div class="col-md-4 mt-4">
                <div class="card border-0 box-shadow-v3 u-h-100p">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/blog/3.jpg" alt="">
                    <div class="u-p-30">
                        <h4>
                            Hyper conv in 2018
                        </h4>
                        <p class="d-flex text-muted">
                            <span><i class="icon icon-Time mr-1"></i> May 24, 2017</span>
                            <span><i class="icon icon-Eye mr-1 ml-3"></i> 468 views</span>
                        </p>
                        <p>
                            Something different
                        </p>
                        <a href="" class="btn btn-primary btn-rounded my-3">
                            Read More
                        </a>
                    </div>
                </div> <!-- END card-->
            </div> <!-- END col-md-4-->


            <div class="col-md-4 mt-4">
                <div class="card border-0 box-shadow-v3 u-h-100p">
                    <img src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/blog/2.jpg" alt="">
                    <div class="u-p-30">
                        <h4>
                            Awesome design trand in clean design
                        </h4>
                        <p class="d-flex text-muted">
                            <span><i class="icon icon-Time mr-1"></i> May 24, 2017</span>
                            <span><i class="icon icon-Eye mr-1 ml-3"></i> 468 views</span>
                        </p>
                        <p>
                            Bu!
                        </p>
                        <a href="" class="btn btn-primary btn-rounded my-3">
                            Read More
                        </a>
                    </div>
                </div> <!-- END card-->
            </div> <!-- END col-md-4-->

        </div> <!-- END row-->
    </div> <!-- END container-->
</section>


<section id="contact"
         style="background:#0081ff url(http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}/images/bg-4.png) no-repeat; background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="h1 text-center text-white u-mb-30">
                    Do You Want to Start a <br> New Project?
                </h2>
                <div class="u-h-4 u-w-50 bg-white rounded u-mb-70 mx-auto"></div>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6 u-mb-30">
                            <input type="text" placeholder="Your name*">
                        </div>
                        <div class="col-md-6 u-mb-30">
                            <input type="email" placeholder="Your email*">
                        </div>
                        <div class="col-md-6 u-mb-30">
                            <input type="tel" placeholder="Phone number">
                        </div>
                        <div class="col-md-6 u-mb-30">
                            <input type="tel" placeholder="Your website">
                        </div>
                        <div class="col-12 u-mb-30">
                            <textarea rows="5" placeholder="Message"></textarea>
                        </div>
                    </div> <!-- END row-->
                    <div class="text-center">
                        <button class="btn btn-white"> Send Request</button>
                    </div>
                </form>
            </div> <!-- END col-lg-8-->
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>


<footer>
    <section class="bg-gray-v2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    PingDevs
                    <p class="u-my-40">
                        Another text that needs to be replaced.
                    </p>
                    <form class="form-inline">
                        <div class="input-group box-shadow-v1 u-rounded-50 bg-white u-of-hidden">
                            <div class="input-group-addon bg-white border-0 pl-4 pr-0">
                                <span class="icon icon-Mail text-primary"></span>
                            </div>
                            <input type="text" class="form-control border-0 p-3" placeholder="Enter your email">
                            <button type="submit" class="input-group-btn btn bg-white">
                                <span class="icon icon-Arrow text-primary"></span>
                            </button>
                        </div>
                    </form>

                </div>
                <div class="col-lg-2 col-md-6 ml-auto mb-5 mb-lg-0">
                    <h4>Useful Links</h4>
                    <div class="u-h-4 u-w-50 bg-primary rounded mt-3 u-mb-40"></div>
                    <ul class="list-unstyled u-lh-2">
                        <li><a href="">About Us </a></li>
                        <li><a href="">Testimonials </a></li>
                        <li><a href="">Pricing </a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">News </a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 ml-auto mb-5 mb-lg-0">
                    <h4>Contact Info</h4>
                    <div class="u-h-4 u-w-50 bg-primary rounded mt-3 u-mb-40"></div>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <span class="icon icon-Phone2 text-primary mr-2"></span> 389. 71. 213. 980
                        </li>
                        <li class="mb-2">
                            <span class="icon icon-Mail text-primary mr-2"></span> <a
                                    href="mailto:support@pingdevs.com">support@pingdevs.com</a>
                        </li>
                        <li class="mb-2">
                            <span class="icon icon-Pointer text-primary mr-2"></span> Skopje, Macedonia
                        </li>
                    </ul>
                    <ul class="list-inline social social-rounded social-white mt-4">
                        <li class="list-inline-item">
                            <a href=""><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href=""><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href=""><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section> <!-- END section-->

    <section class="u-py-40">
        <div class="container">
            <p class="mb-0 text-center">
                &copy; Copyright 2018 - Created by <a class="text-primary"
                                                      href="http://pingdevs.com" target="_blank">PingDevs</a>
            </p>
        </div>
    </section>
</footer> <!-- END footer-->


<div class="scroll-top bg-white box-shadow-v1">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>


<!--
// ////////////////////////////////////////////////
// To Reduce server request and improved page speed drastically all third-party plugin bundle in assets/js/bundle.js
// If you wanna add those manually bellow is the sequence
// ///////////////////////////////////////////////
-->
<!--
		<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="assets/vendor/popper.js/dist/popper.min.js"></script>
		<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="assets/vendor/slick-carousel/slick/slick.min.js"></script>
		<script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="assets/vendor/isotope/dist/isotope.pkgd.min.js"></script>
		<script src="assets/vendor/parallax.js/parallax.min.js"></script>
		<script src="assets/vendor/wow/dist/wow.min.js"></script>
		<script src="assets/vendor/vide/dist/jquery.vide.min.js"></script>
		<script src="assets/vendor/typed.js/lib/typed.min.js"></script>
		<script src="assets/vendor/appear-master/dist/appear.min.js"></script>
		<script src="assets/vendor/jquery.countdown/dist/jquery.countdown.min.js"></script>
		<script src="assets/js/smoothscroll.js"></script>
-->

{{-- Scripts --}}
<script src="http://images{{ rand(1,5) }}.{{ env('APP_DOMAIN') }}{{ mix('/js/all.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115084310-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-115084310-1');
</script>

</body>
</html>