<?php
/**
 * Block Name: floating
 *
 * This is the template that displays the floating
 */

$floating_image = get_field('floating_image') ? get_field('floating_image') : '';
// $floating_video = get_field('floating_video') ? get_field('floating_video') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];

?>
<section id="<?php echo $id; ?>" class="b-floating">
    <div class="container">
        <figure class="b-floating__content" data-daws="">
            <img class="b-floating__image" src="<?php echo esc_url($floating_image['url']); ?>" alt="<?php echo esc_attr($floating_image['alt']); ?>" />
        </figure>
        <!-- TODO: integrar la opcion para video -->
        <!-- <video class="b-floating__video" src=""></video> -->
    </div>
</section>
