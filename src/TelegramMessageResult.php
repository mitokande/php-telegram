<?php

namespace Mitokande\PhpTelegram;

class TelegramMessageResult
{
    public TelegramMessage $TelegramMessage;
    public string $status;
    public bool $Sent;

    public function __construct(TelegramMessage $telegram_message, string $status, bool $sent)
    {
        $this->TelegramMessage = $telegram_message;
        $this->status = $status;
        $this->Sent = $sent;
    }
}