<!-- Styles -->

<?php get_template_part('template-parts/roaming/styles'); ?>

<!-- Breadcrumb Start -->
<section class="breadcrumb-section">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/ms">Laman Utama</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Perayauan</a></li>
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
                <h1>Lebih lagi untuk dinikmati<br>
                    di Asia Tenggara dengan<br>
                    YesRoam ASEAN Plus</h1>
                <div class="btn-sec d-flex align-items-center">
                    <div class="pricing-2">
                        <h4 class="d-block">
                            <sup><span>Dari<br><b>RM</b></span></sup>10<span class="month-sec"> / bln</span>
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
            <!--<button type="button" data-bs-target="#hero-slider" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#hero-slider" data-bs-slide-to="4" aria-label="Slide 5"></button> -->
        </div>

        <div class="carousel-inner">  
            <div class="carousel-item active" data-bs-interval="5000">
            <img src="/wp-content/uploads/2024/06/roam-banner-web.webp" class="w-100 d-none d-lg-block" alt="...">
            <img src="/wp-content/uploads/2024/06/roam-banner-mob.webp" class="w-100 d-block d-md-block d-lg-none" alt="...">
                <article>
                    <div class="container">
                        <div class="inner-content-sec">
                            <div>
                            <h1>Lebih lagi untuk dinikmati<br>
                    di Asia Tenggara dengan<br>
                    YesRoam ASEAN Plus</h1>
                                <div class="btn-sec d-flex align-items-center">
                                    <div class="pricing-2 align-items-center">                                        
                                            <h4 class="d-block">
                                                <sup><span>Dari<br><b>RM</b></span></sup>10<span class="month-sec">/bln</span>
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
            <div class="col-11 col-lg-8 d-flex align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="m-auto">
                    <h1>Pilih Destinasi</h1>
                    <p>Semak kadar perayauan Data atau 'Pay As You Use' kami</p>
                    <div class="search-box dropdown">
                        <?php get_template_part('template-parts/roaming/dropdown-roaming', '', ['data_roaming' => $args['data_roaming']]); ?>
                        <input id="roamingSelect" name="roamingSelect" type="hidden" />
                        <button data-button="openRoaming" class="btn">Semak kadar Perantauan</button>
                    </div>
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
                                aria-selected="false">1 Hari</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="sg-daythree-tab" class="s-nav-link left-tab" role="tab" type="button"
                                data-bs-toggle="tab" data-bs-target="#sg-daythree" aria-controls="sg-daythree"
                                aria-selected="true">3 Hari</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="sg-dayseven-tab" class="s-nav-link left-tab" role="tab" type="button"
                                data-bs-toggle="tab" data-bs-target="#sg-dayseven" aria-controls="sg-dayseven"
                                aria-selected="true">7 Hari</button>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Singapore -->
            <div class="col-12 mt-0" data-country="Singapore" style="display: block;">
                <div style="background:#fff; border-radius: 15px;">
                    <h1 class="raom-logo">
                        <img class="mb-0" src="/wp-content/uploads/2024/06/YesRoam-logo.png" alt="YesRoam" /> <span>SG Monthly</span>
                    </h1>

                    <div class="row row-roaming">
                        <div class="col-12 col-lg-2">
                            <div class="row">
                                <div class="col-12 border-b-sec">
                                    <h3>Pelan</h3>
                                    <h4><span style="font-weight:500">Hanya di Singapura dengan mana-mana<span>
                                                <strong>Pelan Yes Infinite</strong> atau
                                                <strong>Yes Infinite+</strong></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="">
                                <div class="row">
                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Operator Perayauan</h3>
                                        <p class="brand">
                                        <h4 class="blue">SIMBA/TPG</h4>
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-3">
                                        <div class="border-b-sec">
                                            <h3>Kadar Internet</h3>
                                            <p class="blue">Percuma Perayauan Data Tanpa Had</p>
                                            <p class="small">(10GB data berkelajuan tinggi dan 512kbps kemudian)</p>
                                            <p class="blue mt-3">
                                                <a href="/ms/yes-postpaid-plans/#postpaid-plans" target="_blank" style="text-decoration: underline; font-weight: normal;color: #000;">
                                                    Semak pelan kami</a>.
                                            </p>
                                        </div>
                                        <div class="border-b-sec">
                                            <p class="blue mt-3 pt-3">Pilihan Tambahan</p>
                                            <p class="blue mt-2">YesRoam SG Daily Top-Up</p>
                                            <p class="blue mt-2">Tanpa Had</p>
                                            <p class="small" data-internet-speed="sg-internet-speed">(1GB data berkelajuan tinggi dan 512kbps kemudian)</p>
                                            <h4 class="blue mt-2" data-internet="sg-internet-rates">RM10</h4>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Kadar Panggilan &amp; SMS</h3>
                                            </div>

                                            <div class="col-6 col-lg-6">
                                                <p class="ctitle">Panggilan ke nombor SG</p>
                                                <h4 class="blue">RM3.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Panggilan ke nombor di lain-lain negara</p>
                                                <h4 class="blue">RM28.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Panggilan ke nombor MY</p>
                                                <h4 class="blue">PERCUMA</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Terima panggilan</p>
                                                <h4 class="blue">PERCUMA</h4>
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
                        <img class="mb-0" src="/wp-content/uploads/2024/06/YesRoam-logo.png" alt="YesRoam" /> <span>SG Daily</span>
                    </h1>

                    <div class="row row-roaming">
                        <div class="col-12 col-lg-2">
                            <div class="row">
                                <div class="col-12 border-b-sec">
                                    <h3>Pelan</h3>
                                    <h4>Lain-lain Pelan Pascabayar Yes</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="">
                                <div class="row">
                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Operator Perayauan</h3>
                                        <p class="brand">
                                        <h4 class="blue">SIMBA/TPG</h4>
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-3">
                                        <div class="border-b-sec">
                                            <h3>Kadar Internet</h3>
                                            <h4 class="internet-rates">
                                                <span data-internet="sg-internet-rates">RM10</span>
                                            </h4>
                                        </div>
                                        <div class="border-b-sec">
                                            <p class="blue">Perayauan Data Tanpa Had</p>
                                            <p class="small" data-internet-speed="sg-internet-speed">(1GB data berkelajuan tinggi dan 512kbps kemudian)</p>
                                        </div>
                                        <!-- <div class="border-b-sec">
                                            <p class="blue mt-3 pt-3">Pilihan Tambahan</p>
                                            <p class="blue mt-2">YesRoam SG Daily Top-Up</p>
                                            <p class="blue mt-2">Tanpa Had</p>
                                            <p class="small">(1GB data berkelajuan tinggi dan 512kbps kemudian)</p>
                                            <h4 class="blue mt-2">RM8</h4>
                                        </div> -->
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Kadar Panggilan &amp; SMS</h3>
                                            </div>

                                            <div class="col-6 col-lg-6">
                                                <p class="ctitle">Panggilan ke nombor SG</p>
                                                <h4 class="blue">RM3.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Panggilan ke nombor di lain-lain negara</p>
                                                <h4 class="blue">RM28.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Panggilan ke nombor MY</p>
                                                <h4 class="blue">PERCUMA</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Terima panggilan</p>
                                                <h4 class="blue">PERCUMA</h4>
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
                <div style="background:#fff; border-radius: 15px;" >
                <h1 class="raom-logo">
                    <img class="mb-0" src="/wp-content/uploads/2024/06/YesRoam-logo.png" alt="YesRoam" /> <span>Pay As You Use</span>
                    </h1>
                    <div class="row row-roaming">
                        <div class="col-12 col-lg-2">
                            <div class="row">
                                <div class="col-12 border-b-sec">
                                    <h3>Pelan</h3>
                                    <h4>Pelan Pascabayar Yes</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="">
                                <div class="row">
                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Operator Perayauan</h3>
                                        <p class="brand">
                                        <h4 class="blue">StarHub / M1</h4>
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Kadar Panggilan &amp; SMS</h3>
                                            </div>

                                            <div class="col-6 col-lg-6">
                                                <p class="ctitle">Panggilan ke nombor SG</p>
                                                <h4 class="blue">RM3.00 /Min</h4>
                                            </div>  
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Panggilan ke nombor di lain-lain negara</p>
                                                <h4 class="blue">RM28.00 /min</h4>
                                            </div>
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Panggilan ke nombor MY</p>
                                                <h4 class="blue">RM1.80/min</h4>
                                            </div> 
                                        
                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Terima panggilan</p>
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
                            <button id="dayone-tab" class="nav-link right-tab active" role="tab" type="button" data-bs-toggle="tab" data-bs-target="#dayone" aria-controls="dayone" aria-selected="false">1 Hari</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="daythree-tab" class="nav-link left-tab" role="tab" type="button" data-bs-toggle="tab" data-bs-target="#daythree" aria-controls="daythree" aria-selected="true">
                                3 Hari</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="dayseven-tab" class="nav-link left-tab" role="tab" type="button" data-bs-toggle="tab" data-bs-target="#dayseven" aria-controls="dayseven" aria-selected="true">
                                7 Hari</button>
                        </li>
                    </ul>
                </div>
            </div>

            <!--other country -->
            <div class="col-12 mt-3" data-country="OtherCountry">
                <div style="background:#fff; border-radius: 15px;">
                    <h1 id="header" class="raom-logo">
                        <img class="mb-0" src="/wp-content/uploads/2024/06/YesRoam-logo.png" alt="YesRoam" /> <span data-title="PAYU">Day Pass</span>
                    </h1>
                    <div class="row row-roaming">
                        <div class="col-12 col-lg-2">
                            <div class="row">
                                <div class="col-12">
                                    <h3>Pelan</h3>
                                    <h4 data-name="planName">Pelan Pascabayar Yes</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="roaming-table">
                                <div class="row" data-template="roamingTemplate" style="display: none;">
                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Operator Perayauan</h3>
                                        <p class="brand">
                                        <h4 data-name="telcoName" class="blue">Personal</h4>
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-3 border-b-sec">
                                        <h3>Kadar Internet</h3>
                                        <h4 class="internet-rates">
                                            <span>RM</span><b data-name="planDayRateAmt">38</b><sub data-name="planDayRateSubset">/MB</sub>
                                        </h4>
                                        <p class="blue mt-3" data-name="planDayRateQuota">Perayauan Data Tanpa Had</p>
                                        <p class="small" data-name="planDayRateTnc">(500MB data berkelajuan tinggi dan 64kbps kemudian)</p>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Kadar Panggilan &amp; SMS</h3>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle" data-name="planCallWithinCountryTxt">Panggilan dalam Australia</p>
                                                <h4 class="blue" data-name="planCallWithinCountryRate">RM6.00 /min</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Panggilan ke nombor di lain-lain negara</p>
                                                <h4 class="blue" data-name="planCallToOtherCountriesRate">RM9.00 /min</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Panggilan ke Malaysia</p>
                                                <h4 class="blue" data-name="planCallToMalaysiRate">RM6.00 /min</h4>
                                            </div>

                                            <div class="col-6 col-lg-6 mt-2">
                                                <p class="ctitle">Terima panggilan</p>
                                                <h4 class="blue" data-name="planReceivingCallRate">RM5.00 /min</h4>
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
                                <h3>Operator Perayauan</h3>
                                <h4 data-name="topupTelcoName">Telstra</h4>
                            </div>
                        </div>

                        <div class="col-12 col-lg-10">
                            <fieldset id="roaming-table">
                                <div class="row d-flex" style="display: block;">
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">100MB<br>
                                                <span data-name="topupPlanDayRateSubset">sehari</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_100"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">150MB<br>
                                                <span data-name="topupPlanDayRateSubset">sehari</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_150"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">200MB<br>
                                                <span data-name="topupPlanDayRateSubset">sehari</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_200"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">300MB<br>
                                                <span data-name="topupPlanDayRateSubset">sehari</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_300"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">400MB<br>
                                                <span data-name="topupPlanDayRateSubset">sehari</span>
                                            </h4>
                                            <h5 class="internet-rates">
                                                <span data-name="topupPlanDayRateAmt_400"><sub>RM</sub>0</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="inner-sec-bg">
                                            <h4 data-name="topupPlanDayRateQuota">500MB<br>
                                                <span data-name="topupPlanDayRateSubset">sehari</span>
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
                <p>• Harga yang tertera adalah tertakluk kepada cukai perkhidmatan 6%.</p>
                <p>• Kadar panggilan tertera tidak tertakluk kepada panggilan ke nombor premium, satelit, dan perkhidmatan khas.</p>
                <p>• Untuk maklumat lanjut, sila hubungi YesCare melalui e-mel <a href="mailto:yescare@yes.my">yescare@yes.my</a>.</p>
                <h3 class="text-center questions-head mt-3">
                    Pertanyaan?
                </h3>
                <p class="text-center mt-3 mb-0"><a href="/faq/roaming" class="viewall-btn">
                        KLIK DI SINI UNTUK SOALAN LAZIM <span class="iconify" data-icon="akar-icons:arrow-right"></span> </a></p>
            </div>
        </div>
        <div class="col-12 mt-5 text-center">
            <a href="#" data-link="closeRoaming" class="pink-btn">Close <span class="iconify" data-icon="carbon:close-filled"></span></a>
        </div>
    </div>
</section>
<!--Roaming Rates Section End-->

<!--Roaming Tips Start-->
<!-- <section id="roaming-tips" data-roaming="roaming-rates" style="display:none;">
    <div class="container">
        <div class="row">
            <div class="col">&nbsp;
                <h1>Roaming Tips</h1>
                <div class="row gx-5 row-roaming-step">
                    <div class="col-12 col-md-6 col-xl-3 text-center">
                        <img alt="selfcare" class="mb-4" src="/wp-content/uploads/2022/08/yes-selfcare.png">
                        <p>Activate International Roaming service via Selfcare</p>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 text-center">
                        <img alt="credit-limit" class="mb-4" src="/wp-content/uploads/2022/08/credit-limit.png">
                        <p>Increase your credit limit via Selfcare to avoid any service distruption.</p>
                    </div>

                    <div class="col-12 col-md-6 col-xl-3 text-center">
                        <img alt="deactivate" class="mb-4" src="/wp-content/uploads/2022/08/deactivate.png">
                        <p>Turn off your Data Roaming &amp; Mobile Data in your phone setting if you don't wish to use data service while abroad
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 text-center">
                        <img alt="bills" class="mb-4" src="/wp-content/uploads/2022/08/bills.png">
                        <p>Settle all outstanding bills.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--Roaming Tips End-->



<!--Roaming Tips Start data-roaming="roaming-rates"-->
<section id="roaming-tips">
    <div class="container">
        <div class="row">

            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button id="s-month-tab" class="nav-link1 right-tab active" role="tab" type="button" data-bs-toggle="tab" data-bs-target="#s-month" aria-controls="s-month" aria-selected="false">ASEAN PLUS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button id="f-month-tab" class="nav-link1 left-tab" role="tab" type="button" data-bs-toggle="tab" data-bs-target="#f-month" aria-controls="f-month" aria-selected="true">
                        SINGAPORE</button>
                </li>
            </ul>

            <div id="myTabContent" class="tab-content">
                <!-- 24-Month plans -->
                <div id="s-month" class="tab-pane fade active show" role="tabpanel" aria-labelledby="s-month-tab">
                    <div class="col">
                        <h1>Perayauan ASEAN Plus​</h1>
                        <p>Penjimatan terbesar untuk perayauan ASEAN daripada hanya RM10.​</p>

                        <div class="row gx-5 mt-5">
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="selfcare" class="mb-4" src="/wp-content/uploads/2024/06/data-roaming.png">
                                <h2>Perayauan Data Tanpa Had</h2>
                                <p>Pas perayauan paling berbaloi tanpa had data.​</p>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="credit-limit" class="mb-4" src="/wp-content/uploads/2024/06/roaming-passes.png">
                                <h2>Pas Perayauan Fleksibel</h2>
                                <p>Dapatkan kadar terbaik berdasarkan tempoh pelancongan anda​</p>
                            </div>

                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="deactivate" class="mb-4" src="/wp-content/uploads/2024/06/destinations.png">
                                <h2>Meliputi 11 Destinasi</h2>
                                <p>Nikmati kadar ASEAN Plus yang sama untuk 11 destinasi.</p>
                            </div>

                        </div>

                        <div class="row" id="roaming-tips-title">
                            <div class="col-12 mt-0">
                                <h2>
                                    Kekalkan rangkaian anda dengan <br>
                                    <img src="/wp-content/uploads/2024/06/roam-asian-logo.png" alt="...">
                                </h2>
                                <p>Pra-tempah Pas Perayauan Data anda dengan MyYes App.​</p>
                            </div>
                        </div>
                
                        <div class="row mt-5" id="roaming-tips-inner">
                            <div class="col-12 col-xl-12 col-md-12 mx-auto">
                                <div class="row flex-nowrap flex-xl-wrap getway layer-plans">
                                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="plan-details-list">
                                                    <h3>Daily Pass​</h3>
                                                    <p>1 GB</p>
                                                    <ul>
                                                        <li>Data berkelajuan tinggi 1GB, 512kbps selepas habis kuota.​</li>
                                                        <li>Pilih pendahuluan tarikh pengaktifan anda sehingga 30 hari.​</li>
                                                        <li>Pembatalan percuma sehingga 24 jam sebelum pengaktifan.​</li>
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
                                                        <li>Data berkelajuan tinggi 5GB, 512kbps selepas habis kuota.​</li>
                                                        <li>Pilih pendahuluan tarikh pengaktifan anda sehingga 30 hari.​</li>
                                                        <li>Pembatalan percuma sehingga 24 jam sebelum pengaktifan.​</li>
                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <h2>RM20</h2>
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
                                                        <li>Data berkelajuan tinggi 10GB, 512kbps selepas habis kuota.​</li>
                                                        <li>Pilih pendahuluan tarikh pengaktifan anda sehingga 30 hari.​</li>
                                                        <li>Pembatalan percuma sehingga 24 jam sebelum pengaktifan.​</li>
                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <h2>RM30</h2>
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
                        <h1>Perayauan Singapura​</h1>
                        <p>Nikmati perayauan data terbaik di Singapura dengan Yes Infinite.​</p>

                        <div class="row gx-5 mt-5">
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="selfcare" class="mb-4" src="/wp-content/uploads/2024/06/unlimited-roaming.png">
                                <h2>Perayauan 5G Tanpa Had​</h2>
                                <p>Pelan perayauan paling berbaloi tanpa had data.​</p>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="credit-limit" class="mb-4" src="/wp-content/uploads/2024/06/incoming-calls.png">
                                <h2>Panggilan Masuk PERCUMA</h2>
                                <p>Dengan panggilan keluar PERCUMA ke nombor Malaysia.​</p>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 text-center row-roaming-step">
                                <img alt="deactivate" class="mb-4" src="/wp-content/uploads/2024/06/infinite-postpaid.png">
                                <h2>PERCUMA dengan Infinite Postpaid​</h2>
                                <p>Dapatkan data & kelajuan 5G tanpa batasan semasa berada di Malaysia.​</p>
                            </div>
                        </div>


                        <div class="row" id="roaming-tips-title">
                            <div class="col-12 mt-0">
                                <h2>
                                    Layan internet lancar di Singapura<br>dengan YesRoam SG
                                </h2>
                                <p>Dapatkan kadarter baik untuk perayauan tanpa had
                                    dengan pas harian kami.</p>
                            </div>
                        </div>
                
                        <div class="row mt-5" id="roaming-tips-inner">
                            <div class="col-12 col-xl-12 col-md-12 mx-auto">
                                <div class="row flex-nowrap flex-xl-wrap getway layer-plans">
                                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="plan-details-list">
                                                    <h3>1 Day Pass​</h3>
                                                    <p>1 GB</p>
                                                    <ul>
                                                        <li>Data 5G + 4G tanpa had 
                                                            selama 24 jam.</li>
                                                        <li>Data berkelajuan tinggi 1GB, 512kbps selepas ahabis kuota.</li>
                                                        <li>Untuk pelanggan tanpa pelan
                                                            Infinite Postpaid.</li>
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
                                                        <li>Data 5G + 4G tanpa had
                                                        selama 72 jam.</li>
                                                        <li>Data berkelajuan tinggi 5GB,
                                                        512kbps selepas habis kuota.​</li>
                                                        <li>Untuk pelanggan tanpa pelan
                                                        Infinite Postpaid.​</li>
                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <h2>RM12</h2>
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
                                                        <li>Data 5G + 4G tanpa had
                                                        selama 168 jam.</li>
                                                        <li>Data berkelajuan tinggi 10GB,
                                                        512kbps selepas habis kuota.​</li>
                                                        <li>Untuk pelanggan tanpa pelan
                                                        Infinite Postpaid.​</li>
                                                    </ul>
                                                </div>
                                                <div class="price-section">
                                                    <div class="price-left">
                                                        <h2>RM20</h2>
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
<section class="pass-section">
    <div class="container">

        <!-- <div class="row">
            <div class="col-12 mt-0">
                <h2>
                    Kekalkan rangkaian anda dengan <br>
                    <img src="/wp-content/uploads/2024/06/roam-asian-logo.png" alt="...">
                </h2>
                <p>Pra-tempah Pas Perayauan Data anda dengan MyYes App.​</p>
            </div>
        </div> -->

        <!-- <div class="row mt-5">
            <div class="col-12 col-xl-12 col-md-12 mx-auto">
                <div class="row flex-nowrap flex-xl-wrap getway layer-plans">
                    <div class="col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body">
                                <div class="plan-details-list">
                                    <h3>1 Day Pass​</h3>
                                    <p>1 GB</p>
                                    <ul>
                                        <li>Data berkelajuan tinggi 1GB, 512kbps selepas habis kuota.​</li>
                                        <li>Pilih pendahuluan tarikh pengaktifan anda sehingga 30 hari.​</li>
                                        <li>Pembatalan percuma sehingga 24 jam sebelum pengaktifan.​</li>
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
                                        <li>Data berkelajuan tinggi 5GB, 512kbps selepas habis kuota.​</li>
                                        <li>Pilih pendahuluan tarikh pengaktifan anda sehingga 30 hari.​</li>
                                        <li>Pembatalan percuma sehingga 24 jam sebelum pengaktifan.​</li>
                                    </ul>
                                </div>
                                <div class="price-section">
                                    <div class="price-left">
                                        <h2>RM20</h2>
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
                                        <li>Data berkelajuan tinggi 10GB, 512kbps selepas habis kuota.​</li>
                                        <li>Pilih pendahuluan tarikh pengaktifan anda sehingga 30 hari.​</li>
                                        <li>Pembatalan percuma sehingga 24 jam sebelum pengaktifan.​</li>
                                    </ul>
                                </div>
                                <div class="price-section">
                                    <div class="price-left">
                                        <h2>RM30</h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->

        <div class="row mt-o">
            <div class="col-12 col-xl-12 col-md-12 mt-0" id="destinations-slider-sec">

                <h3 class="line-b">Destinasi yang boleh digunakan​</h3>

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
                        <h2 class="num-box">Langkah-langkah memulakan servis perayauan​</h2>
                        <img src="/wp-content/uploads/2024/06/roaming-device.png" class="mb-0" alt="">
                    </div>

                    <div class="col-12 col-lg-7 start-roaming-cont-r">
                        <div class="row row-cols-2">
                            <div class="col start-roaming-cont">
                                <h2 class="num-box"><span>1</span> <strong>Lancarkan aplikasi MyYes​</strong></h2>
                                <p class="mt-3">Aktifkan 'Servis Perayauan Antarabangsa' dari bahagian YesRoam.​
                                </p>
                            </div>
                            <div class="col start-roaming-cont">
                                <h2 class="num-box"><span>2</span> <strong>Pergi ke 'Tetapan' di telefon anda​</strong></h2>
                                <p class="mt-3">Pilih 'Rangkaian Mudah Alih', kemudian 'Operator Rangkaian'. Dan sambung ke pengendali perayauan kami.​</p>

                            </div>
                            <div class="col start-roaming-cont">
                                <h2 class="num-box"><span>3</span> <strong>Pergi ke 'Rangkaian Mudah Alih' di telefon anda​</strong></h2>
                                <p class="mt-3">Hidupkan 'Perayauan Data & Data Mudah Alih' dalam tetapan telefon anda untuk mengaktifkan perkhidmatan data semasa berada di luar negara.​</p>
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
<!-- <section id="countries-section" class="d-none">
    <h1>RM38/hari, sehingga 500MB di 22 negara.</h1>
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
</section> -->
<!--Countries Section End-->

<!-- Banner2 Start -->
<section id="roaming-banner" class="roaming-bg2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-8 d-flex align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="m-auto">
                    <!-- <h1>Buat panggilan ke luar negara?</span></h1> 
                    <p>Nikmati nilai hebat dengan kadar International Direct Dialling (IDD) berikut.</p>-->
                    <h1>Panggilan luar negara yang berbaloi​</h1>
                    <p>Semak kadar Dail Terus Antarabangsa (IDD) kami untuk negara dikehendaki.​</p>
                    <div class="search-box dropdown">
                        <?php get_template_part('template-parts/roaming/dropdown-idd', '', ['data_idd' => $args['data_idd']]); ?>
                        <input id="iddSelect" name="iddSelect" type="hidden" />
                        <button class="btn" data-button="openIdd">Semak kadar IDD</button>
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
            <h2>Kadar IDD dengan nilai<br> hebat untuk anda</h2>
            <div class="col-8 m-auto">
                <div class="row header">
                    <div class="col-12">
                        <p class="sub">&nbsp;</p>
                    </div>

                    <div class="col-12 country-sec-t">
                        <h3 class="pb-0 mb-0">Negara (Kod)</h3>
                        <h4 class="pb-0 mb-0" data-name="iddName">Afghanistan (93)</h4>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <h4 class="pb-0 mb-0" data-name="iddName">Afghanistan (93)</h4>                        
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
                        <h3>Pelan</h3>
                    </div>

                    <div class="col-3 text-center">
                        <h3>Tetap</h3>
                    </div>

                    <div class="col-3 text-center">
                        <h3>Mudah Alih</h3>
                    </div>

                    <div class="col-3 text-center">
                        <h3>Kadar SMS (RM)</h3>
                    </div>
                </div>
                <div class="row" data-filter="postpaid">
                    <div class="col-3">
                        <p class="plan-n-t">Pascabayar Mudah Alih</p>
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
                        <p class="plan-n-t">Prabayar Mudah Alih </p>
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
            <!-- <div class="col-12 col-lg-2">
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
            </div>-->
        </div>


        <div class="row">
            <div class="col-8 m-auto text-left idd-rate">&nbsp;
                <p>• Harga yang tertera tertakluk kepada cukai perkhidmatan 6%.</p>
                <p>• Panggilan IDD dicaj mengikut blok 60 saat.</p>
                <p>• Kadar adalah tertakluk kepada perubahan tanpa notis terlebih dahulu.</p>
                <a href="#" data-button="closeIdd" class="pink-btn mt-5">Close <span class="iconify" data-icon="carbon:close-filled"></span></a>
            </div>
        </div>

    </div>
</section>
<!--Roaming Rates Section End-->


<!-- Footer FAQs STARTS -->
<section class="layer-footerFAQ mt-4 mt-lg-0" id="faq-section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <h1 class="mb-3">Soalan Lazim</h1>
        </div>
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-12">
                <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Apakah Perayauan Yes (YesRoam)?
                            </button></h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Perayauan Yes (YesRoam) memberikan anda data perayauan tanpa had apabila anda disambungkan ke operator rakan perayauan pilihan Yes semasa melancong ke luar negara.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Bagaimanakah cara untuk saya melanggan Perayauan Yes (YesRoam)?
                            </button></h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush- 
                             headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Perayauan Yes (YesRoam) adalah tersedia untuk pelanggan Pascabayar Yes. Selepas mengaktifkan servis bagi langgan perayauan, sila pastikan perayauan anda diaktifkan melalui aplikasi MyYes > Perayauan Yes (YesRoam) > Pengaktifan Roaming. Deposit perayauan mungkin diperlukan. Anda akan dilanggan secara automatik sama ada bagi Perayauan Yes (YesRoam) Daily atau Perayauan Yes (YesRoam) Monthly apabila anda tiba di negara yang dilawati dan disambungkan ke operator perayauan pilihan.
                                </p>

                                <p><b>Nota:</b> <i>Jika anda adalah pengguna talian utama, anda boleh membantu talian tambahan anda untuk mengaktifkan Perayauan Yes (YesRoam) dengan meningkatkan had kredit atau membayar deposit perayauan melalui aplikasi MyYes. Log masuk ke akaun utama > Pilih talian tambahan pada meny pilihan > Klik Lagi > Roaming > Aktifkan Langganan > Tambah Sekarang untuk tingkatkan had kredit atau bayar deposit > Pengaktifan Roaming.</i></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Apakah Perayauan Yes (YesRoam) Monthly?</button></h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Perayauan Yes (YesRoam) Monthly menawarkan data perayauan tanpa had percuma di bwah Pelan Pascabayar Yes Infinite dan Yes Infinite+ Yes. Tawaran ini juga termasuk panggilan masuk percuma dari semua negara dan panggilan keluar percuma ke mana-mana nombor Malaysia semasa berada di negara perayauan. SMS akan dikenakan caj mengikut kadar perayauan di
                                    <a href="/ms/roaming/">www.yes.my/ms/roaming.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mb-0"><a href="/ms/docs/faq/roaming-idd/" class="viewall-btn">Lihat semua soalan lazim
                        <!-- <img src="/wp-content/uploads/2023/10/next-arrow-icon.png" alt="..." style="width: 10px;"> -->
                        <span class="iconify" data-icon="akar-icons:arrow-right"></span> </a></p>
            </div>
        </div>
    </div>
</section>
<!-- Footer FAQs ENDS -->

<?php get_template_part('template-parts/roaming/scripts'); ?>