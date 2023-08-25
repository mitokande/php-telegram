<?php
require_once __DIR__ . '/vendor/autoload.php';

use Mitokande\PhpTelegram\TelegramBot;
use Mitokande\PhpTelegram\TelegramMessage;



$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$bot = TelegramBot::GetInstance();

$newMessage = new TelegramMessage("500484561", "Test Mesajı");
$return = $bot->SendTelegramMessage($newMessage);
if ($return->Sent) {
    echo '<h1 style="color:green">Message Sent</h1>';
} else {
    echo '<h1 style="color:red">Message Not Sent</h1>';
}