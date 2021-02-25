<?php
/**
 * Block Name: choose Us
 *
 * This is the template that displays the choose Our
 */

//ACF personalize
$choose_image = get_field('choose_image') ? get_field('choose_image') : [
    'url' => get_stylesheet_directory_uri()."/assets/images/default-min.png",
    'alt' => 'default',
];
$choose_title = get_field('choose_title') ? get_field('choose_title') : 'Quienes Somos';
$choose_description = get_field('choose_description') ? get_field('choose_description') : '';
$choose_link = get_field('choose_link') ? get_field('choose_link') : [
    'url' => '#!',
    'target' => '_self',
    'title' => 'Ver Mas',
];

if($choose_image == '') { $choose_image = get_stylesheet_directory_uri()."/assets/images/default-min.png" ;
    echo' <h1>'. $choose_image .' </h1>';
}

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-choose <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2 class="title b-choose__title">Porque que elegir ATLAS connect</h2>
                <h5 class="subtitle-smaller b-choose__subtitle">Soluciones acordes a las necesidades actuales de los clientes. Soluciones escalables y flexibles, que pueden crecer en un futuro.</h5>
                <p class="description b-choose__description ">Todos los sistemas se diseñan de forma tal que se expandan a medida que las empresas crecen, son modulares y flexibles con todo tipo de tecnologías.</p>
                <p>Nuestros sistemas de monitoreo IIoT Industrial en linea pueden ser visualizados desde cualquier parte del mundo por medio de una Aplicación en la nube  con control de accesos.</p>
            </div>
            <div class="col-lg-7">  
                <div class="b-choose__items">
                    <div class="b-choose__item ">
                        <figure class="b-choose__item-figure">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/choose/image 24.png" alt="choose" class="b-choose__image">
                        </figure>
                        <p class="b-choose__item-description">Sistemas de monitoreo para PTAR</p>
                        <div class="b-choose__item-btn">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/arrow-right.svg">
                        </div>
                    </div>
                    <div class="b-choose__item ">
                        <figure class="b-choose__item-figure">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/choose/image 24-1.png" alt="choose" class="b-choose__image">
                        </figure>
                        <p class="b-choose__item-description">Diseño de Sitios y  Aplicaciones  Web</p>
                        <div class="b-choose__item-btn">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/arrow-right.svg">
                        </div>
                    </div>
                    <div class="b-choose__item ">
                        <figure class="b-choose__item-figure">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/choose/image 24-2.png" alt="choose" class="b-choose__image">
                        </figure>
                        <p class="b-choose__item-description">Sistemas de monitoreo para Generación Electrica</p>
                        <div class="b-choose__item-btn">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/arrow-right.svg">
                        </div>
                    </div>
                    <div class="b-choose__item ">
                        <figure class="b-choose__item-figure">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/choose/image 24-3.png" alt="choose" class="b-choose__image">
                        </figure>
                        <p class="b-choose__item-description">SCADA & BMS Supervisión, Control y     adquisición de Datos </p>
                        <div class="b-choose__item-btn">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/arrow-right.svg">
                        </div>
                    </div>
                    <div class="b-choose__item ">
                        <figure class="b-choose__item-figure">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/choose/image 24-4.png" alt="choose" class="b-choose__image">
                        </figure>
                        <p class="b-choose__item-description">Programación, Actualización PLC & HMI</p>
                        <div class="b-choose__item-btn">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/arrow-right.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
