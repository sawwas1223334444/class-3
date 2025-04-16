<?php

namespace Karina\Repo;

class SMSNotification extends AbstractNotification
{
    public function send(string $message): string
    {
        $this->status = 'sent';
        return "SMS sent: $message";
    }

    public function getType(): string
    {
        return 'SMS';
    }
}