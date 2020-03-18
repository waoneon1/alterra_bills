<?php 
    $class = "c-content u-section";
    $class .= " flex-section-" . $section['acf_fc_layout'];
?>
<section class="<?php echo $class . ' ' . $section_class ?>" id="flex-section-<?php echo $fkey ?>">
    <div class="container">
        <h2 class="text-center space[ u-mb-60 u-mb-25@sm ]"><?php echo $section['title'] ?></h2>
        <?php if ($section['description']): ?>
            <p class="c-heading"><?php echo $section['description'] ?></p>
        <?php endif ?>
       
        <?php if ($section['slider']): ?>
            <div class="c-card-slider2__wrapper">
                <a href="" class="c-slider2__arrow-prev js-slider-fullw-prev<?php echo $fkey ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow.svg" alt="" class="svg">
                </a>
                <!-- js-slider-fullw  -->
                <div class="js-slider-fullw<?php echo $fkey ?> c-card-slider2__holder c-card-slider2 overflow-hidden">
                    <?php foreach ($section['slider'] as $key => $item ): ?>
                        <div class="d-flex align-items-start">
                            <img src="<?php echo $item['image']['sizes']['bill_praktik'] ?>" 
                                srcset="<?php echo $item['image']['url'] ?> 2x" 
                                alt="<?php echo $item['image']['alt'] ?>" 
                                class="c-tab__image"
                                style="border-radius: 10px;">
                            <div class="p-5">
                                <h4><?php echo $item['title'] ?></h4>
                                <p class="mt-1 mb-5"><?php echo $item['description'] ?></p>
                            </div>  
                        </div>
                    <?php endforeach ?>
                </div>

                <a href="" class="c-slider2__arrow-next js-slider-fullw-next<?php echo $fkey ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow.svg" alt="" class="svg">
                </a>
                <!-- <div class="c-slider__dots c-slider-fullw__dots js-slider-dots"></div> -->       
            </div>
        <?php endif ?>
    </div>
</section>


<script>
jQuery(document).ready(function ($) {
    
    $('.js-slider-fullw<?php echo $fkey ?>').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        touchThreshold: 20,
        nextArrow: $('.js-slider-fullw-next<?php echo $fkey ?>'),
        prevArrow: $('.js-slider-fullw-prev<?php echo $fkey ?>')
    });
});
</script>

<style>
.c-card-slider2 {
  -webkit-box-shadow: 0 5px 17px 0 rgba(154, 154, 154, 0.46);
  box-shadow: 0 5px 17px 0 rgba(154, 154, 154, 0.46);
  border-radius: 5px;
  background-color: #ffffff;
}
.c-card-slider2__text {
  padding: 80px 60px;
}
.c-card-slider2__ornament {
  position: absolute;
  right: 50px;
  top: -60px;
  z-index: 5;
}
.c-card-slider2__wrapper {
  position: relative;
  display: flex;
  align-items: center;
  width: 90%;
  margin: auto;
}
.c-card-slider2__holder {
  /* the slides */
  /* the parent */
}
.c-card-slider2__holder .slick-slide {
  margin: 20px;
}
.c-card-slider2__holder .slick-list {
  margin: -20px;
}
.c-card-slider2__flex {
  display: flex!important;
}



.c-slider2__arrow {
  height: 44px;
  width: 90px;
  background-color: #F47522;
  position: absolute;
  bottom: 25px;
  right: 253px;
  display: flex;
}
.c-slider2__arrow-next,
.c-slider2__arrow-prev {
  width: 44px;
  height: 44px;
  background-color: white;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  -webkit-box-shadow: 0 5px 17px 0 rgba(154, 154, 154, 0.46);
  box-shadow: 0 5px 17px 0 rgba(154, 154, 154, 0.46);
  z-index: 1;
}
.c-slider2__arrow-next img,
.c-slider2__arrow-prev img,
.c-slider2__arrow-next svg,
.c-slider2__arrow-prev svg {
  margin: 0 auto;
}
.c-slider2__arrow-next svg path,
.c-slider2__arrow-prev svg path {
  fill: rgba(192, 197, 201);
}
.c-slider2__arrow-next.slick-disabled svg path,
.c-slider2__arrow-prev.slick-disabled svg path {
  fill: rgba(192, 197, 201, 0.35);
}
.c-slider2__arrow-next {
  transform: rotate(180deg);
  right: -22px;
}
.c-slider2__arrow-prev {
  left: -22px;
}



@media (max-width: 991px) {
  .c-card-slider2__text {
    padding: 35px 35px;
  }
  .c-card-slider2__ornament {
    top: -35px;
    width: 80px;
  }
}
@media (max-width: 767px) {
  .c-card-testi__col {
    padding-left: 15px;
    padding-right: 15px;
  }
  .c-card-slider2__ornament {
    display: none;
  }
  .c-card-slider2__flex {
    display: block!important;
  }
  .c-card-slider2__wrapper {
    width: 90%;
    max-width: 350px;
  }
}
</style>