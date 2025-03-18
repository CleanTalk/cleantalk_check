# CleanTalkCheck

The `CleanTalkCheck` class is designed to interact with the CleanTalk API to check for spam and other unwanted content. It provides methods to set various parameters, send a request to the CleanTalk server, and retrieve a verdict.

## Requirements

- PHP
- Composer
- JSON extension for PHP

## Installation

1. Clone the repository or download the source code.
2. Install the required dependencies using Composer:

    ```sh
    composer install
    ```

## Usage

### Example Usage

Here is an example of how to use the `CleanTalkCheck` class in a form handler:

```php
<?php

require_once '../autoload.php';

$cleanTalkCheck = new CleanTalkCheck\CleanTalkCheck('your_access_key');
$verdict = $cleanTalkCheck
    ->setEventToken($_POST[$cleanTalkCheck::EVENT_TOKEN_FIELD_NAME])
    ->setFormStartTime($_POST[$cleanTalkCheck::FORM_START_TIME_FIELD_NAME])
    ->setIP()
    ->setEmail($_POST['email'])
    ->setNickName($_POST['username'])
    ->setMessage($_POST['message'])
    ->useContactFormCheck()
    ->setDoBlockNoJSVisitor()
    ->getVerdict();

if (!$verdict->error) {
    if (!$verdict->allowed) {
        die('Message blocked: ' . $verdict->comment);
    }
}

die('Message sent');
