<?php
/**
 * Block Name: We
 *
 * This is the template that displays the we
 */

//ACF personalize
$we_title = get_field('we_title') ? get_field('we_title') : 'Quienes Somos';
$we_description = get_field('we_description') ? get_field('we_description') : '';
$we_video = get_field('we_video') ? get_field('we_video') : [
    'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
    'alt' => 'default',
];
$we_image = get_field('we_image') ? get_field('we_image') : [
    'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
    'alt' => 'default',
];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<main id="<?php echo $id; ?>" class="b-we <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-6" data-daws="">
                <h2 class="title b-we__title"> <?php echo $we_title ?></h2>
            </div>
            <div class="col-md-7 col-lg-6" data-daws="">
                <p class="b-we__description"> <?php echo $we_description ?> </p>
            </div>
        </div>
        <div class="b-we__container-media" data-daws="">
            <div class="b-we__container-video">
                <div class="b-we__video">
                    <img src="<?php echo esc_url($we_video['url']); ?>" alt="<?php echo esc_attr($we_video['alt']); ?>" />
                </div>
            </div>
            <figure class="b-we__container-image">
                <img class="b-we__image" src="<?php echo esc_url($we_image['url']); ?>" alt="<?php echo esc_attr($we_image['alt']); ?>" />
            </figure>
        </div>
    </div>
</main>
