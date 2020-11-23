<?php



require "vendor/autoload.php";

$access_token = 'tg3ul2zoeExQRu3WyyyTRQd0mCXZ7L9cCIlbCXV8Ov16XI2ufyt2FjP/HNhF3NhAiWE+csTRZmxe9bnggvT5DCGw/eezuYA8SKu1pgu1NfesWpvkQxfYogpaxU9PKgsPNpKavbXuQCrMqPl2xSBEmQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8e12c625670c0b6bd0eed3942494169a';

$pushID = 'U2947c469fd8429f2ab326d98a5308d97';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดี ยินดีต้อนรับท่านสู่ ระบบปรึกษาทางการแพทย์ โรงพยาบาลธัญญารักษ์ ขอนแก่น');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







