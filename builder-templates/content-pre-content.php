<?php
/**
 * Content-pre-content
 *
 * @package  siliconova
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$pre_content_title = get_sub_field('title');
$pre_content_btn = get_sub_field( 'link' ); 
if($pre_content_title) { ?>
<!-- Pre-content start -->
<section class="pre-content">
    <div class="container pre-content__container">
        <h1 class="pre-content__title"><?php echo $pre_content_title; ?></h1>
        <?php  
        if ( $pre_content_btn ) {
        $link_url = $pre_content_btn['url'];
        $link_title = $pre_content_btn['title'];?>
        <div class="pre-content__button">
            <a class="arrow" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
        </div>
        <?php } ?>
    </div>
</section>
<!-- Pre-content end -->
<?php }