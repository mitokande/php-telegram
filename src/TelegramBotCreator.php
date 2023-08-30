<?php

namespace Mitokande\PhpTelegram;

class TelegramBotCreator
{

    public static $TelegramBot;
    public static function SetTelegramBot($token): TelegramBot
    {
        self::$TelegramBot = new TelegramBot($token);
        return self::$TelegramBot;
    }
}