<?php
/**
 * Block Name: About Us
 *
 * This is the template that displays the About Our
 */

//ACF personalize
$about_image = get_field('about_image') ? get_field('about_image') : [
    'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
    'alt' => 'default',
];
$about_title = get_field('about_title') ? get_field('about_title') : 'Quienes Somos';
$about_description = get_field('about_description') ? get_field('about_description') : '';
$about_link = get_field('about_link') ? get_field('about_link') : [
    'url' => '#!',
    'target' => '_self',
    'title' => 'Ver Mas',
];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<main id="<?php echo $id; ?>" class="b-about <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <figure class="b-about__figure">
                    <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>" />
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="b-about__content">
                    <!-- <div> -->
                    <h2 class="title b-about__title"> <?php echo $about_title ?></h2>
                    <p class="b-about__description"> <?php echo $about_description ?> </p>
                    <!-- </div> -->
                    <a class="btn btn--large b-about__btn" href=" <?php echo esc_url($about_link['url']);?> "  target="<?php echo esc_attr( $about_link['target'] ); ?>" > <?php echo esc_html($about_link['title']);?> </a>
                </div>
            </div>
        </div>
    </div>
</main>
