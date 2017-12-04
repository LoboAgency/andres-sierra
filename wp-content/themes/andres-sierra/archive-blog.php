<?php get_header() ?>
    <section id="main">
        <section id="blog">
            <div class="container-fluid">
                <div class="header">
                    <h1 class="title-basic"><?php post_type_archive_title() ?></h1>
                    <div class="description">Quisque odio libero, sodales eu fringilla eget, rhoncus in felis. Quisque euismod, lacus eu efficitur vulputate, felis sapien dapibus enim, nec condimentum ligula eros quis elit. Aenean sit amet turpis tellus. Curabitur sollicitudin diam a nibh egestas, non eleifend magna faucibus.</div>
                    <div class="interview">Ver entrevista</div>
                </div>
                <?php if (have_posts()): ?>
                    <div class="posts">
                        <!-- <div class="container-fluid"> -->
                            <?php while (have_posts()): the_post(); ?>
                                <div class="col-lg-4 col-md-4">
                                    <div class="post">
                                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                                            <div class="content-post">
                                                <div class="img">
                                                    <?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>
                                                    <img src="<?php echo $bg ?>">
                                                </div>
                                                <div class="texts">
                                                    <p class="date"><?php printf( __( 'Publicado <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> ', 'ted' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F j, Y', 'ted' ) ), get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?></p>
                                                    <h3 class="title-post"><?php the_title() ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <div><?php the_excerpt() ?></div> -->
                                </div>
                            <?php endwhile ?>
                        <!-- </div> -->
                    </div>
                    <?php ted_page_navi() ?>
                <?php endif ?>
            </div>
        </section>
    </section>
<?php get_footer() ?>
