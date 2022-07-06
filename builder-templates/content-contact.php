<?php
/**
 * Content-cooperation
 *
 * @package  siliconova
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$pre_footer = get_field('pre_footer', 'options');
$logo = $pre_footer['logo'];
$offer = $pre_footer['offer'];
$phone = $pre_footer['phone'];
$mail = $pre_footer['mail'];
$address = $pre_footer['address'];
$pre_footer_form = get_field('pre_footer_form', 'options');
$short_code = $pre_footer_form['short_code']; 
$socials_imges = get_sub_field('socials');
$title = get_sub_field('title'); ?>
<section class="contact">
		<div class="contact__container container">
			<div class="contact__left">
				<?php if( $logo){  echo wp_get_attachment_image( $logo, 'full'); }?>
				<?php if($offer){ ?><p class="contact__offer"><?php echo $offer; ?></p><?php } ?>
				<?php if($phone){ ?>
					<div class="contact_phone">
						<a href="tel:+<?php echo $phone; ?>"><?php echo $phone; ?></a><?php } ?>
					</div>
				<?php if($mail){ ?>
					<div class="contact_mail">
						<a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a><?php } ?>
					</div>
				<?php if($address){ ?><p class="contact__address"><?php echo $address; ?></p><?php } ?>
                <div class="contact__socials">
				<?php foreach ($socials_imges as $socials_img) {?>
					<div class="contact__socials_img">
						<a href="<?php echo $socials_img['link']; ?>" target="__blank">
							<?php  echo wp_get_attachment_image( $socials_img['image'], 'full'); ?>
						</a>
					</div>
				<?php } ?>
			</div>
			</div>
		
				<div class="contact__right">
					<?php if($title){ ?><h3 class="contact__right__title"><?php echo $title; ?></h3><?php } ?>
					<?php if($short_code){ echo do_shortcode($short_code); } ?>
				</div>
			
		</div>
	</section>
   