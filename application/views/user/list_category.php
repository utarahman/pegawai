<div class="col-sm-9 col-md-10 main">
	<h1 class="page-header">List Kategori</h1>

	<div class="table-responsive">
		<table class="table table-hover">
			<tr>
			<th>Id</th>
			<th>Nama Kategori</th>
		</tr>
			<?php foreach($category as $row): ?>
			<tr>
			<td> <?php echo $row['category_id'] ?></td>
			<td> <?php echo $row['category_name'] ?></td>
		</tr>
			<?php endforeach?>
		
		</table>
	</div>
</div>