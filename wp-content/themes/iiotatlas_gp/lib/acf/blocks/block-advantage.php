<?php
/**
 * Block Name: Advantage Us
 *
 * This is the template that displays the advantage Us
 */

 //ACF personalize
$advantage_title = get_field('advantage_title') ? get_field('advantage_title') : '';
$advantage_images = get_field('advantage_images') ? get_field('advantage_images') : '';
$advantage_items = get_field('advantage_items') ? get_field('advantage_items') : '';
$advantage_link = get_field('advantage_link') ? get_field('advantage_link') :  [
    'url' => '#!',
    'target' => '_self',
    'title' => 'Ver Mas',
];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-advantage <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="title b-advantage__title"> <?php echo $advantage_title;?> </h2>

        <?php if(!empty($advantage_images)): ?>
        <div class="row b-advantage__images">

            <?php foreach( $advantage_images as $item ):
                $image = $item['image'];
                ?>
                <div class="col-sm-6 col-lg-3 ">
                    <figure class="b-advantage__image-figure">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if(!empty($advantage_items)): ?>
        <div class="row b-advantage__items">

            <?php foreach( $advantage_items as $item ):
                $title = $item['title'];
                $description = $item['description'];
                ?>
                <div class="col-sm-6 col-lg-3 ">
                    <div class="b-advantage__item">
                        <h4 class="subtitle-small b-advantage__item-title" ><?php echo $title;?></h4>
                        <p class="b-advantage__item-description"><?php echo $description;?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="btn btn--primary btn--large mx-auto b-advantage__btn" href=" <?php echo esc_url($advantage_link['url']);?> "  target="<?php echo esc_attr( $advantage_link['target'] ); ?>" >
            <?php echo esc_html($advantage_link['title']);?>
        </a>
        <?php endif; ?>
    </div>
</section>
