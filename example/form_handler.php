<?php

use CleanTalkCheck\CleanTalkCheck;
require_once '../src/autoload.php';

$cleanTalkCheck = new CleanTalkCheck('your_api_key');
$verdict = $cleanTalkCheck->getVerdict();

$cleanTalkCheck->whatsWrong();

if (!$verdict->allowed) {
    die('Message blocked: ' . $verdict->comment);
}

die('Message sent');
//or anything you want to do
