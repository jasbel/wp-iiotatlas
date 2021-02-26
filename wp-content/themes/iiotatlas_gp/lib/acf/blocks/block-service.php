<?php
/**
 * Block Name: Our services
 *
 * This is the template that displays the About Our
 */

$service_title = get_field('service_title') ? get_field('service_title') : '';
$service_items = get_field('service_items') ? get_field('service_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-service <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="b-service__title"><?php echo $service_title;?></h2>
        <div class="row">
            <?php if(!empty($service_items)): ?>
            <?php foreach( $service_items as $item ):
                $image = $item['image'];
                ?>
                <div class="col-3">
                    <figure class="b-service__image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>