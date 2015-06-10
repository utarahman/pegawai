<div class="col-sm-9 col-md-10 main">
	<h1 class="page-header">Tambah Pengguna</h1>

<?php
if (isset ( $user )) {
	$inputName = $user ['user_name'];
	$inputFullname = $user ['user_full_name'];
	$inputPassword = $user ['user_password'];
	$inputAddress = $user ['user_Address'];
	$inputImage = $user ['user_image'];
} else {
	$inputName = set_value ( 'user_name' );
	$inputFullname = set_value ( 'user_full_name' );
	$inputPassword = set_value ( 'user_password' );
	$inputAddress = set_value ( 'user_Address' );
	$inputImage = set_value ( 'user_image' );
}
?>

<?php echo validation_errors(); ?>
    <?php echo form_open_multipart(current_url()); ?>

<?php if (isset($user)): ?>
<input type="hidden" name="user_id"
		value="<?php echo $user['user_id']; ?>" />
<?php endif; ?>
	
<form>
		<div class="form-group">
			<label>Nama</label> <input name="user_name" type="text"
				class="form-control" placeholder="Masukkan Nama"
				value="<?php echo $inputName; ?>">
		</div>
		<div class="form-group">
			<label>Nama Panjang</label> <input name="user_full_name"
				class="form-control" placeholder="Masukkan Nama Panjang"
				value="<?php echo $inputFullname; ?>">
		</div>
		<div class="form-group">
			<label>Kategori User</label> <select name="category_id"
				class="form-control"> 
			<?php foreach ($category as $row):?>
			<option value="<?php echo $row['category_id']?>"><?php echo $row['category_name']?></option>
			<?php endforeach?>
			</select>
		</div>
		<div class="form-group">
			<label>Password</label> <input name="user_password" type="password"
				class="form-control" placeholder="Masukkan Password"
				value="<?php echo $inputPassword; ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" placeholder="Masukkan Alamat" name="user_address"><?php echo $inputAddress?></textarea>
		</div>
		<div class="form-group">
			<label>Foto</label> <input name="user_image" type="file">
			<p class="help-block">Example block-level help text here.</p>
		</div>
		<button name="action" type="submit" value="save"
			class="btn btn-default">Submit</button>
	</form>
</div>
