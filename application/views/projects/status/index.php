<?php $this->load->view('templates/header', ['title' => 'Project Status']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h1>Project Status List</h1>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table  table-bordered">
				<tr class="table-active">
					<th># </th>
					<th>Name</th>
				</tr>

				<?php foreach ($status as $key => $val): ?>
					<tr class="table-light text-dark">
						<td>1</td>
						<td><?= $val['name'] ?></td>
					</tr>
				<?php endforeach ?>
			</table>

		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
