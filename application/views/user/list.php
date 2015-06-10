<div class="col-sm-9 col-md-10 main">
	<h1 class="page-header">List</h1>

	<div class="table-responsive">
		<table class="table table-hover">
			<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Nama Panjang</th>
			<th>Password</th>
			<th>Alamat</th>
			<th>Foto</th>
		</tr>
			<?php foreach($user as $row): ?>
			<tr>
			<td> <?php echo $row['user_id'] ?></td>
			<td> <?php echo $row['user_name'] ?></td>
			<td> <?php echo $row['user_full_name'] ?></td>
			<td> <?php echo $row['user_password'] ?></td>
			<td> <?php echo $row['user_address'] ?></td>
			<td> <?php echo $row['user_image'] ?></td>
		</tr>
			<?php endforeach?>
		
		</table>
	</div>
</div>