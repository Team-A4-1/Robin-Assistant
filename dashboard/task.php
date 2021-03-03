<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 01/03/2021
 * Time: 10:28
 */
include "../header/dashboard-header-sidebar.php";

?>
	<link rel="stylesheet" href="task.css" type="text/css">
	<div class="head">
	<h1 class="title">Taken</h1>
	<div class="crumb">   <div class="crumbs crumbhome"><i class="fas fa-home"></i> ></div>
		<div class="crumbs crumbsfirst">Taken</div>
	</div>
	</div>
<div class="main">
	<div class="user">
		<img src="../assets/mike-andrei-433.jpeg" alt="profile pic" class="profile user-image">
		<hr>
		<div class="name">Test gebruiker 1</div>
		<div class="age">19</div>
		<div class="gender">Man</div>

	</div>

	<div class="tasks">
		<?php
		require_once(__DIR__.'/taskHandling.php');
		$tasks = new taskHandling();
		$tasks->printTasks();
		?>
	</div>

</div>

<?php
include "../header/dashboard-footer.php";
