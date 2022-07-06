<?php
/**
 * Content-map
 *
 * @package  siliconova
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$map = get_sub_field('map');?>

<section id="map" class="map">
    <?php echo $map; ?>
</section>