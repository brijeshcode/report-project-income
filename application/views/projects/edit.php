<?php $this->load->view('templates/header', ['title' => 'Clients']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">
	<div class="card mt-4">
		<div class="card-header  bg-primary text-dark "><h3 class="float-left">Clients</h3>  <a href="<?= base_url();?>clients" class="btn btn-success btn-sm float-right" >List</a></div>
		<div class="card-body">
	<div class="row">
		<div class="col-md-12">
			<h5>Client Edit </h5>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 bg-light pb-2 text-dark ">
			<?php echo form_open('projects/update/'. $project['id']); ?>
				<!-- <form method="post" action="store"> -->
				<div class="row">
							<div class="col-md-3">
								<div class="form-group">
					                <label class="col-form-label"  for="project_date">Date *</label>
					                <input type="date" required class="form-control" name="date" placeholder="Date" id="project_date" value="<?= $project['date'] ?>">
					            </div>
							</div>
							<div class="col-md">
								<div class="form-group">
					                <label class="col-form-label"  for="project_name">Title *</label>
					                <input type="text" required class="form-control" name="name" placeholder="Project Title" autocomplete="false" value="<?= $project['name'] ?>" id="project_name">
					            </div>
							</div>
						</div>

						<div class="row">

							<div class="col-md-3">
					            <div class="form-group">
				                    <label for="client_id">Choose Client</label>
				                    <select class="form-control" id="client_id" name="client_id">
				                      <?php foreach ($clients as $key => $client): ?>
										<option <?= $client['id'] == $project['client_id'] ? 'selected' :'' ?> value="<?= $client['id'] ?>"><?= $client['name'] ?></option>
				                      <?php endforeach ?>
				                    </select>
				                </div>
							</div>

							<div class="col-md-3">
					            <div class="form-group">
				                    <label for="source_id">Project From | Source</label>
				                    <select class="form-control" id="source_id" name="source_id">
				                      <?php foreach ($sources as $key => $source): ?>
										<option <?= $source['id'] == $project['source_id'] ? 'selected' :'' ?> value="<?= $source['id'] ?>"><?= $source['name'] ?></option>
				                      <?php endforeach ?>
				                    </select>
				                </div>
							</div>

							<div class="col-md-3">
					            <div class="form-group">
				                    <label for="status_id">Status</label>
				                    <select class="form-control" id="status_id" name="status_id">
				                      <?php foreach ($statuses as $key => $status): ?>
										<option <?= $status['id'] == $project['status_id'] ? 'selected' :'' ?> value="<?= $status['id'] ?>"><?= $status['name'] ?></option>
				                      <?php endforeach ?>
				                    </select>
				                </div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
					                <label class="control-label">Project | Client  Budget</label>
					                <div class="form-group">
					                  <div class="input-group mb-3">
					                    <div class="input-group-prepend">
					                    	<select class="input-group-text" id="currency_id" name="currency_id">
						                      <?php foreach ($currencies as $key => $currency): ?>
												<option <?= $currency['id'] == $project['currency_id'] ? 'selected' :'' ?> value="<?= $currency['id'] ?>"><?= $currency['short_name'] ?></option>
						                      <?php endforeach ?>
						                    </select>
					                    </div>
					                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?= $project['project_amount'] ?>" name="project_amount">

					                  </div>
					                </div>
					            </div>
							</div>

						</div>

						<div class="row">
							<div class="col-md">
								<div class="form-group">
					                <label class="col-form-label" for="disscus_on">Description</label>
					                <textarea class="form-control mytextarea" rows="12" placeholder="Project  Description" id="disscus_on" name="description" ><?= $project['description'] ?></textarea>
					            </div>
							</div>

							<div class="col-md">
								<div class="form-group">
					                <label class="col-form-label" for="proposal">Proposal or Bid</label>
					                <textarea class="form-control mytextarea" rows="12" placeholder="Project Proposal" id="proposal"  name="proposal" ><?= $project['proposal'] ?></textarea>
					            </div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>
</div>
</div>

<?php $this->load->view('templates/footer'); ?>
