<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 18/02/2021
 * Time: 14:19
 */
include "../header/dashboard-header-sidebar.php";
?>
    <link rel="stylesheet" href="kalender.css" />
    <div class="head">
        <h1 class="title">Kalender</h1>
        <div class="crumb">   <div class="crumbs crumbhome"><i class="fas fa-home"></i> ></div>
            <div class="crumbs crumbsfirst">Kalender</div>
        </div>
    </div>
    <div class="calender">
		<?php
		require_once(__DIR__.'/taskHandling.php');
        $tasks = new taskHandling();
        $tasks->printTasks(true,true,true);

		?>
    </div>
<?php
include "../header/dashboard-footer.php";
