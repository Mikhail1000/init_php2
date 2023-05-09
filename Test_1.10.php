<?php
require_once "Task.php";
$task1 = new Task(1, 2);

$task1 ->getStatusMap();
$task1 ->getActionMap();

echo $task1 ->getStatusForAction($task1::ACTION_CANCEL);
print_r($task1 ->getAvailableActions($task1::STATUS_NEW));

