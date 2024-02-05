<?php
$messages = json_decode(file_get_contents('php://input'), true);
file_put_contents('messages.json', json_encode($messages));
?>
