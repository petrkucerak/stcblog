<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') . get_css_name();?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo get_bloginfo('name'); ?> <?php wp_title('| ', true,'left'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body class="ms-Fabric">
        <?php get_header(); ?>
               
        <main class="main post">
            <header class="main__header post__header">
                <h1><?php the_post(); the_title(); ?></h1>
                <div class="post__header__meta">
                    <div class="post__header__meta__date__group">
                        <span class="post__header__meta__date"><?php echo get_the_date(); ?></span>
                        <span>•</span>
                        <span class="post__header__meta__category"><?php echo the_category(', '); ?></span>
                    </div>
                    <?php if(get_the_tags() != ''):?>
                        <span class="post__header__meta__tags">
                            <?php the_tags('',' ',''); ?>
                        </span>  
                    <?php endif;?>    
                </div>
            </header> 

            <article class="post__content">
                <?php the_content(); ?>
            </article>

            <footer class="post__footer">
                <section class="post__footer__author">
                    <div class="post__footer__author__photo"><?php echo get_avatar( get_the_author_meta( 'ID' )); ?></div>
                    <div class="post__footer__author__data">
                        <a rel="author" class="post__footer__author__data__name" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_meta('display_name'); ?></a>
                        <p class="post__footer__author__data__description"><?php the_author_meta('description'); ?> </p>
                    </div>
                </section>
            </footer>  
        </main>

        <?php get_footer(); ?>
    </body>
</html>