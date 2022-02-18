<?php
require_once('head.php');
require_once('side_nav.php');
require_once('top_nav.php');

require_once('db.php');
require_once('functions.php');
$lead_class = new leads;

$total_lead_count = 0;
$interested_count = 0;
$price_negotiating_count = 0;
$converted_count = 0;

if($lead_class->leads_all() != "NULL")
$total_lead_count = count($lead_class->leads_all());

if($lead_class->search_lead('', '', '', 'interested', '', '', '', '') != "NULL")
$interested_count = count($lead_class->search_lead('', '', '', 'interested', '', '', '', ''));

if($lead_class->search_lead('', '', '', 'Price Negotiating', '', '', '', '') != "NULL")
$price_negotiating_count = count($lead_class->search_lead('', '', '', 'Price Negotiating', '', '', '', ''));

if($lead_class->search_lead('', '', '', 'converted', '', '', '', '') != "NULL")
$converted_count = count($lead_class->search_lead('', '', '', 'converted', '', '', '', ''));


?>

      <div class="content">
        <div class="container-fluid">
		  <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Total Leads</p>
                  <h3 class="card-title"><?php echo $total_lead_count; ?>
                    <small>So far.</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">supervisor_account</i>
                    <a href="add_lead.php">Add More Leads</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Interested</p>
                  <h3 class="card-title"><?php echo $interested_count; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Shown interest. 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">thumb_up</i>
                  </div>
                  <p class="card-category">Lead Converted</p>
                  <h3 class="card-title"><?php echo $converted_count;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Successfully converted. 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Negotiating</p>
                  <h3 class="card-title"><?php echo $price_negotiating_count;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  <?php require_once('schedules_part.php');?>
		  
		</div>
	</div>


<?php
require_once('footer.php');
require_once('bottom_fixed.php');

?>