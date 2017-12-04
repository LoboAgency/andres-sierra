<?php get_header() ?>
<?php /* Template Name: Plantilla Single */ ?>
<?php the_post() ?>
    <section id="main">
        <section id="post">
            <div class="container-fluid">
                <div class="col-lg-6 col-md-6">
                    <div class="dat">
                        <div class="title"><?php the_title() ?></div>
                        <div class="description"><?php the_content() ?></div>
                        <div class="interview">Ver entrevista</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-body">
                                <?php $id = get_field('id_slider') ?>
                                <?php echo do_shortcode( $id ) ?>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="img-ppal">
                        <?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>
                        <img data-toggle="modal" data-target="#myModal" src="<?php echo $bg ?>" alt="<?php the_title() ?>">
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php get_footer() ?>