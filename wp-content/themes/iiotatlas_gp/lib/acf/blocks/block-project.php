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
$project_title = get_field('project_title') ? get_field('project_title') : 'Quienes Somos';
$project_description = get_field('project_description') ? get_field('project_description') : '';
$project_link = get_field('project_link') ? get_field('project_link') : [
    'url' => '#!',
    'target' => '_self',
    'title' => 'Ver Mas',
];

if($project_image == '') { $project_image = get_stylesheet_directory_uri()."/assets/images/default-min.png" ;
    echo' <h1>'. $project_image .' </h1>';
}

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-project <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 order-2 order-md-1">
                <div class="b-project__content">
                    <h2 class=" title b-project__title">Proyectos en Curso</h2>
                    <p class="description-large b-project__description">Actualmente se tiene en dasarrollo la plataforma IIoT para la supervisión de  plantas de tratamiento de água, gestionadas por la empresa AGUA TUYA, que cuenta con gran experiencia en el sector.Se tendra interacción SMS con la plataforma y los operarios, asi como tambien control de usuarios.</p>
                    <a href="#!" class="btn btn--primary b-project__btn">
                        VER MAS
                    </a>
                </div>
            </div>
            <div class="col-xl-6 order-1 order-md-2">
                <figure class="b-project__figure">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/graphic.png" alt="project" class="b-project__image">
                </figure>
            </div>
        </div>
    </div>
</section>
