!function(t){"use strict";function o(o,_,e){wp.customize.control(_,(function(_){var a=e.split(","),c=function(){t.inArray(o.get(),a)>-1?_.container.slideDown(180):_.container.slideUp(180)};c(),o.bind(c)}))}function _(o,_,e){wp.customize.control(_,(function(_){var a=e.split(","),c=function(){t.inArray(o.get(),a)>-1?_.container.slideUp(180):_.container.slideDown(180)};c(),o.bind(c)}))}function e(t,o,_){wp.customize.control(o,(function(o){var _=function(){1==t.get()?o.container.slideDown(180):o.container.slideUp(180)};_(),t.bind(_)}))}wp.customize.bind("ready",(function(){var a=jQuery(".betterdocs-dimension .betterdocs-customizer-reset");a.each((function(){t(a).on("click",(function(o){o.preventDefault();var _=t(this).parent(".betterdocs-dimension").attr("id");t("."+_).each((function(){var o=t(this).data("default-val");t(this).val(o).trigger("change")}))}))}));var c=jQuery(".betterdocs-select .betterdocs-customizer-reset");c.each((function(){t(c).on("click",(function(o){o.preventDefault();var _=t(this).parent(".betterdocs-select").attr("id");t("."+_).each((function(){var o=t(this).data("default-val");t(this).val(o).trigger("change")}))}))}));var l=jQuery(".betterdocs-customizer-reset.betterdocs-number");l.each((function(){t(l).on("click",(function(o){o.preventDefault();var _=t(this).next(".betterdocs-number"),e=t(this).next(".betterdocs-number").data("default-val");t(_).val(e).trigger("change")}))})),wp.customize("betterdocs_docs_layout_select",(function(t){_(t,"betterdocs_doc_page_column_space","layout-6"),_(t,"betterdocs_doc_page_column_padding","layout-6"),_(t,"betterdocs_doc_page_column_padding_top","layout-6"),_(t,"betterdocs_doc_page_column_padding_right","layout-6"),_(t,"betterdocs_doc_page_column_padding_bottom","layout-6"),_(t,"betterdocs_doc_page_column_padding_left","layout-6"),_(t,"betterdocs_doc_page_column_borderr","layout-6"),_(t,"betterdocs_doc_page_column_borderr_topleft","layout-6"),_(t,"betterdocs_doc_page_column_borderr_topright","layout-6"),_(t,"betterdocs_doc_page_column_borderr_bottomright","layout-6"),_(t,"betterdocs_doc_page_column_borderr_bottomleft","layout-6"),o(t,"betterdocs_doc_page_explore_btn_border_width","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_list_padding","layout-1"),o(t,"betterdocs_doc_page_article_list_padding_top","layout-1"),o(t,"betterdocs_doc_page_article_list_padding_right","layout-1"),o(t,"betterdocs_doc_page_article_list_padding_bottom","layout-1"),o(t,"betterdocs_doc_page_article_list_padding_left","layout-1"),o(t,"betterdocs_doc_page_cat_title_padding_bottom","layout-1"),o(t,"betterdocs_doc_page_item_count_inner_border_width","layout-1"),o(t,"betterdocs_doc_page_item_count_inner_border_width_top","layout-1"),o(t,"betterdocs_doc_page_item_count_inner_border_width_right","layout-1"),o(t,"betterdocs_doc_page_item_count_inner_border_width_bottom","layout-1"),o(t,"betterdocs_doc_page_item_count_inner_border_width_left","layout-1"),o(t,"betterdocs_doc_page_item_count_border_type","layout-1"),o(t,"betterdocs_doc_page_article_list_padding","layout-1"),o(t,"betterdocs_doc_page_article_list_padding_2","layout-1"),o(t,"betterdocs_doc_page_article_list_padding_top_2","layout-1"),o(t,"betterdocs_doc_page_article_list_padding_bottom_2","layout-1"),o(t,"betterdocs_doc_page_article_list_padding_right_2","layout-1"),o(t,"betterdocs_doc_page_article_list_padding_left_2","layout-1"),o(t,"betterdocs_doc_page_item_count_border_width","layout-1"),o(t,"betterdocs_doc_page_item_count_border_color","layout-1"),o(t,"betterdocs_doc_page_cat_icon_size_layout1","layout-1"),o(t,"betterdocs_doc_page_item_count_font_size","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_page_cat_icon_size_layout2","layout-2"),o(t,"betterdocs_doc_page_cat_title_border_color","layout-1"),o(t,"betterdocs_doc_page_cat_title_color","layout-1"),o(t,"betterdocs_doc_page_cat_title_font_size","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_page_cat_title_color2","layout-2,layout-3,layout-4,layout-5,layout-6"),o(t,"betterdocs_doc_page_cat_title_hover_color","layout-1,layout-2,layout-3,layout-4,layout-5,layout-6"),o(t,"betterdocs_doc_page_item_count_color","layout-1"),o(t,"betterdocs_doc_page_item_count_color_layout2","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_page_item_count_bg_color","layout-1"),o(t,"betterdocs_doc_page_item_counter_size","layout-1"),o(t,"betterdocs_doc_page_item_count_inner_bg_color","layout-1"),o(t,"betterdocs_doc_page_cat_desc","layout-2,layout-3,layout-5"),o(t,"betterdocs_doc_page_box_border_bottom","layout-2"),o(t,"betterdocs_doc_page_box_border_bottom_size","layout-2"),o(t,"betterdocs_doc_page_box_border_bottom_color","layout-2"),o(t,"betterdocs_doc_page_article_list_settings","layout-1,layout-4,layout-5"),o(t,"betterdocs_doc_page_article_list_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_list_hover_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_list_bg_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_list_font_size","layout-1,layout-4"),o(t,"betterdocs_doc_page_subcategory_article_list_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_subcategory_article_list_hover_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_subcategory_article_list_icon_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_list_icon_color","layout-1"),o(t,"betterdocs_doc_page_list_icon_font_size","layout-1"),o(t,"betterdocs_doc_page_article_list_margin","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_list_margin_top","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_list_margin_right","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_list_margin_bottom","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_list_margin_left","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_bg_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_border_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_font_size","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_padding","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_padding_top","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_padding_right","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_padding_bottom","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_padding_left","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_margin","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_margin_top","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_margin_right","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_margin_bottom","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_margin_left","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_borderr","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_borderr_topleft","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_borderr_topright","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_borderr_bottomright","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_borderr_bottomleft","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_hover_bg_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_hover_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_explore_btn_hover_border_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_column_bg_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_column_bg_color2","layout-2,layout-3,layout-5"),_(t,"betterdocs_doc_page_column_hover_bg_color","layout-1,layout-6"),o(t,"betterdocs_doc_page_column_content_space","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_page_column_content_space_image","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_page_column_content_space_title","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_page_column_content_space_desc","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_page_column_content_space_counter","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_page_article_subcategory_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_subcategory_hover_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_subcategory_font_size","layout-1,layout-4"),o(t,"betterdocs_doc_page_subcategory_icon_color","layout-1,layout-4"),o(t,"betterdocs_doc_page_subcategory_icon_font_size","layout-1,layout-4"),o(t,"betterdocs_doc_page_article_list_button_bg_color","layout-1")})),wp.customize("betterdocs_archive_layout_select",(function(t){o(t,"betterdocs_archive_title_tag","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_title_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_title_font_size","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_title_margin","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_title_margin_top","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_title_margin_right","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_title_margin_bottom","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_title_margin_left","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_description_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_description_font_size","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_description_margin","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_description_margin_top","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_description_margin_right","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_description_margin_bottom","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_description_margin_left","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_list_icon_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_list_icon_font_size","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_list_item_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_list_item_hover_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_list_item_font_size","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_article_list_margin","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_article_list_margin_top","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_article_list_margin_right","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_article_list_margin_bottom","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_article_list_margin_left","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_article_subcategory_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_article_subcategory_hover_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_article_subcategory_font_size","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_subcategory_icon_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_subcategory_icon_font_size","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_subcategory_article_list_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_subcategory_article_list_hover_color","layout-1,layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_archive_subcategory_article_list_icon_color","layout-1,layout-2,layout-3,layout-4,layout-5"),_(t,"category_archive_padding","layout-6"),_(t,"category_archive_padding_top","layout-6"),_(t,"category_archive_padding_right","layout-6"),_(t,"category_archive_padding_bottom","layout-6"),_(t,"category_archive_padding_left","layout-6")})),wp.customize("betterdocs_single_layout_select",(function(t){o(t,"betterdocs_sidebar_borderr","layout-1"),o(t,"betterdocs_sidebar_borderr_topleft","layout-1"),o(t,"betterdocs_sidebar_borderr_topright","layout-1"),o(t,"betterdocs_sidebar_borderr_bottomright","layout-1"),o(t,"betterdocs_sidebar_item_counter_title","layout-1"),o(t,"betterdocs_sidbebar_item_count_bg_color","layout-1"),o(t,"betterdocs_sidebar_item_counter_size","layout-1"),o(t,"betterdocs_sidebar_item_count_color","layout-1"),o(t,"betterdocs_sidebat_item_count_font_size","layout-1"),o(t,"betterdocs_sidebar_borderr_bottomleft","layout-1"),o(t,"betterdocs_doc_single_post_content_padding","layout-1"),o(t,"betterdocs_doc_single_post_content_padding_top","layout-1"),o(t,"betterdocs_doc_single_post_content_padding_right","layout-1"),o(t,"betterdocs_doc_single_post_content_padding_bottom","layout-1"),o(t,"betterdocs_doc_single_post_content_padding_left","layout-1"),o(t,"betterdocs_doc_single_2_post_content_padding","layout-2"),o(t,"betterdocs_doc_single_2_post_content_padding_top","layout-2"),o(t,"betterdocs_doc_single_2_post_content_padding_right","layout-2"),o(t,"betterdocs_doc_single_2_post_content_padding_bottom","layout-2"),o(t,"betterdocs_doc_single_2_post_content_padding_left","layout-2"),o(t,"betterdocs_doc_single_3_post_content_padding","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_single_3_post_content_padding_top","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_single_3_post_content_padding_right","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_single_3_post_content_padding_bottom","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_doc_single_3_post_content_padding_left","layout-2,layout-3,layout-4,layout-5"),o(t,"betterdocs_sticky_toc_width","layout-1,layout-6"),o(t,"betterdocs_sticky_toc_zindex","layout-1,layout-6"),o(t,"betterdocs_sticky_toc_margin_top","layout-1,layout-6"),o(t,"betterdocs_toc_bg_color","layout-1,layout-2,layout-3,layout-4"),o(t,"betterdocs_toc_list_item_hover_color","layout-1,layout-2,layout-3,layout-4")})),wp.customize("betterdocs_post_reactions",(function(t){e(t,"betterdocs_post_reactions_text"),e(t,"betterdocs_post_reactions_text_color"),e(t,"betterdocs_post_reactions_icon_color"),e(t,"betterdocs_post_reactions_icon_svg_color"),e(t,"betterdocs_post_reactions_icon_hover_bg_color"),e(t,"betterdocs_post_reactions_icon_hover_svg_color")})),wp.customize("betterdocs_post_social_share",(function(t){e(t,"betterdocs_social_sharing_text"),e(t,"betterdocs_post_social_share_text_color"),e(t,"betterdocs_post_social_share_facebook"),e(t,"betterdocs_post_social_share_twitter"),e(t,"betterdocs_post_social_share_linkedin"),e(t,"betterdocs_post_social_share_pinterest")})),wp.customize("betterdocs_doc_page_cat_desc",(function(t){e(t,"betterdocs_doc_page_cat_desc_color")})),wp.customize("betterdocs_doc_page_box_border_bottom",(function(t){e(t,"betterdocs_doc_page_box_border_bottom_size"),e(t,"betterdocs_doc_page_box_border_bottom_color")})),wp.customize("betterdocs_live_search_heading_switch",(function(t){e(t,"betterdocs_live_search_heading"),e(t,"betterdocs_live_search_heading_font_color"),e(t,"betterdocs_live_search_heading_font_size"),e(t,"betterdocs_live_search_subheading"),e(t,"betterdocs_live_search_subheading_font_size"),e(t,"betterdocs_live_search_subheading_font_color"),e(t,"betterdocs_search_heading_margin"),e(t,"betterdocs_search_heading_margin_top"),e(t,"betterdocs_search_heading_margin_right"),e(t,"betterdocs_search_heading_margin_bottom"),e(t,"betterdocs_search_heading_margin_left"),e(t,"betterdocs_search_subheading_margin"),e(t,"betterdocs_search_subheading_margin_top"),e(t,"betterdocs_search_subheading_margin_right"),e(t,"betterdocs_search_subheading_margin_bottom"),e(t,"betterdocs_search_subheading_margin_left"),e(t,"betterdocs_live_search_heading_tag"),e(t,"betterdocs_live_search_subheading_tag")})),wp.customize("betterdocs_live_search_custom_background_switch",(function(t){e(t,"betterdocs_live_search_custom_background_width"),e(t,"betterdocs_live_search_custom_background_height")})),wp.customize("betterdocs_faq_switch",(function(t){e(t,"betterdocs_select_specific_faq"),e(t,"betterdocs_select_faq_template"),e(t,"betterdocs_faq_title_text"),e(t,"betterdocs_faq_title_margin"),e(t,"betterdocs_faq_title_color"),e(t,"betterdocs_faq_title_font_size"),e(t,"betterdocs_faq_category_title_color"),e(t,"betterdocs_faq_category_name_font_size"),e(t,"betterdocs_faq_category_name_padding"),e(t,"betterdocs_faq_list_color"),e(t,"betterdocs_faq_list_font_size"),e(t,"betterdocs_faq_list_content_font_size"),e(t,"betterdocs_faq_list_content_font_size_layout_2"),e(t,"betterdocs_faq_list_padding"),e(t,"betterdocs_faq_list_background_color"),e(t,"betterdocs_faq_list_content_background_color"),e(t,"betterdocs_faq_category_title_color_layout_2"),e(t,"betterdocs_faq_category_name_font_size_layout_2"),e(t,"betterdocs_faq_category_name_padding_layout_2"),e(t,"betterdocs_faq_list_color_layout_2"),e(t,"betterdocs_faq_list_background_color_layout_2"),e(t,"betterdocs_faq_list_content_background_color_layout_2"),e(t,"betterdocs_faq_list_font_size_layout_2"),e(t,"betterdocs_faq_list_padding_layout_2"),e(t,"betterdocs_faq_list_padding_layout_2"),e(t,"betterdocs_faq_list_content_color"),e(t,"betterdocs_faq_list_content_color_layout_2")})),wp.customize("betterdocs_select_faq_template",(function(t){o(t,"betterdocs_faq_category_title_color","layout-1"),o(t,"betterdocs_faq_list_content_color","layout-1"),o(t,"betterdocs_faq_category_name_font_size","layout-1"),o(t,"betterdocs_faq_category_name_padding","layout-1"),o(t,"betterdocs_faq_list_color","layout-1"),o(t,"betterdocs_faq_list_background_color","layout-1"),o(t,"betterdocs_faq_list_font_size","layout-1"),o(t,"betterdocs_faq_list_content_font_size","layout-1"),o(t,"betterdocs_faq_list_padding","layout-1"),o(t,"betterdocs_faq_list_content_background_color","layout-1"),o(t,"betterdocs_faq_category_title_color_layout_2","layout-2"),o(t,"betterdocs_faq_category_name_font_size_layout_2","layout-2"),o(t,"betterdocs_faq_category_name_padding_layout_2","layout-2"),o(t,"betterdocs_faq_list_color_layout_2","layout-2"),o(t,"betterdocs_faq_list_background_color_layout_2","layout-2"),o(t,"betterdocs_faq_list_content_background_color_layout_2","layout-2"),o(t,"betterdocs_faq_list_font_size_layout_2","layout-2"),o(t,"betterdocs_faq_list_padding_layout_2","layout-2"),o(t,"betterdocs_faq_list_padding_layout_2","layout-2"),o(t,"betterdocs_faq_list_content_font_size_layout_2","layout-2"),o(t,"betterdocs_faq_list_content_color_layout_2","layout-2")}))}))}(jQuery);