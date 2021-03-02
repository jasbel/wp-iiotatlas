<?php
/**
 * Block Name: Project Home
 *
 * This is the template that displays the project Our
 */

//ACF personalize
$project_image = get_field('project_image') ? get_field('project_image') : [
    'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
    'alt' => 'default',
];
$project_title = get_field('project_title') ? get_field('project_title') : 'Proyectos en Curso';
$project_description = get_field('project_description') ? get_field('project_description') : '...';
$project_link = get_field('project_link') ? get_field('project_link') : [
    'url' => '#!',
    'target' => '_self',
    'title' => 'Ver Mas',
];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-project <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xl-6 order-2 order-md-1">
                <div class="b-project__content">
                    <h2 class=" title b-project__title"> <?php echo $project_title;?></h2>
                    <p class="description-large b-project__description"><?php echo $project_description;?></p>
                    <a class="btn btn--primary b-project__btn" href=" <?php echo esc_url($project_link['url']);?> "  target="<?php echo esc_attr($project_link['target']); ?>" >
                        <?php echo esc_html($project_link['title']);?>
                    </a>
                </div>
            </div>
            <div class="col-md-5 col-xl-6 order-1 order-md-2">
                <figure class="b-project__figure">
                    <img class="b-project__image" src="<?php echo esc_url($project_image['url']); ?>" alt="<?php echo esc_attr($project_image['alt']); ?>" />
                </figure>
            </div>
        </div>
    </div>
</section>
