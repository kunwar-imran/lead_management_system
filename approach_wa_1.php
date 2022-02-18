<?php
require_once('head.php');
require_once('side_nav.php');
require_once('top_nav.php');

require_once('db.php');
require_once('functions.php');





?>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Approach on Whatsapp</h3>
              <p class="card-category">Whatsapp should be signed in.</p>
            </div>
            <div class="card-body">
			<form action="approach_wa_2.php" method="GET" role="form">
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
                          <input type="text" class="form-control" name="contact" required>
                    </div>				
				</div>
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