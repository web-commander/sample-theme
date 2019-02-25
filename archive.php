<?php get_header(); ?>

          <div class="col-md-8 blog-main">
          <?php if ( have_posts() ) : ?>
            <header class="archive-header">
              <h1 class="archive-title"> <?php
                if ( is_day() ) :
                  // 必要に応じてフォーマッタを使用
                  printf( '日別アーカイブ：' . '<span>' . get_the_date() . '</span>' );
                elseif ( is_month() ) :
                  // 必要に応じてフォーマッタを使用
                  printf( '月別アーカイブ：' . '<span>' . get_the_date() . '</span>' );
                elseif ( is_year() ) :
                  // 必要に応じてフォーマッタを使用
                  printf( '年別アーカイブ：' . '<span>' . get_the_date() . '</span>' );
                elseif ( is_tag() ) :
                   printf(  '<span>' . single_tag_title('タグ：') . '</span>' );
                endif;
          ?> </h1>
          </header><!-- .archive-header -->
          <?php
          /* Start the Loop */
          while ( have_posts() ) : the_post(); ?>
              <article class="py-2">
              <header class="entry-header">
                <?php the_title( '<h3 class="entry-title">','</h3>' ); ?>
              </header>
              <div class="entry-content">
                <?php the_content( '続きを読む' ); ?>
              </div>
              </article>
              <?php endwhile; ?>
            <?php else : ?>
          <header class="archive-header">
           <h1 class="archive-title"> <?php
             printf( 'アーカイブ' );
            ?> </h1>
        </header><!-- .archive-header -->
        <p>該当記事なし。</p>
        <?php endif; ?>
      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>