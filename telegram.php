<?php

/* https://api.telegram.org/bot1108652548:AAG9gRaY8ENpPW4Uhat5FO5NVotgl4Pt1ms/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "1108652548:AAG9gRaY8ENpPW4Uhat5FO5NVotgl4Pt1ms";
$chat_id = "-412862564";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
	header('Location: thank-you.html');
} else {
  echo "Error";
}
?>