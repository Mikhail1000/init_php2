<?php

class Task
{
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

}