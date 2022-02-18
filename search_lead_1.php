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
              <h3 class="card-title">Search Lead</h3>
              <p class="card-category">Put the value in only in boxes you want to search for, rest leave empty.</p>
            </div>
            <div class="card-body">
			<form action="display_leads_all.php" method="post" role="form">
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
							<option></option>
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
							<option></option>
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
							<option></option>
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
			   
                    <button type="submit" class="btn btn-primary pull-right">Search Lead</button>
                
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