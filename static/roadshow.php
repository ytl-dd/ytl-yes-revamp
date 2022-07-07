<?php include('templates/header.php'); ?>

<?php 
    $array = $arr_keys = array();
    $i = 0;
    $file_to_read = fopen('https://docs.google.com/spreadsheets/d/e/2PACX-1vRlHu_dE9BzosKjknfNFm4MRyybEmQehypBSiW3LdXR2kGqSoERET1NdjLhyeC_NLy9erMJHE3Il8sD/pub?gid=0&single=true&output=csv', 'r');
    if ($file_to_read !== FALSE) {
        while (($data = fgetcsv($file_to_read, 1000, ',')) !== FALSE) {
            if (empty($arr_keys)) {
                $arr_keys = $data;
                continue;
            }
            $months = '';
            $date_string = '';
            foreach ($data as $key => $value) {
                if ($arr_keys[$key] == 'Start Date') {
                    $start_date     = strtotime(str_replace('/', '-', $value));
                    $months         = date('F', $start_date);
                    $date_string    = date('jS', $start_date);
                    $array[$i]['Start Date Unix'] = $start_date;
                } else if ($arr_keys[$key] == 'End Date') {
                    $end_date       = strtotime(str_replace('/', '-', $value));
                    $month          = date('F', $end_date);
                    $end_date_string = date('jS', $end_date);
                    $array[$i]['End Date Unix'] = $end_date;
                    if ($months != $month) {
                        $date_string    .= " $months - $end_date_string $month";
                        $months         .= ", $month";
                    } else if ($date_string != $end_date_string) {
                        $date_string    .= " - $end_date_string $month";
                    } else {
                        $date_string    .= " $month";
                    }
                }
                if ($key != '0' && $arr_keys[$key] != '') $array[$i][$arr_keys[$key]] = str_replace(array("\r", "\n"), ' ', $value);;                // Remove "No" from array
            }
            $array[$i]['Months'] = strtolower($months);
            $array[$i]['Date String'] = $date_string;
            $i++;
        }
        if (!feof($file_to_read)) {
            // echo 'Error: unexpected fgets() fail\n';
        }
        fclose($file_to_read);
    }
    usort($array, function ($a, $b) {
        return $a['Start Date Unix'] - $b['Start Date Unix'];                       // Sort by start date ascending
    });
    $arr_list = [];
    if ($array) {
        foreach ($array as $list) {
            if ($list['State'] && $list['Address'] && $list['Time'] && $list['Start Date'] && $list['End Date'] && $list['Date String'] && $list['Latitude'] && $list['Longitude']) {
                $arr_list[$list['State']][] = $list;
            }
        }
    }
    ksort($arr_list);
    // echo '<pre>'; print_r($arr_list); echo '</pre>';
?>

<style type="text/css">
    .layer-page {
        overflow: unset;
    }

    .page-banner {
        background: linear-gradient(83.24deg, #FF0084 10.6%, #2F3BF5 89.86%);
        color: #FFF;
        padding: 45px 0px;
        text-align: center;
    }

    .page-banner h1 {
        font-size: 48px;
        font-weight: 800;
        margin: 0 0 10px;
    }

    .page-banner p {
        font-size: 16px;
        font-weight: 400;
    }

    .page-banner p span {
        display: block;
        font-size: 22px;
    }

    .layer-filter.filter-container {
        width: 100%;
        background-color: #FFF;
        margin: 0 0 30px;
        padding: 15px 0;
        display: flex;
        flex-direction: column;
        transition: all 230ms ease-in-out;
    }
    
    .layer-filterToggle .navbar-toggler {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 100%;
    }

    .layer-filter.filter-container.filter-shadow {
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.15));
        padding: 15px 0;
        z-index: 1020;
    }

    .layer-filter .filter-drop {
        border: 1px solid #C4C4C4;
        background-color: #FFF;
        border-radius: 10px;
        font-size: 17px;
        color: #000;
        font-weight: 400;
        padding: 15px 16px;
        text-align: left;
        width: 100%;
    }

    .layer-filter .dropdown-toggle::after {
        position: absolute;
        right: 20px;
        top: 26px;
    }

    .layer-filter .filter-drop:focus {
        outline: none;
        box-shadow: none;
    }

    .layer-filter .dropdown-menu {
        border-radius: 10px;
        border: 1px solid #C4C4C4;
        background-color: #FFF;
        width: 100%;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.15));
    }

    .layer-filter .dropdown-menu .form-check {
        padding-left: 20px;
        margin-bottom: 5px;
    }

    .layer-filter .dropdown-menu .form-check label {
        cursor: pointer;
        display: block;
    }

    .layer-list {}

    .layer-list .is-hidden {
        display: none;
    }

    .layer-list .heading-state {
        font-size: 24px;
        line-height: 28px;
        margin: 0 0 20px;
    }

    .layer-list .layer-listBox,
    .layer-list .layer-listBoxNoResults {
        background-color: #FFF;
        border-radius: 10px;
        box-shadow: 0px 4px 10px 3px rgba(0, 0, 0, 0.15);
        margin: 0 0 20px;
        padding: 30px;
        transition: all 0.3s ease-in-out;
    }

    .layer-list .layer-state:last-child .layer-listBox:last-child {
        margin-bottom: 0;
    }

    .layer-list .layer-listBox:hover {
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.15));
    }

    .layer-listBox .panel-date {
        background-color: #F5F5F5;
        display: inline-block;
        font-weight: 700;
        margin: 0 0 15px;
        padding: 10px 20px;
    }

    .layer-listBox .layer-listInfo {}

    .layer-listInfo .table-listInfo {
        margin: 0;
    }

    .table-listInfo th,
    .table-listInfo td {
        border: 0;
        display: block;
        padding: 0 0 10px;
    }

    .table-listInfo th {
        padding-bottom: 0;
    }

    .table-listInfo td {
        padding-right: 0;
    }

    .table-listInfo tr:last-child th,
    .table-listInfo tr:last-child td {
        padding-bottom: 0;
    }

    .layer-listBox .map-btn {
        color: #2F3BF5;
        display: block; 
        font-size: 18px;
        font-weight: 600;
        opacity: 60%;
        text-decoration: none;
    }

    @media (min-width: 768px) {
        .table-listInfo th {
            width: 30%;
        }
    }

    @media (min-width: 992px) {
        .layer-filterToggle .navbar-toggler {
            display: none;
        }

        .layer-filterToggle .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }
    }

    @media (min-width: 1200px) {
        .table-listInfo th, .table-listInfo td {
            display: table-cell;
            padding: 0 20px 15px 0;
        }
        .table-listInfo th {
            padding-bottom: 15px;
            width: 20%;
        }
    }
</style>

<main class="clearfix site-main" id="primary" role="main">
    <!-- Article STARTS -->
    <article>
        <!-- Entry Content STARTS -->
        <div class="entry-content">

            <!-- Breadcrumb STARTS -->
            <div class="layer-breadcrumb">
                <div class="container breadcrumb-section">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active"><a href="/static/roadshow.php">Roadshow</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Breadcrumb ENDS -->

            <!-- Banner STARTS -->
            <section class="page-banner" id="snm-banner">
                <div class="container">
                    <div class="row justify-content-lg-center">
                        <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div>
                                <h1>Roadshow</h1>
                                <div class="row d-none">
                                    <div class="col-lg-8 offset-lg-2">
                                        <p>
                                            <span>Experiencing some network downtime? Check this page for scheduled updates.</span>
                                            *Maintenance activities are usually between 12am - 6am. However, there will be activities that are scheduled at other times.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner ENDS -->

            <!-- Section List STARTS -->
            <section class="layer-section" id="section-list">
                <div class="layer-filter filter-container sticky-top" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="layer-filterToggle">
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tab-storeLocatorFilter" aria-controls="tab-storeLocatorFilter" aria-expanded="false" alria-label="Filter"><span>Filter</span> <span class="navbar-toggler-icon"></span></button>
                        <div class="navbar-collapse tab-content collapse justify-content-center" id="tab-storeLocatorFilter">
                            <div class="container">
                                <div class="row justify-content-lg-center">
                                    <div class="col-12 col-lg-8">
                                        <div class="row">
                                            <div class="col-12 col-lg-3 mb-2 mb-lg-0 mt-3 mt-lg-0">
                                                <div class="dropdown">
                                                    <button class="btn filter-drop dropdown-toggle" type="button" id="dropdown-states" data-bs-toggle="dropdown" aria-expanded="false">All States</button>
                                                    <ul class="dropdown-menu states" aria-labelledby="dropdown-states" data-filter-type="state">
                                                        <li><div class="form-check"><label><input class="cardCheckBoxAll" data-filter-type="state" type="checkbox" value="All" checked /> <span>All</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Johor"              data-state-name="Johor" />              <span>Johor</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Kedah"              data-state-name="Kedah" />              <span>Kedah</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Kelantan"           data-state-name="Kelantan" />           <span>Kelantan</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Kuala Lumpur"       data-state-name="Kuala Lumpur" />       <span>Kuala Lumpur</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Melaka"             data-state-name="Melaka" />             <span>Melaka</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Negeri Sembilan"    data-state-name="Negeri Sembilan" />    <span>Negeri Sembilan</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Pahang"             data-state-name="Pahang" />             <span>Pahang</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Perak"              data-state-name="Perak" />              <span>Perak</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Perlis"             data-state-name="Perlis" />             <span>Perlis</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Pulau Pinang"       data-state-name="Pulau Pinang" />       <span>Pulau Pinang</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Sabah"              data-state-name="Sabah" />              <span>Sabah</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Sarawak"            data-state-name="Sarawak" />            <span>Sarawak</span></label></div></li>
                                                        <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Terengganu"         data-state-name="Terengganu" />         <span>Terengganu</span></label></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class="dropdown">
                                                    <button class="btn filter-drop dropdown-toggle" type="button" id="dropdown-months" data-bs-toggle="dropdown" aria-expanded="false">All Months</button>
                                                    <ul class="dropdown-menu month" aria-labelledby="dropdown-month" data-filter-type="month">
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBoxAll" data-filter-type="month" type="checkbox" value="All" checked /> <span>All</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="january" data-month-name="January" checked /> <span>January</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="february" data-month-name="February" checked /> <span>February</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="march" data-month-name="March" checked /> <span>March</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="april" data-month-name="April" checked /> <span>April</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="may" data-month-name="May" checked /> <span>May</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="june" data-month-name="June" checked /> <span>June</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="july" data-month-name="July" checked /> <span>July</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="august" data-month-name="August" checked /> <span>August</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="september" data-month-name="September" checked /> <span>September</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="october" data-month-name="October" checked /> <span>October</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="november" data-month-name="November" checked /> <span>November</span></label></div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check"><label><input class="cardCheckBox month" type="checkbox" value="december" data-month-name="December" checked /> <span>December</span></label></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layer-list container">
                    <div class="row justify-content-lg-center">
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <?php  foreach ($arr_list as $state => $data) : ?>
                                <div class="layer-state col-12 mb-4" data-state="<?php echo $state; ?>" data-aos="fade-up" data-aos-duration="500">
                                    <h2 class="heading-state"><?php echo $state; ?></h2>
                                    <?php foreach ($data as $list) : ?>
                                    <div class="layer-listBox" data-month="<?php echo $list['Months']; ?>">
                                        <div class="row align-items-end">
                                            <div class="col-12 col-lg-8 col-xxl-9 mb-4 mb-lg-0">
                                                <p class="panel-date"><?php echo $list['Date String']; ?></p>
                                                <div class="layer-listInfo">
                                                    <table class="table table-listInfo">
                                                        <tr>
                                                            <th>Time:</th>
                                                            <td><?php echo $list['Time']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address:</th>
                                                            <td><?php echo $list['Address']; ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-xxl-3">
                                                <a href="https://www.waze.com/ul?ll=<?php echo $list['Latitude']; ?>%2C<?php echo $list['Longitude']; ?>&amp;navigate=yes" class="map-btn mb-3" target="_blank" rel="noopener"><img src="https://cdn.yes.my/site/wp-content/uploads/2022/01/icon-waze.png"> Waze</a>
                                                <a href="https://www.google.com/maps/search/?api=1&amp;query=<?php echo $list['Latitude']; ?>%2C<?php echo $list['Longitude']; ?>" class="map-btn" target="_blank" rel="noopener"><img src="https://cdn.yes.my/site/wp-content/uploads/2022/01/icon-gmap.png?"> Google Maps</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <div class="layer-listBoxNoResults is-hidden">
                                        <h3>No results</h3>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <!-- <div class="layer-state col-12 mb-4" data-state="perlis" data-aos="fade-up" data-aos-duration="500">
                                    <h2 class="heading-state">Perlis</h2>
                                    <div class="layer-listBox" data-month="march">
                                        <p class="panel-date">30th, 31st March</p>
                                        <div class="layer-listInfo">
                                            <table class="table table-listInfo">
                                                <tr>
                                                    <th>Time:</th>
                                                    <td>12AM - 3AM</td>
                                                </tr>
                                                <tr>
                                                    <th>Affected Area:</th>
                                                    <td>Perlis</td>
                                                </tr>
                                                <tr>
                                                    <th>Service Type:</th>
                                                    <td>Voice & Data (Mobile)</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="layer-listBox" data-month="april">
                                        <p class="panel-date">1st April</p>
                                        <div class="layer-listInfo">
                                            <table class="table table-listInfo">
                                                <tr>
                                                    <th>Time:</th>
                                                    <td>12AM - 3AM</td>
                                                </tr>
                                                <tr>
                                                    <th>Affected Area:</th>
                                                    <td>Perlis</td>
                                                </tr>
                                                <tr>
                                                    <th>Service Type:</th>
                                                    <td>Voice & Data (Mobile)</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="layer-listBoxNoResults is-hidden">
                                        <h3>No results</h3>
                                    </div>
                                </div>
                                <div class="layer-state col-12 mb-4" data-state="pulau-pinang" data-aos="fade-up" data-aos-duration="500">
                                    <h2 class="heading-state">Pulau Pinang</h2>
                                    <div class="layer-listBox" data-month="march">
                                        <p class="panel-date">30th, 31st March</p>
                                        <div class="layer-listInfo">
                                            <table class="table table-listInfo">
                                                <tr>
                                                    <th>Time:</th>
                                                    <td>12AM - 3AM</td>
                                                </tr>
                                                <tr>
                                                    <th>Affected Area:</th>
                                                    <td>Pulau Pinang</td>
                                                </tr>
                                                <tr>
                                                    <th>Service Type:</th>
                                                    <td>Voice & Data (Mobile)</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="layer-listBox" data-month="may">
                                        <p class="panel-date">1st May</p>
                                        <div class="layer-listInfo">
                                            <table class="table table-listInfo">
                                                <tr>
                                                    <th>Time:</th>
                                                    <td>12AM - 3AM</td>
                                                </tr>
                                                <tr>
                                                    <th>Affected Area:</th>
                                                    <td>Pulau Pinang</td>
                                                </tr>
                                                <tr>
                                                    <th>Service Type:</th>
                                                    <td>Voice & Data (Mobile)</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="layer-listBoxNoResults is-hidden mb-0">
                                        <h3>No results</h3>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row mb-4 is-hidden" id="row-noResultsAll">
                                <div class="col-12">
                                    <div class="layer-listBoxNoResults mb-0">
                                        <h3>No results</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section List ENDS -->

        </div>
        <!-- Entry Content ENDS -->
    </article>
    <!-- Article ENDS -->
</main>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places,visualization&v=weekly&client=gme-ytlcommunications3&channel=publicyes"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var targetFilter = $('.sticky-top').offset().top;
            if (scroll >= targetFilter) {
                $('.sticky-top').addClass('filter-shadow');
            } else {
                $('.sticky-top').removeClass('filter-shadow');
            }
        });

        initFilterCheckbox();

        toggleOverlay();

        getLocation();
    });

    const cardsState = $('[data-state]');
    const cardsMonth = $('[data-month]');
    const cardsCkbState = $('.cardCheckBox.state');
    const cardsCkbMonth = $('.cardCheckBox.month');

    function handleSelectAll(dropdown, calledFromFilter = false) {
        var filterType = $(dropdown).data('filter-type') || $(dropdown).closest('[data-filter-type]').data('filter-type');
        if (calledFromFilter) {
            var cardsCkb = $('[data-filter-type="' + filterType + '"] .cardCheckBox');
            var selectAll = cardsCkb.length === cardsCkb.filter(':checked').length;
            $('[data-filter-type="' + filterType + '"] input.cardCheckBoxAll').prop('checked', selectAll);
        } else {
            $('[data-filter-type="' + filterType + '"] .cardCheckBox').prop('checked', $(dropdown).is(':checked')).change();
        }
    }

    function checkIfNoResults() {
        AOS.refresh();
        var activeBoxStates = $('.layer-state').not('.is-hidden');
        var boxNoResultsAll = $('#row-noResultsAll');
        if (!$(activeBoxStates).length) {
            $(boxNoResultsAll).removeClass('is-hidden');
        } else {
            var activeBoxMonths = $('.layer-listBox').not('.is-hidden');
            $(activeBoxStates).each(function(idx, stateBox) {
                var activeBoxMonths = $(stateBox).find('.layer-listBox').not('.is-hidden');
                var noResultBoxMonths = $(stateBox).find('.layer-listBoxNoResults');
                if (!$(activeBoxMonths).length) {
                    $(noResultBoxMonths).removeClass('is-hidden');
                } else {
                    $(noResultBoxMonths).addClass('is-hidden');
                }
            });
            $(boxNoResultsAll).addClass('is-hidden');
        }
    }

    function changeState(e) {
        var checkbox = $(e.target);
        handleSelectAll(checkbox, true);

        const arrCheckedStates = cardsCkbState.filter(':checked').get().map(el => el.value);
        var selectedText = 'No State Selected';
        if (arrCheckedStates.length == cardsCkbState.length) {
            selectedText = 'All States';
        } else if (arrCheckedStates.length > 1) {
            selectedText = 'Multiple States';
        } else if (arrCheckedStates.length == 1) {
            selectedText = $('.cardCheckBox.state[value="' + arrCheckedStates[0] + '"]').closest('.form-check').find('span').html();
        }
        $('#dropdown-states').text(selectedText);

        if (!arrCheckedStates.length) {
            cardsState.addClass('is-hidden');
            checkIfNoResults();
            return;
        }

        cardsState.each(function() {
            const state = $(this).data('state');
            $(this).toggleClass('is-hidden', !arrCheckedStates.includes(state));
        });

        checkIfNoResults();
    }

    function changeMonth(e) {
        var checkbox = $(e.target);
        handleSelectAll(checkbox, true);

        const arrCheckedMonths = cardsCkbMonth.filter(':checked').get().map(el => el.value);
        switch (true) {
            case arrCheckedMonths.length == cardsCkbMonth.length:
                selectedText = 'All Months';
                break;
            case (arrCheckedMonths.length > 1):
                selectedText = 'Multiple Months';
                break;
            case (arrCheckedMonths.length == 1):
                selectedText = $('.cardCheckBox.month[value="' + arrCheckedMonths[0] + '"]').closest('.form-check').find('span').html();
                break;
            default:
                selectedText = 'No Month Selected';
        }
        $('#dropdown-months').text(selectedText);

        if (!arrCheckedMonths.length) {
            cardsMonth.addClass('is-hidden');
            checkIfNoResults();
            return;
        }

        cardsMonth.each(function(idx, target) {
            const month = $(this).data('month');
            $(target).addClass('is-hidden');
            for (var i = 0; i < arrCheckedMonths.length; i++) {
                if (month.indexOf(arrCheckedMonths[i]) > -1) {
                    $(target).removeClass('is-hidden');
                    break;
                }
            }

        });

        checkIfNoResults();
    }

    function initFilterCheckbox() {
        $('.cardCheckBoxAll[data-filter-type="state"]').prop('checked', true).trigger('change');
        $('.cardCheckBoxAll[data-filter-type="month"]').prop('checked', true).trigger('change');

        $('ul.dropdown-menu').on('click', function(e) {
            var events = $._data(document, 'events') || {};
            events = events.click || [];
            for (var i = 0; i < events.length; i++) {
                if (events[i].selector) {
                    if ($(e.target).is(events[i].selector)) {
                        events[i].handler.call(event.target, event);
                    }
                    $(e.target).parents(events[i].selector).each(function() {
                        events[i].handler.call(this, e);
                    });
                }
            }
            e.stopPropagation();
        });

        $('input.cardCheckBoxAll').each(function(index, dropdown) {
            $(dropdown).on('change', function() {
                handleSelectAll(dropdown);
            });
        });

        $(cardsCkbState).on('change', function(event) {
            changeState(event);
        });

        $(cardsCkbMonth).on('change', function(event) {
            changeMonth(event);
        });
    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            console.log("Geolocation is not supported by this browser.");
        }
        toggleOverlay(false);
    }

    function showPosition(position) {
        lat = position.coords.latitude;
        lon = position.coords.longitude;
        displayLocation(lat, lon);
    }

    function showError(error) {
        var errMsg = '';
        switch (error.code) {
            case error.PERMISSION_DENIED:
                errMsg = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                errMsg = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                errMsg = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                errMsg = "An unknown error occurred."
                break;
        }
        console.log(errMsg);
    }

    function displayLocation(latitude, longitude) {
        var geocoder;
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(latitude, longitude);

        geocoder.geocode({
                'latLng': latlng
            },
            function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        var indices = 0;
                        var locState = '';
                        for (var j = 0; j < results.length; j++) {
                            if (results[j].types[0] == 'locality') {
                                indice = j;
                                break;
                            }
                        }
                        for (var i = 0; i < results[j].address_components.length; i++) {
                            if (results[j].address_components[i].types[0] == 'locality') {
                                var locObj = results[j].address_components[i];
                                locState = locObj.long_name;
                                break;
                            }
                        }
                        if (locState && $('.cardCheckBox.state[data-state-name="' + locState + '"]').length) {
                            $('.cardCheckBoxAll[data-filter-type="state"]').prop('checked', false).trigger('change');
                            $('.cardCheckBox.state[data-state-name="' + locState + '"]');
                            $('.cardCheckBox.state[data-state-name="' + locState + '"]').prop('checked', true).trigger('change');
                            AOS.refresh()
                        }
                    }
                } else {
                    console.log("Geocoder failed due to: " + status);
                }
            }
        );
    }
</script>

<?php include('templates/footer.php'); ?>