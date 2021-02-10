<?php
/**
 * Block Name: About Us
 *
 * This is the template that displays the About Our
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="about-us <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?> /assets/images/default-min.png" alt="default">
            </div>
            <div class="col-md-6">
                <h2>Lorem ipsum dolor sit.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti consequuntur reprehenderit assumenda culpa nobis placeat sed vel quod voluptas aspernatur, vero fugit omnis.</p>
            </div>
        </div>
    </div>
</section>
