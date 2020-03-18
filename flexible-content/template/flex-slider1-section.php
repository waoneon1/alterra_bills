<?php 
    $class = "c-content u-section";
    $class .= " flex-section-" . $section['acf_fc_layout'];
?>
<section class="<?php echo $class . ' ' . $section_class ?>" id="flex-section-<?php echo $key ?>">
    <div class="container">
        <div class="text-center u-mb-50">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/quote.svg" alt="">
        </div>
        <h2 class="text-center"><?php echo $section['title'] ?></h2>
        <p class="c-heading text-center u-color-primary"><?php echo $section['description'] ?></p>
        <div class="c-card-quotes__wrapper js-slider-quotes">
            <?php foreach ($section['slider'] as $key => $item): ?>
                <div class="c-card-quotes__col">
                    <div class="c-card-quotes rounded">
                        <div class="c-card-quotes__footer d-flex align-items-center">
                            <img src="<?php echo $item['image']['url'] ?>" 
                                srcset="<?php echo $item['image']['url'] ?> 2x" 
                                alt="testi" style="width: 63px;height: 63px;"
                                class="rounded-circle mr-3"
                            >
                            <div class="c-card-quotes__meta">
                                <h5><?php echo $item['title'] ?></h5>
                                <p><?php echo $item['subtitle'] ?></p>
                            </div>
                        </div>
                        <p><?php echo $item['description'] ?></p>
                    </div>
                </div>
                <?php //if ($i == 2) break; ?>
                <?php //$i++ ?>
            <?php endforeach ?>
        </div>

        <div class="c-card-quotes__arrow d-flex justify-content-center align-items-center mx-auto">
            <a href="" class="c-card-quotes__arrow-prev js-slider-quotes-prev">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow.svg" alt="" class="svg">
            </a>
            <div class="c-card-quotes__dots js-slider-dots"></div>
            <a href="" class="c-card-quotes__arrow-next js-slider-quotes-next">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow.svg" alt="" class="svg">
            </a>
        </div>
    </div>
</section>

<script>
// TESTIMONIAL slider
jQuery(document).ready(function ($) {
    $('.js-slider-quotes').slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        speed: 300,
        touchThreshold: 20,
        adaptiveHeight: true,
        nextArrow: $('.js-slider-quotes-next'),
        prevArrow: $('.js-slider-quotes-prev'),
        appendDots: $('.js-slider-dots'),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 1
                }
            }
        ]
    });
});
</script>

<style>

.c-card-quotes {
  padding: 28px;
  -webkit-box-shadow: 0 5px 17px 0 rgba(154, 154, 154, 0.16);
  box-shadow: 0 5px 17px 0 rgba(154, 154, 154, 0.16);
}
.c-card-quotes__wrapper {
  margin-top: 60px;
}
.c-card-quotes__col {
  padding-left: 8px;
  padding-right: 8px;
  margin-bottom: 20px;
}
.c-card-quotes__meta h5 {
  margin: 0;
  font-size: 18px;
  font-weight: 400;
}
.c-card-quotes__meta p {
  margin: 0;
  font-size: 14px;
}
.c-card-quotes__arrow {
  max-width: 300px;
}
.c-card-quotes__arrow-next,
.c-card-quotes__arrow-prev {
  background-color: white;
  z-index: 1;
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
}
.c-card-quotes__arrow-next img,
.c-card-quotes__arrow-prev img,
.c-card-quotes__arrow-next svg,
.c-card-quotes__arrow-prev svg {
  margin: 0 auto;
}
.c-card-quotes__arrow-next svg path,
.c-card-quotes__arrow-prev svg path {
  fill: #F47522;
}
.c-card-quotes__arrow-next.slick-disabled svg path,
.c-card-quotes__arrow-prev.slick-disabled svg path {
  fill: rgba(192, 197, 201, 0.35);
}
.c-card-quotes__arrow-next {
  transform: rotate(180deg);
}
.c-card-quotes__arrow-next img,
.c-card-quotes__arrow-next svg {
  margin-left: 12px;
}

.c-card-quotes__dots .slick-dots {
  position: relative;
  bottom: unset;
}
.c-card-quotes__dots .slick-dots li button:before {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 50%;
  width: 14px;
  height: 14px;
  content: '';
  opacity: 1;
  background-color: #C0C5C9;
  transition: all 0.3s ease;
}
.c-card-quotes__dots .slick-dots li.slick-active button:before {
  border-radius: 7px;
  width: 26px;
  height: 14px;
  left: -5px;
  content: '';
  opacity: 1;
  background-color: #F47522;
}
</style>