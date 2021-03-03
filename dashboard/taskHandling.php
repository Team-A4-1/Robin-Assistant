<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 01/03/2021
 * Time: 12:19
 */

class taskHandling {






	function printTasks($date = false,$subtasks=false,$time=false,$task ='{
	"task": {
	"name": "task1",
	"duration":120,
	"subtasks": [
	        {"time": "9:00","name": "subtask1","duration":60},
	        {"time": "10:00","name": "subtask2","duration":60}
	    ]
	  }
	}'){


		$tasks = json_decode($task);
		for($i=1;$i<31;$i++){
			$Maintask=$tasks->task->name;
			$sub=$tasks->task->subtasks;
			if($date) {
			echo "<div class='date $i'><div class='dateText'>$i</div> ";
			}

			echo "<div class='task'><a href='task.php'>$Maintask</a></div>";

			if($subtasks) {
				for ( $j = 0; $j < sizeof( $sub ); $j ++ ) {


					echo "<div class='subtask'>";
					if($time) {
						echo "<div class='subtask time'>" . $sub[ $j ]->time . "</div> ";
					}
					 echo    "<div class='subtask name'>" . $sub[ $j ]->name . "</div>"
					     . "</div>";
				}
				echo"</div>";
			}

		}
	}



}