<?php
/**
 * Block Name: Information
 *
 * This is the template that displays the About Our
 */
/* Rectangle 3 */
$info_background_image = get_field('info_background_image')
    ? get_field('info_background_image')
    : '';
$info_position = get_field('info_position')
    ? '<span>' . get_field('info_position') . '</span>'
    : '';
$info_full_name = get_field('info_full_name')
    ? '<h4>' . get_field('info_full_name') . '</h4>'
    : '';
$info_description = get_field('info_description')
    ? get_field('info_description')
    : '';
$info_button = get_field('info_button') ? get_field('info_button') : '';

// Create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'block-item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="block__information <?php echo $align_class; ?>" style="background-image:url('<?php echo $info_background_image; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <div class="block__information--content" data-daws="">
                    <?php echo $info_position; ?>
                    <?php echo $info_full_name; ?>
                    <?php echo $info_description; ?>
                    <a class="btn btn--fullgreen" href="<?php echo $info_button[
                        'url'
                    ]; ?>" title="<?php echo $info_button['title']; ?>"><?php echo $info_button['title']; ?></a>
                </div>    
            </div>
        </div>
    </div>
    <div class="bubbles">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bubles.svg" alt="bubles" />
        <div class="bubles__single">
            <img class="bubble1 animation-bubble--1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bubble1.png" alt="bubble1" />
            <img class="bubble2 animation-bubble--2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bubble2.png" alt="bubble2" />
            <img class="bubble3 animation-bubble--x" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bubble3.png" alt="bubble3" />
        </div>
    </div>
</section>
