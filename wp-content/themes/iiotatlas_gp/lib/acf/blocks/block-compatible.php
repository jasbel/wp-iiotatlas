<?php
/**
 * Block Name: Compatible Us
 *
 * This is the template that displays the compatible Us
 */

 //ACF personalize
$compatible_title = get_field('compatible_title') ? get_field('compatible_title') : '';
$compatible_items = get_field('compatible_items') ? get_field('compatible_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-compatible <?php echo $align_class; ?>" style="background-image:url(...)">
    <div class="container">
        <h2 class="title b-compatible__title"> <?php echo $compatible_title;?> </h2>

        <?php if(!empty($compatible_items)): ?>
        <div class="b-compatible__items">

            <?php foreach( $compatible_items as $item ):
                $image = $item['image'];
                ?>
                <figure class="b-compatible__item-figure">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </figure>
            <?php endforeach; ?>

        </div>
        <?php endif; ?>
    </div>
</section>
