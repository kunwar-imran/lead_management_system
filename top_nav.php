<?php
require_once('db.php');
require_once('functions.php');
$lead_class_head = new leads;
$date_utc_head = date('Y-m-d H:i:s');
$indian_time_head = $lead_class_head->indian_time($date_utc_head);

$active_call_today = 0;
$active_call_historic = 0;
$active_call_future = 0;
if ($lead_class_head->lead_schedule($indian_time_head['date_sql'], 'today') != "NULL") $active_call_today = count( $lead_class_head->lead_schedule($indian_time_head['date_sql'], 'today'));
if($lead_class_head->lead_schedule($indian_time_head['date_sql'], 'historic') != "NULL") $active_call_historic = count( $lead_class_head->lead_schedule($indian_time_head['date_sql'], 'historic'));
if($lead_class_head->lead_schedule($indian_time_head['date_sql'], 'future') != "NULL") $active_call_future = count( $lead_class_head->lead_schedule($indian_time_head['date_sql'], 'future'));

$total_call_to_show = $active_call_today + $active_call_historic;

?>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="index_2.php">Lead Managment System</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!--
			<form class="navbar-form">
              <div class="input-group no-border">			  
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
			-->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index_2.php" data-toggle="tooltip" title="Dashboard">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" title="Notifications">
                  <i class="material-icons">notifications</i>
                  <span class="notification"><?php echo $total_call_to_show;?></span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="schedules.php?time_span=historic">Missed Scheduled Calls - <?php echo $active_call_historic;?></a>
                  <a class="dropdown-item" href="schedules.php?time_span=today">Today's Scheduled Calls - <?php echo $active_call_today;?></a>
                  <a class="dropdown-item" href="schedules.php?time_span=future">Upcoming Scheduled Calls - <?php echo $active_call_future;?></a>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" title="Admin User">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="log_out.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->