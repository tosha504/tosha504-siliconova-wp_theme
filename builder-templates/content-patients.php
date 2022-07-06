<?php
/**
 * Content-patients
 *
 * @package  siliconova
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$title = get_sub_field('title');
$images = get_sub_field('images');
$descr_title = get_sub_field('descr_title');
$descr = get_sub_field('descr');
if(!empty($title)){ ?> 
    <section class="patients">
        <div class="patients__container container">
            <div class="patients__box-top">
                <?php if($title);{ ?><h2 class="patients__box-top_title"><?php echo $title; ?></h2><?php } ?>
                <?php
                $link = get_sub_field( 'link' );
                if ( $link ) {
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    ?>
                    <a class="patients__box-top arrow" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php } ?>
            </div>
            <div class="patients__box-bottom">
                <div class="patients__box-bottom_images">
                    <?php foreach ($images as $image) { ?>
                        <div>
                            <?php if( $image["image"]){echo wp_get_attachment_image( $image["image"], 'medium_large'); }  ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="patients__box-bottom_descr">
                    <?php if($descr_title);{ ?><h3 class="patients__box-bottom_title"><?php echo $descr_title; ?></h3><?php } ?>
                    <?php if($descr);{ ?><p class="patients__box-bottom_descrption"><?php echo $descr; ?></p><?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?> 