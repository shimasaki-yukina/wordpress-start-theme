<?php get_header(); ?>

<div class="content">
    シングルページテンプレートです。

    <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <?php previous_post_link('%link','< 前の記事へ'); ?>
    <?php next_post_link('%link','次の記事へ >'); ?>
</div>

<?php get_footer() ?>