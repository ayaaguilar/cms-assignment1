<?php
/**
 * Template Name: Single Post Template
 * Template Post Type: post
 */

get_header();

$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
$backgroundImgUrl = esc_url($backgroundImg[0]);
?>

<section class="post-masthead" style="background-image: url('<?php echo $backgroundImgUrl; ?>');">
    <div class="container">
        <h1 class="post-title"><?php the_title(); ?></h1>
    </div>
</section>

<div class="container">
    <div class="row">
        <main class="content-area col-sm-12 col-md-8 col-lg-8">
            <?php
            // The loop for displaying the post content
            while (have_posts()) : the_post();
                the_content();
                ?>
                <div class="post-meta">
                    <p>By: <?php the_author_posts_link(); ?></p>
                    <p>Date: <?php echo get_the_date(); ?></p>
                    <p>Tags: <?php the_tags('', ', '); ?></p>
                    <p>Categories: <?php the_category(', '); ?></p>
                </div>
                <?php
            endwhile;
            ?>
        </main>

        <aside class="sidebar pt-2 col-sm-12 col-md-4 col-lg-4">
            <div class="post-list">
                <?php
                // Define WP Query Parameters for the recent posts
                $the_query = new WP_Query('posts_per_page=3');
                while ($the_query->have_posts()) : $the_query->the_post();
                    // Retrieve each post's thumbnail
                    $post_thumbnail_id = get_post_thumbnail_id();
                    $post_thumbnail_url = wp_get_attachment_image_url($post_thumbnail_id, 'thumbnail');
                ?>
                    <article>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo esc_url($post_thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>">
                        </a>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
