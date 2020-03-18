
<?php 
    $class = "c-content u-section";
    $class .= " flex-section-" . $section['acf_fc_layout'];
?>
<section class="<?php echo $class . ' ' . $section_class ?>" id="flex-section-<?php echo $fkey ?>">
    <div class="container">

        <?php if($section['title']) : ?>
            <h2><?php echo $section['title'] ?></h2>     
        <?php endif; ?>

        <?php if($section['description']) : ?>
            <p class="u-color-primary"><?php echo $section['description'] ?></p>
        <?php endif; ?>

        <?php if($section['image']['url']) : ?>
            <div class="text-center">
                <img class="mt-3 mb-3" src="<?php echo $section['image']['url'] ?>" 
                    alt="<?php echo $section['image']['alt'] ?>" 
                    style="">
            </div>
        <?php endif; ?>
        
    </div>
</section>

<!-- SCRIPT HERE -->
<script>
    
</script>

<!-- STYLE HERE -->
<style>
    
</style>