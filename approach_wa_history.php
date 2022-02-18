<?php
require_once('head.php');
require_once('side_nav.php');
require_once('top_nav.php');

require_once('db.php');
require_once('functions.php');

$lead_class = new leads;

$approach_hisory = $lead_class->wa_approach_all();



?>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">History of approaches made on Whatsapp</h3>
              <p class="card-category">If some number is found to be associated with any lead then it is linked. </p>
            </div>
            <div class="card-body">
			  <div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table">
						<thead class=" text-primary">
							<th>S.No.</th>
							<th>Name</th>
							<th>Contact</th>
							<th>Time Stamp</th>
							<th>Template Id</th>							
						</thead>
						<tbody>
							<?php
							$i=0;
							foreach ($approach_hisory as $approach){
								$i++;
								$lead_link_1 = "";
								$lead_link_2 = "";
								if($approach['lead_id'] != "NULL"){
									$lead_link_1 = "<a href=display_lead.php?lead_id=".$approach['lead_id'].">";
									$lead_link_2 = "</a>";
								}
								echo "<tr>
									<td>".$i."</td>
									<td>".$lead_link_1.$approach['name'].$lead_link_1."</td>
									<td>".$approach['contact']."</td>
									<td>".$lead_class->indian_time($approach['time_stamp'])['date']." | ".$lead_class->indian_time($approach['time_stamp'])['time']."</td>
									<td>".$approach['wa_template_id']."</td>
									 
								</tr>";
							
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
	</div>

<?php
require_once('footer.php');
require_once('bottom_fixed.php');

?>