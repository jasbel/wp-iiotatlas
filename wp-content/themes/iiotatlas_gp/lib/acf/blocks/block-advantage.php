<?php
/**
 * Block Name: Advantage Us
 *
 * This is the template that displays the advantage Us
 */

 //ACF personalize
$advantage_title = get_field('advantage_title') ? get_field('advantage_title') : '';
$advantage_description = get_field('advantage_description') ? get_field('advantage_description') : '';
$advantage_items = get_field('advantage_items') ? get_field('advantage_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-advantage <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="b-advantage__title"> <?php echo $advantage_title;?> </h2>
        <p class="b-advantage__description"> <?php echo $advantage_description;?> </p>

        <div class="row gx-0 b-advantage__item-container">

        <?php if(!empty($advantage_items)): ?>
            <?php foreach( $advantage_items as $item ):
                $icon = $item['icon'];
                $title = $item['title'];
                $description = $item['description'];
                ?>
                <div class="col-md-4 ">
                    <div class="b-advantage__item">
                        <figure class="b-advantage__item-image">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        </figure>
                        <h4 class="b-advantage__item-title" ><?php echo $title;?></h4>
                        <p class="b-advantage__item-description"><?php echo $description;?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
