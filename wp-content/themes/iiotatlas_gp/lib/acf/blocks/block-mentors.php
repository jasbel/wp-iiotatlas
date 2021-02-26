<?php
/**
 * Block Name: Our mentors
 *
 * This is the template that displays the Our mentors
 */

//ACF personalize
$mentor_title = get_field('mentors_title') ? get_field('mentors_title') : 'Nuestro Equipo';
$mentor_items = get_field('mentors_items') ? get_field('mentors_items') : '';
// $mentors_link = get_field('mentors_link') ? get_field('mentors_link') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-mentor <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="title b-mentor__title"><?php echo $mentor_title;?> </h2>

        <div class="b-mentor__item-container">
            <div class="row gx-0 mentor-slider">
                <?php if(!empty($mentor_items)): ?>
                <?php $i=0;?>
                <?php foreach( $mentor_items as $item ):
                    $image = $item['image']?: [
                        'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
                        'alt' => 'default',
                    ];
                    $name = $item['name'];
                    $position = $item['position'];
                    $description = $item['description'];
                    $i++;
                    ?>

                    <div class="col-md-6 col-lg-4 ">
                        <div class="b-mentor__item <?php echo ($i % 2 != 0) ?'': "b-mentor__item--even";?>">
                            <figure class="b-mentor__item-figure-icon"><img class="b-mentor__item-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icon-atlas.png"/></figure>
                            <figure class="b-mentor__item-figure">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                            <h4 class="subtitle-smaller b-mentor__item-name" ><?php echo $name;?></h4>
                            <h6 class="description-small b-mentor__item-position"><?php echo $position;?></h6>
                            <p class="description b-mentor__item-description"><?php echo $description;?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <!-- 
                <div class="b-mentor__btn-container">
                    <a class="btn btn--primary b-mentor__btn" href=" <?php echo esc_url($mentor_link['url']);?> "  target="<?php echo esc_attr( $mentor_link['target'] ); ?>" >
                        <?php echo esc_html($mentor_link['title']);?>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</section>
