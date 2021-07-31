<?php $this->load->view('templates/header', ['title' => 'Currency']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container" >

	<div class="row">
		<div class="col-md-12">
			<h1>Currency List</h1>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table  table-bordered table-hover ">
				<tr class="table-active">
					<th># </th>
					<th>Name</th>
					<th class="text-center" >Short Name</th>
					<th class="text-center">Symbol</th>
				</tr>

				<?php foreach ($currencies as $key => $currency): ?>
					<tr class="table-light text-dark">
						<td>1</td>
						<td><?= $currency['name'] ?></td>
						<td class="text-center"><?= $currency['short_name'] ?></td>
						<td class="text-center"><?= $currency['symbol'] ?></td>
					</tr>
				<?php endforeach ?>
			</table>

		</div>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>
