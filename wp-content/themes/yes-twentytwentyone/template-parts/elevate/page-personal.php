<?php require_once ('includes/header.php')?>

    <header class="white-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="mt-4">
                        <a href="/elevate/cart/" class="back-btn "><img src="/wp-content/themes/yes-twentytwentyone/template-parts/elevate/assets/images/back-icon.png" alt=""> Back</a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 text-lg-center text-end">
                    <h1 class="title_checkout p-3">Check Out</h1>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </header>
<div>
    <main class="clearfix site-main">

        <!-- Banner Start -->
        <section id="grey-innerbanner">
            <div class="container">
                <ul class="wizard">
                    <li ui-sref="firstStep" class="completed">
                        <span>1. Personal Details</span>
                    </li>
                    <li ui-sref="secondStep">
                        <span>2. Yes Face ID</span>
                    </li>
                    <li ui-sref="thirdStep">
                        <span>3. Review & Order</span>
                    </li>

                </ul>
            </div>
        </section>
        <!-- Banner End -->

        <section id="cart-body">
            <div class="container p-lg-5 p-3">
                <div class=" gx-5" id="main-vue">
                    <form class="row needs-validation" novalidate>
                        <div class="col-md-12">
                            <h2 class="subtitle">Personal Details</h2>
                            <p class="sub mb-4">Delivery only available in Malaysia.<br>
                                Ensure all information is correct before proceeding.</p>
                            <div class="text-bold mb-3">ID Verification</div>
                        </div>
                        <div class="col-lg-6 col-12">

                            <div class="row mb-4">
                                <div class="col-lg-12 col-12">
                                    <label class="form-label">* MyKad number</label>
                                    <div class="input-group align-items-center">
                                        <input type="text" maxlength="11" class="form-control" id="mykad_number" name="mykad" v-model="deliveryInfo.mykad" @input="watchAllowNext" @keypress="checkInputCharacters(event, 'numeric', false)" placeholder=""
                                               required>

                                    </div>
                                    <div class="invalid-feedback mt-1" id="em-mykad"></div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-12 col-12">
                                    <label class="form-label">* Full Name (as per MyKad)</label>
                                    <div class="input-group align-items-center">
                                        <input type="text" class="form-control" id="full_name" name="name" v-model="deliveryInfo.name" @input="watchAllowNext" placeholder="" required>

                                    </div>
                                    <div class="invalid-feedback mt-1" id="em-name"></div>
                                </div>
                            </div>
                            <div class="row mb-4 align-items-center g-2">
                                <div class="col-12">
                                    <label class="form-label">*Phone number</label>
                                </div>
                                <div class="col-lg-4 col-5">
                                    <input type="text" class="form-control text-center" id="ic_passport_number"
                                           placeholder="MY +60" readonly>
                                </div>
                                <div class="col-lg-8 col-7">
                                    <input type="text" class="form-control" maxlength="11" id="ic_phone_number" name="phone" v-model="deliveryInfo.phone" @input="watchAllowNext" @keypress="checkInputCharacters(event, 'numeric', false)"
                                           placeholder="Phone number">
                                </div>
                                <div class="invalid-feedback mt-1" id="em-phone"></div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <label class="form-label">* Email address</label>
                                    <div class="align-items-center">
                                        <input type="text" class="form-control" id="email" name="email" v-model="deliveryInfo.email" @input="watchAllowNext"
                                               placeholder="jane.doe@gmail.com"  required>
                                    </div>
                                    <div class="invalid-feedback mt-1" id="em-email"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="text-uppercase"  @click="goNext" :class="allowSubmit?'pink-btn':'pink-btn-disable'" type="button">check eligibility</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="row mb-4">
                                <div class="col-lg-12">
                                    <label class="form-label">* Address</label>
                                    <div class="input-group align-items-center">
                                        <input type="text" class="form-control" id="address" name="address" v-model="deliveryInfo.address" @input="watchAllowNext" placeholder="" required>
                                    </div>
                                    <div class="invalid-feedback mt-1" id="em-address"></div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12 col-12">
                                    <label class="form-label">Apartment, Office, House, Floor number (optional)</label>
                                    <div class="input-group align-items-center">
                                        <input type="text" class="form-control" id="address-more" name="addressMore" v-model="deliveryInfo.addressMore" @input="watchAllowNext" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4 col-12">
                                    <label class="form-label">* Postcode</label>
                                    <div class="input-group align-items-center">
                                        <input type="text" maxlength="5" class="form-control" id="postcode" name="postcode" v-model="deliveryInfo.postcode"  @input="watchAllowNext" @keypress="checkInputCharacters(event, 'numeric', false)" placeholder="" required />
                                    </div>
                                    <div class="invalid-feedback mt-1" id="em-postcode"></div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <label class="form-label">* State</label>
                                    <label class="form-label" for="select-state">* State</label>
                                    <div class="input-group align-items-center">
                                        <select class="form-select" id="state" name="state" data-live-search="true" v-model="deliveryInfo.state" @change="watchChangeState" required>
                                            <option value="" selected="selected" disabled="disabled">Select State</option>
                                            <option v-for="state in selectOptions.states" :value="state.value">{{ state.name }}</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback mt-1" id="em-state"></div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <label class="form-label">* City</label>
                                    <div class="input-group align-items-center">
                                        <select class="form-select" id="city" name="city" data-live-search="true" v-model="deliveryInfo.city"  @change="watchChangeCity" required>
                                            <option v-for="city in selectOptions.cities" :value="city.value">{{ city.name }}</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback mt-1" id="em-city"></div>
                                </div>

                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12 col-12">
                                    <label class="form-label">Delivery Notes (optional)</label>
                                    <div class="align-items-center">
                                        <input type="text" class="form-control" id="delivery-notes" name="deliveryNotes" v-model="deliveryInfo.deliveryNotes" @input="watchAllowNext" placeholder="">
                                        <p class="note mt-2">Nearby landmarks or more detailed directions</p>
                                    </div>
                                    <div class="invalid-feedback mt-1" id="em-note"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>
</div>
    <?php require_once ('includes/footer.php');?>

<script type="text/javascript">
    $(document).ready(function() {
        var pageCart = new Vue({
            el: '#main-vue',
            data: {
                productId: null,
                isCartEmpty: false,
                taxRate: {
                    sst: 0.06
                },
                orderSummary: {
                    product: {},
                    orderDetail: {
                        total: 0.00,
                        color: null,
                        contract_id: null,
                        orderItems:[]
                    },
                },
                packageInfos: [],
                currentStep: 0,
                elevate: null,
                selectOptions: {
                    states: [{
                        'stateCode': 'KUL',
                        'value': 'WILAYAH PERSEKUTUAN-KUALA LUMPUR',
                        'name': 'Wilayah Persekutuan Kuala Lumpur'
                    },
                        {
                            'stateCode': 'PJY',
                            'value': 'PUTRAJAYA',
                            'name': 'Wilayah Persekutuan Putrajaya'
                        },
                        {
                            'stateCode': 'LBN',
                            'value': 'LABUAN',
                            'name': 'Wilayah Persekutuan Labuan'
                        },
                        {
                            'stateCode': 'JHR',
                            'value': 'JOHOR',
                            'name': 'Johor'
                        },
                        {
                            'stateCode': 'KDH',
                            'value': 'KEDAH',
                            'name': 'Kedah'
                        },
                        {
                            'stateCode': 'KTN',
                            'value': 'KELANTAN',
                            'name': 'Kelantan'
                        },
                        {
                            'stateCode': 'MLK',
                            'value': 'MELAKA',
                            'name': 'Melaka'
                        },
                        {
                            'stateCode': 'NSN',
                            'value': 'NEGERI SEMBILAN',
                            'name': 'Negeri Sembilan'
                        },
                        {
                            'stateCode': 'PHG',
                            'value': 'PAHANG',
                            'name': 'Pahang'
                        },
                        {
                            'stateCode': 'PNG',
                            'value': 'PULAU PINANG',
                            'name': 'Pulau Pinang'
                        },
                        {
                            'stateCode': 'PRK',
                            'value': 'PERAK',
                            'name': 'Perak'
                        },
                        {
                            'stateCode': 'PLS',
                            'value': 'PERLIS',
                            'name': 'Perlis'
                        },
                        {
                            'stateCode': 'SBH',
                            'value': 'SABAH',
                            'name': 'Sabah'
                        },
                        {
                            'stateCode': 'SRW',
                            'value': 'SARAWAK',
                            'name': 'Sarawak'
                        },
                        {
                            'stateCode': 'SGR',
                            'value': 'SELANGOR',
                            'name': 'Selangor'
                        },
                        {
                            'stateCode': 'TRG',
                            'value': 'TERENGGANU',
                            'name': 'Terengganu'
                        }
                    ],
                    cities: []
                },
                customerDetails: {},
                deliveryInfo: {
                    mykad: '',
                    name: '',
                    phone: '',
                    email: '',
                    address: '',
                    addressMore: '',
                    addressLine: '',
                    postcode: '',
                    state: '',
                    stateCode: '',
                    city: '',
                    cityCode: '',
                    country: '',
                    deliveryNotes: '',
                    sanitize: {
                        address: '',
                        addressMore: '',
                        addressLine: '',
                        city: '',
                        country: '',
                        state: ''
                    }
                },
                referralCode: {
                    applicable: false,
                    code: '',
                    alert: false,
                    toUse: false,
                    verified: false
                },
                input: {
                    mykad: { field: '#mykad_number', errorMessage: '#em-mykad' },
                    name: { field: '#full_name', errorMessage: '#em-name' },
                    phone: { field: '#ic_phone_number', errorMessage: '#em-phone' },
                    email: { field: '#email', errorMessage: '#em-email' },
                    address: { field: '#address', errorMessage: '#em-address' },
                    addressMore: { field: '#input-addressMore', errorMessage: '#em-addressMore' },
                    postcode: { field: '#postcode', errorMessage: '#em-postcode' },
                    state: { field: '#select-state', errorMessage: '#em-state' },
                    city: { field: '#select-city', errorMessage: '#em-city' },
                    note: { field: '#delivery-notes', errorMessage: '#em-note' }
                },
                billingInfo: {
                    mykad : '',
                    name: '',
                    phone: '',
                    email: '',
                    address: '',
                    addressMore: '',
                    postcode: '',
                    state: '',
                    city: '',
                    note: '',
                },
                allowSelectCity: false,
                allowSubmit: false
            },

            created: function() {
                var self = this;
                setTimeout(function() {
                    self.pageInit();
                }, 500);
            },
            methods: {
                pageInit: function() {
                    var self = this;
                    if (elevate.validateSession(self.currentStep)) {
                        self.pageValid = true;
                        if(elevate.lsData.deliveryInfo) {
                            self.deliveryInfo = elevate.lsData.deliveryInfo;
                        }
                        self.updateFields();
                        toggleOverlay(false);

                        setTimeout(function() {
                            $('.form-select').selectpicker('refresh');
                        }, 100);
                    } else {
                        elevate.redirectToPage('cart');
                    }
                },
                updateFields: function() {
                    var self = this;
                    self.watchChangeState();
                    self.deliveryInfo.stateCode = (self.deliveryInfo.state) ? self.getStateCode(self.deliveryInfo.state) : '';
                    self.deliveryInfo.cityCode = self.deliveryInfo.city;
                    self.deliveryInfo.country = 'MALAYSIA';

                },
                watchChangeState: function(event) {
                    var self = this;
                    if(event && event.target.value){
                        self.deliveryInfo.state = event.target.value;
                    }
                    if (typeof self.deliveryInfo.state !== 'undefined' && self.deliveryInfo.state.length) {
                        self.ajaxGetCitiesByState(self.deliveryInfo.state);
                    }
                },
                watchChangeCity: function(event) {
                    var self = this;
                    self.deliveryInfo.city = event.target.value;
                    self.watchAllowNext();
                },
                getStateCode: function(stateVal) {
                    var self = this;
                    var objState = self.selectOptions.states.filter(state => state.value == stateVal);
                    return objState[0].stateCode;
                },
                ajaxGetCitiesByState: function(state = null) {
                    var self = this;
                    var stateCode = self.getStateCode(state);

                    toggleOverlay();

                    self.allowSelectCity = false;
                    setTimeout(function() {
                        $('.form-select').selectpicker('refresh');
                    }, 100);

                    axios.get(apiEndpointURL + '/get-cities-by-state/' + stateCode)
                        .then((response) => {
                            var options = [];
                            var data = response.data;
                            var masterlist = data.masterDataList[0].masterList;
                            masterlist.map((value, index) => {
                                options.push({
                                    value: value.masterCode,
                                    name: value.masterValue,

                                });
                            })
                            self.selectOptions.cities = options;
                            self.allowSelectCity = true;

                            var objCity = self.selectOptions.cities.filter(city => city.value == self.deliveryInfo.city);
                            if (objCity.length == 0) {
                                self.deliveryInfo.city = '';
                                self.deliveryInfo.cityCode = '';
                            }

                            setTimeout(function() {
                                $('.form-select').selectpicker('refresh');
                                if(self.deliveryInfo.city){
                                    $('#city').val(self.deliveryInfo.city)
                                }
                                toggleOverlay(false);
                            }, 500);
                        })
                        .catch((error) => {
                            // console.log(error);
                        })
                        .finally(() => {
                            self.watchAllowNext();
                            toggleOverlay(false);
                        });
                },

                checkIsNumber: function(event) {
                    event = (event) ? event : window.event;
                    var charCode = (event.which) ? event.which : event.keyCode;
                    if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
                        event.preventDefault();
                    } else {
                        return true;
                    }
                },
                watchAllowNext: function() {
                    $('.input_error').removeClass('input_error');
                    var self = this;
                    var isFilled = true;
                    if (
                        self.deliveryInfo.mykad.trim() == '' ||
                        self.deliveryInfo.name.trim() == '' ||
                        self.deliveryInfo.email.trim() == '' ||
                        self.deliveryInfo.phone.trim() == '' ||
                        self.deliveryInfo.address.trim() == '' ||
                        self.deliveryInfo.postcode.trim() == '' ||
                        self.deliveryInfo.state.trim() == '' ||
                        (typeof self.deliveryInfo.city == 'undefined' || self.deliveryInfo.city.trim() == '')
                    ) {
                        isFilled = false;
                    }
                    var mykad = /[0-9]{11}$/g;
                    if (self.eligibility.mykad.trim() && !mykad.test(self.eligibility.mykad.trim())) {
                        isFilled = false;
                        $('#mykad_number').addClass('input_error');
                    }

                    var phone = /^[0-46-9]*[0-9]{7,11}$/g;
                    if(self.deliveryInfo.phone.trim() && !phone.test(self.deliveryInfo.phone.trim())){
                        isFilled = false;
                        $('#ic_phone_number').addClass('input_error');
                    }

                    var email = /\S+@\S+\.\S+/;
                    if(self.deliveryInfo.email.trim() && !email.test(self.deliveryInfo.email.trim())){
                        isFilled = false;
                        $('#email').addClass('input_error');
                    }

                    var postcode = /^[0-9]{5}$/g;
                    if(self.deliveryInfo.postcode.trim() && !postcode.test(self.deliveryInfo.postcode.trim())){
                        isFilled = false;
                        $('#postcode').addClass('input_error');
                    }

                    if (isFilled) {
                        self.allowSubmit = true;
                    } else {
                        self.allowSubmit = false;
                    }
                },
                goNext: function(){
                    var self = this;
                    self.getStateCode(self.deliveryInfo.state);

                    if(self.allowSubmit){
                        //update store
                        elevate.lsData.deliveryInfo = self.deliveryInfo;
                        elevate.updateElevateLSData();

                        elevate.redirectToPage('verification');
                    }
                }

            }
        });
    });
</script>
