<?php
/**
 * Block Name: Functionality
 *
 * This is the template that displays the functionality
 */

//ACF personalize
$functionality_title = get_field('functionality_title') ? get_field('functionality_title') : '';
$functionality_items = get_field('functionality_items') ? get_field('functionality_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-functionality <?php echo $align_class; ?>">
    <figure class="b-functionality__ola ola ">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/ola.svg">
    </figure>
    <div class="container">
        <h2 class="title b-functionality__title"> <?php echo $functionality_title;?> </h2>

        <?php if(!empty($functionality_items)): ?>
        <?php $i=0;?>
        <?php foreach( $functionality_items as $item ):
            $icon = $item['icon'] ?: get_stylesheet_directory_uri()."/assets/images/icon-functionality.png";
            $title = $item['title'];
            $subtitle = $item['subtitle'];
            $content = $item['Content'];
            $image = $item['image'] ?: [
                'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
                'alt' => 'default',
            ];
            $i++;
            ?>
            <div class="row b-functionality__item">
                <div class="col-md-5 col-lg-6 order-2  <?php echo ($i % 2 == 0) ? 'order-md-1':'';?> ">
                    <figure class="b-functionality__item-figure <?php echo ($i % 2 == 0) ? 'b-functionality__item-figure--left':'';?>">
                        <img class="b-functionality__item-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </figure>
                </div>
                <div class="col-md-5 col-lg-6 order-1 <?php echo ($i % 2 == 0) ? 'order-md-2':'';?> ">
                    <div class="b-functionality__item-content <?php echo ($i % 2 == 0) ? 'b-functionality__item-content--even':'';?>">
                        <figure class="b-functionality__item-icon">
                            <img src="<?php echo esc_url($icon); ?>" />
                        </figure>
                        <h2 class="subtitle b-functionality__item-title"> <?php echo $title;?> </h2>
                        <h5 class="subtitle-smaller b-functionality__item-subtitle"><?php echo $subtitle;?> </h5>
                        <p class="description b-functionality__item-description"><?php echo $content;?> </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>

    </div>
</section>
