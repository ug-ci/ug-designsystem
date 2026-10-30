<?php
/**
 * Title: UG — Formularz
 * Slug: ug/form
 * Categories: ug-forms
 * Description: Pola tekstowe (41px, ramka gray-500), select, checkboxy, radio buttony, stan błędu, przycisk submit. Zawijaj formularze wtyczek w .ug-form.
 * Keywords: formularz form input select
 */
?>
<!-- wp:html -->
<form class="ug-form" style="max-width:420px" onsubmit="return false">
<div class="ug-field"><label>Full name</label><input type="text" placeholder="Input"></div>
<div class="ug-field"><label>Email address</label><input type="email" placeholder="john.smith@ug.edu.pl"></div>
<div class="ug-field"><label>Field of study</label><select><option value="">Choose a programme</option><option>Research</option><option>Global Studies, full-time Master&#8217;s</option></select></div>
<div class="ug-field"><label>Validation error</label><input type="text" value="Invalid format" class="is-error" aria-invalid="true"><div class="ug-error-msg">This field is required.</div></div>
<fieldset class="ug-field ug-choice-group"><legend>Checkboxes</legend>
<label class="ug-choice"><input type="checkbox" name="ug-cb" checked><span>Master&#8217;s programmes</span></label>
<label class="ug-choice"><input type="checkbox" name="ug-cb"><span>Doctoral schools</span></label>
<label class="ug-choice"><input type="checkbox" name="ug-cb"><span>Postgraduate studies</span></label>
<label class="ug-choice"><input type="checkbox" name="ug-cb" disabled><span>Disabled option</span></label>
</fieldset>
<fieldset class="ug-field ug-choice-group"><legend>Radio buttons</legend>
<label class="ug-choice"><input type="radio" class="ug-round" name="ug-rb" checked><span>Full-time</span></label>
<label class="ug-choice"><input type="radio" class="ug-round" name="ug-rb"><span>Part-time</span></label>
<label class="ug-choice"><input type="radio" class="ug-round" name="ug-rb" disabled><span>Disabled option</span></label>
</fieldset>
<fieldset class="ug-field ug-choice-group"><legend>Validation error</legend>
<label class="ug-choice"><input type="checkbox" name="ug-cb-err" aria-invalid="true" class="is-error"><span>I accept the terms and conditions</span></label>
<div class="ug-error-msg">This field is required.</div>
</fieldset>
<div class="ug-field"><button type="submit">Submit</button></div>
</form>
<!-- /wp:html -->
