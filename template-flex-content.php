
<?php 
/* Template Name: Flexible Content */ 

if (get_field('header_footer')['header_visibility']) {
    get_header();
} else {
    get_header('empty');
}
?>

<?php  include get_template_directory() . '/flexible-content/flex-function.php'; ?>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        
    });
 </script>

<?php

if (get_field('header_footer')['footer_visibility']) {
    get_footer();
} else {
    get_footer('empty');
}
