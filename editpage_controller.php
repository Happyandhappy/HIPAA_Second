<?php
include('layout/header.php');
if (!isset($_SESSION['user']) || !isset($_SESSION['api'])){
    header("Location: login.php");
    exit();
}

$type = "";
$action = "edit";
$id = "";
$api = $_SESSION['api'];
if ( isset($_GET['type'])) $type = $_GET['type'];
if ( isset($_GET['action'])) $action = $_GET['action'];
if ( isset($_GET['id'])) $id = $_GET['id'];
?>

	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		
		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
						<li class="m-nav__item m-nav__item--home">
							<a href="dashboard.php" class="m-nav__link m-nav__link--icon">
								<i class="m-nav__link-icon la la-home"></i>
							</a>
						</li>
						<li class="m-nav__separator">-</li>
						<li class="m-nav__item">
							<a href="itemspage_controller.php?type=<?php echo $type;?>" class="m-nav__link">
								<span class="m-nav__link-text"><?php echo title($type); ?></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include("layout/pages/device_registry.php");?>
	</div>	
<?php include('layout/footer.php'); ?>

