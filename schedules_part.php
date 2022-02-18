		<?php 
		$lead_class = new leads;
		$date_utc = date('Y-m-d H:i:s');
		$time_span = 'today';
		if (isset ($_GET['time_span']))  $time_span = $_GET['time_span'];
		$indian_time = $lead_class->indian_time($date_utc);
		$schedules = $lead_class->lead_schedule($indian_time['date_sql'], $time_span);
		
		?>
		
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Schedule - <?php echo ucfirst($time_span); ?> Active Schedules</h3>
              <p class="card-category">Only active schedules are displayed here.
              </p>
            </div>
            <div class="card-body">
			 <div class="row">
				<div class="col-md-4">
                        <a  class="btn btn-primary btn-block" href="schedules.php?time_span=historic" >Old Active Schedules [<?php echo $active_call_historic;?>]</a>
                </div>
				<div class="col-md-4">
                        <a class="btn btn-primary btn-block" href="schedules.php?time_span=today" >Today Active Schedules [<?php echo $active_call_today;?>]</a>
                </div>
				<div class="col-md-4">
                        <a class="btn btn-primary btn-block" href="schedules.php?time_span=future" >Future Active Schedules [<?php echo $active_call_future;?>]</a>
                </div>
			 </div>
			
              <div class="row">
				<div class="col-md-12">
				<div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
						<th>S.No.</th>
						<th>Name</th>
						<th>Role</th>
						<th>City</th>
						<th>Contact</th>
						<th>Schedule Call</th>
						<th>Comments</th>
						<th>Status</th>
						<th>Comments</th>
						<th>Action</th>
					  </thead>
					  <tbody>
                        
							<?php
							$i=0;
							if ($schedules !="NULL"){
							foreach ($schedules as $schedule) {
							$i++;
							echo "<tr><td>".$i."</td>";
							echo "<td><a href=display_lead.php?lead_id=".$schedule['lead_id'].">".$lead_class->lead_by_id($schedule['lead_id'])['name']."</a></td>";
							echo "<td>".$lead_class->lead_by_id($schedule['lead_id'])['role']."</td>";
							echo "<td>".$lead_class->lead_by_id($schedule['lead_id'])['city']."</td>";
							echo "<td>".$lead_class->lead_by_id($schedule['lead_id'])['contact']."</td>";
							echo "<td>".$schedule['schedule_call']."</td>";
							echo "<td>".$schedule['sc_comment']."</td>";
							echo "<td>".$lead_class->lead_status_final($schedule['lead_id'])['status']."</td>";
							echo "<td>".$schedule['st_comment']."</td>";
							echo "<td><a href=\"add_history_lead_1.php?lead_id=".$schedule['lead_id']."&response_id=".$schedule['id']."\" data-toggle=\"tooltip\" title=\"Mark this done.\"><i class=\"material-icons\">add_ic_call</i></a>&nbsp;<a href=\"approach_wa_2.php?name=".$lead_class->lead_by_id($schedule['lead_id'])['name']."&contact=".$lead_class->lead_by_id($schedule['lead_id'])['contact']."\" target=\"_blank\"><i class=\"fa fa-whatsapp\" aria-hidden=\"true\" style=\"font-size:1.5em\"></i></a></td>";							
							echo "</tr>";
							}
							}
							
							?>
                           
						
					  </tbody>
					</table>
				</div>
			  </div>
			 </div>
			</div>