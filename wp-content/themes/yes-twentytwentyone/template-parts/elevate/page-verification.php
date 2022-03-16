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
        <main>

            <!-- Banner Start -->
            <section id="grey-innerbanner">
                <div class="container">
                    <ul class="wizard">
                        <li ui-sref="firstStep" class="completed">
                            <span>1. Personal Details</span>
                        </li>
                        <li ui-sref="secondStep" class="completed">
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
                <div class="container  p-lg-5 p-3" style="border: 0">
                    <div class="row gx-5">
                        <h2 class="subtitle">ID Verification</h2>
                        <p>
                            A few steps to verify your identity before we continue.
                        </p>
                    </div>
                    <div class="verify-body mt-3">
                        <h3 class="subtitle2">Scan the QR code to begin verification</h3>
                        <div class="mt-5 mb-5">
                            <div id="qrcode"></div>
                        </div>
                        <h3 class="subtitle2">Complete the verification in 2 simple steps!</h3>

                        <ul class="list-2 mt-5">
                            <li><div><span class="number">1</span></div>
                                <div>
                                <div class="subtitle2">ID Validateion</div>
                                <p>Scan your ID with the object in a well lit room facing on a flat surface with minimum reflection</p>
                                </div></li>
                            <li><div><span class="number">2</span></div>
                            <div>
                                <div class="subtitle2">Face Verification</div>
                                <p>Ensure your face is within the frame for an accurate detection</p>
                            </div></li>
                        </ul>

                        <a href="/elevate/eligibility-failure/" class="pink-btn">Eligibility Failure</a>
                    </div>

                </div>
            </section>

        </main>
        <?php require_once ('includes/footer.php');?>
    <script type="text/javascript" src="/wp-content/themes/yes-twentytwentyone/template-parts/elevate/assets/qrcodejs/qrcode.min.js"></script>

    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width : 100,
            height : 100
        });

        function makeCode () {
            var eligibility = elevate.lsData.eligibility;
            if(eligibility && eligibility.eligibility){
                var url_verification = 'https://ekyc-dev-ui.azurewebsites.net/?mykad='+eligibility.mykad+'&fname='+eligibility.name;
                qrcode.makeCode(url_verification);
            }else{
                elevate.redirectToPage('eligibilitycheck');
            }
        }

        function checkVerifyStatus(){
            axios.post(apiEndpointURL_elevate + '/', params)
                .then((response) => {

                })
                .catch((error) => {
                    var response = error.response;

                    console.log(error, response);
                });
        }

        $(document).ready(function() {
            makeCode();
        });
    </script>
