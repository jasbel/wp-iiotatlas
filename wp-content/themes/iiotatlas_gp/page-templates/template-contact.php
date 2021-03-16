<?php
/* Template Name: Template Contact */


$contact_title_form = get_field('contact_title_form') ? get_field('contact_title_form') : '';

?>

<?php get_header();?>

<div class="container d-flex contact__container">
    <section class="contact" >

        <h4 class="subtitle-small contact__title" data-daws=""> <?php echo $contact_title_form;?></h4>


        <form class="contact__form" data-daws="">
            <div class="form-row row">
                <div class="contact__form-group form-group col-md-6">
                    <!-- <label for="name">Nombre</label> -->
                    <input type="text" class="form-control contact__input" id="name" placeholder="Nombre">
                </div>
                <div class="contact__form-group form-group col-md-6">
                    <!-- <label for="lastname">Apellidos</label> -->
                    <input type="text" class="form-control contact__input" id="lastname" placeholder="Apellidos">
                </div>
            </div>
            <div class="contact__form-group form-group">
                <input type="email" class="form-control contact__input" id="correoelectronico" placeholder="Correo Electronico">
            </div>

            <div class="contact__form-group form-group">
                <textarea class="contact__textarea contact__input" name="msg"  >Ingrese Mensaje</textarea>
            </div>

            <button type="submit" class="btn btn--large btn--primary contact__btn">Enviar Mensaje</button>
        </form>

        <div class="form">
            <?php echo do_shortcode("[form id="3538" /]"); ?>
        </div>

    </section>

    <section class="follow follow" >
        <div class="follow__content">
            <h2 class="subtitle follow__title" data-daws="">Siguenos</h2>
            <ul class="follow__items" data-daws="">
                <li>
                    <a class="subtitle-small follow__item" href="">
                        <i class="icon-color icon-color--facebook"></i> Facebook
                    </a>
                </li>
                <li>
                    <a class="subtitle-small follow__item" href="">
                        <i class="icon-color icon-color--youtube"></i> Youtube
                    </a>
                </li>
                <li>
                    <a class="subtitle-small follow__item" href="">
                        <i class="icon-color icon-color--linkedin"></i> Linkedin
                    </a>
                </li>
                <li>
                    <a class="subtitle-small follow__item" href="">
                        <i class="icon-color icon-color--github"></i> Github
                    </a>
                </li>
            </ul>  
        </div>
    </section>
</div>

<section class="location <?php echo $align_class; ?> " >
    <figure class="location__ola ola">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/ola.svg">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-8"></div>
            <div class="col-md-8 col-lg-4" data-daws="">
                <h2 class="subtitle location__title"> Ubicaciones</h2>
            </div>
        </div>
        <div class="row location__items">
            <div class="col-md-4 location__item" data-daws="">
                <div class="location__item-icon location__item-icon--factory icon--factory"></div>
                <h5 class="subtitle-small location__item-title"> Oficina </h5>
                <div class="description location__item-description"> 
                    Colcapirhia - Bolivia <br>
                    Av. Blanco Galindo km 6 <br>
                    Cel : 72232563 <br>
                    erik.ing.2019@gmail.com
                </div>
                <a class="description-small location__btn" href=""><span class="location__btn-icon icon--triangle-right"></span>Contactanos por Email</a>
            </div>

            <div class="col-md-4 location__item" data-daws="">
                <div class="location__item-icon location__item-icon--home icon--home"></div>
                <h5 class="subtitle-small location__item-title"> Co - Work </h5>
                <div class="description location__item-description"> 
                    Cercado - Bolivia <br>
                    Z. La Floresta. <br>
                    Av. Blanco Galindo km 6 <br>
                    Cel : 72232563 <br>
                    erik.ing.2019@gmail.com
                </div>
                <a class="description-small location__btn" href=""> <span class="location__btn-icon icon--triangle-right"></span> Contactanos por Email</a>
            </div>

            <div class="col-md-4 location__item" data-daws="">
                <div class="location__item-icon location__item-icon--home icon--home"> </div>
                <h5 class="subtitle-small location__item-title"> Co - Work </h5>
                <div class="description location__item-description"> 
                    Cercado - Cochabamba <br>
                    Av. Humberto Asin <br>
                    Cel : 68499480 <br>
                    asbel.elmec@gmail.com
                </div>
                <a class="description-small location__btn" href=""><span class="location__btn-icon icon--triangle-right" ></span>Contactanos por Email</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>