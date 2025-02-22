<!-- Styles -->

<?php get_template_part('template-parts/roaming/styles'); ?>

<!-- Breadcrumb Start -->
<section class="breadcrumb-section">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Roaming</a></li>
            </ol>
        </nav>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Slider Start -->
<!-- <section class="hero-slider-section">
    <div class="hero-slider slider">
        <div>
            <img src="/wp-content/uploads/2024/06/roam-banner-web.webp" class="w-100 d-none d-lg-block" alt="...">
            <img src="/wp-content/uploads/2024/06/roam-banner-mob.webp" class="w-100 d-block d-md-block d-lg-none" alt="...">

            <div class="inner-content-sec">
                <h1>There's more <br>
                    to <i>SEA</i> with<br>
                    Yes Roam ASEAN Plus</h1>
                <div class="btn-sec d-flex align-items-center">
                    <div class="pricing-2">
                        <h4 class="d-block">
                            <sup><span>From<br><b>RM</b></span></sup>10<span class="month-sec"> / mth</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Slider End -->


<!-- Slider Start -->
<section class="hero-slider-section">
    <div id="hero-slider" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true" data-bs-interval="true">
        <div class="carousel-indicators">
            <!-- <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="4" aria-label="Slide 5"></button> -->

        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="/wp-content/uploads/2024/06/roam-banner-web.webp" class="w-100 d-none d-lg-block" alt="...">
                <img src="/wp-content/uploads/2024/06/roam-banner-mob.webp" class="w-100 d-block d-md-block d-lg-none"
                    alt="...">
                <article>
                    <div class="container">
                        <div class="inner-content-sec">
                            <div>
                                <h1>There's more <br>
                                    to <i>SEA</i> with<br>
                                    Yes Roam ASEAN Plus</h1>
                                <div class="btn-sec d-flex align-items-center">
                                    <div class="pricing-2 align-items-center">
                                        <h4 class="d-block">
                                            <sup><span>From<br><b>RM</b></span></sup>10<span
                                                class="month-sec">/mth</span>
                                        </h4>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- <button class="carousel-control-prev d-none" type="button" data-bs-target="#hero-slider"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none" type="button" data-bs-target="#hero-slider"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->

        </div>
    </div>
</section>
<!-- Slider End -->

<!-- Banner1 Start -->
<section id="roaming-banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-8 d-flex align-items-center" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="200">
                <div class="m-auto">
                    <h1>Choose a destination</h1>
                    <p>Check our Data Roaming or Pay-as-you-use rates for your next trip.</p>
                    <div class="search-box dropdown">
                        <?php get_template_part('template-parts/roaming/dropdown-roaming', '', ['data_roaming' => $args['data_roaming']]); ?>
                        <input id="roamingSelect" name="roamingSelect" type="hidden" />
                        <button class="btn" data-button="openRoaming">Check roaming rates</button>
                    </div>
                    <p class="text-center mt-3 browse-btn">
                        <a href="#pass-section">Browse Roaming Passes <span class="iconify"
                                data-icon="akar-icons:arrow-right"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner1 End -->

<!--Roaming Rates Section Start-->
<section id="roaming-rates-section" data-fieldset="roaming" data-roaming="roaming-rates" style="display:none;">
    <div class="container">
        <div class="row">

            <!--data-country="Singapore"-->
            <div data-country="Singapore" style="display:block;">
                <div class="row mt-3" id="sg-asian-roam-section">
                    <ul id="sg-myTab" class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button id="sg-dayone-tab" class="s-nav-link right-tab" role="tab" type="button"
                                data-bs-toggle="tab" data-bs-target="#sg-dayone" aria-controls="sg-dayone"
                                aria-selected="false">1 Day</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="sg-daythree-tab" class="s-nav-link left-tab" role="tab" type="button"
                                data-bs-toggle="tab" data-bs-target="#sg-daythree" aria-controls="sg-daythree"
                                aria-selected="true">3 Days</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="sg-dayseven-tab" class="s-nav-link left-tab" role="tab" type="button"
                                data-bs-toggle="tab" data-bs-target="#sg-dayseven" aria-controls="sg-dayseven"
                                aria-selected="true">7 Days</button>
                        </li>
                    </ul>
                </div>
            </div>


            <!--Singapore -->
            <div class="col-12 mt-0" data-country="Singapore" style="display: block;">
                <div style="background:#fff; border-radius: 15px;">
                    <h1 class="raom-logo">
                        <img class="mb-0" src="/wp-content/uploads/2024/06/YesRoam-logo.png" alt="YesRoam" /> <span>SG
                            Monthly</span>
                    </h1>

                    <div class="row row-roaming">
                        <div class="col-12 col-lg-2">
                            <div class="row">
                                <div class="col-12 border-b-sec">
                                    <h3>Plans</h3>
                                    <h4><span style="font-weight:500">Only in Singapore
                                            with any<span> <strong>Yes Infinite Plan</strong> or
                                                <strong>Yes Infinite+ Plan</strong></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="">
                                <div class="row">
                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Roaming Operator</h3>
                                        <p class="brand">
                                        <h4 class="blue">SIMBA/TPG</h4>
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-3">
                                        <div class="border-b-sec">
                                            <h3>Internet Rates</h3>
                                            <p class="blue">Free Unlimited Data Roaming</p>
                                            <p class="small">(10GB highspeed data and 512kbps thereafter)</p>
                                            <p class="blue mt-3">
                                                <a href="/yes-postpaid-plans/#postpaid-plans" target="_blank"
                                                    style="text-decoration: underline; font-weight: normal;color: #000;">
                                                    Check out our plans</a>.
                                            </p>
                                        </div>
                                        <div class="border-b-sec">
                                            <p class="blue mt-3 pt-3">Add-On Availability</p>
                                            <p class="blue mt-2">YesRoam SG Daily Top-Up</p>
                                            <p class="blue mt-2">Unlimited</p>
                                            <p class="small" data-internet-speed="sg-internet-speed">(1GB highspeed data and 512Kbps thereafter)</p>
                                            <h4 class="blue mt-2" data-internet="sg-internet-rates">RM8</h4>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Call &amp; SMS Rates</h3>
                                            </div>

                                            <div class="col-6 col-lg-6">
                                                <p class="ctitle">Calls to any SG number</p>
                                                <h4 class="blue">RM3.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Calls to other country’s number</p>
                                                <h4 class="blue">RM28.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Calls to any MY number</p>
                                                <h4 class="blue">FREE</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Receiving calls</p>
                                                <h4 class="blue">FREE</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">SMS</p>
                                                <h4 class="blue">RM1.00 /SMS</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-12 mt-3" data-country="Singapore" style="display: block;">
                <div style="background:#fff; border-radius: 15px;">
                    <h1 class="sg-raom-logo-mth">
                        <img class="mb-0" src="/wp-content/uploads/2024/06/YesRoam-logo.png" alt="YesRoam" /> <span>SG
                            Daily</span>
                    </h1>

                    <div class="row row-roaming">
                        <div class="col-12 col-lg-2">
                            <div class="row">
                                <div class="col-12 border-b-sec">
                                    <h3>Plans</h3>
                                    <h4>Other Yes Postpaid Plans</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="">
                                <div class="row">
                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Roaming Operator</h3>
                                        <p class="brand">
                                        <h4 class="blue">SIMBA/TPG</h4>
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-3">
                                        <div class="border-b-sec">
                                            <h3>Internet Rates</h3>
                                            <h4 class="internet-rates">
                                                <span data-internet="sg-internet-rates">RM10</span>
                                            </h4>
                                        </div>
                                        <div class="border-b-sec">
                                            <p class="blue">Unlimited Data Roaming</p>
                                            <p class="small" data-internet-speed="sg-internet-speed">(1GB highspeed data and 512kbps thereafter)</p>
                                        </div>
                                        <!-- <div class="border-b-sec">
                                            <p class="blue mt-3 pt-3">Add-On Availability</p>
                                            <p class="blue mt-2">YesRoam SG Daily Top-Up</p>
                                            <p class="blue mt-2">Unlimited</p>
                                            <p class="small">(1GB highspeed data and 512Kbps thereafter)</p>
                                            <h4 class="blue mt-2">RM8 /<span>day</span></h4>
                                        </div> -->
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Call &amp; SMS Rates</h3>
                                            </div>

                                            <div class="col-6 col-lg-6">
                                                <p class="ctitle">Calls to any SG number</p>
                                                <h4 class="blue">RM3.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Calls to other country’s number</p>
                                                <h4 class="blue">RM28.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Calls to any MY number</p>
                                                <h4 class="blue">FREE</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Receiving calls</p>
                                                <h4 class="blue">FREE</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">SMS</p>
                                                <h4 class="blue">RM1.00 /SMS</h4>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-12 mt-3" data-country="Singapore" style="display: none;">
                <div style="background:#fff; border-radius: 15px;">
                    <h1 class="raom-logo">
                        <img class="mb-0" src="/wp-content/uploads/2024/06/YesRoam-logo.png" alt="YesRoam" /> <span>Pay
                            As You Use</span>
                    </h1>

                    <div class="row row-roaming">
                        <div class="col-12 col-lg-2">
                            <div class="row">
                                <div class="col-12 border-b-sec">
                                    <h3>Plans</h3>
                                    <h4>Yes Postpaid Plans</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="">
                                <div class="row">
                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Roaming Operator</h3>
                                        <p class="brand">
                                        <h4 class="blue">StarHub / M1</h4>
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Call &amp; SMS Rates</h3>
                                            </div>

                                            <div class="col-6 col-lg-6">
                                                <p class="ctitle">Call to any SG number</p>
                                                <h4 class="blue">RM3.00 /Min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle"> Call to other country’s number</p>
                                                <h4 class="blue">RM28.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Call to any MY number</p>
                                                <h4 class="blue">RM1.80/min</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Receiving Calls</p>
                                                <h4 class="blue">RM1.40/min</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">SMS</p>
                                                <h4 class="blue">RM1.00 /SMS</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>

                </div>
            </div>

            <!--end Singapore -->

            <!--Asean Roam section data-country="AseanCountry"-->
            <div data-country="aseanPlusCountry" style="display:none;">
                <div class="row mt-3" id="asian-roam-section">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button id="dayone-tab" class="nav-link right-tab active" role="tab" type="button"
                                data-bs-toggle="tab" data-bs-target="#dayone" aria-controls="dayone"
                                aria-selected="false">1 Day</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="daythree-tab" class="nav-link left-tab" role="tab" type="button"
                                data-bs-toggle="tab" data-bs-target="#daythree" aria-controls="daythree"
                                aria-selected="true">
                                3 Days</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="dayseven-tab" class="nav-link left-tab" role="tab" type="button"
                                data-bs-toggle="tab" data-bs-target="#dayseven" aria-controls="dayseven"
                                aria-selected="true">
                                7 Days</button>
                        </li>
                    </ul>
                </div>
            </div>


            <!--other country -->
            <div class="col-12 mt-3" data-country="OtherCountry">
                <div style="background:#fff; border-radius: 15px;">
                    <h1 id="header" class="raom-logo">
                        <img class="mb-0" src="/wp-content/uploads/2024/06/YesRoam-logo.png" alt="YesRoam" /> <span
                            data-countrytitle="aseanCountryTitle">Day
                            Pass</span>
                    </h1>

                    <div class="row row-roaming">
                        <div class="col-12 col-lg-2">
                            <div class="row">
                                <div class="col-12">
                                    <h3>Plans</h3>
                                    <h4 data-name="planName">Yes Postpaid Plans</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="roaming-table">
                                <div class="row" data-template="roamingTemplate" data-asianCountriesDays="NoDay">
                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Roaming Operator</h3>
                                        <p class="brand">
                                        <h4 data-name="telcoName" class="blue">Personal</h4>
                                        </p>                                        
                                    </div>

                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Internet Rates</h3>
                                        <h4 class="internet-rates">
                                            <span>RM</span><b data-name="planDayRateAmt">38</b><sub
                                                data-name="planDayRateSubset">/Day</sub>
                                        </h4>
                                        <p class="blue mt-3" data-name="planDayRateQuota">Up to 100MB Data</p>
                                        <p class="small asean-storage-val" data-name="planDayRateTnc">Once the quota is
                                            finished, the data
                                            speed will
                                            be reduced until your day pass expires without additional cost.</p>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Call &amp; SMS Rates</h3>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle" data-name="planCallWithinCountryTxt">Calls within
                                                    Argentina</p>
                                                <h4 class="blue" data-name="planCallWithinCountryRate">RM6.00 /Min</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Calls to other countries</p>
                                                <h4 class="blue" data-name="planCallToOtherCountriesRate">RM9.00 /Min
                                                </h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Calls to Malaysia</p>
                                                <h4 class="blue" data-name="planCallToMalaysiRate">RM6.00 /Min</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Receiving calls</p>
                                                <h4 class="blue" data-name="planReceivingCallRate">RM5.00 /Min</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">SMS</p>
                                                <h4 class="blue" data-name="planSmsRate">RM1.00 /SMS</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>

                </div>
            </div>
            <!--end other country -->

            <!-- section roam top-up -->
            <fieldset id="topup-roaming-table" data-name="topUp">
                <div class="col-12 mt-3" data-template="topupRoamingTemplate" style="display: none;">
                    <div class="row roam-topup" id="topUpRoamingTemp">
                        <div class="col-12 col-lg-2">
                            <h2 data-name="topuptitle" class="raom-logo">
                                <img class="mb-0" src="/wp-content/uploads/2024/06/YesRoam-logo.png" alt="YesRoam" />
                            </h2>
                            <h3>Top-up</h3>
                            <div class="operator-sec">
                                <h3>Roaming Operator</h3>
                                <h4 data-name="topupTelcoName">Telstra</h4>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="roaming-table">
                                <div class="row d-flex" style="display: block;">
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">100MB<br>
                                                <span data-name="topupPlanDayRateSubset">per day</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_100"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">150MB<br>
                                                <span data-name="topupPlanDayRateSubset">per day</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_150"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">200MB<br>
                                                <span data-name="topupPlanDayRateSubset">per day</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_200"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">300MB<br>
                                                <span data-name="topupPlanDayRateSubset">per day</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_300"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">400MB<br>
                                                <span data-name="topupPlanDayRateSubset">per day</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_400"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">500MB<br>
                                                <span data-name="topupPlanDayRateSubset">per day</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_500"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>

                                    <!-- <div class="col-12 col-lg-4 mb-3">
                                    <div class="inner-sec-bg">
                                        <h4>300MB<br>
                                            <span>per day</span>
                                        </h4>
                                        <h5 class="internet-rates">
                                            <span><sub>RM</sub>25</span>
                                        </h5>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 mb-3">
                                    <div class="inner-sec-bg">
                                        <h4>500MB<br>
                                            <span>per day</span>
                                        </h4>
                                        <h5 class="internet-rates">
                                            <span><sub>RM</sub>38</span>
                                        </h5>
                                    </div>
                                </div> -->
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </fieldset>

            <!-- end section roam top-up -->

            <div class="col-12 text-left" style="font-size:12px;">&nbsp;
                <p>• Prices shown above are subject to 6% service tax.</p>
                <!-- <p>• The call rates shown above are not applicable for calls to Premium Numbers, Satellites and special
                    services.</p> -->
                <p>• The call rates shown above are not applicable for calls to premium numbers, satellites, or special
                    services.</p>
                <p>• For more information, please contact YesCare via email <a
                        href="mailto:yescare@yes.my">yescare@yes.my</a>.</p>
                <h3 class="text-center questions-head mt-3">
                    Got questions?
                </h3>
                <p class="text-center mt-3 mb-0"><a href="/faq/roaming" class="viewall-btn">Click here to View FAQs
                        <span class="iconify" data-icon="akar-icons:arrow-right"></span> </a></p>
            </div>
        </div>
        <div class="col-12 mt-5 text-center">
            <a href="#" data-link="closeRoaming" class="pink-btn">Close <span class="iconify"
                    data-icon="carbon:close-filled"></span></a>
        </div>
    </div>
</section>
<!--Roaming Rates Section End-->

<!--Roaming Tips Start data-roaming="roaming-rates"-->
<section id="roaming-tips">
    <div class="container">
        <div class="row">

            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button id="s-month-tab" class="nav-link1 right-tab active" role="tab" type="button"
                        data-bs-toggle="tab" data-bs-target="#s-month" aria-controls="s-month"
                        aria-selected="false">ASEAN PLUS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button id="f-month-tab" class="nav-link1 left-tab" role="tab" type="button" data-bs-toggle="tab"
                        data-bs-target="#f-month" aria-controls="f-month" aria-selected="true">
                        SINGAPORE</button>
                </li>
            </ul>

            <div id="myTabContent" class="tab-content">
                <!-- 24-Month plans -->
                <div id="s-month" class="tab-pane fade active show" role="tabpanel" aria-labelledby="s-month-tab">
                    <div class="col">
                        <h1>ASEAN Plus Roaming</h1>
                        <p>The biggest savings on ASEAN data roaming from only RM10!</p>

                        <div class="row gx-5 mt-5">
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="selfcare" class="mb-4" src="/wp-content/uploads/2024/06/data-roaming.png">
                                <h2>Unlimited Data Roaming</h2>
                                <p>The most affordable roaming pass with no data cap.</p>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="credit-limit" class="mb-4"
                                    src="/wp-content/uploads/2024/06/roaming-passes.png">
                                <h2>Flexible Roaming Passes</h2>
                                <p>Get the best rates based on the duration of your trips.</p>
                            </div>

                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="deactivate" class="mb-4" src="/wp-content/uploads/2024/06/destinations.png">
                                <h2>Across 11 Destinations</h2>
                                <p>Enjoy the same rate for various ASEAN Plus countries.</p>
                            </div>

                        </div>

                        <div class="row" id="roaming-tips-title">
                            <div class="col-12 mt-0">
                                <h2>
                                    More ways to stay connected with <br>
                                    <img src="/wp-content/uploads/2024/06/roam-asian-logo.png" alt="...">
                                </h2>
                                <p>
                                    Pre-book your Data Roaming Pass with the MyYes App.
                                </p>
                            </div>
                        </div>

                        <div class="row mt-5" id="roaming-tips-inner">
                            <div class="col-12 col-xl-12 col-md-12 mx-auto">
                                <div class="row flex-nowrap flex-xl-wrap getway layer-plans">
                                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="plan-details-list">
                                                    <h3>
                                                        Daily Pass
                                                    </h3>
                                                    <p>1 GB</p>
                                                    <ul>
                                                        <li>Unlimited (512kbps after 1GB).</li>
                                                        <li>Customise your activation date up to 30 days in advance.
                                                        </li>
                                                        <li>Cancel your pass anytime before 2 days from activation.</li>

                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <h2>RM10</h2>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="plan-details-list">
                                                    <h3>3 Days Pass</h3>
                                                    <p>5 GB</p>
                                                    <ul>
                                                        <li>Unlimited (512kbps after 5GB).</li>
                                                        <li>Customise your activation date up to 30 days in advance.
                                                        </li>
                                                        <li>Cancel your pass anytime before 2 days from activation.</li>
                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <h2>
                                                            RM20
                                                        </h2>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="plan-details-list">
                                                    <h3>7 Days Pass</h3>
                                                    <p>10 GB</p>
                                                    <ul>
                                                        <li>Unlimited (512kbps after 10GB).</li>
                                                        <li>Customise your activation date up to 30 days in advance.
                                                        </li>
                                                        <li>Cancel your pass anytime before 2 days from activation.</li>
                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <h2>
                                                            RM30
                                                        </h2>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 12-Month plans -->
                <div id="f-month" class="tab-pane fade" role="tabpanel" aria-labelledby="f-month-tab">
                    <div class="col">
                        <h1>Singapore Roaming</h1>
                        <p>Enjoy the best of data roaming in Singapore with Yes Infinite.</p>

                        <div class="row gx-5 mt-5">
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="selfcare" class="mb-4"
                                    src="/wp-content/uploads/2024/06/unlimited-roaming.png">
                                <h2>Unlimited 5G Roaming</h2>
                                <p>The most affordable roaming plan with no data cap.</p>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="credit-limit" class="mb-4"
                                    src="/wp-content/uploads/2024/06/incoming-calls.png">
                                <h2>FREE Incoming Calls</h2>
                                <p>With FREE outgoing calls to any Malaysian number.</p>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="deactivate" class="mb-4"
                                    src="/wp-content/uploads/2024/06/infinite-postpaid.png">
                                <h2>FREE with Infinite Postpaid</h2>
                                <p>Get uncapped 5G data & speed while in Malaysia.</p>
                            </div>
                        </div>

                        <div class="row" id="roaming-tips-title">
                            <div class="col-12 mt-0">
                                <h2>
                                    <!-- More ways to stay connected with <br>
                    <img src="/wp-content/uploads/2024/05/roam-asian-logo.png" alt="..."> -->
                                    Connect seamlessly in Singapore<br>
                                    with YesRoam SG
                                </h2>
                                <p>
                                    <!-- Pre-book your Data Roaming Pass with the MyYes App. -->
                                    Get the best rates for unlimited roaming with our flexible day passes.
                                </p>
                            </div>
                        </div>

                        <div class="row mt-5" id="roaming-tips-inner">
                            <div class="col-12 col-xl-12 col-md-12 mx-auto">
                                <div class="row flex-nowrap flex-xl-wrap getway layer-plans">
                                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="plan-details-list">
                                                    <h3>1 Day Pass
                                                        <!-- Daily Pass -->
                                                    </h3>
                                                    <p>1 GB</p>
                                                    <ul>
                                                        <!-- <li>Unlimited (512kbps after 1GB).</li>
                                        <li>Customise your activation date up to 30 days in advance.</li>
                                        <li>Cancel your pass anytime before 2 days from activation.</li> -->
                                                        <li>Unlimited 5G + 4G data for 24 hours upon activation.</li>
                                                        <li>1GB high-speed data, 512kbps thereafter.</li>
                                                        <li>For customers without Infinite Postpaid plan.</li>
                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <!-- <h2>RM10</h2> -->
                                                        <h2>RM8</h2>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="plan-details-list">
                                                    <h3>3 Days Pass</h3>
                                                    <p>5 GB</p>
                                                    <ul>
                                                        <!-- <li>Unlimited (512kbps after 5GB).</li>
                                        <li>Customise your activation date up to 30 days in advance.</li>
                                        <li>Cancel your pass anytime before 2 days from activation.</li> -->
                                                        <li>Unlimited 5G + 4G data for 72 hours upon activation.</li>
                                                        <li>5GB high-speed data, 512kbps thereafter.</li>
                                                        <li>For customers without Infinite Postpaid plan.</li>
                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <h2>
                                                            RM12
                                                            <!-- RM20 -->
                                                        </h2>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="plan-details-list">
                                                    <h3>7 Days Pass</h3>
                                                    <p>10 GB</p>
                                                    <ul>
                                                        <li>Unlimited 5G + 4G data for 168 hours upon activation.</li>
                                                        <li>10GB high-speed data, 512kbps thereafter.</li>
                                                        <li>For customers without Infinite Postpaid plan.</li>
                                                        <!-- <li>Unlimited (512kbps after 10GB).</li>
                                        <li>Customise your activation date up to 30 days in advance.</li>
                                        <li>Cancel your pass anytime before 2 days from activation.</li> -->
                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <h2>
                                                            RM20
                                                            <!-- RM30 -->
                                                        </h2>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!--Roaming Tips End-->

<!-- Pass section -->
<section class="pass-section" id="pass-section">
    <div class="container">
        <!-- <div class="row">
            <div class="col-12 mt-0">
                <h2>                    
                    Connect seamlessly in Singapore<br>
                    with YesRoam SG
                </h2>
                <p>                    
                    Get the best rates for unlimited roaming with our flexible day passes.
                </p>
            </div>
        </div> -->

        <!-- <div class="row mt-5">
            <div class="col-12 col-xl-12 col-md-12 mx-auto">
                <div class="row flex-nowrap flex-xl-wrap getway layer-plans">
                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <div class="plan-details-list">
                                    <h3>1 Day Pass                                        
                                    </h3>
                                    <p>1 GB</p>
                                    <ul>
                                        <li>Unlimited 5G + 4G data for 24 hours upon activation.</li>
                                        <li>1GB high-speed data, 512kbps thereafter.</li>
                                        <li>For customers without Infinite Postpaid plan.</li>
                                    </ul>
                                </div>
                                <div class="price-section">
                                    <div class="price-left">
                                        <h2>RM8</h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <div class="plan-details-list">
                                    <h3>3 Days Pass</h3>
                                    <p>5 GB</p>
                                    <ul>
                                        <li>Unlimited 5G + 4G data for 72 hours upon activation.</li>
                                        <li>5GB high-speed data, 512kbps thereafter.</li>
                                        <li>For customers without Infinite Postpaid plan.</li>
                                    </ul>
                                </div>
                                <div class="price-section">
                                    <div class="price-left">
                                        <h2>
                                        RM12
                                        </h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <div class="plan-details-list">
                                    <h3>7 Days Pass</h3>
                                    <p>10 GB</p>
                                    <ul>
                                    <li>Unlimited 5G + 4G data for 168 hours upon activation.</li>
                                        <li>GB high-speed data, 512kbps thereafter.</li>
                                        <li>For customers without Infinite Postpaid plan.</li>
                                    </ul>
                                </div>
                                <div class="price-section">
                                    <div class="price-left">
                                        <h2>
                                        RM20
                                        </h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->

        <div class="row mt-0">
            <div class="col-12 col-xl-12 col-md-12 mt-0" id="destinations-slider-sec">

                <h3 class="line-b background"><span>Applicable ASEAN Plus destinations</span></h3>

                <div class="destinations-slider">
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Brunei.png">
                        <h2>Brunei</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Cambodia.png">
                        <h2>Cambodia</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/China.png">
                        <h2>China</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Hong-Kong.png">
                        <h2>Hong Kong</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Indonesia.png">
                        <h2>Indonesia</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Laos.png">
                        <h2>Laos</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Macau.png">
                        <h2>Macau</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Philippines.png">
                        <h2>Philippines</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Taiwan.png">
                        <h2>Taiwan</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Thailand.png">
                        <h2>Thailand</h2>
                    </div>
                    <div class="services-inner">
                        <img src="/wp-content/uploads/2024/06/Vietnam.png">
                        <h2>Vietnam</h2>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Pass section End-->

<!--Start Roaming Start data-roaming="roaming-rates"-->
<section id="start-roaming" style="display:block;">
    <div class="container">
        <!-- <h1>How to start roaming on your device?</h1> -->
        <div class="row justify-content-center">
            <div class="col-12 gx-5">
                <div class="row">
                    <div class="col-12 col-lg-5 start-roaming-cont-m">
                        <h2 class="num-box">Steps to start roaming on your device​</h2>
                        <img src="/wp-content/uploads/2024/06/roaming-device.png" class="mb-0" alt="">
                    </div>

                    <div class="col-12 col-lg-7 start-roaming-cont-r">
                        <div class="row row-cols-2">
                            <div class="col start-roaming-cont">
                                <h2 class="num-box"><span>1</span> <strong>Launch the MyYes App</strong></h2>
                                <p class="mt-3">Activate 'International Roaming Service' from the YesRoam quick access.
                                </p>
                            </div>
                            <div class="col start-roaming-cont">
                                <h2 class="num-box"><span>2</span> <strong>Go to 'Settings' on your device</strong></h2>
                                <p class="mt-3">Select 'Mobile Network', then 'Network Operators', and connect to our
                                    preferred roaming operator.</p>

                            </div>
                            <div class="col start-roaming-cont">
                                <h2 class="num-box"><span>3</span> <strong>Go to 'Mobile Network' on your
                                        device</strong></h2>
                                <p class="mt-3">Turn on 'Data Roaming & Mobile Data' to enable data service while
                                    abroad.</p>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<!--Start Roaming End-->

<!--Countries Section Start-->
<!--<section id="countries-section" style="display:none;">
    <h1>Roam internationally at these 22 of countries</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="carousel-roaming">
                    <div>
                        <div class="row gy-5 row-roaming-country">
                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/australia.png">
                                <h2>Australia</h2>
                                <p>Telstra</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/austria.png">
                                <h2>Austria</h2>
                                <p>Hutchison - 3 (Drei)</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/bangladesh.png">
                                <h2>Bangladesh</h2>
                                <p>GrameenPhone</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/brunei.png">
                                <h2>Brunei Darussalam</h2>
                                <p>DSTCom</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/cambodia.png">
                                <h2>Cambodia</h2>
                                <p>Viettel - Metfone</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/canada.png">
                                <h2>Canada</h2>
                                <p>Rogers Communications</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/china.png">
                                <h2>China</h2>
                                <p>China Mobile</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/denmark.png">
                                <h2>Denmark</h2>
                                <p>TDC</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/hong-kong.png">
                                <h2>Hong Kong</h2>
                                <p>China Mobile HK</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/india.png">
                                <h2>India</h2>
                                <p>Vodafone</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/indonesia.png">
                                <h2>Indonesia</h2>
                                <p>PT Indosat Tbk</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/south-korea.png">
                                <h2>Republic of Korea</h2>
                                <p>SK Telecom (SKT)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row gy-5 row-roaming-country">
                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/macau.png">
                                <h2>Macau</h2>
                                <p>Hutchison (3)</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/maynmar.png">
                                <h2>Myanmar</h2>
                                <p>Telenor</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/saudi.png">
                                <h2>Saudi Arabia</h2>
                                <p>Zain SA</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/singapore.png">
                                <h2>Singapore</h2>
                                <p>StarHub/M1</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/sweden.png">
                                <h2>Sweden</h2>
                                <p>H3G Access AB (3)</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/taiwan.png">
                                <h2>Taiwan</h2>
                                <p>APTG</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/thailand.png">
                                <h2>Thailand</h2>
                                <p>True Move</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/uk.png">
                                <h2>United Kingdom</h2>
                                <p>Hutchison (3)</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/us.png">
                                <h2>United States</h2>
                                <p>T-Mobile</p>
                            </div>

                            <div class="col-6 col-md-4 col-lg-2"><img src="/wp-content/uploads/2022/06/vietnam.png">
                                <h2>Vietnam</h2>
                                <p>Vietnamobile</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--Countries Section End-->

<!-- Banner2 Start -->
<section id="roaming-banner" class="roaming-bg2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-8 d-flex align-items-center" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="200">
                <div class="m-auto">
                    <h1>Overseas calls made affordable</span></h1>
                    <p>Check our International Direct Dialling (IDD) rates for the country you’re calling.</p>
                    <div class="search-box dropdown">
                        <?php get_template_part('template-parts/roaming/dropdown-idd', '', ['data_idd' => $args['data_idd']]); ?>
                        <input id="iddSelect" name="iddSelect" type="hidden" />
                        <button class="btn" data-button="openIdd">Check IDD rates</button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<!-- Banner2 End -->

<!--Roaming Rates Section Start-->
<section id="roaming-rates-section" data-fieldset="idd" style="display:none;">
    <div class="container">
        <div class="row row-roaming idd-call-sec">
            <h2><span>Affordable</span> IDD rates just the<br> way you like it.</h2>
            <div class="col-8 m-auto">
                <div class="row header">
                    <div class="col-12">
                        <p class="sub">&nbsp;</p>
                    </div>

                    <div class="col-12 country-sec-t">
                        <h3 class="pb-0 mb-0">Country (Code)</h3>
                        <h4 class="pb-0 mb-0" data-name="iddName">Afghanistan (93)</h4>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <h4 data-name="iddName">Afghanistan (93)</h4>
                    </div>
                </div> -->
            </div>

            <div class="col-12 col-lg-8 m-auto">
                <div class="row header">
                    <!-- <div class="col-5"></div>
                    <div class="col-6 text-center">
                        <p class="sub my-2 my-lg-0">Call Rate (RM/Min)</p>
                    </div> -->
                    <div class="col-3">
                        <h3>Plan</h3>
                    </div>

                    <div class="col-3 text-center">
                        <h3>Fixed</h3>
                    </div>

                    <div class="col-3 text-center">
                        <h3>Mobile</h3>
                    </div>

                    <div class="col-3 text-center">
                        <h3>SMS Rate (RM)</h3>
                    </div>

                </div>

                <div class="row" data-filter="postpaid">
                    <div class="col-3">
                        <p class="plan-n-t">Mobile Postpaid Plan</p>
                    </div>

                    <div class="col-3 text-center">
                        <h4 data-name="iddPostpaidFixed" class="price-color">1.80</h4>
                    </div>

                    <div class="col-3 text-center">
                        <h4 data-name="iddPostpaidMobile" class="price-color">1.80</h4>
                    </div>
                    <div class="col-3 text-center">
                        <h4 data-name="iddPostpaidSms" class="price-color">0.28</h4>
                    </div>
                </div>

                <div class="row" data-filter="prepaid">
                    <div class="col-3">
                        <p class="plan-n-t">Mobile Prepaid Plan </p>
                    </div>

                    <div class="col-3 text-center">
                        <h4 data-name="iddPrepaidFixed" class="price-color">1.80</h4>
                    </div>

                    <div class="col-3 text-center">
                        <h4 data-name="iddPrepaidMobile" class="price-color">1.80</h4>
                    </div>
                    <div class="col-3 text-center">
                        <h4 data-name="iddPrepaidSms" class="price-color">0.28</h4>
                    </div>
                </div>





            </div>

            <!-- <div class="col-12 col-lg-2 d-none">
                <div class="row header">
                    <div class="col-12">
                        <p class="sub">&nbsp;</p>
                    </div>

                    <div class="col-5 d-lg-none">
                        <h3>Plan</h3>
                    </div>

                    <div class="col-6 col-lg-12 text-center">
                        <h3>SMS Rate (RM)</h3>
                    </div>
                </div>
                <div class="row" data-filter="postpaid">
                    <div class="col-5 d-lg-none">
                        <p>Mobile Postpaid Plan</p>
                    </div>

                    <div class="col-6 col-lg-12 text-center">
                        <h4 data-name="iddPostpaidSms">0.28</h4>
                    </div>
                </div>

                <div class="row" data-filter="prepaid">
                    <div class="col-5 d-lg-none">
                        <p>Mobile Prepaid Plan </p>
                    </div>

                    <div class="col-6 col-lg-12 text-center">
                        <h4 data-name="iddPrepaidSms">0.28</h4>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-8 m-auto text-left idd-rate">&nbsp;
                <p>• Prices shown above are subject to 6% service tax.</p>

                <p>• IDD calls are charged at 60 seconds block.</p>

                <p>• Rates are subject to change without prior notice.</p>
                <a href="#" data-button="closeIdd" class="pink-btn mt-5">Close <span class="iconify"
                        data-icon="carbon:close-filled"></span></a>
            </div>
        </div>
    </div>
</section>
<!--Roaming Rates Section End-->


<!-- benefits section -->
<section class="benefits-section mt-4 mt-lg-0" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <h4 class="mb-4">More roaming benefits<br> with Yes Infinite Plans</h4>
        </div>
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-12">
                <img src="/wp-content/uploads/2024/06/roaming-benefits-banner.webp" class="w-100 d-none d-lg-block"
                    alt="...">
                <img src="/wp-content/uploads/2024/06/roaming-benefits-banner-mob.webp"
                    class="w-100 d-block d-md-block d-lg-none" alt="...">
            </div>
        </div>
    </div>
</section>
<!-- benefits section End-->

<!-- Footer FAQs STARTS -->
<section class="layer-footerFAQ mt-4 mt-lg-0" id="faq-section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <h1 class="mb-3">Frequently Asked Questions</h1>
        </div>
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-12">
                <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne"><button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                                What is YesRoam?
                            </button></h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>YesRoam provides customers unlimited data roaming when you connect to our preferred
                                    roaming partner while traveling overseas.
                                    YesRoam is available in certain designated countries.
                                    For the full list of eligible countries and information on pricing,
                                    please visit<a href="/roaming/"> yes.my/roaming</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo"><button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                How do I subscribe to YesRoam?
                            </button></h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush- 
                             headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    YesRoam is available to our Postpaid customers. After enabling the roaming service,
                                    please ensure your roaming is activated via MyYes app > YesRoam > Activate Roaming.
                                    A roaming deposit may be required. You will be auto subscribed to either YesRoam
                                    Daily or YesRoam Monthly when you arrive at the designated country and connect to
                                    the preferred roaming operator.
                                    Note: If you are a principal line user, you may assist your supplementary lines to
                                    activate YesRoam by increasing the credit limit or paying additional roaming deposit
                                    via MyYes app to activate YesRoam. Login to primary account > Switch to
                                    supplementary line in account dropdown > Click More > Roaming > Activate Roaming >
                                    Increase credit limit or pay deposit > Activate roaming.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree"><button class="accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                aria-expanded="false" aria-controls="flush-collapseThree">
                                What is YesRoam Monthly?</button></h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>YesRoam Monthly offers free unlimited data roaming with our Yes Infinite and Yes
                                    Infinite+ Postpaid Plans.
                                    It also includes free incoming calls from any Malaysian number and free outgoing
                                    calls to any Malaysian number while in the roaming country. SMS is charged as per
                                    roaming rates at <a href="/roaming/"> yes.my/roaming</a>.
                                    Customers will enjoy unlimited data roaming starting with 10GB high speed data,
                                    followed by unlimited data roaming at 512kbps.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mb-0"><a href="/docs/faq/roaming-idd/" class="viewall-btn">View All FAQs
                        <!-- <img src="/wp-content/uploads/2023/10/next-arrow-icon.png" alt="..." style="width: 10px;"> -->
                        <span class="iconify" data-icon="akar-icons:arrow-right"></span>
                    </a></p>
            </div>
        </div>
    </div>
</section>
<!-- Footer FAQs ENDS -->

<?php get_template_part('template-parts/roaming/scripts'); ?>