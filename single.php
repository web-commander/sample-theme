<?php get_header(); ?>

          <div class="col-md-8 blog-main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="breadcrumbs">
            <?php
              // パンくずリスト取得
              $categories = get_the_category();
              $separator = ' ＞ ';
              $output = '<a href="' .home_url() .'">' .'HOME' .'</a>';
              if ( $categories ) {
                foreach( $categories as $category ) {
                $output .=  $separator .'<a href="' . get_category_link( $category->term_id ) . '" title="' 
                   . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) 
                   . '">' . $category->cat_name . '</a>' ;
                }
                $output .=  $separator;
                echo $output;
              }
            ?> <?php the_title(); ?>
          </div>
          <?php the_title('<h1 class="mt-3">','</h1>'); ?>
          <?php the_content(); ?>
          <?php comments_template( '', true ); ?>
          <?php endwhile; endif; ?>
        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>