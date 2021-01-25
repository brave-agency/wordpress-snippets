<?php 

$subs = new WP_Query( 
array(
 'post_parent'    => $post->ID,
 'post_type'      => 'page',
 'posts_per_page' => -1
 )
);

if( $subs->have_posts() ) : ?>
<ul>
    <?php while( $subs->have_posts() ) : $subs->the_post(); { ?>
    <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
    <?php } endwhile; ?>
</ul>
<?php endif; wp_reset_postdata(); ?>