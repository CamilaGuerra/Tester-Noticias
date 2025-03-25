<?php get_header(); ?>

<?php
/*
Template Name: Trabajos realizados
*/
?>

<!-- Título  -->
<div class="container-fluid trabajos">
    <div class="row d-flex justify-content-center mascara3">
        <div class="col-md-8 text-center">
            <h2>Trabajos Realizados</h2>
        </div>
    </div>
</div>

<!-- loop de trabajos realizados  -->
<div class="container-fluid py-5">
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=trabajos-realizados&showposts=6&paged=$paged"); ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="col-md-4 p-3">
                    <div class="p-3 text-center p-trabajos">
                        <div class="img-trabajos">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                        </div>

                        <h4><?php the_title(); ?></h4>
                        <a class="btn btn-danger" href="<?php the_permalink(); ?>">Más información</a>

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

<?php get_footer(); ?>