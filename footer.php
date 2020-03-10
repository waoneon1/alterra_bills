<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alterra_bill
 */

?>

<footer class="c-footer u-section">
    <div class="container">
        <div class="row">
            <div class="c-footer__first col-md-5 [ u-mb-35@sm ]">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-footer.svg" alt="alterra bill logo">
                <p>© Alterra. All rights reserved.</p>
                <ul class="c-footer__link">

                    <li><a href="<?php echo get_field('kebijakan_privacy', 'option')['link'] ?>">
                        <?php echo get_field('kebijakan_privacy', 'option')['text_title'] 
                        ? get_field('kebijakan_privacy', 'option')['text_title']
                        : 'Kebijakan Privasi'  ?>
                    </a></li>
                    <li><a href="<?php echo get_field('ketentuan_layanan', 'option')['link'] ?>">
                        <?php echo get_field('ketentuan_layanan', 'option')['text_title'] 
                        ? get_field('ketentuan_layanan', 'option')['text_title']
                        : 'Ketentuan Layanan'  ?>
                    </a></li>
                </ul>
            </div>
            <div class="c-footer__second offset-md-4 col-md-3">
                <h4>AlterraPay</h4>
                <ul class="u-list-block c-footer__nav">
                    <?php if (get_field('group_footer_left', 'option')): ?>
                        <?php foreach (get_field('group_footer_left', 'option') as $key => $link): ?>
                            <li><a href="<?php echo $link['link']['title']; ?>"><?php echo $link['link']['title']; ?></a></li>
                        <?php endforeach ?>
                    <?php else: ?>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
       
    // HEADING Lottie
    bodymovin.loadAnimation({
        container: document.querySelector('.js-homepage'), // the dom element that will contain the animation
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: altp_burger_data + 'homepage.json'
    });

</script>

<?php wp_footer(); ?>

</body>
</html>
