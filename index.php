<?php
define('184071970:AAHSHLX5DBl9rp6vOGD-NUnZkdrR5B1yOXM');
$channel = '@Divonekhoneh_fun';
$update = json_decode(urldecode(file_get_contents('php://input')));
$chat_id = $update->message->chat->id;
$name = $update->message->from->first_name;
$text = $update->message->text;
$msg_id = $update->message->message_id;
define('API_TELEGRAM','https://api.telegram.org/bot'.BOT_TOKEN.'/');
if ($text == '/start') {file_get_contents(API_TELEGRAM.'sendChatAction?chat_id='.$chat_id.'&action=typing'); file_get_contents(API_TELEGRAM.'sendMessage?chat_id='.$chat_id.'&text=Hello '.$name.'  please send message');}
else {$to_channel = json_decode(urldecode(file_get_contents(API_TELEGRAM.'forwardMessage?chat_id='.$channel.'&from_chat_id='.$chat_id.'&message_id='.$msg_id)))->result->message_id; file_get_contents(API_TELEGRAM.'forwardMessage?chat_id='.$chat_id.'&from_chat_id='.$channel.'&message_id='.$to_channel);}
?>
