<?php
/**
 * Content-about
 *
 * @package  siliconova
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$about_image_top = get_sub_field('image');
$about_content = get_sub_field('content');
$about_service = get_sub_field('service');
// var_dump($about_service); ?>
<!-- About start -->
<section class="about">
    <div class="about__container container">
        <div class="about__top">
            <div class="about__wrap">
                <?php if($about_image_top){  echo wp_get_attachment_image($about_image_top, 'full'); }?> 
            </div>
            <div class="about__contetn">
                <?php if($about_content["title"]) { ?><h3 class="about__contetn_title">
                    <?php echo $about_content["title"]; ?>
                </h3><?php } ?>
                <?php if($about_content["descr"]) { ?><p class="about__contetn_descr">
                    <?php echo $about_content["descr"]; ?>
                </p><?php } ?>
                <?php
                $link = $about_content["link"];
                if ( $link ) {
                $link_url = $link['url'];
                $link_title = $link['title']; ?> 
                <div class="about__contetn_button">
                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target=""><?php echo esc_html( $link_title ); ?></a>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="about__bottom">
            <div class="about__bottom_text">
                <?php if($about_service["title"]) { ?><h4 class="about__bottom_text-title"><?php echo $about_service["title"]; ?></h4><?php } ?>
                <?php if($about_service["sub_title"]) { ?><p class="about__bottom_text-descr"><?php echo $about_service["sub_title"]; ?></p><?php } ?>
            </div>
            <div class="about__bottom_img">
                <?php if($about_service["img"]){  echo wp_get_attachment_image($about_service["img"], 'full'); }?> 
            </div>
        </div>
    </div>
</section>
<!-- About end -->