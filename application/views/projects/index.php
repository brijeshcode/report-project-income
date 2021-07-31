<?php $this->load->view('templates/header', ['title' => 'Projects']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">
	<div class="card mt-4">
		<div class="card-header bg-warning text-dark"><h3 class="float-left">Projects</h3> <a href="<?= base_url();?>project/add" class="btn btn-sm btn-success float-right" >Add</a></div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<h5>List of projects</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table  table-bordered">
							<tr class="table-active">
								<th style="width: 5%">#</th>
								<th>Date</th>
								<th>Client</th>
								<th class="w-50">Title</th>
								<th>Amount</th>
								<th>Status</th>
								<th class="text-center">Action</th>
							</tr>
							<?php $index = 1; ?>
							<?php foreach ($projects as $key => $project): ?>
								<tr class="table-light text-dark">
									<td><?= $index++; ?></td>
									<td><?= $project['date'] ?></td>
									<td><b><?= $project['client'] ?></b></td>
									<td><?= $project['name'] ?></td>
									<td><?= $project['currency_short']. ': ' . $project['project_amount'] ?></td>
									<td><?= $project['status'] ?></td>
									<td class="text-center">
										<a href="<?= base_url();?>project/<?= $project['id'] ?>/edit">E</a>
										<a class="text-primary" href="<?= base_url();?>project/<?= $project['id'] ?>/view">V</a>
									</td>
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
