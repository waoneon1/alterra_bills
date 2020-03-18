
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

        <?php if($section['video']) : ?>
            <div class="flex-video-container">
                <?php echo $section['video']; ?>
            </div>
        <?php endif; ?>
        
    </div>
</section>

<script>
    
</script>

<style>
    .flex-video-container {
	    position: relative;
	    width: 100%;
	    height: 0;
	    padding-bottom: 56.25%;
	}
	.flex-video-container iframe {
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	}
</style>