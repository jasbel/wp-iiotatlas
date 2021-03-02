<?php
/**
 * Block Name: Our MVsion
 *
 * This is the template that displays
 */

$mvsion_image_mission = get_field('mvsion_image_mission') ? get_field('mvsion_image_mission') : '';
$mvsion_title_mission = get_field('mvsion_title_mission') ? get_field('mvsion_title_mission') : '';
$mvsion_description_mission = get_field('mvsion_description_mission') ? get_field('mvsion_description_mission') : '';
$mvsion_image_vision = get_field('mvsion_image_vision') ? get_field('mvsion_image_vision') : '';
$mvsion_title_vision = get_field('mvsion_title_vision') ? get_field('mvsion_title_vision') : '';
$mvsion_description_vision = get_field('mvsion_description_vision') ? get_field('mvsion_description_vision') : '';

$mvsion_ola = get_field('mvsion_ola');

$title_space = !$mvsion_ola ?: "b-mvsion__title--space-bottom";
$pos_ola = !$mvsion_ola ?: "b-mvsion--ola-bottom";
$pos_item_ola = !$mvsion_ola ?: "b-mvsion__ola--bottom";
$ola_name = !$mvsion_ola ? "ola.svg":"ola-bottom.svg";

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-mvsion <?php echo $align_class; ?>">
    <figure class="b-mvsion__ola ola <?php echo $pos_item_ola;?>">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/<?php echo $ola_name;?>">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="b-mvsion__item b-mvsion__item--mission">
                    <figure class="b-mvsion__figure">
                        <img src="<?php echo esc_url($mvsion_image_mission['url']); ?>" alt="<?php echo esc_attr($mvsion_image_mission['alt']); ?>" />
                    </figure>
                    <h1 class="title b-mvsion__title"><?php echo $mvsion_title_mission;?></h1>
                    <p class="description b-mvsion__description"><?php echo $mvsion_description_mission;?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="b-mvsion__item b-mvsion__item--vision">
                    <figure class="b-mvsion__figure">
                        <img src="<?php echo esc_url($mvsion_image_vision['url']); ?>" alt="<?php echo esc_attr($mvsion_image_vision['alt']); ?>" />
                    </figure>
                    <h1 class="title b-mvsion__title"><?php echo $mvsion_title_vision;?></h1>
                    <p class="description b-mvsion__description"><?php echo $mvsion_description_vision;?></p>
                </div>
            </div>
        </div>
    </div>
</section>