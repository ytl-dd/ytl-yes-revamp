<?php

/**
 * Displays the site footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yes-twentytwentyone
 */

?>

<?php /* get_template_part('template-parts/footer/footer-faq'); */ ?>
<?php get_template_part('template-parts/footer/footer-newsletter'); ?>

<!-- Footer STARTS -->
<footer class="footer">
    <div class="container g-lg-0">
        <div class="row position-relative">
            <?php display_widget_by_position('yes_widget_footer_top'); ?>
        </div>
    </div>
    <div class="copyright">
        <div class="container g-lg-0">
            <div class="row">
                <?php display_widget_by_position('yes_widget_footer_bottom'); ?>
            </div>
        </div>
    </div>
</footer>
<!-- Footer ENDS -->

<?php get_template_part('template-parts/footer/footer-page-modal'); ?>
