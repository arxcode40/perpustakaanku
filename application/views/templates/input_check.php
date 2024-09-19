<div class="form-check <?= ($inline === FALSE) ?: 'form-check-inline' ?>">
	<input class="form-check-input <?= form_error($name) === '' ?: 'is-invalid' ?>" <?= $type === 'radio' ? set_radio($name, $value, $default) : set_checkbox($name, $value, $default) ?> id="<?= $key ?>" name="<?= $name ?>" type="<?= $type ?>" value="<?= $value ?>" />
	<label class="form-check-label" for="<?= $key ?>"><?= $value ?></label>
</div>