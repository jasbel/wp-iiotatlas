<!-- <?php
/**
 * Block Name: Contact Us
 *
 * This is the template that displays the Contact Us
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$id = $block['id'];
?>
<section id="<?php echo $id; ?>" class="contact <?php echo $align_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-8" data-daws="">
                <form >
                    <fieldset disabled>
                        <legend>Disabled fieldset example</legend>
                        <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Disabled input</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                        </div>
                        <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Disabled select menu</label>
                        <select id="disabledSelect" class="form-select">
                            <option>Disabled select</option>
                        </select>
                        </div>
                        <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                            <label class="form-check-label" for="disabledFieldsetCheck">
                            Can't check this
                            </label>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-4" data-daws="">
                <button class="btn btn--primary-transparent b-contact__btn">Contactanos</button>
            </div>
        </div>
    </div>
</section> -->
