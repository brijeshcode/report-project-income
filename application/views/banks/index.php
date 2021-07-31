<?php $this->load->view('templates/header', ['title' => 'Banks']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container" >

	<div class="row">
		<div class="col-md-12">
			<h1>Bank List</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table  table-bordered">
				<tr class="table-active">
					<th># </th>
					<th>Name</th>
					<th class="text-center" >Account number</th>
				</tr>

				<?php foreach ($banks as $key => $bank): ?>
					<tr class="table-light text-dark">
						<td>1</td>
						<td><?= $bank['name'] ?></td>
						<td class="text-center"><?= $bank['account_no'] ?></td>
					</tr>
				<?php endforeach ?>
			</table>

		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
