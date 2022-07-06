<?php
/**
 * Content-banner
 *
 * @package  siliconova
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$content = get_sub_field('content');
$images = get_sub_field('images');
if(!empty($content)){ ?> 
    <section class="banner">
        <div class="banner__container container">
            <div class="banner__content">
                <div class="banner__content_wrap">
                    <?php if($content['image']){  echo wp_get_attachment_image($content['image'], 'full'); }?> 
                    <?php if($content['title']){ ?><h1 class="banner__content_title"><?php echo $content['title']; ?></h1> <?php } ?>
                    <?php if($content['descr']){ ?><p class="banner__content_descr"><?php echo $content['descr']; ?></p> <?php } ?>
                </div>
                <?php
                $link = $content["btn"];
                if ( $link ) {
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    ?>
                    <div class="banner__content_button">
                        <a class="btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                <?php } ?>
            </div>
            <div class="banner__images" <?php if( $images['image_bg']){ echo 'style="background: url(' .wp_get_attachment_image_url( $images['image_bg'], 'full') .')no-repeat center/cover"' ; }?>>
                <?php if( $images['img']){  echo wp_get_attachment_image( $images['img'], 'full'); }?> 
            </div>
        </div>
    </section>
<?php } ?>