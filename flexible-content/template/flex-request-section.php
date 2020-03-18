
<?php 
    $class = "c-content u-section";
    $class .= " flex-section-" . $section['acf_fc_layout'];
?>
<section class="<?php echo $class . ' ' . $section_class ?>" id="flex-section-<?php echo $fkey ?>">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <?php if($section['title']) : ?>
                    <h2><?php echo $section['title'] ?></h2>     
                <?php endif; ?>

                <?php if($section['description']) : ?>
                    <p class="u-color-primary"><?php echo $section['description'] ?></p>
                <?php endif; ?>
            </div>
            <div class="col-12">
                <div class="wp_plugin_wpform" style="max-width:700px">
                    <?php echo do_shortcode($section['shortcode']); ?>
                </div>
            </div>
        </div>
        
    </div>
</section>

<script></script>

<style></style>
