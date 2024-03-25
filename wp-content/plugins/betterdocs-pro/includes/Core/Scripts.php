<?php

namespace WPDeveloper\BetterDocsPro\Core;

use WPDeveloper\BetterDocs\Core\Scripts as FreeScripts;

class Scripts extends FreeScripts {
    public function init() {
        $assets     = parent::init();
        $pro_assets = betterdocs_pro()->assets;

        // Shortcode CSS
        $assets->register( 'betterdocs-popular-articles', 'public/css/popular-articles.css' );
        $assets->register( 'betterdocs-related-categories', 'public/css/related-categories.css' );

        // Shortcode JS
        $pro_assets->register( 'betterdocs-pro-mkb-tab-grid', 'public/js/mkb-tab-grid.js', ['betterdocs-category-grid'] );
        $pro_assets->register( 'betterdocs-related-categories', 'public/js/related-categories.js' );

        //handbook css for block edit mode & frontend
        $pro_assets->register('betterdocs-handbook-block', 'blocks/handbook/handbook.css');

        $pro_assets->register( 'betterdocs-pro', 'public/js/betterdocs.js' );

        $pro_assets->register( 'single-doc-attachments', 'public/css/attachment.css' );

        $pro_assets->register( 'single-doc-related-articles', 'public/css/related-articles.css' );

        $pro_assets->register( 'advanced-search', 'blocks/advanced-search/advanced-search.js', ['betterdocs-blocks-editor'] );
    }
}
