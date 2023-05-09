<?php

class Task
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
    private string $status;
    private int $id_client;
    private int $id_executor;

    /**
     *
     * @param int $id_client
     */
    public function __construct(int $id_client)
    {
        $this->status = "Новое";
        $this->id_client = $id_client;
    }

    public function hello()
    {
        echo "Hello_World!";

    }



    public function getStatusMap()
    {
        print_r([
            self::STATUS_NEW => "Новое",
            self::STATUS_CANCEL => "Отменено",
            self::STATUS_IN_WORK => "В работе",
            self::STATUS_DONE => "Выполнено",
            self::STATUS_LOSS => "Провалено"
        ]);
    }

    public function getActionMap()
    {
        print_r([
            self::ACTION_CANCEL => "Отменить",
            self::ACTION_DENY => "Отказаться",
            self::ACTION_DONE => "Отметить выполненным",
            self::ACTION_RESPONSE => "Выполнено"
        ]);
    }

}