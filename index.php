<?php
require_once __DIR__ . '/vendor/autoload.php';

use Mitokande\PhpTelegram\TelegramBot;
use Mitokande\PhpTelegram\TelegramMessage;


$bot = TelegramBot::GetInstance("6463429239:AAHa9DoyA5j0wAP8qN_MaMfXB3Ovq2sx9DE");

$newMessage = new TelegramMessage("500484561", "sTest Mesajı");
$return = $bot->SendTelegramMessage($newMessage);
if ($return->Sent) {
    echo '<h1 style="color:green">Message Sent</h1>';
} else {
    echo '<h1 style="color:red">Message Not Sent</h1>';
}