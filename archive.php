<?php get_header(); ?>

<div class="content">
    アーカイブページです。

    <?php while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endwhile; ?>

    <?php echo paginate_links(); ?>
</div>

<?php get_footer() ?>