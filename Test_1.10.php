<?php
require_once "vendor/autoload.php";

use taskforce\business\Task;

$task1 = new Task(1, 2);

$task1 ->getStatusMap();
$task1 ->getActionMap();

echo $task1 ->getStatusForAction($task1::ACTION_CANCEL);
print_r($task1 ->getAvailableActions($task1::STATUS_NEW));

assert($task1 ->getStatusForAction($task1::ACTION_CANCEL) == $task1::STATUS_CANCEL, "Утверждение неверно");

assert($task1 ->getAvailableActions($task1::STATUS_NEW) == [$task1::ACTION_CANCEL, $task1::ACTION_RESPONSE], "Утверждение неверно");