<div class="c-modal">
    <header class="c-header c-header--modal">
        <div class="container">
            <div class="c-header__wrapper">
                <div class="c-header__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="alterra bills logo">
                </div>
                <div class="c-header__close">
                    <button class="c-btn c-btn--icons js-link-contact-us">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/close.svg">
                    </button>
                </div>
            </div>
        </div>
    </header>

    <section class="c-content l-container-small mx-auto u-section">
        <div class="container">
            <h2 class="text-center space[ u-mb-35 u-mb-10@sm ]">
                <?php echo get_field('title', 'option') 
                ? get_field('title', 'option')
                : 'How Can We Help You?'  ?>
            </h2>
            <p class="text-center space[ u-mb-35 ] u-color-primary">
                <?php echo get_field('description', 'option') 
                ? get_field('description', 'option')
                : 'Silakan hubungi kami melalui kolom di bawah ini untuk pertanyaan seputar Alterra Bills.'  ?>
            </p>

            <div class="wp_plugin_wpform">
			    <?php echo do_shortcode($connect['shortcode']); ?>
			</div>

        </div>
    </section>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("label.wpforms-field-label:contains(Optional)").html(function() {
            var content = $(this).text().replace("Optional", '<span class="u-color-secondary">Optional</span>');
            return content;
        });
    });
</script>
