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
              <h3 class="card-title">Lead update</h3>
              <p class="card-category">Add lead updated of a Lead here.</p>
            </div>
            <div class="card-body">
			<form action="add_history_lead_2.php" method="post" role="form">
			<?php
			if(isset($_GET['response_id'])) {
				echo "<input type=\"hidden\" name = \"response_id\" value=\"".$_GET['response_id']."\">";
			}
			?>
              <div class="row">
				<div class="col-md-6">
					<div class="form-group">
                          <label class="bmd-label-floating">Current Status</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $lead['status'];?>" disabled>
						  <input type="hidden" class="form-control" name="lead_id" value="<?php echo $lead_id;?>">	
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-6">	
					<div class="form-group">
                          <label class="bmd-label-floating">Update status</label>
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
			  </div>
			  
			  <div class="row">
				<div class="col-md-12">
					<div class="form-group">
                          <label class="bmd-label-floating">Comment for changing status.</label>
                          <input type="text" class="form-control" name="st_comment">
                    </div>
				</div>
				 			
			  
			  </div>
			  <div class="row">
				<div class="col-md-6">
					<div class="form-group">
                          <label class="bmd-label-floating">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Schedule Call</label>
                          <input type="date" class="form-control" name="schedule_call">
                    </div>
				</div>
				 			
				 
			  </div>
			  <div class="row">
				<div class="col-md-12">
					<div class="form-group">
                          <label class="bmd-label-floating">Comment for Schedule Call.</label>
                          <input type="text" class="form-control" name="sc_comment">
                    </div>
				</div>
				 			
				 
			  </div>
			  
                    <button type="submit" class="btn btn-primary pull-right">Update Lead</button>
                
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