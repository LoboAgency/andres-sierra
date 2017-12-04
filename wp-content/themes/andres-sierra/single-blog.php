<?php get_header(); ?>
    <section id="main">
        <section id="blog-int">
            <div class="int-blog">
                <div class="container-fluid">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="dats">
                                    <article <?php post_class( 'cf' ) ?> id="post-<?php the_ID() ?>">
                                        <h1 class="title"><?php the_title() ?></h1>
                                        <p class="date"><?php printf( __( 'Publicado <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time>', 'ted' ), get_the_time( 'Y-m-j' ), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) ), get_the_term_list( $post->ID, 'custom_cat', ' ', ', ', '' )) ?></p>
                                        <div class="description"><?php the_content() ?></div>
                                        <div>
                                            <?php wp_link_pages( array('before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ted' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' )) ?>
                                        </div>
                                        <div>
                                            <?php comments_template() ?>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="img">
                                    <?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>
                                    <img src="<?php echo $bg ?>">
                                </div>
                            </div>
                        <?php endwhile ?>
                    <?php endif ?>
                </div>
            </div>
        </section>
    </section>
<?php get_footer() ?>
