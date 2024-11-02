<?php
header('Content-Type: application/json');
$token = '7415097887:AAG8k5yBdFnwnB5TEFARWxTcraDi9rpbRF4';
$chat_id = '-1002379707457';

echo json_encode([
    'TOKEN' => $token,
    'ID' => $chat_id,
    'URL' => "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text="
]);
