<?php

namespace Mitokande\PhpTelegram;

use Mitokande\PhpTelegram\TelegramMessage;

class TelegramBot
{

    private static $instance;

    public string $TelegramBotToken;

    public function __construct(string $telegram_bot_token)
    {
        $this->TelegramBotToken = $telegram_bot_token;
    }

    public function SendTelegramMessage(TelegramMessage $telegram_message): TelegramMessageResult
    {
        $apiUrl = "https://api.telegram.org/bot" . $this->TelegramBotToken . "/sendMessage";
        $data = array(
            'chat_id' => $telegram_message->chatID,
            'text' => $telegram_message->MessageText,
        );
        $options = array(
            'http' => array(
                'method' => 'POST',
                'content' => http_build_query($data),
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($apiUrl, false, $context);

        if ($result === false) {
            return new TelegramMessageResult($telegram_message, "Error Could Not Send The Message", false);
        } else {
            return new TelegramMessageResult($telegram_message, "Message Sent Successfuly", true);
        }
    }

    public static function GetInstance()
    {

        if (!isset(self::$instance)) {
            self::$instance = new TelegramBot($_ENV['TelegramToken']);
        }
        return self::$instance;
    }

}