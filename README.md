# textlk-php

# Text.lk SMS Gateway Sri Lanka - PHP SDK

[![Latest Stable Version](https://poser.pugx.org/textlk/textlk-php/v/stable)](https://packagist.org/packages/textlk/textlk-php)
[![Total Downloads](https://poser.pugx.org/textlk/textlk-php/downloads)](https://packagist.org/packages/textlk/textlk-php)
[![Latest Unstable Version](https://poser.pugx.org/textlk/textlk-php/v/unstable)](https://packagist.org/packages/textlk/textlk-php)
[![License](https://poser.pugx.org/textlk/textlk-php/license)](https://packagist.org/packages/textlk/textlk-php)

It is a PHP package that will serve as a gateway to communicate with Text.lk REST APIs.

# Usage

## Laravel

```php
    public function toTextlk($notifiable)
    {
        return (new TextLK\SMS\TextLKSMSMessage)
            ->recipient($notifiable->country_phonecode . $notifiable->mobile) // or have multiple numbers: "recipient" => "+9476000000,+9476111000"
            ->message($this->message)
            ->apiKey() // optional. TEXTLK_SMS_API_KEY can be added in .env
            ->senderId() // optional. TEXTLK_SMS_SENDER_ID can be added in .env
            ->scheduleTime(); optional. // "2021-12-20T07:00:00Z"
    }
