# textlk-php

# Text.lk SMS Gateway Sri Lanka - PHP SDK

[![Latest Stable Version](https://poser.pugx.org/textlk/textlk-php/v/stable)](https://packagist.org/packages/textlk/textlk-php)
[![Total Downloads](https://poser.pugx.org/textlk/textlk-php/downloads)](https://packagist.org/packages/textlk/textlk-php)
[![Latest Unstable Version](https://poser.pugx.org/textlk/textlk-php/v/unstable)](https://packagist.org/packages/textlk/textlk-php)
[![License](https://poser.pugx.org/textlk/textlk-php/license)](https://packagist.org/packages/textlk/textlk-php)

It is a PHP package that will serve as a gateway to communicate with Text.lk REST APIs.

## Installation

```bash
composer require textlk/textlk-php
```

# Pure PHP

```php
use TextLK\SMS\TextLKSMSMessage;

$textLKSMS = new TextLKSMSMessage();

$textLKSMS
    ->recipient("94712345678") // Replace with the recipient's phone number.
    ->message("Hello, this is a test message.")
    ->senderId("YOUR_SENDER_ID") // (optional) TEXTLK_SMS_SENDER_ID can be added in .env
    ->apiKey('YOUR_API_KEY_HERE') // (optional) TEXTLK_SMS_API_KEY can be added in .env

$textLKSMS->send();
```

# Laravel

```php
public function toTextlk($notifiable)
{
    return (new \TextLK\SMS\TextLKSMSMessage)
        ->recipient("94712345678") // Replace with the recipient's phone number.
        ->message('Hello, this is a test message.')
        ->senderId('YOUR_SENDER_ID') // optional. TEXTLK_SMS_SENDER_ID can be added in .env
        ->apiKey('YOUR_API_KEY_HERE'); // optional. TEXTLK_SMS_API_KEY can be added in .env
}
```


