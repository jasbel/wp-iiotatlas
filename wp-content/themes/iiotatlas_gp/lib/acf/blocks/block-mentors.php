<?php
/**
 * Block Name: Our mentors
 *
 * This is the template that displays the Our mentors
 */

//ACF personalize
$mentors_title = get_field('mentors_title') ? get_field('mentors_title') : 'Nuestro Equipo';
$mentors_items = get_field('mentors_items') ? get_field('mentors_items') : '';
// $mentors_link = get_field('mentors_link') ? get_field('mentors_link') : '';

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-mentors <?php echo $align_class; ?>">
    <div class="container">
        <h2 class="b-mentors__title"><?php echo $mentors_title;?> </h2>

        <div class="b-mentors__item-container">
            <div class="row gx-0">
                <?php if(!empty($mentors_items)): ?>
                <?php foreach( $mentors_items as $item ):
                    $image = $item['image'];
                    $name = $item['name'];
                    $position = $item['position'];
                    $description = $item['description'];
                    ?>

                    <div class="col-md-4 ">
                        <div class="b-mentors__item">
                            <div class="b-mentors__item-icon"></div>
                            <figure class="b-mentors__item-image">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </figure>
                            <h4 class="b-mentors__item-name" ><?php echo $name;?></h4>
                            <h6 class="b-mentors__item-position"><?php echo $position;?></h6>
                            <p class="b-mentors__item-description"><?php echo $description;?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <!-- 
                <div class="b-mentors__btn-container">
                    <a class="btn btn--primary b-mentors__btn" href=" <?php echo esc_url($mentors_link['url']);?> "  target="<?php echo esc_attr( $mentors_link['target'] ); ?>" >
                        <?php echo esc_html($mentors_link['title']);?>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</section>
