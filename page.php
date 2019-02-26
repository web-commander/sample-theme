<?php get_header(); ?>

          <div class="col-md-8 blog-main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="breadcrumbs">
            <?php
              // パンくずリスト取得
              $separator = ' ＞ ';
              $output = '<a href="' .home_url() .'">' .'HOME' .'</a>';
              foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) {
                $output .=    $separator .'<a href="' . get_page_link( $parid ) . '" title="' 
                . esc_attr( sprintf( __( "View all posts in %s" ), get_page($parid)->post_title ) ) 
                . '">' . get_page($parid)->post_title . '</a>' ;
              }
              $output .= $separator;
              echo $output;
            ?> <?php the_title(); ?>
            </div>
            <?php the_title('<h1 class="mt-3">','</h1>'); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
