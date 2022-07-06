<?php
/**
 * Content-cooperation
 *
 * @package  siliconova
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$cooperation = get_sub_field('descr');
$cooperation_title = $cooperation["title"];
$cooperation_link = $cooperation["link"];
$education = get_sub_field('education');
$education_img = $education["img"];
$education_descr = $education["descr"];
$education_deadlines = $education["deadlines"];
$education_img = $education["img"]; ?>
<!-- Cooperation start -->
<section class="cooperation">
    <div class="cooperation__container container">
        <div class="cooperation__head">
            <?php if($cooperation_title){?><h3 class="cooperation__head_title"><?php echo $cooperation_title; ?></h3><?php } ?>
            <?php
            if ( $cooperation_link ){
            $link_url = $cooperation_link['url'];
            $link_title = $cooperation_link['title'];
            $link_target = $cooperation_link['target'] ? $link['target'] : '_self';?>
            <div class="cooperation__button">
                <a class="arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
            <?php } ?>
        </div>
        <div class="cooperation__bootom">
            <div class="cooperation__bootom_title">
                <?php if($education_img){  echo wp_get_attachment_image($education_img, 'full'); }?> 
                <?php if($education_descr){ ?><h5 class="cooperation__bootom_descr"><?php echo $education_descr; ?></h5><?php } ?>
            </div>
            <div class="cooperation__bootom_education">
                <?php foreach ($education_deadlines as $education_deadline) { ?>
                    <div class="cooperation__bootom_education-wrap">
                        <div class="cooperation__bootom_education-year">
                        <?php echo $education_deadline['year']; ?>
                        </div>
                        <div class="cooperation__bootom_education-small-wrap">
                            <p class="cooperation__bootom_education-date"><?php echo $education_deadline['date']; ?></p> 
                            <p class="cooperation__bootom_education-descr"><?php echo $education_deadline['description']; ?></p>
                        </div>
                    </div>
                <?php } ?> 
            </div>
        </div>
    </div>
</section>
<!-- Cooperation end -->