<?php 
get_header();

while( have_posts() ) {
    the_post(); ?>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <div class="entry-content">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
<?php }

echo paginate_links();

get_footer();