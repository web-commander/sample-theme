<?php get_header(); ?>
          <div class="col-md-8 blog-main">
            <h1>
              <?php
              // カテゴリ名を取得
              $category = get_the_category();
              echo $category[0]->cat_name;
              ?>
            </h1>
            <section class="archive">
            <ul>
              <?php if (have_posts()): while (have_posts()) : the_post(); ?>
              <li>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
              <?php endwhile;endif; ?>
            </ul>
            <nav class="pagination-area">
              <?php //the_posts_pagination(); 
              ?>
            </nav>
            </section>
          </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>