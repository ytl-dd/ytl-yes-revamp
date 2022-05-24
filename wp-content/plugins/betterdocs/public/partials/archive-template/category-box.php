<?php
/**
 * Template archive docs
 *
 * @link       https://wpdeveloper.com
 * @since      1.0.0
 *
 * @package    BetterDocs
 * @subpackage BetterDocs/public
 */

get_header();

echo '<div class="betterdocs-wraper betterdocs-main-wraper">';
    $live_search = BetterDocs_DB::get_settings('live_search');
    if ( $live_search == 1 ) {
        echo BetterDocs_Public::search();
    }

    $terms_orderby = BetterDocs_DB::get_settings('terms_orderby');
    $terms_order   = BetterDocs_DB::get_settings('terms_order');
    if (BetterDocs_DB::get_settings('alphabetically_order_term') == 1) {
        $terms_orderby = 'name';
    }
	echo '<div class="betterdocs-archive-wrap betterdocs-archive-main">';
        $output = betterdocs_generate_output();
        $shortcode = do_shortcode( '[betterdocs_category_box title_tag="'.BetterDocs_Helper::html_tag($output['betterdocs_category_title_tag']).'" border_bottom="'.$output['betterdocs_doc_page_box_border_bottom'].'" terms_orderby="'.esc_html($terms_orderby).'" terms_order="'.esc_html($terms_order).'"]' );
        echo apply_filters( 'betterdocs_category_box_shortcode', $shortcode, $terms_orderby, $terms_order);
	echo '</div>
</div>';

get_footer();
