<?php
/**
 * Block Name: actual Us
 *
 * This is the template that displays the actual Our
 */

//ACF personalize
$actual_title = get_field('actual_title') ? get_field('actual_title') : '';
$actual_subtitle = get_field('actual_subtitle') ? get_field('actual_subtitle') : '';
$actual_content = get_field('actual_content') ? get_field('actual_content') : '';
$actual_image = get_field('actual_image') ? get_field('actual_image') : [
    'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
    'alt' => 'default',
];
$actual_link = get_field('actual_link') ? get_field('actual_link') : '';


// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-actual <?php echo $align_class; ?>">
    <figure class="b-actual__ola ola ">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/ola.svg">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-6" data-daws="">
                <figure class="b-actual__figure">
                    <img class="b-actual__image" src="<?php echo esc_url($actual_image['url']); ?>" alt="<?php echo esc_attr($actual_image['alt']); ?>" />
                </figure>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="b-actual__content">
                    <h2 class="title b-actual__title"> <?php echo $actual_title;?> </h2>
                    <h3 class="subtitle-small b-actual__subtitle"><?php echo $actual_subtitle;?> </h3>
                    <div class="description b-actual__description"><?php echo $actual_content;?> </div>
                    <a class="btn btn--primary btn--large b-actual__btn" href=" <?php echo esc_url($actual_link['url']);?> "  target="<?php echo esc_attr( $actual_link['target'] ); ?>" >
                        <?php echo esc_html($actual_link['title']);?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
