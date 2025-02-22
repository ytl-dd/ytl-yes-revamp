<?php 
    $lang           = get_bloginfo('language');
    $text_select_country  = 'Select a Country';
    if ($lang == 'ms-MY') {
        $text_select_country  = 'Pilih Negara';
    }
?>

<!-- <select class="roaming-rates-list w-100" id="roaming-rates-picker" name="roaming-rates-picker" data-placeholder="<?php echo $text_select_country; ?>">
    <?php
    if ($args['data_roaming']) :
        foreach ($args['data_roaming'] as $data_roaming) :
            foreach ($data_roaming as $data) :
    ?>
                <option id="dataRoaming" value="<?= $data['id'] ?>"><?= $data['country_name']; ?></option>
    <?php
                break;
            endforeach;
        endforeach;
    endif;
    ?>
</select> -->
<select class="roaming-rates-list" id="roaming-rates-picker" name="roaming-rates-picker" data-placeholder="<?php echo $text_select_country; ?>">
    <?php
    if ($args['data_roaming']) :
        $unique_countries = array(); // Array to store unique country names
        foreach ($args['data_roaming'] as $data_roaming) :
            foreach ($data_roaming as $data) :
                // Check if the country name is already in the array
                if (!in_array($data['country_name'], $unique_countries)) {
                    // If not, add it to the array and generate the <option> element
                    $unique_countries[] = $data['country_name'];
    ?>
                    <option id="dataRoaming" value="<?= $data['id'] ?>"><?= $data['country_name']; ?></option>
    <?php
                }
            endforeach;
        endforeach;
    endif;
    ?>
</select>