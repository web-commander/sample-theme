<?php get_header(); ?>

          <div class="col-md-8 blog-main">
          <?php 
            if( have_posts() ): ?>
                <h1 class="my-3">「<?php echo get_search_query(); ?>」の検索結果</h1>
          <?php while( have_posts() ):
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
