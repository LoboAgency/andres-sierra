<?php get_header() ?>
<?php the_post() ?>
    <section id="main">
        <section id="contact">
            <div class="container-fluid">
                <div class="header">
                    <div class="title"><?php the_title() ?></div>
                    <div class="description"><?php echo the_field('description') ?></div>
                </div>
                <div class="form"><?php the_content() ?></div>
            </div>
        </section>
    </section>
<?php get_footer() ?>