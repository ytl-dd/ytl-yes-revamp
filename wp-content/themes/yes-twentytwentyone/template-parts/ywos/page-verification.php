<?php include('header-ywos.php'); ?>


<style type="text/css">
    .layer-overlay {
        z-index: 10000;
    }
</style>

<!-- Vue Wrapper STARTS -->
<div id="main-vue">
    <!-- Banner Start -->
    <section id="grey-innerbanner">
        <div class="container">
            <ul class="wizard">
                <li ui-sref="firstStep" class="completed">
                    <span>1. Verification</span>
                </li>
                <li ui-sref="secondStep">
                    <span>2. Delivery Details</span>
                </li>
                <li ui-sref="thirdStep">
                    <span>3. Payment Info</span>
                </li>
                <li ui-sref="fourthStep">
                    <span>4. Review and Pay</span>
                </li>
            </ul>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Cart Body STARTS -->
    <section id="cart-body">
        <div class="container p-lg-5 p-3">
            <div class="row gx-5">
                <form class="col-lg-8 col-12 needs-validation" novalidate>
                    <div>
                        <h1>Verification</h1>
                        <p class="sub mb-4">Please fill in your ID information and mobile number to proceed</p>
                        <h2>ID Verification</h2>
                        <div class="row mb-4">
                            <div class="col-lg-4 col-12 mb-3 mb-lg-0">
                                <label class="form-label">* ID type</label>
                                <select class="form-select" required>
                                    <option selected></option>
                                    <option value="1">NRIC</option>
                                    <option value="2">Passport</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-12">
                                <label class="form-label">* IC/Passport number</label>
                                <div class="input-group align-items-center">
                                    <input type="text" class="form-control" id="ic_passport_number" placeholder="" required>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" class="ms-2" title="Tooltip text here"><img src="/wp-content/themes/yes-twentytwentyone/template-parts/ywos/assets/images/info-icon.png" /></a>
                                </div>
                            </div>
                        </div>
                        <h2>Mobile Verification</h2>
                        <div class="row mb-4 align-items-center g-2">
                            <div class="col-12">
                                <label class="form-label"><strong>Step 1:</strong> Key in your mobile number</label>
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" class="ms-2" title="Tooltip text here"><img src="/wp-content/themes/yes-twentytwentyone/template-parts/ywos/assets/images/question-icon.png" /></a>
                            </div>
                            <div class="col-lg-2 col-5">
                                <input type="text" class="form-control text-center" id="ic_passport_number" placeholder="MY +60" disabled>
                            </div>
                            <div class="col-lg-4 col-7">
                                <input type="text" class="form-control" id="ic_passport_number" placeholder="Phone number">
                            </div>
                            <div class="col-lg-3 col-12">
                                <button class="white-btn2 mt-3 mt-lg-0">Request TAC</button>
                            </div>
                        </div>
                        <div class="row mb-3 align-items-center g-2">
                            <div class="col-12">
                                <label class="form-label"><strong>Step 2:</strong> Insert your TAC code and verify</label>
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" class="ms-2" title="Tooltip text here"><img src="/wp-content/themes/yes-twentytwentyone/template-parts/ywos/assets/images/question-icon.png" /></a>
                            </div>
                            <div class="col-lg-5 col-12 mb-3">
                                <div class="input-group align-items-center">
                                    <input class="text-center form-control me-2" type="text" id="first" maxlength="1" />
                                    <input class="text-center form-control me-2" type="text" id="second" maxlength="1" />
                                    <input class="text-center form-control me-2" type="text" id="third" maxlength="1" />
                                    <span class="text-center ms-2 me-3">-</span>
                                    <input class="text-center form-control me-2" type="text" id="fourth" maxlength="1" />
                                    <input class="text-center form-control me-2" type="text" id="fifth" maxlength="1" />
                                    <input class="text-center form-control" type="text" id="sixth" maxlength="1" />
                                </div>
                            </div>
                            <p class="mb-3">You should receieve the code in 30s. <a href="#" class="grey-link">Resend code</a></p>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label label-small" for="flexCheckDefault">
                                        I hereby agree to subscribe to the YES postpaid/prepaid service as indicated in the online form submitted by me. I further give consent to YTLC to process my personal data in accordance with the YTL Group Privacy Policy available at <a href="#" target="_blank">http://www.ytl.com/privacypolicy.asp</a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <button class="pink-btn" type="submit">Next: Insert delivery details</button>
                            </div>
                        </div>

                    </div>
                </form>
                <div class="col-lg-4 col-12">
                    <div class="summary-box">
                        <h1>Order summary</h1>
                        <h2>Due today after taxes and shipping</h2>
                        <div class="row">
                            <div class="col-6 pt-2 pb-2">
                                <h3>TOTAL</h3>
                            </div>
                            <div class="col-6 pt-2 pb-2 text-end">
                                <h3>RM56.00</h3>
                            </div>
                        </div>
                        <div class="monthly mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <p>Due Monthly</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p>RM49.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="large">Kasi Up Postpaid 49</p>
                            </div>
                            <div class="col-6 text-end">
                                <p class="large"><strong>RM49.00</strong></p>
                            </div>
                            <div class="col-6">
                                <p class="large">Add-Ons</p>
                            </div>
                            <div class="col-6 text-end">
                                <p class="large"><strong>RM5.00</strong></p>
                            </div>
                            <div class="col-6">
                                <p class="large">Taxes (SST)</p>
                            </div>
                            <div class="col-6 text-end">
                                <p class="large"><strong>RM2.00</strong></p>
                            </div>
                            <div class="col-6">
                                <p class="large">Shipping</p>
                            </div>
                            <div class="col-6 text-end">
                                <p class="large"><strong>RM5.00</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Body ENDS -->
</div>
<!-- Vue Wrapper ENDS -->

<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function() {});
    var pageDelivery = new Vue({
        el: '#main-vue',
        data: {
            endpointURL: window.location.origin + '/wp-json/ywos/v1',
            ywosLocalStorageName: 'yesYWOS',
            ywosLocalStorageData: null,
            expiryYWOSCart: 60,
            ywosCart: null,
            plan: {},
            summary: {},
        },
        mounted: function() {},
        created: function() {
            var self = this;
            self.ywosLocalStorageData = JSON.parse(localStorage.getItem(self.ywosLocalStorageName));
            self.validateSession();
        },
        methods: {
            checkExists: function() {
                var self = this;
                if (self.ywosLocalStorageData === null) {
                    return false;
                } else {
                    self.ywosCart = (typeof self.ywosLocalStorageData.ywosCart !== 'undefined') ? self.ywosLocalStorageData.ywosCart : null;
                    self.summary = (typeof self.ywosLocalStorageData.ywosCart.meta !== 'undefined' && typeof self.ywosLocalStorageData.ywosCart.meta.orderSummary !== 'undefined') ? self.ywosLocalStorageData.ywosCart.meta.orderSummary : null;
                }
                return true;
            },
            checkExpiryValid: function() {
                var self = this;
                if (self.ywosCart !== null && typeof self.ywosCart.expiry !== 'undefined') {
                    if (Date.now() > self.ywosCart.expiry) {
                        return false;
                    } else {
                        self.updateYWOSExpiry();
                        return true;
                    }
                }
                return false;
            },
            checkItems: function() {
                var self = this;
                if (typeof self.ywosCart.meta !== 'undefined') {
                    return (typeof self.ywosCart.meta.orderSummary === 'undefined') ? false : true;
                } else {
                    return false;
                }
                return true;
            },
            updateYWOSExpiry: function() {
                var self = this;
                var expiryLength = self.expiryYWOSCart * 60000;
                var ywosCartExpiry = Date.now() + expiryLength;
                self.ywosCart.expiry = ywosCartExpiry;
                self.ywosLocalStorageData.ywosCart = self.ywosCart;
                self.updateYWOSStorageData();
            },
            updateYWOSStorageData: function() {
                var self = this;
                localStorage.setItem(self.ywosLocalStorageName, JSON.stringify(self.ywosLocalStorageData));
            },
            validateSession: function() {
                var self = this;
                if (!self.checkExists()) {
                    console.log('Local storage data not found!');
                } else if (!self.checkExpiryValid()) {
                    console.log('Local storage data has been expired!');
                } else if (!self.checkItems()) {
                    console.log('Plan ID is not found!');
                } else {

                }
                return true;
            }
        }
    });
</script>


<?php include('footer-ywos.php'); ?>