<?php 
	$OkRiassunto=strpos(get_the_content(), substr(get_the_excerpt(),0,-5));
	if(get_the_excerpt()!="" And $OkRiassunto===FALSE): ?>
				<section class="entry-summary">
					<div class="callout mycallout">
  						<div class="callout-title"><?php _e( 'Riassunto', 'wpscuola' ); ?></div>
  						<?php the_excerpt(); ?>
					</div>
				</section>	
<?php endif;?>