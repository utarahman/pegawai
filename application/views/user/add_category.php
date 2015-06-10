<div class="col-sm-9 col-md-10 main">
	<h1 class="page-header">Tambah Kategory</h1>

<?php
if (isset ( $user )) {
	$inputCategory = $user ['category_name'];
} else {
	$inputCategory = set_value ( 'category_name' );
}
?>

<?php echo validation_errors(); ?>
    <?php echo form_open_multipart(current_url()); ?>

<?php if (isset($user)): ?>
<input type="hidden" name="category_id"
		value="<?php echo $user['category_id']; ?>" />
<?php endif; ?>
	
<form>
		<div class="form-group">
			<label>Kategory</label> <input name="category_name" type="text"
				class="form-control" placeholder="Masukkan Kategory"
				value="<?php echo $inputCategory; ?>">
		</div>
		<button name="action" type="submit" value="save"
			class="btn btn-default">Submit</button>
	</form>
</div>
