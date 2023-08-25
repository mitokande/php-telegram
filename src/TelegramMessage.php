<?php

namespace Mitokande\PhpTelegram;

class TelegramMessage
{
    public string $chatID;

    public string $MessageText;

    public function __construct(string $chat_id, string $message_text)
    {
        $this->chatID = $chat_id;
        $this->MessageText = $message_text;
    }
}