<?php
require_once('head.php');
require_once('side_nav.php');
require_once('top_nav.php');

require_once('db.php');
require_once('functions.php');

$lead_class = new leads;

$status_names = $lead_class->lead_status_name();

$product_names = $lead_class->product_name();

$lead_id  = $_GET['lead_id'];

$lead = $lead_class->lead_by_id($lead_id);




?>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Add Lead</h3>
              <p class="card-category">Add details of a Lead here.</p>
            </div>
            <div class="card-body">
			<form action="edit_lead_2.php" method="post" role="form">
              <div class="row">
				<div class="col-md-6">
					<div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $lead['name'];?>">
                    </div>
				</div>
				<div class="col-md-6">	
					<div class="form-group">
                          <label class="bmd-label-floating">Contact - 10 digits only.</label>
                          <input type="text" class="form-control" name="contact" value="<?php echo $lead['contact'];?>">
                    </div>				
				</div>
			  </div>
			  <input type="hidden" name="lead_id" value="<?php echo $lead_id;?>">
			  <div class="row">
				<div class="col-md-4">
					<div class="form-group">
                          <label class="bmd-label-floating">Enquiry From</label>
                          <input type="text" class="form-control" name="enquiry_from" name="city" value="<?php echo $lead['enquiry_from'];?>">
                    </div>
				</div>
				<div class="col-md-4">	
					<div class="form-group">
                          <label class="bmd-label-floating">email</label>
                          <input type="text" class="form-control" name="email" name="city" value="<?php echo $lead['email'];?>" >
                    </div>				
				</div>
				<div class="col-md-4">	
					<div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control" name="city" value="<?php echo $lead['city']; ?>" >
                    </div>				
				</div>
			  </div>
			  
                    <button type="submit" class="btn btn-primary pull-right">Edit Lead</button>
                
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