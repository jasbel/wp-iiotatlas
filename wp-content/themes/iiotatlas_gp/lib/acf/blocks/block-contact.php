<?php
/**
 * Block Name: Contact Us
 *
 * This is the template that displays the Contact Us
 */
$contact_description = get_field('contact_description') ? get_field('contact_description') : '';
$contact_link = get_field('contact_link') ? get_field('contact_link') :  [
    'url' => '#!',
    'target' => '_self',
    'title' => 'Contactanos',
];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = 'item-' . $block['id'];
?>
<section id="<?php echo $id; ?>" class="b-contact <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="b-contact__description"> <?php echo $contact_description;?> </h5>
            </div>
            <div class="col-md-6">
                <a class="btn btn--primary-transparent b-contact__btn" href=" <?php echo esc_url($contact_link['url']);?> "  target="<?php echo esc_attr( $contact_link['target'] ); ?>" > <?php echo esc_html($contact_link['title']);?> </a>
            </div>
        </div>
    </div>
</section>
