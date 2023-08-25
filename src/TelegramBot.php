<?php

namespace Mitokande\PhpTelegram;

class TelegramBot
{

    public string $TelegramBotToken;

    public function __construct(string $telegram_bot_token)
    {
        $this->TelegramBotToken = $telegram_bot_token;
    }


}