<?php $this->load->view('templates/header', ['title' => 'Gateways']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h1>Gateways List</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table  table-bordered">
				<tr class="table-active">
					<th># </th>
					<th>Name</th>
					<th>Description</th>
				</tr>

				<?php foreach ($gateways as $key => $gateway): ?>
					<tr class="table-light text-dark">
						<td>1</td>
						<td><?= $gateway['name'] ?></td>
						<td><?= $gateway['description'] ?></td>
					</tr>
				<?php endforeach ?>
			</table>

		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
