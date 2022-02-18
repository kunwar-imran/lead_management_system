<?php
require_once('head.php');
require_once('db.php');
require_once('functions.php');
$lead_class = new leads;

if(isset ($_POST['name'])){

$name = trim($_POST['name']);
$contact = trim($_POST['contact']);
$enquiry_for = trim($_POST['enquiry_for']);
$status = trim($_POST['status']);
$enquiry_from = trim($_POST['enquiry_from']);
$email = trim($_POST['email']);
$role = trim($_POST['role']);
$city = trim($_POST['city']);



$lead_result = $lead_class->search_lead($name, $contact, $enquiry_for, $status, $enquiry_from, $email, $role, $city);

$all_leads = $lead_result;
}
else {
$all_leads = $lead_class->leads_all();
}



?>

<?php

require_once('side_nav.php');
require_once('top_nav.php');

require_once('functions.php');





?>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Leads So far</h3>
              <p class="card-category">All Leads displayed here.
              </p>
            </div>
            <div class="card-body">
              <div class="row">
				<div class="col-md-12">
				<div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
						<th>S.No.</th>
						<th>Name</th>
						<th>Role</th>
						<th>Product</th>
						<th>Contact</th>
						<th>Cr. Status</th>
						<th>City</th>
						<th>Action</th>
					  </thead>
					  <tbody>
                        
							<?php
							$i=0;
							foreach ($all_leads as $lead) {
							$i++;
							echo "<tr><td>".$i."</td>";
							echo "<td><a href=display_lead.php?lead_id=".$lead['id'].">".$lead['name']."</a></td>";
							echo "<td>".$lead['role']."</td>";
							echo "<td>".$lead['enquiry_for']."</td>";
							echo "<td>".$lead['contact']."</td>";
							echo "<td>".$lead_final_status = $lead_class->lead_status_final($lead['id'])['status']."</td>";
							echo "<td>".$lead['city']."</td>";
							echo "<td><a href=\"add_history_lead_1.php?lead_id=".$lead['id']."\" data-toggle=\"tooltip\" title=\"Update lead, like status & schedule call etc.\"><i class=\"material-icons\">autorenew</i></a>&emsp;<a href=\"edit_lead.php?lead_id=".$lead['id']."\" data-toggle=\"tooltip\" title=\"Edit Lead basic details like contact, name etc.\"><i class=\"material-icons\">edit</i></a>&emsp;<a href=\"approach_wa_2.php?name=".$lead['name']."&contact=".$lead['contact']."\"><i class=\"fa fa-whatsapp\" aria-hidden=\"true\" style=\"font-size:1.7em\"></i></a></td>";
							echo "</tr>";
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