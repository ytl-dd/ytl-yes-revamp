<?php 
    $lang           = get_bloginfo('language');
    $text_select_country  = 'Select a Country';
    if ($lang == 'ms-MY') {
        $text_select_country  = 'Pilih Negara';
    }
?>

<select class="roaming-idd-list" id="roaming-idd-picker" name="roaming-idd-picker" data-placeholder="<?php echo $text_select_country; ?>">
    <?php
    if ($args['data_idd']) :
        foreach ($args['data_idd'] as $data_idd) :
    ?>
            <option value="<?= $data_idd['country_name'] ?>"><?= $data_idd['country_name']; ?></option>
    <?php
        endforeach;
    endif;
    ?>
</select>