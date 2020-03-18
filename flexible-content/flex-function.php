<?php
// image
// video
// text
// subscribe
// request_demo
// button
// slider_type_1
// slider_type_2  

$section_class = '';
foreach (get_field('flexible') as $fkey => $section) {
    $acf_fc_layout = $section['acf_fc_layout'];
    $section_class .= "";
    include get_template_directory() . "/flexible-content/template/flex-".$acf_fc_layout."-section.php";
}