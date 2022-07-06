<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siliconova
 */
//pre_footer
$pre_footer = get_field('pre_footer', 'options');
$logo = $pre_footer['logo'];
$offer = $pre_footer['offer'];
$phone = $pre_footer['phone'];
$mail = $pre_footer['mail'];
$address = $pre_footer['address'];
$pre_footer_form = get_field('pre_footer_form', 'options');
$title = $pre_footer_form['title'];
$text = $pre_footer_form['text'];
$short_code = $pre_footer_form['short_code'];
//footer
$socials_imges = get_field('socials', 'options');
if($pre_footer){ ?>
	<section class="pre-footer">
		<div class="pre-footer__container container">
			<div class="pre-footer__left">
				<?php if( $logo){  echo wp_get_attachment_image( $logo, 'full'); }?>
				<?php if($offer){ ?><p class="pre-footer__offer"><?php echo $offer; ?></p><?php } ?>
				<?php if($phone){ ?>
					<div class="pre-footer_phone">
						<a href="tel:+<?php echo $phone; ?>"><?php echo $phone; ?></a><?php } ?>
					</div>
				<?php if($mail){ ?>
					<div class="pre-footer_mail">
						<a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a><?php } ?>
					</div>
				<?php if($address){ ?><p class="pre-footer__address"><?php echo $address; ?></p><?php } ?>
			</div>
			<div class="pre-footer__right-wrap">
				<div class="pre-footer__right">
					<div class="border"></div>
					<?php if($title){ ?><h3 class="pre-footer__right__title"><?php echo $title; ?></h3><?php } ?>
					<?php if($text){ ?><p class="pre-footer__right__descr"><?php echo $text; ?></p><?php } ?>
					<?php if($short_code){ echo do_shortcode($short_code); } ?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	<footer id="colophon" class="footer">
		<div class="footer__container container">
			<div class="footer__socials">
				<?php foreach ($socials_imges as $socials_imge) { ?>
					<div class="footer__socials_img">
						<a href="<?php echo $socials_imge['link']; ?>" target="__blank">
							<?php  echo wp_get_attachment_image( $socials_imge['img'], 'full'); ?>
						</a>
					</div>
				<?php } ?>			
			</div>
			<div class="footer__dev">
			wykonanie:<a href="https://thenewlook.pl/" target="_blank" > THE NEW LOOK</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
