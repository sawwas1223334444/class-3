<?php

namespace Karina\Repo;

class EmailNotification extends AbstractNotification
{
    public function send(string $message): string
    {
        $this->status = 'sent';
        return "Email sent: $message";
    }

    public function getType(): string
    {
        return 'Email';
    }
}