#PHP TELEGRAM By Mithat Can Turan

V1.0.2

What's new?

-Now you can create your bot with TelegramBotCreator Class. 

-Added sending multiple message functionality to TelegramBot Class.

First import my package with composer 
```
composer require mitokande/php-telegram
```
```php
use Mitokande\PhpTelegram\TelegramBotCreator;
use Mitokande\PhpTelegram\TelegramMessage;

TelegramBotCreator::SetTelegramBot(__Your_Token__);
TelegramBotCreator::$TelegramBot->SendTelegramMessage(new TelegramMessage(__RECEIVER_CHAT_ID__, __YOUR_MESSAGE_));
```
For sending a message to multiple users at once:
```php
use Mitokande\PhpTelegram\TelegramBotCreator;
use Mitokande\PhpTelegram\TelegramMessage;

TelegramBotCreator::SetTelegramBot(__Your_Token__);
TelegramBotCreator::$TelegramBot->SendMultipleTelegramMessage(__ARRAY_OF_CHAT_ID_STRINGS__, __YOUR_MESSAGE__);
```

If you were to use it in a class you can create your bot in the construct of your class and just use the static bot variable inside it in all of your methods.
```php
use Mitokande\PhpTelegram\TelegramBotCreator;
use Mitokande\PhpTelegram\TelegramMessage;
use Mitokande\PhpTelegram\TelegramMessageResult;

class TelegramMessager
{
    public function __construct()
    {
        TelegramBotCreator::SetTelegramBot(__Your_Token__);
    }

    public function SendWelcomeMessage($chat_id): TelegramMessageResult
    {
        $bot = TelegramBotCreator::$TelegramBot;
        return $bot->SendTelegramMessage(new TelegramMessage($chat_id, __WELCOME_MESSAGE_FOR_USERS__));
    }
    public function SendPingMessage($chat_id): TelegramMessageResult
    {
        return TelegramBotCreator::$TelegramBot->SendTelegramMessage(new TelegramMessage(__RECEIVER_CHAT_ID__, __YOUR_MESSAGE_));
    }
    public function SendMultiplePingMessage($chat_id_list): TelegramMessageResult
    {
        return TelegramBotCreator::$TelegramBot->SendMultipleTelegramMessage($chat_id_list, __YOUR_MESSAGE_));
    }
}

```

V1.0.1
First import my package with composer 
```
composer require mitokande/php-telegram@1.0.2
```
Than in your code import the required classes
```php
use Mitokande\PhpTelegram\TelegramBot;
use Mitokande\PhpTelegram\TelegramMessage;
```
Create a Telegram Bot Instance with your Token

```php
$bot = TelegramBot::GetInstance(__Your_Token__);
```
Keep in mind that any user that you want to send a message must have started a conversation with your bot
Create a Telegram Message with a chatID and Message Content
```php
$newMessage = new TelegramMessage(__Your_ChatID__, __Your_Message__);
```
Send the message with your bot and get TelegramMessageResult
```php
$result = $bot->SendTelegramMessage($newMessage);
```
