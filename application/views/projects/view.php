<?php $this->load->view('templates/header', ['title' => 'Projects']); ?>
<?php $this->load->view('templates/nav'); ?>

<div class="container">
	<div class="card mt-4">
		<div class="card-header bg-dark text-light">
			<div class="row">
				<div class="col-md-10">
					<h4 class=""><?= $project['name'] ?></h4>
				</div>
				<div class="col-md-2">
					<span  class="btn-outline-success btn float-right" disabled ><?= $project['status'] ?></span>
				</div>
			</div>
		</div>
		<div class="card-body bg-light">

			<div class="row">
				<div class="col-md-8">
					<ul class="nav nav-tabs bg-dark">
					  <li class="nav-item">
					    <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link " data-toggle="tab" href="#proposal">Proposal</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link " data-toggle="tab" href="#payment">Payments</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link " data-toggle="tab" href="#files">Files</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link " data-toggle="tab" href="#task">Tasks</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link " data-toggle="tab" href="#reviews">Reviews</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link " data-toggle="tab" href="#full-detail">Full-detials</a>
					  </li>
					</ul>

					<div id="myTabContent" class="tab-content">
					  <div class="tab-pane fade active show" id="description">
					    <p class="text-dark mt-4"><?=  nl2br($project['description']) ?> </p>
					  </div>
					  <div class="tab-pane fade " id="proposal">
					    <p class="text-dark mt-4"><?=  nl2br($project['proposal']) ?> </p>
					  </div>
					  <div class="tab-pane bg-transparent fade mt-4" id="payment">
					  	<div class="row">
					  		<div class="col-md-12 text-dark">
					  			<h3>Payment summary</h3>
					  			<ul>
					  				<li>Requested (asked by developer)</li>
				  					<li>In Progress (confiremd by client)</li>
				  					<li>Release (Recived by developer)</li>
					  			</ul>
					  			<table class="table table-borderless text-dark">
					  				<tr>
					  					<th>Requested </th>
					  					<th>In Progress </th>
					  					<th>Release</th>
					  				</tr>
					  				<tr>
					  					<td>00</td>
					  					<td>00</td>
					  					<td>00</td>
					  				</tr>

					  			</table>
					  		</div>
					  	</div>
					  	<hr>
					  	<div class="row ">
					  		<div class="col-md-6 ">
					  			<h3 class="text-dark">Milestone Payments</h3>
					  		</div>
					  		<div class="col-md-6 ">
					  			<button type="button" class="btn btn-dark float-right mb-4" data-toggle="modal" data-target="#create-milestone">Create Milestone</button>
					  		</div>
					  	</div>
						<table class="table table-hover">
							<thead class="">
								<tr  class="bg-dark">
									<th>Date</th>
									<th class="w-25">Description</th>
									<th>Status</th>
									<th>Amount</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php if (isset($project['milestone']) && !empty($project['milestone'])): ?>
								<?php foreach ($project['milestone'] as $key => $milestone): ?>
								<tr>
									<td class="text-dark">

										<?= $milestone['date'];  ?>
									</td>
									<td class="text-dark">
										<?= $milestone['description'];  ?>
									</td>
									<td class="text-dark">
										<?= $milestone['status'];  ?>
									</td>
									<td class="text-dark">
										<?= $milestone['currency_symbol'];  ?>
										<?= $milestone['amount'];  ?> &nbsp;
										<?= $milestone['currency_short'];  ?>
									</td>
									<td class=" text-center">
										<a href="<?= base_url(); ?>project/<?= $project['id']; ?>/milestone/edit/<?= $milestone['id']; ?>" class="text-success"><i class="  fas fa-pencil-alt"></i></a>

										<a href="<?= base_url(); ?>project/<?= $project['id']; ?>/milestone/delete/<?= $milestone['id']; ?>" onclick="return confirm('are you sure you want to delete this milestone');" ><i class="far  fa-trash-alt text-danger"></i></a>
									</td>
								</tr>
								<?php endforeach ?>
							<?php else: ?>
								<tr>
									<td class="col-md-4 text-center" colspan="6">No Mile stone in system</td>
								</tr>
							<?php endif ?>
							</tbody>

							<?php if (isset($project['milestone']) && !empty($project['milestone'])): ?>
							<?php endif ?>
						</table>
					  </div>
					  <div class="tab-pane fade mt-4" id="files">
					    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
					  </div>

					  <div class=" tab-pane fade" id="task">
					    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
					  </div>
					  <div class="tab-pane fade" id="reviews">
					    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
					  </div>
					</div>

				</div>

				<div class="col-md-4">
					<div class="card">
		                <div class="card-body">
		                  <h4 class="card-title"><?= $project['client'] ?></h4>
		                  <h6 class="card-text text-muted">Source : <?= $project['source'] ?></h6>
		                  <p class="card-text">Date : <?= $project['date'] ?></p>
		                  <p class="card-subtitle mb-2 text-muted"><?= $project['currency_short']. ' : ' . $project['project_amount'] ?></p>

		                </div>
		              </div>
				</div>
			</div>

		</div>
	</div>
</div>



<div id="create-milestone" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Add new milestone. </p>

			<?php //echo form_open('project/'. $project['id']. '/add-milestone'); ?>
			<form method="post" action="project/<?= $project['id']; ?>/add-milestone">
        	<div class="row">
        		<input type="hidden" name="milestone[project_id]" value="<?= $project['id']; ?>">
        		<div class="col-md-6">
        			<label>Date</label>
	        		<input type="date" name="milestone[date]" class="form-control" placeholder="Date">
        		</div>
        		<div class="col-md-12">
        			<label>Description</label>
		        	<input type="text" name="milestone[description]" class="form-control">
        		</div>
        	</div>
        	<div class="row mb-4">
        		<div class="col-md-6">
        			<label>Status</label>
		        	<select class="form-control" name="milestone[status]">
						<option>In-progress</option>
						<option>Pending</option>
						<option>Released</option>
					</select>
        		</div>
        		<div class="col-md-6">
        			<label>Amount</label>
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


<?php $this->load->view('templates/footer'); ?>
