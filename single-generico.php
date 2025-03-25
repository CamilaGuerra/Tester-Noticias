<?php get_header(); ?> 

<div class="container-fluid">
    <div class="row">

        <div class="col-md-10 mx-auto">
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-4 responsive-uno">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                    </div>
                    <div class="col-md-8">  
                        <h1> <?php the_title(); ?> </h1>
                        <p> <?php the_content(); ?> </p>

                        <a class="btn btn-primary" href="<?=$_SERVER["HTTP_REFERER"]?>">Atras</a>
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