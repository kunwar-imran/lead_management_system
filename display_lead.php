<?php
require_once('head.php');
require_once('side_nav.php');
require_once('top_nav.php');
require_once('db.php');
require_once('functions.php');

$lead_class = new leads;

$lead_id  = $_GET['lead_id'];

$lead = $lead_class->lead_by_id($lead_id);

$lead_history_all = $lead_class->lead_history($lead_id);

$lead_final_status = $lead_class->lead_status_final($lead_id);

?>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Leads details</h3>
              <p class="card-category">Details of individual lead are displayed here.
              </p>
            </div>
            <div class="card-body">
              <div class="row">
				<div class="col-md-5">
				<div class="table-responsive">
                    <table class="table">
                       
					  <tbody>
                        
							<?php
							echo "<tr><th colspan=2 style=\"text-align:right;\"><a href=\"add_history_lead_1.php?lead_id=".$lead['id']."\" data-toggle=\"tooltip\" title=\"Update lead, like status & schedule call etc.\"><i class=\"material-icons\">autorenew</i></a>&emsp;<a href=\"edit_lead.php?lead_id=".$lead['id']."\" data-toggle=\"tooltip\" title=\"Edit Lead basic details like contact, name etc.\"><i class=\"material-icons\">edit</i></a></th></tr>";
							echo "<tr><th width=25%>Curr. Status</th>";
							echo "<td>".$lead_final_status['status']."</td></tr>";						
							
							echo "<tr><th width=20%>Name</th>";
							echo "<td>".$lead['name']."</td></tr>";
							echo "<tr><th>Role</th>";
							echo "<td>".$lead['role']."</td></tr>";
							echo "<tr><th>Product</th>";
							echo "<td>".$lead['enquiry_for']."</td></tr>";
							echo "<tr><th>Contact</th>";
							echo "<td>".$lead['contact']."</td></tr>";
							echo "<tr><th>Initial Status</th>";
							echo "<td>".$lead['status']."</td></tr>";
							echo "<tr><th>City</th>";
							echo "<td>".$lead['city']."</td></tr>";
							echo "<tr><th>Enquiry from</th>";
							echo "<td>".$lead['enquiry_from']."</td></tr>";
							echo "<tr><th>Email</th>";
							echo "<td>".$lead['email']."</td></tr>";
							echo "<tr><th>Initial Comment</th>";
							echo "<td>".$lead['initial_comment']."</td></tr>";
							echo "<tr><th>Time Stamp</th>";
							echo "<td>".$lead_class->indian_time($lead['time_stamp'])['date']."<br>".$lead_class->indian_time($lead['time_stamp'])['time']."</td></tr>";
							 
							
							
							
							?>
                           
						
					  </tbody>
					</table>
				</div>
			  </div>
			  
			  <div class="col-md-7">
			  <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Developments - </b> So far in this lead.</span>
                  </div>
			  <div class="table-responsive">
                    <table class="table">
                       
					  <tbody>
				 <?php 
					if($lead_history_all != "NULL"){
					foreach($lead_history_all as $lead_history){
					echo "<tr style=\"background-color:#FBEEC1; text-align:center;\"><th colspan=3>".$lead_class->indian_time($lead_history[time_stamp])['date']." | ".$lead_class->indian_time($lead_history[time_stamp])['time']."</th></tr>";
					
					if($lead_history['status'] != "" || $lead_history['st_comment'] != "" ){
					echo "<tr style=\"background-color:#8EE4AF; \"><th>Status</th><th>".$lead_history['status']."</th>
                    <td>".$lead_history['st_comment']."</td></tr>";
					}
					if($lead_history['schedule_call'] != "0000-00-00" || $lead_history['sc_comment'] != "" ){
					echo "<tr style=\"background-color:#E8A87C;\"><th>Schedule</th><th>".$lead_history['schedule_call']."</th>
                    <td>".$lead_history['sc_comment']."</td></tr>
					
				  ";
					}
					echo "<tr><td></td><td></td></tr>";
			  }
			  }
			  
			  ?>	
			 
			  </tbody>
			  </table>
			  </div>
				
			  </div>
			  
			  
			 </div>
			</div>
		</div>
	</div>

<?php
require_once('footer.php');
require_once('bottom_fixed.php');

?>