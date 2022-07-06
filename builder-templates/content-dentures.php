<?php
/**
 * Content-dentures
 *
 * @package  siliconova
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$dentures_head = get_sub_field('head');
$link = $dentures_head['link'];
$dentures_content = get_sub_field('content');


?>
<section class="dentures">
    <div class="dentures__container container">
        <div class="dentures__top">
            <?php if($dentures_head['title']){?><h3 class="dentures__top_title"><?php echo $dentures_head['title']; ?></h3><?php } ?>
                <?php
                if ( $link ){
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';?>
                <div class="dentures__top_button">
                    <a class="arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                </div>
            <?php } ?>
        </div>
        <div class="dentures__bottom">
            <?php foreach ($dentures_content as $dentures_item) { ?>
                <div class="dentures__bottom_item">
                    <?php if($dentures_item['image']){  echo wp_get_attachment_image($dentures_item['image'], 'full'); }?> 
                    <div class="dentures__bottom_descr">
                        <?php if($dentures_item['descr']){?><p><?php echo $dentures_item['descr']; ?></p><?php } ?>
                    </div>
                </div> 
            <?php  } ?>
        </div>
    </div>
</section>
