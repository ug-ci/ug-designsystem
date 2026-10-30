<?php
/**
 * Title: UG — Formularz
 * Slug: ug/form
 * Categories: ug-forms
 * Description: Pola tekstowe (41px, ramka gray-500), select, stan błędu, przycisk submit. Zawijaj formularze wtyczek w .ug-form.
 * Keywords: formularz form input select
 */
?>
<!-- wp:html -->
<form class="ug-form" style="max-width:420px" onsubmit="return false">
<div class="ug-field"><label>Full name</label><input type="text" placeholder="Input"></div>
<div class="ug-field"><label>Email address</label><input type="email" placeholder="john.smith@ug.edu.pl"></div>
<div class="ug-field"><label>Field of study</label><select><option value="">Choose a programme</option><option>Research</option><option>Global Studies, full-time Master&#8217;s</option></select></div>
<div class="ug-field"><label>Validation error</label><input type="text" value="Invalid format" class="is-error" aria-invalid="true"><div class="ug-error-msg">This field is required.</div></div>
<div class="ug-field"><button type="submit">Submit</button></div>
</form>
<!-- /wp:html -->
