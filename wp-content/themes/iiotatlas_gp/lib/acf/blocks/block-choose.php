<?php
/**
 * Block Name: choose Us
 *
 * This is the template that displays the choose Our
 */

//ACF personalize
$choose_title = get_field('choose_title') ? get_field('choose_title') : '';
$choose_subtitle = get_field('choose_subtitle') ? get_field('choose_subtitle') : '';
$choose_description = get_field('choose_description') ? get_field('choose_description') : '';
$choose_items = get_field('choose_items') ? get_field('choose_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-choose <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">

            <div class="col-lg-5">
                <h2 class="title b-choose__title"> <?php echo $choose_title;?> </h2>
                <h5 class="subtitle-smaller b-choose__subtitle"><?php echo $choose_subtitle;?></h5>
                <p class="description b-choose__description "> <?php echo $choose_description;?> </p>
            </div>

            <div class="col-lg-7">
                <?php if(!empty($choose_items)): ?>
                <div class="b-choose__items">
                    <?php foreach( $choose_items as $item ):
                        $image = $item['image'] ?: [
                            'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
                            'alt' => 'default',
                        ];
                        $description = $item['description'];
                        ?>
                        <div class="b-choose__item ">
                            <figure class="b-choose__item-figure">
                                <img class="b-choose__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                            <p class="b-choose__item-description"><?php echo $description;?></p>
                            <div class="b-choose__item-btn">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/arrow-right.svg">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
