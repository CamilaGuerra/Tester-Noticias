<?php get_header(); ?> 

<div class="container-fluid bg-gris">
    <div class="row">

        <div class="col-md-10 mx-auto bg-blanco py-5">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-4 responsive-uno">
                        <?php the_field('galeria_de_imagenes'); ?> 
                    </div>
                    <div class="col-md-4">  
                        <h4><?php the_field('marca'); ?> </h4>
                        <h1><?php the_title(); ?></h1>
                        <h2>$<?php the_field('precio'); ?></h2> 
                    </div>
                    <div class="col-md-4">

                        <h3>Características del producto</h3>
                        <p><strong>Alto: <?php the_field('alto'); ?></strong>cm</p>
                        <p><strong>Potencia: <?php the_field('potencia'); ?></strong></p>
                        <p><strong>Conexion bluetooth: <?php the_field('conexion_bluetooth'); ?></strong></p>
                        <p><strong>Entradas RCA: <?php the_field('entradas_rca'); ?></strong></p>

                        <a class="btn btn-primary" href="<?=$_SERVER["HTTP_REFERER"]?>">Ver producto</a>
                    </div>
                <?php endwhile; ?> 
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>

    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>