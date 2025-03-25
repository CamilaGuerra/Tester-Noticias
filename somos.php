<?php get_header(); ?> 

<?php
/*
Template Name: Somos
*/
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">

            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=somos"); ?>
            <?php while (have_posts()) : the_post(); ?> 
                <div class="row d-flex align-items-center">
                    <div class="col-md-12">
                       <h2> <?php the_title(); ?></h2>
                    </div>
                    <div class="col-md-6 my-5">
                        <?php the_field('descripcion_de_somos'); ?>
                    </div>
                    <div class="col-md-6 my-5">         
                        <?php the_field('video_youtube'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 m-5 img-equipo">
                        <?php 
                        $image = get_field('foto_equipo');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                    
            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>  

        </div>            
    </div>
</div>


<?php get_footer(); ?>