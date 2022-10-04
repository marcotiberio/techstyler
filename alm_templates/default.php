<div class="post post--<?php $categories = get_the_category(); if ( ! empty( $categories ) ) { echo esc_html( $categories[0]->name ); }?>" title="<?php the_title(); ?>">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" aria-hidden="true" tabindex="-1">
        <div class="featuredImage">
            <?php the_post_thumbnail('large'); ?>
        </div>
    </a>
    <div class="post-category small">
        <span><?php $categories = get_the_category(); if ( ! empty( $categories ) ) { echo esc_html( $categories[0]->name ); }?></span>
        <span> / </span>
        <span><?php the_terms( $post->ID, 'format' ); ?></span>
    </div>
    <div class="post-inner">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" aria-hidden="true" tabindex="-1"><h2 class="h2 post-title"><?php the_title(); ?></h2></a>
        <a class="button button--link small post-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" aria-hidden="true" tabindex="-1">Read More</a>
        <!-- <sup>(<?php echo phpReadingTime() ?>)</sup> -->
    </div>
</div>
