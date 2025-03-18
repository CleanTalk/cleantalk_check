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
```

### Methods
* `__construct($accessKey)`: Initializes the class with an access key.
* `getVerdict()`: Verifies data, sends a request to CleanTalk, and returns the verdict.
* `setEmail($email)`: Sets the email parameter.
* `setNickName($nickname)`: Sets the nickname parameter.
* `setMessage($message)`: Sets the message parameter.
* `setIP($ip = null)`: Sets the IP address parameter.
* `setDoBlockNoJSVisitor()`: Enables blocking of visitors without JavaScript.
* `setEventToken($event_token = null)`: Sets the event token parameter.
* `useRegistrationCheck()`: Sets the method to check new user registration.
* `useContactFormCheck()`: Sets the method to check contact form submissions.
* `getFrontendHTMLCode($warn_if_js_disabled = true)`: Returns HTML code to include the CleanTalk bot detector script.
* `whatsWrong($return_as_json = false)`: Returns suggestions for improving the data quality.

### License
This project is licensed under the MIT License.
