<?php
require_once('head.php');
require_once('side_nav.php');
require_once('top_nav.php');
$title = $_GET['title'];
$message_subject = $_GET['message_subject'];
$message = $_GET['message'];

?>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title"><?php echo $title;?></h3>
              <p class="card-category">
                <?php echo $message_subject;?>
				</p>
            </div>
            <div class="card-body">
              <div class="row">
				<div class="col-md-12">
				<?php echo $message;?>
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