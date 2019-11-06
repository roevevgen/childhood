
<?php
/*
Template Name: Наша История
 */
?>

<?php
get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('history', 2); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('de_1', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('text_1', 2); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('im_1'); ?>" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('im_2'); ?>" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('de_2', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('text_2', 2); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('de_3', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('text_3', 2); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('im_3'); ?>" alt="мир детства">
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
