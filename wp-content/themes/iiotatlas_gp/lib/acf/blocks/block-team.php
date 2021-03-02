<?php
/**
 * Block Name: Our Team
 *
 * This is the template that displays the Our Team
 */

//ACF personalize
$team_title = get_field('team_title') ? get_field('team_title') : 'Nuestro Equipo';
$team_items = get_field('team_items') ? get_field('team_items') : '';
$team_bkg = get_field('team_bkg') ? get_field('team_bkg') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-team <?php echo $align_class; ?>" style="background-image: url(<?php echo $team_bkg?>);">
        <div class="container">
        <h2 class="title b-team__title"><?php echo $team_title;?> </h2>

        <div class="row b-team__item-container">
            <?php if(!empty($team_items)): ?>
            <?php foreach( $team_items as $item ):
                $image = $item['image'];
                $name = $item['name'];
                $position = $item['position'];
                $description = $item['description'];
                ?>

                <div class="col-md-6 ">
                    <div class="b-team__item">
                        <figure class="b-team__item-figure">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?> /assets/images/default-min.png" alt="default"> -->
                        </figure>
                        <h4 class="subtitle-small b-team__item-name" ><?php echo $name;?></h4>
                        <h6 class="description-small b-team__item-position"><?php echo $position;?></h6>
                        <p class="description b-team__item-description"><?php echo $description;?></p>
                        <!-- TODO: cambiar de div a i , o usar iconos distintos -->
                        <div class="b-team__social-container">
                            <a class="b-team__social-icon" href="#!" target="_blank">
                                <div class="icon icon__facebook"></div>
                            </a>
                            <a class="b-team__social-icon" href="#!" target="_blank">
                                <div class="icon icon__youtube"></div>
                            </a>
                            <a class="b-team__social-icon" href="#!" target="_blank">
                                <div class="icon icon__linkedin"></div>
                            </a>
                            <a class="b-team__social-icon" href="#!" target="_blank">
                                <div class="icon icon__github"></div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
