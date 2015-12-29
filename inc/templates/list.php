<div class="portfolio-s-loop portfolio-s-list">

  <?php while ( $query->have_posts() ): $query->the_post(); ?>
    <?php if( has_post_thumbnail() ): ?>
        <div class="portfolio-s-loop-item">
          <div class="row">
            <div class="col-md-9 col-xs-10">
              <a href="<?php the_permalink(); ?>" class="post-link-portfolio">
                <h2><?php echo get_the_title() ;?></h2>
              </a>
              <div class="portfolio-excerpt-s">
                <?php if( has_excerpt()): ?>
                	<?php the_excerpt(); ?>
                <?php else: ?>
                	<?php
                    $data = get_post(get_the_ID());
                    echo strip_tags(mb_substr($data->post_content, 0, 256, 'UTF-8'));
                   ?>
                <?php endif; ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Подробнее...</a>
            </div>
            <div class="col-md-3 col-xs-2">
              <a href="<?php the_permalink(); ?>" class="thumbnail">
                <?php the_post_thumbnail(); ?>
              </a>
            </div>

          </div>
        </div>

    <?php else: ?>
      <div class="portfolio-s-loop-item">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <h2><?php echo get_the_title() ;?></h2>
          </div>
        </div>
      </div>
    <?php endif; ?>

  <?php	endwhile; ?>

</div>
