<?php
/**
 * Custom functions
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
function builder_template(){
	if ( have_rows( 'builder' ) ) { while ( have_rows( 'builder' ) ) 
		{ the_row();		
            if( get_row_layout() == 'banner'){
				get_template_part('builder-templates/content-banner');
            } else if( get_row_layout() == 'special'){
				get_template_part('builder-templates/content-special');
            } else if( get_row_layout() == 'patients'){
				get_template_part('builder-templates/content-patients');
			} else if( get_row_layout() == 'pre_content'){
				get_template_part('builder-templates/content-pre-content');
            } else if( get_row_layout() == 'about'){
				get_template_part('builder-templates/content-about');
            } else if( get_row_layout() == 'cooperation'){
				get_template_part('builder-templates/content-cooperation');
            } else if( get_row_layout() == 'dentures'){
				get_template_part('builder-templates/content-dentures');
            } else if( get_row_layout() == 'contact'){
				get_template_part('builder-templates/content-contact');
            } else if( get_row_layout() == 'map'){
				get_template_part('builder-templates/content-map');
            }					
			
		}	

	}

}


