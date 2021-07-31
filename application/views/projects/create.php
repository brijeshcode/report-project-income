<?php $this->load->view('templates/header', ['title' => 'Clients']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">
	<div class="card mt-4">
		<div class="card-header bg-primary text-dark "><h3 class="float-left">Projects</h3>  <a href="<?= base_url();?>projects" class="btn btn-success btn-sm float-right" >List</a></div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12 mb-2">
					<h5>Project Add </h5>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12 bg-light pb-2 text-dark">
					<?php echo form_open('projects/store'); ?>
					<!-- <form method="post" action="store"> -->
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
					                <label class="col-form-label"  for="project_date">Date *</label>
					                <input type="date" required class="form-control" name="date" placeholder="Date" id="project_date">
					            </div>
							</div>
							<div class="col-md">
								<div class="form-group">
					                <label class="col-form-label"  for="project_name">Title *</label>
					                <input type="text" required class="form-control" name="name" placeholder="Project Title" autocomplete="false" id="project_name">
					            </div>
							</div>
						</div>

						<div class="row">

							<div class="col-md-3">
					            <div class="form-group">
				                    <label for="client_id">Choose Client</label>
				                    <select class="form-control" id="client_id" name="client_id">
				                      <?php foreach ($clients as $key => $client): ?>
										<option value="<?= $client['id'] ?>"><?= $client['name'] ?></option>
				                      <?php endforeach ?>
				                    </select>
				                </div>
							</div>

							<div class="col-md-3">
					            <div class="form-group">
				                    <label for="source_id">Project From | Source</label>
				                    <select class="form-control" id="source_id" name="source_id">
				                      <?php foreach ($sources as $key => $source): ?>
										<option value="<?= $source['id'] ?>"><?= $source['name'] ?></option>
				                      <?php endforeach ?>
				                    </select>
				                </div>
							</div>

							<div class="col-md-3">
					            <div class="form-group">
				                    <label for="status_id">Status</label>
				                    <select class="form-control" id="status_id" name="status_id">
				                      <?php foreach ($statuses as $key => $status): ?>
										<option value="<?= $status['id'] ?>"><?= $status['name'] ?></option>
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
					                    	<select class="input-group-text" id="client_currency_id" name="currency_id">
						                      <?php foreach ($currencies as $key => $currency): ?>
												<option value="<?= $currency['id'] ?>"><?= $currency['short_name'] ?></option>
						                      <?php endforeach ?>
						                    </select>
					                    </div>
					                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="project_amount">

					                  </div>
					                </div>
					            </div>
							</div>

						</div>

						<div class="row">
							<div class="col-md">
								<div class="form-group">
					                <label class="col-form-label" for="disscus_on">Description</label>
					                <textarea class="form-control mytextarea" rows="12" placeholder="Project Description" id="disscus_on"  name="description" ></textarea>
					            </div>
							</div>

							<div class="col-md">
								<div class="form-group">
					                <label class="col-form-label" for="proposal">Proposal or Bid</label>
					                <textarea class="form-control mytextarea" rows="12" placeholder="Project Proposal" id="proposal"  name="proposal" ></textarea>
					            </div>
							</div>
						</div>

						<div class="row">
							<div class="col-md">
								<div class="form-group">
					                <label class="col-form-label" for="proposal">Payments (milestones)</label>
									<table class="table table-bordered">
										<thead class="table-dark">
											<tr>
												<th>Date</th>
												<th class="w-50">Description</th>
												<th>Status</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<input type="date" name="milestone[date]" class="form-control">
												</td>
												<td>
													<input type="text" name="milestone[description]" class="form-control">
												</td>
												<td>
													<select class="form-control" name="milestone[status]">
														<option>Pending</option>
														<option>In-progress</option>
														<option>Released</option>
													</select>
												</td>
												<td>
													<div class="form-group">
										                <div class="form-group">
										                  <div class="input-group mb-3">
										                    <div class="input-group-prepend">
										                    	<select class="input-group-text" id="milestone_currency_id" name="milestone[currency_id]">
											                      <?php foreach ($currencies as $key => $currency): ?>
																	<option value="<?= $currency['id'] ?>"><?= $currency['short_name'] ?></option>
											                      <?php endforeach ?>
											                    </select>
										                    </div>
										                    <input type="text" class="form-control"   name="milestone[amount]">

										                  </div>
										                </div>
										            </div>
												</td>
											</tr>
										</tbody>
									</table>
					            </div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary">Add</button>

					</form>
				</div>
			</div>
		</div>
</div>

<?php $this->load->view('templates/footer'); ?>
