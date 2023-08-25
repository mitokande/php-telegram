<?php

namespace Mitokande\PhpTelegram;

class TelegramMessageResult
{
    public TelegramMessage $TelegramMessage;
    public string $status;

    public function __construct(TelegramMessage $telegram_message, string $status)
    {
        $this->TelegramMessage = $telegram_message;
        $this->status = $status;
    }
}