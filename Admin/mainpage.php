<?php require_once('header.php'); ?>

<section class="content-header">
	<h1>Dashboard</h1>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM doctor");
$statement->execute();
$total_doctor = $statement->rowCount();
//
$statement = $pdo->prepare("SELECT * FROM clinic");
$statement->execute();
$total_clinic = $statement->rowCount();
//
$statement = $pdo->prepare("SELECT * FROM signup");
$statement->execute();
$total_user = $statement->rowCount();
//
$statement = $pdo->prepare("SELECT * FROM manager");
$statement->execute();
$total_manager = $statement->rowCount();
//
//$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=?");
//$statement->execute(array('Completed'));
//$total_order_completed = $statement->rowCount();
//
//$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE shipping_status=?");
//$statement->execute(array('Completed'));
//$total_shipping_completed = $statement->rowCount();
//
//$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=?");
//$statement->execute(array('Pending'));
//$total_order_pending = $statement->rowCount();
//
//$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=? AND shipping_status=?");
//$statement->execute(array('Completed','Pending'));
//$total_order_complete_shipping_pending = $statement->rowCount();
?>

<section class="content">
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Total Doctors</span>
					<span class="info-box-number"> <?php echo $total_doctor; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Total Clinic</span>
					<span class="info-box-number"><?php echo $total_clinic; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-olive"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Total Managers</span>
					<span class="info-box-number"><?php echo $total_manager; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-purple"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Total Users</span>
					<span class="info-box-number"><?php echo $total_user; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text"> Todays Appointments</span>
					<span class="info-box-number"><?php echo $total_order_completed; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">All Appointments</span>
					<span class="info-box-number"><?php echo $total_shipping_completed; ?></span>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php require_once('footer.php'); ?>