<?php get_header();?>

<main class="error404__main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 order-md-2 " data-daws="">
                <figure >
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/default-min.png" alt="">
                </figure>
            </div>
            <div class="col-md-7 order-md-1" data-daws="">
                <h1 class="heading error404__heading">Error 404</h1>
                <h2 class="title error404__title">Pagina no encontrada</h2>
                <a class="btn btn--large error404__btn " href="/"> CLIC AQUI para retornar a la pagina principal</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>