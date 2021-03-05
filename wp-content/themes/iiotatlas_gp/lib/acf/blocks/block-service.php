<?php
/**
 * Block Name: Our services
 *
 * This is the template that displays the About Our
 */

$service_title = get_field('service_title') ? get_field('service_title') : '';
$service_subtitle = get_field('service_subtitle') ? get_field('service_subtitle') : '';
$service_items = get_field('service_items') ? get_field('service_items') : '';
$service_link = get_field('service_link') ? get_field('service_link') : [
    'url' => '#!',
    'target' => '_self',
    'title' => 'Ver Mas',
];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-service <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="title b-service__title" data-daws=""><?php echo $service_title;?></h2>
        <h3 class="subtitle-small b-service__subtitle" data-daws=""><?php echo $service_subtitle;?></h3>
        
        <?php if(!empty($service_items)): ?>
        <div class="row">
            <?php foreach( $service_items as $item ):
                $image = $item['image'];
                $title = $item['title'];
                $description = $item['description'];
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3" data-daws="">
                    <figure class="b-service__item-figure">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                    <h4 class="subtitle-small b-service__item-title"><?php echo $title;?></h4>
                    <p class="description b-service__item-description"><?php echo $description;?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="btn btn--primary btn--large b-service__btn" href=" <?php echo esc_url($service_link['url']);?> "  target="<?php echo esc_attr( $service_link['target'] ); ?>" data-daws="" >
            <?php echo esc_html($service_link['title']);?>
        </a>
        <?php endif; ?>
    </div>
</section>