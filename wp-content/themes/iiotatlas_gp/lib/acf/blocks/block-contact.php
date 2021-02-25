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
        <h4 class="subtitle-small b-contact__description">Quieres saber como estas tecnologias pueden ayudar a mejorar  tu empresa o proceso productivo, contactanos y prepararemos una presentación gratuita para ti.</h4>
        <a href="#!" class="btn btn--large btn--primary b-contact__btn">CONTACTANOS</a>
    </div>
</section>
