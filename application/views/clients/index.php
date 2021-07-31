<?php $this->load->view('templates/header', ['title' => 'Clients']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">

	<div class="card mt-4">
		<div class="card-header bg-warning text-dark"><h3 class="float-left">Clients</h3> <a href="<?= base_url();?>client/add" class="btn btn-sm btn-success float-right" >Add</a></div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<h5>List of clients</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table  table-bordered">
							<tr class="table-active">
								<th># </th>
								<th>Name</th>
								<th>Disscus On</th>
								<th>First Mat On</th>
								<th>Payment GateWay</th>
								<th>Action</th>
							</tr>
							<?php $index = 1; ?>
							<?php foreach ($clients as $key => $client): ?>
								<tr class="table-light text-dark">
									<td><?= $index++; ?></td>
									<td><?= $client['name'] ?></td>
									<td><?= $client['discuss_on'] ?></td>
									<td><?= $client['source'] ?></td>
									<td><?= $client['gateway'] ?></td>
									<td> <a href="<?= base_url();?>client/<?= $client['id'] ?>/edit">Edit</a> </td>
								</tr>
							<?php endforeach ?>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>

</div>

<?php $this->load->view('templates/footer'); ?>
