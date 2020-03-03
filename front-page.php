<?php
/**
 * HOMEPAGE
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alterra-pay
 */

get_header();
?>

<?php $heading = get_field('heading') ?>
<section class="c-heading u-section" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/heading.svg" alt="heading">
            </div>
            <div class="col-md-6">
                <div class="c-heading__wrapper">
                    <h1><?php echo $heading['title'] ?></h1>
                    <p class="lead u-color-primary"><?php echo $heading['description'] ?></p>
                    <?php if ($heading['connect_with_us']): ?>
                        <a class="c-btn c-btn__primary" href="<?php echo $heading['connect_with_us'] ?>">
                            Connect with Us
                        </a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $why = get_field('why_choose') ?>
<section class="u-section" id="why">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-5">
                <h2><?php echo $why['title'] ?></h2>
                <p class="lead u-color-primary u-text-clamp mb-5"><?php echo $why['description'] ?></p>
                <?php foreach ($why['items'] as $key => $item): ?>
                    <div class="d-flex align-items-start">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/' . $item['image'] . '.svg'?>" 
                        alt="<?php echo $item['image'] ?>" 
                        style="">
                        <div class="ml-2">
                            <h4><?php echo $item['title'] ?></h4>
                            <p class="mt-1 mb-5"><?php echo $item['description'] ?></p>
                        </div>  
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-6 u-pt-75">
                <img src="<?php echo $why['image']['sizes']['bill_why_choose'] ?>" 
                    srcset="<?php echo $why['image']['url'] ?> 2x" 
                    alt="<?php echo $why['image']['alt'] ?>" 
                    class="u-shadow-one"
                    style="">
            </div>
        </div>
</section>

<?php $telco = get_field('official_telco') ?>
<section class="c-content u-section" id="telco">
    <div class="container">
        <h2 class="text-center space[ u-mb-35 u-mb-10@sm ]"><?php echo $telco['title'] ?></h2>
        <ul class="u-pt-60 c-imgcol text-center">
            <?php foreach ($telco['items'] as $key => $item): ?>
                <li class="c-imgcol__li"><img src="<?php echo $item['image']['url'] ?>" alt="" class="u-retina"></li>
            <?php endforeach ?>
        </ul>

        <div class="u-divider"></div>
    </div>
</section>

<?php $start = get_field('start_alterra_bills') ?>
<section class="c-content u-section c-card-number" id="start">
    <div class="container">
        <h2 class="text-center space[ u-mb-75 u-mb-10@sm ]"><?php echo $start['title'] ?></h2>
        <div class="row">
            <?php foreach ($start['items'] as $key => $item): ?>
                <div class="col-md-4">
                    <div class="c-card-number__wrapper position-relative d-flex align-items-end text-center p-4" style="height: 370px;">
                        <div class="c-card-number__count"><?php echo $count = $key + 1 ?></div>
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/easy' . $key . '.svg'?>" 
                                alt="<?php echo title2slug($item['title']) ?>" 
                                class="mb-3">   
                            <p class="c-card-number__title text-center u-color-primary my-1" title="<?php echo $item['title'] ?>">
                                <?php echo $item['title'] ?>
                            </p>
                            <p class="text-center my-1"><?php echo $item['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php $what = get_field('what_get') ?>
<section class="c-content u-section" id="what_get">
    <div class="container">
        <h2 class="text-center space[ u-mb-75 u-mb-10@sm ]"><?php echo $what['title'] ?></h2>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/get.svg" alt="what do you get">
            </div>
            <div class="col-md-6">
                <?php foreach ($what['items'] as $key => $item): ?>
                    <div class="d-flex align-items-start">
                        <div class="ml-2">
                            <h4><?php echo $item['title'] ?></h4>
                            <p class="mt-1 mb-5"><?php echo $item['description'] ?></p>
                        </div>  
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>

<?php $connect = get_field('connect_with_us') ?>
<section class="c-textbg text-center u-bg-lightblue u-section">
    <div class="container">
        <h2><?php echo $connect['title'] ?></h2>
        <p class="text-center"><?php echo $connect['content'] ?></p>
        <?php if ($connect['cta_link']): ?>
            <a class="c-btn c-btn__primary" href="<?php echo $connect['cta_link'] ?>"><?php echo $connect['cta'] ?></a>
        <?php else: ?>
            <button class="c-btn c-btn__primary js-link-contact-us" href=""><?php echo $connect['cta'] ?></button>
        <?php endif ?>
    </div>
</section>

<?php  include get_template_directory() . '/template-parts/modal-contactus.php'; ?>
<?php  include get_template_directory() . '/template-parts/toast-success.php'; ?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {

        // FULL WIDTH SLIDER
        $('.js-slider-fullw').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            nextArrow: $('.js-sliderf-next'),
            prevArrow: $('.js-sliderf-prev'),
            appendDots: $('.js-slider-dots')
        });
       

        // TESTIMONIAL SLIDER
        $('.js-slidert-text').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            infinite: false,
            speed: 300,
            asNavFor: '.js-slidert-img'
        });
        $('.js-slidert-img').slick({
            asNavFor: '.js-slidert-text',
            infinite: false,
            speed: 300,
            nextArrow: $('.js-slidert-next'),
            prevArrow: $('.js-slidert-prev'),
            cssEase: 'linear'

        });

        $('.js-tabico-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.js-tabico-nav'
        });
        $('.js-tabico-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.js-tabico-for',
            infinite: true,
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            arrows: true,
            nextArrow: $('.js-tabico-arrow-right'),
            prevArrow: $('.js-tabico-arrow-left'),
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    variableWidth: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                  }
                }
            ]
        });

        // MODAL
        $(".js-link-contact-us").click(function () {
            $(".c-modal").toggleClass("c-modal--show");
        });

        // HEADING Lottie
        bodymovin.loadAnimation({
            container: document.querySelector('.js-homepage'), // the dom element that will contain the animation
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: altp_burger_data + 'homepage.json'
        });

        // TOAST
        $.toastShow = function(){
            var hash = window.location.href.split('#')[1];
            if (hash == 'success_submited_form') {
                $('.toast').toast('show');
                window.location.hash = '';
            }
        }
        $.toastShow();


        
    });
 </script>

<?php
get_footer();
