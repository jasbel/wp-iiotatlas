<?php
/**
 * Block Name: Our Services
 *
 * This is the template that displays the Our Services
 */

$services_title = get_field('services_title') ? get_field('services_title') : 'Servicios y Proyectos';
$services_items = get_field('services_items') ? get_field('services_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-services <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="b-services__title"><?php echo $services_title;?></h2>
        <div class="row">

            <?php if(!empty($services_items)): ?>
            <?php foreach( $services_items as $item ):
                $image = $item['image'];
                $description = $item['description'];
                ?>
                 <div class="col-md-4">
                    <figure class="b-services__image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                    <p class="b-services__description"><?php echo $description; ?></p>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>

           
        </div>
    </div>
</section>
