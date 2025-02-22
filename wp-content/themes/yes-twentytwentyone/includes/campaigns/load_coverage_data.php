<?php
// $URL="https://docs.google.com/spreadsheets/d/e/2PACX-1vR1gMVF9iNNiYJPY0n2LzQsmV2FjslUFyHb_EcT1LikYgo-N6nwH12CWpR6MC3n9Q/pub?gid=1597758861&single=true&output=csv";
$URL="https://docs.google.com/spreadsheets/d/1MQ4OuDuqL-5975zHiZs1m9rEfLloiAm-r4OcPon28Ts/pub?gid=0&single=true&output=csv";
$cache_file = '/wp-content/themes/yes-twentytwentyone/cache/coverage_data_cache.csv';
$csvUrl = defined('RAN_COVERAGE_NETWORK') ? RAN_COVERAGE_NETWORK : $URL;

if (file_exists($cache_file) && filemtime($cache_file) > time() - 86400) {
    
    // Read the CSV file with quotes properly handled
    $csvData = array_map(function ($line) {
        return str_getcsv($line, ',', '"');
    }, file($cache_file, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES));
    
    $header = array_shift($csvData);
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
    
    $csvData = file_get_contents($csvUrl);
    $rows = array_map(function ($line) {
        return str_getcsv($line, ',', '"');
    }, explode("\n", $csvData));
    $header = array_shift($rows);
    $groupedData = [];
    
    $csvContent = [];
    $csvContent[] = implode(',', array_map(function ($field) {
        return '"' . str_replace('"', '""', $field) . '"'; // Escape quotes in fields
    }, $header));


    foreach ($rows as $row) {
        if (count($row) == count($header)) {
            $dataRow = array_combine($header, $row);
            $state = trim($dataRow['State']);
            $title = $dataRow['Upcoming Coverage Expansion Area Title'];
            $states[$state] = true;
            $groupedData[$state][$title][] = $dataRow;

            // Add row to CSV content with escaped characters
            $csvContent[] = implode(',', array_map(function ($field) {
                return '"' . str_replace('"', '""', $field) . '"'; // Escape quotes in fields
            }, $row));
        }
    }
  
    // Save the fresh data to cache as a CSV file
    file_put_contents($cache_file, implode("\n", $csvContent));
}

if (isset($_POST['load_states'])) {
    echo json_encode(array_keys($groupedData));
} elseif (isset($_POST['selected_state']) && $_POST['selected_state']) {
 
    $site_url = "https://yesmy-dev.azurewebsites.net";
    $selectedState = ($_POST['selected_state']);
    if (isset($groupedData[$selectedState])) {

        ob_start();
        foreach ($groupedData[$selectedState] as $title => $areas) {

            echo '<div class="result-inner-section">';
            echo '<div class="result-left-sec"><h3>' . ($title) . '</h3></div>';
            echo '<div class="result-right-sec"><ul>';
            foreach ($areas as $area) {
                echo '<li>';
                echo '<a target="_blank" href="' . $site_url.'/coverage/?lat=' . urlencode($area['Latitude']) . '&lon=' . urlencode($area['Longitude']) . '" class="coverage-link">
                <span class="icon-left">
                    <img src="/wp-content/uploads/2024/11/location-icon-b.svg" alt="...">
                </span>' . htmlspecialchars($area['Upcoming Coverage Expansion Area']) . '
              </a>';                echo '<label>' . ($area['Target Completion Month']) . '</label>';
                echo '</li>';
            }

            echo '</ul></div></div>';
        }
        echo ob_get_clean();
    } else {
        echo json_encode(["error" => "No data available for the selected state."]);
    }
}
