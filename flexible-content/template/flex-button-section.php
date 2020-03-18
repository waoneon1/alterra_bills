
<?php 
    $class = "c-textbg u-bg-lightblue u-section pb-0";
    $class .= " flex-section-" . $section['acf_fc_layout'];
?>
<section class="<?php echo $class . ' ' . $section_class ?>" id="flex-section-<?php echo $fkey ?>">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-12 u-pb-25">
                <?php if($section['title']) : ?>
                    <h2><?php echo $section['title'] ?></h2>
                <?php endif; ?>

                <?php if($section['description']) : ?>
                    <p class="u-color-primary"><?php echo $section['description'] ?></p>
                <?php endif; ?>

                <?php if($section['button'] && $section['button']['visibility']) : ?>
                    <a class="c-btn c-btn__primary js-link-contact-us" 
                    href="<?php echo $section['button']['url'] ?>"
                    class="<?php echo $section['button']['class'] ?>">
                        <?php echo $section['button']['text'] ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-12 position-relative">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/contactus.svg" 
                alt="contact us"
                style="position: absolute; bottom: 0;">
            </div>
       </div>
        
    </div>
</section>

<!-- SCRIPT HERE -->
<script>
    
</script>

<!-- STYLE HERE -->
<style>
    
</style>