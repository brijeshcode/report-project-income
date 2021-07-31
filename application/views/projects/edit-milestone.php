<?php $this->load->view('templates/header', ['title' => 'Project']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">
	<div class="card mt-4">
		<div class="card-header  bg-primary text-dark "><h3 class="float-left">Project</h3>  <a href="<?= base_url();?>projects" class="btn btn-success btn-sm float-right" >List</a></div>
		<div class="card-body">
	<div class="row">
		<div class="col-md-12">
			<h5>Project Edit Milestone </h5>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 bg-light pb-2 text-dark ">
			<form method="post" action="<?= base_url(); ?>project/<?= $milestone['project_id']; ?>/milestone/update/<?= $milestone['id']; ?>">
				<div class="row">
	        		<div class="col-md-4">
	        			<input type="hidden" name="milestone[project_id]" value="<?= $milestone['project_id']; ?>">
	        			<label>Date</label>
		        		<input type="date" name="milestone[date]" class="form-control" placeholder="Date" value="<?= $milestone['date']; ?>">
	        		</div>
	        		<div class="col-md-4">
	        			<label>Status</label>
			        	<select class="form-control" name="milestone[status]">
							<option>In-progress</option>
							<option>Pending</option>
							<option>Released</option>
						</select>
	        		</div>

	        		<div class="col-md-4">
	        			<label>Amount</label>
	        			<div class="input-group mb-3">
		                    <div class="input-group-prepend">
		                    	<select class="input-group-text" id="milestone_currency_id" name="milestone[currency_id]">
			                      <?php foreach ($currencies as $key => $currency): ?>
									<option <?= $currency['id'] == $milestone['currency_id'] ? 'selected' : ''; ?>  value="<?= $currency['id'] ?>"><?= $currency['short_name'] ?></option>
			                      <?php endforeach ?>
			                    </select>
		                    </div>
		                    <input type="text" class="form-control"   name="milestone[amount]" value="<?= $milestone['amount']; ?>">

		                </div>
	        		</div>

	        	</div>
	        	<div class="row mb-4">
	        		<div class="col-md-12">
	        			<label>Description</label>
			        	<input type="text" name="milestone[description]" class="form-control" value="<?= $milestone['description']; ?>">
	        		</div>
	        	</div>
	        	<div class="row">
	        		<div class="col-md-12">
	        			<button class="btn btn-info">Save</button>
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
	        		</div>
	        	</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>

<?php $this->load->view('templates/footer'); ?>
