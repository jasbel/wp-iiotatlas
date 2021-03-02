<?php
/**
 * Block Name:Architecture Us
 *
 * This is the template that displays the Architecture Our
 */

//ACF personalize
$architecture_image = get_field('architecture_image') ? get_field('architecture_image') : [
    'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
    'alt' => 'default',
];
$architecture_title = get_field('architecture_title') ? get_field('architecture_title') : 'Arquitectura';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<main id="<?php echo $id; ?>" class="b-architecture <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="title b-architecture__title"> <?php echo $architecture_title ?></h2>
        <figure class="b-architecture__figure">
            <img class="b-architecture__image" src="<?php echo esc_url($architecture_image['url']); ?>" alt="<?php echo esc_attr($architecture_image['alt']); ?>" />
        </figure>
    </div>
</main>
