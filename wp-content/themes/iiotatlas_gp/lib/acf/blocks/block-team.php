<?php
/**
 * Block Name: Our Team
 *
 * This is the template that displays the Our Team
 */

//ACF personalize
$team_title = get_field('team_title') ? get_field('team_title') : 'Nuestro Equipo';
$team_description = get_field('team_description') ? get_field('team_description') : '';
$team_items = get_field('team_items') ? get_field('team_items') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-team <?php echo $align_class; ?>">
        <div class="container">
        <h2 class="b-team__title"><?php echo $team_title;?> </h2>

        <div class="row b-team__item-container">
            <?php if(!empty($team_items)): ?>
            <?php foreach( $team_items as $item ):
                $image = $item['image'];
                $name = $item['name'];
                $position = $item['position'];
                $description = $item['description'];
                ?>

                <div class="col-md-4 ">
                    <div class="b-team__item">
                        <figure class="b-team__item-image">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?> /assets/images/default-min.png" alt="default"> -->
                        </figure>
                        <h4 class="b-team__item-name" ><?php echo $name;?></h4>
                        <h6 class="b-team__item-position"><?php echo $position;?></h6>
                        <p class="b-team__item-description"><?php echo $description;?></p>
                        <div class="b-team__social-container">
                            <i>FB</i>
                            <i>YT</i>
                            <i>IN</i>
                            <i>Gt </i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
