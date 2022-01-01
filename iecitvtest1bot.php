$access_token = '5055609442:AAFVfPcLSqZc-uGB1hdZ8CmDSjbLnMPQ6OU';
$api = 'https://api.telegram.org/bot' . $access_token;
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$message = $output['message']['text'];
switch($message) {
case '/start':
sendMessage($chat_id, "Ваш cID" . $chat_id);
break;
}
function sendMessage($chat_id, $message) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
}