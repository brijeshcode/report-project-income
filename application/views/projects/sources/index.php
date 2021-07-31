<?php $this->load->view('templates/header', ['title' => 'Project Source']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h1>Project Source List</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table  table-bordered">
				<tr class="table-active">
					<th># </th>
					<th>Name</th>
					<th>Desc</th>
				</tr>

				<?php foreach ($sources as $key => $source): ?>
					<tr class="table-light text-dark">
						<td>1</td>
						<td><?= $source['name'] ?></td>
						<td><?= $source['description'] ?></td>
					</tr>
				<?php endforeach ?>
			</table>

		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
