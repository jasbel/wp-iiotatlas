<?php
/**
 * Block Name: extension Us
 *
 * This is the template that displays the extension Our
 */

//ACF personalize
$extension_items = get_field('extension_items') ? get_field('extension_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-extension <?php echo $align_class; ?>">
    <div class="container">

        <?php if(!empty($extension_items)): ?>
        <?php $i=0;?>
        <?php foreach( $extension_items as $item ):
            $image = $item['image'] ?: [
                'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
                'alt' => 'default',
            ];
            $title = $item['title'];
            $subtitle = $item['subtitle'];
            $description = $item['description'];
            $i++;
            ?>
            <div class="row b-extension__item">
                <div class="col-md-5 col-lg-6 order-2  <?php echo ($i % 2 != 0) ? 'order-md-1':'';?> ">
                    <figure class="b-extension__figure">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                </div>
                <div class="col-md-5 col-lg-6 order-1 <?php echo ($i % 2 != 0) ? 'order-md-2':'';?> ">
                    <div class="b-extension__content <?php echo ($i % 2 == 0) ? 'b-extension__content--even':'';?>">
                        <h2 class="title b-extension__title"> <?php echo $title;?> </h2>
                        <h5 class="subtitle-smaller b-extension__subtitle"><?php echo $subtitle;?> </h5>
                        <p class="description b-extension__description"><?php echo $description;?> </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>
