<?php get_header(); ?>
      <div class="col-md-8 blog-main">
        <h1 class="my-3">Recent Posts</h1>
        <?php 
          if( have_posts() ):
          	while( have_posts() ):
              the_post();
        ?>
              <article id="post-<?php the_ID(); ?>" class="py-2">
              <header class="entry-header">
                <?php the_title( '<h3 class="entry-title">','</h3>' ); ?>
              </header>
              <div class="entry-content">
                <?php the_content( '続きを読む' ); ?>
              </div>
              </article>
        <?php endwhile; 
          else :
         ?> <p>表示する記事がありません。</p> <?php
         endif; 
        ?>
      </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_search_form(); ?>