#PHP TELEGRAM By Mithat Can Turan

First import my package with composer 
```
composer require mitokande/php-telegram
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
Keep in mind that any use that you want to send a message must have started a conversation with your bot
Create a Telegram Message with a chatID and Message Content
```php
$newMessage = new TelegramMessage(__Your_ChatID__, __Your_Message__);
```
Send the message with your bot and get TelegramMessageResult
```php
$result = $bot->SendTelegramMessage($newMessage);
```
