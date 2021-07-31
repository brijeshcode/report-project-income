<?php $this->load->view('templates/header', ['title' => 'Clients']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">
	<div class="card mt-4">
		<div class="card-header bg-primary text-dark "><h3 class="float-left">Clients</h3>  <a href="<?= base_url();?>clients" class="btn btn-success btn-sm float-right" >List</a></div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12 mb-2">
					<h5>Client Add </h5>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12 bg-light pb-2 text-dark">
					<?php echo form_open('clients/store'); ?>
					<!-- <form method="post" action="store"> -->
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
					                <label class="col-form-label"  for="client_name">Name *</label>
					                <input type="text" required class="form-control" name="name" placeholder="Client Name" id="client_name">
					            </div>
							</div>
							<div class="col-md-4">
					            <div class="form-group">
				                    <label for="introduced_at">First Meet On</label>
				                    <select class="form-control" id="introduced_at" name="source_id">
				                      <?php foreach ($sources as $key => $source): ?>
										<option value="<?= $source['id'] ?>"><?= $source['name'] ?></option>
				                      <?php endforeach ?>
				                    </select>
				                </div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
					                <label class="col-form-label" for="disscus_on">Discuss On</label>
					                <input type="text" class="form-control" placeholder="Discuss On / Chat Api" id="disscus_on" name="discuss_on">
					            </div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
					            <div class="form-group">
				                    <label for="payment_gatway">Default Payment through</label>
				                    <select class="form-control" id="payment_gatway" name="payment_through_id">
				                      <?php foreach ($gateways as $key => $gate): ?>
										<option value="<?= $gate['id'] ?>"><?= $gate['name'] ?></option>
				                      <?php endforeach ?>
				                    </select>
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
