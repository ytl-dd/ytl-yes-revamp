<?php

if (!function_exists('generate_scheduled_network_maintenance')) {
    /**
     * Function generate_scheduled_network_maintenance()
     * Function to register shortcode for the Scheduled Network Maintenance page
     * 
     * @since    1.2.0
     */
    function generate_scheduled_network_maintenance()
    {
        $array = $arr_keys = array();
        $i = 0;
        $file_to_read = fopen(FP_SCHEDULED_NETWORK_MAINTENANCE, 'r');
        if ($file_to_read !== FALSE) {
            while (($data = fgetcsv($file_to_read, 0, ',')) !== FALSE) {
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
                        $year           = date('Y', $end_date);
                        $end_date_string = date('jS', $end_date);
                        $array[$i]['End Date Unix'] = $end_date;
                        if ($months != $month) {
                            $date_string    .= " $months - $end_date_string $month, $year";
                            $months         .= ", $month";
                        } else if ($date_string != $end_date_string) {
                            $date_string    .= " - $end_date_string $month, $year";
                        } else {
                            $date_string    .= " $month, $year";
                        }
                    }
                    if ($key != '0') $array[$i][$arr_keys[$key]] = $value;                // Remove "No" from array
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
                if ($list['State'] && $list['Area'] && $list['Service Type'] && $list['Start Date'] && $list['End Date'] && $list['Time'] && $list['Show on Web'] == 'Yes') {
                    $arr_list[$list['State']][] = $list;
                }
            }
        }
        ksort($arr_list);                                                               // Sort by states alphabetically

        $lang           = get_bloginfo('language');
        $str_box_time   = 'Downtime Between';
        $str_box_area   = 'Affected Area';
        $str_box_type   = 'Service Type';
        if ($lang == 'ms-MY') {
            $str_box_time   = 'Masa';
            $str_box_area   = 'Kawasan Terjejas';
            $str_box_type   = 'Jenis Servis';
        } else if ($lang == 'zh-CN') {
        }

        $html_list  = '';

        foreach ($arr_list as $state => $data) {
            $html_list  .= '                <div class="layer-state col-12 mb-4" data-state="' . $state . '" data-aos="fade-up" data-aos-duration="500">
                                                <h2 class="heading-state">' . $state . '</h2>';
            foreach ($data as $list) {
                $html_list  .= '                <div class="layer-listBox" data-month="' . $list['Months'] . '">
                                                    <p class="panel-date">' . $list['Date String'] . '</p>
                                                    <div class="layer-listInfo">
                                                        <table class="table table-listInfo">
                                                            <tr>
                                                                <th>' . $str_box_time . ':</th>
                                                                <td>' . $list['Time'] . '</td>
                                                            </tr>
                                                            <tr>
                                                                <th>' . $str_box_area . ':</th>
                                                                <td>' . $list['Area'] . '</td>
                                                            </tr>
                                                            <tr>
                                                                <th>' . $str_box_type . ':</th>
                                                                <td>' . $list['Service Type'] . '</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>';
            }
            $html_list  .= '                    <div class="layer-listBoxNoResults is-hidden">
                                                    <h3>No results</h3>
                                                </div>
                                            </div>';
        }


        $html       = ' <!-- Section List STARTS -->
                        <section class="layer-section" id="section-list">
                            <div class="layer-filter filter-container sticky-top" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="layer-filterToggle">
                                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tab-storeLocatorFilter" aria-controls="tab-storeLocatorFilter" aria-expanded="false" alria-label="Filter"><span>' . esc_html__('Filter', 'yes.my') . '</span> <span class="navbar-toggler-icon"></span></button>
                                    <div class="navbar-collapse tab-content collapse justify-content-center" id="tab-storeLocatorFilter">
                                        <div class="container">
                                            <div class="row justify-content-lg-center">
                                                <div class="col-12 col-lg-8">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3 mb-2 mb-lg-0 mt-3 mt-lg-0">
                                                            <div class="dropdown">
                                                                <button class="btn filter-drop dropdown-toggle" type="button" id="dropdown-states" data-bs-toggle="dropdown" aria-expanded="false">' . esc_html__('All States', 'yes.my') . '</button>
                                                                <ul class="dropdown-menu states" aria-labelledby="dropdown-states" data-filter-type="state">
                                                                    <li><div class="form-check"><label><input class="cardCheckBoxAll" data-filter-type="state" type="checkbox" value="All" checked /> <span>' . esc_html__('All', 'yes.my') . '</span></label></div></li>
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
                                                                <button class="btn filter-drop dropdown-toggle" type="button" id="dropdown-months" data-bs-toggle="dropdown" aria-expanded="false">' . esc_html__('All Months', 'yes.my') . '</button>
                                                                <ul class="dropdown-menu month" aria-labelledby="dropdown-month" data-filter-type="month">
                                                                    <li><div class="form-check"><label><input class="cardCheckBoxAll" data-filter-type="month" type="checkbox" value="All" checked /> <span>' . esc_html__('All', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="january"            data-month-name="' . esc_html__('January', 'yes.my') . '" />            <span>' . esc_html__('January', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="february"           data-month-name="' . esc_html__('February', 'yes.my') . '" />           <span>' . esc_html__('February', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="march"              data-month-name="' . esc_html__('March', 'yes.my') . '" />              <span>' . esc_html__('March', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="april"              data-month-name="' . esc_html__('April', 'yes.my') . '" />              <span>' . esc_html__('April', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="may"                data-month-name="' . esc_html__('May', 'yes.my') . '" />                <span>' . esc_html__('May', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="june"               data-month-name="' . esc_html__('June', 'yes.my') . '" />               <span>' . esc_html__('June', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="july"               data-month-name="' . esc_html__('July', 'yes.my') . '" />               <span>' . esc_html__('July', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="august"             data-month-name="' . esc_html__('August', 'yes.my') . '" />             <span>' . esc_html__('August', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="september"          data-month-name="' . esc_html__('September', 'yes.my') . '" />          <span>' . esc_html__('September', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="october"            data-month-name="' . esc_html__('October', 'yes.my') . '" />            <span>' . esc_html__('October', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="november"           data-month-name="' . esc_html__('November', 'yes.my') . '" />           <span>' . esc_html__('November', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="december"           data-month-name="' . esc_html__('December', 'yes.my') . '" />           <span>' . esc_html__('December', 'yes.my') . '</span></label></div></li>
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
                                            ' . $html_list . '
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
                        <!-- Section List ENDS -->';

        return $html;
    }

    add_shortcode('yessc_scheduled_network_maintenance', 'generate_scheduled_network_maintenance');
}


if (!function_exists('display_widget_content')) {
    /**
     * Function display_widget_content()
     * Function to register shortcode to display the widget by ID
     * 
     * @since    1.2.0
     */
    function display_widget_content($atts)
    {
        extract(shortcode_atts(array(
            'widget_id' => FALSE
        ), $atts));

        ob_start();
        dynamic_sidebar($widget_id);
        $widget_content = ob_get_clean();
        $html = $widget_content;
        return $html;
    }
    add_shortcode('yes_display_widget', 'display_widget_content');
}


if (!function_exists('generate_store_locations')) {
    /**
     * Function generate_store_locations()
     * Function to register shortcode to generate the store location list
     * 
     * @since    1.2.1
     */
    function generate_store_locations()
    {
        $array = $arr_keys = array();
        $i = 0;
        $file_to_read = fopen(FP_STORE_LOCATIONS, 'r');
        if ($file_to_read !== FALSE) {
            while (($data = fgetcsv($file_to_read, 0, ',')) !== FALSE) {
                if (empty($arr_keys)) {
                    $arr_keys = $data;
                    continue;
                }
                $service_string = '';
                foreach ($data as $key => $value) {
                    $service_string = build_service_string($service_string, $arr_keys[$key], $value);
                    if ($key != '0') $array[$i][$arr_keys[$key]] = $value;
                }
                $array[$i]['Services'] = $service_string;
                $i++;
            }
            if (!feof($file_to_read)) {
                // echo 'Error: unexpected fgets() fail\n';
            }
            fclose($file_to_read);
        }

        $arr_list = [];
        if ($array) {
            foreach ($array as $list) {
                if ($list['State'] && $list['Address'] && $list['Is Active'] == 'Yes' && $list['Latitude'] && $list['Longitude']) {
                    $arr_list[$list['State']][] = $list;
                }
            }
        }

        $html_list  = '';
        if (isset($arr_list['KUALA LUMPUR'])) {
            $new_value = $arr_list['KUALA LUMPUR'];
            $arr_list = array_merge(["KUALA LUMPUR" => $new_value], $arr_list);
        }

        foreach ($arr_list as $state => $stores) {
            $state_name     = ucwords(strtolower($state));
            $html_list      .= '            <div class="col-12 mb-4 layer-state" data-state="' . strtolower($state) . '">
                                                <h1 class="mb-4">' . $state_name . '</h1>';


            foreach ($stores as $data) {

                $services   = $data['Services'];
                $services   = str_replace(array('service-stores'), array('stores'), $services);

                $store_type     = $data['Store Type'];
                $store_type     = str_replace(array('Store & Service Centre'), array('Store'), $store_type);
                $store_brand    = ($data['Brand']) ? $data['Brand'] : '';
                $store_address  = $data['Address'];
                $operating_hour = $data['Operation Hour'];
                $explode_hours  = explode(';', $operating_hour);
                $link_waze      = "https://www.waze.com/ul?ll=" . $data['Latitude'] . "%2C" . $data['Longitude'] . "&amp;navigate=yes";
                $link_gmap      = "https://www.google.com/maps/search/?api=1&amp;query=" . $data['Latitude'] . "%2C" . $data['Longitude'];

                $class_store_type = '';
                switch ($store_type) {
                    case 'OEM Store':
                        $class_store_type = 'oem-color';
                        break;
                    case 'MyNews':
                        $class_store_type = 'red';
                        break;
                    default;
                }

                $coming_soon = '';
                switch ($store_brand) {
                    case 'VIVO':
                        $store_name = "<span class='font-normal'>vivo</span> Concept Store";
                        break;
                    case 'OPPO':
                        $coming_soon = ($data['Ready to Sell'] == 'No') ? ' (' . esc_html__('Available Soon', 'yes.my') . ')' : '';
                        $store_name = "$store_brand Brand Store" . $coming_soon;
                        break;
                    case 'SAMSUNG':
                        $coming_soon = ($data['Ready to Sell'] == 'No') ? ' (Available Soon)' : '';
                        $store_name = "$store_brand Experience Store" . $coming_soon;
                        break;
                    case 'Xiaomi':
                        $store_name = "<span class='font-normal'>Mi</span> Store";
                        break;
                    default:
                        $store_name = $data['Store Name'];
                }

                $html_hours = '';
                if ($operating_hour != '') {
                    $html_hours .= '                        <p class="mb-0 time">';
                    $i = 0;
                    foreach ($explode_hours as $hours) {
                        $html_hours     .= '                    <span class="iconify align-middle" data-icon="akar-icons:clock"></span> ' . $hours;
                        if ($i != count($explode_hours)) $html_hours .= '<br />';
                        $i++;
                    }
                    $html_hours .= '                        </p>';
                }

                $html_list  .= '                <div class="store-box layer-listBox mb-3" data-services="' . $services . '">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h2 class="mb-3 ' . $class_store_type . '">' . $store_type . '</h2>
                                                            <h3 class="mb-3">' . $store_name . '</h3>
                                                        </div>
                                                        <div class="col-12 col-lg-8 col-xxl-9 mb-5 mb-lg-0">
                                                            <p class="mb-3">' . $store_address . '</p>
                                                            ' . $html_hours . '
                                                            <!-- <p class="phone d-none"><a href="tel:+6018-3330000">+60 18-333 0000</a></p> -->
                                                        </div>
                                                        <div class="col-12 col-lg-4 col-xxl-3 mt-auto">
                                                            <a href="' . $link_waze . '" class="map-btn mb-3" target="_blank" rel="noopener"><img src="https://cdn.yes.my/site/wp-content/uploads/2022/01/icon-waze.png"> Waze</a>
                                                            <a href="' . $link_gmap . '" class="map-btn" target="_blank" rel="noopener"><img src="https://cdn.yes.my/site/wp-content/uploads/2022/01/icon-gmap.png?"> Google Maps</a>
                                                        </div>
                                                    </div>
                                                </div>';
            }

            $html_list      .= '                <div class="layer-listBoxNoResults is-hidden">
                                                    <h3>No results</h3>
                                                </div>
                                            </div>';
        }

        $html       = ' <!-- Store Locations Start -->
                        <section id="store-locations">
                            <div class="filter-container sticky-top" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="layer-storeLocatorFilter">
                                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tab-storeLocatorFilter" aria-controls="tab-storeLocatorFilter" aria-expanded="false" alria-label="Filter"><span>' . esc_html__('Filter', 'yes.my') . '</span> <span class="navbar-toggler-icon"></span></button>
                                    <div class="navbar-collapse tab-content collapse justify-content-center" id="tab-storeLocatorFilter">
                                        <div class="container">
                                            <div class="row justify-content-lg-center">
                                                <div class="col-12 col-lg-8">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3 mb-2 mb-lg-0 mt-3 mt-lg-0">
                                                            <div class="dropdown">
                                                                <button class="btn filter-drop dropdown-toggle" type="button" id="dropdownStates" data-bs-toggle="dropdown" aria-expanded="false">' . esc_html__('All States', 'yes.my') . '</button>
                                                                <ul class="dropdown-menu states" aria-labelledby="dropdownStates" data-filter-type="state">
                                                                    <li><div class="form-check"><label><input class="cardCheckBoxAll" data-filter-type="state" id="checkall" type="checkbox" value="All" checked /> <span>' . esc_html__('All', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="perlis" data-state-name="Perlis" checked /> <span>Perlis</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="terengganu" data-state-name="Terengganu" checked /> <span>Terengganu</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="kedah" data-state-name="Kedah" checked /> <span>Kedah</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="pulau pinang" data-state-name="Pulau Pinang" checked /> <span>Pulau Pinang</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="perak" data-state-name="Perak" checked /> <span>Perak</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="kuala lumpur" data-state-name="Kuala Lumpur" checked /> <span>Kuala Lumpur</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="negeri sembilan" data-state-name="Negeri Sembilan" checked /> <span>Negeri Sembilan</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="melaka" data-state-name="Melaka" checked /> <span>Melaka</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="johor" data-state-name="Johor" checked /> <span>Johor</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="pahang" data-state-name="Pahang" checked /> <span>Pahang</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="kelantan" data-state-name="Kelantan" checked /> <span>Kelantan</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="sabah" data-state-name="Sabah" checked /> <span>Sabah</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="selangor" data-state-name="Selangor" checked /> <span>Selangor</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="sarawak" data-state-name="Sarawak" checked /> <span>Sarawak</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" value="labuan" data-state-name="Labuan" checked /> <span>Labuan</span></label></div></li>
                                                                    <li><div class="form-check mb-0"><label><input class="cardCheckBox state" type="checkbox" value="putrajaya" data-state-name="Putrajaya" checked /> <span>Putrajaya</span></label></div></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-5 mb-2 mb-lg-0">
                                                            <div class="dropdown">
                                                                <button class="btn filter-drop dropdown-toggle" type="button" id="dropdownProducts" data-bs-toggle="dropdown" aria-expanded="false">' . esc_html__('All Products & Services', 'yes.my') . '</button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownProducts" data-filter-type="service">
                                                                    <li><div class="form-check"><label><input class="cardCheckBoxAll" type="checkbox" value="All" data-filter-type="service" checked /> ' . esc_html__('All', 'yes.my') . '</label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="postpaid-activation" data-service-name="Postpaid Activations" checked /> <span>' . esc_html__('Postpaid Activations', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="prepaid-activation" data-service-name="Prepaid Activations" checked /> <span>' . esc_html__('Prepaid Activations', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="postpaid-bill-payment" data-service-name="Postpaid Bill Payment" checked /> <span>' . esc_html__('Postpaid Bill Payment', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="prepaid-topup" data-service-name="Prepaid Top Up" checked /> <span>' . esc_html__('Prepaid Top Up', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="prepaid-reload-card" data-service-name="Prepaid Reload Card" checked /> <span>' . esc_html__('Prepaid Reload Card', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="device-sales" data-service-name="Yes Device Sales Only" checked /> <span>' . esc_html__('Yes Device Sales Only', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="debit-online" data-service-name="Auto Debit Application (Online)" checked /> <span>' . esc_html__('Auto Debit Application (Online)', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="change-details" data-service-name="Change of Customer Details" checked /> <span>' . esc_html__('Change of Customer Details', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="trouble-shooting" data-service-name="Yes Device Troubleshooting" checked /> <span>' . esc_html__('Yes Device Troubleshooting', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="device-configuration" data-service-name="Yes Device Configuration" checked /> <span>' . esc_html__('Yes Device Configuration', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="faulty-device" data-service-name="Faulty Device Replacement (Yes Device Only)" checked /> <span>' . esc_html__('Faulty Device Replacement (Yes Device Only)', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="service-query" data-service-name="Service Query" checked /> <span>' . esc_html__('Service Query', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox service" type="checkbox" value="termination" data-service-name="Termination" checked /> <span>' . esc_html__('Termination', 'yes.my') . '</span></label></div></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-4 mb-2 mb-lg-0">
                                                            <div class="dropdown">
                                                                <button class="btn filter-drop dropdown-toggle" type="button" id="dropdownStoreTypes" data-bs-toggle="dropdown" aria-expanded="false">' . esc_html__('All Store Types', 'yes.my') . '</button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownStoreTypes" data-filter-type="store-type">
                                                                    <li><div class="form-check"><label><input class="cardCheckBoxAll" type="checkbox" value="All" data-filter-type="store-type" checked /> ' . esc_html__('All', 'yes.my') . '</label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox store-type" type="checkbox" value="yes-stores" data-storetype="Yes Stores" checked /> <span>Yes Stores</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox store-type" type="checkbox" value="yes-experience-stores" data-storetype="Yes Experience Stores" checked /> <span>Yes Experience Stores</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox store-type" type="checkbox" value="yes-exclusive-stores" data-storetype="Yes Exclusive Stores" checked /> <span>Yes Exclusive Stores</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox store-type" type="checkbox" value="dealer-mynews" data-storetype="Dealer MyNews" checked /> <span>Dealer MyNews</span></label></div></li>
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
                            <div class="container mb-5" data-aos="fade-up" data-aos-duration="500">
                                <div class="row justify-content-lg-center">
                                    <div class="col-12 col-lg-8">
                                        <div class="row mt-0 mt-md-5">' . $html_list . '</div>
                                        <div class="row mb-4 mt-5 is-hidden" id="row-noResultsAll">
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
                        <!-- Store Locations End -->';

        return $html;
    }


    /**
     * Function build_service_string()
     * Function to build the service strings from the excel list
     * 
     * @since    1.2.1
     */
    function build_service_string($service_string = '', $key = '', $value = '')
    {
        // die();
        if (strpos($key, 'Service - ') !== false && $value == 'Yes') {
            switch ($key) {
                case 'Service - Postpaid Activation':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'postpaid-activation';
                    break;
                case 'Service - Prepaid Activation':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'prepaid-activation';
                    break;
                case 'Service - Postpaid Bill Payment':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'postpaid-bill-payment';
                    break;
                case 'Service - Prepaid Top Up':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'prepaid-topup';
                    break;
                case 'Service - Prepaid Reload Card':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'prepaid-reload-card';
                    break;
                case 'Service - Yes Device Sales Only':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'device-sales';
                    break;
                case 'Service - Auto Debit Application (Online)':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'debit-online';
                    break;
                case 'Service - Change of Customer Details':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'change-details';
                    break;
                case 'Service - Yes Device Troubleshooting':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'trouble-shooting';
                    break;
                case 'Service - Yes Device Configuration':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'device-configuration';
                    break;
                case 'Service - Faulty Device Replacement (Yes Device Only)':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'faulty-device';
                    break;
                case 'Service - Service Query':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'service-query';
                    break;
                case 'Service - Termination':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'termination';
                    break;
                default;
            }
        }

        if ($key == 'Store Type') {

            switch ($value) {
                case 'Yes Store':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'yes-stores';
                    break;
                case 'Yes Store & Service Centre':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'yes-service-stores';
                    break;
                case 'Yes Experience Store':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'yes-experience-stores';
                    break;
                case 'Yes Exclusive Store':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'yes-exclusive-stores';
                    break;
                case 'MyNews':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'dealer-mynews';
                    break;
                case 'OEM Store':
                    if ($service_string != '') $service_string .= ',';
                    $service_string .= 'oem-stores';
                    break;
                default;
            }
        }
        return $service_string;
    }

    add_shortcode('yessc_store_locations_list', 'generate_store_locations');
}


if (!function_exists('generate_roadshow')) {
    /**
     * Function generate_roadshow()
     * Function to register shortcode for the Roadshow page
     * 
     * @since    1.2.0
     */
    function generate_roadshow()
    {
        $array = $arr_keys = array();
        $i = 0;
        $file_to_read = fopen(FP_ROADSHOW_SCHEDULE, 'r');
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
                if ($list['State'] && $list['Address'] && $list['Time'] && $list['Start Date'] && $list['End Date'] && $list['Date String'] && $list['Latitude'] && $list['Longitude'] && $list['Show on Web'] == 'Yes') {
                    $arr_list[$list['State']][] = $list;
                }
            }
        }
        ksort($arr_list);                                                               // Sort by states alphabetically

        $lang           = get_bloginfo('language');
        $str_box_time   = 'Time';
        $str_box_address   = 'Address';
        if ($lang == 'ms-MY') {
            $str_box_time   = 'Masa';
            $str_box_address   = 'Alamat';
        } else if ($lang == 'zh-CN') {
        }

        $html_list  = '';

        foreach ($arr_list as $state => $data) {
            $html_list  .= '                <div class="layer-state col-12 mb-4" data-state="' . $state . '">
                                                <h2 class="heading-state">' . $state . '</h2>';
            foreach ($data as $list) {
                $html_list  .= '                <div class="layer-listBox" data-month="' . $list['Months'] . '">
                                                    <div class="row align-items-end">
                                                        <div class="col-12 col-lg-8 col-xxl-9 mb-4 mb-lg-0">
                                                            <p class="panel-date">' . $list['Date String'] . '</p>
                                                            <div class="layer-listInfo">
                                                                <table class="table table-listInfo">
                                                                    <tr>
                                                                        <th>' . $str_box_time . ':</th>
                                                                        <td>' . $list['Time'] . '</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>' . $str_box_address . ':</th>
                                                                        <td>' . $list['Address'] . '</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-4 col-xxl-3">
                                                            <a href="https://www.waze.com/ul?ll=' . $list['Latitude'] . '%2C' . $list['Longitude'] . '&amp;navigate=yes" class="map-btn mb-3" target="_blank" rel="noopener"><img src="https://cdn.yes.my/site/wp-content/uploads/2022/01/icon-waze.png"> Waze</a>
                                                            <a href="https://www.google.com/maps/search/?api=1&amp;query=' . $list['Latitude'] . '%2C' . $list['Longitude'] . '" class="map-btn" target="_blank" rel="noopener"><img src="https://cdn.yes.my/site/wp-content/uploads/2022/01/icon-gmap.png?"> Google Maps</a>
                                                        </div>
                                                    </div>
                                                </div>';
            }
            $html_list  .= '                    <div class="layer-listBoxNoResults is-hidden">
                                                    <h3>No results</h3>
                                                </div>
                                            </div>';
        }


        $html       = ' <!-- Section List STARTS -->
                        <section class="layer-section" id="section-list">
                            <div class="layer-filter filter-container sticky-top" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="layer-filterToggle">
                                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tab-storeLocatorFilter" aria-controls="tab-storeLocatorFilter" aria-expanded="false" alria-label="Filter"><span>' . esc_html__('Filter', 'yes.my') . '</span> <span class="navbar-toggler-icon"></span></button>
                                    <div class="navbar-collapse tab-content collapse justify-content-center" id="tab-storeLocatorFilter">
                                        <div class="container">
                                            <div class="row justify-content-lg-center">
                                                <div class="col-12 col-lg-8">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-3 mb-2 mb-lg-0 mt-3 mt-lg-0">
                                                            <div class="dropdown">
                                                                <button class="btn filter-drop dropdown-toggle" type="button" id="dropdown-states" data-bs-toggle="dropdown" aria-expanded="false">' . esc_html__('All States', 'yes.my') . '</button>
                                                                <ul class="dropdown-menu states" aria-labelledby="dropdown-states" data-filter-type="state">
                                                                    <li><div class="form-check"><label><input class="cardCheckBoxAll" data-filter-type="state" type="checkbox" value="All" checked /> <span>' . esc_html__('All', 'yes.my') . '</span></label></div></li>
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
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Selangor"           data-state-name="Selangor" />           <span>Selangor</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox state" type="checkbox" checked value="Terengganu"         data-state-name="Terengganu" />         <span>Terengganu</span></label></div></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-4">
                                                            <div class="dropdown">
                                                                <button class="btn filter-drop dropdown-toggle" type="button" id="dropdown-months" data-bs-toggle="dropdown" aria-expanded="false">' . esc_html__('All Months', 'yes.my') . '</button>
                                                                <ul class="dropdown-menu month" aria-labelledby="dropdown-month" data-filter-type="month">
                                                                    <li><div class="form-check"><label><input class="cardCheckBoxAll" data-filter-type="month" type="checkbox" value="All" checked /> <span>' . esc_html__('All', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="january"            data-month-name="' . esc_html__('January', 'yes.my') . '" />            <span>' . esc_html__('January', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="february"           data-month-name="' . esc_html__('February', 'yes.my') . '" />           <span>' . esc_html__('February', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="march"              data-month-name="' . esc_html__('March', 'yes.my') . '" />              <span>' . esc_html__('March', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="april"              data-month-name="' . esc_html__('April', 'yes.my') . '" />              <span>' . esc_html__('April', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="may"                data-month-name="' . esc_html__('May', 'yes.my') . '" />                <span>' . esc_html__('May', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="june"               data-month-name="' . esc_html__('June', 'yes.my') . '" />               <span>' . esc_html__('June', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="july"               data-month-name="' . esc_html__('July', 'yes.my') . '" />               <span>' . esc_html__('July', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="august"             data-month-name="' . esc_html__('August', 'yes.my') . '" />             <span>' . esc_html__('August', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="september"          data-month-name="' . esc_html__('September', 'yes.my') . '" />          <span>' . esc_html__('September', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="october"            data-month-name="' . esc_html__('October', 'yes.my') . '" />            <span>' . esc_html__('October', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="november"           data-month-name="' . esc_html__('November', 'yes.my') . '" />           <span>' . esc_html__('November', 'yes.my') . '</span></label></div></li>
                                                                    <li><div class="form-check"><label><input class="cardCheckBox month" type="checkbox" checked value="december"           data-month-name="' . esc_html__('December', 'yes.my') . '" />           <span>' . esc_html__('December', 'yes.my') . '</span></label></div></li>
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
                                        <div class="row" data-aos="fade-up" data-aos-duration="500">
                                            ' . $html_list . '
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
                        <!-- Section List ENDS -->';

        return $html;
    }

    add_shortcode('yessc_roadshow_list', 'generate_roadshow');
}

if (!function_exists('yes_business_slider_callback')) {
    /**
     * Function yes_business_slider_callback()
     * Function to register shortcode to display the slider on the bussiness page
     * 
     * @since    1.2.0
     */
    function yes_business_slider_callback()
    {
        ob_start();
?>

        <style>
            #business-solutions-section {
                padding: 110px 0px 50px;
                width: 100%;
                background-color: #f7f8f9;
                overflow: hidden;
            }

            #business-solutions-section h2 {
                font-family: "Montserrat";
                font-size: 39px;
                font-weight: 600;
                line-height: 47px;
                letter-spacing: -0.02em;
                text-align: left;
                color: #1a1e47;
                max-width: unset; /**500px;/ */
            }

            #business-solutions-section .business-solutions-carousel {
                padding-top: 30px;
            }

            #business-solutions-section .layer-planDevice {
                background-color: #fff;
                margin: 0;
                padding: 40px 0px 0px;
                position: relative;
                border-radius: 15px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.1);
                display: flex;
                -webkit-align-items: stretch;
                align-items: stretch;
                -webkit-justify-content: stretch;
                justify-content: stretch;
                justify-content: stretch;
                height: auto !important;
                overflow: hidden;
            }

            .box-margin {
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            #business-solutions-section .layer-planDevice .box-inner {
                padding: 0 40px;
            }

            #business-solutions-section .layer-planDevice h2 {
                font-family: "Montserrat";
                font-size: 26px;
                font-weight: 600;
                line-height: 32px;
                letter-spacing: -0.011em;
                text-align: left;
                margin-bottom: 10px;
                color: #000;
                height: 90px;
                padding: 0;
            }

            #business-solutions-section .layer-planDevice p {
                font-family: "Open Sans", sans-serif;
                font-size: 16px;
                line-height: 24px;
                font-weight: 400;
                margin: 0 0 10px;
                text-align: left;
                color: #000;
                height: 100px;
                max-width: 240px;
            }

            #business-solutions-section .layer-planDevice p.panel-deviceImg {
                margin: 0 0 30px;
                position: relative;
                text-align: center;
                display: contents;
            }

            #business-solutions-section .layer-planDevice p.panel-deviceImg img {
                max-height: 220px;
                margin: 0px 0 0 auto;
                object-fit: contain;
            }

            #business-solutions-section .layer-planDevice p.panel-btn {
                margin: 0px 0 0px;
                text-align: left;
                height: auto;
            }

            #business-solutions-section .layer-planDevice p.panel-btn a {
                color: #2f3bf5;
                display: inline-block;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                font-family: Montserrat;
                font-size: 14px;
                font-weight: 700;
                line-height: 19px;
                letter-spacing: 0.1em;
                text-align: left;
                text-decoration: none;
            }

            #business-solutions-section .layer-planDevice p.panel-btn a:hover {
                text-decoration: underline;
            }

            #business-solutions-section .business-solutions-carousel .slick-track {
                display: flex !important;
                width: auto;
            }

            #business-solutions-section .business-solutions-carousel .slick-disabled {
                opacity: 0.3 !important;
            }

            #business-solutions-section .business-solutions-carousel .slick-slide {
                margin: 15px 15px;
            }

            #business-solutions-section .business-solutions-carousel .slick-list {
                overflow: visible;
            }

            #business-solutions-section .business-solutions-carousel .slick-dots {
                left: 0;
            }

            #business-solutions-section .business-solutions-carousel .slick-dots li.slick-active button:before {
                opacity: 0.75;
                color: #ff0084;
            }

            #business-solutions-section .business-solutions-carousel .slick-prev {
                left: unset;
                right: 80px;
            }

            #business-solutions-section .business-solutions-carousel .slick-next {
                right: 40px;
            }

            #business-solutions-section .business-solutions-carousel .slick-next,
            .slick-prev {
                top: -4%;
            }

            #business-solutions-section .business-solutions-carousel .prev-arrow svg,
            #business-solutions-section .business-solutions-carousel .next-arrow svg {
                width: 40px !important;
                height: 40px !important;
                color: #2f3bf5;
                background-color: #fff;
                border-radius: 50px;
                border: 1px solid #2f3bf5;
            }

            #business-solutions-section .business-solutions-carousel .prev-arrow svg {
                margin-right: 30px;
            }

            @media only screen and (max-width: 768px) {
                #business-solutions-section .layer-planDevice p.panel-deviceImg img {
                    max-height: 140px !important;
                }

                #business-solutions-section {
                    padding: 50px 0px 50px;
                }

                .business_inner_img {
                    height: 60px !important;
                }


                #business-solutions-section h2 {
                    font-size: 24px;
                    line-height: 28px;
                    text-align: center;
                    padding: 0 20px;
                }

                #business-solutions-section .layer-planDevice h2 {
                    font-size: 20px;
                    font-weight: 700;
                    line-height: 26px;
                    height: auto;
                }

                #business-solutions-section .layer-planDevice p {
                    font-size: 12px;
                    line-height: 18px;
                    height: auto;
                }
            }

            @media only screen and (max-width: 768px) {
                #business-solutions-section .business-solutions-carousel .slick-list {
                    overflow: hidden;
                    padding-right: 20%;
                }

                .slick-dots li button:before {
                    font-size: 15px !important;
                    top: 5px !important;
                }

                .comman_btn,
                .hero_bottom-section .button-submit {
                    max-width: 55%;
                }
            }
        </style>

        <!-- business solutions​ section -->
        <section id="business-solutions-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2><?php echo esc_html__('Other 5G solutions that you might be interested', 'yes.my'); ?></h2>
                    </div>
                </div>

                <div class="business-solutions-carousel">
                    <div class="layer-planDevice">
                        <div class="box-margin">
                            <div class="box-inner box-wireless-first">
                                <h2><?php echo esc_html__('Yes 5G Biz Wireless Broadband', 'yes.my'); ?></h2>
                                <p>
                                    <?php echo esc_html__('With unlimited & Uncapped 5G, this is unbeatably the fastest connectivity to take your business a step ahead.', 'yes.my'); ?>
                                </p>
                                <p class="panel-btn">
                                    <a href="/business/yes-biz-wireless-broadband/" class=""><?php echo esc_html__('Learn More', 'yes.my'); ?><span class="iconify" data-icon="akar-icons:arrow-right"></span></a>
                                </p>
                            </div>
                            <p class="panel-deviceImg">
                                <img decoding="async" src="/wp-content/uploads/2024/01/solutions_section1.png" />
                            </p>
                        </div>
                    </div>

                    <div class="layer-planDevice">
                        <div class="box-margin">
                            <div class="box-inner">
                                <h2><?php echo esc_html__('Yes 5G Mobile Plans', 'yes.my'); ?></h2>
                                <p>
                                    <?php echo esc_html__('Malaysia\'s Most Affordable Unlimited 5G Mobile Plans to stay connected anytime, anywhere.', 'yes.my'); ?>
                                </p>
                                <p class="panel-btn">
                                    <a href="/mobile-plan/" class=""><?php echo esc_html__('Learn More', 'yes.my'); ?><span class="iconify" data-icon="akar-icons:arrow-right"></span></a>
                                </p>
                            </div>
                            <p class="panel-deviceImg">
                                <img decoding="async" src="/wp-content/uploads/2024/01/solutions_section2.png" />
                            </p>
                        </div>
                    </div>

                    <div class="layer-planDevice">
                        <div class="box-margin">
                            <div class="box-inner">
                                <h2><?php echo esc_html__('Yes Dedicated Internet Access', 'yes.my'); ?></h2>
                                <p>
                                    <?php echo esc_html__('Dedicated connectivity supporting point-to-point line and data links.', 'yes.my'); ?>
                                </p>
                                <p class="panel-btn">
                                    <a href="/business/internet-access/yes-dia/" class=""><?php echo esc_html__('Learn More', 'yes.my'); ?><span class="iconify" data-icon="akar-icons:arrow-right"></span></a>
                                </p>
                            </div>
                            <p class="panel-deviceImg">
                                <img decoding="async" src="/wp-content/uploads/2024/01/solutions_section3.png" />
                            </p>
                        </div>
                    </div>

                    <div class="layer-planDevice">
                        <div class="box-margin">
                            <div class="box-inner">
                                <h2><?php echo esc_html__('Yes Dedicated Lease Line', 'yes.my'); ?></h2>
                                <p>
                                    <?php echo esc_html__('Dedicated fixed bandwidth data connection with high network availability.', 'yes.my'); ?>
                                </p>
                                <p class="panel-btn">
                                    <a href="/business/private-network/yes-dedicated-leased-line/" class=""><?php echo esc_html__('Learn More', 'yes.my'); ?><span class="iconify" data-icon="akar-icons:arrow-right"></span></a>
                                </p>
                            </div>
                            <p class="panel-deviceImg">
                                <img decoding="async" src="/wp-content/uploads/2024/01/solutions_section4.png" />
                            </p>
                        </div>
                    </div>

                    <div class="layer-planDevice">
                        <div class="box-margin">
                            <div class="box-inner">
                                <h2><?php echo esc_html__('Yes SIPconnect', 'yes.my'); ?></h2>
                                <p>
                                    <?php echo esc_html__('Voice over IP (VolP) service to handle high call volume with ease.', 'yes.my'); ?>
                                </p>
                                <p class="panel-btn">
                                    <a href="/business/voice-communication/yes-sipconnect/" class=""><?php echo esc_html__('Learn More', 'yes.my'); ?><span class="iconify" data-icon="akar-icons:arrow-right"></span></a>
                                </p>
                            </div>
                            <p class="panel-deviceImg">
                                <img decoding="async" src="/wp-content/uploads/2024/01/solutions_section5.png" />
                            </p>
                        </div>
                    </div>

                    <div class="layer-planDevice">
                        <div class="box-margin">
                            <div class="box-inner">
                                <h2><?php echo esc_html__('Yes 5G Private Network', 'yes.my'); ?></h2>
                                <p>
                                    <?php echo esc_html__('Secure data sharing for your business at all times.', 'yes.my'); ?>
                                </p>
                                <p class="panel-btn">
                                    <a href="/business/private-network/private-5g/" class=""><?php echo esc_html__('Learn More', 'yes.my'); ?><span class="iconify" data-icon="akar-icons:arrow-right"></span></a>
                                </p>
                            </div>
                            <p class="panel-deviceImg">
                                <img decoding="async" src="/wp-content/uploads/2024/01/solutions_section6.png" />
                            </p>
                        </div>
                    </div>

                    <div class="layer-planDevice">
                        <div class="box-margin">
                            <div class="box-inner">
                                <h2><?php echo esc_html__('Yes Virtual Private Network (VPN)', 'yes.my'); ?></h2>
                                <p>
                                    <?php echo esc_html__('Dedicated private network for your business to stay connected wirelessly 24/7.', 'yes.my'); ?>
                                </p>
                                <p class="panel-btn">
                                    <a href="/business/private-network/yes-vpn/" class=""><?php echo esc_html__('Learn More', 'yes.my'); ?><span class="iconify" data-icon="akar-icons:arrow-right"></span></a>
                                </p>
                            </div>
                            <p class="panel-deviceImg">
                                <img decoding="async" src="/wp-content/uploads/2024/01/solutions_section7.png" />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  business solutions​ section End -->
        <script>
            $('.business-solutions-carousel').slick({
                prevArrow: '<a href="#" class="slide-arrow prev-arrow slick-arrow"><span class="iconify slick-prev" data-icon="eva:arrow-ios-back-fill"></span></a>',
                nextArrow: '<a href="#" class="slide-arrow next-arrow slick-arrow"><span class="iconify slick-next" data-icon="eva:arrow-ios-forward-fill"></span></a>',
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 3000,
                dots: false,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        infinite: true,
                        dots: true,
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        infinite: true,
                        dots: true,
                        slidesToScroll: 1
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        infinite: true,
                        dots: true,
                        arrows: false,
                    }
                }]
            });
        </script>

<?php
        return ob_get_clean();
    }
    add_shortcode('yes_business_slider', 'yes_business_slider_callback');
}

// iphone comparison plan section
function fetch_and_display_google_sheet_data($atts)
{
    $start_time = microtime(true); // Start timing

    $cache_file = get_template_directory() . '/cache/google_sheet_data.csv';
    $csv_url = "https://docs.google.com/spreadsheets/d/1TjHGsz0hrWZNMQINsAjwGEyW2OJhygggO_1zFjQylAY/export?format=csv&gid=1137743825";

    // Check if the cache file exists or if it needs to be refreshed
    if (!file_exists($cache_file) || filemtime($cache_file) < time() - 86400) { // Cache for 24 hours
        $fetch_start_time = microtime(true); // Start fetching time
        // Fetch CSV content from URL
        $csv_data = file_get_contents($csv_url);
        $fetch_time = microtime(true) - $fetch_start_time;

        if ($csv_data === false) {
            return 'Error fetching Google Sheets data.';
        }

        // Save to cache
        if (!file_exists(dirname($cache_file))) {
            mkdir(dirname($cache_file), 0755, true); // Create cache directory if it doesn't exist
        }
        file_put_contents($cache_file, $csv_data);
    } else {
        // Read from cache
        $csv_data = file_get_contents($cache_file);
    }

    // Parse CSV data into an array
    $parse_start_time = microtime(true); // Start parsing time
    $rows = array_map('str_getcsv', explode("\n", $csv_data));
    $headers = array_shift($rows);
    $parse_time = microtime(true) - $parse_start_time;

    // Initialize arrays for dropdown values and telco data
    $devices = [];
    $contracts = [];
    $plan_ranges = [];
    $telco_data = [];

    // Populate dropdown options from rows
    $populate_start_time = microtime(true); // Start populating time
    foreach ($rows as $row) {
        if (count($row) < 13) continue; // Ensure row has enough columns
        $device = $row[0];
        $months = $row[8];
        $plan_range = $row[9];
        $telco = $row[1];

        $telco_data[$telco][] = [
            'device'         => $device,
            'plan'           => $row[2],
            'device_price'   => $row[4],
            'plan_price'     => $row[5],
            'total_price'    => $row[6],
            'total_cost'     => $row[7],
            'months'         => $months,
            'plan_range'     => $plan_range,
            'summary_k'      => $row[10],
            'summary_l'      => $row[11],
            'summary_m'      => $row[12]
        ];

        if (!in_array($device, $devices)) {
            $devices[] = $device;
        }
        if (!in_array($months, $contracts)) {
            $contracts[] = $months;
        }
        if (!in_array($plan_range, $plan_ranges)) {
            $plan_ranges[] = $plan_range;
        }
    }
    $populate_time = microtime(true) - $populate_start_time;
    sort($devices);
    // sort($contracts);
    // sort($plan_ranges);

    // Get selected values, default to the first item if not set
    $selected_device = isset($_GET['device']) ? $_GET['device'] : (count($devices) > 0 ? $devices[0] : '');
    $selected_contract = isset($_GET['contract']) ? $_GET['contract'] : (count($contracts) > 0 ? $contracts[0] : '');
    $selected_plan_range = isset($_GET['plan_range']) ? $_GET['plan_range'] : (count($plan_ranges) > 0 ? $plan_ranges[0] : '');

    // HTML for dropdown form   
    $output = ' <style type="text/css">
                    .rangedisable {
                    background-color: transparent !important;
                        opacity: 0.2 !important;
                    }
                    .form-select:disabled{
                    background-color: transparent !important;
                    }
                    .prepaid-card .prepaid-card-detail .prepaid-card-list .n-Avail{
                        margin: 34% 0 !important;
                    }
                    .prepaid-card{
                        padding-bottom: 30px !important;
                    }
                </style>
                <link rel="stylesheet" id="iphone-comparison-css" href="/wp-content/themes/yes-twentytwentyone/assets/css/iphone-comparison_new1.css" type="text/css" media="all" />
                <form method="GET" id="filterForm">';

    $output .= '<section class="plan-section">';
    $output .= '<div class="container">';

    $output .= '<div class="row mb-4">';
    $output .= '<div class="col-12 col-lg-12">';
    $output .= '<h2>' . esc_html__("Are you overpaying for the iPhone 16?", "comparison-yes.my") . '</h2>';
    $output .= '<p>' . esc_html__("Compare the Total Cost of Ownership", "comparison-yes.my") . '</p>';

    $output .= '</div>';
    $output .= '</div>';


    $output .= '<div class="row mb-4">';
    $output .= '<div class="col-xl-12 col-lg-12 col-md-12">';

    $output .= '<div class="plan-iner-sec">';

    $output .= '<div class="row text-center top-text-box">';
    $output .= '<div class="col-12 col-md-4 col-lg-4 mb-md-0 mb-0  pr-0">';

    $output .= '<div class="row content mb-auto">';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '<div class="col-md-8">';
    $output .= '<h3><span>1</span> ' . esc_html__("Select iPhone", "comparison-yes.my") . '</h3>';
    $output .= '</div>';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '</div>';

    $output .= '</div>';

    $output .= '<div class="col-12 col-md-4 col-lg-4 mb-md-0 mb-0 pl-0 pr-0">';

    $output .= '<div class="row content mb-auto">';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '<div class="col-md-8">';
    $output .= '<h3><span>2</span> ' . esc_html__("Select contract period", "comparison-yes.my") . '</h3>';
    $output .= '</div>';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '</div>';

    $output .= '</div>';

    $output .= '<div class="col-12 col-md-4 col-lg-4 mb-md-0 mb-0 pl-0 pr-0">';

    $output .= '<div class="row content mb-auto">';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '<div class="col-md-8 pl-0">';
    $output .= '<h3><span>3</span> ' . esc_html__("Select plan range", "comparison-yes.my") . '</h3>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '</div>';

    $output .= '</div>';

    // dropdown section
    $output .= '<div class="box-container">';
    $output .= '<div class="box">';
    $output .= '<ul class="by_default row">';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '<div class="col-md-8 pl-0 pr-0">';
    $output .= '<li>';
    $output .= '<div class="sharing">';
    $output .= '<div class="share-icon"><img src="/wp-content/uploads/2024/09/icon-mobile.png" alt="..."></div>';
    $output .= '<p>';
    $output .= '<select name="device" id="device" class="form-select" onchange="filterData()">';
    // $output .= '<option value="">-- Select Device --</option>';
    foreach ($devices as $device) {
        $selected = ($selected_device === $device) ? 'selected' : '';
        $output .= '<option value="' . htmlspecialchars($device) . '" ' . $selected . '>' . htmlspecialchars($device) . '</option>';
    }
    $output .= '</select>';
    $output .= '</p>';
    $output .= '</li>';
    $output .= '</div>';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '</ul>';
    $output .= '</div>';

    $output .= '<div class="box">';
    $output .= '<ul class="by_default row">';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '<div class="col-md-8 pl-0 pr-0">';
    $output .= '<li>';
    $output .= '<div class="sharing">';
    $output .= '<div class="share-icon"><img src="/wp-content/uploads/2024/09/icon-clock.png" alt="..."></div>';
    $output .= '<p>';
    //$output .= '<label for="contract">Select Contract (Months): </label>';
    $output .= '<select name="contract" id="contract" class="form-select" onchange="filterData()">';
    // $output .= '<option value="">-- Select Contract --</option>';
    foreach ($contracts as $contract) {
        $selected = ($selected_contract === $contract) ? 'selected' : '';

        // Check if the contract is "No Contract"
        if ($contract === 'No Contract' || $contract === 'no contract') {
            $output .= '<option value="' . htmlspecialchars($contract) . '" ' . $selected . '>' . htmlspecialchars($contract) . '</option>';
        } else {
            $output .= '<option value="' . htmlspecialchars($contract) . '" ' . $selected . '>' . htmlspecialchars($contract) . ' Months</option>';
        }
    }
    $output .= '</select>';
    $output .= '</p>';
    $output .= '</li>';
    $output .= '</div>';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '</ul>';
    $output .= '</div>';

    $output .= '<div class="box">';
    $output .= '<ul class="by_default row">';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '<div class="col-md-8 pl-0 pr-0">';
    $output .= '<li>';
    $output .= '<div class="sharing">';
    $output .= '<div class="share-icon"><img src="/wp-content/uploads/2024/09/icon-simcard.png" alt="..."></div>';
    $output .= '<p>';
    // $output .= '<label for="plan_range">Select Plan Range: </label>';
    $output .= '<select name="plan_range" id="plan_range" class="form-select" onchange="filterData()">';
    // $output .= '<option value="">-- Select Plan Range --</option>';
    foreach ($plan_ranges as $plan_range) {
        $selected = ($selected_plan_range === $plan_range) ? 'selected' : '';
        $output .= '<option value="' . htmlspecialchars($plan_range) . '" ' . $selected . '>' . htmlspecialchars($plan_range) . '</option>';
    }
    $output .= '</select>';
    $output .= '</p>';
    $output .= '</li>';
    $output .= '</div>';
    $output .= '<div class="col-md-2">';
    $output .= '</div>';
    $output .= '</ul>';
    $output .= '</div>';

    $output .= '</div>';
    // dropdown section end

    $output .= '</div>';

    // Hide submit button
    $output .= '<button type="submit" style="display: none;">Filter</button>';
    $output .= '</form>';

    // Add loading overlay div
    $output .= '<div id="loading-overlay"></div>';

    // Add loading SVG
    $output .= '<div style="display: none; text-align: center;">';
    $output .= '<img src="https://cdn.yes.my/site/wp-content/uploads/2024/01/img-loading2.svg" alt="Loading..." />';
    $output .= '</div>';

    // Initial load of cards
    $output .= '<div class="row pricingW flex-nowrap flex-xl-wrap justify-content-lg-center plan-details-sec d-none" id="filterResults">' . generateFilteredResults($telco_data, $selected_device, $selected_contract, $selected_plan_range) . '</div>';

    $output .= '<div class="row mt-0 mt-md-5">';
    $output .= '<div class="col-xl-12 col-lg-12 col-md-12 text-center" style="position: relative;">';
    $output .= '<a href="/iphone/" target="_blank" class="brn pink-btn">' . esc_html__("Yes, Take me there!", "comparison-yes.my") . '</a>';
    $output .= '<div class="share-icon-sec">';
    $output .= '<a href="javascript:void(0)" id="share-button" class="share-btn">' . esc_html__("Don’t keep this a secret, share now!", "comparison-yes.my") . ' <img src="/wp-content/uploads/2024/09/share-icon.png" alt="..." /></a>';

    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';

    $output .= '</div>';
    $output .= '</div>';

    $output .= '</div>';
    $output .= '</section>';
    $siteURL = "https://www.yes.my/iphone16-comparison/";
    $output .= '    <div id="share-modal" class="share-modal" style="display:none;">
                        <div class="share-modal-content">
                            <!-- Cross button -->
                            <span class="close" id="close-modal">&times;</span>
                            
                            <h2>Share This</h2>
                            
                            <!-- Social media share icons -->
                            <div class="share-options">
                                <!-- Embed icon -->
                                <!-- <a href="https://www.facebook.com/sharer/sharer.php?quote=' . urlencode('Compare the best iPhone 16 prices before you buy!') . '%0A' . urlencode($siteURL) . '" target="_blank">
                                    <img src="https://www.yes.my/wp-content/uploads/2024/09/facebook-icon.png" alt="Share on Facebook" />
                                    <span>Facebook</span>
                                </a>-->
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.yes.my/iphone16-comparison/" target="_blank" class="fb-comparison">
                                    <img src="https://www.yes.my/wp-content/uploads/2024/09/facebook-icon.png" alt="Share on Facebook">
                                    <span>Facebook</span>
                                </a>
                                <a href="https://wa.me/?text=' . urlencode('Compare the best iPhone 16 prices before you buy!') . '%0A' . urlencode($siteURL) . '" target="_blank" class="wa-comparison">
                                    <img src="/wp-content/uploads/2024/09/whatsapp-icon.png" alt="Share on WhatsApp" />
                                    <span>WhatsApp</span>
                                </a>
                                <a href="https://x.com/intent/tweet?text=' . urlencode('Compare the best iPhone 16 prices before you buy!') . '%0A' . urlencode($siteURL) . '" target="_blank" class="x-comparison">
                                    <img src="https://www.yes.my/wp-content/uploads/2024/09/x-icon.png" alt="Share on X" />
                                    <span>X</span>
                                </a>
                                <a href="https://t.me/share/url?text=' . urlencode('Compare the best iPhone 16 prices before you buy!') . '%0A' . urlencode($siteURL) . '" target="_blank" class="t-comparison">
                                    <img src="https://www.yes.my/wp-content/uploads/2024/09/telegram-icon.png" alt="Share on Telegram" />
                                    <span>Telegram</span>
                                </a>
                            </div>
                            
                            <!-- YouTube-style copy link input -->
                            <div class="share-link">
                                <input type="text" id="share-url" value="' . $siteURL . '" readonly />
                                <button id="copy-link">Copy</button>
                            </div>

                            <!-- Embed section (initially hidden) -->
                            <div id="embed-section" class="embed-section" style="">
                                <h2>Embed Code</h2>
                                <div>
                                    <textarea id="embed-code"><iframe src=\'https://www.yes.my/iframe-iphone-comparison/?v=126\' width=\'100%\' height=\'400\' frameborder=\'0\'></iframe></textarea>
                                    <button id="copy-embed">Copy</button>
                                </div>
                            </div>
                        </div>
                    </div>';



    // JavaScript for AJAX
    $output .= '<script>
            $(document).ready(function () {
                // On page load, trigger the filterData function
                filterData();
            });
            function showPlanDetails(telco_id, plan_index) {
                // Hide all plans and costs
                document.querySelectorAll(`[id^="${telco_id}-plan"], [id^="${telco_id}-cost"], [id^="${telco_id}-summary"]`).forEach(function(el) {
                    el.style.display = "none";
                    el.classList.remove("iphone_active_plan", "iphone_active_cost", "iphone_active_summary");
                });

                // Show selected plan and cost
                if (plan_index !== "") {
                    document.getElementById(`${telco_id}-cost-${plan_index}`).style.display = "block";
                    document.getElementById(`${telco_id}-cost-${plan_index}`).classList.add("iphone_active_cost");

                    document.getElementById(`${telco_id}-plan-${plan_index}`).style.display = "block";
                    document.getElementById(`${telco_id}-plan-${plan_index}`).classList.add("iphone_active_plan");
                    

                    const summaryElement = document.getElementById(`${telco_id}-summary-${plan_index}`);
                    if (summaryElement) {
                        summaryElement.style.display = "block";
                        summaryElement.classList.add("iphone_active_summary");
                    }
                    resetPrice();
                }
            }

            function resetPrice(){
                var yesPrice = $(".iphone_active_cost:first").data("price");
                if (typeof yesPrice === "string") {
                    yesPrice = yesPrice.replace(/,/g, "");
                }
                
                $(".iphone_active_cost").each(function() {
                    // This refers to the current element in the loop
                    var el = $(this);
                    var total_price = el.data("price");
                    if (typeof total_price === "string") {
                        total_price = total_price.replace(/,/g, "");
                    }
                    var priceDifference = (total_price - yesPrice);
                    if( priceDifference > 0 ) {
                        el.parent().find(".iphone_active_summary").html("<p>Save up to RM"+priceDifference.toLocaleString()+" with Yes 5G<p>");    
                    }else{
                        el.parent().find(".iphone_active_summary").html("");
                    }
                });
            }

            function filterData() {
                const device = document.getElementById("device").value;
                const contract = document.getElementById("contract").value;
                // const planRange = document.getElementById("plan_range").value;

                    const planRangeElement = document.getElementById("plan_range");
                    if (contract === "No Contract") {
                        // Loop through options to remove selected attribute from all options
                        for (let option of planRangeElement.options) {
                            option.selected = false; // Remove selected attribute from all options
                        }
                        // Set the last option ("> RM 150") as selected and disable it
                        planRangeElement.disabled = true;
                        const planRangeLiElement = $("#plan_range").parents("li");
                        planRangeLiElement.addClass("rangedisable");
                        
                        planRangeElement.options[2].selected = true; // Assuming its the third option
                        planRangeElement.options[0].disabled = false;
                        planRangeElement.options[1].disabled = false; // Disable the last option
                    } else {
                        // Enable the last option if contract is not "No Contract"
                        planRangeElement.disabled = false;
                        const planRangeLiElement = $("#plan_range").parents("li");
                        planRangeLiElement.removeClass("rangedisable");

                        // planRangeElement.options[2].selected = false;
                        planRangeElement.options[0].disabled = false;
                        planRangeElement.options[1].disabled = false;
                        planRangeElement.options[2].disabled = false;
                    }

                    const planRange = planRangeElement.value;
                
                // Show loading SVG
                toggleOverlay(true);
                // document.getElementById("loading").style.display = "block";

                // AJAX call to refresh the filtered data
                const xhr = new XMLHttpRequest();
                xhr.open("GET", "' . 'https://www.yes.my/wp-content/themes/yes-twentytwentyone/includes/iphone_compare.php' . '?action=fetch_filtered_data&device=" + encodeURIComponent(device) + "&contract=" + encodeURIComponent(contract) + "&plan_range=" + encodeURIComponent(planRange), true);
                xhr.onload = function() {
                    // Hide loading SVG
                    // document.getElementById("loading").style.display = "none";
                    document.getElementById("loading-overlay").style.display = "none";
                    toggleOverlay(false);

                    if (xhr.status === 200) {
                        document.getElementById("filterResults").innerHTML = xhr.responseText; // Replace results
                        resetPrice()
                        const pricingCards = document.querySelectorAll(".pricingW.flex-nowrap.flex-xl-wrap.justify-content-lg-center.plan-details-sec.d-none");
                            pricingCards.forEach(card => {
                                card.classList.remove("d-none"); // Remove the hide-card class
                            });
                    } else {
                        console.error("Error fetching data");
                    }
                };
                xhr.send();
            }
        document.getElementById("share-button").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("share-modal").style.display = "flex";
        });

        document.getElementById("close-modal").addEventListener("click", function() {
            document.getElementById("share-modal").style.display = "none";
        });

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target == document.getElementById("share-modal")) {
                document.getElementById("share-modal").style.display = "none";
            }
        };

        // Copy URL to clipboard
        document.getElementById("copy-link").addEventListener("click", function() {
            var copyText = document.getElementById("share-url");
            copyText.select();
            document.execCommand("copy");
            alert("Link copied to clipboard!");
        });

        // Handle embed icon click


        // Copy embed code to clipboard
        document.getElementById("copy-embed").addEventListener("click", function() {
            var embedCode = document.getElementById("embed-code");
            embedCode.select();
            document.execCommand("copy");
            alert("Embed code copied to clipboard!");
        });

        // Hide embed section and show share-link div when modal is closed
        document.getElementById("close-modal").addEventListener("click", function() {
            document.getElementById("embed-section").style.display = "none"; // Hide embed section
            document.querySelector(".share-link").style.display = "block"; // Show share-link div
        });
    </script>';

    $output .= '<style>
                    /* Position loader absolutely in the center */
                    .share-modal {
                        position: fixed;
                        z-index: 9999;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0,0,0,0.5);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .share-modal-content {
                        background-color: white;
                        padding: 20px;
                        border-radius: 10px;
                        text-align: center;
                    }

                    .share-options a {
                        display: block;
                        margin: 10px 0;
                        text-decoration: none;
                        color: #0073aa;
                    }

                    .share-options a:hover {
                        text-decoration: underline;
                    }

                    .close {
                        position: absolute;
                        top: 10px;
                        right: 20px;
                        font-size: 24px;
                        cursor: pointer;
                    }

                    #copy-link {
                        background-color: #0073aa;
                        color: white;
                        padding: 10px 20px;
                        border: none;
                        cursor: pointer;
                        border-radius: 5px;
                    }

                    #copy-link:hover {
                        background-color: #005580;
                    }

                    @media (max-width:768px){
                            .share-icon-sec{
                            margin: 10px auto 0 !important;
                            }
                            .plan-section{
                            padding:0 !important;
                            }
                            .plan-details-sec{
                            margin:20px 0 !important;
                            overflow: auto;
                            } 
                            .plan-section h2{
                            line-height:40px !important;
                            margin:10px 0 0 !important;
                            } 
                            .container, .container-sm {
                            max-width: 100% !important;
                        }
                    }
                </style>';

    return $output;
}

add_shortcode('iphone_proof_campaign_camparison', 'fetch_and_display_google_sheet_data');

// Handle AJAX request
add_action('wp_ajax_fetch_filtered_data', 'handle_filtered_data');
add_action('wp_ajax_nopriv_fetch_filtered_data', 'handle_filtered_data');


add_action('rest_api_init', function () {
    register_rest_route('iphone-comparison/v1', '/data', array(
        'methods' => 'GET',
        'callback' => 'iphone_comparison_data',
    ));
});

function iphone_comparison_data()
{
    die('sadf');
}

function handle_filtered_data()
{
    die('Testing Speed...');
    // Set up cache file path
    $cache_file = get_template_directory() . '/cache/google_sheet_data.csv';

    // Check if cache file exists
    if (!file_exists($cache_file)) {
        echo 'Error: Cache file not found.';
        wp_die();
    }

    // Read the CSV file
    die('Testing Speed...');
    $csv_data = file_get_contents($cache_file);

    if ($csv_data === false) {
        echo 'Error fetching cached data.';
        wp_die();
    }

    // Process CSV data
    $rows = array_map('str_getcsv', explode("\n", $csv_data));
    $headers = array_shift($rows);

    // Initialize data and filters
    $telco_data = [];
    $selected_device = isset($_GET['device']) ? $_GET['device'] : '';
    $selected_contract = isset($_GET['contract']) ? $_GET['contract'] : '';
    $selected_plan_range = isset($_GET['plan_range']) ? $_GET['plan_range'] : '';

    // Process each row
    foreach ($rows as $row) {
        if (count($row) < 13) continue; // Ensure row has enough columns

        // Process row data
        $device = $row[0];
        $months = $row[8];
        $plan_range = $row[9];
        $telco = $row[1];

        // Add to $telco_data array
        $telco_data[$telco][] = [
            'device'         => $device,
            'plan'           => $row[2],
            'device_price'   => $row[4],
            'plan_price'     => $row[5],
            'total_price'    => $row[6],
            'total_cost'     => $row[7],
            'months'         => $months,
            'plan_range'     => $plan_range,
            'summary_k'      => $row[10],
            'summary_l'      => $row[11],
            'summary_m'      => $row[12]
        ];
    }

    // Generate and display filtered results
    echo generateFilteredResults($telco_data, $selected_device, $selected_contract, $selected_plan_range);

    wp_die(); // Required for AJAX requests in WordPress
}

function generateFilteredResults($telco_data, $device, $contract, $plan_range)
{
    $output = '';
    $available_telcos = ['Yes 5G', 'Telco CD', 'Telco M', 'Telco U'];

    $output .= '
        <style>
            .section-head.yes_5g { background-color: #ff0084 !important; }
            .section-head.telco_cd { background-color: #1360E5 !important; }
            .section-head.telco_m { background-color: #43C706 !important; }
            .section-head.telco_u { background-color: #FF7900 !important; }
        </style>
    ';

    foreach ($available_telcos as $telco) {
        $telco_id = strtolower(str_replace(' ', '_', $telco));
        $filtered_plans = filterTelcoData($telco_data, $device, $contract, $plan_range);

        if (!empty($filtered_plans[$telco])) {
            $plans = $filtered_plans[$telco];
            $output .= '<div class="col-lg-3 col-sm-3 col-md-3 col-xl-3 btn-prepaid mb-3 ' . htmlspecialchars($telco) . '">
                            <div class="prepaid-card">
                                <div class="prepaid-card-detail">
                                    <div class="prepaid-card-detail-cont yes-details">
                                        <div class="section-head select-w ' . htmlspecialchars($telco_id) . '">
                                            <h5>' . htmlspecialchars($telco) . '</h5>
                                            <select class="form-select" onchange="showPlanDetails(\'' . $telco_id . '\', this.value)">';

            foreach ($plans as $index => $plan_data) {
                $output .= '                    <option value="' . $index . '">' . htmlspecialchars($plan_data['plan']) . '</option>';
            }

            $output .= '                    </select>
                                        </div>';

            foreach ($plans as $index => $plan_data) {
                $planDisplay = ($index === 0) ? 'block' : 'none';
                $output .= '            <div class="prepaid-card-list" id="' . $telco_id . '-plan-' . $index . '" style="display: ' . $planDisplay . ';">
                                            <ul>
                                                <li><span class="l-text ' . htmlspecialchars($telco) . '">Plan</span>
                                                    <span class="r-price"><b>RM</b> ' . htmlspecialchars($plan_data['plan_price']) . ' <b>/ mth</b></span>
                                                </li>
                                                <li><span class="l-text ' . htmlspecialchars($telco) . '">Device</span>
                                                    <span class="r-price"><b>RM</b> ' . htmlspecialchars($plan_data['device_price']) . ' <b>/ mth</b></span>
                                                </li>
                                                <li><span class="l-text ' . htmlspecialchars($telco) . '">Total</span>
                                                    <span class="r-price"><b>RM</b> ' . htmlspecialchars($plan_data['total_price']) . ' <b>/ mth</b></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div data-price="' . htmlspecialchars($plan_data['total_cost']) . '" class="total-price-sec ' . ($index === 0 ? 'iphone_active_cost' : '') . '" id="' . $telco_id . '-cost-' . $index . '" style="display: ' . $planDisplay . ';">
                                            <h2 class="l-text ' . htmlspecialchars($telco) . '"><b>RM</b>&nbsp;' . htmlspecialchars($plan_data['total_cost']) . '</h2>
                                            <p class="l-text ' . htmlspecialchars($telco) . '">Total Cost of Ownership</p>
                                        </div>';

                // Summary information
                $summary = trim(implode(' ', array_filter([$plan_data['summary_k'], $plan_data['summary_l'], $plan_data['summary_m']])));

                if ($summary) {
                    $output .= '<div class="summary-info bottom-sec-t ' . ($index === 0 ? 'iphone_active_summary' : '') . '" id="' . $telco_id . '-summary-' . $index . '" style="display: ' . $planDisplay . ';">
                                    <p>' . htmlspecialchars($summary) . '</p>
                                </div>';
                }
            }

            $output .= '</div></div></div></div>';
        } else {
            $output .= renderNoPlans($telco_id, $telco);
        }
    }

    return $output;
}

function renderNoPlans($telco_id, $telco)
{
    return '
    <div class="col-lg-3 col-sm-3 col-md-3 col-xl-3 btn-prepaid mb-3 ' . htmlspecialchars($telco) . '">
        <div class="prepaid-card">
            <div class="prepaid-card-detail">
                <div class="prepaid-card-detail-cont yes-details">
                    <div class="section-head ' . htmlspecialchars($telco_id) . '">
                        <h5>' . htmlspecialchars($telco) . '</h5>
                        <h6>-</h6>
                    </div>
                    <div class="prepaid-card-list">
                        <div class="n-Avail">
                            <h2>No Available Plan</h2>
                            <p>Try selecting a different range for this telco.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}

function filterTelcoData($telco_data, $device, $contract, $plan_range)
{
    $filtered_data = [];
    foreach ($telco_data as $telco => $plans) {
        foreach ($plans as $plan_data) {
            if (
                (empty($device) || $device === $plan_data['device']) &&
                (empty($contract) || $contract === $plan_data['months']) &&
                (empty($plan_range) || $plan_range === $plan_data['plan_range'])
            ) {
                $filtered_data[$telco][] = $plan_data;
            }
        }
    }
    return $filtered_data;
}

add_action('wp', 'set_header_for_iframe');

function set_header_for_iframe()
{
    if (is_page(53159)) {
        header("Content-Security-Policy: frame-ancestors *");
    }
}


/*Coverage upgrade page code*/

if (!function_exists('coverage_expansion_shortcode')) {
    function coverage_expansion_shortcode()
{
    wp_enqueue_style('select2-css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css');
    wp_enqueue_script('select2-js', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js', array('jquery'), null, true);
    ob_start(); ?>
    <section id="coverage-area">
    <h2><?php _e('Coverage upgrade locations', 'coverage-yes.my'); ?></h2>
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-auto">
                    <div class="box">
                        <ul class="by_default">
                            <li>
                                <div class="sharing">
                                    <div class="share-icon">
                                        <img src="/wp-content/uploads/2024/11/location-icon.svg" alt="...">
                                    </div>
                                    <p>
                                        <select id="state" name="state" class="form-select">
                                            <!-- Populated via JavaScript -->
                                        </select>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-7 m-auto">
                    <div id="coverage-results" class="result-section">
                        <!-- Results populated dynamically here -->
                    </div>
 
                    <!-- "Show More" Arrow Icon -->
                    <a id="show-more" class="moreless-button" href="javascript:void(0);" style="display: none;">
                        <img src="/wp-content/uploads/2024/11/arrow-down-icon.svg" alt="down arrow" class="arrow-down">
                        <img src="/wp-content/uploads/2024/11/arrow-up-icon.svg" alt="up arrow" class="arrow-up" style="display: none;">
                    </a>
                    <p style="margin-top: 35px; font-family: Open Sans; font-size: 18px; font-style: italic; font-weight: 400; line-height: 24px; text-align: center;">
                    <?php _e('NOTE: Upgrade times and dates are tentative and may be subject to change.', 'coverage-yes.my'); ?></p>

                </div>
            </div>
        </div>
 
        <!-- Loader overlay -->
        <div id="loader-overlay" style="display: none;">
            <img src="https://cdn.yes.my/site/wp-content/uploads/2024/01/img-loading2.svg" alt="loading" class="loader">
        </div>
    </section>
 
    <script>
        jQuery(document).ready(function($) {
            function toggleOverlay(show) {
                $('#loader-overlay').toggle(show);
            }
            function loadStatesAndSelectFirst() {
                toggleOverlay(true);
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "<?php echo get_template_directory_uri(); ?>/includes/campaigns/load_coverage_data.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onload = function() {
                    toggleOverlay(false);
                    if (xhr.status === 200) {
                        var states = JSON.parse(xhr.responseText);
                        $.each(states, function(index, state) {
                            $('#state').append('<option value="' + state + '">' + state + '</option>');
                        });
                        $('#state').val($('#state option:first').val()).trigger('change');
                    } else {
                        alert("Error loading states.");
                    }
                };
                xhr.send("action=load_coverage_data&load_states=true");
            }
 
            // Initialize Select2
            $('#state').select2({
                width: '100%'
            });

            loadStatesAndSelectFirst();
 
            // Automatically load results when a state is selected
            $('#state').on('change', function() {
                var state = $(this).val();
                if (state) {
                    toggleOverlay(true);
 
                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "<?php echo get_template_directory_uri(); ?>/includes/campaigns/load_coverage_data.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onload = function() {
                        toggleOverlay(false);
                        if (xhr.status === 200) {
                            $('#coverage-results').html(xhr.responseText);
                            var allCards = $('#coverage-results .result-inner-section');
                            var totalCards = allCards.length;

                            if (totalCards > 0) {
                                allCards.first().show(); // Make sure the first card is visible
                            }
 
                            if (totalCards > 2) {
                                allCards.slice(2).hide();
                                $('#show-more').show();
                            } else {
                                $('#show-more').hide();
                            }
                        } else {
                            alert("Error loading coverage data.");
                        }
                    };
                    xhr.send("action=load_coverage_data&selected_state=" + encodeURIComponent(state));
                } else {
                    $('#coverage-results').empty();
                    $('#show-more').hide(); 
                }
            });
 
            $('#show-more').on('click', function() {
                var arrowDown = $('.arrow-down');
                var arrowUp = $('.arrow-up');
                var allCards = $('#coverage-results .result-inner-section');
                var totalCards = allCards.length;
 
                // If "Show More" is clicked, show all cards and switch to "Show Less"
                if (arrowDown.is(':visible')) {
                    allCards.show(); // Show all remaining cards
                    arrowDown.hide();
                    arrowUp.show();
                } else {
                    // If "Show Less" is clicked, hide all cards except the first 2
                    allCards.slice(2).hide();
                    arrowDown.show();
                    arrowUp.hide();
                }
            });
        });
    </script>
 
 <style>

        .select2-container--default .select2-selection--single {
            background-color: transparent;
            border: 0px solid #aaa !important;
            border-radius: 0 !important;
        }
        .result-inner-section .result-right-sec ul li p{
            background-color: transparent;
        }

        /* Loader styling */
        #loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        #loader-overlay img{
            width: 150px;

        }
        
 
        /* Styling for "Show More" button */
        .moreless-button {
            display: inline;
            text-align: center;
            margin-top: 20px;
            cursor: pointer;
        }
 
        .arrow-down,
        .arrow-up {
            width: 20px;
            height: 20px;
        }
 
        #coverage-results .result-inner-section:gt(1) {
            display: none;
            /* Hide all cards except the first 2 initially */
        }
    </style>
 
 
<?php
    return ob_get_clean();
}
add_shortcode('coverage_expansion', 'coverage_expansion_shortcode');
     
     
function load_coverage_data() {
    // $URL="https://docs.google.com/spreadsheets/d/e/2PACX-1vR1gMVF9iNNiYJPY0n2LzQsmV2FjslUFyHb_EcT1LikYgo-N6nwH12CWpR6MC3n9Q/pub?gid=1597758861&single=true&output=csv";
    $URL="https://docs.google.com/spreadsheets/d/1MQ4OuDuqL-5975zHiZs1m9rEfLloiAm-r4OcPon28Ts/pub?gid=0&single=true&output=csv";
    $cache_file = get_template_directory() . '/cache/coverage_data_cache.csv'; // Path to cache file
    $csvUrl = defined('RAN_COVERAGE_NETWORK') ? RAN_COVERAGE_NETWORK : $URL;

    if (file_exists($cache_file) && filemtime($cache_file) > time() - 86400) {
        // Load data from cached CSV file if it's still valid
        $csvData = array_map('str_getcsv', file($cache_file, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES));
        $header = array_shift($csvData); // Remove the header row
        $groupedData = [];

        foreach ($csvData as $row) {
            if (count($row) == count($header)) {
                $dataRow = array_combine($header, $row);
                $state = trim($dataRow['State']);
                $title = $dataRow['Upcoming Coverage Expansion Area Title'];
                $states[$state] = true;
                $groupedData[$state][$title][] = $dataRow;
            }
        }
    } else {
        // Fetch data from Google Sheets and parse it
        $csvData = file_get_contents($csvUrl);

        $rows = array_map('str_getcsv', explode("\n", $csvData));
        $header = array_shift($rows);
        $groupedData = [];

        $csvContent = [];
        $csvContent[] = implode(',', array_map('addslashes', $header)); // Add header to CSV content, escape special characters

        foreach ($rows as $row) {
            if (count($row) == count($header)) {
                $dataRow = array_combine($header, array_map('addslashes', $row)); // Escape special characters
                $state = trim($dataRow['State']);
                $title = $dataRow['Upcoming Coverage Expansion Area Title'];
                $states[$state] = true;
                $groupedData[$state][$title][] = $dataRow;

                // Add row to CSV content
                $csvContent[] = implode(',', array_map('addslashes', $row)); // Escape special characters
            }
        }

        // Save the fresh data to cache as a CSV file
        file_put_contents($cache_file, implode("\n", $csvContent));
    }

    if (isset($_POST['load_states'])) {
        echo json_encode(array_keys($groupedData));
    } elseif (isset($_POST['selected_state']) && $_POST['selected_state']) {
        $selectedState = sanitize_text_field($_POST['selected_state']);
        $site_url = "https://yesmy-dev.azurewebsites.net";
        if (isset($groupedData[$selectedState])) {
            ob_start();
            foreach ($groupedData[$selectedState] as $title => $areas) {
                echo '<div class="result-inner-section">';
                echo '<div class="result-left-sec"><h3>' . esc_html(stripslashes($title)) . '</h3></div>';
                echo '<div class="result-right-sec"><ul>';

                foreach ($areas as $area) {
                    echo '<li>';
                    echo '<a target="_blank" href="' . $site_url.'/coverage/?lat=' . urlencode($area['Latitude']) . '&lon=' . urlencode($area['Longitude']) . '" class="coverage-link">
                    <span class="icon-left">
                        <img src="/wp-content/uploads/2024/11/location-icon-b.svg" alt="...">
                    </span>' . htmlspecialchars($area['Upcoming Coverage Expansion Area']) . '
                  </a>';
                    echo '<label>' . esc_html(stripslashes($area['Target Completion Month'])) . '</label>';
                    echo '</li>';
                }

                echo '</ul></div></div>';
            }
            echo ob_get_clean();
        } else {
            echo "<p>No data available for the selected state.</p>";
        }
    }
    wp_die();
}
add_action('wp_ajax_load_coverage_data', 'load_coverage_data');
add_action('wp_ajax_nopriv_load_coverage_data', 'load_coverage_data');
}




if (!function_exists('coverage_iframe_shortcode')) {
    function coverage_iframe_shortcode($atts) {
        $defaults = array(
            'width'  => '100%',
            'height' => '600px',
        );
        $iframe_url = match (defined('SITE_ENV') ? SITE_ENV : '') {
            'LOCAL' => 'https://coverage-iot.yes.my',
            'IOT'   => 'https://coverage-iot.yes.my',
            default => 'https://coverage.yes.my',
        };

        $atts = shortcode_atts($defaults, $atts, 'coverage_iframe');
        $query_params = array_filter([
            'lat' => $_GET['lat'] ?? null,
            'lon' => $_GET['lon'] ?? null,
        ]);

        $iframe_src = $iframe_url . (!empty($query_params) ? '?' . http_build_query($query_params) : '');
        return '<iframe id="coverageIframe" sandbox="allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
            scrolling="no" frameborder="0"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"
            width="' . esc_attr($atts['width']) . '" height="' . esc_attr($atts['height']) . '"
            src="' . esc_url($iframe_src) . '">
        </iframe>';
    }
    add_shortcode('coverage_iframe', 'coverage_iframe_shortcode');
}