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

<footer class="c-footer u-bg-colossus">
    <div class="container">
        <div class="row">
            <div class="c-footer__first col-md-3 col-12 mb-4">
                <a href="<?php echo home_url( '/' ); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo pdam pintar">
                </a>
                <p>Copyright © <?php echo date('Y')?> Alterra</p>
            </div>
            <div class="c-footer__second col-md-3 col-12 mb-4">
                <h4>Tentang PDAM Pintar</h4>
                <ul class="u-list-block c-footer__nav">
                    <?php if (get_field('group_footer_left', 'option')): ?>
                        <?php foreach (get_field('group_footer_left', 'option') as $key => $link): ?>
                            <li><a href="<?php echo $link['link']['title']; ?>"><?php echo $link['link']['title']; ?></a></li>
                        <?php endforeach ?>
                    <?php else: ?>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                        <li><a href="#">FAQ</a></li>
                    <?php endif ?>
                </ul>
            </div>

            <div class="c-footer__third col-md-2 col-12 mb-4">
                <h4>Media Sosial</h4>
                <ul class="u-list-block c-footer__nav">
                    <?php if (get_field('group_footer_left', 'option')): ?>
                        <?php foreach (get_field('group_footer_left', 'option') as $key => $link): ?>
                            <li><a href="<?php echo $link['link']['title']; ?>"><?php echo $link['link']['title']; ?></a></li>
                        <?php endforeach ?>
                    <?php else: ?>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    <?php endif ?>
                </ul>
            </div>

            <div class="c-footer__forth col-md-4 col-12 mb-4">
                <h4>Hubungi Kami</h4>
                <ul class="u-list-block c-footer__nav">
                    <?php if (get_field('group_footer_left', 'option')): ?>
                        <?php foreach (get_field('group_footer_left', 'option') as $key => $link): ?>
                            <li><a href="<?php echo $link['link']['title']; ?>"><?php echo $link['link']['title']; ?></a></li>
                        <?php endforeach ?>
                    <?php else: ?>
                        <li><p class="d-flex align-items-top">
                            <i class="c-icon c-icon__envelope"></i> 
                            pdampintar@bsa.id
                        </p></li>
                        <li><p class="d-flex align-items-top">
                            <i class="c-icon c-icon__phone"></i> 
                            0361-453000
                        </p></li>
                        <li><p class="d-flex align-items-top">
                            <i class="c-icon c-icon__location"></i> 
                            Jl. Bung Tomo 1 No.5, Pemecutan Kaja<br/> Kec. Denpasar Utara, Kota Denpasar,<br/> Bali 80111
                        </p></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
