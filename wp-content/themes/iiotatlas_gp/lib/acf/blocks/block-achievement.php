<?php
/**
 * Block Name: achievement Us
 *
 * This is the template that displays the achievement Our
 */

//ACF personalize
$achievement_title = get_field('achievement_title') ? get_field('achievement_title') : '';
$achievement_content = get_field('achievement_content') ? get_field('achievement_content') : '';
$achievement_image = get_field('achievement_image') ? get_field('achievement_image') : get_stylesheet_directory_uri()."/assets/images/default-min.png";
$achievement_items = get_field('achievement_items') ? get_field('achievement_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-achievement <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 b-achievement__content">
                <h2 class="title b-achievement__title"> <?php echo $achievement_title;?> </h2>
                <div class="description b-achievement__description "> <?php echo $achievement_content;?> </div>
            </div>

            <div class="col-lg-7">
                <?php if(!empty($achievement_items)): ?>
                <figure class="b-achievement__figure">
                    <img class="b-achievement__image" src="<?php echo esc_url($achievement_image); ?>"/>
                </figure>
                <div class="b-achievement__items">
                    <?php foreach( $achievement_items as $item ):
                        $title = $item['title'];
                        $description = $item['description'];
                        ?>
                        <div class="b-achievement__item ">
                            <h2 class="b-achievement__item-title"><?php echo $title;?></h2>
                            <p class="b-achievement__item-description"><?php echo $description;?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
