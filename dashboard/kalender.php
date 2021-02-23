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

		$task =  '{
	"task": {
	"name": "task1",
	"duration":120,
	"subtasks": [
	        {"time": "9:00","name": "subtask1","duration":60},
	        {"time": "10:00","name": "subtask2","duration":60}
	    ]
	  }
	}'
		;
		$tasks = json_decode($task);
		for($i=0;$i<31;$i++){
			$Maintask=$tasks->task->name;
			$sub=$tasks->task->subtasks;

			echo "<div class='date $i'><div class='dateText'>$i</div> ";


			echo "<div class='task'>$Maintask</div>";
			for($j=0;$j<sizeof($sub);$j++){


				echo "<div class='subtask'>
          <div class='subtask time'>".$sub[$j]->time."</div> ".
				     "<div class='subtask name'>".$sub[$j]->name."</div>"
				     ."</div>";
			}
			echo"</div>";
		}
		?>
    </div>
<?php
include "../header/dashboard-footer.php";
