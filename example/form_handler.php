<?php

use CleanTalkCheck\CleanTalkCheck;
require_once '../src/autoload.php';

$cleanTalkCheck = new CleanTalkCheck('a3asa2aby9azazy');
$verdict = $cleanTalkCheck
    ->setEventToken($_POST[$cleanTalkCheck::EVENT_TOKEN_FIELD_NAME]) //obligatory
    ->setFormStartTime($_POST[$cleanTalkCheck::FORM_START_TIME_FIELD_NAME]) //obligatory
    ->setIP() //obligatory
//    ->setEmail($_POST['email']) //optional
//    ->setNickName($_POST['username']) //optional
//    ->setMessage($_POST['message']) //optional
//    ->useContactFormCheck() //optional
//    ->setDoBlockNoJSVisitor() //optional
    ->getVerdict();

//debug
$cleanTalkCheck->whatsWrong();

if (!$verdict->error) {
    if (!$verdict->allowed) {
        die('Message blocked: ' . $verdict->comment);
    }
}



die('Message sent');
//or anything you want to do
