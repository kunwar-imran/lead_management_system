<?php

$name = trim($_GET['name']);
$contact = trim($_GET['contact']);

require_once('head.php');
require_once('side_nav.php');
require_once('top_nav.php');

require_once('db.php');
require_once('functions.php');

$lead_class = new leads;

$wa_templates_all = $lead_class->wa_templates_all();

//var_dump($wa_templates_all);

?>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Approach on Whatsapp</h3>
              <p class="card-category">Whatsapp should be signed in.</p>
            </div>
            <div class="card-body">
			<form action="approach_wa_3.php" method="GET" role="form" target="_blank" >
              <div class="row">
				<div class="col-md-6">
					<div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="<?php  echo $name; ?>" readonly>
                    </div>
				</div>
				<div class="col-md-6">	
					<div class="form-group">
                          <label class="bmd-label-floating">Contact - 10 digits only.</label>
                          <input type="text" class="form-control" name="contact" required value="<?php  echo $contact; ?>" readonly>
                    </div>				
				</div>
			  </div>
			  
			  <div class="row">
				
					<?php
					foreach ($wa_templates_all as $wa_template){
					echo "<div class=\"col-md-12\">";
					echo "<div class=\"form-group\">						
							<input class=\"form-group-input\" type=\"radio\" name=\"wa_template\" id=\"wa_template".$wa_template['id']."\" value=\"".$wa_template['id']."\" required>	
							<label class=\"bmd-label-floating\" for=\"wa_template".$wa_template['id']."\">".$wa_template['prefix']." $name<br>" .$lead_class->makeBoldText($wa_template['content'])."<br>".$lead_class->makeBoldText($wa_template['suffix'])."	
							<hr>
							</label>
						</div>
						</div>";
					}
					?>
								
			  </div>
			  
			   <button type="submit" class="btn btn-primary pull-right">Contact</button>
                
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