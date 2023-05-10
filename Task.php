<?php
require_once "InterfaceTask.php";

class Task implements InterfaceTask
{

    private string $status;
    private int $id_client;
    private int $id_executor;

    /**
     *
     * @param int $id_client
     * @param int $id_executor
     */
    public function __construct(int $id_client, int $id_executor)
    {
        $this->status = "Новое";
        $this->id_client = $id_client;
        $this->id_executor = $id_executor;
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

    /**
     * @param string $action
     * @return string|void
     */
    public function getStatusForAction(string $action)
    {
        switch ($action)
        {
            case self::ACTION_CANCEL:
                return self::STATUS_CANCEL;
            case self::ACTION_RESPONSE:
                return self::STATUS_IN_WORK;
            case self::ACTION_DONE:
                return self::STATUS_DONE;
            case self::ACTION_DENY:
                return self::STATUS_LOSS;
        }
    }

    /**
     * @param $status
     * @return array|string[]|void
     */
    public function getAvailableActions($status): array
    {
        switch ($status)
        {
            case self::STATUS_DONE:
                return [];
            case self::STATUS_CANCEL:
                return [];
            case self::STATUS_NEW:
                return [self::ACTION_CANCEL, self::ACTION_RESPONSE];
            case self::STATUS_IN_WORK:
                return [self::ACTION_DONE, self::ACTION_DENY];
            case self::STATUS_LOSS:
                return [];
        }
    }
}