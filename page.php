/* Code to display Single Post content */
<?php get_header(); ?>
    <main>
        <section>
            <div class="container pt-5 pb-5 d-flex justify-content-center">
            <div class=" flex-column col-md-8 ">
            <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" >
                <h1 class="heading pt-2 pb-2"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
                
            </div>
        </section>
    </main>
<?php get_footer(); ?>