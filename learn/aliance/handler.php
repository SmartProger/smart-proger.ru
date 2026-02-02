<?php
$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['userphone']);

$token = '8254653007:AAHXuB48bnm_wr6guLzDgM85eQvF9yQHkzM';
$chat_id = '-5227993775';

$form_data = [
	"Клиент: " => $user_name,
	"Телефон: " => $user_phone
];

$text = '';

foreach ($form_data as $key => $value) {
	$text .= $key . "<b>". urlencode($value) . "</b>" . "%0A";
}

$send_to_tg = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($send_to_tg) {
	echo "success";
} else {
	echo "error";
}



?>