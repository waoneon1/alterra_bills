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
<section class="c-heading u-section u-mb-50" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/heading.svg" alt="heading">
            </div>
            <div class="col-md-6">
                <div class="c-heading__wrapper u-mt-50 js-scrollto">
                    <h1><?php echo $heading['title'] ?></h1>
                    <p class="lead u-color-primary"><?php echo $heading['description'] ?></p>
                    <?php if ($heading['connect_with_us']): ?>
                        <a class="c-btn c-btn__primary" href="#start">
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
            <div class="col-md-6 u-pt-75 u-pt-10@sm u-pb-50@sm">
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
        <ul class="u-pt-60 c-imgcol text-center js-imgcol">
            <?php foreach ($telco['items'] as $key => $item): ?>
                <li class="c-imgcol__li"><img src="<?php echo $item['image']['url'] ?>" alt="" class="u-retina"></li>
            <?php endforeach ?>
        </ul>
        <div class="text-center">
            <a class="c-btn c-btn__primary--outline js-imgcol-btn" href="">Show More</a>
        </div>
    </div>
</section>

<?php $start = get_field('start_alterra_bills') ?>
<section class="c-content u-section c-card-number u-bg-lightblue" id="start">
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
                <img class="u-mb-35@sm u-mt-35@sm" src="<?php echo get_template_directory_uri() ?>/assets/img/get.svg" alt="what do you get">
            </div>
            <div class="col-md-6">
                <?php foreach ($what['items'] as $key => $item): ?>
                    <div class="d-flex align-items-start position-relative">
                        <div class="u-numbering">0<?php echo $numbering = $key + 1 ?></div>
                        <div class="u-pl-75">
                            <h4><?php echo $item['title'] ?></h4>
                            <p class="mt-1 u-mb-35"><?php echo $item['description'] ?></p>
                        </div>  
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>

<?php $api = get_field('api') ?>
<section class="c-card-section u-section" id="api">
    <div class="container">
        <h2 class="text-center space[ u-mb-25 u-mb-10@sm ]"><?php echo $api['title'] ?></h2>
        <p class="lead u-color-primary text-center u-mb-75 u-mb-35@sm c-card__subtitle"><?php echo $api['description'] ?></p>
        <div class="row">
            <div class="col-md-6">
                <div class="c-card c-card--wider c-card--hover">
                    <div class="c-card__upper">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/api.png" 
                        srcset="<?php echo get_template_directory_uri() ?>/assets/img/api@2x.png 2x" 
                        alt="api">
                        <div class="c-card__head">
                            <h3><?php echo $api['api']['title'] ?></h3>
                        </div>
                    </div>
                    <div class="c-card__desc">
                        <p><?php echo $api['api']['description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="c-card c-card--wider c-card--hover">
                    <div class="c-card__upper">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/nonapi.png" 
                        srcset="<?php echo get_template_directory_uri() ?>/assets/img/nonapi@2x.png 2x" 
                        alt="nonapi">
                        <div class="c-card__head">
                            <h3><?php echo $api['non_api']['title'] ?></h3>
                        </div>
                    </div>
                    <div class="c-card__desc">
                        <p><?php echo $api['non_api']['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $praktik = get_field('praktik_terbaik') ?>
<section class="c-section c-tab u-section" id="praktik">
    <div class="container">
        <h2 class="text-center space[ u-mb-25 u-mb-10@sm ]"><?php echo $praktik['title'] ?></h2>
    </div>
    <div class="u-mt-75 u-mt-35@sm container">
        <ul class="c-tab__nav nav nav-tabs" role="tablist">
            <?php foreach ($praktik['items'] as $key => $item): ?>
                <li class="c-tab__nav-item nav-item">
                    <a class="c-tab__nav-link nav-link <?php echo !$key ? 'active' : '' ?>" 
                        href="#<?php echo title2slug($item['navigation']) ?>" 
                        role="tab" data-toggle="tab">
                        <?php echo $item['navigation'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

        <!-- Tab panes -->
        <div class="c-tab__content tab-content u-pb-75">
            <?php foreach ($praktik['items'] as $key => $item): ?>
                <div role="tabpanel" class="c-tab__tab-pane tab-pane fade <?php echo !$key ? 'in active show' : '' ?>" 
                id="<?php echo title2slug($item['navigation']) ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-tab__title"><?php echo $item['title'] ?></div>
                            <p><?php echo $item['description'] ?></p>
                            <?php if ($item['cta']) : ?>
                                <a class="c-btn c-btn__primary u-mb-35@sm mt-3" href="#" class="js-tab-btn" data-btn="<?php echo title2slug($item['navigation']) ?>">
                                    <?php echo $item['cta'] ?>
                                </a>
                            <?php endif ?>
                        </div>
                        <div class="col-md-6 text-center">
                            <?php if($item['image']) :  ?>
                                <div class="position-relative d-inline-block">
                                    <img src="<?php echo $item['image']['sizes']['bill_praktik'] ?>" 
                                        srcset="<?php echo $item['image']['url'] ?> 2x" 
                                        alt="<?php echo $item['image']['alt'] ?>" 
                                        class="c-tab__image"
                                        style="">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/doted.svg" 
                                        alt="doted"
                                        class="c-tab__doted">
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php $awards = get_field('awards') ?>
<section class="c-content u-section u-mb-35 u-mb-0@sm" id="awards">
    <div class="container">
        <h2 class="space[ u-mb-25 u-mb-10@sm ] text-center"><?php echo $awards['title'] ?></h2>                    
        <div class="row u-mt-50">
            <?php $award_count = count($awards['items']) - 1; ?>
            <?php foreach ($awards['items'] as $key => $item): ?>
                <div class="col-md-4">
                    <div class="c-card-badge text-center <?php echo $award_count == $key ? '' : 'u-mb-50@sm'?>">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/medal.svg" 
                            class="c-card-badge__medal"
                            alt="medal">
                        <div>
                            <img src="<?php echo $item['image']['sizes']['bill_telco'] ?>" 
                                srcset="<?php echo $item['image']['url'] ?> 2x" 
                                alt="<?php echo $item['image']['alt'] ?>" 
                                style="height:62px">
                            <p class="text-center"><?php echo $item['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>

<?php $testi = get_field('testimonials') ?>
<section class="c-content u-section u-mb-35 u-mb-0@sm overflow-hidden" id="testi">
    <div class="container position-relative">
        
        <div class="position-relative" style="z-index:1">
            <h2 class="space[ u-mb-25 u-mb-10@sm ]"><?php echo $testi['title'] ?></h2>
            <p class="lead u-color-primary u-text-clamp mb-3" style="width:100%; max-width:565px"><?php echo $testi['description'] ?></p>
        </div>
        
        <div class="c-bluewrapper">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/text-quotes.svg" 
            class="c-card-badge__quote"
            alt="quote">
            <div class="c-slider__arrow">
                <a href="" class="c-slider__arrow-prev js-slider-testi-prev">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow.svg" alt="" class="svg">
                </a>
                <a href="" class="c-slider__arrow-next js-slider-testi-next">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow.svg" alt="" class="svg">
                </a>
            </div>
        </div>
        <!-- js-slider-testi  -->
        <div class="js-slider-testi c-slick-testi">
            <?php foreach ($testi['items'] as $key => $item): ?>
                <div class="c-card">
                    <div class="c-card__upper">
                        <img src="<?php echo $item['image']['sizes']['bill_testi'] ?>" 
                        srcset="<?php echo $item['image']['url'] ?> 2x" 
                        alt="<?php echo $item['image']['alt'] ?>" 
                        class="c-card__image-round">

                        <div class="c-card__head">
                            <h3><?php echo $item['title'] ?></h3>
                            <div class="u-color-grey"><?php echo $item['subtitle'] ?></div>
                        </div>
                    </div>
                    <div class="c-card__desc">
                        <p class="u-color-primary"><?php echo $item['description'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</section>


<?php $connect = get_field('connect_us') ?>
<section class="c-textbg u-bg-lightblue u-section pb-0" id="contactus">
    <div class="container">
       <div class="row">
            <div class="col-md-6 col-12 u-pb-25">
                <h2><?php echo $connect['title'] ?></h2>
                <p class="u-color-primary"><?php echo $connect['description'] ?></p>
                <button class="c-btn c-btn__primary js-link-contact-us" href="">
                    Contact Us
                </button>
            </div>
            <div class="col-md-6 col-12 position-relative">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/contactus.svg" 
                alt="contact us"
                style="position: absolute; bottom: 0;">
            </div>
       </div>
    </div>
</section>



<?php  include get_template_directory() . '/template-parts/modal-contactus.php'; ?>
<?php  include get_template_directory() . '/template-parts/toast-success.php'; ?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {

        // TESTI SLIDER
        $('.js-slider-testi').slick({
            dots: false,
            infinite: false,
            speed: 300,
            variableWidth: true,
            slidesToScroll: 1,
            nextArrow: $('.js-slider-testi-next'),
            prevArrow: $('.js-slider-testi-prev'),
            touchThreshold: 20,
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    variableWidth: false,
                    slidesToShow: 1,
                  }
                }
            ]
        });

        // telco agregator
        $('.js-imgcol-btn').click(function (e) {
            e.preventDefault();
            $('.js-imgcol').toggleClass('is_active')
        });

        // MODAL
        $(".js-link-contact-us").click(function () {
            $(".c-modal").toggleClass("c-modal--show");
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
