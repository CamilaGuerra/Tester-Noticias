<?php get_header(); ?> 

<?php
/*
Template Name: Productos
*/
?>

<!-- Productos  -->
<div class="container-fluid bg-gris py-5">
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=producto&showposts=3&paged=$paged"); ?>
                <?php while (have_posts()) : the_post(); ?> 

                    <div class="col-md-3 p-3">
                        <div class="bg-blanco p-3 text-center producto">
                            <div class="img-producto">
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                            </div>

                            <h5><?php the_field('marca'); ?></h5>
                            <h4><?php the_title(); ?></h4>
                            <h1>$<?php the_field('precio'); ?></h1>
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Ver producto</a>
                        </div>
                    </div>
                <?php endwhile; ?> 
                <div class="paginacion">
                    <?php wp_pagenavi(); ?>
                </div>
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
</div>

<?php get_sidebar(); ?> 
<?php get_footer(); ?>