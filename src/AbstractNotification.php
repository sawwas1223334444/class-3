<?php

namespace Karina\Repo;

abstract class AbstractNotification implements Notification
{
    protected string $status = 'pending';
    
    public function getStatus(): string
    {
        return $this->status;
    }
    
    abstract public function send(string $message): string;
    abstract public function getType(): string;
}