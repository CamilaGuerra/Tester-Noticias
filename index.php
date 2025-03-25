<?php get_header(); ?> 


<!-- servicios -->
<div class="container-fluid">
    <div class="row">
        
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=servicios"); ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-4 responsive-uno">
                <div class="img-recortada">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                </div>
                  
                <h1> <?php the_title(); ?> </h1>
                <p> <?php the_excerpt(); ?> </p>
                <a class="btn btn-primary" href="<?php the_permalink(); ?>">leer más</a>
            </div>
        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        
    </div>
</div>
<!-- servicios -->

<!-- Productos  -->
<div class="container-fluid bg-gris py-5">
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=producto&showposts=4"); ?>
                <?php while (have_posts()) : the_post(); ?> 

                    <div class="col-md-3 p-3 columna">
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
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
</div>
<!-- Productos  -->

<!-- Somos -->
<div class="container-fluid arriba">
    <div class="container">
        <div class="row d-flex align-items-center">
            <h3>Somos</h3>
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=somos"); ?>
            <?php while (have_posts()) : the_post(); ?> 
                <div class="col-md-6">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'mar', 'title' => 'Feature image']); ?>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_excerpt(); ?> </p>
                    <a class="leer btn btn-danger" href="<?php bloginfo('template_url');?> /somos">Leer más</a>
                </div>
            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
<!-- Somos -->



<!-- Service -->
<div class="container-fluid servicioos">
    <div class="container">
        <h3>Servicios</h3>        
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=service&showposts=3"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="row d-flex align-items-center mb-3">
                <div class="col-md-5">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'mar', 'title' => 'Feature image']); ?>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_excerpt(); ?> </p>
                    <a class="leer btn btn-danger" href="<?php the_permalink(); ?>">Leer más</a>
                </div>   
            </div>    
            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>       
    </div>
</div>
<!-- Service -->

<?php get_sidebar(); ?> 
<?php get_footer(); ?>