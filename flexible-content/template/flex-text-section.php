
<?php 
    $class = "c-content u-section";
    $class .= " flex-section-" . $section['acf_fc_layout'];
?>
<section class="<?php echo $class . ' ' . $section_class ?>" id="flex-section-<?php echo $key ?>">
    <div class="container">

        <?php if($section['title']) : ?>
            <h2><?php echo $section['title'] ?></h2>     
        <?php endif; ?>

        <?php if($section['description']) : ?>
            <p class="u-color-primary"><?php echo $section['description'] ?></p>
        <?php endif; ?>

        <?php if($section['wysiwyg']) : ?>
            <div class="c-typhography" style="margin-top: 30px;">
                <?php echo $section['wysiwyg'] ?>
            </div>
        <?php endif; ?>
        
    </div>
</section>

<script></script>

<style></style>
