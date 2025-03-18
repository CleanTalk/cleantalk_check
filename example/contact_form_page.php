<?php
use CleanTalkCheck\CleanTalkCheck;
require_once('../src/autoload.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Contact Us</h2>
    <form method="post" action="form_handler.php">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="username" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" class="form-control" id="message" name="message"  placeholder="Enter your message">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo CleanTalkCheck::getFrontendHTMLCode()?>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
</body>
</html>
