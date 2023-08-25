<?php

namespace Mitokande\PhpTelegram;

class TelegramMessage
{
    public string $chatID;

    public string $TelegramMessage;

    public function __construct(string $chat_id, string $telegram_message)
    {
        $this->chatID = $chat_id;
        $this->TelegramMessage = $telegram_message;
    }
}