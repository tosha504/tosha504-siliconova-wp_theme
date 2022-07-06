<?php
/**
 * Content-special
 *
 * @package  siliconova
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$top = get_sub_field('content_top');
$bottom_left = get_sub_field('content_down_left');
$bottom_right = get_sub_field('content_down_right');
if(!empty($top)){ ?> 
    <section class="special">
        <div class="container">
            <div class="special__top">
                <?php if($top['title']);{ ?><h2 class="special__top_title"><?php echo $top['title']; ?></h2><?php } ?>
                <?php if($top['descr']){ ?><p class="special__top_descr"><?php echo $top['descr']; ?></p><?php } ?>
            </div>
            <div class="special__bottom">
                <div class="special__bottom_left">
                    <?php if($bottom_left['title']);{ ?><h4 class="special__bottom_title"><?php echo $bottom_left['title']; ?></h4><?php } ?>
                    <?php
                    $link = $bottom_left['button'];
                    if ( $link ) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        ?>
                        <div class="special__bottom_button">
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                    <?php } ?>
                    <div class="special__bottom_wrap">  
                        <?php if( $bottom_left['image']){  echo wp_get_attachment_image( $bottom_left['image'], 'full'); }?> 
                    </div>
                </div>
                <div class="special__bottom_right">
                    <div class="special__bottom_wrap">
                        <?php if( $bottom_right['image']){  echo wp_get_attachment_image( $bottom_right['image'], 'full'); }?> 
                    </div>
                    <?php
                    $link = $bottom_left['button'];
                    if ( $link ) {
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    ?>
                        <div class="special__bottom_button-right">
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                    <?php } ?>
                    <?php if($bottom_right['description']){ ?><p class="special__bottom_descr"><?php echo $bottom_right['description']; ?></p><?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>