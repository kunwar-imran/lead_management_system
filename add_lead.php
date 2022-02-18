<?php
require_once('head.php');
require_once('side_nav.php');
require_once('top_nav.php');

require_once('db.php');
require_once('functions.php');

$lead_class = new leads;

$status_names = $lead_class->lead_status_name();

$product_names = $lead_class->product_name();





?>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Add Lead</h3>
              <p class="card-category">Add details of a Lead here.</p>
            </div>
            <div class="card-body">
			<form action="add_lead_2.php" method="post" role="form">
              <div class="row">
				<div class="col-md-6">
					<div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name">
                    </div>
				</div>
				<div class="col-md-6">	
					<div class="form-group">
                          <label class="bmd-label-floating">Contact - 10 digits only.</label>
                          <input type="text" class="form-control" name="contact">
                    </div>				
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-4">
					<div class="form-group">
                          <label class="bmd-label-floating">Enquiry For</label>
                          <select class="form-control" name="enquiry_for">
							<?php
								foreach($product_names as $product){
	
									echo "<option>".$product['name']."</option>";
	
								}
							?>
							</select>
					</div>
				</div>
				<div class="col-md-4">	
					<div class="form-group">
                          <label class="bmd-label-floating">status</label>
                          <select class="form-control" name="status">
							<?php
								foreach($status_names as $status_1){
	
									echo "<option>".$status_1['status']."</option>";
	
								}
							?>
							</select>
                    </div>				
				</div>
				<div class="col-md-4">	
					<div class="form-group">
                          <label class="bmd-label-floating">Role</label> 
                          <select name="role" class="form-control">
							<option>End User</option>
							<option>Delaer / Distributor</option>
							<option>Commision Agent</option>
						  </select>						  
                    </div>				
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-4">
					<div class="form-group">
                          <label class="bmd-label-floating">Enquiry From</label>
                          <input type="text" class="form-control" name="enquiry_from">
                    </div>
				</div>
				<div class="col-md-4">	
					<div class="form-group">
                          <label class="bmd-label-floating">email</label>
                          <input type="text" class="form-control" name="email">
                    </div>				
				</div>
				<div class="col-md-4">	
					<div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control" name="city">
                    </div>				
				</div>
			  </div>
			  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Comments</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Enter Initial Comments</label>
                            <textarea class="form-control" rows="2" name='comment'></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add Lead</button>
                
				</form>
				<div class="clearfix"></div>
			 </div>
			</div>
		</div>
	</div>

<?php
require_once('footer.php');
require_once('bottom_fixed.php');

?>