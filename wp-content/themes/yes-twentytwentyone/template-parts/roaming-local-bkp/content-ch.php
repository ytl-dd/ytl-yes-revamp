<!-- Styles -->

<?php get_template_part('template-parts/roaming/styles'); ?>

<!-- Breadcrumb Start -->
<section class="breadcrumb-section">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/zh-hans">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Roaming</a></li>
            </ol>
        </nav>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Banner1 Start -->
<section id="roaming-banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-8 d-flex align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div>
                    <h1>Stay connected anytime, anywhere with YesRoam</h1>
                    <p>Roam freely without part--nering operators when you’re travelling.</p>
                    <div class="search-box dropdown">
                        <?php get_template_part('template-parts/roaming/dropdown-roaming', '', ['data_roaming' => $args['data_roaming']]); ?>
                        <input id="roamingSelect" name="roamingSelect" type="hidden" />
                        <button data-button="openRoaming" class="btn">Check roaming rates</button>
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
            <div class="col-12">
                <h1>Enjoy roaming in <span class="accent" data-name="countryName">Argentina</span> with our Partnering Operators.</h1>
                <div class="row row-roaming">
                    <div class="col-12 col-lg-2">
                        <div class="row">
                            <div class="col-12">
                                <h3>Plans</h3>

                                <h4 data-name="planName">Mobile Postpaid Plan</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-10">
                        <fieldset id="roaming-table">
                            <div class="row" data-template="roamingTemplate" style="display: none;">
                                <div class="col-12 col-lg-3">
                                    <h3>Roaming Operator</h3>

                                    <p class="brand">
                                    <h4 data-name="telcoName" class="blue">Personal</h4>
                                    </p>
                                </div>

                                <div class="col-12 col-lg-3">
                                    <h3>Internet Rates</h3>

                                    <h4 class="blue">RM</h4>

                                    <h4 class="internet-rates">
                                        <span data-name="planDayRateAmt">38</span><sub data-name="planDayRateSubset">/Day</sub>
                                    </h4>

                                    <p class="blue" data-name="planDayRateQuota">Up to 100MB Data</p>

                                    <p class="small" data-name="planDayRateTnc">Once the quota is finished, the data speed will be reduced until your day pass expires without additional cost.</p>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3>Call &amp; SMS Rates</h3>
                                        </div>

                                        <div class="col-6 col-lg-6">
                                            <p class="ctitle" data-name="planCallWithinCountryTxt">Call Within Argentina</p>
                                            <h4 class="blue" data-name="planCallWithinCountryRate">RM6.00 /Min</h4>
                                        </div>

                                        <div class="col-6 col-lg-6">
                                            <p class="ctitle">Call To Other Countries</p>
                                            <h4 class="blue" data-name="planCallToOtherCountriesRate">RM9.00 /Min</h4>
                                        </div>

                                        <div class="col-6 col-lg-6">
                                            <p class="ctitle">Call To Malaysia</p>
                                            <h4 class="blue" data-name="planCallToMalaysiRate">RM6.00 /Min</h4>
                                        </div>

                                        <div class="col-6 col-lg-6">
                                            <p class="ctitle">Receiving Calls</p>
                                            <h4 class="blue" data-name="planReceivingCallRate">RM5.00 /Min</h4>
                                        </div>

                                        <div class="col-6 col-lg-6">
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

            <div class="col-12 text-center" style="font-size:12px;">&nbsp;
                <p>• Prices shown above are subject to 6% service tax.</p>

                <p>• The call rates shown above are not applicable for calls to Premium Numbers, Satellites and special services.</p>

                <p>• For more information, please contact YesCare via email <a href="mailto:yescare@yes.my">yescare@yes.my</a>.</p>
                <a href="/faq/roaming" class="viewall-btn mt-5">Got questions? Click here for FAQ<span class="iconify" data-icon="akar-icons:arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>
<!--Roaming Rates Section End-->

<!--Roaming Tips Start-->
<section id="roaming-tips" data-roaming="roaming-rates" style="display:none;">
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
</section>
<!--Roaming Tips End-->

<!--Start Roaming Start-->
<section id="start-roaming" data-roaming="roaming-rates" style="display:none;">
    <div class="container">
        <h1>How to start roaming</h1>
        <div class="row justify-content-center">
            <div class="col-10 gx-5">
                <div class="row">
                    <div class="col-12 col-lg-4 text-center">
                        <img src="/wp-content/uploads/2022/03/roaming-setting-icon.jpg" class="mb-4" alt="">
                        <p class="small">Step 1:</p>
                        <p><strong>Go to Settings.</strong></p>
                        <p class="mt-3">Select “Mobile Network”.</p>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <img src="/wp-content/uploads/2022/03/roaming-network-icon.jpg" class="mb-4" alt="">
                        <p class="small">Step 2:</p>
                        <p><strong>Click Network Operators.</strong></p>
                        <p class="mt-3">Wait for 1 to 2 minutes for the list of networks to show up.</p>
                        <p class="mt-3">Select our preferred roaming operator to connect.</p>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <img src="/wp-content/uploads/2022/03/roaming-mobile-icon.jpg" class="mb-4" alt="">
                        <p class="small">Step 3:</p>
                        <p><strong>Go to Mobile Network.</strong></p>
                        <p class="mt-3">Turn on your Data Roaming & Mobile Data in your phone setting if you wish to use data service while abroad.</p>
                        <p class="mt-3">On some Android phones, you may need to select your SIM to turn on Data Roaming.</p>
                    </div>
                    <div class="col-12 mt-5 text-center">
                        <p class="small"><strong>Tip:</strong> For Partnering Operators who do not have 4G LTE roaming service, kindly select the mobile network mode to 2G/3G in your phone setting to avoid any connection or compatibility issue.</p>
                        <a href="/faq/roaming" class="viewall-btn mt-5">Have problems connecting? Click here<span class="iconify" data-icon="akar-icons:arrow-right"></span></a>
                    </div>
                    <div class="col-12 mt-5 text-center">
                        <a href="#" data-link="closeRoaming" class="pink-btn">Close <span class="iconify" data-icon="carbon:close-filled"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Start Roaming End-->

<!--Countries Section Start-->
<section id="countries-section">
    <h1><span>RM38/day</span>, up to <span>500MB</span> at these <span>22 countries</span>.</h1>
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
</section>
<!--Countries Section End-->

<!-- Banner2 Start -->
<section id="roaming-banner" class="roaming-bg2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-8 d-flex align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div>
                    <h1>Making an overseas call?</span></h1>
                    <p>Here are the affordable International Direct Dailing (IDD) rates you’ll like.</p>
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
        <div class="row row-roaming">
            <h1><span>Affordable</span> IDD rates just the way you like it.</h1>
            <div class="col-12 col-lg-3">
                <div class="row header">
                    <div class="col-12">
                        <p class="sub">&nbsp;</p>
                    </div>

                    <div class="col-12">
                        <h3>Country (Code)</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4 data-name="iddName">Afghanistan (93)</h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7">
                <div class="row header">
                    <div class="col-5"></div>

                    <div class="col-6 text-center">
                        <p class="sub my-2 my-lg-0">Call Rate (RM/Min)</p>
                    </div>

                    <div class="col-5">
                        <h3>Plan</h3>
                    </div>

                    <div class="col-3 text-center">
                        <h3>Fixed</h3>
                    </div>

                    <div class="col-3 text-center">
                        <h3>Mobile</h3>
                    </div>
                </div>
                <div class="row" data-filter="postpaid">
                    <div class="col-5">
                        <p>Mobile Postpaid Plan</p>
                    </div>

                    <div class="col-3 text-center">
                        <h4 data-name="iddPostpaidFixed">1.80</h4>
                    </div>

                    <div class="col-3 text-center">
                        <h4 data-name="iddPostpaidMobile">1.80</h4>
                    </div>
                </div>

                <div class="row" data-filter="prepaid">
                    <div class="col-5">
                        <p>Mobile Prepaid Plan </p>
                    </div>

                    <div class="col-3 text-center">
                        <h4 data-name="iddPrepaidFixed">1.80</h4>
                    </div>

                    <div class="col-3 text-center">
                        <h4 data-name="iddPrepaidMobile">1.80</h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-2">
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
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center" style="font-size:12px;">&nbsp;
                <p>• Prices shown above are subject to 6% service tax.</p>

                <p>• IDD calls are charged at 30 seconds block.</p>

                <p>• Rates are subject to change without prior notice.</p>
                <a href="#" data-button="closeIdd" class="pink-btn mt-5">Close <span class="iconify" data-icon="carbon:close-filled"></span></a>
            </div>
        </div>
    </div>
</section>
<!--Roaming Rates Section End-->
<?php get_template_part('template-parts/roaming/scripts'); ?>