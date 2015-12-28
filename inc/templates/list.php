<div class="portfolio-s-loop portfolio-s-loop-wrapper">
  начало блока
  	<?php

    if ( $query->have_posts() ) {
      	while ( $query->have_posts() ) {
      		$query->the_post();
      		echo '<li>' . get_the_title() . '</li>';
      	}
      } else {
      	echo 'нет постов';
      }

  	?>
</div>
