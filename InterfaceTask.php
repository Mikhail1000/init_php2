<?php

interface InterfaceTask
{
    const STATUS_NEW = 'new';
    const STATUS_CANCEL = 'canceled';
    const STATUS_IN_WORK = 'in_work';
    const STATUS_DONE = 'done';
    const STATUS_LOSS = 'loss';
    const ACTION_CANCEL = 'action_cancel';
    const ACTION_RESPONSE = 'action_response';
    const ACTION_DONE = 'action_done';
    const ACTION_DENY = 'action_deny';

    public function getStatusMap();
    public function getActionMap();
    public function getStatusForAction(string $action);
    public function getAvailableActions($status): array;
}