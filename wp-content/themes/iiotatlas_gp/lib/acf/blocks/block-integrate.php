<?php
/**
 * Block Name: Integrate
 *
 * This is the template that displays the Integrate
 */

 //ACF personalize
$integrate_title = get_field('integrate_title') ? get_field('integrate_title') : '';
$integrate_description = get_field('integrate_description') ? get_field('integrate_description') : '';
$integrate_items = get_field('integrate_items') ? get_field('integrate_items') : '';
$integrate_ola = get_field('integrate_ola');

$title_space = !$integrate_ola ?: "b-integrate__title--space-bottom";
$pos_ola = !$integrate_ola ?: "b-integrate--ola-bottom";
$pos_item_ola = !$integrate_ola ?: "b-integrate__ola--bottom";
$ola_name = !$integrate_ola ? "ola.svg":"ola-bottom.svg";

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-integrate <?php echo $pos_ola.' '.$align_class; ?>">
    <figure class="b-integrate__ola ola <?php echo $pos_item_ola;?>">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/<?php echo $ola_name;?>">
    </figure>

    <div class="container">
        <h3 class="subtitle b-integrate__title <?php echo $title_space;?>"><?php echo $integrate_title;?></h3>
    </div>

    <?php if(!empty($integrate_items)): ?>
    <div class="b-integrate__items integrate-slider">

        <?php foreach( $integrate_items as $item ):
            $image = $item['image'] ?: [
                'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
                'alt' => 'default',
            ];
            ?>
            <div class="b-integrate__item">
                <figure class="b-integrate__figure">
                    <img class="b-integrate__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </figure>
            </div>
        <?php endforeach; ?>

    </div>

    <?php endif; ?>

    <!-- <script>
        jQuery(document).ready(function ($) {
            jQuery('.integrate-slider').slick();
        }
    </script> -->
</section>
