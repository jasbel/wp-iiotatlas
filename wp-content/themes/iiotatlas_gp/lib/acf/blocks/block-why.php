<?php
/**
 * Block Name: Why Us
 *
 * This is the template that displays the Why Us
 */

 //ACF personalize
$why_title = get_field('why_title') ? get_field('why_title') : '';
$why_description = get_field('why_description') ? get_field('why_description') : '';
$why_items = get_field('why_items') ? get_field('why_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-why <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="b-why__title"> <?php echo $why_title;?> </h2>
        <p class="b-why__description"> <?php echo $why_description;?> </p>

        <div class="row gx-0 b-why__item-container">

        <?php if(!empty($why_items)): ?>
            <?php foreach( $why_items as $item ):
                $icon = $item['icon'];
                $title = $item['title'];
                $description = $item['description'];
                ?>
                <div class="col-md-4 ">
                    <div class="b-why__item">
                        <figure class="b-why__item-image">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        </figure>
                        <h4 class="b-why__item-title" ><?php echo $title;?></h4>
                        <p class="b-why__item-description"><?php echo $description;?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
