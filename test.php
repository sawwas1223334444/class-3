<?php

require_once __DIR__ . '/vendor/autoload.php';

use Karina\Repo\EmailNotification;
use Karina\Repo\SMSNotification;

// Пример с Email
$email = new EmailNotification();
echo $email->send("Привет - Email") . "\n";
echo "Тип: " . $email->getType() . "\n";
echo "Статус: " . $email->getStatus() . "\n\n";

// Пример с SMS
$sms = new SMSNotification();
echo $sms->send("Привет - SMS") . "\n";
echo "Тип: " . $sms->getType() . "\n";
echo "Статус: " . $sms->getStatus() . "\n";