<?php

namespace App;

class Seat
{
    const STATUS_AVAILABLE = 0;
    const STATUS_TAKEN = 1;
    const STATUS_RESERVED = 2;

    private $status;

    public function __construct(int $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}