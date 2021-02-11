<?php
/**
 * Block Name: Our Clients
 *
 * This is the template that displays the About Our
 */

$client_title = get_field('client_title') ? get_field('client_title') : '';
$client_items = get_field('client_items') ? get_field('client_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-client <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="b-client__title"><?php echo $client_title;?></h2>
        <div class="row">
            <?php if(!empty($client_items)): ?>
            <?php foreach( $client_items as $item ):
                $image = $item['image'];
                ?>
                <div class="col-3">
                    <figure class="b-client__image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>