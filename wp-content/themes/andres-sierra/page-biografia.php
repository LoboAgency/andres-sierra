<?php get_header() ?>
<?php the_post() ?>
    <section id="main">
        <section id="biography">
            <div class="container-fluid">
                <div class="col-lg-6 col-md-6">
                    <div class="dats">
                        <div class="title"><?php the_title() ?></div>
                        <div class="description"><?php the_content() ?></div>
                    </div>  
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="img">
                        <?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>
                        <img src="<?php echo $bg ?>" alt="Andrés Sierra">
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php get_footer() ?>